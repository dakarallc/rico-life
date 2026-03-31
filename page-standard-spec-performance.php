<?php
/*
Template Name: 標準仕様 - 住宅性能
*/
?>
<?php get_header(); ?>

<main class="specPerformance">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/performance-kv.jpg" alt="住宅性能">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>
					暮らしの背景を整える<br>
					住まいの性能
				</h2>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>
	<!-- HEAD -->
	<section class="specHead">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Performance
					<span>商品概要</span>
				</h2>
			</div>
			<h1 class="specHead__title">住宅性能</h1>

			<div class="specHead__lead">
				<p>
					サッシや断熱材、玄関ドアなど、<br class="show--sp">
					住まいの快適さを支える性能。
				</p>
				<p>
					暑さや寒さ、外からの音など、<br class="show--sp">
					日々の暮らしに影響する要素に<br class="show--sp">
					向き合いながら、断熱等級6の<br class="show--sp">
					基準を満たす環境を整えています。
				</p>
			</div>

			<!-- ページ内リンク -->
			<nav class="specNav">
				<ul class="specNav__list">
					<li class="specNav__item">
						<a href="#sash" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/icon-sash.png" alt="" class="specNav__icon">
							<span class="specNav__text">高断熱サッシ</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#entrance-door" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/icon-entrance-door.png" alt="" class="specNav__icon">
							<span class="specNav__text">玄関ドア</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#insulation" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/icon-insulation.png" alt="" class="specNav__icon">
							<span class="specNav__text">断熱材</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
				</ul>
				<p class="specNav__note">※ 各項目へページ内ジャンプ or 下スクロールでご覧いただけます</p>
			</nav>
		</div>
	</section>

	<!-- Sash -->
	<section id="sash" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Sash</h2>
				<p class="specDetail__subtitle">高断熱サッシ [LIXIL TWサッシ/トリプルガラス]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/sash1.jpg" alt="高断熱サッシ">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						季節の変化に配慮した<br>
						窓まわりの性能
					</h3>
					<p class="specDetail__desc">
						窓ひとつで、暮らしは変わります。外の暑さ寒さをしっかり遮り、室内の心地よさを、静かに守る為、トリプルガラス構造を採用しております。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/sash2.jpg" alt="高性能トリプルガラス">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">高性能トリプルガラス</h4>
						<p class="specFeature__text">3枚のガラスを組み合わせた構造により、外気の熱や冷気を室内に伝えにくくします。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/sash3.jpg" alt="Low-Eガラス">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">Low-Eガラス</h4>
						<p class="specFeature__text">特殊金属膜をコーティングしたガラスで、日射熱や室内の暖気の流出を抑えます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/sash4.jpg" alt="アルゴンガス封入">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">アルゴンガス封入</h4>
						<p class="specFeature__text">ガラスの間にアルゴンガスを封入することで、空気よりも熱を伝えにくい層を形成します。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/sash5.jpg" alt="耐風・水密性能">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">耐風・水密性能</h4>
						<p class="specFeature__text">室外側に強度の高いアルミを採用し、国内最高水準の耐風圧・水密性能を備えています。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Entrance door -->
	<section id="entrance-door" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Entrance door</h2>
				<p class="specDetail__subtitle">玄関ドア [LIXIL ジエスタ2]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/entrance-door1.jpg" alt="玄関ドア">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						快適と安心を支える<br>
						玄関ドア
					</h3>
					<p class="specDetail__desc">
						毎日の「いってきます」と「ただいま」を支える玄関ドアだからこそ、扉そのものに、もっと心地よさと安心を兼ね備えた、ジエスタ2×FamiLockを採用しています。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/entrance-door2.jpg" alt="スマート解錠">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">スマート解錠</h4>
						<p class="specFeature__text">スマートフォンやタグキーで、ボタン操作による施解錠が可能です。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/entrance-door3.jpg" alt="アプリ連携">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">アプリ連携</h4>
						<p class="specFeature__text">施解錠履歴の確認や、合鍵の共有や削除が可能。家族の鍵管理が行えます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/entrance-door4.jpg" alt="断熱仕様〈K4〉">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">断熱仕様〈K4〉</h4>
						<p class="specFeature__text">外気の影響を抑える構造で、玄関まわりの快適性を保ちます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/entrance-door5.jpg" alt="豊富なカラー展開">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">豊富なカラー展開</h4>
						<p class="specFeature__text">木目・メタリックなど、住まいのスタイルに合わせて選べる、豊富なカラーをラインアップ。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Insulation -->
	<section id="insulation" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Insulation</h2>
				<p class="specDetail__subtitle">断熱材 [発泡ウレタン]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/insulation1.jpg" alt="断熱材">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						住まい全体を包み込む<br>
						断熱構成
					</h3>
					<p class="specDetail__desc">
						断熱性能の決め手は気密性と充填性です。吹付け断熱のMOCOフォームは、隅々までしっかり充填して高い気密効果を発揮します。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/insulation2.jpg" alt="優れた断熱性能">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">優れた断熱性能</h4>
						<p class="specFeature__text">100倍に発泡するミクロの泡が優れた断熱性を発揮します。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/insulation3.jpg" alt="すき間を埋める施工性">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">すき間を埋める施工性</h4>
						<p class="specFeature__text">吹付けた瞬間に僅かなすき間も埋めるので、断熱欠損がほとんどありません。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/performance/insulation4.jpg" alt="長く保つ密着性能">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">長く保つ密着性能</h4>
						<p class="specFeature__text">躯体と自己接着するので、ズレや脱落を防ぎます。長期的に性能を維持します。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- toTopButton -->
	<?php get_template_part("template-parts/toTopButton"); ?>

	<!-- finalMessage -->
	<?php get_template_part("template-parts/message"); ?>

	<!-- PRODUCTS -->
	<?php get_template_part("template-parts/specProductArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


<?php get_footer(); ?>
