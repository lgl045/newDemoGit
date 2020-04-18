<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>站点管理--后台管理</title>
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
.file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}

.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
		.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
		.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
		.page .next,.page .prev{font-family:"宋体"}  


  </style>
</head>
<body class="childrenBody">
  <div class="layui-form news_list">
      <table class="layui-table">
    
        <thead>
        <tr>
          <!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
       

          <th>图片</th>
          <th>客服热线</th>
          <th>客服邮箱</th>
          <th>客服手机</th>
          <th>客服QQ</th>
          <th>客服座机</th>
          <th>新浪微博</th>
          <th>公众号</th>
          <th>版权所有</th>
           <th>地址</th>
           <th>网站名</th>
           <th>描述</th>
           <th>关键词</th>
           <th>操作</th>
          
        </tr> 
        </thead>
        <tbody class="users_content">
          <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>

              <td><img src="https://asd.luhanforex.cn/Public/<?php echo ($row["logo"]); ?>" data-action="zoom" width="80" alt="店铺头像" height="80"></td>
            <td><?php echo ($row['rexian']); ?></td>
            <td><?php echo ($row['email']); ?></td>
            <td><?php echo ($row['phone']); ?></td>
            <td><?php echo ($row['qq']); ?></td>
            <td><?php echo ($row['zuoji']); ?></td>
            <td><?php echo ($row['sina']); ?></td>
            <td><?php echo ($row['wxchat']); ?></td>
            <td><?php echo ($row['icp']); ?></td>
            <td><?php echo ($row['address']); ?></td>
            <td><?php echo ($row['webname']); ?></td>
            <td><?php echo ($row['webmore']); ?></td>
            <td><?php echo ($row['webdict']); ?></td>
            <td><a href="/index.php/QM_Admin_1216/Mgt/savezd/id/<?php echo ($row['id']); ?>">修改</a></td>

            
            
          
           
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
  </div>
	<center><div class="result page"><?php echo ($pageinfo); ?></div></center> <br />
  <script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
  <script type="text/javascript">

      $(".td").on("click",".img",function(){  
        var id   = $('#ll').val();
        var pic1 = $('.pic1').val();
        var  a   = $(this).next();
        var img   = a.val();

    
         $.ajax({  
             type: "post",  
             url: "<?php echo U('Dianpu/scimgs');?>",  
             data: {id:id,img:img},  
             dataType: "json",  
             success: function(data){  
              alert(data)
                       
              }  
         });  
   





       
　　   }); 
      function imgy($id){
        var id=$id;
        $("#ll").val(id);
      }
  </script>
  <script type="text/javascript">
    $(".del").click(function(){
      var id = $(this).attr('id');
      var ob = $(this);
      var d=ob.next().val()
      // alert(id)
      if(confirm('确定审核此用户？')){
        $.post("<?php echo U('Mgt/shenhes');?>",{sta:id,id:d},function(data){
          // alert(data)
          if(data!=2){
           window.location.reload();
          }else{
            alert("审核失败!服务器繁忙...")
          }
        })
      }
    })
  </script>
</body>
</html>