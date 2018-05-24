<!-- divPopup start -->
<div class="divPopupBg"></div>

<!-- divPopup SNS공유 s -->
<div id="snsSharePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="snsSharePopWrap">
			<div class="dpTitle fadeEff slide-up e4">SNS 공유하기</div>
			<div class="dpCon fadeEff slide-up e6">
				<ul>
					<li><a href="#none" class="snsShare_f">페이스북에 공유하기</a></li>
					<li><a href="#none" class="snsShare_t">트위터에 공유하기</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- divPopup SNS공유 e -->

<!-- divPopup SNS자랑하기 s -->
<div id="snsProudPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="snsProudPopWrap">
			<div class="dpTitle fadeEff slide-up e4">택오픈 자랑하기</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="dpTagInfoBox dpTagRating1">
					<div class="gridL">
						<div class="dpTagImg"></div>
					</div>
					<div class="gridR">
						<div class="dpTagTitle"><span>DIAMOND</span> TAG 획득!</div>
						<div class="dpGoodsInfo">[센시]HD LED 40in FULL 스탠드현 CL-40LNF10 무결점 TV를 <span class="pointC4">99% 할인</span> 받으셨습니다.</div>
						<ul class="dpTagPrice">
							<li class="dptp1">5,800원</li>
							<li class="dptp2"><img src="<?=$root?>/skin/images/sub_mytag/mytag_arrow.png" alt="화살표"/></li>
							<li class="dptp3">50원</li>
						</ul>
					</div>
				</div>
				<ul class="grayBgBox">
					<li><a href="#none" class="snsProud_f">페이스북에 자랑하기</a></li>
					<li><a href="#none" class="snsProud_t">트위터에 자랑하기</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- divPopup SNS자랑하기 e -->

<!-- divPopup 구매확인 s -->
<div id="buyFixPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="buyFixPopWrap">
			<div class="dpTitle fadeEff slide-up e4">구매확인</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>이 상품을 구매확인 하시겠습니까?</h5>
					<div class="dpGoodsTitle pointC5 dotWLine">KD006-A153890 [마이크로소프트] XBOXONE 본체 500GB/1TB 콘솔/신형패드/키넥트 선택[ 퀀텀브레이크/툼레이더/디비전/헤일로5/엘리트]</div>
				</div>
				<ul class="brownDotLi mt20">
					<li>구매확인 버튼을 누르면 주문건에 대한 구매 결정이 이뤄집니다.</li>
					<li>구매결정 이후에는 반품 / 교환이 불가합니다.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#buyFixAcceptPopBox'); return false;">구매확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 구매확인 e -->

<!-- divPopup 구매확인완료 s -->
<div id="buyFixAcceptPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="buyFixPopWrap">
			<div class="dpTitle fadeEff slide-up e4">구매확인</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>이상품의 구매 확인이 완료되었습니다.</h5>
					<div class="dpGoodsTitle pointC5 dotWLine">KD006-A153890 [마이크로소프트] XBOXONE 본체 500GB/1TB 콘솔/신형패드/키넥트 선택[ 퀀텀브레이크/툼레이더/디비전/헤일로5/엘리트]</div>
				</div>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">닫기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 구매확인완료 e -->

<!-- divPopup 주문취소 s -->
<div id="orderCancelPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="orderCancelPopWrap">
			<div class="dpTitle fadeEff slide-up e4">주문취소</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox taC">
					<h5>이 주문을 취소 하시겠습니까?</h5>
					<select name="" id="" data-custom-id="returnCause" data-custom-class="orderCancelCauseSlt">
						<option value="">취소사유 선택</option>
						<option value="">취소사유1</option>
						<option value="">취소사유2</option>
						<option value="">취소사유3</option>
					</select>
				</div>
				<ul class="guideTxt pointC5">
					<li>※ 주문취소후 각 결제수단별 환불 절차가 상이하니 반드시 아래 내용을 참조 바랍니다.</li>
				</ul>
				<ul class="brownDotLi mt20 dotWLine">
					<li>신용 / 체크카드결제 : 3~5 영업일 이내</li>
					<li>택머니 : 1 영업일 이내</li>
					<li>실시간 계좌이체 : 2 영업일 이내</li>
				</ul>
				<div class="dotWLine mb20">
					<div class="grayBgBox pt10 pb10 pl20">
						<h5 class="taL">환불받으실 계좌</h5>
					</div>
				</div>
				<div class="gridL mb10">
					<select name="" id="" data-custom-id="returnBank" data-custom-class="returnBankSlt">
						<option value="">은행 선택</option>
						<option value="">국민은행</option>
						<option value="">하나은행</option>
					</select>
				</div>
				<div class="gridR mb10">
					<input type="text" id="dpConAccount" placeholder="계좌번호 입력(-제외)"/>
				</div>
				<ul class="guideTxt pointC5 cB">
					<li>※  회원실명과 환불계좌의 예금주 성명이 동일한 경우에만 환불 처리가 되며 상이한 경우 입금처리가 되지 않습니다.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#orderCancelAcceptPopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 주문취소 e -->

<!-- divPopup 주문취소접수완료 s -->
<div id="orderCancelAcceptPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="orderCancelPopWrap">
			<div class="dpTitle fadeEff slide-up e4">주문취소</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox taC">
					<h5>주문이 취소되었습니다.</h5>
					<div class="dpConOrderCancelCause pointC5 dotWLine">취소사유 : 구매의사 없음</div>
				</div>
				<ul class="guideTxt pointC5">
					<li>※ 주문취소후 각 결제수단별 환불 절차가 상이하니 반드시 아래 내용을 참조 바랍니다.</li>
				</ul>
				<ul class="brownDotLi mt20 dotWLine">
					<li>신용 / 체크카드결제 : 3~5 영업일 이내</li>
					<li>택머니 : 1 영업일 이내</li>
					<li>실시간 계좌이체 : 2 영업일 이내</li>
				</ul>
				<div class="dotWLine mb20">
					<div class="grayBgBox pt10 pb10 pl20">
						<h5 class="taL">환불받으실 계좌</h5>
					</div>
					<ul class="guideTxt pl20">
						<li>국민은행 : 2001651-151-15210</li>
					</ul>
				</div>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 주문취소접수완료 e -->

