<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>个人中心</title>
	<link rel="stylesheet" href="/Public/home/user/css/people.css">
	<link rel="stylesheet" href="/Public/home/user/css/iconfont.css">
	<script src="/Public/home/user/js/jquery-3.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.14/dist/vue.js"></script>
</head>
<body>
	<div class="people-header clearfix">
		<h1>豆瓣市集</h1>
		<div>
			<i class="iconfont">&#xe647;</i><sup>0</sup>
			<i class="iconfont">&#xe6d3;</i>
		</div>
	</div>
	<div class="people-img">
		<img src="/Public/home/user/images/user_large.jpg" alt="">
		<span><?php echo ($_SESSION['me']['name']); ?></span>
	</div>
	<div class="people-list">
		<div class="item-list clearfix">
			<a href="javascript:void(0)">
				查看全部订单
				<i class="iconfont">&#xe63b;</i>
			</a>
		</div>
		<div class="about-list">
			<a href="javascript:void(0)">
				<i class="iconfont">&#xf013c;</i>
				<span>待付款</span>
			</a>
			<a href="javascript:void(0)">
				<i class="iconfont">&#xe65b;</i>
				<span>待收货</span>
			</a>
			<a href="javascript:void(0)">
				<i class="iconfont">&#xe690;</i>
				<span>已发货</span>
			</a>
			<a href="javascript:void(0)">
				<i class="iconfont">&#xe647;</i>
				<span>待评价</span>
			</a>
		</div>
		<div class="make-top">
			<div class="item-list clearfix">
				<a href="javascript:void(0)">
					我的优惠券
					<i class="iconfont">&#xe63b;</i>
				</a>
			</div>
			<div class="item-list clearfix">
				<a href="<?php echo U('home/address/lists');?>">
					收货地址管理
					<i class="iconfont">&#xe63b;</i>
				</a>
			</div>
		<div class="make-top">
			<div class="item-list clearfix">
				<a href="javascript:void(0)">
					联系客服
					<i class="iconfont">&#xe63b;</i>
				</a>
			</div>
			<div class="item-list clearfix">
				<a href="javascript:void(0)">
					商户合作
					<i class="iconfont">&#xe63b;</i>
				</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<a href="javascript:void(0)">注销登录</a>
	</div>
</body>
</html>