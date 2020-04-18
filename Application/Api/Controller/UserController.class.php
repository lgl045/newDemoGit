<?php

namespace Api\Controller;

use Think\Controller;

class UserController extends Controller 

{

        public function index()

        {

            $this->display();

        }
  
        //随机取三条服务信息
        public function fwxx(){
          $res = M("user")->limit(3)->order("rand()")->select();
              if($res){
              $this->ajaxReturn(array("code" => 200,'data'=>$res));
              }else{
                $this->ajaxReturn(array("code" => 404));
              }

        }



        public function _initialize() 

        {

            //.引入融云即时通讯服务

            vendor('RongCloud.api');

        }



        /**

        * 公共方法 验证Token

        * @param  用户ID  $mid  

        * @param  Token   $token 

        * @return 状态码  $code 

        */

        public function _CheckToken($uid)

        {

            $token = $_POST['token'];



            $condition['uid'] = "$uid";

            $userinfo = M('user')->where($condition)->scope(array('field'=>'token'))->find();

            

            if(is_null($token))

            {//.身份验证失败

                $this->ShowMsg(501);

            }

            else if($token != $userinfo["token"])

            {//.身份验证失败

                $this->ShowMsg(502);

            }

            else

            {//.验证成功

                $code = 200;

                return $code;

            }    






        }

        

        //.判断是否已注册

        public function IsMerber()

        {

            $phone = $_POST['phone'];

            $user = M('user');

            $result = $user->where("phone ='$phone'")->find();

            if(!$phone || !is_numeric($phone))

            {

               $this->ajaxReturn(array('code'=>100));

            }

            else

            {

                if(!empty($result))

                {//.该手机号已被注册

                    $this->ajaxReturn(array('code'=>401));

                }

                else

                {//.该手机号可以注册

                   $this->ajaxReturn(array('code'=>200));

                }

            }    

        }


//.qu uid

        public function quid()

        {

            $phone = $_POST['phone'];

            $user = M('ucenter_members');

            $result = $user->where("phone ='$phone'")->find();

            $this->ShowMsg(200,'success',$result['uid']);

        }        

        //.注册       

        public function Reg()

        {

            $phone = $_POST['phone'];

            $username = $_POST['username'];

            $user = M('user');


            $retphone = $user->where("phone ='$phone'")->find();

            $retusername = $user->where("username ='$username'")->find();

                

                if(!empty($retphone))

                {//.该手机号已被注册

                    $this->ajaxReturn(array('code'=>401));

                }

                else if(!empty($retusername))

                {//.该用户名已被注册

                    $this->ajaxReturn(array('code'=>402)); 

                }

                else if($user->add($_POST))

                {//.注册成功

                    $this->ajaxReturn(array('code'=>200));

                }

                else

                {//.注册失败

                    $this->ajaxReturn(array('code'=>403));

                }

                        

        }
  
        public function doregister(){
          
			$phone = $_POST['phone'];

            $username = $_POST['username'];
          
          	$data['phone'] = $_POST['phone'];
          
         	$data['username'] = $_POST['username'];
          
         	$data['password'] = md5($_POST['password']);
          
          	$data['pic'] = 'mr.jpg';
          
          	if($_POST['fid']){
              
            	$data['fid'] = $_POST['fid'];
              
            }

            $user = M('user');

            $retphone = $user->where("phone ='$phone'")->find();

            $retusername = $user->where("username ='$username'")->find();

                if(!empty($retphone))

                {//.该手机号已被注册

                   $this->ajaxReturn(array('code'=>401));

                }

                else if(!empty($retusername))

                {//.该用户名已被注册

                   $this->ajaxReturn(array('code'=>402));   

                }

                else if($user->add($data))

                {//.注册成功

                  	$this->ajaxReturn(array('code'=>200));

                }

                else

                {//.注册失败

                    $this->ajaxReturn(array('code'=>403));

                }
        }

        public function wjmm()
        {
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $salt = $_POST['salt'];
            $user = M("user");
            $data['phone'] = $phone ;
            $data['password'] = $password ;
            $data['salt'] = $salt ;
            $user->where("phone ='$phone'")->save($data);
            $this->ShowMsg(200);
        }

        //重构用户登录接口

        //同步注册融云服务

        public function Login()

        {   

            //引入融云模型

            $Model = new \RongCloud();

            //APP服务器地址

            $ServerUrl = 'http://jy.juhuaian.cn/Public/';
        $password = md5($_POST['password']);
            $phone = $_POST['phone'];

            $user = M("user");

            $userinfo = $user->where("phone ='$phone' and password='$password'")->find();
          if($userinfo){
                  $sb= $userinfo['id'];
         $data = array(

                                    'token' => 1,

                                    'id' => $sb,

                                    'userinfo' => $userinfo

                                );
          
                                          $this->ajaxReturn(array('code'=>200,'data'=>$data));
          }else{
              $this->ajaxReturn(array('code'=>404));
          }


         

            //.获取盐值

            $password = md5($_POST['password']);
            // dump($password)


            //用于注册融云服务的信息

            $uid = $userinfo["id"];

            $username = $userinfo["username"];
          


                                $this->ajaxReturn(array('code'=>200,'data'=>$data));
            $face = $ServerUrl . $userinfo["pic"];

            //...调试结束...

                if(!empty($userinfo))

                {

                    if($userinfo['password'] == $password)

                    {//.注册融云服务

                        $RegRongCloud = $Model->User()->getToken( $uid, $username, $face);

                        //从json字符串中截取字段值(获取token)

                        $jsonToArray = (array)json_decode( $RegRongCloud ); 

                        $token = $jsonToArray['token'];

                        $code = $jsonToArray['code'];

                            if($code == '200')

                            {//.将token写入数据表

                                $addtoken['token'] = $token;

                                $user->where("id = $uid")->save($addtoken);
                              
                                $data = array(

                                    'token' => $token,

                                    'id' => $uid,

                                    'userinfo' => $userinfo

                                );

                                $this->ajaxReturn(array('code'=>200,'data'=>$data));

                            }

                            else

                            {

                                $this->ajaxReturn(array('code'=>500));

                            }                   

                    }

                    else

                    {//.密码错误

                        $this->ajaxReturn(array('code'=>406));

                    }

                }

                else

                {//.账号错误

                   $this->ajaxReturn(array('code'=>407));

                }       

        }
  
