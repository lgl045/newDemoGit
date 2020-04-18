<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>基本信息认证</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link type="text/css" href="/Public/sty/style.css" rel="stylesheet"/>
<link rel="stylesheet" href="/Public/sty/lv.css">
<link rel="stylesheet" type="text/css" href="/Public/sty/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/sty/web_rm.css"/>
<link rel="stylesheet" type="text/css" href="/Public/sty/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/sty/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/sty/dxfStyle.css"/>
<style>
  body{
    background: #efefef;
  }
  .card{
    margin-left: 20px;
    margin-right: 20px;
  }

        #content {
            background: linear-gradient(to bottom right, #f5f454, #fbd1b7);
        }

        .menu {
            display: block;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 70px;
            color: #474747;
            padding-top: 10px;
            border-top: 1px solid #eee;
            background-color: #fff;
        }

        .subMenu {
            width: 50%;
            float: left;
            cursor: pointer;
        }

        .menu_name {
            height: 30px;
            width: 100%;
            line-height: 30px;
        }

        img.menu_img {
            height: 24px;
            width: 24px;
        }

        img {
            vertical-align: middle;
            border: 0;
        }

        .active {
            color: #FFA129;
        }

        .text-center {
            text-align: center
        }
        .text-left{
          text-align: left;
        }
</style>



</head>
<body>

  <form action="/index.php/Home/Index/er " method="post">
    
       <input name="tjr" type="hidden" class="btn_money" value="<?php echo ($tjr); ?>" placeholder=""/>
    <div class="container-fluid mainBg" >
      <div class="row">
        <div class="col-xs-12 borrow_main">
          <div class="col-xs-12 text-center">
            <span style="font-size: 23px; color: #2ccfd9; ">基本信息认证</span>
          </div>
        </div>

          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*姓名:</span>
            </div>
            <div class="col-xs-9">
               <input name="name" id="name" class="btn_money" value="" placeholder="请填写您的真实姓名"/>
            </div>
          </div>

          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*性别:</span>
            </div>
            <div class="col-xs-9" style="width:50%;margin-left:13%;">
               <!--<input name="zname" class="btn_money" value="" placeholder="请填写您的性别"/>-->
               <select id="sex" class="btn_money select selectform-group-sm form-control" name="sex"/>
                  <option value="0">--请选择您的性别--</option>
             	  <option value="男">男</option>
              	  <option value="女">女</option>
               </select>  
            </div>
          </div>
      
    	  <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*现手机号:</span>
            </div>
            <div class="col-xs-9">
               <input name="newphone" id="newphone" class="btn_money" value="" placeholder="请填写您现在用的手机号"/>
            </div>
          </div>
      
         	  <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>老手机号:</span>
            </div>
            <div class="col-xs-9">
               <input name="lphone"  class="btn_money" value="" placeholder="请填写您的老手机号"/>
            </div>
          </div>
      
      
        <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*民族:</span>
            </div>
            <div class="col-xs-9">
               <input name="mz" id="mz" class="btn_money" value="" placeholder="请填写您的民族"/>
            </div>
          </div>
      
      
        <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*学历:</span>
            </div>
            <div class="col-xs-9">
               <input name="xl" id="xl" class="btn_money" value="" placeholder="请填写您的学历"/>
            </div>
          </div>
      
       <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*邮箱:</span>
            </div>
            <div class="col-xs-9">
               <input name="yx" id="yx" class="btn_money" value="" placeholder="请填写您邮箱"/>
            </div>
          </div>
      
      
      

          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*身份证号:</span>
            </div>
            <div class="col-xs-9">
               <input type="text" id="idcnu" name="idcnu" class="btn_money" oninput="if(value.length>18)value=value.slice(0,18)" value="" placeholder="请填写您的身份证号"/>
            </div>
          </div>


      </div>
    
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*身份证号有效期:</span>
            </div>
            <div class="col-xs-9">
               <input type="text" name="sfzyxq" class="btn_money" oninput="if(value.length>18)value=value.slice(0,18)" value="" placeholder="请填写您的身份证有效期"/>
            </div>
          </div>


         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*户籍地址:</span>
            </div>
            <div class="col-xs-9">
               <input type="text" id="hjdz" name="hjdz" class="btn_money" oninput="if(value.length>18)value=value.slice(0,18)" value="" placeholder="请填写您的户籍地址"/>
            </div>
          </div>
    
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*发证机关:</span>
            </div>
            <div class="col-xs-9">
               <input type="text" id="fzjg" name="fzjg" class="btn_money" oninput="if(value.length>18)value=value.slice(0,18)" value="" placeholder="请填写您的发证机关"/>
            </div>
          </div>
    
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*现住址:</span>
            </div>
            <div class="col-xs-9">
               <input type="text" id="xzz" name="xzz" class="btn_money" oninput="if(value.length>18)value=value.slice(0,18)" value="" placeholder="请填写您的现住址"/>
            </div>
          </div>
        <button type="submit"  onclick="yz()" class="form_con_03 com_bgcolor clearfix submit">下一步</button>
  </form>
<script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript">
  
  function yz(){
   var name= $("#name").val();
   var sex= $("#sex").val();
   var mz= $("#mz").val(); 
   var yx= $("#yx").val(); 
   var idcnu= $("#idcnu").val(); 
   var hjdz= $("#hjdz").val(); 
   var fzjg= $("#fzjg").val(); 
   var xzz= $("#xzz").val(); 
   var newphone= $("#newphone").val();
   var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
   var re = /^(1[3587][0-9]{9})$/;
    if(!name){
          alert("请您填写名字！")
          event.preventDefault();
       }else if(sex=="0"){
          alert("请选择性别！")
          event.preventDefault();
       }else if(!newphone){
          alert("请输入您的手机号！"); 
           event.preventDefault();
       }else if(re.test(newphone)==false){
          alert("您输入手机号码不合法！");   
           event.preventDefault();
       }else if(!mz){
          alert("请输入您的民族！");   
           event.preventDefault();   
       }else if(!yx){
          alert("请输入您的邮箱！");   
           event.preventDefault();   
       }else if(!idcnu){
          alert("请输入您的身份证号！");   
           event.preventDefault(); 
      }else if(!hjdz){
          alert("请输入您的户籍地址！");   
           event.preventDefault(); 
     }else if(!fzjg){
          alert("请输入您的发证机关！");   
           event.preventDefault(); 
     }else if(!xzz){
          alert("请输入您的现住址！");   
           event.preventDefault(); 
     }
  }
</script>

</body>
</html>