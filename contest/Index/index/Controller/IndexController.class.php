<?php
namespace index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$page_title = 'Index';
    	$this->assign('page_title',$page_title);
    	$this -> display('public/header');
    	$this -> display('Index/index');
    	$this -> display('public/footer');
    }
    
}