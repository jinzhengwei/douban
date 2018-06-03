<?php
namespace Home\Model;
use Think\Model;
class TagModel extends Model{
	public function getInfo($id){
		$data=$this->where(array('id'=>$id))->find();
		return $data;
	}
}