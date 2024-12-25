<x-staff-layout>
    <x-slot name="title">
        Thêm thông tin pet mới
    </x-slot>
    <div>
        <div class="font-bold text-2xl text-center">Thêm Pet mới</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <form id="productForm" action="{{route('staff.pets.store')}}" method="POST" class="md:w-4/5 md:m-auto mx-5 border-2 py-4 px-10 rounded-lg" enctype="multipart/form-data">
                    @csrf
                    <!-- Tên chủ pet -->
                    <div class="mt-7">
                        <label for="name" class="block text-sm mb-2 font-semibold">Tên chủ Pet</label>
                        <input id="name" name="name" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập tên chủ Pet">
                    </div>

                    <!-- SDT -->
                    <div class="mt-7">
                        <label for="phone" class="block text-sm mb-2 font-semibold">Số điện thoại</label>
                        <input id="phone" name="phone" class="p-2 border-2 block w-full  border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập số điện thoại">
                    </div>

                    <div class="mt-7">
                        <label for="image" class="block text-sm mb-2 font-semibold">Hình ảnh</label>
                        <div class="relative">
                            <input type="file" name="image" id="input-image" class="hidden">
                            <div id="image-preview-contain" class="w-96 h-64 flex cursor-pointer ">
                                <svg id="icon-upload" class="w-48 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128l-368 0zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39L296 392c0 13.3 10.7 24 24 24s24-10.7 24-24l0-134.1 39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/></svg>
                                <img id="image-preview" class="w-full h-full object-cover rounded-lg hidden" src="" alt="">
                            </div>
                        </div>
                    </div>


                    <!-- Mô tả tình trạng -->
                    <div class="mt-7">
                        <label for="description" class="block text-sm mb-2 font-semibold">Tình trạng</label>
                        <textarea id="description" name="description" class="px-4 block w-full border-gray-200 rounded-lg placeholder-gray-400"></textarea>
                    </div>

                    <!-- Nút thêm thông tin pet -->
                    <div class="flex justify-center mt-7">
                        <button id="addproduct" type="submit" class="py-3 px-4 w-36 mb-5 inline-flex justify-center font-bold items-center gap-x-2 rounded-full border border-transparent bg-green-500 text-white hover:bg-green-700 cursor-pointer">
                            Thêm mới
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="module">
            CKEDITOR.replace('description' , {
                height : 500,
                toolbar: [
                    '/',
                    ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'Find', 'Replace', '-', 'Outdent', 'Indent', '-', 'Print'],
                    '/',
                    ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                    ['FontSize', 'Image', 'Table', '-', 'Link', 'Flash', 'Smiley', 'TextColor', 'BGColor', 'Source']
                ],
                fontSize_sizes: '12/12px;14/14px;16/16px;18/18px;24/24px;36/36px;48/48px;'
            });
            $(document).ready(function () {
                const container = $('#image-preview-contain');
                const previewImage = $('#image-preview');
                const uploadIcon = $('#icon-upload');
                const imageInput = $('#input-image');
                const regex2 = /\.(jpg|jpeg|png|bmp|gif|svg|webp)$/i;

                container.click(function () {
                    imageInput.click();
                });

                imageInput.change(function (event) {
                    const input = event.target;

                    if (input.files && input.files[0]) {
                        const file = input.files[0];

                        if (regex2.test(file.name)) {
                            const reader2 = new FileReader();

                            reader2.onload = function (e) {
                                previewImage.attr('src', e.target.result);
                                previewImage.removeClass('hidden');
                                uploadIcon.addClass('hidden');
                                container.addClass('border border-gray-300 rounded-full');
                            }
                            reader2.readAsDataURL(input.files[0]);
                        } else {
                            toastr.error('Hãy chọn file ảnh!');
                        }
                    } else {
                        previewImage.addClass('hidden');
                        uploadIcon.removeClass('hidden');
                        container.removeClass('border border-gray-300 rounded-full');
                    }
                });
            })
        </script>
    </x-slot>
</x-staff-layout>

