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
          <li class="active">供应商名录</li>
          <span class="colorred pl10 temSign">（欢迎所有化学化工、医药日化企业免费注册，入驻本网，免费发布产品供需、人才招聘、技术供需、难题悬赏等，尊享一系列专业服务。）
          </span>
        </ol>
      </div><!--/.nav-->
      <div class="container phShopList">
               <!--spl_info-->
      <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="spl_info ofh">
          <div class="row">
            <div class="col-lg-5 col-sm-6 col-xs-12 splinfo_lf">
              <div class="splLogoBox">
                <div class="spl_logo">
                    <a href="/index.php/home/shop/index/eid/<?php echo ($vo["sid"]); ?>">
                      <img src="<?php echo ($vo["logo"]); ?>">
                    </a>
                </div>
              </div>
              <div class="spl_text">
                <!--新加的包含QQ聊天功能的标题-->
                <div class="spl_titBox">
                  <div class="spl_tit atl">
                  	<a href="/home/shop/index/eid/<?php echo ($vo["sid"]); ?>"><?php echo ($vo["merch_name"]); ?></a>
                  </div>
                  <div class="spt_a">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo["qq"]); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($vo["qq"]); ?>:52" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                    <?php if($vo["isvip"] == 1): ?><img src="http://www.huaxuejia.cn/Public/home/images/vipPic.png" width="23px"><?php endif; ?>
                  </div>
                </div>
                <p class="colordarkblue spl_tel">联系电话:<?php echo ($vo["zuoji"]); ?></p>
                <p class="colordarkblue spl_web"><?php echo ($vo["website"]); ?></p>
                <p class="spl_add atl">公司地址:<?php echo ($vo["address"]); ?></p>
              </div>
            </div>
            <div class="col-lg-7 col-sm-6 col-xs-12 splinfo_rg">
              <div class="spl_product">
                <div class="infoNeed_btn spl_advice pull-left hidden-xs">
                  <a href="javascript:void(0);" type="button">推荐产品</a>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["0"]["cas"]); ?>&eid=<?php echo ($vo["0"]["sid"]); ?>"><img src="<?php echo ($vo["0"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["0"]["content"]); ?></p>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["1"]["cas"]); ?>&eid=<?php echo ($vo["1"]["sid"]); ?>"><img src="<?php echo ($vo["1"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["1"]["content"]); ?></p>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["2"]["cas"]); ?>&eid=<?php echo ($vo["2"]["sid"]); ?>"><img src="<?php echo ($vo["2"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["2"]["content"]); ?></p>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["3"]["cas"]); ?>&eid=<?php echo ($vo["3"]["sid"]); ?>"><img src="<?php echo ($vo["3"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["3"]["content"]); ?></p>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["4"]["cas"]); ?>&eid=<?php echo ($vo["4"]["sid"]); ?>"><img src="<?php echo ($vo["4"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["4"]["content"]); ?></p>
                </div>
                <div class="spl_pic">
                  <a href="/index.php/home/goods/goodsdes.html?cas=<?php echo ($vo["5"]["cas"]); ?>&eid=<?php echo ($vo["5"]["sid"]); ?>"><img src="<?php echo ($vo["5"]["pic"]); ?>"></a>
                  <p><?php echo ($vo["5"]["content"]); ?></p>
                </div>
                <div class="info_btn spl_more clearfix">
                	<a href="/index.php/home/shop/index/eid/<?php echo ($vo["sid"]); ?>" type="button">查看更多</a>
                </div>
              </div>
            </div>
          </div>
        </div><!--/.spl_info--><?php endforeach; endif; else: echo "" ;endif; ?> 
      
      </div>
      <div class="tc">
        <nav>
          <div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/3.html">3</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/4.html">4</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/5.html">5</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/6.html">6</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/7.html">7</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/8.html">8</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/9.html">9</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/10.html">10</a></li><li class="paginate_button"><a class="num" href="/shop/shoplist/p/11.html">11</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/shop/shoplist/p/2.html">下一页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><a class="end" href="/shop/shoplist/p/5153.html">尾页</a></li> <li id="example1_previous" class="paginate_button previous disabled"><span class="rows">共 46375 条记录</span></li></ul></div>        </nav>
      </div>
    </div>
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script type="text/javascript">
      $(function(){
        $('#gy').addClass('active');
        $('#gy').siblings().removeClass('active');
        $('#hsearch3').addClass('active rightSearchBox');
        $('#hsearch3').siblings().removeClass('active rightSearchBox');
      });

      function tishi() {
        swal('该企业尚未在后台提交企业认证');
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