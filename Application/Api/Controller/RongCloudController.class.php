<?php

namespace Api\Controller;
use Think\Controller;
class RongCloudController extends Controller {
        public function index(){
             $this->display();
        }
        
        //加载融云模块
        public function _initialize() {
             vendor('RongCloud.api');
        }

        //获取单个好友信息
        public function GetUserByID(){
                                     
            $userid = $_POST['userid'];
            $user = M("ucenter_members");
            if(!is_null($userid)){
                $userinfo = $user->where("uid = $userid")->find();
                if(!empty($userinfo))
                {
                    $result['targetId'] = $userinfo['uid'];
                    $result['targetNickname'] = $userinfo['username'];
                    $result['targetAvatar'] = $userinfo['face'];
                    $this->ShowMsg(200,'数据获取成功',$result);
                }
                else
                {
                    $this->ShowMsg(404,'未找到该用户');
                }
            }
            else
            {
                $this->ShowMsg(500,'userid不能为空！');
            }
        }
                         
}