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
			<label for="tagNumInput" onclick="callPopup('#trialBox'); return false;">직접입력<br />(1 ~ 9999)</label>
			<input type="text" id="tagNumInput" class="tagNumInput" maxlength="4" readonly/>
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
				<li class="fadeEff slide-rt e7"><a href="#none" onclick="callPopup2('#tagNumConfilmBox'); return false;"><span class="blind">0</span></a></li>
			</ul>
			<div class="inpnAutoKey fadeEff slide-rt e8"><a href="#none"><span class="blind">자동선택</span></a></div>
		</div>
		<div class="pageBtnBox">
			<a href="#none" class="tagNumSubmit fadeEff slide-rt e9">선택완료 (-50P)</a>
		</div>
	</div>
</div>

<div id="trialBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn" onClick="hidePopupAll();"><img src="<?=$root?>/skin/images/divpop/btn_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="trialConBox">
			<div class="trialTitle fadeEff slide-rt">
				택(가격) 확인은 택인택 회원만 가능합니다.
			</div>
			<div class="gridL fadeEff slide-rt e2">
				<div class="trialBtn fadeEff slide-rt e3">
					<a href="<?=$root?>/member/join_step1_policy.html">회원가입</a>
				</div>
				<div class="trialDescBox fadeEff slide-rt e4">
					지금 회원 가입 하시면<br>
					특별한 혜택 3가지가 제공 됩니다.<br><br>
					- 감사 포인트 1,000P 제공<br>
					- 신규 회차 OPEN시 무료 알림(한시적 제공)<br>
					- 판매 자격 확보(수익, 돈 버는 쇼핑몰)<br>
					※ 회원가입 후 바로 택(가격)확인 가능
				</div>
			</div>
			<div class="gridR fadeEff slide-rt e5">
				<div class="trialBtn fadeEff slide-rt e6"">
					<a href="#none">체험하기</a>
				</div>
				<div class="trialDescBox fadeEff slide-rt e7">
					돈 버는 쇼핑몰 택인택!<br>
					체험하기 버튼을 클릭하시면<br>
					회원가입 없이도 체험이 가능 합니다.<br><br>
					<span class="pointC7" style="letter-spacing:-0.09em;">※ “체험하기”에서는 실제 구매가 불가 합니다.<br>
				</div>
			</div>
			<div class="grid100 mt50 fadeEff slide-rt e8">
				<div class="trialBtn fadeEff slide-rt e9"">
					<a href="<?=$root?>/login/login.html">로그인</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="tagNumConfilmBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn2"><img src="<?=$root?>/skin/images/divpop/btn_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="trialConBox">
			<div class="tncTitle fadeEff slide-up e2">
				까보기를 계속 진행하시겠습니까?
			</div>
			<div class="grid100 fadeEff slide-up e4">
				<div class="tncDescBox">
					<span class="pointC1">500P</span>가 <span class="pointC6">차감</span>됩니다. <br>
					차감 후 택포인트 잔액은 <span class="pointC3">36000P</span> 입니다 
				</div>
			</div>
			<div class="grid100 taC fadeEff slide-up e8">
				<a href="#none" class="tncBtn closePopBtn2">취소</a>
				<a href="#none" class="tncBtn ml20">계속(-500P)</a>
			</div>
		</div>
	</div>
</div>