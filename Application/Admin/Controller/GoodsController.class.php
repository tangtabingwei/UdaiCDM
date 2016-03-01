<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller {
public function all(){
	$goodsModel = M('Goods');
	$count = $goodsModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$goodsList = $goodsModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('goodsList', $goodsList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$goodsModel = M('Goods');
		$goodsModel ->create();
		$flag = $goodsModel ->add();
		if($flag){
			$this->success('新建成功',U('Goods/all')); 
		}else{
			$this->error('新建失败',U('Goods/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$goodsModel = M('Goods');
	if(IS_POST){
		$goodsModel ->create();
		$flag = $goodsModel ->save();
		if($flag){
			$this->success('编辑成功',U('Goods/all')); 
		}else{
			$this->error('编辑失败',U('Goods/all')); 
		}
	}else{
		$id = I('id'); 
		$goods = $goodsModel->find($id);
		$this->assign('goods', $goods);
		$this->display();
	}
}

public function delete(){
	$goodsModel = M('goods');
	$id = I('id'); 
	$flag = $goodsModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Goods/all'));
	}else{
		$this->error('删除失败', U('Goods/all'));
	}
}

}