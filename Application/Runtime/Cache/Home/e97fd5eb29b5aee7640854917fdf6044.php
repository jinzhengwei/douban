<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>注册</title>
	<link rel="stylesheet" href="/Public/home/css/newlogin.css">
	<script src="/Public/home/js/jquery-3.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.14/dist/vue.js"></script>
</head>
<body>
	<div id="login">
		<div class="header new-header">
			<h2>欢迎加入豆瓣</h2>
		</div>
		<form action="<?php echo U('home/user/doreg');?>" method="post">
		<div class="box-form">
			<input type="text" name="phone" placeholder="邮箱 / 手机号" v-model="valueregin">
			<input :type="makechang" name="password" v-model="makepassword" placeholder="密码">
			<input type="text" name="name" placeholder="昵称" v-model="valuename">
			<i :class="isshow ? 'newsee' : 'see'" v-on:click="change"></i>
			<button class="setlogin" v-on:click="setregin">注册</button>
			<a href="javascript:void(0)">
				点击【下一步】代表你已经阅读并同意用户使用协议
			</a>
		</div>
		</form>
		<div class="box-ways">
			<a href="javascript:void(0)">下载豆瓣APP</a>
		</div>
		<div :class="ismake ? 'topshow' : 'hide'">
			<span>
				{{ showtext }}
			</span>
		</div>
	</div>
	<script src="/Public/home/js/login.js"></script>
</body>
</html>