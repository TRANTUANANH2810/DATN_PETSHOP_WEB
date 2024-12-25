<x-admin-layout>
    <x-slot name="title">
        Chỉnh sửa sản phẩm
    </x-slot>
    <div>
        <div class="font-bold text-2xl text-center">Chỉnh sửa sản phẩm</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <form id="productForm" action="{{route('admin.products.update', $product->id)}}" method="POST" class="md:w-4/5 md:m-auto mx-5 border-2 py-4 px-10 rounded-lg" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mt-7">
                        <label for="name" class="block text-sm mb-2 font-semibold">Tên sản phẩm</label>
                        <input id="name" name="name" value="{{ $product->name }}" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập tên sản phẩm">
                    </div>

                    <!-- Thương hiệu -->
                    <div class="mt-7">
                        <label for="brand" class="block text-sm mb-2 font-semibold">Thương hiệu</label>
                        <input id="brand" name="brand" value="{{ $product->brand }}" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập thương hiệu">
                    </div>

                    <!-- Danh mục -->
                    <div class="mt-7">
                        <label for="category" class="block text-sm mb-2 font-semibold">Danh mục</label>
                        @foreach ($categories as $category)
                            <input type="radio" name="categories[]" class="w-5 h-5" value="{{ $category->id }}"
                                {{ $product->categories->contains($category->id) ? 'checked' : '' }}>
                            {{ $category->name }}<br>
                        @endforeach
                    </div>

                    <!-- Giá -->
                    <div class="mt-7">
                        <label for="price" class="block text-sm mb-2 font-semibold">Giá gốc</label>
                        <input id="price" name="price" value="{{ $product->price }}" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập giá sản phẩm">
                    </div>

                    <!-- Sale -->
                    <div class="mt-7">
                        <label for="sale" class="block text-sm mb-2 font-semibold">% Sale</label>
                        <input id="sale" name="sale" value="{{ $product->sale }}" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập % sale">
                    </div>

                    <div class="mt-7">
                        <div class="file-input-container">
                            <label for="imageInput" class="file-label">Hình ảnh sản phẩm</label>
                            <svg id="selectImageIcon" class="w-32 h-32 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128l-368 0zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39L296 392c0 13.3 10.7 24 24 24s24-10.7 24-24l0-134.1 39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/>
                            </svg>
                            <img id="image-preview" class="w-full h-full object-cover rounded-lg hidden" src="" alt="">
                            <input type="file" id="imageInput" class="block w-full" accept="image/*" multiple style="display: none;">
                        </div>

                        <!-- Nơi hiển thị các ảnh hiện tại và ảnh mới được chọn -->
                        <div id="preview" class="mt-4 flex space-x-4 flex-wrap">
                            <!-- Hiển thị các ảnh cũ từ storage -->
                            @foreach($product->images as $image)
                                <div class="relative w-24 h-24 border border-gray-300 p-2 m-2 rounded-lg text-center">
                                    <!-- Sử dụng $image->image_path để lấy đường dẫn cho từng ảnh -->
                                    <img src="{{ Storage::url($image->image_path) }}" alt="Product Image" class="w-full h-full object-cover">
                                    <!-- Nút xóa ảnh -->
                                    <button type="button" class="absolute top-0 right-0 bg-red-500 text-white rounded-full px-2 py-1 text-xs delete-old-image" data-image-id="{{ $image->id }}">X</button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Mô tả sản phẩm -->
                    <div class="mt-7">
                        <label for="description" class="block text-sm mb-2 font-semibold">Mô tả sản phẩm</label>
                        <textarea id="description" name="description"  class="px-4 block w-full border-gray-200 rounded-lg placeholder-gray-400"> {{ $product->description }}</textarea>
                    </div>

                    <!-- Nút tạo sản phẩm -->
                    <div class="flex justify-center mt-7">
                        <button id="addproduct" type="submit" class="py-3 px-4 w-36 mb-5 inline-flex justify-center font-bold items-center gap-x-2 rounded-full border border-transparent bg-green-500 text-white hover:bg-green-700 cursor-pointer">
                            Sửa sp
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
        </script>

        <!-- JavaScript để hiển thị ảnh đã chọn và cho phép xóa ảnh -->
        <script>
            let selectedImages = []; // Danh sách các ảnh mới được chọn
            let imagesToDelete = []; // Mảng lưu trữ các ID ảnh cần xóa

            // Lắng nghe sự kiện click cho các nút xóa ảnh cũ
            document.querySelectorAll('.delete-old-image').forEach(button => {
                button.addEventListener('click', function() {
                    let imageId = this.getAttribute('data-image-id'); // Lấy ID của ảnh
                    let imageContainer = this.closest('div'); // Thẻ chứa ảnh sẽ bị xóa khỏi giao diện

                    // Đánh dấu ảnh để xóa
                    imagesToDelete.push(imageId);

                    // Xóa ảnh khỏi giao diện
                    imageContainer.remove();
                });
            });

            // Khi nhấn vào icon, kích hoạt việc mở hộp thoại chọn file
            document.getElementById('selectImageIcon').addEventListener('click', function() {
                document.getElementById('imageInput').click(); // Kích hoạt hộp thoại chọn file
            });

            // Xử lý ảnh mới được chọn
            document.getElementById('imageInput').addEventListener('change', function(event) {
                let previewContainer = document.getElementById('preview');
                let files = event.target.files;

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    if (file && file.type.startsWith('image/')) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            selectedImages.push(file); // Lưu trữ file vào danh sách ảnh mới

                            let imageContainer = document.createElement('div');
                            imageContainer.classList.add('relative', 'w-24', 'h-24', 'border', 'border-gray-300', 'p-2', 'm-2', 'rounded-lg', 'text-center');

                            let imgElement = document.createElement('img');
                            imgElement.src = e.target.result;
                            imgElement.classList.add('w-full', 'h-full', 'object-cover');

                            let removeButton = document.createElement('button');
                            removeButton.innerText = 'X';
                            removeButton.classList.add('absolute', 'top-0', 'right-0', 'bg-red-500', 'text-white', 'rounded-full', 'px-2', 'py-1', 'text-xs');
                            removeButton.addEventListener('click', function() {
                                selectedImages.splice(selectedImages.indexOf(file), 1); // Xóa ảnh khỏi danh sách ảnh mới
                                imageContainer.remove(); // Xóa ảnh khỏi giao diện
                            });

                            imageContainer.appendChild(imgElement);
                            imageContainer.appendChild(removeButton);
                            previewContainer.appendChild(imageContainer);
                        };
                        reader.readAsDataURL(file); // Đọc file và hiển thị ảnh mới
                    }
                }

                event.target.value = ''; // Reset input để có thể chọn cùng một file nhiều lần
            });

            // Khi submit form
            document.getElementById('productForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Ngăn chặn hành vi submit mặc định

                let formData = new FormData(this);

                // Thêm các ảnh mới vào form
                selectedImages.forEach((image) => {
                    formData.append('images[]', image); // Gửi các ảnh mới
                });

                // Thêm các ID ảnh cần xóa vào form
                imagesToDelete.forEach((imageId) => {
                    formData.append('deleteImages[]', imageId); // Gửi các ID ảnh cần xóa
                });

                // Gửi form với các ảnh mới và ảnh cần xóa
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            toastr.success(data.message); // Hiển thị thông báo thành công
                            setTimeout(() => {
                                window.location.reload(); // Tải lại trang sau khi thành công
                            }, 1000);
                        } else {
                            toastr.error('Có lỗi xảy ra trong quá trình cập nhật sản phẩm.');
                        }
                    })
                    .catch(error => {
                        toastr.error('Có lỗi xảy ra khi cập nhật sản phẩm.');
                    });
            });

        </script>

    </x-slot>
</x-admin-layout>

