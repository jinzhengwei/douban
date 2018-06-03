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

		$where=array('status'=>1);
		$data=$this->where($where)->select();
		return $data;
	}
	public function getInfoById($id){
		$cache_key="goods_info_".$id;
		$result=cache_get($cache_key);
		if(empty($result)){
			$result=$this->where(array('id'=>$id))->find();
			cache_set($cache_key,$result,300);
		}
		return $result;
	}
}