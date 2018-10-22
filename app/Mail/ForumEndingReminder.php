<?php

namespace App\Mail;

use App\Forum;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForumEndingReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $forum,$user;

    /**
     * Create a new message instance.
     *
     * @param Forum $forum
     * @param User $user
     */
    public function __construct(Forum $forum, User $user)
    {
        $this->forum=$forum;
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Recordatorio de participación en Foro')
            ->markdown('emails.forumEndingReminder');
    }
}
