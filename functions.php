<?php

/**
 * テーマのセットアップ
 **/
function my_setup()
{
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array( //HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

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
add_action('wp_head', 'add_typekit_script', 1);

/**
 * テーマフォルダまでのURL
 */
function theme_shortcode()
{
	return esc_url(get_template_directory_uri());
}
add_shortcode('theme_url', 'theme_shortcode');


/**
 * ホームURL
 */
function home_shortcode()
{
	return esc_url(home_url('/'));
}
add_shortcode('home_url', 'home_shortcode');

/**
 * ホームURL(contact7プラグイン内で使用)
 */
add_action('wpcf7_init', 'custom_add_form_tag');
function custom_add_form_tag()
{
	wpcf7_add_form_tag('home_url', 'custom_url_handler');
}
function custom_url_handler($tag)
{
	return esc_url(home_url('/'));
}

/**
 * CSS JavaScriptの読み込み
 */
function my_script_init() {
  $theme_url = get_template_directory_uri();

  // 共通のスクリプトとスタイル
  wp_enqueue_style('animate', $theme_url . '/assets/css/vendor/animate.css', array(), '1.0.21', 'all');
  wp_enqueue_style('styles', $theme_url . '/assets/css/styles.css', array(), '1.0.28', 'all');
  
  // jQuery UI の読み込み
  wp_enqueue_script('jquery-ui-core');
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_style('jquery-ui-style', '//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css');
  
  wp_enqueue_script('ofi', $theme_url . '/assets/js/vendor/ofi.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('wow', $theme_url . '/assets/js/vendor/wow.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('cmn', $theme_url . '/assets/js/common.js', array('jquery', 'jquery-ui-datepicker'), '1.0.4', true);
  wp_enqueue_script('logo-change', $theme_url . '/assets/js/logo-change.js', array('jquery'), '1.0.0', true);

  // ホーム、フロントページ、ba-300ページ用のスクリプト
  if(is_home() || is_front_page() || is_page('ba-300')) {
    wp_enqueue_style('scroll-hint', $theme_url . '/assets/css/vendor/scroll-hint.css', array(), '1.0.21', 'all');
    wp_enqueue_script('scroll-hint', $theme_url . '/assets/js/vendor/scroll-hint.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scrollable', $theme_url . '/assets/js/scrollable.js', array('jquery'), '1.0.4', true);
  }

  // プラン一覧ページ用のスクリプト
  if (is_post_type_archive('plan')) {
    wp_enqueue_script('plan-filter', $theme_url . '/assets/js/plan-filter.js', array(), '1.0', true);
  }

  // プラン詳細ページ用のスクリプト
  if (is_singular('plan')) {
    wp_enqueue_script('modal-script', $theme_url . '/assets/js/modal.js', array(), '1.0', true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

function gutenberg_support_setup()
{
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'gutenberg_support_setup');


/**
 * 事前読み込み画像（マウスオーバー用 読み込みされないことあるため、事前読み込み）
 */
function meta_headcustomtags()
{
	echo '<link rel="preload" href="' . do_shortcode('[theme_url]') . '/assets/img/common/mail-white.svg" as="image">' . "\n";
}
add_action('wp_head', 'meta_headcustomtags', 99);


/**
 * 文字列トリム処理
 */
function trimString($string, $max)
{
	$txt = str_replace("\r\n", '', $string);
	if (mb_strlen($txt) > $max) {
		return mb_strimwidth($string, 0, $max) . '...';
	} else {
		return $string;
	}
}

/**
 * MW WPフォームの自動改行禁止
 */
function stopAutomaticbr() {
	if ( class_exists( 'MW_WP_Form_Admin' ) ) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ( $forms as $form ) {
			add_filter( 'mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false' );
		}
	}
}
stopAutomaticbr();




/**
 * カスタム投稿タイプの追加
 */
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
  register_post_type( 'case', // カスタム投稿タイプのスラッグの指定
    array(
      'labels' => array(
        'name' => __( '施工事例' ),
        'singular_name' => __( '施工事例' ),
        'add_new' => _x('新規追加', 'case'),
        'add_new_item' => __('新規追加')
      ),
      'public' => true,                 // 投稿タイプをパブリックにする
      'has_archive' => true,            // アーカイブを有効にする
      'hierarchical' => false,          // ページ階層の指定
      'menu_position' =>5,              // 管理画面上の配置指定
      'menu_icon' => 'dashicons-star-filled',  // アイコン
      'supports' => array('title') // サポート指定
      // 全てのサポートを使う場合は下記参照
      //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
    )
  );

  register_post_type( 'plan', // カスタム投稿タイプのスラッグの指定
    array(
      'labels' => array(
        'name' => __( 'プラン集' ),
        'singular_name' => __( 'プラン集' ),
        'add_new' => _x('新規追加', 'plan'),
        'add_new_item' => __('新規追加')
      ),
      'public' => true,                 // 投稿タイプをパブリックにする
      'has_archive' => true,            // アーカイブを有効にする
      'hierarchical' => false,          // ページ階層の指定
      'menu_position' =>5,              // 管理画面上の配置指定
      'menu_icon' => 'dashicons-star-filled',  // アイコン
      'supports' => array('title') // サポート指定
      // 全てのサポートを使う場合は下記参照
      //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
    )
  );
}
/**
 * プラン集にタクソノミー追加
 */
function add_plan_case_taxonomies() {
  // シリーズ
  register_taxonomy(
    'series',
    array('plan', 'case'),
    array(
      'hierarchical' => true,
      'label' => 'シリーズ',
      'singular_label' => 'シリーズ',
      'public' => true,
      'show_ui' => true
    )
  );

  // 坪数
  register_taxonomy(
    'size',
    array('plan', 'case'),
    array(
      'hierarchical' => true,
      'label' => '坪数',
      'singular_label' => '坪数',
      'public' => true,
      'show_ui' => true
    )
  );

  // 予算
  register_taxonomy(
    'budget',
    array('plan', 'case'),
    array(
      'hierarchical' => true,
      'label' => '予算',
      'singular_label' => '予算',
      'public' => true,
      'show_ui' => true
    )
  );

  // 間取り
  register_taxonomy(
    'layout',
    array('plan', 'case'),
    array(
      'hierarchical' => true,
      'label' => '間取り',
      'singular_label' => '間取り', 
      'public' => true,
      'show_ui' => true
    )
  );

  // 階数
  register_taxonomy(
    'floors',
    array('plan', 'case'),
    array(
      'hierarchical' => true,
      'label' => '階数',
      'singular_label' => '間取り', 
      'public' => true,
      'show_ui' => true
    )
  );
}
add_action('init', 'add_plan_case_taxonomies');

/**
 * 施工事例にタクソノミー追加
 */
function add_case_taxonomy() {
  register_taxonomy(
    'case_category', // タクソノミースラッグ
    'case',          // 使用するカスタム投稿タイプを指定
    array(
      'hierarchical' => true,          // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
      'label' => '導入カテゴリ',          // メニューに表示される
      'singular_label' => '導入カテゴリ', // 単体系
      'public' => true,                // 投稿タイプをパブリックにする
      'show_ui' => true                // 管理画面上に編集画面を表示するかを指定
    )
  );
}
add_action( 'init', 'add_case_taxonomy' );


/**
 * 固定ページ親判定
 */
function page_is_ancestor_of($slug)
{
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
//     $description = 'いえとち本舗久喜店の施工事例です。';
//   }
//   return $description;
// }
// add_filter('aioseo_description', 'archive_description');
// 
// 

//カスタムフィールドに自動有料化設定を追加
function add_auto_paywall_custom_fields()
{
  add_meta_box(
    'auto_paywall_settings',
    '自動有料化設定',
    'auto_paywall_custom_fields',
    'post',
    'side'
  );
}
add_action('add_meta_boxes', 'add_auto_paywall_custom_fields');

//任意の時間に無料記事から有料記事にするカテゴリを設定するカスタムフィールド
function auto_paywall_custom_fields($post)
{
  $auto_paywall = get_post_meta($post->ID, 'auto_paywall', true);
  $paywall_date = get_post_meta($post->ID, 'paywall_date', true);
  $paywall_time = get_post_meta($post->ID, 'paywall_time', true);
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

function add_auto_paywall_category($post_id)
{
  date_default_timezone_set('Asia/Tokyo');
  

  // 投稿の有料化処理
  $paywall_date = get_post_meta($post_id, 'paywall_date', true);
  $paywall_time = get_post_meta($post_id, 'paywall_time', true);
  $paywall_datetime = strtotime($paywall_date . ' ' . $paywall_time);

  if ($paywall_datetime <= time()) {
    $cat = get_category_by_slug('end');
    if ($cat) {
      wp_set_post_categories($post_id, $cat->term_id, true);
    }
  }
}
add_action('my_auto_function_cron', 'add_auto_paywall_category');

function add_wp_cron_schedule_auto_paywall($post_id)
{
  // 予約投稿が公開される際の処理をスキップ
  if (defined('DOING_CRON') && DOING_CRON) return;

   //記事の種類が投稿ではない　または wpのオートセーブの
  if (get_post_type($post_id) !== 'post'  || defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

  if (!isset($_POST['auto_paywall'])) {
    delete_post_meta($post_id, 'auto_paywall');
    delete_post_meta($post_id, 'paywall_date');
    delete_post_meta($post_id, 'paywall_time');
    return;
  }
  //paywallの時間設定
  update_post_meta($post_id, 'auto_paywall', $_POST['auto_paywall']);
  update_post_meta($post_id, 'paywall_date', $_POST['paywall_date']);
  update_post_meta($post_id, 'paywall_time', $_POST['paywall_time']);

  
  $scheduled_time = wp_next_scheduled('my_auto_function_cron', array($post_id));

  //すでに同じ投稿IDでcronが登録してある場合は元のcronを削除して新たなcronを追加
  if ($scheduled_time) {
    wp_unschedule_event($scheduled_time, 'my_auto_function_cron', array($post_id));
  }

  date_default_timezone_set('Asia/Tokyo');
  $datetime = strtotime($_POST['paywall_date'] . ' ' . $_POST['paywall_time']);

  //カスタムフィールドで設定した時間が現在時刻より未来の場合はcronを登録
  if ($datetime > time()) {
    wp_schedule_single_event($datetime, 'my_auto_function_cron', array($post_id));
  }
}
add_action('save_post', 'add_wp_cron_schedule_auto_paywall');

// カスタム投稿タイプ「スタッフ」を登録
function create_staff_post_type() {
    $labels = array(
        'name'               => 'スタッフ',
        'singular_name'      => 'スタッフ',
        'menu_name'          => 'スタッフ',
        'add_new'           => '新規追加',
        'add_new_item'      => '新規スタッフを追加',
        'edit_item'         => 'スタッフを編集',
        'new_item'          => '新規スタッフ',
        'all_items'         => 'すべてのスタッフ',
        'view_item'         => 'スタッフを表示',
        'search_items'      => 'スタッフを検索',
        'not_found'         => 'スタッフが見つかりませんでした',
        'not_found_in_trash'=> 'ゴミ箱にスタッフが見つかりませんでした'
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-groups',
        'supports'          => array('title', 'editor', 'thumbnail'),
        'rewrite'           => array('slug' => 'staff')
    );

    register_post_type('staff', $args);
}
add_action('init', 'create_staff_post_type');

// カスタムタクソノミー「部署」を追加
function create_department_taxonomy() {
    $labels = array(
        'name'              => '部署',
        'singular_name'     => '部署',
        'search_items'      => '部署を検索',
        'all_items'         => 'すべての部署',
        'edit_item'         => '部署を編集',
        'add_new_item'      => '新規部署を追加',
        'new_item_name'     => '新規部署名'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'department')
    );

    register_taxonomy('department', array('staff'), $args);
}
add_action('init', 'create_department_taxonomy');

function register_event_post_type() {
    $labels = array(
        'name'               => 'イベント',
        'singular_name'      => 'Event',
        'menu_name'          => 'イベント',
        'name_admin_bar'     => 'Event',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'new_item'           => 'New Event',
        'edit_item'          => 'Edit Event',
        'view_item'          => 'View Event',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No events found.',
        'not_found_in_trash' => 'No events found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'event'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('event', $args);

    // イベントカテゴリーのタクソノミーを追加
    $category_labels = array(
        'name'              => 'イベントカテゴリー',
        'singular_name'     => 'イベントカテゴリー',
        'search_items'      => 'イベントカテゴリーを検索',
        'all_items'         => 'すべてのイベントカテゴリー',
        'parent_item'       => '親イベントカテゴリー',
        'parent_item_colon' => '親イベントカテゴリー:',
        'edit_item'         => 'イベントカテゴリーを編集',
        'update_item'       => 'イベントカテゴリーを更新',
        'add_new_item'      => '新規イベントカテゴリーを追加',
        'new_item_name'     => '新規イベントカテゴリー名',
        'menu_name'         => 'カテゴリー'
    );

    $category_args = array(
        'hierarchical'      => true,
        'labels'            => $category_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'event-category')
    );

    register_taxonomy('event-category', array('event'), $category_args);
}
add_action('init', 'register_event_post_type');