<!-- divPopup 반품신청 s -->
<div id="returnApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="returnApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">반품신청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<select name="" id="" data-custom-id="returnCause" data-custom-class="returnCauseSlt">
					<option value="">반품사유</option>
					<option value="">반품사유1</option>
					<option value="">반품사유2</option>
					<option value="">반품사유3</option>
				</select>
				<div class="regText">
					<textarea name="" id="" cols="30" rows="5"></textarea>
				</div>
				<ul class="guideTxt pointC5">
					<li>※ 회원실명과 환불계좌의 예금주 성명이 동일한 경우에만 환불 처리가 되며 상이한 경우 입금처리가 되지 않습니다.</li>
					<li>※ 환불금액은 환불신청 후 2 영업일 이내에 처리됩니다.</li>
				</ul>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#returnAcceptPopBox'); return false;">반품신청</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 반품신청 e -->

<!-- divPopup 반품신청접수완료 s -->
<div id="returnAcceptPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="returnAcceptPopWrap">
			<div class="dpTitle fadeEff slide-up e4">반품신청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>반품 신청이 접수 되었습니다.</h5>
					<div class="dpGoodsTitle pointC5 dotWLine">KD006-A153890 [마이크로소프트] XBOXONE 본체 500GB/1TB 콘솔/신형패드/키넥트 선택[ 퀀텀브레이크/툼레이더/디비전/헤일로5/엘리트]</div>
				</div>
				<ul class="brownDotLi mt20">
					<li>고객님께서 수령하신 상품을 아래의 주소로 반송 바랍니다.</li>
					<li>주소 : 서울특별시 서대문구 신촌로 157 화영빌딩 4층</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 반품신청접수완료 e -->

<!-- divPopup 교환신청 s -->
<div id="changeApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="changeApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">교환신청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="regText">
					<textarea name="" id="" cols="30" rows="5"></textarea>
				</div>
				<ul class="guideTxt pointC5">
					<li>※ 교환을 원하는 상품 옵션을 기입해주세요.</li>
					<li>※ 물품 재고를 확인후 상담원이 연락을 드려 교환 절차를 안내해 드립니다.</li>
				</ul>
				<ul class="brownDotLi mt20">
					<li>
						<label for="dpConTel1">연락처</label>
						<input type="text" value="010-2233-5533" id="dpConTel1"/>
					</li>
				</ul>
				<div class="pageBtnBox dotWLine taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#changeAcceptPopBox'); return false;">교환신청</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 교환신청 e -->

<!-- divPopup 교환신청접수완료 s -->
<div id="changeAcceptPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="changeAcceptPopWrap">
			<div class="dpTitle fadeEff slide-up e4">교환신청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>교환 신청이 접수 되었습니다.</h5>
					<div class="dpConTelNum pointC5 dotWLine">연락처 : 010-2222-3333</div>
				</div>
				<ul class="brownDotLi mt20">
					<li>고객님께서 기재하신 연락처로 상담원이 교환절차를 안내해 드립니다.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 교환신청접수완료 e -->

<!-- divPopup 양도신청 s -->
<div id="transferApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">양도신청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>해당 상품을 구매대기자에게 양도 하시겠습니까?</h5>
				</div>
				<div id="goodsInfoConfilmBox" class="mt20">
					<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col /></colgroup>
						<tr>
							<th scope="col">품명</th>
							<th scope="col">배송비</th>
							<th scope="col">정가</th>
							<th scope="col">양도가격</th>
						</tr>
						<tr>
							<td class="ttaL">
								<div class="imgbox"><img src="https://goo.gl/BGajfY" alt="상품이미지" /></div>
								<div class="goodsName">버거킹 와퍼</div>
							</td>
							<td>0 <br />(전사상품권)</td>
							<td>5,800</td>
							<td><span class="fwB pointC1">5,000원</span></td>
						</tr>
					</table>
				</div>
				<div class="takoverListBox mt50">
					<table>
						<colgroup>
							<col width="5%"/>
							<col width="25%"/>
							<col width="15%"/>
							<col width="25%"/>
							<col width="25%"/>
						</colgroup>
						<tr>
							<th scope="col"></th>
							<th scope="col">구매자</th>
							<th scope="col">제시가</th>
							<th scope="col">양도 수수료</th>
							<th scope="col">고객님이 양도 시 얻는 실수익</th>
						</tr>
						<tr>
							<td><img src="<?=$root?>/skin/images/sub_goods/icon_profile1.png" alt="프로필사진" /></td>
							<td>asd****</td>
							<td>4,900 원</td>
							<td>50원(제시가 1%)</td>
							<td><span class="pointC1 fwB">4,700원</span></td>
						</tr>
						<tr>
							<td colspan="5" class="pointC5 taL">
								※ 고객님의 실수익은 다음과 같이 계산 됩니다. <br />
								※ 제시가 - 양도수수료- 고객님의 오픈 택 가격 = 실수익
							</td>
						</tr>
					</table>
				</div>
				<ul class="brownDotLi fL mt20 mb20">
					<li>고객님의 수익금은 구매자가 상품을 수령후 구매확인을 한 다음 택머니로 고객님의 계정에 지급됩니다.</li>
					<li>구매자가 구매확인전에 즉시구매를 취소 할 경우 다른 구매자에게 판매 될 수 있습니다. (해당 상품의 택 오픈 기간 종료 전 까지)</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#transferAcceptPopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">양도취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 양도신청 e -->

<!-- divPopup 양도완료 s -->
<div id="transferAcceptPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferAcceptPopWrap">
			<div class="dpTitle fadeEff slide-up e4">양도완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div id="goodsInfoConfilmBox" class="mt20">
					<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col /></colgroup>
						<tr>
							<th scope="col">품명</th>
							<th scope="col">배송비</th>
							<th scope="col">정가</th>
							<th scope="col">양도가격</th>
						</tr>
						<tr>
							<td class="ttaL">
								<div class="imgbox"><img src="https://goo.gl/BGajfY" alt="상품이미지" /></div>
								<div class="goodsName">버거킹 와퍼</div>
							</td>
							<td>0 <br />(전사상품권)</td>
							<td>5,800</td>
							<td><span class="fwB pointC1">5,000원</span></td>
						</tr>
					</table>
				</div>
				<div class="grayBgBox">
					<h5>위 상품의 양도가 완료되었습니다. <br />고객님의 계정에 <span class="pointC5">391,480원</span> 이 7영업일 이내로 적립됩니다.</h5>
				</div>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 양도완료 e -->

