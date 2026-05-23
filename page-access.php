<?php
/*
Template Name: アクセス・会社情報
*/
?>
<?php get_header(); ?>

<div class="page company-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">会社情報</span><!-- /_upper -->
        <span class="_below">Over view</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part("template-parts/breadcrumb"); ?>

<!-- ===============================================================================================
company
================================================================================================ -->
  <section class="company">
    <div class="inner company_inner">


<!-- ===============================================================================================
summary
================================================================================================ -->
      <div class="summary">
        <h2 class="summary__ttl wow fadeInUp">会社概要</h2><!-- /summary__ttl -->

        <div class="summary__list">
          <dl class="summary__item wow fadeInUp">
            <dt>会社名</dt>
            <dd>株式会社カクダイホーム</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>代表名</dt>
            <dd>蓮実 久司</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>所在地</dt>
            <dd>〒346-0003<br>埼玉県久喜市久喜中央4-9-49</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>電話</dt>
            <dd><a href="tel:0480226666">0480-22-6666</a></dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>FAX</dt>
            <dd>0480-21-6662</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>従業員数</dt>
            <dd>13名</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>設立</dt>
            <dd>平成17年7月26日</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>資本金</dt>
            <dd>45,000,000円</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>許可・資格</dt>
            <dd>宅地建物取引業：埼玉県知事(3)20585号<br>
            建築工事業・土木工事業：埼玉県知事許可(特-22)64230号<br>
            一級建築士事務所：埼玉県知事登録(1)第11873号<br>
            （財）住宅保証機構加盟
            </dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>営業時間</dt>
            <dd>10:00〜18:00（休業日：毎週水曜・年末年始）</dd>
          </dl><!-- /summary__item -->
          <dl class="summary__item wow fadeInUp">
            <dt>取引金融機関</dt>
            <dd>武蔵野銀行 / 埼玉縣信用金庫</dd>
          </dl><!-- /summary__item -->
        </div><!-- /summary__list -->
      </div><!-- /summary -->

<!-- ===============================================================================================
access
================================================================================================ -->
      <div class="access wow fadeInUp">
        <h2 class="summary__ttl">アクセス</h2>
        <div class="access__info">
          <p class="access__name">Rico Life. 久喜店<span class="access__brand">by カクダイホーム</span></p>
          <p class="access__address"><i class="fas fa-map-marker-alt"></i> 〒346-0003 埼玉県久喜市久喜中央4丁目9-49</p>
          <p class="access__tel"><i class="fas fa-phone-alt"></i> <a href="tel:0480226666">0480-22-6666</a></p>
          <p class="access__hours"><i class="far fa-clock"></i> 10:00〜18:00（休業日：毎週水曜・年末年始）</p>
        </div>
        <div class="access__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.910333091669!2d139.67362119999999!3d36.0712911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018c9cb3452c227%3A0x5dd849885a695853!2zUmljbyBMaWZlLiDkuYXllpzlupc!5e0!3m2!1sja!2sjp!4v1779516150288!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div><!-- /inner company_inner -->
  </section>
</div><!-- /page  -->
<?php get_footer(); ?>
