<?php
namespace Home\Model;
use Think\Model;
class MarketModel extends Model{
	public function addGoods($name,$content,$price,$img){
		$data=array(
			'name'=>$name,
			'content'=>$content,
			'price'=>$price,
			'img'=>$img
		);
		$add=$this->data($data)->add();
		return $add;
	}
	public function getLists(){
		$data=$this->select();
		return $data;
	}
	public function getInfoById($id){
		$data=$this->where(array('id'=>$id))->find();
		return $data;
	}
}