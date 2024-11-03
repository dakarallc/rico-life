<?php get_header(); ?>

<div class="page staff-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">スタッフ一覧</span><!-- /_upper -->
        <span class="_below">STAFF</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
staffList
================================================================================================ -->
  <section class="staffList">
    <div class="inner staffList__inner">
      <?php
          $args = array(
            'posts_per_page' => -1, // すべての投稿を表示
            'post_type' => 'staff',
            'orderby' => array('date' => 'DESC')
          );
          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) : ?>
      <ul class="staffList__list">
      <?php while ($my_query->have_posts()) : $my_query->the_post();
      $name = get_the_title(); //名称
      $departments = get_the_terms(get_the_ID(), 'department'); //部署
      
      // カスタムフィールドから値を取得
      $profile_image = get_field('profileImage'); //プロフィール画像
      $building_advice = get_field('home-building-advice'); //家づくりアドバイス
      $about_ietochi = get_field('about-ietochi'); //家と土地について
      
      // プロフィール画像がない場合はデフォルト画像を使用
      if(!$profile_image) {
        $profile_image = get_template_directory_uri() . '/images/default-avatar.png';
      }
      ?>
        <li class="staffList__item wow fadeInUp">
          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
            <div class="staffList__img"><img data-js-ofi src="<?php echo $profile_image; ?>" alt="<?php $name ? print $name : print '&nbsp;'; ?>"></div>
            <!-- /staffList__img -->
            <div class="staffList__body">
              <h2 class="staffList__subTtl">
                <?php if($departments): ?>
                <span class="_upper"><?php echo $departments[0]->name; ?></span><!-- /_upper -->
                <?php endif; ?>
                <span class="_below"><?php $name ? print $name : print '&nbsp;'; ?></span><!-- /_below -->
              </h2><!-- /staffList__subTtl -->
            </div><!-- /staffList__body -->
          </a>
        </li><!-- /staffList__item -->
        <?php endwhile; ?>
      </ul><!-- /staffList__list -->
      <?php else: ?>
          <p>現在、スタッフの登録はございません。</p>
      <?php endif; ?>

    </div><!-- /inner staffList__inner -->
  </section><!-- /staffList -->
</div><!-- /page -->

<?php get_footer(); ?>
