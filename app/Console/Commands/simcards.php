<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\SimCard;
use Illuminate\Http\Request;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\DeviceDetailRequest;
use Simboss\Sdk\Request\DeviceRateplansRequest;
use Simboss\Sdk\Request\UserDashboardGetRequest;
use Simboss\Sdk\Request\DeviceDailyUsageRequest;
use PHPUnit\Framework\MockObject\Stub\Exception;
use Illuminate\Support\Facades\Log;

class simcards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:synsimcardinfo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取 simcard 信息';

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
        //初始化client
        $simbossClient = SimbossClient::newInstance("102420134014", "96347f81ea703bf7d2277fce78782ca7");

        
        
        $simcards = SimCard::all();
        foreach ($simcards as $key => $value) {
            //查询卡详情
            $request = new DeviceDetailRequest();
            // $request = new DeviceRateplansRequest();
            // // $request = new UserDashboardGetRequest();
            // $request = new DeviceDailyUsageRequest();
            // $request->iccid = "89860918700300034177";
            $request->iccid = $value->iccid;
            // $request->date = "2018-08-29";
            try{
                $response = $simbossClient->excute($request);
                // dd($response);
                //返回结果说明
                //1、接口请求的是否成功 bol
                // $success = $response->success;
                print $response->success."  ".$response->data->iccid."\n";
                if ($response->success) {
                    # code...
                    $data = $response->data;
                    SimCard::where('iccid',$data->iccid)->update([
                        'type' => $data->type,
                        'status' => $data->status,
                        'iratePlanName' => isset($data->iratePlanName) ? $data->iratePlanName : "2018-01-01 00:00:00",
                        'startDate' => isset($data->startDate) ? $data->startDate : "2018-01-01 00:00:00",
                        'expireDate' => isset($data->expireDate) ?  $data->expireDate : "2018-01-01 00:00:00",
                        // 'realExpireData' => $data->realExpireData,
                        'usedDataVolume' => $data->usedDataVolume,
                        'carrier' => $data->carrier,
                        'memo' => isset($data->memo) ? $data->memo : " "
                        ]);
                }
                // dd($response);
                //2、返回码, 见https://www.simboss.com/www/api-doc/index.html, 返回码规范章节。
                // $code = $response->code;
                //3、返回的成功或者错误消息
                // $message = $response->message;
                //4、返回的成功或者错误详细消息
                // $detail = $response->detail;
                //5、返回的数据，不同请求返回值不同，具体请查看API文档。
            }
            catch(\Exception $e){
                Log::info($e);
            }
            
        }
    }
}
