<?php get_header(); ?>

<div class="page event-page eventItem">
  <?php if (has_term("actual-house-tours", "event-category")): ?>
    <div class="pageHeadEvent">
      <h1 class="pageHeadEvent__ttl">
        <img src="<?php echo do_shortcode(
        	"[theme_url]",
        ); ?>/assets/img/event/eventHeader.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode(
	"[theme_url]",
); ?>/img/event/eventHeader.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode(
	"[theme_url]",
); ?>/img/event/eventHeader.svg" alt="完成入居前見学会" data-eio="l"></noscript>
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead -->
  <?php else: ?>
    <div class="pageHeadEvent event">
      <h1 class="pageHeadEvent__ttl">
      </h1>
    </div><!-- /pageHead -->
  <?php endif; ?>

  <?php
  // Get event info
  $event_info = [
  	"pic" => get_field("event-pic"),
  	"is_always" => get_field("is_always"),
  	"start_date" => get_field("event_start_date"),
  	"end_date" => get_field("event_end_date"),
  	"start_time" => get_field("event_start_time"),
  	"end_time" => get_field("event_end_time"),
  	"address" => get_field("address"),
  ];

  // Calculate event status
  $now = new DateTime("now", new DateTimeZone("Asia/Tokyo"));
  $start_datetime = new DateTime(
  	$event_info["start_date"] . " " . $event_info["start_time"],
  	new DateTimeZone("Asia/Tokyo"),
  );
  $end_datetime = new DateTime($event_info["end_date"] . " " . $event_info["end_time"], new DateTimeZone("Asia/Tokyo"));

  if ($event_info["is_always"]) {
  	$event_status = "nowEvent";
  	$status_class = "_now";
  	$status_text = "";
  	$sort_priority = 1;
  } elseif ($start_datetime <= $now && $end_datetime >= $now) {
  	$event_status = "nowEvent";
  	$status_class = "_now";
  	$interval = $now->diff($end_datetime);
  	$days = $interval->days;
  	$hours = $interval->h;
  	$status_text = "<span>終了まであと</span>" . ($days > 0 ? $days . "日" : "") . ($hours > 0 ? $hours . "時間" : "");
  } elseif ($start_datetime > $now) {
  	$event_status = "beforeEvent";
  	$status_class = "_before";
  	$interval = $now->diff($start_datetime);
  	$days = $interval->days;
  	$hours = $interval->h;
  	$status_text = "<span>開催まであと</span>" . ($days > 0 ? $days . "日" : "") . ($hours > 0 ? $hours . "時間" : "");
  } else {
  	$event_status = "endEvent";
  	$status_class = "_end";
  	$status_text = "";
  }
  ?>
  <section class="post wow fadeInUp">
    <div class="inner post__inner">
      <div class="post__header">
        <h2 class="post__eventTtl">
          <span class="status <?php echo $status_class; ?>">
            <?php if ($event_status === "nowEvent") {
            	echo "開催中";
            } elseif ($event_status === "beforeEvent") {
            	echo "開催前";
            } else {
            	echo "イベント終了";
            } ?>
          </span>
					<br class="show--sp"/>
          <?php the_title(); ?>
					<span class="count-down"><?php echo $status_text; ?></span>
        </h2>
        
      </div>
      
      <div class="post__contents">
        <div class="caseItem__main wow fadeInUp">
          <div class="caseItem__img1">
            <img data-js-ofi 
              <?php echo $event_status === "endEvent" ? 'class="endEvent"' : ""; ?>
              src="<?php echo esc_url($event_info["pic"]); ?>" 
              alt="<?php echo esc_attr(get_the_title()); ?>">
          </div>

          <div class="mainContents">
            <div class="list">
              <dl>
                <dt>日程</dt>
                <dd>
                  <?php if ($event_info["is_always"]): ?>
                    常時開催 ※水曜定休
                  <?php else: ?>
                    <?php echo esc_html($event_info["start_date"]); ?>
                    (<?php echo date("w", strtotime($event_info["start_date"])) === "0"
                    	? "日"
                    	: (date("w", strtotime($event_info["start_date"])) === "6"
                    		? "土"
                    		: ["月", "火", "水", "木", "金"][date("w", strtotime($event_info["start_date"])) - 1]); ?>)
                    ~
                    <?php echo esc_html($event_info["end_date"]); ?>
                    (<?php echo date("w", strtotime($event_info["end_date"])) === "0"
                    	? "日"
                    	: (date("w", strtotime($event_info["end_date"])) === "6"
                    		? "土"
                    		: ["月", "火", "水", "木", "金"][
                    			date("w", strtotime($event_info["end_date"])) - 1
                    		]); ?>)<br>※水曜定休
                  <?php endif; ?>
                </dd>
              </dl>
              <dl>
                <dt>時間</dt>
                <dd><?php echo esc_html($event_info["start_time"]); ?>~<?php echo esc_html(
	$event_info["end_time"],
); ?></dd>
              </dl>
              <dl>
                <dt>住所</dt>
                <dd><?php echo esc_html($event_info["address"]); ?></dd>
              </dl>
              <?php if (has_term("actual-house-tours", "event-category")): ?>
                <p>※写真はイメージです<br>※実際に住むお家の為、ご希望の日程に添えない場合がございます。<br>下記フォームまたは<a href="tel:0480226666">お電話</a>でご予約受付中 。<br>予約は1週間前までとなります。1週間を切っている場合は<a href="tel:0480226666">お電話</a>でお問い合わせください。</p>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode(
              	"[theme_url]",
              ); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="hukidashi">
            </div>
            <button class="greenBtn">
							ご来場予約はこちら
            </button>
          </a>
        </div>

        <!-- 間取り -->
        <section class="madori">
          <div class="madori__inner">
            <?php
            $madoriImg1 = get_field("madori1");
            $madoriImg2 = get_field("madori2");
            $comment = get_field("comment");

            if ($madoriImg1): ?>
              <div class="madori__inner--img">
								<p>1階</p>
                <img data-js-ofi src="<?php echo esc_url($madoriImg1); ?>" alt="<?php echo esc_attr(
	get_the_title(),
); ?>">
              </div>
            <?php endif;

            if ($madoriImg2): ?>
              <div class="madori__inner--img">
								<p>2階</p>
                <img data-js-ofi src="<?php echo esc_url($madoriImg2); ?>" alt="<?php echo esc_attr(
	get_the_title(),
); ?>">
              </div>
            <?php endif;
            ?>
          </div>
          <?php if ($comment): ?>
            <p class="madori__comment"><?php echo esc_html($comment); ?></p>
          <?php endif; ?>
        </section>

        <div class="event-message">
          <div>
						<h2 class="point-title">このイベントのPoint!</h2>

            <?php
            $point1_title = get_field("point1_title");
            $point1Img = get_field("point1_img");
            $should_show_point1_img_annotation = get_field("should_show_point1_img_annotation");
            $point1_text = get_field("point1_text");
            $point2_img = get_field("point2_img");
            $should_show_point2_img_annotation = get_field("should_show_point2_img_annotation");
            $point2_title = get_field("point2_title");
            $point2_text = get_field("point2_text");
            $point3_img = get_field("point3_img");
            $should_show_point3_img_annotation = get_field("should_show_point3_img_annotation");
            $point3_title = get_field("point3_title");
            $point3_text = get_field("point3_text");

            if ($point1_title): ?>
							<h3 class="point marugo">1,<?php echo esc_html($point1_title); ?></h3>
						<?php endif;
            if ($point1Img): ?>
              <img data-js-ofi src="<?php echo esc_url($point1Img); ?>" alt="Point 1 Image">
							<?php if ($should_show_point1_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
            <?php endif;
            if ($point1_text): ?>
              <p class="event-message-text"><?php echo esc_html($point1_text); ?></p>
            <?php endif;

            if ($point2_title): ?>
              <h3 class="point marugo">2,<?php echo esc_html($point2_title); ?></h3>
            <?php endif;
            if ($point2_img): ?>
              <img data-js-ofi src="<?php echo esc_url($point2_img); ?>">
							<?php if ($should_show_point2_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
							
            <?php endif;
            if ($point2_text): ?>
              <p class="event-message-text"><?php echo esc_html($point2_text); ?></p>
            <?php endif;

            if ($point3_title): ?>
							<h3 class="point marugo">3,<?php echo esc_html($point3_title); ?></h3>
						<?php endif;
            if ($point3_img): ?>
              <img data-js-ofi src="<?php echo esc_url($point3_img); ?>">
							<?php if ($should_show_point3_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
            <?php endif;
            if ($point3_text): ?>
              <p class="event-message-text"><?php echo esc_html($point3_text); ?></p>
            <?php endif;

            the_content();
            ?>
          </div>
        </div>
      </div>

			<div class="cvButtonLinkWrap">
					<a href="#contactForm" class="cvButtonLink">
						<div>
							<img src="<?php echo do_shortcode(
								"[theme_url]",
							); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="hukidashi">
						</div>
						<button class="greenBtn">
							ご来場予約はこちら
						</button>
					</a>
				</div>

      <!-- 住宅ローン -->
      <section class="housingLoan">
        <div class="housingLoan__img">
          <img src="<?php echo do_shortcode(
          	"[theme_url]",
          ); ?>/assets/img/event/housingLoan.png" alt="住宅ローン" class="eventPlanImg">
        </div>
        <div class="housingLoan__contents">
          <p class="free">無料相談・無料審査大歓迎！</p>
          <div class="simulationWrap">
            <img src="<?php echo do_shortcode(
            	"[theme_url]",
            ); ?>/assets/img/event/simulation.svg" alt="シミュレーション" class="simulation">
          </div>
          <div class="listWrap">
            <ul class="housingLoan__list">
              <li>
                <img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/event/check.svg" alt="チェック">
                住宅ローンお支払いシミュレーション
              </li>
              <li>
                <img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/event/check.svg" alt="チェック">
                土地・建物の総額資金計画と住宅ローンのシミュレーション
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>

      <!-- フォーム -->
      <div class="contact wow fadeInUp" id="contactForm">
        <div class="inner contact__inner">
          <h2 class="contact__ttl">予約フォーム</h2>
          <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。追って担当者よりご連絡させていただきます。</p><!-- /contact__desc -->
          <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
        </div><!-- /inner contact__inner -->
      </div><!-- /contact -->
      <a href="<?php echo do_shortcode(
      	"[home_url]",
      ); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
    </div><!-- /inner post__inner -->
  </section>
</div>

<?php get_footer(); ?>
