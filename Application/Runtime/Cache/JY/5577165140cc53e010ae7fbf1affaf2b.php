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
		    <a class="layui-btn search_btn" href="/index.php/JY/Mgt/lunbo">轮播管理</a>
		</div>      
	</blockquote>  
<body class="childrenBody">
	<form action="/index.php/JY/Mgt/insertlb" method="post"  enctype="multipart/form-data">
      
      
    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">选择分类：</label>
    <div class="layui-input-block">      
      <select name="stat"  style="width: 15%"   autocomplete="off" class="layui-input">
           <option value="0">首页</option>
           <option value="1">推荐</option>
           <option value="2">娱乐</option>
           <option value="4">订单</option>
           <option value="3">相亲</option>
           <option value="5">技能</option>
         <option value="6">商城</option>
         <option value="7">商学院</option>
      </select>
    </div>
   </div>

    <div class="layui-form-item">
    	<label class="layui-form-label"  style="width: 15%">选择图片：</label>
    <div class="layui-input-block">
        <input type="file" name="pic" style="width: 20%" required  lay-verify="required"  autocomplete="off" class="layui-input">
    </div>
  </div>
      
  <div class="layui-form-item"  style="margin-left: 9%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即添加</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>
    </div>
  </div>
      
</form>
</body>
</html>