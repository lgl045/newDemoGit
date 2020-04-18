<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

  function index(){
      $this->display();
  }
  
  function tiaok(){
  	$this->display();
  }
  
    
  public function rwmzc(){
     $res=M("user")->where("id=".$_GET['fid'])->find();
     $this->assign("phone",$res);

       $this->display();

  }
  
   public function yzm(){
    $stat=SendCode($_POST['phone']);
      if($stat!=0){
           $this->ajaxReturn(404);
      }else{
           $this->ajaxReturn(0);
      }
      

  }
  public function zcxx(){

    if($_POST['yzm']  != $_COOKIE["code"]){
      
        $this->ajaxReturn(505);
    }
    if(M("user")->where("phone=".$_POST['phone'])->find()){
           $this->ajaxReturn(100);
    }
      $yrd = M("user")->where("phone=".$_POST['fid'])->find();
      $data['id']=nums();
      $data['phone']=$_POST['phone'];
      $data['username']=$_POST['username'];
      $data['password']=md5($_POST['password']);
   	  $data['fid']=$yrd['id'];
      $data['pic']="/img/mr.jpg";
    	$data['addtime'] = date('Y-m-d H:i:s');
      if($result=M('user')->add($data)){
         $this->ajaxReturn(200);
      }else{
         $this->ajaxReturn(404);
      }
  }
  
}