  		public function GetUserByID(){
          
        	$uid = $_POST['uid'];
          
            $res = M('user')->where("id ='$uid'")->find();
          
          	if($res){
           		 $this->ajaxReturn(array('code'=>200,'data'=>$res));
            }else{
            	 $this->ajaxReturn(array('code'=>400));
            }

        }


        /**

        * @param 用户基本基本 cia_ucenter_members

        * @param 用户详细数据 cia_ucenter_members_info

        * @param 用户统计数据 cia_ucenter_members_tj

        */

        public function Myinfo($uid,$token)

        {

            $uid = $_POST['uid'];

            //.验证Token

            $code = $this->_CheckToken($uid);



                if($code === 200)

                {//.关联用户信息

                    $conditionuser['a.uid'] = "$uid";

                    $conditionuser['b.uid'] = "$uid"; 



                    $myinfo = M()->table(array('cia_ucenter_members'=>'a','cia_ucenter_members_info'=>'b'))->scope(array('field'=>'a.uid,a.sex,a.username,a.phone,a.face,b.birthday,b.stature,b.revenue,b.asset,b.interest,b.place,b.declaration,b.yaoqiu,b.liangdian'))->where($conditionuser)->find();



                    $this->ShowMsg(200,'数据获取成功！',$myinfo);              

                }       

        }



        //修改资料

        public function Editinfo()

        {



            $uid = $_POST['uid'];

            $sex = $_POST['sex'];

            $username = $_POST['username'];

            $birthday = $_POST['birthday'];

            $stature = $_POST['stature'];

            $revenue = $_POST['revenue'];

            $asset = $_POST['asset'];

            $interest = $_POST['interest'];

            $place = $_POST['place'];

            $declaration = $_POST['declaration'];

            $yaoqiu = $_POST['yaoqiu'];
            
            $liangdian = $_POST['liangdian'];
            //.验证Token

            $code = $this->_CheckToken($uid);



                if($code === 200)

                {   

                    //.用户基本资料

                    $addbase['username'] = $username;

                    M('ucenter_members')->where("uid = $uid")->save($addbase);  

                    

                    //.用户详细资料

                    $addinfo['birthday'] = $birthday;

                    $addinfo['sex'] = $sex;

                    $addinfo['stature'] = $stature;

                    $addinfo['stature'] = $stature;

                    $addinfo['revenue'] = $revenue;

                    $addinfo['asset'] = $asset;

                    $addinfo['interest'] = $interest;

                    $addinfo['place'] = $place;

                    // $addinfo['status'] = 1;

                    $addinfo['declaration'] = $declaration;

                    $addinfo['yaoqiu'] = $yaoqiu;

                    $addinfo['liangdian'] = $liangdian;

                    M('ucenter_members_info')->where("uid = $uid")->save($addinfo); 

                    

                    $result = $this->Myinfo($uid,$token);

                    //$this->ShowMsg(200,'更新成功！');

                }

        }



        //会员列表(分类)

        public function UserList()

        {



            $uid = $_POST['uid'];  

            $sex = $_POST['sex'];  

            //$mtypeid = $_POST['mtypeid']; 



            //.验证Token

            $code = $this->_CheckToken($uid);

 

                if($code === 200)

                {



                    $page = isset($_GET['page']) ? $_GET['page'] : 1;

                    $pageSize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 20;  //默认显示20条

                        if(!is_numeric($page) || !is_numeric($pageSize)) 

                        {

                            return $this->ShowMsg(500,'参数不合法！');

                        }

                    $offset = ($page) * $pageSize;

                     

                    //会员列表

                    $UserList = M()->table(array('cia_ucenter_members'=>'a','cia_ucenter_members_info'=>'b'))->scope(array('field'=>'a.uid,a.username,a.sex,a.face,b.asset,b.stature,a.lastlogintime,b.interest,b.birthday','order'=>'a.regdate DESC','limit'=>"$offset",".$pagesize"))->where("a.sex = '$sex' and a.uid = b.uid")->select();

                        if(!empty($UserList))

                        {//.数据获取成功 

                            $this->ShowMsg(200,'数据获取成功！',$UserList);

                        }

                        else

                        {//.暂无数据

                            $this->ShowMsg(404);

                        }

                }       

            

        }



        //加好友

        public function AddFriends()

