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
    <label class="layui-form-label">代理一</label>
    <div class="layui-input-block">
    
      <input type="number" name="bfb" style="width: 6%" required  lay-verify="required"  value="<?php echo ($bfb['baifenbi']); ?>" autocomplete="off" class="layui-input"><div style="margin-left: 62px;margin-top: -28px" >%</div>

    </div>
  </div>
        <div class="layui-form-item">
    <label class="layui-form-label">代理二</label>
    <div class="layui-input-block">
    
      <input type="number" name="er" style="width: 6%" required  lay-verify="required"  value="<?php echo ($bfb['er']); ?>" autocomplete="off" class="layui-input"><div style="margin-left: 62px;margin-top: -28px" >%</div>

    </div>
  </div>
        <div class="layui-form-item">
    <label class="layui-form-label">代理三</label>
    <div class="layui-input-block">
    
      <input type="number" name="san" style="width: 6%" required  lay-verify="required"  value="<?php echo ($bfb['shan']); ?>" autocomplete="off" class="layui-input"><div style="margin-left: 62px;margin-top: -28px" >%</div>

    </div>
  </div>
      



 
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button  type="button" class="layui-btn" lay-submit lay-filter="formDemo" id="asd">保存数据</button>

    </div>
  </div>
</form>
 

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script type="text/javascript">
	  	$("#asd").click(function(){
   			 var  number= $("input[name='bfb']").val();
           var  er= $("input[name='er']").val();
           var  san= $("input[name='san']").val();
        
			$.post("<?php echo U('Mgt/xgbfb');?>",{number:number,er:er,san:san},function(data){
				if(data==1){
                  alert("数据保存成功");
                }else{
                alert("网络繁忙请稍后再试");
                }
				})

		});
		
	</script>
</body>
</html>