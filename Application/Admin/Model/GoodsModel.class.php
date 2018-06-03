<?php
namespace Admin\Model;

use Admin\Model\BaseModel;
class GoodsModel extends BaseModel {
   protected $tableName='market';
   public function changeIdStatus($id,$status){
   	  	$data['status']=$status;
   	  	$info=$this->where(array('id'=>$id))->save($data);
   	  	return $info;
   	 
   }
   public function deleteInfoById($id){
   	    $info=$this->where(array('id'=>$id))->delete();
   	    return $info;
   }
   public function update($id,$data){
   		$info=$this->where(array('id'=>$id))->save($data);
   		return $info;
   }
}