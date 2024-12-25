<x-user-layout>
    <x-slot name="title">
        Trang chủ
    </x-slot>

    <!-- Banner Section -->
    <section class="relative flex flex-wrap lg:flex-nowrap justify-between items-center px-8 lg:px-64 py-16 bg-pink-100">
        <!-- Phần văn bản bên trái -->
        <div class="lg:w-1/2 space-y-4 scroll-animation scroll-left">
            <div class="text-white font-bold text-xl p-5 bg-orange-600 w-20 md:flex flex-col justify-center items-center rounded-full shadow-2xl shadow-orange-950 hidden">1K<span>Pets</span></div>
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight">Our Best Partner</h1>
            <p class="text-gray-600 text-xl lg:text-2xl">Suy nghĩ của khách hàng</p>
            <div class="flex items-center space-x-2">
                <span class="text-yellow-500 text-xl lg:text-2xl">★★★★★</span>
                <span class="text-gray-600 text-lg lg:text-2xl">4.8k đánh giá</span>
            </div>
        </div>

        <!-- Hình ảnh chính bên phải -->
        <div class="lg:w-1/2 flex justify-center relative scroll-animation scroll-right">
            <div class="relative w-[300px] lg:w-[500px]">
                <img src="{{ asset('images/Banner-2.png') }}" alt="Dog" class="w-full h-auto object-cover">

                <!-- Hình ảnh nhỏ bên trái -->
                <div class="absolute top-12 -left-10 transform rotate-6">
                    <img src="{{ asset('images/Banner-3.png') }}" alt="Small Image 1" class="w-16 h-16 lg:w-24 lg:h-24 rounded-full border-4 border-white shadow-md small-shake">
                </div>

                <!-- Hình ảnh nhỏ bên phải -->
                <div class="absolute bottom-0 -right-10 transform rotate-12">
                    <img src="{{ asset('images/Banner-1.png') }}" alt="Small Image 2" class="w-16 h-16 lg:w-24 lg:h-24 rounded-full border-4 border-white shadow-md small-shake">
                </div>

                <!-- Hình ảnh tròn trên đầu -->
                <div class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159.6 179.5" class="w-16 h-16 lg:w-24 lg:h-24 svg-rotate" fill="pink">
                        <path class="bbg0" d="M115.8,172.6c-49.9,18.2-90.9-3-105.7-25.5C4.1,137.9,0.1,126.9,0,115.7c-0.1-18.7,14.1-34.3,30.4-41.3C43,69.1,55.1,61.5,62.9,50C72,36.7,71.3,19.3,83.1,7.4c9.8-9.9,23.5-9.2,34.4-1.4C147.1,27.2,171.9,69,153,128C148.6,141.8,140.2,163.8,115.8,172.6"></path>
                        <img src="images/women-and-dog.png" class="absolute bottom-1 right-0">
                    </svg>
                </div>
            </div>
        </div>

        <!-- Các biểu tượng thêm -->
        <div class="flex justify-center space-x-4 pt-8 lg:pt-0 scroll-animation scroll-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.3 106.5" width="64" height="64" class="small-shake">
                <path class="pb0" d="M25,60.1c-1.7-0.1-3.5,0.1-5.1,0.7c-0.9,0.3-1.7,0.7-2.4,1.3c-0.8-0.3-1.7-0.5-2.6-0.5 c-1.9,0.1-3.7,0.8-5.1,2.1c-0.8,0.6-1.4,1.3-2.1,2c-0.7,0.8-1.3,1.5-2,2.3c-0.8,0.8-1.4,1.7-2,2.7c-0.6,0.9-1.1,1.9-1.6,2.8 c-1,1.7-2.1,3.3-2,5.3c0,1.1,0.4,2.1,1.1,2.9l0,0c-0.4,1.5-0.6,3-0.6,4.5c-0.1,1.8,0.1,3.6,0.7,5.2C2,93.3,3,95,4.4,96.6 c1.5,1.5,3.1,2.9,4.9,4.1c0,0,0,0,0.1,0.1c0.2,0.1,0.4,0.3,0.5,0.4c0.2,0.1,0.4,0.3,0.6,0.4c0.2,0.1,0.4,0.3,0.6,0.4 c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0.1,0.1,0.1,0.1c0.5,0.4,1,0.8,1.5,1.1c0.1,0.1,0.3,0.2,0.5,0.3c0.1,0,0.1,0,0.2,0.1 c0.2,0.1,0.5,0.2,0.7,0.4c1.9,1,3.8,1.7,5.8,2.2c2,0.4,4.1,0.2,6.1-0.5c0.4-0.1,0.9-0.3,1.3-0.6c0.4-0.2,0.7-0.5,1-0.8 c0.2-0.3,0.5-0.5,0.7-0.8c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.1,0.1-0.1,0.2-0.1l0,0c1.2-0.1,2.4-0.3,3.5-0.7c1.4-0.6,2.7-1.4,3.9-2.4 c1.1-0.9,2-1.9,2.9-3.1c0.6-0.8,1.2-1.7,1.8-2.5c0.4-0.7,0.8-1.5,1.1-2.2c0.7-1.6,1.4-3.2,2-4.8c0.2-0.6,0.4-1.2,0.6-1.8 c0.1-0.2,0.1-0.4,0.2-0.6c0-0.2,0.1-0.4,0.1-0.6l0,0c0-0.1,0-0.3,0.1-0.4c0.2-0.9,0.2-1.8,0.2-2.7c0-0.5-0.1-1-0.2-1.4 c-0.1-0.5-0.3-1-0.6-1.5c-0.4-0.9-0.9-1.7-1.4-2.5l-0.1-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4,0.1-0.5 c0-0.6,0-1.2-0.2-1.8c-0.2-0.8-0.5-1.7-0.8-2.4c-0.3-0.7-0.8-1.3-1.2-1.8c-0.4-0.5-0.8-0.9-1.2-1.3c0.3-0.1,0.5-0.2,0.8-0.3 c1-0.7,1.8-1.5,2.5-2.5c0.8-1,1.5-2,2.3-3.1c0.1-0.2,0.2-0.3,0.3-0.5c0-0.1,0.1-0.1,0.1-0.2c0.6-0.6,1.1-1.2,1.5-2 c0.3-0.6,0.4-1.2,0.4-1.8l0.1-0.1c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.3-0.2,0.5-0.4,0.8-0.5c0.9-0.6,1.9-1.1,2.9-1.7 c0.8-0.5,1.5-1.1,2.3-1.7c0.9-0.7,1.9-1.4,2.8-2.1c1.7-1.3,3.3-2.6,5-3.8c1.6-1.3,3.3-2.6,4.8-4c1.2-1.1,2.3-2.3,3.3-3.4 c2.1-2.3,4-4.8,5.9-7.3c1.8-2.5,3.3-5.1,4.7-7.8c1.3-2.6,2.3-5.4,2.8-8.2c0.5-2.6,0.4-5.4-0.4-8c-1-3-3.2-5.5-6-6.8 c-2.9-1.3-6.1-1.4-9.1-0.3c-1.8,0.8-3.4,1.8-4.9,3.1c-1.6,1.4-2.9,2.9-4.2,4.6c-2.3,3.2-4.2,6.8-5.6,10.5c-1.4,3.3-2.5,6.8-3.5,10.3 c-0.6,1.9-1.2,3.9-1.9,5.8c-0.3,1-0.7,2-1.1,3c-0.2,0.5-0.4,0.9-0.5,1.4c-0.1,0.2-0.2,0.5-0.3,0.7l-0.1,0.3l0,0l-0.1,0.2 c-1.5,3.5-3.2,7-5.1,10.3c-0.1,0-0.3,0-0.4,0c-0.7,0.1-1.3,0.6-1.6,1.3c-0.3,0.4-0.5,0.8-0.8,1.1c-0.1,0.2-0.3,0.4-0.4,0.5l0,0 l-0.3,0.3c-0.2,0.3-0.5,0.6-0.7,0.9c-0.1,0.1-0.2,0.2-0.3,0.3c0.1-0.1-0.4,0.5-0.3,0.4l-0.2,0.2c-0.6,0.8-1.3,1.6-1.9,2.4 c-0.4,0.5-0.7,0.9-1,1.4c-0.2,0.3-0.3,0.6-0.5,1c-0.3,0.3-0.6,0.6-0.8,0.9c-0.2-0.1-0.4-0.2-0.7-0.2c-0.6-0.2-1.2-0.4-1.8-0.6 C28,60.6,26.5,60.3,25,60.1 M21.3,63.7c0.4-0.1,0.8-0.2,1.2-0.3c0.1,0,0.2,0,0.3-0.1l0.1,0c0.3,0,0.5-0.1,0.8-0.1c0.5,0,0.9,0,1.4,0 c0.1,0,0.2,0,0.3,0l0.1,0c0.1,0,0.1,0,0.2,0c-0.9,0.5-1.7,1.1-2.4,1.8c-0.8-0.4-1.5-0.9-2.3-1.3C21.1,63.8,21.2,63.7,21.3,63.7  M26.3,70.8L26.3,70.8c0-0.1-0.1-0.1-0.1-0.2C26.2,70.7,26.3,70.7,26.3,70.8 M16.9,65.3C16.6,65.1,16.8,65.2,16.9,65.3 M15.2,64.8 C14.9,64.8,15.1,64.8,15.2,64.8 M14.3,64.8C13.9,64.9,14.2,64.8,14.3,64.8 M11.1,66.6c0.2-0.2,0.3-0.3,0.5-0.5 c0.1,0,0.1-0.1,0.2-0.1l0.1-0.1c0.4-0.3,0.8-0.5,1.2-0.7c0.1,0,0.3-0.1,0.4-0.2c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.3-0.1,0.4-0.1 c0.1,0,0.2,0,0.3,0c0.2,0,0.3,0,0.5,0c0.1,0,0.1,0,0.2,0c0.4,0.1,0.7,0.1,1,0.3c0.2,0,0.3,0.1,0.5,0.2l0.2,0.1 c0.3,0.1,0.7,0.3,1,0.5c1.6,0.8,3.1,1.7,4.6,2.6c0.5,0.3,0.9,0.5,1.3,0.8c0.2,0.1,0.4,0.3,0.6,0.4c0.1,0.1,0.2,0.2,0.3,0.2l0.1,0 l0,0c0.4,0.3,0.9,0.6,1.4,0.9c0,0,0,0,0.1,0l0,0l0,0l0,0l0,0l0,0l0,0c0.1,0.1,0.1,0.1,0,0c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0l0,0 l0,0c0,0,0,0,0,0c0,0.1,0.1,0.2,0.1,0.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0.1,0.2l0,0.1c0.2,0.4,0.2,0.5,0.1,0.2 c-0.2-0.4,0,0,0,0c0,0,0,0,0,0l0,0c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0.2,0,0.4,0.1,0.6c0,0.1,0.1,0.4,0,0.3c0,0.4,0.1,0.7,0,1.1 c0,0.1,0,0.2,0,0.3l0,0c0,0.2-0.1,0.5-0.2,0.7c0,0.1-0.1,0.3-0.2,0.4c-2.5-2.2-5.3-4-8.3-5.5c-0.8-0.4-1.7-0.8-2.6-1.2 c-0.8-0.5-1.6-0.9-2.4-1.3c-0.9-0.4-1.8-0.8-2.8-1l-0.1,0C10.9,66.8,11,66.7,11.1,66.6 M30.3,72.6C30.3,72.6,30.3,72.6,30.3,72.6 c0-0.2,0-0.3,0-0.4c0-0.2-0.1-0.5-0.1-0.7c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1-0.1-0.2c0-0.2-0.1-0.4-0.2-0.6c0.1-0.1,0.3-0.2,0.4-0.2 l0,0c0.1,0,0.2-0.1,0.2-0.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0,0.3,0,0.5,0c0,0,0.2,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1 c0.2,0.1,0.4,0.1,0.6,0.2l0.1,0c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0.1,0.1,0.1,0.1,0.2c-0.3-0.4,0,0,0.1,0.2 c0.1,0.1,0.2,0.3,0.2,0.5l0,0c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.1,0.4,0.2,0.6c0,0.2,0.1,0.4,0.1,0.5c0,0.1,0,0.1,0,0.2 c0,0,0,0.1,0,0.1c0,0.4,0.1,0.8,0.1,1.2c0,0.4,0,0.7,0,1.1c0,0.2,0,0.4-0.1,0.5c0,0.1,0,0.2,0,0.3c-0.1,0.8-0.3,1.6-0.5,2.3 c-0.2,0.5-0.3,0.9-0.5,1.4l0,0l0,0c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.3-0.2,0.5-0.4,0.8c-0.5,1-1,1.9-1.5,2.8c-0.5,0.9-1,1.8-1.5,2.6 c-0.2,0.4-0.5,0.8-0.8,1.2c-0.1,0.2-0.3,0.4-0.4,0.6l-0.1,0.1c0,0-0.2,0.2-0.2,0.3c-0.8,1-1.7,2-2.7,2.9c-0.2,0.2-0.5,0.4-0.7,0.6 c0,0-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.2c-0.5,0.3-1.1,0.6-1.6,0.9c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.2,0.1 c-0.3,0.1-0.6,0.2-0.9,0.3c-0.2,0-0.4,0.1-0.6,0.2l0,0c-0.1,0-0.3,0-0.4,0c-0.3,0-0.5,0-0.8,0c-0.1,0-0.2,0-0.4,0l-0.2,0 c-0.3,0-0.5-0.1-0.7-0.2c0-0.1,0-0.1,0-0.1c0-0.2-0.1-0.3-0.1-0.5c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3 c0,0,0-0.1,0-0.1c0-0.2,0.1-0.3,0.1-0.5c0,0,0-0.1,0-0.1s0-0.1,0.1-0.1c0-0.1,0.1-0.2,0.1-0.2l0.2,0c0.6-0.1,1.1-0.4,1.6-0.8 c1-0.8,2-1.6,3-2.5c0.7-0.6,1.3-1.3,1.8-2c0.7-0.9,1.4-1.7,2-2.6c1.2-1.7,2.3-3.6,3.1-5.5c0.5-1.1,0.9-2.2,1-3.4c0-0.4,0-0.8,0-1.2 C30.4,73.2,30.3,72.9,30.3,72.6 M32.4,70.5l0.1,0.1L32.4,70.5 M33.4,71.6C33.4,71.7,33.4,71.7,33.4,71.6 M17.3,93.4 C17.3,93.5,17.3,93.5,17.3,93.4 M6.4,72.1c0.1-0.2,0.3-0.4,0.4-0.6c0.1-0.1,0.1-0.2,0.2-0.3l0.1-0.1L7.2,71c0.4-0.5,0.8-0.9,1.2-1.4 c0.5,0.1,1,0.2,1.5,0.3c0.4,0.1,0.8,0.2,1.2,0.3c0.1,0,0.2,0.1,0.3,0.1l0,0l0,0c0.2,0.1,0.4,0.2,0.7,0.3c0.8,0.4,1.6,0.8,2.3,1.2 c0.8,0.5,1.7,0.8,2.5,1.2c1.7,0.8,3.3,1.8,4.8,2.8c0.4,0.3,0.8,0.5,1.1,0.8c0.2,0.1,0.4,0.3,0.6,0.4l0.2,0.1l0.2,0.2 c0.6,0.5,1.1,0.9,1.7,1.4c-0.4,0.7-0.8,1.4-1.2,2.1c-0.3,0.4-0.5,0.8-0.8,1.2c-0.1,0.1-0.2,0.2-0.3,0.4c-0.5-0.4-0.9-0.8-1.4-1.1 c-0.8-0.6-1.5-1.1-2.3-1.7L19,79.3c0.4,0.3-0.1-0.1-0.3-0.2c-0.1-0.1-0.2-0.1-0.3-0.2c-0.4-0.2-0.7-0.5-1.1-0.7 c-0.8-0.5-1.7-0.9-2.5-1.3c-1.6-0.9-3.3-1.8-5-2.6c-1.2-0.6-2.5-1.2-3.7-1.7C6.2,72.4,6.3,72.3,6.4,72.1 M4.2,86.4 c-0.2,0.6-0.3,1.3-0.4,2c0,0,0,0,0,0c-0.1-0.8-0.1-1.6,0-2.3c0-0.8,0.1-1.5,0.2-2.3c0,0,0-0.2,0-0.2c0,0,0-0.1,0-0.1l0,0 c0.4,0.2,0.8,0.4,1.2,0.5C4.8,84.7,4.4,85.5,4.2,86.4 M4,79.9c-0.1,0-0.1-0.1-0.1-0.1c0,0-0.2-0.1-0.2-0.2c-0.1-0.1-0.2-0.2-0.3-0.3 l0,0l0,0c0-0.1-0.1-0.1-0.1-0.2c0-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.2,0-0.3c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.2c0-0.2,0.1-0.3,0.1-0.5 c0-0.1,0.1-0.2,0.1-0.2C3.6,77,3.8,76.6,4,76.2l0.5-0.9c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.3,0.1,0.4,0.2l0.2,0.1 c0.1,0,0.2,0.1,0.3,0.2c0.8,0.4,1.7,0.8,2.5,1.2c1.6,0.8,3.3,1.7,4.9,2.6c0.8,0.4,1.6,0.8,2.4,1.3c0.4,0.2,0.8,0.4,1.1,0.7 c0.1,0.1,0.2,0.2,0.3,0.2l0.4,0.3l0.3,0.2c0.7,0.6,1.5,1.1,2.2,1.7c0.2,0.1,0.3,0.2,0.5,0.4l0,0l0,0c0.1,0.1,0.2,0.2,0.3,0.2 c0.2,0.1,0.3,0.3,0.5,0.4c-0.2,0.2-0.3,0.4-0.5,0.5c-0.9,0.8-1.8,1.6-2.7,2.4l0,0c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.3-0.1 c0,0-0.1,0-0.1,0c-0.2-0.1-0.3-0.1-0.5-0.2c-0.4-0.2-0.8-0.5-1.2-0.7c-0.8-0.5-1.6-1-2.4-1.5c-0.9-0.6-1.7-1.3-2.6-1.9 c-0.9-0.6-1.7-1.1-2.7-1.6c-0.9-0.5-1.8-0.9-2.8-1.3C4.9,80.4,4.4,80.1,4,79.9 M6.9,88.5C6.9,88.8,6.9,88.6,6.9,88.5 M9.4,87.8 c-0.4,1-0.7,2-0.9,3c-0.2,1-0.3,1.9-0.3,2.9c0,0.5,0.1,1.1,0.1,1.6c0,0.3,0.1,0.6,0.2,0.9c-0.1-0.1-0.3-0.2-0.4-0.3 c0,0-0.1-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.3-0.7c0,0-0.1-0.2-0.1-0.3c0-0.1-0.1-0.2-0.1-0.3c-0.2-0.6-0.4-1.1-0.6-1.7 c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0-0.3-0.1-0.6-0.1-0.9c0-0.6,0-1.2,0-1.9c0-0.3,0-0.5,0.1-0.8 c0-0.1,0-0.2,0-0.3l0,0C7,88,7.1,87.6,7.2,87.2c0.1-0.2,0.2-0.5,0.2-0.7c0,0,0.1-0.1,0.1-0.2c0-0.1,0.1-0.2,0.1-0.3 c0.1-0.2,0.2-0.4,0.3-0.6c0.7,0.4,1.4,0.9,2,1.4C9.8,87.1,9.6,87.5,9.4,87.8 M24,103.2c-0.1,0-0.2,0-0.3,0.1l-0.1,0 c-0.2,0-0.5,0-0.7,0.1c-0.4,0-0.9,0-1.3,0l-0.1,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.5-0.1-0.8-0.2c-0.5-0.1-0.9-0.3-1.4-0.4 c-0.2-0.1-0.3-0.1-0.5-0.2l-0.2-0.1c-0.1-0.1-0.3-0.1-0.4-0.2c-0.9-0.4-1.9-0.8-2.7-1.3c-0.1-0.1-0.2-0.1-0.3-0.2 c-0.2-0.2-0.4-0.3-0.5-0.5c-0.2-0.2-0.4-0.4-0.6-0.6c-0.1-0.1-0.2-0.2-0.3-0.3L13.2,99c-0.3-0.4-0.6-0.9-0.9-1.4 c0-0.1-0.1-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.4-0.2-0.8-0.3-1.2c-0.1-0.4-0.3-0.7-0.3-1.1c0,0,0-0.1,0-0.1c0,0,0-0.2,0-0.2 c0-0.2,0-0.5,0-0.7c0-0.4,0-0.8,0-1.1c0-0.2,0-0.3,0.1-0.5c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0.1-0.4c0.1-0.4,0.1-0.8,0.2-1.2 c0-0.2,0.1-0.4,0.2-0.6c0-0.1,0.1-0.2,0.1-0.4l0,0l0,0c0.1-0.3,0.3-0.6,0.4-0.8c0.4,0.2,0.8,0.5,1.1,0.7c0.4,0.2,0.8,0.5,1.2,0.7 c-1,1.8-1,3.9-0.1,5.7c1,1.8,2.4,3.4,4.2,4.5c1.7,1,3.5,1.8,5.4,2.4c0.3,0.1,0.6,0.2,0.9,0.3C24.8,103,24.4,103.1,24,103.2  M23.3,98.6C23.5,98.6,23.4,98.6,23.3,98.6 M27,97.2c-0.3,0.1-0.6,0.3-0.9,0.4c-0.2,0.1-0.3,0.1-0.5,0.2l-0.2,0.1 c-0.5,0.2-1,0.4-1.5,0.5c-0.2,0.1-0.4,0.1-0.6,0.1c0,0-0.1,0-0.1,0l0,0c-0.1,0-0.2,0-0.3,0c0,0,0,0-0.1,0c-0.1,0-0.3-0.1-0.4-0.1 c-0.8-0.4-1.6-0.8-2.3-1.3l0,0c0.2,0,0.4,0,0.5-0.1c1.7-0.3,3.4-1.1,4.8-2.1c1.6-1.2,3.1-2.6,4.3-4.2c1.3-1.7,2.4-3.4,3.4-5.3 c1.7-2.7,2.8-5.7,3.4-8.8c0.2-1.1,0.2-2.3,0.2-3.4c0.5,0.4,1,0.7,1.5,1c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2 c0,0,0.1,0.3,0.1,0.4c0.1,0.2,0.1,0.4,0.1,0.6c0,0.1,0,0.3,0.1,0.4c0,0.1,0,0.2,0,0.3c0,0.4,0,0.8,0,1.1c0,0.4,0,0.7-0.1,1.1l0,0 c0,0.1,0,0.1,0,0.2c0,0.2-0.1,0.4-0.1,0.6c-0.1,0.7-0.3,1.3-0.4,2c-0.1,0.5-0.3,0.9-0.4,1.4c-0.1,0.2-0.2,0.5-0.3,0.7 c0,0.1-0.1,0.1-0.1,0.2c0,0-0.1,0.3-0.1,0.3c-0.4,1-0.9,1.9-1.4,2.8c-0.9,1.7-1.9,3.4-3,5.1c-0.2,0.3-0.4,0.6-0.6,0.8l-0.1,0.2l0,0 c-0.1,0.1-0.2,0.3-0.3,0.4c-0.5,0.6-1,1.1-1.5,1.6c-0.2,0.2-0.5,0.4-0.7,0.6l0,0l-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3 C28.4,96.5,27.7,96.9,27,97.2 M38.4,74.4L38.4,74.4L38.4,74.4L38.4,74.4 M38.9,78.7C38.9,78.8,38.9,78.9,38.9,78.7 M34.3,98.2 L34.3,98.2 M42.1,78.8c0.1,0.2,0.2,0.4,0.3,0.6c0.1,0.2,0.2,0.4,0.3,0.6c0,0,0,0.1,0.1,0.1c0,0.1,0.1,0.2,0.1,0.2 c0.1,0.2,0.1,0.3,0.1,0.5c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3c0,0.4,0,0.8,0,1.3c0,0.1,0,0.2,0,0.3l0,0.1c0,0.2,0,0.3-0.1,0.4 c0,0.2-0.1,0.5-0.1,0.7c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2c-0.3,1.2-0.7,2.4-1.3,3.5l0,0.1L41.3,88c-0.1,0.2-0.2,0.4-0.2,0.6 c-0.2,0.4-0.4,0.8-0.5,1.2c-0.3,0.8-0.7,1.5-1.1,2.2c-0.4,0.8-0.9,1.6-1.5,2.3c-0.1,0.1-0.2,0.3-0.3,0.4l0,0.1 c-0.1,0.1-0.1,0.2-0.2,0.2c-0.3,0.3-0.5,0.6-0.8,0.9c-0.4,0.5-0.9,1-1.4,1.4c-0.2,0.2-0.4,0.4-0.6,0.5c-0.1,0.1-0.2,0.1-0.3,0.2 l-0.1,0.1c-0.5,0.4-1.1,0.8-1.7,1.1c-0.1,0.1-0.2,0.1-0.4,0.2c-0.1,0-0.1,0-0.2,0.1c-0.2,0.1-0.5,0.1-0.8,0.2 c-0.3,0.1-0.6,0.1-0.9,0.2c-0.1,0-0.3,0-0.4,0.1c-0.1,0-0.2,0-0.4,0c-0.4,0-0.7,0.1-1.1,0.1c0.6-0.3,1.2-0.6,1.7-0.9 c3.4-2,5.6-5.4,7.6-8.8c1.9-3,3.2-6.2,4-9.6C41.9,80.1,42,79.4,42.1,78.8 M40,64.3C40.2,64.3,40.2,64.3,40,64.3 M44.9,57.8 C44.8,57.9,44.7,58,44.9,57.8 M72.2,32.6L72.2,32.6 M79.3,20.8L79.3,20.8 M81.1,10.8C81.1,10.6,81.1,10.7,81.1,10.8 M49,42.3 c1.6-3.9,3-7.9,4.3-12c1.1-3.5,2.2-6.9,3.5-10.3l0.1-0.3l0,0c0.1-0.2,0.2-0.4,0.3-0.6c0.2-0.5,0.4-0.9,0.6-1.4 c0.4-0.9,0.8-1.8,1.3-2.7c0.9-1.7,1.9-3.4,3.1-5c0.1-0.1,0.1-0.2,0.2-0.3l0,0l0,0c0.1-0.2,0.3-0.4,0.4-0.5c0.3-0.4,0.7-0.8,1-1.1 c0.7-0.7,1.4-1.4,2.1-2.1c0.2-0.2,0.4-0.3,0.6-0.5c0.1-0.1,0.2-0.2,0.3-0.2l0.1,0l0,0c0.4-0.3,0.8-0.6,1.3-0.9 C68.4,4.3,68.7,4.1,69,4c0.1-0.1,0.3-0.1,0.4-0.2c0.1,0,0.2-0.1,0.3-0.1c0.3-0.1,0.6-0.2,1-0.3c0.2,0,0.3-0.1,0.5-0.1 c0.1,0,0.2,0,0.2,0l0,0c0.7-0.1,1.4-0.1,2.1,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0,0.5,0.1c0.4,0.1,0.7,0.2,1,0.3c0.2,0,0.3,0.1,0.5,0.2 c0.1,0,0.2,0.1,0.3,0.1c0.3,0.1,0.5,0.3,0.8,0.4c0.3,0.2,0.6,0.3,0.8,0.5c0.1,0,0.1,0.1,0.2,0.1C78,5,78.1,5.1,78.3,5.2 c0.3,0.2,0.5,0.5,0.7,0.7c0.1,0.1,0.2,0.3,0.3,0.4l0,0c0,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.4,0.6,0.6,0.9c0.1,0.2,0.2,0.3,0.2,0.5 c0,0.1,0.1,0.2,0.1,0.2l0,0c0.2,0.5,0.4,1.1,0.5,1.7c0.1,0.3,0.1,0.6,0.2,0.8c0,0,0,0.1,0,0.1l0,0c0,0.2,0,0.3,0.1,0.5 c0.1,0.6,0.1,1.2,0,1.9c0,0.3,0,0.6-0.1,0.9c0,0.1,0,0.3,0,0.4c0,0.1,0,0.2,0,0.3c-0.1,0.7-0.2,1.3-0.4,1.9c-0.3,1.4-0.8,2.7-1.3,4 l0,0l-0.1,0.2c-0.1,0.2-0.1,0.3-0.2,0.5c-0.2,0.3-0.3,0.7-0.5,1c-0.3,0.7-0.7,1.3-1,2c-1.5,2.7-3.1,5.3-5,7.7 c-0.1,0.1-0.2,0.3-0.3,0.4l-0.1,0.1l0,0c-0.2,0.3-0.5,0.6-0.7,0.9c-0.5,0.6-0.9,1.2-1.4,1.7c-0.9,1.1-1.9,2.2-2.9,3.2 c-2.8,2.9-5.9,5.5-9.2,7.9c-0.7,0.6-1.5,1.1-2.2,1.7l-0.2,0.2l0,0l-0.1,0.1l-0.6,0.5c-0.4,0.3-0.8,0.6-1.2,0.9 c-1.1,0.8-2.2,1.6-3.4,2.4c-0.7,0.4-1.3,0.8-2,1.2c0.3-0.6,0.7-1.1,1-1.7c2.7-2,5.4-4,8-6.1c2.4-1.9,4.6-4,6.9-6.2 c3.1-2.9,5.9-6.1,8.4-9.5c2.5-3.5,4.5-7.4,5.8-11.5c0.4-1.1,0.7-2.2,0.9-3.3c0.2-1.2,0.2-2.4,0-3.5C79,9,77.7,6.9,75.7,5.7 c-1.4-0.8-3-1.1-4.6-0.7c-1.4,0.4-2.6,1.1-3.7,2.1c-0.9,0.8-1.8,1.7-2.5,2.6c-1.3,1.5-2.5,3.1-3.5,4.9c-2.1,3.6-3.7,7.5-4.8,11.5 c-1.2,3.9-2.5,7.8-4,11.7c-0.3,0.7-0.5,1.4-0.8,2.1c-0.1,0.3-0.3,0.7-0.4,1c-0.1,0.2-0.1,0.3-0.2,0.5l0,0.1c0,0-0.1,0.2-0.1,0.2 c-0.6,1.5-1.3,2.9-2.1,4.3c-1.3,2.3-2.7,4.5-4,6.8c-0.2-0.2-0.5-0.4-0.7-0.5C46,48.9,47.6,45.7,49,42.3 M76.2,14.3 c0,0.2-0.1,0.4-0.1,0.6c-0.2,0.9-0.5,1.9-0.8,2.8c-0.2,0.5-0.3,1-0.5,1.4c-0.1,0.2-0.2,0.5-0.3,0.7c0,0.1-0.1,0.2-0.1,0.4l-0.1,0.3 c-0.8,1.9-1.7,3.8-2.8,5.5c-0.6,0.9-1.2,1.8-1.8,2.6c-0.1,0.2-0.3,0.4-0.4,0.5l-0.1,0.1l-0.2,0.3c-0.3,0.4-0.7,0.8-1,1.3 c-1.3,1.6-2.7,3.1-4.2,4.6c-2.4,2.4-4.8,4.8-7.4,6.9c-1,0.9-2.1,1.7-3.2,2.5c0-0.1,0.1-0.2,0.1-0.3c0.9-2,1.7-4,2.4-6.1 c0.7-1.9,1.4-3.9,2.1-5.9c0.7-1.9,1.3-3.9,1.9-5.8c0.3-1,0.6-1.9,0.9-2.9c0.2-0.5,0.3-0.9,0.5-1.4c0.1-0.2,0.2-0.5,0.3-0.7 c0-0.1,0.1-0.2,0.1-0.3l0,0l0.1-0.2c0.8-1.9,1.7-3.7,2.8-5.5c0.5-0.9,1.1-1.7,1.7-2.5l0.1-0.1l0.2-0.2c0.1-0.2,0.3-0.4,0.5-0.6 c0.2-0.3,0.4-0.5,0.6-0.7c0.5-0.6,1.1-1.2,1.6-1.8c0.3-0.3,0.6-0.6,0.9-0.8L70,9l0.1-0.1c0.2-0.1,0.4-0.2,0.5-0.4 c0.2-0.1,0.3-0.2,0.5-0.3c0,0,0.1,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1C71.6,8.1,71.8,8.1,72,8c0,0,0.1,0,0.1,0c0,0,0.1,0,0.2,0 c0.2,0,0.4,0,0.6,0l0,0c0.1,0,0.2,0,0.3,0.1c0.2,0,0.3,0.1,0.4,0.1c0,0,0.1,0,0.1,0.1c0.1,0.1,0.3,0.1,0.4,0.2 c0.2,0.1,0.3,0.2,0.5,0.3l0.1,0c0,0,0.1,0,0.1,0.1C74.8,9,75,9.1,75.1,9.2c0.1,0.1,0.1,0.1,0.2,0.2l0,0l0,0c0.2,0.3,0.4,0.6,0.5,0.9 c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0.1,0.2,0.1,0.4,0.2,0.6c0,0.2,0.1,0.3,0.1,0.5c0,0.1,0.1,0.3,0.1,0.4c0,0.3,0.1,0.7,0.1,1 c0,0.4,0,0.7-0.1,1.1l0,0C76.2,14.2,76.2,14.2,76.2,14.3 M76.2,14.2C76.2,14.3,76.2,14.4,76.2,14.2 M30.9,65.3c0.1,0,0.1,0,0.2,0 c0.2,0,0.4,0.1,0.6,0.1c0.3,0.1,0.6,0.2,1,0.3l0.1,0c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.3,0.1,0.4,0.2c0.2,0.1,0.3,0.2,0.5,0.2 c0.1,0,0.1,0.1,0.2,0.1c0.7,0.5,1.4,0.9,2.1,1.4c0.2,0.1,0.3,0.2,0.4,0.3l0,0c0.2,0.1,0.3,0.3,0.5,0.4c0.4,0.4,0.9,0.8,1.3,1.2 c0.2,0.2,0.4,0.5,0.6,0.7c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0.1,0.2,0.2,0.2c0.1,0.2,0.2,0.3,0.3,0.5c-0.1-0.1-0.2-0.1-0.3-0.2 c-0.9-0.6-1.7-1.2-2.6-1.8c-0.9-0.6-1.7-1.1-2.6-1.7c-1-0.5-2-0.9-3.1-1c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.6,0 c-0.4,0-0.7,0.1-1,0.2c-0.6,0.2-1.2,0.5-1.7,0.8c0,0-0.1,0.1-0.1,0.1l-0.2-0.1l-0.3-0.2c-0.1-0.1-0.1-0.1,0.1,0.1l-0.2-0.2 c-0.4-0.3-0.7-0.6-1.1-0.8c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.1,0.3-0.2c0.3-0.2,0.6-0.3,0.8-0.5c0.1-0.1,0.3-0.1,0.4-0.2l0,0 l0.1,0c0.3-0.1,0.5-0.2,0.8-0.2c0.1,0,0.3-0.1,0.4-0.1c0,0,0.1,0,0.2,0c0.5,0,0.9-0.1,1.4,0L30.9,65.3"></path>
            </svg>
            <img src="images/pet-plate-icon.svg" width="64" height="64" class="small-shake">
        </div>

        <!-- Phần mô tả dịch vụ -->
        <div class="lg:w-full mt-12 lg:mt-0 lg:ml-20">
            <h2 class="text-3xl lg:text-4xl font-bold">Dịch vụ tốt nhất của chúng tôi</h2>
            <p class="text-gray-600 mt-4 text-lg">Cung cấp các nhu yếu phẩm, phụ kiện với chất lượng và giá cả hợp lý nhất.</p>
            <a href="{{ route('shop') }}" class="mt-4 bg-orange-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg text-lg float-right">Xem ngay</a>
        </div>
    </section>

    <div class="container mx-auto py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- First Box -->
            <div class="bg-pink-100 rounded-xl p-6 relative bg-cover bg-no-repeat h-64" style="background-image: url('images/bg-1.webp'); background-position: right bottom; background-size: cover;">
                <h2 class="text-2xl font-bold mb-2">Phụ kiện thú cưng</h2>
                <p class="text-sm mb-4"></p>
                <a href="{{ route('shop') }}" class="font-bold text-sm">Xem thêm &rarr;</a>
            </div>

            <!-- Second Box -->
            <div class="bg-blue-100 rounded-xl p-6 relative bg-cover bg-no-repeat h-64" style="background-image: url('images/bg-2.webp'); background-position: right bottom; background-size: cover;">
                <h2 class="text-2xl font-bold mb-2">Tiết kiệm tới 30%</h2>
                <p class="text-sm font-bold">Quần áo cho Pet</p>
                <p class="text-sm mb-4">Tham khảo bộ đồ cực đáng yêu!</p>
                <a href="{{ route('shop') }}" class="font-bold text-sm">Xem thêm &rarr;</a>
            </div>

            <!-- Third Box -->
            <div class="bg-yellow-400 rounded-xl p-6 relative bg-cover bg-no-repeat row-span-2" style="background-image: url('images/bg-3.webp'); background-position: right bottom; background-size: cover;">
                <h2 class="text-2xl font-bold mb-2">Túi đựng an toàn</h2>
                <p class="text-sm mb-4 w-1/3">Những chiếc túi, giỏ vừa an toàn vừa thời trang dành cho thú cưng của bạn</p>
                <a href="{{ route('shop') }}" class="font-bold text-sm">Xem thêm &rarr;</a>
                <span class="absolute bottom-3 left-3 bg-red-500 text-white text-xl w-32 h-32 text-center justify-center flex items-center rounded-full">NEW!</span>
            </div>

            <!-- Fourth Box -->
            <div class="bg-teal-100 rounded-xl p-6 relative bg-cover bg-no-repeat h-64" style="background-image: url('images/bg-4.webp'); background-position: right bottom; background-size: cover;">
                <h2 class="text-2xl font-bold mb-2">Tiết kiệm đến 10%</h2>
                <p class="text-sm font-bold">Dành cho những chú chim đáng yêu</p>
                <a href="{{ route('shop') }}" class="font-bold text-sm">Xem thêm &rarr;</a>
            </div>

            <!-- Fifth Box -->
            <div class="bg-red-100 rounded-xl p-6 relative bg-cover bg-no-repeat h-64" style="background-image: url('images/bg-5.webp'); background-position: right bottom; background-size: cover;">
                <h2 class="text-2xl font-bold mb-2">Tiết kiệm tới 10%</h2>
                <p class="text-sm font-bold">Các loại cá cảnh</p>
                <p class="text-sm mb-4">Tất cả những gì cần cho việc chăm sóc cá</p>
                <a href="{{ route('shop') }}" class="font-bold text-sm">Xem thêm &rarr;</a>
            </div>

        </div>
    </div>

