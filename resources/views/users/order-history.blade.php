<x-user-layout>
    <x-slot name="title">
        Lịch sử đơn hàng
    </x-slot>
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
            Lịch sử đơn hàng
        </li>
    </ol>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6">Lịch sử đơn hàng</h1>

        @if($orders->isEmpty())
            <div class="text-center text-yellow-700 p-4 min-h-96" role="alert">
                <p>Hiện tại bạn chưa có đơn hàng nào.</p>
            </div>
        @else
            <div class="overflow-x-auto bg-white shadow-md rounded-lg min-h-96">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mã đơn hàng</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngày đặt hàng</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hình thức</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tổng cộng</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trạng thái</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Chi tiết</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($orders as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">#{{ $order->order_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $order->created_at->format('d/m/Y') }}</td>
                            <td class="px-2 py-3 text-sm text-gray-800">
                                @if ($order->payment_method === 'MoMo')
                                    <span class="bg-pink-500 text-white px-2 py-1 rounded">Đã thanh toán MoMo</span>
                                @else
                                    {{ $order->payment_method }}
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ number_format($order->total_amount) }}đ</td>
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
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none"
                                        data-hs-overlay="#order-details-modal-{{ $order->id }}">
                                    Xem chi tiết
                                </button>
                            </td>
                        </tr>

                        <!-- Modal hiển thị chi tiết sản phẩm của đơn hàng -->
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
                                        <!-- Thông tin thêm: Thời gian đặt hàng, trạng thái đơn hàng và thông tin người dùng -->
                                        <div class="text-gray-800 dark:text-white">
                                            <p><strong>Khách hàng:</strong> {{ $order->user->name ?? 'N/A' }}</p>
                                            <p><strong>Số điện thoại:</strong> {{ $order->user->phone ?? 'Chưa cập nhật' }}</p>
                                            <p><strong>Địa chỉ nhận hàng:</strong> {{ $order->user->shipping_address ?? 'Chưa cập nhật' }}</p>
                                            <p><strong>Thời gian đặt hàng:</strong> {{ $order->created_at->format('H:i d/m/Y') }}</p>
                                            <p><strong>Trạng thái:</strong>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
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
                                                <li class="flex justify-between py-2 border-b">
                                                    <div class="flex items-center">
                                                        <!-- Hiển thị hình ảnh sản phẩm -->
                                                        <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="Product Image" class="object-cover w-14 h-14 group-hover:scale-95 transition-transform duration-300 ease-in-out">

                                                        <div class="ml-4">
                                                            <span>{{ $product->name }}</span>
                                                            <!-- Hiển thị giá (nếu có khuyến mãi) -->
                                                            @if ($product->sale > 0)
                                                                <br>
                                                                <span class="text-red-600 font-bold">{{ number_format($product->price - ($product->price * $product->sale / 100)) }} đ</span>
                                                                <span class="line-through text-gray-500 ml-2">{{ number_format($product->price) }} đ</span>
                                                            @else
                                                                <br>
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
                                    }) + 30000)}}đ</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-end p-4 border-t dark:border-gray-600">
                                        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-gray-500 text-white hover:bg-gray-600 focus:outline-none"
                                                data-hs-overlay="#order-details-modal-{{ $order->id }}">
                                            Đóng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-user-layout>
