<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderHistoryController extends Controller
{
    public function index()
    {
        // Lấy danh sách đơn hàng của người dùng hiện tại, bao gồm các sản phẩm liên quan
        $orders = auth()->user()->orders()->with('products')->latest()->get();

        // Trả về view với danh sách đơn hàng
        return view('users.order-history', compact('orders'));
    }
}
