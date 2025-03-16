<?php get_header();
$name = get_the_title(); //名称
$copywriting = get_field('copywriting'); //キャッチ
$record_low_price = get_field('record-low-price'); //最安値

//画像
$thumbnail = get_field('thumbnail');
$thumbnail_url = wp_get_attachment_image_src($thumbnail, 'large')[0];

$rand_area1 = get_field('rand-area1'); //施工面積
$rand_area2 = get_field('rand-area2'); //坪数
$floor_space = get_field('floor-space'); //延床面積

$point1 = get_field('point1'); //ポイント1
$point2 = get_field('point2'); //ポイント2
$point3 = get_field('point3'); //ポイント3

//間取り1
$madori_img_id1 = get_field('madori1');
if ($madori_img_id1) {
  $madori_img_url1 = wp_get_attachment_image_src($madori_img_id1, 'large')[0];
  $madori_title1 = get_field('madori_title1');
  $madori_text1 = get_field('madori_text1');
}

//間取り2
$madori_img_id2 = get_field('madori2');
if ($madori_img_id2) {
  $madori_img_url2 = wp_get_attachment_image_src($madori_img_id2, 'large')[0];
  $madori_title2 = get_field('madori_title2');
  $madori_text2 = get_field('madori_text2');
}

$kw = get_field('kw'); //売電量
$monthly_repayment = get_field('monthly-repayment'); //月々のご返済
$monthly_economic_benefits = get_field('monthly-economic-benefits'); //月々の経済メリット
$reduction_of_electricity_bill = get_field('reduction-of-electricity-bill'); //電気代削減
$electricity_sales_income = get_field('electricity-sales-income'); //売電収入
$actual_cost = get_field('actual-cost'); //実質負担額

$frontage = get_field('frontage'); //間口
$depth = get_field('depth'); //奥行き
$first_floor_area = get_field('1st-floor-area'); //1階面積
$second_floor_area = get_field('2st-floor-area'); //2階面積

// カテゴリー取得
// 間取り
$madori = get_the_terms($post->ID, 'layout'); //間取り
if($madori) {
  $madori_name = $madori[0]->name; //間取りの名前を取得
}
// シリーズ
$series = get_the_terms($post->ID, 'series');
if($series) {
  $series_name = $series[0]->name;
}

// 坪数
$size = get_the_terms($post->ID, 'size');
if($size) {
  $size_name = $size[0]->name;
}

// 予算
$budget = get_the_terms($post->ID, 'budget');
if($budget) {
  $budget_name = $budget[0]->name;
}

// 階数
$floor = get_the_terms($post->ID, 'floors');
if($floor) {
  $floor_name = $floor[0]->name;
}
?>

