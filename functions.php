<?php

/**
 * テーマのセットアップ
 **/
function my_setup() {
	add_theme_support("post-thumbnails");
	add_theme_support("html5", [
		//HTML5でマークアップ
		"search-form",
		"comment-form",
		"comment-list",
		"gallery",
		"caption",
	]);
}
add_action("after_setup_theme", "my_setup");

/**
 * Adobe Typekit の読み込み
 */
function add_typekit_script() {
	?>
    <script>
      (function(d) {
        var config = {
          kitId: 'fkw5eov',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    <?php
}
add_action("wp_head", "add_typekit_script", 1);

/**
 * テーマフォルダまでのURL
 */
function theme_shortcode() {
	return esc_url(get_template_directory_uri());
}
add_shortcode("theme_url", "theme_shortcode");

/**
 * ホームURL
 */
function home_shortcode() {
	return rico_home_url("/");
}
add_shortcode("home_url", "home_shortcode");

/**
 * テーマURLヘルパー関数（テンプレート内で直接使用）
 */
function rico_theme_url() {
	return esc_url(get_template_directory_uri());
}

function rico_home_url($path = "/") {
	return esc_url(home_url($path));
}

/**
 * 曜日変換ヘルパー
 */
function rico_get_day_of_week($date_str) {
	$w = date("w", strtotime($date_str));
	$days = ["日", "月", "火", "水", "木", "金", "土"];
	return $days[$w];
}

/**
 * 残り時間表示ヘルパー
 */
function rico_get_remaining_time($interval) {
	if ($interval->days > 0) {
		return $interval->days . "日";
	} elseif ($interval->h > 0) {
		return $interval->h . "時間";
	}
	return $interval->i . "分";
}

/**
 * イベントステータス判定
 * @return array ['status' => 'now'|'before'|'end', 'status_class', 'status_text', 'sort_priority']
 */
function rico_get_event_status($is_always, $start_date, $end_date, $start_time, $end_time) {
	$now = new DateTime("now", new DateTimeZone("Asia/Tokyo"));

	if ($start_date && $start_time) {
		$start_datetime = new DateTime($start_date . " " . $start_time, new DateTimeZone("Asia/Tokyo"));
	} else {
		$start_datetime = $now;
	}

	if ($end_date && $end_time) {
		$end_datetime = new DateTime($end_date . " " . $end_time, new DateTimeZone("Asia/Tokyo"));
	} else {
		$end_datetime = $now;
	}

	if ($is_always) {
		return [
			"status" => "now",
			"status_class" => "_now",
			"status_text" => "常時開催中",
			"sort_priority" => 1,
			"start_datetime" => $start_datetime,
		];
	} elseif ($start_datetime <= $now && $end_datetime >= $now) {
		$interval = $now->diff($end_datetime);
		return [
			"status" => "now",
			"status_class" => "_now",
			"status_text" => "【開催中】<span>終了まであと</span>" . rico_get_remaining_time($interval),
			"sort_priority" => 1,
			"start_datetime" => $start_datetime,
		];
	} elseif ($start_datetime > $now) {
		$interval = $now->diff($start_datetime);
		return [
			"status" => "before",
			"status_class" => "_before",
			"status_text" => "【開催前】<span>開催まであと</span>" . rico_get_remaining_time($interval),
			"sort_priority" => 2,
			"start_datetime" => $start_datetime,
		];
	} else {
		return [
			"status" => "end",
			"status_class" => "_end",
			"status_text" => "イベント終了",
			"sort_priority" => 3,
			"start_datetime" => $start_datetime,
		];
	}
}

/**
 * イベントカテゴリーページをイベント一覧にリダイレクト
 */
function rico_redirect_event_category() {
	if (is_tax("event-category")) {
		wp_redirect(home_url("/event/"), 301);
		exit();
	}
}
add_action("template_redirect", "rico_redirect_event_category");

/**
 * 構造化データ（JSON-LD）出力
 */
function rico_output_jsonld() {
	if (is_front_page()) {
		$data = [
			"@context" => "https://schema.org",
			"@type" => "HomeAndConstructionBusiness",
			"name" => "Rico Life.（カクダイホーム）",
			"description" => "埼玉県久喜市の注文住宅。コスパで創る、豊かな暮らし。太陽光発電・蓄電池標準装備の高性能住宅。",
			"url" => home_url("/"),
			"logo" => get_template_directory_uri() . "/assets/img/common/logo.svg",
			"image" => get_template_directory_uri() . "/assets/img/top/kv1.png",
			"telephone" => "0480-23-1717",
			"address" => [
				"@type" => "PostalAddress",
				"streetAddress" => "久喜中央4-9-49",
				"addressLocality" => "久喜市",
				"addressRegion" => "埼玉県",
				"postalCode" => "346-0003",
				"addressCountry" => "JP",
			],
			"geo" => [
				"@type" => "GeoCoordinates",
				"latitude" => 36.0713,
				"longitude" => 139.6734,
			],
			"openingHours" => "Mo-Tu,Th-Su 10:00-18:00",
			"priceRange" => "$$",
			"areaServed" => [
				"@type" => "State",
				"name" => "埼玉県",
			],
		];
		echo '<script type="application/ld+json">' . "\n";
		echo wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		echo "\n" . "</script>" . "\n";
	}
}
add_action("wp_head", "rico_output_jsonld");

/**
 * ホームURL(contact7プラグイン内で使用)
 */
add_action("wpcf7_init", "custom_add_form_tag");
function custom_add_form_tag() {
	wpcf7_add_form_tag("home_url", "custom_url_handler");
}
function custom_url_handler($tag) {
	return rico_home_url("/");
}

/**
 * CSS JavaScriptの読み込み
 */
function my_script_init() {
	$theme_url = get_template_directory_uri();

	// 共通のスクリプトとスタイル
	wp_enqueue_style("animate", $theme_url . "/assets/css/vendor/animate.css", [], "1.0.21", "all");
	wp_enqueue_style("styles", $theme_url . "/assets/css/styles.css", [], "1.0.29", "all");

	// jQuery UI の読み込み
	wp_enqueue_script("jquery-ui-core");
	wp_enqueue_script("jquery-ui-datepicker");
	wp_enqueue_style("jquery-ui-style", "//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css");

	wp_enqueue_script("ofi", $theme_url . "/assets/js/vendor/ofi.min.js", ["jquery"], "1.0.0", true);
	wp_enqueue_script("wow", $theme_url . "/assets/js/vendor/wow.min.js", ["jquery"], "1.0.0", true);
	wp_enqueue_script("cmn", $theme_url . "/assets/js/common.js", ["jquery", "jquery-ui-datepicker"], "1.0.4", true);
	wp_enqueue_script("logo-change", $theme_url . "/assets/js/logo-change.js", ["jquery"], "1.0.0", true);

	// ホーム、フロントページ、ba-300ページ用のスクリプト
	if (is_home() || is_front_page() || is_page("ba-300")) {
		wp_enqueue_style("scroll-hint", $theme_url . "/assets/css/vendor/scroll-hint.css", [], "1.0.21", "all");
		wp_enqueue_script("scroll-hint", $theme_url . "/assets/js/vendor/scroll-hint.min.js", ["jquery"], "1.0.0", true);
		wp_enqueue_script("scrollable", $theme_url . "/assets/js/scrollable.js", ["jquery"], "1.0.4", true);
	}

	// プラン一覧ページ用のスクリプト
	if (is_post_type_archive("plan")) {
		wp_enqueue_script("plan-filter", $theme_url . "/assets/js/plan-filter.js", [], "1.0", true);
	}

	// モーダルスクリプト（プラン詳細・イベント詳細・間取りページ）
	if (is_singular("plan") || is_singular("event") || is_page("plan-of-house")) {
		wp_enqueue_script("modal-script", $theme_url . "/assets/js/modal.js", [], "1.0", true);
	}
}
add_action("wp_enqueue_scripts", "my_script_init");

function gutenberg_support_setup() {
	add_theme_support("editor-styles");
	add_editor_style("editor-style.css");
}
add_action("after_setup_theme", "gutenberg_support_setup");

/**
 * 事前読み込み画像（マウスオーバー用 読み込みされないことあるため、事前読み込み）
 */
function meta_headcustomtags() {
	echo '<link rel="preload" href="' . rico_theme_url() . '/assets/img/common/mail-white.svg" as="image">' . "\n";
}
add_action("wp_head", "meta_headcustomtags", 99);

/**
 * 文字列トリム処理
 */
function trimString($string, $max) {
	$txt = str_replace("\r\n", "", $string);
	if (mb_strlen($txt) > $max) {
		return mb_strimwidth($string, 0, $max) . "...";
	} else {
		return $string;
	}
}

/**
 * MW WPフォームの自動改行禁止
 */
function stopAutomaticbr() {
	if (class_exists("MW_WP_Form_Admin")) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter("mwform_content_wpautop_mw-wp-form-" . $form->ID, "__return_false");
		}
	}
}
stopAutomaticbr();

/**
 * カスタム投稿タイプの追加
 */
add_action("init", "custom_post_type");
function custom_post_type() {
	register_post_type(
		"case", // カスタム投稿タイプのスラッグの指定
		[
			"labels" => [
				"name" => __("施工事例"),
				"singular_name" => __("施工事例"),
				"add_new" => _x("新規追加", "case"),
				"add_new_item" => __("新規追加"),
			],
			"public" => true, // 投稿タイプをパブリックにする
			"has_archive" => true, // アーカイブを有効にする
			"hierarchical" => false, // ページ階層の指定
			"menu_position" => 5, // 管理画面上の配置指定
			"menu_icon" => "dashicons-star-filled", // アイコン
			"supports" => ["title"], // サポート指定
			// 全てのサポートを使う場合は下記参照
			//'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
		],
	);

	register_post_type(
		"plan", // カスタム投稿タイプのスラッグの指定
		[
			"labels" => [
				"name" => __("プラン集"),
				"singular_name" => __("プラン集"),
				"add_new" => _x("新規追加", "plan"),
				"add_new_item" => __("新規追加"),
			],
			"public" => true, // 投稿タイプをパブリックにする
			"has_archive" => true, // アーカイブを有効にする
			"hierarchical" => false, // ページ階層の指定
			"menu_position" => 5, // 管理画面上の配置指定
			"menu_icon" => "dashicons-star-filled", // アイコン
			"supports" => ["title"], // サポート指定
			// 全てのサポートを使う場合は下記参照
			//'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
		],
	);
}
/**
 * プラン集にタクソノミー追加
 */
function add_plan_case_taxonomies() {
	// シリーズ
	register_taxonomy(
		"series",
		["plan", "case"],
		[
			"hierarchical" => true,
			"label" => "シリーズ",
			"singular_label" => "シリーズ",
			"public" => true,
			"show_ui" => true,
		],
	);

	// 坪数
	register_taxonomy(
		"size",
		["plan", "case"],
		[
			"hierarchical" => true,
			"label" => "坪数",
			"singular_label" => "坪数",
			"public" => true,
			"show_ui" => true,
		],
	);

	// 予算
	register_taxonomy(
		"budget",
		["plan", "case"],
		[
			"hierarchical" => true,
			"label" => "予算",
			"singular_label" => "予算",
			"public" => true,
			"show_ui" => true,
		],
	);

	// 間取り
	register_taxonomy(
		"layout",
		["plan", "case"],
		[
			"hierarchical" => true,
			"label" => "間取り",
			"singular_label" => "間取り",
			"public" => true,
			"show_ui" => true,
		],
	);

	// 階数
	register_taxonomy(
		"floors",
		["plan", "case"],
		[
			"hierarchical" => true,
			"label" => "階数",
			"singular_label" => "間取り",
			"public" => true,
			"show_ui" => true,
		],
	);
}
add_action("init", "add_plan_case_taxonomies");

/**
 * 施工事例にタクソノミー追加
 */
function add_case_taxonomy() {
	register_taxonomy(
		"case_category", // タクソノミースラッグ
		"case", // 使用するカスタム投稿タイプを指定
		[
			"hierarchical" => true, // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
			"label" => "導入カテゴリ", // メニューに表示される
			"singular_label" => "導入カテゴリ", // 単体系
			"public" => true, // 投稿タイプをパブリックにする
			"show_ui" => true, // 管理画面上に編集画面を表示するかを指定
		],
	);
}
add_action("init", "add_case_taxonomy");

/**
 * 固定ページ親判定
 */
function page_is_ancestor_of($slug) {
	global $post;
	// 親か判別したい固定ページスラッグからページ情報を取得
	$page = get_page_by_path($slug);
	$result = false;
	if (isset($page)) {
		foreach ($post->ancestors as $ancestor) {
			if ($ancestor == $page->ID) {
				$result = true;
			}
		}
	}
	return $result;
}

/**
 * all in one seoで設定できないアーカイブページのメタディスクリプション設定
 */
// function  archive_description($description){
//   if(is_post_type_archive('case')){
//     $description = 'RicoLife久喜店の施工事例です。';
//   }
//   return $description;
// }
// add_filter('aioseo_description', 'archive_description');
//
//

//カスタムフィールドに自動有料化設定を追加
function add_auto_paywall_custom_fields() {
	add_meta_box("auto_paywall_settings", "自動有料化設定", "auto_paywall_custom_fields", "post", "side");
}
add_action("add_meta_boxes", "add_auto_paywall_custom_fields");

//任意の時間に無料記事から有料記事にするカテゴリを設定するカスタムフィールド
function auto_paywall_custom_fields($post) {
	$auto_paywall = get_post_meta($post->ID, "auto_paywall", true);
	$paywall_date = get_post_meta($post->ID, "paywall_date", true);
	$paywall_time = get_post_meta($post->ID, "paywall_time", true);
	wp_nonce_field("auto_paywall_nonce_action", "auto_paywall_nonce");
	?>
  <p>
    <label>
      <input type="checkbox" name="auto_paywall" value="1" <?php checked($auto_paywall, 1); ?> /> auto paywallを設定する
    </label>
  </p>

  <p>
    <label id="paywall_date">日付の設定:</label>
    <input type="date" name="paywall_date" value="<?php echo esc_attr($paywall_date); ?>" />
  </p>

  <p>
    <label id="paywall_time">時間の設定:</label>
    <input type="time" name="paywall_time" value="<?php echo esc_attr($paywall_time); ?>" />
  </p>
<?php
}

function add_auto_paywall_category($post_id) {
	date_default_timezone_set("Asia/Tokyo");

	// 投稿の有料化処理
	$paywall_date = get_post_meta($post_id, "paywall_date", true);
	$paywall_time = get_post_meta($post_id, "paywall_time", true);
	$paywall_datetime = strtotime($paywall_date . " " . $paywall_time);

	if ($paywall_datetime <= time()) {
		$cat = get_category_by_slug("end");
		if ($cat) {
			wp_set_post_categories($post_id, $cat->term_id, true);
		}
	}
}
add_action("my_auto_function_cron", "add_auto_paywall_category");

function add_wp_cron_schedule_auto_paywall($post_id) {
	// 予約投稿が公開される際の処理をスキップ
	if (defined("DOING_CRON") && DOING_CRON) {
		return;
	}

	if (
		!isset($_POST["auto_paywall_nonce"]) ||
		!wp_verify_nonce($_POST["auto_paywall_nonce"], "auto_paywall_nonce_action")
	) {
		return;
	}

	//記事の種類が投稿ではない　または wpのオートセーブの
	if (get_post_type($post_id) !== "post" || (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)) {
		return;
	}

	if (!isset($_POST["auto_paywall"])) {
		delete_post_meta($post_id, "auto_paywall");
		delete_post_meta($post_id, "paywall_date");
		delete_post_meta($post_id, "paywall_time");
		return;
	}
	//paywallの時間設定
	update_post_meta($post_id, "auto_paywall", sanitize_text_field($_POST["auto_paywall"]));
	update_post_meta($post_id, "paywall_date", sanitize_text_field($_POST["paywall_date"]));
	update_post_meta($post_id, "paywall_time", sanitize_text_field($_POST["paywall_time"]));

	$scheduled_time = wp_next_scheduled("my_auto_function_cron", [$post_id]);

	//すでに同じ投稿IDでcronが登録してある場合は元のcronを削除して新たなcronを追加
	if ($scheduled_time) {
		wp_unschedule_event($scheduled_time, "my_auto_function_cron", [$post_id]);
	}

	date_default_timezone_set("Asia/Tokyo");
	$datetime = strtotime(
		sanitize_text_field($_POST["paywall_date"]) . " " . sanitize_text_field($_POST["paywall_time"]),
	);

	//カスタムフィールドで設定した時間が現在時刻より未来の場合はcronを登録
	if ($datetime > time()) {
		wp_schedule_single_event($datetime, "my_auto_function_cron", [$post_id]);
	}
}
add_action("save_post", "add_wp_cron_schedule_auto_paywall");

// カスタム投稿タイプ「スタッフ」を登録
function create_staff_post_type() {
	$labels = [
		"name" => "スタッフ",
		"singular_name" => "スタッフ",
		"menu_name" => "スタッフ",
		"add_new" => "新規追加",
		"add_new_item" => "新規スタッフを追加",
		"edit_item" => "スタッフを編集",
		"new_item" => "新規スタッフ",
		"all_items" => "すべてのスタッフ",
		"view_item" => "スタッフを表示",
		"search_items" => "スタッフを検索",
		"not_found" => "スタッフが見つかりませんでした",
		"not_found_in_trash" => "ゴミ箱にスタッフが見つかりませんでした",
	];

	$args = [
		"labels" => $labels,
		"public" => true,
		"has_archive" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => ["title", "editor", "thumbnail"],
		"rewrite" => ["slug" => "staff"],
	];

	register_post_type("staff", $args);
}
add_action("init", "create_staff_post_type");

// カスタムタクソノミー「部署」を追加
function create_department_taxonomy() {
	$labels = [
		"name" => "部署",
		"singular_name" => "部署",
		"search_items" => "部署を検索",
		"all_items" => "すべての部署",
		"edit_item" => "部署を編集",
		"add_new_item" => "新規部署を追加",
		"new_item_name" => "新規部署名",
	];

	$args = [
		"hierarchical" => true,
		"labels" => $labels,
		"show_ui" => true,
		"show_admin_column" => true,
		"query_var" => true,
		"rewrite" => ["slug" => "department"],
	];

	register_taxonomy("department", ["staff"], $args);
}
add_action("init", "create_department_taxonomy");

function register_event_post_type() {
	$labels = [
		"name" => "イベント",
		"singular_name" => "Event",
		"menu_name" => "イベント",
		"name_admin_bar" => "Event",
		"add_new" => "Add New",
		"add_new_item" => "Add New Event",
		"new_item" => "New Event",
		"edit_item" => "Edit Event",
		"view_item" => "View Event",
		"all_items" => "All Events",
		"search_items" => "Search Events",
		"parent_item_colon" => "Parent Events:",
		"not_found" => "No events found.",
		"not_found_in_trash" => "No events found in Trash.",
	];

	$args = [
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => ["slug" => "event"],
		"capability_type" => "post",
		"has_archive" => true,
		"hierarchical" => false,
		"menu_position" => null,
		"supports" => ["title", "editor", "author", "thumbnail", "excerpt", "comments"],
	];

	register_post_type("event", $args);

	// イベントカテゴリーのタクソノミーを追加
	$category_labels = [
		"name" => "イベントカテゴリー",
		"singular_name" => "イベントカテゴリー",
		"search_items" => "イベントカテゴリーを検索",
		"all_items" => "すべてのイベントカテゴリー",
		"parent_item" => "親イベントカテゴリー",
		"parent_item_colon" => "親イベントカテゴリー:",
		"edit_item" => "イベントカテゴリーを編集",
		"update_item" => "イベントカテゴリーを更新",
		"add_new_item" => "新規イベントカテゴリーを追加",
		"new_item_name" => "新規イベントカテゴリー名",
		"menu_name" => "カテゴリー",
	];

	$category_args = [
		"hierarchical" => true,
		"labels" => $category_labels,
		"show_ui" => true,
		"show_admin_column" => true,
		"query_var" => true,
		"rewrite" => ["slug" => "event-category"],
	];

	register_taxonomy("event-category", ["event"], $category_args);
}
add_action("init", "register_event_post_type");

function add_fontawesome_cdn() {
	wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
}
add_action("wp_enqueue_scripts", "add_fontawesome_cdn");
