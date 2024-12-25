<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function getRevenueData(Request $request)
    {
        $timePeriod = $request->input('timePeriod', 'monthly'); // 'monthly' hoặc 'yearly'
        $selectedMonth = $request->input('selectedMonth', now()->format('Y-m')); // Mặc định là tháng hiện tại
        $year = substr($selectedMonth, 0, 4);
        $month = substr($selectedMonth, 5, 2);
        $revenueData = [];

        if ($timePeriod === 'monthly') {
            // Lấy doanh thu theo ngày trong tháng được chọn
            $revenueData = Order::where('status', 'shipped')
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->selectRaw('DAY(created_at) as day, SUM(total_amount - 30000) as total, COUNT(id) as order_count')
                ->groupBy('day')
                ->orderBy('day')
                ->get();
        } else {
            // Lấy doanh thu theo tháng trong năm hiện tại
            $revenueData = Order::where('status', 'shipped')
                ->whereYear('created_at', now()->year)
                ->selectRaw('MONTH(created_at) as month, SUM(total_amount - 30000) as total, COUNT(id) as order_count')
                ->groupBy('month')
                ->orderBy('month')
                ->get();
        }

        // Chuẩn bị dữ liệu cho biểu đồ
        $labels = $revenueData->pluck($timePeriod === 'monthly' ? 'day' : 'month')->toArray();
        $totals = $revenueData->pluck('total')->toArray();
        $orderCounts = $revenueData->pluck('order_count')->toArray(); // Lấy số lượng đơn hàng

        return view('admins.revenue', compact('labels', 'totals', 'orderCounts', 'timePeriod', 'selectedMonth'));
    }
}
