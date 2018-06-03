<?php
namespace Home\Model;
use Think\Model;
class AdModel extends Model{
	public function getAd(){
		$cache_key="banner_lists";
		$result=cache_get($cache_key);
		if(empty($result)){
			$result=$this->select();
			cache_set($cache_key,$result,300);
		}
		$data=$this->select();
		return $data;
	}
	public function addAd($img){

		$dataImg=array('img'=>$img);
		$data=$this->add($dataImg);
		return $data;
	}
}