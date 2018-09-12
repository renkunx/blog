<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Spread;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankForContribute;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class thankgithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:thankgithub {spreadid?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '为 Github 社区贡献者发送支付宝红包';

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
        //
        $spread  = new Spread();
        $id = $this->argument('spreadid');    //查询关键词
        if ($id) {
            $spread = Spread::where('id', '=', $id)->first();
            Mail::to($spread->email)->send(new ThankForContribute($spread));
        } else {
            foreach (Spread::where('category', '=', 'github')->orderby('id', 'asc')->cursor() as  $value) {
                // sleep(10);
                print $value->name."\n";
                try {
                    Mail::to($value->email)->queue(new ThankForContribute($value));
                    DB::update('update spreads set count = count+1 where email = ?', [$value->email]);
                } catch (\Exception $e) {
                    print($value->name." ".$value->email."发送失败\n");
                    Log::error($value->name." ".$value->email."发送失败\n".$e);
                }
            }
        }
    }
}
