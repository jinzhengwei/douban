<?php
namespace Home\Model;
use Think\Model;
class CarModel extends Model{
	public function getLists($where){
		$info=$this->where($where)->select();
		return $info;
	}
	public function addCar($data){
		$info=$this->add($data);
		return $info;
	}
	public function deleteById($id,$user_id){
		$info=$this->where(array('id'=>$id,'user_id'=>$user_id))->delete();
		return $info;
	}
	public function update($where,$data){
		$info=$this->where($where)->save($data);
		return $info;

	}
	public function getInfoById($id){
		$where=array('id'=>$id);
		$info=$this->where($where)->find();
		return $info;
	}

	public function getInfoByGoodId($good_id,$user_id){
		$where=array('good_id'=>$good_id,
					'user_id'=>$user_id);
		$info=$this->where($where)->find();
		return $info;
	}
	public function addNum($id,$num){
		$where=array('id'=>$id);
		$num=$num+1;
		$data=array('num'=>$num);
		$info=$this->where($where)->save($data);
		return $info;
	}
	public function cutNum($id,$num){
		$where=array('id'=>$id);
		$num=$num-1;
		$data=array('num'=>$num);
		$info=$this->where($where)->save($data);
		return $info;
	}
}