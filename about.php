<?php
/*
Template Name: いえとち本舗とは
*/
?>
<?php get_header(); ?>

<div class="about">
<!-- ===============================================================================================
  mv
================================================================================================ -->
  <main class="main">
    <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/kv-about.jpg" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/kv-about.jpg" class=" ls-is-cached lazyloaded">
    <noscript>
      <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/kv-about.jpg" alt="いえとち本舗の平屋" data-eio="l">
    </noscript>
  </main>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb">
      <div class="breadcrumb__contents">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述
        ?>
      </div><!-- /breadcrumb__contents -->
    </div>
  <?php endif; ?>
<!-- ===============================================================================================
about-massage
================================================================================================ -->
  <section class="about-massage">
    <div class="about-massage__inner inner">
        <div class="about-massage__inner--title">
          <h3>
            <span class="massage1">住みたい場所</span>をみつけること<br>
            <span class="massage2">高品質な家</span>を選ぶこと<br>
            <span class="massage3">経済的なメリット</span>をつくること<br>
            <span>まとめて考えることが暮らしの豊かさをつくる近道です</span>
          </h3>
        </div>    
        <div class="about-massage__inner--content">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" alt="いえとち本舗の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" class=" ls-is-cached lazyloaded">
          <noscript>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" alt="いえとち本舗の家" data-eio="l">
          </noscript>
        </div>
      </div>
  </section>

<!-- ===============================================================================================
choises
================================================================================================ -->
  <section class="choises">
    <div class="choises__inner inner">
      <div class="choises__inner--title">
        <h2 class="about-ttl">169,280通りの選択肢</h2>
      </div>
      <div class="choises__inner--content section__inner--content">
        <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" alt="選択肢" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" class=" ls-is-cached lazyloaded">
      <noscript>
        <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" alt="選択肢" data-eio="l">
      </noscript>
      <p>間取り、大きさ、屋根・外観・内観設備のカラーやデザインなど<br>
        それぞれ豊富な種類からカスタマイズすることが可能です。<br>
        簡単に自分だけのおしゃれなマイホームが完成します！</p>
      </div>
    </div>
  </section>

<!-- ===============================================================================================
point3
================================================================================================ -->
  <section class="point3">
    <div class="point3__inner inner">
      <div class="point3__inner--title">
        <h2 class="about-ttl">低価格×高品質×ZEHの家</h2>
      </div>
      <div class="point3__inner--content section__inner--content">
        <p>未来の豊かな暮らしから逆算した住む人にちょうどいい規格住宅です。<br>
        つくりたいのはただの家ではなく、建てた後の豊かなライフスタイル。<br>
        イエテラス は家族の暮らしを豊かにするベストな選択肢です。</p>
        <a href="#plan">
          <div class="box">
            <h3>低価格</h3>
            <p>今も未来もこだわり価格</p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-eio="l"></noscript>
          </div>
        </a>
        <a href="#high">
          <div  div class="box">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">高品質</font></font></h3>
            <p>豊かさから逆算した仕様</p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-eio="l"></noscript>
          </div>
        </a>
        <a href="#low">
          <div class="box">
            <h3>ZEHの家</h3>
            <p>住宅性能で快適で健康な暮らし</p>
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" class=" ls-is-cached lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/under-triangle.svg" alt="三角形" data-eio="l"></noscript>
          </div>
        </a>
      </div>
    </div>
  </section>
