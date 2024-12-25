<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class PaymentController extends Controller
{
    /**
     * Hàm gửi POST request tới endpoint của MoMo
     */
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        $result = curl_exec($ch);

        // Ghi log phản hồi từ MoMo để kiểm tra
        error_log("MoMo Response: " . $result);

        if (curl_errno($ch)) {
            error_log('Curl error: ' . curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }

    /**
     * Xử lý thanh toán qua MoMo
     */
    public function momoPayment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        // Thông tin thanh toán MoMo
        $partnerCode = "MOMOBKUN20180529";
        $accessKey = "klm05TvNBzhg7h7j";
        $secretKey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
        $orderInfo = "Thanh toán qua ATM MoMo";

        // Lấy danh sách sản phẩm đã được tích chọn
        $selectedItems = explode(',', $request->input('selectedItems', ''));

        // Lưu selectedItems vào session để sử dụng sau khi callback
        session(['selectedItems' => $selectedItems]);

        // Tính tổng tiền của các sản phẩm đã chọn
        $amount = $this->calculateTotalAmount($selectedItems);

        if ($amount == 0) {
            return redirect()->back()->with('error', 'Bạn chưa chọn sản phẩm nào để thanh toán.');
        }

        // Chuyển đổi `amount` thành chuỗi
        $amount = strval($amount);

        $orderId = time() . ""; // Tạo mã đơn hàng duy nhất
        $redirectUrl = route('payment.callback'); // URL trả về sau khi thanh toán
        $ipnUrl = "http://127.0.0.1:8000/order-history"; // URL để nhận thông báo từ MoMo
        $bankCode = "SML";
        $requestId = time() . "";
        $requestType = "payWithATM";
        $extraData = ""; // Thông tin thêm

        // Chuỗi để tạo chữ ký
        $rawHash = "accessKey=" . $accessKey . 
                    "&amount=" . $amount . 
                    "&extraData=" . $extraData . 
                    "&ipnUrl=" . $ipnUrl . 
                    "&orderId=" . $orderId . 
                    "&orderInfo=" . $orderInfo . 
                    "&partnerCode=" . $partnerCode . 
                    "&redirectUrl=" . $redirectUrl . 
                    "&requestId=" . $requestId . 
                    "&requestType=" . $requestType;

        // Tạo chữ ký
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        // Dữ liệu gửi đi
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        // Gửi request tới MoMo
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        // Kiểm tra kết quả từ MoMo
        if (isset($jsonResult['payUrl'])) {
            return redirect()->away($jsonResult['payUrl']); // Điều hướng tới trang thanh toán MoMo
        } else {
            // Xử lý lỗi nếu có
            error_log(print_r($jsonResult, true));
            dd("Lỗi xảy ra: " . print_r($jsonResult, true));
        }
    }

    private function calculateTotalAmount($selectedItems)
    {
        // Lấy các sản phẩm trong giỏ hàng của người dùng hiện tại với các product_id được chọn
        $cartItems = Cart::where('user_id', auth()->id())
            ->whereIn('product_id', $selectedItems)
            ->get();

        $amount = 0;

        foreach ($cartItems as $cartItem) {
            $price = $cartItem->product->sale > 0 ?
                $cartItem->product->price - ($cartItem->product->price * $cartItem->product->sale / 100) :
                $cartItem->product->price;
            $amount += $cartItem->quantity * $price;
        }

        if (count($selectedItems) > 0) {
            $amount += 30000; // Phí vận chuyển
        }

        return $amount;
    }

    /**
     * Callback sau khi thanh toán thành công
     */
    public function paymentCallback(Request $request)
    {
        // Nhận thông tin từ MoMo
        $orderId = $request->query('orderId');
        $amount = $request->query('amount');
        $status = $request->query('resultCode'); // MoMo trả về kết quả thanh toán

        // Kiểm tra thanh toán thành công
        if ($status == 0) {
            // Tạo đơn hàng mới trong hệ thống
            $order = new Order();
            $order->user_id = auth()->id();
            $order->order_number = $orderId;
            $order->total_amount = $amount;
            $order->status = 'pending'; // Đánh dấu đơn hàng là đã thanh toán
            $order->payment_method = 'MoMo';
            $order->save();

            // Lấy lại các product_id đã được chọn từ session
            $selectedItems = session('selectedItems', []);

            if (empty($selectedItems)) {
                return redirect()->route('orders.history')->with('error', 'Không có sản phẩm nào được chọn để thanh toán.');
            }

            // Lấy các sản phẩm đã tích chọn trong giỏ hàng theo `product_id`
            $cartItems = Cart::where('user_id', auth()->id())
                ->whereIn('product_id', $selectedItems)
                ->get();

            if ($cartItems->isEmpty()) {
                return redirect()->route('orders.history')->with('error', 'Không tìm thấy sản phẩm nào trong giỏ hàng.');
            }

            // Lưu các sản phẩm đã thanh toán vào bảng order_product
            foreach ($cartItems as $cartItem) {
                $order->products()->attach($cartItem->product_id, [
                    'quantity' => $cartItem->quantity,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // Xóa các sản phẩm đã thanh toán khỏi giỏ hàng theo `product_id`
            Cart::where('user_id', auth()->id())->whereIn('product_id', $selectedItems)->delete();

            return redirect()->route('orders.history')->with('success', 'Thanh toán thành công! Đơn hàng của bạn đã được ghi nhận.');
        } else {
            // Xử lý lỗi nếu thanh toán thất bại
            return redirect()->route('orders.history')->with('error', 'Thanh toán không thành công! Vui lòng thử lại.');
        }
    }

    // Xử lý thanh toán Ship COD
    public function codPayment(Request $request)
    {
        // Lấy danh sách sản phẩm đã được tích chọn
        $selectedItems = explode(',', $request->input('selectedItems', ''));

        // Tính tổng tiền của các sản phẩm đã chọn
        $amount = $this->calculateTotalAmount($selectedItems);

        if ($amount == 0) {
            return redirect()->back()->with('error', 'Bạn chưa chọn sản phẩm nào để thanh toán.');
        }

        // Tạo đơn hàng mới trong hệ thống
        $order = new Order();
        $order->user_id = auth()->id();
        $order->order_number = time(); // Tạo mã đơn hàng duy nhất
        $order->total_amount = $amount;
        $order->status = 'pending'; // Đánh dấu đơn hàng là đã tạo và chờ giao hàng
        $order->payment_method = 'COD'; // Đánh dấu phương thức thanh toán là COD
        $order->save();

        // Lấy các sản phẩm đã tích chọn trong giỏ hàng theo `product_id`
        $cartItems = Cart::where('user_id', auth()->id())
            ->whereIn('product_id', $selectedItems)
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('orders.history')->with('error', 'Không tìm thấy sản phẩm nào trong giỏ hàng.');
        }

        // Lưu các sản phẩm đã thanh toán vào bảng order_product
        foreach ($cartItems as $cartItem) {
            $order->products()->attach($cartItem->product_id, [
                'quantity' => $cartItem->quantity,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Xóa các sản phẩm đã thanh toán khỏi giỏ hàng theo `product_id`
        Cart::where('user_id', auth()->id())->whereIn('product_id', $selectedItems)->delete();

        return redirect()->route('orders.history')->with('success', 'Đặt hàng thành công! Đơn hàng của bạn sẽ được thanh toán khi nhận hàng.');
    }
}
