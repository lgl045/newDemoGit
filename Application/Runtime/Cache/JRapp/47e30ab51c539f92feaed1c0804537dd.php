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
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/dkzxsp">按歇房</a>
		</div>
                <div class="layui-inline">
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/dkzxdk">打卡公积金</a>
		</div>
              <div class="layui-inline">
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/dkzxbd">保单</a>
		</div>
      
      
	</blockquote>
  
	<div class="layui-form news_list">
	  	<table class="layui-table">

		    <thead>
				<tr>
					
					<th>ID</th>
                  <th>推荐人姓名</th>
                        <th>推荐人手机号</th>
                        <th>所需佣金</th>
					<th>身份证正</th>
                    <th>身份证反</th>

		        	<th>保单</th>
					<th>征信</th>

       
                    <th>添加时间</th>
					<th>填写额度</th>
                  <th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($row['bdid']); ?></td>
                      <td><?php echo ($row['tjname']); ?></td>
                      <td><?php echo ($row['tjphone']); ?></td>
                      <td><?php echo ($row['sxyj']); ?></td>
         
                      <td> <a href="http://dai.juhuaian.cn/Public/<?php echo ($row['sfz']); ?>"  target="_blank"> <img  src="http://dai.juhuaian.cn/Public/<?php echo ($row['sfz']); ?>"    width="50" height="50"></a></td>
                      <td> <a href="http://dai.juhuaian.cn/Public/<?php echo ($row['sfzf']); ?>" target="_blank"> <img  src="http://dai.juhuaian.cn/Public/<?php echo ($row['sfzf']); ?>"   width="50" height="50"></a></td>

                      <td> <a href="http://dai.juhuaian.cn/Public/<?php echo ($row['bd']); ?>" target="_blank"> <img  src="http://dai.juhuaian.cn/Public/<?php echo ($row['bd']); ?>"   width="50" height="50"></a></td>
                   
                        <td> <a href="http://dai.juhuaian.cn/Public/<?php echo (substr($row['zxs'],3,-1)); ?>"  target="_blank"> <img  src="http://dai.juhuaian.cn/Public/<?php echo (substr($row['zxs'],3,-1)); ?>"     width="50" height="50"></a>&nbsp;<a href="/index.php/JRapp/Mgt/bdxqs/idss/<?php echo ($row['bdid']); ?>">详情</a></td>


                      <td><?php echo ($row['addtime']); ?></td>
                      
           
       
               
                      <td>   <?php if($row['stats'] == 1 ): ?><font color="green">审批额度为<?php echo ($row['sped']); ?></font>
                        <?php else: ?> 
                    <input type="text" id="ed" style="height:30px" ><?php endif; ?>
                        
                      </td>  
                      
                      
                   	<td>  
                      <?php if($row['stats'] == 1 ): ?><font color="green">已审批</font>
                        <?php else: ?> 
                        
                      <a href="javascript:void(0);" class="del" onclick="del(<?php echo ($row['id']); ?>,<?php echo ($row['bdid']); ?>)">确认</a><?php endif; ?></td> 
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
	function del(id,axfid){

          	var ed = $("#ed").val();
          if(!ed){
            alert("请输入您需要审批的额度！");
            return;
             }
			if(confirm('确定审批？')){
				$.post("<?php echo U('Mgt/bdsp');?>",{id:id,ed:ed,axfid:axfid},function(data){
					if(data==1){
                            alert("审批成功！")
						window.location.reload()
					}else{
                    alert("网路错误！")
                    }
				})
			}
        }
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