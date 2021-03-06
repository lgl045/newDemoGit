<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>会员添加--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
	<style type="text/css">
		.layui-form-item .layui-inline{ width:36.333%; float:left; margin-right:0; }
		@media(max-width:1240px){
			.layui-form-item .layui-inline{ width:100%; float:none; }
		}
	</style>
</head>
<body class="childrenBody">
	<form class="layui-form" style="width:80%;" action="<?php echo U('Goods/save');?>" method="post" enctype="multipart/form-data">
		<div class="layui-form-item">
			<label class="layui-form-label">商家用户：</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input userName" value="<?php echo ($data['username']); ?>" lay-verify="required" disabled>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 85px;">图片或视频：</label>
			<div class="layui-input-block">
				<input class="file kkk" id="kkk" type="file" name="file[]" onchange="fileChange(this);">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片2：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]" ><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片3：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片4：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片5：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片6：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片7：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片8：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品图片9：</label>
			<div class="layui-input-block">
				<input class="file chuan" type="file" name="file[]"><img src="" style="display:none" class="pic" width="80" height="80">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">商品介绍：</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入商品介绍" name="content" class="layui-textarea linksDesc"><?php echo ($data['content']); ?></textarea>
			</div>
			
 		<!-- <embed width="320" height="240" src="/Public/uploads/<?php echo ($p['pic']); ?>">-->
 		</div> 
		<?php if(is_array($pp)): $i = 0; $__LIST__ = $pp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><input type="hidden" value="<?php echo ($p['pic']); ?>" name="pid[]"><?php endforeach; endif; else: echo "" ;endif; ?>
		<input type="hidden" value="<?php echo I('get.id');?>" name="id">
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addUser">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/addUser.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
	//建立一個可存取到該file的url
	function getObjectURL(file) {
	 var url = null ; 
	 if (window.createObjectURL!=undefined) { // basic
	  url = window.createObjectURL(file) ;
	 } else if (window.URL!=undefined) { // mozilla(firefox)
	  url = window.URL.createObjectURL(file) ;
	 } else if (window.webkitURL!=undefined) { // webkit or chrome
	  url = window.webkitURL.createObjectURL(file) ;
	 }
	 return url ;
	}
	$(".file").change(function(){
		var objUrl = getObjectURL(this.files[0]) ;
		console.log("objUrl = "+objUrl) ;
		if (objUrl) {
		 $(this).next().attr("src", objUrl).css('display','block');
		}
	})

$(".chuan").change(function(){
var dd=$(this).val();
var ss=$("#kkk").val();	
var uploadfile = dd;
if(uploadfile!=""){
var types = ["jpg","gif","png"];
var ttt=["mp4","avi","wmv"];
var ext = uploadfile.substring(uploadfile.length-3).toLowerCase();
var ex=ss.substring(ss.length-3).toLowerCase();
var sing = false;
var sss=false;
for(var i=0; i<types.length;i++){
if (ext==types[i]){
	
sing = true; 
}
}
for(var s=0; s<ttt.length;s++){
if (ex==ttt[s]){
sss=true;
}
}
if(sss!=false){
	$(this).remove();
alert("视频和图片只能上传一种视频只能上传一个！");
return false;
}	
if(!sing){
	$(this).remove();
alert("请在图片或视频中上传视频！");
return false;
}	
}
return true;
})

var isIE = /msie/i.test(navigator.userAgent) && !window.opera;
function fileChange(target,id) {
var fileSize = 0;
var filetypes =[".mp4",".avi",".wmv",".jpg",".gif",".png"];
var filepath = target.value;
var filemaxsize = 1024*2;//设置上传文件大小2M
if(filepath){
var isnext = false;
var fileend = filepath.substring(filepath.indexOf("."));
if(filetypes && filetypes.length>0){
for(var i =0; i<filetypes.length;i++){
if(filetypes[i]==fileend){
isnext = true;
break;
}
}
}
if(!isnext){
alert("不接受此文件类型！");
target.value ="";
return false;
}
}else{
return false;
}
if (isIE && !target.files) {
var filePath = target.value;
var fileSystem = new ActiveXObject("Scripting.FileSystemObject");
if(!fileSystem.FileExists(filePath)){
alert("附件不存在，请重新输入！");
return false;
}
var file = fileSystem.GetFile (filePath);
fileSize = file.Size;
} else {
fileSize = target.files[0].size;
}

var size = fileSize / 1024;
if(size>filemaxsize){
alert("附件大小不能大于"+filemaxsize/1024+"M！");
target.value ="";
return false;
}
if(size<=0){
alert("附件大小不能为0M！");
target.value ="";
return false;
}
}
	</script>
</body>
</html>