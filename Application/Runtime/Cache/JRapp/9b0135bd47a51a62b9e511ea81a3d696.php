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
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">新车或者二手车：</label>
    <div class="layui-input-block">
      <?php if(data['stat'] == 0 ): ?><input type="text" name="qd" value="新车" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
    <?php else: ?> 
     <input type="text" name="qd" value="二手车" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input"><?php endif; ?>
    </div>
  </div>

                       
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车名：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['title']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      
      <textarea style="display:none" id="pics" rows="10" cols="30">
<?php echo ($data['pic']); ?>
</textarea>

    </div>
  </div>
      
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图一：</label>
    <div class="layui-input-block">
   <img id="img0" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图二：</label>
    <div class="layui-input-block">
   <img id="img1" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图三：</label>
    <div class="layui-input-block">
   <img id="img2" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图四：</label>
    <div class="layui-input-block">
   <img id="img3" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图五：</label>
    <div class="layui-input-block">
   <img id="img4" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图六：</label>
    <div class="layui-input-block">
   <img id="img5" src="" data-action="zoom" width="60" height="60" style="cursor: -webkit-zoom-in;">
  
    </div>
  </div>
           
                 
     
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">年份：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['nf']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">排放标准：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['pfbz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">区域：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['qy']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">首付价格：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['sfmoney']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">价格：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['money']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">上牌时间：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['spsj']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">表显里程：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['bxlc']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">颜色：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['color']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">变速箱：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['bsx']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车牌所在地：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['cbq']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">看车时间：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['kcsj']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
               <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">迁入地为准：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['qrdwz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     

              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">登记证为准：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['djz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车险到期：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['njdq']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">交强险到期：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['jqx']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
              
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">商业险到期：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['syx']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
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