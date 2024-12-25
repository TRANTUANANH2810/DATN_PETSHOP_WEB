<x-user-layout>
    <x-slot name="title">
        Giỏ hàng
    </x-slot>

    <!-- Breadcrumbs -->
    <ol class="flex items-center whitespace-nowrap py-10 lg:px-48">
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
            Giỏ hàng
        </li>
    </ol>

    <div class="container mx-auto px-4 py-6">
        @if($cartItems->isNotEmpty())
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Giỏ hàng của bạn</h2>
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 text-center">Tùy chọn</th>
                        <th class="py-2 px-4 text-left">Tên Sản phẩm</th>
                        <th class="py-2 px-4 text-center">Hình ảnh</th>
                        <th class="py-2 px-4 text-center">Số lượng</th>
                        <th class="py-2 px-4 text-center">Đơn giá</th>
                        <th class="py-2 px-4 text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartItems as $item)
                        <tr class="border-t">
                            <!-- Checkbox -->
                            <td class="py-2 px-4 text-center">
                                <input type="checkbox" class="select-item size-5" value="{{ $item->product_id }}" data-price="{{ $item->quantity * ($item->product->sale > 0 ? $item->product->price - ($item->product->price * $item->product->sale / 100) : $item->product->price) }}" checked>
                            </td>

                            <!-- Tên Sản phẩm -->
                            <td class="py-2 px-4">{{ $item->product->name }}</td>

                            <!-- Hình ảnh Sản phẩm -->
                            <td class="py-2 px-4 flex justify-center">
                                <img src="{{ Storage::url($item->product->images->first()->image_path) }}" alt="{{ $item->product->name }}" class="w-20 h-20 object-cover rounded">
                            </td>

                            <!-- Số lượng -->
                            <td class="py-2 px-4 text-center">
                                <form action="{{ route('cart.update', [$item->id, 'decrease']) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-gray-300 text-gray-700 px-2 py-1 rounded">-</button>
                                </form>
                                <span class="mx-2">{{ $item->quantity }}</span>
                                <form action="{{ route('cart.update', [$item->id, 'increase']) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-gray-300 text-gray-700 px-2 py-1 rounded">+</button>
                                </form>
                            </td>

                            <!-- Đơn giá -->
                            <td class="py-2 px-4 text-center">
                                @if ($item->product->sale > 0)
                                    <span class="text-red-600">{{ number_format($item->product->price - ($item->product->price * $item->product->sale / 100)) }} đ</span>
                                    <span class="line-through text-gray-500">{{ number_format($item->product->price) }} đ</span>
                                @else
                                    <span class="text-red-600">{{ number_format($item->product->price) }} đ</span>
                                @endif
                            </td>

                            <!-- Xóa sản phẩm -->
                            <td class="py-2 px-4 text-center">
                                <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <!-- Phí ship -->
                <div class="flex justify-end mt-4">
                    <div class="text-lg">Phí vận chuyển: 30,000đ</div>
                </div>

                <!-- Tổng tiền -->
                <div class="flex justify-end mt-2">
                    <div class="text-xl font-bold">Tổng cộng:
                        <span id="totalAmount">
                            {{ number_format($totalAmount = $cartItems->sum(function($item) {
                                $price = $item->product->sale > 0 ?
                                    $item->product->price - ($item->product->price * $item->product->sale / 100) :
                                    $item->product->price;
                                return $item->quantity * $price;
                            }) + 30000) }} đ
                        </span>
                    </div>
                </div>

                <!-- Tiếp tục mua sắm và thanh toán -->
                <div class="mt-6 text-center flex justify-between">
                    <a href="{{ route('shop') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Tiếp tục mua sắm</a>
                    <a href="{{ route('orders.history') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Xem lịch sử đơn hàng</a>

                    @if(auth()->user()->shipping_address)
                        <div class="flex gap-2 items-center">
                            <!-- Thanh toán qua MoMo -->
                            <form id="payment-form" action="{{ route('momo-payment.create') }}" method="GET">
                                <input type="hidden" name="selectedItems" id="selectedItems">
                                <input type="hidden" name="totalAmountForPayment" id="totalAmountForPayment" value="{{ $totalAmount }}">
                                <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                                    Thanh toán qua
                                    <img src="https://developers.momo.vn/v3/vi/img/logo.svg" class="bg-white w-7 h-7 rounded-lg">
                                </button>
                            </form>

                            <!-- Thanh toán khi nhận hàng (COD) Button -->
                            <button type="button" class="px-4 py-3 inline-flex items-center text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700" data-hs-overlay="#hs-full-screen-modal-below-md" onclick="populateCodModal()">
                                Thanh toán khi nhận hàng
                            </button>

                            <!-- COD Payment Confirmation Modal -->
                            <div id="hs-full-screen-modal-below-md" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-full-screen-modal-below-md-label">
                                <div class="hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all max-w-full max-h-full h-full md:hs-overlay-open:mt-10 md:mt-0 md:max-w-lg md:max-h-none md:h-auto md:mx-auto">
                                    <div class="flex flex-col bg-white pointer-events-auto max-w-full max-h-full h-full md:max-w-lg md:max-h-none md:h-auto md:border md:rounded-xl md:shadow-sm dark:bg-neutral-800 md:dark:border-neutral-700">
                                        <div class="flex justify-between py-3 px-4 border-b dark:border-neutral-700">
                                            <h3 id="hs-full-screen-modal-below-md-label" class="font-bold text-gray-800 dark:text-white">
                                                Xác nhận thông tin đơn hàng
                                            </h3>
                                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-full-screen-modal-below-md">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-4 overflow-y-auto">
                                            <div id="selectedItemsList" class="mb-4">
                                                <!-- Table for Product Details -->
                                                <table class="min-w-full bg-white border border-gray-300 rounded-md mb-4">
                                                    <thead class="bg-gray-100">
                                                    <tr>
                                                        <th class="py-2 px-4 text-left border-b">Tên sản phẩm</th>
                                                        <th class="py-2 px-4 text-center border-b">Hình ảnh</th>
                                                        <th class="py-2 px-4 text-center border-b">Số lượng</th>
                                                        <th class="py-2 px-4 text-center border-b">Giá</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="productDetails">
                                                    <!-- Dynamic items will be injected here -->
                                                    </tbody>
                                                </table>

                                                <!-- Shipping Fee and Total -->
                                                <div class="flex justify-between mt-4 px-4 text-lg">
                                                    <span class="font-semibold">Phí vận chuyển:</span>
                                                    <span id="shippingFee">30,000 đ</span>
                                                </div>
                                                <div class="flex justify-between mt-2 px-4 text-xl font-bold">
                                                    <span>Tổng cộng:</span>
                                                    <span id="totalAmountInModal">0 đ</span>
                                                </div>

                                                <!-- Payment Method -->
                                                <div class="mt-2 px-4">
                                                    <span class="font-semibold">Hình thức:</span> <span class="text-green-600">Ship COD</span>
                                                </div>
                                            </div>

                                            <!-- Customer Information Section -->
                                            <h3 class="font-semibold mb-2 ">Thông tin khách hàng</h3>
                                            <div class="mt-4 flex flex-col text-start">
                                                <p><strong>Tên:</strong> {{ auth()->user()->name }}</p>
                                                <p><strong>Số điện thoại:</strong> {{ auth()->user()->phone }}</p>
                                                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                                                <p><strong>Địa chỉ:</strong> {{ auth()->user()->shipping_address }}</p>
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t mt-auto dark:border-neutral-700">
                                            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600" data-hs-overlay="#hs-full-screen-modal-below-md">
                                                Đóng
                                            </button>
                                            <form id="cod-payment-form" action="{{ route('payment.cod') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="selectedItems" id="selectedItemsCod">
                                                <input type="hidden" name="totalAmountForPayment" id="totalAmountForPaymentCod" value="{{ $totalAmount }}">
                                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-blue-600 text-white hover:bg-blue-700">
                                                    Xác nhận
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('profile') }}" class="bg-yellow-500 text-white px-6 py-3 rounded-lg">Cập nhật địa chỉ trước khi thanh toán</a>
                    @endif
                </div>
            </div>
        @else
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-2xl font-bold mb-10">Giỏ hàng trống</h2>
                <a href="{{ route('shop') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Mua sắm ngay</a>
                <a href="{{ route('orders.history') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Xem lịch sử đơn hàng</a>
            </div>
        @endif
    </div>

    <x-slot name="script">
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkboxes = document.querySelectorAll('.select-item');
                const totalAmountElement = document.getElementById('totalAmount');
                const totalAmountForPayment = document.getElementById('totalAmountForPayment');
                const shippingFee = 30000; // Phí vận chuyển
                let totalAmount = 0;

                function calculateTotal() {
                    let newTotal = 0;
                    let hasSelectedItem = false; // Kiểm tra xem có sản phẩm nào được chọn không

                    checkboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            hasSelectedItem = true; // Đánh dấu nếu có sản phẩm được chọn
                            newTotal += parseFloat(checkbox.getAttribute('data-price'));
                        }
                    });

                    // Chỉ cộng phí vận chuyển nếu có ít nhất một sản phẩm được chọn
                    if (hasSelectedItem) {
                        newTotal += shippingFee;
                    }

                    // Cập nhật tổng số tiền hiển thị
                    totalAmountElement.innerText = newTotal.toLocaleString() + ' đ';
                    totalAmountForPayment.value = newTotal; // Cập nhật giá trị để gửi thanh toán
                    totalAmount = newTotal; // Lưu tổng số tiền hiện tại
                }

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function () {
                        calculateTotal(); // Tính lại tổng tiền khi người dùng thay đổi lựa chọn
                    });
                });

                calculateTotal(); // Tính tổng khi trang tải lần đầu

                // Function to handle MoMo payment
                document.querySelector('#payment-form').addEventListener('submit', function (e) {
                    const selectedItems = Array.from(document.querySelectorAll('.select-item:checked'))
                        .map(checkbox => checkbox.value);

                    if (selectedItems.length === 0) {
                        e.preventDefault(); // Ngăn chặn việc submit form nếu không có sản phẩm nào được chọn
                        alert('Vui lòng chọn ít nhất một sản phẩm để thanh toán.');
                        return;
                    }

                    document.querySelector('#selectedItems').value = selectedItems.join(',');
                });

                // Function to handle COD payment
                window.populateCodModal = function () {
                    const selectedItems = Array.from(document.querySelectorAll('.select-item:checked')).map(checkbox => ({
                        id: checkbox.value,
                        name: checkbox.closest('tr').querySelector('td:nth-child(2)').innerText,
                        image: checkbox.closest('tr').querySelector('td:nth-child(3) img').src,
                        quantity: checkbox.closest('tr').querySelector('td:nth-child(4) span').innerText,
                        price: parseFloat(checkbox.getAttribute('data-price')).toLocaleString()
                    }));

                    if (selectedItems.length === 0) {
                        alert('Vui lòng chọn ít nhất một sản phẩm để thanh toán.');
                        return;
                    }

                    const productDetails = document.getElementById('productDetails');
                    productDetails.innerHTML = selectedItems.map(item => `
            <tr>
                <td class="py-2 px-4 border-b">${item.name}</td>
                <td class="py-2 px-4 text-center border-b">
                    <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover rounded">
                </td>
                <td class="py-2 px-4 text-center border-b">x${item.quantity}</td>
                <td class="py-2 px-4 text-center border-b">${item.price} đ</td>
            </tr>
        `).join('');

                    document.getElementById('totalAmountInModal').innerText = totalAmountForPayment.value.toLocaleString() + ' đ';
                    document.getElementById('selectedItemsCod').value = selectedItems.map(item => item.id).join(',');
                    document.getElementById('totalAmountForPaymentCod').value = totalAmountForPayment.value;
                };
            });

        </script>
    </x-slot>
</x-user-layout>
