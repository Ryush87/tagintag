<!-- divPopup start -->
<div class="divPopupBg"></div>

<div id="inputNumBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/divpop/btn_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="inpnTitle fadeEff slide-rt">
			<div class="inpnTitleBg"><img src="<?=$root?>/skin/images/divpop/input_num_title_bg.png" alt="밑줄"/></div>
			<div class="italicTitle">행운의 <span>숫자</span>를 <span>선택</span>하세요!</div>
		</div>
		<div class="inpnInputBox fadeEff slide-rt e2">
			<label for="tagNumInput">직접입력<br />(1 ~ 999)</label>
			<input type="text" id="tagNumInput" class="tagNumInput" maxlength="3" readonly/>
			<div class="numResetBtn"><a href="#none"><span class="blind">초기화</span></a></div>
			<div class="numDelBtn"><a href="#none"><img src="<?=$root?>/skin/images/divpop/input_number_del.png" alt="지우기"/></a></div>
		</div>
		<div class="inpnKeyBox">
			<ul class="inpnNumKey">
				<li class="fadeEff slide-rt e3"><a href="#none"><span class="blind">1</span></a></li>
				<li class="fadeEff slide-rt e4"><a href="#none"><span class="blind">2</span></a></li>
				<li class="fadeEff slide-rt e5"><a href="#none"><span class="blind">3</span></a></li>
				<li class="fadeEff slide-rt e6"><a href="#none"><span class="blind">4</span></a></li>
				<li class="fadeEff slide-rt e7"><a href="#none"><span class="blind">5</span></a></li>
				<li class="fadeEff slide-rt e3"><a href="#none"><span class="blind">6</span></a></li>
				<li class="fadeEff slide-rt e4"><a href="#none"><span class="blind">7</span></a></li>
				<li class="fadeEff slide-rt e5"><a href="#none"><span class="blind">8</span></a></li>
				<li class="fadeEff slide-rt e6"><a href="#none"><span class="blind">9</span></a></li>
				<li class="fadeEff slide-rt e7"><a href="#none"><span class="blind">0</span></a></li>
			</ul>
			<div class="inpnAutoKey fadeEff slide-rt e8"><a href="#none"><span class="blind">자동선택</span></a></div>
		</div>
		<div class="pageBtnBox">
			<a href="#none" class="tagNumSubmit fadeEff slide-rt e9">선택완료 (-50P)</a>
		</div>
	</div>
</div>

<div id="slotMachineBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<div class="sltmTitle fadeEff slide-rt">
			<div class="sltmTitleBg"><img src="<?=$root?>/skin/images/divpop/slotmachin_title_bg.png" alt="밑줄"/></div>
			<div class="sltmMsg"></div>
		</div>
		<div id="slotM">
			<div class="sltmReelWrap">
				<div class="sltmReel"></div>
			</div>
			<div class="sltmReelShadow"></div>
			<div class="sltmReelCount"><p class="countN">999</p></div>
			<a href="#none" class="sltmSkipBtn"><span class="blind">Skip</span></a>
		</div>
		<div class="sltmGuide">
			<img src="<?=$root?>/skin/images/divpop/slotmachin_guide_txt.png" alt="밑줄"/>
		</div>
	</div>
</div>

<div class="divPopupBg2"></div>

