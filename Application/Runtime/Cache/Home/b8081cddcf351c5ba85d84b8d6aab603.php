<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html dir="ltr" lang="zh" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>websocket聊天室</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">


</head>
<body>


<div class="row">

  <ul class="breadcrumb">
    <li class="active">当前在线人数 <span id="userNum"></span> 人</li>
  </ul>

</div>


<div class="row">
    <div class="col-lg-8">
      <div class="widget-container">
                  <div class="heading"><i class="icon-warning-sign"></i></div>
                        <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="col-sm-12">
        <div id="message"class="form-control" style="height:200px; overflow:scroll;overflow-x:hidden"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
          <input type="text" class="form-control" id="name" placeholder="姓名">
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="input" placeholder="请输入要发送的内容">
        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-success" id="sub">发 送</button>
        </div>
      </div>
    </form>
</div>
</div>
</div>













<script type="text/javascript">
(function(){
	var $ = function(id){return document.getElementById(id) || null;}
	var wsServer = 'ws://127.0.0.1:8080'; 
	var ws = new WebSocket(wsServer);
	var isConnect = false;
	ws.onopen = function (evt) { onOpen(evt) }; 
	ws.onclose = function (evt) { onClose(evt) }; 
	ws.onmessage = function (evt) { onMessage(evt) }; 
	ws.onerror = function (evt) { onError(evt) }; 
	function onOpen(evt) { 
		console.log("连接服务器成功");
		isConnect = true;
	} 
	function onClose(evt) { 
		//console.log("Disconnected"); 
	} 
	function onMessage(evt) {
		var data = JSON.parse(evt.data);
		switch (data.type) {
			case 'text':
				addMsg(data.msg);
				break;
			case 'num' :
				updataUserNum(data.msg);
				break;
		}
		
		console.log('Retrieved data from server: ' + evt.data);
	}
	function onError(evt) { 
		//console.log('Error occured: ' + evt.data); 
	}
	function sendMsg() {
		if(isConnect){
			if(!$('name').value){
					alert('请先输入姓名！');
					return false;
				}
			
			
			ws.send('<span style="color:#5CB85C;">'+$('name').value+'：</span>'+$('input').value);
			$('input').value = '';
		}
	}
	
	
	
	
	
	
	
	function addMsg(msg) {
		msg = JSON.parse(msg);
		//var text = '用户' + msg.user + '说:\n' + msg.text + '\n';
		var text = msg.text;
		$('message').innerHTML += text+'<br />';
		$('message').scrollTop = $('message').scrollHeight;
	}
	function updataUserNum(msg) {
		$('userNum').innerText = msg;
	}
	$('sub').addEventListener('click',sendMsg,false);
})();
</script>
</body>
</html>