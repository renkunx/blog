<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>微信支付测试</title>
    <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        wx.config(<?php echo $payment->jssdk->buildConfig(array('chooseWXPay'), false) ?>);
        function wechatpay(){
            WeixinJSBridge.invoke(
                'getBrandWCPayRequest', <?= $json ?>,
                function(res){
                    if(res.err_msg == "get_brand_wcpay_request:ok" ) {
                        // 使用以上方式判断前端返回,微信团队郑重提示：
                        // res.err_msg将在用户支付成功后返回
                        // ok，但并不保证它绝对可靠。
                        console.log(res);
                    }else{
                        console.log(res);
                    }
                }
            );
        }
    </script>
</head>
<body>
    <div align="center">
        <button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="wechatpay()" >立即支付</button>
    </div>
    
</body>
</html>