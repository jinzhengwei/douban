<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends Controller{
	public function lists(){
		if(empty($_SESSION['me'])){
			$this->error('用户未登录',U('home/user/login'));
		}
		$where=array('user_id'=>$_SESSION['me']['id']);
		$data=D('car')->getLists($where);
		foreach ($data as $key => $value) {
		if(!empty($value['num'])){
		 	$value['good_price']=$value['good_price'] * $value['num']; 
		 	$data[$key]=$value;
		}

		}

		 
		$this->assign('data',$data);
		$this->display();
	}
	public function add(){
		 $res = array(
            'error_no' => 0,
            'msg'      => '',
            'data'     => array(),
            );
		$user_id=$_SESSION['me']['id'];
		$user_name=$_SESSION['me']['name'];
		
		$good_id=I('post.good_id','');
		$num=I('post.num','');
		if(empty($user_name)||empty($user_id)||empty($good_id)){
			$res = array(
            'error_no' => 1,
            'msg'      => '参数不能为空',
            'data'     => array(),
            );
            echo json_encode($res);
			die();
		}
		$car=D('car')->getInfoByGoodId($good_id,$user_id);
		if(empty($car)){
			$info=D('market')->getInfoById($good_id);
			$data=array('user_id'=>$user_id,
						'user_name'=>$user_name,
						'good_id'=>$good_id,
						'good_name'=>$info['name'],
						'good_price'=>$info['price'],
						'good_img'=>$info['img'],
						'num'=>$num,
					);
			$info=D('car')->addCar($data);
			echo json_encode($res);
		}else{
			$where=array('good_id'=>$good_id,'user_id'=>$user_id);
			$data=array('num'=>$car['num']+$num);
			$info=D('car')->update($where,$data);
			echo json_encode($res);
			die();
		}
	
	}
	public function delete(){
		$id=I('get.id','');
		$user_id=$_SESSION['me']['id'];
		$info=D('car')->deleteById($id,$user_id);
		if($info){
			$this->success('删除成功',U('home/car/lists'));
		}
	}
	// public function update(){
	// 	$id=I('get.id',0);
	// 	$info=D('car')->getInfoById($id);
	// 	$this->assign('info',$info);
	// 	$this->display();
	// }
	// public function doupdate(){
	// 	$good_id=I('post.good_id',0);
	// 	$num=I('post.num',0);
	// 	$datanum=array('num'=>$num);
	// 	$data=D('car')->update($good_id,$datanum);
	// 	if($data){
	// 		$this->success('修改成功',U('home/car/lists'));
	// 	}

	// }
	public function addnum(){
		$id=I('get.id','');
		$num=I('get.num','');
		$info=D('car')->addNum($id,$num);
		if($info){
			$this->success('修改成功',U('home/car/lists'));
		}

	}
	public function cutnum(){
		$id=I('get.id','');
		$num=I('get.num','');
		$info=D('car')->cutNum($id,$num);
		if($info){
			$this->success('修改成功',U('home/car/lists'));
		}
	}
}