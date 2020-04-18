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
    
  <div class="container puzzle_top">
    <!--header-->
    <div class="pageTop">
      <div class="">
        <ol class="breadcrumb">
          <li><a href="/index.php/home/Index/index">首页</a></li>
          <li class="active">难题列表页</li>
        </ol>
      
    <!--多条件筛选-->
        <div class="">
                  <div class="">
                    <div class="conditonSelect">
                    <form id="form1" action="/index.php/home/problem/index" method="get">
                        <input type="hidden" name="in" value=""/>
                        <input type="hidden" name="so" value=""/>
                        <input type="hidden" name="mn" value=""/>
                        <input type="hidden" name="keyword" value="">
                    </form>
                      <ul class="select bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                        <li class="select-list nav nav-tabs" id="myTabs" role="tablist">
                          <span class="pull-left">行业：</span>
                          <dl id="select1" class="pull-left">
                            <dd class="select-all active" role="presentation"><a href="javascript:void(0)">不限</a></dd>
                            <dd><a attr="1" href="javascript:void(0)">化学化工</a></dd><dd><a attr="2" href="javascript:void(0)">制药化工</a></dd><dd><a attr="3" href="javascript:void(0)">生物化工</a></dd><dd><a attr="4" href="javascript:void(0)">食品化工</a></dd>                          </dl>
                          <a href="JavaScript:void(0);" class="pull-right" id="select1More">更多</a>
                        </li>
                         <li class="select-list">
                          <span class="pull-left">分类：</span>
                          <dl id="select2" class="pull-left">
                            <dd class="select-all active" role="presentation"><a href="javascript:void(0)">不限</a></dd>
                            <dd><a attr=5 href="javascript:void(0)">染料,颜料</a></dd><dd><a attr=6 href="javascript:void(0)">胶粘剂</a></dd><dd><a attr=7 href="javascript:void(0)">化妆品</a></dd><dd><a attr=8 href="javascript:void(0)">日用化工</a></dd><dd><a attr=9 href="javascript:void(0)">农用化工</a></dd><dd><a attr=10 href="javascript:void(0)">催化剂及助剂</a></dd><dd><a attr=11 href="javascript:void(0)">表面活性剂</a></dd><dd><a attr=12 href="javascript:void(0)">表面处理</a></dd><dd><a attr=13 href="javascript:void(0)">石墨烯</a></dd><dd><a attr=14 href="javascript:void(0)">纳米材料</a></dd><dd><a attr=15 href="javascript:void(0)">高分子材料</a></dd><dd><a attr=16 href="javascript:void(0)">橡胶塑胶</a></dd><dd><a attr=17 href="javascript:void(0)">新能源,新材料</a></dd><dd><a attr=18 href="javascript:void(0)">基本有机化工</a></dd><dd><a attr=19 href="javascript:void(0)">天然提取</a></dd><dd><a attr=20 href="javascript:void(0)">无机化工</a></dd><dd><a attr=21 href="javascript:void(0)">分析化工</a></dd><dd><a attr=23 href="javascript:void(0)">原料药</a></dd><dd><a attr=24 href="javascript:void(0)">药物中间体</a></dd><dd><a attr=25 href="javascript:void(0)">天然提取药物</a></dd><dd><a attr=26 href="javascript:void(0)">药品制剂</a></dd><dd><a attr=27 href="javascript:void(0)">中成药</a></dd><dd><a attr=28 href="javascript:void(0)">药物辅料</a></dd><dd><a attr=29 href="javascript:void(0)">药物杂质</a></dd><dd><a attr=30 href="javascript:void(0)">药物分析</a></dd><dd><a attr=31 href="javascript:void(0)">动物用药</a></dd><dd><a attr=33 href="javascript:void(0)">生物合成</a></dd><dd><a attr=34 href="javascript:void(0)">生物催化技术</a></dd><dd><a attr=35 href="javascript:void(0)">生物发酵</a></dd><dd><a attr=36 href="javascript:void(0)">生物缓冲剂</a></dd><dd><a attr=37 href="javascript:void(0)">生物分离技术</a></dd><dd><a attr=39 href="javascript:void(0)">食品添加剂</a></dd><dd><a attr=40 href="javascript:void(0)">食品调料</a></dd><dd><a attr=41 href="javascript:void(0)">食品辅料</a></dd><dd><a attr=42 href="javascript:void(0)">食品检测技术</a></dd><dd><a attr=43 href="javascript:void(0)">药物载体</a></dd><dd><a attr=44 href="javascript:void(0)">聚合物</a></dd><dd><a attr=45 href="javascript:void(0)">石油化工</a></dd><dd><a attr=46 href="javascript:void(0)">精细化工</a></dd>                            <dd><a href="javascript:void(0)">其它</a></dd>
                          </dl>
                          <a href="JavaScript:void(0);" class="pull-right" id="select2More">更多</a>
                        </li>
                        <li class="select-list">
                          <span class="pull-left">悬赏金额：</span>
                          <dl id="select3" class="pull-left">
                            <dd class="select-all active" role="presentation"><a href="javascript:void(0)">不限</a></dd>
                            <dd><a href="javascript:void(0)">1-999元</a></dd>
                            <dd><a href="javascript:void(0)">1000-9999元</a></dd>
                            <dd><a href="javascript:void(0)">10000-49999元</a></dd>
                            <dd><a href="javascript:void(0)">50000元以上</a></dd>
                          </dl>
                          <a href="JavaScript:void(0);" class="pull-right" id="select3More">更多</a>
                        </li>
                      </ul>
                      </div>
                      <div class="ad_76090"><script src="/js/ad_js/bd_76090.js" type="text/javascript"></script></div><br/>
                    </div>
                  </div>
        </div>
      <script type="text/javascript">
          $(function(){
              $('#select1 dd').click(function(){
                  var content = $(this).text();
                  (content=='不限')?content='':content=content;
                  $('#form1 input').eq(0).attr('value',content);
                  $('#form1 input').eq(1).attr('value','');
                  $('#form1').submit();
              });
              $('#select2 dd').click(function(){
                  var content1 = $(this).text();
                  (content1=='不限')?content1='':content1=content1;
                  $('#form1 input').eq(1).attr('value',content1);
                  $('#form1').submit();
              });
              $('#select3 dd').click(function(){
                  var content2 = $(this).text();
                  (content2=='不限')?content2='':content2=content2;
                  $('#form1 input').eq(2).attr('value',content2);
                  $('#form1').submit();
              });
              var f1 = $('#form1 input').eq(0).attr('value');
              if(f1 == ''||f1=='不限'){
                $("#select1 dd").eq(0).addClass('selected');
              }else{
                $("#select1 dd:contains("+f1+")").addClass('selected');
              }
             
              var f2 = $('#form1 input').eq(1).attr('value');
              if(f2 == ''||f2=='不限'){
                $("#select2 dd").eq(0).addClass('selected');
              }else{
                $("#select2 dd:contains("+f2+")").addClass('selected');
              }
              
              var f3 = $('#form1 input').eq(2).attr('value');
              if(f3 == ''||f3=='不限'){
                $("#select3 dd").eq(0).addClass('selected');
              }else if(f3 == '50000以上'){
                $("#select3 dd:contains(50000以上)").addClass('selected');
              }else{
                $("#select3 dd:contains("+f3+")").addClass('selected');
              }
          });
          $(document).ready(function(){
            /*先判断是否需要“更多”按钮*/
             $(".select-list").each(function(){
              var selectdl = $(this).children("dl");
              var selectddcount = selectdl.children("dd").length;
                var minwidth = $(".select-list").width()+20-$(".select-list span").width()-$(".select-list").children("a").width()-20;
                    if(selectddcount*60 <= minwidth){
                      selectdl.next("a").hide();
                      selectdl.css("height","20px");
                    }else{
                      selectdl.next("a").show();
                    }
                });
             /*单击“更多”按钮后的收缩效果*/
              $("#select1More,#select2More,#select3More,#select4More,#select5More,#select6More").click(function(){
                var category = $(this).prev("dl");
                if (category.css("height") === "0px") {
                  category.css("height", "auto")
                  $(this).text('收起').addClass('down');
                } else {
                  category.css("height", "0px")
                  $(this).text('更多').removeClass('dowm');
                }
              });
            });
      </script>
      </div>
    </div>
  </div>
  <!--content-->
  <div class="container">
    <div class="row">
      <!--热门推荐-->
      <div class="col-md-3 col-xs-12 des-sidebar pull-right sidebar-nav pr" id="sidebar">
        <a href="/index.php/home/problem/synthetic_index.html"><img src="http://www.huaxuejia.cn/Public/home/images/dzhcEnter.png" class="img-responsive mb10" style="width:100%;height:100px;"></a>
          <div class="panel pr">
            <img src="http://www.huaxuejia.cn/Public/home/images/hot.png" class="img-responsive hotSign" style="right:-8px;">
            <div class="panel-heading">
              <h3 class="panel-title">热门推荐</h3>
            </div>
             <div class="row">
             
            <div class="panel-body des-hotpanel">
             <div class="col-lg-12 col-sm-3 col-xs-12">
                  <div class="thumbnail">
                    <div class="caption">
                      <h2 class="hot-title" title="创业板某著名公司寻找并购标的"><a href="/home/problem/detail?id=280">创业板某著名公司寻找并购标的</a></h2>
                      <p class="hot-price mt10">￥6000.00</p>
                      <div class="thumbnail-des row">
                      <div class="col-xs-6 pr0">
                        <ul>
                          <li class="f12 mt10"><a href="javascript:void(0);">3011</a>人次浏览</li>
                          <li class="f12 mt10">剩余<a href="javascript:void(0);">132</a>天</li>
                        </ul>
                      </div>
                      <div class="col-xs-6 tr">
                        <ul>
                          <li class="f12 mt10">已托管</li>
                          <li class="f12 mt10"><a href="javascript:void(0);">0</a>人次解答</li>
                        </ul>
                      </div>
                      </div>
                    </div>
                  </div><!--thumbnailend-->
                </div><!--col-lg-12end--><div class="col-lg-12 col-sm-3 col-xs-12">
                  <div class="thumbnail">
                    <div class="caption">
                      <h2 class="hot-title" title="如何将硅酸锆完全包裹硫硒化镉"><a href="/home/problem/detail?id=194">如何将硅酸锆完全包裹硫硒化镉</a></h2>
                      <p class="hot-price mt10">￥100000.00</p>
                      <div class="thumbnail-des row">
                      <div class="col-xs-6 pr0">
                        <ul>
                          <li class="f12 mt10"><a href="javascript:void(0);">20071</a>人次浏览</li>
                          <li class="f12 mt10">剩余<a href="javascript:void(0);">100</a>天</li>
                        </ul>
                      </div>
                      <div class="col-xs-6 tr">
                        <ul>
                          <li class="f12 mt10">未托管</li>
                          <li class="f12 mt10"><a href="javascript:void(0);">6</a>人次解答</li>
                        </ul>
                      </div>
                      </div>
                    </div>
                  </div><!--thumbnailend-->
                </div><!--col-lg-12end--><div class="col-lg-12 col-sm-3 col-xs-12">
                  <div class="thumbnail">
                    <div class="caption">
                      <h2 class="hot-title" title="谁可研发出2种无色化学物质混合在一起后马上变大红色、或者黄色？"><a href="/home/problem/detail?id=145">谁可研发出2种无色化学物质混合在一起后马上变大红色、或者黄色？</a></h2>
                      <p class="hot-price mt10">￥300.00</p>
                      <div class="thumbnail-des row">
                      <div class="col-xs-6 pr0">
                        <ul>
                          <li class="f12 mt10"><a href="javascript:void(0);">17643</a>人次浏览</li>
                          <li class="f12 mt10">剩余<a href="javascript:void(0);">0</a>天</li>
                        </ul>
                      </div>
                      <div class="col-xs-6 tr">
                        <ul>
                          <li class="f12 mt10">已托管</li>
                          <li class="f12 mt10"><a href="javascript:void(0);">3</a>人次解答</li>
                        </ul>
                      </div>
                      </div>
                    </div>
                  </div><!--thumbnailend-->
                </div><!--col-lg-12end--><div class="col-lg-12 col-sm-3 col-xs-12">
                  <div class="thumbnail">
                    <div class="caption">
                      <h2 class="hot-title" title="寻亲水涂层/疏水涂层纳米材料"><a href="/home/problem/detail?id=84">寻亲水涂层/疏水涂层纳米材料</a></h2>
                      <p class="hot-price mt10">￥500.00</p>
                      <div class="thumbnail-des row">
                      <div class="col-xs-6 pr0">
                        <ul>
                          <li class="f12 mt10"><a href="javascript:void(0);">13407</a>人次浏览</li>
                          <li class="f12 mt10">剩余<a href="javascript:void(0);">0</a>天</li>
                        </ul>
                      </div>
                      <div class="col-xs-6 tr">
                        <ul>
                          <li class="f12 mt10">未托管</li>
                          <li class="f12 mt10"><a href="javascript:void(0);">9</a>人次解答</li>
                        </ul>
                      </div>
                      </div>
                    </div>
                  </div><!--thumbnailend-->
                </div><!--col-lg-12end-->              </div><!-- panel -->
            
            </div>
            </div>
      </div>
      <!--热门推荐end-->
      <!--项目模块-->
      <div class="col-md-9 col-xs-12 pull-left">
        <div class="">
          <!--栏目说明-->
          <div id="descriNavBox" class="descriNav mb10 pr col-xs-12">
            <p id="descriNavContent" class="descriUp">
              <b>栏目说明：</b>本栏目除了包含“定制合成”，还相当是化学化工、医药日化等领域的科研难题众包专栏，当需要悬赏求助的一方在各自的工作中遇到技术难题、工艺难题、特殊课题时，希望快速借助外脑，提高效率，降低成本，供其他会员有偿协助解决。平台方会根据解决方提出的初步方向、方案（可选择留言隐藏）进行初步的甄别，并对用心回复的方案特别跟进，安排双方对接，直到悬赏方认可，择优合作，支付酬金佣金。</p>
            <div class="color6 desDownBtn">▼</div>
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
            <div class="">
              <div class="problemWall">
              <div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="创业板某著名公司寻找并购标的">
                      <a href="/index.php/home/problem/detail?id=280">创业板某著名公司寻找并购标的</a>
                    </p>
                    <span class="label label-warning">置顶</span>                    <p class="f12 color9 proInfo">对于并购企业的要求是：做氟硅材料或者其它高分子新材料，用途在汽车制造、防腐、轨道交通、锂电池等行业的企业。有偿服务。</p>
                  </div>
                  <div class="proPrice">
                    <em>￥6000.00</em>
                  </div>
                  <div class="proMid1">
                    <span class="label label-primary">已托管</span>
                                        </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">3011</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">132</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="如何将硅酸锆完全包裹硫硒化镉">
                      <a href="/index.php/home/problem/detail?id=194">如何将硅酸锆完全包裹硫硒化镉</a>
                    </p>
                    <span class="label label-warning">置顶</span>                    <p class="f12 color9 proInfo">解决硫硒化镉颜料在细度D100 小于1.3 微米的情况下颜色着色率差的问题，要保持颜色的鲜艳程度，即如何将硅酸锆完全包裹硫硒化镉？</p>
                  </div>
                  <div class="proPrice">
                    <em>￥100000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">6</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">20071</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">100</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="PE80%EVA20%,做到阻燃V0不滴落">
                      <a href="/index.php/home/problem/detail?id=315">PE80%EVA20%,做到阻燃V0不滴落</a>
                    </p>
                                        <p class="f12 color9 proInfo">做铁路隧道防水板，防火等级高，UL94V0，成碳性好，抑烟性好的PE/EVA的阻燃改性料</p>
                  </div>
                  <div class="proPrice">
                    <em>￥8000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">117</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">319</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="三甲胺 甜菜碱">
                      <a href="/index.php/home/problem/detail?id=301">三甲胺 甜菜碱</a>
                    </p>
                                        <p class="f12 color9 proInfo">甜菜碱中含微量三甲胺，客户使用有异议，求三甲胺处理方法，要求三甲胺含量色谱操作不高于1Ppm</p>
                  </div>
                  <div class="proPrice">
                    <em>￥20000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">1</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">366</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">264</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="【需求】波纹管新型阀门设计方案">
                      <a href="/index.php/home/problem/detail?id=299">【需求】波纹管新型阀门设计方案</a>
                    </p>
                                        <p class="f12 color9 proInfo">在压塑时，中部气体不能完全排除，导致衬塑材料不能完全贴合于内部材料（铸铁、铸钢之类），目前已在容易鼓包的地方打穿孔，使注料压塑时两边有固定的拉力，使之不向外扩张，但其他地方出现新的鼓包现象。
