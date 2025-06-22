<?php
/*
Template Name: 間取り

*/
?>
<?php get_header(); ?>

<div class="planOfHouse">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/plan-of-house/kv.png" alt="">
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

	<!-- Standard plan -->
	<section class="message">
		<div class="inner message__inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Standard plan
					<span>コンセプト規格設計 例</span>
				</h2>
			</div>
		</div>
	</section>

	<!-- Free plan	 -->
	<section class="message">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Free plan
					<span>自由設計 実例</span>
				</h2>
			</div>
		</div>
	</section>

	<!-- Free plan	 -->
	<section class="why conceptSection">
		<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/top/concept.png" alt="テーブルの写真">
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
	<?php get_template_part("template-parts/message"); ?>

	<!-- PRODUCTS -->
	<?php get_template_part("template-parts/productArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


<?php get_footer(); ?>
