<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends HomeController {
    public function lists(){
    	$info = M('manager') ->select();
    	$rinfo_arr = $this ->getRoleInfo();
    	
    	$this ->assign('rinfo',$rinfo_arr);
    	$this ->assign('info',$info);
        $this->display();
    }

    public function add(){
        if(IS_POST){
            $dealModel = M('manager');
            $dealModel ->create();
            $flag = $dealModel ->add();
            if($flag){
                $this->success('新建成功',U('lists')); 
            }else{
                $this->error('新建失败',U('lists')); 
            }
        }else{
            $rinfo_arr = $this ->getRoleInfo();
            $this ->assign('rinfo',$rinfo_arr);
            $this->display(); 
        }
    }

    public function edit($mg_id)
    {
    	if (IS_POST) {
    		$data = I();
    		$data['mg_id'] = $mg_id;
    		$flag = M('manager') ->save($data);
    		if ($flag) {
    			$this->success('修改用户成功',U('lists'));
    		} else {
    			$this->error('修改用户失败',U('lists'));
    		}
    		
    	} else {
    		$info = M('manager') ->find($mg_id);
	    	$rinfo_arr = $this ->getRoleInfo();
	    	$this ->assign('info',$info);
	    	$this ->assign('rinfo',$rinfo_arr);
	    	$this->display();
    	}
    	
    	
    }
    public function delete($mg_id){
        $flag = M('manager')->where('mg_id='.$mg_id)->delete();
        if($flag){
            $this->success('删除成功', U('lists'));
        }else{
            $this->error('删除失败', U('lists'));
        }
    }

    public function getRoleInfo()
    {
    	$rinfo = M('role') ->select();

    	foreach ($rinfo as $k => $v) {
    		$rinfo_arr[$v['role_id']] = $v['role_name'];
    	}

    	return $rinfo_arr;
    }
    
}