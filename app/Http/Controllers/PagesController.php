<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Mail\WebsiteMessage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->phone = $request['phone'];
        $email->message = $request['message'];

        // \Mail::to('info@kablekings.ie')->send(
        //     new WebsiteMessage($email)
        // );
        \Mail::to('ptiernan@gmail.com')->send(
            new WebsiteMessage($email)
        );

        return redirect()->route('index')->with('success', 'Thanks for getting in touch. We will get back to you soon');
    }
}
