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
          </ul><!-- /case__list -->
          <div class="swiper-pagination swiper-pagination-black"></div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      <!-- </div> -->
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
				'posts_per_page' => 5, // 複数件取得してスライド可能に
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
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">VOICE
				<span>お客様インタビュー</span>
			</h2>
		</div>
	</section>

	<!-- ABOUT -->
	<section class="companyIntroduction">
		<div class="inner">
			<h2 class="section-ttl">ABOUT
				<span>会社紹介</span>
			</h2>
		</div>
	</section>

	<!-- REQUEST -->
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">REQUEST
				<span>資料請求</span>
			</h2>
		</div>
	</section>

	<!-- CONTACT -->
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">CONTACT
				<span>来場予約</span>
			</h2>
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
	<section class="concept">
		<div class="inner">
			<h2 class="section-ttl">NEWS
				<span>お知らせ</span>
			</h2>
		</div>
	</section>

	<!-- Instagram -->
	<section class="concept">
		instagram
	</section>

	<!-- sdgs -->
	<section class="concept">
		sdgs
	</section>

	<!-- 70th -->
	<section class="concept">
		70th
	</section>
3333

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
          $floor_space = get_field('floor-space');
          ?>
            <li class="swiper-slide">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                <div class="case__img"><img width="300" data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name ?>"></div>
                <!-- /case__img -->
                <div class="case__body">
                  <h3 class="case__subTtl">
                    <span class="_below"><?php echo $name ?></span><!-- /_below -->
                  </h3><!-- /case__subTtl -->
                  <p class="case__desc"><?php echo trimString($catch, 30); ?></p>
                  <!-- /case__desc -->
                  <div class="case__info">
                    <?php if ($floor_space): ?>
                    <p class="case__floor">延床面積：<?php echo esc_html($floor_space); ?></p>
                    <?php endif; ?>
                    <?php $place = get_field('place'); if ($place): ?>
                    <p class="case__place">建築場所：<?php echo esc_html($place); ?></p>
                    <?php endif; ?>
                  </div>
                </div><!-- /case__body -->
              </a>
            </li><!-- /case__item -->
            <?php endwhile; ?>
          </ul><!-- /case__list -->
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
