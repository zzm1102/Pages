<!--<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxa2c02ad4f206c7f3", "5c4788b78875ef7db3df014bf7e25c4e");
$signPackage = $jssdk->GetSignPackage();

session_start();
@header("Content-type: text/html; charset=utf-8");
ini_set('date.timezone','Asia/Shanghai');
require 'class/news.class.php';
?>-->
<!DOCTYPE html>
<html>
<head>
	<title>金龙鱼头条生成器</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="apple-touch-fullscreen" content="YES" />
    <meta name="description" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="pragram" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/news.css" media="screen" />
    <script src="js/prefixfree.min.js"></script>
    
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">   
//  (function() {
//      WgateJs = {};
//  	WgateJs.auto_auth=true;
//  	WgateJs.gate_options={force:1,info:"none"};
//  	var u=(("https:" == document.location.protocol) ? "https" : "http") + "://st.weixingate.com/";
//  	u=u+'st/524';
//  	var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
//  	g.defer=true; g.async=true; g.src=u; s.parentNode.insertBefore(g,s);
//  })();
//  WgateJs.ready=function(){
//      document.getElementById("openid").innerHTML=WgateJs.getWgateid();
//  	var openid=this.getWgateid();
//		//alert(openid);
//  	setTimeout(function(){
//      	$.ajax({
//          	url:"session.php",
//  			type:"POST",
//  			data:{openid:openid},
//  			beforeSend: function(){
//  				//alert(openid);
//      		},
//  			success:function(data){
//  				//alert(openid);
//  			}
//  		})
//  	},500)
//  }
</script>
</head>
<body>
    <div class="wrap">
    	<!--首页-->
    	
    	<div class="index-img">
    		<img src="img/index.jpg" alt="" />
    	</div>
    	
    	<form action="" method="post">
    	<input type="hidden" id="openid" value="" name="openid"/>
    	</form>
    	
    </div> <!--wrap end-->
    
	<script src="js/zepto.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/touch.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js?v=08031549" type="text/javascript" charset="utf-8"></script>
</body>
</html>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
wx.config({
	debug: false,
	appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: 
      // 所有要调用的 API 都要加到这个列表中
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
     ]
});

wx.ready(function () {
	wx.onMenuShareTimeline({
		title: 'xxxx',
		link: 'xxx',
		imgUrl: 'xxxx',
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});

	wx.onMenuShareAppMessage({
		title: 'xxxxx',
		desc: 'xxxxx',
		link: 'url',
		imgUrl: 'url',
		success: function () { 
			// 用户确认分享后执行的回调函数
		},
		cancel: function () { 
			// 用户取消分享后执行的回调函数
		}
	});
});
</script>