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
		@media screen and (max-width: 600px) {
  table td:before {
    content: attr(data-label);
    float: left;
    text-transform: uppercase;
    font-weight: bold;
  }
}		
	</style>
</head>
<body class="childrenBody">

	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>

		    </colgroup>
		    <thead>
				<tr>
					
	            	<th>id</th>
                  <th>自定义排序</th>
					<th>户籍城市</th>
					<th>手机号</th>
                    <th>月收入</th>
                    <th>房产情况</th>
                    <th>车产情况</th>
                     <th>总负债</th>
                    <th>信用情况</th>
					<th>添加时间</th>
					
                    <th>选择评分</th>
                  
                       <th>通过</th>
                   <th>驳回</th>
                  <th>操作</th>
        
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($row['id']); ?>">
                      <td><?php echo ($row['id']); ?></td>
                    <td><input type="number" id="pxs_<?php echo ($row['id']); ?>" value="<?php echo ($row['nums']); ?>" onBlur="px(<?php echo ($row['id']); ?>)" style="width:50%; "/></td>
					<td><?php echo ($row['hjcs']); ?></td>
					<td><?php echo ($row['sjh']); ?></td>
                    <td><?php echo ($row['ysr']); ?></td>
				    <td><?php echo ($row['fcqk']); ?></td>
                    <td><?php echo ($row['ccqk']); ?></td>
                    <td><?php echo ($row['zfz']); ?></td>
				    <td><?php echo ($row['xyqk']); ?></td>
               	    <td><?php echo ($row['addtime']); ?></td>
                      
                      <td>   <?php if($row['stat'] == 1 ): ?><font color="green"><?php echo ($row['xtpf']); ?></font>
                        <?php else: ?> 
                        <select id="pf" >
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                        </select>
             <a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">确认</a><?php endif; ?>
                        
                      </td> 
                       
                          <td><?php if($row['shzt'] == 0 ): ?><a href="javascript:void(0);" class="delss" id="<?php echo ($row['id']); ?>">通过审核</a>
                            <?php else: ?> 
                            <a href="javascript:void(0);"><font color="green">已过审核</font></a><?php endif; ?>
                        </td>
                        <td>
                          <?php if($row['shzt'] == 1 ): ?><a href="javascript:void(0);" ><font color="grey">驳回</font></a>
                            <?php else: ?> 
                           <a href="javascript:void(0);" class="bhaa" id="<?php echo ($row['id']); ?>">驳回</a><?php endif; ?>
                          
                          </td>
				      <td><a href="/index.php/Zcity/Mgt/xqqd/id/<?php echo ($row['id']); ?>" >详情</a></td>
                      
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
      

		$(".delss").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定通过审核？')){
				$.post("<?php echo U('Mgt/qdshs');?>",{id:id},function(data){
					if(data==1){
					window.location.reload();
                    }else{
                   alert("未知错误！");
                    }
				})
			}
		})
      
      	$(".bhaa").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定驳回？')){
				$.post("<?php echo U('Mgt/qdshd');?>",{id:id},function(data){
					if(data==1){
                       alert("已驳回！");
					window.location.reload();
                    }else{
                   alert("未知错误！");
                    }
				})
			}
		})
			$(".del").click(function(){
			var id = $(this).attr('id');
          	var pf = $("#pf").val();
			if(confirm('确定审批？')){
				$.post("<?php echo U('Mgt/pf');?>",{id:id,pf:pf},function(data){
					if(data==1){
                            alert("评分成功！")
						window.location.reload()
					}else{
                    alert("网路错误！")
                    }
				})
			}
		})
          function px(ids){
     
     var num = $("#pxs_"+ids).val();
    $.post("<?php echo U('Mgt/pxpd');?>",{num:num,ids:ids},function(data){
					if(data==1){
				         alert("操作成功");
					}else if(data==3){
                    alert("输入值重复");
                    }else{
                    alert("网络出问题了。。。")
                    }
				})
      }
      	$(".bh").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定驳回？')){
				$.post("<?php echo U('Mgt/qcbh');?>",{id:id},function(data){
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