<!-- divPopup 양도적립취소사유 s -->
<div id="saveCancelRaesonPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="saveCancelRaesonPopWrap">
			<div class="dpTitle fadeEff slide-up e4">사유확인</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>즉시구매자(asd***)님께서 거래중단하여<br>최종적으로 거래가 이루어지지 않았습니다.</h5>
					<div class="dpGoodsTitle pointC5 dotWLine"><span class="fwB clr33">취소사유 : </span>주문취소</div>
				</div>
				<table class="viewTable mt20">
					<caption>상품확인</caption>
					<colgroup><col /></colgroup>
					<tr>
						<th scope="row">반품신청일</th>
						<td>2017-12-31</td>
					</tr>
				</table>
				<ul class="brownDotLi mt20 mb20">
					<li>거래를 취소한 즉시구매자의 취소횟수가 증가되었습니다.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 양도적립취소사유 e -->

<!-- divPopup 결제완료-카드 s -->
<div id="payCompletePopBox_card" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="payCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">결제완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox"><h5>결제가 완료되었습니다.</h5></div>
				<table class="viewTable">
					<caption>결제완료정보</caption>
					<colgroup><col width="35%"/><col /></colgroup>
					<tr>
						<th scope="row">카드명</th>
						<td>롯데카드</td>
					</tr>
					<tr>
						<th scope="row">무이자</th>
						<td>-</td>
					</tr>
					<tr>
						<th scope="row">할부개월</th>
						<td>일시불</td>
					</tr>
					<tr>
						<th scope="row">금액</th>
						<td>50,000원</td>
					</tr>
					<tr>
						<th scope="row">승인번호</th>
						<td>652320</td>
					</tr>
				</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 결제완료-카드 e -->

<!-- divPopup 결제완료-실시간계좌이체 s -->
<div id="payCompletePopBox_realtime" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="payCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">결제완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox"><h5>결제가 완료되었습니다.</h5></div>
				<table class="viewTable">
					<caption>결제완료정보</caption>
					<colgroup><col width="35%"/><col /></colgroup>
					<tr>
						<th scope="row">은행명</th>
						<td>기업은행</td>
					</tr>
					<tr>
						<th scope="row">금액</th>
						<td>50,000원</td>
					</tr>
				</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 결제완료-실시간계좌이체 e -->

<!-- divPopup 결제완료-가상계좌이체 s -->
<div id="payCompletePopBox_virtual" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="payCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">결제완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox"><h5>결제가 완료되었습니다.</h5></div>
				<table class="viewTable">
					<caption>결제완료정보</caption>
					<colgroup><col width="35%"/><col /></colgroup>
					<tr>
						<th scope="row">입금할 은행</th>
						<td>기업은행</td>
					</tr>
					<tr>
						<th scope="row">예금주</th>
						<td>택인택(주)</td>
					</tr>
					<tr>
						<th scope="row">계좌번호</th>
						<td>100-2353256-23-215</td>
					</tr>
					<tr>
						<th scope="row">금액</th>
						<td>50,000원</td>
					</tr>
					<tr>
						<th scope="row">입금마감시간</th>
						<td>2017년 3월 1일 18:00:00</td>
					</tr>
				</table>
				<div class="accountSmsBox grayBgBox">
					<h5 class="taL">입금계좌 문자로 보내기 (SMS)</h5>
				</div>
				<div class="inputTelBox">
					<select name="" id="mPhon" data-custom-id="mPhon" data-custom-class="mPhonSlt">
						<option value="">010</option>
						<option value="">010</option>
						<option value="">011</option>
					</select>
					<span class="divi">-</span>
					<input type="text" id="mPhon2"/><label for="mPhon2" class="blind">중간번호</label>
					<span class="divi">-</span>
					<input type="text" id="mPhon3"/><label for="mPhon3" class="blind">마지막번호</label>
					<a href="#none" class="smBtn mt5 ml20" onclick="nextPopup($(this),'#smsSendCompletePopBox'); return false;">문자보내기</a>
				</div>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 결제완료-가상계좌이체 e -->

<!-- divPopup 결제완료-택머니 s -->
<div id="payCompletePopBox_tagmoney" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="payCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">결제완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox"><h5>결제가 완료되었습니다.</h5></div>
				<table class="viewTable">
					<caption>결제완료정보</caption>
					<colgroup><col width="35%"/><col /></colgroup>
					<tr>
						<th scope="row">결제금액</th>
						<td>50,000 TM</td>
					</tr>
					<tr>
						<th scope="row">택머니 잔고</th>
						<td>250,000 TM</td>
					</tr>
				</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 결제완료-택머니 e -->

<!-- divPopup 결제완료-오류 s -->
<div id="payCompletePopBox_error" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="payCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">결제완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox mb0">
					<h5>결제가 완료되지 않았습니다.</h5>
					<div class="dotWLine"><h5 class="pointC5">Error : 256320</h5></div>
				</div>
				<div class="pageBtnBox taC mt0 fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 결제완료-오류 e -->

<!-- divPopup 문자전송완료 s -->
<div id="smsSendCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsSendCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">문자전송 완료</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox"><h5>고객님의 휴대전화로 다음과 같이 <br />메세지가 전송되었습니다.</h5></div>
				<table class="viewTable">
					<caption>문자전송완료정보</caption>
					<colgroup><col width="35%"/><col /></colgroup>
					<tr>
						<th scope="row">수신번호</th>
						<td>011-3304-4515</td>
					</tr>
					<tr>
						<th scope="row">입금계좌번호</th>
						<td>기업은행 : 100-56546465-515-554</td>
					</tr>
					<tr>
						<th scope="row">금액</th>
						<td>50,000원</td>
					</tr>
					<tr>
						<th scope="row">입금마감시간</th>
						<td>2017년 3월 1일 18:00:00</td>
					</tr>
				</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 문자전송완료 e -->

