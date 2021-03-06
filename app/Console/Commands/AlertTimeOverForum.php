<?php

namespace App\Console\Commands;

use App\Mail\ForumEndingReminder;
use App\Forum;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Log;
use Mail;

class AlertTimeOverForum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alert:time_over_forum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command que alerta a los alumnos que el foro termina';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $forums=Forum::with('users')
            ->where('end', 'like', Carbon::now()->addDay()->format('%Y-m-d%'))
            ->get();

        foreach ($forums as $forum) {
            $users=$forum->users()->get();
            foreach ($users as $user) {
                Mail::to($user->email)->queue(new ForumEndingReminder($forum, $user));
                Log::info("alertSend:forumEndingReminder: data[$user]");
            }
        }
    }
}
