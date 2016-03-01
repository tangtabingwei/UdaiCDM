<?php
namespace Home\Controller;
use Think\Controller;
class RoleController extends HomeController {
    public function lists(){
        $info = M('role') ->select();
    	$this ->assign('info',$info);
    	$this->display();
    }
    public function add(){
        if(IS_POST){
            $roleModel = M('role');
            $roleModel ->create();
            $flag = $roleModel ->add();
            if($flag){
                $this->success('新建成功',U('lists')); 
            }else{
                $this->error('新建失败',U('lists')); 
            }
        }else{
            $this->display(); 
        }
    }
    public function distribute($role_id)
    {
    	if (IS_POST) {
    		//利用RoleModel模型里边的一个专门方法实现权限分配
    		$flag = D('role') -> saveAuth(I('authname'),$role_id);
    		if ($flag) {
    			$this->success('分配权限成功',U('lists'));
    		} else {
    			$this->error('分配权限失败',U('lists'));
    		}
    		
    	} else {
    		//根据$role_id查询对应的角色名称
	    	$rinfo = M('role') -> getByRole_id($role_id);
	    	$this ->assign('role_name',$rinfo['role_name']);

	    	//查询全部的权限讯息并进行分配
	    	$pauth_info = M('auth') ->where('auth_level=0') ->select();
	    	$sauth_info = M('auth') ->where('auth_level=1') ->select();
	    	$tauth_info = M('auth') ->where('auth_level=2') ->select();



	    	$this ->assign('pauth_info',$pauth_info);
	    	$this ->assign('sauth_info',$sauth_info);
	    	$this ->assign('tauth_info',$tauth_info);
	    	$this ->assign('role_auth_ids',$rinfo['role_auth_ids']);


	    	$this->display();
    	}
    	
    	
    }
    public function delete($role_id){
        $flag = M('role')->where('role_id='.$role_id)->delete();
        if($flag){
            $this->success('删除成功', U('lists'));
        }else{
            $this->error('删除失败', U('lists'));
        }
    }

    
}