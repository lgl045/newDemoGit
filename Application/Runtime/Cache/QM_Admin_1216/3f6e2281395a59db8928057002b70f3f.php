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
	 <!--   <blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
	 <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>		

          
          <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/addcp">添加</a>

		</div>
		
	</blockquote> -->
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
			
					<th>内容</th>
					<th>产品编号</th>

                  <th>价钱</th>
      
                  <th>中文名</th>

                  <th>图片1</th>
                  <th>图片2</th>
                  <th>图片3</th>
                  <th>图片4</th>
                  <th>图片5</th>
                  <th>图片6</th>

                  <th>添加时间</th>
                  <th>优势产品</th>
                  
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($row['id']); ?>" >
				
					
						<td class="as"><?php echo ($row['content']); ?></td>
                      	<td><?php echo ($row['cas']); ?></td>
	
    

   
                      <td><?php echo ($row['money']); ?></td>
       
                      <td><?php echo ($row['chiname']); ?></td>
                 
                      	  <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic1"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                       <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic2"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                       <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic3"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                       <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic4"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                       <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic5"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                       <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["pic6"]); ?>" data-action="zoom" width="80" alt="商品" height="80"></td>
                      	<td><?php echo ($row['addtime']); ?></td>
                      <td>      <?php if($res['isyoushi'] == 1 ): ?>是

                        <?php else: ?>
                          否<?php endif; ?></td>

					
						
					
						<td><a href="/index.php/QM_Admin_1216/Mgt/ecp/id/<?php echo ($row['id']); ?>">修改</a>|<a href="javascript:void(0);" onclick="del(<?php echo ($row['id']); ?>)">删除</a></td>
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


		function del(id){

			if(confirm('确定删除？')){

				if(!id){
					alert('非法操作！');
				}else{
					$.post('/index.php/QM_Admin_1216/Mgt/del_product',{id:id},function(data){
						if(data == 1){
							$("#"+id).remove();
						}else{
							alert('服务器错误！');
						}
					})
				}
			}
		}

	

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