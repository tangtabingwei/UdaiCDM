<?php
return array(
    'SHOW_PAGE_TRACE' => true,
	   /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'cdmsys',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'cdm_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','Test'),

    'TMPL_PARSE_STRING' =>array(
    	'__STATIC__' =>__ROOT__.'/Public/Static' , 
    	'__JS__' =>__ROOT__.'/Public/Js' , 
    	'__CSS__' =>__ROOT__.'/Public/Css' , 
    	'__IMG__' =>__ROOT__.'/Public/Img' , 
    	),
);