<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller{
	public function orderTmp(){
		  $res = array(
            'error_no' => 0,
            'msg'      => '',
            'data'     => array(),
            );

		$good_id=I('post.good_id','');
		$num=I('post.num','');
		$car=I('post.car','');
		$goodInfo=array();
		if(!empty($car)){
			if(!is_array($car)){
				$car=json_decode($car,true);
			}
			foreach ($car as $key => $value) {
				$carInfo=D('car')->getInfoById($value);
				$tmp=array('good_id'=>$carInfo['good_id'],
						   'num'=>$carInfo['num']);
				$goodInfo[]=$tmp;
			}
		}else{
				$goodInfo[]=array('good_id'=>$good_id,
				  					'num'=>$num,);
		}
		$user_id=$_SESSION['me']['id'];
		$good_info=json_encode($goodInfo);
		$data=array('user_id'=>$user_id,
					'good_info'=>$good_info);
		
		$info=D('orderTmp')->add($data);
		    $res['data']['oid'] = $info;
		    echo json_encode($res);
		    die();
		    
	}
	public function confirmOrder(){
		$id=I('get.oid','');
		$goods=D('orderTmp')->getInfoById($id);
		$goodInfo=json_decode($goods['good_info'],true);
		foreach ($goodInfo as $key => $value) {
			$good=D('market')->getInfoById($value['good_id']);
			$goodInfo[$key]=array_merge($goodInfo[$key],$good);
		}

		$user_id=$_SESSION['me']['id'];
		$address=D('address')->getInfoById($user_id);
		
		$this->assign('address',$address);
		$this->assign('goodInfo',$goodInfo);
		$this->display();
	}
}