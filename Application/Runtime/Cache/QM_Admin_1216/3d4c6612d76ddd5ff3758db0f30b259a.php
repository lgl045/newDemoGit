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
	
		    <a class="layui-btn search_btn" href="/index.php/QM_Admin_1216/Mgt/shopx">修改店铺</a>
		</div>
      
	</blockquote>
<body class="childrenBody">
	<form action="/index.php/QM_Admin_1216/Mgt/saveshop" method="post"  enctype="multipart/form-data">
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">店铺名称：</label>
    <div class="layui-input-block">
      <input type="text" name="merch_name" style="width: 15%" required  lay-verify="required" value="<?php echo ($res['merch_name']); ?>"  autocomplete="off" class="layui-input">
      
  
    </div>
  </div>
      
               <input type="hidden" name="id"   value="<?php echo ($res['sid']); ?>">
           
       

 
  <div class="layui-form-item"  style="margin-left: 10%" >
    <div class="layui-input-block">
      <button  type="submit" class="layui-btn" lay-submit lay-filter="formDemo" id="submit" >立即修改</button>      <button  type="reset" class="layui-btn" lay-submit lay-filter="formDemo"  >重置</button>


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
        var ue = UE.getEditor('container');

        function tijiao(){
        	var title = $("input[name='title']").val();
        	var gjc = $("input[name='gjc']").val();
        	var miao = $("input[name='miao']").val();
        	var title_t = $("input[name='title_t']").val();
        	var id_id = $("input[name='id_id']").val();   
          var pic = $("input[name='pic']").val();


        	
        	// alert(miao)

        	var content = UE.getEditor('container').getContent();
        	if(!title){
        		alert('请输入文章标题！');
        	}else if(!content){
        		alert('请输入文章内容！');
        	}else if(!gjc){
        		alert('请输入关键词！');
        	}else if(!miao){
        		alert('请输入描述！');
        	}else if(!title_t){
        		alert('请输入title！');
        	}else{
        		$.post('/index.php/QM_Admin_1216/Mgt/insert_jtyw',{title:title,content:content,gjc:gjc,miao:miao,title_t:title_t,id_id:id_id},function(data){
        			if(data == 1){
        				alert('添加成功！');
        				window.location.href='/index.php/QM_Admin_1216/Mgt/jtyw';
        			}else{
        				alert('添加失败！');
        			}
        		})
        	}
        }
    </script>

<script type="text/javascript">
	  			$(".del").click(function(){
			var id = $(this).attr('id');
			var ob = $(this);
			if(confirm('确定删除此用户？')){
				$.post("<?php echo U('Mgt/delxw');?>",{id:id},function(data){
					if(data==1){
						ob.parents('tr').remove();
					}
				})
			}
		})
		
	</script>
</body>
</html>