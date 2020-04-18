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
	<blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
	
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/addcp">添加产品</a>
		</div>

      
     
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">

		    <thead>
				<tr>
					
					<th>ID</th>
                  		<th>自定义排序</th>
					<th>名字</th>
					<th>网址</th>
                    <th>图片</th>
                  <th>额度</th>
                  <th>所属分类</th>
					<th>说明</th>
					<th>返佣说明</th>
					<th>是否推荐</th>
					<th>是否最热</th>
                    <th>是否有攻略</th>
                    <th>添加日期</th>
          
                    <th>操作</th>

                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>
				        <td><input type="number" id="pxs_<?php echo ($row['id']); ?>" value="<?php echo ($row['px']); ?>" onBlur="px(<?php echo ($row['id']); ?>)" style="width:50%; "/></td>
						<td><?php echo ($row['name']); ?></td>

                        <td><?php echo ($row['wz']); ?></td>
                       <td><img src="<?php echo ($row['pic']); ?>" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;"></td>
                      <td><?php echo ($row['ed']); ?></td>
                      

                      <td> 
                        <?php if($row['fid'] == 1 ): ?>网贷
						<?php elseif($row['fid'] == 2): ?>银行房押
					    <?php elseif($row['fid'] == 3): ?>信用卡
                        <?php elseif($row['fid'] == 4): ?>银行信贷 
                           <?php elseif($row['fid'] == 5): ?>小贷（线下） 
                            <?php elseif($row['fid'] == 6): ?>查询工具
                            <?php elseif($row['fid'] == 7): ?>按揭房	
                            <?php elseif($row['fid'] == 8): ?>打卡公积金
                            <?php elseif($row['fid'] == 9): ?>保单
                          
                        <?php else: ?> 黑户口子<?php endif; ?>
                      </td>
                        <td><?php echo ($row['sm']); ?></td>
                       <td><?php echo ($row['fysm']); ?></td>
                       <td><?php echo ($row['iszx']); ?></td>
                       <td><?php echo ($row['iszr']); ?></td>
                       <td><?php echo ($row['isgl']); ?></td> 
                       <td><?php echo ($row['addtime']); ?></td>
    						<td><a href="/index.php/JY/Mgt/ecp/id/<?php echo ($row['id']); ?>">修改</a>|<a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">删除</a></td>
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
      
      function px(ids){
     var num = $("#pxs_"+ids).val();
    $.post("<?php echo U('Mgt/px');?>",{num:num,ids:ids},function(data){
					if(data==1){
				         alert("操作成功");
					}else if(data==3){
                    alert("输入值重复");
                    }else{
                    alert("网络出问题了。。。")
                    }
				})
      }
		$(".del").click(function(){

			var id = $(this).attr('id');

			var ob = $(this);
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/delcp');?>",{id:id},function(data){
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