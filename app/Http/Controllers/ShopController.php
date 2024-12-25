<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách danh mục và đếm số lượng sản phẩm trong mỗi danh mục
        $categories = Category::withCount('products')->get();

        // Tạo query cho sản phẩm
        $query = Product::query();

        // Lọc sản phẩm theo danh mục qua bảng trung gian
        if ($request->has('category_id') && !empty($request->get('category_id'))) {
            $categoryId = $request->get('category_id');
            $query->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            });
        }

        // Lọc sản phẩm theo tên (tìm kiếm)
        if ($request->has('search') && !empty($request->get('search'))) {
            $query->where('name', 'like', '%' . $request->get('search') . '%');
        }

        // Lọc sản phẩm theo giá bán cuối cùng (sau khi đã áp dụng giảm giá)
        if ($request->has('min_price') && $request->has('max_price')) {
            $minPrice = $request->get('min_price');
            $maxPrice = $request->get('max_price');
            $query->whereRaw('(price - (price * sale / 100)) BETWEEN ? AND ?', [$minPrice, $maxPrice]);
        }

        // Lấy giá trị min và max đã giảm giá
        $minPriceValue = Product::selectRaw('MIN(price - (price * sale / 100)) as min_price')->value('min_price');
        $maxPriceValue = Product::selectRaw('MAX(price - (price * sale / 100)) as max_price')->value('max_price');

        // Lấy danh sách sản phẩm sau khi lọc và phân trang
        $products = $query->paginate(10);

        // Trả dữ liệu về view
        return view('users.shop.list', compact('products', 'categories', 'minPriceValue', 'maxPriceValue'));
    }

    public function show($id)
    {
        // Tìm sản phẩm theo id
        $product = Product::findOrFail($id);
        $relatedProducts = Product::whereHas('categories', function ($query) use ($product) {
            return $query->whereIn('categories.id', $product->categories->pluck('id'));
        })->where('id', '!=', $product->id)
            ->limit(5)
            ->get();

        // Trả về view với sản phẩm
        return view('users.shop.product-detail', compact('product', 'relatedProducts'));
    }
}
