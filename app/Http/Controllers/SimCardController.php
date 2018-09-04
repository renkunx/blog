<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Simboss\Sdk\SimbossClient;
use Simboss\Sdk\Request\DeviceDetailRequest;
use Simboss\Sdk\Request\DeviceRateplansRequest;
use Simboss\Sdk\Request\UserDashboardGetRequest;
use Simboss\Sdk\Request\DeviceDailyUsageRequest;

class SimCardController extends Controller
{
    //
    public function index(){
        //初始化client
        $simbossClient = SimbossClient::newInstance("102420134014", "96347f81ea703bf7d2277fce78782ca7");

        //查询卡详情
        // $request = new DeviceDetailRequest();
        // $request = new DeviceRateplansRequest();
        // $request = new UserDashboardGetRequest();
        $request = new DeviceDailyUsageRequest();
        $request->iccid = "89860918700300034177";
        $request->date = "2018-08-29";
        $response = $simbossClient->excute($request);
        dd($response);
        //返回结果说明
        //1、接口请求的是否成功 bol
        $success = $response->success;
        //2、返回码, 见https://www.simboss.com/www/api-doc/index.html, 返回码规范章节。
        $code = $response->code;
        //3、返回的成功或者错误消息
        $message = $response->message;
        //4、返回的成功或者错误详细消息
        $detail = $response->detail;
        //5、返回的数据，不同请求返回值不同，具体请查看API文档。
        $data = $response->data;
    }
}
