<?php get_header();
$name = get_the_title(); //名称
$catch = get_field('case-catch'); //キャッチ
// $slug = get_field('sightseeing-cat')->slug; //スラッグ
//画像
$img_id1 = get_field('pic1');
$img_url1 = wp_get_attachment_image_src($img_id1, 'large')[0];
$floor_pace = get_field('floor-space'); //床面積
$rand_area = get_field('rand-area'); //土地面積
$completion = get_field('completion'); //竣工年

$img_id2 = get_field('pic2');
$img_url2 = wp_get_attachment_image_src($img_id2, 'large')[0];
$title2 = get_field('title2');
$text2 = get_field('text2');

$img_id3 = get_field('pic3');
$img_url3 = wp_get_attachment_image_src($img_id3, 'large')[0];
$title3 = get_field('title3');
$text3 = get_field('text3');

$img_id4 = get_field('pic4');
$img_url4 = wp_get_attachment_image_src($img_id4, 'large')[0];
$title4 = get_field('title4');
$text4 = get_field('text4');

$img_id5 = get_field('pic5');
$img_url5 = wp_get_attachment_image_src($img_id5, 'large')[0];
$title5 = get_field('title5');
$text5 = get_field('text5');

$img_id6 = get_field('pic6');
$img_url6 = wp_get_attachment_image_src($img_id6, 'large')[0];
$title6 = get_field('title6');
$text6 = get_field('text6');

$img_id7 = get_field('pic7');
$img_url7 = wp_get_attachment_image_src($img_id7, 'large')[0];
$title7 = get_field('title7');
$text7 = get_field('text7');

$img_id8 = get_field('pic8');
$img_url8 = wp_get_attachment_image_src($img_id8, 'large')[0];
$img_id9 = get_field('pic9');
$img_url9 = wp_get_attachment_image_src($img_id9, 'large')[0];
$img_id10 = get_field('pic10');
$img_url10 = wp_get_attachment_image_src($img_id10, 'large')[0];
$img_id11 = get_field('pic11');
$img_url11 = wp_get_attachment_image_src($img_id11, 'large')[0];

?>

<div class="page case-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">施工事例</span><!-- /_upper -->
        <span class="_below">CASE STUDY</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
caseItem
================================================================================================ -->
  <section class="caseItem">
    <div class="inner caseItem__inner">
      <h2 class="caseItem__ttl kv__ttl wow fadeInUp"><?php echo $name ?></h2><!-- /caseItem__ttl -->
      <p class="caseItem__txt wow fadeInUp"><?php echo $catch; ?></p><!-- /caseItem__txt -->

      <div class="caseItem__main wow fadeInUp">
        <div class="caseItem__img1"><img data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name  ?>"></div><!-- /caseItem__img1 -->
        <div class="caseItem__mainContents">
          <div class="caseItem__list">
            <dl>
              <dt>床面積</dt>
              <dd><?php echo $floor_pace; ?></dd>
            </dl>
            <dl>
              <dt>土地面積</dt>
              <dd><?php echo $rand_area; ?></dd>
            </dl>
            <dl>
              <dt>竣工年</dt>
              <dd><?php echo $completion; ?></dd>
            </dl>
          </div><!-- /caseItem__list -->
        </div><!-- /caseItem__mainContents -->
      </div><!-- /caseItem__main -->

      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url2; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title2; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text2; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->
      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url3; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title3; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text3; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->
      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url4; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title4; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text4; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->
      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url5; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title5; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text5; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->
      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url6; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title6; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text6; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->
      <div class="caseItem__box wow fadeInUp">
        <div class="caseItem__img3">
          <img data-js-ofi src="<?php echo $img_url7; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <div class="caseItem__contents">
        <h4 class="caseItem__subTtl wow fadeInUp"><?php echo $title7; ?></h4><!-- /caseItem__subTtl -->
          <p class="caseItem__desc"><?php echo $text7; ?></p><!-- /caseItem__desc -->
        </div><!-- /caseItem__contents -->
      </div><!-- /caseItem__box -->

      <div class="caseItem__gallery wow fadeInUp">
      <?php if(empty($img_url8)):?>
        <?php else:?>
        <div class="caseItem__gallery--img3">
          <img data-js-ofi src="<?php echo $img_url8; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <?php endif;?>
        <?php if(empty($img_url9)):?>
        <?php else:?>
        <div class="caseItem__gallery--img3">
          <img data-js-ofi src="<?php echo $img_url9; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
      </div><!-- /caseItem__box -->
      <?php endif;?>
      <?php if(empty($img_url10)):?>
        <?php else:?>
      <div class="caseItem__gallery wow fadeInUp">
        <div class="caseItem__gallery--img3">
          <img data-js-ofi src="<?php echo $img_url10; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <?php endif;?>
        <?php if(empty($img_url11)):?>
        <?php else:?>
        <div class="caseItem__gallery--img3">
          <img data-js-ofi src="<?php echo $img_url11; ?>" alt="<?php echo $name  ?>">
        </div><!-- /caseItem__img3 -->
        <?php endif;?>
      </div><!-- /caseItem__box -->
      

      <a href="<?php echo do_shortcode('[home_url]'); ?>case" class="caseItem__btn wow fadeInUp">一覧に戻る</a><!-- /caseItem__btn -->
    </div><!-- /inner caseItem__inner -->
  </section><!-- /caseItem -->
</div><!-- /page  -->

<?php get_footer(); ?>
