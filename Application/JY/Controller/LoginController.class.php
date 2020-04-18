<?php
namespace JY\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){

    	$this->display();
    }
    public  function checklogin(){
        
    	$username = $_POST['ername'];
    	$password =$_POST['password'];
    	$M = M('adminus');
    	$result = $M->where("username='%s' AND password='%s'",$username,$password)->find();
    	if($result){
    		$_SESSION['ername'] = $result['username'];
            $_SESSION['id'] = $result['id'];

    		// $_SESSION['kouling'] = md5(md5($result['kouling']));
    		$this->success('登陆成功',U('JY/Index/index'),3);
    	}else{
    		$this->error('登陆失败');
    	}
    }
    public  function logout(){
    	session(null);
    	$this->success('欢迎再来',U('JY/Login/login'),3);
    }

}
