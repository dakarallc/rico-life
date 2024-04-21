<?php
/*
Template Name: 新着イベント・お知らせアーカイブ
*/
?>
<?php get_header(); ?>

<div class="page news-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">新着イベント</span><!-- /_upper -->
        <span class="_below">お知らせ</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
news
================================================================================================ -->
  <section class="news">
    <div class="inner news__inner">
      <?php
      $perPage = get_option('posts_per_page'); //管理画面表示設定で設定した投稿表示数取得
      $paged = get_query_var('paged');
      $args = array(
        'posts_per_page' => $perPage,
        'paged' => $paged,
        'post_type' => 'post',
        'post_status' => 'publish'
      );

      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) : ?>
        <ul class="news__list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); 
          $cat = get_the_category();
          $cat_name = $cat[0]->cat_name; // カテゴリー名
          ?>
            <li class="news__item wow fadeInUp"><a href="<?php echo esc_url(get_permalink()); ?>">
                <div class="news__info">
                  <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                  <span class="news__cat"><?php echo $cat_name?></span><!-- /news__cat -->
                </div><!-- /news__info -->
                <h2 class="news__subTtl"><?php echo trimString(get_the_title(), 60); ?></h2><!-- /news__subTtl -->
              </a></li><!-- /news__item -->
          <?php endwhile; ?>
        </ul><!-- /news__list -->
      <?php else : ?>
        <p>現在、記事はございません。少々お待ちください。</p>
      <?php endif;
      wp_reset_postdata(); ?>

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
        'total' => $the_query->max_num_pages,
      );
      if (paginate_links(($page_arg))) : //ページが1ページ以上あれば以下を表示
      ?>
        <!-- pagination -->
        <div class="pagination">
          <?php
          echo paginate_links($page_arg);
          ?>
        </div><!-- /pagination -->
      <?php endif; ?>

    </div><!-- /inner news__inner -->
  </section><!-- /news -->

</div><!-- /page news-page -->

<?php get_footer(); ?>
