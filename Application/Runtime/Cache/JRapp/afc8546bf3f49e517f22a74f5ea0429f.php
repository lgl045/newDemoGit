<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>金融管理系统</title>
    <link rel="icon" href="/Public/lz_login/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/Public/lz_login/images/favicon.ico" type="image/x-icon"/>
    <link href="/Public/lz_login/css/default.css" rel="stylesheet" type="text/css" />
    <!--必要样式-->
    <link href="/Public/lz_login/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/Public/lz_login/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/Public/lz_login/css/loaders.css" rel="stylesheet" type="text/css" />
    <script src="/Public/lz_login/js/jquery-2.1.1.min.js"></script>

</head>
<body>
<div class='login'>

    <!--<img class="MyLogo" src="picture/logo01.png" alt="   LOGO">-->
    <div class='login_title'>
        <span>管理员登录</span>
    </div>
    <form  action="/index.php/JRapp/Login/checklogin" method="post">
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>

                <img alt="" src='/Public/lz_login/picture/user_icon_copy.png'>
            </div>
            <input name="ername" placeholder='用户名' maxlength="16" class="username" type='text' autocomplete="off" value=""/>
            <div class='validation'>
                <img alt="" src='/Public/lz_login/picture/tick.png'>
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src='/Public/lz_login/picture/lock_icon_copy.png'>
            </div>
            <input name="password" class="passwordNumder" placeholder='密码' maxlength="16" type='text' autocomplete="off">
            <div class='validation'>
                <img alt="" src='/Public/lz_login/picture/tick.png'>
            </div>
        </div>
        <div class='login_fields__password' style="display:none;">
            <div class='icon'>
                <img alt="" src='/Public/lz_login/picture/key.png'>
            </div>
            <input name="code" placeholder='验证码' maxlength="4"  class="ValidateNum" type='text' name="ValidateNum" autocomplete="off">
            <div class='validation' style="opacity: 1; right: -5px;top: -3px;">
                <canvas class="J_codeimg" id="myCanvas" onclick="Code();">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
            </div>
        </div>
        <div class='login_fields__submit'>
                       <input type="submit"  value="登录" id="btn-login" class="login-submit"/>
        </div>
    </div>
    <div class='success'>
    </div>
    <div class='disclaimer'>
        <p>欢迎登陆</p>
    </div>

  
  </form>
<div class='authent'>
    <div class="loader" style="height: 60px;width: 60px;margin-left: 28px;margin-top: 40px">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>认证中...</p>
</div>
<div class="OverWindows"></div>
<link href="css/layui_1.css" rel="stylesheet" type="text/css" />
<!--<script src="js/jquery-1.10.2.js"></script>-->
<script type="text/javascript" src="/Public/lz_login/js/jquery-ui.min.js"></script>
<script type="text/javascript" src='/Public/lz_login/js/stopexecutionontimeout.js'></script>
<script src="/Public/lz_login/js/layui_1.js" type="text/javascript"></script>
<script src="/Public/lz_login/js/particleground.js" type="text/javascript"></script>
<script src="/Public/lz_login/js/treatment.js" type="text/javascript"></script>
<script src="/Public/lz_login/js/jquery.mockjax.js" type="text/javascript"></script>
<script src="/Public/lz_login/js/controllogin.js" type="text/javascript"></script>
</body>
</html>