<!-- ===============================================================================================
menuLink
================================================================================================ -->
<?php get_template_part('template-parts/bannerArea'); ?>
<?php if(is_page('top')) : ?>
  <?php else: ?>
  <ul class="menuLink">
    <li class="menuLink__item menuLink__item--company"><a href="<?php echo do_shortcode('[home_url]'); ?>hiraya">はたらく平屋</a></li>
    <li class="menuLink__item menuLink__item--company"><a href="<?php echo do_shortcode('[home_url]'); ?>access">アクセス</a></li>
    <li class="menuLink__item menuLink__item--contact"><a href="<?php echo do_shortcode('[home_url]'); ?>contact">お問い合わせ</a></li>
    <li class="menuLink__item menuLink__item--case"><a href="<?php echo do_shortcode('[home_url]'); ?>case">施工事例</a></li>
    <li class="menuLink__item menuLink__item--news"><a href="<?php echo do_shortcode('[home_url]'); ?>news">新着イベント</a></li>
  </ul>
<?php endif; ?>

<!-- ===============================================================================================
footer
================================================================================================ -->
<footer class="footer">

  <!-- <div class="toTop updown" id="js-toTop2">
    <a href="https://campage.jp/ietochi-kuki/planmenyu/download">
      <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/plan-download.png" alt="">
    </a>
  </div> -->
  <!-- /toTop -->
  <div class="toTop planDownload" id="js-toTop">
    <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/triangle.svg" alt="">
    <p>TOP</p>
  </div>
  <!-- /toTop -->
  <div class="footer__contents">
    <div class="inner footer__inner">
      <div class="footer__logo"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt="ietochi honpo"></div>
      <!-- /footer__logo -->
      <p class="footer__txt">〒346-0003 <br>埼玉県久喜市久喜中央4-9-49</p><!-- /footer__txt -->
      <p class="footer__txt">TEL:<a href="tel:0480226666"> 0480-22-6666</a></p>
      <!-- /footer__txt -->
    </div><!-- /inner footer__inner -->
  </div><!-- /footer__contents -->
  <small class="footer__copyright">&copy; <?php echo date('Y');?> カクダイグループ</small><!-- /footer__copyright -->
  
</footer><!-- /footer -->
<?php get_template_part('template-parts/floatingBanner'); ?>
</div><!-- /wrapper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
      },
      speed: 300,
      pagination: {
        el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
      },
      loop: true,
      centeredSlides : true,
      slidesPerView: 1.5,
      breakpoints: {
        // 768px以上の場合
        768: {
          slidesPerView: 2.5,
        },
        // 1200px以上の場合
        1200: {
          slidesPerView: 3.5,
        }
      }
    });

    var swiper = new Swiper(".eventSwiper", {
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
      },
      speed: 300,
      pagination: {
        el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
      },
      loop: true,
      centeredSlides : true,
      slidesPerView: 1,
    });

  </script>
<?php wp_footer(); ?>
</body>
</html>
