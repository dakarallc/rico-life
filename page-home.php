<?php
/*
Template Name: TOP
*/
?>
<?php 
get_header(); 
?>

<div class="top">

<!-- ===============================================================================================
fv
================================================================================================ -->
  <section class="fv">
    <div class="inner fv__inner">
      <!-- <h2 class="fv__ttl">ちょうどいい価格から<br>豊かな生活へ</h2>/fv__ttl -->
    </div><!-- /inner fv__inner -->
  </section><!-- /fv -->

<!-- ===============================================================================================
EVENT
================================================================================================ -->
  <?php
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'event',
    'post_status' => 'publish'
  );
  
  $event_query = new WP_Query($args);
  $events = array();

  if ($event_query->have_posts()) :
    while ($event_query->have_posts()) : $event_query->the_post();
      
      $event_info = [
        'pic' => get_field('event-pic'),
        'start_date' => get_field('event_start_date'),
        'end_date' => get_field('event_end_date'), 
        'start_time' => get_field('event_start_time'),
        'end_time' => get_field('event_end_time'),
        'address' => get_field('address')
      ];

      $now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
      $start_datetime = new DateTime($event_info['start_date'] . ' ' . $event_info['start_time'], new DateTimeZone('Asia/Tokyo'));
      $end_datetime = new DateTime($event_info['end_date'] . ' ' . $event_info['end_time'], new DateTimeZone('Asia/Tokyo'));

      // 開催中のイベントのみ表示
      if ($start_datetime <= $now && $end_datetime >= $now) {
        $events[] = array(
          'post' => $post,
          'event_info' => $event_info
        );
      }
    endwhile;

    if (!empty($events)) : ?>
      <section class="event">
        <div class="inner event__inner">
          <div class="event__box">
            <div class="event__left">
              <h2 class="event__ttl  event__ttl-pc ttl ttl--right ">開催中のイベント</h2>
              <h2 class="event__ttl  event__ttl-sp ttl ttl--right ">開催中のイベント</h2>
              <a href="<?php echo do_shortcode('[home_url]'); ?>event" class="event__btn topLink show--pc">イベント一覧へ</a>
            </div>
            <div class="event__right swiper eventSwiper">
              <ul class="event__list swiper-wrapper">
                <?php foreach ($events as $event) :
                  $post = $event['post'];
                  setup_postdata($post);
                  $event_info = $event['event_info'];
                ?>
                  <li class="event__item swiper-slide">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                      <div class="event__info">
                        <div class="event__info--img"><img width="300" data-js-ofi src="<?php echo esc_url($event_info['pic']); ?>" alt="<?php echo esc_attr(trimString(get_the_title(), 50)); ?>"></div>
                      </div>
                      <div>
                        <h3 class="event__subTtl"><?php echo esc_html(trimString(get_the_title(), 50)); ?></h3>
                        <p class="event__schedule">日程:<?php echo esc_html($event_info['start_date']); ?> ~ <?php echo esc_html($event_info['end_date']); ?></p>
                        <p class="event__comment">時間:<?php echo esc_html($event_info['start_time']); ?> ~ <?php echo esc_html($event_info['end_time']); ?></p>
                      </div>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div class="swiper-pagination swiper-pagination-black"></div>
              <a href="<?php echo do_shortcode('[home_url]'); ?>event" class="event__btn topLink show--sp">一覧へ</a>
            </div>
          </div>
        </div>
      </section>
    <?php endif;
  endif;
  wp_reset_postdata(); ?>

<!-- ===============================================================================================
70thバナー
================================================================================================ -->

  <!--  -->
  <div class="banner banner70">
    <div class="inner">
      <a class="tochi present-pc" href="https://ietochi-kuki.com/1331/" target="_blank">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70th.png" alt="">
      </a>
      <a class="tochi present-sp" href="https://ietochi-kuki.com/1331/" target="_blank">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70thSp.png" alt="">
      </a>
    </div>
  </div>


<!-- ===============================================================================================
case swipper設定はfooter.phpに記載
================================================================================================ -->

<section class="tcase">
  <div class="tcase__inner">
    <?php
      $perPage = 10;
      $paged = get_query_var('paged');
      $args = array(
        'posts_per_page' => $perPage,
        'post_type' => 'case',
        'paged' => $paged,
        // 'orderby' => 'meta_value',
        'orderby' => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
        'meta_key' => 'case-isHot'//カスタムフィールドの値を基準に並べ替え
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) : 
    ?>
      
    <div class="swiper mySwiper">
      <!-- swipper設定 -->
      
      <!-- <div class=""> -->
        <ul class="swiper-wrapper">
          <?php while ($my_query->have_posts()) : $my_query->the_post();
          $name = get_the_title(); //名称
          $cat = get_field('case-cat')->name; //カテゴリ名称
          //画像
          $img_id1 = get_field('pic1');
          $img_url1 = wp_get_attachment_image_src($img_id1, 'large')[0];
          $industry = get_field('case-industry'); //業種
          $catch = get_field('case-catch');//きゃっち
          $hot = get_field('case-isHot'); //HOT
          ?>
            <li class="swiper-slide">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                <div class="caseList__img"><img width="300" data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name ?>"></div>
                <!-- /caseList__img -->
                <div class="caseList__body">
                  <h3 class="caseList__subTtl">
                    <span class="_below"><?php echo $name ?></span><!-- /_below -->
                  </h3><!-- /caseList__subTtl -->
                  <p class="caseList__desc"><?php echo trimString($catch, 30); ?></p>
                  <!-- /caseList__desc -->
                </div><!-- /caseList__body -->
              </a>
            </li><!-- /caseList__item -->
            <?php endwhile; ?>
          </ul><!-- /caseList__list -->
          <div class="swiper-pagination swiper-pagination-black"></div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      <!-- </div> -->
    </div>
  </div>
