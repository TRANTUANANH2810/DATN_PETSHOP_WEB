<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Requests\Staff\SignInRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function create(): View
    {
        return view('staffs.signin');
    }

    public function store(SignInRequest $request)
    {
        $staff = Staff::where('username', $request->username)->first();
        if ($staff && Hash::check($request->password, $staff->password)) {
            // Đăng nhập thành công
            Auth::guard('staff')->login($staff);

            return redirect()->intended('/staff/contacts')->with('success', 'Đăng nhập thành công !');
        }

        // Nếu đăng nhập thất bại
        return back()->withErrors([
            'username' => 'Thông tin đăng nhập không chính xác.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Đăng xuất nhân viên
        Auth::guard('staff')->logout();

        // Hủy bỏ phiên đăng nhập (invalidate) và regenerate token để đảm bảo bảo mật
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Điều hướng về trang đăng nhập hoặc trang chủ tùy theo yêu cầu
        return redirect()->route('staff.signin')->with('success', 'Bạn đã đăng xuất thành công.');
    }
}