        {



            $uid = $_POST['uid']; 

            $fid = $_POST['fid']; 

            // $addtime = $_POST['addtime']; 
            $addtime = time(); 
            // $list['lastlogintime'] = $_POST['addtime'];

            // dump($list);
            

            //.验证Token

            
           
               

                $code = $this->_CheckToken($uid);
                // $u = M('ucenter_members')->where("stat=1")->find();
                // if($u){
                if($code === 200)

                {//.实例化好友列表
                   

                    $Friends = M("ucenter_members_friends"); 

                    $condition['uid'] = "$uid";

                    $condition['fid'] = "$fid"; 

                    $Friendinfo = $Friends->where($condition)->find();

                    

                    if(!is_null($Friendinfo))

                    {//.已关注过

                        $this->ShowMsg(100,'你们已经是好友啦！'); 



                    }

                    else if(is_null($Friendinfo))

                    {

                        //组装数据

                        $info['fid'] = $fid;

                        $info['uid'] = $uid;

                        $info['addtime'] = $addtime;



                        //写入好友数据

                        $Friends->add($info);

                        

                        $list = M("ucenter_members")->where("uid=$uid")->find();

                        $list['lastlogintime'] = $addtime;
                        
                        $list1 = M("ucenter_members")->where("uid=$fid")->find();

                        $list1['lastlogintime'] = $addtime;

                        $us1 = M("ucenter_members")->where("uid=$uid")->save($list);

                        $us2 = M("ucenter_members")->where("uid=$fid")->save($list1);
                        if($us1&&$us2){
                            $this->ShowMsg(200,'已同意！');
                        }



                        



                    }

                    else

                    {//.未知错误

                        $this->ShowMsg(400,'未知错误！');



                    }

                }
            // }
                else{
                $this->ShowMsg(400,'未知错误！');
                }
           
        }



        ###=====================================完美分割线=========================================###

        //支付宝huicode
     public function zfcode()
     {
        $data['userid'] = $_POST['userid'];
        $data['langtime'] = $_POST['langtime'];
        $data['addtime'] = time();
        $whur = $_POST['userid'];
        $whurs =$_POST['langtime'];
        $whe['userid'] = $_POST['userid'] ;
        $whe['status'] = 1 ;
        $user = M("ucenter_membertime")->where($whe)->find();
        // dump($user);exit;
        $list = M("ucenter_members_info")->where("uid='{$whe['userid']}'")->field('status')->find();

        if((!$user)&&($list!=3)){
            $data['status'] = '1';
            $use = M('ucenter_membertime')->add($data);
            $aa = M("ucenter_members_info")->where("uid='{$whe['userid']}'")->setField('status',3);
            if ($use&&$aa) {
                $this->ajaxReturn(array('code'=>1));
            }
        }else{
            // $whurss = '88888';
            // parseInt($whurss);
            $datatime = M('ucenter_membertime')->field('langtime')->where("userid=$whur")->find();
           // dump($datatime);exit;
            $datas = M("ucenter_membertime")->where("userid=$whur")->find();
            $datas['langtime'] += $whurs;
            // dump($datas);exit;
           if(M("ucenter_membertime")->where("userid=$whur")->save($datas)){

                $this->ajaxReturn(array('code'=>1));
           } ;
        }
     }


     //判断是否是会员
     public function user(){
        $whe['userid'] = $_POST['userid'] ;
        $whe['status'] = 1 ;
        $user = M("ucenter_membertime")->where($whe)->find();
        if(!$user){
            $this->ajaxReturn(array('sta'=>1));
        }else{
            $this->ajaxReturn(array('sta'=>2));
        }
     }
    

     public function user1(){

        $whe['userid'] = $_POST['userid'];
        // $list = M("ucenter_members_info")->where("uid='{$whe['userid']}'")->find();
       
        // $whe['status'] = 1 ;
        $user = M("ucenter_membertime")->where($whe)->find();
        if($user){
            $this->ajaxReturn(array('sta'=>2,'langtime'=>$user['langtime'],'addtime'=>$user['addtime']));
            }
     }

     public function find()
        {
            // header("Content-type:text/html;charset=utf-8");
            $uid = $_POST['uid'];
            // $uid = 225753;

            $xingbie = M('ucenter_members')->field("sex")->where("uid = $uid") ->select();
            // var_dump($xingbie);
            // echo $xingbie[0]["sex"];
            if ($xingbie[0]["sex"] == '男') {
                // echo 1 ;
                // $list = M('ucenter_members')->where("sex = '女'") ->select();
                // $members = M('ucenter_members')->join("cia_ucenter_members_info on cia_ucenter_members.uid=cia_ucenter_members_info.uid")->where("cia_ucenter_members.stat=1 and cia_ucenter_members.sex='女'")->select();
                $UserList = M()->table(array('cia_ucenter_members'=>'a','cia_ucenter_members_info'=>'b'))->scope(array('field'=>'a.uid,a.username,a.sex,a.face,a.lastlogintime,b.birthday,b.asset','order'=>'a.lastlogintime DESC'))->where("a.sex = '女' and a.uid = b.uid")->select();
            } 
            else if($xingbie[0]["sex"] == '女'){
                // echo 2 ;
                // $list = M('ucenter_members')->where("sex = '男'") ->select();
                $UserList = M()->table(array('cia_ucenter_members'=>'a','cia_ucenter_members_info'=>'b'))->scope(array('field'=>'a.uid,a.username,a.sex,a.face,a.lastlogintime,b.birthday,b.asset','order'=>'a.lastlogintime DESC'))->where("a.sex = '男' and a.uid = b.uid")->select();
            }
            // var_dump($list);
            // $this->ajaxReturn($list, "json");
            // $this->ajaxReturn($members, "json");
            $this->ajaxReturn(array('code'=>200,'msg'=>"success",'data'=>$UserList));            
        }

