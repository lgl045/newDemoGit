<?php
/**
 * @copyright Copyright (c) 2008 – 2019 www.qgnix.cn
 * @author 趣构项目开发团队
 * @package tp3.2
 * create date 2018年12月7日
 */
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {

  
      //距离排序
 public function juli(){
        $lat = $_POST['lat'];
        $lon = $_POST['lon'];
        $myLocation = $lon.','.$lat;

    $ress = M('fbjn')->order('id desc')->limit($_POST['x'],$_POST['y'])->select();
    foreach($ress as $k=>$v){
    	$ress[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$ress[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }

   

       foreach($ress as $key=>$value){
         
        $value['juli']=$value['userinfo']['lon'].','.$value['userinfo']['lat'];
        $newData[$key] = $ress[$key];
         
        $newData[$key]['distance'] = distanceBetween($myLocation, $value['juli']);
       }

         $distance = array();
      foreach($newData as $key){
       $distance[]=$key["distance"];
      }
      array_multisort($distance, SORT_ASC, $newData);

   		if($newData){
        $this->ajaxReturn(array("code" => 200,'data'=>$newData));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }

 
 
 }
  
  
    //人气排序
 public function rqpx(){
    $res = M('fbjn')->order('rq desc')->limit($_POST['x'],$_POST['y'])->select();
    foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
 
 }
    //添加人气
 public function rqadd(){
   $res= M("fbjn")->where("id=".$_POST['uid'])->find();
   $data['rq']=$res['rq']+1;
   $rr=M("fbjn")->where("id=".$_POST['uid'])->save($data);
      		if($rr){
              $this->ajaxReturn(array("code" => 200));
            }else{
              $this->ajaxReturn(array("code" => 404));
            }
 
 }
  //智能排序
 public function znpx(){
    $res = M('fbjn')->order('id asc')->limit($_POST['x'],$_POST['y'])->select();
    foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
 
 }
       //修改年龄
 public function getages(){
		$data['age']=$_POST['age'];
  		$res = M("user")->where("id=".$_POST['id'])->save($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  }
  //获取个人年龄
  public  function getage(){
    $res = M('user')->where("id=".$_POST['id'])->getField("age");   
   	if($res){
    	$this->ajaxReturn(array('code'=>200,'data'=>$res));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
  }
    //网红拉流
    public function wpushurl(){
   	$res = M('zb')->where("id=".$_POST['id'])->getField("palurl");   
   	if($res){
    	$this->ajaxReturn(array('code'=>200,'data'=>$res));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
  }
  
      //获取在播网红列表
  public function getwh(){
   	if($res = M('zb')->where("palurl !=''")->select()){
          $this->ajaxReturn(array("code" => 200,"data"=>$res));
    
    }else{
 $this->ajaxReturn(array("code" => 404));
    }
  }
    //网红推流
  public function wpalurl(){
    $data['palurl']=$_POST['palurl'];
   	$res = M('zb')->where("id=".$_POST['id'])->save($data);
   	if($res){
    	$this->ajaxReturn(array('code'=>200));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
  }
  //开始直播
  public function kszb(){
    if(M("zb")->where("uid=".$_POST['uid'])->find()){
      	$datas['fm'] = $_POST['sfzs'];//
    	$datas['title'] = $_POST['title'];//
      	$datas['addtime'] = date('Y-m-d H:i:s');
      	$res = M("zb")->where("uid=".$_POST['uid'])->save($datas);
        $da= M("zb")->where("uid=".$_POST['uid'])->find();
        $this->ajaxReturn(array("code" => 200,"data"=>$da));
    }
  		$data['fm'] = $_POST['sfzs'];//
    	$data['title'] = $_POST['title'];//
        $data['uid'] = $_POST['uid'];//
    	$data['addtime'] = date('Y-m-d H:i:s');
  		$res = M("zb")->add($data);
   		if($res){
         $da= M("zb")->where("id=".$res['id'])->find();
          $this->ajaxReturn(array("code" => 200,"data"=>$da));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  }
  //网红认证
  public function whrz(){
    	$data['sfz'] = $_POST['sfzs'];//
    	$data['whxk'] = $_POST['whzs'];//  
    	$data['zsxm'] = $_POST['username'];//
    	$data['hm'] = $_POST['hm'];//
        $data['uid'] = $_POST['uid'];//
    	$data['addtime'] = date('Y-m-d H:i:s');
   		$data['stat'] = 0;
  		$res = M("wh")->add($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  
  }
  //判断是否认证
  public function ifrz(){
   	if( M('wh')->where("uid=".$_POST['id']." and stat=1")->find()){
    	$this->ajaxReturn(array('code'=>200));
    }else{
    	$tis->ajaxReturn(array('code'=>404));
    }
  }
  //推流
  public function palurl(){
    $data['palurl']=$_POST['palurl'];
   	$res = M('sxy')->where("id=".$_POST['id'])->save($data);
   	if($res){
    	$this->ajaxReturn(array('code'=>200));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
  }
  //拉流
    public function pushurl(){
   	$res = M('sxy')->where("id=".$_POST['id'])->getField("palurl");   
   	if($res){
    	$this->ajaxReturn(array('code'=>200,'data'=>$res));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
  }
  
  
 public function guyon(){
 	$res = M('guyong')->field('id,xqyxq,xqys')->select();
   	if($res){
    	$this->ajaxReturn(array('code'=>200,'data'=>$res));
    }else{
    	$this->ajaxReturn(array('code'=>404));
    }
 }
  //我购买的课程
 public function gmkc(){
		$uid=$_POST['uid'];
  		$res = M("gmjl")->where("uid='$uid'")->select();
       foreach($res as $k=>$v){
    	$res[$k]['sxy'] = M('sxy')->where("id= '{$v['kid']}' ")->find();   
       	$res[$k]['pic'] = M('user')->where("id= '{$res[$k]['sxy']['uid']}' ")->getField("pic");   
    }
   		if($res){
          $this->ajaxReturn(array("code" => 200,"data"=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  }
  //我发布的课程
  public function mefbkc(){
  		$uid=$_POST['uid'];
   		if($res=M("sxy")->where("stat=1")->where("uid='$uid'")->select()){
                 foreach($res as $k=>$v){
          	$res[$k]['pic'] = M('user')->where("id= '{$v['uid']}' ")->getField("pic");   
    }
   	
          $this->ajaxReturn(array("code" => 200,"data"=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  }
     //修改性别
 public function savesix(){
		$data['six']=$_POST['xb'];
  		$res = M("user")->where("id=".$_POST['id'])->save($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  }
   //雇佣距离最近
     public function gyzj(){
       
        $lat = $_POST['lat'];
        $lon =$_POST['lon'];
        $myLocation = $lon.','.$lat;
    $res = M('fbjn')->limit(1,10)->where("fwpl=2")->order('id desc')->select();
    foreach($res as $k=>$v){
    	$res[$k]['lat'] = M('user')->where("id= '{$v['uid']}' ")->getField("lat");   

           $res[$k]['username'] = M('user')->where("id= '{$v['uid']}' ")->getField("username");
            $res[$k]['pic'] = M('user')->where("id= '{$v['uid']}' ")->getField("pic");        
            $res[$k]['uid'] = M('user')->where("id= '{$v['uid']}' ")->getField("id");
        $res[$k]['lon'] = M('user')->where("id= '{$v['uid']}' ")->getField("lon");
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
    foreach($res as $ks=>$vs){
    	if($vs['lat']==null || $vs['lat']=="" ){
        }else{
        $ress[$ks]=$vs;
        }
    }
            foreach($ress as $key=>$value){
        $value['juli']=$ress[$key]['lon'].','.$ress[$key]['lat'];
        $newData[$key] = $ress[$key];
        $newData[$key]['distance'] = distanceBetween($myLocation, $value['juli']);
       }
         $distance = array();
      foreach($newData as $key){
       $distance[]=$key["distance"];
      }
      array_multisort($distance, SORT_ASC, $newData);

   		if($newData){
        $this->ajaxReturn(array("code" => 200,'data'=>$newData));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
  
  
  
  //用户状态0为推广员 1为城市站长 2为合伙人
public function cstat(){
  $res = M("user")->field('id,cstat')->where('id='.$_POST['id'])->find();
    if($res['cstat'] == 0){
    	$this->ajaxReturn(array("code" => 200));
    }else if($res['cstat'] == 1){
     	$this->ajaxReturn(array("code" => 201));
    }else if($res['cstat'] == 2){
      	$this->ajaxReturn(array("code" => 202));
    }else{
    	$this->ajaxReturn(array("code" => 404));
    }
}
  //遍历需求
public function xqbl(){
  
    $x=$_POST['x'];
    $y=$_POST['y'];
	$res = M("fbxq")->order('id desc')->limit($x,$y)->select();
  foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
          $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
    //我的需求
public function wdxq(){
   $x=$_POST['x'];
    $y=$_POST['y'];
    $uid=$_POST['uid'];
	$res = M("fbxq")->where("uid='$uid'")->limit($x,$y)->select();
  foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
  
  //一级分销
  public function yjfx(){
		$res = M("user")->where("fid=".$_GET['uid'])->select();
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
 
  

//遍历技能
  public function jnbl(){
	//$res = M()->table(array('qm_fbjn'=>'a','qm_user'=>'b'))->where('a.uid='.$_POST['id'].' and a.uid = b.id')->scope(array('field'=>'a.*,b.*'))->select();
    //foreach($res as $k=>$v){
    //	$res[$k]['jname'] = M('jineng')->where('id='.$res[$k]['fwpl'])->getField('jname');
    //}
    $res = M('fbjn')->where('fwpl='.$_POST['id'])->limit($_POST['x'],$_POST['y'])->select();
    foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
  
   public function jnblall(){
	//$res = M()->table(array('qm_fbjn'=>'a','qm_user'=>'b'))->where('a.uid='.$_POST['id'].' and a.uid = b.id')->scope(array('field'=>'a.*,b.*'))->select();
    //foreach($res as $k=>$v){
    //	$res[$k]['jname'] = M('jineng')->where('id='.$res[$k]['fwpl'])->getField('jname');
    //}
    $res = M('fbjn')->order('id desc')->limit($_POST['x'],$_POST['y'])->select();
    foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
  
  public function jnblyl(){
	//$res = M()->table(array('qm_fbjn'=>'a','qm_user'=>'b'))->where('a.uid='.$_POST['id'].' and a.uid = b.id')->scope(array('field'=>'a.*,b.*'))->select();
    //foreach($res as $k=>$v){
    //	$res[$k]['jname'] = M('jineng')->where('id='.$res[$k]['fwpl'])->getField('jname');
    //}
    $res = M('fbjn')->where('fwpl=9 or fwpl=8 or fwpl=7 or fwpl=6 or fwpl=5 or fwpl=4 or fwpl=3 or fwpl=2 or fwpl=1')->order('id desc')->limit($_POST['x'],$_POST['y'])->select();
    foreach($res as $k=>$v){
    	$res[$k]['userinfo'] = M('user')->where('id='.$v['uid'])->find();
		$res[$k]['jname'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
   		if($res){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
 
}
  
  
    //充值明细
  public function czmx(){
       $id=$_POST['uid'];
    if($data =M("user")->where("id ='$id'")->select()){
          foreach($data as $k=>$v){
        $data[$k]['zf'] = M('txqq')->where("id='{$v['uid']}' and stat=2")->select();//支付明细
    }
       $this->ajaxReturn(array('code'=>200,'data'=> $data[$k]['zf']));
    }else{
       $this->ajaxReturn(array("code" => 404));
    }
}
    
    //提现明细
  public function txmx(){
       $id=$_POST['uid'];
    if($data =M("user")->where("id ='$id'")->select()){
          foreach($data as $k=>$v){
		$data[$k]['tx'] = M('txqq')->where("id='{$v['uid']}' and stat=1")->select();//提现明细
    }
       $this->ajaxReturn(array('code'=>200,'data'=>	$data[$k]['tx']));
    }else{
       $this->ajaxReturn(array("code" => 404));
    }
}


 //体现请求
 public function txqq(){
        $ff= M("user")->where("id=".$_POST['uid'])->find();
    	$data['uid'] = $_POST['uid'];
    	$data['money'] = $_POST['money'];//余额
    	$data['zfb'] = $_POST['zfb'];//支付宝账号
    	$data['addtime'] = date('Y-m-d H:i:s');
   		$data['stat'] = 0;
        $data['zt'] = 1;
  		$res = M("txqq")->add($data);
   		if($res){
          $mo['money']=$ff['money']-$data['money'];
          M("user")->where("id=".$_POST['uid'])->save($mo);
          $ffs= M("user")->where("id=".$_POST['uid'])->find();
          $this->ajaxReturn(array("code" => 200,'data'=>$ffs['money']));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  
  }
   //修改发布技能的值
 public function sjn(){
    	$data['id'] = $_POST['id'];
    	$data['fwjg'] = $_POST['fwjg'];
    	$data['fwnr'] = $_POST['fwnr'];
  		$res = M("fbjn")->save($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  
  }
  
     //修改精度 维度
 public function xjwd(){
    	$uid= $_POST['uid'];
    	$data['lat'] = $_POST['lat'];
    	$data['lon'] = $_POST['lon'];
       	$data['zd'] = time();
   		if(M("user")->where("id='$uid'")->save($data)){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
      }
  }
  //付款时--接口逻辑
       public function gmjk(){
        // @cstat 1为推广员2为城市站长3为城市合伙人
       //  期权股  1为0  2为 200  3为2000
         
         //以会员下级的身份看看自己充值多少  上级充了多少
         $uid=$_POST['uid'];//用户id
         $res=M("user")->where("id=".$uid)->find();
         if($res['cstat']==2){
           $sj=M("user")->where("fid=".$res['id'])->find();
           if($sj['cstat==1']){//如果上级状态为1
            $mys['money']=$sj['money']*0.1;//百分之十
           }else if($sj['cstat==2']){
            $mys['money']=$sj['money']*0.3;//百分之三十
           }else if($sj['cstat==3']){
            $mys['money']=$sj['money']*0.4;//百分之四十
           }
         }else if(($res['cstat']==3)){
            $sj=M("user")->where("fid=".$res['id'])->find();
            if($sj['cstat==3']){
             $mys['money']=$sj['money']*0.4;//百分之四十
           }
         }else if(($res['cstat']==1)){
             $sj=M("user")->where("fid=".$res['id'])->find();
              if($sj['cstat==1']){//如果上级状态为1
            $mys['money']=$sj['money']*0.1;//百分之十
           }else if($sj['cstat==2']){
            $mys['money']=$sj['money']*0.3;//百分之三十
           }else if($sj['cstat==3']){
            $mys['money']=$sj['money']*0.4;//百分之四十
           }
         }
         
           if(M("user")->where("id=".$sj['id'])->save($mys)){
               $this->ajaxReturn(array("code" => 200));//
           }else{
               $this->ajaxReturn(array("code" => 404));//
           }
   }

  //查询该分类需要诚意金么
     public function ifcyj(){
		$res=M("jineng")->where("id=".$_POST['jid'])->select();
      foreach($res as $k=>$v){
		$res[$k]['stat'] = M('fl')->where('id='.$v['pid'])->getField('stat');
  		  }
	  if($res['stat']==1){
          $this->ajaxReturn(array("code" => 200));//需要诚意金
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
   }

  //判断是否微信openid绑定没
   public function ifwx(){
		$data=M("user")->where("id=".$_POST['uid'])->find();
	  if($data['openid']){
        $this->ajaxReturn(array("code" => 200,'data'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
   }
    //判断是否完善身份证
   public function ifsfz(){
		$data=M("user")->where("id=".$_POST['uid'])->find();
	  if($data['statl']==1){
        $this->ajaxReturn(array("code" => 200));//以完善
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
   }
//判断用户发布过技能么
   public function ifjn(){
        $jid= $_POST['jid'];//技能id
        $uid= $_POST['uid'];//用户id
     if($data=M("fbjn")->where("uid='$uid' and fwpl='$jid'")->find()){
       $this->ajaxReturn(array("code" => 200,'data'=>$data));//已经发布过该技能
     }else{
      $this->ajaxReturn(array("code" => 404));
     }
   }

 //发布技能
 public function fwjn(){

    	$data['uid'] = $_POST['uid'];
    	$data['fwpl'] = $_POST['fid'];
    	$data['tus'] = $_POST['tus'];
    	$data['fwnr'] = $_POST['cont'];
    	$data['addtime'] = date('Y-m-d H:i:s');
   		$data['fwjg'] = $_POST['price'];
  		$res = M("fbjn")->add($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  
  }
  
    //发布需求
  public function fwxq(){
    	$data['uid'] = $_POST['uid'];
    	$data['fwpl'] = $_POST['fid'];

    	$data['fwnr'] = $_POST['cont'];
    	$data['addtime'] = date('Y-m-d');
   		$data['fwjg'] = $_POST['price'];
  		$res = M("fbxq")->add($data);
   		if($res){
          $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
  
  }
  //随机取三条服务信息
  public function fwxx(){
    $res = M("ry")->select();
       foreach($res as $k=>$v){
       	$res[$k]['zj'] = M('user')->where("id= '{$v['uid']}' ")->find();   
    }
   		if($res){
          $this->ajaxReturn(array("code" => 200,"data"=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
    
//  	$res = M("user")->limit(6)->order("rand()")->select();
//   		if($res){
//        $this->ajaxReturn(array("code" => 200,'data'=>$res));
//	    }else{
//	      $this->ajaxReturn(array("code" => 404));
//      }
  
  }
//身份认证
  public function save(){
        $data['sfz']=I("post.sfzz");
     	$data['sfzb']=I("post.sfzb");   
    	$data['sfzh']=I("post.sfzh"); 
    
      if($_POST['jineng']){
          $data['jineng']=$_POST['jineng']; 
      }

        $data['statl']=1;
        if(M("user")->where('id='.$_POST['uid'])->save($data)){
        $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
    }
  //通过uid获取余额和期权股
	 public function getye() {
        $res = M("user")->where("id=".$_POST['uid'])->find();
       $data['money']=$res['money'];
       if($res['cstat']==0){
           $data['qqg']=0.00;//期权股
       }else if($res['cstat']==2){
           $data['qqg']=200;//期权股
       }else if($res['cstat']==3){
           $data['qqg']=2000;//期权股
       }
        if ($res) {
            $this->ajaxReturn(array("code" => 200, "data" => $data));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  
  
//上传图片
  public function userq(){
        $data['pic']=I("post.pic");   
        if(M("user")->where('id='.$_POST['uid'])->save($data)){
        $this->ajaxReturn(array("code" => 200));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
    }
  
  
   	//获取轮播
	 public function lunbo() {
        $res = M("lb")->where("stat=".$_POST['id'])->select();
        if ($res) {
            $this->ajaxReturn(array("code" => 200, "data" => $res));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  

    function index() {
        $this->display();
    }
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //																			首页API
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //																			需求管理
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    
    /**
     *
     * @author test
     * 分类列表--selct
     */
    public function fllist() {
        $res = M("fl")->where("prentid=0")->order("id desc")->select();
        foreach ($res as $key => $value) {
            $res[$key]['zj'] = M("fl")->where("prentid={$value['id']}")->select();
        }
        if ($res) {
            $this->ajaxReturn(array("code" => 200, "data" => $res));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  
    /**
     *
     * @author test
     * 发布需求--add
     */
      public function fbxq() {
        $uid=$_GET['id'];
 	    $res=M("user")->where("id='$uid'")->find();
      if($_POST['cyj']!=0){
          if($res['money'] < $_POST['cyj']){
             $this->ajaxReturn(array("code" => 101));//无法使用诚意金--资金不足
          }
        }


        $data['stat'] = $_POST['stat'];
        $data['title'] = $_POST['title'];
        $data['nf'] = $_POST['nf'];
        $data['pfbz'] = $_POST['pfbz'];
        $data['kcsj'] = $_POST['kcsj'];
        $data['qy'] = $_POST['qy'];
        $data['money'] = $_POST['money'];
        $data['sfmoney'] = $_POST['sfmoney'];
        $data['pic'] = $_POST['pic'];
        $data['spsj'] = $_POST['spsj'];
        $data['bxlc'] = $_POST['bxlc'];
        $data['color'] = $_POST['color'];
        $data['bsx'] = $_POST['bsx'];
        $data['sh'] = 1;
        $data['qrdwz'] = $_POST['qrdwz'];
        $data['addtime'] = date('Y-m-d', time());
        $data['djz'] = $_POST['djz'];
        $data['njdq'] = $_POST['njdq'];
        $data['jqx'] = $_POST['jqx'];
        $data['syx'] = $_POST['syx'];
        $data['uid'] = $_POST['uid'];
        $data['cbq'] = $_POST['cbq'];
        if (M("qczy")->add($data)) {
            $this->ajaxReturn(array("code" => 200));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }

  
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //																			服务管理
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //分类获取以及分类属性
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //																			个人中心
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //.注册
    public function Reg() {
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $user = M('users');
        $retphone = $user->where("phone ='$phone'")->find();
        $retusername = $user->where("username ='$username'")->find();
        if (!empty($retphone)) { //.该手机号已被注册
            $this->ShowMsg(401);
        } else if (!empty($retusername)) { //.该用户名已被注册
            $this->ShowMsg(402);
        } else if ($user->add($_POST)) { //.注册成功
            $this->ShowMsg(200, '注册成功！');
        } else { //.注册失败
            $this->ShowMsg(403);
        }
    }
  
      //微信授权登录
  public function wxdl(){
         vendor('RongCloud.api');
             //引入融云模型
            $Model = new \RongCloud();
       $wxname=$_POST['wxname'];
       $header = [     
            'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:45.0) Gecko/20100101 Firefox/45.0',
            'Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3',
            'Accept-Encoding: gzip, deflate'
        ];  
        $url=$_POST['wximg'];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip');  
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        $data = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);curl_close($curl);  
        if($code == 200){//把URL格式的图片转成base64_encode格式的！      
           $imgBase64Code = "data:image/png;base64," . base64_encode($data);  
        }  
        $img_content=$imgBase64Code;//图片内容  
        if(preg_match('/^(data:\s*image\/(\w+);base64,)/', $img_content, $result)){   
        $type = $result[2];//得到图片类型png?jpg?gif?   
        $new_file1 = "uploads/".time()."-".mt_rand().".{$type}";   
        $new_file="Public/".$new_file1;
        file_put_contents($new_file, base64_decode(str_replace($result[1], '', $img_content))); 
        }
        $openid = $_POST['openid'];
        if($result =  M('user')->where("openid ='$openid'")->find()) { //判断是否存在openid
            $this->ajaxReturn(array("code" => 200, "id" => $result['id'], "token"=>$result['token'], "username" => $result['username'], "headurl" => $result['pic'],"openid" => $result['openid']));
       }else{
          //存openid
           $datas['openid']=$openid;
           $datas['pic']=$new_file1;
           $datas['addtime'] = date('Y-m-d H:i:s', time());
           $datas['username']=$wxname;
          if($id=M("user")->add($datas)){
            $result =  M('user')->where("id ='$id'")->find();
            $uid=$result['id'];
            $RegRongCloud = $Model->User()->getToken( $uid, $wxname, $new_file1);
            $jsonToArray = (array)json_decode( $RegRongCloud ); 
            $token['token'] = $jsonToArray['token'];
                        $token['six'] = $_POST['sex'];

            M("user")->where("id ='$id'")->save($token);
            $result =  M('user')->where("id ='$id'")->find();
            $this->ajaxReturn(array("code" => 200, "id" => $result['id'], "token"=>$result['token'], "username" => $result['username'], "headurl" => $result['pic'],"openid" => $result['openid']));
          }else{
           $this->ajaxReturn(array("code" => 404)); 	 
          }
       }
     }
        //给openid绑定手机号共和其他信息
     public function openphone(){
            vendor('RongCloud.api');
             //引入融云模型
            $Model = new \RongCloud();
            //APP服务器地址
           // $ServerUrl = 'http://jy.juhuaian.cn/Public/mr.jpg';
            $ServerUrl = 'mr.jpg';
            $openid=$_POST['openid'];
            $phone=$_POST['phone'];
            $username=$_POST['username'];
            //$username="sdrfsdf";
            //$phone="18660197688";
          //  $openid="onZKJ1NqedMB3-NaG1Mz60zazsgQ";
           $pic="mr.jpg";
           $datas['pic']=$pic;
           $datas['phone']=$phone;
           $datas['wstat']=1;
           $datas['username']=$username;
           $datas['password']= "e10adc3949ba59abbe56e057f20f883e";
       //如果
         if( $userinfo=M('user')->where("phone='$phone' and openid =''")->find()){
            $uid = $userinfo["id"];
            $RegRongCloud = $Model->User()->getToken( $uid, $username, $ServerUrl);
            $jsonToArray = (array)json_decode( $RegRongCloud ); 
            $token = $jsonToArray['token'];
            $code = $jsonToArray['code'];
			//其他注册
           if($code == '200'){//.将token写入数据表
             $addtoken['token'] = $token;
             $addtoken['openid']=$openid;
             $addtoken['pic']=$pic;
             //先删除微信授权add的值，重构其他注册原有值
             M("user")->where("openid ='$openid'")->delete();
             M("user")->where("phone ='$phone'")->save($addtoken);
               $data = array(
                 'token' => $token,
                 'phone' => $phone,
                 'id' => $uid,
                 'headurl' => $pic,
                 'username' =>$username
               );
             $this->ajaxReturn(array('code'=>200,'data'=>$data));
           }else{
             $this->ajaxReturn(array("code" => 404));
           }
         }else if($userinfo=M('user')->where("openid='$openid' and phone =''")->find()){
			//微信新授权
            $uid = $userinfo["id"];
            $RegRongCloud = $Model->User()->getToken( $uid, $username, $ServerUrl);
            $jsonToArray = (array)json_decode( $RegRongCloud ); 
            $token = $jsonToArray['token'];
            $code = $jsonToArray['code'];
            $datas['token']=$token;           
            $datas['addtime'] = date('Y-m-d H:i:s', time());
         if(M("user")->where("openid='$openid'")->save($datas)){
                $userinfo=M('user')->where("openid='$openid'")->find();
                $uid = $userinfo["id"];
                $data = array(
                       'token' => $token,
                       'phone' => $phone,
                       'id' => $uid,
                       'headurl' => $pic,
                       'username' =>$username
                     );
                     $this->ajaxReturn(array('code'=>200,'data'=>$data));
         		 }else{
                	 $this->ajaxReturn(array("code" => 404));
                }
       		    }else{
                     $this->ajaxReturn(array("code" => 404));
       		   }
     	}
  //通过uid 获取次数
  public function getcs(){
      $uid=$_POST['uid'];
    $list=M("user")->where("id='$uid'")->getField("xzts");
      if($list==1){
       $this->ajaxReturn(array('code'=>200));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
  }
  
	//搜索
  	public function sousuo(){
     	  $title = $_GET['title'];
      if($title){
        $this->ajaxReturn(array("code" => 404));
      }
    if($res=M("user")->where("fbzt>0 and fwxx like '%$title%' or fwjs like '%$title%' ")->order("id desc")->select()){
          foreach($res as $k=>$v){
    	$res[$k]['jn'] = M('fbjn')->where('uid='.$v['id'])->find();
    }
       $this->ajaxReturn(array('code'=>200,'data'=>$res));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
    }
  

      //添加商学院==刚进去就直接完善资料
public function tjsxy(){
       $uid=$_POST['uid'];
     if(!$uid){
        $this->ajaxReturn(array("code" => 401));//用户不存在
     }else{ 
       $data['kcjj']=$_POST['kcjj'];
       $data['zjs'] =$_POST['zjs'];
       $data['djj'] =1;
       $data['money']=$_POST['money'];
       $data['addtime'] = date('Y-m-d H:i:s', time());
       $data['lsjj']=$_POST['lsjj'];      
       $data['kcld']=$_POST['kcld'];
       $data['title']=$_POST['title'];
       $data['uid']=$_POST['uid'];
       if(M("sxy")->add($data)){
       $this->ajaxReturn(array("code" => 200));
       }
       $this->ajaxReturn(array("code" => 404));
     }
}
  
  //遍历商学院
  public function sxylist(){
        $x = $_POST['x'];
        $y = $_POST['y'];
    if($list=M("sxy")->where("stat=1")->order("id desc")->limit($x, $y)->select()){
     foreach($list as $k=>$v){
		$list[$k]['pics'] = M('user')->where("id='{$v['uid']}'")->getField('pic');
   

    }
      
       $this->ajaxReturn(array('code'=>200,'data'=>$list));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}
    //遍历商学院详情
  public function sxyxq(){
       $id=$_POST['uid'];
    if($data =M("sxy")->where("id ='$id' and stat =1")->select()){
          foreach($data as $k=>$v){
		$data[$k]['pics'] = M('user')->where("id='{$v['uid']}'")->getField('pic');
        $data[$k]['username'] = M('user')->where("id='{$v['uid']}'")->getField('username');
    }
       $this->ajaxReturn(array('code'=>200,'data'=>$data));
    }else{
       $this->ajaxReturn(array("code" => 404));
    }
}

  //遍历相亲列表
  public function xqlist(){ 
    $uid=$_POST['uid'];//没有完善过资料
    if(!M("xquser")->where("uid='$uid'")->find()){
        $this->ajaxReturn(array("code" => 401));
    }
        $x = $_POST['x'];
        $y = $_POST['y'];
    if($list=M("xquser")->order("id desc")->limit($x, $y)->select()){
          foreach($list as $k=>$v){
    	$list[$k]['pics'] = M('user')->where('id='.$v['uid'])->getField('pic');
	
    }
       $this->ajaxReturn(array('code'=>200,'data'=>$list));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}
  
    //遍历相亲单条
  public function xqdt(){ 
    $uid=$_POST['uid'];//没有完善过资料
    if(!$uid){
        $this->ajaxReturn(array("code" => 401));
    }
    if($list=M("xquser")->where("uid='$uid'")->select()){
            foreach($list as $k=>$v){
    	$list[$k]['pics'] = M('user')->where('id='.$v['uid'])->getField('pic');
	
    }
       $this->ajaxReturn(array('code'=>200,'data'=>$list));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}

    //完善资料
  public function xqadd(){ 
    $uid=$_POST['uid'];
    if(!$uid){
       $this->ajaxReturn(array("code" => 401));//用户不存在
    }
    $data['dq']=$_POST['jzd'];
    $data['uid']=$_POST['uid'];
    $data['age']=$_POST['nl'];
    $data['xb']=$_POST['xb'];

    $data['sg']=$_POST['sg'];
    $data['gz']=$_POST['sr'];
    $data['addtime'] = date('Y-m-d H:i:s', time());
    $data['title']=$_POST['title'];
    $data['stat']=0;
    if(M("xquser")->add($data)){
    $datas['city']=$_POST['jzd'];
    $datas['age']=$_POST['nl'];
    $datas['six']=$_POST['xb'];
     M("user")->where("uid=".$_POST['uid'])->save($datas);
       $this->ajaxReturn(array('code' => 200));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}
      //xq资料修改
  public function xqsave(){ 
    
    
    $uid=$_POST['uid'];
    if(!$uid){
       $this->ajaxReturn(array("code" => 401));//用户不存在
    }
    $data['dq']=$_POST['jzd'];
    $data['uid']=$_POST['uid'];
    $data['age']=$_POST['nl'];
    $data['xb']=$_POST['xb'];

    $data['sg']=$_POST['sg'];
    $data['gz']=$_POST['sr'];
    $data['addtime'] = date('Y-m-d H:i:s', time());
    $data['title']=$_POST['title'];
    $data['stat']=0;
    
    
    if(M("xquser")->where("uid='$uid'")->save($data)){
       $this->ajaxReturn(array('code' => 200));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}
  
  //遍历当前用户发布的技能
  public function jnlist(){
       $uid=$_POST['uid'];
    if(!$uid){
       $this->ajaxReturn(array("code" => 401));//用户不存在
    }
    if($data=M("fbjn")->where("uid='$uid'")->select()){
    foreach($data as $k=>$v){
       $data[$k]['mc'] = M('jineng')->where('id='.$v['fwpl'])->getField('jname');
    }
       $this->ajaxReturn(array("code" => 200, "data" => $data));
    }else{
       $this->ajaxReturn(array("code" => 404));
    }
  }
      //发布雇佣
  public function fbgy(){ 
    $cyjs=$_POST['je'];
    if($cyj <= 100){
    $cyj=$cyjs * 0.9;
    }else{
    $cyj=$cyjs * 0.85;
    }
   	$data['uid']=$_POST['uid'];
    $data['fid']=$_POST['fid'];
    $data['jid']=$_POST['jid'];
    $data['je']=$_POST['je'];
    $data['bz']=$_POST['bz'];
    $data['addtime'] = date('Y-m-d H:i:s', time());
    if(M("gyjl")->add($data)){
        // $da= M("user")->where("id=".$_POST['fid'])->find();//fid 雇佣人的id
        // $money['money']=$da['money']+$cyj;
       //  M("user")->where("id=".$_POST['fid'])->save($money);//将分成后的金额给 雇佣人
      //记录一下明细
     	$datas['uid'] = $_POST['uid'];
    	$datas['money'] = $_POST['je'];//余额
    	$datas['addtime'] = date('Y-m-d H:i:s');
   		$datas['sjfc'] = $cyj;
      	$datas['gyid'] = $data['fid'];
        $datas['yxq'] = $data['bz'];

        $datas['stat'] = 3;//雇佣明细
  		$res = M("txqq")->add($datas);
       $this->ajaxReturn(array('code' => 200));
    }else{
       $this->ajaxReturn(array("code" => 404));
      }
}
  
  
    //判断账号是否是会员  会员过期了没
  public function ifhy(){
        $dtime= date("Y-m-d h:i:s",time());
       $uid=$_POST['uid'];
    if(!$uid){
       $this->ajaxReturn(array("code" => 401));//用户不存在
    }
    $data=M("xquser")->where("uid='$uid'")->find();
    if($data['stat']!=1){
     $this->ajaxReturn(array("code" => 505));
    }
  if( $dtime >= $data['dqsj']){
      $this->ajaxReturn(array("code" => 402));
    }else{
      $this->ajaxReturn(array('code'=>200,'data'=>$data));

    }

  }
  
  
  //充值板块
  public function czmk(){
    
     $dtime= date("Y-m-d h:i:s",time());
     $uid=$_POST['uid'];
     if($uid){
     $das= M("xquser")->where("uid='$uid'")->find();
           if($dtime < $das['dqsj']){
             $dqsj= $das['dqsj'];
             $data['dqsj']= date('Y-m-d h:i:s',strtotime("$dqsj +30 day"));
              if(M("xquser")->where("uid='$uid'")->save($data)){
                    $this->ajaxReturn(array("code" => 200));//充值会员成功
               }else{
                    $this->ajaxReturn(array("code" => 404));//充值会员失败
               }
             }
        $data['stat']=1;
        $data['dqsj']=date('Y-m-d h:i:s',strtotime("$dtime +30 day"));
     if(M("xquser")->where("uid='$uid'")->save($data)){
            $this->ajaxReturn(array("code" => 200));//充值会员成功
       }else{
            $this->ajaxReturn(array("code" => 404));//充值会员失败
       }
       
      }else{
            $this->ajaxReturn(array("code" => 401));//用户不存在
       }
 }
  
  //购买记录
  public function gmjl(){
    $data['uid']=$_POST['uid'];
    $data['kid']=$_POST['kid'];
    
    if(M("gmjl")->add($data)){
         $this->ajaxReturn(array("code" => 200));//充值会员失败
    }else{
         $this->ajaxReturn(array("code" => 404));//充值会员失败

    }

    
  
  }
  
  //相亲模块
  public function xqmc(){
  }
  //修改微信号
  public function mesavewx(){
       $data['wx']=$_POST['wx'];
    if(M("user")->where("id=".$_POST['id'])->save($data)){
       $this->ajaxReturn(array("code" => 200));
    }else{
      $this->ajaxReturn(array("code" => 404));
    }
  }
    //修改年龄
  public function mesaveage(){
       $data['age']=$_POST['age'];
    if(M("user")->where("id=".$_POST['id'])->save($data)){
       $this->ajaxReturn(array("code" => 200));
    }else{
      $this->ajaxReturn(array("code" => 404));
    }
  }
  
  //添加关注
  public function addgz(){
    $id=$_POST['uid'];
    $gid=$_POST['gid'];
    if(M("gz")->where("uid='$id' and gid='$gid'")->find()){
      $this->ajaxReturn(array("code" => 201));//已经关注过了
    }
  $data['uid']=$_POST['uid'];
  $data['addtime'] = date('Y-m-d H:i:s', time());
  $data['gid']=$_POST['gid'];
   if(M("gz")->add($data)){
     $this->ajaxReturn(array("code" => 200));
   }else{
     $this->ajaxReturn(array("code" => 404));

   }
  }
  
  //遍历关注
  public function gzlist(){
    $uid=$_POST['id'];
    $res=M("gz")->where("uid='$uid'")->select();
    $b=array();
    foreach ($res as $key=>$value) {
    $res[$key]['er']=M("xquser as a")->where("uid='{$value['gid']}'")->join("qm_user as b on b.id=a.uid")->field("a.*,b.pic")->find();
    array_push($b,$res[$key]['er']);
    };
   if($b){
     $this->ajaxReturn(array('code'=>200,'data'=>$b));
   }else{
     $this->ajaxReturn(array("code" => 404));
   }
  }
  
      //获取个信息
    public function medata() {
        if ($res = M("user")->where("id=" . $_POST['id'])->find()) {
            $this->ajaxReturn(array("code" => 200, "data" => $res));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //登录
    public function Login() {
        $user = M("users");
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $result = $user->where("phone='%s' AND password='%s'", $phone, $password)->find();
        if (!M("users")->where("phone='$phone'")->find()) {
            $this->ajaxReturn(array("code" => 505));
        }
        if ($result) {
            $this->ajaxReturn(array("code" => 200, "data" => $result['id'], "phone" => $result['phone'], "pic" => $result['pic']));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //注册
    public function doregister() {
        $data['id'] = $_POST['uid'];
        $data['phone'] = $_POST['phone'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        if ($_POST['fid']) {
            $res = M("users")->where("id=" . $_POST['fid'])->find();
            $sd['dshje'] = $res['dshje'] + 50;
            M("users")->where("id=" . $res['id'])->save($sd);
            $data['fid'] = $_POST['fid'];
        }
        $data['pic'] = $_POST['face'];
        $data['addtime'] = time();
        if ($result = M('users')->add($data)) {
            if ($_POST['fid']) {
                $yh = M("users")->where("id=" . $result)->find();
                $das['data'] = "您推广的用户" . $yh['phone'] . "已注册成功！资金已返到推广佣金中，用户开通会员后方可提现，请协助您的下级用户开通会员后获得该佣金。";
                $nima = M("users")->where("phone=" . $_POST['fid'])->find();
                $das['uid'] = $nima['id'];
                $das['addtime'] = date('Y-m-d H:i:s', time());
                M("sx")->add($das);
            }
            $this->ajaxReturn(array("code" => 200));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //忘记密码
    public function wjmm() {
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        // $salt = $_POST['salt'];
        $user = M("users");
        $data['phone'] = $phone;
        $data['password'] = $password;
        // $data['salt'] = $salt ;
        $user->where("phone ='$phone'")->save($data);
        $this->ShowMsg(200);
    }
    //忘记密码
    public function outlogin() {
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        // $salt = $_POST['salt'];
        $user = M("users");
        $data['phone'] = $phone;
        $data['password'] = $password;
        // $data['salt'] = $salt ;
        $user->where("phone ='$phone'")->save($data);
        $this->ShowMsg(200);
    }

    //修改个人信息
    public function mesave() {
        $data['username'] = $_POST['username'];
        $data['nick'] = $_POST['nick'];
        $data['wx'] = $_POST['wx'];
        $data['shdz'] = $_POST['shdz'];
        if (M("users")->where("id=" . $_POST['id'])->save($data)) {
            $this->ajaxReturn(array("code" => 200));
        } else {
        }
    }
  
  
  
    //修改个人信息
    public function xgname() {


        $data['username'] = $_POST['username'];
        $data['name'] =  $_POST['username'];
          $data['xzts'] = 0;

        if (M("user")->where("id=" . $_POST['uid'])->save($data)) {
            $this->ajaxReturn(array("code" => 200));
        }else{
            $this->ajaxReturn(array("code" => 404));

        }
    }
    public function ticity() {
        $data['city'] = $_POST['city'];
        if (M("users")->where("id=" . $_POST['uid'])->save($data)) {
            $this->ajaxReturn(array("code" => 200));
        } else {
        }
    }
    //修改个人头像
    public function meimg() {
        $data['pic'] = $_POST['pic'];
        if (M("users")->where("id=" . $_POST['id'])->save($data)) {
            $this->ajaxReturn(array("code" => 200));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //修改支付密码
    public function savepaw() {
        $this->ajaxReturn(array("code" => $diqu));
        $data['zfmm'] = md5($_GET['mima']);
        if (M("user")->where("phone=17076012243")->save($data)) {
            $this->ajaxReturn(array("code" => 200));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //发布个人动态
    public function grdt() {
        $data['uid'] = $_POST['uid'];
        $data['ms'] = $_POST['uid'];
        $houzhui = substr($_FILES['file']['name'], -3);
        $arr = ['mp4', 'avi', 'rmvb', 'asf', 'divx', 'mpg', 'mpeg', 'mpe', 'wmv', 'mp4', 'mkv', 'vob'];
        if (!in_array($houzhui, $arr)) {
            echo "<script>alert('请上传视频文件！');history.back();</script>";
        } else {
            $upload = new ThinkUpload(); // 实例化上传类
            $upload->maxSize = 99999999; // 设置附件上传大小
            $upload->exts = array('mp4', 'avi', 'rmvb', 'asf', 'divx', 'mpg', 'mpeg', 'mpe', 'wmv', 'mp4', 'mkv', 'vob', 'jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型 //this vidio   this pic
            $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
            $upload->saveName = time() . '_' . mt_rand();
            $upload->autoSub = false;
            // 上传文件
            $info = $upload->upload();
            $arr = array();
            $i = 0;
            if (!$info) { // 上传错误提示错误信息
                $this->ajaxReturn(array("code" => 404));
            } else { // 上传成功
                foreach ($info as $file) { //循环存储图片到服务器
                    $subUrl = "http://" . $_SERVER['SERVER_NAME'] . $file['savepath'] . $file['savename'];
                    $arr[$i++] = $subUrl;
                }
                $this->ajaxReturn(array("code" => 200, "path" => $arr));
            }
        }
    }

    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //																			  END
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //获取同城热约
    public function sel_tc() {
        if ($res = M("user")->where("city=" . $_POST['city'])->limit(0, 8)->select()) {
            $this->ajaxReturn(array("code" => 200, "data" => $res));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //.判断是否已注册
    public function IsMerber() {
        $phone = $_POST['phone'];
        $user = M('users');
        $result = $user->where("phone ='$phone'")->find();
        if (!$phone || !is_numeric($phone)) {
            $this->ajaxReturn(array("code" => 100));
        } else {
            if (!empty($result)) { //.该手机号已被注册
                $this->ajaxReturn(array("code" => 401, "data" => '该手机号已注册！'));
            } else { //.该手机号可以注册
                $this->ajaxReturn(array("code" => 200, "data" => '该手机号可以注册！'));
            }
        }
    }
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //================  ================  ================  ================  ================  ================  ================  ================  ================  ================
    //搜索
    public function sousuos() {
        $type = $_GET['type'];
        $sousuos = M('grzl')->where("type like '%$type%'")->select();
        if ($sousuos) {
            $this->ajaxReturn(array("code" => 200, "data" => $sousuos));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //获取轮播
    public function lblist() {
        if ($res = M("lb")->where("stat=0")->select()) {
            $this->ajaxReturn(array("code" => 200, "list" => $res));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //首页头条
    public function toutiao() {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $toulist = M("toutiao")->field("id,name,content")->order("id desc")->limit($x, $y)->select();
        //$toulist = M("toutiao")->field("id,name,content")->order("id desc")->limit(0,2)->select();
        if ($toulist) {
            $this->ajaxReturn(array("code" => 200, "data" => $toulist));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //首页头条详情
    public function toutiaoxq() {
        $toulistxq = M("toutiao")->where("id=" . $_POST['id'])->find();
        if ($toulistxq) {
            $this->ajaxReturn(array("code" => 200, "data" => $toulistxq));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
    //首页服务员展示
    public function fuwuyuan() {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $fuwuyuans = M("user")->where('fbzt>0')->order("id desc")->limit($x, $y)->select();
     	foreach ($fuwuyuans as $key => $value) {
            $fuwuyuans[$key]['tus'] = M("grdt")->where("uid={$value['id']}")->getField('image');
        }
        if ($fuwuyuans) {
            $this->ajaxReturn(array("code" => 200, "data" => $fuwuyuans));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  
  

    //首页服务员详情
    public function fuwuyuanxq() {
        $fuwuyuanxq = M("user")->where("id=".$_GET['id'])->select();
          foreach ($fuwuyuanxq as $key => $value) {
            $fuwuyuanxq[$key]['sj'] = M("user")->field("pic")->limit(8)->order("rand()")->select();
            $fuwuyuanxq[$key]['tus'] = M("grdt")->where("uid={$_GET['id']}")->getField('image');
        }
        if ($fuwuyuanxq) {
            $this->ajaxReturn(array("code" => 200, "data" => $fuwuyuanxq));
        } else {
            $this->ajaxReturn(array("code" => 404));
        }
    }
  
  
  //详情中进入店铺接口
       public function dian(){
        $id = $_POST['userid'];
        if(M("merch")->where("user_id=$id")->find()){
            $list = M("merch")->where("user_id=$id")->find();
        }else{
            $list = M("shop")->where("user_id=$id")->find();
        }
        if(!I('post.uid')){
            $guanzhu = 2;
        }else{
            if(M('guanzhu')->where('user_id = '.I('post.uid').' and merch_id = '.$list['user_id'])->find()){
                $guanzhu = 1;
            }else{
                $guanzhu = 2;
            }
        }
        $shu = M("guanzhu")->where("merch_id = ".$list['user_id'])->Count();
        $list1 = M("goods")->where("user_id=$id and code=1")->order('addtime desc')->select();
        foreach ($list1 as $key => $value) {
            $list1[$key]['zhuanfa'] = M('zhuanfa')->where('goods_id = '.$value['id'])->count();
        }
        $this->ajaxReturn(array("code"=>200,"list"=>$list,"list1"=>$list1,"shu"=>$shu,'guanzhu'=>$guanzhu));
      }
       
       //详情店铺接口
       public function dianxin(){
        $id = $_POST['userid'];
        if(M("merch")->where("user_id=$id")->find()){
            $list = M("merch")->where("user_id=$id")->find();
        }else{
            $list = M("shop")->where("user_id=$id")->find();
        }
        $list1 = M("goods")->where("user_id=$id and code=1")->order('addtime desc')->select();
        if($list1){
            foreach ($list1 as $key => $value) {
                # code...
                $list1[$key]['content'] = mb_substr($value['content'],0,20,'utf-8');
            }
        } 
        $this->ajaxReturn(array("code"=>200,"list"=>$list,"list1"=>$list1));
      }
  
  
  //市场精选
        public function shichang()
        {
          $x=$_POST['x'];
          $y=$_POST['y'];

        $res = M('goods')->order("id desc")->where("code =1 and zts=".$_POST['stat'])->limit($x,$y)->select();
   		if($res){
        $this->ajaxReturn(array("code" => 200,'list'=>$res));
	    }else{
	      $this->ajaxReturn(array("code" => 404));
        }
           
        }
         public function shichangmore()
        {
            $userid = M("ruzhu")->field("qm_ruzhu.user_id,qm_ruzhu.addtime,qm_shop.baozhengjin")->join('qm_shop on qm_shop.user_id = qm_ruzhu.user_id')->where("stat=1 and code=1")->select();
             foreach($userid as $k=>$v){
                $list[] = M("goods")->where("user_id='{$v['user_id']}' and code = 1")->order('addtime desc')->find();
                $list[$k]['baozhengjin'] = $v['baozhengjin'];
                $list[$k]['ruzhutime'] = $v['addtime'];
             }
            if($list){
                foreach ($list as $key => $value) {
                    if($value['id']){
                        $list[$key]['zhuanfa'] = M('zhuanfa')->where("goods_id='{$value['id']}'")->Count();
                    }
                }
            }

            $zhuanfa = array();
            $ruzhutime = array();
            $baozhengjin = array();
            foreach ($list as $key => $value) {
                $zhuanfa[$key] = $value['zhuanfa'];
                $ruzhutime[$key] = $value['ruzhutime'];
                $baozhengjin[$key] = $value['baozhengjin'];
            }
            array_multisort($baozhengjin, SORT_DESC,$zhuanfa,SORT_DESC,$ruzhutime,SORT_DESC, $list);

            $this->ajaxReturn(array("code"=>200,"list"=>$list));
           
        }
  
   //首页市场精选点开详情
       public function detail()
       {
           # code...
           $goods_id = $_POST['id'];
           $list = M("goods")->where("id=$goods_id")->find();
           $this->ajaxReturn(array("code"=>200,"list"=>$list));

       }
  
  public function myshdz()
       {
            $uid = I('post.uid');
            $list = M('address')->where('user_id = '.$uid)->select();
            if($list){
                $this->ajaxReturn(array('code'=>'1','list'=>$list),'json');
            }else{
                $this->ajaxReturn(array('code'=>'2'),'json');
            }
       }

  
  
  //添加商品
       public function addgoods() {
        $data['user_id'] = $_POST['userid'];

        $data['content'] = $_POST['content'];

        $data['code'] = 1;

        $data['addtime'] = time();

        $data['danjia1'] = $_POST['danjia1'];

        $data['danjia2'] = $_POST['danjia2'];

        if(!I("post.video")){
            $data['pic1'] = $_POST['urtu'];
            $data['video']=0;
        }else{
            $data['video_pic']=I("post.video_pic");
            $data['video']=I("post.video");
            $data['pic1'] =$_POST['urtu'];
        }
        if(M("goods")->add($data)){
            $user = M('guanzhu')->where('merch_id = '.$_POST['userid'])->select();
            $nick = M('shop')->where('user_id = '.$_POST['userid'])->getField('merch_name');
            if(!$nick){
                $nick = M('merch')->where('user_id = '.$_POST['userid'])->getField('merch_name');
            }
            $this->ajaxReturn(array("code"=>200,'user'=>$user,'merch_name'=>$nick));
        }
       }
  
  
  
  
  
  
  
  
  
  
  
}
