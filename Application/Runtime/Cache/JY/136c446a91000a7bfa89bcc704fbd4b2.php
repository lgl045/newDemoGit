<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>交友管理系统</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/Public/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/Public/css/user.css" media="all" />
	<script src="/Public/js/jquery.1.7.2.min.js"></script>
    <script src="/Public/js/mobiscroll_002.js" type="text/javascript"></script>
	<script src="/Public/js/mobiscroll_004.js" type="text/javascript"></script>
	<link href="/Public/css/mobiscroll_002.css" rel="stylesheet" type="text/css">
	<link href="/Public/css/mobiscroll.css" rel="stylesheet" type="text/css">
	<script src="/Public/js/mobiscroll.js" type="text/javascript"></script>
	<script src="/Public/js/mobiscroll_003.js" type="text/javascript"></script>
	<script src="/Public/js/mobiscroll_005.js" type="text/javascript"></script>
	<link href="/Public/css/mobiscroll_003.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}  
		.page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}  
		.page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}  
		.page .next,.page .prev{font-family:"宋体"}  
				
	</style>
</head>
<blockquote class="layui-elem-quote news_search">
        <div class="layui-inline">
		    <a class="layui-btn search_btn" href="/index.php/JY/Mgt/flgl">分类管理</a>
		</div>

 
	</blockquote>
<body class="childrenBody">
	<form action="<?php echo U('JY/Mgt/insertlbs');?>" method="post"  enctype="multipart/form-data" >
      
    <div class="layui-form-item" style="position:relative">
    <label class="layui-form-label"  style="width: 20%">顶级分类</label>
      <input type="text" name="name" style="width: 15%"   autocomplete="off" class="layui-input"><font style="position: absolute;top: 10px; left: 39%;" color="red">*选择一级分类可填写</font>
   </div>
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">选择分类</label>
    <div class="layui-input-block">
      
      <select name="pid"  style="width: 15%"   autocomplete="off" class="layui-input">
               <option value="0">选择顶级分类</option>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>

    </div>
   </div>
      
            
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">图片</label>
    <div class="layui-input-block">
      <input type="file" name="pic"   style="width: 15%"  autocomplete="off" class="layui-input">
    </div>
   </div>
   <hr class="layui-bg-blue">   
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性名称</label>
    <div class="layui-input-block">
      <input type="text" name="sname" style="width: 15%"   autocomplete="off" class="layui-input">
    </div>
   </div>
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性值</label>
    <div class="layui-input-block">
      
      <textarea name="svalue" rows="3" cols="20">

      </textarea><font color="red">*多个属性值可用 " , "隔开</font>
   <!--  <input type="text" name="svalue" style="width: 15%"   autocomplete="off" class="layui-input">-->
    </div>
   </div>
      
  <hr class="layui-bg-blue">
      
      
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性名称2</label>
    <div class="layui-input-block">
      <input type="text" name="sname2" style="width: 15%"   autocomplete="off" class="layui-input">
    </div>
   </div>
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性值2</label>
    <div class="layui-input-block">
      
      <textarea name="svalue2" rows="3" cols="20">

      </textarea>
   <!--  <input type="text" name="svalue" style="width: 15%"   autocomplete="off" class="layui-input">-->
    </div>
   </div>
      <hr class="layui-bg-blue">
                    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性名称3</label>
    <div class="layui-input-block">
      <input type="text" name="sname3" style="width: 15%"   autocomplete="off" class="layui-input">
    </div>
   </div>
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性值3</label>
    <div class="layui-input-block">
      
      <textarea name="svalue3" rows="3" cols="20">

      </textarea>
   <!--  <input type="text" name="svalue" style="width: 15%"   autocomplete="off" class="layui-input">-->
    </div>
   </div>
     <hr class="layui-bg-blue"> 
                    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性名称4</label>
    <div class="layui-input-block">
      <input type="text" name="sname4" style="width: 15%"   autocomplete="off" class="layui-input">
    </div>
   </div>
                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">属性值4</label>
    <div class="layui-input-block">
      
      <textarea name="svalue4" rows="3" cols="20">

      </textarea>
   <!--  <input type="text" name="svalue" style="width: 15%"   autocomplete="off" class="layui-input">-->
    </div>
   </div>
             
<hr class="layui-bg-blue">

                <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">是否免诚意金</label>
    <div class="layui-input-block">
    <label><input name="stat" type="radio" value="0" checked="checked" />免</label> 
	<label><input name="stat" type="radio" value="1" />不免 </label> 
    </div>
   </div>
      
      
    <!--     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">日期</label>
    <div class="layui-input-block">
      <input type="text" name="addtime" style="width: 15%"   autocomplete="off" class="layui-input">
    </div>
   </div>
      -->
      
  <div class="layui-form-item"  style="margin-left: 15% ;"  >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即添加</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>
    </div>
  </div>
</form> 
<script type="text/javascript" src="/Public/layui/layui.js"></script>
 <script type="text/javascript" src="/Public/js/zooming.js"></script>
</body>
</html>