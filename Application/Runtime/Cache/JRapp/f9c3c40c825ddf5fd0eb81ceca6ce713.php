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

<body class="childrenBody">
	<form action="" method="post"  enctype="multipart/form-data">

                       
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">户籍城市：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['hjcs']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
      
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">婚姻情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['hyqk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">补充说明：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['bcsm']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">推荐人手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['tjrsjh']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">推荐人姓名：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['tjrxm']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">身份证号：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['sfzh']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
            

                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">添加时间：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['addtime']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
      
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['sjh']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
      
      
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">月收入：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['ysr']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
            
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">收入来源：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['srly']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">社保缴纳情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['sbjn']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公积金缴纳情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['gjjjn']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">当前单位工作情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['dqdwgz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
            
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">房产情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['fcqk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车产情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['ccqk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                            <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">总负债：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['zfz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
      
      
                        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">保单：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['bd']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      

            
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">信用情况：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['xyqk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                  
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">姓名：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['xm']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                  
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">所在城市：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['szcs']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                  
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">年龄：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['nl']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
                  
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">贷款金额：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['dkje']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


    </div>
  </div>
      
            
                      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">系统评分：</label>
    <div class="layui-input-block">
      <input type="text" name="zd" value="<?php echo ($data['xtpf']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
      


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