<!-- divPopup 앵콜요청 s -->
<div id="encoreApplyPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="encorePopWrap">
			<div class="dpTitle">앵콜요청</div>
			<div class="dpCon mt20">
				<div class="dpGoodsName">
					센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV <br />센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV
				</div>
				<div class="grayBgBox mt20"><h5>이 상품의 앵콜요청을 하시겠습니까?</h5></div>
				<ul class="brownDotLi fL mt20">
					<li>수신번호를 등록하시면 해당상품이 다시 판매될 때 문자메세지로 연락 드립니다.</li>
				</ul>
				<div class="checkBoxWrap dotWLine">
					<input type="checkbox" id="agree_personal" /><label for="agree_personal">개인정보 제공 동의</label>
					<a href="#none" class="fR smBtn">회원정보수정</a>
				</div>
				<div class="accountSmsBox grayBgBox mt20 mb20 p20">
					<h5 class="taC fs16e">문자메세지 수신번호 : <span class="pointC5">010-2222-5596</span></h5>
				</div>
				<!--
				<div class="inputTelBox">
					<select name="" id="mPhon" data-custom-id="mPhon" data-custom-class="mPhonSlt">
						<option value="">010</option>
						<option value="">010</option>
						<option value="">011</option>
					</select>
					<span class="divi">-</span>
					<input type="text" id="mPhon2"/><label for="mPhon2" class="blind">중간번호</label>
					<span class="divi">-</span>
					<input type="text" id="mPhon3"/><label for="mPhon3" class="blind">마지막번호</label>
				</div>
				-->
				<div class="pageBtnBox taC">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#encoreCompletePopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 앵콜요청 e -->

<!-- divPopup 앵콜요청_완료 s -->
<div id="encoreCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="encorePopWrap">
			<div class="dpTitle fadeEff slide-up e4">앵콜요청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="dpGoodsName">
					센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV <br />센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV
				</div>
				<div class="grayBgBox mt20"><h5>이 상품의 앵콜요청이 등록되었습니다.</h5></div>
				<ul class="brownDotLi fL mt20">
					<li>다시 택오픈이 시작되면 문자로 알려드리겠습니다.</li>
				</ul>
				<div class="grid100 dotWLine">
					<div class="accountSmsBox grayBgBox mb20 p20">
						<h5 class="fs16e">문자메세지 수신번호 : <span class="pointC5">010-2222-5596</span></h5>
					</div>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 앵콜요청_완료e -->

<!-- divPopup 문자알림요청 s -->
<div id="smsInformApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsInformPopWrap">
			<div class="dpTitle fadeEff slide-up e4">문자알림 요청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="dpGoodsName">
					센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV <br />센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV
				</div>
				<div class="grayBgBox mt20"><h5>이 상품의 오픈 알림 문자 메세지(SMS)를<br />받으시겠습니까?</h5></div>
				<div class="checkBoxWrap mt20">
					<input type="checkbox" id="agree_personal" /><label for="agree_personal">개인정보 제공 동의</label>
					<a href="#none" class="fR smBtn">회원정보수정</a>
				</div>
				<div class="accountSmsBox grayBgBox mt20 mb20 p20">
					<h5 class="taC fs16e">문자메세지 수신번호 : <span class="pointC5">010-2222-5596</span></h5>
				</div>
				<!--
				<div class="inputTelBox">
					<select name="" id="mPhon" data-custom-id="mPhon" data-custom-class="mPhonSlt">
						<option value="">010</option>
						<option value="">010</option>
						<option value="">011</option>
					</select>
					<span class="divi">-</span>
					<input type="text" id="mPhon2"/><label for="mPhon2" class="blind">중간번호</label>
					<span class="divi">-</span>
					<input type="text" id="mPhon3"/><label for="mPhon3" class="blind">마지막번호</label>
				</div>
				-->
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#smsInformCompletePopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 문자알림요청 e -->

<!-- divPopup 문자알림요청_완료 s -->
<div id="smsInformCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsInformPopWrap">
			<div class="dpTitle fadeEff slide-up e4">문자알림 요청</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="dpGoodsName">
					센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV <br />센시 HD LED 40in FULL 스탠드형 CL-40LNF10 무결점 TV
				</div>
				<div class="grayBgBox mt20 mb20 pr30 pl30">
					<h5>오픈시 알림 문자메세지 등록완료</h5>
					<div class="grid100 dotWLine">
						<div class="accountSmsBox grayBgBox p0">
							<h5 class="fs16e">문자메세지 수신번호 : <span class="pointC5">010-2222-5596</span></h5>
						</div>
					</div>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 문자알림요청_완료 e -->

<!-- divPopup 문자알림요청취소 s -->
<div id="smsInformCancelPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsInformCancelPopWrap">
			<div class="dpTitle fadeEff slide-up e4">알림취소</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>이 상품의 앵콜·문자알림을<br>취소하시겠습니까?</h5>
					<div class="dpGoodsTitle pointC5 dotWLine">KD006-A153890 [마이크로소프트] XBOXONE 본체 500GB/1TB 콘솔/신형패드/키넥트 선택[ 퀀텀브레이크/툼레이더/디비전/헤일로5/엘리트]</div>
				</div>
				<ul class="brownDotLi mt20">
					<li>알림취소 버튼을 누르면 문자알림이 취소됩니다.</li>
					<li></li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#smsInformCancelCompletePopBox'); return false;">알림취소</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 문자알림요청취소 e -->

<!-- divPopup 문자알림요청취소_완료 s -->
<div id="smsInformCancelCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsInformCancelCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">알림취소</div>
			<div class="dpCon mt20 fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>이 상품의 앵콜·문자알림의 취소가 <br>완료되었습니다.</h5>
					<div class="dpGoodsTitle pointC5 dotWLine">KD006-A153890 [마이크로소프트] XBOXONE 본체 500GB/1TB 콘솔/신형패드/키넥트 선택[ 퀀텀브레이크/툼레이더/디비전/헤일로5/엘리트]</div>
				</div>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 문자알림요청취소_완료 e -->

