<?php get_header(); 

$eventPic = get_field('event-pic');//imgUrl
$madoriImg1 = get_field('madori1');//imgUrl
$madoriImg2 = get_field('madori2');//imgUrl
$comment = get_field('comment'); //コメント
$schedule = get_field('schedule'); //日時
$time = get_field('time'); //開催時間
$address = get_field('address'); //住所
$reserve = get_field('reserve'); //予約方法

?>

<div class="page news-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
<?php if ( in_category('event') ) : ?>
  <div class="pageHeadEvent">
    <h1 class="pageHeadEvent__ttl">
      <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/eventHeader.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/eventHeader.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/eventHeader.svg" alt="完成入居前見学会" data-eio="l"></noscript>
    </h1><!-- /pageHead__ttl -->
  </div><!-- /pageHead -->
<?php else : ?>
<div class="pageHead">
  <div class="pageHead__contents">
    <h1 class="pageHead__ttl">
      <?php if ( in_category('staff') ) : ?>
        <span class="_upper">スタッフ</span><!-- /_upper -->
        <span class="_below">STAFF INTERVIEW</span><!-- /_below -->

      <?php else: ?>
        <span class="_upper">お知らせ</span><!-- /_upper -->
        <span class="_below">INFORMATION</span><!-- /_below -->
        <?php endif; ?>
    </h1><!-- /pageHead__ttl -->
  </div><!-- /pageHead__contents -->
