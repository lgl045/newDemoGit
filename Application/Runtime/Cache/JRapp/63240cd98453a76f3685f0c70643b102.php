<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>机票管理系统</title>
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
	<form action="/index.php/JRapp/Mgt/savecyxc" method="post"  enctype="multipart/form-data">
      
       <div class="layui-inline">
	<a href="javascript:history.go(-1);" class="layui-btn search_btn">返回上一页</a>  
		</div>
      

      <textarea style="display:none" id="pics" rows="10" cols="30">
<?php echo ($data); ?>
</textarea>


      
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图1：</label>
    <div class="layui-input-block">
   <img id="img0" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图2：</label>
    <div class="layui-input-block">
   <img id="img1" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图3：</label>
    <div class="layui-input-block">
   <img id="img2" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图4：</label>
    <div class="layui-input-block">
   <img id="img3" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图5：</label>
    <div class="layui-input-block">
   <img id="img4" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图6：</label>
    <div class="layui-input-block">
   <img id="img5" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图7：</label>
    <div class="layui-input-block">
   <img id="img6" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图8：</label>
    <div class="layui-input-block">
   <img id="img7" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图9：</label>
    <div class="layui-input-block">
   <img id="img8" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图10：</label>
    <div class="layui-input-block">
   <img id="img9" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
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
      var img = new Array();
    var imgs = new Array();
		var pic =$("#pics").val();
        var pic1 = pic.replace(/"/g, '');
        var arr = pic1.replace(/(\[)|(\])|(\')/g, "");
         img = arr.split(',');
      for (var i in img) {
            //.模板渲染
            imgs.push('http://dai.juhuaian.cn/Public/'+img[i]);
              var $img=$("#img"+i);
              $img.attr('src',imgs[i]);
      }
      

	</script>
</body>
</html>