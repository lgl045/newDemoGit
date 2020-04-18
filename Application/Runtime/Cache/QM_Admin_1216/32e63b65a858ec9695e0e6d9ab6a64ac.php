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
  <!--   <blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
	 		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/addshop">添加</a>

		</div>
		
	</blockquote> -->
      <table class="layui-table">
    
        <thead>
        <tr>
          <!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
       
          <th>店铺ID</th>
          <th>店铺名称</th>

          
          <th>添加时间</th>
   
           <th>操作</th>
          
        </tr> 
        </thead>
        <tbody class="users_content">
          <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($row['sid']); ?>">
       <td><?php echo ($row['sid']); ?></td>

            <td><?php echo ($row['merch_name']); ?></td>
                       
            <td><?php echo ($row['addtime']); ?></td>
    
            <td><a href="/index.php/QM_Admin_1216/Mgt/shopx/id/<?php echo ($row['sid']); ?>">修改</a>|<a href="javascript:void(0);" onclick="del(<?php echo ($row['sid']); ?>)">删除</a></td>

          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
  </div>
	<center><div class="result page"><?php echo ($pageinfo); ?></div></center> <br />
  <script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
  <script type="text/javascript">

		function del(id){

			if(confirm('确定删除？')){

				if(!id){
					alert('非法操作！');
				}else{
					$.post('/index.php/QM_Admin_1216/Mgt/del_shop',{id:id},function(data){
						if(data == 1){
							$("#"+id).remove();
						}else{
							alert('服务器错误！');
						}
					})
				}
			}
		}

	
  </script>
</body>
</html>