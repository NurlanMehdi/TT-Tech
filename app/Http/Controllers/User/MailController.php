<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {

        $fullname = $request->fullname;
        $email = $request->email;
        $body = $request->message;

        Mail::send('user.mail',['body' => $body],function ($send) use ($email,$fullname){
            $send->to($email)->subject($fullname);
        });

        return redirect()->back();
    }
}