<!-- divPopup 즉시구매대기자등록확인 s -->
<div id="transferRegPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferRegPopWrap">
			<div class="dpTitle fadeEff slide-up e4">즉시구매 대기자 등록확인</div>
			<div class="dpCon fadeEff slide-up e6">
				<div id="goodsInfoConfilmBox" class="mt10">
					<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col width="50%"/><col /></colgroup>
						<tr>
							<th scope="col">품명</th>
							<th scope="col">정가</th>
							<th scope="col">배송비</th>
							<th scope="col">제시가</th>
							<th scope="col">택머니차감액</th>
						</tr>
						<tr>
							<td class="ttaL">
								<div class="imgbox"><img src="https://goo.gl/BGajfY" alt="상품이미지" /></div>
								<div class="goodsName">버거킹 와퍼</div>
							</td>
							<td>0 <br />(전사상품권)</td>
							<td>5,800</td>
							<td><span class="fwB pointC1">5,000원</span></td>
							<td><span class="fwB clr33">5,000원</span></td>
						</tr>
					</table>
				</div>
				<table class="viewTable dpTransferRegInfoBox">
					<caption>즉시구매상품정보</caption>
					<colgroup><col width="25%"/><col /></colgroup>
					<tr>
						<th scope="row">옵션확인</th>
						<td>
							<ul>
								<li><span class="fwB">옵션명 1 </span>: 스페이스 그레이</li>
								<li><span class="fwB">옵션명 2 </span>: 스키니</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th scope="row">배송지정보</th>
						<td>
							<ul>
								<li class="pt5">06389</li>
								<li class="pt5">서울시 서대문구 신촌로 157 화영빌딩 4층</li>
								<li class="pt5">택인택(주)</li>
								<li><a href="#none" class="btnS2 gryBtn2 closePopBtn">수정</a></li>
							</ul>
						</td>
					</tr>
					<tr>
						<th scope="row">수신자정보</th>
						<td>
							<ul>
								<li class="pt5">010-8264-4645</li>
								<li class="pt5">홍길동</li>
								<li><a href="#none" class="btnS2 gryBtn2 closePopBtn">수정</a></li>
							</ul>
						</td>
					</tr>
				</table>
				<ul class="brownDotLi fL mt10">
					<li>즉시 구매 대기자로 등록을 완료하시면 고객님이 제시한 가격만큼의 택머니가 예치금으로 전환됩니다.</li>
					<li>고객님의 제시 가격에 맞는 판매자가 없이 해당상품의 택 오픈이 종료될 경우 예치금은 즉시 고객님의 계정으로 반환됩니다.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#transferRegCompletePopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 즉시구매대기자등록확인 e -->

<!-- divPopup 즉시구매대기자등록완료 s -->
<div id="transferRegCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferRegCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">즉시구매 대기자 등록완료</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>등록이 완료되었습니다.</h5></div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 즉시구매대기자등록완료 e -->

<!-- divPopup 즉시구매대기자등록취소 s -->
<div id="transferRegCancelPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferRegCancelPopWrap">
			<div class="dpTitle fadeEff slide-up e4">즉시구매 대기자 등록취소</div>
			<div class="dpCon fadeEff slide-up e6">
				<div id="goodsInfoConfilmBox" class="mt10">
					<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col width="50%"/><col /></colgroup>
						<tr>
							<th scope="col">품명</th>
							<th scope="col">정가</th>
							<th scope="col">배송비</th>
							<th scope="col">제시가</th>
							<th scope="col">택머니차감액</th>
						</tr>
						<tr>
							<td class="ttaL">
								<div class="imgbox"><img src="https://goo.gl/BGajfY" alt="상품이미지" /></div>
								<div class="goodsName">버거킹 와퍼</div>
							</td>
							<td>5,800</td>
							<td>0 <br />(전사상품권)</td>
							<td><span class="fwB pointC1">5,000원</span></td>
							<td><span class="fwB clr33">5,000원</span></td>
						</tr>
					</table>
				</div>
				<table class="viewTable dpTransferRegInfoBox">
					<caption>즉시구매상품정보</caption>
					<colgroup><col width="25%"/><col /><col width="25%"/><col /></colgroup>
					<tr>
						<th scope="row">고객님의 택머니 잔액</th>
						<td><span class="fwB">5,000원</span></td>
						<th scope="row">반환 될 택머니 금액</th>
						<td><span class="fwB pointC1">5,000원</span></td>
					</tr>
					<tr>
						<th scope="row">반환 후 택머니 잔액</th>
						<td colspan="3"><span class="fwB">5,000원</span></td>
					</tr>
				</table>
				<ul class="brownDotLi fL mt10">
					<li>즉시구매 대기자 등록 취소를 신청하시면 등록할 때 결제한 차감된 택머니가 반환됩니다..</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#transferRegCancelCompletePopBox'); return false;">취소신청</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 즉시구매대기자등록취소 e -->

<!-- divPopup 즉시구매대기자등록취소완료 s -->
<div id="transferRegCancelCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="transferRegCancelCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">즉시구매 대기자 등록취소 완료</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>즉시구매 대기자 등록이 취소되었습니다.</h5></div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 즉시구매대기자등록취소완료 e -->

<!-- divPopup 본인인증완료 s -->
<div id="certiCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="certiCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">본인인증 완료</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>본인 확인이 완료되었습니다.</h5></div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="<?=$root?>/login/login.html" class="btnS1 blckBtn mt0 closePopBtn">로그인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 본인인증완료 e -->

<!-- divPopup 본인인증실패 s -->
<div id="certiFailPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="certiFailPopWrap">
			<div class="dpTitle fadeEff slide-up e4">본인인증 실패</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5 class="dotLineBottom">본인 확인이 실패하였습니다.</h5>
					<p class="fs16e">로그인 정보를 다시 확인 바랍니다.</p>
					<p class="fs16e pointC5">고객센터 문의 : info@tagintag.com</p>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="<?=$root?>/login/login.html" class="btnS1 blckBtn mt0 closePopBtn">로그인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 본인인증실패 e -->

<!-- divPopup 택포인트충전완료 s -->
<div id="tPointChargeDonePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="tPointChargeDonePopWrap">
			<div class="dpTitle fadeEff slide-up e4">택포인트 충전</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>택포인트 충전이 완료되었습니다.</h5></div>
				<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col /></colgroup>
						<tr>
							<th scope="row">충전금액</th>
							<td>10,000 P</td>
						</tr>
						<tr>
							<th scope="row">결제금액</th>
							<td>10,000 원 (부가세 포함)</td>
						</tr>
						<tr>
							<th scope="row">결제구분</th>
							<td>신용카드</td>
						</tr>
					</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 택포인트충전완료 e -->

<!-- divPopup 택머니충전완료 s -->
<div id="tMoneyChargeDonePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="tMoneyChargeDonePopWrap">
			<div class="dpTitle fadeEff slide-up e4">택머니 충전</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>택머니 충전이 완료되었습니다.</h5></div>
				<table class="viewTable">
						<caption>상품확인</caption>
						<colgroup><col /></colgroup>
						<tr>
							<th scope="row">충전금액</th>
							<td>10,000 M</td>
						</tr>
						<tr>
							<th scope="row">결제금액</th>
							<td>10,000 원 (부가세 포함)</td>
						</tr>
						<tr>
							<th scope="row">결제구분</th>
							<td>신용카드</td>
						</tr>
					</table>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 택머니충전완료 e -->

