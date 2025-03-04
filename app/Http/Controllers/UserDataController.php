<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function index()
    {
        $users = UserData::paginate(20);
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $messages = [
            // 'name.required'  => 'The name field is required!',
            // 'name.max'       => 'The name must not exceed 255 characters!',
            // 'email.required' => 'The email field is required!',
            // 'email.email'    => 'Please enter a valid email address!',
            // 'phone.required' => 'The phone field is required!',

            'name.required'  => 'الاسم مطلوب',
            'name.max'       => 'الحد الأقصى 255 حرف',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email'    => 'من فضلك أدخل بريد إلكتروني صالح',
            'phone.required' => 'رقم الهاتف مطلوب',
        ];

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
        ], $messages);

        UserData::create($request->all());

        return redirect()->back()->with('success', 'تم إرسال البيانات بنجاح!');
    }
}
