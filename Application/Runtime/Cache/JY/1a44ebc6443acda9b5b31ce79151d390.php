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
					<th>服务品类ID</th>
					<th>课程</th>
                  
                    <th>服务介绍</th>
                    <th>练习内容</th>
                    <th>服务方式</th>
                    <th>报价</th>

                  	<th>添加时间</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['fw_id']); ?></td>
                      	<td>
                          <?php if(is_array($row['kc_id'])): $i = 0; $__LIST__ = $row['kc_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i; echo ($r); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                        <td><?php echo ($row['fwjs']); ?></td>
						<td>
                          <?php if(is_array($row['lx_id'])): $i = 0; $__LIST__ = $row['lx_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lx): $mod = ($i % 2 );++$i; echo ($lx); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                        <!--<img src="<?php echo ($row['pimg']); ?>" data-action="zoom"  width="60" height="60"></td>-->
                        
                        <td><?php echo ($row['fwfs']); ?></td>
                        <td><?php echo ($row['bj']); ?>元/小时</td>

                        <td><?php echo ($row['created_at']); ?></td>
                        

					
						<td><a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">删除</a></td>
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
		$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);

			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/del_ls');?>",{id:id},function(data){
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
			$.get("<?php echo U('Mgt/sogoods');?>",{so:so},function(data){
				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){
					tr="<tr>";
					tr+="<td>"+value.id+"</td>";
					tr+="<td>"+value.content+"</td>";
					tr+="<td>"+value.danjia1+"</td>";
					tr+="<td>"+value.danjia2+"</td>";
					tr+="<td><img src='http://115.159.114.168/"+value.img+"' width='80' height='80'></td>";
					tr+="<td>"+value.addtime+"</td>";				
					tr+='<td><a href="javascript:void(0);" class="del" id="'+value.id+'">删除</a></td>';
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