        public function hong(){
            $data['u_id'] = $_POST['uid'];
            $data['p_id'] = $_POST['pid'];
            // $data['u_id'] = 198875;
            // $pid = M("hongniang")->where()->select();
            $num = M("hongniang")->Count();
             // if($pid)
            // $pid2 = M("hongniang")->where("p_id='{$data['p_id']}'")->find();
            
             $pid = M("hongniang")->where("u_id='{$data['u_id']}'")->select();
             // dump($pid);exit;
             // $pid1 = M("hongniang")->where("u_id='{$data['u_id']}' and p_id='{$data['p_id']}'")->select();
             // if($pid1){

             // }
             $whe['u_id'] = $data['u_id'];
             $whe['p_id'] = $data['p_id'];
             $whe['status'] = '1';
             $wher['u_id'] = $data['p_id'];
             $wher['p_id'] = $data['u_id'];
             $wher['status'] = '1';
             $pid1 = M("hongniang")->where("u_id='{$data['u_id']}' and p_id='{$data['p_id']}'")->select();
             $pid2 = M("hongniang2")->where($whe)->select();
             $pid3 = M("hongniang2")->where($wher)->select();
             $user = M("ucenter_members_info")->field("cia_ucenter_members_info.status,cia_ucenter_members.sex")->join("cia_ucenter_members on cia_ucenter_members.uid=cia_ucenter_members_info.uid")->where("cia_ucenter_members_info.uid='{$data['u_id']}'")->find();
             // dump($user);exit;
             if($user['sex']=='男'){
                    if($user['status']==3){
                    for($i=0;$i<$num+1;$i++){
                    
                    // if($pid[$i]['p_id']==$data['p_id']){
                    
                    if($pid1||$pid2||$pid3){
                    $this->ajaxReturn(array('hong'=>3));

                    // dump($pid[$i]['p_id']);
                    }else{
                       if(M("hongniang")->add($data)) {
                         $this->ajaxReturn(array('hong'=>1));
                       }else{
                         $this->ajaxReturn(array('hong'=>2));   
                            }
                    }
                 }
                 }else{
                    $this->ajaxReturn(array('hong'=>4));  
                 }
            }else{
                if($pid1||$pid2||$pid3){
                    $this->ajaxReturn(array('hong'=>3));

                    // dump($pid[$i]['p_id']);
                    }else{
                         M("hongniang")->add($data);
                        $this->ajaxReturn(array('hong'=>1));  
                    }
               
            }
            
             
        }
        //我的好友
        public function frd(){
            $uid = $_POST['uid'];
            // $uid = 178565;
            
            $list = M("ucenter_members_friends")->field("uid,fid")->where("uid=$uid || fid=$uid")->select();
            // $list1 = M("beizhu")->where("uid=$uid")->select();

            // dump($list);exit;
            foreach($list as $k=>$v){
                $id[$k] = $v['uid'];
                

            }
            $ii['uid'] = $id;
            foreach ($list as $k => $v) {
                # code...
                $dd[$k] = $v['fid'];
            }
            $ii['fid'] = $dd;

            foreach($ii['uid'] as $k=>$v){
                if($v!=$uid){
                    $aa[]=$v;
                }
            }
            foreach($ii['fid'] as $k=>$v) {
                if($v!=$uid){
                    $aa[]=$v;
                }
            }
            $aa = array_unique($aa);
            // dump($aa);
            foreach($aa as $k=>$v){

             $ulist[] = M("ucenter_members")->field("cia_ucenter_members.username,cia_ucenter_members.uid,cia_ucenter_members.face,cia_ucenter_members_info.declaration")->join("cia_ucenter_members_info on cia_ucenter_members.uid=cia_ucenter_members_info.uid")->where("cia_ucenter_members.uid='{$v}'")->select();
            }

            $list = M("beizhu")->field("cia_ucenter_members.username,cia_beizhu.bname")->join("cia_ucenter_members on cia_ucenter_members.uid=cia_beizhu.uid")->where("cia_beizhu.uid=$uid")->select();
             // dump($list);exit;
            
             $this->ajaxReturn(array("code"=>200,"list"=>$ulist,"data"=>$list));
           
          
        
           

           
           
        }
  
  
  //首页服务员详情
    public function fuwuyuanxq() {
        $fuwuyuanxq = M("user")->where("id=" . $_GET['id'])->find();
        if ($fuwuyuanxq) {
            $this->ajaxReturn(array("code" => 200, "data" => $fuwuyuanxq));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  
  //上传动态
    public function chuandt() {
      	$data['count'] = $_POST['nr'];
     	$data['uid'] = $_POST['uid'];
     	$data['image'] = $_POST['img'];
     	$data['addtime'] = date('Y-m-d');
        $fuwuyuanxq = M("grdt")->add($data);
        if ($fuwuyuanxq) {
          	 $bases['fbzt'] = 1;
          	 M("user")->where('id='.$_POST['uid'])->save($bases);
            $this->ajaxReturn(array("code" => 200, "data" => $fuwuyuanxq));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }


        // 上传图片

    public function uploads() {

        $res = [];

        $upload = new \Think\Upload(); // 实例化上传类

        $upload->maxSize = 991457666628; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->saveName = array('uniqid',mt_rand(), array('', true));

        // 采用GUID序列命名

        $upload->saveName = md5();

        // 上传文件 

        $info = $upload->upload();

        if (!$info) {// 上传错误提示错误信息

            $res = [

                "statu" => 0

            ];

        } else {// 上传成功
            

            $res = [

                "statu" => 1,

                "path" => $info["image"]["savepath"] . $info["image"]["savename"]

            ];
            
        }

        $this->ajaxReturn($res, "json");

    }
//多涂上chuan 
      public function tuploads() {
        $res = [];
        $uid = $_POST['uid'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     314572800 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            // dump($file);
            foreach ($info as $key=>$file) {
                
                
            $data['image1'] = $file['savepath'] . $file['savename'];
            $data['image2'] = $file['savepath'] . $file['savename'];
            $data['image3'] = $file['savepath'] . $file['savename'];
            $data['image4'] = $file['savepath'] . $file['savename'];
            $data['image5'] = $file['savepath'] . $file['savename'];
            $data['image6'] = $file['savepath'] . $file['savename'];
            
            
            }

            $data = M("ucenter_members_info")->where("uid=$uid")->find();
            $uu = M("ucenter_members_info")->where("uid=$uid")->save($data);
            // dump($uu);
            if($uu){
                $res =[
                    "statu" => 1
                ];
            }else{
                $res =[
                    "statu" => 0
                ];
            }
        // if (!$info) {// 上传错误提示错误信息

        //     $res = [

        //         "statu" => 0

        //     ];

        // } else {// 上传成功
            

        //     $res = [

        //         "statu" => 1,

        //         "path" => 'Public/' . $info["image"]["savepath"] . $info["image"]["savename"]

        //     ];
            
        // }

        // $this->ajaxReturn($res, "json");

        }
    }



      //upface
      public function upface()
        {
            $User = M("ucenter_members"); 
            $uid = $_POST['uid'];
            $data['face'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $conditionuser['a.uid'] = "$uid";

                $conditionuser['b.uid'] = "$uid"; 

                $myinfo = M()->table(array('cia_ucenter_members'=>'a','cia_ucenter_members_info'=>'b'))->scope(array('field'=>'a.uid,a.sex,a.username,a.phone,a.face,b.birthday,b.stature,b.revenue,b.asset,b.interest,b.place,b.declaration'))->where($conditionuser)->find();
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功","data"=>$myinfo));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        }   

         //upimg1
      public function upimg1()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image1'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        public function upimg2()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image2'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        public function upimg3()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image3'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        public function upimg4()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image4'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        public function upimg5()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image5'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        public function upimg6()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image6'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        } 

        //我的相册图片
        public function upath()
        {
            $User = M("ucenter_members_info"); 
            $uid = $_POST['uid'];
            $data['image1'] = $_POST['faceus'];
            $whe['uid'] = $uid;
            $User->where($whe)->save($data); 
            if($User){
                $this->ajaxReturn(array("code"=>200,"msg"=>"上传成功"));
            }else{
                $this->ajaxReturn(array("code"=>500,"msg"=>"上传err"));

            }
        }  



//修改密码
    public function xgmm()
        {
            $uid = $_POST['uid'];
            
            $User = M("ucenter_members")->where("uid = $uid")->find(); 


            $password = $_POST['password'];
            // dump($salt);exit;
            $addinfo['password'] = $password;
            $addinfo['salt'] = $_POST['salt'];


            M("ucenter_members")->where("uid = $uid")->save($addinfo); 

            if ($User) {
                $this->ajaxReturn(array('code'=>200));
            }
        }    

    //逻辑判断加好友 
    public function shenhe(){
        $uid = $_POST['uid'];
        // $uid = 876116;
        $list = M("ucenter_members")->where("uid='{$uid}'")->find();
        $list1 = M("ucenter_members_info")->where("uid='{$uid}'")->find();
        // dump($list);
        if($list1['status']!=2){
            //审核头像成功
            //判断性别
            if($list['sex']=='男'){
                if($list1['status']==3){
                    //通过
                    $this->ajaxReturn(array('code'=>200));
                }else{
                    //资料未完善
                    $this->ajaxReturn(array('code'=>400));
                }
            }
            else{
                //为女
                if($list['sex']=='女'){
                    if($list1['status']==1){
                        $this->ajaxReturn(array('code'=>200));//审核未通过
                    }else if($list1['status']==0){
                        $this->ajaxReturn(array('code'=>400));//资料未完善
                    }
                }
                
            }
        }else{
             if($list['sex']=='女'){
                 $this->ajaxReturn(array('code'=>200));
             }
             else if($list['sex']=='男'){
                 $this->ajaxReturn(array('code'=>300));
             }else{
                 //审核未通过
                $this->ajaxReturn(array('code'=>400));
             }
           }
    }        

      




     //逻辑判断加好友 
    public function adfr(){
        $uid = $_POST['uid'];
        $fid = $_POST['targetId'];
        // $uid = 876116;
        $list = M("ucenter_members")->where("uid='{$uid}'")->find();
        $list1 = M("ucenter_members_info")->where("uid='{$uid}'")->find();
        // dump($list);
        $arr = M("ucenter_members_friends")->field("uid,fid")->where("uid=$uid || fid=$uid")->select();
        // dump($arr);

            foreach($arr as $k=>$v){
                $id[$k] = $v['uid'];
            }
            // dump($id);
            $ii['uid'] = $id;
            foreach ($arr as $k => $v) {
                # code...
                $dd[$k] = $v['fid'];
            }
            $ii['fid'] = $dd;
      
            
            foreach($ii['uid'] as $k=>$v){
                // dump($v);
                if($v==$fid){
                    $this->ajaxReturn(array('code'=>300));
                }
            }
            foreach($ii['fid'] as $k=>$v){ 
                // dump($v);
                if($v==$fid){
                    $this->ajaxReturn(array('code'=>300));
                }
            }



            if($list['sex']=='男'){
                if($list1['status']==3){
                    //通过
                    $this->ajaxReturn(array('code'=>200,'data'=>$ii));
                }else{
                    //资料未完善
                    $this->ajaxReturn(array('code'=>400));
                }
            }else{
             // if($list['sex']=='女'){
                 $this->ajaxReturn(array('code'=>200,'data'=>$ii));
           }


            
           
    }


    public function search()
    {
         $uid = $_POST['uid'];
        $fid = $_POST['targetId'];
        // $uid = 876116;
        $list = M("ucenter_members")->where("uid='{$uid}'")->find();
        $list1 = M("ucenter_members_info")->where("uid='{$uid}'")->find();
        // dump($list);
        $arr = M("ucenter_members_friends")->field("uid,fid")->where("uid=$uid || fid=$uid")->select();
        // dump($arr);
        // M("ucenter_members")->field()->where("uid=$uid")->find();
        $list2 = M("ucenter_members")->where("uid='{$fid}'")->find();

            foreach($arr as $k=>$v){
                $id[$k] = $v['uid'];
            }
            // dump($id);
            $ii['uid'] = $id;
            foreach ($arr as $k => $v) {
                # code...
                $dd[$k] = $v['fid'];
            }
            $ii['fid'] = $dd;
      
            
            foreach($ii['uid'] as $k=>$v){
                // dump($v);
                if($v==$fid){
                    $this->ajaxReturn(array('code'=>300));
                }
            }
            foreach($ii['fid'] as $k=>$v){ 
                // dump($v);
                if($v==$fid){
                    $this->ajaxReturn(array('code'=>300));
                }
            }

            if($list2){
                if($list['sex']=='男'){
                if($list1['status']==3){
                    //通过
                    if($list2['sex']=='女'){
                        $this->ajaxReturn(array('code'=>200));
                    }else{
                        $this->ajaxReturn(array('code'=>600));
                    }
                    
                }else{
                    //资料未完善
                    $this->ajaxReturn(array('code'=>400));
                }
                }else{
                     if($list['sex']=='女'){
                        $this->ajaxReturn(array('code'=>200));
                     }else{
                        $this->ajaxReturn(array('code'=>600));
                     }
                     
               }
            }else{
                     $this->ajaxReturn(array('code'=>600));
            }

            
    }        

    //注销帐号
    public function zhuxiaozh()
    {
        # code...
        $uid = $_POST['uid'];

        // $addinfo['status'] = 5 ;
        $data['uid'] = $uid;
        $data['zxtime'] = time();
        $whe['uid'] = $uid;
        $id = M("ucenter_members")->where($whe)->find();
        // $wher['id'] = $id['id'];
        $data['username'] = $id['username'];
        $data['regtime'] = $id['regdate'];
        $data['face'] = $id['face'];
        $bb = M("zhuxiao")->add($data);
        $User = M("ucenter_members_info")->where("uid = $uid")->delete(); 
        $frd = M("ucenter_members_friends")->where("uid=$uid || fid=$uid")->select();
        $hongniang = M("hongniang2")->where("u_id='{$uid}' || p_id='{$uid}'")->select();
        // dump($hongniang);exit;
        foreach($frd as $k=>$v){
           M("ucenter_members_friends")->delete($v['id']);

        }
        foreach($hongniang as $k=>$v){
             M("hongniang2")->delete($v['id']);
        }
        
        $User = M("ucenter_members")->where("uid = $uid")->delete(); 

        if ($User) {
            $this->ajaxReturn(array('code'=>200));
        }
    }
    //判断是否注销
    public function zhuxiao()
    {
        # code...
        $uid = $_POST['uid'];

        // $addinfo['status'] = 5 ;

        $User = M("zhuxiao")->where("uid = $uid")->find(); 
        // $data['uid'] = $uid;
        // $data['username'] = $User['username'];
        // $data['regtime'] = time();
        // $data['zxtime'] = time();

        if ($User) {
            // M("zhuxiao")->add($data);
            $this->ajaxReturn(array('code'=>200));
        }else{
            $this->ajaxReturn(array('code'=>400)); 
        }
    }

    //封停
    public function fengting()
    {
        # code...
        $uid = $_POST['uid'];
        $list = M("ucenter_members_info")->where("uid=$uid and status=5")->find();
        if($list){
            $this->ajaxReturn(array('code'=>200)); 
        }else{
            $this->ajaxReturn(array('code'=>400)); 
        }
    }


    //意见反馈
    public function yjfk()
    {
        # code...
        $uid = $_POST['uid'];

        $yijian = $_POST['yijian'];

        $addinfo['u_id'] = $uid ;

        $addinfo['content'] = $yijian ;

        $addinfo['addtime'] = time();

        $User = M("fankui")->add($addinfo); 

        if ($User) {
            $this->ajaxReturn(array('code'=>200));
        }
        
    }

    //开通会员改变状态
    public function staa()
    {
        $uid = $_POST['uid'];
       

            $list = M("ucenter_members_info")->where("uid=$uid")->find();
            $list['status']=3;
            if(M("ucenter_members_info")->where("uid=$uid")->save($list)){
                 $this->ajaxReturn(array('code'=>200));
            }
       
        // $uid = 985778;
        
    }

    //会员到期后改变状态
    public function ustat()
    {
        # code...
        $uid = $_POST['uid'];
        $list = M("ucenter_membertime")->where("userid=$uid")->find();
        if($list){
            $time = $list['addtime']+$list['langtime'];
        $timer = time();
            if($timer>$time){
                if(M("ucenter_members_info")->where("uid=$uid")->setField('status',2)){
                 $this->ajaxReturn(array('code'=>200));//200是会员已到期
                }else{
                     $this->ajaxReturn(array('code'=>400));//400是错误
                }
            }else{
                $this->ajaxReturn(array('code'=>600));//600是没过期
            }
        }else{
            $this->ajaxReturn(array('code'=>800));//非会员
        }
        
            
           
    }

    //群组成员昵称
    public function chaqunmena()
    {
        $uid = $_POST['uid'];
        $name = M('ucenter_members')->where("uid=$uid")->find();
        $this->ajaxReturn(array('code'=>200,'name'=>$name));
    }

    //群管理验证
    public function qunguan()
    {
        $uid = $_POST['uid'];
        $name = M('guanliqun')->where("uid=$uid")->find();
        $this->ajaxReturn(array('code'=>200,'name'=>$name));

    }
    //群名字
    public function quname()
    {
        $id = 1;
        $name = M('quname')->where("id=$id")->find();
        $this->ajaxReturn(array('code'=>200,'name'=>$name));

    }
    //资料
    public function ziliao(){
        $uid = $_POST['uid'];
        // dump($uid);
        $list = M("ucenter_members_info")->field("cia_ucenter_members_info.*,cia_ucenter_members.username as name,cia_ucenter_members.sex as sex1,cia_ucenter_members.lastlogintime")->join("cia_ucenter_members on cia_ucenter_members.uid=cia_ucenter_members_info.uid")->where("cia_ucenter_members_info.uid=$uid")->find();
        // $list['age'] = $this->birthday($list['birthday']);
        // $list['sentTime'] = time()-$list['lastlogintime'];
        // dump($list);
        $this->ajaxReturn(array('code'=>200,'list'=>$list));
    }


    //群表加群接口
    public function qun()
    {
        # code...
        $uid = $_POST['uid'];
        $data['uid'] = $uid;
        $list = M('qun')->where("uid=$uid")->find();
        if(!$list){
            if(M("qun")->add($data)){
                $this->ajaxReturn(array('code'=>200));
            }
        }else{
               $this->ajaxReturn(array('code'=>100));
        }

    }

     //tongji
    public function tongji()
    {
        $list = M('ucenter_members')->count();
        $whe['sex'] = "女";
        $whee['status'] = 3;
        $list1 = M('ucenter_members')->where($whe)->count();
        $list2 = M('ucenter_members_info')->where($whee)->count();
        if($list){
                $this->ajaxReturn(array('code'=>200,'data'=>$list,'whe'=>$list1,'whee'=>$list2));
            
        }else{
               $this->ajaxReturn(array('code'=>100));
        }

    }

    //判断男女开通会员
    public function pan(){
        $uid = $_POST['uid'];
        $nan = M("ucenter_members")->where("uid=$uid")->find();
        $mm = M("ucenter_members_info")->where("uid=$uid")->find();

        
        if($nan['sex']=='男'){
            // if($mm['status']==0){
            //      $this->ajaxReturn(array('code'=>100));//未完善资料
            // }else if($mm['status']==1){
            //      $this->ajaxReturn(array('code'=>600));//头像未审核
            // }else if($mm['status']==2){
            //      $this->ajaxReturn(array('code'=>200));
            // }else{
            //      $this->ajaxReturn(array('code'=>200));
            // }
            $this->ajaxReturn(array('code'=>200));
           
        }else{
            $this->ajaxReturn(array('code'=>300));//女的直接成功
        }

    }

    //     public function pan(){
    //     $uid = $_POST['uid'];

    //     // $uid = 876116;
    //     $list = M("ucenter_members")->where("uid='{$uid}'")->find();
    //     $list1 = M("ucenter_members_info")->where("uid='{$uid}'")->find();
    //     // dump($list);
    //     if($list1['status']!=2){
    //         //审核头像成功
    //         //判断性别
    //         if($list['sex']=='男'){
    //             if($list1['status']==3){
    //                 //通过
    //                 $this->ajaxReturn(array('code'=>200));
    //             }else if($list1['status']==1){
    //                 //头像未审核
    //                 $this->ajaxReturn(array('code'=>100));
    //             }else if($list1['status']==0){
    //                 //资料未完善
    //                 $this->ajaxReturn(array('code'=>400));
    //             }
    //         }
    //         else{
    //             //为女
    //             if($list['sex']=='女'){
    //                 if($list1['status']==1){
    //                     $this->ajaxReturn(array('code'=>400));//审核未通过
    //                 }else if($list1['status']==0){
    //                     $this->ajaxReturn(array('code'=>400));//资料未完善
    //                 }
    //             }
                
    //         }
    //     }else{
    //          if($list['sex']=='女'){
    //              $this->ajaxReturn(array('code'=>200));
    //          }
    //          else if($list['sex']=='男'){
    //              $this->ajaxReturn(array('code'=>300));
    //          }else{
    //              //审核未通过
    //             $this->ajaxReturn(array('code'=>400));
    //          }
           
    //        }
    // }  

    //好友删除
    public function dele()
    {
        # code...
        $uid = $_POST['uid'];
        $fid = $_POST['targetId'];
        $id1 = M("ucenter_members_friends")->field("id")->where("uid=$uid&&fid=$fid")->find();
        $id2 = M("ucenter_members_friends")->field("id")->where("uid=$fid&&fid=$uid")->find();
        $del1 = M("ucenter_members_friends")->delete($id);
        $del2 = M("ucenter_members_friends")->delete($id1);
        if($del1||$del2){
            $this->ajaxReturn(array('code'=>200));
        }else{
            $this->ajaxReturn(array('code'=>400));
        }
    }
    //同城广告添加
    public function guanggao()
    {
        # code...
        $list = M("guanggao")->find();
        $this->ajaxReturn(array('code'=>200,'data'=>$list));
    }

    //加红娘为好友
    public function addhn()
    {
        # code...
        $data['uid'] = $_POST['uid'];

        $data['fid'] = 965619;
        $data['addtime'] = time();
        $add = M("ucenter_members_friends")->where("uid='{$data['uid']}' && fid=725119")->find();
        if($add){
            $this->ajaxReturn(array('code'=>100));
        }else{
             if(M("ucenter_members_friends")->add($data)){
            $this->ajaxReturn(array('code'=>200));
        }
        }
       
    }

    public function beizhu(){

        $uid = $_POST['uid'];
        $pid = $_POST['pid'];
        $user = M("beizhu")->field('bname')->where("uid=$uid && pid=$pid")->find();
        // dump($user);
        // foreach($user as $k=>$v){
           
        //     // var_dump($v);
        //     $list = M("beizhu")->field('bname')->where("pid=$v['pid']")->find();

        // }
         $this->ajaxReturn(array('code'=>200,'data'=>$user));
       
    }

    public function adbz(){
        $data['uid'] = $_POST['uid'];
        $data['pid'] = $_POST['pid'];
        $data['bname'] = $_POST['bname'];
        $beizhu = M("beizhu")->where("uid='{$data['uid']}' && pid='{$data['pid']}'")->find();
        if($beizhu){
            $bname = M("beizhu")->where("uid='{$data['uid']}' && pid='{$data['pid']}'")->setField('bname',$data[
                'bname']);
             if($bname){
                 $this->ajaxReturn(array('code'=>400));
                }else{
                    $this->ajaxReturn(array('code'=>600));
            }
        }else{
           
            if(M("beizhu")->add($data)){
             $this->ajaxReturn(array('code'=>200));
            }
        }
    }
  


    public function hongniang(){
        $data['u_id'] = $_POST['uid'];
        $data['p_id'] = $_POST['fid'];
        if(M("hongniang")->add($data)){
            $this->ajaxReturn(array('code'=>200));
        }
    }

    public function hongniang2(){
        $uid = $_POST['uid'];
        $hong = M("hongniang")->field('u_id')->where("p_id=$uid")->select();
        foreach($hong as $k=>$v){
            // dump($v);
           $list[] = M("ucenter_members")->field('username,uid,face')->where("uid='{$v['u_id']}'")->find();
        }
        // dump($list);
       $this->ajaxReturn(array('code'=>200,'data'=>$list));
    }


    public function adhong(){
        $data['u_id'] = $_POST['uid'];
        $data['p_id'] = $_POST['fid'];
        $data['status'] = 1;
        $whe['u_id'] = $_POST['fid'];
        $whe['p_id'] = $_POST['uid'];
        $id = M("hongniang")->where($whe)->find();
        $wher['id'] = $id['id'];
        $bb = M("hongniang2")->add($data);
        $aa = M("hongniang")->where($wher)->find();
// echo $id['id'];
        // dump($wher);
        if($bb){
            M("hongniang")->where($wher)->delete();
                 $this->ajaxReturn(array('code'=>200,'data'=>$id));
        }else{
            $this->ajaxReturn(array('code'=>600,'data'=>$aa));
        }

    }

public function juhong()
    {
        $data['u_id'] = $_POST['uid'];
        $data['p_id'] = $_POST['fid'];
        $data['status'] = 0;
        $whe['u_id'] = $_POST['fid'];
        $whe['p_id'] = $_POST['uid'];
        $id = M("hongniang")->where($whe)->find();
        $wher['id'] = $id['id'];
        $bb = M("hongniang2")->add($data);
        $aa = M("hongniang")->where($wher)->find();
// echo $id['id'];
        // dump($wher);
        if($bb){
            M("hongniang")->where($wher)->delete();
                 $this->ajaxReturn(array('code'=>200,'data'=>$id));
        }else{
            $this->ajaxReturn(array('code'=>600,'data'=>$aa));
        }
        
    }   
      // 赠送三天会员
        public function songvip(){
            $uid=I("post.uid");
            $data['langtime']= 259200;
            $data['addtime']= time();
            $data['userid']= $uid;
           $res= M("ucenter_membertime")->add($data);
           if($res){
             $this->ajaxReturn(array('code'=>200));
           }else{
             $this->ajaxReturn(array('code'=>201));
           }
      
        }

        public function ifisnew(){
           $uid=I("post.uid");
           $res= M("ucenter_members")->where("uid='$uid'")->find();
         if($res['sex']=="男" ){
            $rest= M("ucenter_membertime")->where("userid='$uid'")->find();
            if(!$rest){
                 $this->ajaxReturn(array('code'=>200));
            }else{
                $or=$rest['addtime']+$rest['langtime'];
               $time= time();
                if($or >  $time){
                  $this->ajaxReturn(array('code'=>204));
                }else{
                  $this->ajaxReturn(array('code'=>201));

                 }
              }
            }else{
                 $this->ajaxReturn(array('code'=>203));
            }
           }
        
        


    






    

    }