{{--    Shop--}}

    <h2 class="text-4xl font-bold text-center mb-12">
        Cửa hàng
        <span class="text-amber-500">
            <svg class="inline w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M8.5 2.5C9.3 2.5 10 3.2 10 4C10 4.8 9.3 5.5 8.5 5.5C7.7 5.5 7 4.8 7 4C7 3.2 7.7 2.5 8.5 2.5ZM12.5 7.5C13.3 7.5 14 8.2 14 9C14 9.8 13.3 10.5 12.5 10.5C11.7 10.5 11 9.8 11 9C11 8.2 11.7 7.5 12.5 7.5ZM6.5 7.5C7.3 7.5 8 8.2 8 9C8 9.8 7.3 10.5 6.5 10.5C5.7 10.5 5 9.8 5 9C5 8.2 5.7 7.5 6.5 7.5ZM3.5 2.5C4.3 2.5 5 3.2 5 4C5 4.8 4.3 5.5 3.5 5.5C2.7 5.5 2 4.8 2 4C2 3.2 2.7 2.5 3.5 2.5ZM1.5 7.5C2.3 7.5 3 8.2 3 9C3 9.8 2.3 10.5 1.5 10.5C0.7 10.5 0 9.8 0 9C0 8.2 0.7 7.5 1.5 7.5Z"></path>
            </svg>
        </span>
    </h2>
    <div class="container mx-auto px-4 pt-12 flex gap-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 w-full">
            <!-- Product List -->
            <div class="col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($products as $product)
                    <div class="bg-white p-4 text-center w-full group">
                        <div class="">
                            <!-- Phần hình ảnh -->
                            <div class="relative group-hover:bg-pink-200 rounded-xl border-gray-200 py-6 overflow-hidden border">
                                @if($product->images->isNotEmpty())
                                    <!-- Sử dụng class object-cover và cố định kích thước hình ảnh -->
                                    <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="Product Image" class="object-cover w-full h-60 group-hover:scale-95 transition-transform duration-300 ease-in-out">
                                @else
                                    <p>Không có hình ảnh nào</p>
                                @endif

                                @if($product->sale > 0)
                                    <p class="text-white absolute top-0 p-2 bg-red-600 w-auto">{{ $product->sale}}%</p>
                                @endif
                                <!-- Add to Cart Button -->
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="absolute inset-x-10 bottom-4 mx-auto hidden group-hover:flex bg-orange-500 text-white px-4 py-2 rounded-full justify-center items-center lg:text-md text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5 mr-1" fill="white">
                                            <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20l44 0 0 44c0 11 9 20 20 20s20-9 20-20l0-44 44 0c11 0 20-9 20-20s-9-20-20-20l-44 0 0-44c0-11-9-20-20-20s-20 9-20 20l0 44-44 0c-11 0-20 9-20 20z"/>
                                        </svg>
                                        Thêm vào giỏ hàng
                                    </button>
                                </form>
                            </div>
                            <div class="my-4">
                                <!-- Thông tin sản phẩm -->
                                <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="text-xl hover:text-orange-400 py-5">{{ $product->name }}</a>
                                <div class="flex md:flex-cols-2 justify-center gap-2">
                                    <p class="text-blue-400">
                                        {{ number_format($product->sale > 0 ? ($product->price - $product->price * $product->sale / 100) : $product->price) }} đ
                                    </p>
                                    @if ($product->sale > 0)
                                        <p class="text-gray-500 line-through">{{ number_format($product->price ) }} đ</p>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar Image -->
            <div class="col-span-1 hidden lg:block">
                <div class="bg-yellow-400 p-6 rounded-xl">
                    <h3 class="font-bold text-2xl mb-4">Thực phẩm dinh dưỡng</h3>
                    <p class="mb-6">
                        Thức ăn chất lượng đảm bảo sức khỏe và hạnh phúc cho thú cưng của bạn.</p>
                    <a href="{{ route('shop') }}" class="bg-orange-500 text-white px-4 py-2 rounded-full inline-block">Xem ngay</a>
                    <img src="images/banner-shop.webp" alt="Trusted Food" class="w-full mt-4 rounded-xl">
                </div>
            </div>
        </div>
    </div>
    <button class="bg-amber-500 text-white text-lg px-6 py-4 rounded-full mx-auto block text-sm mb-10 hover:bg-amber-600">
        <a href="{{ route('shop') }}">
            Xem thêm
        </a>
    </button>

    <div class="container m-auto">
        <img src="images/banner-mini-2.webp" class="w-full">
    </div>

