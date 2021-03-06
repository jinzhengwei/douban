<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>登录豆瓣</title>
	<link rel="stylesheet" href="/Public/home/css/newlogin.css">
	<script src="/Public/home/js/jquery-3.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.14/dist/vue.js"></script>
</head>
<body>
	<div id="login">
		<div class="header">
			<h1>
	            <a href="javascript:void(0)">取消</a>
			    登录豆瓣
			</h1>
		</div>
		<form action='<?php echo U('home/user/dologin');?>' method='post'>
		<div class="box-form">
		
			<input type="text" name="phone" placeholder="邮箱 / 手机号 / 用户名" v-model="valuemore">
			<input type="text" name="password" v-model="makepassword" placeholder="密码">
			<i :class="isshow ? 'newsee' : 'see'" v-on:click="change"></i>
			<button class="setlogin" v-on:click="setlogin">登录</button>
			<a href="javascript:void(0)">
				使用其他方式登录 & 忘记密码
			</a>
			
			
		</div>
		</form>
		<div class="box-ways">
			<a href="<?php echo U('home/user/reg');?>">注册豆瓣账号</a>
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