<x-user-layout>
    <x-slot name="title">
        Du lịch cùng Boss
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
            Du lịch cùng Boss
        </li>
    </ol>

    <div class="w-full h-full">
        <img src="{{ asset('images/banner-pet-travel.png') }}">
    </div>

    <div class="bg-cream py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Title Section -->
            <h2 class="text-5xl font-bold text-blue-800 text-center">Du lịch cùng Boss</h2>

            <!-- Content Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
                <!-- Nội dung bên trái -->
                <div>
                    <p class="text-gray-700 mb-6">
                        Bắt đầu một cuộc phiêu lưu mới tại một quốc gia khác là một hành trình đầy thú vị, và chúng tôi hiểu rằng việc lên kế hoạch cho hành trình của thú cưng cũng quan trọng như của bạn.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Việc vượt qua những phức tạp của việc vận chuyển thú cưng có thể khiến bạn choáng ngợp, và đó là lý do đội ngũ chuyên gia tận tâm, giàu kinh nghiệm của chúng tôi luôn sẵn sàng hỗ trợ bạn từng bước. Cùng nhau, chúng tôi sẽ giúp bạn vượt qua những quy định phức tạp, đảm bảo bạn và thú cưng của mình sẽ nhanh chóng được đoàn tụ, sẵn sàng chào đón cuộc sống mới cùng nhau.
                    </p>
                </div>

                <!-- Nội dung bên phải -->
                <div>
                    <p class="text-gray-700 mb-6">
                        Vị trí độc đáo của chúng tôi là nhóm thú y duy nhất tại Đông Nam Á được công nhận bởi Hiệp hội Vận chuyển Động vật và Thú cưng Quốc tế (IPATA) và Hiệp hội Vận tải Hàng không Quốc tế (IATA) phản ánh cam kết của chúng tôi đối với bạn.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Khi chọn chúng tôi làm đơn vị cung cấp dịch vụ di chuyển cho thú cưng, bạn đang bắt đầu một hành trình đầy sự hỗ trợ và thấu hiểu, cho phép bạn tập trung vào cuộc phiêu lưu mới của mình với sự an tâm tuyệt đối. <strong>Chúng tôi ở đây để giúp bạn.</strong>
                    </p>
                </div>
            </div>

            <!-- Button Section -->
            <div class="flex justify-center mt-10">
                <a href="{{ route('register.service') }}" class="bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-700 transition">Liên hệ ngay</a>
            </div>

            <!-- Image Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
                <div class="h-48">
                    <img src="{{ asset('images/pet-travel-1.jpeg') }}" alt="Cat in cockpit" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="h-48">
                    <img src="{{ asset('images/pet-travel-2.jpg') }}" alt="Pet passport" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="h-48">
                    <img src="{{ asset('images/pet-travel-3.jpg') }}" alt="Cat in carrier" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="h-48">
                    <img src="{{ asset('images/pet-travel-4.jpg') }}" alt="Puppies in carrier" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </div>
    </div>


    <!-- Main content lg screen-->
    <h2 class="lg:mx-48 text-5xl text-gray-600 ">Điều Gì Khiến Chúng Tôi Khác Biệt</h2>
    <div class="flex space-x-4 max-w-7xl mx-auto px-6 py-12 gap-10">
        <!-- Sidebar -->
        <ul class="w-1/4 text-xl pl-4">
            <li class="cursor-pointer mb-4 text-red-800 border-l-4 border-red-800 pl-2" onclick="showContent('section1', this)">Chuyên gia được công nhận quốc tế</li>
            <li class="cursor-pointer mb-4 text-gray-600" onclick="showContent('section2', this)">Không thú cưng nào bị bỏ lại</li>
            <li class="cursor-pointer mb-4 text-gray-600" onclick="showContent('section3', this)">Chuyên môn về du lịch thú cưng</li>
            <li class="cursor-pointer mb-4 text-gray-600" onclick="showContent('section4', this)">Nhân viên nói tiếng Anh bản ngữ</li>
            <li class="cursor-pointer mb-4 text-gray-600" onclick="showContent('section5', this)">Phần mềm chuyên dụng</li>
        </ul>

        <!-- Content Section -->
        <div class="w-3/4 text-lg bg-cyan-50 rounded-2xl p-4">
            <div id="section1" class="">
                <p class="text-gray-700">Khi nói đến du lịch thú cưng, bạn cần những chuyên gia có các mối quan hệ uy tín trên toàn thế giới.
                    Chúng tôi là nhóm thú y duy nhất tại Đông Nam Á được chứng nhận bởi cả Hiệp hội Vận chuyển Động vật và Thú cưng Quốc tế (IPATA) và Hiệp hội Vận tải Hàng không Quốc tế (IATA). Điều đó có nghĩa là chúng tôi có kiến thức nội bộ và có thể tận dụng mạng lưới chuyên gia toàn cầu trong mọi lĩnh vực liên quan đến du lịch thú cưng.
                    Để đảm bảo rằng thú cưng của bạn di chuyển một cách suôn sẻ, chúng tôi không làm việc với các trung gian. Bằng cấp và thành viên của chúng tôi cho phép chúng tôi làm việc trực tiếp với hãng hàng không để thú cưng của bạn được vận chuyển. Đó là một mức độ an tâm bổ sung đảm bảo mọi thứ diễn ra suôn sẻ cho thú cưng của bạn (và cũng có cơ hội tốt hơn để bạn nhận được mức giá tốt nhất).</p>
            </div>
            <div id="section2" class="hidden">
                <p class="text-gray-700">Sau một cuộc di chuyển dài và căng thẳng, không có gì tuyệt vời hơn là cảm giác có thú cưng an toàn trong vòng tay của bạn một lần nữa. Chúng tôi mong muốn điều đó dành cho bạn. Bằng cách làm việc chặt chẽ với chủ thú cưng ở mọi bước, chúng tôi đảm bảo rằng bạn không bỏ lỡ bất kỳ bước quan trọng nào trong quá trình vận chuyển thú cưng của mình.
                    Thời gian và chuyên môn đó là điều cần thiết vì hậu quả của một sai lầm có thể không thể khắc phục được. Sự thật đáng buồn là thú cưng không có giấy tờ đúng đôi khi không thể về nhà. Đó là lý do tại sao các chuyên gia của chúng tôi dành thời gian cần thiết với bạn để xác định các lựa chọn di chuyển tốt nhất để đưa thú cưng của bạn về nhà.</p>
            </div>
            <div id="section3" class="hidden">
                <p class="text-gray-700">Tất cả những gì bạn muốn là thú cưng của mình đến nơi an toàn tại ngôi nhà mới. Nhưng thậm chí một chi tiết nhỏ bị bỏ sót cũng có thể làm trì hoãn hoặc thậm chí ngăn cản điều đó xảy ra. Đó là lý do bạn cần các chuyên gia đáng tin cậy, những người hiểu rõ ngành du lịch thú cưng.
                    Đội ngũ của chúng tôi có thể giúp bạn với các xét nghiệm y tế và giấy tờ cần thiết. Họ cũng có thể tư vấn cho bạn về hãng vận tải hoặc lộ trình du lịch nào phù hợp nhất cho một chuyến bay nhanh chóng và không căng thẳng cho người bạn thân yêu của bạn.</p>
            </div>
            <div id="section4" class="hidden">
                <p class="text-gray-700">Vận chuyển thú cưng là một công việc phức tạp và căng thẳng. Là những người nước ngoài có thú cưng, chúng tôi đã từng trải qua điều đó. Và chúng tôi biết từ kinh nghiệm trực tiếp rằng giao tiếp sai lầm và lỗi lầm có thể gây ra bực bội như thế nào khi bạn chỉ muốn thú cưng của mình về trong vòng tay một lần nữa.
                    Nhân viên quốc tế của chúng tôi là những người nói tiếng Anh bản ngữ. Kỹ năng giao tiếp của họ cho phép họ xử lý thủ tục giấy tờ du lịch quốc tế của thú cưng của bạn một cách khéo léo với ít sai sót nhất. Chúng tôi ngồi cùng với chủ thú cưng, xem xét các lựa chọn của bạn và đảm bảo bạn hiểu rõ mọi bước và quy trình khi di chuyển thú cưng qua biên giới quốc tế. Khi bạn đã nói chuyện với chúng tôi, bạn sẽ cảm thấy yên tâm hơn nhiều về hành trình thú vị phía trước.</p>
            </div>
            <div id="section5" class="hidden">
                <p class="text-gray-700">Chúng tôi sẽ giảm thiểu sự lo lắng của bạn trong khoảng thời gian từ khi thú cưng của bạn khởi hành đến khi chúng đến nơi. Nhờ đầu tư vào phần mềm quản lý dự án, bạn có quyền truy cập dễ dàng vào tài liệu tham khảo và chúng tôi nắm rõ mọi chi tiết. Điều đó có nghĩa là chúng tôi có thể cập nhật cho bạn từ lúc khởi hành đến lúc đến nơi.</p>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            function showContent(section, element) {
                // Ẩn tất cả các section trước
                document.querySelectorAll('[id^="section"]').forEach(div => {
                    div.classList.add('hidden');
                });

                // Hiển thị section được chọn
                document.getElementById(section).classList.remove('hidden');

                // Đặt lại màu cho tất cả các mục
                document.querySelectorAll('ul > li').forEach(li => {
                    li.classList.remove('text-red-800', 'border-l-4', 'border-red-800', 'pl-2');
                });

                // Thêm màu đỏ và border cho mục được chọn
                element.classList.add('text-red-800', 'border-l-4', 'border-red-800', 'pl-2');
            }
        </script>
    </x-slot>
</x-user-layout>
