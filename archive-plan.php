<?php get_header(); ?>

<div class="page plan-page">

  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">プラン集</span><!-- /_upper -->
        <span class="_below">PLAN</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="planFilter">
    <div class="inner">
      <?php
      // タクソノミーとそのラベルの定義
      $taxonomies = array(
        'floors' => '階数',
        'size' => '坪数',
        'budget' => '予算',
        'layout' => '間取り'
      );

      // 各タクソノミーのフィルターを表示
      foreach ($taxonomies as $tax_slug => $tax_label) :
        $terms = get_terms(array(
          'taxonomy' => $tax_slug,
          'hide_empty' => true,
        ));
        if (!empty($terms)) :
      ?>
        <div class="planFilter__group">
          <h3 class="planFilter__title"><?php echo $tax_label; ?></h3>
          <ul class="planFilter__list">
            <?php foreach ($terms as $term) : ?>
              <li class="planFilter__item">
                <button class="planFilter__btn" data-taxonomy="<?php echo $tax_slug; ?>" data-term="<?php echo $term->slug; ?>">
                  <?php echo $term->name; ?>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php 
        endif;
      endforeach; 
      ?>
    </div>
  </section>

  <section class="caseList">
    <div class="inner caseList__inner">
      <?php
          $perPage = 9;
          $paged = get_query_var('paged');
          $tax_query = array('relation' => 'AND');
          foreach ($taxonomies as $tax_slug => $tax_label) {
            if (isset($_GET[$tax_slug]) && !empty($_GET[$tax_slug])) {
              $tax_query[] = array(
                'taxonomy' => $tax_slug,
                'field' => 'slug',
                'terms' => $_GET[$tax_slug],  // 単一の値として扱う
                'operator' => 'IN'
              );
            }
          }
          $args = array(
            'posts_per_page' => $perPage,
            'post_type' => 'plan',
            'paged' => $paged,
            'orderby' => array('meta_value' => 'DESC', 'date' => 'DESC'),
            'tax_query' => $tax_query
          );
          $my_query = new WP_Query($args);


          if ($my_query->have_posts()) : ?>
      <ul class="caseList__list">
      <?php while ($my_query->have_posts()) : $my_query->the_post();
      $copywriting = get_field('copywriting'); //キャッチコピー
      $thumbnail = get_field('thumbnail');//画像
      $thumbnail_url = wp_get_attachment_image_src($thumbnail, 'large')[0];
      $record_low_price = get_field('record-low-price'); //最安値
      $madori = get_the_terms($post->ID, 'layout'); //間取り
      if($madori) {
        $madori_name = $madori[0]->name; //間取りの名前を取得
      }
			$rand_area2 = get_field('rand-area2'); //坪数

      // カテゴリー取得
      // シリーズ
      $series = get_the_terms($post->ID, 'series');
      if($series) {
        $series_name = $series[0]->name;
      }

      // 坪数
      $size = get_the_terms($post->ID, 'size');
      if($size) {
        $size_name = $size[0]->name;
      }

      // 予算
      $budget = get_the_terms($post->ID, 'budget');
      if($budget) {
        $budget_name = $budget[0]->name;
      }
      
      // 階数
      $floor = get_the_terms($post->ID, 'floors');
      if($floor) {
        $floor_name = $floor[0]->name;
      }

      // TODO:カテゴリー取得

	
      ?>
        <li class="caseList__item wow fadeInUp">
          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
            <div class="caseList__img"><img data-js-ofi src="<?php echo $thumbnail_url; ?>" alt="<?php $copywriting ? print $copywriting  : print '&nbsp;'; ?>"></div>
            <div class="caseList__body">
              <ul class="caseList__cats">
                <?php if(!empty($floor)):?>
                <li class="caseList__cat"><?php echo $floor_name; ?></li>
                <?php endif; ?>
              </ul>

              <h2 class="caseList__subTtl">
                <?php $copywriting ? print $copywriting  : print '&nbsp;'; ?>
              </h2>
							
							<div class="cardTable">
                <dl>
                  <dt>坪数</dt>
                  <dd><?php echo $rand_area2; ?>坪</dd>
                </dl>
								<dl>
									<dt>間取り</dt>
									<dd><?php echo $madori_name ?></dd>
								</dl>
								<dl>
									<dt>値段</dt>
									<dd><?php echo $record_low_price; ?><span class="small">(税抜き)</span>〜</dd>
								</dl>
							</div><!-- /planItem__list -->
              <!-- /caseList__desc -->
            </div><!-- /caseList__body -->
          </a>
        </li><!-- /caseList__item -->
        <?php endwhile; ?>
      </ul><!-- /caseList__list -->
      <?php else: ?>
          <p>該当のプランはございません。</p>
          <?php endif; ?>

<!-- ===============================================================================================
pagination
================================================================================================ -->
          <?php
          $page_arg = array(
            'end_size' => 0, //ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか
            'mid_size' => 1, //現在のページの両側にいくつの数字を表示するか。ただし現在のページは含まない
            'prev_next' => true,
            'prev_text' => '前へ',
            'next_text' => '次へ',
            'current' => max(1, $paged),
            'total' => $my_query->max_num_pages,
          );
          if (paginate_links(($page_arg))) : //ページが1ページ以上あれば以下を表示
          ?>
            <!-- pagination -->
            <div class="pagination">
              <?php
              echo paginate_links($page_arg);
              ?>
            </div><!-- /pagination -->
          <?php endif;
          ?>


<!--       <div class="caseList__box wow fadeInUp"> -->
<!--         <h2 class="caseList__boxTtl caseList__ttl">ベルエールをご利用の法人様</h2><!-- /caseList__boxTtl --> 
<!--         <ul class="caseList__logos"> -->
<!--           <li class="caseList__logo"><a href="" target="_blank" rel="noopener"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/handred-logo.svg" alt=""></a></li><!-- /caseList__logo --> 
<!--           <li class="caseList__logo"><a href="" target="_blank" rel="noopener"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt=""></a></li><!-- /caseList__logo --> 
<!--           <li class="caseList__logo"><a href="" target="_blank" rel="noopener"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt=""></a></li><!-- /caseList__logo --> 
<!--         </ul>/caseList__logos -->
<!--       </div>/caseList__box -->
    </div><!-- /inner caseList__inner -->
  </section><!-- /caseList -->
</div><!-- /page  -->

<?php get_footer(); ?>



<?php
										$live_img = get_field('live_img');
										 if (get_field('live_img')) :
										$live_img_url = wp_get_attachment_image_src($live_img, 'large')[0];
										?>
											<div class="banner__live-img" style="max-width: 100%; overflow: hidden;">
												<img src="<?php echo $live_img; ?>" alt="<?php the_title(); ?>" style="width: 100%; height: auto; object-fit: cover;">
											</div>
										<?php
										endif;?>
