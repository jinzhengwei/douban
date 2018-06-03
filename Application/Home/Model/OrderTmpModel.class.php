<?php
namespace Home\Model;
use Think\Model;
class OrderTmpModel extends Model{
	public function getInfoById($id){
		$info=$this->where(array('id'=>$id))->find();
		return $info;
	}
}