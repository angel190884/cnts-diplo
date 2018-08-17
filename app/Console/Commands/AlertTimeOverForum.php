<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

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
        Log::info('alert:time_over_forum');
    }
}
