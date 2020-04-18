<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理</title>
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
    <style type="text/css">

a:link{
 background-color:  #c8d8f0; 
 border:black 1px solid;
 height: 20px; 
 padding:5px; 

}
a:hover{
 background-color: pink; 
 border:red 1px solid;
 color: #333333; 
 text-decoration: none;
}

</style>
</head>
<body class="childrenBody">
	<div class="layui-form news_list">
	  	<table class="layui-table">

		    <thead>
				<tr>

					<th>课程标题</th>
					<th>课程简介</th>
                    <th>课时</th>				
                    <th>金额</th>
                  	<th>老师简介</th>
                    <th>课程亮点</th>    
                    <th>申请时间</th>
                 	<th>状态</th>                  
					<th>操作</th> 
                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					  <td><?php echo ($row['title']); ?></td>
                      <td><?php echo ($row['kcjj']); ?></td>

					  <td><?php echo ($row['djj']); ?></td>
                      <td><?php echo ($row['money']); ?></td> 
                      <td><?php echo ($row['lsjj']); ?></td> 
                      <th><?php echo ($row['kcld']); ?></th>
                      <td><?php echo ($row['addtime']); ?></td>
                     <td>
                       <?php if($row['stat'] == 0): ?>未审核
                      <?php elseif($row['stat'] == 1): ?><font color="green">已通过</font> 
                         <?php else: ?><font color="red">已拒绝</font><?php endif; ?>
                      </td>

                      
				<td><a href="javascript:void(0);"  onclick="jj('<?php echo ($row['id']); ?>',1)">通过</a><a href="javascript:void(0);" onclick="jj('<?php echo ($row['id']); ?>',2)">拒绝</a></td>
		      
       
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
            function  jj(id,stat){
              if(stat==1){
              var s="确认通过审核";
              }else{
              var s="确认拒绝";
              }
        
      			if(confirm(""+s+"?")){
				$.post("<?php echo U('Mgt/ifsxy');?>",{id:id,stat:stat},function(data){
					if(data==1){
				    alert("操作成功")
                       location.reload();
					}else{
                    alert("操作失败")
                    }
				})
			}
      }
		$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('是否确定删除？')){
				$.post("<?php echo U('Mgt/delete');?>",{id:id},function(data){
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