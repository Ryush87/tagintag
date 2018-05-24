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
		<!-- gnb s -->
		<h2 class="blind">상단메뉴</h2>
		<ul id="gnb">
			<li><a href="#none">로그인</a></li>
			<li><a href="#none">회원가입</a></li>
			<li><a href="<?=$root?>/mypage/mypage_home.html">마이페이지</a></li>
			<li><a href="#none">고객센터</a></li>
			<li><a href="#none">My Tag</a></li>
		</ul>
		<!-- gnb e -->
	</div>
	<div class="wWrap">
		<div id="headBox">
			<h1 id="topLogo"><a href="<?=$root?>/"><img src="<?=$root?>/skin/images/common/logo_top.png" alt="TagInTag 확률 앞에 평등하다!" /></a></h1>
			<div id="hBanner">
				<ul>
					<li><img src="<?=$root?>/skin/images/temp/temp_hbanner_1.jpg" alt="배너" /></li>
					<li><img src="<?=$root?>/skin/images/temp/temp_hbanner_1.jpg" alt="배너" /></li>
					<li><img src="<?=$root?>/skin/images/temp/temp_hbanner_1.jpg" alt="배너" /></li>
				</ul>
				<div class="hScrollBox">
					<a href="#none" class="scrlUp"><span class="blind">위로</span></a>
					<a href="#none" class="scrlDown"><span class="blind">아래로</span></a>
				</div>
			</div>
			<!-- search s -->
			<div id="hSearch">
				<h2 class="blind">사이트검색</h2>
				<input type="text" placeholder=""/>
				<div class="hSerachBtn"><a href="#none"><img src="<?=$root?>/skin/images/common/icon_glasses.png" alt="검색실행버튼" /></a></div>
			</div>
			<!-- search e -->
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