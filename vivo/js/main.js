(function(){
//	接电话
	$("#accept-btn").on("click", function() {
		$("#call-page").addClass("hide");
		$("#accept-page").removeClass("hide");
		document.getElementById("ringtone").pause();
		document.getElementById("ringtone2").play();
	})
	
//	挂断电话
	$("#decline-btn").on("click", function() {
		$("#accept-page").addClass("hide");
		$("#msg-page").removeClass("hide");
		document.getElementById("ringtone2").pause();
	})
	
//	解锁 、、、、要改swipeRight
	$("#swipe-btn").click(function() {
		$("#msg-page").addClass("hide");
		$("#password-page").removeClass("hide");
	})
	
//	验证密码
	var passValue = $("#pass-value").val();
	$("#num-block li").on("click", function() {
		$("#pass-value").removeClass("shake");
		var passNum = $(this).val().toString();
		passValue += passNum;
		$("#pass-value").val(passValue);
		if(passValue.length == 4) {
			if(passValue == "2598") {
				
				$("#password-page").addClass("hide");
//				$("#wechat").removeClass("hide");
			} else {
				$("#pass-value").addClass("shake");
				passValue = "";
			}
		}
		
	})
	
//	打开微信 眼球解锁
	$("#wechat-app").on("click", function() {
		$("#eye-unlock").removeClass("hide");
		setTimeout(function() {
			$("#eye-unlock").addClass("hide");
			$("#wechat").removeClass("hide");
		}, 3200)
	})
	
	
//	进入聊天
	$("#wechat .contact-info").on("click", function() {
		$("#wechat-app").addClass("hide");
		$("#chatting").removeClass("hide");
	})
	
	var contactH = $(".contact").height();
	var questionArr = ['aa','bb','vv'];
	var question = "恭喜你答对了！";
	var mysteryInfo = "<div class='mystery chat-wrap'><img src='img/head.jpg' /><p class='dialogue'>" + question + "</p></div>";
//	setTimeout(function() {
//		$('.contact').append(mysteryInfo);
//	},1000);
	$("#send-btn").on("click", function() {
		var answer = $("#answer").val().toUpperCase(),
			chatLen = $(".chat-wrap").length, chatH;
			
		if (answer) {
			//设置高度
			chatH = $(".chat-wrap").eq(chatLen).height();
			contactH = contactH + chatH + 20;
			//添加内容、滚动
			$(".contact").append("<div class='me chat-wrap'><p class='dialogue'>"+answer+"</p><img src='img/head.jpg' /></div>")
			.scrollTop(contactH);
			
			contactH += 100 ;
			setTimeout(function() {
				$('.contact').append(mysteryInfo).scrollTop(contactH);
			},500);
			console.log(chatLen);
			//内容清零
			answer="";
			$("#answer").val("");
		}
		
		//判断 关闭页面
		if($('.me').length >= 3) {
			$("#chatting .top").on("click", function() {
				$("#chatting").addClass("hide");
				$("#friends").removeClass("hide");
			})
		}

	})
	
	
	//朋友圈
	$("#slide-btn").on("click", function() {
		$(".hide-msg").toggleClass("hide");
		if($(".hide-msg").hasClass("hide")) {
			$(this).html("全文");
		} else {
			$(this).html("折叠");
		}
	})
	$(".hide-msg a").on("click", function() {
		$("#friends").addClass("hide");
		$("#lottery-page").removeClass("hide");
	})
	
	
	
	
	
}())
