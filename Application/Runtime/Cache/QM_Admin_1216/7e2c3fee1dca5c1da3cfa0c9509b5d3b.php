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
</head>
<body class="childrenBody">   
  <div class="layui-form news_list">
      <table class="layui-table">
        <colgroup>
        <col width="10%">
        <col width="15%">
        <col width="18%">
        <col width="15%">
        <col width="10%">
        <col width="10%">
        </colgroup>
        <thead>
        <tr>
          <!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
          <th>ID</th>
          <th>名字</th>
          <th>图片</th>
          <th>价格</th>
          
        </tr> 
        </thead>
        <tbody class="users_content">
          <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($row['id']); ?></td>
            <td><?php echo ($row['name']); ?></td>
            <td><img src="/Public/uploads/<?php echo ($row["pic"]); ?>" width="80" height="80" onerror="this.src='/Public/uploads/zw.jpg'"></td>
            <td><?php echo ($row['danjia']); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
  </div>
  <center id="lei"><div><?php echo ($pageinfo); ?></div></center>
  <script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript">
    $(".del").click(function(){
      var id = $(this).attr('id');
      var ob = $(this);
      var d=ob.next().val()

      if(confirm('确定审核此用户？')){
        $.get("<?php echo U('Dianpu/shenghedo');?>",{id:id,d:d},function(data){

          if(data==1){
           window.location.reload();
          }
        })
      }
    })
     $(".search_btn").click(function(){
       $(".layui-table tr:gt(0)").each(function(){
         $(this).remove();
          $("#lei").remove();
          })
      var so=$(".search_input").val();
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
      if(confirm('确定审核此用户？')){
        $.get("<?php echo U('Dianpu/shenghedo');?>",{id:id,d:d},function(data){

          if(data==1){
           window.location.reload();
          }
        })
      }
    })
              })
    })
  </script>
</body>
</html>