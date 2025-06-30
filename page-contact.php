<?php
/*
Template Name: 来場予約
*/
?>
<?php get_header(); ?>

<div class="page contact-page">

  <?php get_template_part("template-parts/breadcrumb"); ?>

<!-- ===============================================================================================
contact
================================================================================================ -->
  <div class="contact wow fadeInUp">
    <div class="inner contact__inner">
			<h2 class="contact__ttl">予約フォーム</h2>
			
      <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。追って担当者よりご連絡させていただきます。</p><!-- /contact__desc -->

      <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>

    </div><!-- /inner contact__inner -->
  </div><!-- /contact -->
</div><!-- /page -->

<?php get_footer(); ?>
