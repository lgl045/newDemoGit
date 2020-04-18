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
  	<blockquote class="layui-elem-quote news_search">
              <div class="layui-inline">
	
		    <a class="layui-btn search_btn" href="/index.php/JRapp/Mgt/ecp">修改产品</a>
		</div>
      
	</blockquote>
<body class="childrenBody">
	<form action="/index.php/JRapp/Mgt/eidtcp" method="post"  enctype="multipart/form-data">
  <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">名字：</label>
    <div class="layui-input-block">
      <input type="text" name="name" style="width: 15%" value="<?php echo ($data['name']); ?>" required  lay-verify="required"  autocomplete="off" class="layui-input">
      
   <input type="hidden" name="id" value="<?php echo ($data['id']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
        <input type="hidden" name="pic" value="<?php echo ($data['pic']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
       <input type="hidden" name="pic2" value="<?php echo ($data['pic2']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
    </div>
  </div>
      
             
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">图片：</label>
    <div class="layui-input-block">
      <input type="file" name="pic"   style="width: 15%"  autocomplete="off" class="layui-input">
               <img style="margin-left: 9%" src="<?php echo ($data['pic']); ?>" data-action="zoom"  width="50" height="50">
  
    </div>

  </div> 
      
      
 
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">网址：</label>
    <div class="layui-input-block">
      <input type="text" name="wz" value="<?php echo ($data['wz']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
             <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">利息：</label>
    <div class="layui-input-block">
      <input type="text" name="lx" value="<?php echo ($data['lx']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
       
       <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">申请人数量：</label>
    <div class="layui-input-block">
      <input type="text" name="sqsl" value="<?php echo ($data['sqsl']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
      
      
      
             <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">说明：</label>
    <div class="layui-input-block">
      <input type="text" name="sm" value="<?php echo ($data['sm']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
      
                 <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">额度：</label>
    <div class="layui-input-block">
      <input type="text" name="ed" value="<?php echo ($data['ed']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
         
            

     
         <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">选择分类：</label>
    <div class="layui-input-block">
      <select name="fid">
        <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ress): $mod = ($i % 2 );++$i; if($ress['id'] == $data['fid']): ?><option value="<?php echo ($ress['id']); ?>" selected="selected"><?php echo ($ress['name']); ?></option> 

<?php else: ?> 
             <option value="<?php echo ($ress['id']); ?>"><?php echo ($ress['name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
       
      </select>
  
    </div>
  </div>
             
       
    <div class="layui-form-item" id="W">
    <label class="layui-form-label"  style="width: %"></label>
    <div class="layui-input-block">
      	<script id="cphh" style="height:450px;" name="cpjs" type="text/plain"><?php echo ($data['cpjs']); ?></script>
 
    </div>
 </div>
      
      
      
             <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">返佣说明：</label>
    <div class="layui-input-block">
      <input type="text" name="fysm" value="<?php echo ($data['fysm']); ?>" style="width: 15%" required  lay-verify="required"  autocomplete="off" class="layui-input">
  
    </div>
  </div>
                 

          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">是否最热：</label>
    <div class="layui-input-block" >
      
      <?php if($data['iszr'] == 1 ): ?><input style="margin-top:1.5%"  type="radio" name="iszr" value="1" checked="checked">是
        <input type="radio" name="iszr" value="0">否
        
<?php else: ?> 
        
            <input style="margin-top:1.5%"  type="radio" name="iszr" value="1">是
            <input type="radio" name="iszr" value="0"  checked="checked">否<?php endif; ?>
  
    </div>
  </div>

      
      
          <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">是否推荐：</label>
    <div class="layui-input-block" >
      
       <?php if($data['iszx'] == 1 ): ?><input style="margin-top:1.5%" type="radio" name="iszx" value="1" checked="checked">是
      <input type="radio" name="iszx" value="0">否
         <?php else: ?> 
            <input style="margin-top:1.5%" type="radio" name="iszx" value="1" >是
      <input type="radio" name="iszx" value="0" checked="checked">否<?php endif; ?>
    </div>
  </div>
      
      
      
      
           <div class="layui-form-item">
    <label class="layui-form-label"  style="width: 15%">是否攻略：</label>
    <div class="layui-input-block" >
       <input type="hidden" name="ceshi" id="ce" value="<?php echo ($data['isgl']); ?>" >
         <?php if($data['isgl'] == 1 ): ?><input style="margin-top:1.5%" type="radio" name="isgl" value="1" onchange="asd(1)" checked="checked">是
      <input type="radio" name="isgl" onchange="asd(2)" value="0">否
           
              <?php else: ?> 
      <input style="margin-top:1.5%" type="radio" name="isgl" value="1" onchange="asd(1)" >是
      <input type="radio" name="isgl" onchange="asd(2)" value="0" checked="checked">否<?php endif; ?>
           
    </div>
  </div>
           
       
    <div class="layui-form-item" id="nm">
    <label class="layui-form-label"  style="width: %"></label>
    <div class="layui-input-block">
      	<script id="container" style="height:450px;" name="cont" type="text/plain"><?php echo ($data['cont']); ?></script>
 
    </div>
 </div>
      
      
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
      
      
      $(document).ready(function (){

 var a =$("#ce").val();
       if(a==1){
           $("#nm").css("display","block");
            
            }else{
            $("#nm").css("display","none");
            }
});
        var ue = UE.getEditor('container');
        var cphh = UE.getEditor('cphh');
        function asd(id){
         if(id==1){
           $("#nm").css("display","block");
            
            }else{
            $("#nm").css("display","none");
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