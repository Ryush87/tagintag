<!-- divPopup start -->
<div class="divPopupBg"></div>

<div id="inputNumBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/divpop/btn_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="inpnTitle fadeEff slide-rt">
			<div class="inpnTitleBg"><img src="<?=$root?>/skin/images/divpop/input_num_title_bg.png" alt="밑줄"/></div>
			<div class="italicTitle">행운의 <span>숫자</span>를 <span>선택</span>하세요!</div>
		</div>
		<div class="inpnInputBox fadeEff slide-rt e2"><label for="tagNumInput">직접입력<br />(1 ~ 999)</label><input type="text" id="tagNumInput" class="tagNumInput" maxlength="3"/></div>
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
			<a href="#none" class="tagNumSubmit fadeEff slide-rt e9"><span class="blind">선택완료</span></a>
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
			<div class="bigTagFront slideHover">
				<div class="btfPrice"><span class="btfPriceNum">298</span>번 <br />Tag을 받으셨습니다. <br /><div class="btfPoint">(50포인트 사용)</div></div>
				<div class="hoverHand hoverEff2"><img src="<?=$root?>/skin/images/divpop/big_tag_front_hand.png" alt="클릭" /></div>
			</div>
			<div class="bigTagBack">
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
		</div>
	</div>
	<script type="text/javascript">
		/* celebrationBg s */
		Point = function(x, y) {
			this.x = x || 0;
			this.y = y || 0;
		};

		Particle = function(ctx, p0, p1, p2, p3) {
			this.ctx = ctx;
			this.p0 = p0;
			this.p1 = p1;
			this.p2 = p2;
			this.p3 = p3;

			this.time = 0;
			this.duration = 3 + Math.random() * 1;
			this.color =  '#' + Math.floor((Math.random() * 0xffffff)).toString(16);

			this.w = 8;
			this.h = 6;

			this.complete = false;
		};

		Particle.prototype = {
			update: function() {
				// (1/60) is timeStep
				this.time = Math.min(this.duration, this.time + (1/60));
				var f = Ease.outCubic(this.time, .0125, 1, this.duration);
				var p = cubeBezier(this.p0, this.p1, this.p2, this.p3, f);
				var dx = p.x - this.x;
				var dy = p.y - this.y;
				this.r =  Math.atan2(dy, dx) + (Math.PI * 0.5);
				this.sy = Math.sin(Math.PI * f * 10);
				this.x = p.x;
				this.y = p.y;
				this.complete = this.time === this.duration;
			},
			draw: function() {
				this.ctx.save();
				this.ctx.translate(this.x, this.y);
				this.ctx.rotate(this.r);
				this.ctx.scale(1, this.sy);
				this.ctx.fillStyle = this.color;
				this.ctx.fillRect(-this.w * 0.5, -this.h * 0.5, this.w, this.h);
				this.ctx.restore();
			}
		};
		function CelebrationCanvas(canvas, width, height) {
			var particles = [];
			var ctx = canvas.getContext('2d');

			canvas.width = width;
			canvas.height = height;
			createParticles();
			createParticles2();

			function animate() {
				requestAnimationFrame(loop);
			}
			function createParticles() {
				for (var i = 0; i < 200; i++) {
				var p0 = new Point(0, 0);
				var p1 = new Point(Math.random() * width, Math.random() * height);
				var p2 = new Point(Math.random() * width, Math.random() * height);
				var p3 = new Point(Math.random() * width, height + 64);
				particles.push(new Particle(ctx, p0, p1, p2, p3));
			}
		}
		function createParticles2() {
			for (var i = 0; i < 200; i++) {
				var p0 = new Point(width * 1, 0);
				var p1 = new Point(Math.random() * width, Math.random() * height);
				var p2 = new Point(Math.random() * width, Math.random() * height);
				var p3 = new Point(Math.random() * width, height + 64);
				particles.push(new Particle(ctx, p0, p1, p2, p3));
			}
		}
		function update() {
			particles.forEach(function(p) {
				p.update();
			});
		}
		function draw() {
			ctx.clearRect(0, 0, width, height);
			particles.forEach(function(p) {
				p.draw();
			});
		}
		function loop() {
			update();
			draw();
			if (checkParticlesComplete(true)) {
				// reset
				particles.length = 0;
				createParticles();
				createParticles2();
				setTimeout(function(){
					animate();
				}, 0);
			} else {
				animate();
			}
		}
		function checkParticlesComplete(n) {
			if(n){
				for (var i = 0; i < particles.length; i++) {
				if (particles[i].complete === false) return false;
			}
				//return false;
				return true;
			}else{
				return false;
			}
			
		}
			return {
				animate: animate
			};
		}
		var celebrationCanvas = new CelebrationCanvas(document.getElementById('celebrationCvs'), 1020, 798);
		//celebrationCanvas.animate();

		/**
		 * easing equations from http://gizma.com/easing/
		 * t = current time
		 * b = start value
		 * c = delta value
		 * d = duration
		 */
		var Ease = {
			inCubic: function (t, b, c, d) {
				t /= d;
				return c*t*t*t + b;
			},
			outCubic: function(t, b, c, d) {
				t /= d;
				t--;
				return c*(t*t*t + 1) + b;
			},
			inOutCubic: function(t, b, c, d) {
				t /= d/2;
				if (t < 1) return c/2*t*t*t + b;
				t -= 2;
				return c/2*(t*t*t + 2) + b;
			},
			inBack: function (t, b, c, d, s) {
				s = s || 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			}
		};
		function cubeBezier(p0, c0, c1, p1, t) {
			var p = new Point();
			var nt = (1 - t);
			p.x = nt * nt * nt * p0.x + 3 * nt * nt * t * c0.x + 3 * nt * t * t * c1.x + t * t * t * p1.x;
			p.y = nt * nt * nt * p0.y + 3 * nt * nt * t * c0.y + 3 * nt * t * t * c1.y + t * t * t * p1.y;
			return p;
		}
		/* celebrationBg e */
	</script>
