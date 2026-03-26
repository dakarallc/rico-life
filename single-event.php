<?php get_header(); ?>

<?php
$event_info = [
	"pic" => get_field("event-pic"),
	"is_always" => get_field("is_always"),
	"start_date" => get_field("event_start_date"),
	"end_date" => get_field("event_end_date"),
	"start_time" => get_field("event_start_time"),
	"end_time" => get_field("event_end_time"),
	"address" => get_field("address"),
	"comment" => get_field("comment"),
	"subtitle" => get_field("event_subtitle"),
];

$now = new DateTime("now", new DateTimeZone("Asia/Tokyo"));

if ($event_info["start_date"] && $event_info["start_time"]) {
	$start_datetime = new DateTime(
		$event_info["start_date"] . " " . $event_info["start_time"],
		new DateTimeZone("Asia/Tokyo"),
	);
} else {
	$start_datetime = $now;
}

if ($event_info["end_date"] && $event_info["end_time"]) {
	$end_datetime = new DateTime($event_info["end_date"] . " " . $event_info["end_time"], new DateTimeZone("Asia/Tokyo"));
} else {
	$end_datetime = $now;
}

if ($event_info["is_always"]) {
	$event_status = "nowEvent";
} elseif ($start_datetime <= $now && $end_datetime >= $now) {
	$event_status = "nowEvent";
} elseif ($start_datetime > $now) {
	$event_status = "beforeEvent";
} else {
	$event_status = "endEvent";
}

/* 曜日変換ヘルパー */
function rico_get_day_of_week($date_str) {
	$w = date("w", strtotime($date_str));
	$days = ["日", "月", "火", "水", "木", "金", "土"];
	return $days[$w];
}

/* カテゴリー取得 */
$event_cats = get_the_terms(get_the_ID(), "event-category");
$event_cat_name = $event_cats && !is_wp_error($event_cats) ? $event_cats[0]->name : "";
?>

