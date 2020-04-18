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
      <div class="">
        <ol class="breadcrumb">
          <li><a href="/index.php/home/Index/index">首页</a></li>
          <li class="active">技术列表页</li>
        </ol>
      
        <!--多条件筛选-->
        <div class="mb20">
          <div class="">
            <div class="conditonSelect">
              <form id="form1" action="/index.php/home/technology/index" method="get">
                  <input type="hidden" name="in" value=""/>
                  <input type="hidden" name="so" value=""/>
                  <input type="hidden" name="tt" value=""/>
                  <input type="hidden" name="ws" value=""/>
                  <input type="hidden" name="mn" value=""/>
                  <input type="hidden" name="mr" value=""/>
                  <input type="hidden" name="u" value="">
                  <input type="hidden" name="keyword" value="">
              </form>
              <ul class="select"> 
                <li class="select-list nav nav-tabs" id="myTabs" role="tablist">
                  <span class="pull-left">行业：</span>
                  <dl id="select1" class="pull-left">
                    <dd class="select-all active" role="presentation"><a href="javascript:void(0)">不限</a></dd>
                    <dd><a attr="1" href="javascript:void(0)">化学化工</a></dd><dd><a attr="2" href="javascript:void(0)">制药化工</a></dd><dd><a attr="3" href="javascript:void(0)">生物化工</a></dd><dd><a attr="4" href="javascript:void(0)">食品化工</a></dd>                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select1More">更多</a>
                </li>
                 <li class="select-list">
                  <span class="pull-left">分类：</span>
                  <dl id="select2" class="pull-left">
                    <dd class="select-all active" role="presentation"><a href="javascript:void(0)">不限</a></dd>
                    <dd><a href="javascript:void(0)">染料,颜料</a></dd><dd><a href="javascript:void(0)">胶粘剂</a></dd><dd><a href="javascript:void(0)">化妆品</a></dd><dd><a href="javascript:void(0)">日用化工</a></dd><dd><a href="javascript:void(0)">农用化工</a></dd><dd><a href="javascript:void(0)">催化剂及助剂</a></dd><dd><a href="javascript:void(0)">表面活性剂</a></dd><dd><a href="javascript:void(0)">表面处理</a></dd><dd><a href="javascript:void(0)">石墨烯</a></dd><dd><a href="javascript:void(0)">纳米材料</a></dd><dd><a href="javascript:void(0)">高分子材料</a></dd><dd><a href="javascript:void(0)">橡胶塑胶</a></dd><dd><a href="javascript:void(0)">新能源,新材料</a></dd><dd><a href="javascript:void(0)">基本有机化工</a></dd><dd><a href="javascript:void(0)">天然提取</a></dd><dd><a href="javascript:void(0)">无机化工</a></dd><dd><a href="javascript:void(0)">分析化工</a></dd><dd><a href="javascript:void(0)">原料药</a></dd><dd><a href="javascript:void(0)">药物中间体</a></dd><dd><a href="javascript:void(0)">天然提取药物</a></dd><dd><a href="javascript:void(0)">药品制剂</a></dd><dd><a href="javascript:void(0)">中成药</a></dd><dd><a href="javascript:void(0)">药物辅料</a></dd><dd><a href="javascript:void(0)">药物杂质</a></dd><dd><a href="javascript:void(0)">药物分析</a></dd><dd><a href="javascript:void(0)">动物用药</a></dd><dd><a href="javascript:void(0)">生物合成</a></dd><dd><a href="javascript:void(0)">生物催化技术</a></dd><dd><a href="javascript:void(0)">生物发酵</a></dd><dd><a href="javascript:void(0)">生物缓冲剂</a></dd><dd><a href="javascript:void(0)">生物分离技术</a></dd><dd><a href="javascript:void(0)">食品添加剂</a></dd><dd><a href="javascript:void(0)">食品调料</a></dd><dd><a href="javascript:void(0)">食品辅料</a></dd><dd><a href="javascript:void(0)">食品检测技术</a></dd><dd><a href="javascript:void(0)">药物载体</a></dd><dd><a href="javascript:void(0)">聚合物</a></dd><dd><a href="javascript:void(0)">石油化工</a></dd><dd><a href="javascript:void(0)">精细化工</a></dd>                    <dd><a href="javascript:void(0)">其它</a></dd>
                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select2More">更多</a>
                </li>
                <li class="select-list">
                  <span class="pull-left">技术类型：</span>
                  <dl id="select3" class="pull-left">
                    <dd class="select-all active" role="presentation"><a href="#">不限</a></dd>
                    <dd><a href="#">专利</a></dd>
                    <dd><a href="#">非专利</a></dd>
                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select3More">更多</a>
                </li>
                <li class="select-list">
                  <span class="pull-left">合作方式：</span>
                  <dl id="select4" class="pull-left">
                    <dd class="select-all active" role="presentation"><a href="#">不限</a></dd>
                    <dd><a href="#">完全转让</a></dd>
                    <dd><a href="#">许可</a></dd>
                    <dd><a href="#">技术入股</a></dd>
                    <dd><a href="#">合作研发</a></dd>
                    <dd><a href="#">合作生产</a></dd>
                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select4More">更多</a>
                </li>
                <li class="select-list">
                  <span class="pull-left">交易价格：</span>
                  <dl id="select5" class="pull-left">
                    
                    <dd class="select-all active" role="presentation"><a href="#">不限</a></dd>
                    <dd><a href="#">30万元以内</a></dd>
                    <dd><a href="#">30万元-100万元</a></dd>
                    <dd><a href="#">100万元-300万元</a></dd>
                    <dd><a href="#">300万元-1000万元</a></dd>
                    <dd><a href="#">1000万元以上</a></dd>
                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select5More">更多</a>
                </li>
                <li class="select-list">
                  <span class="pull-left">技术成熟度：</span>
                  <dl id="select6" class="pull-left">
                    
                    <dd class="select-all active" role="presentation"><a href="#">不限</a></dd>
                    <dd><a href="#">研发中</a></dd>
                    <dd><a href="#">已有样品</a></dd>
                    <dd><a href="#">通过小试</a></dd>
                    <dd><a href="#">通过中试</a></dd>
                    <dd><a href="#">产业化</a></dd>
                  </dl>
                  <a href="JavaScript:void(0);" class="pull-right" id="select6More">更多</a>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
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
          var content2 = $(this).text();
          (content2=='不限')?content2='':content2=content2;
          $('#form1 input').eq(1).attr('value',content2);
          $('#form1').submit();
      });
       $('#select3 dd').click(function(){
          var content3 = $(this).text();
          (content3=='不限')?content3='':content3=content3;
          $('#form1 input').eq(2).attr('value',content3);
          $('#form1').submit();
      });
      $('#select4 dd').click(function(){
          var content4 = $(this).text();
          (content4=='不限')?content4='':content4=content4;
          $('#form1 input').eq(3).attr('value',content4);
          $('#form1').submit();
      });
      $('#select5 dd').click(function(){
          var content5 = $(this).text();
          (content5=='不限')?content5='':content5=content5;
          $('#form1 input').eq(4).attr('value',content5);
          $('#form1').submit();
      });
        $('#select6 dd').click(function(){
          var content6 = $(this).text();
          (content6=='不限')?content6='':content6=content6;
          $('#form1 input').eq(5).attr('value',content6);
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
      }else{
        if(f3=='专利'){
           $("#select3 dd").eq(1).addClass('selected');
        }else{
          $("#select3 dd").eq(2).addClass('selected');
        }
      }
      var f4 = $('#form1 input').eq(3).attr('value');
      if(f4 == ''||f4=='不限'){
        $("#select4 dd").eq(0).addClass('selected');
      }else{
        $("#select4 dd:contains("+f4+")").addClass('selected');
      }  
   
      var f5 = $('#form1 input').eq(4).attr('value');      
      if(f5 == ''||f5=='不限'){
        $("#select5 dd").eq(0).addClass('selected');
      }
      else{
        $("#select5 dd:contains("+f5+")").addClass('selected');
      }
      var f6 = $('#form1 input').eq(5).attr('value');
      if(f6 == ''||f6=='不限'){
        $("#select6 dd").eq(0).addClass('selected');
      }else{
        $("#select6 dd:contains("+f6+")").addClass('selected');
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
              <div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_glabel">供</label>                        <a href="/index.php/home/technology/detail?id=1098" class="hottitle" title="【技术供应】生物发酵法生产L-羟脯氨酸">【技术供应】生物发酵法生产L-羟脯氨酸</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">102人次浏览</li>
                            <li class="infolabel">产业化</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel"></li>
                            <li class="infolabel">完全转让</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_glabel">供</label>                        <a href="/index.php/home/technology/detail?id=1083" class="hottitle" title="【技术供应】生物酶法生产普瑞巴林中间体技术转让">【技术供应】生物酶法生产普瑞巴林中间体技术转让</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">108人次浏览</li>
                            <li class="infolabel">通过中试</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel"></li>
                            <li class="infolabel">完全转让</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_xlabel">需</label>                        <a href="/index.php/home/technology/detail?id=1074" class="hottitle" title="【技术需求】三聚氰胺下游产品配方和生产技术">【技术需求】三聚氰胺下游产品配方和生产技术</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">177人次浏览</li>
                            <li class="infolabel">产业化</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel">河南省新乡市</li>
                            <li class="infolabel">不限</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_glabel">供</label>                        <a href="/home/technology/detail?id=1071" class="hottitle" title="【技术供应】6-羟基-2-萘满酮技术">【技术供应】6-羟基-2-萘满酮技术</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">126人次浏览</li>
                            <li class="infolabel">通过小试</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel">山东省济宁市</li>
                            <li class="infolabel">合作研发</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_glabel">供</label>                        <a href="/home/technology/detail?id=1070" class="hottitle" title="【技术供应】利拉鲁肽的工艺">【技术供应】利拉鲁肽的工艺</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">161人次浏览</li>
                            <li class="infolabel">通过小试</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel">北京市市辖区</li>
                            <li class="infolabel">合作研发</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End--><div class="col-lg-12 col-md-6 col-sm-12 tech_hot_frame">
                      <div class="title wto">
                         <label class="tech_xlabel">需</label>                        <a href="/home/technology/detail?id=1069" class="hottitle" title="【技术需求】求购盐酸头孢噻呋制作头孢噻呋钠生产技术">【技术需求】求购盐酸头孢噻呋制作头孢噻呋钠生产技术</a>
                        <p class="technologyPrice">
                           面议
                                                      </p>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <ul class="tl">
                            <li class="infolabel">188人次浏览</li>
                            <li class="infolabel">产业化</li>
                          </ul>
                        </div>
                        <div class="col-xs-6">
                          <ul class="tr">
                            <li class="infolabel">安徽省合肥市</li>
                            <li class="infolabel">不限</li>
                          </ul>
                        </div>
                      </div>
                </div> <!-- techpanel End-->              </div>
            </div>
        </div>
        <!--热门推荐end-->
        <!--项目模块-->
        <div class="col-md-9 col-xs-12 pull-left">
          <div class="">
            <!--searchbar-->
            <div class="mb10 ofh proMedNav">
              
              <div id="descriNavBox" class="pr col-lg-9 pr5 pl5">
                <p id="descriNavContent" class="descriUp">
                  <b>栏目说明：</b>本栏目展示的是注册会员在化学化工、制药化学、精细化工、生物化学、食品化学等方面想要引进（获得人家授权许可）、或者拟转让转移（授权）给人家的某方面的生产工艺、技术配方，可以是专利技术，也可以是专有技术。</p>
                <div class="color6 desDownBtn" style="top:0;">▼</div>
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
              <div class="col-lg-3 pl0">
                
                <label class="checkbox-inline">
                  <input type="radio" id="inlineCheckbox1" name="u" value="1" />仅看供给
                </label>
                <label class="checkbox-inline">
                                          <input type="radio" id="inlineCheckbox2" name="u" value="0"/>仅看需求                </label>
              </div>
              <script type="text/javascript">
                $(function(){
                 $("input[type='radio']").change( function() {
                    var r = $(this).val()
                    $('#form1 input').eq(6).attr('value',r);
                    $('#form1').submit();
                  });
                });      
              </script>  
            </div>   
            <!--searchbar-end-->
            <div class="item-list"> 
              <div class="">
                <div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术需求】求购产品工艺">
                        <label class="tech_xlabel">需</label>                        <span class="label label-warning">置顶</span>                        <a href="/home/technology/detail?id=1080">【技术需求】求购产品工艺</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">通过小试</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>76人次浏览</span>
                        <span>江苏省苏州市</span>
                        <span>10天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="寻求3-氨基丙醇技术">
                        <label class="tech_xlabel">需</label>                        <span class="label label-warning">置顶</span>                        <a href="/home/technology/detail?id=1078">寻求3-氨基丙醇技术</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">产业化</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>59人次浏览</span>
                        <span>山东省东营市</span>
                        <span>11天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术需求】求购米氮平大生产工艺">
                        <label class="tech_xlabel">需</label>                        <span class="label label-warning">置顶</span>                        <a href="/home/technology/detail?id=1077">【技术需求】求购米氮平大生产工艺</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">完全转让</span>
                        <span title="技术成熟度">产业化</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>56人次浏览</span>
                        <span>黑龙江省哈尔滨市</span>
                        <span>12天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术转让】枸橼酸铁工艺转让">
                        <label class="tech_glabel">供</label>                        <span class="label label-warning">置顶</span>                        <a href="/home/technology/detail?id=1076">【技术转让】枸橼酸铁工艺转让</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">通过中试</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                                                    ￥50.00万元                      </div>
                      <div class="tf_info">
                        <span>50人次浏览</span>
                        <span>天津市市辖区</span>
                        <span>13天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术供应】4,4，－二氨基二环己基甲烷大生产技术">
                        <label class="tech_glabel">供</label>                        <span class="label label-warning">置顶</span>                        <a href="/home/technology/detail?id=1072">【技术供应】4,4，－二氨基二环己基甲烷大生产技术</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">完全转让</span>
                        <span title="技术成熟度">产业化</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>116人次浏览</span>
                        <span>山东省济宁市</span>
                        <span>25天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术供应】锂电池厂NMP回收提纯整体工程方案">
                        <label class="tech_glabel">供</label>                                                <a href="/home/technology/detail?id=1128">【技术供应】锂电池厂NMP回收提纯整体工程方案</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">产业化</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>30人次浏览</span>
                        <span>河北省石家庄市</span>
                        <span>6天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术供应】2-甲基丁醇生产技术">
                        <label class="tech_glabel">供</label>                                                <a href="/home/technology/detail?id=1127">【技术供应】2-甲基丁醇生产技术</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">通过小试</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>39人次浏览</span>
                        <span>山东省青岛市</span>
                        <span>8天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术供应】双环醇及片剂">
                        <label class="tech_glabel">供</label>                                                <a href="/home/technology/detail?id=1126">【技术供应】双环醇及片剂</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">通过小试</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>22人次浏览</span>
                        <span>北京市市辖区</span>
                        <span>8天前发布</span>
                      </div>
                    </div>
                  </div><div class="tech_frame">
                    <div class="tech_frame_left">
                      <h2 class="wto" title="【技术供应】盐酸坦洛新及微丸（缓释）">
                        <label class="tech_glabel">供</label>                                                <a href="/home/technology/detail?id=1125">【技术供应】盐酸坦洛新及微丸（缓释）</a>
                      </h2>
                      <p class="tf_attr">
                        <span title="合作方式">不限</span>
                        <span title="技术成熟度">通过小试</span>
                      </p>
                    </div>
                    <div class="tech_frame_right">
                      <div class="tf_price colorred">
                        面议
                                                  </div>
                      <div class="tf_info">
                        <span>27人次浏览</span>
                        <span>北京市市辖区</span>
                        <span>8天前发布</span>
                      </div>
                    </div>
                  </div>              </div>
              <!--分页-->
              <nav>
                <div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/3.html">3</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/4.html">4</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/5.html">5</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/6.html">6</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/7.html">7</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/8.html">8</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/9.html">9</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/10.html">10</a></li><li class="paginate_button"><a class="num" href="/technology/index/p/11.html">11</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/technology/index/p/2.html">下一页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><a class="end" href="/technology/index/p/99.html">尾页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><span class="rows">共 890 条记录</span></li></ul></div>              </nav><!--分页end-->
            </div>  
          </div><!--项目模块end--> 
        </div><!--col-md-9-col-xs-12-end-->
  </div>
</div>
<script>
  (function(){
    $("title").html("化学加网_技术转让专栏");
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