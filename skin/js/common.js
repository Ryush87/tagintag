//common funtion
function viewport() { //meta viewport 분기
	var win_w = $(window).width();
	var win_w=window.innerWidth;
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
	$('html, body').stop().animate({scrollTop:tempPosition},500,'linear');
	return false;
}
function changeLocation(lnb_1d,snb_1d,snb_2d){ //location에 현재 페이지 변경
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
function top_btn_act(qy){ //topBtn 활성화
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
//숫자 카운트
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
function tagKeepBoxAct(){ //상단 택보관 박스 활성화
	$('.tagKeepBoxWrap').slideDown();
	bigTagToggle();
	time_count();
}
function bigTagToggle(){ //상단 택보관 박스의 세로로 있는 택 Toggle
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


// 결제금액 계산
function get_tag_price( row ){
	var tag_price = Math.ceil( parseInt( row.ta_price ) - ( parseInt( row.ta_price ) * parseInt( row.ti_percent ) /  100 ) );
	return tag_price;
}

// 0으로 채우기  padDigits(10, 4); // "0010"
function padDigits(number, digits) {
    return Array(Math.max(digits - String(number).length + 1, 0)).join(0) + number;
}

// 랜덤함수, min (포함) 과 max (포함) 사이의 임의 정수를 반환
function getRandomIntInclusive(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// 책갈피 html 셋팅
function tagKeepHtmlSet( row ){
	console.log( "=====> ### 주문 대기중 택 ###: "+ JSON.stringify(row) );
	if( row != null ){
		// 주문 남은 시간, 크론차이 7초
		var sub_sec = parseInt(row.lock_date_sec) - 10;
		// 주문시간 없다면, 오픈시간 대입
		if( sub_sec < 1 ){
			sub_sec = parseInt(row.regdate_sec);	
			// 크론과 시간차, 2초 빼줌
			sub_sec = sub_sec - 2;
			if( sub_sec > TAG_TIME.open ) sub_sec = TAG_TIME.open;	// 60초 제한
		}
		if( sub_sec > 0 ){
			G_TAG.row = row;
			G_TAG.ta_id = row.ta_id;
			G_PARM.getCnt = row.seq;
			G_TIMER.openCnt = sub_sec;
			console.log( "===> 남은시간: "+ G_TIMER.openCnt );
			// 책갈피 html 셋팅
			var price = get_tag_price( row );
			// 제품명
			$(".tagKeepBoxWrap .tkGoodsName").html( row.gd_name );
			// 상단 바 금액	
			$(".tagKeepBoxWrap .cancelLine").html( setComma(row.ta_price)+"원" );
			$(".tagKeepBoxWrap .tkPrice").html( " : "+setComma(price)+"원 / "+row.ti_percent+"% OFF" );
			// 상단 책갈피
			$(".tagKeepBoxWrap #bgtRate_str").html( row.ti_percent+"%" );
			$(".tagKeepBoxWrap #bgtPrice_str").html( setComma(price) );	
			// 상단바 내리기
			$('.tagKeepBoxWrap').slideDown();
			// 타이머 가동
			timerOpenLauncher();
		}
	}

}

// 책갈피 오픈 타이머
function timerOpenLauncher(){
	console.log( "=====> 타이머 시작" );
	$('.tagKeepBoxWrap').slideDown();	
	timerOpenStart();
}
function timerOpenStart(){
	clearInterval(G_TIMER.openTimer);
	G_TIMER.openTimer = setInterval(function(){ timerOpenLoop(); },1000);	
}
function timerOpenLoop(){
	G_TIMER.openCnt --;
	console.log( "===> timerOpenLoop() " );
	$('.tagKeepBoxWrap .leftTimeTag').html(parseInt(G_TIMER.openCnt));
	if(G_TIMER.openCnt === 0){
		clearInterval(G_TIMER.openTimer);		
		// 링크 막기
		G_PARM.getCnt = 0;
	}
}

// 주문 , 양도
function orderTag( linkUrl ){
	console.log("===> 양도/주문 링크이동: "+G_PARM.getCnt);
	clearInterval(G_TIMER.openTimer);
	if( linkUrl == "onMore" ){	// 한번더
		onMoreStart();
	}else{
		if( G_PARM.getCnt > 0 ){
			// 오픈 처리
			var param = "is_percent=y&ta_id="+G_TAG.ta_id+"&seq="+G_PARM.getCnt;	
			location.href = "/goods/"+ linkUrl+"?"+param;
		}else{
			alert('마감 시간이 지났습니다 다시 시도해 주세요');
			return;
		}
	}
}

// 책갈피 닫기
function bigTagClose(){	
	console.log("====> bigTagClose() 책갈피 닫기  ");
	//clearInterval(G_TIMER.openTimer); //for_pub
	$(".tagKeepBoxWrap").slideUp()
}



// 책갈피 토글
function bigTagToggle( open ){	
	var bigTag=$('.bigTagBox');
	var tempWrapH = bigTag.height()-90;
	var currentY = bigTag.position().top;
	if( !open && currentY > 0){
		console.log( "===> 토글 접기 " );
		//접기
		bigTag.animate({"top":-(tempWrapH)+"px"},500,'linear');
		bigTag.find('.bgtStatus').removeClass('bgtSttClose').addClass('bgtSttOpen');	// 접어놓기
		objShow($('.tkTimeCon1'));		// 접은경우 시간
		objHide($('.tkTimeCon2'));		// 접은경우 문구		
	}else{
		console.log( "===> 토글 내리기 " );
		//열기
		bigTag.animate({"top":80+"px"},500,'linear');
		bigTag.find('.bgtStatus').removeClass('bgtSttOpen').addClass('bgtSttClose');	// 접어놓기
		objHide($('.tkTimeCon1'));		// 접은경우 시간
		objShow($('.tkTimeCon2'));		// 접은경우 문구
	}
}


// 제품 바로가기
function goGoodsLink(){
	location.href = '/goods/ing_goods.html?gd_no='+G_TAG.row.gd_no;
}




// 온로드시
$(function(){

	// 책갈피 - X버튼
	$(".tagKeepBoxWrap .tagKeepBoxClose").click(function(){
		bigTagClose();
	});

	// 접어놓기 버튼
	$(".bigTagBox .bgtStatus").click(function(){
		bigTagToggle();
	});

});		//  $(function(){


/******************************** 택관련 함수 ************************************/