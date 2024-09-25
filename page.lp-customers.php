<?php
/*
Template Name: lp-customersページ
*/
?>
<?php get_header(); ?>

<div class="lp">
	<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp1.png" alt="いえとち本舗のzeh" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp1.png" class="ls-is-cached sp" loading="lazy">
	<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp-pc1.png" alt="いえとち本舗のzeh" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp-pc1.png" class="ls-is-cached pc" loading="lazy">

	<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp2.png" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp2.png" class="ls-is-cached sp" loading="lazy" style="margin-top: 60px;">
	<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp-pc2.png" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp-pc2.png" class="ls-is-cached pc" loading="lazy" style="margin-top: 60px;">

	<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/lp/customers-lp3.png" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/customers-lp3.png" class="ls-is-cached pc" loading="lazy">

	<!-- ===============================================================================================
EVENT
================================================================================================ -->
	<?php
	$perPage = -1;
	$args = array(
		'posts_per_page' => $perPage,
		'post_type' => 'post',
		'category_name' => 'event',
		'post_status' => 'publish',
		'category__not_in' => array(get_category_by_slug('end')->term_id)
	);

	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : ?>
		<section class="event">
			<div class="inner event__inner">
				<div class="event__box">
					<div class="event__left">
						<h2 class="event__ttl event__ttl-pc ttl ttl--right">開催中の<br>イベント</h2><!-- /event__ttl -->
						<h2 class="event__ttl event__ttl-sp ttl ttl--right">開催中のイベント</h2><!-- /event__ttl -->
						<!-- ★pc 用ボタン表示 -->
						<a href="<?php echo do_shortcode('[home_url]'); ?>news" class="event__btn topLink show--pc">view more</a>
					</div><!-- /event__left -->
					<div class="event__right swiper eventSwiper">
						<ul class="event__list swiper-wrapper">
							<?php while ($the_query->have_posts()) : $the_query->the_post();
								$eventPic = get_field('event-pic');
								$comment = get_field('comment'); //コメント
								$schedule = get_field('schedule'); //日時
							?>
								<li class="event__item swiper-slide">
									<a href="<?php echo esc_url(get_permalink()); ?>">
										<div class="event__info">
											<div class=""><img width="300" data-js-ofi src="<?php echo $eventPic; ?>" alt="<?php echo trimString(get_the_title(), 50); ?>"></div><!-- /caseItem__img1 -->
										</div><!-- /event__info -->
										<div>
											<h3 class="event__subTtl"><?php echo trimString(get_the_title(), 50); ?></h3><!-- /event__subTtl -->
											<p class="event__schedule">日程:<?php echo $schedule; ?></p>
											<p class="event__comment"><?php echo $comment; ?></p>
										</div>
									</a>
								</li><!-- /event__item -->
							<?php endwhile; ?>
						</ul><!-- /event__list -->
						<div class="swiper-pagination swiper-pagination-black"></div>
						<!-- ★sp 用ボタン表示 -->
						<a href="<?php echo esc_url(get_permalink()); ?>" class="event__btn topLink show--sp">view more</a><!-- /event__btn -->
					</div><!-- /event__right -->
				</div><!-- /event__box -->
			</div><!-- /inner event__inner -->
		</section><!-- /event -->

		<div class="cv">
			<a href="<?php echo do_shortcode('[home_url]'); ?>contact" class="event__btn topLink">来店予約はこちら</a>
		</div>
		
		<div class="cv">
			<a href="<?php echo do_shortcode('[home_url]'); ?>request" class="event__btn topLink">資料請求はこちら</a>

			<a href="<?php echo do_shortcode('[home_url]'); ?>contact" class="event__btn topLink">来店予約はこちら</a>

			<a href="<?php echo do_shortcode('[home_url]'); ?>news" class="event__btn topLink">イベントページ</a>
		</div>
	<?php endif;
	wp_reset_postdata(); ?>


</div>
<?php get_footer(); ?>