</section>

<!-- ===============================================================================================
news
================================================================================================ -->
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
    <section class="news">
      <div class="inner news__inner">
        <div class="news__box">
          <div class="news__left">
            <h2 class="news__ttl ttl ttl--right">NEWS</h2><!-- /news__ttl -->
            <!-- ★pc 用ボタン表示 -->
            <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="news__btn topLink show--pc">view more</a><!-- /news__btn -->
          </div><!-- /news__left -->
          <div class="news__right">
            <ul class="news__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="news__item"><a href="<?php echo esc_url(get_permalink()); ?>">
                    <div class="news__info">
                      <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                      <span class="news__cat">News</span><!-- /news__cat -->
                    </div><!-- /news__info -->
                    <h3 class="news__subTtl"><?php echo trimString(get_the_title(), 50); ?></h3><!-- /news__subTtl -->
                  </a></li><!-- /news__item -->
              <?php endwhile; ?>
            </ul><!-- /news__list -->
            <!-- ★sp 用ボタン表示 -->
            <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="news__btn topLink show--sp">view more</a><!-- /news__btn -->
          </div><!-- /news__right -->
        </div><!-- /news__box -->
      </div><!-- /inner news__inner -->
    </section><!-- /news -->
  <?php endif;
  wp_reset_postdata(); ?>

<!-- ===============================================================================================
us
================================================================================================ -->
  <section class="us">
    <div class="inner us__inner">
      <div class="us__wrap">
        <h2 class="us__ttl ttl ttl--left wow fadeInUp">いえとち本舗とは</h2><!-- /us__ttl -->
        <div class="us__box">
          <h3 class="us__subTtl">お手頃価格だけではない</h3><!-- /us__subTtl -->
          <p class="us__txt">住みたい場所をみつけること<br>高品質な家を選ぶ事こと<br>経済的なメリットをつくること<br>まとめて考えることが暮らしの豊かさをつくる近道です。</p>
          <!-- /us__txt -->
          <!-- ★pc tab用ボタン表示 -->
          <a href="<?php echo do_shortcode('[home_url]'); ?>about" class="us__btn topLink show--adjustTab">view more</a><!-- /us__btn topLink -->
        </div><!-- /us__box -->
        <!-- ★sp 用ボタン表示 -->
        <a href="<?php echo do_shortcode('[home_url]'); ?>about" class="us__btn topLink show--adjustSp">view more</a><!-- /us__btn topLink -->
      </div><!-- /us__wrap -->
    </div><!-- /inner us__inner -->
  </section><!-- /us -->

<!-- ===============================================================================================
product
================================================================================================ -->

<!-- ===============================================================================================
contents
================================================================================================ -->
  <section class="contents">
    <div class="inner contents__inner">
      <h2 class="contents__ttl ttl ttl--left">CONTENTS</h2><!-- /contents__ttl -->
      <ul class="contents__list">
        <li class="contents__item contents__item--full contents__item--interview wow fadeInUp"><a href="<?php echo do_shortcode('[home_url]'); ?>column" target="_blank">
            <div class="contents__box column">
              <h3 class="contents__subTtl1">
                <span class="_upper">COLUMN</span><!-- /_upper -->
                <span class="_below"><span class="_lg">家づくりお役立ち情報</span></span><!-- /_below -->
              </h3><!-- /contents__subTtl1 -->
            </div><!-- /contents__box -->
          </a></li><!-- /contents__item -->
        <li class="contents__item contents__item--half contents__item--agency wow fadeInUp"><a href="https://page.line.me/060hsjgx?openQrModal=true" target="_blank">
            <div class="contents__box line">
              <h3 class="contents__subTtl2">
                <span class="_upper">LINE</span><!-- /_upper -->
                <span class="_below">友達登録<i class="fas fa-external-link-alt"></i></span><!-- /_below -->
              </h3><!-- /contents__subTtl1 -->
            </div><!-- /contents__box -->
          </a></li><!-- /contents__item -->
        <li class="contents__item contents__item--half contents__item--contact wow fadeInUp"><a href="https://www.instagram.com/ietochi_kuki/" target="_blank">
            <div class="contents__box instagram">
              <h3 class="contents__subTtl2">
                <span class="_upper">INSTAGRAM</span><!-- /_upper -->
                <span class="_below">インスタグラム<i class="fas fa-external-link-alt"></i></span><!-- /_below -->
              </h3><!-- /contents__subTtl1 -->
            </div><!-- /contents__box -->
          </a></li><!-- /contents__item -->
      </ul><!-- /contents__list -->
    </div><!-- /inner contents -->
  </section><!-- /contents -->

</div><!-- /top -->

<?php get_footer(); ?>
