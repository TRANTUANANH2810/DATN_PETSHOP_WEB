<x-user-layout>
    <x-slot name="title">
        Grooming
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
            <a href="{{ route('service') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" >
                Dịch vụ
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            Grooming
        </li>
    </ol>

    <div class="bg-cream py-10 mx-4">
        <div class="max-w-5xl mx-auto">
            <!-- Title Section -->
            <h2 class="text-4xl font-bold text-blue-800 text-center">Grooming</h2>
            <p class="text-gray-700 mt-4">
                Chải lông là điều cần thiết để giữ cho thú cưng của bạn trông đẹp và cảm thấy tuyệt vời. Chúng tôi nhẹ nhàng rửa sạch bụi bẩn bám theo một cách tự nhiên bằng lối sống lành mạnh của thú cưng, giúp bộ lông của thú cưng của bạn luôn thơm tho và bóng mượt. Và bạn có thể chắc chắn rằng mọi thứ chúng tôi làm đều cải thiện sức khỏe thú cưng của bạn chứ không gây hại cho nó. Đó là đôi bên cùng có lợi cho bạn và thú cưng của bạn.
            </p>
        </div>

        <div class="relative mt-10 flex justify-center items-center">
            <!-- Hình ảnh của Chó -->
            <img src="https://www.theanimaldoctors.org/wp-content/uploads/2023/04/grooming.png" alt="Chó" class="w-full sm:w-3/4 lg:w-auto h-auto object-cover mx-auto">

            <!-- Các điểm đặc trưng -->
            <div class="hidden md:block absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-4 sm:translate-x-0 sm:left-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Không lo sợ</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">1</span>
                    <p class="mt-2 text-gray-700">Chúng tôi ưu tiên cảm xúc của thú cưng của bạn.</p>
                </div>
            </div>

            <div class="hidden md:block absolute top-1/3 left-1/2 transform -translate-x-1/2 sm:translate-x-0 sm:left-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Chất lượng cao</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">2</span>
                    <p class="mt-2 text-gray-700">Công cụ và sản phẩm chăm sóc tốt nhất.</p>
                </div>
            </div>

            <div class="hidden md:block absolute bottom-8 left-1/2 transform -translate-x-1/2 sm:translate-x-0 sm:left-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Sạch sẽ & Vệ sinh</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">3</span>
                    <p class="mt-2 text-gray-700">Chúng tôi duy trì một môi trường sạch sẽ và vệ sinh.</p>
                </div>
            </div>

            <div class="hidden md:flex absolute top-0 right-1/3 transform translate-x-1/2 sm:translate-x-0 sm:right-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Nhân viên có tay nghề</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">4</span>
                    <p class="mt-2 text-gray-700">Nhân viên của chúng tôi là những chuyên gia được đào tạo chuyên sâu.</p>
                </div>
            </div>

            <div class="hidden md:block absolute top-1/3 right-1/2 transform translate-x-1/2 sm:translate-x-0 sm:right-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Ít căng thẳng</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">5</span>
                    <p class="mt-2 text-gray-700">Chúng tôi đảm bảo một môi trường yên tĩnh và thư giãn.</p>
                </div>
            </div>

            <div class="hidden md:block absolute bottom-8 right-1/2 transform translate-x-1/2 sm:translate-x-0 sm:right-1/4 text-center">
                <div class="flex flex-col items-center">
                    <p class="text-blue-800 font-bold">Sức khỏe là trên hết</p>
                    <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center">6</span>
                    <p class="mt-2 text-gray-700">Sức khỏe của thú cưng của bạn là ưu tiên số một của chúng tôi.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="text-center mt-10">
            <a href="{{ route('register.service') }}" class="bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-800 transition">Đặt lịch ngay</a>
        </div>
    </div>

    <div class="bg-cream py-10 mx-4">
        <div class="max-w-5xl mx-auto">
            <!-- Title Section -->
            <h2 class="text-4xl font-bold text-blue-800 text-center">Grooming</h2>
            <p class="text-gray-700 mt-4">
                Chải lông là điều cần thiết để giữ cho thú cưng của bạn trông đẹp và cảm thấy tuyệt vời. Chúng tôi nhẹ nhàng rửa sạch bụi bẩn...
            </p>

            <!-- Bảng Giá Dịch Vụ Spa -->
            <div class="mt-10">
                <h3 class="text-2xl font-semibold text-center text-blue-800 mb-6">Giá Dịch Vụ Spa cho Thú Cưng</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded-lg shadow-md">
                        <thead>
                        <tr class="bg-blue-800 text-white">
                            <th class="py-3 px-6 text-center">Cân Nặng</th>
                            <th class="py-3 px-6 text-center">Giá Dịch Vụ</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">Dưới 5kg</td>
                            <td class="py-4 px-6">180,000 VND</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">Từ 5kg đến 10kg</td>
                            <td class="py-4 px-6">200,000 VND</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">Trên 10kg</td>
                            <td class="py-4 px-6">220,000 VND</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quy Trình Chăm Sóc Thú Cưng -->
            <div class="mt-16">
                <h3 class="text-2xl font-semibold text-center text-blue-800 mb-6">Quy Trình Chăm Sóc Thú Cưng Tại Spa</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">1</span>
                        <div>
                            <p class="font-semibold text-blue-800">Kiểm tra ban đầu</p>
                            <p class="text-gray-700">Tiến hành kiểm tra sơ bộ về sức khỏe và tình trạng lông của thú cưng...</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">2</span>
                        <div>
                            <p class="font-semibold text-blue-800">Chải lông & tắm</p>
                            <p class="text-gray-700">Sử dụng các sản phẩm tắm chuyên dụng, nhẹ nhàng loại bỏ bụi bẩn...</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">3</span>
                        <div>
                            <p class="font-semibold text-blue-800">Cắt tỉa lông</p>
                            <p class="text-gray-700">Cắt tỉa lông gọn gàng, tạo kiểu nếu khách hàng có yêu cầu...</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">4</span>
                        <div>
                            <p class="font-semibold text-blue-800">Vệ sinh tai và móng</p>
                            <p class="text-gray-700">Vệ sinh tai sạch sẽ và kiểm tra các vấn đề tiềm ẩn...</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">5</span>
                        <div>
                            <p class="font-semibold text-blue-800">Sấy khô và chải lông hoàn thiện</p>
                            <p class="text-gray-700">Sấy khô lông với nhiệt độ phù hợp, chải mượt lông...</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-red-800 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">6</span>
                        <div>
                            <p class="font-semibold text-blue-800">Xịt nước hoa và kiểm tra cuối cùng</p>
                            <p class="text-gray-700">Sử dụng nước hoa an toàn giúp thú cưng thơm tho...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Button -->
            <div class="text-center mt-10">
                <a href="{{ route('register.service') }}" class="bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-800 transition">Đặt lịch ngay</a>
            </div>
        </div>
    </div>

</x-user-layout>
