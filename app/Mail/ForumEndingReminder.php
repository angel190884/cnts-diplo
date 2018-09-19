<?php

namespace App\Mail;

use App\Question;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForumEndingReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $question;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Question $question, User $user)
    {
        $this->question=$question;
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Recordatorio de participación en Foro')->markdown('emails.forumEndingReminder');
    }
}
