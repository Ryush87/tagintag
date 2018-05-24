//common funtion
function newWin(url,nw,nh){
	cw=screen.availWidth;
	ch=screen.availHeight;
	ml=(cw-nw)/2;
	mt=(ch-nh)/2;
	optionT='width='+nw+',height='+nh+',top='+mt+',left='+mt+',toolbar=no,location=no,status=no,menubar=no,resizable=no,scrollbars=yes';
	window.open(url,'TaginTag',optionT);
	return false;
}
function objShow(obj){
	obj.css('display','block');
}
function objHide(obj){
	obj.css('display','none');
}
function currentTab(num){
	$('.tabBox li').eq(num).addClass('actOn');
}
function scrollMove(obj){
	var tempPosition=$(obj).offset().top;
	$('html, body').stop().animate({scrollTop:tempPosition},500,'linear');
	return false;
}
function changeSubtitle(txt){
	$('.subPage_title h2:first-child').append(txt);
}
function changeLocation(lnb_1d,snb_1d,snb_2d){
	var currentLnb=$('.snbTitle > div').html();
	var currentSnb1=$('.snb_1d > li.actOn > a').html();
	var currentSnb2=$('.snb_2d > li.actOn > a').html();
	if(lnb_1d!=undefined){
		$('#locationBox ul').append('<li>'+currentLnb+'</li>');
		if(snb_1d!=undefined){
			$('#locationBox ul').append('<li>'+currentSnb1+'</li>');
			if(snb_2d!=undefined){
				//$('.subPage_title h2').html(currentSnb2);
				$('#locationBox ul').append('<li>'+currentSnb2+'</li>');
			}
		}
	}
}
function currentLocation(lnb_1d,snb_1d,snb_2d){
	if(lnb_1d!=undefined){
		$('.lnb_1d > li').eq(lnb_1d).addClass('actOn');
	}
	if(snb_1d!=undefined){
		$('.snb_1d > li').eq(snb_1d).addClass('actOn');
		$('.snb_1d > li').eq(snb_1d).find('.snb_2d').slideDown();
	}
	if(snb_2d!=undefined){
		$('.snb_1d > li.actOn >.snb_2d > li').eq(snb_2d).addClass('actOn');
	}
	changeLocation(lnb_1d,snb_1d,snb_2d);
}
function divPopBg_show(){
	objShow($(".divPopupBg"));
}
function divPopBg_hide(){
	objHide($(".divPopupBg"));
}
function divPopBg2_show(){
	objShow($(".divPopupBg2"));
}
function divPopBg2_hide(){
	objHide($(".divPopupBg2"));
}
function positionPop(obj){
	var tempW="-"+$(obj).width()/2+"px";
	var tempH="-"+$(obj).height()/2+"px";
	if(obj=="#tagOpenResultBox"){
		tempH="-"+(($(obj).height()/2)+200)+"px";
	}
	$(obj).css({"margin-top":tempH,"margin-left":tempW});
}
function positionPop2(obj){
	$(obj).css({"top":0,"left":0});
	var tempW=(window.innerWidth-$(obj).width())/2+"px";
	var tempH=(window.innerHeight-$(obj).height())/2+"px";
	if(obj=="#tagOpenResultBox"){
		tempH="-"+(($(obj).height()/2)+200)+"px";
	}
	$(obj).css({"top":tempH,"left":tempW});
}
function callPopup(obj){
	$('body').addClass('actPop');
	positionPop(obj);
	divPopBg_show();
	objShow($(obj));
	actFadeEff($(obj));
}
function callPopup2(obj){
	$('body').addClass('actPop');
	positionPop(obj);
	divPopBg2_show();
	objShow($(obj));
	actFadeEff($(obj));
}
function hidePopup(obj){
	$('body').removeClass('actPop');
	resetFadeEff(obj);
	divPopBg_hide();
	objHide($(obj));
}
function hidePopup2(obj){
	$('body').removeClass('actPop');
	resetFadeEff(obj);
	divPopBg2_hide();
	objHide($(obj));
}
function quick_menu_act(){
	var quick=$('#quickMenuBox');
	var quickPY=670;
	var winPY=$(window).scrollTop();
	if(winPY>quickPY){
		quick.stop().animate({'top':winPY+100+'px'},500);
	}else{
		quick.stop().animate({'top':quickPY+'px'},500);
	}
}
var total_time=0;
var hour=total_time/3600;
var minute=(total_time/60)%60;
var second=total_time%60;
var timeCount=null;
function count_down(){
	total_time--;
	hour=total_time/3600;
	minute=(total_time/60)%60;
	second=total_time%60;
	$('.tagKeepBoxWrap .leftTime').html(parseInt(total_time));
	if(total_time===0){
		clearInterval(timeCount);
	}
}
function time_count(){
	total_time=60;
	clearInterval(timeCount);
	timeCount=setInterval(function(){count_down();},1000);
	
}
function tagKeepBoxAct(){
	$('.tagKeepBoxWrap').slideDown();
	bigTagToggle();
	time_count();
}
function bigTagToggle(){
	var bigTag=$('.bigTagBox');
		var tempWrapH=bigTag.height()-90;
		var currentY=bigTag.position().top;
		if(currentY>0){
			//접기
			bigTag.animate({"top":-(tempWrapH)+"px"},500,'linear');
			bigTag.find('.bgtStatus').removeClass('bgtSttClose').addClass('bgtSttOpen')
			objShow($('.tkTimeCon1'));
			objHide($('.tkTimeCon2'));
		}else{
			//열기
			bigTag.animate({"top":80+"px"},500,'linear');
			bigTag.find('.bgtStatus').removeClass('bgtSttOpen').addClass('bgtSttClose');
			objHide($('.tkTimeCon1'));
			objShow($('.tkTimeCon2'));
		}
}
//calender
function setDatePick(obj){
	jQuery('.blt_calendar').click(function(){
		jQuery(this).parent().find('input').datepicker("show");
	});
	jQuery("#"+obj).datepicker({
		dateFormat:'yy-mm-dd',
		showAnimation:'slide',
		showOtherMonths:true,
		selectOtherMonths:true,
		changeYear:true,
		changeMonth:true,
		showButtonPanel:true
	});
}
//fade effect
function actFadeEff(obj){
	obj.addClass('in-view');
	obj.find('.fadeEff').addClass('in-view');
}
function resetFadeEff(obj){
	var fadeEff = obj.find('.fadeEff');
	obj.removeClass('in-view');
	$.each(fadeEff, function(){
		var elem = $(this);
		elem.removeClass('in-view');
	});
}
//acting Animation
function actAnim(obj,act) {
	obj.removeClass(act + ' animated').addClass(act + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass(act + ' animated actBefore');
	});
};

