<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        Mail::to('duaarif601@gmail.com')
            ->send(new WelcomeEmail($data));

        return back()->with(
            'contact_success',
            'Your message has been sent successfully!'
        );
    }
}