</div>

<div id="tagResultBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<div class="trTagBox trTagBox1 fadeEff slide-rt e2">
			<div class="trSale">97%↓SALE</div>
			<div class="trPrice"><span class="trPriceNum">150</span> 원</div>
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

<div id="cubeSelectBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="csbTitle">이제 <span>극한의 할인</span>이 시작됩니다.!</div>
		<div class="csbSubTitle">아래 5개의 큐브중에서 하나를 선택하세요.</div>
		<div class="csbDesc">각각의 큐브에는 100개의 할인 Tag이 들어있습니다.</div>
		<ul class="cubeBoxWrap">
			<li>
				<a href="#none">
					<div class="cubeItem fadeEff slide-down e3">
						<div class="cubeBox cubeBox1"></div>
						<div class="cubeShadow"></div>
						<div class="cubeChoice">선택</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="cubeItem fadeEff slide-down e5">
						<div class="cubeBox cubeBox2"></div>
						<div class="cubeShadow"></div>
						<div class="cubeChoice">선택</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="cubeItem fadeEff slide-down e7">
						<div class="cubeBox cubeBox3"></div>
						<div class="cubeShadow"></div>
						<div class="cubeChoice">선택</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="cubeItem fadeEff slide-down e8">
						<div class="cubeBox cubeBox4"></div>
						<div class="cubeShadow"></div>
						<div class="cubeChoice">선택</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="cubeItem fadeEff slide-down e9">
						<div class="cubeBox cubeBox5"></div>
						<div class="cubeShadow"></div>
						<div class="cubeChoice">선택</div>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>

<div id="tagSelectBox" class="divPopupBox fadeEff slide-up">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="tsbTitle">Tag 선택</div>
		<div class="tsbSubTitle">제시된 100개의 Tag 중에서 한 개를 선택하세요.</div>
		<ul class="tagBoxWrap">
			<!-- 1~10 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">1</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">2</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">3</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">4</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">5</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">6</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">7</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">8</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">9</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">10</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 11~20 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">11</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">12</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">13</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">14</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">15</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">16</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">17</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">18</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">19</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">20</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 21~30 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">21</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">22</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">23</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">24</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">25</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">26</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">27</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">28</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">9</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">30</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 31~40 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">31</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">32</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">33</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">34</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">35</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">36</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">37</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">38</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">39</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">40</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 41~50 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">41</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">42</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">43</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">44</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">45</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">46</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">47</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">48</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">49</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">50</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 51~60 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">51</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">52</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">53</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">54</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">55</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">56</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">57</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">58</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">59</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">60</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 61~70 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">61</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">62</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">63</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">64</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">65</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">66</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">67</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">68</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">69</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">70</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 71~80 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">71</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">72</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">73</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">74</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">75</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">76</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">77</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">78</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">79</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">80</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 81~90 -->
			<li class="tagItem">
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">81</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">82</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">83</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">84</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">85</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">86</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">87</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">88</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">89</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">90</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 91~100 -->
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt">
						<div class="tagNum">91</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e1">
						<div class="tagNum">92</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e2">
						<div class="tagNum">93</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e3">
						<div class="tagNum">94</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e4">
						<div class="tagNum">95</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e5">
						<div class="tagNum">96</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e6">
						<div class="tagNum">97</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e7">
						<div class="tagNum">98</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e8">
						<div class="tagNum">99</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem fadeEff slide-rt e9">
						<div class="tagNum">100</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>

<div id="tagSelectDoneBox" class="divPopupBox">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="tsbTitle">Tag 선택</div>
		<div class="tsbSubTitle">제시된 100개의 Tag 중에서 한 개를 선택하세요.</div>
		<ul class="tagBoxWrap">
			<!-- 1~10 -->
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating1">
						<div class="tagNum">-99%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
					<div class="checkedTag"></div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-60%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-20%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 11~20 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 21~30 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating1">
						<div class="tagNum">-80%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating1">
						<div class="tagNum">-70%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 31~40 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-60%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-60%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 41~50 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating1">
						<div class="tagNum">-80%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 51~60 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 61~70 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-50%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-50%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 71~80 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating1">
						<div class="tagNum">-80%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 81~90 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-50%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<!-- 91~100 -->
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-30%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-10%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none">
					<div class="tagItem">
						<div class="tagNum">-40%</div>
						<div class="tagImg"></div>
					</div>
				</a>
			</li>
			<li class="checked">
				<a href="#none">
					<div class="tagItem tagItem_Rating2">
						<div class="tagNum">-50%</div>
						<div class="tagImg"></div>
					</div>
					<div class="checkedTag actOn"></div>
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="divPopupBg2"></div>

