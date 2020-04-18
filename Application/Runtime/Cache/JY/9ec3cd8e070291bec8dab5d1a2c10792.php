<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
	 <link rel="stylesheet" href="/Public/css/bootstrap.min.css" media="all" />
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
			<a href="javascript:void" class="layui-btn layui-btn-normal usersAdd_btn">分配给<?php echo ($res["name"]); ?>权限</a>
		</div>
	</blockquote>
		<form action="/index.php/JY/Rermissions/addpermissions" method="post"  enctype="multipart/form-data">
		<div class="container">
		<?php if(is_array($parent)): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pa): $mod = ($i % 2 );++$i;?><div  class="checkbox col-md-8">
		&nbsp;&nbsp;&nbsp;
		<input  type="checkbox" id="check" value="<?php echo ($a=$pa['id']); ?>"   <?php if(in_array(($a), is_array($qxid)?$qxid:explode(',',$qxid))): ?>checked=checked<?php endif; ?> name="right_id[]">
		<?php echo ($pa['name']); ?>
	</div>
	<br>
	<hr>
	<div  style="border: 1px dashed rgb(200,200,200);line-height: 30px;">
		<?php if(is_array($pa[parent])): $i = 0; $__LIST__ = $pa[parent];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?>&nbsp;&nbsp;&nbsp;&nbsp;
	    <input  type="checkbox" value="<?php echo ($b=$vos['id']); ?>"             <?php if(in_array(($b), is_array($qxid)?$qxid:explode(',',$qxid))): ?>checked=checked<?php endif; ?> name="right_id[]">
		<?php echo ($vos["name"]); endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>   
	</div><br>
	<div  style="margin-left: 100px" class="layui-inline">
		<input  class="layui-btn layui-btn-normal usersAdd_btn" type="submit"  value="确认分配">
		</div>
		<!--role_id 角色id -->
		<input type="hidden" name="role_id" value="<?php echo ($res['id']); ?>">
	</form>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
</body>
<script>
	$(function(){
		$("#check ").click(function(){
	    var n=$(this).prop("checked");
		$(this).parent().next().next().next().find("input").prop("checked",n);         
	    });
	});
</script>
</html>