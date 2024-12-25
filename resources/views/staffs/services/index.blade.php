<x-staff-layout>
    <x-slot name="title">
        Quản lý khách hàng đăng ký sử dụng dịch vụ
    </x-slot>
    <div>
        <div class="font-bold text-2xl">Quản lý khách hàng đăng ký sử dụng dịch vụ</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <div class="mt-5 p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-300">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tên</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Số điện thoại</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Loại vật nuôi</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Cân nặng</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Loại dịch vụ</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Lịch hẹn</th>
                                <th scope="col" class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">Giá</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($bookings as $booking)
                                @php
                                    // Tính toán giá dựa trên service, roomType và weight
                                    $price = null;
                                    if ($booking->service === 'pet-hotel') {
                                        if ($booking->room_type == 'vip') {
                                            $price = match($booking->weight) {
                                                'under_5kg' => 300000,
                                                '5_10kg' => 400000,
                                                'above_10kg' => 500000,
                                                default => null
                                            };
                                        } else {
                                            $price = match($booking->weight) {
                                                'under_5kg' => 150000,
                                                '5_10kg' => 200000,
                                                'above_10kg' => 250000,
                                                default => null
                                            };
                                        }
                                    } elseif ($booking->service === 'grooming') {
                                        $price = match($booking->weight) {
                                            'under_5kg' => 180000,
                                            '5_10kg' => 200000,
                                            'above_10kg' => 220000,
                                            default => null
                                        };
                                    } elseif ($booking->service === 'clinical') {
                                        $price = 300000;
                                    }
                                @endphp
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $booking->fullname }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $booking->phone }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $booking->type }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $booking->weight }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $serviceTranslations[$booking->service] ?? $booking->service }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">{{ $booking->datetime }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800">
                                        @if($price !== null)
                                            {{ number_format($price) }} VND
                                        @else
                                            Liên hệ
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">
                                        <select id="status-{{ $booking->id }}" class="status-select border rounded p-1
                                                @if($booking->status == 'pending') bg-yellow-100 text-yellow-700
                                                @elseif($booking->status == 'confirmed') bg-green-100 text-green-700
                                                @elseif($booking->status == 'canceled') bg-red-100 text-red-700
                                                @endif" onchange="changeStatus({{ $booking->id }}); changeStatusColor({{ $booking->id }});">
                                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }} class="bg-yellow-100 text-yellow-700">Chưa xử lý</option>
                                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }} class="bg-green-100 text-green-700">Đã xác nhận</option>
                                            <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }} class="bg-red-100 text-red-700">Hủy lịch hẹn</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $bookings->links('layouts.pagination', ['role' => 'user']) }}
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            function changeStatus(bookingId) {
                const selectElement = document.getElementById(`status-${bookingId}`);
                const selectedStatus = selectElement.value;

                // Cập nhật màu sắc dựa trên trạng thái
                switch (selectedStatus) {
                    case 'pending':
                        selectElement.classList.remove('bg-green-100', 'bg-red-100', 'text-green-700', 'text-red-700');
                        selectElement.classList.add('bg-yellow-100', 'text-yellow-700');
                        break;
                    case 'confirmed':
                        selectElement.classList.remove('bg-yellow-100', 'bg-red-100', 'text-yellow-700', 'text-red-700');
                        selectElement.classList.add('bg-green-100', 'text-green-700');
                        break;
                    case 'canceled':
                        selectElement.classList.remove('bg-yellow-100', 'bg-green-100', 'text-yellow-700', 'text-green-700');
                        selectElement.classList.add('bg-red-100', 'text-red-700');
                        break;
                    default:
                        selectElement.classList.remove('bg-yellow-100', 'bg-green-100', 'bg-red-100', 'text-yellow-700', 'text-green-700', 'text-red-700');
                        break;
                }

                // AJAX để cập nhật trạng thái (giữ nguyên phần này nếu đã có)
                $.ajax({
                    url: `/staff/bookings/${bookingId}/update-status`,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: selectedStatus
                    },
                    success: function(response) {
                        toastr.success('Trạng thái đã được cập nhật thành công!');
                    },
                    error: function(error) {
                        toastr.error('Đã xảy ra lỗi khi cập nhật trạng thái.');
                    }
                });
            }

            // Hàm thay đổi màu sắc ngay khi trang tải
            function changeStatusColor(bookingId) {
                const selectElement = document.getElementById(`status-${bookingId}`);
                const selectedStatus = selectElement.value;

                // Xác định màu sắc dựa trên trạng thái ban đầu
                if (selectedStatus === 'pending') {
                    selectElement.classList.add('bg-yellow-100', 'text-yellow-700');
                } else if (selectedStatus === 'confirmed') {
                    selectElement.classList.add('bg-green-100', 'text-green-700');
                } else if (selectedStatus === 'canceled') {
                    selectElement.classList.add('bg-red-100', 'text-red-700');
                }
            }

            // Gọi hàm thay đổi màu sắc khi trang tải
            document.addEventListener('DOMContentLoaded', function() {
                @foreach($bookings as $booking)
                changeStatusColor({{ $booking->id }});
                @endforeach
            });
        </script>
    </x-slot>
</x-staff-layout>
