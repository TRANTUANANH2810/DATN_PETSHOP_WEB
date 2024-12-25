<x-user-layout>
    <x-slot name="title">
        Chi tiết sản phẩm
    </x-slot>

    <ol class="flex items-center whitespace-nowrap py-10 lg:px-48 mx-4">
        <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" >
                <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Trang chủ
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="{{ route('shop') }}">
                Shop
                <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </li>
        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            {{ $product->name }}
        </li>
    </ol>

    <section class="py-10 relative gap-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="pb-2">
                    <!-- Phần hiển thị ảnh lớn -->
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper product-prev mb-6">
                        <div class="swiper-wrapper">
                            @foreach($product->images as $image)
                                <div class="swiper-slide overflow-hidden rounded-lg">
                                    <!-- Sử dụng object-contain để đảm bảo ảnh giữ tỷ lệ khi hiển thị -->
                                    <img src="{{ Storage::url($image->image_path) }}"
                                         alt="{{ $product->name }} image"
                                         class="w-full h-72 md:h-96 object-contain mx-auto rounded-lg shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Phần hiển thị ảnh thumbnail -->
                    <div thumbsSlider="" class="swiper product-thumb mx-auto mt-4">
                        <div class="swiper-wrapper">
                            @foreach($product->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url($image->image_path) }}"
                                         alt="{{ $product->name }} thumbnail"
                                         class="cursor-pointer w-full h-20 md:h-28 object-contain border-2 transition-all duration-500 hover:border-indigo-600 rounded-lg">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="border p-8 rounded-3xl pro-detail w-full flex flex-col justify-center order-last lg:order-none max-lg:max-w-[608px] max-lg:mx-auto">
                        <h2 class="mb-2 font-manrope font-bold text-3xl leading-10 text-gray-900">{{ $product->name }}
                        </h2>
                        @if ($product->sale > 0)
                            <div class="">
                                <p class="bg-red-600 rounded-full text-white w-12 h-12 text-center flex items-center justify-center">- {{ $product->sale }}%</p>
                            </div>
                        @endif

                        <div class="flex flex-col sm:flex-row sm:items-center my-5 gap-2">
                            <p class="text-red-800">
                                {{ number_format($product->sale > 0 ? $product->price - $product->price * $product->sale / 100 : $product->price) }} đ
                            </p>
                            @if ($product->sale > 0)
                                <p class="text-gray-500 line-through">{{ number_format($product->price) }} đ</p>
                            @endif
                        </div>
                        <div class="block w-full">
                            <p class="text-2xl text-blue-950 font-bold leading-8 mb-4">Chi tiết sản phẩm</p>
                            <div class="text">
                                <ul class="text-sm text-gray-700">
                                    <li class="mb-4 border-b"><strong>Danh mục:</strong>
                                        {{ implode(', ', $product->categories->pluck('name')->toArray()) }}
                                    </li>
                                    <li class="mb-4 border-b"><strong>Thương hiệu:</strong> {{ $product->brand }}</li>
                                </ul>

                                <div class="mb-4">
                                    <label for="quantity" class="block text-sm mb-2 font-semibold text-gray-700">Số lượng</label>
                                    <!-- Input Number -->
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                            <div class="flex items-center gap-x-1.5">
                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                    </svg>
                                                </button>
                                                <input name="quantity" class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white" style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field" value="1" min="1" data-hs-input-number-input="">
                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5v14"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Nút thêm vào giỏ hàng -->
                                        <button type="submit" class="text-center w-full px-5 py-4 rounded-[100px] bg-indigo-500 flex items-center justify-center text-lg text-white shadow-sm transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-400 mt-4">
                                            + Thêm vào giỏ hàng
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-4">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            <!-- Phần Description -->
            <div class="w-full lg:w-3/4 mb-8 lg:mb-0">
                <div class="mt-5">
                    <div class="font-bold text-3xl text-amber-500 mb-4 text-center">
                        Mô tả sản phẩm
                    </div>
                    <div class="p-4 font-normal">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>

            <!-- Phần sản phẩm liên quan -->
            <div class="w-full lg:w-1/4 bg-pink-100 p-6 rounded-3xl ml-auto max-h-[720px] mt-10">
                <h3 class="font-bold text-2xl text-amber-500 mb-6">Sản phẩm liên quan</h3>
                @if($relatedProducts->isNotEmpty())
                    <div class="space-y-6">
                        @foreach($relatedProducts as $relatedProduct)
                            <div class="flex items-center {{ !$loop->last ? 'border-b border-gray-400' : '' }} border-gray-400 pb-4">
                                <div class="w-1/4">
                                    <a href="{{ route('product.detail', ['id' => $relatedProduct->id]) }}">
                                        <img src="{{ Storage::url($relatedProduct->images->first()->image_path) }}" alt="{{ $relatedProduct->name }}" class="object-cover w-20 h-20 rounded-lg bg-pink-200">
                                    </a>
                                </div>
                                <div class="w-3/4 pl-4">
                                    <a href="{{ route('product.detail', ['id' => $relatedProduct->id]) }}" class="block text-lg text-gray-800 hover:text-amber-500">
                                        {{ $relatedProduct->name }}
                                    </a>
                                    <p class="text-gray-600 mt-1 text-red-800">{{ number_format($relatedProduct->price) }} VND</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-700 mt-4">@Pet Spa sẽ cập nhật thêm ...</p>
                @endif
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper('.product-prev', {
                    spaceBetween: 10,
                    slidesPerView: 1,
                    thumbs: {
                        swiper: {
                            el: '.product-thumb',
                            slidesPerView: 4,
                            spaceBetween: 10,
                        }
                    }
                });
            });
        </script>
    </x-slot>
</x-user-layout>
