<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $email,$message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$message)
    {
        $this->email= $email;
        $this->message= $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mensaje!!!')->markdown('emails.sendMessage');
    }
}