{{--    Services we offer--}}
    <div class="container mx-auto py-16">
        <h2 class="text-4xl font-bold text-center mb-12">
            Những dịch vụ chúng tôi cung cấp
            <span class="text-amber-500">
            <svg class="inline w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M8.5 2.5C9.3 2.5 10 3.2 10 4C10 4.8 9.3 5.5 8.5 5.5C7.7 5.5 7 4.8 7 4C7 3.2 7.7 2.5 8.5 2.5ZM12.5 7.5C13.3 7.5 14 8.2 14 9C14 9.8 13.3 10.5 12.5 10.5C11.7 10.5 11 9.8 11 9C11 8.2 11.7 7.5 12.5 7.5ZM6.5 7.5C7.3 7.5 8 8.2 8 9C8 9.8 7.3 10.5 6.5 10.5C5.7 10.5 5 9.8 5 9C5 8.2 5.7 7.5 6.5 7.5ZM3.5 2.5C4.3 2.5 5 3.2 5 4C5 4.8 4.3 5.5 3.5 5.5C2.7 5.5 2 4.8 2 4C2 3.2 2.7 2.5 3.5 2.5ZM1.5 7.5C2.3 7.5 3 8.2 3 9C3 9.8 2.3 10.5 1.5 10.5C0.7 10.5 0 9.8 0 9C0 8.2 0.7 7.5 1.5 7.5Z"></path>
            </svg>
        </span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <!-- Grooming Salon -->
            <div>
                <div class="mb-4 flex justify-center items-center">
                    <img src="images/service-1.webp">
                </div>
                <h4 class="text-2xl font-bold mb-2">Grooming Spa</h4>
                <p class="text-gray-600">
                    Dịch vụ spa chăm sóc toàn diện, giúp thú cưng luôn sạch sẽ và thoải mái.
                </p>
            </div>

            <!-- Pet's Training -->
            <div>
                <div class="mb-4 flex justify-center items-center">
                    <img src="images/service-2.webp">
                </div>
                <h4 class="text-2xl font-bold mb-2">Khách sạn thú cưng</h4>
                <p class="text-gray-600">
                    Không gian nghỉ dưỡng an toàn, thoải mái cho thú cưng khi bạn vắng nhà.
                </p>
            </div>

            <!-- Dog's Walking -->
            <div>
                <div class="mb-4 flex justify-center items-center">
                    <img src="images/service-3.webp">
                </div>
                <h4 class="text-2xl font-bold mb-2">Du lịch</h4>
                <p class="text-gray-600">
                    Dịch vụ đưa thú cưng đi du lịch an toàn, tận hưởng những chuyến đi cùng chủ.
                </p>
            </div>

            <!-- Boarding -->
            <div>
                <div class="mb-4 flex justify-center items-center">
                    <img src="images/service-4.webp">
                </div>
                <h4 class="text-2xl font-bold mb-2">Khám sức khỏe lâm sàn</h4>
                <p class="text-gray-600">
                    Kiểm tra sức khỏe định kỳ để thú cưng luôn khỏe mạnh và phát triển tốt.
                </p>
            </div>
        </div>
    </div>

    <div class="container m-auto">
        <img src="images/banner-mini.webp" class="w-full">
    </div>

    <div class="container mx-auto py-16 px-4">
        <!-- Title -->
        <h2 class="text-4xl font-bold text-center mb-12">
            Những câu hỏi thường gặp
            <span class="text-amber-500">
            <svg class="inline w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M8.5 2.5C9.3 2.5 10 3.2 10 4C10 4.8 9.3 5.5 8.5 5.5C7.7 5.5 7 4.8 7 4C7 3.2 7.7 2.5 8.5 2.5ZM12.5 7.5C13.3 7.5 14 8.2 14 9C14 9.8 13.3 10.5 12.5 10.5C11.7 10.5 11 9.8 11 9C11 8.2 11.7 7.5 12.5 7.5ZM6.5 7.5C7.3 7.5 8 8.2 8 9C8 9.8 7.3 10.5 6.5 10.5C5.7 10.5 5 9.8 5 9C5 8.2 5.7 7.5 6.5 7.5ZM3.5 2.5C4.3 2.5 5 3.2 5 4C5 4.8 4.3 5.5 3.5 5.5C2.7 5.5 2 4.8 2 4C2 3.2 2.7 2.5 3.5 2.5ZM1.5 7.5C2.3 7.5 3 8.2 3 9C3 9.8 2.3 10.5 1.5 10.5C0.7 10.5 0 9.8 0 9C0 8.2 0.7 7.5 1.5 7.5Z"></path>
            </svg>
        </span>
        </h2>

        <!-- FAQ Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Side (FAQs) -->
            <div class="w-full bg-white rounded-lg shadow-md dark:bg-neutral-800">
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one">
                        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-2xl w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-collapse-one">
                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Làm sao để biết đơn hàng của tôi đã được đặt thành công?
                        </button>
                        <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-one">
                            <div class="pb-4 px-6">
                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                    Sau khi hoàn tất việc đặt hàng, bạn sẽ nhận được thông báo xác nhận đơn hàng qua email hoặc tin nhắn SMS mà bạn đã cung cấp. Thông tin xác nhận sẽ bao gồm mã đơn hàng và chi tiết về sản phẩm mà bạn đã mua. Bạn cũng có thể kiểm tra thông tin đặt hàng trong phần "Lịch sử đơn hàng" trên tài khoản cá nhân của mình.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-heading-two">
                        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-2xl w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-two">
                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Làm cách nào để kiểm tra trạng thái đơn hàng của tôi?
                        </button>
                        <div id="hs-basic-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-two">
                            <div class="pb-4 px-6">
                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                    Bạn có thể kiểm tra trạng thái đơn hàng của mình bằng cách đăng nhập vào tài khoản trên website của chúng tôi và truy cập phần "Lịch sử đơn hàng". Ngoài ra, bạn sẽ nhận được email hoặc tin nhắn cập nhật khi đơn hàng của bạn được xử lý và vận chuyển. Nếu bạn có bất kỳ thắc mắc nào, hãy liên hệ với đội ngũ hỗ trợ khách hàng của chúng tôi để được giải đáp.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-heading-three">
                        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-2xl w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-three">
                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Tôi có thể hủy đơn hàng được không?
                        </button>
                        <div id="hs-basic-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-three">
                            <div class="pb-4 px-6">
                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                    Bạn hoàn toàn có thể hủy đơn hàng nếu sản phẩm chưa được chuyển sang giai đoạn vận chuyển. Vui lòng truy cập phần "Lịch sử đơn hàng" trên tài khoản của bạn và nhấp vào "Hủy đơn hàng". Nếu sản phẩm đã được giao đến đơn vị vận chuyển, chúng tôi sẽ không thể hủy đơn. Trong trường hợp này, bạn có thể yêu cầu đổi trả hàng sau khi nhận được sản phẩm.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hs-accordion" id="hs-basic-heading-four">
                        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-2xl w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-three">
                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Tôi cần biết những điều gì
                        </button>
                        <div id="hs-basic-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-three">
                            <div class="pb-4 px-6">
                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                    Để đảm bảo quá trình đặt hàng diễn ra suôn sẻ, bạn cần kiểm tra kỹ thông tin cá nhân, địa chỉ giao hàng và phương thức thanh toán trước khi xác nhận đơn hàng. Hãy đảm bảo rằng bạn đã cung cấp số điện thoại và email chính xác để nhận được thông báo từ chúng tôi về đơn hàng của bạn.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hs-accordion" id="hs-basic-heading-five">
                        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-2xl w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-three">
                            <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Làm sao để đặt lịch khám với Pet Spa
                        </button>
                        <div id="hs-basic-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-three">
                            <div class="pb-4 px-6">
                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                    Để đặt lịch khám cho thú cưng của bạn tại Pet Spa, bạn có thể truy cập trang web của chúng tôi và sử dụng biểu mẫu liên hệ để chọn ngày và giờ phù hợp. Ngoài ra, bạn cũng có thể gọi điện trực tiếp tới số hỗ trợ khách hàng để được tư vấn và đặt lịch một cách nhanh chóng. Chúng tôi khuyến khích bạn đặt lịch trước để đảm bảo có suất vào ngày bạn mong muốn.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side (Content) -->
            <div>
                <div class="mb-8">
                    <h4 class="text-2xl font-bold mb-4">Về dịch vụ khám chữa bệnh?</h4>
                    <p class="text-gray-600 mb-4">
                        @Pet Spa trang bị đầy đủ các thiết bị y tế hiện đại và tiên tiến, đảm bảo hỗ trợ tối ưu cho quá trình chẩn đoán và điều trị. Đội ngũ y bác sĩ giàu kinh nghiệm luôn sẵn sàng cung cấp dịch vụ tận tâm và chuyên nghiệp, mang lại sự an tâm cho bạn và thú cưng của mình. Chúng tôi cam kết đem đến chất lượng chăm sóc sức khỏe toàn diện và an toàn.                    </p>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-auto bg-yellow-400 rounded-xl flex justify-center items-center">
                        <img src="images/kitten.webp" alt="Pet Image" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Thực phẩm của Pet Spa?</h4>
                        <p class="text-gray-600">Đa dạng, bổ dưỡng và chất lượng dành cho thú cưng của bạn</p>
                    </div>
                </div>

                <div class="mt-12 text-center flex gap-6">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64.8 70.6" class="w-20"><style type="text/css">	.st0{fill:#FF6B35;}</style><g>	<path class="st0" d="M18.1,49V6.1c0-2.1-1.7-3.9-3.9-3.9c0,0,0,0,0,0H6C3.8,2.3,2.1,4,2.1,6.1c0,0,0,0,0,0V49  c0,2.1,1.7,3.9,3.9,3.9h8.2C16.3,52.9,18.1,51.1,18.1,49"></path>	<path d="M58.4,2.3h-37c0.6,1.2,1,2.5,1,3.9V49c0,1.4-0.3,2.7-1,3.9h18.9V60c0,2.2-1.8,4-4,4H16.2  c-2.2,0-4-1.8-4-4v-2.8H7.9V60c0,4.6,3.7,8.3,8.3,8.3h20.1c4.6,0,8.3-3.7,8.3-8.3v-7.1h13.8c2.4,0,4.3-1.9,4.3-4.3v-42  C62.7,4.2,60.8,2.3,58.4,2.3C58.4,2.3,58.4,2.3,58.4,2.3 M34.2,45.9c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5  c1.4,0,2.5,1.1,2.5,2.5c0,0,0,0,0,0C36.7,44.8,35.6,45.9,34.2,45.9 M34.2,37.9c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5  c1.4,0,2.5,1.1,2.5,2.5c0,0,0,0,0,0C36.7,36.8,35.6,37.9,34.2,37.9 M34.2,30c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5  c1.4,0,2.5,1.1,2.5,2.5c0,0,0,0,0,0C36.7,28.9,35.6,30,34.2,30 M42.4,45.9c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5  s2.5,1.1,2.5,2.5l0,0C44.9,44.8,43.8,45.9,42.4,45.9 M42.4,37.9c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5  c0,0,0,0,0,0C44.9,36.8,43.8,37.9,42.4,37.9 M42.4,30c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5l0,0  C44.9,28.9,43.8,30,42.4,30 M50.7,45.9c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5c0,0,0,0,0,0  C53.1,44.8,52,45.9,50.7,45.9 M50.7,37.9c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5c0,0,0,0,0,0  C53.1,36.8,52,37.9,50.7,37.9 M50.7,30c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5C53.1,28.9,52,30,50.7,30   M55,18.9c0,1-0.8,1.8-1.8,1.9c0,0,0,0,0,0H31.7c-1,0-1.8-0.8-1.8-1.8c0,0,0,0,0,0v-7.1c0-1,0.8-1.8,1.8-1.8h21.5  c1,0,1.8,0.8,1.8,1.8V18.9z"></path></g></svg>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold">Hotline: 24/7</h4>
                        <p class="text-amber-500 text-xl mt-4">+000 123 456 798</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <div class="py-6 h-auto">
            <div class="mt-5 flex justify-center items-center font-bold text-5xl relative">
                @Pet Spa
            </div>
            <div class="md:p-10 p-4 relative">
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper block transition-transform duration-300 ease-in-out hover:text-amber-400">
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely-5.jpg" alt="">
                        </a>
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely-6.jpg" alt="Image 1">
                        </a>
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely-7.jpg" alt="Image 1">
                        </a>
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely-8.jpg" alt="Image 2">
                        </a>
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely.jpg" alt="Image 5">
                        </a>
                        <a class="swiper-slide relative overflow-hidden" href="">
                            <img class="w-full h-64 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" src="images/Lovely-4.jpg" alt="Image 6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
            {{ __('Một email xác thực đã được gửi tới địa chỉ email của bạn.') }}
        </div>
    @endif
</x-user-layout>
