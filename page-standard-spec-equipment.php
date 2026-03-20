<?php
/*
Template Name: 標準仕様 - 住宅設備
*/
?>
<?php get_header(); ?>

<div class="specEquipment">

	<!-- fv -->
	<section class="fv">
		<img class="fv__img" src="<?php echo do_shortcode(
  	"[theme_url]",
  ); ?>/assets/img/standard-spec/equipment/equipment-kv.jpg" alt="住宅設備">
		<div class="inner fv__inner">
			<div class="fv__ttl">
				<h2>
					毎日の暮らしに寄り添う<br>
					住宅設備
				</h2>
			</div>
		</div>
	</section>

	<?php get_template_part("template-parts/breadcrumb"); ?>
	<!-- HEAD -->
	<section class="specHead">
		<div class="inner">
			<div class="ttlWrap">
				<h2 class="section-ttl">Equipment
					<span>商品概要</span>
				</h2>
			</div>
			<h3 class="specHead__title">住宅設備</h3>

			<div class="specHead__lead">
				<p>
					キッチンや浴室、洗面、トイレなど、<br class="show--sp">
					毎日の暮らしの中で自然と使われるもの。<br>
					料理や身支度、入浴や掃除といった<br class="show--sp">
					日々の生活の場面に関わる設備です。
				</p>
				<p>
					採用している内容や特徴を、<br class="show--sp">
					ひとつずつご覧いただけます。
				</p>
			</div>

			<!-- ページ内リンク -->
			<nav class="specNav">
				<ul class="specNav__list">
					<li class="specNav__item">
						<a href="#kitchen" class="specNav__link">
							<img src="<?php echo do_shortcode(
       	"[theme_url]",
       ); ?>/assets/img/standard-spec/equipment/icon-kitchen.png" alt="" class="specNav__icon">
							<span class="specNav__text">システムキッチン</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#washroom" class="specNav__link">
							<img src="<?php echo do_shortcode(
       	"[theme_url]",
       ); ?>/assets/img/standard-spec/equipment/icon-washroom.png" alt="" class="specNav__icon">
							<span class="specNav__text">洗面化粧台</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#bathroom" class="specNav__link">
							<img src="<?php echo do_shortcode(
       	"[theme_url]",
       ); ?>/assets/img/standard-spec/equipment/icon-bathroom.png" alt="" class="specNav__icon">
							<span class="specNav__text">ユニットバス</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
					<li class="specNav__item">
						<a href="#toilet" class="specNav__link">
							<img src="<?php echo do_shortcode(
       	"[theme_url]",
       ); ?>/assets/img/standard-spec/equipment/icon-toilet.png" alt="" class="specNav__icon">
							<span class="specNav__text">トイレ</span>
							<span class="specNav__arrow"></span>
						</a>
					</li>
				</ul>
				<p class="specNav__note">※ 各項目へページ内ジャンプ or 下スクロールでご覧いただけます</p>
			</nav>
		</div>
	</section>

	<!-- Kitchen -->
	<section id="kitchen" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Kitchen</h2>
				<p class="specDetail__subtitle">システムキッチン [LIXIL ESシリーズ]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo do_shortcode(
     	"[theme_url]",
     ); ?>/assets/img/standard-spec/equipment/kitchen1.jpg" alt="システムキッチン">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						機能もデザインも<br>
						心地よく整うキッチン
					</h3>
					<p class="specDetail__desc">
						キッチンは、毎日の家事の中心になる場所。<br class="show--sp">
						使いやすさとお手入れのしやすさを考えた<br class="show--sp">
						システムキッチンを採用しています。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/kitchen2.jpg" alt="人造大理石トップ">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">人造大理石トップ</h4>
						<p class="specFeature__text">熱や汚れに強く、毎日の調理や後片付けを想定した素材を採用しています。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/kitchen3.jpg" alt="キレイシンク">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">キレイシンク</h4>
						<p class="specFeature__text">汚れがたまりにくい形状で、日常のお手入れがしやすい設計です。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/kitchen4.jpg" alt="キッチンコンセント">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">キッチンコンセント</h4>
						<p class="specFeature__text">調理家電がサッと使える位置にコンセントを設け、作業の流れを妨げません。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/kitchen5.jpg" alt="食器洗い乾燥機">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">食器洗い乾燥機</h4>
						<p class="specFeature__text">洗い物にかかる手間を抑え、毎日の後片付けをスムーズに行えます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/kitchen6.jpg" alt="全28色の扉カラー">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">全28色の扉カラー</h4>
						<p class="specFeature__text">空間の雰囲気に合わせて、幅広いカラーから選ぶことができます。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Washroom -->
	<section id="washroom" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Washroom</h2>
				<p class="specDetail__subtitle">洗面化粧台 [LIXIL カスタムバニティ]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/equipment/washroom1.jpg" alt="洗面化粧台">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						身支度が整う、<br>
						使いやすい洗面台
					</h3>
					<p class="specDetail__desc">
						朝の身支度や帰宅後の手洗いなど、一日に<br class="show--sp">
						何度も使う洗面スペース。<br>
						使いやすさと清潔感を大切にしながら、空間に<br class="show--sp">
						合わせて選べる洗面化粧台を採用しています。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/washroom2.jpg" alt="大型洗面ボウル">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">大型洗面ボウル</h4>
						<p class="specFeature__text">水はねを抑え、洗顔や手洗いがしやすい形状のボウルです。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/washroom3.jpg" alt="くるくる水栓">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">くるくる水栓</h4>
						<p class="specFeature__text">吐水口を回転させて、使うシーンに合わせた操作ができます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/washroom4.jpg" alt="デザインバリエーション">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">デザインバリエーション</h4>
						<p class="specFeature__text">カウンターや扉の組み合わせにより、空間に合わせて選べます。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/washroom5.jpg" alt="選べるサイズ展開">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">選べるサイズ展開</h4>
						<p class="specFeature__text">設置場所に応じて、間口サイズを調整できます。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Bathroom -->
	<section id="bathroom" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Bathroom</h2>
				<p class="specDetail__subtitle">バスルーム [LIXIL BMUS]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/equipment/bathroom1.jpg" alt="バスルーム">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						一日の疲れを<br>
						ゆったり癒すバスルーム
					</h3>
					<p class="specDetail__desc">
						一日の終わりに、心と体を休める場所。<br>
						必要な機能をシンプルに備え、使い方に<br class="show--sp">
						合わせて整えられるバスルームを採用しています。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/bathroom2.jpg" alt="エコアクアシャワー">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">エコアクアシャワー</h4>
						<p class="specFeature__text">水量を抑えながら、浴び心地にも配慮したシャワーを採用しています。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/bathroom3.jpg" alt="くるりんポイ排水口">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">くるりんポイ排水口</h4>
						<p class="specFeature__text">髪の毛がまとまりやすく、排水口まわりの掃除がしやすい仕様です。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/bathroom4.jpg" alt="マグネット対応壁面">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">マグネット対応壁面</h4>
						<p class="specFeature__text">収納や小物を自由に付け外しでき、使い方に合わせて調整できます。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Toilet -->
	<section id="toilet" class="specDetail">
		<div class="inner">
			<div class="specDetail__titleWrap">
				<h2 class="specDetail__title">Toilet</h2>
				<p class="specDetail__subtitle">トイレ [LIXIL ベーシア]</p>
			</div>

			<div class="specDetail__hero">
				<div class="specDetail__mainImg">
					<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/equipment/toilet1.jpg" alt="トイレ">
				</div>
				<div class="specDetail__heroBody">
					<h3 class="specDetail__catch">
						清潔さを保つ、<br>
						落ち着いたトイレ空間
					</h3>
					<p class="specDetail__desc">
						毎日使う場所だからこそ、清潔さと使いやすさを<br class="show--sp">
						重視したトイレを採用しています。
					</p>
				</div>
			</div>

			<ul class="specFeature">
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/toilet2.jpg" alt="ハイパーキラミック便器">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">ハイパーキラミック便器</h4>
						<p class="specFeature__text">汚れが付きにくく、長く清潔に使いやすい素材です。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode(
      	"[theme_url]",
      ); ?>/assets/img/standard-spec/equipment/toilet3.jpg" alt="ビデ専用ノズル">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">ビデ専用ノズル</h4>
						<p class="specFeature__text">用途ごとにノズルを分け、衛生面に配慮した構造です。</p>
					</div>
				</li>
				<li class="specFeature__item">
					<div class="specFeature__img">
						<img src="<?php echo do_shortcode("[theme_url]"); ?>/assets/img/standard-spec/equipment/toilet4.jpg" alt="ECO5洗浄">
					</div>
					<div class="specFeature__body">
						<h4 class="specFeature__title">ECO5洗浄</h4>
						<p class="specFeature__text">洗浄水量を抑え、日常的な節水に配慮しています。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- toTopButton -->
	<?php get_template_part("template-parts/toTopButton"); ?>

	<!-- finalMessage -->
	<?php get_template_part("template-parts/message"); ?>

	<!-- PRODUCTS -->
	<?php get_template_part("template-parts/specProductArea"); ?>


	<?php get_template_part("template-parts/contactArea"); ?>


<?php get_footer(); ?>
