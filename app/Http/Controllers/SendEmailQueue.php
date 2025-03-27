<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;

class SendEmailQueue extends Controller
{
    public function index()
    {
        Request::ip();
        return view('queue');
    }

    public function sendEmail(Request $request)
    {
        dispatch(new \App\Jobs\SendEmailJob($request->email, $request->subject, $request->body));

        return back()->with('message', 'Email sent to queue successfully!');
    }
}
