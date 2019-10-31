<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'nullable',
        ]);

        Mail::to('TankerChu@gmail.com')->send(new ContactFormMail($data));

        return back()->with('message','Cảm ơn đã gửi tin đến chúng tôi. Chúng tôi sẽ liên hệ lại với bạn');

    }

}
