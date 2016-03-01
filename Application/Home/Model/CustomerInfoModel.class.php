<?php
namespace Home\Model;
use Think\Model;
/**
 * 顾客信息模型
 * @author taohong <zsq19891014@126.com>
 */
Class CustomerInfoModel extends Model{
	//批量处理
	protected $patchValidate = true;
	//自动验证
	protected $_validate = array(
		array('real_name','/^[\x{4e00}-\x{9fa5}]{2,4}$/u','用户名必须是2到4位的汉字'),
		array('idno','','身份证号码已存在',0,'unique',1),
		array('mobile','/^[\d]{11}$/','手机号码格式不正确'),
		array('mobile2','/^[\d]{11}$/','手机号码格式不正确'),
		array('address','/^[\S]+$/','必须填写地址'),
		);
	//自动完成
	protected $_auto = array ( 
         array('create_time','time',1,'function') ,
         array('update_time','time',3,'function') ,
     );

	/**
	 * 添加顾客信息
	 * @param arr $data 顾客信息
	 */
	public function addCustomerInfo($data)
	{
		$info = array();
		if ($newData = !$this->create()){
	    // 对data数据进行验证
	    	var_dump($newData);
			return $this->getError();
		}else{
			$this ->add();

			$info = array('status' => 1,'info'=>'新建成功', 'url'=>U('lists'));
			return $info;
		}
	}
	/**
	 * 用id获取顾客信息
	 * @param  int $id 顾客id
	 * @return arr     顾客信息
	 */
	public function getCustomerInfoById($id)
	{
		$map['id'] = $id;
		return $this ->where($map) ->find();
	}
	/**
	 * 用id改变顾客信息
	 * @param  int $id   顾客id
	 * @param  arr $data 顾客信息
	 * @return bool       是否改变成功
	 */
	public function changeCustomerInfoById($id,$data)
	{
		$data['update_time'] = time();
		
		$map['id'] = $id;
		return $this ->where($map) ->save($data);
	}
}