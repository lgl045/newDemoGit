<?php
namespace Zcity\Controller;
  use Think\Controller;
  class MgtController extends Controller {
    //轮播管理
    public function lunbo(){
     $res=M("lb")->select();
     $this->assign("data",$res);
     $this->display();

    }
    //添加轮播
     public function addlb(){
     $this->display();
    }
    //执行添加轮播
    public function insertlb(){
 		  $data['pic'] =$_POST['pic'];
          $data['stat'] =$_POST['stat'];
         $data['addtime']=date('Y-m-d h:i:s',time());
      
      if(M("lb")->add($data)){
       $this->success('添加成功！',U('Mgt/lunbo'));
      }else{
        $this->success('添加失败！',U('Mgt/lunbo'));
      }
     
    }
    //修改轮播
    public function elb(){
     $id=$_GET['id'];
        $res= M("lb")->where("id='$id'")->find();
      $this->assign("data",$res);
      $this->display();
       
    }
    
        //执行修改轮播
    public function eidtlb(){
 		  $data['pic'] =$_POST['pic'];
                $data['stat'] =$_POST['stat'];
      if(M("lb")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/lunbo'));
      }else{
        $this->success('修改失败！',U('Mgt/lunbo'));
      }
     
    }
    
        //删除轮播
    public function  dellb(){
      
          $id= I('post.id');
   
    	if(M('lb')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
        //产品信息
    public function jpxx(){
      $total = M('product')->Count();
      $page = new \Think\Page($total,6);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("product")->limit($page->firstRow,$page->listRows)->order("px asc")->select();
      $this->assign('pageinfo',$page->show());

		 $this->assign('data',$res);
     	 $this->display();
    
    
    }
    //添加产品
    public function addcp(){
      
     $a= M("fl")->select();

    $this->assign('data',$a);
    $this->display();
    }
     //执行添加产品
    public function insertcp(){
      


       


      
      $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = array('uniqid',mt_rand(), array('', true));
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
      if($info!=false){
          $pic1=$_POST["pic"];
          $pic2=$_POST["pic2"];

      }
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功

          foreach ($info as $key=>$file) {
               $uploads="http://dai.juhuaian.cn/Public/";
            $num=1;
               $data[$key].$num = $uploads.$file['savepath'] . $file['savename'];
               $data[$key] = $uploads.$file['savepath'] . $file['savename'];
             

          } 
      }
       $data['ed']=I("post.ed");
          $data['cpjs']=$_POST['cpjs'];
         $data['lx']=I("post.lx");
           $data['xqsl']=I("post.xqsl");
       $data['name']=I("post.name");
       $data['wz']=I("post.wz");
       $data['sm']=I("post.sm");
       $data['fid']=I("post.fid");
       $data['fysm']=I("post.fysm");
       $data['iszr']=I("post.iszr");
       $data['iszx']=I("post.iszx");
       $data['isgl']=I("post.isgl");
       $data['cont']=$_POST['cont'];
       $data['addtime']=date('Y-m-d h:i:s',time());

        if(M("product")->add($data)){
          $this->success('添加成功！',U('Mgt/jpxx'));
	    }else{
	       $this->success('添加失败！',U('Mgt/jpxx'));
        }
    }
    //修改产品
    public function ecp(){
          $a= M("fl")->select();

    $this->assign('datas',$a); 
     $res= M("product")->where("id=".$_GET['id'])->find();
      $this->assign("data",$res);
      $this->display();
   
    
    }
    //执行修改产品
    public function eidtcp(){
    
      
      $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
           $data['pic'] = $_POST['pic'];
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = "http://dai.juhuaian.cn/Public/".$file['savepath'] . $file['savename'];
          }           
      }
        $data['sqsl']=I("post.sqsl");
        $data['cpjs']=$_POST['cpjs'];
        $data['pic2']=I("post.pic2");
        $data['ed']=I("post.ed");
        $data['lx']=I("post.lx");
        $data['name']=I("post.name");
        $data['wz']=I("post.wz");
        $data['sm']=I("post.sm");
        $data['fysm']=I("post.fysm");
       $data['fid']=I("post.fid");
       $data['iszr']=I("post.iszr");
       $data['iszx']=I("post.iszx");
       $data['isgl']=I("post.isgl");
      $data['cont']=$_POST['cont'];

        if(M("product")->where("id=".$_POST['id'])->save($data)){
          $this->success('修改成功！',U('Mgt/jpxx'));
	    }else{
	       $this->success('修改失败！',U('Mgt/jpxx'));
        }
    }

        //删除产品
    public function  delcp(){
      
          $id= I('post.id');
   
    	if(M('product')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
    //咨询管理
   public function zxgl(){
    $total = M('zxkz')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("zxkz")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
   
   }
    
     //保单管理
   public function baodangl(){
     $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $city=substr($city, 0, -3);
     //echo $city;die;
    $total = M('baodan')->where("(city like '%$city%')")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("baodan")->where("(city like '%$city%')")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
   
   }
    
    
    
    
         //执行添加资讯
    public function insertzx(){
      
      
      
      $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }
         $data['addtime']=date('Y-m-d H:i:s',time());
         $data['fbr']=I("post.fbr");
         //$data['isrm']=I("post.isrm");
         $data['stat']=I("post.stat");
         $data['wbt']=I("post.wbt");
         $data['cont']=$_POST['cont'];
      
      if(M("zxkz")->add($data)){
       $this->success('添加成功！',U('Mgt/zxgl'));
      }else{
        $this->success('添加失败！',U('Mgt/zxgl'));
      }
    }
  //修改资讯
    public function ezx(){
     $id=$_GET['id'];

        $res= M("zxkz")->where("id='$id'")->find();
      $this->assign("data",$res);
      $this->display();
    }
    
        //执行修改资讯
    public function eidtzx(){
 		$upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
         $data['pic'] = $_POST['pic'];
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }

         $data['fbr']=I("post.fbr");
         //$data['isrm']=I("post.isrm");
         $data['stat']=I("post.stat");
         $data['wbt']=I("post.wbt");
         $data['cont']=$_POST['cont'];
      
      if(M("zxkz")->where("id=".$_POST['id'])->save($data)){
       $this->success('添加成功！',U('Mgt/zxgl'));
      }else{
        $this->success('添加失败！',U('Mgt/zxgl'));
      }
     
    }
    
        //删除资讯
    public function  delzx(){
      
          $id= I('post.id');
   
    	if(M('zxkz')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }

    //公告管理
     public function gggl(){
       $res= M("gggl")->select();
      $this->assign("res",$res);
      $this->display();
    }
    
     //添加公告
     public function addgg(){
      $this->display();
    }
    
        public function insertgg(){
         $data['addtime']=date('Y-m-d H:i:s',time());
         $data['gg']=$_POST['gg'];
          $data['nr']=$_POST['nr'];
      if(M("gggl")->add($data)){
       $this->success('添加成功！',U('Mgt/gggl'));
      }else{
        $this->success('添加失败！',U('Mgt/gggl'));
      }
    }
    
    //添加私信
     public function fssx(){
      $this->display();
    }
    
     public function addsx(){
       $data['addtime']=date('Y-m-d H:i:s',time());
         $data['data']=$_POST['sx'];
          $data['uid']=$_POST['uid'];
          $data['xid']=0;
      if(M("sx")->add($data)){
       $this->success('添加成功！',U('Mgt/gggl'));
      }else{
        $this->success('添加失败！',U('Mgt/gggl'));
      }
    }
    
      //修改公告
    public function egg(){
     $id=$_GET['id'];

        $res= M("gggl")->where("id='$id'")->find();
      $this->assign("data",$res);
      $this->display();
    }
    
        //执行修改公告
    public function eidtgg(){
 	
         $data['gg']=I("post.gg");
             $data['nr']=$_POST['nr'];
      
      if(M("gggl")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/gggl'));
      }else{
        $this->success('修改失败！',U('Mgt/gggl'));
      }
     
    }
    
        //删除资讯
    public function  delgg(){
      
          $id= I('post.id');
   
    	if(M('gggl')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
    
    //汽车资源管理（审核）
    public function qczy(){
           $total = M('qczy')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("qczy")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
     $this->assign("data",$res);
     $this->display();
    }
    
        //汽车确认审核
    public function qcsh(){
        $data['sh']=1;
      if(M('qczy')->where('id = '.$_POST['id'])->save($data)){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
        //汽车驳回审核
    public function qcbh(){
      
      if(M('qczy')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
    public function xqqczy(){
      $this->assign("data",M("qczy")->where("id=".I("get.id"))->find());
      $this->display();
    
    }
    
        //会员管理
     public function vip(){
      $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $total = M('users')->where('city="'.$city.'"')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("users")->where('city="'.$city.'"')->order("grade desc")->limit($page->firstRow,$page->listRows)->select();
       
        foreach ($res as $key=>$value) {
          
       if($value['fid']=="" ||$value['fid']=="null"){
            $res[$key]['sj'] ="该会员未有上级";
          }else{
          $res[$key]['sj'] =M("users")->where("id={$value['fid']}")->getField("phone");
          }
             
          } 
       

      $this->assign('pageinfo',$page->show());
      $this->assign("res",$res);
      $this->display();
    }

    
    
    //分类管理
    public function dkfl(){
       $res= M("fl")->select();
      $this->assign("res",$res);
      $this->display(); 
    }
    
    public function xfl(){
        $res= M("fl")->where("id=".$_GET['id'])->find();
      $this->assign("data",$res);
      $this->display(); 
    }
    
    
            //执行修改
    public function savefl(){
 	
         $data['name']=I("post.name");
       
      
      if(M("fl")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/dkfl'));
      }else{
        $this->success('修改失败！',U('Mgt/dkfl'));
      }
     
    }
        //删除分类
    public function  delfl(){
          $jid= I('post.id');
    	if(M('fl')->where("id='$jid'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
    
    //单一的最新口子管理
    
    public function zxkzone(){
        $res= M("zxkzone")->where("id=1")->find();

      $this->assign("data",$res);
      $this->display(); 
    
    }
    
        //单一的最新口子管理修改
  public function ezxk(){
  $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
         $data['pic'] = $_POST['pic'];
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }

         $data['fbr']=I("post.fbr");
         //$data['isrm']=I("post.isrm");

         $data['title']=I("post.title");
         $data['cont']=$_POST['cont'];
        $data['addtime']=date('Y-m-d',time());
      if(M("zxkzone")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/zxkzone'));
      }else{
        $this->success('修改失败！',U('Mgt/zxkzone'));
      }
  }
    //地推赚钱管理
    public function dtzq (){
       $total = M('dt')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("dt")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display(); 
    }
    
    //执行添加地推产品
    public function insertdt(){

      


      
      $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = array('uniqid',mt_rand(), array('', true));
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
      if($info!=false){
          $pic1=$_POST["pic1"];
          $pic2=$_POST["pic2"];
          $pic3=$_POST["pic3"];
      }
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功

          foreach ($info as $key=>$file) {
               $uploads="http://dai.juhuaian.cn/Public/";
               $data[$key] = $uploads.$file['savepath'] . $file['savename'];
               $data[$key] = $uploads.$file['savepath'] . $file['savename'];
               $data[$key] = $uploads.$file['savepath'] . $file['savename'];

          } 
      }
       $data['ed']=I("post.ed");
       $data['name']=I("post.name");
       $data['wz']=I("post.wz");
       $data['jj']=I("post.jj");
       $data['fy']=I("post.fy");
       $data['maxed']=I("post.maxed");
       $data['yhk']=I("post.yhk");
       $data['yll']=I("post.yll");
       $data['qxfw']=I("post.qxfw");

     $data['addtime']=date('Y-m-d H:i:s',time());
        if(M("dt")->add($data)){
          $this->success('添加成功！',U('Mgt/dtzq'));
	    }else{
	       $this->success('添加失败！',U('Mgt/dtzq'));
        }
    }
    
        //执行添加地推产品
    public function savedt(){

     $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
 $upload->rootPath = './Public/'; // 设置附件上传根目录


        $upload->saveName = array('uniqid',mt_rand(), array('', true));
        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
            
    }else{// 上传成功
              foreach ($info as $key=>$file) {
          $uploads="http://dai.juhuaian.cn/Public/";

               $data[$key] = $uploads.$file['savepath'] . $file['savename'];
          } 
    }  
 
      

       $data['ed']=I("post.ed");
       $data['name']=I("post.name");
       $data['wz']=I("post.wz");
       $data['jj']=I("post.jj");
       $data['fy']=I("post.fy");
       $data['maxed']=I("post.maxed");
       $data['yhk']=I("post.yhk");
       $data['yll']=I("post.yll");
       $data['qxfw']=I("post.qxfw");
        if(M("dt")->where("id=".$_POST['id'])->save($data)){
           $this->success('修改成功！',U('Mgt/dtzq'));
	    }else{
	       $this->success('修改失败！',U('Mgt/dtzq'));
        }
    }
    //删除地推
    public function deldt(){
      if(M('dt')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
    
    //修改地推赚钱
    public function edtzq(){
        $res= M("dt")->where("id=".$_GET['id'])->find();
        $this->assign("data",$res);
        $this->display();
    }
  
    //资金资源
    public function zjzy(){
      $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $city=substr($city, 0, -3);
      //echo $city;die;
      $total = M('zjzy')->where('city="'.$city.'"')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("zjzy")->where('city="'.$city.'"')->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display(); 
    
    }    
    //营收情况
    public function ysqk(){
      $this->display();
    }
  //猎人审核
    public function lrsh(){
   	 $total = M('lr')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("lr")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
    $this->assign("data",$res);
    $this->display();
    }
    
    //确认审核
    public function tsh(){
      $data['stat']=1;
      if(M('lr')->where('id = '.I('post.id'))->save($data)){
        $res=M("lr")->where("id=".$_POST['id'])->find();
        $datas['islr']=1;
        M('users')->where('id = '.$res['uid'])->save($datas);
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
        //驳回审核
    public function bh(){
      
        $res=M("lr")->where("id=".$_POST['id'])->find();
        $datas['islr']=3;
        M('users')->where('id = '.$res['uid'])->save($datas);
      if(M('lr')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
    
    //详情资金资源
    public function xqzjzy(){
   
    $this->assign("data",M("zjzy")->where("id=".$_GET['id'])->find());
    $this->display();
    }
          //删除资金资源
    public function delzj(){
      if(M('zjzy')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
   //分享管理
    public function fxgl(){
        $res= M("fx")->where("id=1")->find();
        $this->assign("data",$res);
        $this->display();

    } 
    
    
          //执行添加地推产品

        public function efx(){
          
           $datas['wz']=$_POST['wz'];
           $datas['nr']=$_POST['nr'];
           $res= M("fx")->where("id=1")->save($datas);
          
          if($res){
              $this->success('修改成功！',U('Mgt/fxgl'));
          }else{   
              $this->error('修改失败！',U('Mgt/fxgl'));
          }
    } 
    
    
    
       //办卡提额管理
    public function bkgl(){
        $res= M("bk")->where("id=1")->find();
        $this->assign("data",$res);
        $this->display();

    } 
    
    
          //执行修办卡提额

        public function ebk(){
          
           $datas['wz']=$_POST['wz'];
           $res= M("bk")->where("id=1")->save($datas);
          
          if($res){
              $this->success('修改成功！',U('Mgt/bkgl'));
          }else{   
              $this->error('修改失败！',U('Mgt/bkgl'));
          }
    } 
    
    
            
    
    
    
    //软文推广
    
    public function rw(){
        $res= M("rw")->where("id=1")->find();

      $this->assign("data",$res);
      $this->display(); 
    
    }
    
        //单一的最新口子管理修改
  public function erw(){
  $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
         $data['pic'] = $_POST['pic'];
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }

         $data['fbr']=I("post.fbr");
         //$data['isrm']=I("post.isrm");

         $data['title']=I("post.title");
         $data['cont']=$_POST['cont'];
        $data['addtime']=date('Y-m-d',time());
      if(M("rw")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/rw'));
      }else{
        $this->success('修改失败！',U('Mgt/rw'));
      }
  }
    //不良资产    
    public function blzc(){
      $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $city=substr($city, 0, -3);
      $total = M('blzc')->where('city="'.$city.'"')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("blzc")->where('city="'.$city.'"')->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
     $this->assign("data",$res);
      $this->display(); 
    }
    
   //不良资产 详情 
   public function xqbl(){
      $this->assign("data",M("blzc")->where("id=".I("get.id"))->find());
      $this->display();
    
    }
    
       
            //不良资产确认审核
    public function blzcs(){

        $data['shzt']=1;
      if(M('blzc')->where('id = '.$_POST['id'])->save($data)){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
        //不良资产驳回审核
    public function blzcd(){
      
      if(M('blzc')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
    
       //抢单管理 
        public function qdgl(){
          $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $city=substr($city, 0, -3);
           $total = M('qd')->where('szcs="'.$city.'"')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("qd")->where('szcs="'.$city.'"')->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
     $this->assign("data",$res);
      $this->display(); 
    }
    
   //抢单 详情 
   public function xqqd(){
      $this->assign("data",M("qd")->where("id=".I("get.id"))->find());
      $this->display();
    
    }
    
            //抢单确认审核
    public function qdshs(){

        $data['shzt']=1;
      if(M('qd')->where('id = '.$_POST['id'])->save($data)){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
        //抢单驳回审核
    public function qdshd(){
      
      if(M('qd')->where('id = '.I('post.id'))->delete()){
     	$this->ajaxReturn(1);
      }else{
      	$this->ajaxReturn(2);
      }
    }
    
    
    
       //贷款中心------银行房押
    public function dkzx(){
       $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      
            $total  =M("yhfy")->join('qm_jilu on qm_yhfy.id = qm_jilu.yhfyid ')->join('qm_users on qm_yhfy.uid = qm_users.id ')->where("qm_users.city='$city'")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $res=M("yhfy")->join('qm_jilu on qm_yhfy.id = qm_jilu.yhfyid ')->join('qm_users on qm_yhfy.uid = qm_users.id ')->where("qm_users.city='$city'")->order("qm_jilu.yhfyid desc")->limit($page->firstRow,$page->listRows)->select();
      

        
           foreach ($res as $key=>$value) {
           $hts=M("yhfy")->where("id={$value['yhfyid']}")->getField("fcz");
           $zxs=M("yhfy")->where("id={$value['yhfyid']}")->getField("zx");
           $res[$key]['fczs']= strstr($hts, ']', TRUE);
           $res[$key]['zxs']= strstr($zxs, ']', TRUE);
          }
  
      $this->assign('pageinfo',$page->show());

      $this->assign("data",$res);
      $this->display();
    }
    
        //银行房押多图详情
    public function fczxq(){
    $hts=M("yhfy")->where("id=".$_GET['id'])->getField("fcz");
      $this->assign("data",$hts);
      $this->display();
    }
        //银行房押多图详情
    public function zxdexq(){
    $hts=M("yhfy")->where("id=".$_GET['id'])->getField("zx");
      $this->assign("data",$hts);
      $this->display();
    }
    //额度审批
      public function sped(){
       
        

        $data['sped']=$_POST['ed'];
        $data['stats']=1;
        if(M("yhfy")->where("id=".$_POST['axfid'])->save($data)){
          $data['stat']=1;
          M("jilu")->where("id=".$_POST['id'])->save($data);
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }    
    } 
    
  
    
      //抢单帅单评分
      public function pf(){
        $data['stat']=1;
           $data['xtpf']=$_POST['pf'];
        if(M("qd")->where("id=".$_POST['id'])->save($data)){
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }

    } 
           //贷款中心------按歇房
    public function dkzxsp(){
      
             $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $total  =M("axf")->join('qm_jilu on qm_axf.id = qm_jilu.axfid')->join('qm_users on qm_axf.uid = qm_users.id ')->where("qm_users.city='$city'")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("axf")->join('qm_jilu on qm_axf.id = qm_jilu.axfid')->join('qm_users on qm_axf.uid = qm_users.id ')->where("qm_users.city='$city'")->order("qm_jilu.axfid desc")->limit($page->firstRow,$page->listRows)->select();
      
           foreach ($res as $key=>$value) {
           $hts=M("axf")->where("id={$value['axfid']}")->getField("ht");
           $zxs=M("axf")->where("id={$value['axfid']}")->getField("zx");
           $res[$key]['hts']= strstr($hts, ']', TRUE);
           $res[$key]['zxs']= strstr($zxs, ']', TRUE);
          }
      

      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
    //按歇房多图详情
    public function ahtxq(){
    $hts=M("axf")->where("id=".$_GET['id'])->getField("ht");
      $this->assign("data",$hts);
      $this->display();
    }
        //按歇房多图详情
    public function azxxq(){
    $hts=M("axf")->where("id=".$_GET['id'])->getField("zx");
      $this->assign("data",$hts);
      $this->display();
    }
    
        //按歇房额度审批
      public function axfsp(){
        
     
        $data['sped']=$_POST['ed'];
        $data['stats']=1;
        if(M("axf")->where("id=".$_POST['axfid'])->save($data)){
          $data['stat']=2;
          M("jilu")->where("id=".$_POST['id'])->save($data);
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }    
    } 
    
             //贷款中心-----打卡公积金
    public function dkzxdk(){
                   $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $total  =M("dkgj")->join('qm_jilu on qm_dkgj.id = qm_jilu.dkid')->join('qm_users on qm_dkgj.uid = qm_users.id ')->where("qm_users.city='$city'")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("dkgj")->join('qm_jilu on qm_dkgj.id = qm_jilu.dkid')->join('qm_users on qm_dkgj.uid = qm_users.id ')->where("qm_users.city='$city'")->order("qm_jilu.dkid desc")->limit($page->firstRow,$page->listRows)->select();
      
            foreach ($res as $key=>$value) {
           $hts=M("dkgj")->where("id={$value['dkid']}")->getField("zx");

           $res[$key]['zxs']= strstr($hts, ']', TRUE);

          }
      

      
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
        //-打卡公积金多图详情
    public function zzxxq(){
    $hts=M("dkgj")->where("id=".$_GET['id'])->getField("zx");
      $this->assign("data",$hts);
      $this->display();
    }
    
        //打卡公积金额度审批
      public function dksp(){
        $data['sped']=$_POST['ed'];
        $data['stats']=1;
        if(M("dkgj")->where("id=".$_POST['axfid'])->save($data)){
          $data['stat']=2;
          M("jilu")->where("id=".$_POST['id'])->save($data);
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }    
    } 
    
    
                 //贷款中心-----保单
    public function dkzxbd(){
                         $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');

      $total  =M("bd")->join('qm_jilu on qm_bd.id = qm_jilu.bdid')->join('qm_users on qm_bd.uid = qm_users.id ')->where("qm_users.city='$city'")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("bd")->join('qm_jilu on qm_bd.id = qm_jilu.bdid')->join('qm_users on qm_bd.uid = qm_users.id ')->where("qm_users.city='$city'")->order("qm_jilu.bdid desc")->limit($page->firstRow,$page->listRows)->select();
              foreach ($res as $key=>$value) {
           $hts=M("bd")->where("id={$value['bdid']}")->getField("zx");

           if($value['fid']==0 ||$value['fid']=="null"){
            $res[$key]['txm'] ="无";
          }else{
   	 $res[$key]['txm']=M("users")->where("id={$value['tjr']}")->getField("nick");
          }
            
           $res[$key]['zxs']= strstr($hts, ']', TRUE);

          }

      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
            //-保单多图详情
    public function bdxqs(){

    $hts=M("bd")->where("id=".$_GET['idss'])->getField("zx");
      $this->assign("data",$hts);
      $this->display();
    }
        //--保单额度审批
      public function bdsp(){
        $data['sped']=$_POST['ed'];
        $data['stats']=1;
        if(M("bd")->where("id=".$_POST['axfid'])->save($data)){
          $data['stat']=2;
          M("jilu")->where("id=".$_POST['id'])->save($data);
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }    
    } 
    
    
    
    
 
    //会员文章--产品介绍
    public function vipwz(){
      $res=M("vipcz")->where("stat=1")->find();
      $this->assign("data",$res);
      $this->display(); 
    }
     
    //会员文章--产品介绍购买须知
    public function vipwzs(){
      $data['cont']=$_POST['cont'];
       if(M("vipcz")->where("id=".$_POST['id'])->save($data)){
              $this->success('修改成功！',U('Mgt/vipwz'));
          }else{   
              $this->error('修改失败！',U('Mgt/vipwz'));
          }

    }
    
      
 
    //会员文章--购买须知
    public function vipxz(){
      $res=M("vipcz")->where("stat=2")->find();
      $this->assign("data",$res);
      $this->display(); 
    }
     
    //会员文章--购买须知
    public function vipxzs(){
      $data['cont']=$_POST['cont'];
       if(M("vipcz")->where("id=".$_POST['id'])->save($data)){
              $this->success('修改成功！',U('Mgt/vipxz'));
          }else{   
              $this->error('修改失败！',U('Mgt/vipxz'));
          }

    }
      //会员文章--常见问题
    public function vipwt(){
      $res=M("vipcz")->where("stat=3")->find();
      $this->assign("data",$res);
      $this->display(); 
    }
     
    //会员文章--常见问题
    public function vipwts(){
      $data['cont']=$_POST['cont'];
       if(M("vipcz")->where("id=".$_POST['id'])->save($data)){
              $this->success('修改成功！',U('Mgt/vipwt'));
          }else{   
              $this->error('修改失败！',U('Mgt/vipwt'));
          }

    }
    
     
     //提现请求
    public function txqq(){

      $total  =M("tx")->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("tx")->order("id desc")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
        public function sxgls(){
          
      $unid=$_SESSION['id'];
   	  $city=M("cityadmin")->getFieldById($unid,'city');
      $total  =M("sx")->join('qm_users on qm_sx.uid = qm_users.id ')->where("qm_users.city='$city'")->Count();
          //dump($total);die;
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("sx")->join('qm_users on qm_sx.uid = qm_users.id ')->where("qm_users.city='$city'")->order("qm_sx.id desc")->limit($page->firstRow,$page->listRows)->select();
            
                  foreach ($res as $key=>$value) {
          
       if($value['uid']==0 ||$value['uid']=="null"){
            $res[$key]['sj'] ="无";
          }else{
          $res[$key]['sj'] =M("users")->where("id={$value['uid']}")->getField("phone");
           $res[$key]['nick'] =M("users")->where("id={$value['uid']}")->getField("nick");
          }
             
          } 
     
      $this->assign('pageinfo',$page->show());

      $this->assign("data",$res);
      $this->display();
    }
    
    //回复私信
    
    public function fhsx(){
      
  
      $data['uid']=$_POST['id'];
      $data['data']=$_POST['data'];
      $data['addtime']=date('Y-m-d H:i:s',time());
      if(M("sx")->add($data)){
      echo 1;die;
      }else{
      echo 2;die;
      }
    }
            //删除私信
    public function  delsx(){
      
          $id= I('post.id');
   
    	if(M('sx')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
    
       
        //--保单额度审批
      public function txqqsp(){
        $data['stat']=1;
        if(M("tx")->where("id=".$_POST['id'])->save($data)){
          $data['uid']=$_POST['uid'];
          $data['addtime']=date('Y-m-d h:i:s',time());
          $data['money']=$_POST['money'];
          M("txjl")->add($data);
              $this->ajaxReturn(1);
	    }else{
	          $this->ajaxReturn(2);
        }    
    } 
    
        //修改黑户
    public function hhgl(){

      $res= M("hh")->where("id=1")->find();
      $this->assign("data",$res);
      $this->display();
       
    }
    
        //执行修改轮播
    public function ehh(){
         $data['name'] =$_POST['name'];
               $data['fu'] =$_POST['fu'];
      if(M("hh")->where("id=1")->save($data)){
       $this->success('修改成功！',U('Mgt/hhgl'));
      }else{
        $this->success('修改失败！',U('Mgt/hhgl'));
      }
     
    }
    
        
        //自定义排序
    public function px(){
      $data['px']=$_POST['num'];
      
      if(M("product")->where("px=".$_POST{'num'})->find()){
            $this->ajaxReturn(3);
      }
        if(M("product")->where("id=".$_POST{'ids'})->save($data)){
       $this->ajaxReturn(1);
      }else{
       $this->ajaxReturn(2);
      }
      
    
     
       
    }
            
        //自定义排序
    public function pxdt(){

      $data['px']=$_POST['num'];
      
      if(M("dt")->where("px=".$_POST{'num'})->find()){
            $this->ajaxReturn(3);
      }
        if(M("dt")->where("id=".$_POST{'ids'})->save($data)){
       $this->ajaxReturn(1);
      }else{
       $this->ajaxReturn(2);
      }
      
    
     
       
    }
    
   //协议管理
    public function  xieyi(){
      $res= M("xieyi")->where("id=1")->find();
      $this->assign("data",$res);
      $this->display();
    }
       //协议管理执行修改
    public function exieyi(){
      $data['cont']=$_POST['cont'];
       if(M("xieyi")->where("id=1")->save($data)){
              $this->success('修改成功！',U('Mgt/xieyi'));
          }else{   
              $this->error('修改失败！',U('Mgt/xieyi'));
          }

    }
    
    
    
    
  }