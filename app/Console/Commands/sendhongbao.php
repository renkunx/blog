<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendHongBaoMail;
use Illuminate\Support\Facades\Mail;
use App\Spread;
use Illuminate\Support\Facades\DB;

class sendhongbao extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendhongbao {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '发送支付宝红包码';

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
        $email = $this->argument('email');    //查询关键词
        if($email)
        {
            Mail::to($email)->send(new SendHongBaoMail());

        }else {
            
            $emails = DB::select('select email from spreads');
            foreach ($emails as $key => $value) {
                sleep(20);
                Mail::to($value->email)->send(new SendHongBaoMail());
            }  
        }
        
    }
}