1.如何能使压塑材料与钢、铁件能较好的贴合，不出现鼓包现象。
2.如何提高压塑的成品率。

备注：此难题由化学加网工作人员代为发布，需要其联系方式的请联系化学加， &nbsp;服务热线400-8383-509。</p>
                  </div>
                  <div class="proPrice">
                    <em>￥30.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">283</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">255</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="寻求一种磷硅酸钠钙在乳膏体中高比例添加技术">
                      <a href="/index.php/home/problem/detail?id=294">寻求一种磷硅酸钠钙在乳膏体中高比例添加技术</a>
                    </p>
                                        <p class="f12 color9 proInfo">要添加成分：磷硅酸钠钙，分子式:	CaNaO6PSi
我们希望能在化妆品乳膏体中添加磷硅酸钠，膏体中含量要求：20--30%，膏体稳定，磷硅酸钠效果不受影响。膏体为人皮肤表面使用，无刺激。
各位高能可以自己设计膏体配方，我们更强烈期待能通过高压纳米均质处理，获得脂质体包裹技术增加稳定性</p>
                  </div>
                  <div class="proPrice">
                    <em>￥5000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">319</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">222</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="一些日用香精在同印刷品的红色融合过程中红色容易化开">
                      <a href="/index.php/home/problem/detail?id=289">一些日用香精在同印刷品的红色融合过程中红色容易化开</a>
                    </p>
                                        <p class="f12 color9 proInfo">我们在印刷品印刷完浸泡香精3到10秒钟，但印刷品中红色很容易同香精发生反应，化开扩散而导致印刷品轻污，影响美观</p>
                  </div>
                  <div class="proPrice">
                    <em>￥10000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">2</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">381</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">232</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="回收各种化工原料助剂">
                      <a href="/index.php/home/problem/detail?id=281">回收各种化工原料助剂</a>
                    </p>
                                        <p class="f12 color9 proInfo">高价回收库存积压化工厂原料助剂，库存进口化工热熔胶 抗氧剂 表面活性剂 食品添加剂 瓜儿胶 热熔胶，EVA，松香 松香树脂 废旧染料，颜料，酞青蓝 酞青绿 氧化铬绿 炭黑 油漆，油墨，印花涂料，增白剂，钛白粉，金粉，铝银浆，丙烯酸树脂，醇酸树脂，松香改性树脂，石油树脂，环氧树脂。苯酐，，氯化亚锡，聚丙烯酰胺，石蜡，红丹粉，黄丹粉，氧化锌，抗氧剂，锌粉，硼酸，保险粉，，高锰酸钾，海藻酸钠，柠檬酸，乙二胺，硅油，水杨酸，元明粉，硬脂酸，塑料颗粒，三乙醇胺，化学试剂，炭黑，橡胶厂剩余助剂，塑料厂剩余助剂，食品添加剂等各种库存化工产品。
