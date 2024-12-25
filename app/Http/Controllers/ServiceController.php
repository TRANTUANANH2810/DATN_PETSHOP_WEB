<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        return view('users.service.index');
    }
    public function grooming()
    {
     return view('users.service.grooming');
    }
    public function travel()
    {
        return view('users.service.pet-travel');
    }
    public function clinical()
    {
        return view('users.service.clinical');
    }
    public function hotel()
    {
        return view('users.service.pet-hotel');
    }

    public function registerService()
    {
        $bookingHistory = Booking::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->limit(5) // Giới hạn chỉ hiển thị 5 lịch sử đặt lịch gần nhất
            ->get();

        $serviceTranslations = [
            'grooming' => 'Dịch vụ Spa cho thú cưng',
            'pet-hotel' => 'Khách sạn thú cưng',
            'pet-travel' => 'Du lịch cùng Boss',
            'clinical' => 'Khám sức khỏe lâm sàn',
        ];
        return view('users.service.register', compact('bookingHistory', 'serviceTranslations'));
    }

    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'type' => 'required|string|max:255',
            'datetime' => 'required|date',
            'service' => 'required',
            'weight' => 'required',
            'roomType' => 'required_if:service,pet-hotel',
        ]);

        // Lưu thông tin đặt lịch vào cơ sở dữ liệu
        Booking::create([
            'user_id' => Auth::id(), // Lấy id của người dùng hiện tại
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'datetime' => $request->datetime,
            'service' => $request->service,
            'weight' => $request->weight,
            'room_type' => $request->roomType ?? null, // Lưu loại phòng nếu có, hoặc null
            'status' => 'pending', // Mặc định trạng thái là 'pending'
        ]);

        // Điều hướng lại trang và hiển thị thông báo thành công
        return response()->json(['message' => 'Đăng ký dịch vụ thành công'], 200);
    }
}

