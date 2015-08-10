(function(){
	$(".index-img").on("click", function() {
		window.location = "news_creater.html";
	})
	
	var name, dish;
	$("#submit").on("click", function() {
		name = $("#name").val();
		dish = $("#dishes").val();
		if(name) {
			window.location = "news.html";
		} else {
			alert("请填写名字")
		}
	})
	
	$("#share").on("click", function() {
		$(".mask").removeClass("hide");
	})
	
	$(".mask").on("click", function() {
		$(this).addClass("hide");
	})
	
	
}())
