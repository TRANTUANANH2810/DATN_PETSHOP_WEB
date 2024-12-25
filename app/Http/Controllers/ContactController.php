<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('users.contact');
    }

    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'phone' => 'required|digits_between:10,12',
            'datetime' => 'required||date_format:Y-m-d\TH:i',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422); // HTTP status code 422 cho lỗi validation
        }

        Contact::create($request->all());

        return response()->json(['success' => 'Bạn đã gửi liên hệ thành công'], 200);
    }
}
