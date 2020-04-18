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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<style type="text/css">
		.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
		.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
		.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
		.page .next,.page .prev{font-family:"宋体"}  
      .fx{ margin-left:150px}
				
	</style>
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
	
		    <a class="layui-btn search_btn" href="/index.php/JY/Mgt/add_fl">添加分类</a>
		</div>

      
     
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">

 <ul class="nav nav-pills nav-justified">
	<li><a href="#" style="width:135%;">图片</a></li>
	<li><a href="#">所属分类</a></li>
	<li><a href="#">添加时间</a></li>
	<li><a href="#">操作</a></li>
	<!--<li><a href="#">操作</a></li>-->

</ul>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  			<div class="panel " style="background:#eee;">
              
    			<div class="panel-heading" role="tab" id="heading<?php echo ($rows['id']); ?>" >
      				<h4 class="panel-title" >
        				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($rows['id']); ?>" aria-expanded="true" aria-controls="collapse<?php echo ($rows['id']); ?>" >
           	 				<span type="button" class="btn fx" style="width:7.5%;">
                          		<img src="http://<?=$_SERVER['SERVER_NAME']?>/Public/<?php echo ($rows['pic']); ?>" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
                           </span>
           	 				<span  style="width:9.5%;" class="btn fx"><?php echo ($rows['name']); ?></span>
                          	<span   style="width:16.5%;" class="btn fx"><?php echo ($rows['addtime']); ?></span>
           	 				<button type="button" class="btn btn-warning fx"><a href="/index.php/JY/Mgt/flxg/id/<?php echo ($rows['id']); ?>" style="color:white;">修改</a></button>
	        				<button type="button" class="btn btn-danger "><a href="javascript:void(0);" class="del" id="<?php echo ($rows['id']); ?>" style="color:white;">删除</a></button>
          		 		</a>
            		</h4>
              	</div>
              
         <div id="collapse<?php echo ($rows['id']); ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
           	<div class="panel-body">
            		<?php if(is_array($rows["zj"])): $i = 0; $__LIST__ = $rows["zj"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lu): $mod = ($i % 2 );++$i;?><br/>
                      <span type="button" class="btn fx"  style="width:22%;">
                          		<img src="http://<?=$_SERVER['SERVER_NAME']?>/Public/<?php echo ($lu['pic']); ?>" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;" >
                           </span >
                      
              	  <span type="button" class="btn fx` " style="width:10%;text-align:left;"><?php echo ($lu['name']); ?></span>
                      
                    <span type="button" class="btn fx" style="width:14%;text-align:left;"><?php echo ($lu['addtime']); ?></span>
              	  <button type="button" class="btn btn-warning fx"><a href="/index.php/JY/Mgt/flxg/id/<?php echo ($lu['id']); ?>" style="color:white;">修改</a></button>
	          	  <button type="button" class="btn btn-danger "><a href="javascript:void(0);" class="del" id="<?php echo ($lu['id']); ?>" style="color:white;">删除</a></button>
              	 <br/><?php endforeach; endif; else: echo "" ;endif; ?>
             </div>
   	     </div>
              
  			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
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


			if(confirm('是否确定删除？')){
				$.post("<?php echo U('Mgt/delfl');?>",{id:id},function(data){
					if(data==1){
					location.reload();
					}else{
                    	alert('请删除此级别的二级栏目再操作!');
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