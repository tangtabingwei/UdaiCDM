<?php
namespace Admin\Model;
use Think\Model;
Class UserModel extends Model{
	public function getUserlist()
	{
		$page = I('p',1,'int');
		$limit = 5;
		$data = $this ->order('create_time DESC') ->page($page,$limit)->select();
		$count = $this->count();

    	$Page = new \Think\Page($count,$limit);
    	$show = $Page->show();
    	return array('lists' =>$data ,'page' =>$show);
	}
}