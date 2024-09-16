<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M2WKXB2');</script>
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.8/swiper-bundle.min.js"></script>
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
      href="//unpkg.com/swiper/swiper-bundle.min.css"
    />
  <link rel="stylesheet" href="./assets/css/uikit.min.css">
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" /> -->
  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <title><?php echo wp_get_document_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2WKXB2"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper">
<!-- ===============================================================================================
  header
================================================================================================ -->
    <header class="header <?php  if(is_home() || is_front_page()){ echo '_top';} ?>">
      <div class="header__inner inner">
      <?php  if(is_home() || is_front_page()): ?>
        <h1 class="header__logo"><a href="<?php echo do_shortcode('[home_url]'); ?>"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt="ietochi honpo"></a></h1>
      <?php else: ?>
        <div class="header__logo"><a href="<?php echo do_shortcode('[home_url]'); ?>"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt="ietochi honpo"></a></div>
      <?php endif; ?>
        <!-- /header__logo -->
        <div class="header__contents" id="js-headerContents">
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>">
                  <span class="_below"><span class="show--pc">トップ</span><span class="show--sp">TOP</span></span>
                </a></li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>about">
                  <span class="_below">いえとち本舗とは</span>
                </a></li>
							<li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>hiraya">
								<span class="_below">はたらく平屋</span>
								</a>
							</li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>case">
                  <span class="_below">施工事例</span>
                </a></li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>news">
                  <span class="_below">お知らせ</span>
                </a></li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>access">
                  <span class="_below">会社情報</span>
                </a></li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>735">
                  <span class="_below">スタッフ</span>
                </a></li>
              <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>column">
                  <span class="_below">コラム</span>
                </a></li>
            </ul>
          </nav>
          
          <a href="<?php echo do_shortcode('[home_url]'); ?>request" class="header__link blue">
            <div class="fx">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/document.svg" alt="">
              <p>資料請求</p>
            </div>
          </a>
          <a href="<?php echo do_shortcode('[home_url]'); ?>contact" class="header__link green">
            <div class="fx">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/shop.svg" alt="">
              <p>ご来店</p>
            </div>
          </a>
        </div>
        <div class="toggle" id="js-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div><!-- /header__inner -->
    </header><!-- /header -->
    <div class="overlayer" id="js-overlayer"></div><!-- /overlay -->
