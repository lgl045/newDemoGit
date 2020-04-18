<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户--后台管理</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/Public/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/Public/css/user.css" media="all" />
	<style type="text/css">
		.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
		.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
		.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
		.page .next,.page .prev{font-family:"宋体"}  
				
	</style>
</head>
<body class="childrenBody">
	<form class="layui-form" >
  <div class="layui-form-item">
    <label class="layui-form-label">名称</label>
    <div class="layui-input-block">
      <input type="text" name="name" style="width: 50%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
            
        <div class="layui-form-item">
    <label class="layui-form-label">网络头像</label>
    <div class="layui-input-block">
      <input type="text" name="pic" style="width: 50%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
 


 
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button  type="button" class="layui-btn" lay-submit lay-filter="formDemo" id="asd">立即添加</button>

    </div>
  </div>
</form>
 

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script type="text/javascript">
	  	$("#asd").click(function(){
   			 var  name= $("input[name='name']").val();
              var  pic= $("input[name='pic']").val();
          if(name==""){
            alert("名称不为空！");
            return false;
             }
            if(pic==""){
            alert("头像不为空！");
            return false;
             }
			$.post("<?php echo U('Mgt/jqradd');?>",{name:name,pic:pic},function(data){
             
				if(data==1){
            alert("添加成功！");
              window.location.href="https://mai.luhanforex.cn/index.php/QM_Admin_1216/Mgt/jqr";
                }else{
                alert("网络繁忙请稍后再试");
                }
				})

		});
		
	</script>
</body>
</html>