<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <title>感谢您对 {{$spread->title}} 社区的贡献</title>
    <!-- Styles -->
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        p,
        blockquote,
        pre,
        hr,
        figure,
        table,
        caption,
        th,
        td,
        form,
        fieldset,
        legend,
        input,
        button,
        textarea,
        menu {
            margin: 0;
            padding: 0;
        }

        header,
        footer,
        section,
        article,
        aside,
        nav,
        hgroup,
        address,
        figure,
        figcaption,
        menu,
        details {
            display: block;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption,
        th {
            text-align: left;
            font-weight: normal;
        }

        html,
        body,
        fieldset,
        img,
        iframe,
        abbr {
            border: 0;
        }

        i,
        cite,
        em,
        var,
        address,
        dfn {
            font-style: normal;
        }

        [hidefocus],
        summary {
            outline: 0;
        }

        li {
            list-style: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        small {
            font-size: 100%;
        }

        sup,
        sub {
            font-size: 83%;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: inherit;
        }

        q:before,
        q:after {
            content: none;
        }

        textarea {
            overflow: auto;
            resize: none;
        }

        label,
        summary {
            cursor: default;
        }

        a,
        button {
            cursor: pointer;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        em,
        strong,
        b {
            font-weight: bold;
        }

        del,
        ins,
        u,
        s,
        a,
        a:hover {
            text-decoration: none;
        }

        body {
            background: #fff;
        }

        a,
        a:hover {
            color: #333;
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            /* height: 100vh; */
            margin: 10px;
            padding: 10px;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .flex-left {
            align-items: left;
            display: flex;
            justify-content: left;
            text-align: left;
        }

        .flex-right {
            align-items: right;
            display: right;
            justify-content: right;
            text-align: right;
        }

        .flex-right p {
            display: inline;
        }

        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 60px;
            background-color: #5cb85c;
        }


        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 10px -15px;
        }

        .col-12 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* @media (min-width: 576px) {
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
        } */

        .label {
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
            /* margin-left: auto;
            margin-right: auto; */
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
            <div class="col-12 flex-left">
                <img class="avatar" src="{{ $spread->avatar }}" alt="avatar">
                &nbsp;&nbsp;
                <p style="line-height:60px;">Hi,{{ $spread->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 flex-left" style="text-indent:0.8cm">
                <p>感谢您对{{ $spread->title }}项目的贡献，请领取您的支付宝红包奖励。</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 flex-center">
                <img src="{{ $hongbaoma }}" style="height:250px" alt="支付宝红包码">
            </div>
        </div>

        {{-- <p class="label label-success flex-center">👉付款时选择余额宝付款👈</p>
        <div class="flex-center">
            <ol>
                <li>
                    <p>支付宝发[红包]啦！人人可领，天天可领！长按复制此消息，打开支付宝领取！vPCGS1566C</p>
                </li>
                <li>
                    <p>打开支付宝首页搜索：6107156，即可100%领取！</p>
                </li>
                <li>
                    <p>打开支付宝扫码领，[红包]升级每天领两份，最高99元！天天可领。</p>
                </li>
            </ol>
        </div>
        <p class="flex-center" style="font-weight: bold;">❤️[红包]可在实体门店付款或淘宝购物时抵扣❤️</p> --}}
        <div class="flex-right" style="line-height:20px">
            <p>-- 来自</p>
                <svg height="20" class="octicon octicon-code v-align-middle fill-gray mr-1" aria-label="code" viewBox="0 0 14 16" version="1.1" width="17" role="img"><path d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
               <p>with</p> 
                <svg height="20" class="octicon octicon-heart v-align-middle fill-gray mx-1" aria-label="love" viewBox="0 0 12 16" version="1.1" width="15" role="img"><path d="M11.2 3c-.52-.63-1.25-.95-2.2-1-.97 0-1.69.42-2.2 1-.51.58-.78.92-.8 1-.02-.08-.28-.42-.8-1-.52-.58-1.17-1-2.2-1-.95.05-1.69.38-2.2 1-.52.61-.78 1.28-.8 2 0 .52.09 1.52.67 2.67C1.25 8.82 3.01 10.61 6 13c2.98-2.39 4.77-4.17 5.34-5.33C11.91 6.51 12 5.5 12 5c-.02-.72-.28-1.39-.8-2.02V3z"></path></svg>
               <p>from</p> 
                <svg height="20" class="octicon octicon-mark-github v-align-middle fill-gray mx-1" aria-label="GitHub" viewBox="0 0 16 16" version="1.1" width="20" role="img"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg> 
                <a href="https://github.com/ipusi" class="text-gray">friend</a>
        </div>
    </div>
</body>

</html>