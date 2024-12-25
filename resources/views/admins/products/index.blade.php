<x-admin-layout>
    <x-slot name="title">
        Quản lý sản phẩm
    </x-slot>
    <div>
        <div class="font-bold text-2xl">Quản lý sản phẩm</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="flex flex-col md:flex-row my-2 justify-between items-start space-y-4 md:space-y-0">
                        <a href="{{ route('admin.products.create') }}" class="flex items-center p-2 bg-blue-300 rounded text-blue-800 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current text-blue-800 mr-2">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                            </svg>
                            Thêm sản phẩm mới
                        </a>
                    </div>

                    <div class="">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-300">
                            <tr>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tên sản phẩm</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Hình ảnh</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Danh mục</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Giá gốc</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Giảm giá</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($products as $product)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        <div class="max-w-44 line-clamp-1" title="{{ $product->name }}">{{ $product->name }}</div>
                                    </td>
                                    <td class="product-images">
                                        @if($product->images->isNotEmpty())
                                            <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="Product Image" class="w-24 h-24 object-cover">
                                        @else
                                            <p>Không có hình ảnh nào</p>
                                        @endif
                                    </td>
                                    <td class="px-2 py-3 text-sm text-gray-800 list-none">
                                        @foreach($product->categories as $category)
                                            <li>{{ $category->name }}</li>
                                        @endforeach
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap text-center text-sm text-gray-800">
                                        {{ number_format($product->price, 0, ',', '.') }} đ
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap text-center text-sm text-gray-800">
                                        {{ $product->sale }}%
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="py-2 px-3 border rounded-lg bg-blue-300 text-blue-700">Sửa</a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-2 px-3 border rounded-lg bg-red-300 text-red-700" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
{{--                {{ $products->links('layouts.pagination', ['role' => 'user']) }}--}}
            </div>
        </div>
    </div>
</x-admin-layout>

