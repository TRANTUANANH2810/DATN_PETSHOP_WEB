<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrdersController extends Controller
{
    // Hiển thị danh sách đơn hàng
    public function index(Request $request)
    {
        // Tạo query để lấy danh sách đơn hàng và người dùng liên quan
        $query = Order::latest()->with('user');

        // Nếu có từ khóa tìm kiếm, lọc theo mã đơn hàng
        if ($request->has('search') && !empty($request->get('search'))) {
            $search = $request->get('search');
            $query->where('order_number', 'LIKE', '%' . $search . '%');
        }

        // Phân trang kết quả
        $orders = $query->paginate(10);

        // Trả kết quả về view
        return view('admins.orders.index', compact('orders'));
    }

    // Xóa đơn hàng
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admins.orders.index')->with('success', 'Đơn hàng đã được xóa.');
    }

    // Phương thức chuyển trạng thái đơn hàng sang "shipping"
    public function ship($id)
    {
        $order = Order::findOrFail($id);

        if ($order->status == 'pending') {
            $order->status = 'shipping';
            $order->save();

            return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã chuyển sang trạng thái Giao hàng.');
        }

        if ($order->status = 'shipping'){
            $order->status = 'shipped';
            $order->save();

            return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã chuyển sang trạng thái Đã giao.');
        }

        return redirect()->route('admin.orders.index')->with('error', 'Không thể chuyển trạng thái đơn hàng.');
    }
    public function cancel($id)
    {
        $order = Order::findOrFail($id);

        if(in_array($order->status, ['pending', 'shipping'])){
            $order->status = 'canceled';
            $order->save();
        }

        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được hủy thành công.');

        return redirect()->route('admin.orders.index')->with('error', 'Không thể hủy đơn hàng.');
    }

    public function getNetRevenue() // Báo cáo doanh thu không tính phí ship
    {
        $revenueData = Order::where('status', 'shipped')
            ->selectRaw('MONTH(created_at) as month, SUM(total_amount - 30000) as total') // Trừ phí ship
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return $revenueData;
    }
}

