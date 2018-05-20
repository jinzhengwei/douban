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

        $this->assign('lists', $lists);
        $this->display();
    }

    public function add() {
        $this->display();
    }

    public function doadd() {
        $image = uploadFile('image');
        $name = I('post.name', '');
        $price = I('post.price', 0);
        $price = $price * 100;

        $data = array(
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'createtime' => date('Y-m-d H:i:s'),
            'updatetime' => date('Y-m-d H:i:s'),
            );
        $status = D('Goods')->add($data);
        if ($status) {
            $this->success('发布成功', 'lists');
        } else {
            $this->error('发布成功', 'lists');
        }
        
    }
}