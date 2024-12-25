<x-user-layout>
    <x-slot name="title">
        Khám sức khỏe lâm sàn
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
            Khám sức khỏe lâm sàn
        </li>
    </ol>

    <div class="bg-cream pb-10">
        <div class="relative">
            <!-- Background Image Section -->
            <img src="https://theanimaldoctors.org/wp-content/uploads/2023/06/Clnical-Banner-scaled.webp" alt="Clinical Services Image" class="w-full h-96 object-cover">

            <!-- Overlay with dark background -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Overlay Text -->
            <div class="absolute inset-0 flex items-center justify-center text-white text-center">
                <div class="space-y-2">
                    <h2 class="md:text-5xl font-bold text-2xl">Các dịch vụ lâm sàn</h2>
                    <p class="md:text-xl text-sm">Thú cưng của bạn xứng đáng nhận được sự chăm sóc tốt nhất.</p>
                    <p class="md:text-xl text-sm">Đó là những gì thú cưng của bạn sẽ nhận được tại Pet Spa.</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 py-10">
            <h2 class="text-4xl font-bold text-blue-900 mb-6 text-center">Tất cả đều dành cho thú cưng của bạn</h2>

            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-2 gap-10">
                <!-- Text Section -->
                <div class="mb-8">
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Thú cưng của bạn không thể nói. Chúng không thể nói rằng chúng bị bệnh hoặc không ổn ở đâu. Điều đó khiến bạn trở thành tuyến phòng thủ đầu tiên của chúng. Chúng trông cậy vào bạn, những người thân của chúng, để nhận thấy các vấn đề rồi đưa chúng đến bác sĩ thú y. Bạn hiểu về người bạn của mình và bác sĩ của chúng tôi có kỹ năng chuyên môn, chúng ta có thể làm việc cùng nhau để chẩn đoán thú cưng của bạn và quyết định phương pháp điều trị tốt nhất.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Đó cũng là lý do tại sao chúng ta phải có các công cụ để chẩn đoán chính xác các vấn đề sức khỏe không thể nhìn thấy ở bên ngoài. Sau đó, chúng tôi có thể sử dụng tất cả các kỹ năng của mình để giải thích các chuẩn đoán và chúng ta có thể tìm ra các phương pháp điều trị hiệu quả.
                    </p>
                </div>
                <div class="mb-8">
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Nếu không được đào tạo tốt nhất và có công cụ tốt nhất, chúng tôi không thể chăm sóc cho thú cưng của bạn một cách tốt nhất. Đó là lý do tại sao chúng tôi đã đầu tư vào các bác sĩ thú y và thiết bị tốt nhất, đồng thời tạo ra một số cơ sở y tế dành cho động vật tốt nhất trong khu vực.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Các bác sĩ thú y của chúng tôi có trình độ chuyên môn cao với nhiều năm kinh nghiệm chẩn đoán và điều trị cho thú cưng gặp các vấn đề sức khỏe phức tạp. Và chúng tôi tin rằng dịch vụ chăm sóc y tế tốt nhất cho thú cưng của bạn đến từ việc chúng ta làm việc cùng nhau theo cách hòa nhập, hợp tác và thoải mái cho bạn và thú cưng của bạn nhất có thể.
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-900 rounded-3xl text-white p-8 flex items-center justify-center h-64">
        <div class="text-center">
            <p class="text-lg">Vật nuôi của chúng ta không chỉ là động vật; chúng là thành viên của gia đình.</p>
            <p class="text-lg mt-2">Đó là lý do tại sao chúng tôi cung cấp dịch vụ chăm sóc thú y chữa lành về cả thể xác lẫn tâm hồn cho các bé.</p>
        </div>
    </div>

    <!-- Banner báo giá hình tròn ở góc màn hình -->
    <div class="fixed bottom-5 left-5 bg-blue-900 text-white rounded-full w-60 h-60 flex items-center justify-center shadow-lg cursor-pointer hover:bg-blue-800 transition transform hover:scale-105 zigzag-banner">
        <div class="text-center px-4">
            <p class="text-sm font-semibold">Khám toàn diện</p>
            <p class="text-lg font-bold mt-1">300,000 VND/ buổi</p>
        </div>
    </div>
    <style>
        .zigzag-banner {
            width: 400px;
            height: 300px;
            background-color: darkblue;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            clip-path: polygon(
                50% 0%, 60% 20%, 80% 20%, 70% 40%, 90% 50%,
                70% 60%, 80% 80%, 50% 70%, 20% 80%, 30% 60%,
                10% 50%, 30% 40%, 20% 20%, 40% 20%
            );
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>

    <div class="bg-gray-50 py-10">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Các dịch vụ được xây dựng dựa trên nhu cầu của thú cưng</h2>

            <!-- Service Grid -->
            <div class="hs-accordion-group grid grid-cols-4 gap-x-20">
                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent " id="hs-active-bordered-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-active-bordered-heading-one">
                        Xét nghiệm
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden duration-300" role="region" aria-labelledby="hs-active-bordered-heading-one">
                        <div class="">
                            <p class="text-gray-800 text-justify leading-relaxed">
                                Khi bạn thấy những người đồng hành của mình cư xử khác thường, bạn muốn biết điều đó một cách nhanh chóng. Chúng tôi sở hữu một phòng thí nghiệm nội bộ toàn diện để phân tích máu, kính hiển vi và các xét nghiệm liên quan đến thú cưng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-two">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-active-bordered-collapse-two">
                        Khám sức khỏe
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-two">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                               Tập trung vào sức khỏe mang lại cho thú cưng của bạn một cuộc sống khỏe mạnh và hạnh phúc hơn. Việc phòng ngừa cũng tốt hơn cho bạn, vì một khoản đầu tư nhỏ vào việc giữ cho thú cưng của bạn ở trạng thái khỏe mạnh sẽ tiết kiệm hơn rất nhiều so với việc trị bệnh. Và nếu chúng ta không thể ngăn ngừa bệnh tật, việc phát hiện bệnh sớm khi khám sức khỏe sẽ làm tăng đáng kể khả năng trị bệnh cho thú cưng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-three">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-three">
                        Da liễu
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-three">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Giống như ở người, da của chúng là một cơ quan và giống như bất kỳ cơ quan nào, nó cần được chăm sóc khi có sự cố xảy ra. Chúng tôi không chỉ cung cấp các giải pháp tạm thời giảm các triệu chứng gây ra bởi bệnh ngoài da, mà còn tập trung vào các biện pháp phòng ngừa lâu dài bằng cách tư vấn cho bạn cách chăm sóc da tốt nhất cho sức khỏe thú cưng của bạn.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-four">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-four">
                        Siêu âm
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-four">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Phát hiện sớm sẽ giúp tối ưu hóa việc điều trị. Các thiết bị siêu âm của chúng tôi cho phép các bác sĩ thú y phát hiện sớm các vấn đề để chúng ta có nhiều lựa chọn điều trị nhất. Các thiết bị hình ảnh của chúng tôi được hiệu chỉnh chính xác để thực hiện các phép đo, trích xuất các mẫu chất lỏng và thực hiện siêu âm với độ chính xác cao.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent " id="hs-active-bordered-heading-five">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-active-bordered-heading-five">
                        Tim mạch
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden duration-300" role="region" aria-labelledby="hs-active-bordered-heading-five">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Một số vật nuôi dễ mắc bệnh tim, vì vậy điều quan trọng là phải kiểm tra thường xuyên. Chúng tôi sử dụng các công cụ chẩn đoán tiên tiến cho phép bác sĩ thú y phát hiện sớm các dấu hiệu bệnh tim ở vật nuôi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-six">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-active-bordered-collapse-six">
                        Phục hồi chức năng
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-six">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Phục hồi chức năng có thể làm giảm cơn đau của chó sau phẫu thuật hoặc giúp mèo đi lại sau khi bị thương. Chúng tôi là bệnh viện động vật duy nhất trong khu vực cung cấp dịch vụ điều trị phục hồi cho thú cưng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-seven">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-seven">
                        Cấp cứu
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-seven" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-seven">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Lý do chúng tôi luôn để nhân viên túc trực 24/7. Chỉ với 1 cuộc gọi điện thoại, thú cưng của bạn có thể được chăm sóc thú y trong vòng 20 phút bất cứ lúc nào, ngày hay đêm.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hs-accordion hs-accordion-active:border-gray-200 rounded-xl dark:hs-accordion-active:border-neutral-700 dark:bg-neutral-800 dark:border-transparent" id="hs-active-bordered-heading-eight">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-red-700 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-eight">
                        Thăm khám tại nhà
                        <svg class="hs-accordion-active:hidden block size-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-eight" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-active-bordered-heading-eight">
                        <div class="">
                            <p class="text-gray-800 dark:text-neutral-200 text-justify leading-relaxed">
                                Các buổi thăm khám tại nhà của chúng tôi mang đến một giải pháp thay thế thuận tiện cho những khách hàng không thể đến các phòng khám của chúng tôi. Chúng tôi làm việc theo lịch trình của bạn để thực hiện khám và kiểm tra định kỳ cho thú cưng của bạn, bắt kịp bạn sống ở đâu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointment Button -->
            <div class="mt-10">
                <a href="{{ route('register.service') }}" class="bg-red-700 text-white py-3 px-6 rounded-lg font-bold hover:bg-red-800">
                    Đặt Hẹn
                </a>
            </div>
        </div>
    </div>

<x-slot name="script">
</x-slot>
</x-user-layout>
