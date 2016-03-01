<?php
namespace Home\Model;
use Think\Model;

/**
 * 角色模型
 * @author taohong <zsq1989104@126.com>
 */
class RoleModel extends Model{
	public function saveAuth($auth,$role_id)
	{
		//把权限id信息由数组变为由逗号分隔的字符串信息
		$auth_ids = implode(',', $auth);

		//根据ids权限id信息查询具体操作方法信息
		$info = M('auth') ->select($auth_ids);
		
		//屏障控制器和操作方法
		foreach ($info as $k => $v) {
			if (!empty($v['auth_c']) && !empty($v['auth_a'])) {
				$auth_ac.=$v['auth_c'].'-'.$v['auth_a'].',';
			}
		}
		$auth_ac = rtrim($auth_ac,',');//删除最右边的逗号

		$data = array(
			'role_id' => $role_id,
			'role_auth_ids' => $auth_ids,
			'role_auth_ac' => $auth_ac,
		 );
		return $this ->save($data);

	}
}