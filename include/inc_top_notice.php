<div id="topNoticeBoxWrap">
	<div class="wWrap">
		<div class="topTextBox ttb1">
			<div id="ttbWin" class="owl-carousel">
				<div class="item">[-99%] 키엘 울트라 페이셜 크림 50ml : 2,450원 / jhk***</div>
				<div class="item acting">[-85%] 캐논 EOS M5 22mm 화이트  : 135,340원 / sd2**</div>
				<div class="item">[-60%] 스타벅스 아메리카노 500ml : 1,500원 / web4***</div>
				<div class="item">[-99%] 키엘 울트라 페이셜 크림 50ml : 2,450원 / jhk***</div>
				<div class="item acting">[-85%] 캐논 EOS M5 22mm 화이트  : 135,340원 / sd2**</div>
				<div class="item acting">[-60%] 스타벅스 아메리카노 500ml : 1,500원 / web4***</div>
				<div class="item">[-99%] 키엘 울트라 페이셜 크림 50ml : 2,450원 / jhk***</div>
				<div class="item acting">[-85%] 캐논 EOS M5 22mm 화이트  : 135,340원 / sd2**</div>
				<div class="item">[-60%] 스타벅스 아메리카노 500ml : 1,500원 / web4***</div>
				<div class="item">[-99%] 키엘 울트라 페이셜 크림 50ml : 2,450원 / jhk***</div>
			</div>
		</div>
		<div class="topTextBox ttb1">
			<div id="ttbReturn" class="owl-carousel">
				<div class="item">[버거킹 와퍼] 양도수익 : 3,900원 / eds***</div>
				<div class="item">[스타벅스 아메리카노] 양도수익 : 1,500원 / d21***</div>
				<div class="item">[웨스틴 조선 뷔체] 양도수익  : 25,340원 / ass***</div>
				<div class="item">[교촌치킨 허니] 양도수익  : 65,500원 / ts***</div>
				<div class="item">[베스킨라빈스 패밀리] 양도수익  : 230,500원 / bds***</div>
				<div class="item">[피자헛 더블박스] 양도수익  : 465,900원 / eds***</div>
				<div class="item">[파리바게트 케이크] 양도수익  : 25,900원 / lds***</div>
				<div class="item">[버거킹 와퍼] 양도수익  : 765,340원 / ass***</div>
				<div class="item">[엔젤이너스 모카] 양도수익  : 65,500원 / ts***</div>
				<div class="item">[버거킹 와퍼] 양도수익  : 230,500원 / bds***</div>
			</div>
		</div>
		<div class="topTextBox ttb2">
			<div>
				<div>누적 할인 금액 : <span class="counter">56,895,400</span>원</div>
			</div>
		</div>
	</div>
</div>
<!-- owlPlugin s -->
<link rel="stylesheet" href="<?=$root?>/skin/plugin/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?=$root?>/skin/plugin/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="<?=$root?>/skin/plugin/owl-carousel/owl.transitions.css">
<script src="<?=$root?>/skin/plugin/owl-carousel/owl.carousel.js"></script>
<!-- owlPlugin e -->
<!-- counterup s -->
<script type="text/javascript" src="<?=$root?>/skin/plugin/counterup/waypoints.min.js"></script>
<script type="text/javascript" src="<?=$root?>/skin/plugin/counterup/jquery.counterup.min.js"></script>
<!-- counterup e -->
<script type="text/javascript">
	$(document).ready(function() {
		var tempItem1=$('#ttbWin').html();
		var tempItem2=$('#ttbReturn').html();
		for(i=0;i<10;i++){
			$('#ttbWin').append(tempItem1);
			$('#ttbReturn').append(tempItem2);
		}
		$("#ttbWin").owlCarousel({
			items:1,
			singleItem : true,
			loop : true,
			autoPlay : true,
			stopOnHover : true,
			autoHeight : true,
			slideSpeed : 1000,
			paginationSpeed : 3000,
			afterAction : function(elem){
				var currentE=this.currentItem;
				var acingItem=elem.find('.item').eq(currentE).attr('class');
				if(acingItem=='item acting'){
					actAnim(elem.parents('.topTextBox'),"shake");
				}
			}
		});
		$("#ttbReturn").owlCarousel({
			items:1,
			singleItem : true,
			loop : true,
			autoPlay : true,
			stopOnHover : true,
			navigation : true,
			autoHeight : true,
			slideSpeed : 2000,
			afterAction : function(elem){
				var currentE=this.currentItem;
				var acingItem=elem.find('.item').eq(currentE).attr('class');
				if(acingItem=='item acting'){
					actAnim(elem.parents('.topTextBox'),"swing");
				}
			}
		});
		$('.counter').counterUp({
			delay: 100,
			time: 2000
		});
	});
</script>