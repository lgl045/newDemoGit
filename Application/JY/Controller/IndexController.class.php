<?php
namespace JY\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$id=$_SESSION['id'];
        $role_id=M("adminus")->getFieldById($id,'role_id');
        $right_id= M("role_right")->where("role_id='$role_id'")->getField('right_id', true);
        $rightids = implode('\',\'', $right_id);
        $righta=M("right")->where("id in ('$rightids') and parent_id=0")->select();
        $rightb=M("right")->where("id in ('$rightids') and parent_id>0")->select();
        $this->assign("righta",$righta);
        $this->assign("rightb",$rightb);
        if($_SESSION['id']){
        	$this->display();
            }else{
             $this->success('请重新登陆',U('JY/Login/login'),3);
  	     	}
        }
}