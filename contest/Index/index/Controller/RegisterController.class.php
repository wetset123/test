<?php
namespace index\Controller;
use Think\Controller;
class RegisterController extends Controller {

    public function index(){
    	$page_title = 'Register';
    	$this -> assign('page_title',$page_title);
    	$this -> display('public/header');
    	$this -> display('Register/index');
    	$this -> display('public/footer');
    }
    
    public function insert() {
    	$Form = D('Users');
    	if($Form->create()) {  
    		$Verify = new \Think\Verify();
			if(!$Verify->check($_POST['captcha']))
			{
				$this->error("验证码错误！");
				return;
			}
			
    		$result = $Form->add();
    		if($result) {
    			$this->success('数据添加成功！');
    		}else{
    			$this->error('数据添加错误！');
    		}
    		
   		}else{
    		$this->error($Form->getError());
    	}
    }
    
    public function verify_c(){
    	      $Verify_config=array(
    			            'fontSize' =>60,
    			            'length' =>4,
    			           // 'useNoise' =>false,
    			         );
    	      $Verify = new \Think\Verify($Verify_config);
    	     // $Verify->fontttf = '5.ttf';	//字体
    	      //$Verify->useZh = true;      //中文
    	      // 开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
    	      $Verify->useImgBg = true;
    	      $Verify->entry();
    	   }
}

