<?php
/*
Template Name: 代理店募集
*/
?>
<?php get_header(); ?>

<div class="page agency-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">お問い合わせ</span><!-- /_upper -->
        <span class="_below">Contact</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>


<!-- ===============================================================================================
contact
================================================================================================ -->
  <div class="contact wow fadeInUp">
    <div class="inner contact__inner">
      <h2 class="contact__ttl">資料請求・お問い合わせフォーム</h2><!-- /contact__ttl -->
      <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。</p><!-- /contact__desc -->

      <?php echo do_shortcode('[mwform_formkey key="35"]'); ?>

    </div>
  </div>
</div><!-- /page -->

<?php get_footer(); ?>
