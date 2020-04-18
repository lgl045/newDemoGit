<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>快速注册</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no, email=no"/>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/layer.css"/>
    <script src="/Public/js/jquery-2.1.4.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/js/jquery.cookie.js"></script>
  
   
    <style type="text/css">
    	.rec{
    		color: #979797;
    width: 6.66rem;
    margin: 0 auto;
    border: none;
    font-size: 0.34rem;
    outline: none;
    height: 0.8rem;
    line-height: 0.8rem;
    text-align: center;
    border-bottom: 1px solid #ddd;
    padding-top: 0.45rem;
    display: block;
    	}
    </style>
  
<meta name="__hash__" content="12619c4a3503279786ef7cbe59e6cbee_12ba2f627f3aebefca458f9562e98b68" /></head>
<body class="">
<div class="login_bg">
    <img src="http://jy.juhuaian.cn/Public/img/bjs.png">
    <div>
        <div class="register_title" style="">
            
        </div>
        <div class="register_content">
            <div class="register_part2" style="display: block">
                <div class="item">
                    <input type="number" id="phonenum" placeholder="手机号码" oninput="if(value.length>11)value=value.slice(0,11)"
                           onkeyup="value = value.replace(/[^\d{2}\.]/g, '').replace(/(\.\d{2}).*/g, '$1')"/>
                </div>
                              <div class="item">
                    <input type="text" id="username" placeholder="用户名" maxlength="20"/>
                    <img class="icon_eye" src="/Public/picture/bkj.png"/>
                </div>
                <div class="item">
                    <input type="password" id="password" placeholder="密码6-20位字母数字组合" maxlength="20"/>
                    <img class="icon_eye" src="/Public/picture/bkj.png"/>
                </div>
                 <div class="item">
                    <input type="password" id="password2" placeholder="再次输入密码" maxlength="20"/>
                    <img class="icon_eye" src="/Public/picture/bkj.png"/>
                </div>
                <div class="item">
                    <input type="text" id="valicode" placeholder="短信验证码" maxlength="6"
                           onkeyup="value = value.replace(/[^\d{2}\.]/g, '').replace(/(\.\d{2}).*/g, '$1')"/>
                    <span onclick="yzm()" class="get_code" id="get_valicode">获取验证码</span>
                </div>
                <div style="text-align: center;" id="captcha_div"></div>
                
                <div class="referenceWrap">
                    
                    <div >
                      <input type="hidden" id="fid" value="<?php echo ($phone['phone']); ?>">
                        <div class="rec" >推荐人：<?php echo ($phone['phone']); ?></div>
                        <div class="recommendMessage"><span></span><span id="recommendName"></span></div>
                    </div>
                    <input type="hidden" name="tuid" id="tuid" value="3261">
                </div>
            
                <a href="javascript:;" onclick="yz()" class="register_btn disabled" style="text-align: center;margin-top: 10px;"
                   id="register_btn">立即注册</a>
              <a href="https://ff.lixiasoft.cn/app.php/5" class="register_btn disabled" style="text-align: center;margin-top: 10px;"
                   id="register_bt">立即下载</a>
               
                <div class="xieyi">
                  
                    <span   class="xieyiname">注册账户表示您同意<a href="#">《 注册协议》</a></span>
                </div>
            </div>
          
        </div>
    </div>
    <div class="modal" id="modal"  style="display: none;">
        <img src="/Public/picture/loading.svg" class="loadingImg" >
    </div>
</div>

</body>


<script src="/Public/js/layer.js" type="text/javascript" charset="utf-8"></script>
<!--头部-->

     <script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript"> 
  function yz(){

   var phone= $("#phonenum").val();
   var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
   var re = /^(1[3587][0-9]{9})$/;
   var password= $("#password").val();
   var password2= $("#password2").val();
       var username= $("#username").val();

   var valicode= $("#valicode").val();
       var fid= $("#fid").val();
  if(!phone){
        alert("请您输入手机号！")
        event.preventDefault();
     }else if(re.test(phone)==false){
        alert("您输入手机号码不合法！");   
         event.preventDefault();
      }else if(!username){
        alert("用户名不为空！");   
         event.preventDefault();
      }else if(!password){
        alert("密码不为空！"); 
         event.preventDefault();
     }else if(password != password2){
        alert("两次密码不一致！"); 
         event.preventDefault();
     }else if(!valicode){
        alert("请您输入验证码！");   
         event.preventDefault();
  }else{
    

           $.post("<?php echo U('Index/zcxx');?>",{phone:phone,password:password,yzm:valicode,username:username,fid:fid},function(data){
             
 
        if(data==505){
         alert("验证码错误！");
        }else if(data==100){
          alert("该手机号已存在！");
        }else if(data==200){
         window.location.href = "https://ff.lixiasoft.cn/app.php/5";
        }else{
        alert("注册失败！");
        }
      })
     
     }
  }
  
    function yzm(){
   var phone= $("#phonenum").val();
      $.post("<?php echo U('Index/yzm');?>",{phone:phone},function(data){

        if(data==0){
         alert("发送成功！")
        }else{
          alert("发送失败！")
        }
      })
    }

  
</script>
</html>