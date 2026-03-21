<?php
/*
Template Name: ソーラー&蓄電池

*/
?>
<?php get_header(); ?>

<main class="storageBattery">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/storage-battery/kv.png" alt="ソーラー＆蓄電池 標準装備">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h1>
					電気代は削減できる<br>
					固定費です。
				</h1>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>

	<!-- HEAD -->
	<section class="specHead">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">PRODUCTS
					<span>商品概要</span>
				</h2>
			</div>
			<h3 class="specHead__title">ソーラー＆蓄電池</h3>

			<div class="costCompare">
				<div class="costCompare__item costCompare__item--before">
					<p class="costCompare__number">1523<small>万円</small></p>
					<p class="costCompare__label">電気代は40年で<br>※15,230,000円支払う<br>可能性があります。</p>
				</div>
				<div class="costCompare__arrow">
					<span></span>
				</div>
				<div class="costCompare__item costCompare__item--after">
					<p class="costCompare__number">113<small>万円</small></p>
					<p class="costCompare__label">ソーラー＆蓄電池が<br>標準装備のRico Life.は<br>僅か<span class="highlight-yellow">※1,113,000円に</span><br>することが出来ます。</p>
				</div>
			</div>

			<p class="specHead__note">
				※内容を保証するものでは有りません。<br>
				一定条件下で高性能な太陽光と蓄電池を搭載し<br class="show--sp">
				比較したシミュレーションです。
			</p>
		</div>
	</section>

	<!-- Solar -->
	<section class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Solar</h2>
				<p class="specDetail__subtitle">
					<span class="badge">標準装備</span>
					太陽光発電 - 創エネルギーシステム
				</p>
			</div>

			<div class="specDetail__mainImg">
				<img src="<?php echo rico_theme_url(); ?>/assets/img/storage-battery/solerPanel.png" alt="LONGi ソーラーパネル N型バックコンタクトモジュール">
			</div>

			<div class="specDetail__brand">
				<h3 class="specDetail__brandText">LONGi</h3>
				<p class="specDetail__brandName">N型バックコンタクトモジュール</p>
			</div>

			<div class="productDetail__warranties">
				<div class="productDetail__warranty">
					<div class="productDetail__warrantyBadge">
						<span class="productDetail__warrantyLabel">製品保証</span>
						<span class="productDetail__warrantyYears">30<small>年</small></span>
					</div>
				</div>
				<div class="productDetail__warranty">
					<div class="productDetail__warrantyBadge productDetail__warrantyBadge--quality">
						<span class="productDetail__warrantyLabel">品質保証</span>
						<span class="productDetail__warrantyYears">30<small>年</small></span>
					</div>
				</div>
			</div>

			<div class="specDetail__description">
				<h3 class="specDetail__catch">
					世界を牽引する<br>
					太陽光発電企業が手がけた、<br>
					30年保証付きの
				</h3>
				<p class="specDetail__desc">
					<span class="highlight-yellow">最高峰・次世代ソーラーパネル。</span>
				</p>
			</div>
		</div>
	</section>

	<!-- Battery -->
	<section class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Battery</h2>
				<p class="specDetail__subtitle">
					<span class="badge">標準装備</span>
					太陽光発電 - 創エネルギーシステム
				</p>
			</div>

			<div class="specDetail__images specDetail__images--single">
				<div class="specDetail__imageItem">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/storage-battery/tesla.png" alt="Tesla Powerwall 家庭用蓄電池">
				</div>
			</div>

			<div class="specDetail__brand">
				<h3 class="specDetail__brandText">TESLA</h3>
				<p class="specDetail__brandSub">POWERWALL</p>
			</div>

			<div class="productDetail__warranties productDetail__warranties--single">
				<div class="productDetail__warranty">
					<div class="productDetail__warrantyBadge productDetail__warrantyBadge--quality">
						<span class="productDetail__warrantyLabel">製品保証</span>
						<span class="productDetail__warrantyYears">10<small>年</small></span>
					</div>
				</div>
			</div>

			<div class="specDetail__description">
				<h3 class="specDetail__catch">
					世界をリードする、
				</h3>
				<p class="specDetail__desc">
					<span class="highlight-yellow">電気自動車のTESLAが開発。</span><br>
					次世代の暮らしを支える、<br>
					家庭用蓄電システム。
				</p>
			</div>
		</div>
	</section>

	<!-- Energy -->
	<section class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Energy</h2>
				<p class="specDetail__subtitle">エネルギーが未来を創る</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/storage-battery/energyBg.png" alt="エネルギー効率の高い住まい">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						電気代は<br>
						削減できる<br>
						固定費です。
					</h3>
				</div>
			</div>

			<div class="specDetail__blocks">
				<p>
					未来に優しい、光熱費削減の家。<br class="show--sp">
					毎年上がり続ける電気代。<br class="show--sp">
					実は、<span class="highlight-yellow">過去12年間で電気代は1.56倍</span>に<br class="show--sp">
					上昇しています。
				</p>
				<p>
					さらに、今後もその上昇は続くと予測<br class="show--sp">
					されています。その場合、<br class="show--sp">
					月々の電気代は、<span class="highlight-yellow">40年累計で1523万円支払う</span>可能性が<br class="show--sp">
					あります。
				</p>
				<p>
					しかし、<br class="show--sp">
					太陽光発電と蓄電池を搭載すれば、<br class="show--sp">
					初期費用やメンテナンスを含めても、<br class="show--sp">
					累計で<span class="highlight-yellow">わずか668万円</span>で済みます。
				</p>
				<p>
					これだけで、<span class="highlight-yellow">最大855万円</span>の差が生まれ、<br class="show--sp">
					長期的に見て家計の負担が<br class="show--sp">
					軽くなっていきます。
				</p>
				<p>
					太陽光発電と蓄電池は、<br class="show--sp">
					<span class="highlight-yellow">ただのエコ設備ではありません。</span><br class="show--sp">
					これからの時代に必須となる、<br class="show--sp">
					経済的にも環境的にも、<br class="show--sp">
					賢い選択です。
				</p>
			</div>
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
