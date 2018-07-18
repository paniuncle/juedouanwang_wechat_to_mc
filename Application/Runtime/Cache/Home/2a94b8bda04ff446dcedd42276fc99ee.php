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
		<p>此功能建设中</p>
	</div>
	<br >
    <div class="weui-cells__title">MyCard账号信息</div>
    <div class="weui-cells weui-cells_form">
    <div class="weui-btn-area">
    	<a class="weui-btn weui-btn_primary" href="?a=binding&openid=<?php echo ($openid); ?>" id="showTooltips">绑定账号</a>
	</div>
<!--        <div class="weui-cells__title">推送积分变动频率</div>
		<div class="weui-cell weui-cell_select">
			<div class="weui-cell__bd">
				<select class="weui-select" name="select1">
					<option selected="" value="1">即时推送</option>
					<option value="2">每日推送</option>
					<option value="3">每周推送</option>
					<option value="4">每月推送</option>
				</select>
			</div>
		</div> -->
    </div>
</body>
</html>