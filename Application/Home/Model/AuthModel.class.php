<?php
namespace Home\Model;
use Think\Model;

/**
 * 权限模型
 * @author taohong <zsq1989104@126.com>
 */
class AuthModel extends Model{
	public function addAuth($auth)
	{
		//$auth里边有4个信息，还缺auth_path和auth_level
		//1.insert生成一个新纪录
		//2.update把path和level更新进去
		$new_id = $this ->add($auth);//返回新纪录的主键id值

		if ($auth['auth_pid'] == 0) {
			$auth_path = $new_id;
		} else {
			$pinfo = $this ->find($auth['auth_pid']);//父级信息
			$p_path = $pinfo['auth_path'];//父级全路径
			$auth_path = $p_path.'-'.$new_id;
		}

		$auth_level = count(explode('-', $auth_path))-1;
		
		$data = array(
			'auth_id' => $new_id,
			'auth_path' => $auth_path,
			'auth_level' => $auth_level,
		 );
		return $this ->save($data);

	}
}