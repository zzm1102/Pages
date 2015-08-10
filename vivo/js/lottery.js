var lottery={
	index:-1,	//当前转动到哪个位置，起点位置
	count:0,	//总共有多少个位置
	timer:0,	//setTimeout的ID，用clearTimeout清除
	speed:100,	//初始转动速度
	times:0,	//转动次数
	cycle:50,	//转动基本次数：即至少需要转动多少次再进入抽奖环节
	prize:-1,	//中奖位置
	init:function(id){
		if ($("#"+id).find(".lottery-unit").length>0) {
			$lottery = $("#"+id);
			$units = $lottery.find(".lottery-unit");
			this.obj = $lottery;
			this.count = $units.length;
			$lottery.find(".lottery-unit-"+this.index).addClass("active");
		};
	},
	roll:function(){
		var index = this.index;
		var count = this.count;
		var lottery = this.obj;
		$(lottery).find(".lottery-unit-"+index).removeClass("active");
		index += 1;
		if (index>count-1) {
			index = 0;
		};
		$(lottery).find(".lottery-unit-"+index).addClass("active");
		this.index=index;
		return false;
	},
	stop:function(index){
		this.prize=index;
		return false;
	}
};

function roll(){
	lottery.times += 1;
	lottery.roll();
	if (lottery.times > lottery.cycle+10 && lottery.prize==lottery.index) { //最终决定奖项显示
		clearTimeout(lottery.timer);  //奖项定格
		//弹出提示消息
		setTimeout(function() {
			popup("好遗憾差点就中奖了...");
		}, 1000)
		// end
		lottery.prize=-1;
		lottery.times=0;
		click=false;
	}else{  //开始
		if (lottery.times<lottery.cycle) { //旋转阶段
			lottery.speed -= 10;
		}else if(lottery.times==lottery.cycle) { //决定奖项阶段
			var index = Math.random()*(lottery.count)|0;
			lottery.prize = index;		
		}else{  //减缓速度，显示奖项阶段
			if (lottery.times > lottery.cycle+10 && ((lottery.prize==0 && lottery.index==7) || lottery.prize==lottery.index+1)) {
				lottery.speed += 110;
			}else{
				lottery.speed += 20;
			}
		}
		if (lottery.speed<40) {  //保持匀速
			lottery.speed=40;
		};
//		console.log(lottery.times+'^^^^^^'+lottery.speed+'^^^^^^^'+lottery.prize);
		lottery.timer = setTimeout(roll,lottery.speed);
	}
	return false;
}

function popup(value) {
	$(".mask").removeClass("hide");
	$(".share-popup").removeClass("hide");
	$(".share-popup h2").html(value);
//	$(".mask").on("click", function() {
//		$(this).addClass("hide");
//		$(".share-popup").addClass("hide");
//	})
}

var click=false;

window.onload=function(){
	lottery.init('lottery');
	$("#lottery a").on("click", function(){
		if (click) {
			return false;
		}else{
			lottery.speed=100;
			roll();
			click=true;
			return false;
		}
	});
};