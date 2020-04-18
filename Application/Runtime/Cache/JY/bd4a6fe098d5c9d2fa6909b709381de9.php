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
					
					<th>ID</th>
					<th>单号</th>
                    <th>总价</th>				
                    <th>下单数量</th>
         
                    <th>支付方式</th>    
                    <th>支付状态</th>
                     <th>用户名</th>
                     <th>用户头像</th>
                      <th>商品参数</th>
                      <th>下单时间</th>

                  



					<th>操作</th>                  
				</tr> 
		    </thead>
		    <tbody class="users_content">
		    	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					  <td><?php echo ($row['id']); ?></td>
                      <td> <?php echo ($row['danhao']); ?> </td>
                      <td> <?php echo ($row['zongjia']); ?> </td>
                      <td> <?php echo ($row['num']); ?> </td>
  					   <td>
                        <?php if($row['pay_type'] == 0 ): ?>未选择
                        <?php elseif($row['pay_type'] == 1): ?>支付宝
                        <?php elseif($row['pay_type'] == 2): ?> 微信<?php endif; ?>
                      </td>
                      <td>
                        <?php if($row['zhuangtai'] == 1 ): ?>未支付
                        <?php elseif($row['zhuangtai'] == 2): ?>待发货
                        <?php elseif($row['zhuangtai'] == 3): ?> 发货中
                        <?php elseif($row['zhuangtai'] == 4): ?> 待收货
                        <?php elseif($row['zhuangtai'] == 6): ?> 订单已完成
                        <?php elseif($row['zhuangtai'] == 7): ?> 订单申请退款<?php endif; ?>
                      </td>   
             
                      <td><?php echo ($row['jname']); ?></td>
                      <td><img src="http://<?=$_SERVER['SERVER_NAME']?>/Public/<?php echo ($row['pics']); ?>" data-action="zoom"  width="50" height="50"></td>                     
                      <td class="text"><?php echo ($row['sp']); ?></td>
                      <td><?php echo (date("Y-m-d H:i:s",$row['time'])); ?></td>
                      <td>
                        <a href="/index.php/JY/Mgt/gsxg/id/<?php echo ($row['id']); ?>">修改状态</a> &nbsp;
                        <a href="javascript:void(0);" class="del" id="<?php echo ($row['id']); ?>">删除</a><br/><br/>
                        <a href="/index.php/JY/Mgt/xqdz/id/<?php echo ($row['address_id']); ?>">详情地址</a>   &nbsp;
                         <a href="/index.php/JY/Mgt/fhs/id/<?php echo ($row['id']); ?>">发货</a><br/><br/>
 
                  
                     </td>  
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
		</table>
	</div>

	<center><div id="asds" class="result page"><?php echo ($pageinfo); ?></div></center> <br />
	<center><div id="asdss" class="result page"></div></center> <br />
	<script type="text/javascript" src="/Public/layer/layer.js"></script>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>

	<script type="text/javascript">
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
  
  <script type="text/javascript">
window.onload=function(){ 
	//多余的字显示...
	//可以重复使用
	var num = $('.text').size()
	for(var i=0; i<num; i++){
		var titleStr = $(".text").eq(i).text();
		var maxLen = 15;//设置要显示的字符数
		if(titleStr.length > maxLen){
		   $(".text").eq(i).html(titleStr.substring(0,maxLen)+"...");
		}
		else{
			$(".text").eq(i).html(titleStr);
		}
	}


}




</script>
  
  

</body>
</html>