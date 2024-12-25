<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductImage;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->get();;
        return view('admins.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admins.products.add', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'brand' => 'required|string|max:255',
                'price' => 'required|numeric',
                'sale' => 'nullable|numeric',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,bmp,tiff|max:2048',
                'description' => 'required|string',
            ]);

            $product = Product::create($request->all());

            // Gán các category đã chọn cho sản phẩm
            $product->categories()->sync($request->categories);

            // Create path image
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $key => $image) {
                    // Đặt tên tệp theo ID sản phẩm và số thứ tự hình ảnh
                    $imageName = $product->id . '-' . $key . '.' . $image->getClientOriginalExtension();

                    // Lưu hình ảnh vào thư mục storage (ví dụ: 'public/products')
                    $imagePath = $image->storeAs('public/products', $imageName); // Lưu vào storage theo id sản phẩm

                    // Lưu đường dẫn hình ảnh vào bảng product_images
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $imagePath
                    ]);
                }
            }
            return response()->json([
                'success' => true,
                'message' => 'Sản phẩm đã được tạo thành công.',
            ]);
//            return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được tạo thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã có lỗi xảy ra: ' . $e->getMessage()
            ], 500); // Trả về mã lỗi 500
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::with('categories')->find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        return view('admins.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        // Xử lý các ảnh cần xóa
        if ($request->has('deleteImages')) {
            foreach ($request->deleteImages as $imageId) {
                $image = ProductImage::findOrFail($imageId);

                // Xóa file ảnh trong storage
                Storage::delete('public/' . $image->image_path);

                // Xóa ảnh khỏi database
                $image->delete();
            }
        }

        // Xử lý các ảnh mới
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                // Đặt tên tệp theo ID sản phẩm và số thứ tự hình ảnh
                $imageName = $product->id . '-' . $key . '.' . $image->getClientOriginalExtension();

                // Lưu hình ảnh vào thư mục storage (ví dụ: 'public/products')
                $imagePath = $image->storeAs('public/products', $imageName); // Lưu vào storage theo ID sản phẩm

                // Lưu đường dẫn hình ảnh vào bảng product_images
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => str_replace('public/', '', $imagePath) // Bỏ 'public/' trước khi lưu vào DB
                ]);
            }
        }

        // Cập nhật các thông tin sản phẩm khác
        $product->update($request->all());
        // Cập nhật danh mục sản phẩm
        if ($request->has('categories')) {
            // Dùng phương thức sync để cập nhật các danh mục
            $product->categories()->sync($request->input('categories'));
        }

        return response()->json(['success' => true, 'message' => 'Sản phẩm đã được cập nhật thành công']);
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công');
    }
}
