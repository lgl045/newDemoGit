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
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/add_jp">添加机票</a>
		</div>

      
        <div class="layui-inline"  style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/gqjp">改签机票</a>
		</div>
      
              <div class="layui-inline" style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/tp">退票</a>
		</div>

	</blockquote>
<body class="childrenBody">
	<form action="/index.php/QM_Admin_1216/Mgt/savejp" method="post"  enctype="multipart/form-data" >
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">供应商：</label>
    <div class="layui-input-block">
      <input type="text" name="gys" value="<?php echo ($data['gys']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
            
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">航空公司：</label>
    <div class="layui-input-block">
      <input type="text" name="hkgs" value="<?php echo ($data['hkgs']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">客户：</label>
    <div class="layui-input-block">
      <input type="text" name="kh" style="width: 15%" value="<?php echo ($data['kh']); ?>" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                   
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">服务费：</label>
    <div class="layui-input-block">
      <input type="text" name="fwf" style="width: 15%" value="<?php echo ($data['fuf']); ?>" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
        <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">护照号：</label>
    <div class="layui-input-block">
      <input type="text" name="fwf" style="width: 15%" value="<?php echo ($data['hzh']); ?>" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">乘客姓名（同一线程内 可用 逗号隔开 ，！ ）：</label>
    <div class="layui-input-block">
      <input type="text" name="ckxm"  readonly="readonly" value="<?php echo ($data['ckxm']); ?>"  style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input"><td>
    </div>
  </div>
     
     <div class="layui-form-item">
    <label class="layui-form-label"     style="width: 20%">机票号（同一线程内 可用 逗号隔开 ，！ ）：</label>
    <div class="layui-input-block">
      <input type="text" name="jph"  value="<?php echo ($data['jph']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
           <div class="layui-form-item">
    <label class="layui-form-label"     style="width: 20%">应付款：</label>
    <div class="layui-input-block">
      <input type="text" name="yfk"  value="<?php echo ($data['yfk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                       

           <div class="layui-form-item">
    <label class="layui-form-label"     style="width: 20%">应收款：</label>
    <div class="layui-input-block">
      <input type="text" name="ysk"  value="<?php echo ($data['ysk']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                       

                       

      
      
              <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">行程：</label>
    <div class="layui-input-block">
      <select name="xc" class="layui-select" onchange="asd()">
        <option value="单程">单程</option>
        <option  value="往返">往返</option>
      </select>
   
  
    </div>
  </div>
      
      
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">出发行程：</label>
    <div class="layui-input-block">
      <input type="text" name="cfxc" value="<?php echo ($data['cfxc']); ?>"   style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     <div class="layui-form-item" id="fc">
    <label class="layui-form-label"  style="width: 20%">返程行程：</label>
    <div class="layui-input-block">
      <input type="text"  name="fcxc" style="width: 15%" value="<?php echo ($data['fcxc']); ?>"    autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 

           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">起飞日期：</label>
    <div class="layui-input-block">
      	<input value="<?php echo ($data['qfrq']); ?>"  readonly="readonly" name="qfrq" class="appDateTime" type="text"  class="layui-input" style="width: 15%;">
      
    </div>
  </div>

           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">返程日期：</label>
    <div class="layui-input-block">
      	<input value="<?php echo ($data['fcrq']); ?>"  readonly="readonly" name="fcrq" class="appDateTime" type="text"  class="layui-input" style="width: 15%;">
              <input type="hidden"  name="id" style="width: 15%" readonly="readonly" value="<?php echo ($data['id']); ?>"    autocomplete="off" class="layui-input">
      
    </div>
  </div>

	


 
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即修改</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>


    </div>
  </div>
</form>
 

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
 <script>
   function aa(){
     
     alert(5)
        var input = document.createElement('input');  //创建input节点
input.setAttribute('type', 'text');  //定义类型是文本输入
document.getElementById('form').appendChild(input ); //添加到form中显示function zz(){
   }

          $(window).load(function(){  
              $("#fc").hide();
             $("#fcr").hide();
            })  
 function asd(){
	 var  type= $("select[name='xc']").val();

   if(type=="往返"){
      $("#fc").show();
       $("#fcr").show();
      }else{
           $("#fc").hide();
         $("#fcr").hide();
      }
 }
</script>

  	<script type="text/javascript">
        $(function () {
			var currYear = (new Date()).getFullYear();	
			var opt={};
			opt.date = {preset : 'date'};
			opt.datetime = {preset : 'datetime'};
			opt.time = {preset : 'time'};
			opt.default = {
				theme: 'android-ics light', //皮肤样式
		        display: 'modal', //显示方式 
		        mode: 'scroller', //日期选择模式
				dateFormat: 'yyyy-mm-dd',
				lang: 'zh',
				showNow: true,
				nowText: "今天",
		        startYear: currYear - 10, //开始年份
		        endYear: currYear + 10 //结束年份
			};

		  	$("#appDate").mobiscroll($.extend(opt['date'], opt['default']));
		  	var optDateTime = $.extend(opt['datetime'], opt['default']);
		  	var optTime = $.extend(opt['time'], opt['default']);
		    $(".appDateTime").mobiscroll(optDateTime).datetime(optDateTime);
		    $("#appTime").mobiscroll(optTime).time(optTime);
        });
    </script>
</body>
</html>