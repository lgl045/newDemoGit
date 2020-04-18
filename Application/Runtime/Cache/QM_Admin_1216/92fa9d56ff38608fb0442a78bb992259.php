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
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入用户名称" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		<!--     <colgroup>
				<col width="50">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
		    </colgroup> -->
		    <thead>
				<tr>
					<th>ID</th>
					<th>用户名称</th>
					
					<th>用户头像</th>
                  <th>代理类别</th>
				
					<th>用户余额</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($row['uid']); ?>">
						<td><?php echo ($row['uid']); ?></td>
						<td><?php echo ($row['name']); ?></td>
						<td><img src="<?php echo ($row['img']); ?>" data-action="zoom"  width="80" height="80"></td>
                      <td>
                        <?php if($row['bianhao'] == 0): ?>admin
                      <?php elseif($row['bianhao'] == 1): ?>代理一级
                               <?php elseif($row['bianhao'] == 2): ?>代理二级
                          
                      <?php else: ?> 代理三级<?php endif; ?>
                      
                      </td>
                      <td><?php echo ($row['jbye']); ?><br><a href="javascript:void(0);" class="sf" id="<?php echo ($row['uid']); ?>" >上分</a>|<a  href="javascript:void(0);" class="xf" id="<?php echo ($row['uid']); ?>">下分</a></td>
				
						<td><a href="javascript:void(0);" class="del" id="<?php echo ($row['uid']); ?>">删除</a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
		</table>
	</div>
		<center><div id="asds" class="result page"><?php echo ($pageinfo); ?></div></center> <br />
	<center><div id="asdss" class="result page"></div></center> <br />

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>

	<script type="text/javascript">
   
      		$(".sf").click(function(){
             var id = $(this).attr('id');
             
			  var sf = prompt("请输入您的上分金额:");
    
            		$.post("<?php echo U('Mgt/sf');?>",{sf:sf,id:id},function(data){
				if(data==1){
                   alert("上分成功");
                      window.location.href="https://mai.luhanforex.cn/index.php/QM_Admin_1216/Mgt/jl_user";
                   }else{
                     alert("网络请求失败");
                   }
				})
              
		})
         		$(".xf").click(function(){
             var id = $(this).attr('id');
             
			  var sf = prompt("请输入您的下分金额:");
            		$.post("<?php echo U('Mgt/xf');?>",{sf:sf,id:id},function(data){
				if(data==1){
                   alert("下分成功");
                      window.location.href="https://mai.luhanforex.cn/index.php/QM_Admin_1216/Mgt/jl_user";
                   }else{
                     alert("网络请求失败");
                   }
				})
              
		})
      
		$(".del").click(function(){
			var id = $(this).attr('id');
   
			var ob = $(this);

			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/juser_del');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
		$(".search_btn").click(function(){
			$("#asds").hide();

	     $(".layui-table tr:gt(0)").each(function(){
         $(this).remove();
          $("#lei").remove();
          })
			var so=$(".search_input").val();
			$.get("<?php echo U('Mgt/suser');?>",{so:so},function(data){
				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){
					tr="<tr>";
					tr+="<td>"+value.uid+"</td>";
					tr+="<td>"+value.name+"</td>";
                  	tr+="<td><img src='"+value.img+"' width='80' height='80'></td>";
					tr+="<td>"+value.jbye+"</td>";
					tr+='<td><a href="javascript:void(0);" class="del" id="'+value.uid+'">删除</a></td>';
					tr+='</tr>';
        $(".layui-table").append(tr);
        	$("#asdss").html(value.page);
  	})
  	       
  	
			})
		})

			$(".as").each(function(){
				var maxwidth=6;
				if($(this).text().length>maxwidth){
					$(this).text($(this).text().substring(0,maxwidth));
					$(this).html($(this).html()+"…");
					}
				});
	</script>
</body>
</html>