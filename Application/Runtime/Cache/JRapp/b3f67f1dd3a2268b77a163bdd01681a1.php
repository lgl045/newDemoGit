<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理系统</title>
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
	
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/edtzq">修改产品</a>
		</div>
      
	</blockquote>
<body class="childrenBody">
	<form action="/index.php/JRapp/Mgt/savedt" method="post"  enctype="multipart/form-data">
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">名字：</label>
    <div class="layui-input-block">
      <input type="text" name="name"  value="<?php echo ($data['name']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      
            
 
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">网址：</label>
    <div class="layui-input-block">
      <input type="text" name="wz"  value="<?php echo ($data['wz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
      
      
             <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">简介</label>
    <div class="layui-input-block">
      <input type="text" name="jj"  value="<?php echo ($data['jj']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                 <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">额度：</label>
    <div class="layui-input-block">
      <input type="text" name="ed"  value="<?php echo ($data['ed']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
         

           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图片：</label>
    <div class="layui-input-block">
      <input type="file" name="pic1"  style="width: 15%"  autocomplete="off" class="layui-input">
               <img style="margin-left: 9%" src="<?php echo ($data['pic1']); ?>" data-action="zoom"  width="25%" height="25%">
  
    </div>

  </div>
     
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">推广流程图：</label>
    <div class="layui-input-block">
      <input type="file" name="pic2"  style="width: 15%"  autocomplete="off" class="layui-input">
               <img style="margin-left: 9%" src="<?php echo ($data['pic2']); ?>" data-action="zoom"  width="25%" height="25%">
  
    </div>

  </div>
     
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">推广背景图：</label>
    <div class="layui-input-block">
      <input type="file" name="pic3"  style="width: 15%"  autocomplete="off" class="layui-input">
               <img style="margin-left: 9%" src="<?php echo ($data['pic3']); ?>" data-action="zoom"  width="25%" height="25%">
  
    </div>

  </div>
     
      
      
      
             <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">返佣：</label>
    <div class="layui-input-block">
          <input type="text" name="fy"  value="<?php echo ($data['fy']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      
          <input type="hidden" name="id"  value="<?php echo ($data['id']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
       
    </div>
  </div>
      
                  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">最高额度：</label>
    <div class="layui-input-block">
      <input type="text" name="maxed"  value="<?php echo ($data['maxed']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">月利率：</label>
    <div class="layui-input-block">
      <input type="text" name="yll"  value="<?php echo ($data['yll']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">月还款：</label>
    <div class="layui-input-block">
      <input type="text" name="yhk"  value="<?php echo ($data['yhk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">	期限范围：</label>
    <div class="layui-input-block">
      <input type="text" name="qxfw"  value="<?php echo ($data['qxfw']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>                 


       
  <!--  <div class="layui-form-item" id="nm">
    <label class="layui-form-label"  style="width: %"></label>
    <div class="layui-input-block">
      	<script id="container" style="height:450px;" name="cont" type="text/plain">请输入文章内容</script>
 
    </div>
 </div>
-->
      
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即修改</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>


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