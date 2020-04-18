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
      		 <blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
			<input type="text" id="sj" style="height:30px;" placeholder="输入手机号或用户id" name="bday">
		    <button class="layui-btn search_btn" class="xz"  >查询</button>
		</div>
      
	</blockquote>
	  	<table class="layui-table">

		    <thead>
				<tr>
					
					<th>ID</th>
				
					<th>手机号</th>
					<th>上级手机号</th>
                  <th>是否是会员</th>
					<th>余额</th>
					<th>金币余额</th>
					<th>待审核金额</th>
                    <th>已提金额</th>
                    <th>微信</th>
                     <th>昵称</th>
                   <th>是否猎人</th>
                  	<th>注册时间</th>

 
                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>
						<td><?php echo ($row['phone']); ?></td>
						<td>
                          <?php echo ($row['sj']); ?>
                       </td>
                      <!--<?php if($row['pic'] == '/Public/img/mr.jpg' ): ?><img src="http://dai.juhuaian.cn/Public/img/mr.jpg" data-action="zoom"  width="60" height="60">
                        <?php else: ?> 
                     <img src="http://dai.juhuaian.cn/Public/<?php echo (substr($row['pic'],1,-2)); ?>" data-action="zoom"  width="60" height="60"><?php endif; ?>-->
                      <td>
                       <?php if($row['grade'] == 0 ): ?><font color="green">非会员</font> 
                        <?php else: ?> 
                        <font color="red"><?php echo ($row['grade']); ?>级会员</font><?php endif; ?>
                       </td> 
                       <td><?php echo ($row['yue']); ?></td>
                       <td><?php echo ($row['jbye']); ?></td>
                       <td><?php echo ($row['dshje']); ?></td>
                       <td><?php echo ($row['ytje']); ?></td>
                       <td><?php echo ($row['wx']); ?></td>
                       <td><?php echo ($row['nick']); ?></td>
                       <td>
                       <?php if($row['islr'] == 1 ): ?><font color="green">是</font> 
                        <?php else: ?> 
                         不是<?php endif; ?>
                       </td> 
                       <td><?php echo (date("Y-m-d h:i:s",$row['addtime'])); ?></td>

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
		$(".sh").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
         
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/senhes');?>",{id:id},function(data){
					if(data==1){
						alert("操作成功！");
                      window.location.reload();
					}else{
                    alert("操作失败！");
                    }
				})
			}
		})
      	$(".shn").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
         
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/senhen');?>",{id:id},function(data){
					if(data==1){
						alert("操作成功！");
                      window.location.reload();
					}else{
                    alert("操作失败！");
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
			var so=$("#sj").val();
			$.get("<?php echo U('Mgt/cyh');?>",{sj:so},function(data){
      

				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){

  
					tr="<tr>";
					tr+="<td>"+value.id+"</td>";
					tr+="<td>"+value.phone+"</td>";
					tr+="<td>"+value.sj+"</td>";
                  
                     if(value.grade==1){
                       tr+="<td><font color='red'>"+value.grade+"级会员</font></td>";
                        }else{
                       tr+="<td> <font color='green'>非会员</font></td>";
                        }
                  		tr+="<td>"+value.yue+"</td>";
                  		tr+="<td>"+value.jbye+"</td>";
                  		tr+="<td>"+value.dshje+"</td>";
                  		tr+="<td>"+value.ytje+"</td>";
                  		tr+="<td>"+value.wx+"</td>";
                	    tr+="<td>"+value.nick+"</td>";
					    if(value.islr==1){
                        tr+="<td>  <font color='green'>是</font> </td>";
                        }else{
                        tr+="<td> 不是</td>";
                        }
                       	tr+="<td>"+value.time+"</td>";
					    tr+='</tr>';
                        $(".layui-table").append(tr);
  			    })
			})
		})
	</script>
</body>
</html>