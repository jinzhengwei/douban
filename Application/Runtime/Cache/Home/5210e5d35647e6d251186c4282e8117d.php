<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action='<?php echo U("home/market/doadd");?>' enctype="multipart/form-data" method='post'>
		<p>名字:<input  type="text" name="name" ></p>
		<p>简介:<input  type="text" name="content" ></p>
		<p>价格:<input  type="text" name="price" ></p>
        <p><input type="file" name="photo" /></p>
		
	
		<input type='submit' value='发布' >
        </form>
</body>
</html>