<div id="tagOpenBox" class="divPopupBox fadeEff slide-down">
	<div class="divPopWrap">
		<a href="#none" class="tagOpenCancel"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="tobTag">
			<div class="tagPhoto"><div class="openTagNum">100</div></div>
			<div class="tagPhotoShadow"></div>
		</div>
		<div class="tobTitle fadeEff slide-rt e2">극한의 할인!</div>
		<div class="tobSubTitle fadeEff slide-rt e3">택 오픈을<br />하시겠습니까?.</div>
		<div class="tobPoint fadeEff slide-rt e5"><span class="pointC1">50</span>포인트가 차감됩니다.</div>
		<div class="pageBtnBox">
			<a href="#none" class="btnS1 blckBtn tagOpenSubmit fadeEff slide-rt e7 btnEff paper paper-raise">OPEN</a>
			<a href="#none" class="btnS1 gryBtn tagOpenCancel fadeEff slide-rt e9 btnEff paper paper-raise">취소</a>
		</div>
	</div>
</div>

<div id="tagOpenResultBox" class="divPopupBox tagRating1 fadeEff slide-down">
	<div class="divPopWrap">
		<div class="torbTitle fadeEff slide-up e1"><span class="stress">축하드립니다!</span> 고객님은 본 상품의 <span class="pointC1">99%할인</span> 을 받으실 수 있습니다.</div>
		<div class="torbPrice fadeEff slide-rt e3">
			<div class="torbRate">99% OFF</div>
			<dl>
				<dt>정가</dt>
				<dd class="cancelLine">495,000원</dd>
				<dt class="tagintagPrice">택인택가</dt>
				<dd class="tagintagPrice">4,520원</dd>
				<dt>할인금액</dt>
				<dd>-490,480원</dd>
			</dl>
		</div>
		<ul class="brownDotLi">
			<li class="fadeEff slide-up e5">
				<span>제가 사용할 상품이므로 주문하겠습니다.</span>
				<a href="order.html" class="roundBtn whiteBtn tagResultBuy">주문</a>
			</li>
			<li class="fadeEff slide-up e6">
				<span>높은 가격을 제시한 구매대기자에게 되팔겠습니다.</span>
				<a href="transfer.html" class="roundBtn whiteBtn tagResultSell">양도</a>
			</li>
			<li class="fadeEff slide-up e7">
				<span>다음 행운을 기대하며 가장 높은 할인율의 Tag을 보관하고 다른 Tag을 오픈하겠습니다.</span>
				<a href="#none" class="roundBtn whiteBtn tagResultMore">한번 더</a>
			</li>
		</ul>
	</div>
</div>

<div id="tagUseBox" class="divPopupBox tagRating1 fadeEff slide-down">
	<div class="divPopWrap">
		<a href="#none" class="closePopBtn"><img src="<?=$root?>/skin/images/common/pop_close.png" alt="닫기" class="closeIcon"/></a>
		<div class="tubTitle fadeEff slide-up e1"><span class="stress">이 Tag를 사용하시겠습니까?</span></div>
		<div class="tubPrice fadeEff slide-rt e2">
			<div class="tubRate">99% OFF</div>
			<dl>
				<dt>정가</dt>
				<dd class="cancelLine">495,000원</dd>
				<dt class="tagintagPrice">택인택가</dt>
				<dd class="tagintagPrice">4,520원</dd>
				<dt>할인금액</dt>
				<dd>-490,480원</dd>
			</dl>
		</div>
		<ul class="brownDotLi">
			<li class="fadeEff slide-up e5">
				<div class="tubDesc"><span class="pointC1">490,480원 할인</span> 받은 가격으로 주문</div>
				<div class="tubDesc2">고객님은 90,400원 할인된 가격으로 본 상품을 주문 하실 수 있습니다.</div>
				<a href="order.html" class="roundBtn whiteBtn tagUseBuy">주문</a>
			</li>
			<li class="fadeEff slide-up e6">
				<div class="tubDesc"><span class="pointC1">369,710원의 수익</span>을 받고 판매</div>
				<div class="tubDesc2">고객님은 이상품을원하는 다른 회원에게 판매하여 <span class="fwB">391,480원의 수익</span>을 얻을 수 있습니다. <a href="#none" class="smBtn">재판매란?</a></div>
				<a href="transfer.html" class="roundBtn whiteBtn tagUswSell">양도</a>
			</li>
		</ul>
		<div class="tubSummary">
			<div class="grid50 fadeEff slide-up e7">대기중인 구매희망자<span class="pointC1"><span class="num">5</span>명</span></div>
			<div class="grid50 fadeEff slide-up e8">고객님이 판매시 얻는 실수익<span class="pointC1"><span class="num">369,710</span>원</span></div>
		</div>
	</div>
</div>