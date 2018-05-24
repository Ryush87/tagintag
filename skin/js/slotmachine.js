// 전역변수
var FWORKS = null;
var IS_STOP = false;
var G_MEM = { "is_member":1, "tp_point":1 }
var G_DRAG = { "mouseX":0, "orgDivX":0, "isTagOpen":false };

// 슬롯머신 클래스
var SlotMachineClass = new function(){

	// 셋팅
	var G_ARR_DATA;
	var G_PARM;

	// 재설정
	this.reset = function(){
		console.log("\n======> reset() ");
		// 초기화
		G_ARR_DATA = [];
		G_PARM = { "cnt":0, "viewCnt":0, "getCnt":0, "length":0, "userCnt":0, "speedMax":500, "stopCnt":5 }
		//var end_cnt = parseInt(999 - (150 * Math.random()));
		var start_cnt = 36;

		// 데이터 배열에 넣기		
		for( var i = start_cnt; i <= 999; i++ ){
			G_ARR_DATA.push(i);
		}

		// 카운트 2번 생성
		var str = '<div class="div1">';
		$.each( G_ARR_DATA, function() { str += "<p>"+this+"</p>"; });
		$.each( G_ARR_DATA, function() { str += "<p>"+this+"</p>"; });
		str += '</div>';
		//console.log("===> str: "+str);
		$('.sltmReel').html(str);

	}
	
	// 초기화 함수
	this.start = function(){
		console.log("===> start() ");
		// 함수전언
		animateSpin = this.animateSpin;
		animateStopMove = this.animateStopMove;
		// 리셋
		this.reset();
		// 초기화
		G_PARM.userCnt = $(".inpnInputBox .tagNumInput").val();
		G_PARM.viewCnt = G_PARM.userCnt;
		console.log("===> 전체: "+G_ARR_DATA.length +", 사용자: "+G_PARM.userCnt);
		setTimeout( function(){
			// 스핀 타이틀
			$('.sltmMsg').removeClass('sltmEnd').addClass('sltmRunning');
			animateSpin();
		}, 2000);
	}


	// 스핀 애니
	this.animateSpin = function(){
		// 함수전언
		animateSpin = this.animateSpin;	
		// 뷰카운터
		$('#slotMachineBox .sltmReelCount .countN').html( G_PARM.viewCnt );

		// 정지버튼
		if( IS_STOP ){
			IS_STOP = false;
			if( G_PARM.viewCnt > 3 ){
				var subCnt = G_PARM.viewCnt - 3;
				G_PARM.cnt = G_PARM.cnt + subCnt;
				G_PARM.viewCnt = G_PARM.viewCnt - subCnt;
			}			
		}
		// 완료시 이동
		if( G_PARM.viewCnt == 0 ) {
			setTimeout( animateStopMove, 0);
			return;			
		}else{
			// 스텝
			var stepCnt = 1;
			// 속도조절
			var rate = 1;

			// 처음시작
			if( G_PARM.cnt < 2 ) rate = 0.7;
			else if( G_PARM.cnt < 3 ) rate = 0.5;
			else if( G_PARM.cnt < 7 ) rate = 0.3;
			else if( G_PARM.cnt < 10 ) rate = 0.2;
			else if( G_PARM.cnt > 10 && G_PARM.viewCnt > 50 ){
				// 건너뛰기
				rate = 0.1;
				if( G_PARM.viewCnt > 800 ) stepCnt= 30;
				else if( G_PARM.viewCnt > 600 ) stepCnt= 25;
				else if( G_PARM.viewCnt > 400 ) stepCnt= 20
				else if( G_PARM.viewCnt > 200 ) stepCnt= 15;
				G_PARM.cnt += stepCnt;
				G_PARM.viewCnt -= stepCnt;
			}
			// 마지막
			else if( G_PARM.viewCnt > 50 ) rate = 0.1;
			else if( G_PARM.viewCnt > 20 ) rate = 0.15;
			else if( G_PARM.viewCnt > 10 ) rate = 0.2;
			else if( G_PARM.viewCnt > 5 ) rate = 0.3;
			else if( G_PARM.viewCnt > 2 ) rate = 0.9;
			
			var aniSpeed = parseInt(G_PARM.speedMax * rate);	
			// 다음위치
			G_PARM.length = $('.sltmReel div p').eq( G_PARM.cnt ).position().top + $('.sltmReel div p').height() + parseInt($('.sltmReel div p').css("margin-top"));
			G_PARM.getCnt =  $('.sltmReel div p').eq( (G_PARM.cnt+2) ).html();
			// 재귀 호출
			//console.log("===> animateReady()  rate ["+rate+"] ["+G_PARM.length+"] 값 ["+G_PARM.getCnt+"], step ["+stepCnt+"], cnt ["+G_PARM.cnt+"] view ["+G_PARM.viewCnt+"]   ");
			$('.sltmReel').animate({ scrollTop:G_PARM.length }, aniSpeed, "linear", function(){ animateSpin(); });			
			G_PARM.cnt++;
			G_PARM.viewCnt--;
		}
	}
	
	// 정지이동
	this.animateStopMove = function(){
		console.log("===> 완료 이동 ["+G_PARM.getCnt +"]  ");
		$('.sltmMsg').removeClass('sltmRunning').addClass('sltmEnd');	// 메시지		
		setTimeout( function(){
			$('#bigTagOpenBox .btfPriceNum').html( G_PARM.getCnt );	// 태그번호
			$('.sltmReel').html('');	 // 룰렛 화면캐쉬 지우기
			IS_STOP = false;	
			callPopup2("#bigTagOpenBox");
		},1000);
	}
}	// END

