<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {
    public function _initialize(){
        //确认用户是否登录
        if(!isset($_SESSION['mg_id'])){
            $this->redirect('public/login');
        }
    	//根据session用户id信息查询角色id信息
    	$map['mg_id'] = $_SESSION['mg_id'];
        $minfo = M('Manager') ->where($map) ->select();
        $role_id = $minfo[0]['mg_role_id'];

        //根据角色信息获取权限ids的信息
        $map2['role_id'] = $role_id;
        $rinfo = M('role') ->where($map2) ->select();
        $auth_ids = $rinfo[0]['role_auth_ids'];

        //根据$auth_ids查询全部拥有的权限信息
        //1.获得顶级权限
        //如果是超级管理员实现全部权限
        if ($_SESSION['mg_id'] != 1) {
        	$map3['auth_id'] = array('in',$auth_ids);
        }
        
        $map3['auth_level'] = 0;
        $p_info = M('auth') ->where($map3) ->order('auth_order asc') ->select();
        //2.获得次顶级权限
        //如果是超级管理员实现全部权限
        if ($_SESSION['mg_id'] != 1) {
        	$map4['auth_id'] = array('in',$auth_ids);
        }
        
        $map4['auth_level'] = 1;
        $s_info = M('auth') ->where($map4) ->select();

        $this ->assign('pauth_info',$p_info);
        $this ->assign('sauth_info',$s_info);

        //当前操作请求
        $now_ac = CONTROLLER_NAME."-".ACTION_NAME;

        //过滤控制器和犯法，避免用户非法请求
        //通过角色获得用户恶意访问的控制器和方法信息
        $auth_ac = M('Manager')->join(' cdm_role ON cdm_manager.mg_role_id = cdm_role.role_id') ->where($map) ->field('role_auth_ac') ->find();
        $auth_ac = $auth_ac['role_auth_ac'];

        //判断$now_ac是否在$auth_ac字符串里边有出现过
        $allow_ac = array('Index-index' );
        if (!in_array($now_ac, $allow_ac) && $_SESSION['mg_id'] !=1 && strpos($auth_ac, $now_ac) === false) {
            $this->error('没有权限访问');
        }
        



    }
    
    public function _empty()
    {
        $this->error('空操作');
    }
}