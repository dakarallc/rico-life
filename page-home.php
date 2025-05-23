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

	<!-- abou	 -->
	<section class="about">
		<div class="about__logo">
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo-black.svg" alt="ロゴ">
		</div>
		<p>コスパで創造する、<br class="show--sp">40年間の居住費が<br class="show--sp">いちばん安い家。</p>
		<div class="about__decoration">
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/round-decoration.svg" alt="">
		</div>
	</section>
 

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
