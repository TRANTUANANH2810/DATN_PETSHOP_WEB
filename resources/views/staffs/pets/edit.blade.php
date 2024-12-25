<x-staff-layout>
    <x-slot name="title">
        Cập nhật thông tin pet
    </x-slot>
    <div>
        <div class="font-bold text-2xl text-center"> Cập nhật thông tin Pet</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <form id="updateBlog" action="{{route('staff.pets.update', $pet->id)}}" method="POST" class="md:w-4/5 md:m-auto mx-5 border-2 py-4 px-10 rounded-lg" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mt-7">
                        <label for="name" class="block text-sm mb-2 font-semibold">Tên chủ Pet</label>
                        <input id="name" name="name" value="{{ $pet->name }}" class="p-2 border-2 block w-full border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập tên chủ Pet">
                    </div>

                    <!-- SDT -->
                    <div class="mt-7">
                        <label for="phone" class="block text-sm mb-2 font-semibold">Số điện thoại</label>
                        <input id="phone" name="phone" value="{{ $pet->phone }}" class="p-2 border-2 block w-full  border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập số điện thoại">
                    </div>

                    <div class="mt-7">
                        <label for="image" class="block text-sm mb-2 font-semibold">Hình ảnh</label>
                        <div class="relative">
                            <input type="file" name="image" id="input-image" class="hidden">
                            <div id="image-preview-contain" class="w-96 h-64 flex items-center justify-center cursor-pointer">
                                <img id="image-preview" class="w-full h-full rounded-xl border-2 " src="{{ Storage::url($pet->image->path) }}" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Mô tả tình trạng -->
                    <div class="mt-7">
                        <label for="description" class="block text-sm mb-2 font-semibold">Tình trạng</label>
                        <textarea id="description" name="description" class="px-4 block w-full border-gray-200 rounded-lg placeholder-gray-400">{{$pet->description}}</textarea>
                    </div>
                    <div class="flex justify-center mt-7">
                        <button id="editpet" type="submit" class="py-3 px-4 w-36 mb-5 inline-flex justify-center font-bold items-center gap-x-2 rounded-full border border-transparent bg-green-500 text-white hover:bg-green-700 cursor-pointer">
                            Cập nhật
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="module">
            CKEDITOR.replace('description' , {
                height: 500,
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
                window.appConfig = {
                    urls: {
                        pet: '{{ route('staff.pets.index') }}',
                    },
                    values: {
                        role: '',
                    },
                    csrfToken: '{{ csrf_token() }}'
                };
            })
        </script>
    </x-slot>
</x-staff-layout>

