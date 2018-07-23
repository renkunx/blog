<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class democommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demon:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command demo';

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
        //
        $users = User::all();

        $bar = $this->output->createProgressBar(count($users));

        foreach ($users as $user) {
            $this->info($user);

            $bar->advance();
        }

        $bar->finish();

    }
}