/* Slot Machine s */
(function(w){
	var lastTime = 0,
		vendors = ['webkit', /*'moz',*/ 'o', 'ms'];
	for (var i = 0; i < vendors.length && !w.requestAnimationFrame; ++i){
		w.requestAnimationFrame = w[vendors[i] + 'RequestAnimationFrame'];
		w.cancelAnimationFrame = w[vendors[i] + 'CancelAnimationFrame']
			|| w[vendors[i] + 'CancelRequestAnimationFrame'];
	}

	if (!w.requestAnimationFrame)
		w.requestAnimationFrame = function(callback, element){
			var currTime = +new Date(),
				timeToCall = Math.max(0, 16 - (currTime - lastTime)),
				id = w.setTimeout(function(){ callback(currTime + timeToCall) }, timeToCall);
			lastTime = currTime + timeToCall;
			return id;
		};

	if (!w.cancelAnimationFrame)
		w.cancelAnimationFrame = function(id){
		clearTimeout(id);
	};
})(this);

var sm = (function(undefined){
	var tMax = 5000, // animation time, ms
	tTag = 999,
	divH = 0,
	speeds = [],
	r = [],
	reels = [[]],
	$reels, $msg,
	start, indexPrevN, indexNextN, prevNum, nextNum;

	function init(){
		for(i=0;i<tTag+1;i++){
			reels[0][i]=Math.abs(i-tTag);
		}
		$reels = $('.sltmReel').each(function(i, el){
			//el.innerHTML = '<div class="div1"><p>' + reels[i].join('</p><p>') + '</p></div><div class="div2"><p>' + reels[i].join('</p><p>') + '</p></div><div class="div3"><p>' + reels[i].join('</p><p>') + '</p></div>'
			el.innerHTML = '<div class="div1"><p>' + reels[i].join('</p><p>') + '</p></div>'
		});
		$msg = $('.sltmMsg');
		divH=$('.sltmReel div').height();
		indexPrevN=reels[0].indexOf(sm.prevN-1);
		indexNextN=reels[0].indexOf(sm.nextN-1);
		prevNum=$('.sltmReel div p').eq(indexPrevN).position().top;
		$('.sltmReel').stop().animate({scrollTop:prevNum},500,'swing');
		//$('.sltmReel').scrollTop=prevNum;
		$('.sltmTitle').click(actionReel);
		setTimeout(actionReel,2000);
	}

	function countInputNum(){
		var ciNum=parseInt($('.sltmReelCount .countN').html());
		$('.countN').each(function () {
			$(this).prop('Counter',ciNum).animate({
				//Counter: $(this).text()
				Counter: 0
			}, {
				duration: tMax,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	}

	function actionReel(){
		countInputNum();
		if (start !== undefined) return;
		for (var i = 0; i < 1; ++i) {
			//speeds[i] = Math.random() + .5;
			//r[i] = (Math.random() * reels[i].length | 0) * divH / reels[i].length;
			speeds[i]=0.9;
			r[i]=$('.sltmReel div p').eq(indexNextN).position().top;
		}
		//alert(reels[0].length+"__"+speeds[0]+"_"+r[0]);
		$msg.removeClass('sltmEnd').addClass('sltmRunning');
		animateReel();
	}

	function animateReel(now){
		if (!start) start = now;
		var t = now - start || 0;
		for (var i = 0; i < 1; ++i)
			$reels[i].scrollTop = (speeds[i] / tMax / 2 * (tMax - t) * (tMax - t) + r[i]) % divH || 0;
		if (t < tMax){
			requestAnimationFrame(animateReel);
		}else {
			start = undefined;
			callBigTag(sm.nextN);
			//alert($reels[0].scrollTop);
			$msg.removeClass('sltmRunning').addClass('sltmEnd');
		}
	}
	
	function callBigTag(tagN){
		$('#bigTagOpenBox .btfPriceNum').html(tagN);
		setTimeout('callPopup2("#bigTagOpenBox")',2000);
	}

	return {init: init}
})();

$(sm.prevN=Math.floor(Math.random()*999)+1,sm.nextN=Math.floor(Math.random()*999)+1);
//$(sm.init);
/* Slot Machine e */

//jquery function
$(function($){
	//scroll s-----------------
	$(window).scroll(function(){
		quick_menu_act();
	});
	//scroll e-----------------

	//lnb UI s-----------------
	function hideLnb(){
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objHide($('#lnb_2d_bg'));
	}
	$('.lnb_1d > li > a').focus(function(){
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objShow($(this).parent().find('.lnb_2d'));
		$(this).parent().addClass('overOn');
	});
	$('.lnb_1d > li > a').hover(function(){
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objShow($(this).parent().find('.lnb_2d'));
		$(this).parent().addClass('overOn');
	});
	$('.lnb_2d li > a').hover(function(){
		$('.lnb_1d > li').removeClass('overOn');
		$(this).parents('li').parent().parent().parent().addClass('overOn');
	});
	$('.cate_1d > li > a').hover(function(){
		$('.cate_1d > li').removeClass('overOn');
		$(this).parent().addClass('overOn');
		objHide($('.cate_2d'));
		objShow($(this).parent().find('.cate_2d'));
	});
	$('.cate_2d > li > a').hover(function(){
		$('.cate_2d > li').removeClass('overOn');
		$(this).parent().addClass('overOn');
		objHide($('.cate_3d'));
		objShow($(this).parent().find('.cate_3d'));
	});
	$('.lnbCloseBtn').click(function(){
		hideLnb();
	});
	$('#gnb').mouseover(function(){
		hideLnb();
	});
	$('#headBox').mouseover(function(){
		hideLnb();
	});
	$('#mainGoodsBox').mouseover(function(){
		hideLnb();
	});
	$('#contents').mouseover(function(){
		hideLnb();
	});
	//lnb UI e-----------------

	//snb UI s-----------------
	$('.snb_1d > li > a').click(function(){
		var totalIndex=$('.snb_1d > li').length;
		var tempIndex=$('.snb_1d > li').index($(this).parent());
		for(i=0;i<totalIndex;i++){
			if(i!=tempIndex){
				$('.snb_1d > li').eq(i).removeClass('openLi');
				$('.snb_1d > li').eq(i).find('a .fa').removeClass('fa-caret-up').addClass('fa-caret-down');
				$('.snb_1d > li').eq(i).find('.snb_2d').slideUp();
			}
		}
		$(this).next('.snb_2d').slideToggle("",function(){
			if($(this).parent().height()>50){
				$(this).parent().addClass('openLi');
				$(this).parent().find('a .fa').removeClass('fa-caret-down').addClass('fa-caret-up');
			}else{
				$(this).parent().removeClass('openLi');
				$(this).parent().find('a .fa').removeClass('fa-caret-up').addClass('fa-caret-down');
			}
		});
	});
	//snb UI e-----------------

	//slideList UI s-----------------
	$('.slideListBox .titleLine a').click(function(){
		var totalIndex=$('.slideListBody > li').length;
		var tempIndex=$('.slideListBody > li').index($(this).parent().parent().parent());
		for(i=0;i<totalIndex;i++){
			if(i!=tempIndex){
				$('.slideListBody > li').eq(i).removeClass('openLine');
				$('.slideListBody > li').eq(i).find('a.slideBtn').removeClass('slideUpBtn').addClass('slideDownBtn');
				$('.slideListBody > li').eq(i).find('.conLine').slideUp();
			}
		}
		$(this).parent().parent().next('.conLine').slideToggle("",function(){
			if($(this).parent().height()>50){
				$(this).parent().addClass('openLine');
				$(this).parent().find('a.slideBtn').removeClass('slideDownBtn').addClass('slideUpBtn');
			}else{
				$(this).parent().removeClass('openLine');
				$(this).parent().find('a.slideBtn').removeClass('slideUpBtn').addClass('slideDownBtn');
			}
		});
	});
	$('.slideListBox .titleLine').hover(function(){
		$(this).parent().addClass('actOn');
	},function(){
		$(this).parent().removeClass('actOn');
	});
	$('.slideListBox .slideCloseBtn').click(function(){
		$(this).parent().parent().parent().removeClass('openLine');
		$(this).parent().parent().parent().find('a.slideBtn').removeClass('slideUpBtn').addClass('slideDownBtn');
		$(this).parent().parent().parent().find('.conLine').slideUp();
	});
	//slideList UI e-----------------
	
	//BtnAction  s-----------------
	function srclAction(obj,act){
		var moveObj=obj.parent().parent().find('ul');
		var tempWrapH=moveObj.find('li').height();
		var currentY=moveObj.position().top;
		switch(act){
			case 'up':
				if(Math.abs(currentY)>0){
					currentY+=tempWrapH;
					if(!moveObj.is(':animated')){
						moveObj.animate({"top":currentY+"px"},500,'linear');
					}
				}else{
					if(!moveObj.is(':animated')){
						moveObj.animate({"top":-(moveObj.height()-tempWrapH)+"px"},500,'linear');
					}
				}
				break;
			case 'down':
				if(Math.abs(currentY)<moveObj.height()-tempWrapH){
					currentY-=tempWrapH;
					if(!moveObj.is(':animated')){
						moveObj.animate({"top":currentY+"px"},500,'linear');
					}
				}else{
					if(!moveObj.is(':animated')){
						moveObj.animate({"top":"0px"},500,'linear');
					}
				}
				break;
		}
	}
	$('.scrlUp').click(function(){
		srclAction($(this),'up');
	});
	$('.scrlDown').click(function(){
		srclAction($(this),'down');
	});
	//pageTab
	$(".pageTab a").click(function(){
		var targetObj=$(this).attr('href');
		scrollMove($(targetObj));
	});
	//divPop
	$(".divPopupBox .closePopBtn").click(function(){
		hidePopup($(this).parents('.divPopupBox'));
	});
	//divPop-demo2
	var global_tag_num=0;
	$(".tagNumInput").click(function(){
		$(this).focus();
	});
	$(".inpnNumKey li a").click(function(){
		var inputNum=$(".inpnInputBox .tagNumInput");
		var inputVal=inputNum.val();
		var clickNum=parseInt($(this).find('.blind').html());
		if(inputVal.length<3){
			inputNum.val(inputVal+clickNum);
		}
	});
	$(".inpnInputBox label").click(function(){
		$(".inpnInputBox .tagNumInput").val("");
	});
	$(".inpnAutoKey a").click(function(){
		var tempNum=Math.floor(Math.random()*999)+1;
		$(".inpnInputBox .tagNumInput").val(tempNum);
	});
	$(".tagNumSubmit").click(function(){
		global_tag_num=$(".inpnInputBox .tagNumInput").val();
		if(global_tag_num!=""){
			objHide($(this).parents('.divPopupBox'));
			$('#slotMachineBox .sltmReelCount .countN').html(global_tag_num);
			callPopup('#slotMachineBox');
			setTimeout('$(sm.init)',1000);
		}else{
			alert("행운의 숫자를 입력해주세요");
		}
		
	});
	$("#bigTagOpenBox .bigTagFront").click(function(){
		$(this).addClass('slideClick');
		hidePopup($('#slotMachineBox'));
		$('body').addClass('actPop');
		$("#bigTagOpenBox .bigTagBack_after .celebrationBox").addClass('actBefore');
		$("#bigTagOpenBox .bigTagBack_after .celebrationBox").show();
		$("#bigTagOpenBox .celebrationBg").show();
		setTimeout('actAnim($("#bigTagOpenBox .bigTagBack_after .celebrationBox"),"bounceInLeft")',6000);
		setTimeout('celebrationCanvas.animate()',7000);
		setTimeout('$("#bigTagOpenBox .bigTagBack_after .celebrationBox").addClass("actScale")',7000);
		setTimeout('actAnim($("#bigTagOpenBox .bigTagBack_after .btbaDescTxt"),"bounceInRight")',6500);
		setTimeout('$("#bigTagOpenBox .celebrationBg").addClass("actClbr")',7000);
		setTimeout('hidePopup2($(".divPopupBox"))',12000);
		setTimeout('hidePopup($(".divPopupBox"))',12000);
		setTimeout('$("#bigTagOpenBox .bigTagFront").removeClass("slideClick");',12000);
		setTimeout('tagKeepBoxAct();',12000);
		setTimeout('callPopup("#tagResultBox")',12000);
		$("#bigTagOpenBox .hoverHand").hide();
	});
	$("#tagResultBox .trTagBtns .trTagBtn3").click(function(){
		$(".inpnInputBox .tagNumInput").val('');
		$("#bigTagOpenBox .bigTagBack_after .celebrationBox").hide();
		$("#bigTagOpenBox .celebrationBg").hide();
		$("#bigTagOpenBox .bigTagBack_after .celebrationBox").removeClass("actScale animated bounceInLeft").addClass("actBefore");
		$("#bigTagOpenBox .bigTagBack_after .btbaDescTxt").addClass("actBefore");
		$("#bigTagOpenBox .celebrationBg").removeClass("actClbr");
		$('.sltmMsg').removeClass('sltmRunning sltmEnd');
		hidePopup2($('.divPopupBox'));
		hidePopup($('.divPopupBox'));
		bigTagToggle();
		callPopup('#inputNumBox');
	});
	//divPop-demo1
	$("#cubeSelectBox .cubeBoxWrap a").click(function(){
		objHide($(this).parents('.divPopupBox'));
		callPopup('#tagSelectBox');
	});
	$("#tagSelectBox .tagBoxWrap a").click(function(){
		var tagIndex=$('#tagSelectBox .tagBoxWrap li').index($(this).parent());
		$('#tagSelectDoneBox .tagBoxWrap li').removeClass('checked');
		$('#tagSelectDoneBox .tagBoxWrap li').eq(tagIndex).addClass('checked').find('a').append('<div class="checkedTag actOn"></div>');
		$('#tagOpenBox .openTagNum').html(tagIndex+1);
		callPopup2('#tagOpenBox');
	});
	$("#tagOpenBox .tagOpenCancel").click(function(){
		hidePopup2($(this).parents('.divPopupBox'));
	});
	$("#tagOpenBox .tagOpenSubmit").click(function(){
		objHide($(this).parents('.divPopupBox'));
		tagKeepBoxAct();
		callPopup('#tagSelectDoneBox');
		setTimeout('callPopup2("#tagOpenResultBox")',500);
	});
	$("#tagOpenResultBox .tagResultMore").click(function(){
		hidePopup2($('.divPopupBox'));
		hidePopup($('.divPopupBox'));
		bigTagToggle();
		callPopup('#cubeSelectBox');
	});
	//divPop_hover
	$("#cubeSelectBox .cubeBox").hover(function(){
		$(this).addClass('hoverEff');
	},function(){
		$(this).removeClass('hoverEff');
	});
	$("#tagSelectBox .tagImg").hover(function(){
		$(this).addClass('hoverEff');
	},function(){
		$(this).removeClass('hoverEff');
	});
	//tagKeep
	$(".tagKeepBoxWrap .tagKeepBoxClose").click(function(){
		$(this).parents('.tagKeepBoxWrap').slideUp()
	});
	$(".bigTagBox .bgtStatus a").click(function(){
		bigTagToggle();
	});
	$(".tagKeepBoxWrap .tagKeepUse").click(function(){
		hidePopup2($('.divPopupBox'));
		hidePopup($('.divPopupBox'));
		//callPopup('#tagUseBox');
	});
	//BtnAction UI e-----------------
});

//window load
$(document).ready(function(){
	$('select').selectOrDie();
	$('.balloonTip').popover({
		html : true,
		trigger : "hover"
	});
	quick_menu_act();
	//positionPop('.divPopupBox');
	//$('.tagKeepBoxWrap').slideDown();
	//callPopup('#bigTagOpenBox');
	//callPopup('#tagSelectBox');
	//callPopup('#tagSelectDoneBox');
	//callPopup('#tagOpenBox');
	//callPopup('#tagOpenResultBox');
	//callPopup('#tagUseBox');
	//tagKeepBoxAct();
	//$('#cubeSelectBox').modal();
});

