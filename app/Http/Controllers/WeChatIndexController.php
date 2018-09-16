<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeChatIndexController extends Controller
{
    //
    public $app;

    /**
     * 微信入口构造函数
     * 
     * @return
     */
    public function __construct()
    {
        $this->app = app('wechat.official_account');
    }

    /**
     * 微信 获取用户授权
     * 
     * @return redirect
     */
    public function index()
    {
        $oauth = $this->app->oauth;
        // 未登录
        if (empty(session('wechat_user'))) {

            session(['target_url'=>'/wechat/index']);

            return $oauth->redirect();
            // 这里不一定是return，如果你的框架action不是返回内容的话你就得使用
            // $oauth->redirect()->send();
        }
        // 已经登录过
        $user = session('wechat_user');
        return view('wechat.index', [ 'user'=>$user , 'app' => $this->app]);
    }

    /**
     * 微信用户授权回调
     * 
     * @return 
     */
    public function callback() 
    {
        
        $oauth = $this->app->oauth;
        // 获取 OAuth 授权结果用户信息
        $user = $oauth->user();

        session(['wechat_user'=> $user->toArray()]);

        $targetUrl = session('target_url', '/');

        header('location:'. $targetUrl); // 跳转到 wechat/index
    }
}
