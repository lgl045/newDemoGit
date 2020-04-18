<?php
namespace JY\Controller;
use Think\Controller;
class GoodsController extends Controller {
     public function index(){
        $total = M('goods')->Count();
        $page = new \Think\Page($total,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        // 加载用户列表
        $goods = M('goods')->limit($page->firstRow,$page->listRows)->order('code,addtime desc')->select();

        foreach ($goods as $key => $value) {
           
            
            $img = str_replace('"', '', $value['pic1']);
            $img = str_replace('[', '', $img);
            $img = str_replace(']', '', $img);
            $img = explode(',', $img);
            $goods[$key]['img'] = $img[0];
        }
        $this->assign('goods',$goods);
        $this->assign('pageinfo',$page->show());
        $this->display('Goods/index');
    }
  public function addsp(){

        $this->display();
  }
    public function insertcp(){
        $upload = new \Think\Upload(); // 实例化上传类
        // dump($upload);die;
        $upload->maxSize = 100000000; // 设置附件上传大小

        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','pdf'); // 设置附件上传类型

        $upload->rootPath = './Public/'; // 设置附件上传根目录

        $upload->savePath = 'uploads/'; // 设置附件上传（子）目录

        // 采用GUID序列命名
  $upload->saveName = array('uniqid',mt_rand(), array('', true)); 
        $info = $upload->upload();
       if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
         
        }else{// 上传成功
         $b=array();
          foreach ($info as $key=>$file) {
               array_push($b,'"'."Public/".$file['savepath'] . $file['savename'].'"');
               $data['pic'] = $file['savepath'] . $file['savename'];
          }   
         $pieces = implode(",", $b);
      }
  
        $data['content']=I("post.content"); 
        $data['danjia1']=I("post.danjia1");   
        $data['code']=2;   
         $data['zts']=I("post.zts"); 
        $data['pic1']= '['.$pieces.']';
        $data['addtime']=time();
        if(M("goods")->add($data)){
        $this->success('添加成功！',U('Goods/index'));
	    }else{
	       $this->error('添加失败！',U('Goods/index'));
        }
    }

    public function down()
    {
        if(M('goods')->where('id = '.$_GET['id'])->setField('code',2)){
            $this->success('商品状态更新成功！');
        }else{
            $this->error('操作失败！');
        }
    }

    public function up()
    {
        if(M('goods')->where('id = '.$_GET['id'])->setField('code',1)){
            $this->success('商品状态更新成功！');
        }else{
            $this->error('操作失败！');
        }
    }

    public function sosuo(){
        $so=I("get.so");
      $data=M('goods')->where("content like '%$so%'")->order("id desc")->select();
        foreach ($data as $k => $v) {
            $data[$k]['zhuan'] = M('zhuanfa')->where('goods_id = '.$v['id'])->Count();
        }
       foreach ($data as $key => $value) {
        $m=$data["$key"]["merch_id"];
        $merch=M("merch")->where("id=$m")->find();
        $user_id=$merch["user_id"];
        $s=M("users")->where("id=$user_id")->find();
        $data["$key"]["nick"]=$s["nick"];
        $shi=$data[$key]["code"];
        if($shi==1){
            $data[$key]["code"]="是";
        }else{
            $data[$key]["code"]="否";
        }
        }
        echo json_encode($data);  
    }
    public function del(){
        if(M('goods')->where('id = '.I('get.id'))->delete()){
            echo 1;
        }
    }
     public function dels(){
        $data["id"]=I('get.id');
        $d=I('get.code');
         if($d==1 || $d=="是"){
       $data["code"]=2;
         }else if($d==2 || $d=="否"){
           $data["code"]=1;  
         }

        $ss=M('goods')->save($data);
        if($ss){
            echo 1;
        }
    }
    public function details(){
        $data = M('goods_pic')->where('goods_id = '.I('get.id'))->select();
        $this->data = $data;
        $this->display('Goods/details');
    }
    public function edit($id){
        // $data = M('goods')->field('qm_users.username,qm_goods.id,qm_goods.content')->join('qm_users on qm_users.id = qm_goods.user_id')->where('qm_goods.id = '.I('get.id'))->find();
        // $data['img'] = M('goods_pic')->where('goods_id = '.I('get.id'))->select();
            $id= I('get.id');
        $data=M('goods')->find($id);
         foreach ($data as $key => $value) {
        $m=$data["merch_id"];
        $merch=M("merch")->where("id=$m")->find();
        $user_id=$merch["user_id"];
        $s=M("users")->where("id=$user_id")->find();
        $data["username"]=$s["username"];
        $pp= M('goods_pic')->where("goods_id = $id")->select();

        }
        $this->data = $data;
         $this->pp = $pp;
        $this->display('Goods/edit');
    }
    public function save(){
        $upload = new \Think\Upload();
        $upload->maxSize = 99999999;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4','avi','wmv');
        $upload->rootPath = './Public/uploads/';
        $upload->saveName = array('uniqid', array('', true));

        $info = $upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            foreach ($info as $file) {
                $aa[] = $file;
            }
            if(M('goods_pic')->where('goods_id = '.I('post.id'))->delete()){
                $p=$_POST["pid"];
                foreach ($p as  $value) {
                    $pid='./Public/uploads/'.$value;
                     unlink($pid);
                }
                
                 
                foreach($aa as $k=>$v){
                    $data = [
                        'pic' => $v['savepath'].$v['savename'],
                        'goods_id' => I('post.id')
                    ];
            $ss= M('goods_pic')->add($data);
     
    
                }
            }
            // if(!empty($aa['0'])){
            //     $data['img'] = $aa['0']['savepath'].$aa['0']['savename'];
            // }
            // if(!empty($aa['1'])){
            //     $data['img2'] = $aa['1']['savepath'].$aa['1']['savename'];
            // }
            // if(!empty($aa['2'])){
            //     $data['img3'] = $aa['2']['savepath'].$aa['2']['savename'];
            // }
            // if(!empty($aa['3'])){
            //     $data['img4'] = $aa['3']['savepath'].$aa['3']['savename'];
            // }
            // if(!empty($aa['4'])){
            //     $data['img5'] = $aa['4']['savepath'].$aa['4']['savename'];
            // }
            // if(!empty($aa['5'])){
            //     $data['img6'] = $aa['5']['savepath'].$aa['5']['savename'];
            // }
            // if(!empty($aa['6'])){
            //     $data['img7'] = $aa['6']['savepath'].$aa['6']['savename'];
            // }
            // if(!empty($aa['7'])){
            //     $data['img8'] = $aa['7']['savepath'].$aa['7']['savename'];
            // }
            // if(!empty($aa['8'])){
            //     $data['img9'] = $aa['8']['savepath'].$aa['8']['savename'];
            // }
if($ss){
        $this->success('修改成功！',U('Goods/index'));
      }else{
        $this->success('修改失败！',U('Goods/index'));
      }
        }
    }
}
