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

		    <thead>
				<tr>
					
					<th>ID</th>
					<th>身份证正</th>
					<th>身份证反</th>
					<th>姓名</th>
					<th>手机号</th>
					<th>申请时间</th>
                    <th>通过</th>
                   <th>驳回</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>
						<td><?php echo ($row['sfzz']); ?></td>
						<td><?php echo ($row['sfzf']); ?></td>
                        <td><?php echo ($row['xm']); ?></td>
                        <td><?php echo ($row['sjh']); ?></td>
                        <td><?php echo ($row['addtime']); ?></td>
                      
           
                    
                          <td><?php if($row['stat'] == 0 ): ?><a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">通过审核</a>
                            <?php else: ?> 
                            <a href="javascript:void(0);"><font color="green">已过审核</font></a><?php endif; ?>
                        </td>
                        <td>
                          <?php if($row['stat'] == 1 ): ?><a href="javascript:void(0);" ><font color="grey">驳回</font></a>
                            <?php else: ?> 
                           <a href="javascript:void(0);" class="bh" id="<?php echo ($row['id']); ?>">驳回</a><?php endif; ?>
                          
                          </td>
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
			if(confirm('确定通过审核？')){
				$.post("<?php echo U('Mgt/tsh');?>",{id:id},function(data){
					if(data==1){
					window.location.reload();
                    }else{
                   alert("未知错误！");
                    }
				})
			}
		})
      
      	$(".bh").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定驳回？')){
				$.post("<?php echo U('Mgt/bh');?>",{id:id},function(data){
					if(data==1){
                       alert("已驳回！");
					window.location.reload();
                    }else{
                   alert("未知错误！");
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
			$.get("<?php echo U('Mgt/sodel');?>",{so:so},function(data){

				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){

  
					tr="<tr>";
					tr+="<td>"+value.id+"</td>";
					tr+="<td>"+value.username+"</td>";
					tr+="<td>"+value.phone+"</td>";
					tr+="<td><img src='http://115.159.114.168/"+value.pic+"' width='80' height='80'></td>";
			
					tr+="<td>"+value.addtime+"</td>";
					tr+="<td>"+value.yue+"</td>";
					tr+='<td><a href="javascript:void(0);" class="del" id="'+value.id+'">删除</a></td>';
					tr+='</tr>';
        $(".layui-table").append(tr);

  	
  		$("#asdss").html(value.page);

  	})

  	     
  	
			})
		})
	</script>
</body>
</html>