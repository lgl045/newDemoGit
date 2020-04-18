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
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		
		<div class="layui-inline">
			<a href="/index.php/JY/Rermissions/adminaddview" class="layui-btn layui-btn-normal usersAdd_btn">添加管理员</a>
		</div>
      
      	
		<div class="layui-inline" style="margin-left:85%">
			<a href="/index.php/JY/Rermissions/role" class="layui-btn layui-btn-normal usersAdd_btn">角色管理</a>
		</div>
		
		
	</blockquote>
  
	<div class="layui-form news_list">
	  	<table class="layui-table">
		  
		    <thead>
				<tr>
					<!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
					<th>ID</th>
					<th>管理员</th>
					<th>角色</th>

					
					<th>操作</th>
				</tr> 
		    </thead>
		   <tbody class="users_content">
		    	<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>	
						<td><?php echo ($row['username']); ?></td>
						<td><?php echo ($row['rolename']); ?></td>
								
						<td><a href="/index.php/JY/Rermissions/adminxiu/id/<?php echo ($row['id']); ?>">修改</a>&nbsp;|&nbsp;<a href="javascript:void(0);" class="del" >删除</a><input type="hidden" name="id" value="<?php echo ($row['id']); ?>"></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		  </tbody> 
		</table>
	</div>
	<div id="yin"><center><?php echo ($page); ?></center></div>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
		

$(".del").click(function(){
			var id = $(this).next().val();
			var ob = $(this);
			if(confirm('确定删除？')){
				$.post("<?php echo U('Rermissions/admindelete');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}else{
						alert("删除失败")
					}
				})
			}
		})
</script>
</body>
</html>