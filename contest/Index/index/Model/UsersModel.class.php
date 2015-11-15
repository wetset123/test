<?php
namespace index\Model;
use Think\Model;
class UsersModel extends Model {

	
// 定义自动验证
	protected $_validate = array(
		array('username','require','用户名必须！'), // 用户名必须
		array('username','4,30','用户名长度不正确',0,'length'), // 验证密码是否在指定长度范围
		array('username','/^[a-zA-Z][a-zA-Z0-9]*([a-zA-Z0-9]\z)/','用户名格式错误！'), // 用户名必须
		array('username','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
		array('email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
		array('pass','6,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
		array('repass','pass','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
	);
	
// 定义自动完成
	protected $_auto = array (
		array('pass','sha1',3,'function') , // 对password字段在新增和编辑的时候使sha1函数处理
		array('re_time','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
	);
}