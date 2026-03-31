<?php
/*
Template Name: 標準仕様 - 建物構造
*/
?>
<?php get_header(); ?>

<main class="specStructure">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/structure-kv.jpg" alt="建物構造">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>
					住まいの安心を支える<br>
					建物構造
				</h2>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>
	<!-- HEAD -->
	<section class="specHead">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Structure
					<span>商品概要</span>
				</h2>
			</div>
			<h1 class="specHead__title">建物構造・耐久性能</h1>

			<div class="specHead__lead">
				<p>
					普段は見えない部分ですが、<br class="show--sp">
					建物の構造や外装は住まいの<br class="show--sp">
					安全性や耐久性を支える重要な要素です。
				</p>
				<p>
					基礎や構造材、外壁など、<br class="show--sp">
					住まいを内側と外側から支える<br class="show--sp">
					仕組みについてご紹介します。
				</p>
			</div>

			<!-- ページ内リンク -->
			<nav class="specNav">
				<ul class="specNav__list">
					<li class="specNav__item">
						<a href="#structural-panel" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/icon-structural-panel.png" alt="" class="specNav__icon">
							<span class="specNav__text">構造用耐力面材</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#seismic" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/icon-seismic.png" alt="" class="specNav__icon">
							<span class="specNav__text">耐震等級3</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#foundation" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/icon-foundation.png" alt="" class="specNav__icon">
							<span class="specNav__text">基礎構造</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#jointsystem" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/icon-jointsystem.png" alt="" class="specNav__icon">
							<span class="specNav__text">接合工法</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#exterior-wall" class="specNav__link">
							<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/icon-exterior-wall.png" alt="" class="specNav__icon">
							<span class="specNav__text">外壁</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
				</ul>
				<p class="specNav__note">※ 各項目へページ内ジャンプ or 下スクロールでご覧いただけます</p>
			</nav>
		</div>
	</section>

	<!-- Structural panel -->
	<section id="structural-panel" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Structural panel</h2>
				<p class="specDetail__subtitle">構造用耐力面材 [ノボパン]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/structural-panel1.jpg" alt="構造用耐力面材">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						建物の強さを支える<br>
						構造面材
					</h3>
					<p class="specDetail__desc">
						建物の壁内部に使用される耐力面材は、住まいの強度に関わる重要な構造要素。ノボパンを採用することで、柱や梁だけでなく、面全体で力を受け止め、耐震性を高めます。構造強度と施工性を兼ね備えた、安心を支える下地材です。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Seismic grade -->
	<section id="seismic" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Seismic grade</h2>
				<p class="specDetail__subtitle">耐震等級3</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/seismic1.jpg" alt="耐震等級3">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						建物の安全性を支える<br>
						耐震性能
					</h3>
					<p class="specDetail__desc">
						耐震等級3は、住宅性能表示制度における最高等級の耐震性能。消防署や警察署などの防災拠点と同等レベルの耐震性能が基準とされています。万が一の大地震にも備える、安心の指標です。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Foundation -->
	<section id="foundation" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Foundation</h2>
				<p class="specDetail__subtitle">基礎構造 [ベタ基礎]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/foundation1.jpg" alt="ベタ基礎">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						建物を足元から支える<br>
						基礎
					</h3>
					<p class="specDetail__desc">
						基礎は建物の荷重を地盤へ伝える重要な構造部分。ベタ基礎は、建物の底面全体を鉄筋コンクリートで覆い、建物を面で支える基礎構造です。荷重を地盤に均等に伝えることで、不同沈下のリスクを抑えます。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Jointsystem -->
	<section id="jointsystem" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Jointsystem</h2>
				<p class="specDetail__subtitle">接合工法 [ピン工法]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/jointsystem1.jpg" alt="接合工法">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						構造強度を高める<br>
						接合工法
					</h3>
					<p class="specDetail__desc">
						柱や梁の接合部には、仕口加工に頼らず、専用の金物で緊結するピン工法を採用。木材の断面欠損を抑えながら、安定した構造強度を確保し、施工精度のばらつきを軽減します。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Exterior Wall -->
	<section id="exterior-wall" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Exterior Wall</h2>
				<p class="specDetail__subtitle">外壁 [Fuge プラチナコート30]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/exterior-wall1.jpg" alt="外壁">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						長く美しさを保つ<br>
						外壁
					</h3>
					<p class="specDetail__desc">
						外壁は、雨や紫外線などの外部環境から住まいを守る大切な部分。高耐候塗膜を備えたFuge プラチナコート30を採用し、耐久性と美しい外観を長く保ちます。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/exterior-wall2.jpg" alt="美しさが長く続く外壁">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">美しさが長く続く外壁</h4>
						<p class="specFeature__text">紫外線や風雨による色あせを抑え、外観の美しさを長く保ちます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/exterior-wall3.jpg" alt="お手入れしやすい外壁">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">お手入れしやすい外壁</h4>
						<p class="specFeature__text">雨で汚れを流しやすい構造で、日々のメンテナンス負担を軽減します。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/standard-spec/structure/exterior-wall4.jpg" alt="すっきりとした外観デザイン">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">すっきりとした外観デザイン</h4>
						<p class="specFeature__text">シーリングレス構造により、継ぎ目が目立ちにくく、すっきりとした外観に仕上がります。</p>
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
