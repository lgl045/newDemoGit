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
  	<blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/addkh">添加客户</a>
		</div>
      

      
        <div class="layui-inline"  style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/xfcome">供应商</a>
		</div>
      
              <div class="layui-inline" style="margin-left: 25%">
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/xfcome">操作员</a>
		</div>

	</blockquote>
<body class="childrenBody">
	<form action="/index.php/QM_Admin_1216/Mgt/savekh" method="post"  enctype="multipart/form-data">
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司名称（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="gsmc" style="width: 15%" required  lay-verify="required" value="<?php echo ($data['gsmc']); ?>"  autocomplete="off" class="layui-input">
       <input type="hidden" name="fjs" style="width: 15%" required  lay-verify="required" value="<?php echo ($data['fj']); ?>"  autocomplete="off" class="layui-input">
             <input type="hidden" name="id" style="width: 15%" required  lay-verify="required" value="<?php echo ($data['id']); ?>"  autocomplete="off" class="layui-input">

  
    </div>
  </div>
      
            
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">项目名称：</label>
    <div class="layui-input-block">
      <input type="text" name="xmmc" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['xmmc']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司负责人（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="gsfzr" style="width: 15%" required  lay-verify="required"   value="<?php echo ($data['gsfzr']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司负责人电话（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="gfzrphone" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['gfzrphone']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司负责人QQ：</label>
    <div class="layui-input-block">
      <input type="text" name="gfzrq" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['gfzrq']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">公司负责人微信（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="gfzrwx" style="width: 15%" required  lay-verify="required"   value="<?php echo ($data['gfzrwx']); ?>" autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">业务负责人（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="yfzr" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['yfzr']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">业务负责人电话（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="yfzrphone" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['yfzrphone']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 
     <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">业务负责人QQ：</label>
    <div class="layui-input-block">
      <input type="text" name="yfzrq" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['yfzrq']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">业务负责人微信（必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="yfzrwx" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['yfzrwx']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>

      
                 <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">指定邮箱（非现结客户必填）：</label>
    <div class="layui-input-block">
      <input type="text" name="zdyx" style="width: 15%" required  lay-verify="required"  value="<?php echo ($data['zdyx']); ?>"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
            
                 <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">客户等级：</label>
    <div class="layui-input-block">
      <input type="text" name="khdj" style="width: 15%" required  lay-verify="required"   value="<?php echo ($data['khdj']); ?>" autocomplete="off" class="layui-input">
  
    </div>
  </div>

           

 
 

 
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即修改</button>     

    </div>
  </div>
</form>
 

	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript">
	  	$("#asd").click(function(){
   			 var  gsmc= $("input[name='gsmc']").val();
          alert(gsmc)
             var  type= $("input[select='type']").val();
              var  num= $("input[name='num']").val();
          if(number==""){
            alert("场名不为空！");
            return false;
             }
            if(num==""){
            alert("属性不为空！");
            return false;
             }
			$.post("<?php echo U('Mgt/insert_jb');?>",{number:number,type:type,num:num},function(data){
				if(data.code.jid){
                  var userId = 11;
                  var groupId = data.code.jid;
                  var groupName = data.code.number;
             $.post("https://mai.luhanforex.cn/api.php/home/user/ceqz",{userId:userId,groupId:groupId,groupName:groupName},function(data){
				if(data==1){
                   alert("添加成功");
                  window.location.href="https://mai.luhanforex.cn/index.php/QM_Admin_1216/Mgt/jl_applist";
                   }else{
                   alert("网络繁忙请稍后再试");
                   	}
					}) 
                }else{
                alert("网络繁忙请稍后再试");
                }
				})

		});
		
	</script>
</body>
</html>