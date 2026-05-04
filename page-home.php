<?php
/*
Template Name: TOP
*/
?>
<?php get_header(); ?>

<main class="top">

	<!-- fv -->
	<section class="fv">
		<div class="swiper fvSwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<picture>
						<source srcset="<?php echo rico_theme_url(); ?>/assets/img/top/kv1.webp" type="image/webp">
						<img class="fv__img1" src="<?php echo rico_theme_url(); ?>/assets/img/top/kv1.png" alt="住むほどに、賢く、豊かになる住まい" fetchpriority="high">
					</picture>
					<div class="fv__ttl-wrap">
						<div class="fv__ttl">
							<h2>住むほどに、賢く、<br>豊かになる住まい</h2>
							<p class="fv__ttl-en">A home that grows wiser and richer with time.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?php echo rico_theme_url(); ?>/assets/img/top/kv2.webp" type="image/webp">
						<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/top/kv2.png" alt="太陽光・蓄電池・断熱等級6が標準">
					</picture>
					<div class="fv__ttl-wrap">
						<div class="fv__ttl">
							<h2>太陽光・蓄電池・<br>断熱等級6が「標準」</h2>
							<p class="fv__ttl-en">Solar power, battery storage,<br>and Grade 6 insulation - all standard.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<picture>
						<source srcset="<?php echo rico_theme_url(); ?>/assets/img/top/kv3.webp" type="image/webp">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/top/kv3.png" alt="高性能な家を、手の届く価格で">
					</picture>
					<div class="fv__ttl-wrap">
						<div class="fv__ttl">
							<h2>高性能な家を、<br>手の届く価格で</h2>
							<p class="fv__ttl-en">High-performance homes, within reach.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>

	<!-- about	 -->
	<section class="about">
		<div class="about__logo">
			<img src="<?php echo rico_theme_url(); ?>/assets/img/common/logo-black.svg" alt="ロゴ">
		</div>
		<p>コスパで創造する、<br class="show--sp">40年間の居住費が<br class="show--sp">いちばん安い家。</p>
		<div class="about__decoration">
			<img src="<?php echo rico_theme_url(); ?>/assets/img/top/round-decoration.svg" alt="">
		</div>
	</section>

	<!-- CONCEPT	 -->
	<section class="concept">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">CONCEPT
					<span>コンセプト</span>
				</h2>
			</div>
			<div class="concept__inner">
				<div class="concept__img">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/top/concept.png" alt="注文住宅のリビング空間">
				</div>
				<div class="concept__content">
					<div class="concept__text">
						<h3 class="concept__catch">コスパで創る、豊かな暮らし。</h3>
						<p>住宅購入は<br>『買う費用』より『住む費用』が大切。</p>
						<p>Rico Life.は、<br>
							太陽光＆蓄電池＋高耐久素材が標準。<br>
							光熱費・保険・メンテナンスを削減。<br>
							<span class="highlight-yellow">40年間で最も出費が少ない家。</span><br>
							ムリせず、賢く。未来に安心を。
						</p>
					</div>
				</div>
			</div>
			<div class="btnWrap">
				<a href="<?php echo rico_home_url(); ?>concept" class="primaryBtn">初めての方はこちら</a>
			</div>
		</div>
	</section>

	<!-- movie	 -->
	<section class="movie">
		<div class="inner">
			<p>まずは動画をご覧ください！</p>

			<div class="movie__inner">
				<iframe width="100%" src="https://www.youtube.com/embed/x3vwHpVTqHo?si=GwlJZYqfgZMVRc5z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<p>Rico Life. のすべてを３分解説します！</p>
		</div>
	</section>

	<!-- WORKS -->
	<section class="case">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">WORKS
					<span>施工事例</span>
				</h2>
			</div>

			<?php
   $perPage = 10;
   $paged = get_query_var("paged");
   $args = [
   	"posts_per_page" => $perPage,
   	"post_type" => "case",
   	"paged" => $paged,
   	"orderby" => ["meta_value" => "DESC", "date" => "DESC"],
   	"meta_key" => "case-isHot",
   ];
   $my_query = new WP_Query($args);
   if ($my_query->have_posts()): ?>
			<div class="swiper mySwiper">
				<ul class="swiper-wrapper">
					<?php while ($my_query->have_posts()):

     	$my_query->the_post();
     	$name = get_the_title();
     	$cat = get_field("case-cat")->name;
     	$img_id1 = get_field("pic1");
     	$img_url1 = wp_get_attachment_image_src($img_id1, "large")[0];
     	$industry = get_field("case-industry");
     	$catch = get_field("case-catch");
     	$hot = get_field("case-isHot");
     	$floor_space = get_field("floor-space");
     	?>
					<li class="swiper-slide">
						<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
							<div class="case__img"><img width="300" data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name; ?>"></div>
							<div class="case__body">
								<h3 class="case__title">
									<span class=""><?php echo $name; ?></span>
								</h3>
								<p class="case__desc"><?php echo $catch; ?></p>
								<div class="case__info">
									<?php if ($floor_space): ?>
									<p class="case__floor">延床面積：<?php echo esc_html($floor_space); ?></p>
									<?php endif; ?>
									<?php
         $place = get_field("place");
         if ($place): ?>
									<p class="case__place">建築場所：<?php echo esc_html($place); ?></p>
									<?php endif;
         ?>
								</div>
							</div>
						</a>
					</li>
					<?php
     endwhile; ?>
				</ul>
				<div class="swiper-pagination swiper-pagination-black"></div>
			<?php endif;
   ?>
			<?php wp_reset_postdata(); ?>
			</div>
		</div>

		<div class="btnWrap">
			<a href="<?php echo rico_home_url("/case"); ?>" class="primaryBtn">施工事例はこちら</a>
		</div>
	</section>

	<!-- EVENT -->
	<?php get_template_part("template-parts/eventArea"); ?>

	<!-- MENU -->
	<?php get_template_part("template-parts/productArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


	<!-- sdgs -->
	<section class="sdgs">
		<div class="inner sdgs__inner">
			<div class="sdgs__logo-wrap">
				<img class="sdgs__logo" src="<?php echo rico_theme_url(); ?>/assets/img/top/sdgs.png" alt="SDGsロゴ">
				<div class="sdgs__text-block">
					<div class="sdgs__main-text">
						<img src="<?php echo rico_theme_url(); ?>/assets/img/common/logo-black.svg" alt="Rico Life ロゴ" class="sdgs__rico-logo">
						<p class="sdgs__sub-text">
							埼玉県SDGs公式パートナー企業です。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
