
		$(".index-img").on("click", function() {
			window.location = "newsCreate.php";
		})
		
		var name, dish = "";
		$("#dishes-name li").on("click",function() {
			var $this = $(this);
			dish = $this.text();
			$this.addClass("chosen").siblings("li").removeClass("chosen");
			$("#dishes").val(dish);
		})
		
		
		$("#share").on("click", function() {
			$(".mask").removeClass("hide");
		})
		
		$(".mask").on("click", function() {
			$(this).addClass("hide");
		})		