<div class="page plan-page">
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">プラン集</span>
        <span class="_below">PLANS</span>
      </h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="planItem">
    <div class="inner planItem__inner">
      
      <h2 class="planItem__ttl wow fadeInUp"><?php echo $copywriting ?></h2>
      <div class="planItem__list">
        <ul>
          <?php if(!empty($floor_name)): ?>
          <li><a href="<?php echo home_url('/plan/?floors=' . $floor[0]->slug); ?>"><?php echo $floor_name; ?></a></li>
          <?php endif; ?>
          <?php if(!empty($size_name)): ?>
          <li><a href="<?php echo home_url('/plan/?size=' . $size[0]->slug); ?>"><?php echo $size_name; ?></a></li>
          <?php endif; ?>
          <?php if(!empty($budget_name)): ?>
          <li><a href="<?php echo home_url('/plan/?budget=' . $budget[0]->slug); ?>"><?php echo $budget_name; ?></a></li>
          <?php endif; ?>
          <?php if(!empty($madori_name)): ?>
          <li><a href="<?php echo home_url('/plan/?layout=' . $madori[0]->slug); ?>"><?php echo $madori_name; ?></a></li>
          <?php endif; ?>
        </ul>
      </div>
      <p class="planItem__txt wow fadeInUp"><?php echo get_the_title(); ?></p>

      <div class="planItem__main wow fadeInUp">
        <div class="planItem__img1"><img data-js-ofi src="<?php echo $thumbnail_url; ?>" alt="<?php echo $name  ?>"></div>
        <div class="planItem__mainContents">
          <div class="cardTable">
            <p><?php echo $rand_area2; ?><span class="small">坪</span></p>
            <p><?php echo $record_low_price; ?><span class="small">万円(税抜き)〜</span></p>
          </div>
          
          <h3>point</h3>
          <ul class="point-list">
            <?php if (!empty($point1)): ?>
            <li class="point-list__item">
              <i class="fas fa-check"></i>
              <?php echo $point1 ?>
            </li>
            <?php endif; ?>
            <?php if (!empty($point2)): ?>
            <li class="point-list__item">
              <i class="fas fa-check"></i>
              <?php echo $point2 ?>
            </li>
            <?php endif; ?>
            <?php if (!empty($point3)): ?>
            <li class="point-list__item">
              <i class="fas fa-check"></i>
              <?php echo $point3 ?>
            </li>
            <?php endif; ?>
          </ul>
          
        </div>
      </div>

			<?php if (!empty($madori_img_id1)): ?>
				<h2 class="sectionTitle">間取り図</h2>
				<div class="floorPlan-container">
					<div class="planItem__box wow fadeInUp">
            <h3 class="planItem__subTtl wow fadeInUp"><?php echo $madori_title1; ?></h3>
            <div class="planItem__img3">
              <img data-js-ofi src="<?php echo $madori_img_url1; ?>" alt="<?php echo $name  ?>" class="modal-trigger">
              <button type="button" class="zoom-button" aria-label="拡大表示">
                <i class="fas fa-search-plus"></i>
              </button>
            </div>
            <p class="planItem__desc"><?php echo $madori_text1; ?></p>
					</div>

					
					<div class="planItem__box wow fadeInUp">
          <?php if (!empty($madori_img_id2)): ?>
          <h3 class="planItem__subTtl wow fadeInUp"><?php echo $madori_title2; ?></h3>
						<div class="planItem__img3">
							<img data-js-ofi src="<?php echo $madori_img_url2; ?>" alt="<?php echo $name  ?>" class="modal-trigger">
							<button type="button" class="zoom-button" aria-label="拡大表示">
								<i class="fas fa-search-plus"></i>
							</button>
              <p class="planItem__desc"><?php echo $madori_text2; ?></p>
						</div>
            <?php endif; ?>
					</div>
				</div>

				<div class="modal" id="floorplanModal1">
					<div class="modal__content">
						<button type="button" class="modal__close" aria-label="閉じる">
							<i class="fas fa-times"></i>
						</button>
						<img src="<?php echo $madori_img_url1; ?>" alt="<?php echo $name; ?>">
						<?php if (!empty($madori_title1)): ?>
							<p class="modal__caption"><?php echo $madori_title1; ?></p>
						<?php endif; ?>
					</div>
				</div>

				<?php if (!empty($madori_img_id2)): ?>
				<div class="modal" id="floorplanModal2">
					<div class="modal__content">
						<button type="button" class="modal__close" aria-label="閉じる">
							<i class="fas fa-times"></i>
						</button>
						<img src="<?php echo $madori_img_url2; ?>" alt="<?php echo $name; ?>">
						<?php if (!empty($madori_title2)): ?>
							<p class="modal__caption"><?php echo $madori_title2; ?></p>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
			<?php endif; ?>

      <?php
      // 価格計算
      $house_price = intval(str_replace(',', '', $record_low_price)) * 10000; // 建物価格（万円から円に変換）
      $land_price = $rand_area2 * 216000; // 土地代（21.6万円/坪）
      $misc_cost = 2500000; // 諸費用250万円
      $total_price = $house_price + $land_price + $misc_cost;

      // ローン計算（40年）
      $annual_interest = 0.007; // 年利0.7%
      $loan_years = 40;
      $monthly_interest = $annual_interest / 12;
      $total_payments = $loan_years * 12;
      
      // 月々の返済額計算（元利均等返済）
      $monthly_payment = $total_price * ($monthly_interest * pow(1 + $monthly_interest, $total_payments)) / (pow(1 + $monthly_interest, $total_payments) - 1);
      $monthly_payment = round($monthly_payment);
      
      // 年間返済額
      $yearly_payment = $monthly_payment * 12;
      ?>

      <h2 class="sectionTitle">返済シミュレーション</h2>
      <div class="simulation-table loan-simulation">
        <table>
          <tr class="price-breakdown">
            <th colspan="2">価格内訳</th>
          </tr>
          <tr>
            <th>建物本体価格</th>
            <td><span class="emphasis"><?php echo number_format($house_price); ?></span><span class="unit">円</span></td>
          </tr>
          <tr>
            <th>土地代（<?php echo $rand_area2; ?>坪）</th>
            <td><?php echo number_format($land_price); ?>円</td>
          </tr>
          <tr>
            <th>諸費用</th>
            <td><?php echo number_format($misc_cost); ?>円</td>
          </tr>
          <tr class="total-row">
            <th>総額</th>
            <td><span class="emphasis"><?php echo number_format($total_price); ?></span><span class="unit">円</span></td>
          </tr>
          <tr class="payment-breakdown">
            <th colspan="2">返済プラン</th>
          </tr>
          <tr class="important-row">
            <th>月々のご返済</th>
            <td><span class="emphasis"><?php echo number_format($monthly_payment); ?></span><span class="unit">円</span></td>
          </tr>
          <tr>
            <th>年間のご返済</th>
            <td><?php echo number_format($yearly_payment); ?>円</td>
          </tr>
          <tr>
            <th>借入総額</th>
            <td><?php echo number_format($total_price); ?>円</td>
          </tr>
        </table>
        <div class="simulation-table__notes">
          <p class="simulation-table__note">※支払い期間40年、ボーナス払いなし、3年固定、実質年率0.7%の場合。</p>
          <p class="simulation-table__note">※上記借り入れ金額は参考金額です。</p>
          <p class="simulation-table__note">※杭工事、カーテン工事は別途。固定資産税・不動産取得税・印紙税は含まれておりません。</p>
          <p class="simulation-table__note">※表示価格に含まれる消費税率は10%です。</p>
          <p class="simulation-table__note">※予告なく建物価格を変更する場合があります。</p>
          <p class="simulation-table__note">※地域により別途施工費が発生します。</p>
          <p class="simulation-table__note">※プランにオプションを含む場合、金額が異なる場合がございます。</p>
        </div>
      </div>

      <h2 class="sectionTitle">売電シミュレ－ション</h2>
      <div class="simulation-table">
        <div class="simulation-table__header">
          <p class="simulation-table__title">標準 <?php echo $kw; ?>kW 売電シミュレ－ション</p>
        </div>
        <table>
          <tr>
            <th>月々のご返済</th>
            <td><?php echo $monthly_repayment; ?>円</td>
          </tr>
          <tr class="merit-row">
            <th>月々の経済メリット</th>
            <td><?php echo $monthly_economic_benefits; ?>円</td>
          </tr>
          <tr class="breakdown">
            <th>└ 電気代削減</th>
            <td><?php echo $reduction_of_electricity_bill; ?>円</td>
          </tr>
          <tr class="breakdown">
            <th>└ 売電収入</th>
            <td><?php echo $electricity_sales_income ?>円</td>
          </tr>
          <tr class="result-row">
            <th>実質負担額</th>
            <td><?php echo $actual_cost ?>円</td>
          </tr>
        </table>
      </div>

      <h2 class="sectionTitle">面積表</h2>
      <div class="simulation-table">
        <table>
          <tr>
            <th>１階面積</th>
            <td><?php echo $first_floor_area; ?></td>
          </tr>
          <tr>
            <th>２階面積</th>
            <td><?php echo $second_floor_area; ?></td>
          </tr>
          <tr>
            <th>延床面積</th>
            <td><?php echo $floor_space ?></td>
          </tr>
          <tr>
            <th>施工面積</th>
            <td><?php echo $rand_area1 ?></td>
          </tr>
          <tr>
            <th>間口</th>
            <td><?php echo $frontage; ?>mm</td>
          </tr>
          <tr>
            <th>奥行</th>
            <td><?php echo $depth; ?>mm</td>
          </tr>
        </table>
      </div>

      
      <a href="<?php echo do_shortcode('[home_url]'); ?>plan" class="planItem__btn wow fadeInUp">一覧に戻る</a>
    </div>
  </section>
</div>

<?php get_footer(); ?>
