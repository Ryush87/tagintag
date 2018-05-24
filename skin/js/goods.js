

//var quickY=670;//quickMenu position

//graph s-----------------
var barArray=new Array();
var barmaxVal=0;

function loadGraph(){
	var liN=$('.tagGraphPreview li').length;
	var liW=100/liN;
	//var liW_per=liW.toFixed(0);
	var liW_per=Math.floor(liW);
	//console.log(liW_per);
	$(".tagGraphPreview ul li").css("width",liW_per+"%");
	$(".tagGraphLabel ul li").css("width",liW_per+"%");
	if(liN>7){
		$('.tagGraphLabel ul li').css("font-size","10px");
	}
	$('.tagGraphPreview li').each(function(){
		var graphLi=$('.tagGraphPreview li');
		var barIndex=graphLi.index($(this));
		var barVal=$(this).find('.graphBar').attr('data-bar-value');
		barArray.push(parseInt(barVal));
		barmaxVal=Math.max.apply(null,barArray);
		if(barIndex==graphLi.length-1){
			drwaGraph(barmaxVal);
		}
	});
}
function drwaGraph(maxVal){
	var barPer=100/maxVal;
	var barH=0;
	$('.tagGraphPreview li').each(function(){
		var graphLi=$('.tagGraphPreview li');
		var barVal=$(this).find('.graphBar').attr('data-bar-value');
		barH=barPer*barVal;
		if(barH<20){
			barH=20;
		}
		$(this).find('.graphBar').animate({height:barH+"%"},3000,'swing',function(){$(this).find('.graphIcon').fadeIn()});
	});
}
//graph e-----------------

//pageTabAct s-----------------
function pageTabAct(){//상세페이지 pageTab 활성화
	$('#contents .wWrapL .pageTab').each(function(){
		indexLi=$('.pageTab').index(this);
		console.log(indexLi);
		$(this).find('li').eq(indexLi).addClass('actOn');
	});
}
//pageTabAct e-----------------

//jquery function s-----------------
$(function($){
	//pop_win_goods_tag s-----------------
	$('#pTagOpenHistoryBox .tagGraphSlideBar .tagGraphSlideTit a').click(function(){
		$(this).parent().next('.tagGraphWrap').slideToggle();
		if($(this).parent().next('.tagGraphWrap').height()<=120){
			$(this).parent().parent().addClass('actOn');
			//$(this).parent().next('.tagGraphWrap').slideToggle();
		}else{
			$(this).parent().parent().removeClass('actOn');
			//$(this).parent().next('.tagGraphWrap').css('max-height','120px');
		}
	});
	$('#pTagOpenHistoryBox .listTable td').hover(function(){
		$(this).parents('tr').addClass('pointTr');
	},function(){
		$(this).parents('tr').removeClass('pointTr');
	});
	//pop_win_goods_tag UI e-----------------
	
	//숫자입력-UI s-----------------
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
		if(inputVal.length<4){
			inputNum.val(inputVal+clickNum);
		}else{
			alert("4자리 수만 입력가능합니다.");
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
		var tempNum=Math.floor(Math.random()*9999)+1;
		$(".inpnInputBox .tagNumInput").val(tempNum);
	});
	$(".tagNumSubmit").click(function(){ //숫자입력 선택완료
		global_tag_num=$(".inpnInputBox .tagNumInput").val();
		if(global_tag_num!=""){
			if(global_tag_num>0){
				objHide($(this).parents('.divPopupBox'));
				$('#slotMachineBox .sltmReelCount .countN').html(global_tag_num);
				//linkUrl="tag_open_scroll_motion.html";
				linkUrl="tag_open_scroll_motion_v2.html";
				location.href = linkUrl+"?"+global_tag_num;
			}else{
				alert("0보다 큰 숫자를 입력해주세요");
			}
		}else{
			alert("행운의 숫자를 입력해주세요");
		}
	});
	//숫자입력-UI e-----------------
});
//jquery function e-----------------

//window load
$(document).ready(function(){
	//slogan
	$('.layerPopUl').innerfade({
		animationtype: 'slide',
		speed: 750,
		timeout: 5000,
		//type: 'random',
		containerheight: '1em'
	});
	loadGraph();
	pageTabAct();
	// tagKeepBoxAct();// 택보관 활성화
});