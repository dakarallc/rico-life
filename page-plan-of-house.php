<?php
/*
Template Name: 間取り

*/
?>
<?php get_header(); ?>

<div class="planOfHouse">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/kv.png" alt="">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>自由設計も、
					<br>選べるプランも。
					<br>あなたの理想に合わせて、
					<br>最適な住まいをご提案します。
				</h2>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>

	<!-- FLOOR PLAN -->
	<section class="floorPlan">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">FLOOR PLAN
					<span>間取り</span>
				</h2>
			</div>

			<div class="catch">
				<h3>
					あなたに合った進め方で、<br>
					理想の住まいを考える。
				</h3>
			</div>

			<div class="floorPlan__img">
				<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/products.png" alt="間取りイメージ">
			</div>

			<div class="floorPlan__text">
				<p>
					Rico Life.は、自由設計だけで<br class="show--sp">なく、暮らしやすさを大切にした<br class="show--sp">住まいの選択肢をご用意しています。
				</p>
				<p>
					ライフスタイルに合わせて、<br class="show--sp">自分たちらしく暮らせる住まい<br class="show--sp">の形をご提案します。
				</p>
			</div>
		</div>
	</section>


	<!-- Select plan -->
	<section class="selectPlan conceptSection">
		<img src="<?php echo rico_theme_url(); ?>/assets/img/plan-of-house/select-plan-bg.jpg" alt="">
		<div class="inner conceptSection__inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Select plan
					<span>暮らし方で選べるプラン</span>
				</h2>
			</div>

			<div class="catch">
				<h3>
					無理なく、賢く、<br class="show--sp">
					自分たちらしい<br class="show--sp">
					マイホームを建てる。
				</h3>
			</div>

			<div>
				<div class="conceptSection__block">
					家事のしやすさ、収納の多さ、<br>
					子育てのしやすさ、将来の暮らし方。<br>
					大切にしたいことは、ご家族によって<br>
					異なります。<br>
					ここでは、暮らし方に合わせた4つの<br>
					プランをご紹介します。
				</div>
			</div>
		</div>
	</section>

	<!-- Plan cards -->
	<?php
 $plans = [
 	[
 		"no" => "01",
 		"catch" => "家事ラクに暮らす。",
 		"desc" => "生活動線にこだわった、ランドリールームのある住まい。",
 		"floors" => ["1F", "2F"],
 		"area" => "29.05",
 		"madori" => "3LDK＋ランドリールーム",
 		"price" => "2,447",
 		"monthly" => "61,875",
 		"effect" => "17,464",
 		"actual" => "44,411",
 	],
 	[
 		"no" => "02",
 		"catch" => "必要な広さで、賢く暮らす。",
 		"desc" => "必要なものをちょうどよく整えた、無理のない住まい。",
 		"floors" => ["1F", "2F"],
 		"area" => "28.24",
 		"madori" => "3LDK",
 		"price" => "2,234",
 		"monthly" => "56,487",
 		"effect" => "19,498",
 		"actual" => "36,989",
 	],
 	[
 		"no" => "03",
 		"catch" => "平屋でのびやかに暮らす。",
 		"desc" => "ワンフロアに暮らしがつながる、開放感のある住まい。",
 		"floors" => [],
 		"area" => "27.05",
 		"madori" => "3LDK",
 		"price" => "2,633",
 		"monthly" => "66,569",
 		"effect" => "24,162",
 		"actual" => "42,407",
 	],
 	[
 		"no" => "04",
 		"catch" => "将来まで安心して暮らす。",
 		"desc" => "これからの暮らしを見据えたコンパクト平屋の住まい。",
 		"floors" => [],
 		"area" => "28.24",
 		"madori" => "3LDK",
 		"price" => "2,295",
 		"monthly" => "58,036",
 		"effect" => "24,162",
 		"actual" => "33,874",
 	],
 ];
 $img_base = rico_theme_url() . "/assets/img/plan-of-house";
 ?>
	<section class="selectPlan">
		<div class="inner">
			<div class="selectPlan__list">
				<?php foreach ($plans as $plan):

    	$no = $plan["no"];
    	$has_floors = !empty($plan["floors"]);
    	?>
				<div class="selectPlan__card" data-plan="<?php echo $no; ?>">
					<div class="selectPlan__header">
						<p class="selectPlan__planNo">PLAN <?php echo $no; ?></p>
						<h3 class="selectPlan__catch"><?php echo $plan["catch"]; ?></h3>
						<p class="selectPlan__desc"><?php echo $plan["desc"]; ?></p>
					</div>
					<div class="selectPlan__exterior">
						<img src="<?php echo $img_base; ?>/plan<?php echo $no; ?>.jpg" alt="PLAN <?php echo $no; ?> 外観">
					</div>
					<div class="selectPlan__body">
						<?php if ($has_floors): ?>
						<div class="selectPlan__sliderWrap">
							<div class="selectPlan__slider swiper js-planSlider">
								<div class="swiper-wrapper">
									<?php foreach ($plan["floors"] as $i => $floor): ?>
									<div class="swiper-slide">
										<div class="selectPlan__madoriImg">
											<img src="<?php echo $img_base; ?>/plan<?php echo $no; ?>-<?php echo $i +
	1; ?>.jpg" alt="PLAN <?php echo $no; ?> <?php echo $floor; ?> 間取り図" class="modal-trigger">
											<p class="selectPlan__floorLabel"><?php echo $floor; ?></p>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<div class="swiper-pagination"></div>
							</div>
							<button type="button" class="zoom-button" aria-label="拡大表示"><i class="fas fa-search-plus"></i></button>
						</div>
						<?php else: ?>
						<div class="selectPlan__floorplan selectPlan__madoriImg">
							<img src="<?php echo $img_base; ?>/plan<?php echo $no; ?>-1.jpg" alt="PLAN <?php echo $no; ?> 間取り図" class="modal-trigger">
							<button type="button" class="zoom-button" aria-label="拡大表示"><i class="fas fa-search-plus"></i></button>
						</div>
						<?php endif; ?>
						<div class="selectPlan__info">
							<dl class="selectPlan__infoList">
								<div class="selectPlan__infoRow">
									<dt>延床面積</dt>
									<dd>約 <span class="selectPlan__val"><?php echo $plan["area"]; ?></span> 坪</dd>
								</div>
								<div class="selectPlan__infoRow">
									<dt>間取り</dt>
									<dd><span class="selectPlan__val"><?php echo $plan["madori"]; ?></span></dd>
								</div>
								<div class="selectPlan__infoRow">
									<dt>本体価格</dt>
									<dd>約 <span class="selectPlan__val"><?php echo $plan["price"]; ?></span> 万円</dd>
								</div>
								<div class="selectPlan__infoRow">
									<dt>月々返済</dt>
									<dd>約 <span class="selectPlan__val"><?php echo $plan["monthly"]; ?></span> 円/月</dd>
								</div>
								<div class="selectPlan__infoRow selectPlan__infoRow--accent">
									<dt>経済効果<br><small>（※売電収入＋電気代削減）</small></dt>
									<dd>約 <span class="selectPlan__val"><?php echo $plan["effect"]; ?></span> 円/月</dd>
								</div>
								<div class="selectPlan__infoRow selectPlan__infoRow--result">
									<dt>実質支払</dt>
									<dd>約 <span class="selectPlan__val"><?php echo $plan["actual"]; ?></span> 円/月</dd>
								</div>
							</dl>
						</div>
					</div>
				</div>
				<?php
    endforeach; ?>
			</div>
		</div>
	</section>


	<!-- 補足テキスト -->
	<section class="planNote">
		<div class="inner">
			<div class="catch">
				<h3>掲載プランは、<br>家づくりの一例です。</h3>
			</div>
			<div class="planNote__text">
				<p>
					土地の形やご家族の暮らし方、<br class="show--sp">ご予算によって、最適な間取りは変わります。<br>
					注文住宅として一からプランを作成することはもちろん、掲載しているプランをそのまま建てるだけでなく、暮らしに合わせて調整することも可能です。
				</p>
				<p>
					また、Rico Life.では、<br class="show--sp">住まいづくりの参考になるプラン集も<br class="show--sp">ご用意しています。<br>
					気になる方はぜひ資料請求からご覧ください。
				</p>
			</div>
		</div>
	</section>


	<?php get_template_part("template-parts/toTopButton"); ?>

	<?php get_template_part("template-parts/message"); ?>

	<?php get_template_part("template-parts/productArea"); ?>

	<?php get_template_part("template-parts/contactArea"); ?>

