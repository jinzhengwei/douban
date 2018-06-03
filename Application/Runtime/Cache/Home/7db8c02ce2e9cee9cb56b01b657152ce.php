<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>购物车</title>
	<link rel="stylesheet" href="/Public/home/css/people.css">
	<link rel="stylesheet" href="/Public/home/css/cars.css">
	<link rel="stylesheet" href="/Public/home/css/iconfont.css">
	<script src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.14/dist/vue.js"></script>
</head>
<body>
	<div class="people-header clearfix">
		<h1>豆瓣市集</h1>
		<div class="clearfix car">
			<a href="javascript:void(0)">
				<i class="iconfont">&#xe659;</i>
			</a>
			<a href="javascript:void(0)">
				<i class="iconfont">&#xe6d3;</i>
			</a>
		</div>
	</div>
	<div id="box">
		<div class="all-select" style="padding:0.12rem 0.15rem;border-bottom: 1px solid #e4e4e4">
			<label class="labelId" for="regular">
			    <checkbox id="regular"/>
			</label>
			豆瓣市集
		</div>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="cars-buy clearfix">
		
			<div class="cars-list">
				<label class="labelId" for="regular" style="margin: 0 auto; vertical-align: middle; " ral="<?php echo ($v["id"]); ?>">
				    <checkbox id="regular"/>
				</label>
			</div>
			<div class="car-list">
			
				<img src="/Public/Upload/<?php echo ($v["good_img"]); ?>" alt="">
				<div class="cars-content">
					<p><?php echo ($v["good_name"]); ?> <a href="<?php echo U('home/car/delete',array('id'=>$v['id']));?>" class="delete">删除</a></p>
					<div class="intro-jinumber">
						<a href="<?php echo U('home/car/cutnum',array('id'=>$v['id'],'num'=>$v['num']));?>" target="_self"><input class="min" name="" type="button" value="-" / style="border: none; background-color: #f7f7f7;"> </a>
						<input class="text_box" name="num" type="text" value="<?php echo ($v["num"]); ?>" style="width:30px;text-align: center;border:none"/> 
						<a href="<?php echo U('home/car/addnum',array('id'=>$v['id'],'num'=>$v['num']));?>" target="_self"><input class="add" name="" type="button" value="+" / style="border: none; background-color: #f7f7f7;"> </a>
					</div>
					<span><?php echo ($v["good_price"]); ?></span>
				</div>
					
			</div>
			
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
		<div class="box-foot">
			<div class="cars-footer">
				<div class="all-select" style="font-size:0.16rem">
					<label class="labelId" for="regular" style="margin: 0 0.1rem 0 0.15rem; vertical-align:middle;">
					    <checkbox id="regular"/>
					</label>
					全选
				</div>
				<span class="select-show">
					<b>￥99.0</b>
					<p>（不含运费）</p>
				</span>
				<a href="javascript:void(0)" class="car-true"> 请选择</a>
			</div>
		</div>
		
	</div>
	<script src="/Public/home/js/cars.js"></script>
	      <script type="text/javascript">
	      	$(function(){
	      		$('.car-true').click(function(){
					var carId=[];
	      			$('.label-select').each(function(){
	      				var id=$(this).attr('ral')
	      				carId.push(id);
	      			});
	      			$.ajax({
	      				url:"<?php echo U('home/order/orderTmp');?>",
	      				type:"post",
	      				dataType:"json",
	      				data:{car:carId},
	      				success:function(res){
	      					console.log(res);
	      					if(res.error_no==0){
	      						window.location.href="/index.php/home/order/confirmOrder?oid="+res.data.oid;
	      					}else{
	      						alert(res.msg);
	      					}
	      				}
	      			});
	      			
	      		});
	      	})


	      </script>
</body>
</html>