<main class="eventDetail">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo esc_url($event_info["pic"]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
			<?php echo $event_status === "endEvent" ? 'style="filter: grayscale(100%);"' : ""; ?>>
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<?php if (has_term("actual-house-tours", "event-category")): ?>
					<h1>OPEN HOUSE</h1>
				<?php else: ?>
					<h1>EVENT</h1>
				<?php endif; ?>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>

	<!-- HEAD -->
	<section class="eventDetail__head">
		<div class="inner">
			<?php if ($event_cat_name): ?>
				<p class="eventDetail__badge">
					<?php if ($event_info["is_always"]): ?>
						<?php echo esc_html($event_cat_name); ?> in <?php echo esc_html($event_info["address"]); ?>
					<?php else: ?>
						【期間限定】<?php echo esc_html($event_cat_name); ?> in <?php echo esc_html($event_info["address"]); ?>
					<?php endif; ?>
				</p>
			<?php endif; ?>

			<?php if ($event_info["subtitle"]): ?>
				<h2 class="eventDetail__subtitle"><?php echo esc_html($event_info["subtitle"]); ?></h2>
			<?php else: ?>
				<h2 class="eventDetail__subtitle"><?php the_title(); ?></h2>
			<?php endif; ?>

			<!-- 説明文（画像の上） -->
			<?php if ($event_info["comment"]): ?>
				<div class="eventDetail__desc">
					<p><?php echo nl2br(esc_html($event_info["comment"])); ?></p>
				</div>
			<?php endif; ?>

			<!-- メイン画像 -->
			<div class="eventDetail__mainImg">
				<img src="<?php echo esc_url($event_info["pic"]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					<?php echo $event_status === "endEvent" ? 'style="filter: grayscale(100%);"' : ""; ?>>
			</div>

			<!-- イベント情報 -->
			<div class="eventDetail__info">
				<dl>
					<dt>【会場】</dt>
					<dd><?php echo esc_html($event_info["address"]); ?> ※詳細はご予約いただいた際にお伝えいたします</dd>
				</dl>
				<dl>
					<dt>【開催期間】</dt>
					<dd>
						<?php if ($event_info["is_always"]): ?>
							常時開催
						<?php else: ?>
							<?php echo esc_html($event_info["start_date"]); ?>(<?php echo rico_get_day_of_week(
	$event_info["start_date"],
); ?>)〜<?php echo esc_html($event_info["end_date"]); ?>(<?php echo rico_get_day_of_week($event_info["end_date"]); ?>)
						<?php endif; ?>
					</dd>
				</dl>
				<dl>
					<dt>【見学時間】</dt>
					<dd><?php echo esc_html($event_info["start_time"]); ?>〜<?php echo esc_html($event_info["end_time"]); ?></dd>
				</dl>
				<dl>
					<dt>【定休日】</dt>
					<dd>水曜日</dd>
				</dl>
			</div>

			<!-- 来場予約ボタン -->
			<div class="btnWrap">
				<a href="<?php echo rico_home_url("/contact"); ?>" class="greenBtn greenBtn--outline">来場予約はこちら</a>
			</div>
		</div>
	</section>

	<!-- POINT -->
	<?php
 $point1_title = get_field("point1_title");
 $point1_img = get_field("point1_img");
 $point1_text = get_field("point1_text");
 $point2_title = get_field("point2_title");
 $point2_img = get_field("point2_img");
 $point2_text = get_field("point2_text");
 $point3_title = get_field("point3_title");
 $point3_img = get_field("point3_img");
 $point3_text = get_field("point3_text");

 if ($point1_title || $point2_title || $point3_title): ?>
	<section class="eventDetail__points">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">POINT</h2>
				<p class="specDetail__subtitle">この住まいの見どころ</p>
			</div>

			<?php if ($point1_title): ?>
			<div class="eventDetail__point">
				<h3 class="eventDetail__pointLabel">POINT 01</h3>
				<p class="eventDetail__pointTitle"><?php echo esc_html($point1_title); ?></p>
				<?php if ($point1_img): ?>
					<div class="eventDetail__pointImg">
						<img src="<?php echo esc_url($point1_img); ?>" alt="<?php echo esc_attr($point1_title); ?>">
					</div>
				<?php endif; ?>
				<?php if ($point1_text): ?>
					<p class="eventDetail__pointText"><?php echo nl2br(esc_html($point1_text)); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<?php if ($point2_title): ?>
			<div class="eventDetail__point">
				<h3 class="eventDetail__pointLabel">POINT 02</h3>
				<p class="eventDetail__pointTitle"><?php echo esc_html($point2_title); ?></p>
				<?php if ($point2_img): ?>
					<div class="eventDetail__pointImg">
						<img src="<?php echo esc_url($point2_img); ?>" alt="<?php echo esc_attr($point2_title); ?>">
					</div>
				<?php endif; ?>
				<?php if ($point2_text): ?>
					<p class="eventDetail__pointText"><?php echo nl2br(esc_html($point2_text)); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<?php if ($point3_title): ?>
			<div class="eventDetail__point">
				<h3 class="eventDetail__pointLabel">POINT 03</h3>
				<p class="eventDetail__pointTitle"><?php echo esc_html($point3_title); ?></p>
				<?php if ($point3_img): ?>
					<div class="eventDetail__pointImg">
						<img src="<?php echo esc_url($point3_img); ?>" alt="<?php echo esc_attr($point3_title); ?>">
					</div>
				<?php endif; ?>
				<?php if ($point3_text): ?>
					<p class="eventDetail__pointText"><?php echo nl2br(esc_html($point3_text)); ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<?php the_content(); ?>

			<!-- スタッフコメント -->
			<div class="eventDetail__staffComment">
				<p>
					Rico Life.　営業部の佐藤と申します。今回のイベントでは、約20帖のLDKを中心に、家事動線や　収納計画にこだわったプランをご見学いただけます。<br><br>
					平屋ならではの暮らしやすさや、コンパクトでも広がりを感じる空間づくりのポイントを、ぜひ現地でご体感ください。
				</p>
			</div>
		</div>
	</section>
	<?php endif;
 ?>

	<!-- 4つの特徴 -->
	<section class="eventDetail__features">
		<div class="inner">
			<div class="eventDetail__featureGrid">
				<div class="eventDetail__featureItem">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/event/feature1.jpg" alt="間取りや土地探しのご相談">
					<p>間取りや土地探しなど、家づくりに関するご相談も承ります。</p>
				</div>
				<div class="eventDetail__featureItem">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/event/feature2.jpg" alt="事前予約で待ち時間なし">
					<p>事前にご予約いただくことで、待ち時間なくご案内が可能です。</p>
				</div>
				<div class="eventDetail__featureItem">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/event/feature3.jpg" alt="キッズスペース完備">
					<p>お子さまが遊べるスペースもご用意しています。</p>
				</div>
				<div class="eventDetail__featureItem">
					<img src="<?php echo rico_theme_url(); ?>/assets/img/event/feature4.jpg" alt="完全予約制で落ち着いた見学">
					<p>事前予約制のため、落ち着いて住まいをご見学いただけます。</p>
				</div>
			</div>
		</div>
	</section>

	<!-- 来場予約ボタン -->
	<div class="inner">
		<div class="btnWrap">
			<a href="<?php echo rico_home_url("/contact"); ?>" class="greenBtn greenBtn--outline">来場予約はこちら</a>
		</div>
	</div>

	<!-- finalMessage -->
	<?php get_template_part("template-parts/message"); ?>

	<!-- toTopButton -->
	<?php get_template_part("template-parts/toTopButton"); ?>

	<!-- その他イベント -->
	<?php
 $other_events = new WP_Query([
 	"post_type" => "event",
 	"posts_per_page" => 4,
 	"post__not_in" => [get_the_ID()],
 	"orderby" => "date",
 	"order" => "DESC",
 ]);

 if ($other_events->have_posts()): ?>
	<section class="eventDetail__others">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Event</h2>
				<p class="specDetail__subtitle">その他イベント</p>
			</div>
			<div class="eventDetail__otherList">
				<?php
    while ($other_events->have_posts()):

    	$other_events->the_post();
    	$other_pic = get_field("event-pic");
    	?>
				<a href="<?php echo esc_url(get_permalink()); ?>" class="eventDetail__otherItem">
					<div class="eventDetail__otherImg">
						<img src="<?php echo esc_url($other_pic); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
					</div>
					<p class="eventDetail__otherTitle"><?php the_title(); ?></p>
				</a>
				<?php
    endwhile;
    wp_reset_postdata();
    ?>
			</div>
		</div>
	</section>
	<?php endif;
 ?>

	<!-- MENU -->
	<?php get_template_part("template-parts/productArea"); ?>

	<!-- REQUEST / CONTACT -->
	<?php get_template_part("template-parts/contactArea"); ?>

<?php get_footer(); ?>
