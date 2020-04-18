<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
 <head>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <meta charset="UTF-8" />
  <title>申请详情</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/loan.css"><link rel="stylesheet" href="css/weui.css"/><link rel="stylesheet" href="css/web.css"/><link rel="stylesheet" type="text/css" href="css/loan_global.css"/><link rel="stylesheet" type="text/css" href="css/loan_detail.css"> -->
  <link rel="stylesheet" type="text/css" href="/Public/css/loan_base.css" />
  <!-- <link rel="stylesheet" type="text/css" href="css/loan.css"><link rel="stylesheet" href="css/weui.css"/><link rel="stylesheet" href="css/web.css"/> -->
  <link rel="stylesheet" href="/Public/css/weui.min.css" />
  <link rel="stylesheet" href="/Public/css/goodsdetails.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/windowopen.js"></script>
  <!-- <script src="js/jweixin-1.0.0.js"></script> -->
  <!-- <script> -->
  <!-- function onBridgeReady(){ -->
  <!-- WeixinJSBridge.call('hideOptionMenu'); -->
  <!-- } -->
  <!-- if (typeof WeixinJSBridge == "undefined"){ -->
  <!-- if( document.addEventListener ){ -->
  <!-- document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false); -->
  <!-- }else if (document.attachEvent){ -->
  <!-- document.attachEvent('WeixinJSBridgeReady', onBridgeReady);  -->
  <!-- document.attachEvent('onWeixinJSBridgeReady', onBridgeReady); -->
  <!-- } -->
  <!-- }else{ -->
  <!-- onBridgeReady(); -->
  <!-- } -->
  <!-- </script> -->
 </head>
 <body>
   
	<form action="/index.php/Home/Index/tjdt" method="post"  enctype="multipart/form-data">
   

  <!-- <header><div class="bd"><div class="weui_tab br_t"><div class="weui_navbar bg_f wtab"><div class="weui_navbar_item weui_bar_item_on" onClick="member1()"><h3>贷款详情</h3></div></div><div class="weui_tab_bd"></div></div></div></header> -->
  <div class="content">
   <div class="titlenav">
    <div class="weui-flex" style="margin-top: 10px;">
     <div class="weui-flex__item">
      <p class="text">最高额度</p>
      <p class="money"><?php echo ($dt['maxed']); ?></p>
     </div>
     <div class="weui-flex__item">
      <p class="text">期限范围</p>
      <p class="money"><?php echo ($dt['qxfw']); ?></p>
     </div>
     <div class="weui-flex__item">
      <p class="text">月利率</p>
      <p class="money"><?php echo ($dt['yll']); ?></p>
     </div>
    </div>
   </div
  
   <!-- 图文介绍 -->
   <div class="goods_info">
        <input type="hidden" name="uid" value="<?php echo ($uid); ?>">
            <input type="hidden" name="cp" value="<?php echo ($dt['name']); ?>">
        <input type="hidden" name="wz" value="<?php echo ($dt['wz']); ?>">
    <div class="bg">
     <div class="img">
      <img src="<?php echo ($dt['pic1']); ?>" alt="" class="goodsImg" style="width:60px;height:60px" />
      <p class="goods_name"><?php echo ($dt['name']); ?></p>
     </div>
     <div class="money_box">
      <p><span id="m_refund_price"><?php echo ($dt['yhk']); ?></span><span>月还款(元)</span></p>
      <p><span id="total_interest"><?php echo ($dt['zlx']); ?></span><span>总利息(元)</span></p>
     </div>
     <div class="weui-cell form-group">
      <div class="weui-cell__hd">
       <label class="weui-label">金额(元)</label>
      </div>
      <div class="weui-cell__bd">
       <input class="weui-input" type="number" id="money" name="money" pattern="[0-9]*" placeholder="请输入金额" id="price" />
      </div>
     </div>
     <div class="weui-cell weui-cell_select weui-cell_select-after form-group">
      <div class="weui-cell__hd">
       <label for="" class="weui-label">期限</label>
      </div>
      <div class="weui-cell__bd">
       <select class="weui-select" name="qx" id="need_time"><option value="1">1个月</option><option value="2">2个月</option><option value="3">3个月</option><option value="4">4个月</option><option value="5">5个月</option><option value="6">6个月</option><option value="7">7个月</option><option value="8">8个月</option><option value="9">9个月</option><option value="10">10个月</option><option value="11">11个月</option><option value="12">12个月</option><option value="13">13个月</option><option value="14">14个月</option><option value="15">15个月</option><option value="16">16个月</option><option value="17">17个月</option><option value="18">18个月</option><option value="19">19个月</option><option value="20">20个月</option><option value="21">21个月</option><option value="22">22个月</option><option value="23">23个月</option><option value="24">24个月</option></select>
      </div>
     </div>
     <div class="ts">
      <p><strong>嘉卡、秒啦</strong></p>
      <p><strong><br /></strong></p>
      <p>产品介绍</p>
      <p>借款金额：3000—30000</p>
      <p>借款期限：3—12个月</p>
      <p>综合费率：月利率低至0.53</p>
      <p>审核周期：一分钟注册，当天到账</p>
      <p><br /></p>
      <hr />
      <p><br /></p>
      <p>申请条件</p>
      <p>1、20—40周岁，信用卡6个月以上(嘉卡贷)，20-45，手机运营商授权（秒啦）</p>
      <p>2、中国大陆公民（香港、澳门、台湾除外）</p>
      <p>3、持有效二代身份证</p>
      <p><br /></p>
      <hr />
      <p><br /></p>
      <p>申请资料：</p>
      <p>1、身份证信息</p>
      <p>2、实名制手机</p>
      <p>3、信用卡信息</p>
      <p><br /></p>
      <p><strong>嘉英贷</strong></p>
      <p><br /></p>
      <p style="white-space: normal;"><br /></p>
      <p style="white-space: normal;">产品介绍</p>
      <p style="white-space: normal;">借款金额：3000—50000</p>
      <p style="white-space: normal;">借款期限：6、12、18个月</p>
      <p style="white-space: normal;">综合费率：月利率低至0.53</p>
      <p style="white-space: normal;"><br /></p>
      <hr />
      <p style="white-space: normal;"><br /></p>
      <p style="white-space: normal;"><br /></p>
      <p style="white-space: normal;">申请条件<br /></p>
      <p style="white-space: normal;">1、23—44周岁</p>
      <p style="white-space: normal;">2、持有效二代身份证</p>
      <p style="white-space: normal;">3、公积金6个月以上</p>
      <p style="white-space: normal;"><br /></p>
      <hr />
      <p style="white-space: normal;"><br /></p>
      <p style="white-space: normal;">贷款所需资料<br /></p>
      <p style="white-space: normal;">1、身份证信息</p>
      <p style="white-space: normal;">2、实名制手机</p>
      <p style="white-space: normal;">3、个人公积金账户开户时间满6个月</p>
      <p style="white-space: normal;">4、现单位缴纳社保或公积金连续缴费记录≥12期</p>
      <p style="white-space: normal;">5、有信用记录且记录良好</p>
      <p><strong><br /></strong><br /></p>
     </div>
     <div class="fixed_box">
      <div class="weui-cell form-group">
       <div class="weui-cell__hd">
        <label class="weui-label">姓名</label>
       </div>
       <div class="weui-cell__bd">
        <input class="weui-input" name="xm" id="name" type="text" placeholder="请输入姓名" />
       </div>
      </div>
      <div class="weui-cell form-group">
       <div class="weui-cell__hd">
        <label class="weui-label">手机号</label>
       </div>
       <div class="weui-cell__bd">
        <input class="weui-input" name="phone" id="phone" type="number" pattern="[0-9]*" placeholder="请输入手机号" />
       </div>
      </div>
      <div class="weui-cell form-group" style="display:none">
       <div class="weui-cell__hd">
        <label class="weui-label">身份证号</label>
       </div>
       <div class="weui-cell__bd">
        <input class="weui-input" id="card_no" type="text" placeholder="请输入身份证号" />
       </div>
      </div>
      <div class="weui-cell form-group">
       <p style="font-size:12px;color:#e64340">已有18044070人申请</p>
      </div>
      <div class="weui-flex btn-box">
       <div class="weui-flex__item">
        <input type="hidden" value="840750" id="from_user_id" />
        <input type="submit"  class="weui-btn weui-btn_primary" onclick="yz()"    value="立即申请"/></a>
       </div>
       <div class="weui-flex__item">
        <a class="weui-btn weui-btn_primary" id="buzhougonglue" href="">申请攻略</a>
       </div>
      </div>
     </div>
    </div>
    <input type="hidden" value="0.53" id="rate" />
    <input type="hidden" value="https://ka.niwodai.com/loans-mobile/event.do?method=tg&amp;a=5820160000022515&amp;nwd_ext_aid=5020161670647545&amp;source_id=" id="link" />
   </div>
  </div>
    
       </form>
    
  <!-- <footer><div class="bd bg_f" style="position: fixed; bottom: 0; width: 100%; z-index: 100;"><div class="weui_tab"><div class="weui_tab_bd"></div><div class="weui_tabbar footers"><a href="/index.php?g=App&m=Loan&a=index" class="weui_tabbar_item"><div class="weui_tabbar_icon"><img src="picture/icon_nav_member_on.png" alt=""></div><p class="weui_tabbar_label ">网贷返佣</p></a><a href="/index.php?g=App&m=Index&a=member" class="weui_tabbar_item"><div class="weui_tabbar_icon"><img src="picture/icon_nav_user.png" alt=""></div><p class="weui_tabbar_label ">最新口子</p></a><a href="/index.php?g=App&m=Index&a=nameerweima" class="weui_tabbar_item get_code"><div class="weui_tabbar_icon"><img src="picture/icon_nav_extension_on.png" alt=""></div><p class="weui_tabbar_label ">我要推广</p></a><a href="/index.php?g=App&m=Index&a=contentshow&id=117" class="weui_tabbar_item"><div class="weui_tabbar_icon"><img src="picture/help.png" alt="" ></div><p class="weui_tabbar_label ">新手指南</p></a></div></div></div></footer> -->
  <!-- E-菜单部分 -->
   
     <script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript"> 
  function yz(){
   var name= $("#name").val();
     var qx= $("#need_time").val();
   var money= $("#money").val();
   var phone= $("#phone").val();
   var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
   var re = /^(1[3587][0-9]{9})$/;
    if(!money){
          alert("请您输入金额！")
          event.preventDefault();
       } else if(!qx){
          alert("请选择您的期限！"); 
           event.preventDefault();
       }else if(!name){
          alert("请输入您的姓名！"); 
           event.preventDefault();
       }else if(!phone){
          alert("请输入您的手机号！"); 
           event.preventDefault();
       }else if(re.test(phone)==false){
          alert("您输入手机号码不合法！");   
           event.preventDefault();
     }
  }
