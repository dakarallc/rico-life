<?php
/*
Template Name: 売り切れ
*/
?>
<?php get_header(); ?>

<div class="page contact-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">品切れ中</span><!-- /_upper -->
        <span class="_below">SOLD OUT</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php if (page_is_ancestor_of('contact')) : ?>
    <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
  <?php elseif (page_is_ancestor_of('agency')) : ?>
    <?php echo do_shortcode('[mwform_formkey key="35"]'); ?>
  <?php endif; ?>

<!-- ===============================================================================================
thanks
================================================================================================ -->

  <section class="thanks wow fadeInUp">
    <div class="inner thank__inner">
      <h2 class="thanks__ttl">品切れ中<br class="show--sp"></h2><!-- /thanks__ttl -->
      <p class="thanks__txt">CO2センサー搭載空気清浄機はAmazonで品切れです。 直営オンラインショップかお問い合わせから予約ください。</p><!-- /thanks__txt -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>" class="thanks__btn wow fadeInUp">TOPに戻る</a><!-- /thanks__btn -->
    </div><!-- /inner thank__inner -->
  </section><!-- /thanks -->
</div><!-- /page  -->

<?php get_footer(); ?>
