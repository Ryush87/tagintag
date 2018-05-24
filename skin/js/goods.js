var quickY=670;//quickMenu position

//graph s-----------------
var barArray=new Array();
var barmaxVal=0;

function loadGraph(){
	var liN=$('.tagGraphPreview li').length;
	var liW=100/liN;
	//var liW_per=liW.toFixed(0);
	var liW_per=Math.floor(liW);
	console.log(liW_per);
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
	$('.pageTab').each(function(){
		indexLi=$('.pageTab').index(this);
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
	//graph
	loadGraph();
	//pageTab act
	pageTabAct();
	//positionPop('.divPopupBox');
	//$('.tagKeepBoxWrap').slideDown();
	//callPopup('#inputNumBox');
	//callPopup('#slotMachineBox');
	//callPopup('#bigTagOpenBox');
	//callPopup('#tagSelectBox');
	//callPopup('#tagSelectDoneBox');
	//callPopup('#tagOpenBox');
	//callPopup('#tagOpenResultBox');
	//callPopup('#tagUseBox');
	//tagKeepBoxAct();
	//$('#cubeSelectBox').modal();
});