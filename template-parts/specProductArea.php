
	<!-- PRODUCTS -->
	<section class="product">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">PRODUCTS
					<span>商品概要</span>
				</h2>
			</div>
			<?php
   $current_slug = get_post_field("post_name", get_post());
   $products = [
   	[
   		"slug" => "home-appliances",
   		"url" => home_url("/standard-spec/home-appliances"),
   		"img" => "standard-spec/equipment.jpg",
   		"label" => "住宅設備",
   	],
   	[
   		"slug" => "performance",
   		"url" => home_url("/standard-spec/performance"),
   		"img" => "standard-spec/performance.jpg",
   		"label" => "住宅性能",
   	],
   	[
   		"slug" => "interior",
   		"url" => home_url("/standard-spec/interior"),
   		"img" => "standard-spec/interior.jpg",
   		"label" => "内装建材",
   	],
   	[
   		"slug" => "structure",
   		"url" => home_url("/standard-spec/structure"),
   		"img" => "standard-spec/structure.jpg",
   		"label" => "建物構造",
   	],
   	[
   		"slug" => "storage-battery",
   		"url" => home_url("/storage-battery"),
   		"img" => "standard-spec/solar-energy.jpg",
   		"label" => "ソーラー＆蓄電池",
   	],
   ];
   ?>
			<div class="product__list">
				<?php foreach ($products as $product):
    	if ($product["slug"] === $current_slug) {
    		continue;
    	} ?>
				<div class="product__item">
					<a href="<?php echo esc_url($product["url"]); ?>">
						<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/<?php echo esc_attr(
	$product["img"],
); ?>" alt="<?php echo esc_attr($product["label"]); ?>">
						<div class="product__label"><?php echo esc_html($product["label"]); ?></div>
					</a>
				</div>
				<?php
    endforeach; ?>
			</div>
		</div>
	</section>
