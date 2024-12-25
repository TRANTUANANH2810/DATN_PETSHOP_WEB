<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffsController extends Controller
{
    public function index()
    {
        $staffs = Staff::orderBy('created_at', 'desc')->paginate(15);
        return view('admins.staffs.index', compact('staffs'));
    }

    // Lưu danh mục mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'username' => 'required|unique:staffs,username|max:255',
            'password' => 'required|min:8|confirmed', // Mật khẩu phải được xác nhận
        ]);

        // Lưu thông tin nhân viên
        Staff::create([
            'username' => $request->username,
            'password' => bcrypt($request->password), // Mã hóa mật khẩu trước khi lưu
        ]);

        // Trả về thông báo thành công
        return back()->with('success', 'Nhân viên đã được tạo thành công.');
    }

    // Xóa danh mục
    public function destroy($id)
    {
        $staff = Staff::find($id);
        if (!$staff) {
            return redirect()->back()->with('error', 'Nhân viên không tồn tại');
        }
        $staff->delete();
        return back()->with('success', 'Nhân viên đã được xóa thành công');
    }
}
