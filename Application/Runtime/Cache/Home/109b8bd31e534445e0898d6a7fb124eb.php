<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>详情</title>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<div>
<form action="">
     <img src="/Public/Upload/<?php echo ($info["img"]); ?>" height="300px" width="300px" >
     <p class='name'><?php echo ($info["name"]); ?></p>
      <p class='content'><?php echo ($info["content"]); ?></p>
      <b class='price'><?php echo ($info["price"]); ?></b>
   <!--    <input type='hidden' name="good_name" value='<?php echo ($info["name"]); ?>'>
      <input type="hidden" name="good_price" value='<?php echo ($info["price"]); ?>'>
       <input type="hidden" name="good_img" value='<?php echo ($info["img"]); ?>'> -->
       
       <input type="hidden" class="good_id" value="<?php echo ($info["id"]); ?>"> 
      <input type="text" class="num">
      <input type="button" value="加入购物车" class="car">
      <input type="button" value="立即购买" class="order">
      </form>
      

</div>
<script type="text/javascript">
  $(function(){
        $('.car').click(function(){
            var good_id = $('.good_id').val();
            var num = $('.num').val();
            $.ajax({
                url     : "<?php echo U('home/car/add');?>",
                type    : "post",
                dataType : "json",
                data    : {good_id:good_id,num:num},
                success : function(res) {
                  if(res.error_no == 0){
                    window.location.href="<?php echo U('home/car/lists');?>";

                  }
                    console.log(res);
                  }
                
            });
            return false;
        });
        $('.order').click(function(){
            var good_id = $('.good_id').val();
            var num = $('.num').val();
            $.ajax({
                url     : "<?php echo U('home/order/orderTmp');?>",
                type    : "post",
                dataType : "json",
                data    : {good_id:good_id,num:num},
                success : function(res) {
                    if (res.error_no != 0) {
                        alert(res.msg)
                    } else {
                        // $('.ppp').val(res.data.oid);
                       window.location.href="/index.php/home/order/confirmOrder?oid="+res.data.oid;
                    }
                    
                }
            });
            return false;
        });
    })
</script>
</body>
</html>