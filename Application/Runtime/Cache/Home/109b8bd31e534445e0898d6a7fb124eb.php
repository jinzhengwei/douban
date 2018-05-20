<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>详情</title>
</head>
<body>
<div>
     <img src="/Public/Upload/<?php echo ($info["img"]); ?>" height="300px" width="300px" >
     <p class='name'><?php echo ($info["name"]); ?></p>
      <p class='content'><?php echo ($info["content"]); ?></p>
      <b class='price'><?php echo ($info["price"]); ?></b>
      

</div>
</body>
</html>