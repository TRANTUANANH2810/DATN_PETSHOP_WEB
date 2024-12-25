<x-admin-layout>
    <x-slot name="title">
        Thêm sản phẩm mới
    </x-slot>
    <div>
        <div class="font-bold text-2xl text-center">Thêm sản phẩm mới</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <form id="productForm" action="{{route('admin.products.store')}}" method="POST" class="md:w-4/5 md:m-auto mx-5 border-2 py-4 px-10 rounded-lg" enctype="multipart/form-data">
                    @csrf
                    <!-- Tên sản phẩm -->
                    <div class="mt-7">
                        <label for="name" class="block text-sm mb-2 font-semibold">Tên sản phẩm</label>
                        <input id="name" name="name" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập tên sản phẩm">
                    </div>

                    <!-- Thương hiệu -->
                    <div class="mt-7">
                        <label for="brand" class="block text-sm mb-2 font-semibold">Thương hiệu</label>
                        <input id="brand" name="brand" class="p-2 border-2 block w-full  border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập thương hiệu">
                    </div>

                    <!-- Danh mục -->
                    <div class="mt-7">
                        <label for="category" class="block text-sm mb-2 font-semibold ">Danh mục</label>
                        @foreach ($categories as $category)
                            <input type="radio" name="categories[]" class="w-5 h-5" value="{{ $category->id }}"> {{ $category->name }}<br>
                        @endforeach
                    </div>

{{--                    <!-- Input cho Option Name chỉ nhập lần đầu -->--}}
{{--                    <div class="mt-7" id="optionNameContainer">--}}
{{--                        <label for="option_name" class="block text-sm mb-2 font-semibold">Option Name</label>--}}
{{--                        <input type="text" id="option_name" class="p-2 border-2 block w-full  border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập tên Option (VD: Size,...)">--}}
{{--                    </div>--}}

{{--                    <!-- Hiển thị Option Name đã lưu cùng nút xóa -->--}}
{{--                    <div id="savedOptionNameContainer" class="mt-4"></div>--}}

{{--                    <!-- Input cho Option Value -->--}}
{{--                    <div class="mt-7">--}}
{{--                        <label for="option_value" class="block text-sm mb-2 font-semibold">Option Value</label>--}}
{{--                        <input type="text" id="option_value" class="p-2 border-2 block w-full  border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập giá trị Option (VD: M, L,...)">--}}
{{--                    </div>--}}

{{--                    <button id="addOptionBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-6 hidden">Add Option</button>--}}

