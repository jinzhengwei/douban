<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action='<?php echo U("Admin/ad/doupdate");?>' enctype="multipart/form-data" method='post'>
        <p><input type="file" name="photo" /></p>
        <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
		
	
		<input type='submit' value='发布' >
        </form>
</body>
</html>