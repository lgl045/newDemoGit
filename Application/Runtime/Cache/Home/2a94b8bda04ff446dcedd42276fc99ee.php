<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="applicable-device" content="pc" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>个人生活技能交易平台【正在共享网】</title>
  <meta name="keywords" content="生活服务,交易平台,正在共享网" />
  <meta name="description" content="正在共享网是目前国内最大的个人服务交易平台,您可以出售您的时间,如可以陪看电影,陪跑步等,您也可以提供技能服务,如上门按摩,spa,瑜伽,健身私教等.比陌陌更容易,比微信更有趣." />
  <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.iyuedan.com/" />
  <meta http-equiv="mobile-agent" content="format=html5; url=https://m.iyuedan.com/" />
  <link rel="stylesheet" href="/Public/css/idangerous.swiper.css" />
  <link rel="stylesheet" href="/Public/css/common.min.css" />
  <link rel="stylesheet" href="/Public/css/index.min.css" />
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
      <p class="toggle_city"><span><a href="">北京</a></span><span><a href="">切换城市</a></span></p>
      <p class="com_login">

        <span style="margin-right: 40px" class="mobile">手机正在共享</span>

        <span class="com_deng" @click="dialog(&quot;login&quot;)">登录</span><span class="register" @click="dialog(&quot;reg&quot;)">注册</span></p>
     </div>
    </div>
    <div class="nav">
     <img src="/Public/img/logo.jpg" width="48" height="48" alt="正在共享网" class="logo" />
     <span class="home_want">让天下的服务随叫随到</span>
     <ul class="home_list">
      <li class="home_active"><a href="#" rel="nofollow"><span>首页</span></a></li>
      <li><a href="/index.php/Home/Index/classify" rel="nofollow"><span>服务分类</span></a></li>
      <li><a href="/index.php/Home/Index/recruit.html" rel="nofollow"><span>达人招募</span></a></li>
      <li><a href="/index.php/Home/Index/security.html" rel="nofollow"><span>服务保障</span></a></li>
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
    <div class="content">
     <div class="city_wang">
      <h1>北京网络兼职</h1>
     </div>
     <div class="hot">
      <h2>同城热约</h2>
      <div class="list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kandianying/125587132931.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk2/user/avatar/be/b51/beb51feb478d857f311e86f156103fd8.jpg" alt="Chester" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kandianying/125587132931.html">Chester</a></span><em class="sex1"></em></h4>
         <p>看电影</p>
         <p>线下报价:<em>50.00</em>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/jiajiao/136418845944.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/59/5b9/595b914aee299051379ceda0aa36f03d.jpg" alt="黄赢词" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/jiajiao/136418845944.html">黄赢词</a></span><em class="sex1"></em></h4>
         <p>家教</p>
         <p>远程服务:<em>9.00</em>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meijia/166711972.html" rel="nofollow"><img src="https://i.3km.biz/uploads/robot/avatar/54/ba1/54ba15333b7b99f9d6717cb5f7f8d0cc.jpg" alt="程洋慧" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meijia/166711972.html">程洋慧</a></span><em class="sex2"></em></h4>
         <p>美甲</p>
         <p>线下报价:<em>30.00</em>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meifa/16663495.html" rel="nofollow"><img src="https://i.3km.biz/uploads/robot/avatar/cd/558/cd558a171b43439c2d7122b269628858.jpg" alt="廖先生" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meifa/16663495.html">廖先生</a></span><em class="sex1"></em></h4>
         <p>美发</p>
         <p>线下报价:<em>70.00</em>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qilei/543122926.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/09/d32/09d32504bc782ea55c49117e1be4a752.jpg" alt="记得微笑" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qilei/543122926.html">记得微笑</a></span><em class="sex1"></em></h4>
         <p>棋类</p>
         <p>线下报价:<em>100.00</em>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/tubu/787251956.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/f1/226/f12263a329d5dcd530cf3442a670fe61.jpg" alt="幸运的小马哥" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/tubu/787251956.html">幸运的小马哥</a></span><em class="sex1"></em></h4>
         <p>徒步</p>
         <p>线下报价:<em>50.00</em>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/fachuandan/627500976.html" rel="nofollow"><img src="https://i.3km.biz/uploads/new/user/avatar/a7/911/a791121ff875fd3ee065ebed573f9ff4.jpg" alt="微微一笑很倾城" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/fachuandan/627500976.html">微微一笑很倾城</a></span><em class="sex2"></em></h4>
         <p>传单派发</p>
         <p>线下报价:<em>15.00</em>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/gaoerfu/166564988.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/14/2c8/142c85f3f2305169641ab45c241df6c1.jpg" alt="王琦" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/gaoerfu/166564988.html">王琦</a></span><em class="sex2"></em></h4>
         <p>高尔夫</p>
         <p>线下报价:<em>20.00</em>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj//847221926.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/db/9e5/db9e5f8237aca93109e9c3d811482589.jpg" alt="柚友" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj//847221926.html">柚友</a></span><em class="sex2"></em></h4>
         <p></p>
         <p>线下报价:<em>88.00</em></p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/guoneiyou/847400940.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/7d/f27/7df27fcd2d1365d7e33e36dc33d530bb.png" alt="一人一猫" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/guoneiyou/847400940.html">一人一猫</a></span><em class="sex2"></em></h4>
         <p>境内游</p>
         <p>线下报价:<em>400.00</em>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zijia/787270931.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/19/f8c/19f8c51bb26f854aa4ddff08d47a5f1e.jpg" alt="简单" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zijia/787270931.html">简单</a></span><em class="sex1"></em></h4>
         <p>自驾</p>
         <p>线下报价:<em>300.00</em>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj//847668988.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/f1/c05/f1c05f2abcd4d3d3e90b4565ba5253df.jpg" alt="时尚女人" width="56" height="56" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj//847668988.html">时尚女人</a></span><em class="sex2"></em></h4>
         <p></p>
         <p>线下报价:<em>88.00</em></p>
        </div>
       </div>
      </div>
     </div>
     <div class="news">
      <h2></h2>
      <div class="line">
       <ul class="new_list">
        <li><font color="#333"><span>野生哟*</span>在<span>1小时前</span>发布了<span>王者荣耀</span>的技能</font></li>
        <li><font color="#333"><span>高速堵鬼*</span>在<span>5小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>唐*</span>已连续签到<span>1</span>天，累计签到奖励<span>16.28</span>元</font></li>
        <li><font color="#333"><span>缤纷鬼帅*</span>在<span>2小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>为家人幸*</span>已连续签到<span>1</span>天，累计签到奖励<span>31.53</span>元</font></li>
        <li><font color="#333"><span>飞扬*</span>已连续签到<span>1</span>天，累计签到奖励<span>30.91</span>元</font></li>
        <li><font color="#333"><span>萌萌不怕*</span>在<span>2小时前</span>收到了<span>曹轶娟*</span><span>100.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>你根本不*</span>在<span>1小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>霓裳鬼辛*</span>在<span>1小时前</span>应邀了<span>大美人小*</span><span>100.00</span>元诚意金<span>健身</span>需求</font></li>
        <li><font color="#333"><span>百无聊赖*</span>在<span>1小时前</span>应邀了<span>泰果断*</span><span>100.00</span>元诚意金<span>游泳</span>需求</font></li>
        <li><font color="#333"><span>零度仙崔*</span>在<span>4小时前</span>收到了<span>王进芝*</span><span>50.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>极华贵的*</span>已连续签到<span>1</span>天，累计签到奖励<span>54.14</span>元</font></li>
        <li><font color="#333"><span>较淳朴哒*</span>在<span>8小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>伊人之下*</span>在<span>3小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>佳能小白*</span>已连续签到<span>1</span>天，累计签到奖励<span>18.99</span>元</font></li>
        <li><font color="#333"><span>正在共享59*</span>在<span>8小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>墨旭染秋*</span>在<span>1小时前</span>充值<span>200.00</span>元</font></li>
        <li><font color="#333"><span>艾美娜*</span>在<span>2小时前</span>收到了<span>木头小宇*</span><span>100.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>A安琪儿*</span>已连续签到<span>1</span>天，累计签到奖励<span>55.24</span>元</font></li>
        <li><font color="#333"><span>爱且芷容*</span>已连续签到<span>1</span>天，累计签到奖励<span>59.43</span>元</font></li>
        <li><font color="#333"><span>飞向星空*</span>已连续签到<span>1</span>天，累计签到奖励<span>11.43</span>元</font></li>
        <li><font color="#333"><span>原谅52*</span>已连续签到<span>1</span>天，累计签到奖励<span>42.18</span>元</font></li>
        <li><font color="#333"><span>咪嗖啦咪*</span>在<span>2小时前</span>收到了<span>师傅老刘*</span><span>50.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>百无聊赖*</span>在<span>1小时前</span>应邀了<span>fatm*</span><span>100.00</span>元诚意金<span>羽毛球</span>需求</font></li>
        <li><font color="#333"><span>貌美的乘*</span>已连续签到<span>1</span>天，累计签到奖励<span>73.27</span>元</font></li>
        <li><font color="#333"><span>老不正经*</span>已连续签到<span>1</span>天，累计签到奖励<span>15.50</span>元</font></li>
        <li><font color="#333"><span>蓝蓝哒夏*</span>在<span>1小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>楚楚动人*</span>在<span>1小时前</span>晋升为<span>实习</span>服务达人</font></li>
        <li><font color="#333"><span>自由之枫*</span>已连续签到<span>1</span>天，累计签到奖励<span>15.24</span>元</font></li>
        <li><font color="#333"><span>Holl*</span>在<span>3小时前</span>应邀了<span>敢不敢*</span><span>200.00</span>元诚意金<span>文字处理</span>需求</font></li>
        <li><font color="#333"><span>霓裳鬼辛*</span>在<span>1小时前</span>应邀了<span>link*</span><span>100.00</span>元诚意金<span>瑜伽</span>需求</font></li>
        <li><font color="#333"><span>xuan*</span>已连续签到<span>1</span>天，累计签到奖励<span>46.89</span>元</font></li>
        <li><font color="#333"><span>放纵*</span>在<span>9小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>喜剧人生*</span>已连续签到<span>1</span>天，累计签到奖励<span>51.81</span>元</font></li>
        <li><font color="#333"><span>坑人的世*</span>在<span>5小时前</span>应邀了<span>花香逸动*</span><span>100.00</span>元诚意金<span>逛商场</span>需求</font></li>
        <li><font color="#333"><span>期待明天*</span>在<span>1小时前</span>晋升为<span>实习</span>服务达人</font></li>
        <li><font color="#333"><span>jjjj*</span>在<span>5小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>丰富的仲*</span>已连续签到<span>1</span>天，累计签到奖励<span>13.86</span>元</font></li>
        <li><font color="#333"><span>飘浮哒方*</span>在<span>5小时前</span>收到了<span>Blie*</span><span>100.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>燕儿在林*</span>在<span>8小时前</span>应邀了<span>谢泽轩*</span><span>100.00</span>元诚意金<span>户外运动</span>需求</font></li>
        <li><font color="#333"><span>坑人的世*</span>在<span>5小时前</span>应邀了<span>Wsag*</span><span>200.00</span>元诚意金<span>占座排队</span>需求</font></li>
        <li><font color="#333"><span>正在共享50*</span>已连续签到<span>1</span>天，累计签到奖励<span>71.94</span>元</font></li>
        <li><font color="#333"><span>蓝绿相间*</span>在<span>3小时前</span>发布了<span>相亲</span>的技能</font></li>
        <li><font color="#333"><span>蓝白之敖*</span>已连续签到<span>1</span>天，累计签到奖励<span>15.54</span>元</font></li>
        <li><font color="#333"><span>坑人的世*</span>在<span>5小时前</span>应邀了<span>很红水果*</span><span>200.00</span>元诚意金<span>占座排队</span>需求</font></li>
        <li><font color="#333"><span>萌萌哒芷*</span>在<span>2小时前</span>收到了<span>阳光男*</span><span>50.00</span>元心动诚意金订单</font></li>
        <li><font color="#333"><span>bbdo*</span>已连续签到<span>1</span>天，累计签到奖励<span>28.70</span>元</font></li>
        <li><font color="#333"><span>霓裳鬼辛*</span>在<span>1小时前</span>应邀了<span>回忆中带*</span><span>100.00</span>元诚意金<span>王者荣耀</span>需求</font></li>
        <li><font color="#333"><span>流浪者之*</span>已连续签到<span>1</span>天，累计签到奖励<span>72.70</span>元</font></li>
        <li><font color="#333"><span>香醍印象*</span>已连续签到<span>1</span>天，累计签到奖励<span>34.04</span>元</font></li>
       </ul>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>休闲娱乐</h2>
       <span class="tit">吃喝玩乐人多才尽兴，对尬聊说不，来正在共享6985576位服务者让你的娱乐生活多姿多彩。</span>
      </div>
      <p class="other"><a #bj/kandianying/"><span>看电影</span></a><a #bj/qingganzixun/"><span>情感咨询</span></a><a #bj/chimeishi/"><span>吃美食</span></a><a #bj/xuechangge/"><span>学唱歌</span></a><a #bj/peiliao/"><span>陪聊</span></a><a #bj/jiaoyou/"><span>交友</span></a><a #bj/guangshangchang/"><span>逛商场</span></a><a #bj/wanzhuoyou/"><span>玩桌游</span></a><a #bj/daihejiu/"><span>代喝酒</span></a><a #bj/hekafei/"><span>喝咖啡</span></a><a #bj/hecha/"><span>喝茶</span></a><a #bj/kanbisai/"><span>看比赛</span></a><a #bj/kanyanchu/"><span>看演出</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kandianying/124222037355953.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c8/cc5/c8cc5bd9cca93f970c75a21387fec473.png" alt="A奶萱萱" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c8/cc5/c8cc5bd9cca93f970c75a21387fec473.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kandianying/124222037355953.html">A奶萱萱</a></span><em class="sex2"></em></h4>
         <p>看电影</p>
         <p>线下报价:<span>50.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qingganzixun/5000560281942.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/11/55b/1155bb74e0789d6785657613940876c8.jpg" alt="正在共享1937437291" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/11/55b/1155bb74e0789d6785657613940876c8.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qingganzixun/5000560281942.html">正在共享1937437291</a></span><em class="sex2"></em></h4>
         <p>情感咨询</p>
         <p>线下报价:<span>60.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xuechangge/554233592.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/7d/c99/7dc99d61f9f15aed28eceb217a4ec2e0.jpg" alt="彬彬8NU" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/7d/c99/7dc99d61f9f15aed28eceb217a4ec2e0.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xuechangge/554233592.html">彬彬8NU</a></span><em class="sex2"></em></h4>
         <p>学唱歌</p>
         <p>线下报价:<span>177.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kandianying/117034885923.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/7b/a30/7ba305a619d69c76d5c8cfaadf0c8d78.jpg" alt="王成芳" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/7b/a30/7ba305a619d69c76d5c8cfaadf0c8d78.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kandianying/117034885923.html">王成芳</a></span><em class="sex2"></em></h4>
         <p>看电影</p>
         <p>线下报价:<span>100.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/chimeishi/127806363964.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/48/3af/483afde8714e8ea45c4927211a7cfeba.jpg" alt="骨感的仙韵" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/48/3af/483afde8714e8ea45c4927211a7cfeba.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/chimeishi/127806363964.html">骨感的仙韵</a></span><em class="sex2"></em></h4>
         <p>吃美食</p>
         <p>线下报价:<span>199.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daihejiu/5552106009108.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/7f/f4c/7ff4c17a296a2669313ba4f205d944ae.png" alt="燕窝酵素白藜芦醇" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/7f/f4c/7ff4c17a296a2669313ba4f205d944ae.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daihejiu/5552106009108.html">燕窝酵素白藜芦醇</a></span><em class="sex2"></em></h4>
         <p>代喝酒</p>
         <p>线下报价:<span>3000.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kanbisai/132176135932.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c5/0cd/c50cd239e63d628807aff85574027193.jpg" alt="丫丫佑儿" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c5/0cd/c50cd239e63d628807aff85574027193.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kanbisai/132176135932.html">丫丫佑儿</a></span><em class="sex2"></em></h4>
         <p>看比赛</p>
         <p>线下报价:<span>150.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kanyanchu/5030000938.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/d9/864/d98646f3c7baaf7d2145e277fca83775.jpg" alt="果汁分给你一半t4" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/d9/864/d98646f3c7baaf7d2145e277fca83775.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kanyanchu/5030000938.html">果汁分给你一半t4</a></span><em class="sex2"></em></h4>
         <p>看演出</p>
         <p>线下报价:<span>73.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/hekafei/5284454960.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/bc/df2/bcdf2de4000f2d931163c3b6bc433da1.jpg" alt="分开兽敖伯签" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/bc/df2/bcdf2de4000f2d931163c3b6bc433da1.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/hekafei/5284454960.html">分开兽敖伯签</a></span><em class="sex2"></em></h4>
         <p>喝咖啡</p>
         <p>线下报价:<span>227.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/guangshangchang/128653721963.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/10/467/104679fc8331e40760a5ec548d18c36b.jpg" alt="love羽" width="56" height="56" data-original="https://i.3km.biz/uploads/disk3/user/avatar/10/467/104679fc8331e40760a5ec548d18c36b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/guangshangchang/128653721963.html">love羽</a></span><em class="sex2"></em></h4>
         <p>逛商场</p>
         <p>线下报价:<span>100.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>游戏服务</h2>
       <span class="tit">开黑上分组队吃鸡，远离猪队友，来正在共享1631240位服务者专业陪玩带你登上巅峰。</span>
      </div>
      <p class="other"><a #bj/cosplay/"><span>Cosplay</span></a><a #bj/wangzherongyao/"><span>王者荣耀</span></a><a #bj/yingxionglianmeng/"><span>英雄联盟</span></a><a #bj/moshoushijie/"><span>魔兽世界</span></a><a #bj/dota2/"><span>DOTA2</span></a><a #bj/juediqiusheng/"><span>绝地求生</span></a><a #bj/wanyouxi/"><span>玩游戏</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wangzherongyao/14450038797.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/60/913/609134639fc5aa81e56bdae521673ec5.jpg" alt="天上仙桂娘胳" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/60/913/609134639fc5aa81e56bdae521673ec5.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wangzherongyao/14450038797.html">天上仙桂娘胳</a></span><em class="sex2"></em></h4>
         <p>王者荣耀</p>
         <p>线下报价:<span>33.00</span>元/局</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wangzherongyao/124222037355953.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c8/cc5/c8cc5bd9cca93f970c75a21387fec473.png" alt="A奶萱萱" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c8/cc5/c8cc5bd9cca93f970c75a21387fec473.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wangzherongyao/124222037355953.html">A奶萱萱</a></span><em class="sex2"></em></h4>
         <p>王者荣耀</p>
         <p>线下报价:<span>30.00</span>元/局</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wangzherongyao/135072070965.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/08/dd3/08dd31dbac83960ee43bdecd746bf38e.jpg" alt="纯然的香萱芸" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/08/dd3/08dd31dbac83960ee43bdecd746bf38e.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wangzherongyao/135072070965.html">纯然的香萱芸</a></span><em class="sex2"></em></h4>
         <p>王者荣耀</p>
         <p>线下报价:<span>10.00</span>元/局</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wanyouxi/125365354945.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/f5/6a7/f56a78ea6ff8973e735599e397f484a4.png" alt="Hiking" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/f5/6a7/f56a78ea6ff8973e735599e397f484a4.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wanyouxi/125365354945.html">Hiking</a></span><em class="sex1"></em></h4>
         <p>玩游戏</p>
         <p>线下报价:<span>20.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/juediqiusheng/4888114330972.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c9/c21/c9c2195d1266d7c277b70e65077c17d7.png" alt="Melic7oh" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c9/c21/c9c2195d1266d7c277b70e65077c17d7.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/juediqiusheng/4888114330972.html">Melic7oh</a></span><em class="sex1"></em></h4>
         <p>绝地求生</p>
         <p>线下报价:<span>74.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/cosplay/4887621652913.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/96/c66/96c66b1d1cc2127ea2cb94cab2f6d94e.png" alt="A小凝冬" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/96/c66/96c66b1d1cc2127ea2cb94cab2f6d94e.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/cosplay/4887621652913.html">A小凝冬</a></span><em class="sex2"></em></h4>
         <p>Cosplay</p>
         <p>线下报价:<span>136.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/yingxionglianmeng/2330281933.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/d0/47e/d047e2f128d0a79cf2ed94981b3d1868.jpg" alt="李明珠" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/d0/47e/d047e2f128d0a79cf2ed94981b3d1868.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/yingxionglianmeng/2330281933.html">李明珠</a></span><em class="sex2"></em></h4>
         <p>英雄联盟</p>
         <p>线下报价:<span>30.00</span>元/局</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/yingxionglianmeng/4886353423913.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/cf/4ab/cf4ab51a5289672907555c60bd8d15af.jpg" alt="润墨" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/cf/4ab/cf4ab51a5289672907555c60bd8d15af.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/yingxionglianmeng/4886353423913.html">润墨</a></span><em class="sex1"></em></h4>
         <p>英雄联盟</p>
         <p>线下报价:<span>5.00</span>元/局</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/juediqiusheng/2027362932.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/7b/eaf/7beaf6c7133e6d279998d90db544ff4b.jpg" alt="爱是涛项售淘早" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/7b/eaf/7beaf6c7133e6d279998d90db544ff4b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/juediqiusheng/2027362932.html">爱是涛项售淘早</a></span><em class="sex1"></em></h4>
         <p>绝地求生</p>
         <p>线下报价:<span>40.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/cosplay/4470053972.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/86/363/863630cf20050fe93a391389bf8c073d.jpg" alt="北京東東" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/86/363/863630cf20050fe93a391389bf8c073d.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/cosplay/4470053972.html">北京東東</a></span><em class="sex2"></em></h4>
         <p>Cosplay</p>
         <p>线下报价:<span>400.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>运动健康</h2>
       <span class="tit">晨练跑步起不来，下水游泳没动力，来正在共享5915871位服务者陪你一起拒绝懒惰。</span>
      </div>
      <p class="other"><a #bj/jianshen/"><span>健身</span></a><a #bj/daipaobu/"><span>带跑步</span></a><a #bj/youyong/"><span>游泳</span></a><a #bj/yumaoqiu/"><span>羽毛球</span></a><a #bj/yujia/"><span>瑜伽</span></a><a #bj/wangqiu/"><span>网球</span></a><a #bj/taiqiu/"><span>台球</span></a><a #bj/huaxue/"><span>滑雪</span></a><a #bj/gaoerfu/"><span>高尔夫</span></a><a #bj/huwaiyundong/"><span>户外运动</span></a><a #bj/wushu/"><span>武术</span></a><a #bj/tubu/"><span>徒步</span></a><a #bj/dengshan/"><span>登山</span></a><a #bj/qixing/"><span>骑行</span></a><a #bj/zijia/"><span>自驾</span></a><a #bj/pingpangqiu/"><span>乒乓球</span></a><a #bj/chuidiao/"><span>垂钓</span></a><a #bj/qitayundong/"><span>其他运动</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daipaobu/1288801679110.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/user/avatar/42/dd6/42dd662f149067793b76fcd6b971a2ac.jpg" alt="mlke999" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/user/avatar/42/dd6/42dd662f149067793b76fcd6b971a2ac.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daipaobu/1288801679110.html">mlke999</a></span><em class="sex1"></em></h4>
         <p>带跑步</p>
         <p>线下报价:<span>80.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zijia/131058663925.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/user/avatar/7b/58d/7b58dcb91f08b86ad489723fb9f5a2d5.jpg" alt="美发小能手" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/user/avatar/7b/58d/7b58dcb91f08b86ad489723fb9f5a2d5.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zijia/131058663925.html">美发小能手</a></span><em class="sex1"></em></h4>
         <p>自驾</p>
         <p>线下报价:<span>200.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/youyong/50002507249106.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/6a/e7c/6ae7c69ea45d29951c5c89268668fbbf.jpg" alt="梦雨菲" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/6a/e7c/6ae7c69ea45d29951c5c89268668fbbf.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/youyong/50002507249106.html">梦雨菲</a></span><em class="sex2"></em></h4>
         <p>游泳</p>
         <p>线下报价:<span>63.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zijia/4887627814924.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/29/479/294798396bab04a72bb187a47e8d08c8.png" alt="娜娜妹妹" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/29/479/294798396bab04a72bb187a47e8d08c8.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zijia/4887627814924.html">娜娜妹妹</a></span><em class="sex2"></em></h4>
         <p>自驾</p>
         <p>线下报价:<span>300.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qitayundong/143304802924.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/94/5bb/945bb67a07bc4b5fbf8d077d75274e56.jpg" alt="A安琪儿XT" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/94/5bb/945bb67a07bc4b5fbf8d077d75274e56.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qitayundong/143304802924.html">A安琪儿XT</a></span><em class="sex2"></em></h4>
         <p>其他运动</p>
         <p>线下报价:<span>129.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/taiqiu/1184080869111.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/b3/e02/b3e026a5b5fe596b35e8075f9eafc21c.png" alt="害怕耗子的猫" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/b3/e02/b3e026a5b5fe596b35e8075f9eafc21c.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/taiqiu/1184080869111.html">害怕耗子的猫</a></span><em class="sex2"></em></h4>
         <p>台球</p>
         <p>线下报价:<span>16.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/huwaiyundong/272504643947.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/e4/708/e4708332922a2a4bcb1d0e912f786e52.png" alt="露馨UqT" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/e4/708/e4708332922a2a4bcb1d0e912f786e52.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/huwaiyundong/272504643947.html">露馨UqT</a></span><em class="sex2"></em></h4>
         <p>户外运动</p>
         <p>线下报价:<span>140.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wushu/1788322958.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3a/219/3a219857e790c843f78932e7b3f634df.png" alt="黄超MMA" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3a/219/3a219857e790c843f78932e7b3f634df.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wushu/1788322958.html">黄超MMA</a></span><em class="sex1"></em></h4>
         <p>武术</p>
         <p>线下报价:<span>25.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/gaoerfu/13623547493.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/25/aab/25aab96ec63b21bc36613b42ee221e24.jpg" alt="浅青色妖伏臭惨" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/25/aab/25aab96ec63b21bc36613b42ee221e24.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/gaoerfu/13623547493.html">浅青色妖伏臭惨</a></span><em class="sex2"></em></h4>
         <p>高尔夫</p>
         <p>电话咨询:<span>1.00</span>元/分钟</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qitayundong/178851490.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/83/b11/83b11c88e80d0fd7d6f5b541a5e28352.png" alt="李红雨" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/83/b11/83b11c88e80d0fd7d6f5b541a5e28352.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qitayundong/178851490.html">李红雨</a></span><em class="sex1"></em></h4>
         <p>其他运动</p>
         <p>线下报价:<span>300.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>丽人时尚</h2>
       <span class="tit">时尚之美在于潮流，丽人之颜在于妆容，来正在共享2571465位服务者帮你容光焕发美丽动人。</span>
      </div>
      <p class="other"><a #bj/meirong/"><span>美容</span></a><a #bj/siyi/"><span>司仪</span></a><a #bj/sheying/"><span>摄影</span></a><a #bj/meizhuang/"><span>美妆</span></a><a #bj/meifa/"><span>美发</span></a><a #bj/meijia/"><span>美甲</span></a><a #bj/mote/"><span>模特</span></a><a #bj/shexiang/"><span>摄像</span></a><a #bj/shoushen/"><span>瘦身</span></a><a #bj/xitou/"><span>洗头</span></a><a #bj/nvshispa/"><span>女士SPA</span></a><a #bj/xingxiangguwen/"><span>形象顾问</span></a><a #bj/wenshen/"><span>纹身</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meirong/1348838519112.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/2f/67b/2f67b413ed1e50bcd90ea28e0ee09f97.jpg" alt="玲玲韩式半永久定妆" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/2f/67b/2f67b413ed1e50bcd90ea28e0ee09f97.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meirong/1348838519112.html">玲玲韩式半永久定妆</a></span><em class="sex2"></em></h4>
         <p>美容</p>
         <p>线下报价:<span>398.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meizhuang/1810716924.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/d0/2c1/d02c1220f4a77786e2f57aab649922f1.png" alt="小杨化妆" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/d0/2c1/d02c1220f4a77786e2f57aab649922f1.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meizhuang/1810716924.html">小杨化妆</a></span><em class="sex2"></em></h4>
         <p>美妆</p>
         <p>线下报价:<span>400.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/sheying/128837773970.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/1f/c06/1fc06f7ca080b8dd1f5dada901abe2ff.jpg" alt="蓝美琪" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/1f/c06/1fc06f7ca080b8dd1f5dada901abe2ff.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/sheying/128837773970.html">蓝美琪</a></span><em class="sex2"></em></h4>
         <p>摄影</p>
         <p>线下报价:<span>500.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/sheying/1813237964.html" rel="nofollow"><img src="https://i.3km.biz/uploads/new/user/avatar/33/7f4/337f49a4a66e98ed27c81a0f820ea108.jpg" alt="茜球球" width="56" height="56" data-original="https://i.3km.biz/uploads/new/user/avatar/33/7f4/337f49a4a66e98ed27c81a0f820ea108.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/sheying/1813237964.html">茜球球</a></span><em class="sex2"></em></h4>
         <p>摄影</p>
         <p>线下报价:<span>613.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meifa/124220052107930.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/40/e85/40e857cae5594816d8b99221bded935d.jpg" alt="儒雅仙傅沈响" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/40/e85/40e857cae5594816d8b99221bded935d.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meifa/124220052107930.html">儒雅仙傅沈响</a></span><em class="sex1"></em></h4>
         <p>美发</p>
         <p>线下报价:<span>96.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meifa/4888272770930.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3d/653/3d653b6d0ff83d4907f233ce0aced8b1.jpg" alt="形象设计体雕正骨" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3d/653/3d653b6d0ff83d4907f233ce0aced8b1.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meifa/4888272770930.html">形象设计体雕正骨</a></span><em class="sex1"></em></h4>
         <p>美发</p>
         <p>线下报价:<span>90.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shexiang/12424100893.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/35/b34/35b347e2d2feda0296d679dab5001e43.png" alt="冷峻的春天" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/35/b34/35b347e2d2feda0296d679dab5001e43.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shexiang/12424100893.html">冷峻的春天</a></span><em class="sex1"></em></h4>
         <p>摄像</p>
         <p>线下报价:<span>380.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meijia/1822323974.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/96/de0/96de0f8e8fec0accf310e7e9ce0e9c24.jpg" alt="鹿鹿Angel" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/96/de0/96de0f8e8fec0accf310e7e9ce0e9c24.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meijia/1822323974.html">鹿鹿Angel</a></span><em class="sex2"></em></h4>
         <p>美甲</p>
         <p>线下报价:<span>25.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/nvshispa/135252452941.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/5a/af3/5aaf33b0c6b93245743f50de34457fd9.jpg" alt="百里挑一?" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/5a/af3/5aaf33b0c6b93245743f50de34457fd9.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/nvshispa/135252452941.html">百里挑一?</a></span><em class="sex2"></em></h4>
         <p>女士SPA</p>
         <p>线下报价:<span>298.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/meizhuang/1817715983.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/8c/70b/8c70ba47466d7229b291c390bc4168bc.jpg" alt="艾筱可" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/8c/70b/8c70ba47466d7229b291c390bc4168bc.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/meizhuang/1817715983.html">艾筱可</a></span><em class="sex2"></em></h4>
         <p>美妆</p>
         <p>线下报价:<span>500.00</span>元/次</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>居家生活</h2>
       <span class="tit">品质生活源于打理，居家品味源于智慧，来正在共享3385525位服务者让您体验尊贵品质。</span>
      </div>
      <p class="other"><a #bj/jiadianweixiu/"><span>家电维修</span></a><a #bj/paotuidaiban/"><span>跑腿代办</span></a><a #bj/chongwu/"><span>宠物</span></a><a #bj/jianzhichushi/"><span>兼职厨师</span></a><a #bj/nanshispa/"><span>男士SPA</span></a><a #bj/jiazhuangsheji/"><span>家装设计</span></a><a #bj/wupinshouna/"><span>物品收纳</span></a><a #bj/yuesao/"><span>月嫂</span></a><a #bj/muyingzixun/"><span>母婴咨询</span></a><a #bj/xingqu/"><span>兴趣</span></a><a #bj/fachuandan/"><span>发传单</span></a><a #bj/yuershi/"><span>育儿师</span></a><a #bj/cuirushi/"><span>催乳师</span></a><a #bj/jiajuqingxi/"><span>家居清洗</span></a><a #bj/shuaqiang/"><span>刷墙</span></a><a #bj/xiyizuoyi/"><span>洗衣熨衣</span></a><a #bj/zhanzuopaidui/"><span>占座排队</span></a><a #bj/zhongyituina/"><span>中医推拿</span></a><a #bj/zhenjiu/"><span>针灸</span></a><a #bj/aijiu/"><span>艾灸</span></a><a #bj/zuliao/"><span>足疗</span></a><a #bj/dingpiao/"><span>帮订票</span></a><a #bj/guazuobaguan/"><span>刮痧拔罐</span></a><a #bj/caier/"><span>采耳</span></a><a #bj/xiujiao/"><span>修脚</span></a><a #bj/baojie/"><span>保洁</span></a><a #bj/diangong/"><span>电工</span></a><a #bj/wagong/"><span>瓦工</span></a><a #bj/mugong/"><span>木工</span></a><a #bj/shuidianweixiu/"><span>水电维修</span></a><a #bj/bangbanjia/"><span>帮搬家</span></a><a #bj/jiajumeirong/"><span>家具美容</span></a><a #bj/yingyangdapei/"><span>营养搭配</span></a><a #bj/jiajuchaizhuang/"><span>家具拆装</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/paotuidaiban/135140655950.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/91/961/91961c092635d9ba3865ee58ee55cf6e.png" alt="（老黑）" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/91/961/91961c092635d9ba3865ee58ee55cf6e.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/paotuidaiban/135140655950.html">（老黑）</a></span><em class="sex1"></em></h4>
         <p>跑腿代办</p>
         <p>线下报价:<span>50.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zhongyituina/183741390.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk2/user/avatar/ec/d5c/ecd5cd5868696071c8afd3a8584f669b.jpg" alt="华哥" width="56" height="56" data-original="https://i.3km.biz/uploads/disk2/user/avatar/ec/d5c/ecd5cd5868696071c8afd3a8584f669b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zhongyituina/183741390.html">华哥</a></span><em class="sex1"></em></h4>
         <p>中医推拿</p>
         <p>线下报价:<span>100.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/nanshispa/128454802971.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/cd/e7d/cde7d8594d94a850cc7b61f681aa99f5.jpg" alt="知性姐姐" width="56" height="56" data-original="https://i.3km.biz/uploads/disk3/user/avatar/cd/e7d/cde7d8594d94a850cc7b61f681aa99f5.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/nanshispa/128454802971.html">知性姐姐</a></span><em class="sex2"></em></h4>
         <p>男士SPA</p>
         <p>线下报价:<span>288.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/aijiu/131742766943.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c8/245/c8245f7203d5e8b929a75b52839251fb.jpg" alt="小样wQ" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c8/245/c8245f7203d5e8b929a75b52839251fb.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/aijiu/131742766943.html">小样wQ</a></span><em class="sex2"></em></h4>
         <p>艾灸</p>
         <p>线下报价:<span>198.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/aijiu/146448237957.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/67/558/67558bb73d993fb436603e44f0c62c6d.png" alt="蓝天下哒福娘锡" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/67/558/67558bb73d993fb436603e44f0c62c6d.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/aijiu/146448237957.html">蓝天下哒福娘锡</a></span><em class="sex2"></em></h4>
         <p>艾灸</p>
         <p>线下报价:<span>588.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/aijiu/118753130977.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/ac/f27/acf279a6cbacb17f0bf0290a71d7d707.jpg" alt="a上门推拿" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/ac/f27/acf279a6cbacb17f0bf0290a71d7d707.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/aijiu/118753130977.html">a上门推拿</a></span><em class="sex2"></em></h4>
         <p>艾灸</p>
         <p>线下报价:<span>58.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xiujiao/4885853262938.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/9d/bfc/9dbfc02fd8fbe741b255626b89162094.jpg" alt="康睿足道按摩Spa" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/9d/bfc/9dbfc02fd8fbe741b255626b89162094.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xiujiao/4885853262938.html">康睿足道按摩Spa</a></span><em class="sex1"></em></h4>
         <p>修脚</p>
         <p>线下报价:<span>106.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/caier/120572325955.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/60/c82/60c82c3d1147fcb23dee7b07d674f86f.jpg" alt="A向日葵A" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/60/c82/60c82c3d1147fcb23dee7b07d674f86f.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/caier/120572325955.html">A向日葵A</a></span><em class="sex2"></em></h4>
         <p>采耳</p>
         <p>线下报价:<span>267.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/caier/5307673987.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/e7/bd0/e7bd0a1ffe53002f5c46ee585991c0a6.png" alt="冰雪聪明哒汤侄码" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/e7/bd0/e7bd0a1ffe53002f5c46ee585991c0a6.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/caier/5307673987.html">冰雪聪明哒汤侄码</a></span><em class="sex2"></em></h4>
         <p>采耳</p>
         <p>线下报价:<span>588.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/jianzhichushi/11001488746943.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/98/794/9879445112bb17db26692aad067f9244.jpg" alt="极醇厚兽齐秧咱" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/98/794/9879445112bb17db26692aad067f9244.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/jianzhichushi/11001488746943.html">极醇厚兽齐秧咱</a></span><em class="sex1"></em></h4>
         <p>兼职厨师</p>
         <p>线下报价:<span>112.00</span>元/次</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>教育培训</h2>
       <span class="tit">知识让你创造更多价值，周全助你路途全程无忧，来正在共享1513668位教育者领你走进学习园地。</span>
      </div>
      <p class="other"><a #bj/yinyue/"><span>音乐</span></a><a #bj/kouyu/"><span>口语</span></a><a #bj/wudao/"><span>舞蹈</span></a><a #bj/jiajiao/"><span>家教</span></a><a #bj/huihua/"><span>绘画</span></a><a #bj/qilei/"><span>棋类</span></a><a #bj/shufa/"><span>书法</span></a><a #bj/qiuxuewenjiao/"><span>求学问教</span></a><a #bj/youjiao/"><span>幼教</span></a><a #bj/liuxue/"><span>留学</span></a><a #bj/yimin/"><span>移民</span></a><a #bj/peixun/"><span>培训</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qilei/14045288498.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3d/125/3d1254fdafe1e0768b84ee7d9b96444c.jpg" alt="为家人幸福奋斗" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3d/125/3d1254fdafe1e0768b84ee7d9b96444c.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qilei/14045288498.html">为家人幸福奋斗</a></span><em class="sex1"></em></h4>
         <p>棋类</p>
         <p>线下报价:<span>45.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qilei/131360678932.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/ef/9bd/ef9bd826ff446bb4eb720761f7ad031a.jpg" alt="hehq" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/ef/9bd/ef9bd826ff446bb4eb720761f7ad031a.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qilei/131360678932.html">hehq</a></span><em class="sex2"></em></h4>
         <p>棋类</p>
         <p>线下报价:<span>6.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/yinyue/11001488746943.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/98/794/9879445112bb17db26692aad067f9244.jpg" alt="极醇厚兽齐秧咱" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/98/794/9879445112bb17db26692aad067f9244.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/yinyue/11001488746943.html">极醇厚兽齐秧咱</a></span><em class="sex1"></em></h4>
         <p>音乐</p>
         <p>线下报价:<span>35.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wudao/1820201952.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/f6/c92/f6c92f390f2b2eaf849a14cdcfb5f249.jpg" alt="Summer～" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/f6/c92/f6c92f390f2b2eaf849a14cdcfb5f249.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wudao/1820201952.html">Summer～</a></span><em class="sex2"></em></h4>
         <p>舞蹈</p>
         <p>线下报价:<span>200.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wudao/4057365986.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/86/de2/86de2f2ff42508a091fccd1dc4bdbb16.jpg" alt="失控??" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/86/de2/86de2f2ff42508a091fccd1dc4bdbb16.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wudao/4057365986.html">失控??</a></span><em class="sex2"></em></h4>
         <p>舞蹈</p>
         <p>线下报价:<span>200.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/peixun/11664111798.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk2/user/avatar/ee/b20/eeb2068986b7b810985bcde6a6991132.jpg" alt="安小心" width="56" height="56" data-original="https://i.3km.biz/uploads/disk2/user/avatar/ee/b20/eeb2068986b7b810985bcde6a6991132.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/peixun/11664111798.html">安小心</a></span><em class="sex2"></em></h4>
         <p>培训</p>
         <p>线下报价:<span>200.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/jiajiao/1827168937.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/72/23c/7223c7a95cd1ac857104f64e3d0d4794.jpg" alt="橙子@YC" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/72/23c/7223c7a95cd1ac857104f64e3d0d4794.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/jiajiao/1827168937.html">橙子@YC</a></span><em class="sex1"></em></h4>
         <p>家教</p>
         <p>线下报价:<span>200.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/liuxue/114268443933.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/85/1de/851de279bb5dce15a5b555ebcc6cdc6a.jpg" alt="芝芝不倦" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/85/1de/851de279bb5dce15a5b555ebcc6cdc6a.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/liuxue/114268443933.html">芝芝不倦</a></span><em class="sex2"></em></h4>
         <p>留学</p>
         <p>线下报价:<span>120.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wudao/135575853933.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/35/576/35576e681def506bd50fb10f92f72680.jpg" alt="王者归来的MINi" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/35/576/35576e681def506bd50fb10f92f72680.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wudao/135575853933.html">王者归来的MINi</a></span><em class="sex2"></em></h4>
         <p>舞蹈</p>
         <p>线下报价:<span>300.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/huihua/134843238975.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/6b/353/6b353c5be9a51f7b48f80e59d263d3f5.png" alt="冰冷小哥" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/6b/353/6b353c5be9a51f7b48f80e59d263d3f5.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/huihua/134843238975.html">冰冷小哥</a></span><em class="sex1"></em></h4>
         <p>绘画</p>
         <p>线下报价:<span>50.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>咨询服务</h2>
       <span class="tit">专业顾问线上等候，盲区陷阱问即避免，来正在共享1236352位咨询师带你玩转业务。</span>
      </div>
      <p class="other"><a #bj/caishuiguwen/"><span>财税顾问</span></a><a #bj/gongshangzhuce/"><span>工商注册</span></a><a #bj/shebaozixun/"><span>社保咨询</span></a><a #bj/xinlizixun/"><span>心理咨询</span></a><a #bj/shichangyingxiao/"><span>市场营销</span></a><a #bj/jianzhilietou/"><span>兼职猎头</span></a><a #bj/zhanbo/"><span>占卜</span></a><a #bj/falvzixun/"><span>法律咨询</span></a><a #bj/fanyi/"><span>翻译</span></a><a #bj/baoxianzixun/"><span>保险咨询</span></a><a #bj/zhiyeguihua/"><span>职业规划</span></a><a #bj/shangbiaozhuanli/"><span>商标专利</span></a><a #bj/qitazixun/"><span>其他咨询</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/fanyi/2138666915.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/e7/4c6/e74c6df40e3e4ea81c86ec5e244e7193.png" alt="晨曦sunny" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/e7/4c6/e74c6df40e3e4ea81c86ec5e244e7193.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/fanyi/2138666915.html">晨曦sunny</a></span><em class="sex2"></em></h4>
         <p>翻译</p>
         <p>线下报价:<span>150.00</span>元/千字</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xinlizixun/2082826947.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/be/037/be0371e65b94ea74c2115dea62393531.jpg" alt="深竹寒箫" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/be/037/be0371e65b94ea74c2115dea62393531.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xinlizixun/2082826947.html">深竹寒箫</a></span><em class="sex2"></em></h4>
         <p>心理咨询</p>
         <p>线下报价:<span>180.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xinlizixun/178830595.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/33/fed/33feda27178e0b574abd373c14df0fba.jpg" alt="超级梦想家" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/33/fed/33feda27178e0b574abd373c14df0fba.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xinlizixun/178830595.html">超级梦想家</a></span><em class="sex1"></em></h4>
         <p>心理咨询</p>
         <p>线下报价:<span>100.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shichangyingxiao/121468106925.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/3e/b1a/3eb1a6a813c386c9c59151831f786a9c.jpg" alt="程咬银" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/3e/b1a/3eb1a6a813c386c9c59151831f786a9c.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shichangyingxiao/121468106925.html">程咬银</a></span><em class="sex1"></em></h4>
         <p>市场营销</p>
         <p>线下报价:<span>1.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xinlizixun/4885552384921.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/84/1e6/841e68eca3eefce7553ca5643fc069b6.png" alt="爱是烨伟涛38" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/84/1e6/841e68eca3eefce7553ca5643fc069b6.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xinlizixun/4885552384921.html">爱是烨伟涛38</a></span><em class="sex1"></em></h4>
         <p>心理咨询</p>
         <p>线下报价:<span>1000.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/baoxianzixun/12106643093.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/82/74c/8274c98c6dfede418bc3c5500043af4c.png" alt="唐糖" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/82/74c/8274c98c6dfede418bc3c5500043af4c.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/baoxianzixun/12106643093.html">唐糖</a></span><em class="sex1"></em></h4>
         <p>保险咨询</p>
         <p>线下报价:<span>15.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xinlizixun/114227464910.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/af/6e3/af6e380da3942bfabf434855c0962759.jpg" alt="园丁" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/af/6e3/af6e380da3942bfabf434855c0962759.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xinlizixun/114227464910.html">园丁</a></span><em class="sex2"></em></h4>
         <p>心理咨询</p>
         <p>电话咨询:<span>2.00</span>元/分钟</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/gongshangzhuce/503211697.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/16/30f/1630f13cb0c1c831a956c71b4215b5da.jpg" alt="轻松哒夏牺悬" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/16/30f/1630f13cb0c1c831a956c71b4215b5da.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/gongshangzhuce/503211697.html">轻松哒夏牺悬</a></span><em class="sex1"></em></h4>
         <p>工商注册</p>
         <p>线下报价:<span>1.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shichangyingxiao/4578303970.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/07/e3e/07e3e522aa744e28e451e898994e28f7.jpg" alt="怎么都好吃先生" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/79/348/7934898198491dfaba33a0a56101626e.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shichangyingxiao/4578303970.html">怎么都好吃先生</a></span><em class="sex1"></em></h4>
         <p>市场营销</p>
         <p>线下报价:<span>300.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shebaozixun/444870295.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3d/0b0/3d0b04b16d95c6a4ecb2c830a0c58b8e.jpg" alt="岱峰" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3d/0b0/3d0b04b16d95c6a4ecb2c830a0c58b8e.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shebaozixun/444870295.html">岱峰</a></span><em class="sex1"></em></h4>
         <p>社保咨询</p>
         <p>线下报价:<span>300.00</span>元/次</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>技术服务</h2>
       <span class="tit">你有最棒的产品，缺了鬼斧神工的技术，来正在共享1680484个技术大神给你极致维护。</span>
      </div>
      <p class="other"><a #bj/diannaoweixiu/"><span>电脑维修</span></a><a #bj/shoujiweixiu/"><span>手机维修</span></a><a #bj/wenzichuli/"><span>文字处理</span></a><a #bj/chengxubianxie/"><span>程序编写</span></a><a #bj/pingmiansheji/"><span>平面设计</span></a><a #bj/uiuesheji/"><span>UI/UE设计</span></a><a #bj/tupianchuli/"><span>图片处理</span></a><a #bj/shumaweixiu/"><span>数码维修</span></a><a #bj/gongxiangdayin/"><span>共享打印</span></a><a #bj/jianzhiceshi/"><span>兼职测试</span></a><a #bj/shipinjianji/"><span>视频剪辑</span></a><a #bj/cadsheji/"><span>CAD设计</span></a><a #bj/seoyouhua/"><span>SEO优化</span></a><a #bj/ditui/"><span>地推</span></a><a #bj/kongdiaoweixiu/"><span>空调维修</span></a><a #bj/qianmingsheji/"><span>签名设计</span></a><a #bj/jianzhidianxiao/"><span>兼职电销</span></a><a #bj/dianhuakefu/"><span>电话客服</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/pingmiansheji/11624672897.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/b9/2c5/b92c574d3cfd88c263bc8b6a203ba3c8.jpg" alt="王晓旭" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/b9/2c5/b92c574d3cfd88c263bc8b6a203ba3c8.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/pingmiansheji/11624672897.html">王晓旭</a></span><em class="sex2"></em></h4>
         <p>平面设计</p>
         <p>线下报价:<span>500.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/diannaoweixiu/127134704945.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/08/fa3/08fa340ba943875da104252c7bf29c92.jpg" alt="水瓶座的火星" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/08/fa3/08fa340ba943875da104252c7bf29c92.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/diannaoweixiu/127134704945.html">水瓶座的火星</a></span><em class="sex1"></em></h4>
         <p>电脑维修</p>
         <p>线下报价:<span>50.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wenzichuli/500040558690.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/4c/fe8/4cfe8d348384174e887ed72ced6d79ae.png" alt="北漂青年一小枚" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/4c/fe8/4cfe8d348384174e887ed72ced6d79ae.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wenzichuli/500040558690.html">北漂青年一小枚</a></span><em class="sex1"></em></h4>
         <p>文字处理</p>
         <p>线下报价:<span>41.00</span>元/页</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/pingmiansheji/114168416951.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/d0/1da/d01daf9f7ead4dd0a9deddcb22099e7a.jpg" alt="私摄公堂" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/d0/1da/d01daf9f7ead4dd0a9deddcb22099e7a.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/pingmiansheji/114168416951.html">私摄公堂</a></span><em class="sex1"></em></h4>
         <p>平面设计</p>
         <p>线下报价:<span>200.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/chengxubianxie/2824185925.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/fc/029/fc029be1c43b96f4b88c58f3d110bdd6.jpg" alt="最爱阳光" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/fc/029/fc029be1c43b96f4b88c58f3d110bdd6.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/chengxubianxie/2824185925.html">最爱阳光</a></span><em class="sex1"></em></h4>
         <p>程序编写</p>
         <p>线下报价:<span>500.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/kongdiaoweixiu/272788832925.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/9b/ad6/9bad6bebc40ead699e8f79a803f207d2.jpg" alt="张立明张立明" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/9b/ad6/9bad6bebc40ead699e8f79a803f207d2.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/kongdiaoweixiu/272788832925.html">张立明张立明</a></span><em class="sex1"></em></h4>
         <p>空调维修</p>
         <p>线下报价:<span>100.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/wenzichuli/1806686932.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/22/076/2207631a09b80976011b103eb391e7dd.jpg" alt="Eric寻梦" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/22/076/2207631a09b80976011b103eb391e7dd.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/wenzichuli/1806686932.html">Eric寻梦</a></span><em class="sex1"></em></h4>
         <p>文字处理</p>
         <p>电话咨询:<span>1.00</span>元/分钟</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/diannaoweixiu/170514944.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/86/5dc/865dcabf37c2a4f835cbf84055af6933.jpg" alt="刘芳宇" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/86/5dc/865dcabf37c2a4f835cbf84055af6933.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/diannaoweixiu/170514944.html">刘芳宇</a></span><em class="sex1"></em></h4>
         <p>电脑维修</p>
         <p>线下报价:<span>200.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/pingmiansheji/114268443933.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/85/1de/851de279bb5dce15a5b555ebcc6cdc6a.jpg" alt="芝芝不倦" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/85/1de/851de279bb5dce15a5b555ebcc6cdc6a.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/pingmiansheji/114268443933.html">芝芝不倦</a></span><em class="sex2"></em></h4>
         <p>平面设计</p>
         <p>线下报价:<span>156.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/tupianchuli/118221138938.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/b0/33a/b033ac3e76d4f3d642933353166f0bee.jpg" alt="Seestar设计" width="56" height="56" data-original="https://i.3km.biz/uploads/disk3/user/avatar/b0/33a/b033ac3e76d4f3d642933353166f0bee.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/tupianchuli/118221138938.html">Seestar设计</a></span><em class="sex1"></em></h4>
         <p>图片处理</p>
         <p>线下报价:<span>34.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>旅游服务</h2>
       <span class="tit">世界那么大，时间那么少，高效有趣的旅程才是关键，来正在共享518427位服务者助您旅途愉快。</span>
      </div>
      <p class="other"><a #bj/nongjiale/"><span>农家乐</span></a><a #bj/caizhai/"><span>采摘</span></a><a #bj/daoyou/"><span>导游</span></a><a #bj/piaoliu/"><span>漂流</span></a><a #bj/guoneiyou/"><span>国内游</span></a><a #bj/jingwaiyou/"><span>境外游</span></a><a #bj/lvyouzixun/"><span>旅游咨询</span></a><a #bj/youleyuan/"><span>游乐园</span></a><a #bj/daibanqianzheng/"><span>代办签证</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daoyou/1838614970.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3a/8ca/3a8cafdbdd763299b83abb76fd263f5e.png" alt="陈烯源" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3a/8ca/3a8cafdbdd763299b83abb76fd263f5e.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daoyou/1838614970.html">陈烯源</a></span><em class="sex1"></em></h4>
         <p>导游</p>
         <p>线下报价:<span>300.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daoyou/1786368945.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/38/3a7/383a7bb684354d69d826572c5381c210.png" alt="风起云涌之情迷香江" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/38/3a7/383a7bb684354d69d826572c5381c210.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daoyou/1786368945.html">风起云涌之情迷香江</a></span><em class="sex1"></em></h4>
         <p>导游</p>
         <p>线下报价:<span>800.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daoyou/116827363948.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/eb/48e/eb48eb97ed8f0510aee0d4aab96a5465.png" alt="冰川水" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/eb/48e/eb48eb97ed8f0510aee0d4aab96a5465.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daoyou/116827363948.html">冰川水</a></span><em class="sex2"></em></h4>
         <p>导游</p>
         <p>线下报价:<span>1170.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/nongjiale/554712072921.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/2d/23c/2d23cb99266271d4ca2a3feea4dc9feb.jpg" alt="较纯净鬼陶阔枣" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/2d/23c/2d23cb99266271d4ca2a3feea4dc9feb.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/nongjiale/554712072921.html">较纯净鬼陶阔枣</a></span><em class="sex2"></em></h4>
         <p>农家乐</p>
         <p>线下报价:<span>48.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/guoneiyou/4888624315920.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/17/21a/1721aa0130b5d2717f3b70be770bfef3.jpg" alt="田园6mde" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/17/21a/1721aa0130b5d2717f3b70be770bfef3.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/guoneiyou/4888624315920.html">田园6mde</a></span><em class="sex1"></em></h4>
         <p>国内游</p>
         <p>线下报价:<span>65.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/daibanqianzheng/132637478910.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/63/456/63456b982e4d25db97280dee594eb43e.jpg" alt="饿饿猪" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/63/456/63456b982e4d25db97280dee594eb43e.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/daibanqianzheng/132637478910.html">饿饿猪</a></span><em class="sex1"></em></h4>
         <p>代办签证</p>
         <p>线下报价:<span>80.00</span>元/人</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/caizhai/124221455750986.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/59/b61/59b61b4428cee2c63192327d079b8f9f.png" alt="古代仙杭柱芒" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/59/b61/59b61b4428cee2c63192327d079b8f9f.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/caizhai/124221455750986.html">古代仙杭柱芒</a></span><em class="sex1"></em></h4>
         <p>采摘</p>
         <p>线下报价:<span>69.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/jingwaiyou/11003062202922.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/82/8b6/828b6e5a4be4cb1e448f2ea7290dae9d.jpg" alt="Stoneangel" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/82/8b6/828b6e5a4be4cb1e448f2ea7290dae9d.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/jingwaiyou/11003062202922.html">Stoneangel</a></span><em class="sex1"></em></h4>
         <p>境外游</p>
         <p>线下报价:<span>538.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/youleyuan/4886110831917.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/aa/29f/aa29fa7bf0509a267be3a904f836c9cb.png" alt="感觉你来到" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/aa/29f/aa29fa7bf0509a267be3a904f836c9cb.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/youleyuan/4886110831917.html">感觉你来到</a></span><em class="sex2"></em></h4>
         <p>游乐园</p>
         <p>线下报价:<span>598.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/guoneiyou/147154474962.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/20/8dd/208dddf58bf78db5a79eb2121b36850b.jpg" alt="貌婉心娴的陶骨原" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/20/8dd/208dddf58bf78db5a79eb2121b36850b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/guoneiyou/147154474962.html">貌婉心娴的陶骨原</a></span><em class="sex2"></em></h4>
         <p>国内游</p>
         <p>线下报价:<span>150.00</span>元/天</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>汽车服务</h2>
       <span class="tit">摆脱购车小白，呵护你最爱的车，来正在共享665821个服务者助你成为爱车达人。</span>
      </div>
      <p class="other"><a #bj/qichemeirong/"><span>汽车美容</span></a><a #bj/gouchezhidao/"><span>购车指导</span></a><a #bj/weizhangzixun/"><span>违章咨询</span></a><a #bj/qichepeilian/"><span>汽车陪练</span></a><a #bj/yancheguohu/"><span>验车/过户</span></a><a #bj/xiche/"><span>洗车</span></a><a #bj/tongchenghuoyun/"><span>同城货运</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/gouchezhidao/121022024972.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/04/55f/0455fdef64a5aa44d174d1800edb3053.jpg" alt="SpawN" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/04/55f/0455fdef64a5aa44d174d1800edb3053.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/gouchezhidao/121022024972.html">SpawN</a></span><em class="sex1"></em></h4>
         <p>购车指导</p>
         <p>线下报价:<span>60.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qichepeilian/115545487952.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/48/8c2/488c2d5e66c99f570786aa9265b7bf1a.png" alt="灰太狼1972" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/48/8c2/488c2d5e66c99f570786aa9265b7bf1a.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qichepeilian/115545487952.html">灰太狼1972</a></span><em class="sex1"></em></h4>
         <p>汽车陪练</p>
         <p>线下报价:<span>50.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qichepeilian/116848482945.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/aa/068/aa0683af4e59fdb75ddd45316764f4bb.png" alt="不解谜团" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/aa/068/aa0683af4e59fdb75ddd45316764f4bb.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qichepeilian/116848482945.html">不解谜团</a></span><em class="sex1"></em></h4>
         <p>汽车陪练</p>
         <p>线下报价:<span>20.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qichepeilian/5000137524951.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/89/fc3/89fc3c4d35611e318f0a4fe69b7acf6d.png" alt="加微zzqaaa" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/89/fc3/89fc3c4d35611e318f0a4fe69b7acf6d.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qichepeilian/5000137524951.html">加微zzqaaa</a></span><em class="sex1"></em></h4>
         <p>汽车陪练</p>
         <p>线下报价:<span>49.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/weizhangzixun/116868330951.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/56/6e3/566e3b89fd708766cf2b6855aecd19ec.jpg" alt="旅游线路制定" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/56/6e3/566e3b89fd708766cf2b6855aecd19ec.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/weizhangzixun/116868330951.html">旅游线路制定</a></span><em class="sex1"></em></h4>
         <p>违章咨询</p>
         <p>线下报价:<span>70.00</span>元/分</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/gouchezhidao/4676743956.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/b0/e5d/b0e5dfb25e277526649c4b5501908e61.jpg" alt="明媚的心情" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/b0/e5d/b0e5dfb25e277526649c4b5501908e61.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/gouchezhidao/4676743956.html">明媚的心情</a></span><em class="sex1"></em></h4>
         <p>购车指导</p>
         <p>线下报价:<span>50.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qichemeirong/11002705578936.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/00/740/007407640bbb2d4af6cc868bd8f2c854.png" alt="领航水果温哀恩" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/00/740/007407640bbb2d4af6cc868bd8f2c854.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qichemeirong/11002705578936.html">领航水果温哀恩</a></span><em class="sex2"></em></h4>
         <p>汽车美容</p>
         <p>线下报价:<span>61.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/yancheguohu/124257253954.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk2/user/avatar/4e/cd2/4ecd2507159039e5a9d777d3d10641ad.jpg" alt="海阔天空" width="56" height="56" data-original="https://i.3km.biz/uploads/disk2/user/avatar/4e/cd2/4ecd2507159039e5a9d777d3d10641ad.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/yancheguohu/124257253954.html">海阔天空</a></span><em class="sex1"></em></h4>
         <p>验车/过户</p>
         <p>线下报价:<span>498.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/qichemeirong/131621015961.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/07/e3e/07e3e522aa744e28e451e898994e28f7.jpg" alt="朱沛东" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/07/e3e/07e3e522aa744e28e451e898994e28f7.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/qichemeirong/131621015961.html">朱沛东</a></span><em class="sex1"></em></h4>
         <p>汽车美容</p>
         <p>线下报价:<span>1.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/yancheguohu/3773362977.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/91/20d/9120dd96307fe461ec7f1260f765aba4.jpg" alt="疯子，疯子！" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/91/20d/9120dd96307fe461ec7f1260f765aba4.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/yancheguohu/3773362977.html">疯子，疯子！</a></span><em class="sex1"></em></h4>
         <p>验车/过户</p>
         <p>线下报价:<span>50.00</span>元/小时</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>租赁服务</h2>
       <span class="tit">租房、用地有困难，节约时间是关键，来正在共享102726个用地供你随时入驻。</span>
      </div>
      <p class="other"><a #bj/hezufang/"><span>合租房</span></a><a #bj/duanzufang/"><span>短租房</span></a><a #bj/zuchewei/"><span>租车位</span></a><a #bj/zugongwei/"><span>租工位</span></a><a #bj/zhongdianfang/"><span>钟点房</span></a><a #bj/changdichuzu/"><span>场地出租</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zuchewei/122046132912.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/2a/c4f/2ac4f4f3f74c3090f4e2782417fbfd8b.jpg" alt="xuanY" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/2a/c4f/2ac4f4f3f74c3090f4e2782417fbfd8b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zuchewei/122046132912.html">xuanY</a></span><em class="sex1"></em></h4>
         <p>租车位</p>
         <p>线下报价:<span>24.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/hezufang/122651073940.html" rel="nofollow"><img src="https://i.3km.biz/uploads/user/avatar/12/037/12037937df6d03222a0041feada200a4.jpg" alt="农夫山泉有点酸_" width="56" height="56" data-original="https://i.3km.biz/uploads/user/avatar/12/037/12037937df6d03222a0041feada200a4.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/hezufang/122651073940.html">农夫山泉有点酸_</a></span><em class="sex1"></em></h4>
         <p>合租房</p>
         <p>线下报价:<span>500.00</span>元/月</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/hezufang/54621029114.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/3c/a19/3ca19c213d37663fa2b42be3bfc3d4df.jpg" alt="华严里相寓主管卢巨重13" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/3c/a19/3ca19c213d37663fa2b42be3bfc3d4df.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/hezufang/54621029114.html">华严里相寓主管卢巨重13</a></span><em class="sex1"></em></h4>
         <p>合租房</p>
         <p>线下报价:<span>2403.00</span>元/月</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/hezufang/1465004479115.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/00/b00/00b00282838f10ddc899b59a0a397fad.jpg" alt="宋远志" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/00/b00/00b00282838f10ddc899b59a0a397fad.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/hezufang/1465004479115.html">宋远志</a></span><em class="sex1"></em></h4>
         <p>合租房</p>
         <p>线下报价:<span>164.00</span>元/月</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/hezufang/1141682059108.html" rel="nofollow"><img src="https://i.3km.biz/uploads/new/user/avatar/ce/e55/cee55e1fda0e608972a259b9f1d21a02.jpg" alt="晓慕～" width="56" height="56" data-original="https://i.3km.biz/uploads/new/user/avatar/ce/e55/cee55e1fda0e608972a259b9f1d21a02.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/hezufang/1141682059108.html">晓慕～</a></span><em class="sex1"></em></h4>
         <p>合租房</p>
         <p>线下报价:<span>2500.00</span>元/月</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/duanzufang/123407014964.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/f4/275/f4275e7de4289943f9f68daf4927106e.jpg" alt="极宏伟的嘉" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/f4/275/f4275e7de4289943f9f68daf4927106e.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/duanzufang/123407014964.html">极宏伟的嘉</a></span><em class="sex2"></em></h4>
         <p>短租房</p>
         <p>线下报价:<span>200.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zuchewei/125057503933.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/a8/7ab/a87ab0a4529413dd3bec204485e673ac.png" alt="喜欢三个人" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/a8/7ab/a87ab0a4529413dd3bec204485e673ac.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zuchewei/125057503933.html">喜欢三个人</a></span><em class="sex1"></em></h4>
         <p>租车位</p>
         <p>线下报价:<span>25.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/changdichuzu/124220204544934.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/56/348/56348fb3daf7b041ea07cb64fb75668f.jpg" alt="爱宠寄养" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/56/348/56348fb3daf7b041ea07cb64fb75668f.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/changdichuzu/124220204544934.html">爱宠寄养</a></span><em class="sex1"></em></h4>
         <p>场地出租</p>
         <p>线下报价:<span>128.00</span>元/人</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/zhongdianfang/4886778711936.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/bb/f7c/bbf7c740a78130ce0126701daa0a3cc1.png" alt="Lnmhio" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/bb/f7c/bbf7c740a78130ce0126701daa0a3cc1.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/zhongdianfang/4886778711936.html">Lnmhio</a></span><em class="sex1"></em></h4>
         <p>钟点房</p>
         <p>线下报价:<span>4.00</span>元/小时</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/duanzufang/126045183915.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk2/user/avatar/93/f78/93f786f8d7ac1b089a31feab2f3a784f.jpg" alt="砉砉" width="56" height="56" data-original="https://i.3km.biz/uploads/disk2/user/avatar/93/f78/93f786f8d7ac1b089a31feab2f3a784f.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/duanzufang/126045183915.html">砉砉</a></span><em class="sex1"></em></h4>
         <p>短租房</p>
         <p>线下报价:<span>350.00</span>元/天</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="category">
     <div class="play">
      <div class="play_tit">
       <h2>共享账号</h2>
       <span class="tit">找快捷通道，免视频广告，来正在共享共享110994个账号让你的畅享VIP待遇。</span>
      </div>
      <p class="other"><a #bj/shipinzhanghao/"><span>视频账号</span></a><a #bj/xiazaizhanghao/"><span>下载账号</span></a><a #bj/youxizhanghao/"><span>游戏账号</span></a><a #bj/zhaopinzhanghao/"><span>招聘账号</span></a><a #bj/danchezhanghao/"><span>单车账号</span></a><a #bj/shenghuofuwu/"><span>生活服务</span></a></p>
     </div>
     <div class="play_person">
      <div class="list person_list">
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/youxizhanghao/132047030952.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/c4/a70/c4a7082e53150daa85716e1b2428e2c8.jpg" alt="Jue是姚钰珏的珏" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/c4/a70/c4a7082e53150daa85716e1b2428e2c8.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/youxizhanghao/132047030952.html">Jue是姚钰珏的珏</a></span><em class="sex1"></em></h4>
         <p>游戏账号</p>
         <p>线下报价:<span>20.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shipinzhanghao/5110512922.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/67/6c3/676c3442689639e56b3e36f6b5b0ced5.jpg" alt="芷珞珞" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/67/6c3/676c3442689639e56b3e36f6b5b0ced5.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shipinzhanghao/5110512922.html">芷珞珞</a></span><em class="sex2"></em></h4>
         <p>视频账号</p>
         <p>远程服务:<span>6.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/youxizhanghao/1100281544198.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/a5/56c/a556c88b55a496ca9f3c21b6ff641635.jpg" alt="清欢和你" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/a5/56c/a556c88b55a496ca9f3c21b6ff641635.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/youxizhanghao/1100281544198.html">清欢和你</a></span><em class="sex1"></em></h4>
         <p>游戏账号</p>
         <p>线下报价:<span>97.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shipinzhanghao/310667693.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/d3/590/d3590f41acca5949e4c3c53550d2c082.png" alt="霓凰" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/d3/590/d3590f41acca5949e4c3c53550d2c082.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shipinzhanghao/310667693.html">霓凰</a></span><em class="sex2"></em></h4>
         <p>视频账号</p>
         <p>线下报价:<span>5.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shipinzhanghao/5002471928.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/64/499/64499797c6f3e219460f876600a51803.png" alt="子妤" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/64/499/64499797c6f3e219460f876600a51803.png" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shipinzhanghao/5002471928.html">子妤</a></span><em class="sex2"></em></h4>
         <p>视频账号</p>
         <p>线下报价:<span>2.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xiazaizhanghao/488446028195.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/9d/0c4/9d0c46070fe4bc5156bd35d2dad80d8b.jpg" alt="磁性的晓夏" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/9d/0c4/9d0c46070fe4bc5156bd35d2dad80d8b.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xiazaizhanghao/488446028195.html">磁性的晓夏</a></span><em class="sex2"></em></h4>
         <p>下载账号</p>
         <p>线下报价:<span>50.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/youxizhanghao/1323075609116.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/ae/3e1/ae3e18cf8d3a3131584345994548d413.jpg" alt="浅黄色鬼阴激屿" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/ae/3e1/ae3e18cf8d3a3131584345994548d413.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/youxizhanghao/1323075609116.html">浅黄色鬼阴激屿</a></span><em class="sex1"></em></h4>
         <p>游戏账号</p>
         <p>线下报价:<span>30.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/xiazaizhanghao/5072364961.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk4/avatar/b0/464/b046460da128bb27960f3a7841bd967e.jpg" alt="美不胜收水果荣加握" width="56" height="56" data-original="https://i.3km.biz/uploads/disk4/avatar/b0/464/b046460da128bb27960f3a7841bd967e.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/xiazaizhanghao/5072364961.html">美不胜收水果荣加握</a></span><em class="sex1"></em></h4>
         <p>下载账号</p>
         <p>远程服务:<span>10.00</span>元/天</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shenghuofuwu/84755590.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/0d/81b/0d81bfafac5741669d906166375b3008.jpg" alt="几近狂妄" width="56" height="56" data-original="https://i.3km.biz/uploads/disk3/user/avatar/0d/81b/0d81bfafac5741669d906166375b3008.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shenghuofuwu/84755590.html">几近狂妄</a></span><em class="sex1"></em></h4>
         <p>生活服务</p>
         <p>线下报价:<span>90.00</span>元/次</p>
        </div>
       </div>
       <div class="list_yue">
        <div class="list_contain">
         <a #bj/shenghuofuwu/847554950.html" rel="nofollow"><img src="https://i.3km.biz/uploads/disk3/user/avatar/30/122/30122fc8a5a8adb1a1e0e2c203894a05.jpg" alt="我偏爱纯白色" width="56" height="56" data-original="https://i.3km.biz/uploads/disk3/user/avatar/30/122/30122fc8a5a8adb1a1e0e2c203894a05.jpg" /></a>
        </div>
        <div class="list_person">
         <h4><span><a #bj/shenghuofuwu/847554950.html">我偏爱纯白色</a></span><em class="sex1"></em></h4>
         <p>生活服务</p>
         <p>线下报价:<span>99.00</span>元/次</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="home_bg">
     <div class="home_platform ">
      <h4 class="home_title">正在共享是什么？</h4>
      <p class="home_tit">中国优秀的个人技能交易平台 共享经济的领导者</p>
      <div class="home_jieshao">
       <div class="home_video">
        <video id="my_video" class="" controls="" preload="auto" width="100%" height="100%" poster="https://i.3km.biz/www/images/shouye/video.jpg">
         <source src="http://hc.yinyuetai.com/uploads/videos/common/B9FE01609154C8033D59C2FDC8094659.mp4" type="video/mp4"></source>
        </video>
        <a href="javascript:;" class="play" id="play"></a>
       </div>
       <div class="home_article">
        <p class="home_sale">“正在共享”是一个时间售卖与技能交易的平台，致力于帮助更多有时间或有技能的人迅速变现！如果你有需求：这里有超200万的技能达人，你可以任意购买Ta的时间或技能，快速约到Ta！ 如果你有时间或技能：这里有超1000万的用户每日数万个需求排队找你，帮你实现当老板梦想！</p>
        <h6>完善的平台保障服务</h6>
        <div class="home_security">
         <img src="https://i.3km.biz/www/images/shouye/pic.png" alt="身份认证" width="52" height="38" class="pic1" />
         <h5>身份认证</h5>
         <p>提供芝麻信用等7种认证</p>
         <i></i>
        </div>
        <div class="home_security">
         <img src="https://i.3km.biz/www/images/shouye/pic2.png" alt="担保支付" width="58" height="54" class="pic2" />
         <h5 class="home_danbao">担保支付</h5>
         <p>在线交易平台保障</p>
         <i></i>
        </div>
        <div class="home_security">
         <img src="https://i.3km.biz/www/images/shouye/pic3.png" alt="保险服务" width="39" height="48" class="pic3" />
         <h5 class="home_insurance">保险服务</h5>
         <p>价值11万元保险保障</p>
        </div>
       </div>
      </div>
     </div>
     <div class="home_chose">
      <div class="home_introduce">
       <div class="home_small">
        <div class="home_bor">
         <img src="https://i.3km.biz/www/images/shouye/pic4.png" alt="600种服务品类" width="68" height="77" />
         <p class="home_change">600种服务品类</p>
         <p>你想要的这里都有</p>
        </div>
       </div>
       <div class="home_small home_icon2">
        <div class="home_bor">
         <img src="https://i.3km.biz/www/images/shouye/pic5.png" alt="3000万订单" width="68" height="77" />
         <p class="home_change">3000万订单</p>
         <p>多个服务者任你选</p>
        </div>
       </div>
       <div class="home_small home_icon3">
        <div class="home_bor">
         <img src="https://i.3km.biz/www/images/shouye/pic6.png" alt="300万技能达人" width="68" height="77" />
         <p class="home_change">300万技能达人</p>
         <p>身处何地都能乐享服务</p>
        </div>
       </div>
       <div class="home_small home_icon4">
        <div class="home_bor">
         <img src="https://i.3km.biz/www/images/shouye/pic7.png" alt="1400万使用用户" width="68" height="77" />
         <p class="home_change">1400万使用用户</p>
         <p>一分钟帮你找到对的人</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="home_steps">
     <h5>达人招募</h5>
     <h6>共享时间与技能，轻松赚钱</h6>
     <div class="home_auto">
      <div>
       <img src="https://i.3km.biz/www/images/shouye/pic8.png" alt="下载并注册正在共享" width="94" height="94" />
       <p>下载并注册正在共享</p>
      </div>
      <div>
       <img src="https://i.3km.biz/www/images/shouye/pic9.png" alt="发布并认证技能" width="94" height="94" />
       <p>发布并认证技能</p>
      </div>
      <div>
       <img src="https://i.3km.biz/www/images/shouye/pic10.png" alt="接单" width="94" height="94" />
       <p>接单</p>
      </div>
      <div>
       <img src="https://i.3km.biz/www/images/shouye/pic11.png" alt="服务并赚取收益" width="94" height="94" />
       <p>服务并赚取收益</p>
      </div>
      <div>
       <img src="https://i.3km.biz/www/images/shouye/pic12.png" alt="获取评价服务完成" width="94" height="94" />
       <p>获取评价服务完成</p>
      </div>
     </div>
    </div>
    <div class="city">
     <div class="fire">
      <h3>热门城市</h3>
      <ul>
       <li><a #bj/">北京正在共享</a></li>
       <li><a #sh/">上海正在共享</a></li>
       <li><a #gdsc/">深圳正在共享</a></li>
       <li><a #zjhz383/">杭州正在共享</a></li>
       <li><a #gdgz/">广州正在共享</a></li>
       <li><a #sccd/">成都正在共享</a></li>
       <li><a #jssz/">苏州正在共享</a></li>
       <li><a #tj/">天津正在共享</a></li>
       <li><a #zq/">重庆正在共享</a></li>
       <li><a #hnzz149/">郑州正在共享</a></li>
       <li><a #hbwh/">武汉正在共享</a></li>
       <li><a #jsnj/">南京正在共享</a></li>
       <li><a #fjsm/">厦门正在共享</a></li>
       <li><a #sdjn283/">济南正在共享</a></li>
       <li><a #sxxa/">西安正在共享</a></li>
       <li><a #ynkm/">昆明正在共享</a></li>
       <li><a #hncs/">长沙正在共享</a></li>
       <li><a #sdqd/">青岛正在共享</a></li>
       <li><a #gddg/">东莞正在共享</a></li>
       <li><a #fjfz/">福州正在共享</a></li>
       <li><a #lnsy/">沈阳正在共享</a></li>
       <li><a #lndl/">大连正在共享</a></li>
       <li><a #jlcc/">长春正在共享</a></li>
       <li><a #hnsy121/">三亚正在共享</a></li>
       <li><a #gxnn/">南宁正在共享</a></li>
       <li><a #qhxn/">西宁正在共享</a></li>
       <li><a #sxty/">太原正在共享</a></li>
       <li><a #gslz/">兰州正在共享</a></li>
       <li><a #gzgy/">贵阳正在共享</a></li>
       <li><a #jxnc/">南昌正在共享</a></li>
       <li><a #hljheb/">哈尔滨正在共享</a></li>
       <li><a #hbsjz/">石家庄正在共享</a></li>
      </ul>
     </div>
     <div class="fire">
      <h3>热门推荐</h3>
      <ul>
       <li><a #bj/mote/">北京模特</a></li>
       <li><a #bj/meifa/">北京美发</a></li>
       <li><a #bj/daoyou/">北京导游</a></li>
       <li><a #bj/yinyue/">北京音乐</a></li>
       <li><a #bj/sheying/">北京摄影</a></li>
       <li><a #bj/meizhuang/">北京美妆</a></li>
       <li><a #bj/wudao/">北京舞蹈</a></li>
       <li><a #bj/jianshen/">北京健身</a></li>
       <li><a #bj/jiaoyou/">北京交友</a></li>
       <li><a #bj/huaxue/">北京滑雪</a></li>
       <li><a #bj/youyong/">北京游泳</a></li>
       <li><a #bj/wenshen/">北京纹身</a></li>
       <li><a #bj/meijia/">北京美甲</a></li>
       <li><a #bj/zuliao/">北京足疗</a></li>
       <li><a #bj/yuesao/">北京月嫂</a></li>
       <li><a #bj/jiajiao/">北京家教</a></li>
       <li><a #bj/jiaoyupeixun/">北京培训</a></li>
       <li><a #bj/liuxue/">北京留学</a></li>
       <li><a #bj/caizhai/">北京采摘</a></li>
       <li><a #bj/piaoliu/">北京漂流</a></li>
       <li><a #bj/yujia/">北京瑜伽</a></li>
       <li><a #bj/meirong/">北京美容</a></li>
       <li><a #bj/baojie/">北京保洁</a></li>
       <li><a #bj/youjiao/">北京幼教</a></li>
       <li><a #bj/bangbanjia/">北京搬家</a></li>
       <li><a #bj/nanshispa/">北京男士SPA</a></li>
       <li><a #bj/zhongdianfang/">北京钟点房</a></li>
       <li><a #bj/hezufang/">北京合租房</a></li>
       <li><a #bj/duanzufang/">北京短租房</a></li>
       <li><a #bj/nongjiale/">北京农家乐</a></li>
       <li><a #bj/kongdiaoweixiu/">北京空调维修</a></li>
       <li><a #bj/pingmiansheji/">北京平面设计</a></li>
      </ul>
     </div>
    </div>
   </section>
   <footer class="common_footer">
    <div class="footer">
     <div class="the_foot">
      <img src="/Public/img/logo.jpg" alt="正在共享网" width="48" height="48" class="logo" />
      <strong>中国优秀的个人技能交易平台</strong>
      <p>vip141319@126.com</p>
     </div>
     <ul>
      <li><h4>关于正在共享</h4></li>
      <li><a #about/" rel="nofollow">关于我们</a></li>
      <li><a #about/" rel="nofollow">联系我们</a></li>
     </ul>
     <ul>
      <li><h4>新手引导</h4></li>
      <li><a #help/" rel="nofollow">帮助中心</a></li>
      <li><a #guide-demand/" rel="nofollow">我是需求者</a></li>
      <li><a #guide-service/" rel="nofollow">我是服务者</a></li>
     </ul>
     <ul>
      <li><h4>常见问题</h4></li>
      <li><a #audit/" rel="nofollow">如何进行身份认证？</a></li>
      <li><a #damand/" rel="nofollow">如何选择适合的服务者？</a></li>
      <li><a #skill/" rel="nofollow">如何成为服务者？</a></li>
     </ul>
     <ul>
      <li><h6>下载正在共享APP</h6></li>
      <!-- <li class="foot_ma"><img src="https://i.3km.biz/www/images/shouye/code.png" alt="下载正在共享APP" width="121" height="121" /></li> -->
     </ul>
    </div>
    <p class="adress">&copy;2015-2019 正在共享 鲁ICP备15011114号-1</p>
    <div class="home_advert">
     <!-- <img src="https://i.3km.biz/www/images/shouye/advert.jpg" width="1920" alt="注册正在共享送百元正在共享红包" /> -->
     <span @click="home_out"></span>
    </div>
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
      <p class="verify"><input type="text" autocomplete="off" placeholder="请输入右侧验证码" v-model="vcode" /><img :src="captcha.img" onclick="this.src='https://www.iyuedan.com//www/sign/captcha/?v='+ new Date().getTime()" /></p>
      <p class="check"><input type="text" autocomplete="off" placeholder="请输入验证码" v-model="checkcode" /><button @click="getsms()" class="getsms" :disabled="isdisabled" v-text="smsinfo"></button></p>
      <input type="password" autocomplete="new-password" placeholder="请输入密码" class="enroll_pwd password" maxlength="20" v-model="password" />
      <p class="com_remind"><input type="checkbox" id="checked" class="checked" v-model="checkbox" /><label for="checked">注册即表示同意并遵守</label><a #agreement/">《正在共享使用协议》</a></p>
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
  <script src="/Public/js/scroll.js"></script>
  <script>$(function(){$('.news').myScroll({speed:40,rowHeight:30});});var play=document.getElementById("play");var myVideo=document.getElementById("my_video");myVideo.controls=false;play.onclick=function(){myVideo.play();play.style.display="none";myVideo.controls=true;}</script>
  <b style="display:none"><script src="//s4.cnzz.com/z_stat.php?id=1260446014&amp;web_id=1260446014"></script></b>
 </body>
</html>