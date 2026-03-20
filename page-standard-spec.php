<?php
/*
Template Name: 標準仕様
*/
?>
<?php get_header(); ?>

<div class="standardSpec">
	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/kv.jpg" alt="標準仕様">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>
					設備も性能も、<br>
					毎日の暮らしを<br>
					想定して選ばれています。
				</h2>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>
	<!-- PAGE TITLE -->
	<section class="specHead">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">PRODUCTS
					<span>商品概要</span>
				</h2>
			</div>
			<h1 class="specHead__title">標準仕様</h1>
		</div>
	</section>

	<!-- INTRO -->
	<section class="specIntro">
		<div class="inner specIntro__inner">
			<h2 class="specIntro__catch">
				標準仕様から<br>
				快適で長く愛せる住まいへ
			</h2>

			<div class="specIntro__imgWrap">
				<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/intro.png" alt="標準仕様">
			</div>

			<div class="specIntro__text">
				<p>
					Rico Life. では毎日の暮らしに
					欠かせない設備や空間の標準
					仕様にこだわりを持って選定して
					います。
				</p>
				<p>
					必要以上にオプションを追加し
					なくても、"標準のままで十分に
					満足できる家" を届けたい。
				</p>
				<p>
					これが Rico Life. が大切にする、
					住まいづくりのスタンダードです。
				</p>
			</div>
		</div>
	</section>

	<!-- CATEGORY LINKS -->
	<section class="specCategory">
		<div class="inner specCategory__inner">
			<div class="specCategory__list">
				<!-- Equipment -->
				<div class="specCategory__item">
					<div class="ttlWrap">
						<h3 class="section-ttl">Equipment
							<span>住宅設備</span>
						</h3>
					</div>
					<div class="specCategory__body">
						<div class="specCategory__imgWrap">
							<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/equipment.jpg" alt="住宅設備">
						</div>
						<div class="specCategory__content">
							<p class="specCategory__desc">
								キッチン・お風呂・洗面台など
								水まわりの内容を紹介します。<br>
								毎日の使い勝手や、機能を
								確認できます。
							</p>
							<div class="btnWrap">
								<a href="<?php echo esc_url(home_url("/standard-spec/home-appliances")); ?>" class="primaryBtn">詳細を見る</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Performance -->
				<div class="specCategory__item">
					<div class="ttlWrap">
						<h3 class="section-ttl">Performance
							<span>住宅性能</span>
						</h3>
					</div>
					<div class="specCategory__body">
						<div class="specCategory__imgWrap">
							<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/performance.jpg" alt="住宅性能">
						</div>
						<div class="specCategory__content">
							<p class="specCategory__desc">
								サッシや断熱材、玄関ドアなど、
								住まいの性能をご紹介します。<br>
								室内環境への具体的な効果や
								機能がわかります。
							</p>
							<div class="btnWrap">
								<a href="<?php echo esc_url(home_url("/standard-spec/performance")); ?>" class="primaryBtn">詳細を見る</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Interior -->
				<div class="specCategory__item">
					<div class="ttlWrap">
						<h3 class="section-ttl">Interior
							<span>内装建材</span>
						</h3>
					</div>
					<div class="specCategory__body">
						<div class="specCategory__imgWrap">
							<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/interior.jpg" alt="内装建材">
						</div>
						<div class="specCategory__content">
							<p class="specCategory__desc">
								ドアや床材など、内装に使われる
								建材を紹介します。<br>
								詳細の仕様や、カラーリングを
								確認することができます。
							</p>
							<div class="btnWrap">
								<a href="<?php echo esc_url(home_url("/standard-spec/interior")); ?>" class="primaryBtn">詳細を見る</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Structure -->
				<div class="specCategory__item">
					<div class="ttlWrap">
						<h3 class="section-ttl">Structure
							<span>建物構造</span>
						</h3>
					</div>
					<div class="specCategory__body">
						<div class="specCategory__imgWrap">
							<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/structure.jpg" alt="建物構造">
						</div>
						<div class="specCategory__content">
							<p class="specCategory__desc">
								耐震等級など、建物構造の
								重要項目を紹介します。<br>
								ベタ基礎を含めた、住まいを
								支える基本性能が見られます。
							</p>
							<div class="btnWrap">
								<a href="<?php echo esc_url(home_url("/standard-spec/structure")); ?>" class="primaryBtn">詳細を見る</a>
							</div>
						</div>
					</div>
				</div>

				<!-- SolarEnergy -->
				<div class="specCategory__item">
					<div class="ttlWrap">
						<h3 class="section-ttl">SolarEnergy
							<span>ソーラー＆蓄電池</span>
						</h3>
					</div>
					<div class="specCategory__body">
						<div class="specCategory__imgWrap">
							<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/solar-energy.jpg" alt="ソーラー＆蓄電池">
						</div>
						<div class="specCategory__content">
							<p class="specCategory__desc">
								ソーラーや蓄電池の機能を
								エネルギーの視点から紹介します。<br>
								電気代への影響や災害時の備えを、
								具体的な内容で確認できます。
							</p>
							<div class="btnWrap">
								<a href="<?php echo esc_url(home_url("/storage-battery")); ?>" class="primaryBtn">詳細を見る</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- toTopButton -->
	<?php get_template_part("template-parts/toTopButton"); ?>

	<!-- finalMessage -->
	<?php get_template_part("template-parts/message"); ?>

	<!-- PRODUCTS -->
	<?php get_template_part("template-parts/productArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


<?php get_footer(); ?>
