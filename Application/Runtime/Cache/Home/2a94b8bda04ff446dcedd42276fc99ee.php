<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>绑定MyCard账号</title>
	<link rel="stylesheet" href="./public/css/weui.min.css">
	<link rel="stylesheet" href="./public/css/main.css">	
	<script src="./public/js/weui.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no" />
</head>
<body>
	<br>
	<div class="head">
		<img class="headimg" src="./public/headlogo.png" />
	</div>
	<br >
    <div class="weui-cells__title">MyCard账号信息</div>
    <div class="weui-cells weui-cells_form">
    	<div class="weui-cell">
        	<div class="weui-cell__hd"><label class="weui-label">账号</label></div>
            <div class="weui-cell__bd">
            	<input class="weui-input" type="text" pattern="[0-9]*" placeholder="用户名/邮箱"/>
            </div>
        </div>
    	<div class="weui-cell">
        	<div class="weui-cell__hd"><label class="weui-label">密码</label></div>
            <div class="weui-cell__bd">
            	<input class="weui-input" type="password" pattern="[0-9]*" placeholder=""/>
            </div>
        </div>
        <div class="weui-cells__title">推送积分变动频率</div>
		<div class="weui-cell weui-cell_select">
			<div class="weui-cell__bd">
				<select class="weui-select" name="select1">
					<option selected="" value="1">即时推送</option>
					<option value="2">每日推送</option>
					<option value="3">每周推送</option>
					<option value="4">每月推送</option>
				</select>
			</div>
		</div>
		<label for="weuiAgree" class="weui-agree">
			<input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
				<span class="weui-agree__text">
					阅读并同意<a href="javascript:void(0);">《相关条款》</a>
				</span>
		</label>
    </div>
    <div class="weui-cells__tips">决斗暗网承诺不获取用户隐私信息</div>
	<div class="weui-btn-area">
    	<a class="weui-btn weui-btn_primary" href="?a=msg" id="showTooltips">绑定</a>
    </div>
</body>
</html>