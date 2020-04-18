<?php if (!defined('THINK_PATH')) exit();?><html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>便客金服</title>
		<link rel="stylesheet" href="http://www.17sucai.com/preview/643619/2018-04-17/yd/css/common.css">
		<style>
			html,
			body {
				position: relative;
				height: 100%;
			}
			
			body {
				background: #eee;
				font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
				font-size: 14px;
				color: #000;
				margin: 0;
				padding: 0;
			}
			
			img {
				width: 100%;
			}
			
			div,
			a {
				position: absolute;
				display: block;
			}
			
			a {
				display: flex;
				justify-content: flex-start;
				height: 26px;
				left: 30%;
			}
			
			a img {
				width: auto;
				height: 100%;
			}
			
			.img_bg {
				position: fixed;
				width: 100%;
				height: 100%;
				left: 0%;
				top: 0;
			}
			
			.text1 {
				top: 16%;
				width: 60%;
				left: 20%;
			}
			
			.text2 {
				top: 40%;
			}
			
			.text3 {
				top: 50%;
			}
			
			.text4 {
				top: 60%;
			}
			
			.text5 {
				bottom: 5%;
				width: 40%;
				left: 30%;
			}
			
			.onload {
				position: fixed;
				background: #fff;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				z-index: 100;
			}
			
			.onload p {
				width: 6rem;
				top: 50%;
				margin-top: -3rem;
				left: 50%;
				margin-left: -3rem;
				position: absolute;
			}
		</style>
	</head>

	<body style="text-align: center;">
		<div class="onload" style="display: none;">
			<p><img src="http://www.17sucai.com/preview/643619/2018-04-17/yd/img/index/loading.gif"></p>
		</div>
		<img class="img_bg" src="http://www.17sucai.com/preview/643619/2018-04-17/yd/img/guide/index_bg.jpg">
		<div class="text1"><img src="http://oyb81k5lr.bkt.clouddn.com/text1.png"></div>
		<a class="text2" href=""><span style="color: #FFFFFF;font-size: 16px;width: 100%;text-align: center;"><?php echo ($tjr); ?>邀请了您</span></a>
		<a class="text3" href="/index.php/Home/index/tijiao/phone/<?php echo ($tjr); ?>">
			<button style="height:40px;text-decoration:none;background:#2f435e;color:#f2f2f2;padding: 10px 30px 10px 30px;  
    font-size:16px;font-family: 微软雅黑,宋体,Arial,Helvetica,Verdana,sans-serif;font-weight:bold;border-radius:30px;  
    -webkit-transition:all linear 0.30s;-moz-transition:all linear 0.30s;transition:all linear 0.30s;border: none;">立即借款</button></a>
		<div class="text5"><img src="http://oyb81k5lr.bkt.clouddn.com/text5.png"></div>

		<script src="http://www.17sucai.com/preview/643619/2018-04-17/yd/js/jquery.min.js"></script>
		<script>
			window.onload = function() {
				$('.onload').fadeOut(500);
			}
		</script>
	</body>

</html>