// 온로드시
$(function($){

	// 폭죽객체
	FWORKS = new Fireworks( $("#canvas-container").width(), $("#canvas-container").height() );

	// 룰렛정지	
	//$("#slotMachineBox").bind('click', function(e){
	$(".sltmSkipBtn").bind('click', function(e){
		console.log("===> 정지클릭");
		IS_STOP = true;
	});

	// 태그 밀어서 오픈		
	/*
	$(".bigTagFront").bind('mousedown', function(e){
		if( G_DRAG.isTagOpen ) return;
		if( G_DRAG.orgDivX == 0 ) G_DRAG.orgDivX = $(this).offset().left; // 원래위치
		G_DRAG.mouseX = e.pageX;	
		G_DRAG.isTagOpen = false;
		//console.log("\n====>클릭 G_DRAG ["+ JSON.stringify(G_DRAG)  +"]  ");
		$(".bigTagFront").bind('mousemove', function(e){
			//console.log("==>mousemove ["+ e.which  +"]  ");
			if(e.which == 1){
				var moveX = G_DRAG.mouseX - e.pageX;
				// 우측이고, 원위치면 정지
				if( moveX < 0 && $(this).offset().left > G_DRAG.orgDivX ) return;
				// 오픈이면 오픈
				var moveSize = G_DRAG.orgDivX - $(this).offset().left;
				//console.log("===> isTagOpen ["+G_DRAG.isTagOpen+"], moveSize ["+moveSize+"]  ");
				if( moveSize > 450 && !G_DRAG.isTagOpen ) {
					tagDragOpen();
					G_DRAG.isTagOpen = true;
					return;
				}				
				$(this).offset({left: ($(this).offset().left - moveX) });
				G_DRAG.mouseX = e.pageX;
				//console.log("===> 원래["+G_DRAG.orgDivX+"], isTagOpen ["+G_DRAG.isTagOpen+"], moveSize ["+moveSize+"],  이동후div ["+$(this).offset().left+"]   ");
			}
		});
	}).bind('mouseup', function(e){
		if( G_DRAG.isTagOpen ) return;
		G_DRAG = { "mouseX":0, "orgDivX":0, "isTagOpen":false };
		$(this).animate({ left: 510 }, 500);	
		$(this).unbind('mousemove');
	}).bind('mouseout', function(e){
		if( G_DRAG.isTagOpen ) return;
		$(this).unbind('mousemove');
	}).bind('mouseover', function(e){
		if( G_DRAG.isTagOpen ) return;
		//console.log("======> mouseover  ");
		$(this).removeClass('slideHover');
	}).bind('mouseout', function(e){
		//console.log("====> mouseout : "+G_DRAG.isTagOpen);
		if( G_DRAG.isTagOpen ) return;
		$(this).removeClass('slideHover').addClass('slideHover');
	});
	*/

	// 택 전체 클릭시 오픈
	$("#bigTagOpenBox").bind('click', function(e){
		tagSwingOpen();
	});
	// 손가락 클릭시 오픈
	$("#bigTagOpenBox .hoverHand").bind('click', function(e){
		//$('.bigTagFront').animate({ left: -50, opacity: 0 }, 800, "linear", function(){ tagDragOpen();  });
		//G_ORG.isTagOpen = true;
		//return;
		tagSwingOpen();
	});


	// 앞면 택 클릭시 20170223 상무님 요청
	$("#bigTagOpenBox .bigTagFront").bind('click', function(e){
		//$('.bigTagFront').removeClass('slideHover').addClass('slideClick');
		//setTimeout("tagDragOpen()",6000);
		//$('.bigTagFront').animate({ left: -50}, 8000, "swing", function(){ tagDragOpen();  });	
	});

});

