<?php
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'=>'mysql',// 数据库类型
		'DB_HOST'=>'127.0.0.1',// 服务器地址
		'DB_NAME'=>'thinkphp',// 数据库名
		'DB_USER'=>'admin',// 用户名
		'DB_PWD'=>'1zdfxdb7',// 密码
		'DB_PORT'=>3306,// 端口
		'DB_PREFIX'=>'think_',// 数据库表前缀
		'DB_CHARSET'=>'utf8',// 数据库字符集
		
		
		'TMPL_EXCEPTION_FILE' => dirname($_SERVER['SCRIPT_FILENAME']).'/Public/exception.tpl',
		'ERROR_MESSAGE'         =>  '404 Not Found',//错误显示信息,非调试模式有效
);