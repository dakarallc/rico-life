<!-- ===============================================================================================
  floatingBanner
================================================================================================ -->
<div class="floating">
  <div class="floating__inner">
    <div class="floating__item">
      <a href="https://www.youtube.com/@ricolife-66" target="_blank">
        <i class="fab fa-youtube fa-xl"></i>
        <p class="floating__text">YouTube</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="https://www.instagram.com/ricolife_kuki/" target="_blank">
        <i class="fa-brands fa-instagram fa-xl"></i>
        <p class="floating__text">Instagram</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo do_shortcode(
      	"[home_url]",
      ); ?>request" onClick="ga('send', 'event', 'request', 'tap','reservation')">
        <i class="fa-solid fa-book-open fa-xl"></i>
        <p class="floating__text">お問い合わせ</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo do_shortcode(
      	"[home_url]",
      ); ?>contact" onClick="ga('send', 'event', 'raizyou', 'tap','reservation')">
        <i class="fa-solid fa-house fa-xl"></i>
        <p class="floating__text">来場予約</p>
      </a>
    </div>
  </div>
</div>