{{--                    <!-- Hiển thị danh sách các giá trị option -->--}}
{{--                    <div id="optionsContainer" class="mt-4">--}}
{{--                        <ul id="optionsList" class="flex items-center gap-2">--}}
{{--                            <!-- Danh sách giá trị option sẽ được hiển thị ở đây -->--}}
{{--                        </ul>--}}
{{--                    </div>--}}


                    <!-- Giá -->
                    <div class="mt-7">
                        <label for="price" class="block text-sm mb-2 font-semibold">Giá gốc</label>
                        <input id="price" name="price" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập giá sản phẩm">
                    </div>

                    <!-- Sale -->
                    <div class="mt-7">
                        <label for="sale" class="block text-sm mb-2 font-semibold">% Sale</label>
                        <input id="sale" name="sale" class="p-2 border-2 block w-full border border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg " placeholder="Nhập % sale">
                    </div>

                    <div class="mt-7">
                        <div class="file-input-container">
                            <label for="imageInput" class="file-label">Hình ảnh sản phẩm</label>
                            <svg id="selectImageIcon" class="w-32 h-32 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128l-368 0zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39L296 392c0 13.3 10.7 24 24 24s24-10.7 24-24l0-134.1 39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/></svg>
                            <img id="image-preview" class="w-full h-full object-cover rounded-lg hidden" src="" alt="">
                            <input type="file" id="imageInput" class="block w-full" accept="image/*" multiple style="display: none;">
                        </div>

                        <!-- Nơi để hiển thị các ảnh đã chọn và tên ảnh -->
                        <div id="preview" class="mt-4 flex space-x-4 flex-wrap"></div>
                    </div>


                    <!-- Mô tả sản phẩm -->
                    <div class="mt-7">
                        <label for="description" class="block text-sm mb-2 font-semibold">Mô tả sản phẩm</label>
                        <textarea id="description" name="description" class="px-4 block w-full border-gray-200 rounded-lg placeholder-gray-400"></textarea>
                    </div>

                    <!-- Nút tạo sản phẩm -->
                    <div class="flex justify-center mt-7">
                        <button id="addproduct" type="submit" class="py-3 px-4 w-36 mb-5 inline-flex justify-center font-bold items-center gap-x-2 rounded-full border border-transparent bg-green-500 text-white hover:bg-green-700 cursor-pointer">
                            Tạo sp
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
        <script type="module">
            let selectedImages = [];

            // Khi nhấn vào icon, kích hoạt việc mở hộp thoại chọn file
            document.getElementById('selectImageIcon').addEventListener('click', function() {
                document.getElementById('imageInput').click(); // Kích hoạt hộp thoại chọn file
            });

            document.getElementById('imageInput').addEventListener('change', function(event) {
                let previewContainer = document.getElementById('preview');

                // Lấy danh sách file đã chọn
                let files = event.target.files;

                // Duyệt qua từng file được chọn
                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    if (file && file.type.startsWith('image/')) {
                        let reader = new FileReader();

                        // Khi file được load
                        reader.onload = function(e) {
                            // Thêm file vào danh sách selectedImages
                            selectedImages.push(file);

                            // Tạo thẻ div chứa hình ảnh và nút xóa
                            let imageContainer = document.createElement('div');
                            imageContainer.classList.add('relative', 'w-24', 'h-24', 'border', 'border-gray-300', 'p-2', 'm-2', 'rounded-lg', 'text-center');

                            // Tạo thẻ img để hiển thị ảnh
                            let imgElement = document.createElement('img');
                            imgElement.src = e.target.result;
                            imgElement.classList.add('w-full', 'h-full', 'object-cover');

                            // Tạo nút xóa ảnh
                            let removeButton = document.createElement('button');
                            removeButton.innerText = 'X';
                            removeButton.classList.add('absolute', 'top-0', 'right-0', 'bg-red-500', 'text-white', 'rounded-full', 'px-2', 'py-1', 'text-xs');
                            removeButton.addEventListener('click', function() {
                                // Xóa thẻ div chứa ảnh này khi nhấn vào nút xóa
                                let index = selectedImages.indexOf(file); // Tìm vị trí của ảnh trong danh sách
                                if (index !== -1) {
                                    selectedImages.splice(index, 1); // Xóa ảnh khỏi mảng
                                }
                                imageContainer.remove(); // Xóa ảnh khỏi giao diện
                            });

                            // Tạo thẻ div chứa tên file
                            let fileNameElement = document.createElement('div');
                            fileNameElement.innerText = file.name; // Hiển thị tên file
                            fileNameElement.classList.add('text-sm', 'text-center', 'mt-2', 'truncate'); // Style cho tên file

                            // Thêm hình ảnh và nút xóa vào div chứa
                            imageContainer.appendChild(imgElement);
                            imageContainer.appendChild(fileNameElement); // Hiển thị tên ảnh
                            imageContainer.appendChild(removeButton);

                            // Thêm div chứa ảnh vào vùng preview
                            previewContainer.appendChild(imageContainer);
                        };

                        // Đọc file dưới dạng URL
                        reader.readAsDataURL(file);
                    }
                }

                // Reset input file để có thể chọn cùng một ảnh nhiều lần nếu cần
                event.target.value = '';
            });

