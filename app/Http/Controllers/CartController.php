<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        $user = auth()->user();
        $quantity = $request->input('quantity', 1); // Lấy số lượng từ request, mặc định là 1

        // Kiểm tra nếu số lượng nhập vào không hợp lệ
        if ($quantity < 1) {
            return redirect()->back()->with('error', 'Số lượng phải lớn hơn 0.');
        }

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng của người dùng chưa
        $cart = Cart::where('user_id', $user->id)->where('product_id', $productId)->first();

        if ($cart) {
            // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
            $cart->quantity += $quantity;
            $cart->save();
        } else {
            // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng với số lượng được chọn
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
        }
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
    public function showCart()
    {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        // Calculate the initial total price of all items (if you want this as default)
        $totalAmount = $cartItems->sum(function ($item) {
            $price = $item->product->sale > 0 ?
                $item->product->price - ($item->product->price * $item->product->sale / 100) :
                $item->product->price;
            return $item->quantity * $price;
        });
        return view('users.cart.view', compact('cartItems', 'totalAmount'));
    }

    public function update(Request $request, $id, $action)
    {
        // Tìm sản phẩm trong giỏ hàng theo $id
        $cartItem = Cart::find($id);

        if ($action === 'increase') {
            // Tăng số lượng sản phẩm
            $cartItem->quantity += 1;
        } elseif ($action === 'decrease' && $cartItem->quantity > 1) {
            // Giảm số lượng nếu lớn hơn 1
            $cartItem->quantity -= 1;
        }

        $cartItem->save();

        return redirect()->back()->with('success', 'Cập nhật số lượng sản phẩm thành công.');
    }

    public function delete($id)
    {
        // Tìm sản phẩm trong giỏ hàng và xóa
        $cartItem = Cart::find($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Xóa sản phẩm khỏi giỏ hàng thành công.');
    }

}
