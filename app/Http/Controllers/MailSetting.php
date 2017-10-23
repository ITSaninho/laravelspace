<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailClass;
use Illuminate\Support\Facades\Mail;


class MailSetting extends Controller
{
    public function send_form(Request $request)
    {

        $subject = $request->subject;
        $email = $request->email;
        $msg = $request->msg;

        Mail::to('itsaninho@gmail.com')->send(new MailClass($email, $email, $msg));

    }
}
