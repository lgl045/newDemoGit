<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=keywords content="<?php echo ($datas['webname']); ?>">
    
    <meta name="description" content="<?php echo ($datas['webname']); ?>"/>
    <link rel="icon" href="/Public/home/images/favicon.ico">
    
      <title><?php echo ($datas['webname']); ?></title>
    
    <!-- 头部已调用内容 无需调用-->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/formValidation.css">
    <script src="/Public/home/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/swiper.min.css"> 
    <script src="/Public/home/js/swiper.min.js"></script>
    <link rel="stylesheet" href="/Public/home/css/common.css">
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
<div class="phone">

    <!--轮播图-->

    <div class="mBanner">

      <div class="swiper-container ms_banner">

        <div class="swiper-wrapper">

          <div class="swiper-slide">

              <a href="/index.php/Home/View/Promotion/rechargeIns.html"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2018-02-01/1517474807_6441.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1172.html"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2018-02-01/1517474945_9041.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://www.huaxuejia.cn/huaxuejia/Home/View/Promotion/enterIns.html"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2017-10-19/1508392664_9711.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://www.huaxuejia.cn"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2018-01-09/1515481987_3969.jpg"></a>

            </div><div class="swiper-slide">

              <a href="https://sinoexpo.ubmonlinereg.com.cn/Registration/Default.aspx?fid=763&amp;lang=cn&amp;source=huaxuejia&amp;utm_source=huaxuejia&amp;utm_medium=huaxuejia&amp;utm_campaign=banner"><img src="/Public/Uploads_photo/2018-02-01/1517474969_3727.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://www.huaxuejia.cn"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2017-10-19/1508392710_7178.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://data.huaxuejia.cn"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2017-11-13/1510558110_1720.jpg"></a>

            </div><div class="swiper-slide">

              <a href="http://www.chiralchemcorp.com/"><img src="http://www.huaxuejia.cn/Public/Uploads_photo/2017-11-30/1512029745_6307.jpg"></a>

            </div>
        </div>

        <!-- Add Pagination -->

        <div class="swiper-pagination"></div>

      </div>

    </div>

    <!--按钮资讯-->

    <div class="mMenu" id="front">

      <a href="/index.php/home/Login/login">

        <img src="http://www.huaxuejia.cn/Public/home/images/mInBtn1.png">

        <p>会员登录</p>

      </a>

      <a href="/index.php/home/Login/register">

        <img src="http://www.huaxuejia.cn/Public/home/images/mInBtn2.png">

        <p>免费注册</p>

      </a>

      <a href="/index.php//home/Member/release_list">

        <img src="http://www.huaxuejia.cn/Public/home/images/mInBtn3.png">

        <p>发布供需</p>

      </a>

      <a href="http://data.huaxuejia.cn">

        <img src="http://www.huaxuejia.cn/Public/home/images/mInBtn4.png">

        <p>化学品百科</p>

      </a>

      <a href="/index.php/home/shop/shoplist.html">

        <img src="http://www.huaxuejia.cn/Public/home/images/mInBtn5.png">

        <p>商家展示</p>

      </a>

    </div>

    <div class="mNews">

      <div class="mNewTit">

        热门资讯

      </div>

      <div class="swiper-container mNew_list">

        <div class="swiper-wrapper">

          <div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1248.html" class="wto">广东省科技厅杂志《广东科技》对化学加网的专访报道</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1247.html" class="wto">【36氪】获千万元融资，「化学加网」整合化工医药产学研资源，提升产品质量</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1239.html" class="wto">热烈祝贺化学加荣膺“2017中国B2B行业新锐势力榜”大奖</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1172.html" class="wto">央视CCTV-2财经频道隆重介绍化学加，产业互联网的挑战、机遇在哪里？</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1052.html" class="wto">化学加网参加第77届 API China 原料药展会</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1030.html" class="wto">化学加网CEO肖文华做客兰大化学院2016年“鼎峰计划”校友论坛</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1024.html" class="wto">兰州大学化学化工学院、功能有机分子化学国家重点实验室 诚聘海内外英才</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_1009.html" class="wto">中国青年报：“化学加”网获108位化学教授签名赠书</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_978.html" class="wto">广东省科技厅副厅长郑海涛一行六人考察化学加网</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_957.html" class="wto">化学加网与兰州大学白银产业技术研究院签订战略合作协议</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_737.html" class="wto">一曲优美的化学版《青花瓷》，歌词没有任何违和感，天才出品！</a>

            </div><div class="swiper-slide">

                <a href="http://www.huaxuejia.cn/huaxuejia/news/html/news_841.html" class="wto">化学+网与舞阳县人民政府在浙江台州签定战略合作框架协议</a>

            </div>
        </div>

      </div>

    </div>

    <!-- 商家展示 -->

    <div class="mSupplier">

      <div class="mTit">

        <span>商家展示</span>

        <span class="mSign">

          <a href="/index.php/home/shop/shoplist.html">更多</a>

        </span>

      </div>

      <div class="swiper-container mSup_list">

        <div class="swiper-wrapper">

        <div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-08-14/1502689517_5285.png">

            </div>

            <div class="mSup_info">

              <a href="/index.php/home/shop/index?eid=4150">河北松辰医药科技有限公司</a>

              <p>联系电话：0319-5801333-808</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-27/1514342061_3110.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=1678">上海氟睿精细化学有限公司</a>

              <p>联系电话：021-36041048</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-10-19/1508381837_9700.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52798">杭州诺维和医药技术有限公司</a>

              <p>联系电话：0571-61074567</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-04/1512382561_9755.jpg">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52508">山西津津化工有限公司宁波办事处</a>

              <p>联系电话：柴先生13867851529</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-11-21/1511234047_3383.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52869">上海奥普迪诗化学科技有限公司</a>

              <p>联系电话：021-34621844</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-27/1514341801_2075.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=12905">成都福尔斯特医药技术有限公司</a>

              <p>联系电话：028-87074958</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="/Public/Uploads_enterprise/2017-09-07/1504779780_5835.jpg">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52659">常州方德环境科技有限公司</a>

              <p>联系电话：18912331050</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2016-12-19/1482141212_5013.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=917">盐城美茵新材料有限公司</a>

              <p>联系电话：0515-87225681</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-06-29/1498706876_4068.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=26255">六安佳诺生化科技有限公司</a>

              <p>联系电话：0564-3619988</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-27/1514344508_9438.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=329">甘肃皓天化学科技有限公司</a>

              <p>联系电话：0931-8238232 0931-8279182</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-08-31/1504148345_1804.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52452">南京康德祥医药科技有限公司</a>

              <p>联系电话：025-52685700</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-09-12/1505208985_8926.jpg">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=5887">上海速博化学科技有限公司</a>

              <p>联系电话：021-54820552</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-09-06/1504709253_1092.jpg">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52625">上海索客化工科技有限公司</a>

              <p>联系电话：021-34292603</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2016-12-12/1481519633_2189.jpg">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=648">山东中科泰斗化学有限公司</a>

              <p>联系电话：0531-88682396</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-11/1512984327_1887.gif">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52399">石家庄手性化学有限公司</a>

              <p>联系电话：0311-85291771</p>

            </div>

          </div><div class="swiper-slide mSupBox">

            <div class="mSup_img">

              <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-12-27/1514359777_9673.png">

            </div>

            <div class="mSup_info">

              <a href="/home/shop/index?eid=52866">上海宽田化工有限公司</a>

              <p>联系电话：13916443339</p>

            </div>

          </div>
        </div>

      </div>

    </div>
    
    <!-- 已入驻本网站的部分上市公司 -->

    <div class="mFamous">

      <div class="mTit">

        <span>合作名企</span>

      </div>

      <div class="swiper-container mFam_list">

        <div class="swiper-wrapper">

          <div class="swiper-slide mFamBox">

            <a href="/index.php/home/shop/index/eid/42374.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/6.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/42374.html">四川科伦药业股份有限公司邛崃分公司</a>

                <p>股票代码：002422</p>

              </div>

            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/1679.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/1.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/1679.html">贵研铂业股份有限公司</a>

                <p>股票代码：600459</p>

              </div>
            
            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/4013.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/2.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/4013.html">广东榕泰实业股份有限公司</a>

                <p>股票代码： 600589</p>

              </div>
            
            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/52490.html">

              <div class="mFam_img">

                <img src="/Public/home/images/famous/3.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/52490.html">江西世龙实业股份有限公司</a>

                <p>股票代码：002748</p>

              </div>
            
            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/694.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/4.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/694.html">山东宝莫生物化工股份有限公司</a>

                <p>股票代码：002476</p>

              </div>
            
            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/454.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/5.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/454.html">濮阳惠成电子材料股份有限公司</a>

                <p>股票代码：300481</p>

              </div>
            
            </a>

          </div>

          <div class="swiper-slide mFamBox">

            <a href="http://www.huaxuejia.cn/home/shop/index/eid/1232.html">

              <div class="mFam_img">

                <img src="http://www.huaxuejia.cn/Public/home/images/famous/7.jpg">

              </div>

              <div class="mFam_info">

                <a href="http://www.huaxuejia.cn/home/shop/index/eid/1232.html">江苏神华药业有限公司</a>

                <p>港股代码：00546</p>

              </div>
            
            </a>

          </div>

        </div>

      </div>

    </div>

    <!-- 产品供需 -->

    <div class="mProduct">

      <div class="mTit">

        <span>产品供需</span>

        <span class="mSign">

          <a href="/index.php/home/Goods">更多</a>

        </span>

      </div>

      <div class="mProBox">
        <div class="swiper-container proSlide">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">6-氯烟酸</h3>

                  <p>5326-23-8</p>

                  <a href="/index.php/home/goods/goodsdes.html?cas=5326-23-8&eid=235">

                    <img src="http://data.huaxuejia.cn/casimg/326/5326-23-8.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">富马酸</h3>

                  <p>110-17-8</p>

                  <a href="/home/goods/goodsdes.html?cas=110-17-8&eid=219">

                    <img src="http://data.huaxuejia.cn/casimg/110/110-17-8.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">双氰胺</h3>

                  <p>461-58-5</p>

                  <a href="/home/goods/goodsdes.html?cas=461-58-5&eid=219">

                    <img src="http://data.huaxuejia.cn/casimg/461/461-58-5.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">富马酸</h3>

                  <p>110-17-8</p>

                  <a href="/home/goods/goodsdes.html?cas=110-17-8&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/110/110-17-8.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">双氰胺</h3>

                  <p>461-58-5</p>

                  <a href="/home/goods/goodsdes.html?cas=461-58-5&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/461/461-58-5.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">聚磷酸铵</h3>

                  <p>68333-79-9</p>

                  <a href="/home/goods/goodsdes.html?cas=68333-79-9&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/333/68333-79-9.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">碘</h3>

                  <p>12190-71-5</p>

                  <a href="/home/goods/goodsdes.html?cas=12190-71-5&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/190/12190-71-5.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">碘化钾</h3>

                  <p>7681-11-0</p>

                  <a href="/home/goods/goodsdes.html?cas=7681-11-0&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/681/7681-11-0.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">磷</h3>

                  <p>7723-14-0</p>

                  <a href="/home/goods/goodsdes.html?cas=7723-14-0&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/723/7723-14-0.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">三聚氰胺</h3>

                  <p>108-78-1</p>

                  <a href="/home/goods/goodsdes.html?cas=108-78-1&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/108/108-78-1.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">高锰酸钾</h3>

                  <p>7722-64-7</p>

                  <a href="/home/goods/goodsdes.html?cas=7722-64-7&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/722/7722-64-7.png">

                      
                  </a>

                </div>
              </div><div class="swiper-slide">
                <div class="ip_box">

                  <h3 class="wto">碘</h3>

                  <p>7553-56-2</p>

                  <a href="/home/goods/goodsdes.html?cas=7553-56-2&eid=220">

                    <img src="http://data.huaxuejia.cn/casimg/553/7553-56-2.png">

                      
                  </a>

                </div>
              </div>          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

      </div>

    </div>

    <!-- 难题悬赏 -->

    <div class="mPuzzle">

      <div class="mTit">

        <span>难题悬赏</span>

        <span class="mSign">

          <a href="/index.php/home/Problem">更多</a>

        </span>

      </div>

      <div class="swiper-container mPuz_list">

        <div class="swiper-wrapper">

          <div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                
                  <label class="titSign mPuz_un">未托管</label>
                <span><a href="/index.php/home/Problem/detail?id=3" class="wto">不饱和树脂</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥11000.00</span>

                <span class="tc">发布时间：2015-06-22</span>

              </div>

            </div><div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                
                  <label class="titSign mPuz_un">未托管</label>
                <span><a href="/home/Problem/detail?id=4" class="wto">碳酸钙粉</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥500.00</span>

                <span class="tc">发布时间：2015-06-22</span>

              </div>

            </div><div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                
                  <label class="titSign mPuz_un">未托管</label>
                <span><a href="/home/Problem/detail?id=78" class="wto">求购玻璃表面超轻微划伤修复技术</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥5000.00</span>

                <span class="tc">发布时间：2016-05-13</span>

              </div>

            </div><div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                
                  <label class="titSign mPuz_un">未托管</label>
                <span><a href="/home/Problem/detail?id=84" class="wto">寻亲水涂层/疏水涂层纳米材料</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥500.00</span>

                <span class="tc">发布时间：2016-06-08</span>

              </div>

            </div><div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                <label class="titSign mPuz_al">已托管</label>

                  
                <span><a href="/home/Problem/detail?id=145" class="wto">谁可研发出2种无色化学物质混合在一起后马上变大红色、或者黄色</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥300.00</span>

                <span class="tc">发布时间：2016-09-17</span>

              </div>

            </div><div class="swiper-slide mPuzBox">

              <div class="mPuz_tit">

                
                  <label class="titSign mPuz_un">未托管</label>
                <span><a href="/home/Problem/detail?id=194" class="wto">如何将硅酸锆完全包裹硫硒化镉</a></span>

              </div>

              <div class="mPuz_info">

                <span class="colorred tl">￥100000.00</span>

                <span class="tc">发布时间：2017-01-21</span>

              </div>

            </div>
        </div>

      </div>

    </div>

    <!-- 技术转让 -->

    <div class="mTec">

      <div class="mTit">

        <span>技术转让</span>

        <span class="mSign">

          <a href="/index.php/home/Technology">更多</a>

        </span>

      </div>

      <div class="swiper-container mTec_list">

        <div class="swiper-wrapper">

          <div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_sell">卖技术</label>

                <span><a href="/index.php/home/Technology/detail?id=563" class="wto">年产5000吨聚氨酯硬泡催化剂N,N-二甲基环己胺</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  面议

                  
                </span>

                <span class="tc">通过中试</span>

                <span class="tr">完全转让</span>

              </div>

            </div><div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_sell">卖技术</label>

                <span><a href="/home/Technology/detail?id=595" class="wto">聚丙烯酰胺生产技术转让以及有机锆交联剂生产技术转让</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  面议

                  
                </span>

                <span class="tc">产业化</span>

                <span class="tr">技术入股</span>

              </div>

            </div><div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_sell">卖技术</label>

                <span><a href="/home/Technology/detail?id=1067" class="wto">【技术供应】盐酸左布诺洛尔合成工艺</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  面议

                  
                </span>

                <span class="tc">通过小试</span>

                <span class="tr">不限</span>

              </div>

            </div>
          <div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_buy">买技术</label>

                <span><a href="/home/Technology/detail?id=663" class="wto">求金属研磨后清洗剂配方</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  
                    ￥1.00万元
                </span>

                <span class="tc">产业化</span>

                <span class="tr">完全转让</span>

              </div>

            </div><div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_buy">买技术</label>

                <span><a href="/home/Technology/detail?id=894" class="wto">【需求技术】求纸的纯生物分解再生技术</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  面议

                  
                </span>

                <span class="tc">通过中试</span>

                <span class="tr">完全转让</span>

              </div>

            </div><div class="swiper-slide mTecBox">

              <div class="mTec_tit">

                <label class="titSign mtec_buy">买技术</label>

                <span><a href="/home/Technology/detail?id=1012" class="wto">【技术需求】生态新型板材、水性涂料</a></span>

              </div>

              <div class="mTec_info">

                <span class="colorred tl">

                  
                    ￥30.00万元
                </span>

                <span class="tc">产业化</span>

                <span class="tr">不限</span>

              </div>

            </div>
        </div>

      </div>

    </div>

    <!-- 人才供需 -->

    <div class="mJob">

      <div class="mTit">

        <span>人才供需</span>

        <span class="mSign">

          <a href="/home/Job">更多</a>

        </span>

      </div>



      <div class="swiper-container mJob_list">

        <div class="swiper-wrapper">

          <!-- each -->

          <div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-10-26/1509000136_3758.png">

              </div>

              <div class="mj_info">

                <h3><a href="">药物合成研发项目经理</a></h3>

                <p>珠海市柏瑞医药科技有限公司</p>

                <div class="mj_des">

                  广东珠海 | 2-5年 | 本科
                </div>

                <span class="mj_salary">

                    
                      8K-12K
                </span>

                <a href="/home/job/jobDes/id/295.html" class="mj_btn">查看详细</a>

              </div>

            </div><div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2016-10-24/1477280161_8042.png">

              </div>

              <div class="mj_info">

                <h3><a href="">助理工程师</a></h3>

                <p>天津卡普希科技有限公司</p>

                <div class="mj_des">

                  天津天津 | 1年以内 | 硕士
                </div>

                <span class="mj_salary">

                    
                      4K-5K
                </span>

                <a href="/home/job/jobDes/id/9.html" class="mj_btn">查看详细</a>

              </div>

            </div><div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2016-10-24/1477280161_8042.png">

              </div>

              <div class="mj_info">

                <h3><a href="">助理研究员</a></h3>

                <p>天津卡普希科技有限公司</p>

                <div class="mj_des">

                  天津天津 | 应届毕业生 | 本科
                </div>

                <span class="mj_salary">

                    
                      3K-4K
                </span>

                <a href="/home/job/jobDes/id/8.html" class="mj_btn">查看详细</a>

              </div>

            </div><div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2016-10-24/1477280161_8042.png">

              </div>

              <div class="mj_info">

                <h3><a href="">研究员</a></h3>

                <p>天津卡普希科技有限公司</p>

                <div class="mj_des">

                  天津天津 | 2-5年 | 硕士
                </div>

                <span class="mj_salary">

                    
                      5K-8K
                </span>

                <a href="/home/job/jobDes/id/7.html" class="mj_btn">查看详细</a>

              </div>

            </div><div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-08-17/1502954517_2130.png">

              </div>

              <div class="mj_info">

                <h3><a href="">江雷仿生界面材料团队招收博士后若干名——是人才虽贵必请</a></h3>

                <p>仿生材料与界面科学中科院重点实验室</p>

                <div class="mj_des">

                  北京北京 | 2-5年 | 博士
                </div>

                <span class="mj_salary">

                    
                      10K-35K
                </span>

                <a href="/home/job/jobDes/id/207.html" class="mj_btn">查看详细</a>

              </div>

            </div><div class="swiper-slide mJobBox">

              <div class="mj_img">

                <img src="http://www.huaxuejia.cn/Public/Uploads_enterprise/2017-04-13/1492051858_5519.png">

              </div>

              <div class="mj_info">

                <h3><a href="">上海交通大学纳米生物医学工程研究所 国家青年千人宋杰研究团队招收博士后</a></h3>

                <p>上海交通大学纳米生物医学工程研究所</p>

                <div class="mj_des">

                  上海上海 | 1年以内 | 博士
                </div>

                <span class="mj_salary">

                    
                      15K-30K
                </span>

                <a href="/home/job/jobDes/id/6.html" class="mj_btn">查看详细</a>

              </div>

            </div>
          <!-- each -->

        </div>

      </div>

    </div>

  </div> 

  <script>

    /*用户登录Ajax*/

    (function(){

      $.ajax({

            url:'/index.php/home/index/getLoginStatus',

            type:'post',

            datatype:'json',

            success:function(data){

              if(data['login_status']==0){

                $('#front > a:eq(0)').remove();

                $('#front > a:eq(0)').remove();

                $('#front').prepend('<a href="/index.php/home/Login/login"><img src="http://www.huaxuejia.cn/Public/home/images/mInBtn1.png"><p>会员登录</p></a><a href="/index.php/home/Login/register"><img src="http://www.huaxuejia.cn/Public/home/images/mInBtn2.png"><p>免费注册</p></a>');

              }else{

                $('#front > a:eq(0)').remove();

                $('#front > a:eq(0)').remove();

                $('#front').prepend('<a href="/index.php/home/Member/index"><img src="http://www.huaxuejia.cn/Public/home/images/mInBtn6.png"><p>我的账户</p></a><a href="/index.php/home/Member/gxProblem"><img src="http://www.huaxuejia.cn/Public/home/images/mInBtn7.png"><p>供需管理</p></a>');

              }

            }

          });

    })();

    //轮播图

      var swiper1 = new Swiper('.ms_banner', {

        pagination: '.swiper-pagination',

        paginationClickable: true,

        centeredSlides: true,

        loop: true,

        autoplay: 4000,

        speed: 1500,

        autoplayDisableOnInteraction: false

    });



    //资讯

    var swiper2 = new Swiper('.mNew_list', {

      slidesPerView: 2,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      speed: 1500

    });

    //上市企业

    var swiper3 = new Swiper('.mFam_list', {

      slidesPerView: 5,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      spaceBetween: 5,

      speed: 1500

    });

    //推荐供应商

    var swiper4 = new Swiper('.mSup_list', {

      slidesPerView: 7,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      spaceBetween: 5,

      speed: 1500

    });

    // 产品供需
    var swiper5 = new Swiper('.proSlide', {

      slidesPerView: 3,

      slidesPerColumn: 2,

      spaceBetween: 0,

      autoplay: 2000,

      speed: 1500,

      loop: true,

      autoplayDisableOnInteraction: false,

      prevButton:'.swiper-button-prev',

      nextButton:'.swiper-button-next',

    });



    //人才求职招聘

    var swiper6 = new Swiper('.mJob_list', {

      slidesPerView: 6,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      speed: 1500

    });



    //难题悬赏

    var swipe7 = new Swiper('.mPuz_list', {

      slidesPerView: 6,

      spaceBetween: 10,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      speed: 1500

    });



    //技术转让

    var swiper8 = new Swiper('.mTec_list', {

      slidesPerView: 6,

      spaceBetween: 10,

      direction: 'vertical',

      loop: true,

      onlyExternal : true,

      autoplay: 2000,

      speed: 1500

    });

   </script>
 
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