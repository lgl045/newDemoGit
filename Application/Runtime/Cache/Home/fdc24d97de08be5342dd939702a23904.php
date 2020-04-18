<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/Public/home/images/favicon.ico">
    
      <title>个人中心</title>
    
    <link rel="stylesheet" type="text/css" href="/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/base.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/jobHeadFoot.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/ucStyle.css">
    <script type="text/javascript" src="/Public/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/vue.js"></script>
    <script src="/Public/home/js/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="/Public/home/css/sweetalert.css">
    <link rel="stylesheet" href="/Public/home/css/usercenterstyle.css">

    
  </head>
  <body>
    <!--头部-->
    <header>
      <div id="ucHeader">
        <div class="container ucFrame">
          <div class="uc_logo">
            <h1>我的化学加</h1>
            <a href="/index.php/home/Index/index.html">返回<?php echo ($datas['webname']); ?>首页</a>
          </div>
          <!--菜单栏-->
          <div class="uc_top_menu">
            <div class="uc_topBtn uc_homeBtn">
              <span>主页</span>
              <ul class="uc_topTogBtn">
                <li>
                  <a href="javascript:void(0);">主页</a>
                </li>
                <li><a href="/index.php/home/Goods">产品供需</a></li>
                <li><a href="/index.php/home/Job">人才供需</a></li>
                <li><a href="/index.php/home/Problem">难题悬赏</a></li>
                <li><a href="/index.php/home/Technology">技术转让</a></li>
                <li><a href="/index.php/home/Incubate">项目整合</a></li>
                <li><a href="/index.php/home/Park/park">园区推荐</a></li>
              </ul>
            </div>
            <div class="uc_topBtn">
              <a href="http://data.huaxuejia.cn">化学品百科</a>
            </div>
            <div class="uc_topBtn"><a href="/index.php/home/news/index.html">资讯</a></div>
          </div>
          <!--搜索框-->
          <div class="uc_search" id="searchBox">
            <div class="uc_search_inBox">
              <div class="uc_sTog_btn">
                <span v-for="(item,index) in search" v-bind:class="{active:sNum==index}" v-on:click="sNum=index">{{item.value}}</span>
              </div>
              <div class="uc_sTog_form">
                <!-- 搜索-产品供应 -->
                <form v-show="0==sNum" action="/index.php/home/Goods/searchGoods" method ="get">
                  <input type="text" name="search" class="searchInput" placeholder="产品供应专栏搜索，支持产品名称或CAS号" required>
                  <input type="submit" class="searchBtn" name="" value="搜索">
                </form>
                <!-- 搜索-供应商 -->
                <form v-show="1==sNum" action="/index.php/home/Shop/shoplist" method="get">
                  <input type="text" name="gys" class="searchInput" placeholder="会员企业搜索，支持公司商号模糊搜索" required>
                  <input type="submit" class="searchBtn" name="" value="搜索">
                </form>
                <!-- 搜索-人才栏目 -->
                <form v-show="2==sNum" action="/index.php/home/Job/getJobList" method="get">
                  <input type="text" name="keyword" class="searchInput" placeholder="职位搜索">
                  <input type="submit" class="searchBtn" name="" value="搜索">
                </form>
                <!-- 搜索-其他栏目 -->
                <form v-show="3==sNum" action="/index.php/home/Search/" method="post">
                  <input type="text" name="search" required class="searchInput" placeholder="除了产品供需外，难题悬赏技术转让等栏目资源搜索">
                  <input type="submit" class="searchBtn" name="" value="搜索">
                </form>
                <!-- 搜索-化学品百科 -->
                <form v-show="4==sNum" action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas">
                  <input type="text" name="search_keyword" class="searchInput" placeholder="支持化学品名称、化学式或CAS号搜索">
                  <input type="submit" class="searchBtn" name="" value="搜索">
                </form>
              </div>
            </div>   
          </div>
        </div>
      </div>

      <div id="phoneUcHeader" class="pr">
        <ul class="inputTabList" v-show="inputTabBtn">
          <li class="triangle"><span></span></li>
          <li class="puh_tabBtn" v-for="(item,index) in search" v-bind:class="{active:sNum==index}" v-on:click="confirm(search[index].value,index)">{{item.value}}</li>
        </ul>
        <div class="puh_top">
          <div class="menuIcon" @click="show=true">
            <span class="glyphicon glyphicon-th-list mt15 ml15"></span>
          </div>
          <div class="p_search ofh">
            <div class="inputTab" @click="inputTabBtn=!inputTabBtn">
              <button class="pf_btn"><em class="wto">{{selVal}}<span class="glyphicon glyphicon-triangle-bottom color9 ml5"></span></em></button>
            </div>
            <div class="p_sear_form">
              <form v-show="0==sNum" action="/index.php/home/Goods/searchGoods" method ="get">
                <input type="text" name="" class="searchInput" placeholder="产品供应专栏搜索，支持产品名称或CAS号">
              </form>
              <form v-show="1==sNum" action="/index.php/home/Shop/shoplist" method="get">
                <input type="text" name="" class="searchInput" placeholder="会员企业搜索，支持公司商号模糊搜索">
              </form>
              <form v-show="2==sNum" action="/index.php/home/Job/getJobList" method="get">
                <input type="text" name="" class="searchInput" placeholder="职位搜索">
              </form>
              <form v-show="3==sNum" action="/index.php/home/Search/" method="post">
                <input type="text" name="" class="searchInput" placeholder="除了产品供需外，难题悬赏技术转让等栏目资源搜索">
              </form>
              <form v-show="4==sNum" action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas">
                <input type="text" name="" class="searchInput" placeholder="支持化学品名称、化学式或CAS号搜索">
              </form>
            </div>
          </div>
        </div>
        <transition name="slide-fade">
          <div class="phone_menu_shadow" v-show="show">
            <div class="puh_menu">
              <div class="puh_menuTop">
                <em>用户中心菜单</em>
                <span class="glyphicon glyphicon-remove closeBtn ml40" @click="show=false"></span>
              </div>
                                <!-- 个人用户 S -->
                  <div class="puh_menuList">
                    <div class="puh_menu_btn">
                      <a href="/index.php/home/member/index.html">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu1.png">
                        </span>
                        <em>我的化学加</em>
                      </a>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="/index.php/home/member/release_list.html">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu2.png">
                        </span>
                        <em>发布供需</em>
                      </a>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="javascript:void(0);" @click="managePer=!managePer">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu3.png">
                        </span>
                        <em>供需管理</em>
                        <span class="glyphicon glyphicon-triangle-bottom color9 ml20 f12"></span>
                      </a>
                      <ul class="puh_menu_inBtn" v-if="managePer">
                        <li><a href="/index.php/home/member/xProduct">产品需求</a></li>
                        <li><a href="/index.php/home/member/gxProble">难题悬赏</a></li>
                        <li><a href="/index.php/home/member/gxTechnology">技术转让</a></li>
                        <li><a href="/index.php/home/member/gxIncubation">项目整合</a></li>
                        <li><a href="/index.php/home/member/gxPark">园区推荐</a></li>
                        <!-- <li><a href="/home/member/gxFactory">厂房仓库</a></li>
                        <li><a href="/home/member/gxEquipment">二手设备</a></li> -->
                      </ul>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="javascript:void(0);" @click="product=!product">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu4.png">
                        </span>
                        <em>产品中心</em>
                        <span class="glyphicon glyphicon-triangle-bottom color9 ml20 f12"></span>
                      </a>
                      <ul class="puh_menu_inBtn" v-if="product">
                        <li><a href="/index.php/home/member/offer.html">收到的报价单</a></li>
                        <li><a href="/index.php/home/member/myInquiryView">我的询盘</a></li>
                        <li><a href="/index.php/home/member/orderBuyer">我的订单</a></li>
                      </ul>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="javascript:void(0);" @click="resume=!resume">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu5.png">
                        </span>
                        <em>简历管理</em>
                        <span class="glyphicon glyphicon-triangle-bottom color9 ml20 f12"></span>
                      </a>
                      <ul class="puh_menu_inBtn" v-if="resume">
                        <li><a href="/index.php/home/member/myAllCv.html">我的简历</a></li>
                        <li><a href="/index.php/home/member/deliveryRecord.html">投递记录</a></li>
                        <li><a href="/index.php/home/member/ucj.html">职位收藏夹</a></li>
                      </ul>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="/index.php/home/member/z_show.html">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu7.png">
                        </span>
                        <em>入驻智库</em>
                      </a>
                    </div>
                    <div class="puh_menu_btn">
                      <a href="/index.php/home/member/message.html">
                        <span class="puh_icon">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu8.png">
                        </span>
                        <em>消息</em>
                      </a>
                    </div>
                  </div><!--个人用户 E-->              <div class="puh_menuBtm ofh">
                <a href="/index.php/home/Index/index" class="pull-left"><span class="glyphicon glyphicon-home mr10"></span>首页</a>
                <a href="/index.php/home/Cart/getCartInfo" class="pull-right"><span class="glyphicon glyphicon-shopping-cart mr10"></span>购物车</a>
              </div>
            </div>
          </div>
        </transition>
      </div>
    </header>


