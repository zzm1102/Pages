
//var distanceFraction, flowNum = 0, moneyNum = 0;
//
//function randomPick() {
//	var randomNum = Math.floor(Math.random() * 4);//0-3
//	$("ul li").eq(randomNum).addClass("run");
//	setTimeout(randomPick,150);
//}
//randomPick();
//
//$("ul li").on("tap", function() {
//	
//	var styleObj = window.getComputedStyle(this ,null);
//	var transformVal = styleObj.getPropertyValue("transform");
//	//正则获取matrix中transformY的值
//	var numReg = /[0-9]+/g;//可能有负数所以就加个负号
//	var valAry = transformVal.match(numReg);//返回一个包含有数字值的数组
//	var transformXVal = valAry[valAry.length - 3],transformYVal = valAry[valAry.length - 2];
//	
//	distanceFraction = (transformYVal / 450).toFixed(1);
//	console.log(distanceFraction);
//
//	flowNum += 2 * distanceFraction;
//	moneyNum += 2 * 5 * distanceFraction;
//	$("#flow").html(flowNum);
//	$("#money").html(moneyNum);
////alert('getComputedStyle' in window)
//	
//	$(this).removeClass("run");
//})
	
function moveOn (e, oncomplete, distance, time) {
	if (typeof e === "string") {e = document.getElementById(e);}
	if (!time) { time = 1500;}
	if (!distance) {distance = 450;};

	//使用Math.tan作为一个简单的缓动函数来创建非线性动画
	//一开始比较慢，后面加速
	var ease = Math.sqrt;

	var start = (new Date()).getTime();
	animate();

	function animate () {
		var elapsed = (new Date()).getTime() - start;  //消耗的时间
		var fraction = elapsed / time;

		if (fraction < 1) {
			var x = distance * Math.tan(fraction*1.2) / 2.58 + 30;  //计算元素的位置
			e.style.bottom = x + "px";
			setTimeout(animate, Math.min(25, time-elapsed));
		} else {
			e.style.bottom = "30px";
//			if (oncomplete) { oncomplete(e);}
		}
	}
}

function randomPick() {
	var randomNum = Math.floor(Math.random() * 4) + 1; //1-4
	var liId = "app" + randomNum;
	var elem = document.getElementById(liId);
	if(moveOn(liId)) return;
	moveOn(liId, 1000);
	setTimeout(randomPick,150);
}
//randomPick();

//$("#app1").on("tap", function(){
//	moveOn("app1", 1000);
//})
