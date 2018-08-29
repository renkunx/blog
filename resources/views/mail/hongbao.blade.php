<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <title>爱普斯科技</title>
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

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .content {
                text-align: center;
            }
            .row {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            .col-md-6 .col-sm-12 {
                position: relative;
                width: 100%;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
            }
            @media (min-width: 576px) {
                .col-md-6 {
                    -webkit-box-flex: 0;
                        -ms-flex: 0 0 50%;
                            flex: 0 0 50%;
                    max-width: 50%;
                }
            }
            @media (max-width: 576px) {
                .col-sm-12 {
                    -webkit-box-flex: 0;
                        -ms-flex: 0 0 100%;
                            flex: 0 0 100%;
                    max-width: 100%;
                }
            }
            .label {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
            }

            .label-success {
                background-color: #5cb85c;
            }

            .label-default {
                background-color: #777;
            }

            .label-info {
                background-color: #5bc0de;
            }
            img {
                width: auto;
                height: auto;
                max-width: 100%;
                max-height: 100%;
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 1rem;
                transition: transform .2s;
                box-shadow: 2px 2px 20px 2px rgba(0, 0, 0, 0.3);
            }

            img:hover {
                transform: scale(1.01);
            }
        </style>
</head>
<body>   
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-12 flex-center">
                <img src="{{ $hongbaoma }}" style="height:250px" alt="支付宝红包码"  >
            </div>
            <div class="col-md-6 col-sm-12 flex-center">
                    <img src="{{ $yuebaohongbao }}" style="height:250px" alt="余额宝红包"  >
            </div>
        </div>
        <span class="label label-success">👉付款时选择余额宝付款👈</span>
        <ol>
            <li><p>支付宝发[红包]啦！人人可领，天天可领！长按复制此消息，打开支付宝领取！vPCGS1566C</p></li>
            <li><p>打开支付宝首页搜索：6107156，即可100%领取！</p></li>
            <li><p>打开支付宝扫码领，[红包]升级每天领两份，最高99元！天天可领。</p></li>
        </ol>
        <p style="font-weight: bold;">❤️[红包]可在实体门店付款或淘宝购物时抵扣❤️</p>
    </div>
</body>
</html>