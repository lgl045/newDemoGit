<?php
namespace JY\Controller;
  use Think\Controller;
  class MgtController extends Controller {
    //获取同城热约
        public function tcry(){
      $res1=M("ry")->where("id=1")->find();
      $res2=M("ry")->where("id=2")->find();
      $res3=M("ry")->where("id=3")->find();
      $res4=M("ry")->where("id=4")->find();
      $res5=M("ry")->where("id=5")->find();
      $res6=M("ry")->where("id=6")->find();
      $this->assign("data1",$res1);
      $this->assign("data2",$res2);
      $this->assign("data3",$res3);
      $this->assign("data4",$res4);
      $this->assign("data5",$res5);
      $this->assign("data6",$res6);
      $this->display();
    }
    //修改同城热约
            public function xgry(){
              if(!M("user")->where("id=".$_POST['money'])->find()){
              $this->success('用户一不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else if(!M("user")->where("id=".$_POST['money2'])->find()){
              $this->success('用户二不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else if(!M("user")->where("id=".$_POST['money3'])->find()){
              $this->success('用户三不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else if(!M("user")->where("id=".$_POST['money4'])->find()){
              $this->success('用户四不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else if(!M("user")->where("id=".$_POST['money5'])->find()){
              $this->success('用户五不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else if(!M("user")->where("id=".$_POST['money6'])->find()){
              $this->success('用户六不存在用户id 请重新输入！',U('Mgt/tcry'));
              }else{
                $data1['uid']=$_POST['money'];
                $data2['uid']=$_POST['money2'];
                $data3['uid']=$_POST['money3'];
                $data4['uid']=$_POST['money4'];
                $data5['uid']=$_POST['money5'];
                $data6['uid']=$_POST['money6'];
           M("ry")->where("id=1")->save($data1);
           M("ry")->where("id=2")->save($data2);
           M("ry")->where("id=3")->save($data3);
           M("ry")->where("id=4")->save($data4);
           M("ry")->where("id=5")->save($data5);
           M("ry")->where("id=6")->save($data6);
    if($data1 && $data2 && $data3 &&  $data4 && $data5 && $data6){
    	 $this->success('修改成功！',U('Mgt/tcry'));
    	}else{
    	 $this->success('修改失败！',U('Mgt/tcry'));
    	}
              }

    }
    
    
    public function cyjgl(){
      $res1=M("guyong")->where("id=1")->find();
      $res2=M("guyong")->where("id=2")->find();
      $res3=M("guyong")->where("id=3")->find();
      $res4=M("guyong")->where("id=4")->find();
      $this->assign("data1",$res1);
      $this->assign("data2",$res2);
      $this->assign("data3",$res3);
      $this->assign("data4",$res4);
      $this->display();
    }
    //执行修改诚意金
        public function cyjxg(){
          $data1['xqys']=$_POST['money'];
          $data2['xqys']=$_POST['money2'];
          $data3['xqys']=$_POST['money3'];
          $data4['xqys']=$_POST['money4'];
           M("guyong")->where("id=1")->save($data1);
           M("guyong")->where("id=2")->save($data2);
           M("guyong")->where("id=3")->save($data3);
           M("guyong")->where("id=4")->save($data4);
    if($data1 && $data2 && $data3 &&  $data4){
    	 $this->success('修改成功！',U('Mgt/cyjgl'));
    	}else{
    	 $this->success('修改失败！',U('Mgt/cyjgl'));
    	}
    }
    
    //**********************************
    //商学院审核                         *
    //**********************************    
   public function sxysh(){

      $total = M('sxy')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("sxy")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
        //**********************************
    //网红商院审核                         *
    //**********************************    
   public function whsy(){
      $total = M('wh')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("wh")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
    
          //执行网红认证
    public function whrz(){
      $data['stat']=$_POST['stat'];
    if( M("wh")->where("id=".$_POST['id'])->save($data)){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    
    //执行商学院审核
    public function ifsxy(){
      $data['stat']=$_POST['stat'];
    if( M("sxy")->where("id=".$_POST['id'])->save($data)){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    //**********************************
    //轮播管理                         *
    //**********************************    
    public function lunbo(){
     $res= M("lb")->order("id desc")->select();
     $this->assign("data",$res);
     $this->display();
    }
    //添加轮播
     public function addlb(){
     $this->display();
    }
    //执行添加轮播
    public function insertlb(){
        $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }
         $data['stat'] =$_POST['stat'];
         $data['addtime']=date("Y-m-d H:i:s");

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
 	    $data['href'] =$_POST['href'];
      
        $upload = new \Think\Upload(); // 实例化上传类

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
               $data['pic'] =  $file['savepath'] . $file['savename'];
          }           
      }
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
 //**********************************
 //分类管理                         *
 //**********************************
       
    public function flgl(){
		$res = M("fl")->where("prentid=0")->select();
         foreach ($res as $key=>$value) {
         
   	 	$res[$key]['zj']=M("fl")->where("prentid={$value['id']}")->select();
          }
		$this->assign('data',$res);
        $this->display();       
    }
    //添加分类
    public function add_fl(){ 
      	$res = M("fl")->where("prentid=0")->select();

	    $this->assign('data',$res);
        $this->display();
    }
     //执行添加分类
      public function insertlbs(){
        $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
        $upload->saveName = time().'_'.mt_rand();
        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }
        $data['prentid']=I("post.pid");   
        $data['name']=I("post.name"); 
        $data['stat']=I("post.stat");   
        if($_POST['sname2'] && $_POST['svalue2']){
        $data['sname2']=I("post.sname2");  
        $data['svalue2']=I("post.svalue2");   
        }
        if($_POST['sname3'] && $_POST['svalue3']){
        $data['sname3']=I("post.sname3");  
        $data['svalue3']=I("post.svalue3");   
        }
        if($_POST['sname4'] && $_POST['svalue4']){
        $data['sname4']=I("post.sname4");  
        $data['svalue4']=I("post.svalue4");   
        }
        $data['sname']=I("post.sname");  
        $data['svalue']=I("post.svalue");   
        $data['addtime']=date('Y-m-d h:i:s',time());
        if(M("fl")->add($data)){
        $this->success('添加成功！',U('Mgt/flgl'));
	    }else{
	       $this->error('添加失败！',U('Mgt/flgl'));
        }
    }
    //分类修改
    public function flxg(){ 
       $res = M("fl")->where("id=".$_GET['id'])->find();
	   $this->assign('data',$res);
       $this->display();
    
    }
    //执行修改分类
    public function eidtfl(){
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
      	
        $data['name'] =I("post.name");
        $data['stat']=I("post.stat");    
        $data['sname']=I("post.sname");  
        $data['svalue']=I("post.svalue");   

        if(M("fl")->where("id=".$_POST['id'])->save($data)){
          $this->success('修改成功！',U('Mgt/flgl'));
	    }else{
	       $this->success('修改失败！',U('Mgt/flgl'));
        }        
    }
        //分类删除
    public function  delfl(){
          $id= I('post.id');
       if(M('fl')->where("prentid='$id'")->select()){
       		
       	$this->ajaxReturn(3);
       }
    	if(M('fl')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    
    //**********************************
    //用户管理                         *
    //**********************************
   public function userlist(){

      $total = M('user')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("user")->limit($page->firstRow,$page->listRows)->select();
      $this->assign('pageinfo',$page->show());
     

      $this->assign("data",$res);
      $this->display();
   
   }
      //修改用户
    public function update(){ 
       $res = M("user")->where("id=".$_GET['id'])->find();
	   $this->assign('data',$res);
       $this->display();
    }
          //我的需求
    public function mexq(){ 
           $uid=$_GET['id'];
	$res = M("fbxq")->where("uid='$uid'")->select();
  foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
        $this->assign('data',$res);
        $this->display();
    }
             //我的技能
    public function mejn(){ 
       $res = M("fbjn")->where("uid=".$_GET['id'])->select();
        foreach($res as $k=>$v){
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }

	   $this->assign('data',$res);
       $this->display();
    }
    
            //我的下级
    public function mexj(){ 
       $res = M("user")->where("fid=".$_GET['id'])->select();
	   $this->assign('data',$res);
       $this->display();
    }
                //我的相亲
    public function woxq(){ 
       $res = M("xquser")->where("uid=".$_GET['id'])->select();

	   $this->assign('data',$res);
       $this->display();
    }
    // all订单
    public function order(){
           $res = M("order")->select();
     foreach($res as $k=>$v){
		 $res[$k]['jname'] = M('user')->where('id='.$v['user_id'])->getField('username');
         $res[$k]['pics'] = M('user')->where('id='.$v['user_id'])->getField('pic');
         $res[$k]['sp'] = M('goods')->where('id='.$v['goods_id'])->getField('content');


   	 }
         $this->assign('data',$res);
         $this->display();
    }
    
                //订单修改
    public function gsxg(){ 
       $res = M("order")->where("id=".$_GET['id'])->find();
	   $this->assign('data',$res);
       $this->display();
    }
                    //详情地址
    public function xqdz(){ 
       $res = M("address")->where("id=".$_GET['id']." and code=1")->select();
	   $this->assign('data',$res);
       $this->display();
    }
                    //发货填写
    public function fhs(){ 
       $res = M("order")->where("id=".$_GET['id'])->find();
	   $this->assign('data',$res);
       $this->display();
    }
    
    //执行修改订单状态
    
    public function eid_gs(){
      $data['zhuangtai']=$_POST['zt'];
      
      if(M("order")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/order'));
      }else{
        $this->success('修改失败！',U('Mgt/order'));
      }

    }
        public function eidt_dk(){
      $data['kuaidi']=$_POST['kuaidi'];
      $data['kuai_dan']=$_POST['kuai_dan'];
          $data['zhuangtai']=$_POST['zt'];
   if(M("order")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/order'));
      }else{
        $this->success('修改失败！',U('Mgt/order'));
      }

    }
    //执行修改用户
    public function eid_user(){

 		$upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
       $upload->saveName = array('uniqid',mt_rand(), array('', true)); 
        //dump($upload);die;

        // 上传文件 

        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
         $data['pic'] = $_POST['pic'];
         $data['sfz'] = $_POST['sfz'];
         $data['sfzb'] = $_POST['sfzb'];
        }else{// 上传成功
          foreach ($info as $key=>$file) {
                    
            if($file['key']=="pic"){
              $data['pic'] = $file['savepath'] . $file['savename'];
            }else if($file['key']=="sfz"){
              $data['sfz'] = $file['savepath'] . $file['savename'];
            }
            else if($file['key']=="sfzb"){
              $data['sfzb'] = $file['savepath'] . $file['savename'];
            }
          }           
      }
         $data['name']=I("post.name");
         $data['sfzh']=I("post.sfzh");
         $data['phone']=I("post.phone");

      if(M("user")->where("id=".$_POST['id'])->save($data)){
       $this->success('修改成功！',U('Mgt/userlist'));
      }else{
        $this->success('修改失败！',U('Mgt/userlist'));
      }
     
    }
     //删除用户
    public function  delete(){
      
          $id= I('post.id');
   
    	if(M('user')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    //**********************************
    //技能管理                         *
    //**********************************    
   public function jngl(){
      $total = M('fbjn')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("fbjn")->limit($page->firstRow,$page->listRows)->select();
    foreach($res as $k=>$v){
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
        $res[$k]['fname'] = M('user')->where('id='.$v['uid'])->getField('username');
    }
      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
   
    }
    //动态修改
    public function dtxg(){  
       $res = M("grdt")->where("id=".$_GET['id'])->find();
	   $this->assign('data',$res);
        $this->display();
     
    }
       //执行动态修改
    public function eid_dt(){      
      $data['stat']=I("post.stat");
      if(M("grdt")->where("id=".$_POST['id'])->save($data)){
         $this->success('修改成功！',U('Mgt/dtgl'));
      }else{
         $this->success('修改失败！',U('Mgt/dtxg'));
      }
     
    }
 
     //删除动态
    public function  deldts(){      
        $id= I('post.id');   
    	if(M('grdt')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    //**********************************
    //订单管理                         *
    //**********************************  
     public function  gldd(){ 
        $resa= M("fw")->select();
        $this->assign("data",$resa);
    	$this->display();
    }
    //修改订单
    public function  xgdd(){ 
        $res= M("fw")->where("id=".$_GET['id'])->find();
        $this->assign("data",$res);
    	$this->display();
    }
    //执行修改订单
    public function eid_dd(){
         $data['name']=I("post.name");
         $data['age']=I("post.age");
         $data['sex']=I("post.sex");
         $data['phone']=I("post.phone");
         $data['title']=I("post.title");
         $data['content']=I("post.content");
         $data['addtime']=I("post.addtime");       
         $data['jstime']=I("post.jstime");
         $data['kswz']=I("post.kswz");
         $data['jswz']=I("post.jswz");
         $data['type']=I("post.type");
         $data['money']=I("post.money");
         $data['stat']=I("post.stat");  
         if(M("fw")->where("id=".$_POST['id'])->save($data)){
          $this->success('修改成功！',U('Mgt/gldd'));
         }else{
           $this->success('修改失败！',U('Mgt/xgdd'));
         }
     
    }
    //删除订单
     public function  del_dd(){
      
        $id= I('post.id');
   
    	if(M('fw')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    //需求管理
    public function xxgl(){

           $total = M('fbxq')->Count();
      $page = new \Think\Page($total,7);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("fbxq")->limit($page->firstRow,$page->listRows)->select();
    foreach($res as $k=>$v){
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
        $res[$k]['fname'] = M('user')->where('id='.$v['uid'])->getField('username');
    }


      $this->assign('pageinfo',$page->show());
      $this->assign("data",$res);
      $this->display();
    }
    
    
    //=============================================================================================================================================================================================================================
             //执行添加资讯_ones
    public function insertzx_ones(){
     
      $upload = new \Think\Upload(); // 实例化上传类
      
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
         $data['stat']=90;
         $data['wbt']=I("post.wbt");
         $data['cont']=$_POST['cont'];
      
      if(M("zxkzs")->add($data)){
       $this->success('添加成功！',U('Mgt/ones'));
      }else{
        $this->success('添加失败！',U('Mgt/ones'));
      }
    }
    
    //修改资讯-ones
    public function ezx_ones(){
     $id=$_GET['id'];

        $res= M("zxkzs")->where("id='$id'")->find();
      $this->assign("data",$res);
      $this->display();
    }
    
        //执行修改资讯-ones
    public function eidtzx_ones(){
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
      
      if(M("zxkzs")->where("id=".$_POST['id'])->save($data)){
       $this->success('添加成功！',U('Mgt/ones'));
      }else{
        $this->success('添加失败！',U('Mgt/ones'));
      }
     
    }
    
        //删除资讯-ones
    public function  delzx_ones(){
          $id= I('post.id');
   
    	if(M('zxkzs')->where("id='$id'")->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
      
    
    }
  
    
    
  }