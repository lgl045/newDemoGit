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
    
    <!-- 头部已调用内容 无需调用-->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/formValidation.css">
    <script src="/Public/home/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/swiper.min.css"> 
    <script src="/Public/home/js/swiper.min.js"></script>
    <link rel="stylesheet" href="/Public/home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/index.css">
    <link rel="stylesheet" type="text/css" href="/Public/home/css/ntstyle.css">
	<link href="/Public/home/css/mIndex.css" rel="stylesheet">
    
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
  </head>
  <body>
    <!-- 头部 -->
    <header>
      <!--网页web头部-->
      <img src="http://www.huaxuejia.cn/Public/home/images/bdLogo.jpg" class="hidden" alt="化学加" title="化学加" />
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
          <span><a href="/index.php/home/Login/login">会员登录</a></span>
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
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM01.png">
      <em>在线客服</em>
    </a>
  </div>
  <div class="stb_btn" id="st_release">
    <a href="/index.php/home/Member/release_list">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM02.png">
      <em>快速发布</em>
    </a>
  </div>
  <div class="stb_btn" id="st_cart">
    <a href="/index.php/home/Cart/getCartInfo">
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
    <a href="/index.php/home/Member/index">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM05.png">
      <em>我的化学加</em>
    </a>
  </div>
  <div class="stb_btn" id="st_message">
    <a href="/index.php/home/Member/message">
      <img src="http://www.huaxuejia.cn/Public/home/images/sideBM06.png">
      <em>我的消息</em>
    </a>
  </div>
  <div class="stb_btn" id="st_recharge">
    <a href="/index.php/home/Recharge/rechargeView">
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
          $("#st_release,#st_cart,#st_shop,#st_member,#st_message,#st_recharge").children("a").attr("href","/index.php/home/Login/login");
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
            <div class="in_lf">
              <div class="logoSort">
                <div class="logo">
                  <a href="/index.php/home/Index/index">
                    <img src="http://www.huaxuejia.cn/Public/home/images/logoweb.png">
                  </a>
                </div>
              </div>
            </div>
            <div class="in_md">
              <p class="in_slogan">专业的化学化工医药产业资源供需及整合平台</p>
              <div class="input-group in_searchBox">
                <ul class="nav nav-tabs hc_list" role="tablist">
                  <li role="presentation" class="hc_li active"><a href="#hsearch4" aria-controls="hsearch4" role="tab" data-toggle="tab">查百科</a></li>
                  <li role="presentation" class="hc_li"><a href="#hsearch2" aria-controls="hsearch2" role="tab" data-toggle="tab">找产品</a></li>
                  <li role="presentation" class="hc_li" id="hb"><a href="#hsearch1" aria-controls="hsearch1" role="tab" data-toggle="tab">找技术</a></li>
                  <li role="presentation" class="hc_li"><a href="#hsearch3" aria-controls="hsearch3" role="tab" data-toggle="tab">找卖家</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content"> 
                  <div role="tabpanel" class="tab-pane active" id="hsearch4">
                    <form action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas" target="_blank">
                      <div class="input-group hc_inbox">
                        <input class="form-control" placeholder="支持化学品名称、化学式或CAS号搜索" type="text" name="search_keyword">
                        <span class="input-group-btn">
                          <input class="btn search_btn" type="submit" value="搜索一下">
                        </span>
                      </div>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane rightSearchBox" id="hsearch2">
                    <form action="/home/Goods/searchGoods" method ="get">
                      <div class="input-group hc_inbox searchFrame">
                        <input class="form-control" placeholder="产品供应栏搜索，支持产品名称或CAS号" type="text" id="proSearch" name="search" required>
                        <span class="input-group-btn">
                          <input class="btn search_btn" type="submit" value="搜索一下">
                        </span>
                      </div>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="hsearch1">
                    <form action="/home/Search/" method="post">
                      <div class="input-group hc_inbox">
                        <input class="form-control" placeholder="企业难题、技术供需、项目整合栏搜索" type="text" name="search" required value="">
                        <span class="input-group-btn">
                          <input class="btn search_btn" type="submit" value="搜索一下">
                        </span>
                      </div>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="hsearch3">
                    <form action="/home/Shop/shoplist" method="get">
                      <div class="input-group hc_inbox">
                        <input class="form-control" placeholder="会员企业搜索，支持公司商号模糊搜索" type="text" name="gys" required>
                        <span class="input-group-btn">
                          <input class="btn search_btn" type="submit" value="搜索一下">
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="in_rg pr">
              <img class="r_img pa hidden-xs" src="http://www.huaxuejia.cn/Public/home/images/rsmall.gif">
              <div class="in_fastBtn">
                <span>
                  <a href="/index.php/home/Index/tanks" type="button">入驻智库</a>
                </span>
                <span>
                  <a href="/index.php/home/Member/release_list" type="button">免费发布供需</a>
                </span>
                <span>
                  <a href="http://data.huaxuejia.cn" target="_blank" type="button">查百科</a>
                </span>
              </div>
              <!-- <div class="hc_contact">
                <span>服务热线：</span>
                <em>400-8383-509</em>
                <p class="tr">(工作日8:30-17:30)</p>
              </div>
 -->
            </div>
          </div>
        </div><!--/.logo & searchBox-->
        <!--菜单-->
        <div class="subNav">
          <div class="container">
            <ul class="in_subNavList list-inline">
              <li class="active" role="menuhometab"><a href="/home/Index/index">首&nbsp;页<span class="sr-only">(current)</span></a></li>
                <li role="menuhometab"><a href="/index.php/Home/Goods">产品商城</a></li>
                <li role="menuhometab"><a href="/index.php/home/Goods/indexNeed.html">求购信息</a></li>
                <li role="menuhometab" class="menu_pull_control">
                  <a href="/index.php/home/Problem" >难题悬赏</a>
                  <div class="tech_pull_Btn">
                    <span><a href="/index.php/home/Problem">难题悬赏</a></span>
                    <span><a href="/index.php/home/Problem/synthetic_index">定制合成</a></span>
                  </div>
                </li>
                <li role="menuhometab">
                  <a href="/index.php/home/Technology">技术转让</a>
                </li>
                <li role="menuhometab" class="menu_pull_control"><a href="/index.php/home/Incubate">项目整合</a>
                  <div class="tech_pull_Btn">
                    <span><a href="/index.php/home/Incubate">项目整合</a></span>
                    <span><a href="/index.php/home/Park/park">园区推荐</a></span>
                  </div>
                </li>
                <!-- <li role="menuhometab"><a href="/home/Job">找工作</a></li> -->
                <li role="menuhometab"><a href="/index.php/home/shop/shoplist.html">商家展示</a></li>
                <li role="menuhometab"><a href="/index.php/home/news/index.html">资&nbsp;讯</a></li>
            </ul>
          </div>
        </div><!--/.菜单-->
      </div><!--/.网页web头部-->
      <!--手机wap头部-->
      <div class="phoneHeader">
        <div class="ph_logo">
          <a href="/index.php/home/Index/index">
            <img src="http://www.huaxuejia.cn/Public/home/images/line3.png">
          </a>
        </div>
        <div class="ph_btn">
          <ul class="list-inline">
            <li class="phBtn_pic phb_person"><a href="/index.php/home/Member/index"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li class="phBtn_pic phb_cart"><a href="/index.php/home/Cart/getCartInfo"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li class="phBtn_pic phb_menu"><a href="javascript:void(0);" data-toggle="collapse" ><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li>
          </ul>
        </div>
        <!--phone search S-->
        <div class="ph_searchBox">
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-sm dropdown-toggle phSearchBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="ph_dd mr5">选栏目搜索</span><span class="caret"></span></button>
              <ul class="dropdown-menu phone_searchBtn">
                <li><a href="#phInputWiki">查百科</a></li>
                <li><a href="#phInputPro">找产品</a></li>
                <li><a href="#phInputAll">找技术</a></li>
                <li><a href="#proSearchSupply">找卖家</a></li>
              </ul>
            </div><!-- /btn-group -->
            <div class="phone_searchInput searchFrame">
              <form action="http://data.huaxuejia.cn/search.php" method="get" id="form_cas">
                <input class="form-control" type="text" id="phInputWiki" placeholder="支持化学品名称、化学式或CAS号搜索" name="search_keyword">
              </form>
              <form action="/index.php/home/Goods/searchGoods" method ="get">
                <input class="form-control" type="text" id="phInputPro" placeholder="产品供应栏搜索，支持产品名称或CAS号" name="search" required>
              </form> 
              <form action="/index.php/home/Search/" method="post">
                <input class="form-control" type="text" id="phInputAll" placeholder="企业难题、技术供需、项目整合栏搜索" name="search" required >
              </form>
              <form action="/index.php/home/Shop/shoplist" method="get">
                <input class="form-control" type="text" id="proSearchSupply" placeholder="会员企业搜索，支持公司商号模糊搜索" name="gys" required>
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
          <li><a href="/index.php/home/Problem/synthetic_index"><img src="http://www.huaxuejia.cn/Public/home/images/menu11.png"></a><p>定制合成</p></li>
          <li><a href="/index.php/home/Incubate"><img src="http://www.huaxuejia.cn/Public/home/images/menu7.png"></a><p>项目整合</p></li>
          <li><a href="/index.php/home/Job"><img src="http://www.huaxuejia.cn/Public/home/images/menu17.png"></a><p>找工作</p></li>
          <li><a href="/index.php/home/Park/park"><img src="http://www.huaxuejia.cn/Public/home/images/menu4.png"></a><p>园区推荐</p></li>
          <li><a href="/index.php/home/news/index.html"><img src="http://www.huaxuejia.cn/Public/home/images/menu8.png"></a><p>资讯</p></li>
          <li><a href="/index.php/home/Index/tanks"><img src="http://www.huaxuejia.cn/Public/home/images/menu10.png"></a><p>入驻智库</p></li>
          <li><a href="/index.php/home/shop/shoplist.html"><img src="http://www.huaxuejia.cn/Public/home/images/menu19.png"></a><p>商家展示</p></li>
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
                    <input type="hidden" name="url" value="" id="url" attr="/index.php/home/Login/dologin"/>
                    <div class="form-group">
                      <label for="username">用户名：</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="支持已注册手机号" required>
                    </div>
                    <div class="form-group">
                      <label for="password">密码：</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码" required>
                    </div>
                     <div style="color:#A94442" id="errmsg"></div>
                    <button type="button" class="btn registerBtn w mt10 mb10" onclick="checkLogin();">登录</button>
                    <p class="loginbtmtext mb20"><a class="mr10" href="/index.php/home/Forgetkey/forgetkey">忘记密码</a>|<a class="ml10" href="/index.php/home/Login/register">免费注册</a></p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--content 中部内容-->
      
