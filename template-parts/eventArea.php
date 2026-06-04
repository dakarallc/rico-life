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
  	"posts_per_page" => -1,
  	"orderby" => "date",
  	"order" => "DESC",
  ];
  $event_query = new WP_Query($args);

  // 終了イベントを除外して配列に格納
  $active_events = [];
  if ($event_query->have_posts()):
  	while ($event_query->have_posts()):
  		$event_query->the_post();

  		$is_always = get_field("is_always");
  		$event_pic = get_field("event-pic");
  		$start_date = get_field("event_start_date");
  		$end_date = get_field("event_end_date");
  		$start_time = get_field("event_start_time");
  		$end_time = get_field("event_end_time");
  		$address = get_field("address");
  		$subtitle = get_field("event_subtitle");

  		// 終了判定（共通関数を使用）
  		$event_status = rico_get_event_status($is_always, $start_date, $end_date, $start_time, $end_time);
  		if ($event_status["status"] === "end") {
  			continue; // 終了イベントはスキップ
  		}

  		$active_events[] = [
  			"post" => $post,
  			"is_always" => $is_always,
  			"event_pic" => $event_pic,
  			"start_date" => $start_date,
  			"end_date" => $end_date,
  			"start_time" => $start_time,
  			"end_time" => $end_time,
  			"address" => $address,
  			"subtitle" => $subtitle,
  		];
  	endwhile;
  	wp_reset_postdata();
  endif;

  // 最大5件に制限
  $active_events = array_slice($active_events, 0, 5);
  $event_count = count($active_events);

  if ($event_count > 0):
  	$use_slider = $event_count > 1; ?>
			<?php if ($use_slider): ?>
				<div class="event__slider swiper eventSwiper">
					<div class="swiper-wrapper">
			<?php else: ?>
				<div class="event__single">
			<?php endif; ?>

				<?php
    foreach ($active_events as $active_event):

    	$post = $active_event["post"];
    	setup_postdata($post);
    	$is_always = $active_event["is_always"];
    	$event_pic = $active_event["event_pic"];
    	$start_date = $active_event["start_date"];
    	$end_date = $active_event["end_date"];
    	$start_time = $active_event["start_time"];
    	$end_time = $active_event["end_time"];
    	$address = $active_event["address"];
    	$subtitle = $active_event["subtitle"];
    	?>
					<div class="<?php echo $use_slider ? "event__slide swiper-slide" : "event__item"; ?>">
						<a href="<?php echo esc_url(get_permalink()); ?>" class="event__container">
							<!-- タイトル + サブタイトル（上部） -->
							<div class="event__header">
								<h3 class="event__main-title"><?php the_title(); ?></h3>
								<?php if ($subtitle): ?>
									<p class="event__subtitle"><?php echo esc_html($subtitle); ?></p>
								<?php endif; ?>
							</div>
							<!-- 写真 + 情報（横並び） -->
							<div class="event__body">
								<div class="event__image">
									<img src="<?php echo esc_url($event_pic); ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="event__info">
									<p class="event__reserve">※完全予約制</p>
									<div class="event__details">
										<dl>
											<dt>【会場】</dt>
											<dd><?php echo esc_html($address); ?></dd>
										</dl>
										<dl>
											<dt>【開催期間】</dt>
											<dd>
												<?php if ($is_always): ?>
													常時開催
												<?php else: ?>
													<?php echo esc_html($start_date); ?>〜<?php echo esc_html($end_date); ?>
												<?php endif; ?>
											</dd>
										</dl>
										<dl>
											<dt>【見学時間】</dt>
											<dd><?php echo esc_html($start_time); ?>〜<?php echo esc_html($end_time); ?></dd>
										</dl>
										<dl>
											<dt>【定休日】</dt>
											<dd>水曜日</dd>
										</dl>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php
    endforeach;
    wp_reset_postdata();
    ?>

			<?php if ($use_slider): ?>
					</div>
					<div class="swiper-button-prev event-swiper-prev"></div>
					<div class="swiper-button-next event-swiper-next"></div>
				</div>
			<?php else: ?>
				</div>
			<?php endif; ?>

		<?php
  else:
  	 ?>
			<p>現在、開催中のイベントはありません。</p>
		<?php
  endif;
  ?>

		<div class="btnWrap">
			<a href="<?php echo rico_home_url("/event"); ?>" class="primaryBtn">イベント情報はこちら</a>
		</div>
	</div>
</section>
