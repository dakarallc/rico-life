<?php get_header(); ?>

<div class="page notFound-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">ページが見つかりません</span><!-- /_upper -->
        <span class="_below">PAGE NOT FOUND</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
notFound
================================================================================================ -->

  <section class="notFound wow fadeInUp">
    <div class="inner thank__inner">
      <h2 class="notFound__ttl">お探しのページは<br class="show--sp">見つかりませんでした。</h2><!-- /notFound__ttl -->
      <p class="notFound__txt">大変申し訳ありません。<br>お探しのページは見つかりませんでした。<br>ご指定のページは削除されたか、<br class="show--sp">移動した可能性がございます。</p><!-- /notFound__txt -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>" class="notFound__btn wow fadeInUp">TOPに戻る</a><!-- /notFound__btn -->
    </div><!-- /inner thank__inner -->
  </section><!-- /notFound -->
</div><!-- /page  -->

<?php get_footer(); ?>