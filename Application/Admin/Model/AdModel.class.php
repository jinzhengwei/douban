<?php
namespace Admin\Model;
use Admin\Model\BaseModel;
class AdModel extends BaseModel{
	public function getAd(){
		$data=$this->select();
		return $data;
	}
	public function addAd($img){

		$dataImg=array('img'=>$img);
		$data=$this->add($dataImg);
		return $data;
	}
	public function deleteInfoById($id){
		$info=$this->where(array('id'=>$id))->delete();
		return $info;
	}
	public function updateAd($id,$img){
		$dataImg=array('img'=>$img);
		$data=$this->where(array('id'=>$id))->save($dataImg);
		return $data;

	}

}