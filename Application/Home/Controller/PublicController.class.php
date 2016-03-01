<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function login(){
    	if(IS_POST){
			$rst = D('Manager') -> CheckNamePwd($_POST['username'],$_POST['password']);
			if ($rst === false) {
				$this -> show('用户名或密码错误');
			} else {
				//登录信息持久化$_SESSION
				session('username',$rst['mg_name']);
				session('mg_id',$rst['mg_id']);
				//页面跳转到首页redirect
				$this->redirect('Index/index');
			}
			
		}else{
			$this->display(); 
		}
    }

    public function logout()
    {
    	session(null);
    	$this->redirect('Public/login');
    }
    
}