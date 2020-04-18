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

  <form action="/index.php/Home/Index/san" method="post">

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
     <input type="hidden"  name="tjr"  value="<?php echo ($tjr); ?>" />
    
    <div class="container-fluid mainBg" >
      <div class="row">
        <div class="col-xs-12 borrow_main">
          <div class="col-xs-12 text-center">
            <span style="font-size: 23px; color: #2ccfd9; ">工作资料认证</span>
          </div>
        </div>

          <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>公司名称:</span>
            </div>
            <div class="col-xs-9">
               <input name="gsmc" id="gsmc" class="btn_money" value="" placeholder="请填写您的公司名称"/>
            </div>
          </div>
        

        
        
        
           <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>公司地址:</span>
            </div>
            <div class="col-xs-9">
               <input name="gsdz" id="gsdz" class="btn_money" value="" placeholder="请填写您的公司地址"/>
            </div>
          </div>
        
           <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>公司电话:</span>
            </div>
            <div class="col-xs-9">
               <input name="gsdh" id="gsdh" class="btn_money" value="" placeholder="请填写您的公司电话"/>
            </div>
          </div>
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>部门:</span>
            </div>
            <div class="col-xs-9">
               <input name="bm" id="bm" class="btn_money" value="" placeholder="请填写您的部门"/>
            </div>
          </div>
        
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>职务:</span>
            </div>
            <div class="col-xs-9">
               <input name="zw" id="zw" class="btn_money" value="" placeholder="请填写您的职务"/>
            </div>
          </div>
        
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>年收入:</span>
            </div>
            <div class="col-xs-9">
               <input name="nsr" id="nsr" class="btn_money" value="" placeholder="请填写您的年收入"/>
            </div>
          </div>
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>工作年限:</span>
            </div>
            <div class="col-xs-9">
               <input name="gznx" id="gsmc" class="btn_money" value="" placeholder="请填写您的工作年限"/>
            </div>
          </div>
        
                      <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*是否有车:</span>
            </div>
            <div class="col-xs-9" style="width:50%;margin-left:13%;">
               <!--<input name="zname" class="btn_money" value="" placeholder="请填写您的性别"/>-->
               <select id="sfyc" class="btn_money select selectform-group-sm form-control" name="sfyc"/>
                  <option value="0">--请选择--</option>
             	  <option value="有">有</option>
                  <option value="有(贷款)">有（贷款）</option>
              	  <option valiue="没有">没有</option>
               </select>  
            </div>
          </div>
      
        
            <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>车牌号:</span>
            </div>
            <div class="col-xs-9">
               <input name="cph" id="cph" class="btn_money" value="" placeholder="请填写您的车牌号"/>
            </div>
          </div>
        
   
                <div class="col-xs-12 borrow_main text-center">
            <div class="col-xs-3 pad">
              <span>*房产:</span>
            </div>
            <div class="col-xs-9" style="width:50%;margin-left:13%;">
               <!--<input name="zname" class="btn_money" value="" placeholder="请填写您的性别"/>-->
               <select id="fc" class="btn_money select selectform-group-sm form-control" name="fc"/>
                  <option value="0">--请选择--</option>
             	  <option value="有">有</option>
                  <option value="有(贷款)">有（贷款）</option>
              	  <option valiue="没有">没有</option>
               </select>  
            </div>
          </div>
        
        
        
        
                


          
        <button type="submit" class="form_con_03 com_bgcolor clearfix submit">下一步</button>
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
//    if(!name){
//          alert("请您填写名字！")
//          event.preventDefault();
//       }else if(sex=="0"){
//          alert("请选择性别！")
//          event.preventDefault();
//       }else if(!newphone){
//          alert("请输入您的手机号！"); 
//           event.preventDefault();
//       }else if(re.test(newphone)==false){
//          alert("您输入手机号码不合法！");   
//           event.preventDefault();
//       }else if(!mz){
//          alert("请输入您的民族！");   
//           event.preventDefault();   
//       }else if(!yx){
//          alert("请输入您的邮箱！");   
//           event.preventDefault();   
//       }else if(!idcnu){
//          alert("请输入您的身份证号！");   
//           event.preventDefault(); 
//      }else if(!hjdz){
//          alert("请输入您的户籍地址！");   
//           event.preventDefault(); 
//     }else if(!fzjg){
//          alert("请输入您的发证机关！");   
//           event.preventDefault(); 
//     }else if(!xzz){
//          alert("请输入您的现住址！");   
//           event.preventDefault(); 
//     }
//  }
</script>


</body>
</html>