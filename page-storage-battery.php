<?php
/*
Template Name: ソーラー&蓄電池

*/
?>
<?php get_header(); ?>

<div class="storageBattery">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/storage-battery/kv.png" alt="">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>
					電気代は、削減できる<br>
					固定費です。
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
				<img src="<?php echo do_shortcode(
    	"[theme_url]",
    ); ?>/assets/img/plan-of-house/products.png" alt="新しいカタチの規格プラン方式">
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

	<!-- Free plan	 -->
	<section class="why conceptSection">
		<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/top/concept.png" alt="テーブルの写真">
		<div class="inner conceptSection__inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Energy
					<span>エネルギーが未来を創る</span>
				</h2>
			</div>
			
			<div class="catch">
				<h3>
					電気代は<br class="show--sp">
					削減できる<br class="show--sp">
					固定費です。
				</h3>
			</div>
			
			<div>
				<div class="conceptSection__block">
					未来に優しい、<br class="show--sp">
					光熱費削減の家。<br class="show--sp">
					毎年上がり続ける電気代。<br class="show--sp">
					実は、<span class="highlight-yellow">過去12年間で電気代は1.56倍</span>に<br class="show--sp">
					上昇しています。
				</div>
				<div class="conceptSection__block">
					さらに、今後もその上昇は続くと予測<br class="show--sp">
					されています。その場合、<br class="show--sp">
					月々の電気代は、<span class="highlight-yellow">40年累計で1523万円支払う</span>可能性が<br class="show--sp">
					あります。
				</div>
				<div class="conceptSection__block">
					しかし、<br class="show--sp">
					太陽光発電と蓄電池を搭載すれば、<br class="show--sp">
					初期費用やメンテナンスを含めても、<br class="show--sp">
					累計で<span class="highlight-yellow">わずか668万円</span>で済みます。
				</div>
				<div class="conceptSection__block">
					これだけで、<span class="highlight-yellow">最大855万円</span>の差が生まれ、<br class="show--sp">
					長期的に見て家計の負担が<br class="show--sp">
					軽くなっていきます。
				</div>
				<div class="conceptSection__block">
					太陽光発電と蓄電池は、<br class="show--sp">
					ただのエコ設備ではありません。<br class="show--sp">
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
