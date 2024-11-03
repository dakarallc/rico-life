<?php get_header();
$name = get_the_title(); //名称
$departments = get_the_terms(get_the_ID(), 'department'); //部署
$profile_image = get_field('profileImage'); //プロフィール画像
$personal_message = get_field('personal-message'); //趣味など
$job_information = get_field('job-information'); //キャリア
$commitment_to_work = get_field('commitment-to-work'); //仕事に対するこだわり
$about_ietochi = get_field('about-ietochi'); //家と土地について
?>

<div class="page staff-page">
<!-- ===============================================================================================
pageHead
================================================================================================ -->
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">スタッフ紹介</span><!-- /_upper -->
        <span class="_below">STAFF</span><!-- /_below -->
      </h1><!-- /pageHead__ttl -->
    </div><!-- /pageHead__contents -->
  </div><!-- /pageHead -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ===============================================================================================
staffItem
================================================================================================ -->
  <section class="staffItem">
    <div class="inner staffItem__inner">
      <h1 class="staffItem__ttl wow fadeInUp"><?php echo $name ?></h1><!-- /staffItem__ttl -->
      <?php if($departments): ?>
      <p class="staffItem__txt wow fadeInUp">いえとち本舗久喜店　<?php echo $departments[0]->name; ?></p>
      <?php endif; ?>

      <div class="staffItem__main wow fadeInUp">
        <div class="staffItem__img">
          <?php if($profile_image): ?>
            <img data-js-ofi src="<?php echo $profile_image; ?>" alt="<?php echo $name ?>">
          <?php endif; ?>
        </div><!-- /staffItem__img -->
      </div><!-- /staffItem__main -->

      <?php if($personal_message): ?>
      <div class="staffItem__box wow fadeInUp">
        <p class="staffItem__desc"><?php echo $personal_message; ?></p>
      </div><!-- /staffItem__box -->
      <?php endif; ?>

      <?php if($job_information): ?>
			<h2 class="sectionTitle">キャリア</h2>
      <div class="staffItem__box wow fadeInUp">
        <p class="staffItem__desc"><?php echo $job_information; ?></p>
      </div><!-- /staffItem__box -->
      <?php endif; ?>

      <?php if($commitment_to_work): ?>
			<h2 class="sectionTitle">仕事に対するこだわり</h2>
      <div class="staffItem__box wow fadeInUp">
        <p class="staffItem__desc"><?php echo $commitment_to_work; ?></p>
      </div><!-- /staffItem__box -->
      <?php endif; ?>

      <?php if($about_ietochi): ?>
			<h2 class="sectionTitle">いえとち本舗とは</h2>
      <div class="staffItem__box wow fadeInUp">
        <p class="staffItem__desc"><?php echo $about_ietochi; ?></p>
      </div><!-- /staffItem__box -->
      <?php endif; ?>

      <a href="<?php echo do_shortcode('[home_url]'); ?>staff" class="staffItem__btn wow fadeInUp">一覧に戻る</a>
    </div><!-- /inner staffItem__inner -->
  </section><!-- /staffItem -->
</div><!-- /page -->

<?php get_footer(); ?>
