<x-user-layout>
    <x-slot name="title">
        Giới thiệu
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

        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            Giới thiệu
        </li>
    </ol>
    <!-- Section Container -->
    <section class="flex flex-col lg:flex-row items-center justify-center lg:justify-between py-8 px-4 lg:px-48 bg-white">

        <!-- Phần Hình Ảnh Bên Trái -->
        <div class="lg:w-1/2 flex justify-center lg:justify-start">
            <img src="images/Lovely-3.jpg" alt="Chó đáng yêu" class="w-72 lg:w-96 h-auto object-cover rounded-lg">
        </div>

        <!-- Phần Nội Dung Bên Phải -->
        <div class="lg:w-1/2 flex flex-col space-y-6 lg:pl-12 text-center lg:text-left mt-8 lg:mt-0">
            <!-- Tiêu Đề Chính -->
            <h2 class="text-4xl font-bold text-gray-800 leading-snug">
                Chăm sóc thú cưng <br>là niềm đam mê của chúng tôi
            </h2>

            <!-- Mô Tả -->
            <p class="text-gray-600">
                Dịch vụ tận tâm, chất lượng vượt trội. Chúng tôi luôn sẵn sàng vì sức khỏe và niềm vui của thú cưng.
            </p>

            <!-- Danh Sách Tính Năng -->
            <div class="grid grid-cols-2 gap-4 text-lg">
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Hỗ trợ 24/7</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Chăm sóc cá nhân</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Dịch vụ đưa đón</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Giao hàng nhanh</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Hoàn tiền đảm bảo</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-pink-500">🐾</span>
                    <span>Giá tốt nhất</span>
                </div>
            </div>

            <!-- Kêu Gọi Hành Động và Thông Tin Liên Hệ -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start space-y-4 lg:space-y-0 lg:space-x-8">
                <a href="{{ route('shop') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg text-lg font-bold">Mua Ngay</a>
                <div class="text-gray-600 text-sm flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <span>📞</span>
                        <span>+00 123 456 789</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>✉️</span>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Container -->
    <section class="bg-yellow-500 py-12 px-4 rounded-lg relative">

        <!-- Phần Nội Dung Chính -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center text-center">

            <!-- Phần Thống Kê -->
            <div class="lg:col-span-2 flex flex-col lg:flex-row justify-between text-white space-y-8 lg:space-y-0 lg:space-x-8">

                <div class="flex items-center space-x-4">
                    <span class="text-4xl">🤝</span>
                    <div>
                        <p class="text-3xl font-bold">20K</p>
                        <p class="text-lg">Khách hàng hài lòng</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-4xl">❤️</span>
                    <div>
                        <p class="text-3xl font-bold">550</p>
                        <p class="text-lg">Thú cưng được nhận nuôi</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-4xl">👨‍⚕️</span>
                    <div>
                        <p class="text-3xl font-bold">1K</p>
                        <p class="text-lg">Chuyên gia</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-4xl">🏆</span>
                    <div>
                        <p class="text-3xl font-bold">90+</p>
                        <p class="text-lg">Giải thưởng</p>
                    </div>
                </div>
            </div>

            <!-- Phần Văn Bản Kèm Nút -->
            <div class="bg-yellow-400 rounded-lg p-8 relative">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Đảm bảo an toàn và huấn luyện tốt cho thú cưng của bạn</h2>
                <button class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold">Xem tất cả</button>
            </div>
        </div>
    </section>

    <section class="py-12 px-4 lg:flex justify-between items-center bg-white mt-8">
        <!-- Phần Hình Ảnh Bên Trái -->
        <div class="relative">
            <!-- Hình Ảnh Lớn -->
            <div class="w-full">
                <img src="images/Pet-care-1.jpg" alt="Chăm sóc chó" class="w-1/2 h-auto rounded-full">
            </div>
            <!-- Hình Ảnh Nhỏ được đặt chồng -->
            <div class="absolute top-0 right-0 w-2/3">
                <img src="images/Pet-care-2.jpg" alt="Chăm sóc mèo" class="w-full h-auto rounded-full">
                <!-- Huy hiệu Dịch Vụ Tốt Nhất -->
                <div class="absolute top-0 left-0 bg-black text-white text-sm px-4 py-2 rounded-full flex items-center shadow-lg transform -translate-x-1/2 -translate-y-1/2">
                    <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m5.362-6.537A9 9 0 1112 3v1a8 8 0 108 8h1a9 9 0 01-3.638-6.537z"></path></svg>
                    <span>Dịch Vụ Tốt Nhất</span>
                </div>
            </div>
        </div>

        <!-- Phần Nội Dung Bên Phải -->
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:pl-12">
            <p class="text-gray-500 text-sm uppercase">Chúng Tôi Là Đơn Vị Lớn Nhất</p>
            <h2 class="text-4xl font-bold mb-4">Nhà Phân Phối Hợp Pháp</h2>
            <p class="text-gray-600 mb-6">Chúng tôi cung cấp dịch vụ chăm sóc thú cưng toàn diện. Đội ngũ chuyên nghiệp và trang thiết bị hiện đại đảm bảo sức khỏe tốt nhất cho thú cưng của bạn.</p>

            <!-- Phần Thông Tin (Giờ Mở Cửa, Liên Hệ) -->
            <div class="grid grid-cols-2 gap-8 text-gray-800">
                <div>
                    <h3 class="text-xl font-bold">Giờ Mở Cửa</h3>
                    <p class="mt-2">Thứ 2 - Thứ 6 : 08:30 - 20:00</p>
                    <p>Thứ 7 & Chủ Nhật : 09:30 - 21:30</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Liên Hệ</h3>
                    <p class="mt-2">support@example.com</p>
                    <p>+00 123 456 789</p>
                </div>
            </div>

            <!-- Nút Đặt Lịch -->
            <div class="mt-6">
                <a href="{{ route('contact') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold">ĐẶT LỊCH NGAY</a>
            </div>
        </div>
    </section>
</x-user-layout>
