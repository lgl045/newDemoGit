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
  	<style type="text/css">
		.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
		.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
		.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
		.page .next,.page .prev{font-family:"宋体"}  
      .fx{ margin-left:150px}
				
	</style>
</head>
<body class="childrenBody">
<blockquote class="layui-elem-quote news_search">
		<!-- <div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div> -->
		<div class="layui-inline">

			<a class="layui-btn layui-btn-normal usersAdd_btn"  href="/index.php/JY/Goods/addcp">添加商品</a>
		</div>

	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<!-- <col width="50"> -->
				<!-- <col> -->
				<col width="5%">
				<col width="13%">
				<col width="10%">
				<col width="10%">
				<col width="5%">
				<col width="5%">
				<col width="5%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
		    </colgroup>
		    <thead>
				<tr>
					<!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
					<th>ID</th>
					<th>商品名称</th>
					<th>商品图片</th>
					<th>所属分类</th>
					<th>商品价格</th>

					<th>商品状态</th>

					<th>发布时间</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>
						<td><?php echo ($row['content']); ?></td>
						<td><img src="http://<?=$_SERVER['SERVER_NAME']?>/<?php echo ($row['img']); ?>" width="100" height="100"></td>
	
						<td>
							<?php if($row['zts'] == '0'): ?>普通商品
							<?php elseif($row['zts'] == '1'): ?>
								会员专享
                              <?php else: ?>
                              未选择<?php endif; ?>
						</td>
						<td><?php echo ($row['danjia1']); ?></td>

						<td>
							<?php if($row['code'] == '1'): ?>销售中
							<?php elseif($row['code'] == '2'): ?>
								已下架<?php endif; ?>
						</td>
		
						<td><?php echo (date("Y-m-d H:i:s",$row['addtime'])); ?></td>
						<td>
						<?php if($row['code'] == '1'): ?><a href="/index.php/JY/Goods/down/id/<?php echo ($row['id']); ?>">下架</a>
						<?php elseif($row['code'] == '2'): ?>
							<a href="/index.php/JY/Goods/up/id/<?php echo ($row['id']); ?>">上架</a><?php endif; ?>
						&nbsp;|&nbsp;<a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>" style="color:red">删除</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
		</table>
	</div>
	<center><div id="asds" class="result page"><?php echo ($pageinfo); ?></div></center> <br />
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定删除此商品？')){
				$.get("<?php echo U('Goods/del');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
		// $(".xiugai").click(function(){
		// 	var id = $(this).attr('id');
		// 	var ob = $(this);
		// 	var  code=ob.next().val();
		// 		$.get("<?php echo U('Goods/dels');?>",{id:id,code:code},function(data){
		// 			if(data==1){
		// 				  window.location.reload();//刷新当前页面.
		// 			}
		// 		})
			
		// })
		 $(".search_btn").click(function(){
         $(".layui-table tr:gt(0)").each(function(){
          $(this).remove();
          $("#lei").remove();
          })
      var so=$(".search_input").val();
      $.get("<?php echo U('Goods/sosuo');?>",{so:so},function(data){
        var ha=$.parseJSON(data);
                $.each(ha,function(key,value){
  
          tr="<tr>";
          tr+="<td>"+value.id+"</td>";
          tr+="<td>"+value.nick+"</td>";
          tr+="<td>"+value.content+"</td>"
          tr+="<td>"+value.zan+"</td>";
          tr+="<td>"+value.zhuan+"</td>";
          tr+="<td>"+value.addtime+"</td>";

          

          tr+='<td>'+value.code+'&nbsp;|&nbsp;<a href="javascript:void(0);" class="xiugai" id="'+value.id+'">修改</a><input type="hidden" name="code" value="'+value.code+'"></td>';
          tr+='<td><a href="/index.php/JY/Goods/edit/id/'+value.id+'">修改</a>&nbsp;|&nbsp;<a href="/index.php/JY/Goods/details/id/'+value.id+'" style="color:blue;">图片详情</a>&nbsp;|&nbsp;<a href="javascript:void(0);" class="del" id="'+value.id+'">删除</a></td>';
          tr+='</tr>';
        $(".layui-table").append(tr);
    })
             $(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			//alert(id);
			if(confirm('确定删除此商品？')){
				$.get("<?php echo U('Goods/del');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
		$(".xiugai").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			var  code=ob.next().val();
				$.get("<?php echo U('Goods/dels');?>",{id:id,code:code},function(data){
					if(data==1){
						  window.location.reload();//刷新当前页面.
					}
				})
			
		})
              })
    })
	</script>
</body>
</html>