<!-- divPopup 회원탈퇴신청 s -->
<div id="memberLeaveApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="memberLeaveApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">회원탈퇴 신청</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox"><h5>탈퇴전에 확인해주세요.</h5></div>
				<table class="viewTable">
					<caption>택머니, 택포인트 현황</caption>
					<colgroup><col width="25%"/><col width="30%"/><col width="35%"/></colgroup>
					<tr>
						<th scope="row">구분</th>
						<td>보유</td>
						<td>환불 가능 금액(수수료 공제후)</td>
					</tr>
					<tr>
						<th scope="row">택포인트</th>
						<td>30,000</td>
						<td>24,400 원</td>
					</tr>
					<tr>
						<th scope="row">택머니</th>
						<td>1,500</td>
						<td>1,350 원</td>
					</tr>
				</table>
				<ul class="guideTxt pointC5">
					<li>※ 환불 가능한 택포인트/택머니를 환불 받으신 후 탈퇴를 진행 해주세요.</li>
				</ul>
				<div class="pageBtnBox taC dotWLine fadeEff slide-up e8">
					<a href="<?=$root?>/mypage/member_leave_complet.html" class="btnS1 blckBtn mt0 closePopBtn">환불하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 회원탈퇴신청 e -->

<!-- divPopup 회원탈퇴신청2 s -->
<div id="memberLeaveApplyPopBox2" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="memberLeaveApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">회원탈퇴</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>
						탈퇴와 함께 잔여 택머니와 잔여 택포인트는 소멸됩니다. <br>
						또한 회원 탈퇴 후 7일동안은 재가입이 불가능합니다.
					</h5>
				</div>
				<ul class="guideTxt taC pointC5 pt20 pb10">
					<li>※ 탈퇴시 동일한 ID로는 가입이 불가능하며,  신규 ID로 재가입하실 수 있습니다.</li>
				</ul>
				<div class="dotWLine pt20 pb20">
					<h5>
						그래도 탈퇴하시겠습니까?
					</h5>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="<?=$root?>/mypage/member_leave_complet.html" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 회원탈퇴신청2 e -->

<!-- divPopup VIP회원가입결제 s -->
<div id="vipJoinPayPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="vipJoinPayPopWrap">
			<div class="dpTitle">VIP회원 가입 결제</div>
			<div class="dpCon mt20">
				<div class="grayBgBox mb30"><h5>VIP회원 3개월(90,000원)이 결제됩니다.</h5></div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#vipJoinPayCompletePopBox'); return false;">확인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup VIP회원가입결제 e -->

<!-- divPopup VIP회원가입결제-완료 s -->
<div id="vipJoinPayCompletePopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="vipJoinPayCompletePopWrap">
			<div class="dpTitle">VIP회원 가입 결제</div>
			<div class="dpCon mt20">
				<div class="grayBgBox"><h5>축하합니다. <br/><span class="pointC5">3개월, VIP회원에 가입되었습니다.</span> </h5></div>
				<ul class="brownDotLi fL mt20 pb20 mb20 dotLineBottom">
					<li>VIP회원의 이용은 익월 1일부터 가입기간동안 이용이 가능합니다.</li>
					<li>월별 오픈 유효기간은 익월 말일까지이며, 익월 말일이후 소멸되오니 착오 없으시길 바랍니다.</li>
				</ul>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup VIP회원가입결제-완료 e -->

<!-- divPopup VIP회원가입결제-부족 s -->
<div id="vipJoinPayLackPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="vipJoinPayLackPopWrap">
			<div class="dpTitle">VIP회원 가입 결제</div>
			<div class="dpCon mt20">
				<div class="grayBgBox mb30"><h5>택머니 잔액이 부족합니다. <br/>현재 고객님의 택머니 잔액은 <span class="pointC5">(xxxx원)</span>입니다.</h5></div>
				<div class="pageBtnBox taC mb10">
					<a href="../mypage/charge_money.html" class="btnS1 blckBtn">택머니 충전</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup VIP회원가입결제-부족 e -->

<!-- divPopup 고객센터안내 s -->
<div id="csCenterPopBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="csCenterPopWrap">
			<div class="dpTitle"><h5>고객센터(02-313-3310)로 연락 주시기 바랍니다.</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					택인택은 최대 99% 할인 된 가격에 상품을 <br/>
					구입 할 수 있는 세계 최초 서비스 입니다.<br><br>

					<b id="csCenterPopBoxAction" style="color:#FF0000;">요청작업</b> 처리에 앞서 꼭 알려드려야 할 사항이 있어<br>
					자동화 처리 하지 않고 유선 안내 후 진행 하고 있습니다.<br><br>

					번거로우시겠지만 고객센터로 연락 주시면<br>
					상세히 설명 드리고 신속하게 처리 드리겠습니다.<br><br>

					<span class="fwB">고객센터 운영시간 : 평일 09시~18시</span>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 고객센터안내 e -->

<!-- divPopup 알림신청/해제 s -->
<div id="smsAlarmPopBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="smsAlarmPopWrap">
			<div class="dpTitle"><h5>문자알림 신청/해제</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					문자알림을 신청하면 회원님의 휴대폰으로<br/>오픈 1시간 내외에 문자메시지로 알려 드립니다.<br/>
					<br/>
					알림신청 및 알림해제는 회원정보수정 메뉴에서 가능 합니다.<br/>
					<br/>
					※ 현재 회원님의 문자알림은 "<b style="color:#FF0000">ON</b>" 상태 입니다.<br/>
					<br/>
					<span class="fwB">해제 하시려면 아래 "해제"버튼을 클릭해 주십시오.</span>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="/mypage/member_info_pw.html" class="btnS1 blckBtn closePopBtn">해제</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 알림신청/해제 e -->

<!-- divPopup 체험하기안내 s -->
<div id="experiencePopBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="experiencePopWrap">
			<div class="dpTitle"><h5>체험하기 모드입니다.</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					"체험하기"에서는 실제 구매 및 양도가 불가 합니다.<br/>
					<br/>
					로그인 후 돈버는 쇼핑몰 택인택을 이용 바랍니다.<br/>
					<br/>
					감사합니다!<br/>
					<br/>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="/member/join_step1_policy.html" class="btnS1 blckBtn closePopBtn">회원가입</a>
					<a href="/login/login.html" class="btnS1 blckBtn closePopBtn">로그인</a>
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 체험하기안내 e -->

