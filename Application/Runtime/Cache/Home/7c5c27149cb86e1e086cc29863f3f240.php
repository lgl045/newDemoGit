<?php if (!defined('THINK_PATH')) exit();?><html data-dpr="1" style="font-size: 45.8px;">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
    <script></script>
    <title>打卡公积金</title>
    <link href="/Public/app.2336808bf000f8dcec2e1d01a4bda3d8.css" rel="stylesheet">
  </head>
     <style type="text/css">
        .cia-list .cia-list-item-media {
            width: 3rem;
        }

        .notes-add {
            position: fixed;
            left: 0.5rem;
            bottom: 0.5rem;
            width: 3rem;
            z-index: 99;
        }

        textarea {
            height: 8rem;
            background-color: #ffffff;
            padding: 0.5rem;
        }

        .photos img {
            display: block;
            width: 100%;
        }

        .add-photos>div {
            width: 100%;
            height: 5.15rem;
            line-height: 5.15rem;
        }

        .add-photos>div .cia-iconfont {
            font-size: 2rem;
            color: #ccc;
        }

        .image-item {
            position: relative;
            height: 5.3rem;
            overflow: hidden;
            background-color: #f0f0f0;
        }

        .image-item img {
            display: block;
            margin: 0 auto;
            width: auto;
            height: 100%;
        }

        .image-item .delete-btn {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 28px;
            height: 28px;
            background-color: rgba(0, 0, 0, 0.7);
            margin-left: -14px;
            margin-top: -14px;
            color: #ffffff;
            text-align: center;
            border-radius: 50%;
        }

        .cia-clearfix {
            text-align: center;
        }

        .add {
            width: 4rem;
            height: 4rem;
            background-size: 100% 100%;
            float: left;
            margin-right: 1rem;
        }

        .adds {
            width: 4rem;
            height: 4rem;
            background: url(../../res/add.png) no-repeat;
            background-size: 100% 100%;
            float: left;
            margin-right: 1rem;
        }

        .asds {
            width: 4rem;
            height: 4rem;
            background: url(../res/h/132.png) no-repeat;
            background-size: 100% 100%;
            float: left;
            margin-right: 1rem;
        }

        .addimg {
            float: left;
            height: 4rem;
            width: 4rem;
            margin-right: 1rem;
            margin-bottom: 1rem;
        }

        .addimg img {
            width: 4rem;
            height: 4rem;
        }

        .addimg .x img {
            width: 0.8rem;
            height: 0.8rem;
            position: relative;
            top: -4.4rem;
            left: -0.5rem;
        }
        /*遮罩层*/

        .mask {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            display: none;
        }

        .alert {
            width: 12rem;
            height: 7.42rem;
            border-radius: 0.2rem;
            background: #fff;
            font-size: 0.75rem;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -6rem;
            margin-top: -4.2rem;
        }

        .alert p:nth-child(1) {
            line-height: 5rem;
            border-bottom: 1px solid #EBEBEB;
            font-size: 0.9rem;
        }

        .alert p:nth-child(2) span {
            display: inline-block;
            width: 49%;
            height: 2.4rem;
            line-height: 2.4rem;
            float: left;
            font-size: 0.8rem;
        }

        .cancel {
            border-right: 1px solid #EBEBEB;
            color: #00BB3D;
        }

        .sure {
            color: #F60;
        }
       
       .file {
        height:40px;
         width:23%;
         
    position: relative;
    display: inline-block;

    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 0;
    margin:10px 4%;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 40px;
   text-align:center;
         float:left;
         font-size: 16px;
}
.file input {
    position: absolute;
  	width:100%;
  	
    
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {

    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}`
       .main{
       	float:left;
       }
       .img1-3{
       
        	float:left;
         	margin-left:2%;
         margin-top:10px;
       }
       .div-img1-3{
       		width:100%;
  
           display:none;
           float:left;
          
       }
    </style>
  <body style="font-size: 12px;">
    <form id="frmlogin" action="/index.php/Home/Index/insgjj" method="post"  enctype="multipart/form-data">
    <div id="app">
      <div class="main reg other-main">
        <img src="http://dai.juhuaian.cn/Public/img/gjj.jpg" onclick="javascript:return false">
        <div class="main-view">
          <div class="input">
             <div class="input-item">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_21.png">
              <input type="text" placeholder="请输入推荐人姓名" name="tname" id="tname"></div>
            <div class="input-item vecode">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_31.png">
              <input type="tel" placeholder="请输入推荐人手机号" maxlength="11" id="tphone" name="tphone">
            </div>
           <div class="input-item vecode">
              <img src="https://dxjk.oss-cn-hangzhou.aliyuncs.com//jyp_login_input_2.png">
              <input type="text" placeholder="请输入姓名" name="name" id="name">
            </div>
            <div class="input-item">
              <img src="https://dxjk.oss-cn-hangzhou.aliyuncs.com//jyp_login_input_1.png">
              <input type="tel" placeholder="请输入手机号" maxlength="11" name="phone" id="phone"></div>
       
 
            <div class="input-item ">
                身份证正面
                <a   id="" href="javascript:;" class="file" style="  width: 30%">选择文件
              <input  type="file" name="photo" id="up_photo">
               </a>
            </div>
            <input type="hidden" name="sfzz" value="" id="sfzz"><br>  <!--这里是为了获取图片的名称-->
              <img src="" style="display:none" id="img_thumb" width="150" height="150"><br>  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            
            
            
              <div class="input-item ">
                身份证反面
                
             <a   id="" href="javascript:;" class="file" style="  width: 30%"a>选择文件
            <input  type="file" name="photos" id="up_photos">
             </a>
           
            </div>
            <input type="hidden" name="sfzf" value="" id="sfzf"><br>  <!--这里是为了获取图片的名称-->
              <img src="" style="display:none" id="img_thumbs" width="150" height="150"><br>  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            
           
          <hr><!--kaishi=---------------------------------------------------------------------------------------------------------------->
            <font color="#3a3a3a">详版征信<font color="red">（请上传人行打印详版征信（网查打印不算））</font></font>
      <div class="div-img1-3">
            <img src="" style="display:none;" id="img_thumbsa9" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            <img src="" style="display:none;" id="img_thumbsa8" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            <img src="" style="display:none;" id="img_thumbsa7" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            <img src="" style="display:none;" id="img_thumbsa6" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            <img src="" style="display:none;" id="img_thumbsa5" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
            <img src="" style="display:none;" id="img_thumbsa4" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
      		<img src="" style="display:none;" id="img_thumbsa3" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
     		<img src="" style="display:none;" id="img_thumbsa2" width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
     		<img src="" style="display:none;" id="img_thumbsa"  width="90px" height="90" class="img1-3">  <!--//先隐藏，然后点击上传后会显示一张预览图，后有详细解释-->
      </div>
            
     <a style=" float:left;" id="img1an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img1" id="up_photosa">
	 </a>
     <input type="hidden" name="img1" value="" id="zximg1">  <!--这里是为了获取图片的名称-->
    
            
            
            
            
     <a style=" float:left;display:none"  id="img2an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img2" id="up_photosa2">
	 </a>
     <input type="hidden" name="img2" value="" id="zximg2"> <!--这里是为了获取图片的名称-->
     
     
            
            
            
                        
     <a  style=" float:left;display:none"  id="img3an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img3" id="up_photosa3">
	 </a>
     <input type="hidden" name="img3" value="" id="zximg3"><br>  <!--这里是为了获取图片的名称-->
 
            
            
            
            
          <a  style=" float:left;display:none"  id="img4an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img4" id="up_photosa4">
	 </a>
     <input type="hidden" name="img4" value="" id="zximg4"><br>  <!--这里是为了获取图片的名称-->
 
            
      
            
            
             <a  style=" float:left;display:none"  id="img5an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img5" id="up_photosa5">
	 </a>
     <input type="hidden" name="img5" value="" id="zximg5"><br>  <!--这里是为了获取图片的名称-->
 
            
            
            
            
                      <a  style=" float:left;display:none"  id="img6an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img6" id="up_photosa6">
	 </a>
     <input type="hidden" name="img6" value="" id="zximg6"><br>  <!--这里是为了获取图片的名称-->
 
            
            
                      <a  style=" float:left;display:none"  id="img7an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img7" id="up_photosa7">
	 </a>
     <input type="hidden" name="img7" value="" id="zximg7"><br>  <!--这里是为了获取图片的名称-->
 
            
            
            
                      <a  style=" float:left;display:none"  id="img8an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img8" id="up_photosa8">
	 </a>
     <input type="hidden" name="img8" value="" id="zximg8"><br>  <!--这里是为了获取图片的名称-->
 
            
            
            
            
                      <a  style=" float:left;display:none"  id="img9an" href="javascript:;" class="file">选择文件
    <input  type="file" name="img9" id="up_photosa9">
	 </a>
     <input type="hidden" name="img9" value="" id="zximg9"><br>  <!--这里是为了获取图片的名称-->
 
            
            
                        
  
     

            <div class="flex agreement-box">
              <div> </div></div></div></div> 
        <button type="submit" class="next-btn">提交</button>
        </form>
  </body>
      
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/js/zooming.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript">
  
  　$("form").on("submit",function(event){
      var name=$("#name").val();
      var phone=$("#phone").val();
      var sfzz=$("#sfzz").val();
      var sfzf=$("#sfzf").val();

      var zximg1=$("#zximg1").val();
     
   

    
            if(name=="" || name==null){
                 alert("请填写姓名！");
                 event.preventDefault();
            }else if(phone=="" || phone==null){
                 alert("请填写手机号！");
                 event.preventDefault();
            }else if(sfzz=="" || sfzz==null){
                 alert("请选择身份证正面！");
                 event.preventDefault();
            }else if(sfzf=="" || sfzf==null){
                 alert("请选择身份证反面！");
                 event.preventDefault();
            }else if(zximg1=="" || zximg1==null){
                 alert("征信上传最少一张！");
                 event.preventDefault();
            }
        })


$("#up_photo").on("change",function(){

                    //用html方式上传
                    var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法

                    $.ajax({
                      url:"<?php echo U('Index/ajax_upload');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
               
                          if (data!=404) {
                              $("#img_thumb").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumb").show();      //显示预览图
                              $("#sfzz").val("http://dai.juhuaian.cn/Public/" +data);
                            $("#div-img1-3").css("display","block");
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
})
  
  $("#up_photos").on("change",function(){
                    //用html方式上传
                    var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploads');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbs").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbs").show();      //显示预览图
                              $("#sfzf").val("http://dai.juhuaian.cn/Public/" +data);
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
})
//9张征信-=========================================================================================================================================================================
    $("#up_photosa").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa").show();      //显示预览图
                              $("#zximg1").val("http://dai.juhuaian.cn/Public/" +data);
                            $(".div-img1-3").css("display","block");
                             $("#img2an").css("display","block");
                            
                            $("#img1an").css("display","none");
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
})
  
      $("#up_photosa2").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa2');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa2").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa2").show();      //显示预览图
                              $("#zximg2").val("http://dai.juhuaian.cn/Public/" +data);
                 
                            
                                 $(".div-img1-3").css("display","block");
                             $("#img3an").css("display","block");
                            
                            $("#img2an").css("display","none");
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
})
  
  
  
    
  
       $("#up_photosa3").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa3');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa3").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa3").show();      //显示预览图
                              $("#zximg3").val("http://dai.juhuaian.cn/Public/" +data);
                          
                                 $(".div-img1-3").css("display","block");
                             $("#img4an").css("display","block");
                            
                            $("#img3an").css("display","none");
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
})
  
  
  
         $("#up_photosa4").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa4');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa4").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa4").show();      //显示预览图
                              $("#zximg4").val("http://dai.juhuaian.cn/Public/" +data);
                              $(".div-img1-3").css("display","block");
                              $("#img5an").css("display","block");
                              $("#img4an").css("display","none");
                            
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
  
      $("#up_photosa5").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa5');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa5").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa5").show();      //显示预览图
                              $("#zximg5").val("http://dai.juhuaian.cn/Public/" +data);
                              $(".div-img1-3").css("display","block");
                              $("#img6an").css("display","block");
                              $("#img5an").css("display","none");
                            
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
  
      $("#up_photosa6").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa6');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa6").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa6").show();      //显示预览图
                              $("#zximg6").val("http://dai.juhuaian.cn/Public/" +data);
                              $(".div-img1-3").css("display","block");
                              $("#img7an").css("display","block");
                              $("#img6an").css("display","none");
                            
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
  
      $("#up_photosa7").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa7');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa7").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa7").show();      //显示预览图
                              $("#zximg7").val("http://dai.juhuaian.cn/Public/" +data);
                              $(".div-img1-3").css("display","block");
                              $("#img8an").css("display","block");
                              $("#img7an").css("display","none");
                            
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
  
      $("#up_photosa8").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa8');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa8").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa8").show();      //显示预览图
                              $("#zximg8").val("http://dai.juhuaian.cn/Public/" +data);
                              $(".div-img1-3").css("display","block");
                              $("#img9an").css("display","block");
                              $("#img8an").css("display","none");
                            
                            
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
  
      $("#up_photosa9").on("change",function(){
                    //用html方式上传

      var cont=new FormData($("#frmlogin")[0]); //转换成DOM方法
                    $.ajax({
                      url:"<?php echo U('Index/ajax_uploadsa9');?>",       //跳转至控制器
                      type:"POST",
                      data:cont,
                      dataType:"JSON",
                      cache:false,
                      processData:false,
                      contentType:false,
                      success:function(data){
                          if (data!=404) {
                              $("#img_thumbsa9").attr('src',"http://dai.juhuaian.cn/Public/" +data);
                              $("#img_thumbsa9").show();      //显示预览图
                              $("#zximg9").val("http://dai.juhuaian.cn/Public/" +data);
							  $("#img9an").css("display","none");
                          }else{
                              dialog.error(data);
                          }
                      },
                    });
				})
	</script>
      
</html>