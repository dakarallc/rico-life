<?php get_header(); ?>

<div class="page case-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">施工事例</span><!-- /_upper -->
        <span class="_below">CASE STUDY</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
caseList
================================================================================================ -->
  <section class="caseList">
    <div class="inner caseList__inner">
      <?php
          $perPage = 9;
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


          if ($my_query->have_posts()) : ?>
      <ul class="caseList__list">
      <?php while ($my_query->have_posts()) : $my_query->the_post();
      $name = get_the_title(); //名称
      $cat = get_field('case-cat')->name; //カテゴリ名称
      //画像
      $img_id1 = get_field('pic1');
      $img_url1 = wp_get_attachment_image_src($img_id1, 'large')[0];
      $industry = get_field('case-industry'); //業種
      $reason = get_field('case-reason'); //理由    
      $hot = get_field('case-isHot'); //HOT
			$floor_pace = get_field('floor-space'); //床面積
			$rand_area = get_field('rand-area'); //土地面積
			$completion = get_field('completion'); //竣工年
      ?>
        <li class="caseList__item wow fadeInUp">
          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
            <div class="caseList__img"><img data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php $name ? print $name  : print '&nbsp;'; ?>"></div>
            <!-- /caseList__img -->
            <div class="caseList__body">
              <ul class="caseList__cats">
                <?php if(!empty($cat)):?>
                <li class="caseList__cat"><?php echo $cat; ?></li><!-- /caseList__cat -->
                <?php endif; ?>
                <?php if($hot === "2"): ?>
                  <li class="caseList__cat">Pick up</li><!-- /caseList__cat -->
                <?php endif; ?>
              </ul><!-- /caseList__cats -->

              <h2 class="caseList__subTtl">
                <?php $name ? print $name  : print '&nbsp;'; ?>
              </h2><!-- /caseList__subTtl -->
							
							<div class="">
								<dl>
									<dt>床面積</dt>
									<dd><?php echo $floor_pace; ?></dd>
								</dl>
								<dl>
									<dt>土地面積</dt>
									<dd><?php echo $rand_area; ?></dd>
								</dl>
								<dl>
									<dt>竣工年</dt>
									<dd><?php echo $completion; ?></dd>
								</dl>
							</div><!-- /caseItem__list -->
              <!-- /caseList__desc -->
            </div><!-- /caseList__body -->
          </a>
        </li><!-- /caseList__item -->
        <?php endwhile; ?>
      </ul><!-- /caseList__list -->
      <?php else: ?>
          <p>現在、投稿はございません。少々お待ちください。</p>
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
