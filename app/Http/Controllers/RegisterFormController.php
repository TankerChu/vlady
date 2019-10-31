<?php

namespace App\Http\Controllers;

use App\Mail\RegisterFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Client;

class RegisterFormController extends Controller
{
	public function store()
	{
		$data = request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'city' => 'required',
			'classes' => 'required',
			'message' => 'nullable',
		]);

		$clients  = new Client();

		$clients->name = request('name');
		$clients->email = request('email');
		$clients->phone = request('phone');
		$clients->city = request('city');
		$clients->course = request('classes');
		$clients->save();

		Mail::to('TankerChu@gmail.com')->send(new RegisterFormMail($data));

		return back()->with('message', 'Cảm ơn đã gửi tin đến chúng tôi. Chúng tôi sẽ liên hệ lại với bạn');
	}
}
