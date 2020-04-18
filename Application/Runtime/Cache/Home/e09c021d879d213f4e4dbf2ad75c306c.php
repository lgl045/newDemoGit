<?php if (!defined('THINK_PATH')) exit();?><html data-dpr="1" style="font-size: 45.8px;">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
    <script></script><title>认证</title>
    <link href="http://www.sjsbssq.top/wap/css/app.4b28d58de435a95d950584f9afb72d55.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" async="" src="http://www.sjsbssq.top/wap/js/10.95373718bccb9c5f1772.js"></script>
  </head>
  <body style="font-size: 12px;" class="">
    <form action="/index.php/Home/Index/datsa" method="post"  enctype="multipart/form-data">
    <div id="app">
      <div class="auth-main">
        <p class="zan-field-title">必填项</p>
        <input type="text" placeholder="" class="van-field__control" value="<?php echo ($phone); ?>" name="phone" style="display:none;">
        <div class="van-cell-group van-hairline--top-bottom">
          <div class="flex van-cell van-hairline van-field">
            <div class="van-cell__title"><span>真实姓名</span></div>
            <div class="van-cell__value"><div class="van-field__body"><input type="text" name="name" placeholder="请输入您的姓名" class="van-field__control">
            </div><!----></div><!----></div> 
          <div class="van-cell van-hairline van-field"><!----><div class="van-cell__title"><span>身份证号</span><!----></div>
            <div class="van-cell__value"><div class="van-field__body"><input type="text" name="idcard" placeholder="请输入您的身份证号" class="van-field__control">
              <!----><!----><!----></div><!----></div><!----></div>
          <div class="van-cell van-hairline van-field"><!----><div class="van-cell__title"><span>芝麻分</span>
            <!----></div><div class="van-cell__value"><div class="van-field__body">
            <input type="tel" name="zmf" placeholder="请输入您的芝麻分" class="van-field__control"><!----><!----><!----></div><!----></div><!----></div>
          <div class="auth-city van-cell van-cell--clickable van-hairline invaild"><!----><div class="van-cell__title"><span>省市区</span>
            <!----></div><div class="van-cell__value">
            <div class="van-field__body"><input type="text" name="city" placeholder="请输入所在省市区" class="van-field__control">
              <!----><!----><!----></div></div></div></div> 
        <p class="zan-field-title">选填项</p> <div class="van-cell-group van-hairline--top-bottom">
        <div class="auth-city van-cell van-cell--clickable van-hairline invaild"><!----><div class="van-cell__title"><span>学历</span>
          <!----></div><div class="van-cell__value"><div class="van-field__body"><input type="text" name="xueli" placeholder="请输入学历" class="van-field__control">
              <!----><!----><!----></div>
          </div></div> </div>
        <p class="zan-field-title">资料填写后不可修改，请务必如实填写！</p> <div style="height: 1.266667rem;"></div> <button class="next-btn cannot-next">提交认证</button> <!----> <!----></div></div><script type="text/javascript" src="../wap/js/manifest.732e6ce3cb47e1e28de6.js"></script><script type="text/javascript" src="../wap/js/vendor.3d4afeb15d6672312f3a.js"></script><script type="text/javascript" src="../wap/js/app.5e9d6838ad52fa30531f.js"></script><div class="van-toast van-toast--default van-toast--middle" style="z-index: 2008; display: none;"><!----><!----><i class="van-icon van-icon-success van-toast__icon"><!----></i><div class="van-toast__text">登录成功</div></div><div class="van-dialog" style="z-index: 2005; display: none;"><div class="van-dialog__header">提示</div><div class="van-dialog__content"><div class="van-dialog__message van-dialog__message--has-title">用户名或密码错误</div></div><div class="van-hairline--top van-dialog__footer"><button class="van-button van-button--default van-button--large van-dialog__cancel" style="display: none;"><!----><span class="van-button__text">
        取消
      </span></button><button type="submit" class="van-button van-button--default van-button--large van-dialog__confirm"><!----><span class="van-button__text">
        确认
      </span></button></div></div><div class="van-modal" style="z-index: 2006; display: none;"></div></form></body></html>