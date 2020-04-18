<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品--后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/Public/css/font_eolqem241z66flxr.css" media="all" />
     <link rel="stylesheet" href="/Public/css/user.css" media="all" />
      <link rel="stylesheet" href="/Public/css/aui.css" media="all" />
        <script type="text/javascript" src="/Public/layui/layui.js"></script>
    <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
<style type="text/css">

    .layui-form-item .layui-inline{ width:33.333%; float:left; margin-right:0; }
    @media(max-width:1240px){
      .layui-form-item .layui-inline{ width:100%; float:none; }
    }

.file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}

</style>
</head>
<body class="childrenBody">
<div class="aui-content aui-margin-b-15">
<form action="/index.php/JY/Rermissions/adminadd" method="post"  enctype="multipart/form-data">
    <ul class="aui-list aui-form-list">
       

        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
                帐户
                </div>
                <div class="aui-list-item-input">
                    <input name="username" type="text" >
                </div>
            </div>
        </li>

        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
                密码
                </div>
                <div class="aui-list-item-input">
                    <input name="password" type="text" >
                </div>
            </div>
        </li>
        
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
                选择角色
                </div>
                <div class="aui-list-item-input">
                   <select name="role_id">
                   <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                   </select>
                </div>
            </div>
        </li>
    
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
               
                </div>
                <div class="aui-list-item-input">
                   
                 <a href="javascript:void(0);" class="file">  <input type="submit" name="tijiao" value="提交">提交</a> &nbsp<a href="javascript:void(0);" class="file"> <input type="reset" value="重置" />重置</a>
                 </div>
        </div>
        </li>         
</form>

    </body>
    <script type="text/javascript">

    </script>
<script type="text/javascript">

   $(".inp").change(function(){

 var objUrl = getObjectURL(this.files[0]) ;
 console.log("objUrl = "+objUrl) ;
 if (objUrl) {
   $(this).next().attr("src", objUrl).css('display','block');
  // $(".preview1").attr("src", objUrl) ;
 }
}) ;
//建立一個可存取到該file的url
function getObjectURL(file) {
 var url = null ; 
 if (window.createObjectURL!=undefined) { // basic
  url = window.createObjectURL(file) ;
 } else if (window.URL!=undefined) { // mozilla(firefox)
  url = window.URL.createObjectURL(file) ;
 } else if (window.webkitURL!=undefined) { // webkit or chrome
  url = window.webkitURL.createObjectURL(file) ;
 }
 return url ;
}

</script>
</html>