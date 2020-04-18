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

  <form action="/index.php/Home/Index/insdata" method="post">
    
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
         <input type="hidden"  name="tjr"  value="<?php echo ($tjr); ?>" />
    
    
    
    
    
    
    <div class="container-fluid mainBg" >
      <div class="row">
        <div class="col-xs-12 borrow_main">
          <div class="col-xs-12 text-center">
            <span style="font-size: 23px; color: #2ccfd9; ">联系人认证</span>
          </div>
        </div>

          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>直属亲属:</span>
            </div>
            <div class="col-xs-9">
               <input name="zsqs" id="zsqs" class="btn_money" value="" placeholder="请填写您的直属亲戚"/>
            </div>
          </div>
        
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>关系:</span>
            </div>
            <div class="col-xs-9">
               <input name="zsqsgx" id="zsqsgx" class="btn_money" value="" placeholder="请填写您的关系"/>
            </div>
          </div>
        
          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>手机号:</span>
            </div>
            <div class="col-xs-9">
               <input name="zsqsphone" id="zsqsphone" class="btn_money" value="" placeholder="请填写您的手机号"/>
            </div>
          </div>
        
        
              <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>旁系亲属:</span>
            </div>
            <div class="col-xs-9">
               <input name="pxqs" class="btn_money" value="" placeholder="请填写您的旁系亲属"/>
            </div>
          </div>
        
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>关系:</span>
            </div>
            <div class="col-xs-9">
               <input name="pxqsgx" class="btn_money" value="" placeholder="请填写您的关系"/>
            </div>
          </div>
        
          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>手机号:</span>
            </div>
            <div class="col-xs-9">
               <input name="pxqsphone" id="zsqs" class="btn_money" value="" placeholder="请填写您的手机号"/>
            </div>
          </div>
        
        
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>其他:</span>
            </div>
            <div class="col-xs-9">
               <input name="qt" class="btn_money" value="" placeholder="请填写您的旁系亲属"/>
            </div>
          </div>
        
         <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>关系:</span>
            </div>
            <div class="col-xs-9">
               <input name="qtgx" class="btn_money" value="" placeholder="请填写您的关系"/>
            </div>
          </div>
        
          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>手机号:</span>
            </div>
            <div class="col-xs-9">
               <input name="qtphone" class="btn_money" value="" placeholder="请填写您的手机号"/>
            </div>
          </div>
        
        
        
        
           <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>芝麻分:</span>
            </div>
            <div class="col-xs-9">
               <input name="zmf" id="zmf" class="btn_money" value="" placeholder="请填写您的芝麻分"/>
            </div>
          </div>
        
           <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>已做网贷:</span>
            </div>
            <div class="col-xs-9">
            <textarea name="yzwd" >
			</textarea>
            </div>
          </div>
        
              <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>已做贷款:</span>
            </div>
            <div class="col-xs-9">
            <textarea name="yzdk" >
			</textarea>
            </div>
          </div>
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>已有信用卡:</span>
            </div>
            <div class="col-xs-9">
              
              <textarea name="yyxyk" >
			</textarea>

            </div>
          </div>
        
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>额度:</span>
            </div>
            <div class="col-xs-9">
               <input name="ed" id="ed" class="btn_money" value="" placeholder="请填写您的额度"/>
            </div>
          </div>
        
              </div>
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>已下贷款信用卡网贷:</span>
            </div>
            <div class="col-xs-9">
               <input name="ppcp" class="btn_money" value="" placeholder="已下贷款信用卡网贷"/>
            </div>
          </div>
        
      </div>
                   


          
        <button type="submit"  onclick="yz();" class="form_con_03 com_bgcolor clearfix submit">下一步</button>
  </form>




<script src="/Public/js/jquery.1.7.2.min.js"></script>
<script type="text/javascript">
  
  function yz(){
   var zsqs= $("#zsqs").val();
   var zsqsgx= $("#zsqsgx").val();
   var zsqsphone= $("#zsqsphone").val(); 
    var zmf= $("#zmf").val(); 
 
      var ed= $("#ed").val(); 
   
   if(!zsqs){
         alert("请您填写直属亲属！")
         event.preventDefault();
      }else if(!zsqsgx){
         alert("请您填写直属亲属关系！")
         event.preventDefault();
      }else if(!zsqsphone){
         alert("请您填写直属亲属手机号！"); 
          event.preventDefault();
      }else if(!zmf){
         alert("请输入您的芝麻分！");   
          event.preventDefault(); 
      }else if(!ed){
    alert("请输入您的额度！");   
          event.preventDefault(); 
    }
 }
</script>


</body>
</html>