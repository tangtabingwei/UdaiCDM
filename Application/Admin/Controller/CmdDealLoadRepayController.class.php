<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class CmdDealLoadRepayController extends Controller {
public function all(){
	$cmd_deal_load_repayModel = M('CmdDealLoadRepay');
	$count = $cmd_deal_load_repayModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$cmd_deal_load_repayList = $cmd_deal_load_repayModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('cmd_deal_load_repayList', $cmd_deal_load_repayList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$cmd_deal_load_repayModel = M('CmdDealLoadRepay');
		$cmd_deal_load_repayModel ->create();
		$flag = $cmd_deal_load_repayModel ->add();
		if($flag){
			$this->success('新建成功',U('CmdDealLoadRepay/all')); 
		}else{
			$this->error('新建失败',U('CmdDealLoadRepay/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$cmd_deal_load_repayModel = M('CmdDealLoadRepay');
	if(IS_POST){
		$cmd_deal_load_repayModel ->create();
		$flag = $cmd_deal_load_repayModel ->save();
		if($flag){
			$this->success('编辑成功',U('CmdDealLoadRepay/all')); 
		}else{
			$this->error('编辑失败',U('CmdDealLoadRepay/all')); 
		}
	}else{
		$id = I('id'); 
		$cmd_deal_load_repay = $cmd_deal_load_repayModel->find($id);
		$this->assign('cmd_deal_load_repay', $cmd_deal_load_repay);
		$this->display();
	}
}

public function delete(){
	$cmd_deal_load_repayModel = M('cmd_deal_load_repay');
	$id = I('id'); 
	$flag = $cmd_deal_load_repayModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('CmdDealLoadRepay/all'));
	}else{
		$this->error('删除失败', U('CmdDealLoadRepay/all'));
	}
}

}