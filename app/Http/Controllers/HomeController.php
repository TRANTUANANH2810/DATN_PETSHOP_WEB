<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Lấy danh sách sản phẩm giới hạn 6 sản phẩm
        $products = Product::limit(6)->get();

        // Lấy tất cả danh mục sản phẩm
        $categories = Category::all();

        // Lấy thông tin giỏ hàng của người dùng (nếu đã đăng nhập)
        $cart = auth()->check() ? Cart::where('user_id', auth()->id())->get() : collect();

        // Trả dữ liệu về view và truyền thêm giỏ hàng
        return view('users.index', compact('products', 'categories', 'cart'));
    }

}
