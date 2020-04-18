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
            <a href="/index.php/home/Index/index.html">返回化学加首页</a>
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

          <div class="col-lg-10 col-md-9 col-sm-9">



            <div class="ucBox">



              <div class="ucCrumbs">



                <span><a href="/index.php/home/Index/index">首页</a></span>/



                <span><a href="/index.php/home/Member/index">用户中心</a></span>/



                <span>发布供需</span>



              </div>



              <ul id="myTabs1" class="nav nav-tabs inputTopmenu" role="tablist">



                <!--产品tab-->



                <li class=""><a href="/index.php/home/Member/ucp_product_supply">产品供需</a></li>



                <!--难题tab-->



                <li class="active"><a href="/index.php/home/Member/ucp_problem">难题悬赏</a></li>



                 <!--定制合成tab-->



                <li class=""><a href="/index.php/home/Member/ucp_synthesis">定制合成</a></li>



                <!--技术tab-->



                <li class=""><a href="/index.php/home/Member/ucp_technology_supply">技术转让</a></li>



                <!--项目整合tab-->



                <li class=""><a href="/index.php/home/Member/ucp_incubation">项目整合</a></li>



                <!--园区tab-->



                <li class=""><a href="/index.php/home/Member/ucp_zone" >园区推荐</a></li>



              </ul>



              <div class="ucBox_contentf">



                <div id="myTabInput" class="pb50 pr">



                  <!--难题TabPanel输入页-->



                  <div class="" id="puzzle" >



                    <div class="center-block mt20">



                      <div class="ofh">



                        <div id="myTabTech" class="tab-content">



                          <div id="supply1">



                            <!--难题发布-->

                            <form class="form-horizontal" action="/index.php/home/member/problem_add" id="problemForm" method="post" enctype="multipart/form-data">

                              <input type="hidden" value='0' name="type" />

                              <!--标题-->

                              <div class="form-group">

                                <label class="col-sm-3 control-label listFrame-lab"><span class="redstar">*</span>标题：</label>

                                <div class="col-sm-7">

                                  <input type="topic" name="name" class="form-control item-inputframe" id="inputtopic" placeholder="不能超过50个字" maxlength="50" required>

                                </div>

                              </div><!--标题end-->

                              <!--所在地-->

                              <div class="form-group">

                                <label class="col-sm-3 control-label listFrame-lab">所在地：</label>

                                <div class="col-sm-7">

                                  <div class="row">

                                    <div class="col-xs-4 placeFrame">

                                      <select name="provincePuzzle" class="form-control fontplace"></select>

                                    </div>

                                    <div class="col-xs-4 placeFrame">

                                      <select name="cityPuzzle" class="form-control fontplace"></select>

                                    </div>

                                    <div class="col-xs-4 placeFrame">

                                      <select name="areaPuzzle" class="form-control fontplace"></select>

                                    </div>

                                  </div>

                                </div>

                              </div>

                              <!--所在地end-->

                              <!--行业类型-->

                              <!--行业类型-->

                               <div class="form-group form-inline">

                                <label class="col-sm-3 control-label listFrame-lab">行业类型：</label>

                                <div class="col-sm-7"> 

                                    <select name="industry" class="form-control " data-first-title="请选择" id="bigname">

                                      <option value="">请选择</option>

                                      <option value="化学化工">化学化工</option>

                                      <option value="制药化工">制药化工</option>

                                      <option value="生物化工">生物化工</option>

                                      <option value="食品化工">食品化工</option>

                                    </select>

                                    <select name="sorted" class="form-control industryTwoPuzzle" data-first-title="请选择" id="smallname">

                                    </select>

                                </div>

                              </div>

                              <!--行业类型end-->

                              <!--悬赏金额-->

                               <div class="form-group">

                                <label class="col-sm-3 control-label listFrame-lab"><span class="redstar">*</span>悬赏金额：</label>

                                <div class="col-sm-7">

                                  <div class="input-group">

                                    <input name="money" type="price" class="form-control item-inputframe" id="inputprice" placeholder="" maxlength="8" required>

                                    <span class="input-group-addon">元</span>

                                  </div>

                                </div>

                              </div>

                              <!--悬赏金额end-->

                              <!--截止时间-->

                              <div class="form-group">

                                <label class="col-sm-3 control-label listFrame-lab"><span class="redstar">*</span>截止时间：</label>

                                <div class="col-sm-7">

                                  <div class="input-group" >

                                    <input name="overduetime" type="text" class="form-control deadLine"  id="datepuzzle" data-date-format="yyyy-mm-dd" required>

                                    <span class="input-group-addon">

                                        <span class="glyphicon glyphicon-calendar" ></span>

                                    </span>

                                  </div>

                                </div>

                              </div>

                              <!--截止时间end-->

                              <div class="form-group">

                                <label class="col-sm-3 control-label listFrame-lab"><span class="redstar">*</span>难题详情：</label>

                                <div class="col-sm-7">

                                  <textarea name="detail" class="form-control" rows="5" placeholder="请输入最多1000个字的技术简介" maxlength="1000" required></textarea>

                                </div>

                              </div>

                              <div class="col-sm-offset-3 col-sm-9 col-xs-12">

                                <input type="submit" class="btn listFrameGetInBtn" value="发布" />   

                                <input type="reset" class="btn listFrameGetInBtn" value="重置" />

                              </div>

                            </form><!--难题发布end-->



                          </div>



                        </div>



                      </div>



                    </div> 



                  </div>



                </div>



              </div>



            </div>



          </div>



        </div>



      </div>



    </div>



    <script src="/Public/home/js/dropzone.js"></script>



    <script src="/Public/home/js/formValidation.js"></script> 



    <script src="/Public/home/js/bootstrap_002.js"></script><!--专用的表单验证-->



    <script type="text/javascript">

    //难题

    $(document).ready(function() {

      $('#problemForm').formValidation({

          message: '请填入有效值',

          fields: {

              name: {

                  validators: {

                      notEmpty: {

                          message: '标题不能为空'

                      },

                      stringLength: {

                          max: 50,

                          message: '标题不能超过50个字'

                      }

                  }

              },

              provincePuzzle: {

                validators: {

                      stringLength: {

                          min: 0,

                          message: ''

                      }

                  }

              },

              industry: {

                  validators: {

                      stringLength: {

                          min: 0,

                          message: ''

                      }

                  }

              },

              money: {

                  validators: {

                      notEmpty: {

                          message: '金额不能为空'

                      },

                      regexp: {

                        regexp: /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,

                        message: '请输入金钱格式,最多保留两位小数'

                      }

                  }

              },

              overduetime: {

                  validators: {

                      notEmpty: {

                          message: '截止时间不能为空'

                      },

                      date: {

                          format: 'YYYY-MM-DD',

                          message: '请修改时间格式为yyyy-mm-dd'

                      }

                  }

              },

              detail: {

                  validators: {

                      notEmpty: {

                        message: '详情描述不能为空'

                      },

                      stringLength: {

                          max: 1000,

                          message: '详情描述字数不能超过1000个字'

                      }

                  }

              }

          }

      }); 

    });

    </script>



    <script type="text/javascript">

      $(function(){

        getSelectVal(); 

        $("#bigname").change(function(){ 

            getSelectVal(); 

        }); 

      }); 

      function getSelectVal(){ 

        var bb = $('#bigname').val();

        $.ajax({

          url:'/home/member/label?bigname='+bb,

          dataType:'json',

          success:function(json){

            var smallname = $("#smallname"); 

            $("option",smallname).remove(); //清空原有的选项 

            var option = "";

            $.each(json,function(index,array){ 

                option += "<option value='"+array['name']+"'>"+array['name']+"</option>"; 

                

            }); 

            option += "<option value=\"其它\">其它</option>";

            smallname.append(option); 

          }

        });

      } 

    </script>



    <!--地区（所在地）选择-->



    <script type="text/javascript" src="/Public/home/js/PCASClass.js"></script>



    <script type="text/javascript">



        new PCAS("provincePuzzle","cityPuzzle","areaPuzzle");



    </script><!--地区选择end-->



      <!--截止时间 设置默认为 一年后的当天-->



      <script type="text/javascript">



      $(function(){

        var deadLineDefault = new Date();

        var year = deadLineDefault.getFullYear()+1;

        var month = deadLineDefault.getMonth()+1;

        var date = deadLineDefault.getDate();

        if (month >= 1 && month <= 9) {

            month = "0" + month;

        }

        $(".deadLine").val(year+"-"+month+"-"+date);

    });



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
          <span class="f_alink">客服热线：400-8383-509<em style="font-size:10px;">（工作日8:30-17:30）</em></span>
          <span class="f_alink">客服邮箱：cs@huaxuejia.cn</span>
          <span class="f_alink">客服手机：138-2845-0515</span>
          <span class="f_alink" id="btnService">客服&nbsp;QQ：2827578121<a style="display:inline-block;" target="_blank" href=""><img border="0" src="" alt="联系化学加客服" title="联系化学加客服"/></a></span>
         <script type="text/javascript">
           (function(){
              var serQQ = ["2827578121","3367378128"];
              $("#btnService").children("a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+serQQ[Math.floor((Math.random()*serQQ.length)+1)-1]+"&site=qq&menu=yes");
              $("#btnService").find("img").attr("src","http://wpa.qq.com/pa?p=2:"+serQQ[Math.floor((Math.random()*serQQ.length)+1)-1]+":51");
            })();

         </script>
  
          <span class="f_alink">客服座机：020-82002530、020-82002532</span>
          <span class="f_alink">新浪微博：<em class="colorlightblue">@化学加</em><i class="sinaAdd"><wb:follow-button uid="5359424343" type="red_1" width="67" height="24" ></wb:follow-button></i></span>
        </div>
        <div class="foot6">
          <div class="fbox">
            <div class="wxCodePic">
              <img src="http://www.huaxuejia.cn/Public/home/images/wechatcode.jpg">
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
      <p>版权所有 ©广州萃英化学科技有限公司 粤ICP备15047151号</p>
      <p>地址：广州市黄埔区黄埔东路266号怡港大厦A栋606-607室、B栋708-709室</p>
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
    <!--CNZZ统计-->
    <p class="tc mb0">
      <!-- 微信分享 -->
      <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
      <!-- 微信分享配置js -->
      <script type="text/javascript">
        var url=encodeURIComponent(location.href.split('#')[0]);
          $.ajax({
            type : "get",
            url : "http://www.huaxuejia.cn/huaxuejia/Home/Controller/WechatShare/jssdkStatic.php?url="+url,
            dataType : "jsonp",
            jsonp:"callback",
            jsonCallback:"success_jsonCallback",
            success : function(data){
              wx.config({
                debug: false,
                appId: data.appId,
                timestamp: data.timestamp,
                nonceStr: data.nonceStr,
                signature: data.signature,
                jsApiList: [
                "onMenuShareTimeline", 
                "onMenuShareAppMessage", 
                "onMenuShareQQ",
                "onMenuShareWeibo"
                ]
              });
            },
            error:function(data){
            //alert("连接失败！");
            }
          });

        wx.ready(function () {  
          var shareData = {  
            title: window.location.title,  
            desc: '数万家化学化工、医药日化企业通过化学加网推广买卖产品、技术，解决难题，招聘良才，快速发展。',  
            link: window.location.href,  
            imgUrl: 'http://www.huaxuejia.cn/Public/home/images/logo.jpg'  
          };  
          wx.onMenuShareAppMessage(shareData);
          wx.onMenuShareTimeline(shareData);
          wx.onMenuShareQQ(shareData);
          wx.onMenuShareWeibo(shareData);
        });  
          
      </script>
    </p>
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