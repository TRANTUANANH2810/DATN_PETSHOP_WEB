<x-user-layout>
    <x-slot name="title">
        Đăng ký sử dụng dịch vụ
    </x-slot>

    @if (auth()->check())
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
            <li class="inline-flex items-center">
                <a href="{{ route('service') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                    Dịch vụ
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>

            <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
                Đăng ký sử dụng dịch vụ
            </li>
        </ol>
        <h2 class="mt-5 mx-auto text-center font-bold text-4xl text-amber-500">
            Đăng ký sử dụng dịch vụ
        </h2>

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap lg:flex-nowrap justify-between gap-8">
                <!-- Form liên hệ -->
                <div class="w-full lg:w-1/2">
                    <form id="bookingForm">
                        @csrf
                        <div class="mb-4">
                            <label for="fullname" class="block text-sm font-medium text-gray-700">Họ và tên*</label>
                            <input type="text" id="fullname" name="fullname" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ auth()->user()->name }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Điện thoại*</label>
                            <input type="text" id="phone" name="phone" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ auth()->user()->phone }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ auth()->user()->email }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Loại thú cưng*</label>
                            <input type="text" id="type" name="type" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ old('type') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="datetime" class="block text-sm font-medium text-gray-700">Ngày hẹn*</label>
                            <input type="datetime-local" id="datetime" name="datetime" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ old('datetime') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="service" class="block text-sm mb-2">Dịch vụ</label>
                            <input type="radio" name="service[]" class="w-5 h-5" value="grooming"> Grooming Spa<br>
                            <input type="radio" name="service[]" class="w-5 h-5" value="pet-hotel"> Đặt phòng khách sạn thú cưng<br>
                            <input type="radio" name="service[]" class="w-5 h-5" value="pet-travel"> Du lịch cùng Boss<br>
                            <input type="radio" name="service[]" class="w-5 h-5" value="clinical"> Khám sức khỏe lâm sàn<br>
                        </div>
                        <!-- Các tùy chọn chuồng/ phòng khách sạn thú cưng -->
                        <div id="hotelOptions" class="mb-4 hidden">
                            <label class="block text-sm mb-2">Chọn loại phòng</label>
                            <input type="radio" name="roomType" class="w-5 h-5" value="standard"> Chuồng Standard (150k - 200k - 250k)<br>
                            <input type="radio" name="roomType" class="w-5 h-5" value="vip"> Phòng VIP (300k - 400k - 500k)<br>
                        </div>
                        <div class="mb-4">
                            <label for="weight" class="block text-sm mb-2">Cân nặng của Boss</label>
                            <input type="radio" name="weight" class="w-5 h-5" value="under_5kg"> Dưới 5 kg<br>
                            <input type="radio" name="weight" class="w-5 h-5" value="5_10kg"> Từ 5-10 kg<br>
                            <input type="radio" name="weight" class="w-5 h-5" value="above_10kg"> Trên 10 kg<br>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-amber-500 text-white py-2 px-4 rounded-md hover:bg-amber-600 transform active:scale-95 transition duration-150 ease-in-out">
                                Đăng ký
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Lịch sử đặt lịch -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-xl font-bold mb-4 text-center">Lịch sử đặt lịch</h3>
                    <ul class="space-y-4">
                        @forelse ($bookingHistory as $booking)
                            <li class="relative border p-4 rounded-md shadow-md">
                                <!-- Trạng thái đặt lịch hiển thị ở góc trên bên phải -->
                                <span class="absolute top-2 right-2 px-3 py-1 rounded-full text-sm
                                    @if($booking->status === 'pending') bg-yellow-200 text-yellow-700
                                    @elseif($booking->status === 'confirmed') bg-green-200 text-green-700
                                    @elseif($booking->status === 'canceled') bg-red-200 text-red-700
                                    @endif">
                                    @if($booking->status === 'pending')
                                        Chưa xử lý
                                    @elseif($booking->status === 'confirmed')
                                        Đã xác nhận
                                    @elseif($booking->status === 'canceled')
                                        Hủy lịch hẹn
                                    @endif
                                </span>

                                <p><strong>Ngày hẹn:</strong> {{ $booking->datetime }}</p>
                                <p><strong>Dịch vụ:</strong> {{ $serviceTranslations[$booking->service] ?? $booking->service }}</p>
                                <p><strong>Loại thú cưng:</strong> {{ $booking->type }}</p>

                                <!-- Hiển thị chi tiết nếu dịch vụ là khách sạn thú cưng -->
                                @if($booking->service === 'pet-hotel')
                                    <p><strong>Loại phòng:</strong>
                                        {{ $booking->room_type == "vip" ? 'Phòng VIP' : 'Chuồng Standard' }}
                                    </p>
                                    <p><strong>Cân nặng:</strong>
                                        @if($booking->weight === 'under_5kg')
                                            Dưới 5kg
                                        @elseif($booking->weight === '5_10kg')
                                            Từ 5-10kg
                                        @elseif($booking->weight === 'above_10kg')
                                            Trên 10kg
                                        @endif
                                    </p>

                                    <!-- Hiển thị giá phòng dựa trên loại phòng và cân nặng -->
                                    @php
                                        $price = 0;
                                        if ($booking->room_type == 'vip') {
                                            $price = match($booking->weight) {
                                                'under_5kg' => 300000,
                                                '5_10kg' => 400000,
                                                'above_10kg' => 500000,
                                                default => 0
                                            };
                                        } else {
                                            $price = match($booking->weight) {
                                                'under_5kg' => 150000,
                                                '5_10kg' => 200000,
                                                'above_10kg' => 250000,
                                                default => 0
                                            };
                                        }
                                    @endphp
                                    <p><strong>Giá phòng:</strong> {{ number_format($price) }} VND</p>
                                @endif

                                <!-- Thêm ghi chú nếu trạng thái là "confirmed" -->
                                @if($booking->status === 'confirmed')
                                    <p class="mt-2 text-green-600">
                                        Lịch hẹn của bạn đã được xác nhận, cố gắng đến đúng giờ để chúng tôi có thể phục vụ chu đáo nhất.
                                    </p>
                                @endif
                            </li>
                        @empty
                            <li class="text-gray-500 text-center">Bạn chưa có lịch sử đăng ký dịch vụ.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <x-slot name="script">
            <script type="module">
                $(document).ready(function() {
                    // Khi người dùng chọn dịch vụ "Đặt phòng khách sạn thú cưng"
                    $('input[name="service[]"]').on('change', function() {
                        if ($(this).val() === 'pet-hotel') {
                            $('#hotelOptions').stop().slideDown(300); // Hiển thị mượt mà các tùy chọn phòng khách sạn
                        } else {
                            $('#hotelOptions').stop().slideUp(300); // Ẩn mượt mà các tùy chọn nếu chọn dịch vụ khác
                        }
                    });

                    $('#bookingForm').on('submit', function(event) {
                        event.preventDefault();

                        $('.error-text').remove();

                        let roomType = null;
                        if ($('input[name="service[]"]:checked').val() === 'pet-hotel') {
                            roomType = $('input[name="roomType"]:checked').val(); // Lấy giá trị từ radio button của loại phòng
                        }
                        let formData = {
                            _token: $('input[name="_token"]').val(),
                            fullname: $('#fullname').val(),
                            phone: $('#phone').val(),
                            email: $('#email').val(),
                            type: $('#type').val(),
                            datetime: $('#datetime').val(),
                            service: $('input[name="service[]"]:checked').val(),
                            weight: $('input[name="weight"]:checked').val(),
                            roomType: roomType
                        };
                        $.ajax({
                            url: '{{ route("booking.store") }}',
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                toastr.success('Đặt lịch thành công, vui lòng chờ xác nhận lại !');
                                setTimeout(() => {
                                    window.location.reload(); // Reload lại trang sau 3 giây
                                }, 3000);
                            },
                            error: function(response) {
                                if (response.status === 422) {
                                    let errors = response.responseJSON.errors;

                                    // Hiển thị lỗi cho từng trường
                                    if (errors.fullname) {
                                        $('#fullname').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.fullname[0] + '</p>');
                                    }
                                    if (errors.phone) {
                                        $('#phone').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.phone[0] + '</p>');
                                    }
                                    if (errors.email) {
                                        $('#email').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.email[0] + '</p>');
                                    }
                                    if (errors.datetime) {
                                        $('#datetime').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.datetime[0] + '</p>');
                                    }
                                } else {
                                    alert('Đã xảy ra lỗi khi gửi tin nhắn. Vui lòng thử lại.');
                                }
                            }
                        });
                    });
                });
            </script>
        </x-slot>
    @else
        <div class="text-center text-red-500">Bạn cần đăng nhập để truy cập trang này.</div>
    @endif
</x-user-layout>