<!-- ===============================================================================================
plan
========================================================================================== -->
  <section class="section" id="plan">
    <div class="plan planIn">
      <input id="tab01" type="radio" name="tab_btn" checked="checked">
      <input id="tab02" type="radio" name="tab_btn">
      <div class="atab_area">
        <label class="tab01_label" for="tab01">2階建て</label>
        <label class="tab02_label" for="tab02">平屋</label>
      </div>
      <div class="plan__inner first">
        <input id="tab1" type="radio" name="tab_bt" checked="checked">
        <input id="tab2" type="radio" name="tab_bt">
        <input id="tab3" type="radio" name="tab_bt">
        <div class="btab_area">
          <label class="tab1_label" for="tab1"><span>25坪</span><p>1,398万円</p></label>
          <label class="tab2_label" for="tab2"><span>28坪</span><p>1,498万円</p></label>
          <label class="tab3_label" for="tab3"><span>32坪</span><p>1,548万円</p></label>
        </div>
        <div class="panel_area">
          <div id="panel1" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
              <div class="floor-plan madori-sp">
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>1F</p>
                  </div>
                  <p>38.76㎡<br>(11.72坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>2F</p>
                  </div>
                  <p>39.74㎡<br>(12.02坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-3.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-01png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
            </div>
            <div class="floor-plan flex">
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>1F</p>
                </div>
                <p>38.76㎡<br>(11.72坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>2F</p>
                </div>
                <p>39.74㎡<br>(12.02坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-3.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
            </div>
          </div>
          <div id="panel2" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-1.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
              <div class="floor-plan madori-sp">
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>1F</p>
                  </div>
                  <p>45.27㎡<br>(13.69坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>2F</p>
                  </div>
                  <p>46.37㎡<br>(14.02坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-01png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
            </div>
            <div class="floor-plan flex">
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>1F</p>
                </div>
                <p>45.27㎡<br>(13.69坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>2F</p>
                </div>
                <p>46.37㎡<br>(14.02坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
            </div>
          </div>

          <div id="panel3" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="32坪1,188万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-1.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/3-1.png" alt="32坪1,188万円の家" data-eio="l"></noscript>
              </div>
              <div class="floor-plan madori-sp">
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>1F</p>
                  </div>
                  <p>50.85㎡<br>(15.88坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
                <div class="floor-plan__inner">
                  <div class="floor">
                    <p>2F</p>
                  </div>
                  <p>52.17㎡<br>(15.78坪)</p>
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
                </div>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
            </div>
            <div class="floor-plan flex">
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>1F</p>
                </div>
                <p>50.85㎡<br>(15.88坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="floor-plan__inner madori-pc">
                <div class="floor">
                  <p>2F</p>
                </div>
                <p>52.17㎡<br>(15.78坪)</p>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="plan__inner second">
        <input id="tab4" type="radio" name="tab_b" checked="checked">
        <input id="tab5" type="radio" name="tab_b">
        <input id="tab6" type="radio" name="tab_b">
        <div class="btab_area">
          <label class="tab4_label" for="tab4"><span>21坪</span><p>1,398万円</p></label>
          <label class="tab5_label" for="tab5"><span>24坪</span><p>1,498万円</p></label>
          <label class="tab6_label" for="tab6"><span>27坪</span><p>1,548万円</p></label>
        </div>
        <div class="panel_area">
          <div id="panel4" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/4-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-2.png" class="lazyload madori"><noscript><img class="madori" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
            </div>
          </div>
          <div id="panel5" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/about/5-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-2.png" class="lazyload madori"><noscript><img class="madori" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" alt="25坪998万円の家" data-eio="l"></noscript>
              </div>
            </div>
          </div>

          <div id="panel6" class="tab_panel">
            <div class="flex">
              <div class="house-img">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/about/6-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-2.png" class="lazyload madori"><noscript><img class="madori-pc" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-2.png" alt="間取り1階" data-eio="l"></noscript>
              </div>
              <div class="repayment-plan">
                <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" alt="25坪998万円の家" data-eio="l"></noscript>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

<!-- ===============================================================================================
low-price
================================================================================================ -->
  <section class="low-price" id="low">
    <div class="low-price__inner">
      <div class="low-price__inner--title">
        <h2 class="about-ttl"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">低価格</font></font></h2>
        <p>今も未来もこだわり価格を実現させる規格住宅の理由</p>
      </div>
      <div class="low-price__inner--contents uk-grid">
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント1" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント1" data-eio="l"></noscript>
          <div class="content__inner">
            <h4>建設・不動産の融合</h4>
            <p>土地と建物をトータルでご提案することにより余計な中間マージンが発生しないため
              余分なコストが発生しません。
            </p>
          </div>
        </div>
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント2" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント2" data-eio="l"></noscript>
          <div class="content__inner">
          <h4>共同で購入！</h4>
          <p>いえとち本舗では全国のフランチャイズ加盟店と建材を共同購入することで、流通コストを削減しています。</p>
          </div>
        </div>
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント3" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント3" data-eio="l"></noscript>
          <div class="content__inner">
            <h4>規格の統一化</h4>
            <p>バランスの取れた住まいの規格設計を基に、高さや間取りの構造を統一。
              無駄な工程を排し規格化することで良い材料や設備を大量購入しコストダウンを実現。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ===============================================================================================
high-quality
================================================================================================ -->
  <section class="high-quality" id="high">
    <div class="high-quality__inner inner">
      <div class="high-quality__inner--title">
        <h2 class="about-ttl">豊かさから逆算した仕様</h2>
      </div>
      <div class="high-quality__inner--content">
        <p>住宅はご家族の大切な生活の基盤です。家族が「安心・快適・安全」に暮らす為に、価格は抑えつつも、品質はそのままの住まいづくりを基本として考えています。</p>
        <img class="uk-visible@s" src="<?php echo do_shortcode('[theme_url]'); ?>/images/high-quality.png" alt="高品質な家の仕様">
        <img class="uk-hidden@s" src="<?php echo do_shortcode('[theme_url]'); ?>/images/high-quality-sp.png" alt="高品質な家の仕様">
      </div>
    </div>
  </section>

<!-- ===============================================================================================
zeh
================================================================================================ -->
  <section class="zeh section " id="zeh1">
    <div class="zeh__inner inner">
      <div class="zeh__inner--title">
        <h2 class="about-ttl">ZEH基準の住宅性能で快適で健康な暮らし</h2>
      </div>
      <div class="zeh__inner--content">
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="zehモデル" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/zeh.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/zeh.png" alt="zehモデル" data-eio="l"></noscript>
        <p>自宅で発電した電気を使い、余った電気は売電する時代です。(環境にも、家計にも優しい時代)当社は、光熱費（電気代を含む）やガソリン代も0円（電気自動車の場合）、電気を買わずに住む住宅を目指し、大容量の太陽光発電を標準搭載しています。
        太陽光発電システムは自然エネルギーを利用する為、発電時にCO2を排出することなく、環境にとても優しい仕組みです。</p>
      </div>
    </div>
  </section>

<!-- ===============================================================================================
  voice
  ================================================================================================ -->
  <section class="voice section">
    <div class="voice__inner inner">
      <div class="voice__inner--title">
        <h2 class="about-ttl">お客様の声</h2>
      </div>
      <div class="voice__inner--content uk-grid">
        <div class="uk-width-1-2@s">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="お客様との打ち合わせ" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/voice.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/voice.png" alt="お客様との打ち合わせ" data-eio="l"></noscript>
        </div>
        <div class="uk-width-1-2@s">
          <p>1番の決め手は地元密着で長く営業しているからです。<br>
          このあたりに住んでいる人(埼玉県久喜市周辺)にも評判がよく、地元の会社なら建てた後のメンテナンスなどにも迅速に対応してくれるだろうと考えていました。<br>
          最初に「こんな外観と間取りで家を建てたい」と話したところ、すぐに「このくらいの建築費でできる」と回答してくれました。コストパフォーマンスが良く質も高いので、かなり早い段階で夫婦2人の意見が一致しました。また太陽光発電は勧められて採用しましたが、光熱費が思った以上の節約になっています。            </p>
        </div>
      </div>
    </div>
  </section>


</div><!-- /page belleair -->

<?php get_footer(); ?>
