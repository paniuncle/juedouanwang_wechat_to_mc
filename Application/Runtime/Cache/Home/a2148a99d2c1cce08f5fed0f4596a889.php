<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>推送频率设置</title>
	<link rel="stylesheet" href="./Public/css/weui.min.css">
	<link rel="stylesheet" href="./Public/css/main.css">	
	<script src="./Public/js/weui.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no" />
</head>

<body>
   		<form method="post" action="./index.php?a=setted">
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
			<input name="openid" type="hidden" value="<?php echo ($openid); ?>">
		</div>
	    <div class="weui-btn-area">
			<input type="submit" class="weui-btn weui-btn_primary" id="showTooltips" value="保存"/>
		</div>
		</form>
</body>
</html>