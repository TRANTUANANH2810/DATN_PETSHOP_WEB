<x-user-layout>
    <x-slot name="title">
        Dịch vụ
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
            Dịch vụ
        </li>
    </ol>

    <div class="bg-cream py-10">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-8 px-4 md:px-0">
            <!-- Image Section -->
            <div class="flex-1">
                <img src="{{ asset('images/service.jpg') }}" alt="Vet Service" class="rounded-lg shadow-lg object-cover w-full h-auto">
            </div>

            <!-- Text Section -->
            <div class="flex-1 text-left md:pl-10">
                <h2 class="text-4xl font-bold text-blue-900 mb-6">Dịch vụ</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Có một người bạn đồng hành là một niềm vui, và một trách nhiệm quan trọng. Là người có trách nhiệm, bạn muốn thú cưng của mình nhận được tất cả sự chăm sóc và yêu thương mà chúng cần để sống lâu và hạnh phúc. Đó là lý do tại sao sự lựa chọn bác sĩ thú y của bạn là rất quan trọng.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Bạn muốn có một bác sĩ thú y tận tụy để giữ cho thú cưng của bạn khỏe mạnh và hạnh phúc. Một bác sĩ thú y làm việc với bạn không mệt mỏi để đảm bảo sức khỏe toàn diện cho thú cưng của bạn. Và bạn muốn bác sĩ thú y đó làm tốt công việc của mình nhất có thể. Điều đó có nghĩa là họ phải có cơ sở vật chất, công cụ chân đoán hạng nhất và các loại thuốc phù hợp.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Và khi thú cưng của bạn không khỏe, bạn muốn bác sĩ thú y tất cả những điều họ có thể giúp chúng đứng vững trở lại. Chúng tôi cung cấp tất cả những điều đó và còn hơn thế nữa tại Animal Doctors International.
                </p>

                <!-- Button -->
                <a href="{{ route('register.service') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-red-700 transition">
                    Đặt Lịch
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-10">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Các dịch vụ</h2>
            <p class="text-gray-600 mb-10">Từ chăm sóc sức khỏe đến làm đẹp, chúng tôi có tất cả!</p>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <a href="{{ route('service.clinical') }}" class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/service-clinical.jpg') }}" alt="Sức khỏe lâm sàng" class="w-full h-48 object-cover transition-transform duration-300 transform group-hover:scale-105">
                    </div>
                    <div class="p-6 bg-blue-900 text-white flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Sức khỏe lâm sàng</h3>
                            <p class="text-sm mb-4">Các phương pháp điều trị và phòng ngừa được thiết kế riêng cho từng bệnh nhân bởi các bác sĩ chuyên môn quốc tế.</p>
                        </div>
                        <span class="text-white font-bold hover:underline mt-auto">→</span>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="{{ route('service.grooming') }}" class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/service-grooming.png') }}" alt="Grooming" class="w-full h-48 object-cover transition-transform duration-300 transform group-hover:scale-105">
                    </div>
                    <div class="p-6 bg-blue-900 text-white flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Grooming</h3>
                            <p class="text-sm mb-4">Chăm sóc thú cưng chuyên nghiệp để giữ cho thú cưng của bạn luôn khỏe mạnh và xinh đẹp.</p>
                        </div>
                        <span class="text-white font-bold hover:underline mt-auto">→</span>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="{{ route('service.pet-hotel') }}" class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/service-hotel.jpg') }}" alt="Khách sạn thú cưng" class="w-full h-48 object-cover transition-transform duration-300 transform group-hover:scale-105">
                    </div>
                    <div class="p-6 bg-blue-900 text-white flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Khách sạn thú cưng</h3>
                            <p class="text-sm mb-4">Khách sạn thú cưng sang trọng đảm bảo an toàn, sức khỏe và thoải mái.</p>
                        </div>
                        <span class="text-white font-bold hover:underline mt-auto">→</span>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="{{ route('service.pet-travel') }}" class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col hover:shadow-xl transition-shadow duration-300 group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/service-travel.jpg') }}" alt="Du lịch cùng boss" class="w-full h-48 object-cover transition-transform duration-300 transform group-hover:scale-105">
                    </div>
                    <div class="p-6 bg-blue-900 text-white flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Du lịch cùng Boss</h3>
                            <p class="text-sm mb-4">Dịch vụ du lịch đặc biệt cho thú cưng của bạn.</p>
                        </div>
                        <span class="text-white font-bold hover:underline mt-auto">→</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="relative bg-gray-50 py-10">
        <div class="relative">
            <!-- Image -->
            <img src="{{ asset('images/banner-service-2.png') }}" alt="Dog Care" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 rounded-lg">
                <!-- Text with custom font -->
                <h2 class="text-white text-4xl font-semibold mb-4 text-center">
                    Compassionate care, right when it matters
                </h2>

                <!-- Button -->
                <a href="{{ route('register.service') }}" class="bg-red-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-red-800 transition">Đặt lịch hẹn</a>
            </div>
        </div>
    </div>

</x-user-layout>
