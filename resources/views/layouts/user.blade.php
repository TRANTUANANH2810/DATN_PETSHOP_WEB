<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Tải các tệp CSS và JS từ Vite -->
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])

    <!-- Tải phông chữ từ Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Logo-PetSpa.ico') }}" type="image/x-icon">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="bg-black text-white py-2">
    <div class="container mx-auto flex flex-wrap md:flex-nowrap justify-between items-center gap-4 px-4">
        <!-- Logo và mô tả dịch vụ -->
        <div class="flex items-center gap-2 text-sm md:text-base whitespace-nowrap">
            <img src="{{ asset('images/Logo-PetSpa.png') }}" class="h-8 md:h-10" alt="Pet Spa Logo">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-1 md:gap-2">
                <span class="text-cyan-500 font-semibold">Pet Spa</span>
                <span class="text-xs sm:text-sm">Chuyên Dịch Vụ Và Phụ Kiện Dành Cho Bé Yêu</span>
            </div>
        </div>

        <!-- Thông tin liên hệ và nút -->
        <div class="flex flex-wrap md:flex-nowrap items-center space-y-2 md:space-y-0 space-x-0 md:space-x-4 text-xs md:text-sm justify-between w-full md:w-auto">
            <!-- Số điện thoại -->
            <span class="flex items-center whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-2" fill="white">
                    <path d="M256 80C141.1 80 48 173.1 48 288l0 104c0 13.3-10.7 24-24 24s-24-10.7-24-24L0 288C0 146.6 114.6 32 256 32s256 114.6 256 256l0 104c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-104c0-114.9-93.1-208-208-208zM80 352c0-35.3 28.7-64 64-64l16 0c17.7 0 32 14.3 32 32l0 128c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-64zm288-64c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-128c0-17.7 14.3-32 32-32l16 0z"/></svg>
                (+00)1234-5678
            </span>

            <!-- Email -->
            <span class="flex items-center whitespace-nowrap">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                support@example.com
            </span>

            <!-- Nút Book Now -->
            <a href="{{ route('contact') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-xs md:text-sm">Đặt lịch ngay !</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="flex justify-around items-center px-6 py-4 lg:px-16 lg:py-6 w-full bg-pink-100">
    <button type="button" class="px-4 py-1 z-40 top-[92px] md:hidden" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="lg:ml-16 w-8 h-8 white-fill">
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
        </svg>
    </button>
    <div class="w-full grid grid-cols-3 items-center px-4 lg:px-32">
        <!-- Danh mục bên trái -->
        <ul class="hidden md:flex space-x-4 lg:space-x-10  text-lg font-semibold justify-center"> <!-- Ẩn trên màn hình nhỏ, điều chỉnh khoảng cách giữa các link -->
            <li><a href="/" class="text-black hover:text-gray-600 {{ Request::is('/') ? 'border-b-amber-400 border-b-4' : '' }}">Trang chủ</a></li>
            <li class="hs-dropdown [--trigger:hover] relative inline-flex">
                <a href="{{ route('service') }}" id="hs-dropdown-hover-event" class="hs-dropdown-toggle text-black hover:text-gray-600 flex items-center {{ Request::is('service') ? 'border-b-amber-400 border-b-4' : '' }}">Dịch vụ
                    <svg class="hs-dropdown-open:rotate-180 size-4 ml-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </a>
                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full z-50" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                    <div class="p-1 space-y-0.5">
                        <a href="{{ route('service.grooming') }}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            Gromming Spa
                        </a>
                        <a href="{{ route('service.pet-hotel') }}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            Khách sạn thú cưng
                        </a>
                        <a href="{{ route('service.clinical') }}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" >
                            Khám sức khỏe lâm sàn
                        </a>
                        <a href="{{ route('service.pet-travel') }}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            Du lịch cùng Boss
                        </a>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('shop') }}" class="text-black hover:text-gray-600 {{ Request::is('shop') ? 'border-b-amber-400 border-b-4' : '' }}">Shop</a></li>
        </ul>

        <!-- Logo nằm giữa màn hình -->
        <div class="flex justify-center w-full">
            <a href="/">
                <img src="{{ asset('images/Logo-PetSpa.png') }}" class="w-auto h-16" alt="Pet Spa Logo">
            </a>
        </div>

        <!-- Danh mục bên phải -->
        <ul class="hidden md:flex space-x-4 lg:space-x-10 text-lg font-semibold justify-center"> <!-- Ẩn trên màn hình nhỏ -->
            <li><a href="{{ route('introduce') }}" class="text-black hover:text-gray-600 {{ Request::is('introduce') ? 'border-b-amber-400 border-b-4' : '' }}">Giới thiệu</a></li>
            <li><a href="{{ route('blog') }}" class="text-black hover:text-gray-600 {{ Request::is('blog') ? 'border-b-amber-400 border-b-4' : '' }} ">Bài viết</a></li>
            <li><a href="{{ route('contact') }}" class="text-black hover:text-gray-600 {{ Request::is('contact') ? 'border-b-amber-400 border-b-4' : '' }}">Liên hệ</a></li>
        </ul>
    </div>

    <!-- Các icon bên phải cho tìm tài khoản và giỏ hàng -->
    <div class="flex space-x-6 lg:space-x-10 text-lg items-center"> <!-- Điều chỉnh khoảng cách giữa các icon -->
        <div class="relative inline-block group">
            <!-- Icon Giỏ hàng -->
            <button class="text-black hover:text-gray-600 heading__icon-cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20">
                    <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20l44 0 0 44c0 11 9 20 20 20s20-9 20-20l0-44 44 0c11 0 20-9 20-20s-9-20-20-20l-44 0 0-44c0-11-9-20-20-20s-20 9-20 20l0 44-44 0c-11 0-20 9-20 20z"/>
                </svg>
            </button>

            <!-- Danh sách giỏ hàng -->
            <div class="absolute -right-6 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-lg z-10 hidden group-hover:block">
                <ul class="p-4">
                    @if($cart->isNotEmpty())
                        @foreach($cart as $item)
                            <li class="flex items-center justify-between py-2 border-b">
                                <!-- Hiển thị hình ảnh sản phẩm -->
                                <img src="{{ Storage::url($item->product->images->first()->image_path) }}" alt="Product Image" class="object-cover w-14 h-14 group-hover:scale-95 transition-transform duration-300 ease-in-out">
                                <div class="flex-1 ml-2">
                                    <span class="block text-sm">{{ $item->product->name }}</span>
                                    <span class="block text-gray-500 text-sm">
                                        {{ $item->quantity }} x
                                        @if ($item->product->sale > 0)
                                            <!-- Hiển thị giá đã áp dụng khuyến mãi -->
                                            {{ number_format($item->product->price - ($item->product->price * $item->product->sale / 100)) }}đ
                                        @else
                                            <!-- Hiển thị giá gốc nếu không có khuyến mãi -->
                                            {{ number_format($item->product->price) }}đ
                                        @endif
                                    </span>
                                </div>
                            </li>
                        @endforeach
                        <li class="flex justify-between py-2">
                            <span>Tổng cộng:</span>
                            <span>{{ number_format($cart->sum(function($item) {
                            // Kiểm tra nếu sản phẩm có khuyến mãi
                            $price = $item->product->sale > 0 ?
                                $item->product->price - ($item->product->price * $item->product->sale / 100) :
                                $item->product->price;
                            return $item->quantity * $price;
                        })) }} đ</span>
                        </li>
                    @else
                        <li class="py-2 text-center">Giỏ hàng trống</li>
                    @endif
                </ul>
                <div class="p-4 text-center">
                    <a href="{{ route('cart.show') }}" class="bg-blue-500 text-white px-4 py-2 rounded-full">Xem giỏ hàng</a>
                </div>
            </div>
        </div>
        <button type="button" class="text-black hover:text-gray-600 mb-2" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
            @if(Auth::check())
                <div
                    class="w-[40px] h-[40px] bg-gray-600 text-center text-lg text-blue-50 rounded-3xl flex justify-center items-center capitalize ">
                    {{ substr(Auth::guard('web')->user()->name, 0, 1) }}
                </div>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" >
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
                </svg>
            @endif
        </button>

        @if(Auth::check())
            <div id="hs-offcanvas-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <a href="{{ route('profile') }}">
                        <div class="flex-shrink-0 group block p-[8px]">
                            <div class="flex items-center">
                                <div
                                    class="border border-gray-300 flex items-center justify-center w-[40px] h-[40px] rounded-full overflow-hidden">
                                    <div
                                        class="w-[40px] h-[40px] bg-gray-600 text-center text-lg text-blue-50 rounded-3xl flex justify-center items-center capitalize">
                                        {{ substr(Auth::guard('web')->user()->name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <h3 class="text-gray-800">{{ Auth::guard('web')->user()->name }}</h3>
                                    <p class="text-gray-800">{{ Auth::guard('web')->user()->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="px-4 my-2">
                    <div class="items-stretch flex flex-col flex-shrink-0 flex-wrap relative hover:bg-gray-300 rounded-lg duration-300 cursor-pointer">
                        <a href="{{ route('orders.history') }}" class="px-4 py-2 grid items-center content-start gap-2 auto-cols-max select-none grid-flow-col">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
                            Theo dõi đơn hàng
                        </a>
                    </div>
                </div>
                <div class="px-4 my-2">
                    <div class="items-stretch flex flex-col flex-shrink-0 flex-wrap relative hover:bg-gray-300 rounded-lg duration-300 cursor-pointer">
                        <a href="{{ route('register.service') }}" class="px-4 py-2 grid items-center content-start gap-2 auto-cols-max select-none grid-flow-col">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><path d="M96 32l0 32L48 64C21.5 64 0 85.5 0 112l0 48 448 0 0-48c0-26.5-21.5-48-48-48l-48 0 0-32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32L160 64l0-32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192L0 192 0 464c0 26.5 21.5 48 48 48l352 0c26.5 0 48-21.5 48-48l0-272zM224 248c13.3 0 24 10.7 24 24l0 56 56 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-56 0 0 56c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-56-56 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l56 0 0-56c0-13.3 10.7-24 24-24z"/></svg>
                            Đăng ký sử dụng dịch vụ
                        </a>
                    </div>
                </div>
                <div class="px-4 border-t my-2 pt-2">
                    <div class="items-stretch flex flex-col flex-shrink-0 flex-wrap relative hover:bg-gray-300 rounded-lg duration-300 cursor-pointer">
                        <a onclick="event.preventDefault(); this.nextElementSibling.submit();" class="px-4 py-2 grid items-center content-start gap-2 auto-cols-max select-none grid-flow-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                            </svg> Đăng xuất
                        </a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div id="hs-offcanvas-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
                <ul class="space-y-4 px-4 py-6"> <!-- Thêm khoảng cách giữa các mục và padding -->
                    <li class="flex flex-col flex-shrink-0 relative hover:bg-gray-300 rounded-lg duration-300">
                        <a href="{{ route('login') }}"
                           class="px-4 py-2 flex items-center gap-2 select-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 512 512">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                            </svg>
                            Đăng nhập
                        </a>
                    </li>
                    <li class="flex flex-col flex-shrink-0 relative hover:bg-gray-300 rounded-lg duration-300">
                        <a href="{{ route('register') }}"
                           class="px-4 py-2 flex items-center gap-2 select-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 640 512">
                                <path
                                    d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                            </svg>
                            Đăng ký
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>

    <!-- Mobile Menu -->
    <div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-neutral-800 dark:border-neutral-700 [--body-scroll:true]' tabindex="-1">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white ml-28" >
            Menu
        </h3>
        <button type="button" class="flex justify-center items-center size-9 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div class="border border-amber-200 w-full lg:w-auto">
        <div class="flex flex-col lg:flex-row gap-y-4 lg:gap-x-20 px-4 lg:px-20 pt-2 justify-between">
            <a href="/" class="p-2 hover:bg-gray-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 mr-2" fill="pink">
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            Trang chủ
            </a>
            <a href="{{ route('service') }}" class="p-2 hover:bg-gray-300 flex items-center justify-between">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 mr-2" fill="pink">
                        <path d="M163.9 136.9c-29.4-29.8-29.4-78.2 0-108s77-29.8 106.4 0l17.7 18 17.7-18c29.4-29.8 77-29.8 106.4 0s29.4 78.2 0 108L310.5 240.1c-6.2 6.3-14.3 9.4-22.5 9.4s-16.3-3.1-22.5-9.4L163.9 136.9zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5L192 512 32 512c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l36.8 0 44.9-36c22.7-18.2 50.9-28 80-28l78.3 0 16 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l120.6 0 119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5z"/>
                    </svg>
                    Dịch vụ
                </span>
                <!-- Nút mở rộng -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <path d="M6 9l6 6 6-6"></path>
                </svg>
            </a>

            <a href="{{ route('service.grooming') }}" class="hover:text-blue-500 text-sm ml-10">Grooming Spa</a>
            <a href="{{ route('service.pet-hotel') }}" class="hover:text-blue-500 text-sm ml-10">Khách sạn thú cưng</a>
            <a href="{{ route('service.pet-travel') }}" class="hover:text-blue-500 text-sm ml-10">Du lịch cùng Boss</a>
            <a href="{{ route('service.clinical') }}" class="hover:text-blue-500 text-sm ml-10">Khám sức khỏe lâm sàng</a>

            <a href="{{ route('shop') }}" class="p-2 hover:bg-gray-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 mr-2" fill="pink">
                    <path d="M388.3 104.1a4.7 4.7 0 0 0 -4.4-4c-2 0-37.2-.8-37.2-.8s-21.6-20.8-29.6-28.8V503.2L442.8 472S388.7 106.5 388.3 104.1zM288.7 70.5a116.7 116.7 0 0 0 -7.2-17.6C271 32.9 255.4 22 237 22a15 15 0 0 0 -4 .4c-.4-.8-1.2-1.2-1.6-2C223.4 11.6 213 7.6 200.6 8c-24 .8-48 18-67.3 48.8-13.6 21.6-24 48.8-26.8 70.1-27.6 8.4-46.8 14.4-47.2 14.8-14 4.4-14.4 4.8-16 18-1.2 10-38 291.8-38 291.8L307.9 504V65.7a41.7 41.7 0 0 0 -4.4 .4S297.9 67.7 288.7 70.5zM233.4 87.7c-16 4.8-33.6 10.4-50.8 15.6 4.8-18.8 14.4-37.6 25.6-50 4.4-4.4 10.4-9.6 17.2-12.8C232.2 54.9 233.8 74.5 233.4 87.7zM200.6 24.4A27.5 27.5 0 0 1 215 28c-6.4 3.2-12.8 8.4-18.8 14.4-15.2 16.4-26.8 42-31.6 66.5-14.4 4.4-28.8 8.8-42 12.8C131.3 83.3 163.8 25.2 200.6 24.4zM154.2 244.6c1.6 25.6 69.3 31.2 73.3 91.7 2.8 47.6-25.2 80.1-65.7 82.5-48.8 3.2-75.7-25.6-75.7-25.6l10.4-44s26.8 20.4 48.4 18.8c14-.8 19.2-12.4 18.8-20.4-2-33.6-57.2-31.6-60.8-86.9-3.2-46.4 27.2-93.3 94.5-97.7 26-1.6 39.2 4.8 39.2 4.8L221.4 225.4s-17.2-8-37.6-6.4C154.2 221 153.8 239.8 154.2 244.6zM249.4 82.9c0-12-1.6-29.2-7.2-43.6 18.4 3.6 27.2 24 31.2 36.4Q262.6 78.7 249.4 82.9z"/></svg>
                Shop
            </a>
            <a href="{{ route('introduce') }}" class="p-2 hover:bg-gray-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5 mr-2" fill="pink">
                    <path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z"/></svg>
                Giới thiệu
            </a>
            <a href="{{ route('blog') }}" class="p-2 hover:bg-gray-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-2" fill="pink">
                    <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5
                                    0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8
                                     6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4
                                      13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4
                                      109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1
                                      23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
                Bài viết
            </a>
            <a href="{{ route('contact') }}" class="p-2 hover:bg-gray-300 flex" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-2" fill="pink">
                    <path d="M215.4 96L144 96l-36.2 0L96 96l0 8.8L96 144l0 40.4 0 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3 48 96c0-26.5 21.5-48 48-48l76.6 0 49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48 416 48c26.5 0 48 21.5 48 48l0 44.3 22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4l0-89 0-40.4 0-39.2 0-8.8-11.8 0L368 96l-71.4 0-81.3 0zM0 448L0 242.1 217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1 512 448s0 0 0 0c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64c0 0 0 0 0 0zM176 160l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                Liên hệ
            </a>
        </div>
    </div>
</header>
{{ $slot }}

{{--icon social--}}
<a href="https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F" class="" target="_blank">
    <button type="button" class="m-1 ms-0 md:bottom-[180px] bottom-[140px] right-6 z-40 fixed inline-flex justify-center items-center size-[56px] text-sm font-semibold rounded-full border border-gray-200 bg-pink-300 text-gray-800 hover:bg-pink-400 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 ">
        <img class="animate-bounce" src="https://kcproz.vn/assets/images/zl.png">
    </button>
</a>

<a href="https://www.facebook.com/Dau.3215/" target="_blank" class="bg-amber-400 rounded-full">
    <button type="button" class="m-1 ms-0 md:bottom-[100px] bottom-[70px] right-6 z-40 fixed inline-flex justify-center items-center size-[56px] text-sm font-semibold rounded-full border border-gray-200 bg-pink-300 text-gray-800 shadow-sm hover:bg-pink-400 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="animate-bounce w-9 h-9 " fill="white" ><path d="M256.6 8C116.5 8 8 110.3 8 248.6c0 72.3 29.7 134.8 78.1 177.9 8.4 7.5 6.6 11.9 8.1 58.2A19.9 19.9 0 0 0 122 502.3c52.9-23.3 53.6-25.1 62.6-22.7C337.9 521.8 504 423.7 504 248.6 504 110.3 396.6 8 256.6 8zm149.2 185.1l-73 115.6a37.4 37.4 0 0 1 -53.9 9.9l-58.1-43.5a15 15 0 0 0 -18 0l-78.4 59.4c-10.5 7.9-24.2-4.6-17.1-15.7l73-115.6a37.4 37.4 0 0 1 53.9-9.9l58.1 43.5a15 15 0 0 0 18 0l78.4-59.4c10.4-8 24.1 4.5 17.1 15.6z"/></svg>
    </button>
</a>


<div class="border-t border-gray-700 px-4 md:px-10 lg:px-20 py-10">
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 text-xs md:text-md lg:text-lg mx-2 lg:mx-28 items-center justify-center w-fill">
        <!-- Fast Shipping -->
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-16 h-auto">
                <path d="M92.7,46.9C92.7,46.9,92.7,46.9,92.7,46.9h-9.8V36.2c0-0.8-0.7-1.5-1.5-1.5c-0.8,0-1.5,0.7-1.5,1.5v12.1 c0,0.8,0.7,1.5,1.5,1.5h11.3c0.8,0,1.5-0.7,1.5-1.5C94.1,47.5,93.5,46.9,92.7,46.9z"></path>
                <path d="M30.4,50.5c0-0.8-0.7-1.5-1.5-1.5H2c-0.8,0-1.5,0.7-1.5,1.5S1.2,52,2,52h27C29.8,52,30.4,51.3,30.4,50.5z"></path>
                <path d="M11,42.6h27c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5H11c-0.8,0-1.5,0.7-1.5,1.5C9.5,42,10.1,42.6,11,42.6z"></path>
                <path d="M98.9,46.7L98.9,46.7l-7.6-14.2c-0.8-1.5-2.4-2.4-4.1-2.4H72c-0.6,0-1.1,0.1-1.7,0.3v-1.5c0-2.5-2.1-4.6-4.6-4.6H20.3 c-2.5,0-4.6,2.1-4.6,4.6v5.9c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-5.9c0-0.9,0.7-1.7,1.7-1.7h45.4c0.9,0,1.7,0.8,1.7,1.7v33.9 c0,0.9-0.8,1.7-1.7,1.7H46.4c-0.8-5.4-5.8-9.1-11.2-8.2c-4.3,0.6-7.6,4-8.2,8.2h-6.6c-0.9,0-1.7-0.7-1.7-1.7v-5.6 c0-0.8-0.7-1.5-1.5-1.5c-0.8,0-1.5,0.7-1.5,1.5v5.6c0,2.5,2.1,4.6,4.6,4.6H27c0.8,5.4,5.8,9.1,11.2,8.2c4.3-0.6,7.6-4,8.2-8.2h19.3 c1.2,0,2.3-0.5,3.1-1.3c0.8,0.8,2,1.3,3.1,1.3h1.8c0.8,5.4,5.8,9.1,11.2,8.2c4.3-0.6,7.6-4,8.2-8.2h1.8c2.5,0,4.6-2.1,4.6-4.6V48.9 C99.5,48.1,99.3,47.4,98.9,46.7z"></path>
            </svg>
            <div>
                <h4 class="font-bold">Giao hàng nhanh chóng</h4>
                <p class="text-sm">Miễn phí vận chuyển trên Rs.1000</p>
            </div>
        </div>

        <!-- Easy Returns -->
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-16 h-auto">
                <path d="M47.6,84.5c0.1,0,0.1,0.1,0.2,0.1c0.5,0.2,1.1,0.2,1.6,0c0.1,0,0.1,0,0.2-0.1s0.1,0,0.2-0.1l29.6-17.1 c0.7-0.4,1.1-1.2,1.1-2V36.5c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2c0-0.3-0.1-0.5-0.3-0.7c-0.1-0.2-0.3-0.4-0.5-0.6L49.7,17.4 c-0.7-0.4-1.6-0.4-2.3,0L17.8,34.5c-0.1,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.2,0.1c-0.2,0.2-0.4,0.4-0.5,0.6c-0.1,0.2-0.2,0.5-0.3,0.7 c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2l0,28.8c0,0.8,0.4,1.6,1.1,2l29.6,17.1C47.5,84.4,47.5,84.4,47.6,84.5z M75.9,64L50.8,78.5 V54.9L64.5,47l11.4-6.6V64z M48.6,22l25.1,14.5l-10.3,5.9L38.3,28L48.6,22z"></path>
            </svg>
            <div>
                <h4 class="font-bold">Đổi trả</h4>
                <p class="text-sm">Chính sách đổi trả dễ dàng</p>
            </div>
        </div>

        <!-- Reviews & Ratings -->
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-10 h-auto">
                <path d="M79.1,97.2c-0.4,0-0.7-0.1-1.1-0.2L50,83.4L22,96.9c-0.8,0.4-1.8,0.3-2.5-0.2c-0.7-0.5-1.1-1.4-1-2.3l4.3-30.8L1.2,41.1 c-0.6-0.7-0.8-1.6-0.6-2.5c0.3-0.9,1-1.5,1.9-1.7l30.6-5.5L47.8,4.1c0.4-0.8,1.3-1.3,2.2-1.3s1.7,0.5,2.2,1.3l14.7,27.4L97.5,37 c0.9,0.2,1.6,0.8,1.9,1.7c0.3,0.9,0.1,1.8-0.6,2.5L77.2,63.6l4.3,30.8c0.1,0.9-0.3,1.8-1,2.3C80.1,97,79.6,97.2,79.1,97.2z"></path>
            </svg>
            <div>
                <h4 class="font-bold">Phản hồi và đánh giá</h4>
                <p class="text-sm">Phản hồi tích cực lên tới 4.8*</p>
            </div>
        </div>

        <!-- Customer Support -->
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-auto">
                <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
            <div>
                <h4 class="font-bold">Chăm sóc khách hàng</h4>
                <p class="text-sm">0454-343-3431367</p>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-gray-900 text-white pt-10">
    <div class="container mx-auto px-4">
        <!-- Bottom Section -->
        <div class="border-t border-gray-700 pt-8 pb-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mx-4">
                <div>
                    <h4 class="font-bold mb-4">Trợ giúp</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('shop') }}" class="hover:text-amber-500">Tìm kiếm</a></li>
                        <li><a href="#" class="hover:text-amber-500">Điều khoản dịch vụ</a></li>
                        <li><a href="#" class="hover:text-amber-500">Chính sách bảo mật</a></li>
                        <li><a href="#" class="hover:text-amber-500">Chi tiết vận chuyển</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-500">Liên hệ</a></li>
                        <li><a href="#" class="hover:text-amber-500">Careers</a></li>
                        <li><a href="#" class="hover:text-amber-500">Đổi trả và hoàn lại</a></li>
                        <li><a href="#" class="hover:text-amber-500">Vận chuyển</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Pet Shop</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('introduce') }}" class="hover:text-amber-500">Giới thiệu</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-amber-500">Bài viết</a></li>
                        <li><a href="#" class="hover:text-amber-500">Thẻ quà tặng</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Thông tin</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-amber-500">Cụm từ tìm kiếm</a></li>
                        <li><a href="#" class="hover:text-amber-500">Tìm kiếm nâng cao</a></li>
                        <li><a href="#" class="hover:text-amber-500">Đơn đặt hàng và trả lại</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Email Subscription and Social Icons -->
        <div class="flex flex-col md:flex-row justify-between items-center py-8 space-y-4 md:space-y-0">
            <div class="text-center md:text-left">
                <h4 class="">
                    Tham gia danh sách của chúng tôi và được giảm giá 15% cho lần mua hàng đầu tiên của bạn!</h4>
                <form class="flex mt-4 justify-center md:justify-start">
                    <input type="email" placeholder="E-mail của bạn" class="p-2 rounded-l-lg focus:outline-none text-black">
                    <button class="bg-amber-500 p-2 rounded-r-lg text-white">Đăng ký</button>
                </form>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-amber-500"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white hover:text-amber-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-amber-500"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-amber-500"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center py-4 border-t border-gray-700">
            <p class="text-sm text-center md:text-left mb-4 md:mb-0">&copy; Mọi quyền được bảo lưu năm 2024.</p>
            <div class="flex space-x-4">
                <a href="#"><img src="{{ asset('images/Google-play.png') }}" alt="Google Play" class="w-32"></a>
                <a href="#"><img src="{{ asset('images/App-Store.png') }}" alt="App Store" class="w-32"></a>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="PetShop"
  agent-id="bcf65bc3-230d-430f-a851-29fae2e9d63a"
  language-code="vi"
></df-messenger>
<script type="module">
    @if ($errors->any())
    toastr.error("{{ $errors->first() }}")
    @endif
    @if(session('success'))
    toastr.success("{{ session('success') }}")
    @endif
    @if(session('error'))
    toastr.error("{{ session('error') }}")
    @endif
</script>
@if (isset($script))
    {{ $script }}
@endif
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollElements = document.querySelectorAll(".scroll-animation");

        const elementInView = (el, dividend = 1) => {
            const elementTop = el.getBoundingClientRect().top;
            return (
                elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
        };

        const displayScrollElement = (element) => {
            element.classList.add("visible");
        };

        const hideScrollElement = (element) => {
            element.classList.remove("visible");
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 1)) {
                    displayScrollElement(el);
                } else {
                    hideScrollElement(el); // Xóa class để có thể hiển thị lại khi cuộn lên
                }
            });
        };

        // Thực hiện hiệu ứng ngay khi tải trang
        handleScrollAnimation();

        // Thực hiện lại hiệu ứng khi cuộn
        window.addEventListener("scroll", () => {
            handleScrollAnimation();
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const shakeElements = document.querySelectorAll(".shake-on-hover");

        const handleMouseMove = (event) => {
            const { clientX, clientY } = event;
            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;

            // Tính toán độ dịch chuyển dựa trên vị trí của con trỏ so với trung tâm màn hình
            const deltaX = (clientX - centerX) * 0.02;
            const deltaY = (clientY - centerY) * 0.02;

            shakeElements.forEach((element) => {
                // Áp dụng sự dịch chuyển nhẹ cho từng phần tử
                element.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
            });
        };

        // Áp dụng sự kiện di chuyển chuột trên toàn trang
        document.addEventListener("mousemove", handleMouseMove);
    });

</script>
</html>
