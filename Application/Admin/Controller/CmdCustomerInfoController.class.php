<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class CmdCustomerInfoController extends Controller {
public function all(){
	$cmd_customer_infoModel = M('CmdCustomerInfo');
	$count = $cmd_customer_infoModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$cmd_customer_infoList = $cmd_customer_infoModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('cmd_customer_infoList', $cmd_customer_infoList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$cmd_customer_infoModel = M('CmdCustomerInfo');
		$cmd_customer_infoModel ->create();
		$flag = $cmd_customer_infoModel ->add();
		if($flag){
			$this->success('新建成功',U('CmdCustomerInfo/all')); 
		}else{
			$this->error('新建失败',U('CmdCustomerInfo/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$cmd_customer_infoModel = M('CmdCustomerInfo');
	if(IS_POST){
		$cmd_customer_infoModel ->create();
		$flag = $cmd_customer_infoModel ->save();
		if($flag){
			$this->success('编辑成功',U('CmdCustomerInfo/all')); 
		}else{
			$this->error('编辑失败',U('CmdCustomerInfo/all')); 
		}
	}else{
		$id = I('id'); 
		$cmd_customer_info = $cmd_customer_infoModel->find($id);
		$this->assign('cmd_customer_info', $cmd_customer_info);
		$this->display();
	}
}

public function delete(){
	$cmd_customer_infoModel = M('cmd_customer_info');
	$id = I('id'); 
	$flag = $cmd_customer_infoModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('CmdCustomerInfo/all'));
	}else{
		$this->error('删除失败', U('CmdCustomerInfo/all'));
	}
}

}