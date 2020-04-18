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
					<th>推荐人手机号</th>
					<th>推荐人姓名</th>
                    <th>姓名</th>
					<th>手机号</th>
                    <th>身份证正</th>
                    <th>身份证反</th>
                    <th>征信</th>
                    <th>申请时间</th>
                    <th>详情</th>
                  
        
                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					  <td> <?php echo ($row['id']); ?></td>
                      <?php if($row['tphone'] == null ): ?><td> 无推荐人手机号</td>
						<?php else: ?>
                                <td> <?php echo ($row['tphone']); ?></td><?php endif; ?>
                         <?php if($row['tname'] == null ): ?><td> 无推荐人姓名</td>
						<?php else: ?>
                               <td> <?php echo ($row['tname']); ?></td><?php endif; ?>
     				
                      <td> <?php echo ($row['name']); ?></td>
                      <td> <?php echo ($row['phone']); ?></td>
                      <td> <a href="<?php echo ($row['sfzz']); ?>"  target="_blank"> <img  src="<?php echo ($row['sfzz']); ?>"    width="50" height="50"></a></td>
                      <td> <a href="<?php echo ($row['sfzf']); ?>"  target="_blank"> <img  src="<?php echo ($row['sfzf']); ?>"    width="50" height="50"></a></td>
 					  <td> <a href="<?php echo ($row['zx1']); ?>"  target="_blank"> <img  src="<?php echo ($row['zx1']); ?>"    width="50" height="50"></a></td>
                      <td><?php echo ($row['addtime']); ?></td>
                        <td><a href="/index.php/JRapp/Mgt/gjjck/id/<?php echo ($row['id']); ?>">详情</a></td>
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
				$.post("<?php echo U('Mgt/delzx');?>",{id:id},function(data){
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
			$.get("<?php echo U('Mgt/sodel');?>",{so:so},function(data){

				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){

  
					tr="<tr>";
					tr+="<td>"+value.id+"</td>";
					tr+="<td>"+value.username+"</td>";
					tr+="<td>"+value.phone+"</td>";
					tr+="<td><img src='http://140.143.235.67/"+value.pic+"' width='80' height='80'></td>";
			
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