
// 전역변수
var FWORKS = null;
var IS_STOP = false;
var G_DRAG = { "mouseX":0, "orgDivX":0, "isTagOpen":false };

// 슬롯머신 클래스
var SlotMachineClass = new function(){

	// 재설정
	this.reset = function(){
		console.log("\n\n################ reset() Point ["+G_MEM.tp_point+"] ################ ");
		// 초기화
		G_PARM.cnt = 0;
		G_DRAG = { "mouseX":0, "orgDivX":0, "isTagOpen":false };
		clearInterval(G_TIMER.openTimer);
	}
	

	// 스핀 시작
	this.start = function(){
		console.log("\n=====> ###### start() ###### ");
		
		// 함수전언
		animateSpin = this.animateSpin;
		animateStopMove = this.animateStopMove;

		// 스핀 타이틀
		$('.sltmMsg').removeClass('sltmEnd').addClass('sltmRunning');

		// 루프 시작
		animateSpin();

	}


	// 스핀 애니
	this.animateSpin = function(){

		// 함수전언
		animateSpin = this.animateSpin;

		// 카운터
		G_PARM.cnt++;

		//console.log("\n=========> ## ["+ G_PARM.cnt +"] viewCnt ["+ G_PARM.viewCnt +"] ");

		// 뷰카운터
		$('#slotMachineBox .sltmReelCount .countN').html( G_PARM.viewCnt );

		// 정지버튼
		if( IS_STOP ){
			IS_STOP = false;
			if( G_PARM.viewCnt > 3 ){
				console.log("===> SKIP버튼  cnt ["+ G_PARM.cnt +"]  viewCnt ["+ G_PARM.viewCnt +"]   ");
				var stepCnt = G_PARM.viewCnt - 3;

				// 스킵처리
				for( var k = 0; k < stepCnt; k++ ){
					G_PARM.cnt++;
					var pObj = $('.sltmReel div p').eq( (G_PARM.cnt) );
					var pCnt = $(pObj).html();
					var classNm = $(pObj).attr("class");			
					if( classNm == "is_open_color_n" ){
						G_PARM.viewCnt--;
					}else{
						//console.log("===> SKIP버튼 스킵 pCnt ["+ pCnt +"]  cnt ["+ G_PARM.cnt +"] viewCnt ["+ G_PARM.viewCnt +"]  ");
					}
				}

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
				// 스킵처리
				for( var k = 0; k < stepCnt; k++ ){
					G_PARM.cnt++;
					var pObj = $('.sltmReel div p').eq( (G_PARM.cnt) );
					var pCnt = $(pObj).html();
					var classNm = $(pObj).attr("class");			
					if( classNm == "is_open_color_n" ){
						G_PARM.viewCnt--;
					}else{
						//console.log("===> 건너뛰기 스킵 pCnt ["+ pCnt +"]  cnt ["+ G_PARM.cnt +"] viewCnt ["+ G_PARM.viewCnt +"]  ");
					}
				}

			}
			// 마지막
			else if( G_PARM.viewCnt > 50 ) rate = 0.1;
			else if( G_PARM.viewCnt > 20 ) rate = 0.15;
			else if( G_PARM.viewCnt > 10 ) rate = 0.2;
			else if( G_PARM.viewCnt > 5 ) rate = 0.3;
			else if( G_PARM.viewCnt > 2 ) rate = 0.9;
			
			var aniSpeed = parseInt(G_PARM.speedMax * rate);	

			// 다음위치
			G_PARM.length = $('.sltmReel div p').eq( G_PARM.cnt ).position().top;	// + G_PARM.pHeight;

			// 스킵 계산
			var pObj = $('.sltmReel div p').eq( (G_PARM.cnt+1) );
			var pCnt = $(pObj).html();
			var classNm = $(pObj).attr("class");			
			if( classNm == "is_open_color_n" ){
				G_PARM.viewCnt--;
			}else{
				//console.log("===> 일반스킵 pCnt ["+ pCnt +"]  cnt ["+ G_PARM.cnt +"] viewCnt ["+ G_PARM.viewCnt +"]  ");
			}
			//console.log("======> cnt ["+ G_PARM.cnt +"]  pCnt ["+ pCnt +"] viewCnt ["+ G_PARM.viewCnt +"] classNm ["+ classNm +"]  ");
			

			// 재귀 호출
			$('.sltmReel').animate({ scrollTop:G_PARM.length }, aniSpeed, "linear", function(){ animateSpin(); });
			
		}
	}

		
	// 스핀완료
	this.animateStopMove = function(){
		console.log("=====> 정지 완료 ["+G_PARM.getCnt +"]  ");
		$('.sltmMsg').removeClass('sltmRunning').addClass('sltmEnd');	// 메시지		
		setTimeout( function(){
			$('#bigTagOpenBox .btfPriceNum').html( G_PARM.getCnt );	// 태그번호
			var usePoint = "("+G_TAG.row["tag_open_point"]+"포인트 사용)"
			$('#bigTagOpenBox .btfPoint').html( usePoint );	// 포인트
			$('.sltmReel').empty();	 // 룰렛 화면캐쉬 지우기
			IS_STOP = false;	
			callPopup2("#bigTagOpenBox");
		},1000);
	}

}	// END - SlotMachineClass





