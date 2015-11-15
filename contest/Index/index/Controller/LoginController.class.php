<?php
namespace index\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		$page_title = 'login';
		$this -> assign('page_title',$page_title);
		$this -> display('public/header');
		$this -> display('Login/index');
		$this -> display('public/footer');
	}
	
	public function loggedin(){
		$user = M('Users');
		$Verify = new \Think\Verify();
		if(!$Verify->check($_POST['captcha']))
		{
			$this->error("验证码错误！");
			return;
		}
		$con['username'] = I('post.username');
		$con['pass'] = sha1((I('post.pass')));
		$data = $user->where($con)->select();	
		if($data!=NULL){
			$this->success("欢迎","/contest/",1);
			session('user.user_name',$con['username']);
		}else {
			$this->error('用户名或密码错误');
		}
	}
	
	public function loggedout(){
		session(NULL);
		$this->success('注销成功',"/contest/",1);
	}
}