<!-- 間取りモーダル -->
<?php foreach ($plans as $plan):

	$no = $plan["no"];
	$has_floors = !empty($plan["floors"]);
	?>
<div class="planOfHouse-modal" id="planModal<?php echo $no; ?>">
	<div class="planOfHouse-modal__content">
		<button type="button" class="planOfHouse-modal__close" aria-label="閉じる"><i class="fas fa-times"></i></button>
		<?php if ($has_floors): ?>
		<div class="planOfHouse-modal__slider swiper js-modalSlider">
			<div class="swiper-wrapper">
				<?php foreach ($plan["floors"] as $i => $floor): ?>
				<div class="swiper-slide">
					<img src="<?php echo $img_base; ?>/plan<?php echo $no; ?>-<?php echo $i +
	1; ?>.jpg" alt="PLAN <?php echo $no; ?> <?php echo $floor; ?> 間取り図">
					<p class="planOfHouse-modal__caption">PLAN <?php echo $no; ?> - <?php echo $floor; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<?php else: ?>
		<img src="<?php echo $img_base; ?>/plan<?php echo $no; ?>-1.jpg" alt="PLAN <?php echo $no; ?> 間取り図">
		<p class="planOfHouse-modal__caption">PLAN <?php echo $no; ?></p>
		<?php endif; ?>
	</div>
</div>
<?php
endforeach; ?>




<?php get_footer(); ?>


<script>
jQuery(function () {
	document.querySelectorAll(".js-planSlider").forEach(function (el) {
		new Swiper(el, {
			loop: false,
			pagination: {
				el: el.querySelector(".swiper-pagination"),
				clickable: true
			}
		});
	});
});
</script>
