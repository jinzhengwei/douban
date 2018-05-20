<?php
namespace Home\Model;
use Think\Model;
class AdModel extends Model{
	public function getAd(){
		$data=$this->select();
		return $data;
	}
	public function addAd($img){

		$dataImg=array('img'=>$img);
		$data=$this->add($dataImg);
		return $data;
	}
}