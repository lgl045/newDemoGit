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
  <!--
  <input type="hidden"  name="name"  value="<?php echo ($name); ?>" />
     <input type="hidden"  name="sex"  value="<?php echo ($sex); ?>" />
     <input type="hidden"  name="newphone"  value="<?php echo ($newphone); ?>" />
     <input type="hidden"  name="lphone"  value="<?php echo ($lphone); ?>" />
     <input type="hidden"  name="xl"  value="<?php echo ($xl); ?>" />
     <input type="hidden"  name="yx"  value="<?php echo ($yx); ?>" />
     <input type="hidden"  name="idcnu"  value="<?php echo ($idcnu); ?>" />
     <input type="hidden"  name="sfzyxq"  value="<?php echo ($sfzyxq); ?>" />
     <input type="hidden"  name="hjdz"  value="<?php echo ($hjdz); ?>" />
     <input type="hidden"  name="fzjg"  value="<?php echo ($fzjg); ?>" />
     <input type="hidden"  name="xzz"  value="<?php echo ($xzz); ?>" />
     <input type="hidden"  name="gsmc"  value="<?php echo ($gsmc); ?>" />
     <input type="hidden"  name="zg"  value="<?php echo ($zg); ?>" />
     <input type="hidden"  name="gsdz"  value="<?php echo ($gsdz); ?>" />
     <input type="hidden"  name="gsdh"  value="<?php echo ($gsdh); ?>" />
     <input type="hidden"  name="bm"  value="<?php echo ($bm); ?>" />
     <input type="hidden"  name="zw"  value="<?php echo ($zw); ?>" />
     <input type="hidden"  name="nsr"  value="<?php echo ($nsr); ?>" />
     <input type="hidden"  name="gznx"  value="<?php echo ($gznx); ?>" />
     <input type="hidden"  name="sfyc"  value="<?php echo ($sfyc); ?>" />
     <input type="hidden"  name="cph"  value="<?php echo ($cph); ?>" />
     <input type="hidden"  name="fc"  value="<?php echo ($fc); ?>" />
	
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">姓名：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['xm']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">提交时间：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['addtime']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">性别：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['xb']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">现手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['xphone']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">老手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['lphone']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
           
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">邮箱：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['yx']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">学历：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['xl']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">身份证：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['sfz']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">身份证有效期：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['sfzyxq']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">户籍地址：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['hjdz']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
           
       
    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">发证机关：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['fzjg']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">现住址：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['xzz']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司名称：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['gsmc']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">主管：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zg']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司地址：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['gsdz']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
 
    <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司电话：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['gsdh']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">部门：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['bm']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">职务：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zw']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">年收入：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['nsr']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">工作年限：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['gznx']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">是否有车：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['sfyc']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">车牌号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['cph']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">房产：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['fc']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">直系亲属：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zxqs']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">直系亲属关系：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zxqsgx']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">直系亲属手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zxqsphone']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">旁系亲属：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['pxqs']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">旁系亲属关系：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['pxqsgx']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">旁系亲属手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['pxqsphone']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">其他：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['qt']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">其他关系：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['qtgx']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
      <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">其他手机号：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['qtphone']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">芝麻分：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['zmf']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">已做网贷：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['yzwd']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">已有信用卡：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['yyxyk']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">额度：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['ed']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">匹配产品：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 100%" required  lay-verify="required" value="<?php echo ($xq['ppcp']); ?>"  readonly="readonly"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
  
  
  -->
  <form action="/index.php/Dai/Mgt/save_dl" id="saveForm" method="post" style='display:inline;'>
  <table border="1" width="100%" height="auto">
  <tr><th colspan="2">基本信息详情表</th></tr>
  <tr>
  <td>姓名:</td>  
    <input type="hidden" value="<?php echo ($xq['xm']); ?>" name="xm">
  <td><?php echo ($xq['xm']); ?></td> 
  </tr>
  <tr>
  <td>提交时间：</td>  
    <input type="hidden" value="<?php echo ($xq['addtime']); ?>" name="addtime">
  <td><?php echo ($xq['addtime']); ?></td> 
  </tr>
    <tr>
  <td>性别：</td>  
      <input type="hidden" value="<?php echo ($xq['xb']); ?>" name="xb">
  <td><?php echo ($xq['xb']); ?></td> 
  </tr>
    <tr>
  <td>现手机号：</td>  
      <input type="hidden" value="<?php echo ($xq['xphone']); ?>" name="xphone">
  <td><?php echo (substr($xq['xphone'],0,3)); ?>****<?php echo (substr($xq['xphone'],8,3)); ?></td> 
  </tr>
    <tr>
  <td>老手机号：</td>  
      <input type="hidden" value="<?php echo ($xq['lphone']); ?>" name="lphone">
  <td><?php echo (substr($xq['lphone'],0,3)); ?>****<?php echo (substr($xq['lphone'],8,3)); ?></td> 
  </tr>
    <tr>
  <td>邮箱：</td>  
      <input type="hidden" value="<?php echo ($xq['yx']); ?>" name="yx">
  <td><?php echo ($xq['yx']); ?></td> 
  </tr>
    <tr>
  <td>学历：</td>  
      <input type="hidden" value="<?php echo ($xq['xl']); ?>" name="xl">
  <td><?php echo ($xq['xl']); ?></td> 
  </tr><tr>
  <td>身份证：</td>  
    <input type="hidden" value="<?php echo ($xq['sfz']); ?>" name="sfz">
  <td><?php echo ($xq['sfz']); ?></td> 
  </tr><tr>
  <td>身份证有效期：</td>  
    <input type="hidden" value="<?php echo ($xq['sfzyxq']); ?>" name="sfzyxq">
  <td><?php echo ($xq['sfzyxq']); ?></td> 
  </tr><tr>
  <td>户籍地址：</td>
    <input type="hidden" value="<?php echo ($xq['hjdz']); ?>" name="hjdz">
  <td><?php echo ($xq['hjdz']); ?></td> 
  </tr><tr>
  <td>发证机关：</td>  
    <input type="hidden" value="<?php echo ($xq['fzjg']); ?>" name="fzjg">
  <td><?php echo ($xq['fzjg']); ?></td> 
  </tr><tr>
  <td>现住址：</td>  
    <input type="hidden" value="<?php echo ($xq['xzz']); ?>" name="xzz">
  <td><?php echo ($xq['xzz']); ?></td> 
  </tr><tr>
  <td>公司名称：</td>  
    <input type="hidden" value="<?php echo ($xq['gsmc']); ?>" name="gsmc">
  <td><?php echo ($xq['gsmc']); ?></td> 
  </tr><tr>
  <td>主管：</td>  
    <input type="hidden" value="<?php echo ($xq['zg']); ?>" name="zg">
  <td><?php echo ($xq['zg']); ?></td> 
  </tr><tr>
  <td>公司地址：</td>  
    <input type="hidden" value="<?php echo ($xq['gsdz']); ?>" name="gsdz">
  <td><?php echo ($xq['gsdz']); ?></td> 
  </tr><tr>
  <td>公司电话：</td>  
    <input type="hidden" value="<?php echo ($xq['gsdh']); ?>" name="gsdh">
  <td><?php echo ($xq['gsdh']); ?></td> 
  </tr><tr>
  <td>部门：</td>  
    <input type="hidden" value="<?php echo ($xq['bm']); ?>" name="bm">
  <td><?php echo ($xq['bm']); ?></td> 
  </tr><tr>
  <td>职务：</td>  
    <input type="hidden" value="<?php echo ($xq['zw']); ?>" name="zw">
  <td><?php echo ($xq['zw']); ?></td> 
  </tr><tr>
  <td>年收入：</td>  
    <input type="hidden" value="<?php echo ($xq['nsr']); ?>" name="nsr">
  <td><?php echo ($xq['nsr']); ?></td> 
  </tr><tr>
  <td>工作年限：</td>  
    <input type="hidden" value="<?php echo ($xq['gznx']); ?>" name="gznx">
  <td><?php echo ($xq['gznx']); ?></td> 
  </tr><tr>
  <td>是否有车：</td>  
    <input type="hidden" value="<?php echo ($xq['sfyc']); ?>" name="sfyc">
  <td><?php echo ($xq['sfyc']); ?></td> 
  </tr><tr>
  <td>车牌号：</td>  
    <input type="hidden" value="<?php echo ($xq['cph']); ?>" name="cph">
  <td><?php echo ($xq['cph']); ?></td> 
  </tr><tr>
  <td>房产：</td>  
    <input type="hidden" value="<?php echo ($xq['fc']); ?>" name="fc">
  <td><?php echo ($xq['fc']); ?></td> 
  </tr><tr>
  <td>直系亲属：</td>  
    <input type="text" value="<?php echo ($xq['zxqs']); ?>" name="zxqs">
  <td><?php echo ($xq['zxqs']); ?></td> 
  </tr><tr>
  <td>直系亲属关系：</td>  
    <input type="text" value="<?php echo ($xq['zxqsgx']); ?>" name="zxqsgx">
  <td><?php echo ($xq['zxqsgx']); ?></td> 
  </tr><tr>
  <td>直系亲属手机号：</td>  
    <input type="text" value="<?php echo ($xq['zxqsphone']); ?>" name="zxqsphone">
  <td><?php echo (substr($xq['zxqsphone'],0,3)); ?>****<?php echo (substr($xq['zxqsphone'],8,3)); ?></td> 
  </tr><tr>
  <td>旁系亲属：</td>  
    <input type="hidden" value="<?php echo ($xq['pxqs']); ?>" name="pxqs">
  <td><?php echo ($xq['pxqs']); ?></td> 
  </tr><tr>
  <td>旁系亲属关系：</td>  
    <input type="hidden" value="<?php echo ($xq['pxqsgx']); ?>" name="pxqsgx">
  <td><?php echo ($xq['pxqsgx']); ?></td> 
  </tr><tr>
  <td>旁系亲属手机号：</td>  
    <input type="hidden" value="<?php echo ($xq['pxqsphone']); ?>" name="pxqsphone">
  <td><?php echo (substr($xq['pxqsphone'],0,3)); ?>****<?php echo (substr($xq['pxqsphone'],8,3)); ?></td> 
  </tr><tr>
  <td>其他：</td>  
    <input type="hidden" value="<?php echo ($xq['qt']); ?>" name="qt">
  <td><?php echo ($xq['qt']); ?></td> 
    
  </tr><tr>
  <td>其他关系：</td>  
    <input type="hidden" value="<?php echo ($xq['qtgx']); ?>" name="qtgx">
  <td><?php echo ($xq['qtgx']); ?></td> 
  </tr><tr>
  <td>其他手机号：</td>  
    <input type="hidden" value="<?php echo ($xq['qtphone']); ?>" name="qtphone">
  <td><?php echo (substr($xq['qtphone'],0,3)); ?>****<?php echo (substr($xq['qtphone'],8,3)); ?></td> 
  </tr><tr>
  <td>芝麻分：</td>  
    <input type="hidden" value="<?php echo ($xq['zmf']); ?>" name="zmf">
  <td><?php echo ($xq['zmf']); ?></td> 
  </tr>
    
    <tr>
  <td>已做贷款：</td>  
    
  <td><input type="text" value="<?php echo ($xq['yzdk']); ?>" name="yzdk"></td> 
  </tr>
    
    <tr>
  <td>已做网贷：</td>  
    <input type="hidden" value="<?php echo ($xq['yzwd']); ?>" name="yzwd">
  <td><?php echo ($xq['yzwd']); ?></td> 
  </tr><tr>
  <td>已有信用卡：</td>  
    <input type="hidden" value="<?php echo ($xq['yyxyk']); ?>" name="yyxyk">
  <td><?php echo ($xq['yyxyk']); ?></td> 
  </tr><tr>
  <td>额度：</td>  
  <td><input type="text" value="<?php echo ($xq['ed']); ?>" name="ed"></td> 
    

  </tr><tr>
  <td>匹配产品：</td>  
  <td><input type="text" value="<?php echo ($xq['ppcp']); ?>" name="ppcp"></td> 
  </tr>
    <input type="hidden" value="<?php echo ($xq['id']); ?>" name="id">
    
  </table>
  
  
  
  

		
	
                                  
                                  
		
	  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >确认提交</button>    


    </div>
  </div>

	
</form>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


</body>
</html>