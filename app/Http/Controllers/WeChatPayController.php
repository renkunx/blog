<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Easywechat\Factory;
use Illuminate\Support\Facades\Log;

class WeChatPayController extends Controller
{
    private $payment ;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->payment = app('wechat.payment');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->payment->jssdk->setUrl('https://frp.shuigvo.info/wechat/pay');

        $result = $this->payment->order->unify(
            [
            'body' => '腾讯充值中心-QQ会员充值',
            'out_trade_no' => '201508061253461',
            'total_fee' => 101,
            'spbill_create_ip' => '123.12.12.123', // 可选，如不传该参数，SDK 将会自动获取相应 IP 地址
            'notify_url' => 'https://frp.shuigvo.info/wechat/pay/callback', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            'trade_type' => 'JSAPI',
            'openid' => session('wechat_user')['original']['openid'],
            ]
        );
        if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
            // $result = $this->payment->jssdk->appConfig($result['prepay_id']);//第二次簽名
            $jssdk = $this->payment->jssdk;
            $json = $jssdk->bridgeConfig(
                $result['prepay_id']
            );

            return view('wechat.pay', ['json'=>$json ,'payment' => $this->payment]);
        } else {
            Log::error('微信支付签名失败:'.var_export($result, 1));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
