<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>地址管理</title>
	<link rel="stylesheet" href="/Public/home/css/people.css">
	<link rel="stylesheet" href="/Public/home/css/address.css">
	<link rel="stylesheet" href="/Public/home/css/iconfont.css">
	<script src="/Public/home/js/jquery-3.2.0.min.js" type="text/javascript"></script>
	<script src="/Public/home/js/distpicker.data.js"></script>
	<script src="/Public/home/js/distpicker.js"></script>
</head>
<body>
	<div class="people-header clearfix">
	    <a href="javascript:void(0)" class="address"  onclick="javascript:history.back(-1);">
	    	<i class="iconfont">&#xe63b;</i>
	    </a>
		<h3>收货地址管理</h3>
		<a href="javascript:void(0)" class="address-home">
			<i class="iconfont">&#xe6d3;</i>
		</a>
	</div>
	<div class="oid-address">
		<p>收货地址</p>
		<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="goods-address">
			<p>
				收货人：
				<span>
				   <?php echo ($_SESSION['me']['name']); ?>
				</span>
			</p>
			<p>
				<?php echo ($v["province"]); ?>/<?php echo ($v["city"]); ?>/<?php echo ($v["area"]); ?>
			</p>
			<p>
				<?php echo ($v["info"]); ?>
			</p>
			<div class="add-address clearfix">
				<a href="javascript:void(0)">修改地址</a>
				<a href="javascript:void(0)">删除</a>
				<a href="javascript:void(0)">默认</a>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</div>
	<form action="<?php echo U('home/address/doadd');?>" method="post">
	<div class="address-add">
		<img src="/Public/home/images/0525204013.jpg" alt="">
		<p>新建地址</p>
	</div>
	<div class="click-box">

		<div class="add-head">
			<span>新建地址</span>
			<a href="javascript:void(0)">取消</a>
		</div>
		
		<div class="add-input">
			<input type="text" placeholder="收货人姓名" name="name">
		</div>
		<div class="add-input">
			<input type="text" placeholder="收货人电话号码" name='phone'>
		</div>
		<div class="add-input clearfix">
			<div class="intro-makecity">
				<form class="form-inline clearfix">
				    <div data-toggle="distpicker" class="new-add">
				        <div class="form-group ">
				          <label class="sr-only" for="province1"></label>
				          <select class="form-control " id="province1" name="province"></select>
				        </div>
				        <div class="form-group">
				          <label class="sr-only" for="city1"></label>
				          <select class="form-control" id="city1" name="city"></select>
				        </div>
				        <div class="form-group">
				          <label class="sr-only" for="district1"></label>
				          <select class="form-control" id="district1" name="area"></select>
				        </div>
				    </div>
				</form>
			</div>
		</div>
		<div class="add-input">
			<input type="text" placeholder="请输入详细地址，例街道号码，楼牌号" name="info">
		</div>
		<div class="add-button">
			<input type="submit" value="保存">
		</div>
		
	</div>
	</form>
	<script src="/Public/home/js/main.js"></script>
</body> 
</html>