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
		
		//邮件
		//邮件配置
		'THINK_EMAIL' => array(
				'SMTP_HOST'   => 'smtp.qq.com', //SMTP服务器
				'SMTP_PORT'   => '465', //SMTP服务器端口
				'SMTP_USER'   => '434417801@qq.com', //SMTP服务器用户名
				'SMTP_PASS'   => '1zdfxdb7', //SMTP服务器密码
				'FROM_EMAIL'  => '434417801@qq.com', //发件人EMAIL
				'FROM_NAME'   => 'WE', //发件人名称
				'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
				'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
		),
);