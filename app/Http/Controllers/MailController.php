<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /* public function Sendmail()
    {
        $details=[
            'title'=>'Hello',
            'body'=>'My name is Ibrohim'
        ];
        Mail::to('ibrohimabbosov757@gmail.com')->send(new TestMail($details));
        return "Email Sent!";
    } */
    public function Sendmail()
    {
        return view('emails.Testmail');
    }
    public function Sendmail2(Request $req)
    {
        $details=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'message'=>$req->message
        ];
        Mail::to('ibrohimabbosov757@gmail.com')->send(new TestMail($details));
        return back()->with('message_sent','Success');
    } 
}
