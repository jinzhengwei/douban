<?php
namespace Home\Controller;
use Think\Controller;
class MarketController extends Controller{
	public function lists(){
		$list=array();

		$lists=D('market')->getLists();
		$ad=D('ad')->getAd();
		foreach ($lists as $key => $value) {
            $tagInfo='';
            $arrTag=explode(',',$value['tag']);
            foreach ($arrTag as $k => $v) {
                $data=D('tag')->getInfo($v);
                $tagInfo .= $data['tag'].',';

            }
            $tagInfo=rtrim($tagInfo,',');
            $value['tag']=$tagInfo;
            $lists[$key]=$value;
        }

		$this->assign('lists',$lists);
		$this->assign('ad',$ad);
		$this->display();
	}
	public function info(){
		$id=I('get.id','');
		if(!$id){
			$this->error('参数不存在');
		}
		$info=D('market')->getInfoById($id);
		$this->assign('info',$info);
		$this->display();
		

	}
	public function add(){
		$this->display();	
	}
	public function doadd(){
		$name=I('post.name','');
		$content=I('post.content','');
		$price=I('post.price','');
		$upload = new \Think\Upload();
		$upload->maxSize= 4000000000;
		$upload->exts= array('jpg','gif','png','jpeg');
		$upload->rootPath= './Public/Upload/';
		$info=$upload->upload();
		$img=$info['photo']['savepath'].$info['photo']['savename'];
		$add=D('market')->addGoods($name,$content,$price,$img);


	}

}