// 태그오픈
function tagOpenShow(){
	console.log("===> 태그오픈  ");	
	hidePopup($('#slotMachineBox'));  //슬롯머신	
	$(".bigTagFront").fadeOut(1500);  // 레이어 안보이게
	$("#bigTagOpenBox .hoverHand").css("opacity", "0");  // 클릭버튼		
	$('body').addClass('actPop');
	$("#bigTagOpenBox .bigTagBack_after .celebrationBox").addClass('actBefore');	// 축하합니다
	$("#bigTagOpenBox .bigTagBack_after .celebrationBox").show();		// 축하합니다
	$("#bigTagOpenBox .celebrationBg").show();	
	setTimeout('actAnim($("#bigTagOpenBox .bigTagBack_after .celebrationBox"),"bounceInLeft")',500);	// 축하합니다	
	setTimeout('$("#bigTagOpenBox .bigTagBack_after .celebrationBox").addClass("actScale")',1000);	  // 축하합니다
	setTimeout('actAnim($("#bigTagOpenBox .bigTagBack_after .btbaDescTxt"),"bounceInRight")',1000);	// 고객님은
	setTimeout('playFireWorks()',1200); 	// 폭죽	
	setTimeout('hidePopup2($(".divPopupBox"))',7000);
	setTimeout('hidePopup($(".divPopupBox"))',7000);
	setTimeout('tagKeepBoxAct();',7000);
	setTimeout('callPopup("#tagResultBox")',7000);
	setTimeout('bigTagToggle();',10000);
}

// 폭죽생성
function fireWorksCreate(){
	var width = (FWORKS.canvas.width/2) / 2;
	var height = (FWORKS.canvas.height/2) / 2;
	targetX = width + (FWORKS.canvas.width/2  * Math.random());
	targetY = height + (FWORKS.canvas.height/2  * Math.random());
	//console.log("===> fireWorksCreate()  ["+targetX+"] ["+targetY+"]");
	FWORKS.currentHue = Math.random()*100;
	FWORKS.createFireworks( (FWORKS.canvas.width/2), (FWORKS.canvas.height/2), targetX, targetY);
}

// 폭죽 플레이
function playFireWorks(){
	//console.log("===> playFireWorks() ");
	setTimeout(function() { fireWorksCreate(); }, 200);
	setTimeout(function() { fireWorksCreate(); }, 200);
	setTimeout(function() { fireWorksCreate(); }, 400);
	setTimeout(function() { fireWorksCreate(); }, 400);
	setTimeout(function() { fireWorksCreate(); }, 800);
	setTimeout(function() { fireWorksCreate(); }, 800);
}

// 처음  - 태그 링크 클릭, 까보기
function tagStartClick( selectorNm, ta_id ){
	console.log( "===> 까보기 클릭  ["+ta_id+"] " );
	if( !ta_id ){
		//alert('택ID가 없습니다 관리자에게 문의 하세요'); //for_pub
		//return; //for_pub
	}
	// 책갈피 닫기
	bigTagClose();
	// 태그ID
	//G_TAG.ta_id = ta_id; //for_pub
	//console.log( "=====> G_TAG: "+ JSON.stringify(G_TAG) ); 
	SlotMachineClass.reset()
	// 시작화면
	callPopup( selectorNm );
};

// 태그오픈
function tagDragOpen(){
	console.log("===> 태그 드레그 오픈  ");
	tagOpenShow();
}

