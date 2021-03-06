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
	<form action="/index.php/JRapp/Mgt/insertjp" method="post"  enctype="multipart/form-data" >
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">供应商：</label>
    <div class="layui-input-block">
      <select  name="gys" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?><option value="<?php echo ($da['id']); ?>"><?php echo ($da['gsmc']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

      </select>
  
  
    </div>
  </div>
      
            
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">航空公司：</label>
    <div class="layui-input-block">
      <input type="text" name="hkgs" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
        <!--   <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">护照号：</label>
    <div class="layui-input-block">
      <input type="text" name="hzh" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>-->
               <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">公司名称：</label>
    <div class="layui-input-block">
      <input type="text" name="gsm" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
      
                 
   <!--  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">客户编号：</label>
    <div class="layui-input-block">
      <input type="text" name="kh" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>-->
                   

                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">乘客姓名：</label>
    <div class="layui-input-block" id="InputsWrapper">

      <input type="text" name="ckxm[]"  id="field_1" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
        <a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"> 
                <a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" id="AddMoreFileBox" class="btn btn-info">+</a>
        </a>
    </div>
  </div>
 
                       

                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">机票号：</label>
    <div class="layui-input-block"  id="inks">
     
       <input type="text" name="jph[]"  id="jphs" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
        <a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclasss"> 
                <a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" id="an" class="btn btn-info">+</a>
        </a>
  
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
    <label class="layui-form-label"  style="width: 20%">起飞日期：</label>
    <div class="layui-input-block">
      	<input value="--" readonly="readonly" name="qfrq" class="appDateTime layui-input" type="text"  class="layui-input" style="width: 15%;">
      
    </div>
  </div>
      
               <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">出发行程：</label>
    <div class="layui-input-block">
      <input type="text" name="cfxc" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
 

       <div class="layui-form-item" id="fcr">
    <label class="layui-form-label"  style="width: 20%">返程日期：</label>
    <div class="layui-input-block">
      	<input value="--"   readonly="readonly" name="fcrq" class="appDateTime layui-input" type="text"   style="width: 15%;">
  
    </div>
  </div>
      
      
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">价格1：</label>
    <div class="layui-input-block">
      <input type="text" name="j1" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">价格2：</label>
    <div class="layui-input-block">
      <input type="text" name="j2" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">价格3：</label>
    <div class="layui-input-block">
      <input type="text" name="j3" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">价格4：</label>
    <div class="layui-input-block">
      <input type="text" name="j4" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">折扣1：</label>
    <div class="layui-input-block">
      <input type="text" name="zk1" style="width: 15%"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">折扣2：</label>
    <div class="layui-input-block">
      <input type="text" name="zk2" style="width: 15%"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
           
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">折扣3：</label>
    <div class="layui-input-block">
      <input type="text" name="zk3" style="width: 15%"   autocomplete="off" class="layui-input">
  
    </div>
  </div>
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 20%">服务费：</label>
    <div class="layui-input-block">
      <input type="text" name="fwf" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                 <div  style=";margin-left: 600px; margin-top: -500px;display: none;"  id="fk">
    <label class="layui-form-label"  style="width: 20%">应付款：</label>
    <div class="layui-input-block">
      <input type="text" name="fk" style="width: 15%"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                       <div  style=";margin-left: 600px;display: none;" id="sk">
    <label class="layui-form-label"  style="width: 20%">应收款：</label>
    <div class="layui-input-block">
      <input type="text" name="sk" style="width: 15%"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
            
            
      



	


 
  <div class="layui-form-item"  style="margin-left: 10% ;"  >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即添加</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>


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
    $("form").on("submit",function(event){
  
       var  gsm= $("input[name='hkgs']").val();
         var  sk= $("input[name='sk']").val();
         var  fk= $("input[name='fk']").val();


           if(gsm!="et" && gsm!="ET" ){
             $("#fk").css("display","block");//修改display属性为block
             $("#sk").css("display","block");//修改display属性为bloc
             
             if(sk=="" ||  fk=="" ){
               alert("请手动填写！");
               
                return false;
                }
            }
  
    
    })
    </script>
  
   <script>
        $(document).ready(function() {
        
            var MaxInputs = 8; //maximum input boxes allowed
            var InputsWrapper = $("#InputsWrapper"); //Input boxes wrapper ID
            var AddButton = $("#AddMoreFileBox"); //Add button ID
            var x = InputsWrapper.length; //initlal text box count
            var FieldCount = 1; //to keep track of text box added
            $(AddButton).click(function(e) //on add input button click
                {
                    if (x <= MaxInputs) //max input box allowed
                    {
                        FieldCount++; //text box added increment
                        //add input box
                        $(InputsWrapper).append('<div><input class="layui-input" style="width: 15%" type="text" name="ckxm[]" id="field_' + FieldCount + '"/><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"><input type="button" value="删除"></a></div>');
                        x++; //text box increment
                    }
                    return false;
                });
            $("body").on("click", ".removeclass", function(e) { //user click on remove text
                if (x > 1) {
                    $(this).parent('div').remove(); //remove text box
                    x--; //decrement textbox
                }
                return false;
            })
        });
    </script>
  
  
     <script>
        $(document).ready(function() {
  

            var MaxInputs = 8; //maximum input boxes allowed
            var inks = $("#inks"); //Input boxes wrapper ID
            var an = $("#an"); //Add button ID
            var x = inks.length; //initlal text box count
            var FieldCount = 1; //to keep track of text box added
            $(an).click(function(e) //on add input button click
                {
                    if (x <= MaxInputs) //max input box allowed
                    {
                        FieldCount++; //text box added increment
                        //add input box
                        $(inks).append('<div><input type="text" class="layui-input" style="width: 15%" name="jph[]" id="jphs' + FieldCount + '"/><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclasss"><input type="button" value="删除"></a></div>');
                        x++; //text box increment
                    }
                    return false;
                });
            $("body").on("click", ".removeclasss", function(e) { //user click on remove text
                if (x > 1) {
                    $(this).parent('div').remove(); //remove text box
                    x--; //decrement textbox
                }
                return false;
            })
        });
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