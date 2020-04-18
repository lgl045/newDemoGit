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
		 <blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
		     <input type="text" id="sj" placeholder="输入客户名称" style="height:30px"  name="bday">
		    <button class="layui-btn search_btn" class="xz"  >查询</button>
		</div>
           <a href="/index.php/JRapp/Mgt/excel" style="margin-left:70%" class="layui-btn search_btn" > 当天导出</a>
    <a href="/index.php/JRapp/Mgt/excelz" style="margin-left:0%" class="layui-btn search_btn" > 昨天导出</a>
      
	</blockquote>
		    <thead>
				<tr>
					
	            	<th>id</th>
					<th>推荐人姓名及手机号</th>
					<th>内容</th>
                    <th>添加时间</th>
                    <th>操作</th>
                    <th>删除</th>

        
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($row['id']); ?>">
                      <td><?php echo ($row['id']); ?></td>
					<td><?php echo ($row['nick']); ?>(<?php echo ($row['sj']); ?>)</td>
                    <td><?php echo ($row['data']); ?></td>
				    <td><?php echo ($row['addtime']); ?></td>
                      <td><input type="text" class="ldd" id="ldd-<?php echo ($row['id']); ?>" value=""> <button onclick="asd(<?php echo ($row['id']); ?>,<?php echo ($row['uid']); ?>)">确认</button></td>
   
				      <td><a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">删除</a></td>
                      
                       
                      
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

      function asd(dy,id){
        	var data= $("#ldd-"+dy).val();
        alert(data);
        

				$.post("<?php echo U('Mgt/fhsx');?>",{id:id,data:data},function(data){
           
					if(data==1){
						alert("回复成功");
					}else{
                    alert("error");
                    }
				})
			
      }

      	$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/delsx');?>",{id:id},function(data){
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
			var so=$("#sj").val();
			$.get("<?php echo U('Mgt/csx');?>",{sj:so},function(data){

				var ha=$.parseJSON(data);
  	            $.each(ha,function(key,value){

  
					tr="<tr>";
					tr+="<td>"+value.id+"</td>";
					tr+="<td>"+value.nick+"("+value.sj+")"+"</td>";
					tr+="<td>"+value.data+"</td>";
					tr+="<td>"+value.addtime+"</td>";
					tr+="<td>"+"<input type='text' class='ldd' id='ldd-"+value.id+"'>"+"<button onclick='asd("+value.id+","+value.uid+")'>确认</button>"+"</td>";
					tr+='<td><a href="javascript:void(0);" class="del" id='+value.id+'>删除</a></td>';
					tr+='</tr>';
                  
                     
   

        $(".layui-table").append(tr);

  	
  	
  	})

  	     
  	
			})
		})
	</script>
</body>
</html>