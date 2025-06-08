<?php
/*
Template Name: TOP
*/
?>
<?php 
get_header(); 
?>

<div class="top">

	<!-- fv -->
	<section class="fv">
		<div class="swiper fvSwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img class="fv__img1" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/kv1.png" alt="">
				</div>
				<div class="swiper-slide">
					<img class="fv__img" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/kv2.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/kv3.png" alt="">
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="fv__ttl-wrap">
			<div class="fv__ttl">
				<h2>コスパで創る、<br>豊かな暮らし。</h2>
				<svg xmlns="http://www.w3.org/2000/svg" width="491" height="32" viewBox="0 0 491 32">
					<text id="Creating_cost-effectively_A_rich_life." data-name="Creating cost-effectively,A rich life." transform="translate(0 25)" fill="#fff" font-size="28" font-family="VDL-PenLetter-Medium, VDL-PenLetter" font-weight="500"><tspan x="0" y="0">Creating cost-effectively,A rich life.</tspan></text>
				</svg>
			</div>
		</div>
	</section>

	<!-- about	 -->
	<section class="about">
		<div class="about__logo">
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo-black.svg" alt="ロゴ">
		</div>
		<p>コスパで創造する、<br class="show--sp">40年間の居住費が<br class="show--sp">いちばん安い家。</p>
		<div class="about__decoration">
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/round-decoration.svg" alt="">
		</div>
	</section>

	<!-- movie	 -->
	<section class="movie">
		<div class="inner">
			<p>まずは動画をご覧ください！</p>
			
			<div class="movie__inner">
				<iframe width="100%" src="https://www.youtube.com/embed/OKJpQmHUZr0?si=7FpiiuHA2rxe9UzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<p>Rico Life. のすべてを３分解説します！</p>
		</div>
	</section>

	<!-- CONCEPT	 -->
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">CONCEPT
				<span>コンセプト</span>
			</h2>
			<div class="concept__inner">
				<div class="concept__img">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/concept.png" alt="テーブルの写真">
				</div>
				<div class="concept__content">
					<div class="concept__text">
						<h3 class="concept__catch">コスパで創る、豊かな暮らし。</h3>
						<p>住宅購入は<br>『買う費用』より『住む費用』が大切。</p>
						<p>Rico Life.は、<br>
							太陽光＆蓄電池＋高耐久素材が標準。<br>
							光熱費・保険・メンテナンスを削減。<br>
							<span class="concept__highlight">40年間で最も出費が少ない家。</span><br>
							ムリせず、賢く。未来に安心を。
						</p>
					</div>
				</div>
			</div>
			<div class="btnWrap">
				<a href="#" class="greenBtn">はじめての方へ</a>
			</div>
		</div>
	</section>

	<!-- WORKS -->
	<section class="case">
		<div class="inner">
			<h2 class="section-ttl">WORKS
				<span>施工事例</span>
			</h2>

			<?php
			$perPage = 10;
			$paged = get_query_var('paged');
			$args = array(
				'posts_per_page' => $perPage,
				'post_type' => 'case',
				'paged' => $paged,
				'orderby' => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
				'meta_key' => 'case-isHot'
			);
			$my_query = new WP_Query($args);
			if ($my_query->have_posts()) : 
			?>
			<div class="swiper mySwiper">
				<ul class="swiper-wrapper">
					<?php while ($my_query->have_posts()) : $my_query->the_post();
					$name = get_the_title();
					$cat = get_field('case-cat')->name;
					$img_id1 = get_field('pic1');
					$img_url1 = wp_get_attachment_image_src($img_id1, 'large')[0];
					$industry = get_field('case-industry');
					$catch = get_field('case-catch');
					$hot = get_field('case-isHot');
					$floor_space = get_field('floor-space');
					?>
					<li class="swiper-slide">
						<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
							<div class="case__img"><img width="300" data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name ?>"></div>
							<div class="case__body">
								<h3 class="case__title">
									<span class=""><?php echo $name ?></span>
								</h3>
								<p class="case__desc"><?php echo $catch; ?></p>
								<div class="case__info">
									<?php if ($floor_space): ?>
									<p class="case__floor">延床面積：<?php echo esc_html($floor_space); ?></p>
									<?php endif; ?>
									<?php $place = get_field('place'); if ($place): ?>
									<p class="case__place">建築場所：<?php echo esc_html($place); ?></p>
									<?php endif; ?>
								</div>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<div class="swiper-pagination swiper-pagination-black"></div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

	<!-- EVENT -->
	<section class="event">
		<div class="inner">
			<h2 class="section-ttl">EVENT
				<span>イベント情報</span>
			</h2>

			<?php
			$args = array(
				'post_type' => 'event',
				'posts_per_page' => 5,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$event_query = new WP_Query($args);

			if ($event_query->have_posts()) :
			?>
			<div class="event__slider swiper eventSwiper">
				<div class="swiper-wrapper">
					<?php while ($event_query->have_posts()) : $event_query->the_post();
					$event_pic = get_field('event-pic');
					$is_always = get_field('is_always');
					$start_date = get_field('event_start_date');
					$end_date = get_field('event_end_date');
					$start_time = get_field('event_start_time');
					$end_time = get_field('event_end_time');
					$address = get_field('address');
					?>
					<div class="event__slide swiper-slide">
						<a href="<?php echo esc_url(get_permalink()); ?>" class="event__container">
							<div class="event__image">
								<img src="<?php echo esc_url($event_pic); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="event__info">
								<h3 class="event__main-title"><?php the_title(); ?></h3>
								<hr class="event__divider">
								<p>完成見学会 ※完全予約制</p>
								<div class="event__row">
									<span class="event__icon"><i class="fa-regular fa-calendar"></i></span>
									<span class="event__date"><?php echo esc_html($start_date); ?> - <?php echo esc_html($end_date); ?></span>
								</div>
								<div class="event__row">
									<span class="event__icon"><i class="fa-solid fa-location-dot"></i></span>
									<span class="event__place"><?php echo esc_html($address); ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-button-prev event-swiper-prev"></div>
				<div class="swiper-button-next event-swiper-next"></div>
			</div>
			<?php
			wp_reset_postdata();
			else:
			?>
			<p>現在、開催中のイベントはありません。</p>
			<?php endif; ?>
			
			<div class="btnWrap">
				<a href="<?php echo esc_url(home_url('/event')); ?>" class="primaryBtn">イベント情報はこちら</a>
			</div>
		</div>
	</section>

	<!-- PRODUCTS -->
	<section class="product">
		<div class="inner">
			<h2 class="section-ttl">PRODUCTS
				<span>商品概要</span>
			</h2>
			<div class="product__list">
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product1.png" alt="間取り">
						<div class="product__label">間取り</div>
					</a>
				</div>
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product2.png" alt="ソーラー＆蓄電池">
						<div class="product__label">ソーラー＆蓄電池</div>
					</a>
				</div>
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product3.png" alt="標準仕様">
						<div class="product__label">標準仕様</div>
					</a>
				</div>
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product4.png" alt="コスト">
						<div class="product__label">コスト</div>
					</a>
				</div>
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product5.png" alt="家づくりの流れ">
						<div class="product__label">家づくりの流れ</div>
					</a>
				</div>
				<div class="product__item">
					<a href="#">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/product6.png" alt="Rico Life.ch">
						<div class="product__label">Rico Life.ch</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- VOICE -->
	<!-- <section class="concept">
		<div class="inner">
			<h2 class="section-ttl">VOICE
				<span>お客様インタビュー</span>
			</h2>
		</div>
	</section> -->

	<!-- ABOUT -->
	<section class="companyIntroduction">
		<div class="inner">
			<h2 class="section-ttl">ABOUT
				<span>会社紹介</span>
			</h2>
			<div class="companyIntroduction__container">
				<a href="/about/" class="companyIntroduction__block companyIntroduction__block--left">
					<span>スタッフ紹介</span>
				</a>
				<a href="/access/" class="companyIntroduction__block companyIntroduction__block--right">
					<span>会社概要</span>
				</a>
			</div>
		</div>
	</section>

	<!-- REQUEST -->
	<section class="request">
		<div class="inner">
			<h2 class="section-ttl">REQUEST
				<span>資料請求</span>
			</h2>
		</div>

		<p class="show--sp request__ttl">リコライフの全てが分かる<br/>資料３点セット</p>
		<div class="c-requestBanner">
			<div class="c-requestBanner__content inner">
				<div class="c-requestBanner__text">
					<p class="show--pc request__ttl">リコライフの全てが分かる<br/>資料３点セット</p>
					<div class="btnWrap">
						<span class="c-requestBanner__lead">かんたん入力<span class="c-requestBanner__sec">60</span>秒</span>
						<a href="/request/" class="greenBtn">
							資料請求はこちら
						</a>
					</div>
				</div>
				<div class="c-requestBanner__books">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/request.png" alt="資料請求冊子" class="c-requestBanner__img">
				</div>
			</div>
		</div>
	</section>

	<!-- CONTACT -->
	<section class="contact">
		<div class="inner">
			<h2 class="section-ttl">CONTACT
				<span>来場予約</span>
			</h2>
		</div>

		<p class="show--sp contact__ttl">ご来場いただくと<br/>無料で間取り作成から<br/>お見積りまでご相談！</p>
		<div class="c-requestBanner">
			<div class="c-requestBanner__content inner">
				<div class="c-requestBanner__text">
					<p class="show--pc contact__ttl">ご来場いただくと<br/>無料で間取り作成から<br/>お見積りまでご相談！</p>
					<div class="btnWrap">
						<span class="c-requestBanner__lead"><span class="c-requestBanner__sec">間取り・資金</span>相談</span>
						<a href="/contact/" class="greenBtn">
							来場予約はこちら
						</a>
					</div>
				</div>
				<div class="c-requestBanner__books">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/contact.png" alt="来場予約" class="c-requestBanner__img">
				</div>
			</div>
		</div>
		<div class="contact__txt">
			<p>お打合せは埼玉県久喜市にある店舗にて行わせていただきます。<br/>キッズスペースや駐車場を完備しています。</p>
		</div>
	</section>

	<!-- COLUMN -->
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">COLUMN
				<span>コラム</span>
			</h2>
		</div>
	</section>

	<!-- NEWS -->
	<section class="news">
		<?php
		$perPage = 3;
		$args = array(
			'posts_per_page' => $perPage,
			'post_type' => 'post',
			'category_name' => 'news',
			'post_status' => 'publish'
		);

		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) : ?>
		<div class="inner news__inner">
			<h2 class="section-ttl">NEWS
				<span>お知らせ</span>
			</h2>
			<div class="news__box">
				<ul class="news__list">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<li class="news__item">
						<a href="<?php echo esc_url(get_permalink()); ?>">
							<div class="news__info">
								<time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
								<span class="news__cat">News</span>
							</div>
							<div class="news__body">
								<p class="news__subTtl"><?php echo trimString(get_the_title(), 50); ?></p>
								<i class="fa-solid fa-chevron-right news__arrow"></i>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
		<?php endif;
		wp_reset_postdata(); ?>
	
		<div class="btnWrap">
			<a href="<?php echo do_shortcode('[home_url]'); ?>news" class="primaryBtn">お知らせはこちら</a>
		</div>
	</section>

	<!-- Instagram -->
	<section class="instagram">
		<div class="inner">
			<h2 class="instagram__title">
				<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/instagram.svg" alt="Instagram" class="instagram__logo">
			</h2>
			<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
		</div>
	</section>

	<!-- sdgs -->
	<section class="sdgs">
		<div class="inner sdgs__inner">
			<div class="sdgs__logo-wrap">
				<img class="sdgs__logo" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/sdgs.png" alt="SDGsロゴ">
				<div class="sdgs__text-block">
					<div class="sdgs__main-text">
						<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo-black.svg" alt="Rico Life ロゴ" class="sdgs__rico-logo">
						<p class="sdgs__sub-text">
							埼玉県SDGs公式パートナー企業です。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
