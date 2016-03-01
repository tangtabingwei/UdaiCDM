<?php
namespace Home\Controller;
use Think\Controller;
class AuthController extends HomeController {
    public function lists(){
    	$info = $this->getInfo();
    	$this ->assign('info',$info);
    	$this->display();
    }
    public function add()
    {
    	if (IS_POST) {
    		//利用AuthModel模型里边的一个专门方法实现权限添加
    		$flag = D('auth') -> addAuth(I());
    		if ($flag) {
    			$this->success('分配权限成功',U('lists'));
    		} else {
    			$this->error('分配权限失败',U('lists'));
    		}
    		
    	} else {
    		$info = $this->getInfo();
    		$authinfo = array();
    		foreach ($info as $v) {
    			$authinfo[$v['auth_id']] = $v['auth_name'];
    		}
    		$this ->assign('info',$authinfo);
	    	$this->display();
    	}
    }
    public function edit($auth_id)
    {
        if (IS_POST) {
            $data = I();
            $data['auth_id'] = $auth_id;
            $flag = M('auth') ->save($data);
            if ($flag) {
                $this->success('修改用户成功',U('lists'));
            } else {
                $this->error('修改用户失败',U('lists'));
            }
            
        } else {
            $info = $this->getInfo();
            $authinfo = array();
            foreach ($info as $v) {
                $authinfo[$v['auth_id']] = $v['auth_name'];
            }
            $this ->assign('info',$authinfo);
            $ainfo = M('auth') ->find($auth_id);
            $this ->assign('ainfo',$ainfo);
            var_dump($ainfo);
            $this->display();
        }
        
        
    }
    public function delete($auth_id){
		$flag = M('auth')->where('auth_id='.$auth_id)->delete();
		if($flag){
			$this->success('删除成功', U('lists'));
		}else{
			$this->error('删除失败', U('lists'));
	}
}
    function getInfo()
    {
    	$info = M('Auth') ->order('auth_path asc') ->select();
        foreach ($info as $k => $v) {
        	$info[$k]['auth_name'] = str_repeat('->', $v['auth_level']).$info[$k]['auth_name'];
        }
        return $info;
    	
    }

    
}