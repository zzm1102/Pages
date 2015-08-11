<!--<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxa2c02ad4f206c7f3", "5c4788b78875ef7db3df014bf7e25c4e");
$signPackage = $jssdk->GetSignPackage();

session_start();
@header("Content-type: text/html; charset=utf-8");
ini_set('date.timezone','Asia/Shanghai');
require 'class/news.class.php';
?>
-->
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
        
    
    
</head>
<body>
    <div class="wrap create-page">
    <!--<?php 
    		
    $db_hostname="svrid7i2e3r05oa.mysql.duapp.com:10116";
    $db_username="DlzUOCY4ag51ssWPxAV9hGWS";
    $db_userpwd="h6ir0P2hFwUseEnCytxGRqxbFlbqsqXK";
    
    $openid=$_SESSION['openid'];
    $name=$_POST['name'];
    $dishes=$_POST['dishes'];
    
    $news= new news($db_hostname,$db_username,$db_userpwd);	
    $checkOpenid=$news->checkOpenid($openid);
    
//  if($checkOpenid){
//  	$id=$checkOpenid[0];
//  	echo "<script>location.href='news.php?id={$id}';</script>";
//  }
    
    ?> -->
    	<!--头条生成器-->
    	<div id="news-creater">
    		<form action="" method="post">
    			<div class="name-box">
    				<label for="name">输入名字：</label>
    				<input type="text" name="name" id="name"/>
                    <input type="hidden" id="openid" value="" name="openid"/>
                    <input type="hidden" id="dishes" value="" name="dishes"/>
                    
    			</div>
    			<div class="select-dish">
    				<label>选择菜式</label>
	    			<ul id="dishes-name">
	    				<li>水煮肉片</li>
	    				<li>辣子鸡</li>
	    				<li>麻婆豆腐</li>
	    				<li>夫妻肺片</li>
	    				<li>宫保鸡丁</li>
	    			</ul>
	    			<label id="upload" for="myPhoto">上传照片<input type="file" id="myPhoto" value="" /></label>
    			</div>
    			
    			<div class="sub-btn"><img src="img/submit.png"/><input type="submit" name="submit" id="submit" value="" /></div>
    		</form>
    		<!--<?php 	
    		if (isset($_POST['submit'])){
    			if (empty($_POST['name'])){
    				echo "<script>alert('请填写名字');</script>";
    			}
    			else {
    				if (empty($_POST['dishes'])){
    					echo "<script>alert('请选择菜式');</script>";
    				}else {
    					$newsInsert=$news->newsInsert($openid,$name,$dishes);
    					echo "<script>location.href='news.php?id=".$newsInsert."';</script>";
    				}
    			}
    		}	
    		?>-->
    	</div>
    </div> <!--wrap end-->
    
	<script src="js/zepto.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/touch.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
//wx.config({
//	debug: false,
//	appId: '<?php echo $signPackage["appId"];?>',
//  timestamp: <?php echo $signPackage["timestamp"];?>,
//  nonceStr: '<?php echo $signPackage["nonceStr"];?>',
//  signature: '<?php echo $signPackage["signature"];?>',
//  jsApiList: 
//    // 所有要调用的 API 都要加到这个列表中
//      'onMenuShareTimeline',
//      'onMenuShareAppMessage',
//   ]
//});

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