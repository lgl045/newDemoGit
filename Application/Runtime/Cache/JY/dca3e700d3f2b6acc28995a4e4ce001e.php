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

	<div class="layui-form news_list">
	  <form action="/index.php/JY/Rermissions/roleupdate" method="post"  enctype="multipart/form-data">
	  	<table class="layui-table">
		  
		    <thead>
				<tr>
					<!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
					<th>id</th>
					<th>角色名称</th>

					
					<th>操作</th>
				</tr> 
		    </thead>
		   <tbody class="users_content">

		   <tr>
						<td><?php echo ($res['id']); ?></td>
						<input type="hidden" name="ids" value="<?php echo ($res['id']); ?>">
						
						<td><input type="text" class="layui-btn layui-btn-normal usersAdd_btn" name="name" value="<?php echo ($res['name']); ?>"></td>
					    <td><input type="submit" class="layui-btn layui-btn-normal usersAdd_btn" value="修改" ></td>
				
					</tr>
		   
						
					
				
		  </tbody> 
		</table>
		</form>
	</div>
	<div id="yin"><center><?php echo ($page); ?></center></div>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
		
$(".search_btn").click(function(){
	 $(".layui-table tr:gt(0)").each(function(){
    $(this).remove();
    $("#yin").remove();
  })
var  shu=$(this).parent().find(".search_input").val();
$.post('<?php echo U("Yiyuan/shangpindo");?>',{'shu':shu},function(data){

 var aaa = $.parseJSON(data);

  $.each(aaa,function(k,v){
     
              tr="<tr>";
              tr+="<td>"+v.id+"</td>";
              tr+="<td><img src='/Public/uploads/"+v.img0+"' style='width:100px;height:100px'></td>";
			  tr+="<td>"+v.title+"</td>";
			  tr+="<td>"+v.danjia+"</td>";
			  tr+="<td>"+v.canyu+"</td>";
			  tr+="<td>"+v.zongxv+"</td>";
			  tr+="<td>"+v.hmqs+"</td>";
			  tr+="<td>"+v.zuidaqishu+"</td>";
			  tr+="<td>"+v.zjhm+"</td>";
			  tr+="<td><a href='/index.php/JY/Rermissions/xingqing/id/"+v.id+"'>修改</a>&nbsp;|&nbsp;<a href='javascript:void(0);' class='del' >删除</a><input type='hidden' name='id' value="+v.id+"></td>";
              tr+="</tr>";
          $(".layui-table").append(tr);
      })
  $(".del").click(function(){
			var id = $(this).next().val();
			var ob = $(this);
			if(confirm('确定删除此商品？')){
				$.get("<?php echo U('Yiyuan/shanchu');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
})
})
$(".del").click(function(){
			var id = $(this).next().val();
			var ob = $(this);
			if(confirm('确定删除此商品？')){
				$.get("<?php echo U('Settings/delhezuo');?>",{id:id},function(data){
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