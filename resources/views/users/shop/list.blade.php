<x-user-layout>
    <x-slot name="title">
        Cửa hàng
    </x-slot>

    <ol class="flex items-center whitespace-nowrap py-10 lg:px-48 mx-4">
        <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
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

        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            Shop
        </li>
    </ol>

    <form method="GET" action="{{ route('shop') }}" class="mb-4">
        <div class="flex items-center gap-4 justify-center">
            <input
                type="text"
                name="search"
                class="border rounded-lg px-4 py-2"
                placeholder="Tìm kiếm tên sản phẩm"
                value="{{ request()->get('search', '') }}"
            />
            <button
                type="submit"
                class="bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="white">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg>
            </button>
        </div>
    </form>

    <div class="container mx-auto px-4 py-12 flex flex-col lg:flex-row gap-8">
        <!-- Product Categories and Filters -->
        <aside class="bg-pink-100 p-6 rounded-xl lg:max-h-[500px] lg:w-1/4 w-full">
            <h3 class="font-bold text-xl mb-6">Danh mục sản phẩm</h3>
            <ul class="space-y-4 text-sm">
                @foreach($categories as $category)
                    <li class="flex justify-between">
                        <a href="{{ route('shop', ['category_id' => $category->id]) }}" class="hover:text-amber-500">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="mt-8">
                <h4 class="font-bold text-lg mb-4">Lọc theo giá</h4>
                <div id="price-slider" class="mb-4"></div>
                <div class="flex justify-between text-sm">
                    <span id="price-min">{{ number_format($minPriceValue) }} đ</span>
                    <span id="price-max">{{ number_format($maxPriceValue) }} đ</span>
                </div>
                <form method="GET" action="{{ route('shop') }}">
                    <input type="hidden" name="min_price" id="minPrice">
                    <input type="hidden" name="max_price" id="maxPrice">
                    <button class="bg-amber-500 text-white px-4 py-2 rounded-full mt-4 w-full" type="submit">Lọc giá</button>
                </form>
            </div>
        </aside>

        <!-- Product List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full lg:w-3/4">
            @foreach ($products as $product)
                <div class="bg-white p-4 text-center w-full group">
                    <div class="">
                        <div class="relative group-hover:bg-pink-200 rounded-xl border-gray-200 py-6 overflow-hidden border">
                            @if($product->images->isNotEmpty())
                                <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="Product Image" class="object-cover w-full h-60 group-hover:scale-95 transition-transform duration-300 ease-in-out">
                            @else
                                <p>Không có hình ảnh nào</p>
                            @endif
                            @if($product->sale > 0)
                                <p class="text-white absolute top-0 p-2 bg-red-600 w-auto">{{ $product->sale }}%</p>
                            @endif
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="absolute inset-x-10 bottom-4 mx-auto hidden group-hover:flex bg-orange-500 text-white px-4 py-2 rounded-full justify-center items-center lg:text-md text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 mr-1" fill="white">
                                        <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24z"/>
                                    </svg>
                                    Thêm vào giỏ hàng
                                </button>
                            </form>
                        </div>
                        <div class="my-4">
                            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="text-xl hover:text-orange-400 py-5">{{ $product->name }}</a>
                            <div class="flex md:flex-cols-2 justify-center gap-2">
                                <p class="text-blue-400">
                                    {{ number_format($product->price - $product->price * $product->sale / 100) }} đ
                                </p>
                                @if ($product->sale > 0)
                                    <p class="text-gray-500 line-through">{{ number_format($product->price) }} đ</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <x-slot name="script">
        <script>
            var priceSlider = document.getElementById('price-slider');

            noUiSlider.create(priceSlider, {
                start: [{{ $minPriceValue }}, {{ $maxPriceValue }}],
                connect: true,
                range: {
                    'min': {{ $minPriceValue }},
                    'max': {{ $maxPriceValue }}
                },
                step: 10
            });

            priceSlider.noUiSlider.on('update', function (values) {
                var minPrice = document.getElementById('minPrice');
                var maxPrice = document.getElementById('maxPrice');
                var priceMinDisplay = document.getElementById('price-min');
                var priceMaxDisplay = document.getElementById('price-max');

                minPrice.value = Math.round(values[0]);
                maxPrice.value = Math.round(values[1]);

                priceMinDisplay.innerHTML = number_format(Math.round(values[0])) + ' đ';
                priceMaxDisplay.innerHTML = number_format(Math.round(values[1])) + ' đ';
            });

            function number_format(number) {
                return new Intl.NumberFormat().format(number);
            }
        </script>
    </x-slot>
</x-user-layout>
