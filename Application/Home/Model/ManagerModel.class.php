<?php
namespace Home\Model;
use Think\Model;

/**
 * 用户模型
 * @author taohong <zsq1989104@126.com>
 */
class ManagerModel extends Model{
	public function CheckNamePwd($name,$pwd)
	{
		//根据$name查询是否有此记录
		$info = $this -> getByMg_name($name);
		if ($info != null) {
			//验证密码
			if ($info['mg_pwd'] != $pwd) {
				return false;
			} else {
				return $info;
			}
		} else {
			return false;
		}
	}
}