</script>
  <script>		$(function(){
			var cansave = true;
			$("#lijibanli").click(function(){
				var name = $("#name").val();
				var phone = $("#phone").val();
				var card_no = $("#card_no").val();
				var loan_id = 'b708236509c34b87a894efe8c857c0ae';
				var from_user_id = $("#from_user_id").val();
				
				if(name.length==0){
					//$(this).openWindow("提示","请输入姓名！",'["确定"]');
					alert("请输入姓名！");
					return false;
				}
				var myreg = /^1\d{10}$/; 
				if(!myreg.test(phone)) 
				{ 
					//$(this).openWindow("提示","请输入有效的手机号码！",'["确定"]');
					alert("请输入有效的手机号码！");
				    return false; 
				}
				
				if(cansave){
					cansave = false;
					$.post('/index.php?m=Loan&a=loan_save', {'name': name, 'mobile':phone, 'loan_id':loan_id, 'card_no':card_no, 'from_user_id':from_user_id}, function (data){
		    			if (data.status == 1) {
		    				//$(this).openWindow("提示",'提交成功！','["确定"]');
		    				alert("提交成功！");
		    				
                            var link = $("#link").val();
                          	if(link.length>0){
                               location.href=link;
                            }else{
                               location.reload();
                            }
                          
			        	}else{
			        		//$(this).openWindow("提示",data.msg,'["确定"]');
			        		alert(data.msg);
			        	}
		    			cansave = true;
		        	});
				}
			})
			
			$("#price").keyup(function(){
				var price = $(this).val();
				var need_time = $("#need_time").val();
				jisuan(price, need_time);
			})
			
			$("#need_time").change(function(){
				var price = $("#price").val();
				var need_time = $("#need_time").val();
				jisuan(price, need_time);
			})
		})
		
		function jisuan(price, need_time){
			var rate = parseFloat($("#rate").val());
			price = parseFloat(price);
			need_time = parseInt(need_time);
			if(rate>0 && price>0){
				var total_interest = ((rate/100)*price*need_time);
				var m_refund_price = ((price+total_interest)/need_time).toFixed(2);
				total_interest = total_interest.toFixed(2);
				$("#m_refund_price").text(m_refund_price);
				$("#total_interest").text(total_interest);
			}else{
				$("#m_refund_price").text(0);
				$("#total_interest").text(0);
			}
		}
		</script>
 </body>
</html>