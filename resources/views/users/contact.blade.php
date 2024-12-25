<x-user-layout>
    <x-slot name="title">
        Đặt Lịch Khám
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
            Liên Hệ
        </li>
    </ol>
    <h2 class="mt-5 mx-auto text-center font-bold text-4xl text-amber-500">
        Liên hệ với chúng tôi
    </h2>

    {{-- Thông tin liên hệ --}}
    <div class="container mx-auto px-4 py-8">
        <div class="grid lg:grid-cols-2 grid-cols-1 justify-between gap-8">
            <!-- Địa chỉ -->
            <div class="">
                <h2 class="text-2xl font-bold text-amber-500 mb-4">Địa chỉ</h2>
                <p>
                
                    48 Cao Thắng, Thanh Bình, Hải Châu, Đà Nẵng.
                </p>
            </div>

            <!-- Thông tin liên hệ -->
            <div class="">
                <div class="border border-amber-500 rounded-lg p-4 shadow-md shadow-amber-300">
                    <h3 class="text-xl font-bold text-amber-500 mb-4">Bác Sĩ Trần Tuấn Anh</h3>
                    <p><strong>Điện thoại:</strong> (+84) 987473846</p>
                    <p><strong>Di động:</strong> (852) 9710 8888</p>
                    <p><strong>Fax:</strong> (852) 3016 8668</p>
                    <p><strong>Email:</strong> petspa@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Bản đồ và Form liên hệ --}}
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap lg:flex-nowrap justify-between gap-8">
            <!-- Bản đồ Google -->
            <div class="w-full lg:w-1/2 h-80 lg:h-auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4559.141608569473!2d108.2094084757187!3d16.077636700718852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421847b8d7ec71%3A0x7591c4b0240f6bc2!2zNDggQ2FvIFRo4bqvbmcsIFRoYW5oIELDrG5oLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1734428019010!5m2!1svi!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-lg shadow-lg">
                </iframe>
            </div>

            <!-- Form liên hệ -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-bold text-amber-500 mb-4">Liên lạc với chúng tôi</h2>
                <p class="mb-4">
                    Chúng tôi luôn sẵn sàng lắng nghe từ quý khách. <br>
                    Vui lòng chọn loại yêu cầu của bạn để liên hệ trực tiếp với đội ngũ chúng tôi.
                </p>
                <h3 class="text-xl font-bold text-amber-500 mb-4">GỬI TIN NHẮN CHO CHÚNG TÔI</h3>
                <form id="contactForm">
                    @csrf
                    <div class="mb-4">
                        <label for="fullname" class="block text-sm font-medium text-gray-700">Họ và tên*</label>
                        <input type="text" id="fullname" name="fullname" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ old('fullname') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Điện thoại*</label>
                        <input type="text" id="phone" name="phone" class="mt-1 block w-full border border-amber-400 rounded-md p-2" value="{{ old('phone') }}" required>
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
                        <label for="description" class="block text-sm font-medium text-gray-700">Mô tả tình trạng</label>
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-amber-400 rounded-md p-2" required>{{ old('description') }}</textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-amber-500 text-white py-2 px-4 rounded-md">Đặt lịch hẹn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script type="module">
            $(document).ready(function() {
                $('#contactForm').on('submit', function(event) {
                    event.preventDefault();

                    $('.error-text').remove();

                    let formData = {
                        _token: $('input[name="_token"]').val(),
                        fullname: $('#fullname').val(),
                        type: $('#type').val(),
                        phone: $('#phone').val(),
                        datetime: $('#datetime').val(),
                        description: $('#description').val(),
                    };

                    $.ajax({
                        url: '{{ route("contact.send") }}',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            alert('Tin nhắn của bạn đã được gửi thành công!');
                            $('#contactForm')[0].reset(); // Reset form
                        },
                        error: function(response) {
                            if (response.status === 422) {
                                let errors = response.responseJSON.errors;

                                // Hiển thị lỗi cho từng trường
                                if (errors.fullname) {
                                    $('#fullname').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.fullname[0] + '</p>');
                                }
                                if (errors.type) {
                                    $('#type').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.type[0] + '</p>');
                                }
                                if (errors.phone) {
                                    $('#phone').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.phone[0] + '</p>');
                                }
                                if (errors.datetime) {
                                    $('#datetime').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.datetime[0] + '</p>');
                                }
                                if (errors.description) {
                                    $('#description').after('<p class="error-text text-red-500 text-sm mt-1">' + errors.description[0] + '</p>');
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
</x-user-layout>
