<x-admin-layout>
    <x-slot name="title">
        Quản lý đơn hàng
    </x-slot>
    <div>
        <div class="font-bold text-2xl">Quản lý đơn hàng</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form method="GET" action="{{ route('admin.orders.index') }}" class="mb-4">
                        <div class="flex items-center gap-4">
                            <input
                                type="text"
                                name="search"
                                class="border rounded px-4 py-2"
                                placeholder="Tìm theo mã đơn hàng"
                                value="{{ request()->get('search', '') }}"
                            />
                            <button
                                type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                            >
                                Tìm kiếm
                            </button>
                        </div>
                    </form>

                    @if($orders->isEmpty())
                        <!-- Nếu không tìm thấy đơn hàng -->
                        <div class="text-center py-10 bg-white shadow-md rounded-lg">
                            <h2 class="text-lg font-bold text-gray-700 mb-4">Không tìm thấy đơn hàng</h2>
                            <p class="text-gray-500 mb-6">Chúng tôi không thể tìm thấy đơn hàng nào khớp với yêu cầu tìm kiếm của bạn.</p>
                            <a href="{{ route('admin.orders.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Xem tất cả đơn hàng</a>
                        </div>
                    @else
                    <div class="">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-300">
                            <tr>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Mã đơn hàng</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Khách hàng</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Ngày đặt hàng</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Hình thức</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Tổng cộng</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Trạng thái</th>
                                <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($orders as $order)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        #{{ $order->order_number }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        {{ $order->user->name ?? 'N/A' }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        {{ $order->created_at->format('H:i d/m/Y') }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        @if ($order->payment_method === 'MoMo')
                                            <span class="bg-pink-500 text-white px-2 py-1 rounded">Đã thanh toán MoMo</span>
                                        @else
                                            {{ $order->payment_method }}
                                        @endif
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap text-center text-sm text-gray-800">
                                        {{ number_format($order->total_amount) }}đ
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap text-center">
                                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full
                                            {{ $order->status == 'shipped' ? 'bg-green-100 text-green-800' :
                                               ($order->status == 'pending' ? 'bg-yellow-100 text-yellow-800' :
                                               ($order->status == 'shipping' ? 'bg-blue-100 text-blue-800' : 'bg-red-100 text-red-800 font-bold')) }}">
                                            @if($order->status == 'completed')

                                            @elseif($order->status == 'pending')
                                                {{-- Icon for pending status --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5 mr-1"><path d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM96 75l0-11 192 0 0 11c0 19-5.6 37.4-16 53L112 128c-10.3-15.6-16-34-16-53zm16 309c3.5-5.3 7.6-10.3 12.1-14.9L192 301.3l67.9 67.9c4.6 4.6 8.6 9.6 12.1 14.9L112 384z"/></svg>
                                            @elseif($order->status == 'shipping')
                                                {{-- Icon for shipping status --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5 mr-1" ><path d="M48 0C21.5 0 0 21.5 0 48L0 368c0 26.5 21.5 48 48 48l16 0c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L48 0zM416 160l50.7 0L544 237.3l0 18.7-128 0 0-96zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-1" fill="green">
                                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                                            @endif
                                            {{ $order->status_label }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <!-- Nút mở modal chi tiết -->
                                        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none"
                                                data-hs-overlay="#order-details-modal-{{ $order->id }}">
                                            Xem chi tiết
                                        </button>

                                        <!-- Nút Hủy đơn hàng -->
                                        @if(in_array($order->status, ['pending', 'shipping']))
                                            <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST" class="inline">
                                                @csrf
                                                <button type="submit" class="py-2 px-3 border rounded-lg bg-red-300 text-red-700" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này?')">Hủy đơn hàng</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>

                                <!-- Modal chi tiết đơn hàng -->
                                <div id="order-details-modal-{{ $order->id }}" class="hs-overlay hidden fixed inset-0 z-50 overflow-x-hidden overflow-y-auto bg-black bg-opacity-50" tabindex="-1">
                                    <div class="relative w-full max-w-2xl mx-auto p-4 h-full md:h-auto">
                                        <div class="bg-white rounded-lg shadow dark:bg-gray-800">
                                            <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Chi tiết đơn hàng #{{ $order->order_number }}
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-hs-overlay="#order-details-modal-{{ $order->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-6 space-y-4">
                                                <!-- Thông tin đơn hàng -->
                                                <div class="text-gray-800 dark:text-white">
                                                    <p><strong>Khách hàng:</strong> {{ $order->user->name ?? 'N/A' }}</p>
                                                    <p><strong>Số điện thoại:</strong> {{ $order->user->phone ?? 'N/A' }}</p>
                                                    <p><strong>Địa chỉ:</strong> {{ $order->user->shipping_address ?? 'N/A' }}</p>
                                                    <p><strong>Thời gian đặt hàng:</strong> {{ $order->created_at->format('H:i d/m/Y') }}</p>
                                                    <p><strong>Trạng thái:</strong>
                                                        <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full
                                                            {{ $order->status == 'completed' ? 'bg-green-100 text-green-800' :
                                                               ($order->status == 'pending' ? 'bg-yellow-100 text-yellow-800' :
                                                               ($order->status == 'shipping' ? 'bg-blue-100 text-blue-800' :
                                                               'bg-red-100 text-red-800')) }}">
                                                            @if($order->status == 'completed')
                                                                <svg class="w-4 h-4 mr-1 text-green-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                                                </svg>
                                                            @elseif($order->status == 'pending')
                                                                {{-- Icon for pending status --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5 mr-1"><path d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM96 75l0-11 192 0 0 11c0 19-5.6 37.4-16 53L112 128c-10.3-15.6-16-34-16-53zm16 309c3.5-5.3 7.6-10.3 12.1-14.9L192 301.3l67.9 67.9c4.6 4.6 8.6 9.6 12.1 14.9L112 384z"/></svg>
                                                            @elseif($order->status == 'shipping')
                                                                {{-- Icon for shipping status --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5 mr-1" ><path d="M48 0C21.5 0 0 21.5 0 48L0 368c0 26.5 21.5 48 48 48l16 0c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L48 0zM416 160l50.7 0L544 237.3l0 18.7-128 0 0-96zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                                            @else
                                                                {{-- Icon for other statuses (e.g., failed) --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 mr-1"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>
                                                            @endif
                                                            {{ $order->status_label }}
                                                        </span>
                                                    </p>
                                                    <p><strong>Hình thức:</strong>
                                                        @if ($order->payment_method === 'COD')
                                                            Ship COD - Thanh toán khi nhận hàng
                                                        @elseif ($order->payment_method === 'MoMo')
                                                            Đã thanh toán bằng MoMo
                                                        @else
                                                            {{ $order->payment_method }}
                                                        @endif
                                                    </p>
                                                </div>

                                                <!-- Danh sách sản phẩm -->
                                                <ul>
                                                    @foreach($order->products as $product)
                                                        <li class="flex justify-between py-2 border-b items-center">
                                                            <div class="flex items-center">
                                                                <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="Product Image" class="object-cover w-14 h-14 rounded-lg group-hover:scale-95 transition-transform duration-300 ease-in-out">
                                                                <div class="ml-4">
                                                                    <span>{{ $product->name }}</span>
                                                                    <br>
                                                                    @if ($product->sale > 0)
                                                                        <span class="text-red-600 font-bold">{{ number_format($product->price - ($product->price * $product->sale / 100)) }} đ</span>
                                                                        <span class="line-through text-gray-500 ml-2">{{ number_format($product->price) }} đ</span>
                                                                    @else
                                                                        <span class="text-red-600 font-bold">{{ number_format($product->price) }} đ</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <span class="my-auto">{{ number_format($product->pivot->quantity) }} x {{ number_format($product->sale > 0 ? $product->price - ($product->price * $product->sale / 100) : $product->price) }}đ</span>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                                <!-- Tổng tiền -->
                                                <div class="flex justify-end mt-4">
                                                    <div class="text-sm">Phí vận chuyển: 30,000đ</div>
                                                </div>
                                                <div class="text-right text-lg font-bold text-gray-900 dark:text-white">
                                                    <p>Tổng tiền: {{ number_format($order->products->sum(function($product) {
                                                    $price = $product->sale > 0 ? $product->price - ($product->price * $product->sale / 100) : $product->price;
                                                    return $product->pivot->quantity * $price;
                                                }) + 30000) }}đ</p>
                                                </div>
                                            </div>
                                            <!-- Nút Giao hàng nếu trạng thái là Pending -->
                                            @if($order->status == 'pending')
                                                <div class="flex justify-end p-4 border-t dark:border-gray-600">
                                                    <form action="{{ route('admin.orders.ship', $order->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-green-300 text-green-700 hover:bg-green-400">
                                                            Xác nhận giao hàng
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5" fill="green">
                                                                <path d="M48 0C21.5 0 0 21.5 0 48L0 368c0 26.5 21.5 48 48 48l16 0c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L48 0zM416 160l50.7 0L544 237.3l0 18.7-128 0 0-96zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                             @if($order->status == 'shipping')
                                                <div class="flex justify-end p-4 border-t dark:border-gray-600">
                                                    <form action="{{ route('admin.orders.ship', $order->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-green-300 text-green-700 hover:bg-green-400">
                                                            Xác nhận giao hàng thành công
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5" fill="green">
                                                                <path d="M48 0C21.5 0 0 21.5 0 48L0 368c0 26.5 21.5 48 48 48l16 0c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L48 0zM416 160l50.7 0L544 237.3l0 18.7-128 0 0-96zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
