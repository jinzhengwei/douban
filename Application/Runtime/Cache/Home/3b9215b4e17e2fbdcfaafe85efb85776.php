<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div>
<form action="<?php echo U('home/car/doupdate');?>" method="post" >
 <input type="hidden" name="good_id" value="<?php echo ($info['good_id']); ?>">
                <input type="text"  name="num" value="<?php echo ($info['num']); ?>">数量
                <input type="submit" name="提交">
</form>               
  </div>                
</body>
</html>