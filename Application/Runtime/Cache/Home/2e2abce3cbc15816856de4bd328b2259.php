<?php if (!defined('THINK_PATH')) exit();?><html data-dpr="1" style="font-size: 45.8px;">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
    <script></script>
    <title>注册</title>
    <link href="/Public/app.2336808bf000f8dcec2e1d01a4bda3d8.css" rel="stylesheet">
  </head>
  <body style="font-size: 12px;">
    <form action="/index.php/Home/Index/baoliadd" method="post"  enctype="multipart/form-data">
    <div id="app">
      <div class="main reg other-main">
        <img src="http://oyb81k5lr.bkt.clouddn.com/%E4%BF%9D%E5%8D%95%E8%B4%B7%E6%AC%BE12.jpg" onclick="javascript:return false">
        <div class="main-view">
          <div class="input">
            <div class="input-item">
              <img src="https://dxjk.oss-cn-hangzhou.aliyuncs.com//jyp_login_input_1.png">
              <input type="tel" placeholder="请输入手机号" maxlength="11" name="phone"></div>
            <div class="input-item vecode">
              <img src="https://dxjk.oss-cn-hangzhou.aliyuncs.com//jyp_login_input_2.png">
              <input type="text" placeholder="请输入姓名" name="name">
            </div>
            <div class="input-item password">
              <img src="https://dxjk.oss-cn-hangzhou.aliyuncs.com//jyp_login_input_4.png">
              <input type="text" placeholder="请输入身份证号" name="idcard">
            </div>
            <div class="input-item">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_21.png">
              <input type="text" placeholder="请输入推荐人姓名" name="tjrname"></div>
            <div class="input-item vecode">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_31.png">
              <input type="tel" placeholder="请输入推荐人手机号" maxlength="11" name="tjrphone">
            </div>
            <div class="input-item password">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_11.png">
              <input type="text" placeholder="请输入保险机构名称" name="baoxian">
            </div>
            <div class="input-item password" style="display:none;">
              <img src="http://oyb81k5lr.bkt.clouddn.com/jyp_login_input_11.png">
              <input type="text" placeholder="city" name="city" value="<?php echo ($city); ?>">
            </div>
            <div class="flex agreement-box">
              <div> </div></div></div></div> 
        <button type="submit" class="next-btn">提交</button>
        </form>
  </body>
      
</html>