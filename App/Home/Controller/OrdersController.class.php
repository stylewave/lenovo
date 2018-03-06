<?php
namespace Home\Controller;
use Think\Controller;
class OrdersController extends Controller {

	// 支付页面
    public function index(){
    	$this->display();
    }

    // 付款
    public function money(){
    	$this->display();
    	
    }
}