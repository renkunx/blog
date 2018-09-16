@extends('wechat/layout/wxapp')

@section('head')  
<script>wx.config(<?php echo $app->jssdk->buildConfig(array('scanQRCode'), true) ?>);</script>
@append

@section('content')
<div>{{ print_r($user) }}</div>
<a href="/wechat/pay/">去支付</a>
@stop
