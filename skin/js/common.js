//common funtion
function viewport() { //meta viewport 분기
	var isMobile = false; //initiate as false
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { isMobile = true }
	var win_w = $(window).width();
	var win_w=window.innerWidth;
	if(!isMobile){
		if (win_w <= 1024 && win_w >= 769) {
			$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=0.6, maximum-scale=1.0, minimum-scale=0.6, user-scalable=yes, target-densitydpi=medium-dpi");
		} else if (win_w <= 768 && win_w >= 451) {
			$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=0.5, maximum-scale=1.0, minimum-scale=0.5, user-scalable=yes, target-densitydpi=medium-dpi");
		} else if (win_w <= 450) {
			$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=0.3, maximum-scale=1.0, minimum-scale=0.3, user-scalable=yes, target-densitydpi=medium-dpi");
		} else {
			$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi");
		}
	}
}
function newWin(url,nw,nh){ //새창열기
	cw=screen.availWidth;
	ch=screen.availHeight;
	ml=(cw-nw)/2;
	mt=(ch-nh)/2;
	optionT='width='+nw+',height='+nh+',top='+mt+',left='+mt+',toolbar=no,location=no,status=no,menubar=no,resizable=no,scrollbars=yes';
	window.open(url,'TaginTag',optionT);
	return false;
}
function tutorialOpen(rUrl){ //튜토리얼 오픈
	var tUrl=rUrl+"tagintag/tutorial_0.html";
	newWin(tUrl,1020,800);
}
function objShow(obj){ //obj 보이기
	obj.css('display','block');
}
function objHide(obj){ //obj 숨기기
	obj.css('display','none');
}
function currentTab(num){ //현재 tab 표시
	$('.tabBox li').eq(num).addClass('actOn');
}
function scrollMove(obj,addH){ //페이지 내 특정 obj 위치 스크롤이동
	if(addH!=undefined){
		var tempPosition=$(obj).offset().top+parseInt(addH);
	}else{
		var tempPosition=$(obj).offset().top;
	}
	$('html, body').stop().animate({scrollTop:tempPosition},300,'swing');
	return false;
}
function changeLocation(lnb_1d,snb_1d,snb_2d){ //location에 현재 페이지 변경
	var currentLnb=$('.snbTitle > div').html();
	var currentSnb1=$('.snb_1d > li.actOn > a').html();
	var currentSnb2=$('.snb_2d > li.actOn > a').html();
	if(currentSnb2!=null){
		var arrayCurrentSnb2=currentSnb2.split("<span");
		currentSnb2=arrayCurrentSnb2[0];
	}
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
function currentLocation(lnb_1d,snb_1d,snb_2d){ //location에 현재 페이지 표시
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
function currnetJoinStep(n){ //회원가입 현재 탭 활성화
	var stepObj=$('.mbJoinStepBox li.mbjStep').eq(n);
	stepObj.prev().addClass('actOn1');
	stepObj.addClass('actOn');
	stepObj.next().addClass('actOn3');
}
function divPopBg_show(){ //divpopup Bg 보이기
	objShow($(".divPopupBg"));
}
function divPopBg_hide(){ //divpopup Bg 숨기기
	objHide($(".divPopupBg"));
}
function divPopBg2_show(){ //divpopup Bg2 보이기
	objShow($(".divPopupBg2"));
}
function divPopBg2_hide(){ //divpopup Bg2 숨기기
	objHide($(".divPopupBg2"));
}
function positionPop(obj){ //divpopup 가운데 정렬 (margin)
	var tempW="-"+$(obj).width()/2+"px";
	var tempH="-"+$(obj).height()/2+"px";
	if(obj=="#tagOpenResultBox"){
		tempH="-"+(($(obj).height()/2)+200)+"px";
	}
	$(obj).css({"margin-top":tempH,"margin-left":tempW});
}
function positionPop2(obj){ //divpopup 가운데 정렬 (top,left)
	$(obj).css({"top":0,"left":0});
	var tempW=(window.innerWidth-$(obj).width())/2+"px";
	var tempH=(window.innerHeight-$(obj).height())/2+"px";
	if(obj=="#tagOpenResultBox"){
		tempH="-"+(($(obj).height()/2)+200)+"px";
	}
	$(obj).css({"top":tempH,"left":tempW});
}
function callPopup(obj){ //divpopup 보이기
	$('body').addClass('actPop'); //body 스크롤 막기
	positionPop(obj);
	divPopBg_show();
	objShow($(obj));
	actFadeEff($(obj));
}
function callPopup2(obj){ //divpopup2 보이기
	$('body').addClass('actPop');
	positionPop(obj);
	divPopBg2_show();
	objShow($(obj));
	actFadeEff($(obj));
}
function hidePopup(obj){ //divpopup 숨기기
	$('body').removeClass('actPop');
	resetFadeEff(obj);
	divPopBg_hide();
	objHide($(obj));
}
function hidePopup2(obj){ //divpopup2 숨기기
	$('body').removeClass('actPop');
	resetFadeEff(obj);
	divPopBg2_hide();
	objHide($(obj));
}
function nextPopup(pObj,nObj){ //nextdivpopup 보이기
	var closeObj=pObj.parents('.divPopupBox');
	resetFadeEff(closeObj);
	objHide($(closeObj));
	positionPop(nObj);
	objShow($(nObj));
	actFadeEff($(nObj));
}
var quickY=255; //quickMenu 초기 위치
function quick_menu_act(qy){ //quickMenu 활성화
	var quick=$('#quickMenuBox');
	var quickPY=qy;
	var winPY=$(window).scrollTop();
	if(winPY>quickPY){
		quick.stop().animate({'top':winPY+100+'px'},500);
	}else{
		quick.stop().animate({'top':quickPY+'px'},500);
	}
}
function top_btn_act(){ //topBtn 활성화
	var topBtn=$('#contentsTopBtn');
	var topBtnParentPY=topBtn.parent().offset().top;
	var winPY=$(window).scrollTop();
	var screenH=$(window).height();
	var topBtnFinalPY=(winPY-topBtnParentPY)+screenH-topBtn.height();
	var topBtnParentMaxH=topBtn.parent().height()-topBtn.height();
	//console.log("===> topBtnFinalPY : "+topBtnFinalPY);
	//console.log("===> topBtnParentMaxH : "+topBtnParentMaxH);
	if(winPY>topBtnParentPY){
		if(topBtnFinalPY>topBtnParentMaxH){
			topBtn.css({'opacity':'1'});
			topBtn.stop().animate({'top':topBtnParentMaxH+'px'},500);
		}else{
			topBtn.css({'opacity':'1'});
			topBtn.stop().animate({'top':topBtnFinalPY+'px'},500);
		}
	}else{
		topBtn.stop().animate({'opacity':'0'},500);
	}
}
function top_btn_act2(){ //topBtn2 활성화
	var topBtn=$('#contentsTopBtn2');
	var topBtnParentPY=topBtn.parent().offset().top;
	var winPY=$(window).scrollTop();
	var screenH=$(window).height();
	var topBtnFinalPY=(winPY-topBtnParentPY)+screenH-topBtn.height();
	var topBtnParentMaxH=topBtn.parent().height()-topBtn.height();
	if(winPY>topBtnParentPY){
		if(topBtnFinalPY>topBtnParentMaxH){
			//topBtn.css({'opacity':'1'});
			topBtn.stop().animate({'right':0+'px'},200);
		}else{
			//topBtn.css({'opacity':'1'});
			topBtn.stop().animate({'right':20+'px'},200);
		}
	}else{
		topBtn.stop().animate({'right':'-50px'},200);
	}
}
//숫자 카운트-v1
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
//숫자 카운트-v2
function count_down2(obj){
	total_time--;
	hour=total_time/3600;
	minute=(total_time/60)%60;
	second=total_time%60;
	obj.html(parseInt(total_time));
	if(total_time<=0){
		clearInterval(timeCount);
		obj.html(parseInt(0));
	}
}
function time_count2(obj){
	var sec=obj.html();
	if(sec==null){
		total_time=60;
	}
	total_time=sec;
	clearInterval(timeCount);
	timeCount=setInterval(function(){count_down2(obj);},1000);
}
function setDatePick(obj){ //calender 셋팅
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
function actFadeEff(obj){ //fade effect 활성화
	obj.addClass('in-view');
	obj.find('.fadeEff').addClass('in-view');
}
function resetFadeEff(obj){ //fade effect 초기화
	var fadeEff = obj.find('.fadeEff');
	obj.removeClass('in-view');
	$.each(fadeEff, function(){
		var elem = $(this);
		elem.removeClass('in-view');
	});
}
function actAnim(obj,act) { //acting Animation (animation.css 참조)
	obj.removeClass(act + ' animated').addClass(act + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass(act + ' animated actBefore');
	});
};
function setComma( num ){ // 숫자콤마
	return String(num).replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,'); // 정규식을 통한 콤마 넣기
}

//jquery function s-----------------
$(function($){
	//scroll s-----------------
	$(window).scroll(function(){ //스크롤시 quickMenu 활성화
		quick_menu_act(quickY);
	});
	//scroll e-----------------

	//lnb UI s-----------------
	$('.lnb_1d > li > a').focus(function(){ //lnb_1d focus
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objShow($(this).parent().find('.lnb_2d'));
		$(this).parent().addClass('overOn');
	});
	$('.lnb_1d > li > a').hover(function(){ //lnb_1d hover
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objShow($(this).parent().find('.lnb_2d'));
		$(this).parent().addClass('overOn');
	});
	$('.lnb_2d li > a').hover(function(){ //lnb_2d hover
		$('.lnb_1d > li').removeClass('overOn');
		$(this).parents('li').parent().parent().parent().addClass('overOn');
	});
	/* //상품 카테고리가 있는 메뉴
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
	*/
	function hideLnb(){ //lnb 숨기기
		$('.lnb_1d > li').removeClass('overOn');
		objHide($('.lnb_2d'));
		objHide($('#lnb_2d_bg'));
	}
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
	/*
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
	*/
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

	//goodsOption_slide s-----------------
	$('#buyOptionInfoBox .boiTit a').click(function(){
		if($(this).parent().next('.boiCon').height()<=120){
			$(this).parent().parent().addClass('actOn');
			$(this).parent().next('.boiCon').css('max-height','none');
		}else{
			$(this).parent().parent().removeClass('actOn');
			$(this).parent().next('.boiCon').css('max-height','120px');
		}
	});
	//goodsOption_slide UI e-----------------

	//BtnAction  s-----------------
	//스크롤되는 게시판(메인) s---------------
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
	//스크롤되는 게시판(메인) e---------------

	//subPage s---------------
	$(".pageTab a").click(function(){ //pageTab 클릭시 스크롤 이동
		var targetObj=$(this).attr('href');
		scrollMove($(targetObj));
	});
	$(".infoPopBtn").hover(function(){ //mypage 느낌표 아이콘
		$(this).next().slideToggle();
	});
	$(".serviceIndexBox li a").on('click',function(){ //택인택이란 > 서비스 소개
		$('.serviceIndexBox li').removeClass('actOn');
		$(this).parent().addClass('actOn');
		$('.serviceConBox').hide();
		var targetObj=$(this).attr('href');
		$(targetObj).show();
		scrollMove($(targetObj),"-80");
	});
	$(".bizInfoBtn").click(function(){ // footer 사업자 정보 확인
		var bizUrl="http://www.ftc.go.kr/info/bizinfo/communicationViewPopup.jsp?wrkr_no="+"4708600523";
		window.open(bizUrl, "communicationViewPopup", "width=750, height=700;");
	});
	$("#qckTopBtn a").click(function(){ //quick topBtn 클릭시 스크롤 이동
		var targetObj=$(this).attr('href');
		scrollMove($(targetObj));
	});
	$("#contentsTopBtn a").click(function(){ //topBtn 클릭시 스크롤 이동
		var targetObj=$(this).attr('href');
		scrollMove($(targetObj));
	});
	$("#contentsTopBtn2 a").click(function(){ //topBtn2 클릭시 스크롤 이동
		var targetObj=$(this).attr('href');
		scrollMove($(targetObj));
	});
	//subPage e---------------

	//divPop s---------------
	$(".divPopupBox .closePopBtn").click(function(){
		hidePopup($(this).parents('.divPopupBox'));
	});
	//divPop e---------------
	
	//BtnAction UI e-----------------

	//window load after s ------------
	viewport();
	//$('select').selectOrDie(); //개발자 요청으로 사용안하기로 함 20170414
	$('.balloonTip').popover({ 
		html : true,
		trigger : "hover"
	});
	quick_menu_act(quickY);
	//window load after e ------------
});
//jquery function e-----------------

$(window).on("orientationchange",function(){ //화면 회전
	if(window.orientation == 0){ // Portrait
		viewport();
	}else{ // Landscape
		viewport();
	}
});

/******************************** 택관련 함수 ************************************/
function tagKeepBoxAct(bigTStatus){ //상단 택보관 박스 활성화
	if(bigTStatus){
		$('.tagKeepBoxWrap').slideDown();
		bigTagToggle();
	}else{
		$('.tagKeepBoxWrap').slideDown();
	}
	time_count2($('.leftTimeTag')); //시간 카운트
}
function bigTagClose(){ // 택보관 닫기
	console.log("====> bigTagClose() 책갈피 닫기  ");
	$(".tagKeepBoxWrap").slideUp()
}
function bigTagToggle( open ){ // 택보관 토글
	var bigTag=$('.bigTagBox');
	var tempWrapH = bigTag.height()-90;
	var currentY = bigTag.position().top;
	if( !open && currentY > 0){
		console.log( "===> 토글 접기 " );
		//접기
		bigTag.animate({"top":-(tempWrapH)+"px"},500,'linear');
		bigTag.find('.bgtStatus').removeClass('bgtSttClose').addClass('bgtSttOpen');	// 접어놓기
		objShow($('.tkTimeCon1')); // 접은경우 시간
		objHide($('.tkTimeCon2')); // 접은경우 문구
	}else{
		console.log( "===> 토글 내리기 " );
		//열기
		bigTag.animate({"top":80+"px"},500,'linear');
		bigTag.find('.bgtStatus').removeClass('bgtSttOpen').addClass('bgtSttClose');	// 접어놓기
		objHide($('.tkTimeCon1')); // 접은경우 시간
		objShow($('.tkTimeCon2')); // 접은경우 문구
	}
}
$(function(){ // 온로드시
	$(".tagKeepBoxWrap .tagKeepBoxClose").click(function(){ // 택보관 - X버튼
		bigTagClose();
	});
	$(".bigTagBox .bgtStatus").click(function(){ // 접어놓기 버튼
		bigTagToggle();
	});
});
/******************************** 택관련 함수 ************************************/