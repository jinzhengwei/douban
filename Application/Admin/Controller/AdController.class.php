<?php
namespace Admin\Controller;
use Admin\Controller;
class AdController extends CommonController{
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
			$this->success('上传成功',U('admin/ad/lists'));
		}else{
			$this->error('上传失败',U('admin/ad/lists'));
		}
	}
	public function lists(){
		$data=array();
		$where=array();
		$data=D('ad')->getList($where);
		$this->assign('data',$data);
		$this->display();


	}
	public function delete(){
		$id=I('get.id',0);
		$data=D('ad')->deleteInfoById($id);
		if($data){
			$this->success('删除成功',U('admin/ad/lists'));
		}
	}
	public function update(){
		$this->display();
	}
	public function doupdate(){
		$id=I('post.id',0);
		var_dump($id);
		
		$upload = new \Think\Upload();
		$upload->maxSize= 4000000000;
		$upload->exts= array('jpg','gif','png','jpeg');
		$upload->rootPath= './Public/ad/';
		$info=$upload->upload();
		$img=$info['photo']['savepath'].$info['photo']['savename'];
		$ad=D('ad')->updateAd($id,$img);
		if($ad){
			$this->success('修改成功',U('admin/ad/lists'));
		}else{
			$this->error('修改失败',U('admin/ad/lists'));
		}
	}
}