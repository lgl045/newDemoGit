<?php
namespace JY\Controller;
use Think\Controller;
  class RermissionsController extends Controller {
                                 //管理员
    //-------------------------------------------------------------------------------------------------//-------------------------------------------------------------------------------------------------

    public function index(){
      

      $res=M("adminus")->select();
      foreach ($res as $key => $value) {
       $res[$key]["rolename"]=M("role")->where("id='{$value['role_id']}'")->getfield("name");
      }
      $this->assign("res",$res);
      $this->display();
      }
    public function adminaddview(){
      $res=M("role")->select();
      $this->assign("res",$res);
      $this->display();
     }
     //添加管理员
    public function adminadd(){
      $data['username']=I("post.username");
      $data['password']=I("post.password");
      $data["role_id"]=I("post.role_id");
      $data["sata"]=1;
     if(M("adminus")->add($data)){
      $this->success('添加成功',U('Rermissions/index'));
     }else{
      $this->success('添加失败',U('Rermissions/index'));
      }
   }
     //管理员修改view
    public function adminxiu(){
      $id=I("get.id");
      $res=M("adminus")->where("id='$id'")->select();
      foreach ($res as $key => $value) {
       $res[$key]["aa"]=M("role")->select();
       
      }
      foreach ($res as $key => $v) {
      }
      // dump($id);exit;
      $this->assign("res",$v);
      $this->display();
    }
    //管理员修改
    public function adminupdate(){
      // dump(I());exit;
      $id=I("post.id");
      $data['username']=I("post.username");
      $data['password']=I("post.password");
      $data['role_id']=I("post.role_id");

        if( M("adminus")->where("id='$id'")->save($data)){
      $this->success('修改成功',U('Rermissions/index'));
    }else{
      $this->success('修改失败',U('Rermissions/index'));
         }
      }
      //删除管理员
    public function admindelete(){
      $id=I("post.id");
      if ($res=M("adminus")->where("id='$id'")->delete()) {
         $this->ajaxReturn(1);
         }else{
          $this->ajaxReturn(1);
         }
      }



                                        //角色
//----------------------------------------------------------------------------------------------------//----------------------------------------------------------------------------------------------------

    //角色
    public function role(){

      $res=M("role")->select();
      $this->assign("res",$res);
      $this->display();

    }
    //角色view
    public function roleadd(){
      $this->display();
    }

    //添加角色入数据库
    public function roleaddm(){
     $data['name']=I("post.name");
     $res=M("role")->add($data);
      if($res){
      $this->success('添加成功',U('Rermissions/role'));
    }else{
      $this->success('添加失败',U('Rermissions/role'));
        }
    }
    //角色修改view
    public function rolexiu(){
      $id=I("get.id");
      $res=M("role")->where("id='$id'")->find();
      $this->assign("res",$res);
      $this->display();
    }
    //角色修改
    public function roleupdate(){
      $id=I("post.ids");
      $data['name']=I("name");
        if( M("role")->where("id='$id'")->save($data)){
      $this->success('修改成功',U('Rermissions/role'));
    }else{
      $this->success('修改失败',U('Rermissions/role'));
         }
      }
      //删除角色
    public function roledelete(){
      $id=I("post.id");
      $res=M("role")->where("id='$id'")->delete();
      if ($res) {
         $this->ajaxReturn(1);
         }else{
         $this->ajaxReturn(1);
         }
      }

      //分配权限
      public function allotment_qx(){
      $id= I("id");
      $res=M("role")->where("id='$id'")->find();
      $n= M("right")->where("parent_id=0")->select();
      foreach ($n as $key => $value) {
        $n[$key]["parent"]= M("right")->where("parent_id='{$value['id']}'")->select();
      }
      $permissions= M("role_right")->where("role_id='$id'")->select();
      $p=array();
      foreach ($permissions as $k => $v) {
        $p[]=$v['right_id'];
      }
      $this->assign("qxid",$p);
      $this->assign("res",$res);
      $this->assign("parent",$n);
      $this->display();
      }
      //添加权限
      public function addpermissions(){
        $role_id=I("post.role_id");
        M("role_right")->where("role_id='$role_id'")->delete();
        $right_id=I("post.right_id");
         foreach ($right_id as $right) {
            $data['role_id']=$role_id;
            $data['right_id'] = $right;
            $res=M("role_right")->add($data);
        }    
        if($res){
          $this->success('分配成功',U('Rermissions/role'));
        }else{
          $this->success('分配失败',U('Rermissions/role'));
       }
    }
  }