<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=keywords content="<?php echo ($datas['webmore']); ?>">
    <meta name="description" content="<?php echo ($datas['webdict']); ?>"/>
    <link rel="icon" href="/Public/home/images/favicon.ico">
    

  <title><?php echo ($datas['webname']); ?></title>


    <link href="/Public/home/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="/Public/home/css/base.css" rel="stylesheet">
    <link href="/Public/home/css/headfootStyle.css" rel="stylesheet">
    <!--字体-->
    <link href="/Public/home/fonts/glyphicons-halflings-regular.eot">
    <link href="/Public/home/fonts/glyphicons-halflings-regular.ttf">
    <link href="/Public/home/fonts/glyphicons-halflings-regular.woff">
    <link href="/Public/home/css/jquery.ui.autocomplete.css" rel="stylesheet">

    <script src="/Public/home/js/jquery.min.js"></script>
    <script src="/Public/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/checkLogin.js"></script>
    <script src="/Public/home/js/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="/Public/home/css/sweetalert.css"> 
    <script src="/Public/home/js/cart.js"></script>
    

    <link href="/Public/home/css/base.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/Public/home/css/global.css">
	<link rel="stylesheet" type="text/css" href="/Public/home/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/pageproduct.css"> 
    <link rel="stylesheet" type="text/css" href="http://www.huaxuejia.cn/Public/home/css/orderStyle.css"> 


  </head>
  <body>
    <!--网页web头部-->
    <div class="header">
      <div class="hidden">
	<img src="http://www.huaxuejia.cn/Public/home/images/logo.jpg" height="300" width="300">
</div>
<!--顶部工具条-->
<div class="toolbar">
  <div class="container ofh">
      <span class="pull-left f12">欢迎来到<?php echo ($datas['webname']); ?>！萃聚英才，共享化学！<?php echo ($datas['webname']); ?>，加您更精彩！客服热线：<?php echo ($datas['zuoji']); ?></span>
      <div class="sitemap" id="zt">
          <span><a href="/index.php/home/Index/index">首页</a></span>
          <span><a href="/index.php/home/Login/login?url=www.huaxuejia.cn%2Fhome%2FGoods">会员登录</a></span>
          <span><a href="/index.php/home/Login/register">免费注册</a></span>
          <span><a href="/index.php/home/Helpcenter/hc_faq">帮助中心</a></span>
      </div>
    </if>
  </div>
</div>
<!--侧边工具条-->
<div class="sideToolBar">
  <div class="stb_btn" id="st_service">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=2827578121&site=qq&menu=yes">
      <img src="/Public/home/images/sideBM01.png">
      <em>在线客服</em>
    </a>
  </div>
  <div class="stb_btn" id="st_release">
    <a href="/home/Member/release_list?url=www.huaxuejia.cn/index.php/Home/Member/release_list">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM02.png">
      <em>快速发布</em>
    </a>
  </div>
  <div class="stb_btn" id="st_cart">
    <a href="/home/Cart/getCartInfo">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM03.png">
      <em>购物车</em>
    </a>
  </div>
  <div class="stb_btn" id="st_shop">
    <a href="">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM04.png">
      <em>我的店铺</em>
    </a>
  </div>
  <div class="stb_btn" id="st_member">
    <a href="/home/Member/index">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM05.png">
      <em>我的化学加</em>
    </a>
  </div>
  <div class="stb_btn" id="st_message">
    <a href="/home/Member/message">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM06.png">
      <em>我的消息</em>
    </a>
  </div>
  <div class="stb_btn" id="st_recharge">
    <a href="http://www.huaxuejia.cn/home/Recharge/rechargeView">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM07.png">
      <em>我要充值</em>
    </a>
  </div>
  <div class="stb_btn" id="st_wechat">
    <a href="javascript:void(0);">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM08.png">
    </a>
    <img id="wcCode" src="http://www.huaxuejia.cn/Public/home/images/wechatcode.jpg">
  </div>
  <div class="stb_btn" id="st_top">
    <a href="#">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM09.png">
      <em>回到顶部</em>
    </a>
  </div>
</div>

