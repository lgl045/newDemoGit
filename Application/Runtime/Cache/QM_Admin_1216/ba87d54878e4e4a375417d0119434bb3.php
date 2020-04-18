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
        <div class="layui-input-inline">
          <input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
        </div>
        <a class="layui-btn search_btn">查询</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="1">未付款</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="2">待发货</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="3">已发货</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="4">已收获</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="8">已退款</a>
    </div>
     <div class="layui-inline">
        <a class="layui-btn  ddd"  id="9">未退款</a>
    </div>
</blockquote>    
  <div class="layui-form news_list">
      <table class="layui-table">
     
        <thead>
        <tr>
          <!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
          <th>ID</th>
          <th>名字</th>
          <th>单号</th>
          <th>总价</th>
          <th>时间</th>
          <th>状态</th>
          <th>详情</th>
          <th>退款操作</th>
        </tr> 
        </thead>
        <tbody class="users_content">
          <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($row['id']); ?></td>
            <td><?php echo ($row['user_id']); ?></td>
            <td><?php echo ($row['danhao']); ?></td>
            <td><?php echo ($row['zongjia']); ?></td>
            <td><?php echo (date("Y-m-d h:m:s",$row['time'])); ?></td>
            <td class="ell">
            <?php if($row['zhuangtai'] == '1'): ?><span style="color:#FF0000;">未付款</span>
            <?php elseif($row['zhuangtai'] == '2'): ?>
                 <span style="color:#0000FF;">待发货</span>
            <?php elseif($row['zhuangtai'] == '3'): ?> 
                <span style="color:#FFFF00;">已发货</span>
             <?php elseif($row['zhuangtai'] == '4'): ?> 
                <span style="color:#00FFFF;">已收货</span>
             <?php elseif($row['zhuangtai'] == '8'): ?> 
                <span style="color:#FF00FF;">已退款</span>
             <?php elseif($row['zhuangtai'] == '9'): ?> 
                <span style="color:#A52A2A;">未退款</span><?php endif; ?>
            </td>
            <input type="hidden" name="do" value="<?php echo ($row['zhuangtai']); ?>">
            <td><a href="/index.php/QM_Admin_1216/Mgt/dingdanxiang?id=<?php echo ($row['id']); ?>">详情</a></td>            
            <td><a href="javascript:void(0);" class="del" id="8">同意</a><input type="hidden" name="id1" value="<?php echo ($row['id']); ?>">&nbsp|&nbsp
                <a href="javascript:void(0);" class="del" id="9">拒绝</a><input type="hidden" name="id2" value="<?php echo ($row['id']); ?>">
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
  </div>
  	<center><div class="result page"><?php echo ($pageinfo); ?></div></center> <br />

  <script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript">
    $(".del").click(function(){
      var id = $(this).attr('id');
      var ob = $(this);
      var d=ob.next().val()
           el=ob.parent().siblings(".ell").next().val();
      if(el==1 || el==2 || el==3 || el==4){
        alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==8){
         alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==9){
      if(confirm('确定审核此用户？')){
        $.get("<?php echo U('Dianpu/shenghedo');?>",{id:id,d:d},function(data){

          if(data==1){
           window.location.reload();
          }
        })
      }
    }
    })
    

     $(".search_btn").click(function(){
       $(".layui-table tr:gt(0)").each(function(){
         $(this).remove();
          $("#lei").remove();
          })
      var so=$(".search_input").val();
      if(so==""){
        so=0;
      }
      $.get("<?php echo U('Dianpu/dingdanso');?>",{so:so},function(data){
        var ha=$.parseJSON(data);
        $.each(ha,function(key,value){
  
          tr="<tr>";
          tr+="<td>"+value.id+"</td>";
          tr+="<td>"+value.user_id+"</td>";
          tr+="<td>"+value.danhao+"</td>";
          tr+="<td>"+value.zongjia+"</td>";
          tr+="<td>"+value.time+"</td>";
          tr+='<td>'+value.zhuangtai+'</td>';
          tr+='<td><a href="/index.php/QM_Admin_1216/Dianpu/dingdanxiang?id='+value.id+'">详情</a></td>';
          tr+='<td><a href="javascript:void(0);" class="del" id="8">同意</a><input type="hidden" name="id1" value="'+value.id+'">&nbsp|&nbsp<a href="javascript:void(0);" class="del" id="9">拒绝</a><input type="hidden" name="id2" value="'+value.id+'"></td>';
          tr+='</tr>';
        $(".layui-table").append(tr);
    })
 $(".del").click(function(){
      var id = $(this).attr('id');
      var ob = $(this);
      var d=ob.next().val()
           el=ob.parent().siblings(".ell").next().val();
      if(el==1 || el==2 || el==3 || el==4){
        alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==8){
         alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==9){
      if(confirm('确定审核此用户？')){
        $.get("<?php echo U('Dianpu/shenghedo');?>",{id:id,d:d},function(data){

          if(data==1){
           window.location.reload();
          }
        })
      }
    }
    })
              })
    })


     $(".ddd").click(function(){
       $(".layui-table tr:gt(0)").each(function(){
         $(this).remove();
          $("#lei").remove();
          })
      var id = $(this).attr('id');
      var ob = $(this);
      $.get("<?php echo U('Mgt/bage');?>",{id:id},function(data){
        var ha=$.parseJSON(data);
        $.each(ha,function(key,value){
  
          tr="<tr>";
          tr+="<td>"+value.id+"</td>";
          tr+="<td>"+value.user_id+"</td>";
          tr+="<td>"+value.danhao+"</td>";
          tr+="<td>"+value.zongjia+"</td>";
          tr+="<td>"+value.time+"</td>";
          tr+='<td>'+value.zhuangtai+'</td>';
          tr+='<td><a href="/index.php/QM_Admin_1216/Dianpu/dingdanxiang?id='+value.id+'">详情</a></td>';
          tr+='<td><a href="javascript:void(0);" class="del" id="8">同意</a><input type="hidden" name="id1" value="'+value.id+'">&nbsp|&nbsp<a href="javascript:void(0);" class="del" id="9">拒绝</a><input type="hidden" name="id2" value="'+value.id+'"></td>';
          tr+='</tr>';
        $(".layui-table").append(tr);
    })
 $(".del").click(function(){
      var id = $(this).attr('id');
      var ob = $(this);
      var d=ob.next().val()
           el=ob.parent().siblings(".ell").next().val();
      if(el==1 || el==2 || el==3 || el==4){
        alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==8){
         alert(ob.parent().siblings(".ell").children("span").html());
      }else if(el==9){
      if(confirm('确定审核此用户？')){
        $.get("<?php echo U('Dianpu/shenghedo');?>",{id:id,d:d},function(data){

          if(data==1){
           window.location.reload();
          }
        })
      }
    }
    })
              })
    })
  </script>
</body>
</html>