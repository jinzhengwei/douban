<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	public function login(){
		$this->display();
	}
	public function dologin(){
		$phone=I("post.phone",'');
		$password=I("post.password",'');
		if(empty($phone)||empty($password)){
			$this->error('用户名或密码为空',U('home/market/lists'));
		}
		$data=D('user')->getUserInfoByPhone($phone);
		if($data['password'] == $password){
			$_SESSION['me']=$data;
			$this->success('登录成功',U('home/market/lists'));

		}
		else{
			$this->error('密码错误',U('home/market/lists'));
		}
	}
	public function reg(){
		$this->display();
	}
	public function doreg(){
		$name=I('post.name','');
		$phone=I('post.phone','');
		$password=I('post.password','');
		if(empty($name)||empty($phone)||empty($password)){
			$this->error('不能为空',U('home/market/lists'));
		}
		$data=D('user')->getUserInfoByPhone($phone);
		if($data['phone']){
			$this->error('用户已存在',U('home/user/reg'));
		}
		$add=D('user')->addUser($name,$phone,$password);
		if($add){
			$this->success('注册成功',U('home/user/login'));
		}
	}
	public function logout(){
		unset($_SESSION['me']);
		$this->success('退出成功',U('home/market/lists'));;
	}
	public function userinfo(){
		
		$this->display();
	}

}