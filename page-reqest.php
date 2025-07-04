<?php
/*
Template Name: 資料請求・お問い合わせ
*/
?>
<?php get_header(); ?>

<div class="page agency-page">


  <div class="contact wow fadeInUp">
    <div class="inner contact__inner">
			<h2 class="contact__ttl">資料請求・お問い合わせフォーム</h2>
			
      <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。</p><!-- /contact__desc -->

      <?php echo do_shortcode('[mwform_formkey key="35"]'); ?>

    </div>
  </div>
</div><!-- /page -->

<?php get_footer(); ?>
