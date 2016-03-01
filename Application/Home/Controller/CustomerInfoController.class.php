<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class CustomerInfoController extends HomeController {
public function lists(){
	$customer_infoList = M('CustomerInfo')->select();
	$this->assign('customer_infoList', $customer_infoList);
	$this->display();
}

public function add(){
	if (IS_POST) {
			//判断附加是否有上传
			//如果有则实例化Upload，把附件上传大俯卧器指定位置
			//然后把附件的路径名获得到，存入$_POST


			var_dump($_POST);
			if (!empty($_FILES)) {
				echo "string";
				print_r($_FILES);
				//$upload = new \Think\Upload();
				//$z = $upload -> uploadOne($_FILES['avatar']);
			}

    		$data = I();
    		$this->ajaxReturn(D('CustomerInfo')->addCustomerInfo($data));
    	}else{
			
    		$this->display();
    	}
}

public function edit(){
	$customer_infoModel = M('CustomerInfo');
	if(IS_POST){
		$customer_infoModel ->create();
		$flag = $customer_infoModel ->save();
		if($flag){
			$this->success('编辑成功',U('CustomerInfo/all')); 
		}else{
			$this->error('编辑失败',U('CustomerInfo/all')); 
		}
	}else{
		$id = I('id'); 
		$customer_info = $customer_infoModel->find($id);
		$this->assign('customer_info', $customer_info);
		$this->display();
	}
}

public function delete(){
	$customer_infoModel = M('customer_info');
	$id = I('id'); 
	$flag = $customer_infoModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('CustomerInfo/all'));
	}else{
		$this->error('删除失败', U('CustomerInfo/all'));
	}
}

}