// ajax 택 리스트 받기
function ajaxGetTagList(){	

	var param = "ta_id="+G_TAG.ta_id+"&gd_id="+G_TAG.gd_id;	
	console.log("\n===> 택리스트 받기 ["+param+"] ");
	var url = 'ajax_get_tag_list.php';
	$.ajax({
		url: url,
		data: param,
		type: 'POST',
		dataType: 'json',
		cache: false,
		success: function( res ) {
	
			// 에러
			if( res.msg ){
				alert(res.msg);
				return;
			}

			G_TAG.row = res.row;
			G_TAG.arr_cell = res.arr_cell;

			console.log( "=====> 택정보: Length ["+ Object.keys(G_TAG.arr_cell).length  +"] \n"+ JSON.stringify(G_TAG.row) );
			//console.log( "=====> 택 리스트 전체: \n"+ JSON.stringify(G_TAG.arr_cell) );	

			if( !G_TAG.row || !G_TAG.row["ta_id"] ){
				alert('택ID가 없습니다 관리자에게 문의 하세요');
				return;
			}			

			//G_MEM.tp_point = 0;
			if( parseInt(G_MEM.tp_point) < parseInt(G_TAG.row["tag_open_point"]) ){
				alert('택포인트가 부족 합니다');
				location.href = "/mypage/charge_point.html";
				return;
			}

			// 초기화
			$('.sltmReel').empty();
			
			// 999 갯수 이상 채우기
			var p_html = "";
			var total_cnt = 0;
			var skip_cnt = 0;
			for( var i = 0; i < 100; i++ ){
				//console.log( "=====> p 건수: ["+i+"] "+ total_cnt );
				if( total_cnt > (G_PARM.inputMax + 10) ) break;
				$.each(  G_TAG.arr_cell, function( seq, row ){
					p_html += "<p class='is_open_color_"+row.is_open+"'>"+row.seq+"</p>\n";
					if( row.is_open == 'n' ) {
						total_cnt++;
					}else{
						skip_cnt++;
					}
				});
			}

			// 입력
			$('.sltmReel').html( "\n<div class='div1'>\n" + p_html + "</div>\n" );
			//console.log("===> html 출력: "+ $('.sltmReel').html() );

			// 기본높이
			G_PARM.pHeight =  $('.sltmReel div p').height() + parseInt($('.sltmReel div p').css("margin-top"));				
			console.log("=====> 전체건수: ["+ $('.sltmReel div p').length +"] 전체반복 ["+ i +"]  전체스킵 ["+ skip_cnt +"] 시작번호 ["+G_TAG.arr_cell[ Object.keys( G_TAG.arr_cell )[1] ].seq +"] " );								

			// 택상태값 생성
			var TMP_ARR = [];
			var cnt = 0;
			$.each(  G_TAG.arr_cell, function( seq, row ){
				cnt++;				
				TMP_ARR[cnt] = padDigits(row.seq, 3) +", "+row.ti_percent+", "+ARR_IS_OPEN[row.is_open];
			});
			TMP_ARR.sort();
			//console.log( "=====> TMP_ARR: "+ JSON.stringify(TMP_ARR) );
			G_TAG.tag_status_desc = TMP_ARR.join("\n");
			//console.log("===> tag_status_desc: "+ G_TAG.tag_status_desc );

			// 오픈 DB처리
			ajaxTagOpen();

		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert('Ajax failure ajaxGetTagList');
		}
	});
}


