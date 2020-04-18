<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
		<title>业主贷</title>
		<!-- 引入 FrozenUI -->
		<link rel="stylesheet" href="http://i.gtimg.cn/vipstyle/frozenui/2.0.0/css/frozen.css" />
	</head>

	<body>
		<div class="ui-form ui-border-t">
			<form action="/index.php/Home/Index/insyzd" method="post">

				<div class="ui-row-flex ui-whitespace ui-form-item ui-border-b">
					<div class="ui-col ui-col-2" style="font-size: 14px;">期望借款金额</div>
					<div class="ui-col ui-col-4" style="font-size: 14px;"><input type="text" name="money" id="money" placeholder="请输入期望金额"></div>
					<div class="ui-col ui-col-2" style="font-size: 14px;">元</div>
				</div>
				<div class="ui-row-flex ui-whitespace ui-form-item ui-border-b">
					
		            <div class="ui-col ui-col-2">
		            	<label style="font-size: 14px;">
		                期望分期数
		            </label>
		            </div>
		            <div class="ui-col ui-col-4">
		            	<div class="ui-select" style="font-size: 14px;">
						<select name="fq" id="fq">
							<option value="12" selected="">12</option>
							<option value="24">24</option>
						</select>
					</div>
		            </div>
					
				</div>
				<div class="ui-form-item ui-border-b">
					<label style="font-size: 14px;">
		                手机号
		            </label>
					<input type="text" name="phone" id="phone" placeholder="请输入" style="font-size: 14px;">
				</div>
				<div class="ui-actionsheet-split-line"></div>
				<div class="ui-form-item ui-border-b">
					<label style="font-size: 14px;">
		                推荐人
		            </label>
					<input type="text" name="tjr" placeholder="经纪人手机号码(选填)" style="font-size: 14px;">
				</div>
				<center>
					<div class="ui-btn-wrap" style="width: 70%;">
						<button type="submit"  onclick="yz()" class="ui-btn-lg ui-btn-primary" style="background-color: #e3cca7;font-size: 14px;border-radius:25px;border: hidden;color: #FFFFFF;">
		                	提交
		            </button>
					</div>
				</center>
			</form>
		</div>
	</body>
  
  <script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript"> 
  function yz(){
   var money= $("#money").val();
   var phone= $("#phone").val();
   var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
   var re = /^(1[3587][0-9]{9})$/;
    if(!money){
          alert("请您期望借款金额！")
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

</html>