<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends Controller{
	public function lists(){
		$where=array('user_id'=>$_SESSION['me']['id']);
		$lists=D('address')->getLists($where);
		$this->assign('lists',$lists);
		$this->display();
	}
	public function add(){
		$this->display();

	}
	public function doadd(){
		$user_id=$_SESSION['me']['id'];
		$name=I('post.name','');
		$phone=I('post.phone','');
		$province=I('post.province','');
		$city=I('post.city','');
		$area=I('post.area','');
		$info=I('post.info','');
		$data=array('user_id'=>$user_id,
					'name'=>$name,
					'phone'=>$phone,
					'province'=>$province,
					'city'=>$city,
					'area'=>$area,
					'info'=>$info,
					'createtime' => date('Y-m-d H:i:s'),
            		'updatetime' => date('Y-m-d H:i:s'),
					);
		$info=D('address')->addAddress($data);
		if($info){
			$this->success('保存成功',U('home/address/lists'));
		}
	}
}