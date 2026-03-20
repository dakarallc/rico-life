<?php
/*
Template Name: 間取り

*/
?>
<?php get_header(); ?>

<div class="planOfHouse">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/kv.png" alt="">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>自由設計も、
					<br>規格設計も。
					<br>あなたの理想に合わせて、
					<br>選択可能です。
				</h2>
			</div>
		</div>
		
	</section>


	<!-- PRODUCTS	 -->
	<section class="products">
		<div class="inner products__inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">PRODUCTS
					<span>商品概要</span>
				</h2>
			</div>

			<div class="catch">
				<h3 >
					新しいカタチの<br class="show--sp">規格プラン方式
				</h3>
			</div>

			<div class="products__img">
				<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/products.png" alt="新しいカタチの規格プラン方式">
			</div>
			<div class="products__text">
				<p>
					Rico Life.は<br class="show--sp">
					弊社規格プランに加え、<br>
					<span class="highlight-yellow">お客様が見つけたプランも</span><br>基準を満たせば、<span class="highlight-yellow">規格プラン価格として建築可能。</span><br>
					効率的で安心の家づくりを実現します。
				</p>
			</div>
		</div>
	</section>

	<!-- Standard plan	 -->
	<section class="standardPlan">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Standard plan
					<span>コンセプト規格設計 例</span>
				</h2>
			</div>

			<div class="catch">
				<h3>
					価格を抑え、<br class="show--sp">
					最もコスパよく<br class="show--sp">
					注文住宅を建てる。
				</h3>
			</div>

			<!-- Tab Navigation -->
			<div class="planTabs">
				<div class="planTabs__nav">
					<button class="planTabs__btn active" data-tab="standard-2story">2階建て</button>
					<button class="planTabs__btn" data-tab="standard-hiraya">平屋</button>
				</div>

				<!-- 2階建て Content -->
				<div class="planTabs__content active" id="standard-2story">
					<div class="planTabs__subNav">
						<button class="planTabs__subBtn active" data-subtab="standard-2story-28">28坪</button>
						<button class="planTabs__subBtn" data-subtab="standard-2story-32">32坪</button>
						<button class="planTabs__subBtn" data-subtab="standard-2story-35">35坪</button>
					</div>

					<div class="planTabs__subContent active" id="standard-2story-28">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-2story-28.jpg" alt="2階建て 28坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-2story-28.jpg" alt="間取り図 2階建て 28坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">1,650<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">65,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-18,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">47,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="standard-2story-32">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-2story-32.jpg" alt="2階建て 32坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-2story-32.jpg" alt="間取り図 2階建て 32坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">1,850<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">72,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-20,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">52,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="standard-2story-35">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-2story-35.jpg" alt="2階建て 35坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-2story-35.jpg" alt="間取り図 2階建て 35坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,050<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">79,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-22,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">57,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- 平屋 Content -->
				<div class="planTabs__content" id="standard-hiraya">
					<div class="planTabs__subNav">
						<button class="planTabs__subBtn active" data-subtab="standard-hiraya-28">28坪</button>
						<button class="planTabs__subBtn" data-subtab="standard-hiraya-32">32坪</button>
						<button class="planTabs__subBtn" data-subtab="standard-hiraya-35">35坪</button>
					</div>

					<div class="planTabs__subContent active" id="standard-hiraya-28">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-hiraya-28.jpg" alt="平屋 28坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-hiraya-28.jpg" alt="間取り図 平屋 28坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">1,750<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">68,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-18,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">50,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="standard-hiraya-32">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-hiraya-32.jpg" alt="平屋 32坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-hiraya-32.jpg" alt="間取り図 平屋 32坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">1,950<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">75,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-20,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">55,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="standard-hiraya-35">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/standard-hiraya-35.jpg" alt="平屋 35坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/floorplan-hiraya-35.jpg" alt="間取り図 平屋 35坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,150<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">82,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-22,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">60,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Free plan	 -->
	<section class="freePlan">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Free plan
					<span>自由設計 実例</span>
				</h2>
			</div>

			<div class="catch">
				<h3>
					注文住宅の<br class="show--sp">
					夢を詰め込んだ<br class="show--sp">
					オンリーワン住宅。
				</h3>
			</div>

			<!-- Tab Navigation -->
			<div class="planTabs">
				<div class="planTabs__nav">
					<button class="planTabs__btn active" data-tab="free-2story">2階建て</button>
					<button class="planTabs__btn" data-tab="free-hiraya">平屋</button>
				</div>

				<!-- 2階建て Content -->
				<div class="planTabs__content active" id="free-2story">
					<div class="planTabs__subNav">
						<button class="planTabs__subBtn active" data-subtab="free-2story-28">28坪</button>
						<button class="planTabs__subBtn" data-subtab="free-2story-32">32坪</button>
						<button class="planTabs__subBtn" data-subtab="free-2story-35">35坪</button>
					</div>

					<div class="planTabs__subContent active" id="free-2story-28">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-2story-28.jpg" alt="自由設計 2階建て 28坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-2story-28.jpg" alt="間取り図 自由設計 2階建て 28坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,100<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">82,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-18,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">64,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="free-2story-32">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-2story-32.jpg" alt="自由設計 2階建て 32坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-2story-32.jpg" alt="間取り図 自由設計 2階建て 32坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,400<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">93,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-20,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">73,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="free-2story-35">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-2story-35.jpg" alt="自由設計 2階建て 35坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-2story-35.jpg" alt="間取り図 自由設計 2階建て 35坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,700<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">105,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-22,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">83,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- 平屋 Content -->
				<div class="planTabs__content" id="free-hiraya">
					<div class="planTabs__subNav">
						<button class="planTabs__subBtn active" data-subtab="free-hiraya-28">28坪</button>
						<button class="planTabs__subBtn" data-subtab="free-hiraya-32">32坪</button>
						<button class="planTabs__subBtn" data-subtab="free-hiraya-35">35坪</button>
					</div>

					<div class="planTabs__subContent active" id="free-hiraya-28">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-hiraya-28.jpg" alt="自由設計 平屋 28坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-hiraya-28.jpg" alt="間取り図 自由設計 平屋 28坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,200<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">86,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-18,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">68,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="free-hiraya-32">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-hiraya-32.jpg" alt="自由設計 平屋 32坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-hiraya-32.jpg" alt="間取り図 自由設計 平屋 32坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,500<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">98,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-20,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">78,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="planTabs__subContent" id="free-hiraya-35">
						<div class="planItem">
							<div class="planItem__image">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-hiraya-35.jpg" alt="自由設計 平屋 35坪">
							</div>
							<div class="planItem__floorplan">
								<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/free-floorplan-hiraya-35.jpg" alt="間取り図 自由設計 平屋 35坪">
							</div>
							<div class="planItem__price">
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">本体価格 約</span>
									<span class="planItem__priceValue">2,800<span class="planItem__priceUnit">万円</span></span>
								</div>
								<div class="planItem__priceItem">
									<span class="planItem__priceLabel">月々返済 約</span>
									<span class="planItem__priceValue">109,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--highlight">
									<span class="planItem__priceLabel">経済効果 約</span>
									<span class="planItem__priceValue planItem__priceValue--red">-22,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
								<div class="planItem__priceItem planItem__priceItem--final">
									<span class="planItem__priceLabel">実質支払 約</span>
									<span class="planItem__priceValue planItem__priceValue--green">87,000<span class="planItem__priceUnit">円/月</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Free plan	 -->
	<section class="why conceptSection">
		<img src="<?php echo rico_theme_url(); ?>/assets/img/top/concept.png" alt="テーブルの写真">
		<div class="inner conceptSection__inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Plan
					<span>規格設計と自由設計の価格の違い</span>
				</h2>
			</div>
			
			<div class="catch">
				<h3>
					規格設計と<br class="show--sp">
					自由設計の<br class="show--sp">
					コストの仕組み。
				</h3>
			</div>
			
			<div>
				<div class="conceptSection__block">
					未来に優しい、<br class="show--sp">
					光熱費削減の家。
					毎年上がり続ける電気代。<br class="show--sp">
					実は、<span class="highlight-yellow">過去12年間で電気代は1.56倍</span>に上昇しています。
				</div>
				<div class="conceptSection__block">
					さらに、今後もその上昇は<br class="show--sp">
					続くと予測されています。
					その場合、月々の電気代は、<span class="highlight-yellow">40年累計で1523万円支払う</span>可能性があります。
				</div>
				<div class="conceptSection__block">
					しかし、<br class="show--sp">
					太陽光発電と蓄電池を搭載すれば、
					初期費用やメンテナンスを含めても、
					累計で<span class="highlight-yellow">わずか683万円</span>で済みます。
				</div>
				<div class="conceptSection__block">
					これだけで、<span class="highlight-yellow">最大840万円</span>の差が生まれ、
					長期的に見て家計の負担が
					軽くなっていきます。
				</div>
				<div class="conceptSection__block">
					太陽光発電と蓄電池は、<br class="show--sp">
					ただのエコ設備ではありません。<br>
					これからの時代に必須となる、<br class="show--sp">
					経済的にも環境的にも、<br class="show--sp">
					賢い選択です。
				</div>
			</div>
		</div>
	</section>

	<!-- finalMessage -->
	<?php get_template_part("template-parts/toTopButton"); ?>


	<!-- finalMessage -->
	<?php get_template_part("template-parts/message"); ?>

	<!-- PRODUCTS -->
	<?php get_template_part("template-parts/productArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


<?php get_footer(); ?>
