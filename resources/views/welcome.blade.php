<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>爱普斯科技 - 兴业尽责</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">主页</a>
                    @else
                        <!-- <a href="{{ route('login') }}">登陆</a>
                        <a href="{{ route('register') }}">注册</a> -->
                        <!-- <a href="{{ url('/news') }}" target="_blank">新闻</a>
                        <a href="{{ url('/article') }}" target="_blank">玩转西安</a>
                        <a href="https://github.com/ipusi" target="_blank">GitHub</a>
                        <a href="{{ url('/contact') }}" target="_blank">关于我们</a> -->
                        <a href="{{ url('/admin') }}">后台管理</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    爱普斯科技
                </div>

                <div class="links">
                    <a href="{{ url('/news') }}" target="_blank">新闻</a>
                    <a href="http://github.com/ipusi" target="_blank">GitHub</a>
                    <a href="{{ url('/article') }}" target="_blank">玩转西安</a>
                    <a href="{{ url('/contact') }}" target="_blank">关于我们</a>
                </div>
            </div>
        </div>
        <!-- <canvas id="reactive-bg-canvas"></canvas>
        <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/gsap/latest/TweenLite.min.js"></script>
        <script src="{{ asset('js/magic-canvas.min.js') }}"></script>
        <script>
        function random_move () {
            $.magicCanvas.draw({
                type:"random-move",
                rgb : function (circlePos) {
                    var px = circlePos.x;
                    var py = circlePos.y;
                    // do some computation....
                    return {r:parseInt(px % 255),g:parseInt(py % 255),b:203};
                }
            })
        };
        random_move();
        </script> -->
    </body>

</html>
