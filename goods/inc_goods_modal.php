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
			<label for="tagNumInput">직접입력<br />(1 ~ 9999)</label>
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
				<li class="fadeEff slide-rt e7"><a href="#none"><span class="blind">0</span></a></li>
			</ul>
			<div class="inpnAutoKey fadeEff slide-rt e8"><a href="#none"><span class="blind">자동선택</span></a></div>
		</div>
		<div class="pageBtnBox">
			<a href="#none" class="tagNumSubmit fadeEff slide-rt e9">선택완료 (-50P)</a>
		</div>
	</div>
</div>