<?php get_header(); ?>

<div class="page event-page eventItem">
  <?php if ( has_term('actual-house-tours', 'event-category') ) : ?>
    <div class="pageHeadEvent">
      <h1 class="pageHeadEvent__ttl">
        <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/eventHeader.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/eventHeader.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/eventHeader.svg" alt="完成入居前見学会" data-eio="l"></noscript>
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
    'pic' => get_field('event-pic'),
		'is_always' => get_field('is_always'),
    'start_date' => get_field('event_start_date'),
    'end_date' => get_field('event_end_date'), 
    'start_time' => get_field('event_start_time'),
    'end_time' => get_field('event_end_time'),
    'address' => get_field('address')
  ];

  // Calculate event status
  $now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
  $start_datetime = new DateTime($event_info['start_date'] . ' ' . $event_info['start_time'], new DateTimeZone('Asia/Tokyo'));
  $end_datetime = new DateTime($event_info['end_date'] . ' ' . $event_info['end_time'], new DateTimeZone('Asia/Tokyo'));
	
	if ($event_info['is_always']) {
		$event_status = 'nowEvent';
		$status_class = '_now';
		$status_text = '';
		$sort_priority = 1;
	} elseif($start_datetime <= $now && $end_datetime >= $now) {
    $event_status = 'nowEvent';
    $status_class = '_now';
    $interval = $now->diff($end_datetime);
    $days = $interval->days;
    $hours = $interval->h;
    $status_text = '<span>終了まであと</span>' . 
      ($days > 0 ? $days . '日' : '') .
      ($hours > 0 ? $hours . '時間' : '');
  } elseif ($start_datetime > $now) {
    $event_status = 'beforeEvent'; 
    $status_class = '_before';
    $interval = $now->diff($start_datetime);
    $days = $interval->days;
    $hours = $interval->h;
    $status_text = '<span>開催まであと</span>' .
      ($days > 0 ? $days . '日' : '') .
      ($hours > 0 ? $hours . '時間' : '');
  } else {
    $event_status = 'endEvent';
    $status_class = '_end';
    $status_text = '';
  }
  ?>
  <section class="post wow fadeInUp">
    <div class="inner post__inner">
      <div class="post__header">
        <h2 class="post__eventTtl">
          <span class="status <?php echo $status_class; ?>">
            <?php 
            if($event_status === 'nowEvent') {
              echo '開催中';
            } elseif($event_status === 'beforeEvent') {
              echo '開催前';
            } else {
              echo 'イベント終了';
            }
            ?>
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
              <?php echo ($event_status === 'endEvent') ? 'class="endEvent"' : ''; ?>
              src="<?php echo esc_url($event_info['pic']); ?>" 
              alt="<?php echo esc_attr(get_the_title()); ?>">
          </div>

          <div class="mainContents">
            <div class="list">
              <dl>
                <dt>日程</dt>
                <dd>
                  <?php if ($event_info['is_always']): ?>
                    常時開催 ※水曜定休
                  <?php else: ?>
                    <?php echo esc_html($event_info['start_date']); ?>
                    (<?php echo date('w', strtotime($event_info['start_date'])) === '0' ? '日' : 
                      (date('w', strtotime($event_info['start_date'])) === '6' ? '土' : 
                      ['月','火','水','木','金'][date('w', strtotime($event_info['start_date']))-1]); ?>)
                    ~
                    <?php echo esc_html($event_info['end_date']); ?>
                    (<?php echo date('w', strtotime($event_info['end_date'])) === '0' ? '日' : 
                      (date('w', strtotime($event_info['end_date'])) === '6' ? '土' : 
                      ['月','火','水','木','金'][date('w', strtotime($event_info['end_date']))-1]); ?>)<br>※水曜定休
                  <?php endif; ?>
                </dd>
              </dl>
              <dl>
                <dt>時間</dt>
                <dd><?php echo esc_html($event_info['start_time']); ?>~<?php echo esc_html($event_info['end_time']); ?></dd>
              </dl>
              <dl>
                <dt>住所</dt>
                <dd><?php echo esc_html($event_info['address']); ?></dd>
              </dl>
              <?php if ( has_term('actual-house-tours', 'event-category') ) : ?>
                <p>※写真はイメージです<br>※実際に住むお家の為、ご希望の日程に添えない場合がございます。<br>下記フォームまたは<a href="tel:0480226666">お電話</a>でご予約受付中 。<br>予約は1週間前までとなります。1週間を切っている場合は<a href="tel:0480226666">お電話</a>でお問い合わせください。</p>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="jcbBanner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/jcb7000.png" alt="JCB 7000円分">
        </div>

        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="hukidashi">
            </div>
            <button class="cvButtonLink__button">
              <span>ご来場予約はこちら</span>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png" alt="矢印" class="arrowRight">
            </button>
          </a>
        </div>

        <!-- 間取り -->
        <section class="madori">
          <div class="madori__inner">
            <?php 
            $madoriImg1 = get_field('madori1');
            $madoriImg2 = get_field('madori2');
            $comment = get_field('comment');
            
            if ($madoriImg1) : ?>
              <div class="madori__inner--img">
								<p>1階</p>
                <img data-js-ofi src="<?php echo esc_url($madoriImg1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
              </div>
            <?php endif;
            
            if ($madoriImg2) : ?>
              <div class="madori__inner--img">
								<p>2階</p>
                <img data-js-ofi src="<?php echo esc_url($madoriImg2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
              </div>
            <?php endif; ?>
          </div>
          <?php if ($comment) : ?>
            <p class="madori__comment"><?php echo esc_html($comment); ?></p>
          <?php endif; ?>
        </section>

        <div class="event-message">
          <div>
						<h2 class="point-title">このイベントのPoint!</h2>

            <?php
            $point1_title = get_field('point1_title');
            $point1Img = get_field('point1_img');
            $should_show_point1_img_annotation = get_field('should_show_point1_img_annotation');
            $point1_text = get_field('point1_text');
            $point2_img = get_field('point2_img');
						$should_show_point2_img_annotation = get_field('should_show_point2_img_annotation');
            $point2_title = get_field('point2_title');
            $point2_text = get_field('point2_text');
            $point3_img = get_field('point3_img');
						$should_show_point3_img_annotation = get_field('should_show_point3_img_annotation');
            $point3_title = get_field('point3_title');
            $point3_text = get_field('point3_text');
            
            
            if ($point1_title) : ?>
							<h3 class="point orange marugo">1,<?php echo esc_html($point1_title); ?></h3>
						<?php endif;
            if ($point1Img) : ?>
              <img data-js-ofi src="<?php echo esc_url($point1Img); ?>" alt="Point 1 Image">
							<?php if ($should_show_point1_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
            <?php endif;
            if ($point1_text) : ?>
              <p class="event-message-text"><?php echo esc_html($point1_text); ?></p>
            <?php endif;
            
						if ($point2_title) : ?>
              <h3 class="point orange marugo">2,<?php echo esc_html($point2_title); ?></h3>
            <?php endif;
            if ($point2_img) : ?>
              <img data-js-ofi src="<?php echo esc_url($point2_img); ?>">
							<?php if ($should_show_point2_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
							
            <?php endif;
            if ($point2_text) : ?>
              <p class="event-message-text"><?php echo esc_html($point2_text); ?></p>
            <?php endif;

						if ($point3_title) : ?>
							<h3 class="point orange marugo">3,<?php echo esc_html($point3_title); ?></h3>
						<?php endif;
            if ($point3_img) : ?>
              <img data-js-ofi src="<?php echo esc_url($point3_img); ?>">
							<?php if ($should_show_point3_img_annotation): ?>
							<p class="annotation">※写真はイメージです</p>
							<?php endif; ?>
            <?php endif;
            if ($point3_text) : ?>
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
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="hukidashi">
          </div>
          <button class="cvButtonLink__button" <?php echo ($event_status === 'endEvent') ? 'disabled' : ''; ?>>
            <span>ご来場予約はこちら</span>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png" alt="矢印" class="arrowRight">
          </button>
        </a>
      </div>

      <div class="jcbBanner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/jcb7000.png" alt="JCB 7000円分">
      </div>

      <!-- いえとち本舗の家づくり -->
      <div class="homeMadeWrap">
        <h2 class="homeMade__ttl wow fadeInUp">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/logo.png" alt="いえとち本舗" class="logo">の家づくり
        </h2>

        <section class="homeMade">
          <div class="homeMade__inner">
            <div class="homeMade__wrap content-left homeMade1">
              <div class="homeMade__box box">
                <p class="number">01</p>
                <h3 class="homeMade__subTtl">安心の標準装備</h3>
                <p class="homeMade__txt">太陽光発電と蓄電池がセットで標準装備！上がり続ける電気代を太陽光発電が軽減！</p>
              </div>
            </div>
          </div>

          <div class="homeMade__inner">
            <div class="homeMade__wrap content-right homeMade2">
              <div class="homeMade__box box">
                <p class="number">02</p>
                <h3 class="homeMade__subTtl">太陽光とセットで固定費を下げる！</h3>
                <p class="homeMade__txt">オール電化標準対応<br>・IHコンロ<br>・エコキュート etc</p>
              </div>
            </div>
          </div>

          <div class="homeMade__inner">
            <div class="homeMade__wrap content-left homeMade3">
              <div class="homeMade__box box">
                <p class="number">03</p>
                <h3 class="homeMade__subTtl">地震対策も万全！</h3>
                <p class="homeMade__txt">ベタ基礎・金物工法を採用<br>耐震等級３相当で地震対策も万全！</p>
              </div>
            </div>
          </div>

          <div class="homeMade__inner">
            <div class="homeMade__wrap content-right homeMade4">
              <div class="homeMade__box box">
                <p class="number">04</p>
                <h3 class="homeMade__subTtl">吹付け断熱を標準装備！</h3>
                <p class="homeMade__txt">冬暖かく、夏涼しい。<br>２０３０年基準の断熱等級５対応！</p>
              </div>
            </div>
          </div>
        </section>

        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="planImg">
            </div>
            <button class="cvButtonLink__button" <?php echo ($event_status === 'endEvent') ? 'disabled' : ''; ?>>
              <span>ご来場予約はこちら</span>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png" alt="矢印" class="arrowRight">
            </button>
          </a>
        </div>
			</div>

      <!-- 豊富な規格プラン -->
      <section class="eventPlan">
        <h2 class="eventPlan__ttl wow fadeInUp">豊富な規格プラン</h2>
        <div class="eventPlan__wrap">
          <div class="eventPlan__box">
            <p class="number">01 <span>平屋住宅</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan1.png" alt="平屋住宅" class="eventPlanImg">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,198<span>万円〜</span></h3>
            </div>
          </div>

          <div class="eventPlan__box">
            <p class="number">02 <span>コンセプト平屋</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan2.png" alt="コンセプト平屋" class="eventPlanImg">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,748<span>万円〜</span></h3>
            </div>
          </div>

          <div class="eventPlan__box">
            <p class="number">03 <span>2階建て</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan3.png" alt="2階建て" class="eventPlanImg">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,498<span>万円〜</span></h3>
            </div>
          </div>

          <div class="eventPlan__box">
            <p class="number">04 <span>大型(40坪以上)２階建て</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan4.png" alt="大型2階建て" class="eventPlanImg">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,848<span>万円〜</span></h3>
            </div>
          </div>
        </div>
        <p>※上記プランに表示されている価格は全て税抜価格です</p>

        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg" alt="簡単予約" class="planImg">
            </div>
            <button class="cvButtonLink__button" <?php echo ($event_status === 'endEvent') ? 'disabled' : ''; ?>>
              <span>ご来場予約はこちら</span>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png" alt="矢印" class="arrowRight">
            </button>
          </a>
        </div>
      </section>

      <!-- 住宅ローン -->
      <section class="housingLoan">
        <div class="housingLoan__img">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/housingLoan.png" alt="住宅ローン" class="eventPlanImg">
        </div>
        <div class="housingLoan__contents">
          <p class="free">無料相談・無料審査大歓迎！</p>
          <div class="simulationWrap">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/simulation.svg" alt="シミュレーション" class="simulation">
          </div>
          <div class="listWrap">
            <ul class="housingLoan__list">
              <li>
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/check.svg" alt="チェック">
                住宅ローンお支払いシミュレーション
              </li>
              <li>
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/check.svg" alt="チェック">
                土地・建物の総額資金計画と住宅ローンのシミュレーション
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>

		<div class="event-message">
			<div class="event-highlights">
				<h3 class="yellow marugo">💫⭐️ご来場特典⭐️💫</h3>
				<p>
					<span class="orange marugo">HP予約からでJCB券</span><br>
					<span class="orange marugo">最大7,000円分</span>プレゼント！！
				</p>

				<div class="cashBack">
					<div class="bgRed">【カクダイホームの70周年特別企画】</div>
					<p>
						下記条件で<br class="show--sp"最大7,000円分キャンペーン<br>
						①当HP予約からのご来場<br>
						<span class="orange marugo">2,000円分</span><br>
						②ご来場アンケート記入<br>
						<span class="orange marugo">2,000円分</span><br>
						③Google口コミ記入<br>
						<span class="orange marugo">3,000円分</span>
					</p>

					<p>
						<strong>【対象者条件】</strong><br>
						下記に該当するお客様1組様につき<br class="show--pc">1回の進呈とさせていただきます。
						<br>
						１）マイホームをご検討中の方。<br>
						２）はじめて、いえとち本舗 久喜店のイベントに参加された方。
					</p>

					<p class="note">
						※ご来場プレゼントは1回限りとなります。<br>
						※その他、不正行為と弊社がみなした場合、プレゼント提供をお断りする場合がございます。<br>
						※プレゼントの進呈数は限りがあり、なくなり次第終了となります。
					</p>

					<p>
						現場見学会<br class="show--sp">ローン相談<br class="show--sp">土地探し<br class="show--sp">プラン相談<br>
						どんなご相談でも<br class="show--sp">来場特典プレゼント！！<br>
						詳しくはこちらより、来場予約お待ちしております。
					</p>
				</div>
			</div>
		</div>

      <!-- フォーム -->
      <div class="contact wow fadeInUp" id="contactForm">
        <div class="inner contact__inner">
          <h2 class="contact__ttl">来場予約フォーム</h2>
          <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。追って担当者よりご連絡させていただきます。</p><!-- /contact__desc -->
          <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
        </div><!-- /inner contact__inner -->
      </div><!-- /contact -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
    </div><!-- /inner post__inner -->
  </section>
	
</div>

<?php get_footer(); ?>
