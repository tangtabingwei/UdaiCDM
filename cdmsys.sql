-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 08 日 17:35
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cdmsys`
--

-- --------------------------------------------------------

--
-- 表的结构 `cdm_auth`
--

CREATE TABLE IF NOT EXISTS `cdm_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别',
  `auth_icon` varchar(20) NOT NULL COMMENT '图标',
  `auth_order` tinyint(4) NOT NULL COMMENT '排序',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `cdm_auth`
--

INSERT INTO `cdm_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`, `auth_icon`, `auth_order`) VALUES
(1, '客户管理', 0, '', '', '1', 0, 'user', 1),
(2, '贷款受理', 0, '', '', '2', 0, 'sign-in', 2),
(3, '贷款发放', 0, '', '', '3', 0, 'sign-out', 3),
(4, '客户信息', 1, 'CustomerInfo', 'lists', '1-4', 1, '', 0),
(5, '贷款信息', 2, 'Accept', 'lists', '2-5', 1, '', 0),
(6, '用户管理', 0, '', '', '6', 0, 'user-md', 6),
(7, '用户列表', 6, 'User', 'lists', '6-7', 1, '', 0),
(8, '角色列表', 6, 'Role', 'lists', '6-8', 1, '', 0),
(9, '权限列表', 6, 'Auth', 'lists', '6-9', 1, '', 0),
(10, '添加权限', 9, 'Auth', 'add', '6-9-10', 2, '', 0),
(14, '贷款审批', 2, 'Accept', 'approve', '2-14', 1, '', 0),
(15, '放款受理', 3, 'Grant', 'lists', '3-15', 1, '', 0),
(16, '贷后管理', 0, '', '', '16', 0, 'wrench', 4),
(17, '贷款跟踪', 16, 'Manage', 'lists', '16-17', 1, '', 0),
(18, '执行复合', 16, 'Manage', 'composite', '16-18', 1, '', 0),
(19, '统计模块', 0, '', '', '19', 0, 'bar-chart-o', 5),
(20, '借款人统计', 19, 'Count', 'lists', '19-20', 1, '', 0),
(21, '添加', 4, 'CustomerInfo', 'add', '1-4-21', 2, '', 0),
(22, '修改', 4, 'CustomerInfo', 'edit', '1-4-22', 2, '', 0),
(23, '删除', 4, 'CustomerInfo', 'delete', '1-4-23', 2, '', 0),
(24, '添加', 7, 'User', 'add', '6-7-24', 2, '', 0),
(25, '修改', 7, 'User', 'edit', '6-7-25', 2, '', 0),
(26, '删除', 7, 'User', 'delete', '6-7-26', 2, '', 0),
(27, '添加', 8, 'Role', 'add', '6-8-27', 2, '', 0),
(28, '修改', 28, 'Role', 'distribute', '6-8-28', 2, '', 0),
(29, '删除', 8, 'Role', 'delete', '6-8-29', 2, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cdm_customer_bank`
--

CREATE TABLE IF NOT EXISTS `cdm_customer_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL COMMENT '客户ID（标识ID）',
  `bank_name` varchar(20) NOT NULL COMMENT '银行名称',
  `bankcard` varchar(30) NOT NULL COMMENT '卡号',
  `real_name` varchar(20) NOT NULL COMMENT '姓名',
  `bankzone` varchar(255) NOT NULL COMMENT '开户网点',
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cdm_customer_info`
--

CREATE TABLE IF NOT EXISTS `cdm_customer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '客户id',
  `real_name` char(16) NOT NULL COMMENT '真实姓名',
  `idno` varchar(20) NOT NULL COMMENT '身份证号',
  `mobile` varchar(20) NOT NULL COMMENT '客户手机号',
  `mobile2` varchar(20) NOT NULL COMMENT '备用号',
  `email` varchar(50) NOT NULL COMMENT '会员邮件',
  `is_delete` tinyint(1) NOT NULL COMMENT '删除',
  `n_province_id` int(11) NOT NULL COMMENT '户籍-省',
  `n_city_id` int(11) NOT NULL COMMENT '户籍-市',
  `province_id` int(11) NOT NULL COMMENT '户口-省',
  `city_id` int(11) NOT NULL COMMENT '户口-市',
  `sex` tinyint(1) NOT NULL DEFAULT '-1' COMMENT '性别 0女 1 男',
  `byear` int(4) NOT NULL COMMENT '出生年',
  `bmonth` int(2) NOT NULL COMMENT '出生月',
  `bday` int(2) NOT NULL COMMENT '出生日',
  `address` varchar(150) NOT NULL COMMENT '住址',
  `content` text COMMENT '备注内容',
  `customer_type` tinyint(4) NOT NULL COMMENT '用户类型 0个人客户 1 企业客户',
  `manager_id` int(10) NOT NULL COMMENT '客户经理',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `avatar` varchar(50) NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `cdm_customer_info`
--

INSERT INTO `cdm_customer_info` (`id`, `real_name`, `idno`, `mobile`, `mobile2`, `email`, `is_delete`, `n_province_id`, `n_city_id`, `province_id`, `city_id`, `sex`, `byear`, `bmonth`, `bday`, `address`, `content`, `customer_type`, `manager_id`, `create_time`, `update_time`, `avatar`) VALUES
(3, 'dsd', 'fsdfsd', 'sdsds', 'sdsd', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, 'sdsd', '', 0, 0, 0, 0, ''),
(4, 'sds', '', '', '', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '', '', 0, 0, 0, 0, ''),
(5, 'dsdsd', '', '', '', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '', '', 0, 0, 0, 0, ''),
(6, '用户啊', '320154854', '12345678912', '12345678912', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '收复失地', '', 0, 0, 1456465864, 1456465864, ''),
(7, '用户啊', '3201548542', '12345678912', '12345678912', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '收复失地', '', 0, 0, 1456465945, 1456465945, ''),
(8, '用户啊', '32015485422', '12345678912', '12345678912', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '收复失地', '', 0, 0, 1456466332, 1456466332, ''),
(9, '都是的', 'sdsddsfs', '12345678910', '12345678910', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '是多少', '', 0, 0, 1456469107, 1456469107, ''),
(10, '对方答复', '455424544554', '12345678910', '12345678910', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '是多少', '', 0, 0, 1456469332, 1456469332, ''),
(11, '萨达萨达', '121121212', '12345678910', '12345678910', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '45454', '', 0, 0, 1456469438, 1456469438, ''),
(12, '圣诞', '断水断电', '12345678910', '12345678910', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '收费电视', '', 0, 0, 1456469739, 1456469739, ''),
(13, '是的', '所发生的发生', '12345678910', '12345678910', '', 0, 0, 0, 0, 0, -1, 0, 0, 0, '的风格大方', '', 0, 0, 1456469782, 1456469782, '');

-- --------------------------------------------------------

--
-- 表的结构 `cdm_deal`
--

CREATE TABLE IF NOT EXISTS `cdm_deal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_sn` varchar(50) NOT NULL COMMENT '借款编号',
  `name` text NOT NULL COMMENT '借款名称',
  `sub_name` varchar(255) NOT NULL COMMENT '缩略么',
  `cate_id` int(11) NOT NULL COMMENT '借款分类',
  `c_id` int(11) NOT NULL COMMENT '借款人id（标识ID）',
  `description` text NOT NULL COMMENT '简介',
  `is_effect` tinyint(1) NOT NULL COMMENT ' 有效性控制',
  `is_delete` tinyint(1) NOT NULL COMMENT '删除标识',
  `sort` int(11) NOT NULL COMMENT '排序  大->小',
  `type_id` int(11) NOT NULL COMMENT '借款用途（标识id）',
  `icon` varchar(255) NOT NULL COMMENT '贷款缩略图',
  `borrow_amount` decimal(20,2) NOT NULL COMMENT '借款总额',
  `repay_time` int(11) NOT NULL COMMENT '借款时间',
  `rate` decimal(10,2) NOT NULL COMMENT '年利率',
  `loantype` tinyint(1) NOT NULL COMMENT '还款方式  0:等额本息 1:付息还本 2:到期本息',
  `create_time` int(11) NOT NULL COMMENT '添加时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `repay_money` decimal(20,2) NOT NULL COMMENT '还了多少！',
  `repay_start_time` int(11) NOT NULL COMMENT '开始还款日',
  `last_repay_time` int(11) NOT NULL COMMENT '最后一次还款日',
  `next_repay_time` int(11) NOT NULL COMMENT '下次还款日',
  `deal_status` tinyint(4) NOT NULL COMMENT '0面审中，1贷款受理，2贷款审批，3贷款发放，4还款中,5提前还款,6逾期,7坏账,8已还清',
  `is_check` varchar(255) NOT NULL COMMENT '是否复核step逗号隔开',
  `enddate` int(11) NOT NULL COMMENT '筹标期限',
  `services_fee` varchar(20) NOT NULL COMMENT '服务费率提成',
  `publish_wait` tinyint(1) NOT NULL COMMENT '是否发布 1：待发布 0已发布, 2初审通过，3复审失败',
  `send_three_msg_time` int(11) NOT NULL COMMENT '发送三天内需还款的通知时间',
  `is_send_contract` tinyint(1) NOT NULL COMMENT '是否已经发送电子协议书',
  `repay_time_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '借款期限类型 0:按天还款  1:按月还款',
  `risk_rank` tinyint(1) NOT NULL DEFAULT '0' COMMENT '风险等级',
  `risk_security` text NOT NULL COMMENT '风险保障',
  `manage_fee` varchar(30) NOT NULL COMMENT '借款者管理费',
  `manage_impose_fee_day1` varchar(30) NOT NULL COMMENT '普通逾期管理费',
  `manage_impose_fee_day2` varchar(30) NOT NULL COMMENT '严重逾期管理费',
  `impose_fee_day1` varchar(30) NOT NULL COMMENT '普通逾期费率',
  `impose_fee_day2` varchar(30) NOT NULL COMMENT '严重逾期费率',
  `delete_msg` text NOT NULL COMMENT '审核失败提示',
  `user_bid_rebate` varchar(30) NOT NULL COMMENT '投资返利%',
  `guarantor_pro_fit_amt` decimal(20,2) DEFAULT '0.00' COMMENT '担保收益',
  `guarantor_real_fit_amt` decimal(20,2) DEFAULT '0.00' COMMENT '实际担保收益，转帐后更新<=guarantor_pro_fit_amt',
  `view_info` text NOT NULL COMMENT '图片资料路径',
  `repay_start_date` date NOT NULL COMMENT '满标放款,支出奖励时间,日期格式,方便统计',
  `bad_date` date NOT NULL COMMENT '流标时间,日期格式,方便统计',
  `contract_id` int(11) NOT NULL COMMENT '借款合同模板',
  `tcontract_id` int(11) NOT NULL COMMENT '转让合同模板',
  `is_hidden` tinyint(1) DEFAULT '0' COMMENT '是否在投资列表隐藏 0：不隐藏，1：隐藏',
  `attachment` text NOT NULL COMMENT '合同附件',
  `tattachment` text NOT NULL COMMENT '转让合同附件',
  `is_index_show` tinyint(1) DEFAULT '0' COMMENT '是否首页显示',
  `loans_pic` varchar(255) DEFAULT NULL COMMENT '白条满标放款凭证',
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`),
  KEY `sort` (`sort`),
  KEY `create_time` (`create_time`),
  KEY `update_time` (`update_time`),
  KEY `c_id` (`c_id`) USING BTREE,
  KEY `idx_1` (`c_id`,`publish_wait`),
  KEY `idx_0` (`deal_status`,`c_id`,`publish_wait`),
  KEY `idx_d_002` (`repay_start_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cdm_deal_load_repay`
--

CREATE TABLE IF NOT EXISTS `cdm_deal_load_repay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deal_id` int(11) NOT NULL COMMENT '借款（标识ID）',
  `user_id` int(11) NOT NULL COMMENT '投标人（标识ID）',
  `self_money` decimal(20,2) NOT NULL COMMENT '本金',
  `repay_money` decimal(20,2) NOT NULL COMMENT '还款金额',
  `manage_money` decimal(20,2) NOT NULL COMMENT '管理费',
  `impose_money` decimal(20,2) NOT NULL COMMENT '罚息',
  `repay_time` int(11) NOT NULL COMMENT '预计回款时间',
  `repay_date` date NOT NULL COMMENT '预计回款时间,方便统计',
  `true_repay_time` int(11) NOT NULL COMMENT '实际回款时间',
  `true_repay_date` date NOT NULL COMMENT '实际回款时间,方便统计使用',
  `true_repay_money` decimal(20,2) NOT NULL COMMENT '真实还款本息',
  `true_self_money` decimal(20,2) NOT NULL COMMENT '真实还款本金',
  `interest_money` decimal(20,2) NOT NULL COMMENT '利息   repay_money - self_money',
  `true_interest_money` decimal(20,2) NOT NULL COMMENT '实际利息',
  `true_manage_money` decimal(20,2) NOT NULL COMMENT '实际管理费',
  `true_repay_manage_money` decimal(20,2) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1准时，2提前，3逾期,4坏账,5续约,6已还清',
  `is_site_repay` tinyint(1) NOT NULL COMMENT '0自付，1网站垫付 2担保机构垫付',
  `l_key` int(11) NOT NULL DEFAULT '0' COMMENT '还的是第几期',
  `u_key` int(11) NOT NULL DEFAULT '0' COMMENT '还的是第几个投标人',
  `is_check` varchar(255) NOT NULL COMMENT '是否复核step逗号隔开',
  `repay_id` int(11) NOT NULL COMMENT '还款计划ID',
  `load_id` int(11) NOT NULL COMMENT '投标记录ID',
  `has_repay` tinyint(11) NOT NULL DEFAULT '0' COMMENT '0未收到还款，1已收到还款',
  `t_user_id` int(11) NOT NULL COMMENT '承接着会员ID',
  `repay_manage_money` decimal(20,2) NOT NULL COMMENT '从借款者均摊下来的管理费',
  `repay_manage_impose_money` decimal(20,2) NOT NULL COMMENT '借款者均摊下来的逾期管理费',
  `loantype` int(11) NOT NULL COMMENT '还款方式',
  `manage_interest_money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '预计能收到：利息管理费,是在满标放款时生成',
  `true_manage_interest_money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '实际收到：利息管理费,是在还款时生成',
  `manage_interest_money_rebate` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '预计返佣金额(返给授权机构)',
  `true_manage_interest_money_rebate` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '实际返佣金额(返给授权机构)',
  `t_pMerBillNo` varchar(255) DEFAULT NULL COMMENT 'ips债权转让后新的ips流水号',
  `reward_money` decimal(20,2) NOT NULL COMMENT '预计奖励收益',
  `true_reward_money` decimal(20,2) NOT NULL COMMENT '实际奖励收益',
  PRIMARY KEY (`id`),
  KEY `idx_0` (`deal_id`,`user_id`,`l_key`,`u_key`),
  KEY `idx_1` (`user_id`,`status`),
  KEY `idx_2` (`deal_id`,`user_id`,`repay_time`,`l_key`,`u_key`),
  KEY `idx_dl_001` (`repay_date`),
  KEY `idx_dl_002` (`true_repay_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cdm_manager`
--

CREATE TABLE IF NOT EXISTS `cdm_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_time` int(10) unsigned NOT NULL COMMENT '时间',
  `mg_role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cdm_manager`
--

INSERT INTO `cdm_manager` (`mg_id`, `mg_name`, `mg_pwd`, `mg_time`, `mg_role_id`) VALUES
(1, 'admin', 'admin', 0, 2),
(2, 'user2', '123456', 0, 3),
(3, 'user3', '123456', 0, 4),
(5, 'user4', '123456', 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `cdm_role`
--

CREATE TABLE IF NOT EXISTS `cdm_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids',
  `role_auth_ac` text COMMENT '模块-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cdm_role`
--

INSERT INTO `cdm_role` (`role_id`, `role_name`, `role_auth_ids`, `role_auth_ac`) VALUES
(1, '经理', '1,4,2,5,9,10', 'CustomerInfo-lists,Accept-lists,Auth-lists,Auth-add'),
(2, '主管', '1,4,2,5,14,3,15,6,7', 'CustomerInfo-lists,Accept-lists,User-lists,Accept-approve,Grant-lists'),
(3, '客户经理', '1,4,21,22,23,2,5', 'CustomerInfo-lists,Accept-lists,CustomerInfo-add,CustomerInfo-edit,CustomerInfo-delete'),
(4, '审核员', '2,14', 'Accept-approve'),
(5, '财务', '3,15', 'Grant-lists');

-- --------------------------------------------------------

--
-- 表的结构 `cdm_test`
--

CREATE TABLE IF NOT EXISTS `cdm_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `cdm_test`
--

INSERT INTO `cdm_test` (`id`, `path`) VALUES
(1, 'upload/2016-02-29/56d40b667996e.png'),
(2, 'upload/2016-02-29/56d40c0ac6d5c.txt'),
(3, 'upload/2016-02-29/56d40c139c3bd.txt'),
(4, 'upload/2016-02-29/56d40cd35a8d3.png'),
(5, 'upload/2016-02-29/56d40cfea177f.png'),
(6, '__PUBLIC__upload/2016-02-29/56d40d5cf0c34.png'),
(7, '__PUBLIC__upload/2016-02-29/56d40d749d5a5.png'),
(8, 'upload/2016-02-29/56d40da6c51db.png'),
(9, 'upload/2016-02-29/56d40dc1d84af.png'),
(10, 'upload/2016-02-29/56d41146d819c.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
