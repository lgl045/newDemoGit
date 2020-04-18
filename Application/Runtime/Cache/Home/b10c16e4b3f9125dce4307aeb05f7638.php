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
          <li><a href="/index.php/home/Goods/index">产品供应</a></li>
          <li><a href="/index.php/home/Goods/goodsdes?cas=875446-37-0">安塞曲匹供应商</a></li>
          <li class="active">产品详细页</li>
        </ol>
      </div><!--/.nav-->
      <div class="container">
        <div class="se_wall">
          <div class="row">
            <div class="col-lg-9">
              <!--Product info-->
              <div class="sd_info mb15">
                <div class="row">
                  <div class="col-lg-4 col-sm-5 col-xs-12">
                    <div class="sp-loading">
                      <img src="http://www.huaxuejia.cn/Public/home/images/loading-2.gif" alt=""><br>LOADING IMAGES
                    </div>
                    <div class="sp-wrap proWrapPic">
                                        <a href="<?php echo ($data['pic']); ?>"><img src="<?php echo ($data['pic']); ?>"></a>                                        </div>
                  </div>
                  <div class="col-lg-8 col-sm-7 col-xs-12">
                    <div class="sd_text">
                      <h2><?php echo ($data['content']); ?></h2>
                      <div class="pdDes_table">
                        <table class="table table-bordered table-condensed mt10 mb10 ofh">
                          <tbody>
                            <tr>
                              <th scope="row">CAS号</th>
                              <td colspan="3"><?php echo ($data['cas']); ?></td>
                            </tr>
                            <tr class="hidden-xs">
                              <th scope="row">规格</th>
                              <td><?php echo ($data['guige']); ?></td>
                              <th scope="row">纯度</th>
                              <td><?php echo ($data['chundu']); ?></td>
                            </tr>
                            <tr class="hidden-xs">
                              <th scope="row">货号</th>
                              <td><?php echo ($data['huohao']); ?></td>
                              <th scope="row">货期</th>
                              <td><?php echo ($data['huoqi']); ?></td>
                            </tr>
                            <tr class="hidden-xs">
                              <th scope="row">品牌</th>
                              <td><?php echo ($data['pinpai']); ?></td>
                              <th scope="row">库存</th>
                              <td ><?php echo ($data['kucun']); ?>                              <span class="alertSign">(请与卖家联系核实库存后再付款)</span>                              </td>
                            </tr>

                            <tr class="visible-xs">
                              <th scope="row">规格</th>
                              <td><?php echo ($data['guige']); ?></td>
                            </tr>
                            <tr class="visible-xs">
                              <th scope="row">纯度</th>
                              <td><?php echo ($data['chundu']); ?></td>
                            </tr>
                            <tr class="visible-xs">
                              <th scope="row">货号</th>
                              <td><?php echo ($data['huohao']); ?></td>
                            </tr>
                            <tr class="visible-xs">
                              <th scope="row">货期</th>
                              <td><?php echo ($data['huoqi']); ?></td>
                            </tr>
                            <tr class="visible-xs">
                              <th scope="row">品牌</th>
                              <td><?php echo ($data['pinpai']); ?></td>
                            </tr>
                            <tr class="visible-xs">
                              <th scope="row">库存</th>
                              <td ><?php echo ($data['kucun']); ?>                             <span class="alertSign">(请与卖家联系核实库存后再付款)</span>                              </td>
                            </tr>

                            <tr>
                              <td colspan="4">价钱：<span class="sd_lgPrice">￥<?php echo ($data['money']); ?>元/g</span>
                                  <p class="mt10">
                                    <span class="mb10" style="vertical-align:top;">购买数量：</span>
                                    <span id="sdNum" class="sd_num ofh">
                                      <a class="num_a num_reduce" href="javascript:void(0);" title="减1">－</a>
                                      <input id="num_amount" class="num_text" value="1" maxlength="8" type="text" />
                                      <a class="num_a num_increase" href="javascript:void(0);" title="加1">＋</a>
                                    </span>
                                  </p>
                                </td>
                                                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="askPrice" tabindex="-1" role="dialog" aria-labelledby="askPricelLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title oP_title">询价</h4>
                              </div>
                              <div class="modal-body">
                                <form action="/index.php/home/goods/inquiry" method="post">
                                  <input type="hidden" name="cas" value="875446-37-0" />
                                  <input type="hidden" name="goods_name" value="Anacetripib" />
                                  <input type="hidden" name="goods_id" value="487370"> 
                                  <input type="hidden" name="send_uid" value="" />
                                  <input type="hidden" name="rec_uid" value="1467" />
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar">*</span>需求数量:
                                    </label>
                                    <div class="input-group">
                                      <input class="form-control item-inputframe" type="text" name="product_num">
                                      <div class="input-group-btn">
                                        <select class="form-control dropdown-menu dropdown-menu-right mt0" name="product_num_unit">
                                          <option value="">请选择</option>
                                          <option value="g">g</option>
                                          <option value="mg">mg</option>
                                          <option value="kg">kg</option>
                                          <option value="ton">ton</option>
                                          <option value="μl">μl</option>
                                          <option value="ml">ml</option>
                                          <option value="l">l</option>
                                        </select>
                                      </div><!-- /btn-group -->
                                    </div>
                                  </div>
                                   
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar"></span>需求纯度:
                                    </label>
                                    <input type="text" class="form-control" name="purity">
                                  </div>
                                 
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar"></span>个人邮箱:
                                    </label>
                                    <input type="text" class="form-control" name="email" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar">*</span>公司名称:
                                    </label>
                                    <input type="text" class="form-control" name="cname" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar">*</span>联系人:
                                    </label>
                                    <input type="text" class="form-control" name="contact_people" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">
                                      <span class="redstar">*</span>联系电话:
                                    </label>
                                    <input type="text" class="form-control" name="phone" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">询盘备注:</label>
                                    <textarea class="form-control" name="remark"></textarea>
                                  </div>
                                   <div class="modal-footer">
                                     <input type="reset" class="btn btn-default" data-dismiss="modal" value="取消">
                                     <input type="submit" class="btn btn-primary" value="提交" />
                                    </div>
                                  </div>
                                </form>
                              </div>
                             
                          </div>
                      </div>
                      <div class="sd_else ofh">
                        <div class="share pull-left"></div>
                        <div class="sd_btn pull-right">
                                                    <a class="buy_now" href="javascript:void(0);" data-target="#loginPopUp" data-toggle="modal">立即购买</a>
                                                    
                                                      <a class="add_cart" href="javascript:void(0);" data-target="#loginPopUp" data-toggle="modal">加入购物车</a>
                           
                                                  </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
              <!--Size info-->
              <div class="sd_size mb15">
                <table class="table table-bordered table-hover mb5">
                  <thead>
                    <tr>
                      <th>货号</th>
                      <th>品牌</th>
                      <th>纯度</th>
                      <th>规格</th>
                      <th>价格</th>
                      <th>货期</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>
                                                <a href="/index.php/home/goods/goodsbuy?s_id=768816" class="fastjump"><?php echo ($data['huohao']); ?></a>
                      </th>
                      <th><?php echo ($data['pinpai']); ?></th>
                      <th><?php echo ($data['chundu']); ?></th>
                      <th><?php echo ($data['guige']); ?></th>
                      <th class="colorred">
                      ￥<?php echo ($data['money']); ?>元/g                                              </th>
                      <th><?php echo ($data['huoqi']); ?></th>
                    </tr>                  </tbody>
                </table>
              </div>
              <!--Base info-->
              <div class="sd_base mb15">
                <!--产品实物图-->
                                                                    <h2 class="pr">产品百科<a href="http://data.huaxuejia.cn/html/446/cas_875446-37-0_210.html" class="pa sd_more">查看更多</a></h2>
                <div class="pdDes_table">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="hidden">
                        <th class="tc" colspan="6">物理化学性质</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">英文名</th>
                        <td colspan="5"><?php echo ($data['englishname']); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">中文名</th>
                        <td colspan="5"><?php echo ($data['chiname']); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">CAS号</th>
                        <td><?php echo ($data['cas']); ?></td>
                        <th scope="row">溶解性</th>
                        <td><?php echo ($data['rongjiexing']); ?></td>
                      </tr>
                      <tr>
                        
                        <th scope="row">分子量</th>
                        <td><?php echo ($data['fenziliang']); ?></td>
                        <th scope="row">熔点</th>
                        <td><?php echo ($data['rongdian']); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">密度</th>
                        <td><?php echo ($data['midu']); ?>g/cm3</td>
                        <th scope="row">沸点</th>
                        <td><?php echo ($data['feidian']); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>              </div>
            </div>
            <div class="col-lg-3">
              <div class="sd_suppler mb20">
                <h2 class="sds_tit">商家信息</h2>
                <div class="sds_box ofh">
                  <div class="sds_pic pull-left">
                    <a href="javascript:void">
                                             <img src="<?php echo ($datasa['logo']); ?>">                    </a>
                  </div>
                  <div class="pull-right sds_text">
                    <h3><?php echo ($datasa['merch_name']); ?></h3>
                  </div>
                  <div class="iconSign">
                    <a href="javascript:void(0);" title="营业执照已审核"><img src="http://www.huaxuejia.cn/Public/home/images/certiPic.png"></a>
                    <a href="javascript:void(0);" title="企业已认证"><img src="http://www.huaxuejia.cn/Public/home/images/personPic.png" ></a>
                    <a href="javascript:void(0);" title="VIP企业"><img src="http://www.huaxuejia.cn/Public/home/images/vipPic.png"></a>                    
                  </div>
                </div>
                <div class="sds_info">
                  <div class="sshop_contact">
                    <p>联系人：<?php echo ($datasa['lianxiren']); ?>                      <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($datasa['qq']); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($datasa['qq']); ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>        
                    </p>
                    <p class="mt5">手机：<span class="colordarkblue"><?php echo ($datasa['phone']); ?></span></p>
                    <p class="mt5">座机：<span class="colordarkblue"><?php echo ($datasa['zuoji']); ?></span></p>
                  </div>
                  <div class="sshop_intro">
                    <ul>
                      <li><lable>公司类型：<em><?php echo ($datasa['com_type']); ?></em></lable></li>
                      <li><lable>成立时间：<em><?php echo ($datasa['cratime']); ?></em></lable></li>
                      <li><lable>所在地区：<em><?php echo ($datasa['address']); ?></em></lable></li>
                    </ul>
                  </div>
                  <div class="sshop_in tc">
                    <a class="btn sshop_inBtn" href="/index.php/home/shop?eid=<?php echo ($datasa['sid']); ?>">进入店铺</a>
                  </div> 
                </div>
              </div>  
            </div>
          </div>
        </div>
        
      </div>
    </div>
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/home/js/smoothproducts.min.js"></script><!--图片展示-->
    <script src="/Public/home/js/product.js"></script>
    <!--飞入购物车效果-->
    <script src="/Public/home/js/jquery.fly.min.js"></script>
    <!--[if lte IE 9]>
    <script src="/Public/home/js/requestAnimationFrame.js"></script>
    <![endif]-->
    <!-- 立即购买 -->
    <script type="text/javascript">
      function addorder(sid) {
        var num = parseInt($('#num_amount').val());
        location.href = '/index.php/home/orders/checkOrderInfo?s_id='+sid+'&num='+num;  
      }
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