<!-- divPopup 메인배너참여하기 s -->
<div id="ingGoodsListPopBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="ingGoodsListPopWrap">
			<div class="dpTitle"><h5>참여하기</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					나에게 돌아올 99%할인의 행운!<br/>회차별 '참여하기'를 클릭하시면<br/>지금 바로 확인 가능.
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="<?=$root?>/goods/goods_list.html?section=N" class="btnS1 blckBtn closePopBtn">GO</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 메인배너참여하기 e -->

<!-- divPopup 메인배너무료체험 s -->
<div id="freeExperiencePopBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="freeExperiencePopWrap">
			<div class="dpTitle"><h5>무료체험 불가</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					로그인 상태에서는 <br>"무료체험"이 불가능합니다. <br><br> <span class="pointC1">로그아웃</span> 상태에서 이용해주세요.
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 blckBtn closePopBtn">닫기</a>
				</div>
			</div>
		</div>
		<!--
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close2.png" alt="닫기" class="closeIcon2"/></a>
		<div id="freeExperiencePopWrap">
			<div class="dpTitle"><h5>무료체험</h5></div>
			<div class="dpCon mt20">
				<div class="textBox mb30">
					단 1% 가격에 미니골드바를 구매할 수 있는<br/>택인택 무료체험이 시작됩니다.<br/><br/>화면이 열리면<br/>"까보기"를 클릭하세요.<br/>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="<?=$root?>/goods/goods_detail.html" class="btnS1 blckBtn closePopBtn">GO</a>
				</div>
			</div>
		</div>
		-->
	</div>
</div>
<!-- divPopup 메인배너무료체험 e -->

<!-- divPopup 택머니전환_1 s -->
<div id="turnoverMApplyPopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="turnoverMApplyPopWrap">
			<div class="dpTitle fadeEff slide-up e4">택머니 전환</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>
						<span class="pointC5">택머니 → 택포인트로 전환하시겠습니까?</span><br>
						전환된 택머니는 복구가 불가능합니다.
					</h5>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 gryBtn mt0 closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn mt0" onclick="nextPopup($(this),'#turnoverMCompletePopBox'); return false;">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 택머니전환_1 e -->

<!-- divPopup 택머니전환_2 s -->
<div id="turnoverMCompletePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="turnoverMCompletePopWrap">
			<div class="dpTitle fadeEff slide-up e4">택머니 전환</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>택포인트로 전환이 완료되었습니다.</h5>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 blckBtn mt0 closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 택머니전환_2 e -->

<!-- divPopup 회원탈퇴안내 s -->
<div id="mbmLeaveNoticePopBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="mbmLeaveNoticePopWrap">
			<div class="dpTitle fadeEff slide-up e4">회원탈퇴 안내</div>
			<div class="dpCon fadeEff slide-up e6">
				<div class="grayBgBox">
					<h5>
						<span class="pointC5">서비스 준비 중입니다.</span><br>
						1:1문의를 통해 요청하시기 바랍니다. <br>
						확인을 선택하시면 1:1문의 화면으로 이동합니다.
					</h5>
				</div>
				<div class="pageBtnBox taC fadeEff slide-up e8">
					<a href="#none" class="btnS1 gryBtn mt0 closePopBtn">취소</a>
					<a href="<?=$root?>/customer/inquiry_write.html" class="btnS1 blckBtn mt0">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 회원탈퇴안내 e -->

<!-- divPopup 택오픈무료쿠폰 s -->
<div id="freeTagOpenCouponPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="freeTagOpenCouponPopWrap">
			<div class="dpTitle">안내</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="iconBox">
						오늘 사용 가능한<br/>
						무료 오픈택을 사용해보세요.<br/>
						(매일 오후3시 6분 5초에 오픈)
					</div>
				</div>
				<ul class="brownDotLi mt20 mb20">
					<li>친구 초대하고 FREE 상품 받아가세요.<br>(1명 초대 가입시 매일 1회씩 쿠폰 추가 제공)</li>
				</ul>
				<div class="pageBtnBox dotWLine taC mb10">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn mt0" onclick="nextPopup($(this),'#invitePhoneNumPopBox'); return false;">초대하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 택오픈무료쿠폰 e -->

<!-- divPopup 오픈예정일이전안내 s -->
<div id="openBefoeEventPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="openBefoeEventPopWrap">
			<div class="dpTitle">참여하기</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="iconBox">이벤트 택오픈 기회 : 1회</div>
				</div>
				<ul class="brownDotLi mt20 mb20">
					<li>10월 31일 오후 3시6분5초에 오픈 예정입니다.</li>
					<li>친구 초대하셔서 이벤트 택을 많이 모아두세요. <br>(1명당 1개씩 증가)</li>
				</ul>
				<div class="pageBtnBox dotWLine taC mb10">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 오픈예정일이전안내 e -->

<!-- divPopup 초대전화번호 s -->
<div id="invitePhoneNumPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="invitePhoneNumPopWrap">
			<div class="dpTitle">친구초대하기</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="iconBox">
						초대하실 친구의 <br/>
						휴대폰번호를 입력해주세요~!<br/>
						<input type="text" id="dpConAccount" placeholder="'-'없이 휴대폰 번호만 입력하세요"/>
					</div>
				</div>
				<ul class="brownDotLi mt20 mb20">
					<li>
						<span class="fL">초대하기를 선택하시면 상대방에게 즉시 문자가 발송됩니다. </span>
						<!-- <a href="#none" class="bltQ" onclick="nextPopup($(this),'#inviteExSmsPopBox'); return false;"><span class="blind">문자예시</span></a> -->
						<a href="#none" class="bltQ" onclick="callPopup('#inviteExSmsPopBox'); return false;"><span class="blind">문자예시</span></a>
					</li>
					<li>
						초대받은 친구가 회원가입하면 회원님께도 문자로 알려드립니다.<br/>
						(친구가 가입시 추천인으로 입력한 경우에만 적립됩니다.)
					</li>
				</ul>
				<div class="pageBtnBox dotWLine taC mb30">
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#inviteCompletePopBox'); return false;">초대하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 초대전화번호 e -->

