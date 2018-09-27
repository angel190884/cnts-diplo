<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;

class EmailController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'message' => 'required'
        ]);
        Mail::to('cntscursos@gmail.com')->queue(new SendMessage($email = Input::get('email'),$message=Input::get('message')));
        return back()->with('successSendMessage','Hemos recibido tu mensaje en breve te responderemos!');
    }
}
