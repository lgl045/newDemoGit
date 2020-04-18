<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>18卡车管理系统</title>
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
  	<blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
	
		    <a class="layui-btn search_btn" href="/index.php/JY/Mgt/userlist">用户列表</a>
		</div>
      
	</blockquote>
<body class="childrenBody">
	<form action="/index.php/JY/Mgt/eidt_dk" method="post"  enctype="multipart/form-data">
      
      
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">快递名称：</label>
    <div class="layui-input-block">
      <input type="text" name="kuaidi" style="width:15%" required  lay-verify="required" value="<?php echo ($data['kuaidi']); ?>"  autocomplete="off" class="layui-input">
        <input type="hidden" name="id" style="width:15%" required  lay-verify="required" value="<?php echo ($data['id']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>

       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">快递单号：</label>
    <div class="layui-input-block">
     <input type="text" name="kuai_dan" style="width:15%" required  lay-verify="required" value="<?php echo ($data['kuai_dan']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">更改状态：</label>
    <div class="layui-input-block">
      <select name="zt" style="width:15%">
        <option value="1">未支付</option>
        <option value="2">待发货</option>
        <option value="3">发货中</option>
        <option value="4">待收货</option>
        <option value="6">订单已完成</option>
        <option value="7">订单申请退款</option>

      </select>

    </div>
  </div>

    
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >修改</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>


    </div>
  </div>
</form>
 

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>


	<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('container');

        function asd(id){
         if(id==1){
           $("#nm").css("display","block");
            
            }else{
            $("#nm").css("display","none");
            }
        	
        }
    </script>

<script type="text/javascript">
	  			$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/delxw');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
		
	</script>
</body>
</html>