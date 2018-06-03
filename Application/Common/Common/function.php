 <?php
function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
function uploadFile($name){
	$upload = new \Think\Upload();
		$upload->maxSize= 4000000000;
		$upload->exts= array('jpg','gif','png','jpeg');
		$upload->rootPath= './Public/Upload/';
		$info=$upload->upload();
		$img=$info[$name]['savepath'].$info[$name]['savename'];
		return $img;
}
function cache_set($key,$value,$expire){
	$redis=new Redis();
	$redis->connect('192.168.199.249',6379);
	$value=serialize($value);
	return $redis->setex($key,$expire,$value);
}
function cache_get($key){
	$redis=new Redis();
	$redis->connect('192.168.199.249',6379);
	$value=$redis->get($key);
	$value=unserialize($value);
	return $value;
}