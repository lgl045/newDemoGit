<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="applicable-device" content="pc" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>正在共享网服务保障【正在共享网】</title>
  <meta name="keywords" content="服务保障,隐私信息保护,保障交易安全" />
  <meta name="description" content="正在共享服务平台是一个供用户发布、交流和提供服务的信息交易平台.为了更好的为您服务,“正在共享”根据国家相关法律、法规,竭诚为您打造一个安全真实的时间与技能交易平台,保护您的合法权益." />
  <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.iyuedan.com/security/" />
  <meta http-equiv="mobile-agent" content="format=html5; url=https://m.iyuedan.com/security/" />
  <link rel="stylesheet" href="/Public/css/idangerous.swiper.css" />
  <link rel="stylesheet" href="/Public/css/common.min.css" />
  <link rel="stylesheet" href="/Public/css/security.min.css" />
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
      <li class="home_active"><a href="/index.php/Home/Index/security.html" rel="nofollow"><span>服务保障</span></a></li>
      <li><a href="/index.php/Home/Index/about.html" rel="nofollow"><span>关于我们</span></a></li>
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
    <div class="security_section">
     <div class="directory">
      <p><a href="#">正在共享网</a><span style="color: #666">&gt;</span><a href="#security/">服务保障</a></p>
     </div>
     <div class="security_banner" style="background-image: url(/Public/img/security_banner.jpg);"></div>
     <div class="security_main">
      <h2>亲爱的用户，欢迎并感谢使用“正在共享”服务平台”（以下称“正在共享”）。“服务平台是一个供用户发布、交流和提供服务的信息交易平台。</h2>
      <p>为了更好的为您服务，“正在共享”根据国家相关法律、法规，竭诚为您打造一个安全真实的时间与技能交易平台，保护您的合法权益。为此，“正在共享”特别采取了以下措施，请您务必仔细阅读。</p>
      <h2>第一条 用户隐私信息保护</h2>
      <p>“正在共享”从技术手段，到数据调取流程制度采取多个举措，保障用户信息安全，并制定了严格的用户信息保密制度。</p>
      <p>1、平台针对用户的各类信息，资料，进行技术性加密，以防止用户隐私泄露。</p>
      <p>2、“正在共享”平台对保密用户隐私信息实行严格保密制度，确保用户信息安全。其中包括身份认证资料，服务认证资料、手机号码、手机设备识别码、IP地址、用户聊天记录，用户举报或者反馈的问题及信息、交易详情及明细(但不限于以上信息类资料)等。</p>
      <p>3、 未经用户授权同意，“正在共享”不向任何第三方或其他组织、企事业单位、公开用户隐私信息。</p>
      <p>除以下特定情形：</p>
      <p>（1）违反国家相关法律、法规或执法部门依法要求提供用户的隐私信息；</p>
      <p>（2）由于特殊原因用户自行将“正在共享”账户、密码，泄露或告知他人使用，由此产生的任何损失，由本人自行负责；</p>
      <p>（3）用户与“正在共享”就其隐私信息的使用达成公开协议时，“正在共享”根据协议可选择是否公开隐私信息；</p>
      <p>（4）非“正在共享”主观行为及不可抗力事件，导致的用户隐私信息泄露的；</p>
      <p>4、“正在共享”严格遵守国家《未成年人保护法规定》的法律、法规，保护未成年人的合法权益，十六周岁以下的未成年人不能注册“正在共享”帐号。</p>
      <h2>第二条 保障交易安全</h2>
      <p>“正在共享”全力为您打造一个放心安全的交易平台，采取多种举措保障交易双方信息的真实性，提高交易平台的安全性。除现阶段主流的用户认证系统，还设置了更为严密的交易流程和明确的风险提示等功能。</p>
      <p>防范功能措施如下：</p>
      <p>1、提供目前主流身份认证方式：</p>
      <p>（1）手机号认证：“正在共享”要求用手机号注册，输入手机验证码完成注册。根据国家《移动互联网应用程序信息服务管理规定》“后台实名、前台自愿”的原则，用户需要使用手机号注册“正在共享”账号，并提供相关真实用户信息。</p>
      <p>（2）身份认证：需要上传身份证照片及身份证号认证，人工审核通过后，完成注册认证。</p>
      <p>（3）服务认证+多服务认证（服务认证支持多个服务证书认证）：上传相关服务证书照片，人工审核通过后，完成注册认证。</p>
      <p>（4）微博认证：用户绑定微博或使用微博登录，完成认证。</p>
      <p>（5）微信认证：用户绑定微信或使用微信登录，完成认证。</p>
      <p>（7）支付宝认证：使用支付宝充值或支付，完成认证。</p>
      <p>认证方式详情，请在个人中心“个人认证”模块查询。</p>
      <h2>2、严谨的交易流程：</h2>
      <p>（1）免费电话沟通功能：为保障用户交易安全和信息真实可靠性，平台提供【语音外呼电话】及【10分钟免费电话】模块，交易双方均可免费使用此功能。鼓励交易双方购买前进行事项沟通，确认信息、安全无误后确认服务内容。</p>
      <p>（2）“正在共享”平台担保交易功能：为保障买卖双方合法权益，“正在共享”平台为在平台上进行支付的用户，提供如下交易保障：关于订金：直接在平台上支付订金，确认订金后，订金才会支付给服务者。有效规避因对方违约给用户带来损失。关于余款：确认订金后支付余款，在“正在共享”平台上支付余款。余款将进入“正在共享”平台。在服务结束后，需要买方确认余款，余款支付给卖方。防止服务过程中因对方违约给用户带来损失。服务双方如果出现纠纷，可以向平台申请仲裁。</p>
      <p>（3）平台管控机制：“正在共享”用户支付流程必须全部在平台上完成，平台之外的任何交易行为，产生任何问题，“正在共享”均不承担任何负责，由用户自行负责。</p>
      <p>（4）风险提示机制：任何涉及金钱的交易动作，平台都会提前向用户提示服务风险和预见性风险的预警。</p>
      <p>（5）交易纠纷处理机制：凡用户对交易服务有争议的，平台根据双方举证材料（沟通记录、图像材料、及可证明类材料）及官方出具违规通知类的，将给予账户暂时性或永久性冻结处理。</p>
      <p>（6）“正在共享”平台保险保障计划为保障平台用户的权益，增强买卖双方人身和财产安全保障，“正在共享”为符合要求的用户，提供免费的保险；10万元交通综合意外保障计划：符合赠险要求的用户，发送需求和服务之后可以免费领取交通综合意外保障，成功领取保险的用户可享受自驾、公共交通和航空等出行方式的交通保障，为双方线下交易提供全方位的保险服务，增加平台用户的附加权益；账户资金安全保障：在“正在共享”平台支付定金/全款的用户，可享受“正在共享”平台赠送的个人账户资金安全保险，保障名下账户的资金安全，账户发生盗刷盗用盗取等事件，保险公司酌情进行赔付。具体内容请以保险协议为准。</p>
      <h2>第三条 关于用户审核</h2>
      <p>1、人工审核：为确保用户在平台提交的信息安全可靠，“正在共享”设置专门的人工审核部门，制定严格的审核规范，第一时间对平台提交信息进行认证。针对服务内容、需求发布、应约邀请、线上操作等，每一个信息细节都实施了24小时监控并严格把关。</p>
      <p>2、审核内容：包含了头像、昵称、个人简介、教育经历、竞争描述、工作经历、服务介绍、荣誉资质、服务描述、专业问答、应邀介绍、需求详情、相册图片、身份/服务认证资料等信息。</p>
      <h2>第四条 关于用户违规处理</h2>
      <p>“正在共享”平台提供了“个人中心”模块，提供了详细用户使用手册，其中包括：《使用协议》、《常见问题》、《积分规则》、《红包规则》、《赚钱攻略》、《审核规范》等。</p>
      <p>对于违规操作及不正当交易等行为，“正在共享”为用户提供举报、拉黑及信息反馈等功能，提倡用户及时举报不良行为，维护自身合法权益。</p>
      <p>1、违规账号处理：</p>
      <p>同时“正在共享”将根据违规情节大小给予如下处理方式：</p>
      <p>（1）禁用：平台有违反《“正在共享”平台审核规范》的行为，但情节不严重用户，根据“正在共享”审核确认后，禁用时间为7天，连续禁用三次会自动封号；</p>
      <p>（2）封号：平台有违反《“正在共享”平台审核规范》的操作行为且情节严重用户（请参照上述表述）平台或将给予永久封号处理；</p>
      <p>2、冻结资金处理：有异常交易行为及疑似违规交易行为的用户，根据情节严重程度“正在共享”审核确认后，将给予资金冻结处理。</p>
      <p>3、违法行为处理：“正在共享”一旦发现用户有违法行为，将全力配合执法部门，按照相关要求进行处理。</p>
      <h2>第五条 其他事项</h2>
      <p>1、“正在共享”为用户提供两个举报通道，一经发现以上违规行为可以随时举报。我们会第一时间进行处理。</p>
      <p>（1）应邀后的聊天窗口：聊天窗口右上角点击【举报有奖】按钮。</p>
      <p>（2）用户个人主页：进入被举报者个人主页点击【…】按钮。</p>
      <p>2、欢迎各位用户积极向平台反馈信息，我们将第一时间积极配合反馈处理。出现任何问题，请随时与我们积极沟通，“正在共享”会竭尽全力解决。</p>
      <p>3、本声明未涉及的问题请参见国家有关法律法规，当本声明与国家有关法律法规冲突时，以国家法律法规为准。</p>
      <p>4、本规范为动态文档，“正在共享”平台将持续提供各种服务保障，为用户提供一个安全健康的交易平台。同时，我们也会根据相关法律法规或产品运营的需要对上述内容进行修改并更新。请您经常查看以便获得最新信息。</p>
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
      <img src="/Public/img/logo.jpg"  width="48" height="48" alt="正在共享网"  class="logo" />
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