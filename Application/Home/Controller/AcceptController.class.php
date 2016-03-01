<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class AcceptController extends HomeController {
public function lists(){
	$dealModel = M('Deal');
	$count = $dealModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$dealList = $dealModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('dealList', $dealList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$dealModel = M('Deal');
		$dealModel ->create();
		$flag = $dealModel ->add();
		if($flag){
			$this->success('新建成功',U('Deal/all')); 
		}else{
			$this->error('新建失败',U('Deal/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$dealModel = M('Deal');
	if(IS_POST){
		$dealModel ->create();
		$flag = $dealModel ->save();
		if($flag){
			$this->success('编辑成功',U('Deal/all')); 
		}else{
			$this->error('编辑失败',U('Deal/all')); 
		}
	}else{
		$id = I('id'); 
		$deal = $dealModel->find($id);
		$this->assign('deal', $deal);
		$this->display();
	}
}

public function delete(){
	$dealModel = M('deal');
	$id = I('id'); 
	$flag = $dealModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Deal/all'));
	}else{
		$this->error('删除失败', U('Deal/all'));
	}
}
public function approve()
{
	$this->show('approve');
}

}