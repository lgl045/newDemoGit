<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="applicable-device" content="pc" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>关于正在共享APP_联系正在共享APP【正在共享网】</title>
  <meta name="keywords" content="正在共享APP,关于正在共享,联系正在共享" />
  <meta name="description" content="正在共享APP隶属于山东正在信息科技有限公司,是一款人人都可以买卖个性化服务的平台型产品,“正在共享APP”是一个时间售卖与技能交易的平台,致力于帮助更多有时间或有服务的人迅速变现!" />
  <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.iyuedan.com/about/" />
  <meta http-equiv="mobile-agent" content="format=html5; url=https://m.iyuedan.com/about/" />
  <link rel="stylesheet" href="/Public/css/idangerous.swiper.css" />
  <link rel="stylesheet" href="/Public/css/common.min.css" />
  <link rel="stylesheet" href="/Public/css/about.min.css" />
  <style rel="stylesheet">.esc{display:inline-block;width:1px;height:1px;font-size:8px;color:transparent;overflow:hidden;}</style>
  <!--//百度推送代码-->
  <script>(function(){var bp=document.createElement('script');var curProtocol=window.location.protocol.split(':')[0];if(curProtocol==='https'){bp.src='https://zz.bdstatic.com/linksubmit/push.js';}else{bp.src='http://push.zhanzhang.baidu.com/push.js';}var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(bp,s);})();</script>
  <script type="application/javascript">function uname(uname){var name=unescape(uname);var str='',len=uname.length;for(var i=0;i<name.length;i++){ var n = Math.floor(Math.random()*(len-0+1)+0); var esc = uname.split("").sort(function(){ return 0.5 - Math.random()}).join("");
                str += name[i]+'<s class="esc">'+esc.substr(0,n)+'</s>';}document.write(unescape(str));}</script>
  <script>(function(){var src=(document.location.protocol=="http:")? "http://js.passport.qihucdn.com/11.0.1.js?c90dcac35754b2a0bc58d6ac0a4fe95b":"https://jspassport.ssl.qhimg.com/11.0.1.js?c90dcac35754b2a0bc58d6ac0a4fe95b";document.write('<script src="' + src + '" id="sozz"><\/script>');})();</script>
 </head>
 <body>
  <!--[if lte IE 8]><style type="text/css">#errorie,#errorie div{display:block;}#errorie{padding:30px 0;background:#FCF8E3;}#errorie div{width:900px;margin:0 auto;line-height:26px;color:orange;font-size:18px;}#errorie div a{color:#459f79;font-size:18px;}#errorie div a:hover{text-decoration:underline;}#errorie div a span{font-size:30px;color:red;}#dowebok,#fp-nav{display:none;}</style><div id="errorie"><div>您所使用的IE浏览器版本过旧，为了您获得更好的浏览体验，请升级您的浏览器到<a href='https://www.baidu.com/s?ie=UTF-8&wd=%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8' target='_blank' style='color:blue;'>谷歌</a>，<a href='https://www.baidu.com/s?ie=UTF-8&wd=%E7%81%AB%E7%8B%90%E6%B5%8F%E8%A7%88%E5%99%A8' target='_blank' style='color:blue;'>火狐</a></div></div><![endif]-->
  <div id="com_main" data-login="0">
   <header class="common_header" id="com_head">
    <div class="com_shade" v-show="isShade" v-cloak=""></div>
    <div class="top">
     <div class="top_text">
      <p class="toggle_city"><span><a href="#city/">北京</a></span><span><a href="#city/">切换城市</a></span></p>
      <p class="com_login"><span class="mobile" @click="mobilecode(&quot;Android&quot;)">手机正在共享</span><span class="com_deng" @click="dialog(&quot;login&quot;)">登录</span><span class="register" @click="dialog(&quot;reg&quot;)">注册</span></p>
     </div>
    </div>
    <div class="nav">
     <img src="/Public/img/logo.jpg" alt="正在共享网" class="logo" width="48" height="48" />
     <span class="home_want">让天下的服务随叫随到</span>
     <ul class="home_list">
      <li><a href="/index.php/Home/Index/index" rel="nofollow"><span>首页</span></a></li>
      <li><a href="/index.php/Home/Index/classify" rel="nofollow"><span>服务分类</span></a></li>
      <li><a href="/index.php/Home/Index/recruit.html" rel="nofollow"><span>达人招募</span></a></li>
      <li><a href="/index.php/Home/Index/security.html" rel="nofollow"><span>服务保障</span></a></li>
      <li class="home_active"><a href="/index.php/Home/Index/about.html" rel="nofollow"><span>关于我们</span></a></li>
     </ul>
     <div class="load">
      <div class="loaded" @click="mobilecode(&quot;iPhone&quot;)">
       <img src="https://i.3km.biz/www/images/shouye/iphone.png" alt="正在共享iphone下载" width="64" height="64" />
       <p>IPhone版</p>
      </div>
      <div class="loaded" @click="mobilecode(&quot;Android&quot;)">
       <img src="https://i.3km.biz/www/images/shouye/android.png" alt="正在共享android下载" width="64" height="64" />
       <p>Android版</p>
      </div>
      <div class="loaded" @click="mobilecode(&quot;chat&quot;)">
       <img src="https://i.3km.biz/www/images/shouye/weixin.png" alt="关注正在共享公众号" width="64" height="64" />
       <p>关注公众号</p>
      </div>
     </div>
    </div>
   </header>
   <section>
    <div class="about_section">
     <div class="directory">
      <p><a href="#">正在共享网</a><span style="color: #666">&gt;</span><a href="#about/">关于我们</a></p>
     </div>
     <div class="about_banner" style="background-image: url(/Public/img/about_banner.jpg);"></div>
     <div class="about_us">
      <h4 class="about_tit" id="about">关于我们</h4>
      <h5 class="about_eng">ABOUT YUEDAN</h5>
      <p>正在共享APP是一款把“人”拿出来共享的APP，在这里人人都可以买卖个性化服务，让技能变现、时间变现、资源变现等等，让天下的服务随叫随到。正在共享APP,在国家倡导“万众创业，共享经济”的时代背景下诞生的，是目前国内最大的共享撮合平台，享有移动互联网“共享经济第一黑马“之美誉，被业界称为“人的淘宝”“多功能版的滴滴打车”“互联网行业最后一块蛋糕”。正在共享APP创始团队来自腾讯、网易、新浪等知名互联网公司，在智能匹配算法、大数据等领域积累有多年经验</p>
     </div>
     <div class="about_app">
      <div class="about_jieshao">
       <h4 class="about_tit">正在共享APP</h4>
       <h5>YUEDAN APPLICATION</h5>
       <div class="about_content">
        <img src="https://i.3km.biz/www/images/about/about_pic1.png" alt="" width="447" height="336" />
        <div class="about_word">
         <p>“正在共享”是一个时间售卖与技能交易的平台，致力于帮助更多有时间或有服务的人迅速变现！ 如果你有需求：这里有超700万的服务达人，你可以任意购买Ta的时间或服务，快速约到Ta！ 如果你有时间或服务：这里有超6000万的用户每日数万个需求排队找你，帮你实现当老板梦想！</p>
         <p>“正在共享”响应国家号召，倡导后台实名前台自愿的原则，每一个用户都必须通过实名认证的手机号码进行注册，通过身份认证、服务认证、微博认证（实名认证）、支付宝绑定认证（实名认证），微信支付绑定认证（实名认证）等5项措施确保用户的身份真实，而为用户之间提供更强的信用支持。</p>
        </div>
       </div>
      </div>
     </div>
     <div class="about_feature">
      <h4 class="about_tit">正在共享特色</h4>
      <h5 class="about_eng">CHARACTERISTIC ABOUT YUEDAN</h5>
      <div class="about_advantage">
       <div class="about_differ">
        <span class="differ_icon1"></span>
        <h2 class="differ_tit">专业服务多</h2>
        <p>11大类别上千种服务品类可以发布</p>
       </div>
       <div class="about_differ">
        <span class="differ_icon2"></span>
        <h2 class="differ_tit">安全有保障</h2>
        <p>身份证认证、服务认证、定金交易，三重保障更安全</p>
       </div>
       <div class="about_differ">
        <span class="differ_icon3"></span>
        <h2 class="differ_tit">按附近查找</h2>
        <p>通过手机LBS和雷达扫描迅速定位，找到最近服务者</p>
       </div>
       <div class="about_differ">
        <span class="differ_icon4"></span>
        <h2 class="differ_tit">按需求定制</h2>
        <p>需求发布后，正在共享会为用户匹配愿意为其服务的服务达人</p>
       </div>
       <div class="about_differ">
        <span class="differ_icon5"></span>
        <h2 class="differ_tit">诚意金模式</h2>
        <p>预付诚意金可用于消费并体现需求诚意，帮助您更快的约到想要的服务。</p>
       </div>
      </div>
     </div>
     <!--<div class="about_course"><div class="about_history"><h4 class="about_tit">发展历程</h4><h5 class="about_eng about_top">DEVELOPING PROCESS</h5><div class="about_node"><h6>正在共享APP2.6.1版本发布</h6><p>通过手机LBS和雷达扫描迅速定位，找到最近服务者</p><div class="about_date"><h3>01.23</h3><h4>2017</h4></div></div><div class="about_node about_left"><h6>正在共享APP2.6.1版本发布</h6><p>通过手机LBS和雷达扫描迅速定位，找到最近服务者</p><div class="about_date about_even"><h3>01.23</h3><h4>2017</h4></div></div><div class="about_node"><h6>正在共享APP2.6.1版本发布</h6><p>通过手机LBS和雷达扫描迅速定位，找到最近服务者</p><div class="about_date"><h3>01.23</h3><h4>2017</h4></div></div><div class="about_node about_left"><h6>正在共享APP2.6.1版本发布</h6><p>通过手机LBS和雷达扫描迅速定位，找到最近服务者</p><div class="about_date about_even"><h3>01.23</h3><h4>2017</h4></div></div></div></div>-->
     <div class="about_contact">
      <h4 class="about_tit" id="contact">联系正在共享</h4>
      <h5 class="about_eng about_top">CONTACT US</h5>
      <img src="/Public/img/about_map.jpg" class="about_map" alt="" width="530" height="235" />
      <div class="about_info">
       <ul>
        <li>山东正在信息科技有限公司</li>
        <li>联络邮箱：vip2027@126.com</li>
        <li>联络邮箱：vip141319@126.com</li>
        <li>客服电话：0531-8176-5128</li>
        
        <li></li>
       </ul>
       <p>扫描下载正在共享APP</p>
      </div>
     </div>
    </div>
    <div class="city">
     <div class="fire">
      <h3>热门城市</h3>
      <ul>
       <li><a href="#bj/">北京正在共享</a></li>
       <li><a href="#sh/">上海正在共享</a></li>
       <li><a href="#gdsc/">深圳正在共享</a></li>
       <li><a href="#zjhz383/">杭州正在共享</a></li>
       <li><a href="#gdgz/">广州正在共享</a></li>
       <li><a href="#sccd/">成都正在共享</a></li>
       <li><a href="#jssz/">苏州正在共享</a></li>
       <li><a href="#tj/">天津正在共享</a></li>
       <li><a href="#zq/">重庆正在共享</a></li>
       <li><a href="#hnzz149/">郑州正在共享</a></li>
       <li><a href="#hbwh/">武汉正在共享</a></li>
       <li><a href="#jsnj/">南京正在共享</a></li>
       <li><a href="#fjsm/">厦门正在共享</a></li>
       <li><a href="#sdjn283/">济南正在共享</a></li>
       <li><a href="#sxxa/">西安正在共享</a></li>
       <li><a href="#ynkm/">昆明正在共享</a></li>
       <li><a href="#hncs/">长沙正在共享</a></li>
       <li><a href="#sdqd/">青岛正在共享</a></li>
       <li><a href="#gddg/">东莞正在共享</a></li>
       <li><a href="#fjfz/">福州正在共享</a></li>
       <li><a href="#lnsy/">沈阳正在共享</a></li>
       <li><a href="#lndl/">大连正在共享</a></li>
       <li><a href="#jlcc/">长春正在共享</a></li>
       <li><a href="#hnsy121/">三亚正在共享</a></li>
       <li><a href="#gxnn/">南宁正在共享</a></li>
       <li><a href="#qhxn/">西宁正在共享</a></li>
       <li><a href="#sxty/">太原正在共享</a></li>
       <li><a href="#gslz/">兰州正在共享</a></li>
       <li><a href="#gzgy/">贵阳正在共享</a></li>
       <li><a href="#jxnc/">南昌正在共享</a></li>
       <li><a href="#hljheb/">哈尔滨正在共享</a></li>
       <li><a href="#hbsjz/">石家庄正在共享</a></li>
      </ul>
     </div>
     <div class="fire">
      <h3>热门推荐</h3>
      <ul>
       <li><a href="#bj/mote/">北京模特</a></li>
       <li><a href="#bj/meifa/">北京美发</a></li>
       <li><a href="#bj/daoyou/">北京导游</a></li>
       <li><a href="#bj/yinyue/">北京音乐</a></li>
       <li><a href="#bj/sheying/">北京摄影</a></li>
       <li><a href="#bj/meizhuang/">北京美妆</a></li>
       <li><a href="#bj/wudao/">北京舞蹈</a></li>
       <li><a href="#bj/jianshen/">北京健身</a></li>
       <li><a href="#bj/jiaoyou/">北京交友</a></li>
       <li><a href="#bj/huaxue/">北京滑雪</a></li>
       <li><a href="#bj/youyong/">北京游泳</a></li>
       <li><a href="#bj/wenshen/">北京纹身</a></li>
       <li><a href="#bj/meijia/">北京美甲</a></li>
       <li><a href="#bj/zuliao/">北京足疗</a></li>
       <li><a href="#bj/yuesao/">北京月嫂</a></li>
       <li><a href="#bj/jiajiao/">北京家教</a></li>
       <li><a href="#bj/jiaoyupeixun/">北京培训</a></li>
       <li><a href="#bj/liuxue/">北京留学</a></li>
       <li><a href="#bj/caizhai/">北京采摘</a></li>
       <li><a href="#bj/piaoliu/">北京漂流</a></li>
       <li><a href="#bj/yujia/">北京瑜伽</a></li>
       <li><a href="#bj/meirong/">北京美容</a></li>
       <li><a href="#bj/baojie/">北京保洁</a></li>
       <li><a href="#bj/youjiao/">北京幼教</a></li>
       <li><a href="#bj/bangbanjia/">北京搬家</a></li>
       <li><a href="#bj/nanshispa/">北京男士SPA</a></li>
       <li><a href="#bj/zhongdianfang/">北京钟点房</a></li>
       <li><a href="#bj/hezufang/">北京合租房</a></li>
       <li><a href="#bj/duanzufang/">北京短租房</a></li>
       <li><a href="#bj/nongjiale/">北京农家乐</a></li>
       <li><a href="#bj/kongdiaoweixiu/">北京空调维修</a></li>
       <li><a href="#bj/pingmiansheji/">北京平面设计</a></li>
      </ul>
     </div>
    </div>
   </section>
   <footer class="common_footer">
    <div class="footer">
     <div class="the_foot">
      <img src="/Public/img/logo.jpg" alt="正在共享网"  width="48" height="48"  class="logo" />
      <strong>中国优秀的个人技能交易平台</strong>
      <p>vip141319@126.com</p>
     </div>
     <ul>
      <li><h4>关于正在共享</h4></li>
      <li><a href="#about/" rel="nofollow">关于我们</a></li>
      <li><a href="#about/" rel="nofollow">联系我们</a></li>
     </ul>
     <ul>
      <li><h4>新手引导</h4></li>
      <li><a href="#help/" rel="nofollow">帮助中心</a></li>
      <li><a href="#guide-demand/" rel="nofollow">我是需求者</a></li>
      <li><a href="#guide-service/" rel="nofollow">我是服务者</a></li>
     </ul>
     <ul>
      <li><h4>常见问题</h4></li>
      <li><a href="#audit/" rel="nofollow">如何进行身份认证？</a></li>
      <li><a href="#damand/" rel="nofollow">如何选择适合的服务者？</a></li>
      <li><a href="#skill/" rel="nofollow">如何成为服务者？</a></li>
     </ul>
     <ul>
      <li><h6>下载正在共享APP</h6></li>
      <!-- <li class="foot_ma"><img src="https://i.3km.biz/www/images/shouye/code.png" alt="下载正在共享APP" width="121" height="121" /></li> -->
     </ul>
    </div>
    <p class="adress">&copy;2015-2019 正在共享 鲁ICP备15011114号-1</p>
   </footer>
   <div class="com_shade" v-show="isShade" v-cloak=""></div>
   <div class="com_load" v-if="ismobilecode" v-cloak="">
    <div class="com_down">
     <div :class="isscan_public ? 'com_mobile scan_public' : 'com_mobile'">
      <div class="scan_code">
       <span class="row1"></span>
       <span class="row2"></span>
       <span class="row3"></span>
       <span class="row4"></span>
      </div>
     </div>
     <p v-text="mobilecodemsg"></p>
     <div class="com_state">
      <p>汇集400个城市300万服务达人</p>
      <p>让您无论身处何地都能乐享正在共享服务</p>
      <button @click="dialog(&quot;reg&quot;)"><span>快速注册</span></button>
      <i></i>
     </div>
    </div>
    <div class="close clo_special" @click="close()"></div>
   </div>
   <div class="dialog" v-if="isdialog" v-cloak="">
    <div class="detail_info">
     <div class="detail_load">
      <div class="com_down">
       <div :class="isregclass ? 'com_mobile enroll_mobile' : 'com_mobile'">
        <div class="scan_code">
         <span class="row1"></span>
         <span class="row2"></span>
         <span class="row3"></span>
         <span class="row4"></span>
        </div>
        <p class="login_mobile">手机扫码下载客户端</p>
       </div>
       <div class="com_state login_state">
        <p>汇集400个城市300万服务达人</p>
        <p>让您无论身处何地都能乐享正在共享服务</p>
       </div>
      </div>
     </div>
     <div class="login_list" v-if="isLogin" v-cloak="">
      <h2>登录正在共享</h2>
      <p class="error_info" v-if="iserror" v-text="errorinfo" v-cloak=""></p>
      <input type="text" autocomplete="off" placeholder="请输入手机号码" maxlength="11" class="phone" v-model="mobile" />
      <input type="password" autocomplete="new-password" placeholder="请输入密码" class="pwd" maxlength="20" v-model="password" />
      <p class="free"><span class="checked"></span></p>
      <button @click="login()">立即登录</button>
      <p class="com_none register" @click="dialog(&quot;reg&quot;)">没有账号?<span>立即注册</span>享百元正在共享红包</p>
     </div>
     <div class="enroll_list" v-else-if="isReg" v-cloak="">
      <h2>注册正在共享<span>注册立送百元正在共享红包</span></h2>
      <p class="error_info" v-if="iserror" v-text="errorinfo" v-cloak=""></p>
      <input type="text" autocomplete="off" placeholder="请输入手机号码" class="number" maxlength="11" v-model="mobile" />
      <p class="verify"><input type="text" autocomplete="off" placeholder="请输入右侧验证码" v-model="vcode" /><img :src="captcha.img" onclick="this.src='#/www/sign/captcha/?v='+ new Date().getTime()" /></p>
      <p class="check"><input type="text" autocomplete="off" placeholder="请输入验证码" v-model="checkcode" /><button @click="getsms()" class="getsms" :disabled="isdisabled" v-text="smsinfo"></button></p>
      <input type="password" autocomplete="new-password" placeholder="请输入密码" class="enroll_pwd password" maxlength="20" v-model="password" />
      <p class="com_remind"><input type="checkbox" id="checked" class="checked" v-model="checkbox" /><label for="checked">注册即表示同意并遵守</label><a href="#agreement/">《正在共享使用协议》</a></p>
      <button @click="register()">立即注册</button>
      <p class="com_bank">已有账号?<em class="com_deng" @click.stop="dialog(&quot;login&quot;)">立即登录</em></p>
     </div>
    </div>
    <div class="close" @click="close()"></div>
   </div>
  </div>
  <script src="/Public/js/jquery-1.10.2.min.js"></script>
  <script src="/Public/js/jquery.lazyload.min.js"></script>
  <script src="/Public/js/idangerous.swiper.min.js"></script>
  <script src="/Public/js/vue.min.js"></script>
  <script src="/Public/js/common.js"></script>
  <script src="/Public/js/statistical.js"></script>
  <b style="display:none"><script src="//s4.cnzz.com/z_stat.php?id=1260446014&amp;web_id=1260446014"></script></b>
 </body>
</html>