回收库存热熔胶 压敏胶 天然橡胶 标胶一批 染料，颜料及中间体,皮毛皮革染料,助剂，色基色酚，油漆、油墨、固化剂 乳化剂 消泡剂 树脂、滤饼；回收聚醚多元醇，二乙醇胺，三乙醇胺，聚醚4110 ，发泡剂141B,巴斯夫生产黑料。间苯二酚，丁苯橡胶；回收农药，医药及中间体，医药原料；环氧树脂；回收醇类、苯类、醚类，酯类，酮类、胺类，碘，聚乙烯醇，松香,硬脂酸，棕榈蜡，石蜡，瓜尔胶，苯酐，顺酐，,铜金粉,银粉，硫酸铜,硫酸镍；回收纺织印染助剂、保险粉、印花镍网，各种日化食品原料、香精，香兰素，油脂原料，脂肪醇，脂肪胺,化学试剂；红丹粉,黄丹粉等各种稀料及其他化工。
欢迎来电合作！如公司有积压化工产品，我公司上门看货收购</p>
                  </div>
                  <div class="proPrice">
                    <em>￥0.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">436</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">925</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="玻璃划伤修复液">
                      <a href="/index.php/home/problem/detail?id=273">玻璃划伤修复液</a>
                    </p>
                                        <p class="f12 color9 proInfo">家具玻璃面划上修复（轻微划痕、跟较深划痕）有这些厂品的朋友联系我、</p>
                  </div>
                  <div class="proPrice">
                    <em>￥100.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">1</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">518</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">181</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="求使丁晴橡胶软化透明的工艺">
                      <a href="/index.php/home/problem/detail?id=244">求使丁晴橡胶软化透明的工艺</a>
                    </p>
                                        <p class="f12 color9 proInfo">可以使丁晴橡胶变软透明细腻的添加剂或者加工方式。</p>
                  </div>
                  <div class="proPrice">
                    <em>￥1000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">548</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">149</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="求购一种废矿物油加工技术">
                      <a href="/index.php/home/problem/detail?id=240">求购一种废矿物油加工技术</a>
                    </p>
                                        <p class="f12 color9 proInfo">问题：废矿物油提炼民用燃油过程中，成品油的颜色和气味非常难处理。通常生产出来的成品油的颜色偏红，气味臭。生产区域无组织排放难控制，厂区异味较大。故需要可以解决废矿物油加工的化工工艺，望有意的留言。</p>
                  </div>
                  <div class="proPrice">
                    <em>￥200000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">1</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">582</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">146</em>天</span>
                  </div>
                </div><div class="proFrame pr">
                  <!-- 已完成图标 -->
                                    <div class="proLeft">
                    <p class="proTit" title="求玉米在常温下的保鲜技术">
                      <a href="/index.php/home/problem/detail?id=236">求玉米在常温下的保鲜技术</a>
                    </p>
                                        <p class="f12 color9 proInfo">本人想求玉米在常温下的保鲜技术，大概保鲜三个月，谢谢！有兴趣能做到的请留言联系！</p>
                  </div>
                  <div class="proPrice">
                    <em>￥1000.00</em>
                  </div>
                  <div class="proMid1">
                                          <span class="label label-default">未托管</span>                  </div>
                  <div class="proMid2">
                    <p class="f12 color9"><em class="colorlightblue">0</em>人解答</p>
                    <p class="f12 color9"><em class="colorlightblue">595</em>人次浏览</p>
                  </div>
                  <div class="proRight">
                    <span class="f12 color9">剩余<em class="colorlightblue">120</em>天</span>
                  </div>
                </div>                 <div class="">
                  <div class="">
                      <div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/3.html">3</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/4.html">4</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/5.html">5</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/6.html">6</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/7.html">7</a></li><li class="paginate_button"><a class="num" href="/problem/index/p/8.html">8</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/problem/index/p/2.html">下一页</a></li>  <li id="example1_previous" class="paginate_button previous disabled"><span class="rows">共 96 条记录</span></li></ul></div>                  </div>
                </div>
              </div>
            </div>
        </div> <!--项目模块end-->
      </div>
    </div>
  </div>    
<!--footer-->
<script>
  (function(){
    $("title").html("化学加网_企业难题悬赏");
  })();
</script>
     <script type="text/javascript">
      $(function(){
        $('#hb').addClass('active');
        $('#hb').siblings().removeClass('active');
        $('#hsearch1').addClass('active rightSearchBox');
        $('#hsearch1').siblings().removeClass('active rightSearchBox');
      });
    </script>
    <!--多条件筛选js-->
    <script type="text/javascript" src="/Public/home/js/script.js"></script>

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