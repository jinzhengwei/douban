<?php
namespace Home\Controller;
use Think\Controller;
class AdController extends Controller{
	public function add(){
		$this->display();
	}
	public function doadd(){
		$upload = new \Think\Upload();
		$upload->maxSize= 4000000000;
		$upload->exts= array('jpg','gif','png','jpeg');
		$upload->rootPath= './Public/ad/';
		$info=$upload->upload();
		$img=$info['photo']['savepath'].$info['photo']['savename'];
		$ad=D('ad')->addAd($img);
		if($ad){
			$this->success('上传成功');
		}else{
			$this->error('上传失败');
		}
	}



}