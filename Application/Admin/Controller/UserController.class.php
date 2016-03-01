<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
public function all(){
	$userModel = M('User');
	$count = $userModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$userList = $userModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('userList', $userList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$userModel = M('User');
		$userModel ->create();
		$flag = $userModel ->add();
		if($flag){
			$this->success('新建成功',U('User/all')); 
		}else{
			$this->error('新建失败',U('User/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$userModel = M('User');
	if(IS_POST){
		$userModel ->create();
		$flag = $userModel ->save();
		if($flag){
			$this->success('编辑成功',U('User/all')); 
		}else{
			$this->error('编辑失败',U('User/all')); 
		}
	}else{
		$id = I('id'); 
		$user = $userModel->find($id);
		$this->assign('user', $user);
		$this->display();
	}
}

public function delete(){
	$userModel = M('user');
	$id = I('id'); 
	$flag = $userModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('User/all'));
	}else{
		$this->error('删除失败', U('User/all'));
	}
}

}