<div class="container technologyWall">
    <!--列表页顶部内容-->
    <div class="pageTop">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="/index.php/home/Index/index">首页</a></li>
          <li class="active">项目整合列表页</li>
        </ol>
      </div>
    </div>
</div>
<div class="container">
    <!--content-->
  <div class="row">
        <!--热门推荐-->
        <div class="col-md-3 col-xs-12 des-sidebar pull-right sidebar-nav pr" id="sidebar">
          
          <img src="http://www.huaxuejia.cn/Public/home/images/hot.png" class="img-responsive hotSign">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">热门推荐</h3>
              </div>
              <div class="panel-body des-hotpanel">
              <div class=" col-lg-12 col-sm-6 col-xs-12 thumbnail mb20 blueFrame">
                      <div class="title">
                        <a href="/home/incubate/detail?id=51" class="">十字花科植物防辐射抗衰老天然产物ES602项目</a>
                      </div>
                      <div class="row mt10">
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>资金资本</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>销售市场</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel">2017-07-07</span>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class=" col-lg-12 col-sm-6 col-xs-12 thumbnail mb20 blueFrame">
                      <div class="title">
                        <a href="/home/incubate/detail?id=49" class="">化学镀镍项目</a>
                      </div>
                      <div class="row mt10">
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>研发技术</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel">2017-06-20</span>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class=" col-lg-12 col-sm-6 col-xs-12 thumbnail mb20 blueFrame">
                      <div class="title">
                        <a href="/index.php/home/incubate/detail?id=48" class="">新型半固体香波寻求合作商</a>
                      </div>
                      <div class="row mt10">
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>资金资本</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>销售市场</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>全职牵头人</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel">2017-05-23</span>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class=" col-lg-12 col-sm-6 col-xs-12 thumbnail mb20 blueFrame">
                      <div class="title">
                        <a href="/index.php/home/incubate/detail?id=47" class="">国际仿制药巨头股权并购项目</a>
                      </div>
                      <div class="row mt10">
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>资金资本</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-6">
                          <span class="infolabel">2017-05-19</span>
                        </div>
                      </div>
                </div> <!-- techpanel End-->              </div>
            </div>
        </div>
        <!--热门推荐end-->
        <!--项目模块-->
        <div class="col-md-9 col-xs-12 pull-left">
          <div class="row">
            <!--searchbar-->
            <!--栏目说明-->
          <div id="descriNavBox" class="descriNav mb10 pr">
            <p id="descriNavContent" class="descriUp">
              <b>栏目说明：</b>化学化工生产中，或者创业之初，要完成一个项目往往需要多方面的资源要素，如你已具备某方面，或者某几方面的资源，想通过化学加找到与你资源互补的其它合作方，则可以注册登录后发布，也可以在本栏目寻求其它合作方。</p>
            <div class="color6 desDownBtn" style="right:10px;">▼</div>
          </div>
          <script>
          $(function(){
            $("#descriNavBox").mouseenter(function(){
              $("#descriNavContent").removeClass("descriUp");
              $("#descriNavContent").addClass("descriDown");
            });
            $("#descriNavBox").mouseleave(function(){
              $("#descriNavContent").removeClass("descriDown");
              $("#descriNavContent").addClass("descriUp");
            });
          });
          </script>
            <!--searchbar-end-->
            <div class="item-list"> 
              <div class="">
                <div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=70">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/home/incubate/detail?id=70">提供实验室＋中试生产平台</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2018-01-19</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=70" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=69">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/home/incubate/detail?id=69">医药中间体项目求落地生产</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2018-01-18</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=69" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/home/incubate/detail?id=68">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/home/incubate/detail?id=68">酶制剂代工</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2018-01-11</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=68" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=67">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/index.php/home/incubate/detail?id=67">国内某大型化工集团项目引进发布</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2018-01-11</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/home/incubate/detail?id=67" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=66">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/index.php/home/incubate/detail?id=66">医药农药中间体生产</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2017-12-14</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=66" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=65">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/index.php/home/incubate/detail?id=65">上海浦东500平方有机合成实验室转让</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2017-10-24</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=65" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End--><div class="thumbnail clearfix col-lg-12 col-sm-6 col-xs-12 blueFrame pr" >
                                          <a href="/index.php/home/incubate/detail?id=62">
                      <div class="col-md-8 col-xs-12">
                        <div class="title">
                          <a class="infotitle" href="/index.php/home/incubate/detail?id=62">广西地区某公司招商合作发布</a>
                        </div>
                        <div class="row mt10">
                          <div class="col-md-2 col-xs-4 pr0">
                          <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>资金资本</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>研发技术</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>生产工厂</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-unchecked color9" aria-hidden="true"></span>销售市场</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel"><span class="glyphicon glyphicon-check colordarkblue" aria-hidden="true"></span>全职牵头人</span>
                          </div>
                          <div class="col-md-2 col-xs-4 pr0">
                            <span class="infolabel">2017-09-20</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 visible-lg-block pr">
                        <a href="/index.php/home/incubate/detail?id=62" class="btn btn-primary joinsm mt20 abs-r10" >了解详情</a>
                      </div>
                      
                    </a>
                      
                  </div><!--techpanel End-->              </div>
              <!--分页-->
              <nav>
                <div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/3.html">3</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/4.html">4</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/5.html">5</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/6.html">6</a></li><li class="paginate_button"><a class="num" href="/incubate/index/p/7.html">7</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/incubate/index/p/2.html">下一页</a></li>  <li id="example1_previous" class="paginate_button previous disabled"><span class="rows">共 48 条记录</span></li></ul></div>              </nav><!--分页end-->
            </div>  
          </div><!--项目模块end--> 
        </div><!--col-md-9-col-xs-12-end-->
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script type="text/javascript">
     (function(){
        $("title").html("化学加网_项目整合");
      })();
      $(function(){
        $('#hb').addClass('active');
        $('#hb').siblings().removeClass('active');
        $('#hsearch1').addClass('active rightSearchBox');
        $('#hsearch1').siblings().removeClass('active rightSearchBox');
      });
    </script>
    <!--公用js-->
    <script type="text/javascript" src="/Public/home/js/common.js"></script>

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