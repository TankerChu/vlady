<?php

namespace App\Http\Controllers;

use App\Mail\EventFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventFormController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'event' => 'required',
            'quantity' => 'required',
            'message' => 'nullable',
        ]);

        Mail::to('TankerChu@gmail.com')->send(new EventFormMail($data));

        return back()->with('message', 'Cảm ơn bạn đã đăng kí. Chúng tôi sẽ liên hệ lại với bạn để xác nhận');
    }
}
