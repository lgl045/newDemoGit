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
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/addkh">添加公司客户</a>
		</div>

      
        <div class="layui-inline"  style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/gys">供应商</a>
		</div>
      
              <div class="layui-inline" style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/czy">操作员</a>
		</div>
         <div class="layui-inline" style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/grkh">客户</a>
		</div>

	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">

		    <thead>
				<tr>
					
					<th>ID</th>
					<th>公司名称</th>
					<th>项目名称</th>
					<th>公司负责人</th>
					<th>业务负责人</th>
					<th>指定邮箱</th>
					<th>客户等级</th>
                  <th>附件</th>
                     <th>操作</th>
                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($jbsz)): $i = 0; $__LIST__ = $jbsz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['id']); ?></td>
						<td><?php echo ($row['gsmc']); ?></td>
						<td><?php echo ($row['xmmc']); ?></td>
						<td><?php echo ($row['gsfzr']); ?><br>电话：<?php echo ($row['gfzrphone']); ?><br>微信：<?php echo ($row['gfzrwx']); ?><br>QQ：<?php echo ($row['gfzrq']); ?></td>
                        <td><?php echo ($row['yfzr']); ?><br>电话：<?php echo ($row['yfzrphone']); ?><br>微信：<?php echo ($row['yfzrwx']); ?><br>QQ：<?php echo ($row['yfzrq']); ?></td>
                        <td><?php echo ($row['zdyx']); ?></td>
                        <td><?php echo ($row['khdj']); ?></td>
                                     						   <td  width="20%" ><a href="https://jp.luhanforex.cn/Public/<?php echo ($row['fj']); ?>"><img width="30%" src="https://jp.luhanforex.cn/Public/img/xz.jpg"></a></td>
						<td><a href="/index.php/JRapp/Mgt/eidt_kh/id/<?php echo ($row['id']); ?>">修改</a>|<a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">删除</a></td>
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
				$.post("<?php echo U('Mgt/delkh');?>",{id:id},function(data){
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