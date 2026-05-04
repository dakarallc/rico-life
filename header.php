<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPGNXZP3');</script>
    <!-- End Google Tag Manager -->
	
	<!-- Meta Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1111104016733299');
		fbq('track', 'PageView');
		</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1111104016733299&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.8/swiper-bundle.min.js"></script>
  <script>
  (function(d) {
    var config = {
      kitId: 'eze4cck',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  <link rel="stylesheet" href="./assets/css/uikit.min.css">
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" /> -->
  <title><?php echo wp_get_document_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPGNXZP3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php if (is_home() || is_front_page()): ?>
  <div class="loading" id="js-loading">
    <div class="loading__inner">
      <img src="<?php echo rico_theme_url(); ?>/assets/img/common/logo-black.svg" alt="rico life" class="loading__logo">
    </div>
  </div>
  <?php endif; ?>
  <div class="wrapper">
<!-- ===============================================================================================
  header
================================================================================================ -->
    <header class="header <?php if (is_home() || is_front_page()) {
    	echo "_top";
    } else {
    	echo "_black _whiteBg";
    } ?>">
      <div class="header__inner inner">
      <?php if (is_home() || is_front_page()): ?>
        <h1 class="header__logo" data-logo="white"><a href="<?php echo rico_home_url(); ?>"><img src="<?php echo rico_theme_url(); ?>/assets/img/common/logo.svg" alt="rico life"></a></h1>
      <?php else: ?>
        <div class="header__logo" data-logo="black"><a href="<?php echo rico_home_url(); ?>"><img src="<?php echo rico_theme_url(); ?>/assets/img/common/logo-black.svg" alt="rico life"></a></div>
      <?php endif; ?>
        <!-- /header__logo -->
        <!-- PC用メニュー -->
        <div class="header__contents header__contents--pc">
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a href="<?php echo rico_home_url("/event"); ?>">
                  <i class="fa-solid fa-calendar-days fa-lg"></i>
                  <p class="_below">イベント</p>
                </a>
              </li>
              <li class="header__item">
                <a href="<?php echo rico_home_url("/case"); ?>">
									<i class="fa-solid fa-image fa-lg"></i>
                  <p class="_below">施工事例</p>
                </a>
              </li>
              <li class="header__item">
                <a href="<?php echo rico_home_url(); ?>request" >
								<i class="fa-solid fa-book-open fa-lg"></i>
                  <p class="_below">お問い合わせ</p>
                </a>
              </li>
              <li class="header__item">
                <a href="<?php echo rico_home_url(); ?>contact">
									<i class="fa-solid fa-house fa-lg"></i>
                  <p class="_below">来場予約</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- SP用メニュー -->
        <div class="spMenu" id="js-spMenu">
          <div class="spMenu__body">
            <h2 class="spMenu__title">MENU<span>メニュー</span></h2>

            <nav class="spMenu__nav">
              <ul class="spMenu__list">
                <li><a href="<?php echo rico_home_url(); ?>">TOP</a></li>
                <li><a href="<?php echo rico_home_url("/concept"); ?>">コンセプト</a></li>
                <li><a href="<?php echo rico_home_url("/case"); ?>">施工事例</a></li>
                <li><a href="<?php echo rico_home_url("/event"); ?>">イベント情報</a></li>
                <li class="spMenu__hasChild">
                  <a href="<?php echo rico_home_url("/standard-spec"); ?>">標準仕様</a>
                  <ul class="spMenu__subList">
                    <li><a href="<?php echo rico_home_url("/standard-spec/home-appliances"); ?>">住宅設備</a></li>
                    <li><a href="<?php echo rico_home_url("/standard-spec/performance"); ?>">住宅性能</a></li>
                    <li><a href="<?php echo rico_home_url("/standard-spec/interior"); ?>">内装建材</a></li>
                    <li><a href="<?php echo rico_home_url("/standard-spec/structure"); ?>">建物構造</a></li>
                    <li><a href="<?php echo rico_home_url("/storage-battery"); ?>">ソーラー＆蓄電池</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo rico_home_url("/staff"); ?>">スタッフ紹介</a></li>
                <li><a href="<?php echo rico_home_url("/company"); ?>">会社概要</a></li>
                <li><a href="<?php echo rico_home_url("/news"); ?>">ニュース</a></li>
              </ul>
            </nav>

            <div class="spMenu__contact">
              <p class="spMenu__contactLabel">お電話でのお問合せはこちら</p>
              <a href="tel:0480-22-6666" class="spMenu__tel">
                <i class="fas fa-phone-alt"></i>0480-22-6666
              </a>
              <p class="spMenu__company"><i class="fas fa-building"></i>株式会社カクダイホーム</p>
              <p class="spMenu__hours"><i class="far fa-clock"></i>10:00〜18:00 (休：水曜日・年末年始)</p>
            </div>
          </div>

          <div class="spMenu__footer">
            <a href="<?php echo rico_home_url("/event"); ?>" class="spMenu__footerItem">
              <i class="fa-solid fa-calendar-days"></i>
              <span>イベント</span>
            </a>
            <a href="<?php echo rico_home_url("/case"); ?>" class="spMenu__footerItem">
              <i class="fa-solid fa-image"></i>
              <span>施工事例</span>
            </a>
            <a href="<?php echo rico_home_url(); ?>request" class="spMenu__footerItem">
              <i class="fas fa-book-open"></i>
              <span>資料請求</span>
            </a>
            <a href="<?php echo rico_home_url(); ?>contact" class="spMenu__footerItem">
              <i class="fas fa-calendar-alt"></i>
              <span>来場予約</span>
            </a>
          </div>
        </div>

				<div class="toggle__line">
					<div class="toggle" id="js-toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
					menu
				</div>
      </div><!-- /header__inner -->
    </header><!-- /header -->
    <div class="overlayer" id="js-overlayer"></div><!-- /overlay -->
