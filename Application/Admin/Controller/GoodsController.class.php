<?php
namespace Admin\Controller;
use Admin\Controller;
class GoodsController extends CommonController {

    public function lists () {

        $where = array();
        if (!empty($_GET['name'])) {
            $where['name'] = array('like',"%{$_GET['name']}%");
        } 
        if (!empty($_GET['status']) && $_GET['status'] != 'all') {
            $where['status'] = $_GET['status'];
        }
        $lists = D('Goods')->getList($where);
        foreach ($lists as $key => $value) {
            $tagInfo='';
            $arrTag=explode(',',$value['tag']);
            foreach ($arrTag as $k => $v) {
                $data=D('tag')->getBasicInfo($v);
                $tagInfo .= $data['tag'].',';

            }
            $tagInfo=rtrim($tagInfo,',');
            $value['tag']=$tagInfo;
            $lists[$key]=$value;
        }

        $this->assign('lists', $lists);
        $this->display();
    }

    public function add() {
        $where=array();
        $data=D('tag')->getlist($where);
        $this->assign('data',$data);
        $this->display();
    }

    public function doadd() {
        $img = uploadFile('img');
        $name = I('post.name', '');
        $content = I('post.content', '');
        $status = I('post.status', '');
        $price = I('post.price', 0);
        $tag=I('post.tags','');
        $tag=implode(',',$tag);
        $data = array(
            'name' => $name,
            'img' => $img,
            'price' => $price,
            'content'=>$content,
            'status'=>$status,
            'tag'=>$tag,
            'createtime' => date('Y-m-d H:i:s'),
            'updatetime' => date('Y-m-d H:i:s'),
            );
        $status = D('Goods')->add($data);
        if ($status) {
            $this->success('发布成功', U('admin/goods/lists'));
        } else {
            $this->error('发布成功', U('admin/goods/lists'));
        }
        
    }
    public function online(){
        $id=I('get.id',0);

        $data=D('Goods')->changeIdStatus($id,1);
        if($data){
            $this->success('上线成功',U('admin/goods/lists'));
        }
    }
    public function offline(){
        $id=I('get.id',0);
        $data=D('Goods')->changeIdStatus($id,2);
        if($data){
            $this->success('下线成功',U('admin/goods/lists'));
        }

    }
    public function delete(){
        $id=I('get.id',0);
        $data=D('Goods')->deleteInfoById($id);
        if($data){
            $this->success('删除成功',U('admin/goods/lists'));
        }
    }
    public function update(){
        $id=I('get.id',0);
        $info=D('Goods')->getBasicInfo($id);
        $where=array();
        $data=D('tag')->getlist($where);
        $this->assign('info',$info);
        $this->assign('data',$data);
        $this->display();
    }
    public function doupdate(){
        
        $id=I('post.id',0);
        $img = uploadFile('img');
        $name = I('post.name', '');
        $content = I('post.content', '');
        $status = I('post.status', '');
        $price = I('post.price', 0);
        $tag=I('post.tags','');
        $tag=implode(',',$tag);
        $data = array(
            'name' => $name,
            'img' => $img,
            'price' => $price,
            'content'=>$content,
            'status'=>$status,
            'tag'=>$tag,
            'createtime' => date('Y-m-d H:i:s'),
            'updatetime' => date('Y-m-d H:i:s'),
            );
        $info=D('Goods')->update($id,$data);
        if($info){
            $this->success('修改成功',U('admin/goods/lists'));
        }
    }
}
//建表 ，修改商品表，添加tag字段
// 在新建商品时读出所有tag
// <input type="checkbox" name="tag[]" value="$vo.id">新品
// 拼成多选框。
// 当点击发布，在doadd处理tag存入到商品表