<ul class="lnb_1d">
	<li>
		<a href="#none"><div class="lnbIcon1">진행중인 상품</div></a>
		<div id="lnb_2d_1" class="lnb_2d">
			<ul class="cate_1d" style="padding:0;">
				<li class="ofH" style="width:1020px;padding:0;">
					<!-- ingGoods s -->
					<style type="text/css">
						.slick-slide img {display:inline;}
						.slick-prev,
						.slick-next {width:40px;height:70px;}
						.slick-prev {left:-50px;}
						[dir='rtl'] .slick-prev {right:-40px;left:auto;}
						.slick-prev:before {content:url(<?=$root?>/skin/images/common/lnb_arrow_left.png);}
						[dir='rtl'] .slick-prev:before {content:url(<?=$root?>/skin/images/common/lnb_arrow_right.png);}
						.slick-next {right:-50px;}
						[dir='rtl'] .slick-next {right:auto;left:-40px;}
						.slick-next:before {content:url(<?=$root?>/skin/images/common/lnb_arrow_right.png);}
						[dir='rtl'] .slick-next:before {content:url(<?=$root?>/skin/images/common/lnb_arrow_left.png);}
					</style>
					<div class="lnbIngGoodsWrap">
						<div class="slider">
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_2.html">
									<div class="lothItem">
										<div class="lothiTit">스타벅스<br />아메리카노 Grande</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/buger_160x110.jpg" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>50</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_3.html">
									<div class="lothItem">
										<div class="lothiTit">웨스틴 조선 서울<br />뷔페 - 주말디너</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/bug_320_220.jpg" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>980</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_4.html">
									<div class="lothItem">
										<div class="lothiTit">교촌치킨<br />허니오리지날</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/bug_160_110.jpg" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>160</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_5.html">
									<div class="lothItem">
										<div class="lothiTit">베스킨라빈스<br />패밀리 (960g)</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/temp_goods_5.png" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>200</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_3.html">
									<div class="lothItem">
										<div class="lothiTit">웨스틴 조선 서울<br />뷔페 - 주말디너</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/temp_goods_3.png" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>980</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_4.html">
									<div class="lothItem">
										<div class="lothiTit">교촌치킨<br />허니오리지날</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/temp_goods_4.png" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>160</span>원~</div>
									</div>
								</a>
							</div>
							<div class="sliderItem">
								<a href="<?=$root?>/goods/ing_goods_5.html">
									<div class="lothItem">
										<div class="lothiTit">베스킨라빈스<br />패밀리 (960g)</div>
										<div class="lothiImgBox"><img src="<?=$root?>/skin/images/temp/temp_goods_5.png" alt="상품이미지"/></div>
										<div class="lothiPrice"><span>200</span>원~</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<script src="<?=$root?>/skin/plugin/slick_slide/slick.js" type="text/javascript" charset="utf-8"></script>
					<script type="text/javascript">
						$(".slider").slick({
							//lazyLoad: 'ondemand',
							autoplay: true,
							autoplaySpeed:1000,
							swipe:true,
							infinite: true,
							slidesToShow: 4,
							slidesToScroll: 1
						});
					</script>
					<!-- ingGoods e -->
				</li>
			</ul>
		</div>
	</li>
	<li><a href="<?=$root?>/goods/closing_goods.html">마감된 상품</a></li>
	<li><a href="<?=$root?>/goods/comming_goods.html">다가올 상품</a></li>
	<li><a href="<?=$root?>/tagintag/service.html">택인택이란?</a></li>
	<li><a href="<?=$root?>/" onclick="tutorialOpen(this.href); return false;"><div class="lnbIcon5">튜토리얼</div></a></li>
</ul>