//             document.addEventListener('DOMContentLoaded', function () {
//                 const optionNameInput = document.getElementById('option_name');
//                 const optionValueInput = document.getElementById('option_value');
//                 const savedOptionNameContainer = document.getElementById('savedOptionNameContainer');
//                 const optionsList = document.getElementById('optionsList');
//                 let options = [];
//                 let optionName = '';
//
//                 // Xử lý khi nhấn phím Enter trong trường Option Name
//                 optionNameInput.addEventListener('keydown', function (event) {
//                     if (event.key === 'Enter') {
//                         event.preventDefault();
//                         optionName = optionNameInput.value.trim(); // Lấy giá trị của option name
//                         if (optionName) {
//                             displayOptionName();
//                             optionNameInput.value = ''; // Xóa giá trị sau khi nhập
//                         } else {
//                             alert('Vui lòng nhập tên option.');
//                         }
//                     }
//                 });
//
//                 // Xử lý khi nhấn phím Enter trong trường Option Value
//                 optionValueInput.addEventListener('keydown', function (event) {
//                     if (event.key === 'Enter') {
//                         event.preventDefault();
//                         const optionValue = optionValueInput.value.trim(); // Lấy giá trị của option value
//                         if (optionValue) {
//                             options.push({ name: optionName, value: optionValue });
//                             displayOptions();
//                             optionValueInput.value = ''; // Xóa giá trị sau khi nhập
//                         } else {
//                             alert('Vui lòng nhập giá trị của option.');
//                         }
//                     }
//                 });
//
//                 // Hiển thị Option Name đã nhập và tạo nút xóa độc lập
//                 function displayOptionName() {
//                     savedOptionNameContainer.innerHTML = `
//                 <div class="inline-flex justify-between items-center border border-gray-300 p-2 rounded-lg bg-green-500">
//                     <span class="font-bold text-white">${optionName}</span>
//                 </div>`;
//
//                     // Gán sự kiện xóa cho nút "Xóa Option Name"
//                     document.getElementById('deleteOptionNameBtn').addEventListener('click', function () {
//                         optionName = ''; // Xóa giá trị option name
//                         savedOptionNameContainer.innerHTML = ''; // Xóa nội dung hiển thị
//                         options = []; // Xóa toàn bộ option đã thêm
//                         optionsList.innerHTML = ''; // Xóa danh sách option value
//                     });
//                 }
//
//                 // Hiển thị danh sách các giá trị option đã thêm và tạo nút xóa độc lập
//                 function displayOptions() {
//                     optionsList.innerHTML = '';
//                     options.forEach((option, index) => {
//                         const listItem = document.createElement('li');
//                         listItem.classList.add('flex', 'justify-between', 'items-center', 'p-2', 'rounded-lg');
//
//                         listItem.innerHTML = `
//                     <div class="inline-flex justify-between items-center p-2 rounded-lg bg-green-500">
//                     <span class="font-bold text-white">${option.value}</span>
//                     <button class="text-red-500 ml-2" id="deleteOptionNameBtn border ">X</button>
//                 </div>
// `;
//                         listItem.querySelector('button').addEventListener('click', function () {
//                             deleteOption(index);
//                         });
//
//                         optionsList.appendChild(listItem);
//                     });
//                 }
//
//                 // Xóa option khỏi danh sách
//                 window.deleteOption = function (index) {
//                     options.splice(index, 1); // Xóa option khỏi mảng
//                     displayOptions(); // Cập nhật danh sách sau khi xóa
//                 };
//             });
//
//             let options = [];
//             Khi admin tạo sản phẩm
            document.getElementById('productForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Ngăn form submit mặc định

                // Tạo form data
                let formData = new FormData(this);  // Lấy tất cả các dữ liệu trong form

                // Thêm các hình ảnh đã chọn vào FormData
                selectedImages.forEach((image, index) => {
                    formData.append('images[]', image); // Đặt từng file ảnh vào mảng 'images[]'
                });

                // Gửi dữ liệu qua fetch
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                    }
                })
                    .then(response => response.json()) // Đảm bảo rằng phản hồi là JSON
                    .then(data => {
                        if (data.success) {
                            toastr.success(data.message);
                            setTimeout(() => {
                                window.location.reload(); // Reload lại trang hiện tại
                            }, 1000);
                        } else {
                            toastr.error('Có lỗi xảy ra trong quá trình tạo sản phẩm.');
                        }
                    })
                    .catch(error => {
                        toastr.error('Có lỗi xảy ra khi tạo sản phẩm.');
                    });
            });
        </script>
    </x-slot>
</x-admin-layout>

