<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/home/css/douban.css">
	<link rel="stylesheet" href="/Public/home/css/iconfont.css">
	<link rel="stylesheet" href="/Public/home/css/swiper.min.css">
	<script src="/Public/home/js/swiper.min.js"></script>
	 <script src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<title>首页</title>
</head>
<body>
	<div class="box-swiper" id="box-swiper">
		<div class="swiper-container">
			<div class="swiper-wrapper clearfix">
			<?php if(is_array($ad)): foreach($ad as $key=>$v): ?><a href="javascript:void(0)" class="swiper-slide">
					<img src="/Public/ad/<?php echo ($v["img"]); ?>">
				</a><?php endforeach; endif; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="box-user clearfix">
		<a href="javascript:void(0)"><i class="iconfont">&#xe61a;</i>购物车</a>
		<?php if(empty($_SESSION['me']) ): ?><a href="<?php echo U('home/user/login');?>"><i class="iconfont">&#xe60c;</i>登录</a>
		<?php else: ?> 
		<a href=''><i class="iconfont">&#xe60c;</i>我的中心</a>  
		<a href="<?php echo U('home/user/logout');?>"><i class="iconfont">&#xe60c;</i>退出</a><?php endif; ?>

		
	</div>
	<div class="box-list">
		<div class="list-header">
			新品首发
		</div>
		<div class="list-cntent clearfix">
			<div>
				
					
					<div class="content-text">

				<?php if(is_array($lists)): foreach($lists as $key=>$v): ?><a href="<?php echo U('home/market/info',array('id'=>$v['id']));?>"><img src="/Public/Upload/<?php echo ($v["img"]); ?>" height="200px" width="300px"></a>

		    	<h3><?php echo ($v["name"]); ?></h3>
		        <p><?php echo ($v["content"]); ?></p>
		        <b><?php echo ($v["price"]); ?></b>
		        <span>新品</span>
		        </br><?php endforeach; endif; ?>	
						
					</div>
				</a>
			</div>

		</div>
	</div>
	<div class="box-list">
		<div class="list-header">
			诗集小组
		</div>
		<div class="box-mess clearfix">
			<a href="javascript:void(0)" class="clearfix">
				<div class="mess-i">
				    <i class="iconfont">&#xe63d;</i>
                    <span>11</span>
				</div>
				<div class="mess-text">
					hahahaha hahaaaa ahhhhhhhhhh哈哈哈哈啊哈哈哈哈哈哈哈哈或或或或或或或或或或还是瘦我想看充电宝西安事变卡车下不行啊看出那是开车
				</div>
				<div class="mess-img" style="background-image:url(/Public/home/images/p114912775.jpg);">
				</div>
			</a>
			<div class="mess-ad clearfix">
				<a href="javascript:void(0)">
					<div class="ad-name">
						<img src="/Public/home/images/u119347429-13.jpg" alt="">
						豆瓣诗集
					</div>
					<div class="ad-time">20:22</div>
				</a>
			</div>
		</div>	
		<div class="box-mess clearfix">
			<a href="javascript:void(0)" class="clearfix">
				<div class="mess-i">
				    <i class="iconfont">&#xe63d;</i>
                    <span>11</span>
				</div>
				<div class="mess-text">
					hahahaha hahaaaa ahhhh
				</div>
				<div class="mess-img" style="background-image:url(/Public/home/images/p114912775.jpg);">
				</div>
			</a>
			<div class="mess-ad clearfix">
				<a href="javascript:void(0)">
					<div class="ad-name">
						<img src="/Public/home/images/u119347429-13.jpg" alt="">
						豆瓣诗集
					</div>
					<div class="ad-time">20:22</div>
				</a>
			</div>
		</div>
		<div class="a-see">
			<a href="javascript:void(0)" >查看更多评论 ></a>
	    </div>
		</div>
    <div class="box-list">
		<div class="list-header">
			热门活动
		</div>
		<div class="list-ctent clearfix" style="border-top:0;">
		    <a href="javascript:void(0)">
		     
		    </a>

		</div>
		<div class="list-ctent clearfix">
		    <a href="javascript:void(0)">
		        <img src="/Public/home/images/file-1524481845-0.jpg" alt="">
		    	<h3>#男生包里面有什么哈哈哈哈#</h3>
		        <p>akjxnsck ashb cjsabc asbcxajbx 啊啊哈是你测试也不错的本手册</p>
		    </a>
		</div>
		<div class="list-ctent clearfix">
		    <a href="javascript:void(0)">
		        <img src="/Public/home/images/file-1524481845-0.jpg" alt="">
		    	<h3>#男生包里面有什么哈哈哈哈#</h3>
		        <p>akjxnsck ashb cjsabc asbcxajbx 啊啊哈是你测试也不错的本手册</p>
		    </a>
		</div>
		<div class="list-ctent clearfix">
		    <a href="javascript:void(0)">
		        <img src="/Public/home/images/file-1524481845-0.jpg" alt="">
		    	<h3>#男生包里面有什么哈哈哈哈#</h3>
		        <p>akjxnsck ashb cjsabc asbcxajbx 啊啊哈是你测试也不错的本手册</p>
		    </a>
		</div>
	</div>
	<div class="box-footer box-list box-user">
		<a href="javascript:void(0)">
			<i class="iconfont">&#xe631;</i>购物说明
		</a>
		<a href="javascript:void(0)">
			<i class="iconfont">&#xe649;</i>意见反馈
		</a>
		<a href="javascript:void(0)">
			<i class="iconfont">&#xe8b2;</i>商务合作
		</a>
	</div>
    <script src="/Public/home/js/douban.js"></script>
</body>
</html>