// 빠르게 흔들고 오픈
function tagSwingOpen(){
	console.log("====> 태그 흔들고 오픈  ");
	G_DRAG.isTagOpen = true;
	// 기본 흔들기 삭제
	$('.bigTagFront').removeClass('slideHover');	
	// 빠른 흔들기 후 오픈
	//v1
	/*
	$('.bigTagFront').animate({ left: 330 }, 500, "swing", function(){   
		$('.bigTagFront').animate({ left: 540 }, 800, "swing", function(){  
			$('.bigTagFront').animate({ left: 330 }, 500, "swing", function(){   
				$('.bigTagFront').animate({ left: 510 }, 800, "swing", function(){
					//$(".bigTagFront").removeClass('slideClick').addClass('slideClick');
					$('.bigTagFront').animate({ left: -50, opacity: 0 }, 1200, "swing", function(){ 
						tagOpenShow();  
					});
				});
			});
		});
	});
	*/
	//v2
	$('.bigTagFront').stop().animate({ left: 330 }, 600, "swing", function(){   
		$('.bigTagFront').stop().animate({ left: 540 }, 800, "swing", function(){  
			$('.bigTagFront').stop().animate({ left: 330 }, 600, "swing", function(){   
				$('.bigTagFront').stop().animate({ left: 510 }, 800, "swing", function(){
					//$(".bigTagFront").removeClass('slideClick').addClass('slideClick');
					$('.bigTagFront').stop().animate({ left:180 }, 1000, "swing", function(){ 
						$('.bigTagFront').stop().animate({ left: -20 }, 3000, "swing", function(){ 
							$('.bigTagFront').stop().animate({ left: -50, opacity: 0 }, 800, "swing", function(){ 
								tagOpenShow();
							});
						});
					});
				});
			});
		});
	});
}

//jquery function s-----------------
$(function($){
	//divPop-demo2
	var global_tag_num=0;
	$(".inpnInputBox .numResetBtn").click(function(){ //숫자입력 초기화
		$(".inpnInputBox .tagNumInput").val("");
	});
	$(".inpnInputBox label").click(function(){ //숫자입력 초기화
		$(".inpnInputBox .tagNumInput").val("");
	});
	$(".inpnNumKey li a").click(function(){ //숫자입력
		var inputNum=$(".inpnInputBox .tagNumInput");
		var inputVal=inputNum.val();
		var clickNum=parseInt($(this).find('.blind').html());
		if(inputVal.length<3){
			inputNum.val(inputVal+clickNum);
		}else{
			alert("3자리 수만 입력가능합니다.");
		}
	});
	$(".numDelBtn a").click(function(){ //숫자입력 삭제
		var inputNum=$(".inpnInputBox .tagNumInput");
		var inputVal=inputNum.val();
		if(inputVal!=""){
			var inputDelVal=inputVal.substr(0,(inputVal.length-1));
			inputNum.val(inputDelVal);
		}
	});
	$(".inpnAutoKey a").click(function(){ //숫자입력 자동선택
		var tempNum=Math.floor(Math.random()*999)+1;
		$(".inpnInputBox .tagNumInput").val(tempNum);
	});
	$(".tagNumSubmit").click(function(){ //숫자입력 선택완료
		global_tag_num=$(".inpnInputBox .tagNumInput").val();
		if(global_tag_num!=""){
			objHide($(this).parents('.divPopupBox'));
			$('#slotMachineBox .sltmReelCount .countN').html(global_tag_num);
			callPopup('#slotMachineBox');
			//setTimeout('$(sm.init)',1000);
			setTimeout( SlotMachineClass.start(),1000);    // by jang
		}else{
			alert("행운의 숫자를 입력해주세요");
		}
		
	});
	/*
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
	*/
	$("#tagResultBox .trTagBtns .trTagBtn3").click(function(){
		console.log("===> 한번더");
		$(".bigTagFront").show().css("opacity", "1").css("left", 510);  // by jang
		$('.bigTagFront').removeClass('slideClick').addClass('slideHover'); // by ryu
		$("#bigTagOpenBox .hoverHand").css("opacity", "1");
		$("#bigTagOpenBox .hoverClick").css("opacity", "1"); // by ryu
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
		SlotMachineClass.reset();   // by jang
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
});
//jquery function e-----------------