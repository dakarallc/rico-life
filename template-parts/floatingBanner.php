<!-- ===============================================================================================
  floatingBanner
================================================================================================ -->
<div class="floating">
  <div class="floating__inner">
    <div class="floating__item">
      <a href="<?php echo rico_home_url("/event"); ?>">
        <i class="fa-regular fa-calendar fa-xl"></i>
        <p class="floating__text">イベント</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url("/case"); ?>">
        <i class="fa-regular fa-image fa-xl"></i>
        <p class="floating__text">施工事例</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url(); ?>request" onClick="ga('send', 'event', 'request', 'tap','reservation')">
        <i class="fa-regular fa-envelope fa-xl"></i>
        <p class="floating__text">お問い合わせ</p>
      </a>
    </div>
    <div class="floating__item">
      <a href="<?php echo rico_home_url(); ?>contact" onClick="ga('send', 'event', 'raizyou', 'tap','reservation')">
        <i class="fa-regular fa-calendar-check fa-xl"></i>
        <p class="floating__text">来場予約</p>
      </a>
    </div>
  </div>
</div>
