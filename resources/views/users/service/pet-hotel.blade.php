<x-user-layout>
    <x-slot name="title">
        Khách sạn thú cưng
    </x-slot>

    <!-- Breadcrumb -->
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
            <a href="{{ route('service') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" >
                Dịch vụ
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            Khách sạn thú cưng
        </li>
    </ol>

    <div class="bg-gray-50 py-10 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Hình ảnh trên cùng -->
            <img src="https://www.theanimaldoctors.org/wp-content/uploads/2023/04/cat.png" alt="Khách sạn cho mèo" class="w-auto  mx-auto">

            <!-- Tiêu đề -->
            <h2 class="text-4xl font-bold text-blue-900 mt-6">Khách sạn thú cưng</h2>

            <!-- Nội dung mô tả -->
            <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8 text-left">
                <p class="text-gray-600">
                    Đi du lịch có thể khó khăn khi bạn là người nuôi mèo. Bạn không muốn để mèo một mình, nhưng không phải khách sạn hay Airbnb nào cũng thân thiện với vật nuôi. Và xa bạn cũng không dễ dàng gì với mèo của bạn. Mèo cũng cảm thấy cô đơn và buồn bã như chúng ta khi không có gia đình bên cạnh.
                </p>
                <p class="text-gray-600">
                    Khách sạn dành cho mèo sang trọng của chúng tôi là giải pháp hoàn hảo cho những người bạn bận rộn yêu thú cưng của mình và muốn chúng được chăm sóc tốt nhất khi đi du lịch. Nó như một kỳ nghỉ 5 sao, được trang bị mọi thứ mà người bạn đồng hành của bạn có thể muốn, bao gồm cả tình yêu. Hãy để chúng tôi chiều đãi mèo của bạn như hoàng gia khi bạn đang nghỉ dưỡng.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-10">
        <!-- Title -->
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-10">Bảng báo giá khách sạn thú cưng</h2>

        <!-- Price table -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 text-center">
            <!-- Item 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-standardc-room.jpg') }}" alt="Chuồng M" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Chuồng Standard C</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 5kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">150k /ngày</p>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-standardb-room.jpg') }}" alt="Chuồng L" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Chuồng Standard B</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 10kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">200k /ngày</p>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-standarda-room.png') }}" alt="Chuồng XL" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Chuồng Standard A</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 20kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">250k /ngày</p>
            </div>

            <!-- Item 4 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-vipc-room.jpg') }}" alt="Phòng VIP C" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Phòng VIP C</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 5kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">300k /ngày</p>
            </div>

            <!-- Item 5 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-vipb-room.jpg') }}" alt="Phòng VIP B" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Phòng VIP B</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 10kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">400k /ngày</p>
            </div>

            <!-- Item 6 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/pet-hotel-vipa-room.jpg') }}" alt="Phòng VIP A" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-blue-900">Phòng VIP A</h3>
                <p class="text-gray-600">Dành cho thú cưng tối đa 20kg</p>
                <p class="text-2xl font-bold text-blue-900 mt-2">500k /ngày</p>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container mx-auto px-4">
        <table class="table-auto w-full max-w-2xl mx-auto text-center border border-gray-300">
            <thead class="bg-orange-200">
            <tr>
                <th class="px-4 py-2 border border-gray-300">Cân nặng</th>
                <th class="px-4 py-2 border border-gray-300">Standard Room</th>
                <th class="px-4 py-2 border border-gray-300">VIP Room</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="px-4 py-2 border border-gray-300">< 5 Kg</td>
                <td class="px-4 py-2 border border-gray-300">150,000 VNĐ</td>
                <td class="px-4 py-2 border border-gray-300">300,000 VNĐ</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border border-gray-300">5 - 10 Kg</td>
                <td class="px-4 py-2 border border-gray-300">200,000 VNĐ</td>
                <td class="px-4 py-2 border border-gray-300">400,000 VNĐ</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border border-gray-300">> 10 Kg</td>
                <td class="px-4 py-2 border border-gray-300">250,000 VNĐ</td>
                <td class="px-4 py-2 border border-gray-300">500,000 VNĐ</td>
            </tr>
            </tbody>
        </table>

        <!-- Additional Information -->
        <div class="mt-8 max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-orange-600 mb-4">Giá trên bao gồm:</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>Lồng riêng sạch sẽ thoáng mát</li>
                <li>Chăm sóc sức khỏe, vệ sinh cơ bản hàng ngày</li>
                <li>Ngày ăn 3 bữa (hạt, pate, thức ăn tươi...), luôn có nước sạch</li>
                <li>Vận động vui chơi tự do 1h/ngày</li>
                <li>Có sân chơi, khu vực phơi nắng</li>
                <li>Có chuyên viên chăm sóc kèm 24/7</li>
                <li>Được âu yếm, vuốt ve và tương tác</li>
            </ul>

            <h3 class="text-2xl font-bold text-orange-600 mt-8 mb-4">Lưu ý:</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>Nếu phát hiện các bé có vấn đề về sức khỏe hoặc mắc các bệnh về da, chủ nuôi nên đưa bé đi khám và điều trị trước khi sử dụng dịch vụ.</li>
                <li>Yêu cầu đặc biệt khác có thể được thỏa thuận trực tiếp</li>
            </ul>

            <h3 class="text-2xl font-bold text-orange-600 mt-8 mb-4">Ưu đãi đặc biệt!</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>Miễn phí đưa đón trong khu vực nội thành</li>
                <li>Khuyến mãi tắm miễn phí cho các bé ở trên 10 ngày</li>
                <li>Giảm 10% tổng hóa đơn cho các bé ở trên 15 ngày</li>
            </ul>

        </div>
    </div>

    <div class="bg-gray-50 py-10">
        <div class="max-w-7xl mx-auto">
            <!-- Grid layout for images -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Image 1: Lớn, chiếm 2 cột và 2 hàng -->
                <div class="col-span-2 row-span-2">
                    <img src="{{ asset('images/pet-hotel-2.jpg') }}" alt="Cat Image 1" class="w-full h-full object-cover rounded-lg">
                </div>

                <!-- Image 2: Nhỏ, chiếm 1 cột và 1 hàng -->
                <div class="col-span-1 row-span-2">
                    <img src="{{ asset('images/pet-hotel-5.jpg') }}" alt="Cat Image 2" class="w-full h-full object-cover rounded-lg">
                </div>

                <!-- Image 3: Lớn dọc, chiếm 1 cột và 2 hàng -->
                <div class="col-span-1 row-span-2">
                    <img src="{{ asset('images/pet-hotel-3.png') }}" alt="Cat Image 3" class="w-full h-full object-cover rounded-lg">
                </div>

                <!-- Image 4: Nhỏ ngang, chiếm 2 cột và 1 hàng -->
                <div class="col-span-2 row-span-1">
                    <img src="{{ asset('images/pet-hotel-1.jpg') }}" alt="Cat Image 4" class="w-full h-full object-cover rounded-lg">
                </div>

                <!-- Image 5: Nhỏ, chiếm 1 cột và 1 hàng -->
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/pet-hotel-4.jpg') }}" alt="Cat Image 5" class="w-full h-full object-cover rounded-lg">
                </div>

                <!-- Image 6: Nhỏ, chiếm 1 cột và 1 hàng -->
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/pet-hotel-6.png') }}" alt="Cat Image 6" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>


            <!-- Button for booking -->
            <div class="text-center mt-10">
                <a href="{{ route('register.service') }}" class="bg-red-700 text-white font-bold py-3 px-8 rounded-full hover:bg-red-800 transition">Đặt Phòng</a>
            </div>
        </div>
    </div>

</x-user-layout>
