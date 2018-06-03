<?php
namespace Home\Model;
use Think\Model;
class AddressModel extends Model{
	public function getLists($where){
		$info=$this->where($where)->select();
		return $info;
	}
	public function addAddress($data){
		$info=$this->add($data);
		return $info;
	}
	public function getInfoById($user_id){
		$info=$this->where(array('user_id'=>$user_id))->find();
		return $info;
	}
}