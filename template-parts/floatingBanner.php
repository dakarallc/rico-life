<!-- ===============================================================================================
  floatingBanner
================================================================================================ -->
<div class="floating">
  <div class="floating__inner">
    <div class="floating__item">
      <a href="<?php echo rico_home_url("/event"); ?>">
        <i class="fa-solid fa-calendar-days fa-xl"></i>
        <p class="floating__text">イベント</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url("/case"); ?>">
        <i class="fa-solid fa-image fa-xl"></i>
        <p class="floating__text">施工事例</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url(); ?>request" onClick="ga('send', 'event', 'request', 'tap','reservation')">
        <i class="fa-solid fa-book-open fa-xl"></i>
        <p class="floating__text">お問い合わせ</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url(); ?>contact" onClick="ga('send', 'event', 'raizyou', 'tap','reservation')">
        <i class="fa-solid fa-house fa-xl"></i>
        <p class="floating__text">来場予約</p>
      </a>
    </div>
  </div>
</div>
