<x-admin-layout>
    <x-slot name="title">
        Doanh thu
    </x-slot>
    <div class="container">
        <h2 class="text-center my-4">Báo cáo Doanh thu từ Đơn hàng Đã giao</h2>

        <!-- Khu vực chọn thời gian -->
        <div class="row mb-4">
            <div class="col-md-4 offset-md-4">
                <form action="{{ route('admin.revenue') }}" method="GET" id="time-period-form">
                    <!-- Chọn theo tháng -->
                    <select id="time-period" name="timePeriod" class="form-select" aria-label="Chọn thời gian" onchange="document.getElementById('time-period-form').submit()">
                        <option value="monthly" {{ $timePeriod == 'monthly' ? 'selected' : '' }}>Theo ngày trong tháng</option>
                        <option value="yearly" {{ $timePeriod == 'yearly' ? 'selected' : '' }}>Theo tháng trong năm</option>
                    </select>
                    <!-- Chọn tháng -->
                    <input type="month" id="selected-month" name="selectedMonth" value="{{ $selectedMonth ?? now()->format('Y-m') }}" class="form-control mt-3" onchange="document.getElementById('time-period-form').submit()">
                </form>
            </div>
        </div>

        <!-- Biểu đồ doanh thu -->
        <canvas id="revenueChart" class="w-96" height="200"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dữ liệu biểu đồ được truyền từ controller
        const labels = @json($labels);
        const data = @json($totals);
        const orderCounts = @json($orderCounts);

        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu (không tính phí ship)',
                    data: data,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Biểu đồ Doanh thu theo Thời gian'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const index = context.dataIndex;
                                const revenue = context.raw.toLocaleString() + ' VND';
                                const orders = orderCounts[index];
                                return `Doanh thu: ${revenue}, Số đơn hàng: ${orders}`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Thời gian'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Doanh thu (VNĐ)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-admin-layout>
