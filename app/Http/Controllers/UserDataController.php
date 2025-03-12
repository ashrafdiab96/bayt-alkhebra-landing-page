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

        // $downloadLink = route('download.book');
        // session()->flash('success', "تم إرسال البيانات بنجاح! إذا لم يبدأ التحميل تلقائيًا، <a href='$downloadLink'>اضغط هنا</a>.");
        // session()->flash('downloadLink', $downloadLink);
        // return redirect()->back();

        return view('success');
    }

    public function downloadBook()
    {
        $bookPath = public_path('files/book.pdf');
        $customFileName = 'القيمة العادلة لـ سهم البحر الأحمر 2024 .pdf';

        if (file_exists($bookPath)) {
            return response()->download($bookPath, $customFileName);
        }

        return redirect()->back()->with('error', 'حدث خطأ، لم يتم العثور على الكتاب.');
    }
}
