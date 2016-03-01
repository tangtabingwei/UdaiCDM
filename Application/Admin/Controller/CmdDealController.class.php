<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class CmdDealController extends Controller {
public function all(){
	$cmd_dealModel = M('CmdDeal');
	$count = $cmd_dealModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$cmd_dealList = $cmd_dealModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('cmd_dealList', $cmd_dealList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$cmd_dealModel = M('CmdDeal');
		$cmd_dealModel ->create();
		$flag = $cmd_dealModel ->add();
		if($flag){
			$this->success('新建成功',U('CmdDeal/all')); 
		}else{
			$this->error('新建失败',U('CmdDeal/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$cmd_dealModel = M('CmdDeal');
	if(IS_POST){
		$cmd_dealModel ->create();
		$flag = $cmd_dealModel ->save();
		if($flag){
			$this->success('编辑成功',U('CmdDeal/all')); 
		}else{
			$this->error('编辑失败',U('CmdDeal/all')); 
		}
	}else{
		$id = I('id'); 
		$cmd_deal = $cmd_dealModel->find($id);
		$this->assign('cmd_deal', $cmd_deal);
		$this->display();
	}
}

public function delete(){
	$cmd_dealModel = M('cmd_deal');
	$id = I('id'); 
	$flag = $cmd_dealModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('CmdDeal/all'));
	}else{
		$this->error('删除失败', U('CmdDeal/all'));
	}
}

}