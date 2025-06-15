<!-- EVENT -->
<section class="event">
	<div class="inner">
		<div class="ttlWrap">
			<h2 class="section-ttl">EVENT
				<span>イベント情報</span>
			</h2>
		</div>

		<?php
  $args = [
  	"post_type" => "event",
  	"posts_per_page" => 5,
  	"orderby" => "date",
  	"order" => "DESC",
  ];
  $event_query = new WP_Query($args);

  if ($event_query->have_posts()): ?>
		<div class="event__slider swiper eventSwiper">
			<div class="swiper-wrapper">
				<?php while ($event_query->have_posts()):

    	$event_query->the_post();
    	$event_pic = get_field("event-pic");
    	$is_always = get_field("is_always");
    	$start_date = get_field("event_start_date");
    	$end_date = get_field("event_end_date");
    	$start_time = get_field("event_start_time");
    	$end_time = get_field("event_end_time");
    	$address = get_field("address");
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
				<?php
    endwhile; ?>
			</div>
			<div class="swiper-button-prev event-swiper-prev"></div>
			<div class="swiper-button-next event-swiper-next"></div>
		</div>
		<?php wp_reset_postdata();else: ?>
		<p>現在、開催中のイベントはありません。</p>
		<?php endif;
  ?>

		<div class="btnWrap">
			<a href="<?php echo esc_url(home_url("/event")); ?>" class="primaryBtn">イベント情報はこちら</a>
		</div>
	</div>
</section>
