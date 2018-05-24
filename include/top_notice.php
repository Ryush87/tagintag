<div id="topNoticeBoxWrap">
	<div class="wWrap">
		<div class="topTextBox ttb1">
			<div id="ttbWin">
				<div class="item">[-99%] 105,160원 : psj*** 서울 남(45) 7/1</div>
				<div class="item">[-99%] 105,160원 : kkk*** 전남 여(28) 7/2</div>
				<div class="item">[-99%] 105,160원 : spc*** 인천 여(32) 7/2</div>
				<div class="item acting">VIP회원 골드바(50돈) 당첨자 리스트</div>
			</div>
		</div>
		<div class="topTextBox ttb1">
			<div id="ttbReturn">
				<div class="item">[-99%] 21,030원 : psj*** 서울 남(45) 7/1</div>
				<div class="item">[-99%] 21,030원 : kkk*** 전남 여(28) 7/2</div>
				<div class="item">[-99%] 105,160원 : spc*** 인천 여(32) 7/2</div>
				<div class="item">[-99%] 21,030원 : kkk*** 전남 여(28) 7/2</div>
				<div class="item acting">황금돼지(10돈) 당첨자 리스트</div>
			</div>
		</div>
		<div class="topTextBox ttb2">
			<div>
				<div>누적 할인 금액 : <span class="counter">1,259,856,370</span>원</div>
			</div>
		</div>
	</div>
</div>
<!-- counterup s -->
<script type="text/javascript" src="<?=$root?>/skin/plugin/counterup/waypoints.min.js"></script>
<script type="text/javascript" src="<?=$root?>/skin/plugin/counterup/jquery.counterup.min.js"></script>
<!-- counterup e -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#ttbWin").slick({
			arrows:false,
			dots:false,
			autoplay:true,
			autoplaySpeed:1000,
			infinite : true,
			speed : 3000,
			slidesToShow:1,
			adaptiveHeight:true
		});
		$("#ttbWin").on('afterChange',function(event,slick,currentSlide){
			var currentE=$(slick.$slides[currentSlide]);
			var acingItem=currentE.attr('class');
			if(acingItem=='item acting slick-slide slick-current slick-active'){
				actAnim(currentE.parents('.topTextBox'),"shake");
			}
		});
		$("#ttbReturn").slick({
			arrows:false,
			dots:false,
			autoplay:true,
			autoplaySpeed:1500,
			infinite : true,
			speed : 5950,
			slidesToShow:1,
			adaptiveHeight:true
		});
		$("#ttbReturn").on('afterChange',function(event,slick,currentSlide){
			var currentE=$(slick.$slides[currentSlide]);
			var acingItem=currentE.attr('class');
			if(acingItem=='item acting slick-slide slick-current slick-active'){
				actAnim(currentE.parents('.topTextBox'),"swing");
			}
		});
		$('.counter').counterUp({
			delay: 100,
			time: 2000
		});
	});
</script>