<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {

	//个人中心页面
    public function index(){
    	$this->display();
    }

    // 地址
    public function addr(){
    	$this->display();
    }

     // 密码
    public function mima(){
    	$this->display();
    }

     // 信息
    public function info(){
    	$this->display();
    }
 

}