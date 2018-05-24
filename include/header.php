<div class="pstR wWrap">
	<!-- skipBox s -->
	<dl id="skipBox">
		<dt><strong class="blind">바로가기 메뉴</strong></dt>
		<dd><a class="goDirect" href="#contents">본문 바로가기</a></dd>
		<dd><a class="goDirect" href="#lnb">메인메뉴 바로가기</a></dd>
	</dl>
	<!-- skipBox e -->
</div>

<header>
	<div class="wWrap">
		<div id="headBox">
			<h1 id="topLogo"><a href="<?=$root?>/"><img src="<?=$root?>/skin/images/common/logo_top.png" alt="TagInTag 확률 앞에 평등하다!" /></a></h1>
			<!-- gnb s -->
			<h2 class="blind">상단메뉴</h2>
			<ul id="gnb">
				<li><a href="<?=$root?>/vip/index.html"><div class="vipHomeBtn">VIP입장</div></a></li>
				<li><a href="<?=$root?>/login/login.html">로그인</a></li>
				<li><a href="#none"><span class="fwB">류승현 님</span> / <span class="topMLevel_vip">VIP회원(~8월)</span></a></li>
				<li><a href="#none">로그아웃</a></li>
				<li><a href="<?=$root?>/member/join_step1_policy.html">회원가입</a></li>
				<li><a href="<?=$root?>/mypage/mypage_home.html">마이페이지</a></li>
				<li><a href="<?=$root?>/customer/customer_home.html">고객센터</a></li>
				<li><a href="<?=$root?>/mytag/open_history.html">My Tag</a></li>
			</ul>
			<!-- gnb e -->
		</div>
	</div>
	<nav id="lnb">
		<div class="wWrap">
			<h2 class="blind">주메뉴</h2>
			<!-- lnb s -->
			<? include $d_root.'/include/lnb.php' ?>
			<!-- lnb e -->
		</div>
	</nav>
</header>