<div class="uc_bg ucIndex">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <!-- 侧边栏 -->
             <!--用户中心 个人 侧边栏菜单-->
  <div id="ucComSideMenu">
    <div class="uc_sMenu_btn">
      <a href="/index.php/home/Member/index.html">
        <span class="uc_sMenu_sign">
          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu1.png">
        </span>
        <em>我的化学加</em>
      </a>
    </div>
    <div class="uc_sMenu_btn">
      <a href="/index.php/home/Member/release_list.html">
        <span class="uc_sMenu_sign">
          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu2.png">
        </span>
        <em>发布供需</em>
      </a>
    </div>
    <div class="uc_sMenu_btn">
      <a href="javascript:void(0);" @click="sMenuManage = !sMenuManage">
        <span class="uc_sMenu_sign">
          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu3.png">
        </span>
        <em>
          供需管理
        </em>
      </a>
      <transition name="slide-fade">
        <ul v-if="sMenuManage" class="uc_sMenu_inBtn">
          <li><a href="/index.php/home/Member/xProduct">产品需求</a></li>
          <li><a href="/index.php/home/Member/gxProblem">难题悬赏</a></li>
          <li><a href="/index.php/home/Member/gxTechnology">技术转让</a></li>
          <li><a href="/index.php/home/Member/gxIncubation">项目整合</a></li>
          <li><a href="/index.php/home/Member/gxPark">园区推荐</a></li>
          <!-- <li><a href="/home/Member/gxFactory">厂房仓库</a></li>
          <li><a href="/home/Member/gxEquipment">二手设备</a></li>-->
        </ul>
      </transition>
    </div>
    <div class="uc_sMenu_btn">
      <a href="javascript:void(0);" @click="sMenuShop =! sMenuShop">
      <span class="uc_sMenu_sign">
        <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu4.png">
      </span>
      <em>
        产品中心
      </em>
      </a>
      <transition name="slide-fade">
        <ul v-if="sMenuShop" class="uc_sMenu_inBtn">
          <li class="pr"><a href="/index.php/home/Member/offer.html">收到的报价单</a><lable class="uc_gotMess hidden" id="baojia"></lable></li>
          <li><a href="/index.php/home/Member/myInquiryView">我的询盘</a></li>
          <li><a href="/index.php/home/Member/orderBuyer">我的订单</a></li>
        </ul>
      </transition>
    </div>
    <div class="uc_sMenu_btn">
      <a href="javascript:void(0);" @click="sMenuRecruit =! sMenuRecruit">
      <span class="uc_sMenu_sign">
        <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu5.png">
      </span>
      <em>简历管理
      </em>
      </a>
      <transition name="slide-fade">
        <ul v-if="sMenuRecruit" class="uc_sMenu_inBtn">
          <li class="pr">
            <a href="/index.php/home/Member/myAllCv.html">我的简历</a>
            <label class="ucM_sign">发简历</label>
          </li>
          <li>
            <a href="/index.php/home/Member/deliveryRecord.html" >投递记录</a>
          </li>
          <li>
            <a href="/index.php/home/Member/ucj.html">职位收藏夹</a>
          </li>
        </ul>
      </transition>
    </div>
  <!--   <div class="uc_sMenu_btn">
      <a href="javascript:void(0);">
        <span class="uc_sMenu_sign">
          <img src="/Public/home/images/uc/ucMenu6.png">
        </span>
        <em>资金管理</em>
      </a>
    </div> -->
    <div class="uc_sMenu_btn">
      <a href="/index.php/home/Member/z_show.html">
        <span class="uc_sMenu_sign">
          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu7.png">
        </span>
        <em>入驻智库</em>
      </a>
    </div>
    <div class="uc_sMenu_btn">
      <a href="/index.php/home/Member/message.html">
        <span class="uc_sMenu_sign">
            <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu8.png">
        </span>
        <em>消息</em>
      </a>
    </div>
    <div class="uc_sMenu_btn">
      <a href="javascript:void(0);" onclick="out()">
        <span class="uc_sMenu_sign">
            <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucMenu9.png">
        </span>
        <em>退出登录</em>
      </a>
    </div>
  </div>


 <script>
  var ucComSideMenu = new Vue({
    el: '#ucComSideMenu',
    data: {
      sMenuManage:false,
      sMenuShop:true,
      sMenuAsk:true,
      sMenuRecruit:true
    }
  })

    $(function(){
      $.ajax({
        url:'/index.php/home/member/statu',
        type:'post',
        datatype:'json',
        success:function(data){
          if(data['o']==1){
            $('#baojia').removeClass('hidden');
          }

          if(data['i']==1){
            $('#xunpan').removeClass('hidden');
          }
        }

      });
    })


  function out(){
    swal({
      title: "确认退出吗？",   
      showCancelButton: true, 
      closeOnConfirm: false, 
      confirmButtonText: "是的，我要退出", 
      confirmButtonColor: "#ec6c62",
      animation: "slide-from-top"
    },function(){
       window.location.href="/index.php/home/Login/out";
    });
  }