// ajax 태그 오픈
function ajaxTagOpen(){	
	
	console.log("\n=======> ajaxTagOpen() 입력값 ["+ G_PARM.viewCnt +"] ");

	// 시작번호
	var startCnt = $('.sltmReel div p').eq(1).html();
	// 전체 카운터
	var totalCnt = 0;
	// 통과 카운터
	var skipCnt = 0;
	// 입력 카운터, 처음거 제외
	var inputCnt = G_PARM.viewCnt;

	// 최종 택 구하기
	$.each( $('.sltmReel div p'), function(){

		totalCnt++;

		// 오브젝트
		var pObj = $('.sltmReel div p').eq( (totalCnt+1) );
		
		// 해당 카운터
		G_PARM.getCnt =  $(pObj).html();
		// 클래스명
		var classNm = $(pObj).attr("class");
		//console.log("======> ["+ totalCnt +"]  ["+ classNm +"]  getCnt ["+ G_PARM.getCnt +"]  ");
		if( classNm == "is_open_color_n" ){	// 카운팅
			inputCnt--;
			//console.log("===> ## 카운팅 inputCnt ["+ inputCnt +"] skipCnt ["+ skipCnt +"]   ");
		}else{  // 통과
			skipCnt++;
			//console.log("===> 스킵:  getCnt ["+ G_PARM.getCnt +"]  totalCnt ["+ totalCnt +"] inputCnt ["+ inputCnt +"] skipCnt ["+ skipCnt +"]   ");
		}

		// 완료 중지  카운팅갯수 ["+ totalCnt +"]: 
		if( inputCnt == 0 ){

			// 할인률 찾기
			var seqStr = "seq_"+G_PARM.getCnt;
			var row = G_TAG.arr_cell[seqStr];
			console.log("\n##### DB저장: 시작번호 ["+ startCnt +"] + 입력 ["+ G_PARM.viewCnt +"] + 스킵 ["+ skipCnt +"] ==> 택번호: ["+ G_PARM.getCnt +"] ["+ row.ti_percent +"]%  \n  ");
			return false;
		}		

	});


	// ajax DB 업데이트
	var param = "ta_id="+G_TAG.ta_id+"&gd_id="+G_TAG.gd_id+"&seq="+G_PARM.getCnt+"&inputCnt="+G_PARM.viewCnt+"&startCnt="+startCnt+"&skipCnt="+skipCnt+"&tag_status_desc="+G_TAG.tag_status_desc;	
	console.log("\n=====> ajaxTagOpen() ["+param+"] ");
	var url = 'ajax_tag_open.php';
	$.ajax({
		url: url,
		data: param,
		type: 'POST',
		dataType: 'json',
		cache: false,
		success: function( res ) {
			console.log( "=====> 오픈 결과: "+ JSON.stringify( res ) );
			if( res.msg ){
				alert(res.msg);
				return;
			}else{

				// 슬롯머신 화면 호출
				objHide($(this).parents('.divPopupBox'));					
				callPopup('#slotMachineBox');
				// 릴 우측 숫자 화면
				$('#slotMachineBox .sltmReelCount .countN').html( G_PARM.viewCnt );

				// 스핀 시작
				console.log( "=====> start() 스핀시작 " );
				setTimeout( "SlotMachineClass.start()", 2000);

			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert('Ajax failure ajaxTagOpen');
		}
	});
	
}






// 처음  - 태그 링크 클릭, 까보기
function tagStartClick( selectorNm, ta_id, gd_id, gd_no ){
	console.log( "===> 까보기 클릭  ["+ta_id+"]  ["+gd_id+"] ["+gd_no+"]  " );
	if( !ta_id || !gd_id ){
		alert('ID가 없습니다 관리자에게 문의 하세요');
		return;
	}
	// 보관중인 택이 있고 선택한 상품이 다를경우
	if( G_PARM.getCnt > 0 && G_TAG.gd_id != gd_id ){
		if( confirm("다른 상품의 택을 보관중입니다. \n확인을 누르시면 보관중인 택이 소멸됩니다. 계속 진행하시겠습니까?") ){
			location.href = "/goods/cancel_tag.html?gd_no="+gd_no;
		}else{
			return;
		}
	}
	// 책갈피 닫기
	bigTagClose();
	// ID
	G_TAG.ta_id = ta_id;
	G_TAG.gd_id = gd_id;
	G_TAG.gd_no = gd_no;
	console.log( "=====> G_TAG: "+ JSON.stringify(G_TAG) );
	SlotMachineClass.reset()
	// 시작화면
	callPopup( selectorNm );
};


// 태그오픈
function tagDragOpen(){
	console.log("===> 태그 드레그 오픈  ");
	ajaxTagDateReset();
}

// 클릭/드래그 후 빠르게 흔들고 오픈
function tagSwingOpen(){
	console.log("====> 태그 흔들고 오픈  ");
	G_DRAG.isTagOpen = true;
	// 기본 흔들기 삭제
	$('.bigTagFront').removeClass('slideHover');	
	// 빠른 흔들기 후 오픈
	//v1
	/*
	$('.bigTagFront').animate({ left: 430 }, 500, "linear", function(){   
		$('.bigTagFront').animate({ left: 510 }, 750, "linear", function(){  
			$('.bigTagFront').animate({ left: 430 }, 500, "linear", function(){   
				$('.bigTagFront').animate({ left: 510 }, 750, "linear", function(){
					//$(".bigTagFront").removeClass('slideClick').addClass('slideClick');
					$('.bigTagFront').animate({ left: -50, opacity: 0 }, 900, "linear", function(){ 
						ajaxTagDateReset();  
					});		
				});			
			});					
		});			
	});
	*/
	//v2
	$('.bigTagFront').animate({ left: 330 }, 600, "swing", function(){   
		$('.bigTagFront').animate({ left: 540 }, 800, "swing", function(){  
			$('.bigTagFront').animate({ left: 330 }, 600, "swing", function(){   
				$('.bigTagFront').animate({ left: 510 }, 800, "swing", function(){
					//$(".bigTagFront").removeClass('slideClick').addClass('slideClick');
					$('.bigTagFront').animate({ left:180 }, 1000, "swing", function(){ 
						$('.bigTagFront').animate({ left: -20 }, 3000, "swing", function(){ 
							$('.bigTagFront').animate({ left: -50, opacity: 0 }, 800, "swing", function(){ 
								ajaxTagDateReset();  
							});
						});
					});
				});
			});
		});
	});
}



// ajax 태그 날짜 갱신
function ajaxTagDateReset(){		
	var param = "ta_id="+G_TAG.ta_id+"&gd_id="+G_TAG.gd_id+"&seq="+G_PARM.getCnt;	
	console.log("\n===> 날짜갱신 ["+param+"] ");
	var url = 'ajax_tag_date_reset.php';
	$.ajax({
		url: url,
		data: param,
		type: 'POST',
		dataType: 'json',
		cache: false,
		success: function( res ) {
			//console.log( "=====> 태그 날짜갱신 결과: "+ JSON.stringify( res ) );
			if( res.msg ){
				alert(res.msg);
				location.href = "/";
				return;
			}
			// 기존거 seq 백업
			G_PARM.getCntBak = G_PARM.getCnt;
			// 최종화면
			tagOpenShow( res.rowSave );
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert('Ajax failure  ajaxTagDateReset');
		}
	});
}


// 최종화면
function tagOpenShow( rowSave ){
	console.log("===> 책갈피: bakSeq["+G_PARM.getCntBak+"] saveSeq["+rowSave.seq+"]  ");	
	// 저장 중인 택
	rowSave["timerSec"] = 7000;	// 타이머 딜레이
	rowSave["toggleSec"] = 7000;	// 토글 딜레이
	tagKeepHtmlSet( rowSave );	// 책갈피 셋팅
	// 방금 오픈한 백업
	var seqStr = "seq_"+G_PARM.getCntBak;
	var rowBak = G_TAG.arr_cell[seqStr];
	var priceBak = get_tag_price( rowBak );	
	// Bronze Tag - 방금 오픈한거 , Bak
	$("#tagResultBox .trPriceNum").html( setComma(priceBak) );
	$("#tagResultBox .trSale").html( rowBak.ti_percent+"%↓SALE" );
	// 태그 밀기
	$("#bigTagOpenBox .btbPriceNum").html( setComma(priceBak) );
	$("#bigTagOpenBox .btbSale").html( rowBak.ti_percent+"%↓SALE" );
	$("#bigTagOpenBox #percent_str").html( rowBak.ti_percent+"% 할인" );

	hidePopup($('#inputNumBox'));  // 숫자선택	가리기
	hidePopup($('#slotMachineBox'));  //슬롯머신 가리기
	$(".bigTagFront").fadeOut(1500);  // 레이어 가리기
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
	setTimeout('callPopup("#tagResultBox")',7000);	// 타이머 화면 보이기	

}


// 한번더 버튼
function onMoreStart(){
	console.log("===> 한번더");
	$(".bigTagFront").show().css("opacity", "1").css("left", 510);  // by jang 
	$("#bigTagOpenBox .hoverHand").css("opacity", "1"); 
	$(".inpnInputBox .tagNumInput").val('');
	$("#bigTagOpenBox .bigTagBack_after .celebrationBox").hide();
	$("#bigTagOpenBox .celebrationBg").hide();
	$("#bigTagOpenBox .bigTagBack_after .celebrationBox").removeClass("actScale animated bounceInLeft").addClass("actBefore");
	$("#bigTagOpenBox .bigTagBack_after .btbaDescTxt").addClass("actBefore");
	$("#bigTagOpenBox .celebrationBg").removeClass("actClbr");
	$('.sltmMsg').removeClass('sltmRunning sltmEnd');
	hidePopup2($('.divPopupBox'));
	hidePopup($('.divPopupBox'));
	bigTagToggle();	// 토글접기
	$('.tagKeepBoxWrap').slideUp();	// 상단바 올리기
	callPopup('#inputNumBox');
	SlotMachineClass.reset();   // by jang
//});
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
	// 루프시작
	console.log("===> Fireworks canvasLoop() 시작 ");
	FWORKS.canvasLoop();
	//console.log("===> playFireWorks() ");
	setTimeout(function() { fireWorksCreate(); }, 200);
	setTimeout(function() { fireWorksCreate(); }, 200);
	setTimeout(function() { fireWorksCreate(); }, 400);
	setTimeout(function() { fireWorksCreate(); }, 400);
	setTimeout(function() { fireWorksCreate(); }, 800);
	setTimeout(function() { fireWorksCreate(); }, 800);
	// 루프 종료
	setTimeout(function() { FWORKS.stopLoop(); }, 12000);
	
}

// 온로드시
$(function(){

	// 폭죽객체
	if (typeof Fireworks == 'function') { 
		FWORKS = new Fireworks( $("#canvas-container").width(), $("#canvas-container").height() );
	}

	// 숫자클릭
	$(".inpnNumKey li a").click(function(){
		//console.log( "=====> G_MEM: "+ JSON.stringify( G_MEM ) );
		if( !G_MEM.is_member ){
			alert('로그인 후에 이용이 가능합니다');
			location.href = "/login/login.html";
			return false;
		}
		var inputNum = $(".inpnInputBox .tagNumInput");
		var inputVal = inputNum.val();
		var clickNum = parseInt($(this).find('.blind').html());
		if(inputVal.length < 3){
			inputNum.val(inputVal+clickNum);
		}
	});


	// 랜덤/자동 클릭
	$(".inpnAutoKey a").click(function(){
		//console.log("==> 랜덤클릭 ");
		if( !G_MEM.is_member ){
			alert('로그인 후에 이용이 가능합니다');
			location.href = "/login/login.html";
			return false;
		}
		//var tempNum = Math.floor(Math.random()* G_PARM.inputMax );
		var tempNum = getRandomIntInclusive(1, G_PARM.inputMax);
		$(".inpnInputBox .tagNumInput").val(tempNum);
	});

	// 직접입력 클릭, 지우기
	$(".inpnInputBox label").click(function(){
		$(".inpnInputBox .tagNumInput").val("");
	});

	// 시작버튼 - 선택완료
	$(".tagNumSubmit").click(function(){		
		if( !G_MEM.is_member ){
			alert('로그인 후에 이용이 가능합니다');
			location.href = "/login/login.html";
			return false;
		}
		var inputNum = parseInt( $(".inpnInputBox .tagNumInput").val() );
		if( !inputNum ){
			alert("행운의 숫자를 입력해주세요");
			return;
		}

		// 전역변수
		G_PARM.viewCnt = inputNum;

		// DB 조회
		ajaxGetTagList();

	});

	// 룰렛정지	
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
		//console.log("====> 손가락 클릭  ");
		tagSwingOpen();
	});

	// 숫자입력 초기화
	$(".inpnInputBox .numResetBtn").click(function(){ 
		$(".inpnInputBox .tagNumInput").val("");
	});

	// 숫자입력 삭제
	$(".numDelBtn a").click(function(){ 
		var inputNum=$(".inpnInputBox .tagNumInput");
		var inputVal = inputNum.val();
		if(inputVal != ""){
			var inputDelVal = inputVal.substr(0,(inputVal.length-1));
			inputNum.val(inputDelVal);
		}
	});


});		//  $(function(){
