<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class CmdCustomerBankController extends Controller {
public function all(){
	$cmd_customer_bankModel = M('CmdCustomerBank');
	$count = $cmd_customer_bankModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$cmd_customer_bankList = $cmd_customer_bankModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('cmd_customer_bankList', $cmd_customer_bankList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$cmd_customer_bankModel = M('CmdCustomerBank');
		$cmd_customer_bankModel ->create();
		$flag = $cmd_customer_bankModel ->add();
		if($flag){
			$this->success('新建成功',U('CmdCustomerBank/all')); 
		}else{
			$this->error('新建失败',U('CmdCustomerBank/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$cmd_customer_bankModel = M('CmdCustomerBank');
	if(IS_POST){
		$cmd_customer_bankModel ->create();
		$flag = $cmd_customer_bankModel ->save();
		if($flag){
			$this->success('编辑成功',U('CmdCustomerBank/all')); 
		}else{
			$this->error('编辑失败',U('CmdCustomerBank/all')); 
		}
	}else{
		$id = I('id'); 
		$cmd_customer_bank = $cmd_customer_bankModel->find($id);
		$this->assign('cmd_customer_bank', $cmd_customer_bank);
		$this->display();
	}
}

public function delete(){
	$cmd_customer_bankModel = M('cmd_customer_bank');
	$id = I('id'); 
	$flag = $cmd_customer_bankModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('CmdCustomerBank/all'));
	}else{
		$this->error('删除失败', U('CmdCustomerBank/all'));
	}
}

}