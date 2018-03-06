<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	// 登录首页
    public function index(){
    	$this->display();
    }

    // 注册页面
    public function reg(){
    	$this->display();
    	
    }
}