<?php
/*
Template Name: サンクスページ
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
        <span class="_upper">お問い合わせ</span><!-- /_upper -->
        <span class="_below">CONTACT</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php if (page_is_ancestor_of('contact')) : ?>
    <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
  <?php elseif (page_is_ancestor_of('request')) : ?>
    <?php echo do_shortcode('[mwform_formkey key="35"]'); ?>
  <?php endif; ?>

<!-- ===============================================================================================
thanks
================================================================================================ -->

  <section class="thanks wow fadeInUp">
    <div class="inner thank__inner">
      <h2 class="thanks__ttl">お問い合わせ<br class="show--sp">ありがとうございます</h2><!-- /thanks__ttl -->
      <p class="thanks__txt">この度はお問い合わせいただきありがとうございます。<br>ご記入いただいたメールアドレス宛に自動メールを送信させていただきました。メールが届かない場合、 正常に受付出来ていない場合がございます。その際はお手数ですが、もう一度お問い合わせ下さい。</p><!-- /thanks__txt -->
      <p class="thanks__txt">いただいた内容については、後ほど担当者よりご連絡させていただきます。今しばらくお待ちくださいますようお願い申し上げます。</p><!-- /thanks__txt -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>" class="thanks__btn wow fadeInUp">TOPに戻る</a><!-- /thanks__btn -->
    </div><!-- /inner thank__inner -->
  </section><!-- /thanks -->
</div><!-- /page  -->

<?php get_footer(); ?>
