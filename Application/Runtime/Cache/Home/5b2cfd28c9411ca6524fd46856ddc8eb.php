<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>绑定MyCard账号</title>
	<link rel="stylesheet" href="./Public/css/weui.min.css">
	<link rel="stylesheet" href="./Public/css/main.css">	
	<script src="./Public/js/weui.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no" />
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>

</head>
<body>

<div class="page msg_success js_show">
    <div class="weui-msg">
        <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
        <div class="weui-msg__text-area">
            <h2 class="weui-msg__title">绑定成功</h2>
            <p class="weui-msg__desc">您已经成功的绑定了MyCard账号，日后我们会为您提供更加优质的服务</p>
        </div>
        <div class="weui-msg__opr-area">
            <p class="weui-btn-area">
                <a href="javascript:wx.closeWindow();" class="weui-btn weui-btn_primary">关闭</a>
            </p>
        </div>
        <div class="weui-msg__extra-area">
            <div class="weui-footer">
                <p class="weui-footer__links">
                    <a href="https://mycard.moe" class="weui-footer__link">MyCard官网</a>
                </p>
                <p class="weui-footer__text">Copyright © 2008-2018 ygobbs.com</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>