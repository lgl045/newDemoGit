<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width,minimum-scale=1.0 maximum-scale=1.0 user-scalable=no' />
	<title></title>

     <link rel="stylesheet" href="/Public/css/reset.css">
    <link rel="stylesheet" href="/Public/css/mine.css">
    <script src="gg/js/jquery.js" type="text/javascript"></script>
    <script src="gg/js/login.js" type="text/javascript"></script>
</head>
<body class="lg_box">
	<div class="fp_main">
		<h3></h3>
		<!-- <h3>Hello!</h3><p>欢迎您访问<span>晋商链</span></p> -->
		<!-- <img src="/gg/picture/yh_logo1.png" alt=""> -->
		<div class="fp" style="margin-top:180px">
			
			 <form action="/index.php/Home/Index/zcdl" method="post">

            <input name="url" value="/Index.php/Home/Login/logincl.html" type="hidden">
               
               		<input class="fp_p" type="text" name='name' id="name" placeholder="姓名" maxlength="11">
				<input class="fp_p" type="text" name='phone' id="phone" placeholder="手机号码" maxlength="11">
				<input class="fp_p" type="password" id="password" name='password' placeholder="登录密码(6-20位)" maxlength="20" title="6|20|新登陆密码">
				<input class="fp_p" type="password" id="pas" name='pas' placeholder="确认登录密码(6-20位)" maxlength="20" title="6|20|新登陆密码">
               
				<b class="iconfont l_b3 yzm" style="display:none;">&#xe61d;</b>
				
				<p id="DivMessAge" style="margin-top:15px; color:#000"></p>
			<!-- </form> -->
		</div>
		<br>
		<div id="checked" class="y_checked"></div>
		<button id="mysubmit" onclick="yz()" class="fp_button fp_bgc" type="submit" >注册</button>
		</form>
		
		<div style="clear: both;"></div>
	</div>
	
<script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript">
  
  function yz(){

    var phone= $("#phone").val();
     var name= $("#name").val();
    var password= $("#password").val();
    var pas= $("#pas").val();
    var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
    var re = /^(1[3587][0-9]{9})$/;
  if(!name){
      alert("请输入您的姓名！"); 
           event.preventDefault();
       }else if(!phone){
   alert("请输入您的手机号！"); 
           event.preventDefault();
               
     }else if(re.test(phone )==false){
          alert("您输入手机号码不合法！");   
           event.preventDefault();
      }else if(!password){
         alert("请输入您的密码！"); 
           event.preventDefault();
               
     }else if(password.length <6 ){
         alert("您输入的密码不能小于6位数！"); 
           event.preventDefault();
               
     }else if(password!=pas){
         alert("您输入的密码不一致！"); 
           event.preventDefault();
               
     }
  }
</script>

</body>
</html>