</div><!-- /pageHead -->
<?php endif ; ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
post
================================================================================================ -->
<?php
if ( in_category('event') ) : 
?>
  <section class="post wow fadeInUp">
    <div class="inner post__inner">
      <h2 class="post__eventTtl"><?php the_title(); ?></h2><!-- /post__ttl -->
      <div class="post__contents">
        <div class="caseItem__main wow fadeInUp">
          <div class="caseItem__img1"><img data-js-ofi src="<?php echo $eventPic ?>" alt="<?php echo $name  ?>"></div><!-- /caseItem__img1 -->
          <div class="mainContents">
            <div class="list">
              <dl>
                <dt>日程</dt>
                <dd><?php echo $schedule; ?><br><span>※毎日開催。水曜日は定休日のため予約不可。</span></dd>
              </dl>
              <dl>
                <dt>時間</dt>
                <dd><?php echo $time; ?></dd>
              </dl>
              <dl>
                <dt>住所</dt>
                <dd><?php echo $address; ?><br><span>※個人宅のためご予約頂いた方のみお伝えしています。</span></dd>
              </dl>
            </div><!-- /caseItem__list -->
          </div><!-- /caseItem__mainContents -->
        </div><!-- /caseItem__main -->
       
        <div style="text-align: center">
          <?php the_content(); ?>
        </div>
        <div>
          <div class="event-message">
            <p>安心の耐震等級"3相当"の住宅！<br />
              売電収入で助かる太陽光発電！<br />
              火の手から守る省令準耐火性能！<br />
              夏も冬も部屋を守る断熱性能！
            </p>
          </div>

          <p style="text-align: center">「いえとち」だからできるローコスト高性能住宅の<br />
          秘密は見学会で！</p>
        </div>
      </div><!-- /post__contents -->

      <!-- 70thバナー -->
      <div class="banner banner70">
        <a class="tochi present-pc" href="https://ietochi-kuki.com/1162/" target="_blank">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70th.png" alt="">
        </a>
        <a class="tochi present-sp" href="https://ietochi-kuki.com/1162/" target="_blank">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70thSp.png" alt="">
        </a>
      </div>

      <!-- CVボタン -->
      <div class="cvButtonLinkWrap">
        <a href="#contactForm" class="cvButtonLink">
          <div>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="hukidashi lazyloaded">
          </div>
          <button class="cvButtonLink__button">
          <span>ご来場予約はこちら</span>
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="arrowRight lazyloaded">
          </button>
        </a>
      </div>

      <!-- 間取り -->
      <section class="madori">
        <div class="madori__inner">
          <?php if ($madoriImg1) :  ?>
            <div class="madori__inner--img"><img data-js-ofi src="<?php echo $madoriImg1 ?>" alt="<?php echo $name  ?>"></div><!-- /caseItem__img1 -->
          <?php endif; ?>
  
          <?php if ($madoriImg2)  :  ?>
            <div class="madori__inner--img"><img data-js-ofi src="<?php echo $madoriImg2 ?>" alt="<?php echo $name  ?>"></div><!-- /caseItem__img1 -->
          <?php endif; ?>
        </div>
        <p class="madori__comment"><?php echo $comment; ?></p>
      </section>

      <!-- CVボタン -->
      <?php if ($madoriImg1 || $madoriImg2) :  ?>
        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="hukidashi lazyloaded">
            </div>
            <button class="cvButtonLink__button">
            <span>ご来場予約はこちら</span>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="arrowRight lazyloaded">
            </button>
          </a>
        </div>
      <?php endif; ?>
      
      <!-- いえとち本舗の家づくり -->
      <div class="homeMadeWrap">
        <h2 class="homeMade__ttl  wow fadeInUp"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/logo.png"  alt="いえとち本舗" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/logo.png" class="logo lazyloaded">の家づくり</h2><!-- /homeMade__ttl -->
        <section class="homeMade">
          <div class="homeMade__inner">
            <div class="homeMade__wrap content-left homeMade1">
              <div class="homeMade__box box">
                <p class="number">01</p>
                <h3 class="homeMade__subTtl">安心の標準装備</h3><!-- /homeMade__subTtl -->
                <p class="homeMade__txt">太陽光発電と蓄電池がセットで標準装備！上がり続ける電気代を太陽光発電が軽減！</p>
                <!-- /homeMade__txt -->
            </div><!-- /homeMade__wrap -->
          </div><!-- /inner homeMade__inner -->

          <div class="homeMade__inner" >
            <div class="homeMade__wrap content-right homeMade2">
              <div class="homeMade__box box">
                <p class="number">02</p>
                <h3 class="homeMade__subTtl">太陽光とセットで固定費を下げる！</h3><!-- /homeMade__subTtl -->
                <p class="homeMade__txt">オール電化標準対応<br>・IHコンロ<br>・エコキュート etc</p>
                <!-- /homeMade__txt -->
            </div><!-- /homeMade__wrap -->
          </div><!-- /inner homeMade__inner -->

          <div class="homeMade__inner">
            <div class="homeMade__wrap content-left homeMade3">
              <div class="homeMade__box box">
                <p class="number">03</p>
                <h3 class="homeMade__subTtl">地震対策も万全！</h3><!-- /homeMade__subTtl -->
                <p class="homeMade__txt">ベタ基礎・金物工法を採用<br>耐震等級３相当で地震対策も万全！</p>
                <!-- /homeMade__txt -->
            </div><!-- /homeMade__wrap -->
          </div><!-- /inner homeMade__inner -->

          <div class="homeMade__inner" >
            <div class="homeMade__wrap content-right homeMade4">
              <div class="homeMade__box box">
                <p class="number">04</p>
                <h3 class="homeMade__subTtl">吹付け断熱を標準装備！</h3><!-- /homeMade__subTtl -->
                <p class="homeMade__txt">冬暖かく、夏涼しい。<br>２０３０年基準の断熱等級５対応！</p>
                <!-- /homeMade__txt -->
            </div><!-- /homeMade__wrap -->
          </div><!-- /inner homeMade__inner -->
          <!-- CVボタン -->
          <div class="cvButtonLinkWrap">
            <a href="#contactForm" class="cvButtonLink">
              <div>
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="hukidashi lazyloaded">
              </div>
              <button class="cvButtonLink__button">
              <span>ご来場予約はこちら</span>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="arrowRight lazyloaded">
              </button>
            </a>
          </div>
        </section><!-- /us -->
      </div>

      <!-- 豊富な規格プラン -->
      <section class="eventPlan">
        <h2 class="eventPlan__ttl  wow fadeInUp">豊富な規格プラン</h2><!-- /homeMade__ttl -->
        <div class="eventPlan__wrap">
          <div class="eventPlan__box">
            <p class="number">01 <span>平屋住宅</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan1.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/plan1.png" class="eventPlanImg lazyloaded">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,398<span>万円〜</span></h3><!-- /homeMade__subTtl -->
            </div>
          </div><!-- /inner homeMade__inner -->

          <div class="eventPlan__box">
            <p class="number">02 <span>コンセプト平屋</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan2.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/plan1.png" class="eventPlanImg lazyloaded">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,648<span>万円〜</span></h3><!-- /homeMade__subTtl -->
            </div>
          </div><!-- /inner homeMade__inner -->

          <div class="eventPlan__box">
            <p class="number">03 <span>2階建て</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan3.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/plan1.png" class="eventPlanImg lazyloaded">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,398<span>万円〜</span></h3><!-- /homeMade__subTtl -->
            </div>
          </div><!-- /inner homeMade__inner -->

          <div class="eventPlan__box">
            <p class="number">04 <span>大型(40坪以上)２階建て</span></p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/plan4.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/plan1.png" class="eventPlanImg lazyloaded">
            <div class="subTtlWrap">
              <h3 class="eventPlan__subTtl">1,748<span>万円〜</span></h3><!-- /homeMade__subTtl -->
            </div>
          </div><!-- /inner homeMade__inner -->
        </div>
        <p>※上記プランに表示されている価格は全て税抜価格です</p>

        
        <!-- CVボタン -->
        <div class="cvButtonLinkWrap">
          <a href="#contactForm" class="cvButtonLink">
            <div>
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="planImg lazyloaded">
            </div>
            <button class="cvButtonLink__button">
            <span>ご来場予約はこちら</span>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="arrowRight lazyloaded">
            </button>
          </a>
        </div>
      </section><!-- /eventPlan -->

      <!-- 住宅ローン -->
      <section class="housingLoan">
        <div class="housingLoan__img">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/housingLoan.png"  alt="住宅ローン" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/housingLoan.png" class="eventPlanImg lazyloaded">
        </div>
        <div class="housingLoan__contents">
          <p class="free">無料相談・無料審査大歓迎！</p>
          <div class="simulationWrap"> 
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/simulation.svg"  alt="住宅ローン" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/simulation.svg" class="simulation lazyloaded">
          </div>
          <div class="listWrap">
            <ul class="housingLoan__list">
              <li>
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/check.svg"  alt="チェック" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/check.svg" class="lazyloaded">
                住宅ローンお支払いシミュレーション
              </li>
              <li>
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/check.svg"  alt="チェック" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/check.svg" class="lazyloaded">
                土地・建物の総額資金計画と住宅ローンのシミュレーション</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ===============================================================================================
  bannerArea
