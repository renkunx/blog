<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('head')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('登陆') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('注册') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/console') }}"> {{ __('控制台') }} </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-center text-md-center">
                    <div class="col-4">
                        <h5>小程序</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>易递取</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>商户小账本</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>玩转西安</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>开源项目</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>blog</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>sftp-asycn</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>合作伙伴</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>中国移动</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>中国电信</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>中国联通</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="tel:+8618629080248"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="https://weibo.com/5720540544/profile?topnav=1&wvr=6"><i class="fa fa-weibo"></i></a></li>
                            <li class="list-inline-item"><a href="" rel="tooltip" title="Download now">
                                <i class="fa fa-wechat"></i>
                                <div class="thumbnail" style="display:none;">
                                    <!-- <img class="img-responsive" src="/images/wechat.jpg"> -->
                                </div>
                            </a></li>
                            <li class="list-inline-item"><a href="https://j.map.baidu.com/SzHtZ" target="_blank"><i class="fa fa-map-marker"></i></a></li>
                            <li class="list-inline-item"><a href="mailto:rk@pusi.site?subject=项目合作"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://pusi.site" target="_blank">爱普斯科技</a></p>
                    </div>
                    </hr>
                </div>	
            </div>
        </section>
</body>
</html>
