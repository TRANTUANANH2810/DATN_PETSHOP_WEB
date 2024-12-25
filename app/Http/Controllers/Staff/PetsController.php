<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PetsController extends Controller
{
    public function index(Request $request)
    {
        $query = Pet::query();

        // Nếu có từ khóa tìm kiếm
        if ($request->has('search') && $request->get('search') != '') {
            $query->where('phone', 'like', '%' . $request->get('search') . '%');
        }

        // Lấy danh sách pet sau khi lọc
        $pets = $query->paginate(10);

        return view('staffs.pets.index', compact('pets'));
    }

    public function create()
    {
        $pets = Pet::all();
        return view('staffs.pets.add', compact('pets'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Tạo bản ghi cho bảng Pet
            $pet = Pet::create([
                'name' => $request->get('name', ''),
                'phone' => $request->get('phone', ''),
                'description' => $request->get('description', ''),
            ]);

            // Create path image
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('public/pets');
                $pet->image()->create(['path' => $path]);
            }

            DB::commit();

            return redirect()->route('staff.pets.index')->with('success', 'Thêm mới thành công!');

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'errors' => ['error' => $e->getMessage()],
            ], 500);
        }
    }
    public function edit($id)
    {
        $pet = Pet::where('id', $id)->first();
        if (!$pet) {
            return redirect()->back()->with('error', 'Bài viết không tồn tại');
        }
        return view('staffs.pets.edit', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $pet->name = $request->input('name');
        $pet->phone = $request->input('phone');
        $pet->description = $request->input('description');

        // Process uploaded images
        if ($request->hasFile('image')) {
            // Delete old image
            if ($pet->image) {
                Storage::delete($pet->image->path);
                $pet->image->delete();
            }

            // Save new image
            $path = $request->file('image')->store('public/pets');
            $pet->image()->create(['path' => $path]);
        }

        $pet->save();
        if ($request->ajax()) {
            return response()->json([
                'success' => 'Cập nhật thông tin Pet thành công!',
            ]);
        }

        return redirect()->route('staff.pets.index')->with('success', 'Cập nhật thông tin pet thành công!');
    }
    public function destroy($id)
    {
        try {
            $pet = Pet::findOrFail($id);

            // Delete image
            if ($pet->image) {
                Storage::delete($pet->image->path);
                $pet->image->delete();
            }

            $pet->delete();

            return redirect()->route('staff.pets.index')->with('success', 'Xóa thông tin thành công!');
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
