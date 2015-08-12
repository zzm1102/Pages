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
</head>
<body>

<!--<?php 

$id=$_GET['id'];

$db_hostname="svrid7i2e3r05oa.mysql.duapp.com:10116";
$db_username="DlzUOCY4ag51ssWPxAV9hGWS";
$db_userpwd="h6ir0P2hFwUseEnCytxGRqxbFlbqsqXK";
$openid=$_SESSION['openid'];

$news=new news($db_hostname,$db_username,$db_userpwd);
$newsDetail=$news->newsSelect($id);

$openidP=$newsDetail[0];
$userName=$newsDetail[1];
$dishes=$newsDetail[2];
$insertTime=$newsDetail[3];
?> -->
    <div class="wrap news-page">
    	<div class="news">
    		<h1><span class="user-name"><?php echo $userName;?></span>荣获首届“金龙鱼杯”川菜绝技烹饪大赛冠军</h1>
    		<div class="upload-img">
    			<img src="img/default.jpg" alt="default" />
    		</div>
    		<p>由金龙鱼举办的首届“金龙鱼杯”川菜绝技烹饪大赛圆满落下帷幕。历经数月的比拼，擅长做川菜的小伙子<span class="user-name"><?php echo $userName;?></span>在总决赛中，凭着拿手菜<span class="chosen-dish"><?php echo $dishes;?></span>，从众多高手中脱颖而出，最终夺得“厨神”的名号并领走超级大奖。得奖后，<span class="user-name"><?php echo $userName;?></span>兴奋地告诉记者，“金龙鱼杯”川菜绝技烹饪大赛更加激发了我对厨艺的热情。
决赛当天，总决赛现场气氛热烈，专业评委阵容强大，再加上多名现场观众评委，在历经7个月过关斩将、最终跻身总决赛的多名选手的现场多轮大比拼中，评选出最后的终极“厨神”。现场吸引了数百名观众积极参与，而主办方贴心准备的各种互动游戏更吸引了大批家庭加入。</p>
    		<p>决赛当天，总决赛现场气氛热烈，专业评委阵容强大，再加上多名现场观众评委，在历经7个月过关斩将、最终跻身总决赛的多名选手的现场多轮大比拼中，评选出最后的终极“厨神”。现场吸引了数百名观众积极参与，而主办方贴心准备的各种互动游戏更吸引了大批家庭加入。</p>
	    </div>
	    <div class="btns">
    		<?php 
    		if ($openid==$openidP){
    			echo "<a href='#' id='share'>分享到朋友圈</a>";
    		}
    		else {
    			echo "<a href='newsCreate.php' id='news'></a>";
    		}    		
    		?>
    		<a href="#" id="apply"></a>
    	</div>
    	<div class="mask hide"><img src="img/arrow.png" alt="" /></div>
    </div> <!--wrap end-->
    
	<script src="js/zepto.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/touch.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
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
    jsApiList: [
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