<!-- divPopup 초대전화_문자전송예시 s -->
<div id="inviteExSmsPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<!-- <a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a> -->
		<a href="#none" onclick="hidePopup3($('#inviteExSmsPopBox')); return false;"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="inviteExSmsPopWrap">
			<div class="dpTitle">문자 전송 예시</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						[택인택 친구초대] 99.9% 할인이벤트<br/>
						홍길동님께서 <br/>
						명품가방(340만원 상당)을 3,400원에 구매할 수 있는<br/>
						무료 쿠폰을 선물하셨습니다. <br/>
						지금 접속하셔서 사용하시겠습니까?<br/><br/>
						돈버는 쇼핑몰 택인택(<span style="text-decoration:underline;">www.TAGinTAG.com</span>) <br/><br/>
						친구ID : ‘ㅇㅇㅇㅇㅇ’를 회원가입시 꼭 입력하셔야 기회가 추가됩니다.
					</div>
				</div>
				<div class="pageBtnBox taC mb10">
					<!-- <a href="#none" class="btnS1 blckBtn closePopBtn">확인</a> -->
					<a href="#none" class="btnS1 blckBtn" onclick="hidePopup3($('#inviteExSmsPopBox')); return false;">닫기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 초대전화_문자전송예시 e -->

<!-- divPopup 초대전화_문자전송완료 s -->
<div id="inviteCompletePopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="inviteCompletePopWrap">
			<div class="dpTitle">친구초대하기</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						문자 전송이 완료되었습니다.
					</div>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 초대전화_문자전송완료 e -->

<!-- divPopup 초대확인 s -->
<div id="inviteConfilmPopBox" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="inviteConfilmPopWrap">
			<div class="dpTitle">초대확인</div>
			<div class="dpCon mt20">
				<table class="listTable2">
					<colgroup>
						<col width="33%"/>
						<col width="33%"/>
						<col width="33%"/>
					</colgroup>
					<tr>
						<th scope="col">번호</th>
						<th scope="col">초대일</th>
						<th scope="col">구분</th>
					</tr>
					<tr>
						<td>01012345678</td>
						<td>2017.10.10</td>
						<td>초대</td>
					</tr>
					<tr>
						<td>01012345678</td>
						<td>2017.10.10</td>
						<td>초대</td>
					</tr>
					<tr>
						<td>01012345678</td>
						<td>2017.10.10</td>
						<td>초대</td>
					</tr>
					<tr>
						<td>01012345678</td>
						<td>2017.10.10</td>
						<td>초대</td>
					</tr>
					<tr>
						<td>01012345678</td>
						<td>2017.10.10</td>
						<td>초대</td>
					</tr>
				</table>
				<div class="pagingBoxWrap mt20">
					<ul class="pagingBox">
						<li class="angleBtn abLL"><a href="#none"><img src="<?=$root?>/skin/images/common/blt_arrow_left2.png" alt="처음페이지" /></a></li>
						<li class="angleBtn abL"><a href="#none"><img src="<?=$root?>/skin/images/common/blt_arrow_left.png" alt="이전페이지" /></a></li>
						<li class="numBtn actOn"><a href="#none">1</a></li>
						<li class="numBtn"><a href="#none">2</a></li>
						<li class="numBtn"><a href="#none">3</a></li>
						<li class="numBtn"><a href="#none">4</a></li>
						<li class="numBtn"><a href="#none">5</a></li>
						<li class="angleBtn abR"><a href="#none"><img src="<?=$root?>/skin/images/common/blt_arrow_right.png" alt="다음페이지" /></a></li>
						<li class="angleBtn abRR"><a href="#none"><img src="<?=$root?>/skin/images/common/blt_arrow_right2.png" alt="끝페이지" /></a></li>
					</ul>
				</div>
				<div class="pageBtnBox fL taC mt30 mb30">
					<a href="#none" class="btnS1 blckBtn closePopBtn">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 초대확인 e -->

<!-- divPopup 까보기_무료택_있을때 s -->
<div id="useTagPopBox_free" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="useTagPopWrap">
			<div class="dpTitle">무료 택오픈</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						무료 오픈택 : 999개 <br>
						무료 오픈택을 사용하여</br>
						택오픈(까보기)합니다.
					</div>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#inputNumBox'); return false;">확인</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 까보기_무료택_있을때 e -->

<!-- divPopup 까보기_무료택_없을때 s -->
<div id="unuseTagPopBox_free" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="useTagPopWrap">
			<div class="dpTitle">무료 택오픈</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						무료 오픈택이 부족합니다.<br>
						(택포인트로 프리존 상품 까보기가 불가능 합니다)
					</div>
				</div>
				<ul class="brownDotLi mt20 mb20">
					<li>
						친구를 초대하여 추가 무료 오픈택을 모아보세요.<br>
						(매일 1장씩 무료 / 친구초대 1명당 1장씩 무료지급)
					</li>
				</ul>
				<div class="pageBtnBox dotWLine taC mb10">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#invitePhoneNumPopBox'); return false;">초대하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 까보기_무료택_없을때 e -->

<!-- divPopup 까보기_이벤트택_있을때 s -->
<div id="useTagPopBox_event" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="useTagPopWrap">
			<div class="dpTitle">이벤트 택오픈</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						이벤트 택 : 999개 <br>
						이벤트 택을 사용하여 택오픈(까보기)합니다.
					</div>
				</div>
				<div class="pageBtnBox taC mb10">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#inputNumBox'); return false;">초대하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 까보기_이벤트택_있을때 e -->

<!-- divPopup 까보기_이벤트택_없을때 s -->
<div id="unuseTagPopBox_event" class="divPopupBox">
	<div class="divPopWrap2">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon2"/></a>
		<div id="useTagPopWrap">
			<div class="dpTitle">이벤트 택오픈</div>
			<div class="dpCon mt20">
				<div class="baigyBgBox pointC10">
					<div class="textBox">
						이벤트 택이 부족합니다.
					</div>
				</div>
				<ul class="brownDotLi mt20 mb20">
					<li>
						친구를 초대하여 추가 이벤트 택을 모아보세요. <br>
						(예시:친구 5명 초대 가입시 이벤트 택 5회 추가 적립)
					</li>
				</ul>
				<div class="pageBtnBox dotWLine taC mb10">
					<a href="#none" class="btnS1 gryBtn closePopBtn">취소</a>
					<a href="#none" class="btnS1 blckBtn" onclick="nextPopup($(this),'#invitePhoneNumPopBox'); return false;">초대하기</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- divPopup 까보기_이벤트택_없을때 e -->