<div id="bigTagOpenBox" class="divPopupBox fadeEff slide-rt">
	<div class="divPopWrap">
		<div id="bigTagWrap">
			<!-- v1 s -->
			<!--
			<div class="bigTagFront slideHover">
				<div class="btfPrice"><span class="btfPriceNum">298</span>번 <br />Tag을 받으셨습니다. <br /><div class="btfPoint">(50포인트 사용)</div></div>
				<div class="hoverHand hoverEff2"><img src="<?=$root?>/skin/images/divpop/big_tag_front_hand.png" alt="클릭" /></div>
			</div>
			<div class="bigTagBack bigTagBack4">
				<div class="btbSale">97%↓SALE</div>
				<div class="btbPrice"><span class="btbPriceNum">150</span> 원</div>
			</div>
			<div class="bigTagBack_after">
				<div class="celebrationBox actBefore"><span>축하</span>합니다!</div>
				<div class="btbaDescTxt actBefore">고객님은 본 상품의 <span>97% 할인</span> Tag를 받았습니다.</div>
			</div>
			<div class="celebrationBg">
				<div class="celebrationBg2">
					<canvas id="celebrationCvs"></canvas>
				</div>
			</div>
			-->
			<!-- v1 e -->

			<!-- v2 s : by jang -->
			<div class="bigTagFront slideHover" style="user-select:none;">
				<div class="btfPrice"><span class="btfPriceNum">298</span>번 <br />Tag을 받으셨습니다. <br /></div>
				<div class="hoverHand hoverEff2"><img src="<?=$root?>/skin/images/divpop/big_tag_front_hand.png" style="user-select:none; user-drag: none;" alt="클릭" /></div>
				<div class="hoverClick"><img src="<?=$root?>/skin/images/divpop/big_tag_front_click.png" style="user-select:none; user-drag: none;" alt="클릭" /></div>
			</div>

			<div class="bigTagBack bigTagBack4">
				<div class="btbSale">97%↓SALE</div>
				<div class="btbPrice"><span class="btbPriceNum">51,150</span> 원</div>
			</div>
			<div class="bigTagBack_after">
				<div class="celebrationBox actBefore"><span>축하</span>합니다!</div>
				<div class="btbaDescTxt actBefore">고객님은 본 상품의 <span>97% 할인</span> Tag를 받았습니다.</div>
			</div>

			<!-- 폭죽 -->
			<div class="celebrationBg" style="z-index:1;">
				<div class="celebrationBg2">
					<!-- by jang  -->
					<div id="canvas-container" style="width:1020px; height:798px;"></div>
				</div>
			</div>
			<!-- v2 e -->
		</div>
	</div>
</div>

<div id="tagResultBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<!-- 포인트 적립안내 s -->
		<div class="backPointBox"><div class="backPointNum"><span>1500</span>P</div>적립</div>
		<!-- 포인트 적립안내 e -->
		<div class="trTagBox trTagBox4 fadeEff slide-rt e2">
			<div class="trSale">97%↓SALE</div>
			<div class="trPrice"><span class="trPriceNum">9,951,150</span> 원</div>
		</div>
		<div id="tagResultWrap">
			<div class="trTitle fadeEff slide-rt e4">
				<div class="trTitleBg"><img src="<?=$root?>/skin/images/divpop/tag_result_title_bg.png" alt="밑줄"/></div>
				<div class="italicTitle"><span>Tag</span>을 <span>사용</span>하시겠습니까?</div>
			</div>
			<ul class="trTagBtns">
				<li class="fadeEff slide-rt e6">
					<a href="<?=$root?>/goods/order.html" class="trTagBtn trTagBtn1"><span class="blind">주문</span></a>
					<div class="trBtnDesc">제가 사용할 상품이므로 <span>주문</span> 하겠습니다.</div>
				</li>
				<li class="fadeEff slide-rt e7">
					<a href="<?=$root?>/goods/transfer.html" class="trTagBtn trTagBtn2"><span class="blind">양도</span></a>
					<div class="trBtnDesc">즉시구매가를 제시한 다른 회원에게 <span>판매</span> 하겠습니다.</div>
				</li>
				<li class="fadeEff slide-rt e8">
					<a href="#none" class="trTagBtn trTagBtn3"><span class="blind">한번더</span></a>
					<div class="trBtnDesc">
						더 높은 할인율에 <span>도전</span> 합니다.
						<div class="point">※ 현재 택과 새로 뽑을 택 중 할인율이 높은 택 1개만 사용가능하며 나머지 택은 자동으로 소멸됩니다.</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>