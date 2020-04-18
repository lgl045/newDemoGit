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
	
		    <a class="layui-btn search_btn" href="/index.php/JY/Mgt/gldd">订单列表</a>
		</div>
      
	</blockquote>
<body class="childrenBody">
	<form action="/index.php/JY/Mgt/eid_dd" method="post"  enctype="multipart/form-data">
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">姓名：</label>
    <div class="layui-input-block">
      <input type="text" name="name" style="width: 15%" required  lay-verify="required" value="<?php echo ($data['name']); ?>"  autocomplete="off" class="layui-input">
        <input type="hidden" name="id" style="width: 15%" required  lay-verify="required" value="<?php echo ($data['id']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>

      
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">年龄：</label>
    <div class="layui-input-block">
      <input type="text" name="age" style="width: 15%" required  lay-verify="required" autocomplete="off" value="<?php echo ($data['age']); ?>" class="layui-input">
     
    </div>
  </div> 
     
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">性别：</label>
    <div class="layui-input-block">
      <input type="text" name="sex" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['sex']); ?>"  class="layui-input">
    
    </div>
  </div>  
      
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">手机：</label>
    <div class="layui-input-block">
      <input type="text" name="phone" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['phone']); ?>"  class="layui-input">
   
    </div>
  </div>

   
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">名称：</label>
    <div class="layui-input-block">
      <input type="text" name="title" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['title']); ?>"  class="layui-input">
     
    </div>
  </div>  
      
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">内容：</label>
    <div class="layui-input-block">
      <input type="text" name="content" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['content']); ?>"  class="layui-input">
     
    </div>
  </div>  
      
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">开始时间：</label>
    <div class="layui-input-block">
      <input type="text" name="addtime" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['addtime']); ?>"  class="layui-input">

    </div>
  </div>  
      
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">结束时间：</label>
    <div class="layui-input-block">
      <input type="text" name="jstime" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['jstime']); ?>"  class="layui-input">

    </div>
  </div>  
      
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">开始位置：</label>
    <div class="layui-input-block">
      <input type="text" name="kswz" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['kswz']); ?>"  class="layui-input">

    </div>
  </div> 
      
      
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">结束位置：</label>
    <div class="layui-input-block">
      <input type="text" name="jswz" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['jswz']); ?>"  class="layui-input">

    </div>
  </div> 
      
 <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车型：</label>
    <div class="layui-input-block">
      <input type="text" name="type" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['type']); ?>"  class="layui-input">

    </div>
  </div> 
      
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">价格：</label>
    <div class="layui-input-block">
      <input type="text" name="money" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['money']); ?>"  class="layui-input">

    </div>
  </div> 
      
      
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">状态：</label>
    <div class="layui-input-block">
      <input type="text" name="stat" style="width: 15%" required  lay-verify="required"  autocomplete="off" value="<?php echo ($data['stat']); ?>"  class="layui-input">

    </div>
  </div> 
    
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >修改</button><button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>
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


</body>
</html>