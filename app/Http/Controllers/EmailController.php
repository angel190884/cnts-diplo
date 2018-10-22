<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Mail\SendMessage;
use Mail;

class EmailController extends Controller
{
    /**
     * Funcion que envia mail de dudas a cntscursos@gmail.com
     *
     * @param Request $request proveniente del formulario.
     *
     * @return route
     */
    public function sendMessage(Request $request)
    {
        $this->validate(
            $request, [
                'email' => 'required|email', 'message' => 'required'
            ]
        );
        Mail::to('cntscursos@gmail.com')
            ->queue(
                new SendMessage(
                    $email = Input::get('email'), $message = Input::get('message')
                )
            );
        return back()->with('successSendMessage', 'Hemos recibido tu mensaje en breve te responderemos!');
    }
}