</script>

 
      </div>


    <!--CONTENT S-->
    

<!--CONTENT Start-->

      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <!--用户信息-->
              <div class="col-lg-12">
                <div class="ucBox">
                  <div class="ucBox_content">
                    <!--用户信息 TOP-->
                    <div class="uccHome_User_top">
                      <div class="uccHome_pic">
                        <img src="http://www.huaxuejia.cn/Public/home/images/logoweb.png">
                      </div>
                      <div class="uccHome_name">
                        <h3><?php echo ($data['nickname']); ?></h3>
                        <p><a href="/index.php/home/member/userinfo" class="f12 colordarkblue">编辑个人信息</a></p>
                      </div>
                      <div class="uccHome_tank">
                        <a href="/index.php/home/member/z_show.html">
                          <img src="http://www.huaxuejia.cn/Public/home/images/uc/ucPerTank.png">
                        </a>
                      </div>
                    </div>
                    <!--用户信息 BOTTOM-->
                    <div class="uccHome_User_foot">
                      <div class="uc_safe">
                        <h3>账户安全</h3>
                        <div class="ofh">
                          <span class="pull-left">
                            <img src="http://www.huaxuejia.cn/Public/home/images/uc/phoneSafe.png">
                          </span>
                          <div class="uc_safe_text pull-left pl10">
                            <p><a href="/index.php/home/member/change_pass.html" class="colordarkblue">修改登录密码</a></p>
                            <p><?php echo ($data['username']); ?><em class="colorgreen ml10">已认证</em></p>
                          </div>
                        </div>
                      </div>
                      <div class="uc_realName">
                            <h3>
                              实名认证
                            </h3>
                            <div class="uc_rn_lf">
                              <a href="/index.php/home/member/realnameAuthentication">
                                <svg version="1.1" id="图层_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 43.5" enable-background="new 0 0 60 43.5" xml:space="preserve">
                                  <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#8EA6E1" d="M57.87,21.443c0-2.152,0-4.266,0-6.361
                                    c0-2.146,0.27-4.285-0.086-6.361C57.151,5,54.093,2.149,50.491,1.595c-2.938-0.452-6.459-0.084-9.84-0.084
                                    c-6.637,0-13.475,0-20.018,0c-3.28,0-7.106-0.235-10.093,0.084C6.438,2.034,3.152,5.163,2.737,9.399c-0.366,3.738,0,7.984,0,12.553
                                    c0,2.078,0,4.223,0,6.277c0,2.203-0.202,4.527,0.084,6.277c0.577,3.52,3.276,6.245,6.447,7.04c1.998,0.501,4.46,0.255,6.785,0.255
                                    c9.308,0,18.847,0,28.246,0c2.411,0,4.838,0.181,6.786-0.255c3.621-0.811,6.243-3.489,6.699-7.465
                                    C58.237,30.142,57.87,25.979,57.87,21.443z M55.156,35.1c-0.663,1.936-2.171,3.568-4.326,4.156
                                    c-2.648,0.721-7.052,0.256-10.179,0.256c-6.996,0-13.793,0-20.866,0c-3.155,0-7.583,0.457-10.094-0.256
                                    c-2.08-0.591-3.864-2.424-4.411-4.666c-0.439-1.806-0.169-4.201-0.169-6.615c0-4.46,0-8.92,0-13.402
                                    c0-2.479-0.146-4.916,0.338-6.361c0.856-2.553,2.793-4.087,6.023-4.326c6.418-0.475,13.511-0.084,20.272-0.084
                                    c4.627,0,10.165,0,15.098,0c2.171,0,4.243,0.107,5.598,0.933c1.433,0.873,2.326,2.126,2.8,3.563
                                    c0.743,2.249,0.339,4.379,0.339,6.616c0,4.528,0,9.063,0,13.741C55.58,31.087,55.658,33.634,55.156,35.1z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#8EA6E1" d="M43.875,22.037c4.257-1.728,4.874-8.072,1.866-11.111
                                    C44.796,9.97,43.244,9.06,41.585,8.89c-7.46-0.764-9.984,7.962-5.684,12.045c0.454,0.43,1.071,0.655,1.612,1.187
                                    c-2.88,1.076-4.885,2.65-6.107,5.089c-0.434,0.866-1.909,4.846-0.679,5.683c1.955,1.331,1.918-1.682,2.035-2.374
                                    c0.628-3.688,3.473-6.298,7.125-6.616c4.531-0.395,7.28,2.264,8.397,5.343c0.407,1.12,0.321,3.558,1.357,3.817
                                    c2.147,0.539,1.397-2.669,1.018-3.987C49.581,25.327,47.081,23.294,43.875,22.037z M36.071,15.591
                                    c0.117-2.376,1.913-4.129,4.241-4.326c3.313-0.281,6.177,2.875,4.751,6.362C43.298,21.935,35.797,21.154,36.071,15.591z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#8EA6E1" d="M25.045,11.774c-4.289,0-9.251-0.274-12.978,0
                                    c-0.084,0.006-0.053,0.073-0.085,0.084c-0.561,0.203-1.035,0.918-0.594,1.696c0.443,0.779,2.804,0.509,4.242,0.509
                                    c3.26,0,6.178,0,9.5,0c1.845,0,3.685,0.181,3.392-1.442C28.342,11.621,26.678,11.774,25.045,11.774z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#8EA6E1" d="M15.121,22.547c3.635,0,6.116,0,9.584,0
                                    c1.723,0,3.679,0.321,3.817-1.019c0.166-1.604-1.687-1.272-3.477-1.272c-3.354,0-5.644,0-8.652,0c-1.261,0-3.568-0.219-4.411,0.084
                                    c-0.619,0.224-0.886,0.718-0.763,1.357C11.437,22.831,13.5,22.547,15.121,22.547z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#8EA6E1" d="M25.13,28.738c-3.351,0-5.59,0-8.652,0
                                    c-1.322,0-3.723-0.202-4.496,0.083c-0.608,0.226-0.865,0.799-0.679,1.442c0.313,1.079,2.335,0.85,3.987,0.85
                                    c3.727,0,6.22,0,9.755,0c1.797,0,3.688,0.153,3.477-1.441C28.379,28.581,27.057,28.738,25.13,28.738z"/>
                                  </g>
                                </svg>
                              </a>
                            </div>
                            <div class="uc_rn_rg">
                              <h4 class="f14 color6 mb5">您还未进行实名认证</h4>
                              <p class="color9 f12">完成实名认证，即可进行难题/技术的自主对接，获取联系方式</p>
                            </div>
                          </div>                 
                    </div>
                  </div>
                </div>
              </div>
              <!--化学加币-->
              <div class="col-lg-12">
                <div class="ucBox">
                  <h2>我的化学加币<em class="f14 ml5 colordarkblue">(化学加币:人民币=1:1)</em></h2>
                  <div class="ucBox_content">
                    <div class="pMoney">账户余额：<span>0.00</span><em>元</em></div>
                    <a href="/index.php/home/Recharge/rechargeView" class="pMoneyBtn">化学加币充值</a>
                  </div>
                </div>
              </div>
              <!--我的订单-->
              <div class="col-lg-12">
                <div class="ucBox">
                  <h2 class="pr">我的订单<a href="/index.php/home/member/orderBuyer">查看全部</a></h2>
                  <div class="ucBox_content">
                    <div class="uc_order">
                      <span class="pull-left">
                        <img src="http://www.huaxuejia.cn/Public/home/images/uc/myOrder1.png">
                      </span>
                      <div class="uc_or_t">
                        <h4>全部订单</h4>
                        <span class="orange fb">0</span>
                      </div>
                    </div>
                    <div class="uc_order">
                      <span class="pull-left">
                        <img src="http://www.huaxuejia.cn/Public/home/images/uc/myOrder2.png">
                      </span>
                      <div class="uc_or_t">
                        <h4>待发货订单</h4>
                        <span class="orange fb">0</span>
                      </div>
                    </div>
                    <div class="uc_order">
                      <span class="pull-left">
                        <img src="http://www.huaxuejia.cn/Public/home/images/uc/myOrder3.png">
                      </span>
                      <div class="uc_or_t">
                        <h4>待收货订单</h4>
                        <span class="orange fb">0</span>
                      </div>
                    </div>
                    <div class="uc_order">
                      <span class="pull-left">
                        <img src="http://www.huaxuejia.cn/Public/home/images/uc/myOrder4.png">
                      </span>
                      <div class="uc_or_t">
                        <h4>待支付订单</h4>
                        <span class="orange fb">0</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!--我的消息-->
            <div class="ucBox">
              <h2>我的消息</h2>
              <div class="ucBox_content">
                <!-- <div class="ucLineT ofh borBottomGray">
                  <div class="ucLineT_lf">
                    <span class="ml10">系统消息</span>
                  </div>
                  <div class="ucLineT_rg">
                    <span><em class="orange mr5">0</em>条</span>
                    <a href="">详情</a>
                  </div>
                </div> -->
                <div class="ucLineT ofh ">
                  <div class="ucLineT_lf">
                    <span class="ml10">留言消息</span>
                  </div>
                  <div class="ucLineT_rg">
                    <span><em class="orange mr5">0</em>条</span>
                    <a href="/index.php/home/Member/message">详情</a>
                  </div>
                </div>
              </div>
            </div>
            <!--公告-->
            <div class="ucBox announceBox">
              <h2>公告</h2>
              <div class="ucBox_content">
                <div class="uc_announce_text perAnnounce">
                    <p>1、本网“化学品百科”数据库拥有2000多万个产品，对于每个产品，只要该产品已经有供应商在化学加上发布过，都将自动关联上。当网友搜索到该产品时，点开供应商列表，便可看到该产品的各家供应商。供应商的排序上遵循“充值推广用户，账户里化学加币的余额越多越靠前；非推广用户入驻越早排序越靠前”的原则。</p><p>2、只有在本页提交过企业认证的用户，才可显示到前端企业名录，也才可以进一步发布贵司的产品供应。另外，各个企业用户的店铺新增了“公司展厅”、“公司档案”等展示公司形象、实力的版块，欢迎上传。</p><p>3、化学加网各栏目资源的供需，由会员自助发布展示，不收取任何费用，如果您有特别的供需广告需求，请及时联系化学加官方客服，化学加将及时与您联系。需要指出的是，如果是一些安监或者公安部门管制的产品，则要求发布企业拥有这方面的资质许可证，否则被判定为擅自违规经营，后果自负。</p><p>4、如果您对发布在化学加网上的供需资源感兴趣，可在登录后于对应那一条的下面留言咨询，所有产品供需栏目都可以实现在线支付交易，详细请参见网站底部左下角的服务协议。</p>  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--CONTENT End-->
  <script type="text/javascript">
    /*用户中心公告栏*/
    (function(){
      function announce(father,child){
        Timer();
        var start;
        function Timer(){
          start = setInterval(function(){
            var t = child.scrollTop(); 
            var h = 0;
            caltMax();
            function caltMax(){
              for(var i=0 ; i<child.children("p").length ;i++){
                h += child.children("p").eq(i).height();
              }
            }
            var tMax = h-child.height();
            if(child.scrollTop() == tMax){
              t = 0;
              child.animate({scrollTop:t+1},1);
            }else{
              child.animate({scrollTop:t+1},1);
            }
          },100);
        }
        father.mouseover(function(){
          myStopFunction();
        });
        father.mouseout(function(){
          Timer();
        });

        function myStopFunction()
        {
          clearInterval(start);
        }
      }
      announce($(".uc_announce"),$(".uc_announce_text"))
    })();
  </script>

    <!--CONTENT E-->



    <footer>
  <!--页脚-->
  <div class="footerbg1">
    <div class="container">
       <div class="foot1">
          <h4 class="pr">新手指南<span class="glyphicon glyphicon-chevron-down pa f_arrow visible-xs"></span></h4>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_reglogin">注册登录</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_realname">实名认证</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_findkey">找回密码</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_faq">常见问题</a>
        </div>
        <div class="foot2">
          <h4 class="pr">采购商服务<span class="glyphicon glyphicon-chevron-down pa f_arrow visible-xs"></span></h4>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_enquiry">如何询价</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_purchase">采购流程</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_topay">如何支付</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_aftersale">售后服务</a>
        </div>
        <div class="foot3">
          <h4 class="pr">供应商服务<span class="glyphicon glyphicon-chevron-down pa f_arrow visible-xs"></span></h4>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_entcert">成为供应商</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_releasepro">发布产品</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_setpro">产品推广</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_quote.html">如何报价</a>
        </div>
        <div class="foot4">
          <h4 class="pr">关于我们<span class="glyphicon glyphicon-chevron-down pa f_arrow visible-xs"></span></h4>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_introhxj">化学加网介绍</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Helpcenter/hc_develop.html">发展历程</a>
          <a class="f_alink" href="http://data.huaxuejia.cn" target="_blank">化学品百科</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/home/Index/tanks">化学加智库</a>
          <a class="f_alink" href="http://www.huaxuejia.cn/huaxuejia/Home/View/Promotion/rechargeIns.html" target="_blank">化学加币</a>
        </div>
        <div class="foot5">
          <h4 class="pr">联系我们<span class="glyphicon glyphicon-chevron-down pa f_arrow visible-xs"></span></h4>
          <span class="f_alink">客服热线：<?php echo ($datas['rexian']); ?><em style="font-size:10px;">（工作日8:30-17:30）</em></span>
          <span class="f_alink">客服邮箱：<?php echo ($datas['email']); ?></span>
          <span class="f_alink">客服手机：<?php echo ($datas['phone']); ?></span>
          <span class="f_alink" id="btnService">客服&nbsp;QQ：<?php echo ($datas['qq']); ?><a style="display:inline-block;" target="_blank" href=""><img border="0" src="" alt="联系客服" title="联系客服"/></a></span>
         <script type="text/javascript">
           (function(){
              var serQQ = ["<?php echo ($datas['qq']); ?>","<?php echo ($datas['qq']); ?>"];
              $("#btnService").children("a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+serQQ[Math.floor((Math.random()*serQQ.length)+1)-1]+"&site=qq&menu=yes");
              $("#btnService").find("img").attr("src","http://wpa.qq.com/pa?p=2:"+serQQ[Math.floor((Math.random()*serQQ.length)+1)-1]+":51");
            })();

         </script>
  
          <span class="f_alink">客服座机：<?php echo ($datas['zuoji']); ?></span>
          <span class="f_alink">新浪微博：<em class="colorlightblue">@<?php echo ($datas['sina']); ?></em><i class="sinaAdd"><wb:follow-button uid="5359424343" type="red_1" width="67" height="24" ></wb:follow-button></i></span>
        </div>
        <div class="foot6">
          <div class="fbox">
            <div class="wxCodePic">
              <img src="<?php echo ($datas['wxchat']); ?>">
            </div>
            <div class="fboxInfo">
              <p>微信公众号：<em class="colorlightblue">化学加</em></p>
              <span>扫描二维码关注</span>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="footerbg2">
    <div class="webLink">
        <ul>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_introhxj.html">关于我们</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_infocompany.html">公司信息</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_copyright.html">版权信息</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_feedback.html">意见反馈</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_adver.html">广告服务</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/protocol1.html">服务协议</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_lawyer.html">法务合作</a>
          </li>
          <li>
            <a href="http://www.huaxuejia.cn/home/Helpcenter/hc_contribute.html">我要投稿</a>
          </li>
        </ul>
      </div>
    <div class="container fb_bottom">
      <p>版权所有 ©<?php echo ($datas['icp']); ?></p>
      <p>地址：<?php echo ($datas['address']); ?></p>
    </div>
    <div class="fb_cert">
      <a href="http://t.knet.cn/" target="_blank">
        <img src="http://www.huaxuejia.cn/Public/home/images/cert1.jpg">
      </a>
      <a href="http://www.gzjd.gov.cn/" target="_blank">
        <img src="http://www.huaxuejia.cn/Public/home/images/cert2.jpg">
      </a>
      <a href="http://netadreg.gzaic.gov.cn/ntmm/WebSear/WebLogoPub.aspx?logo=deca85c42adc44c9a5159bec48776f74" target="_blank">
        <img alt='红盾标识' src="http://www.huaxuejia.cn/Public/home/images/cert3.jpg">
      </a>
    </div>
  </div>
  <!--/.页脚-->
</footer>
    <script src="/Public/home/js/headFoot.js"></script>
    <script type="text/javascript">
      var searchBox = new Vue({
        el: '#searchBox',
        data: {
          sNum:0,
          search:[
            {value:'产品供应'},
            {value:'供应商'},
            {value:'人才栏目'},
            {value:'其他栏目'},
            {value:'化学品百科'}
            ]
          }
      })
      var phoneUcHeader = new Vue({
        el: '#phoneUcHeader',
        data: {
          show:false,
          manage:false,
          shop:false,
          ask:false,
          job:false,
          managePer:false,
          product:false,
          resume:false,
          search:[
            {value:'产品供应'},
            {value:'供应商'},
            {value:'人才栏目'},
            {value:'其他栏目'},
            {value:'化学品百科'}
          ],
          inputTabBtn:false,
          sNum:0,
          selVal:'产品供应'
        },
        methods:{
          confirm:function(val,index){
            this.selVal = val;
            this.sNum = index;
            this.inputTabBtn = false;
          }
        }
      })
    </script>
  </body>
</html>