================================================================================================ -->
      <div class="banner">
        <a class="tochi present-pc" href="https://ietochi-kuki.com/1162/" target="_blank">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70th.png" alt="">
        </a>
        <a class="tochi present-sp" href="https://ietochi-kuki.com/1162/" target="_blank">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/70thSp.png" alt="">
        </a>
      </div>

      <!-- CVボタン -->
      <div class="cvButtonLinkWrap">
        <a href="#contactForm" class="cvButtonLink">
          <div>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/kantan.svg"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="hukidashi lazyloaded">
          </div>
          <button class="cvButtonLink__button">
          <span>ご来場予約はこちら</span>
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/arrowRight.png"  alt="完成入居前見学会" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/arrowRight.png" class="arrowRight lazyloaded">
          </button>
        </a>
      </div>

      <!-- 土地探し -->
      <section class="searchLand">
        <h2 class="searchLand__ttl  wow fadeInUp">土地探しもお任せ！</h2><!-- /homeMade__ttl -->
        <p>創業７０年を迎えるカクダイグループでは<br>
          宅建士が在籍する不動産部があるため<br>
          土地と建物をワンストップでご提案可能！</p>
        <div class="searchLand__img">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/event/searchLand.png"  alt="住宅ローン" data-src="<?php echo do_shortcode('[theme_url]'); ?>/img/event/searchLand.png" class=" lazyloaded">
        </div>
        
      </section>

      <!-- フォーム -->
      <div class="contact wow fadeInUp" id="contactForm">
        <div class="inner contact__inner">
          <h2 class="contact__ttl">来場予約フォーム</h2>
          <p class="contact__desc">下記の必要事項をご記入の上、送信下さい。追って担当者よりご連絡させていただきます。</p><!-- /contact__desc -->
          <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
        </div><!-- /inner contact__inner -->
      </div><!-- /contact -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
    </div><!-- /inner post__inner -->
  </section><!-- /post -->
  <?php elseif( in_category('end') ) : ?>
  <section class="post wow fadeInUp">
    <div class="inner post__inner">
      <h2 class="post__ttl"><?php the_title(); ?></h2><!-- /post__ttl -->
      <time class="post__time" datetime="<?php the_time('c'); ?>">※このイベントは終了しています。</time><!-- /post__time -->
      <div class="post__contents">
        <p><?php echo $comment; ?></p>
        <div class="caseItem__main wow fadeInUp">
          <div class="caseItem__img1"><img data-js-ofi src="<?php echo $eventPic ?>" alt="<?php echo $name  ?>"></div><!-- /caseItem__img1 -->
          <div class="mainContents">
            <div class="list">
              <dl>
                <dt>日程</dt>
                <dd><?php echo $schedule; ?></dd>
              </dl>
              <dl>
                <dt>時間</dt>
                <dd><?php echo $time; ?></dd>
              </dl>
              <dl>
                <dt>住所</dt>
                <dd><?php echo $address; ?></dd>
                
              </dl>
            </div><!-- /caseItem__list -->
          </div><!-- /caseItem__mainContents -->
        </div><!-- /caseItem__main -->
        <div>
          <?php the_content(); ?>
        </div>
      </div><!-- /post__contents -->
      <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
    </div><!-- /inner post__inner -->
  </section><!-- /post -->
  <?php else: ?>
    <?php if ( in_category('staff') ) : ?>
      <section class="post wow fadeInUp">
        <div class="inner post__inner">
          <div class="post__contents">
            <?php the_content(); ?>
          </div><!-- /post__contents -->

          <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
        </div><!-- /inner post__inner -->
      </section><!-- /post -->
    <?php else: ?>
    <section class="post wow fadeInUp">
    <div class="inner post__inner">
      <h2 class="post__ttl"><?php the_title(); ?></h2><!-- /post__ttl -->
      <time class="post__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time><!-- /post__time -->
      <div class="post__contents">
        <?php the_content(); ?>
      </div><!-- /post__contents -->

      <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="post__btn wow fadeInUp">一覧に戻る</a><!-- /post__btn -->
    </div><!-- /inner post__inner -->
  </section><!-- /post -->
  <?php endif; ?>
  <?php endif; ?>
</div><!-- /page news-page -->

<?php get_footer(); ?>
