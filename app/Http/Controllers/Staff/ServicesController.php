<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ServicesController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('datetime','desc')->paginate(10);
        $serviceTranslations = [
            'grooming' => 'Grooming & Spa',
            'pet-hotel' => 'Đặt phòng khách sạn',
            'pet-travel' => 'Du lịch cùng Boss',
            'clinical' => 'Khám sức khỏe lâm sàn',
        ];
       return view('staffs.services.index', compact('bookings','serviceTranslations')) ;
    }
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,canceled', // Kiểm tra các trạng thái hợp lệ
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $request->status; // Cập nhật trạng thái với chuỗi
        $booking->save();

        return response()->json(['success' => 'Trạng thái đã được cập nhật thành công!'], 200);
    }
}