<script type="text/javascript">
   /*用户登录Ajax*/
    $.ajax({
      url:'/index.php/home/Index/getLoginStatus',
      type:'post',
      datatype:'json',
      success:function(data){
        if(data['login_status']==0){
          $("#st_release,#st_cart,#st_shop,#st_member,#st_message,#st_recharge").children("a").attr("href","http://www.huaxuejia.cn/home/Login/login");
        }else{
          $('#zt').empty();
          $('#zt').append('<span><a href="/index.php/home/Index/index">首页</a></span><span><a href="/index.php/home/Member/index" class="sitenavRgName">'+data['nickname']+'</a></span><span><a href="/index.php/home/Cart/getCartInfo">购物车</a></span><span><a href="/index.php/home/Helpcenter/hc_faq">帮助中心</a></span><span><a style="cursor:pointer" onclick="out()">退出</a></span>');
          if(data.usertype==1){
            $("#st_shop").addClass("hidden");
          }else{
            if(data.is_check==0){
              $("#st_shop").children("a").attr("href","/index.php/home/Member/enterprise.html");
            }else{
              $("#st_shop").children("a").attr("href","/index.php/home/shop/index/eid/"+data.eid+".html");
            }
          }
        }
      }
    });

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
      <!--logo & searchBox-->
      <div class="headContent">
        <div class="container">
          <div class="hc_lf">
            <div class="logoSort">
              <div class="logo">
                <a href="/index.php/home/Index/index">
                  <img src="http://www.huaxuejia.cn/Public/home/images/logoweb.png">
                </a>
              </div>
              <div class="sort">
                <img class="shop-img" src="http://www.huaxuejia.cn/Public/home/images/shopTit.png">
              </div>
            </div>
          </div>
          <div class="hc_md">
            <p class="slogan">专业的化学化工医药产业资源供需及整合平台</p>
            <div class="input-group searchBox">
              <ul class="nav nav-tabs hc_list" role="tablist">
                <li role="presentation" class="active hc_li"><a href="#hsearch2" aria-controls="hsearch2" role="tab" data-toggle="tab">找产品</a></li>
                <li role="presentation" class="hc_li" id="gn"><a href="#hsearch5" aria-controls="hsearch5" role="tab" data-toggle="tab">产品求购</a></li>
                <li role="presentation" class="hc_li" id="gy"><a href="#hsearch3" aria-controls="hsearch3" role="tab" data-toggle="tab">找卖家</a></li>
                <li role="presentation" class="hc_li"><a href="#hsearch4" aria-controls="hsearch4" role="tab" data-toggle="tab">查百科</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active rightSearchBox" id="hsearch2">
                  <form action="/home/Goods/searchGoods" method ="get">
                  <div class="input-group hc_inbox searchFrame">
                    <input class="form-control" placeholder="产品供应专栏搜索，支持产品名称或CAS号" type="text" id="proSearch" name="search" required value="">
                    <span class="input-group-btn">
                      <input class="btn search_btn" type="submit" value="搜索">
                    </span>
                  </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane rightSearchBox" id="hsearch5">
                  <form action="/home/Goods/indexNeed" method ="get">
                  <div class="input-group hc_inbox">
                    <input class="form-control" placeholder="产品求购专栏搜索，支持产品名称或CAS号" type="text" id="proSearch" name="search" required value="">
                    <span class="input-group-btn">
                      <input class="btn search_btn" type="submit" value="搜索">
                    </span>
                  </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="hsearch3">
                  <form action="/home/Shop/shoplist" method="get">
                  <div class="input-group hc_inbox">
                    <input class="form-control" placeholder="供应商搜索，支持公司商号模糊搜索" type="text" name="gys" required value="">
                    <span class="input-group-btn">
                      <input class="btn search_btn" type="submit" value="搜索">
                    </span>
                  </div>
                </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="hsearch4">
                <form action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas">
                  <div class="input-group hc_inbox">
                    <input class="form-control" placeholder="支持化学品名称、化学式或CAS号搜索" type="text" name="search_keyword" required>
                    <span class="input-group-btn">
                      <input class="btn search_btn" type="submit" value="搜索">
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="hc_rg pr">
            <img class="r_img pa hidden-xs" src="http://www.huaxuejia.cn/Public/home/images/rsmall.gif">
            <div class="hc_contact">
              <em>400-8383-509</em>
              <p>(工作日8:30-17:30)</p>
            </div>
            <div class="hc_cart">
              <div class="hc_cartBtn" id="cartEnd">
                <a href="/index.php/home/Cart/getCartInfo">
                <span aria-hidden="true" id="u" u="/index.php/home/Cart/getCartGoodCnt"></span>购物车
                <span class="hc_cartNum">0</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div><!--/.logo & searchBox-->

         <script type="text/javascript">
          $(function(){
            var url = $('#u').attr('u');
            $.ajax({
              url:url,
              datatype:'json',
              success:function(d){
                var j = eval("("+d+")");
                 $('.hc_cartNum').empty();
                 $('.hc_cartNum').append(j['goods_num']);
              }

            });
          });
        </script>

      <!--菜单-->
      <div class="subNav">
        <div class="container">
          <ul class="subNavList list-inline">
              <li class="active"><a href="/index.php/home/index/index.html">首页</a></li>
              <li><a href="/index.php/home/Goods/index.html">产品供应</a></li>
              <li><a href="/index.php/home/Goods/indexNeed.html">求购信息</a></li>
              <li><a href="/index.php/home/shop/shoplist.html">商家展示</a></li>
              <li><a href="http://data.huaxuejia.cn" target="_blank">化学品百科</a></li>
          </ul>
          <div class="subNavOrder">
            <ul class="subNavOrderList list-inline">
              <li><a href="/index.php/home/Member/release_list">我要发布</a></li>
              <li><a href="/index.php/home/Index/tanks">入驻智库</a></li>
            </ul>
          </div>
        </div>
      </div><!--/.菜单-->
    </div><!--/.网页web头部-->

    <!--手机wap头部-->
    <div class="phoneHeader">
      <div class="ph_logo">
        <a href="/index.php/home/index/index.html">
          <img src="http://www.huaxuejia.cn/Public/home/images/line3.png">
        </a>
      </div>
      <div class="ph_btn">
        <ul class="list-inline">
          <li class="phBtn_pic phb_person"><a href="/index.php/home/Member/index"></a></li>
          <li class="phBtn_pic phb_cart"><a href="/index.php/home/Cart/getCartInfo"></a></li>
          <li class="phBtn_pic phb_menu"><a href="javascript:void(0);" data-toggle="collapse" ></a></li>
        </ul>
      </div>
      <!--phone search S-->
      <div class="ph_searchBox">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-sm dropdown-toggle phSearchBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="ph_dd mr5">选栏目搜索</span><span class="caret"></span></button>
            <ul class="dropdown-menu phone_searchBtn">
              <li><a href="#phInputPro">找产品</a></li>
              <li><a href="#phInputProNeed">产品求购</a></li>
              <li><a href="#proSearchSupply">找卖家</a></li>
              <li><a href="#phInputWiki">查百科</a></li>
            </ul>
          </div><!-- /btn-group -->
          <div class="phone_searchInput searchFrame">
            <form action="/index.php/home/Goods/searchGoods" method ="get">
              <input class="form-control" type="text" id="phInputPro" placeholder="产品供应专栏搜索，支持产品名称或CAS号" name="search" required>
            </form>
            <form action="/index.php/home/Goods/indexNeed" method ="get">
              <input class="form-control" type="text" id="phInputProNeed" placeholder="产品求购专栏搜索，支持产品名称或CAS号" name="search" required>
            </form> 
            <form action="/index.php/home/Shop/shoplist" method="get">
              <input class="form-control" type="text" id="proSearchSupply" placeholder="供应商搜索，支持公司商号模糊搜索" name="gys" required>
            </form>
            <form action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas">
              <input class="form-control" type="text" id="phInputWiki" placeholder="支持化学品名称、化学式或CAS号搜索" name="search_keyword">
            </form>
          </div>
        </div>
      </div>
      <!--phone search E-->
    </div>
    <div class="phoneMenu">
      <ul class="list-inline">
        <li><a href="/index.php/home/Goods"><img src="http://www.huaxuejia.cn/Public/home/images/menu3.png"></a><p>找产品</p></li>
        <li><a href="/index.php/home/Problem"><img src="http://www.huaxuejia.cn/Public/home/images/menu1.png"></a><p>克难题</p></li>
        <li><a href="/index.php/home/Technology"><img src="http://www.huaxuejia.cn/Public/home/images/menu2.png"></a><p>技术转让</p></li>
        <li><a href="/index.php/home/Incubate"><img src="http://www.huaxuejia.cn/Public/home/images/menu7.png"></a><p>项目整合</p></li>
        <li><a href="/index.php/home/Job"><img src="http://www.huaxuejia.cn/Public/home/images/menu17.png"></a><p>找工作</p></li>
        <li><a href="/index.php/home/Problem/synthetic_index"><img src="http://www.huaxuejia.cn/Public/home/images/menu11.png"></a><p>定制合成</p></li>
        <li><a href="/index.php/home/Park/park"><img src="http://www.huaxuejia.cn/Public/home/images/menu4.png"></a><p>园区推荐</p></li>
        <li><a href="/index.php/huaxuejia/news/index_1.html"><img src="http://www.huaxuejia.cn/Public/home/images/menu8.png"></a><p>资讯</p></li>
        <li><a href="/index.php/home/Index/tanks"><img src="http://www.huaxuejia.cn/Public/home/images/menu10.png"></a><p>入驻智库</p></li>
        <li><a href="/index.php/home/Member/release_list?url=www.huaxuejia.cn/index.php/Home/Member/release_list"><img src="http://www.huaxuejia.cn/Public/home/images/menu15.png"></a><p>发布供需</p></li>
      </ul>
    </div>
    <!--/.手机wap头部-->
    <!-- 登录弹框 -->
    <div class="modal fade" id="loginPopUp" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">欢迎会员登录</h4>
          </div>
          <div class="modal-body">
            <div class="tc mt5 mb5">
              <a href="" class="center-block"><img src="http://www.huaxuejia.cn/Public/home/images/logoweb.png" height="54" width="100"></a>
            </div>
                  <input type="hidden" name="url" value="www.huaxuejia.cn/home/Goods" id='url' attr="/index.php/home/Login/dologin"/>
                  <div class="form-group">
                    <label for="username">用户名：</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="支持已注册手机号" required>
                  </div>
                  <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码" required>
                  </div>
                  <div style="color:#A94442" id="errmsg"></div>
                  <button type="button" class="btn registerBtn w mt10 mb10" onclick="checkLogin(this);">登录</button>
                  <p class="loginbtmtext mb20"><a class="mr10" href="/index.php/home/Forgetkey/forgetkey">忘记密码</a>|<a class="ml10" href="/index.php/home/Login/register">免费注册</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--产品手机菜单-->
    <div class="proMenuPhone">
      <div  class="container visible-xs">
        <ul class="list-inline proMP_ul">
          <li><a href="/index.php/home/Index/index">首页</a></li>
          <li><a href="/index.php/home/Goods/index.html">产品供应</a></li>
          <li><a href="/index.php/home/Goods/indexNeed.html">求购信息</a></li>
          <li><a href="/index.php/home/shop/shoplist.html">商家展示</a></li>
          <li><a href="http://data.huaxuejia.cn" target="_blank">化学品百科</a></li>
        </ul>
      </div>
    </div>
    <!--content 中部内容-->
    
    <div class="wall">
      <!--nav-->
      <div class="container hidden-xs">
        <ol class="breadcrumb">
          <li><a href="/index.php/home/Index/index">首页</a></li>
          <li class="active">求购信息</li>
        </ol>
      </div><!--/.nav-->
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <!--tabMenu-->
            <ul class="nav nav-tabs list-tabBtn" role="tablist">
              <li role="presentation"><a href="/index.php/home/goods/index">供应信息</a></li>
              <li role="presentation" class="active"><a href="/index.php/home/goods/indexNeed">求购信息</a></li>
              <li class="listTabTips">（发布虚假求购信息将列入黑名单，欢迎网友向化学加致电或者邮件举报 cs@huaxuejia.cn）</li>
            </ul>
            <!-- Tab panes -->
            <!--求购信息-->
              <div role="tabpanel" class="tab-pane tab_inbox" id="nTab">
                                <!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/943/32943-25-2.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="3-氯亚氨基二苄" class="info_tit">3-氯亚氨基二苄</a>
                            </li>
                             <li>
                              <span class="in_va">
                                    <em>增</em>增值发票
                                  </span>                            </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>32943-25-2</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>湖北省武汉市市辖区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>13554219456</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-07</span></li>
                            <li>截止日期：<span>2018-02-22</span>
                                                            </li>
                          
                            <li>采购数量：<span>2ton</span></li>
                            <li>需求纯度：<span>99</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/305/113305-94-5.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="2-氨基-5-氰基吡嗪" class="info_tit">2-氨基-5-氰基吡嗪</a>
                            </li>
                             <li>
                              <span class="in_va">
                                    <em>增</em>增值发票
                                  </span>                            </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>113305-94-5</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>上海市市辖区静安区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>18916958590</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-06</span></li>
                            <li>截止日期：<span>2018-02-13</span>
                                                            </li>
                          
                            <li>采购数量：<span>25kg</span></li>
                            <li>需求纯度：<span>98%</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/358/1061358-78-8.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="2-chloro-5-(trifluoromethyl)pyridin-4-amine" class="info_tit">2-chloro-5-(trifluoromethyl)pyridin-4-amine</a>
                            </li>
                             <li>
                              <span class="in_va">
                                    <em>增</em>增值发票
                                  </span>                            </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>1061358-78-8</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>上海市市辖区静安区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>18916958590</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-06</span></li>
                            <li>截止日期：<span>2018-02-13</span>
                                                            </li>
                          
                            <li>采购数量：<span>25kg</span></li>
                            <li>需求纯度：<span>98%</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/133/130133-53-8.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="2 amino 6 nitro benzaldehyde" class="info_tit">2 amino 6 nitro benzaldehyde</a>
                            </li>
                             <li>
                                                          </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>130133-53-8</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>上海市市辖区静安区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>18916958590</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-06</span></li>
                            <li>截止日期：<span>2018-02-13</span>
                                                            </li>
                          
                            <li>采购数量：<span>1kg</span></li>
                            <li>需求纯度：<span>98%</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/102/10102-17-7.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="硫代硫酸钠" class="info_tit">硫代硫酸钠</a>
                            </li>
                             <li>
                              <span class="in_va">
                                    <em>增</em>增值发票
                                  </span>                            </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>10102-17-7</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>湖北省武汉市市辖区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>13816121255</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-05</span></li>
                            <li>截止日期：<span>2018-03-07</span>
                                                            </li>
                          
                            <li>采购数量：<span>1ton</span></li>
                            <li>需求纯度：<span>99</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/311/311-28-4.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="四丁基碘化铵" class="info_tit">四丁基碘化铵</a>
                            </li>
                             <li>
                                                          </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>311-28-4</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>湖北省武汉市市辖区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>13816121255</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-02-03</span></li>
                            <li>截止日期：<span>2018-05-04</span>
                                                            </li>
                          
                            <li>采购数量：<span>1kg</span></li>
                            <li>需求纯度：<span>99</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/368/18368-64-4.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="2-氯-5-甲基吡啶" class="info_tit">2-氯-5-甲基吡啶</a>
                            </li>
                             <li>
                                                          </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>18368-64-4</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>江西省宜春市上高县</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>13362787733</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-01-23</span></li>
                            <li>截止日期：<span>2018-02-22</span>
                                                            </li>
                          
                            <li>采购数量：<span>5kg</span></li>
                            <li>需求纯度：<span>98.5%</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox--><!--infoBox-->
                    <div class="infoBox">
                      <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-4">
                          <div class="info_pic">
                            <a href="javascript:void(0);">
                                                          <img src="http://data.huaxuejia.cn/casimg/912/14912-91-5.png">                            </a>
                          </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-xs-8 ">
                          <ul class="infoNeed_list">
                            <li>
                              <a href="javascript:void(0);" title="CesiumStearate" class="info_tit">CesiumStearate</a>
                            </li>
                             <li>
                                                          </li>
                            <li>
                              <div class="infoNeed_p">
                                CAS号：<span>14912-91-5</span>
                              </div>
                           
                              <div class="infoNeed_p">
                                <p><span class="glyphicon glyphicon-map-marker"></span>
                                <span>广东省珠海市香洲区</span></p>
                                <p><span class="glyphicon glyphicon-earphone"></span><span>15013835922</span></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-sm-3 col-xs-9">
                          <ul class="needInfo_list">
                            <li>发布日期：<span>2018-01-22</span></li>
                            <li>截止日期：<span>2018-02-21</span>
                                                            </li>
                          
                            <li>采购数量：<span>5g</span></li>
                            <li>需求纯度：<span>&gt;99.9%</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-3">
                                                           <div class="infoNeed_btn">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#loginPopUp">我要报价</a>
                                                                 </div>
                                                       
                        </div>
                      </div>
                    </div><!--/.infoBox-->               <!-- 报价弹框 -->
                  <div class="modal fade" id="offerPrice" tabindex="-1" role="dialog" aria-labelledby="offerPricelLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title oP_title">报价</h4>
                        </div>
                        <div class="modal-body">
                          <form>
                            <input type="hidden" value="" name="purchase_id" id="putid" />
                            <input type="hidden" value="" name="rel_user_id" id="pduid"/>
                            <div class="form-group">
                              <label class="control-label">
                                <span class="redstar">*</span>报价:
                              </label>
                              <input class="form-control item-inputframe" type="text" id="price" name="money" required placeholder="请填写你的报价">
                            </div>
                            <div class="form-group">
                              <label class="control-label">报价备注:</label>
                              <textarea class="form-control" name="mark" id="mark"></textarea>
                            </div>
                            <div class="form-group">
                              <label class="control-label">
                                <span class="redstar">*</span>公司名称:
                              </label>
                              <input type="text" class="form-control" id="cname" name="cname" value="test">
                            </div>
                            <div class="form-group">
                              <label class="control-label">
                                <span class="redstar">*</span>联系人:
                              </label>
                              <input type="text" class="form-control" id="cp" name="contact_people" value="陆陆陆">
                            </div>
                            <div class="form-group">
                              <label class="control-label">
                                <span class="redstar">*</span>联系电话:
                              </label>
                              <input type="telphone" class="form-control" id="tel" name="telphone" required value="13202070630">
                            </div>
                             <div class="modal-footer">
                                <input type="reset" class="btn btn-default" data-dismiss="modal" value="取消">
                                <input type="button" class="btn btn-primary" onclick="subBtn(this);" value="立即报价">
                              </div>
                          </form>
                        </div>
                
                      </div>
                    </div>
                  </div>
     
                <!--分页-->
                <div class="tc">
                  <nav>
                    <div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/3.html">3</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/4.html">4</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/5.html">5</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/6.html">6</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/7.html">7</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/8.html">8</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/9.html">9</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/10.html">10</a></li><li class="paginate_button"><a class="num" href="/goods/indexneed/p/11.html">11</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/goods/indexneed/p/2.html">下一页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><a class="end" href="/goods/indexneed/p/55.html">尾页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><span class="rows">共 438 条记录</span></li></ul></div>                 </nav>
                </div>
              </div>
          </div>
          <div class="col-lg-3">
            <div class="pubInfoBtn tc">
              <a href="/home/Member/ucp_product_need&url=www.huaxuejia.cn/index.php/Home/Member/ucp_product_need">立即发布产品需求</a>
            </div>
            <!--报价动态-->
            <div class="hot_pro">
               <h2 class="hotpro_tit"><span class="glyphicon glyphicon-time colordarkblue ml5 mr5 f18"></span>报价动态</h2>
              <ul class="needDyna_ul ml10 mr10">
               <!--hotpro_frame-->
              <li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>9天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="丁酸">丁酸</a>
                    <span class="nDyna_count">10ton</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>17天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="亚磷酸三甲酯">亚磷酸三甲酯</a>
                    <span class="nDyna_count">10kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>17天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="碳酸钾">碳酸钾</a>
                    <span class="nDyna_count">2kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>20天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="3-邻苯二甲酰亚胺丙醛">3-邻苯二甲酰亚胺丙醛</a>
                    <span class="nDyna_count">1-10kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>23天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="甲基磺酸  ">甲基磺酸  </a>
                    <span class="nDyna_count">1kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>28天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="神经酸">神经酸</a>
                    <span class="nDyna_count">1kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>29天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="乙酰乙酸叔丁酯">乙酰乙酸叔丁酯</a>
                    <span class="nDyna_count">500ml</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>29天前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="乙酰乙酸叔丁酯">乙酰乙酸叔丁酯</a>
                    <span class="nDyna_count">500ml</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>1个月前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="甲酸乙酯">甲酸乙酯</a>
                    <span class="nDyna_count">500ml</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>1个月前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="甲酸钠">甲酸钠</a>
                    <span class="nDyna_count">1kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>1个月前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="间三氟甲基苯乙腈">间三氟甲基苯乙腈</a>
                    <span class="nDyna_count">50ton</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li><li>
                  <div>
                    <span class="nDyna_dot"></span>
                    <p class="nDyna_time"><span><em></em></span>1个月前发布</p>
                  </div>
                  <div class="nDyna_info">
                    <a class="nDyna_tit" href="javascript:void(0);" title="生产汽车仪表盘用脱模剂">生产汽车仪表盘用脱模剂</a>
                    <span class="nDyna_count">100kg</span>
                    <span class="nDyna_state">已报价</span>
                  </div>
                </li>              </ul>
            </div>
            <img src="/Public/home/images/pNeedSidePic.jpg" class="w mt20 hidden-sm hidden-xs">
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(function(){
        $('#gn').addClass('active');
        $('#gn').siblings().removeClass('active');
        $('#hsearch5').addClass('active rightSearchBox');
        $('#hsearch5').siblings().removeClass('active rightSearchBox');
      });

      function subBtn(obj) {

            var p1= $('#putid').val();
            var p2= $('#pduid').val();
            var p3= $('#price').val();
            var p4= $('#mark').val();
            var p5= $('#cname').val();
            var p6= $('#cp').val();
            var p7= $('#tel').val();

            if(p3==''||p5==''||p6==''||p7==''){
              swal('必填项不能为空');
            }else{
                $(obj).val('报价提交中,请稍等....');
                $(obj).attr('disabled','disabled');
                $.ajax({
                  url:'/home/goods/offer_add',
                  data:'purchase_id='+p1+'&rel_user_id='+p2+'&money='+p3+'&mark='+p4+'&cname='+p5+'&contact_people='+p6+'&telphone='+p7,
                  type:'post',
                  datatype:'json',
                  success:function(d) {
                    if(d['status']==-1){
                      swal(d['msg']);
                      $(obj).attr('disabled',false);
                    }else if(d['status']==1){
                      swal(d['msg']);
                      $(obj).attr('disabled',false);
                      $('.close').click();
                    }else{
                      swal('报价失败');
                      $(obj).attr('disabled',false);
                    }
                    $(obj).val('立即报价');
                  }
                })
            }
    }

    </script>
    <script type="text/javascript">
          function put(id,uid) {
            $('#putid').val(id);
            $('#pduid').val(uid);
          }
    </script>
     <script src="/Public/home/js/product.js"></script>

    <!--/.content 中部内容-->

    <!--页脚-->
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
    <!--/.页脚-->

    <script src="/Public/home/js/headFoot.js"></script>

    <!--飞入购物车效果
    <script src="/Public/home/js/jquery.fly.min.js"></script>-->
    <!--[if lte IE 9]>
    <script src="../js/requestAnimationFrame.js"></script>
    <![endif]-->
    
    <!--搜索联想UI-->
    <script type="text/javascript" src="/Public/home/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/home/ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="/Public/home/ui/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="/Public/home/ui/jquery.ui.position.js"></script>
    <script type="text/javascript" src="/Public/home/ui/jquery.ui.autocomplete.js"></script>
    <script type="text/javascript">
    $(function(){
      $( "#proSearch" ).autocomplete({
        source: "/index.php/home/Search/proSearch",
        minLength: 1,
        autoFocus:true,
      });
    });
    </script>
  </body>
</html>