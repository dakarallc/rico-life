<?php
/*
Template Name: いえとち本舗とは
*/
?>
<?php get_header(); ?>

<div class="about">
<!-- ===============================================================================================
mv
================================================================================================ -->
	<main class="main">
		<div class="show--pc">
			<img  src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-pc.png" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-pc.png" class=" ls-is-cached lazyloaded">
			<noscript>
				<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-pc.png" alt="いえとち本舗の平屋" data-eio="l">
			</noscript>
		</div>
		<div class="show--sp">
			<img  src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-sp.png" alt="いえとち本舗の平屋" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-sp.png" class=" ls-is-cached lazyloaded">
			<noscript>
				<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/kv-about-sp.png" alt="いえとち本舗の平屋" data-eio="l">
			</noscript>
		</div>
	</main>
	<?php if (function_exists('bcn_display')) : ?>
		<div class="breadcrumb">
			<div class="breadcrumb__contents">
			<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述
			?>
		</div><!-- /breadcrumb__contents -->
		</div>
	<?php endif; ?>
<!-- ===============================================================================================
about-massage
================================================================================================ -->
<section class="about-massage">
	<div class="about-massage__inner inner">
		<div class="about-massage__inner--title">
			<h3>
				<span class="massage1">住みたい場所</span>をみつけること<br>
				<span class="massage2">高品質な家</span>を選ぶこと<br>
				<span class="massage3">経済的なメリット</span>をつくること<br>
				<span>地域密着70年企業だからできる<br/>ご提案をさせていただきます。</span>
			</h3>
		</div>   

		<div class="about-massage__inner--content">
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" alt="いえとち本舗の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" class=" ls-is-cached lazyloaded">
			<noscript>
			<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/about-massage.png" alt="いえとち本舗の家" data-eio="l">
			</noscript>
		</div>

		<div class="about-massage__inner--title">
			<h3>
				<span>大きくて高い<br class="show--sp"/>無理をした住まいはいらない。<br/>
				そんなご家族のご要望に応え<br/>豊かな暮らしを<br/>いえとち本舗がお届けいたします。</span>
			</h3>
		</div>
	</div>
</section>


<!-- ===============================================================================================
point3
================================================================================================ -->
	<section class="point3">
		<div class="title">
			<h2 class="about-ttl"><span>いえとち本舗は</span><br/>低価格×高品質×ZEHの家</h2>
		</div>
		<div class="point3__inner inner">
			<div class="point3__inner--content section__inner--content">
				<!-- <p>未来の豊かな暮らしから逆算した住む人にちょうどいい規格住宅です。<br>
				つくりたいのはただの家ではなく、建てた後の豊かなライフスタイル。<br>
				イエテラス は家族の暮らしを豊かにするベストな選択肢です。</p> -->
				<div class="parts">
					<a href="#plan">
						<div class="box">
							<h3>169,280通りの選択肢</h3>
							<p>自由に選べる憧れのデザイン&間取り</p>
							<img class="bgImage" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/orange-home-bg.png" alt="">
						</div>
					</a>
					<a href="#high">
						<div  div class="box">
							<h3>太陽光発電標準搭載</h3>
							<p>　月々15,000円支払いがお得　　</p>
							<img class="bgImage" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/orange-home-bg.png" alt="">
						</div>
					</a>
					<a href="#low">
						<div class="box">
							<h3>全棟100%ZHE基準</h3>
							<p>一年中快適なゼロエネルギー住宅対応</p>
							<img class="bgImage" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/orange-home-bg.png" alt="">
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

<!-- ===============================================================================================
zeh
================================================================================================ -->
	<section class="zeh section " id="zeh1">
		<div class="zeh__inner inner">
			<div class="zeh__inner--title">
				<h2 class="about-ttl">ZEH基準の住宅性能で<br>快適で健康な暮らし</h2>
			</div>
			<div class="zeh__inner--content">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="zehモデル" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/zeh.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/zeh.png" alt="zehモデル" data-eio="l"></noscript>
				<p>自宅で発電した電気を使い、余った電気は売電する時代です。(環境にも、家計にも優しい時代)当社は、光熱費（電気代を含む）やガソリン代も0円（電気自動車の場合）、電気を買わずに住む住宅を目指し、大容量の太陽光発電を標準搭載しています。
				太陽光発電システムは自然エネルギーを利用する為、発電時にCO2を排出することなく、環境にとても優しい仕組みです。</p>
			</div>
			<p class="zeh-under-text">全棟、土地お探しサービス付き住宅です</p>
		</div>
	</section>

<!-- ===============================================================================================
いえとち本舗とは
================================================================================================ -->
	<section class="about-detail">
		<div class="point3__inner--title">
			<h2 class="about-ttl">いえとち本舗とは</h2>
		</div>
		<div class="inner">
			<div class="about-detail-content">
				<h3 class="about-detail-title">低価格×高品質を実現</h3>
				<div class="pc-flex">
					<img class="leftImg" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about-detail1.png" alt="">
					<div class="about-detail-message">
						<p>土地や建物が大きな家は住宅ローンも大きくなります。<br class="show--pc"/>そしてローンだけでなく今後は光熱費の上昇で固定費がどんどん高くなります。そのため、無理なく持てる家を建てることが大事です。<br class="show--sp"/>いえとち本舗では、注文住宅を規格化し合理化することで高水準な仕様のまま、コストダウンを実現しております。さらに、太陽光発電が標準装備でエネルギーコスト節約という付加価値つき住宅です。<br class="show--sp"/>単に安いのではなく、お客様が安心して快適に暮らせるような仕様になっております。</p>
					</div>
				</div>
			</div>

			<div class="about-detail-content">
				<h3 class="about-detail-title">太陽光で家が稼いでくれる</h3>
				<div class="pc-flex">
					<img class="leftImg" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about-detail2.png" alt="">
					<div class="about-detail-message">
						<p>太陽光パネル付きの家が稼いでくれる。<br>いえとち本舗のイエテラスは、太陽光が標準搭載です。近年、電気代が高騰しておりますが、まだまだ上がることが予想されております。<br class="show--sp"/>その電気を家が蓄え、売電してくれることで毎月の電気代が0円になるだけでなく、搭載量によっては住宅ローンの負担軽減も可能です。さらに、自然エネルギーを利用した太陽光発電はCO2を排出することがないため、環境にとてもやさしいです。<br class="show--sp"/>日々の生活が充実したものになります。</p>
					</div>
				</div>
			</div>

			<div class="about-detail-content">
				<h3 class="about-detail-title">豊富なデザインと間取り</h3>
				<div class="pc-flex">
					<img class="leftImg" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about-detail3.png" alt="">
					<div class="about-detail-message">
						<div class="select-title">
							<p>169,280通りの選択肢</p>
						</div>

						<div class="choises__inner--content section__inner--content">
							<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" alt="選択肢" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" class=" ls-is-cached lazyloaded">
							<noscript>
								<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/choices.png" alt="選択肢" data-eio="l">
							</noscript>
						</div>
						<p>規格化したから、決められたものから少しの変更しかできないと思われるかと思いますが、それぞれ豊富な種類からカスタマイズすることが可能です。<br class="show--sp"/>自分たちだけのオシャレなマイホームが完成します。</p>

						<div class="select-title step7">
							<p>いえとち本舗の選び方7ステップ</p>
							<ol>
								<li>住みたい場所(土地)を選ぶ</li>
								<li>大きさ・間取りを選ぶ</li>
								<li>屋根のデザインを選ぶ</li>
								<li>太陽光の容量を選ぶ</li>
								<li>外観のデザイン、カラーを選ぶ</li>
								<li>内観のデザイン、カラーを選ぶ</li>
								<li>設備を選ぶ</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<div class="about-detail-content">
				<h3 class="about-detail-title">災害に強く耐久性◎</h3>
				<div class="pc-flex">
					<img class="leftImg" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about-detail4.png" alt="">
					<div class="about-detail-message">
						<p>日本は地震大国です。何十年も暮らすマイホームだからこそ地震に強い耐震性と耐久性が大切です。『いえとち本舗』は基礎工事から内装工事に至るまで耐久性とエコロジーを取り入れ、レベルの高い性能を実現しています。凹凸のないハコ型にすることで、地震に対して構造部分の強さを保つだけでなく、建物価格を低く抑えることができます。また規格化した物件だからこそ、一定の品質を保ちます。</p>
					</div>
				</div>
			</div>

			<div class="about-detail-content">
				<h3 class="about-detail-title">土地探しもお任せ！</h3>
				<div class="pc-flex">
					<img class="leftImg" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about-detail5.png" alt="">
					<div class="about-detail-message">
						<p>マイホームを建てる時には土地探しも重要になります。現地見学をして周辺の環境を確かめたり、物件を含めた全体予算をしっかりと算出したりと、面倒なことがたくさんあります。いえとち本舗は、「家」も「土地」もセットでご提案いたしますのでご安心ください。地元密着で70年の情報力と提案力でサポートいたします。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- ===============================================================================================
plan
========================================================================================== -->
	<section class="section" id="plan">
		<div class="point3__inner--title">
			<h2 class="about-ttl"><span>169,280通りの選択肢</span><br/>
			坪数×間取り×デザインの<br class="show--sp"/>豊富なプラン</h2>
		</div>

		<div class="plan planIn">
		<input id="tab01" type="radio" name="tab_btn" checked="checked">
		<input id="tab02" type="radio" name="tab_btn">
		<div class="atab_area">
			<label class="tab01_label" for="tab01">2階建て</label>
			<label class="tab02_label" for="tab02">平屋</label>
		</div>
		<div class="plan__inner first">
			<input id="tab1" type="radio" name="tab_bt" checked="checked">
			<input id="tab2" type="radio" name="tab_bt">
			<input id="tab3" type="radio" name="tab_bt">
			<div class="btab_area">
			<label class="tab1_label" for="tab1"><span>25坪</span><p>1,398万円</p></label>
			<label class="tab2_label" for="tab2"><span>28坪</span><p>1,498万円</p></label>
			<label class="tab3_label" for="tab3"><span>32坪</span><p>1,548万円</p></label>
			</div>
			<div class="panel_area">
			<div id="panel1" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				<div class="floor-plan madori-sp">
					<div class="floor-plan__inner">
					<div class="floor">
						<p>1F</p>
					</div>
					<p>38.76㎡<br>(11.72坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
					<div class="floor-plan__inner">
					<div class="floor">
						<p>2F</p>
					</div>
					<p>39.74㎡<br>(12.02坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-3.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-01png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				</div>
				<div class="floor-plan flex">
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>1F</p>
					</div>
					<p>38.76㎡<br>(11.72坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>2F</p>
					</div>
					<p>39.74㎡<br>(12.02坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-3.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				</div>
			</div>
			<div id="panel2" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-1.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				<div class="floor-plan madori-sp">
					<div class="floor-plan__inner">
					<div class="floor">
						<p>1F</p>
					</div>
					<p>45.27㎡<br>(13.69坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
					<div class="floor-plan__inner">
					<div class="floor">
						<p>2F</p>
					</div>
					<p>46.37㎡<br>(14.02坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/1-01png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				</div>
				<div class="floor-plan flex">
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>1F</p>
					</div>
					<p>45.27㎡<br>(13.69坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>2F</p>
					</div>
					<p>46.37㎡<br>(14.02坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/2-3.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				</div>
			</div>

			<div id="panel3" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="32坪1,188万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-1.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/3-1.png" alt="32坪1,188万円の家" data-eio="l"></noscript>
				</div>
				<div class="floor-plan madori-sp">
					<div class="floor-plan__inner">
					<div class="floor">
						<p>1F</p>
					</div>
					<p>50.85㎡<br>(15.88坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
					<div class="floor-plan__inner">
					<div class="floor">
						<p>2F</p>
					</div>
					<p>52.17㎡<br>(15.78坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
					</div>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				</div>
				<div class="floor-plan flex">
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>1F</p>
					</div>
					<p>50.85㎡<br>(15.88坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="floor-plan__inner madori-pc">
					<div class="floor">
					<p>2F</p>
					</div>
					<p>52.17㎡<br>(15.78坪)</p>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/3-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="plan__inner second">
			<input id="tab4" type="radio" name="tab_b" checked="checked">
			<input id="tab5" type="radio" name="tab_b">
			<input id="tab6" type="radio" name="tab_b">
			<div class="btab_area">
			<label class="tab4_label" for="tab4"><span>21坪</span><p>1,398万円</p></label>
			<label class="tab5_label" for="tab5"><span>24坪</span><p>1,498万円</p></label>
			<label class="tab6_label" for="tab6"><span>27坪</span><p>1,548万円</p></label>
			</div>
			<div class="panel_area">
			<div id="panel4" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/4-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-2.png" class="lazyload madori"><noscript><img class="madori" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/4.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				</div>
			</div>
			<div id="panel5" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/about/5-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-2.png" class="lazyload madori"><noscript><img class="madori" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/5.png" alt="25坪998万円の家" data-eio="l"></noscript>
				</div>
				</div>
			</div>

			<div id="panel6" class="tab_panel">
				<div class="flex">
				<div class="house-img">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-1.png" class="lazyload house"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/img/about/6-1.png" alt="25坪998万円の家" data-eio="l"></noscript>
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="間取り1階" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-2.png" class="lazyload madori"><noscript><img class="madori-pc" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6-2.png" alt="間取り1階" data-eio="l"></noscript>
				</div>
				<div class="repayment-plan">
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" alt="25坪998万円の家" data-src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/6.png" alt="25坪998万円の家" data-eio="l"></noscript>
					
				</div>
				</div>
			</div>
		</div>
	</div>
	</section>

<!-- ===============================================================================================
high-quality
================================================================================================ -->
	<section class="high-quality" id="high">
		<div class="high-quality__inner inner">
			<div class="high-quality__inner--title">
				<h2 class="about-ttl">豊かさから逆算した仕様</h2>
			</div>

			<div class="high-quality__inner--content">
				<p>住宅はご家族の大切な生活の基盤です。家族が「安心・快適・安全」に暮らす為に、価格は抑えつつも、品質はそのままの住まいづくりを基本として考えています。</p>
				<img class="uk-visible@s" src="<?php echo do_shortcode('[theme_url]'); ?>/images/high-quality.png" alt="高品質な家の仕様">
				<img class="uk-hidden@s" src="<?php echo do_shortcode('[theme_url]'); ?>/images/high-quality-sp.png" alt="高品質な家の仕様">
			</div>
		</div>
  </section>


<!-- ===============================================================================================
low-price
================================================================================================ -->
  <!-- <section class="low-price" id="low">
    <div class="low-price__inner">
      <div class="low-price__inner--title">
        <h2 class="about-ttl"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">低価格</font></font></h2>
        <p>今も未来もこだわり価格を実現させる規格住宅の理由</p>
      </div>
      <div class="low-price__inner--contents uk-grid">
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント1" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント1" data-eio="l"></noscript>
          <div class="content__inner">
            <h4>建設・不動産の融合</h4>
            <p>土地と建物をトータルでご提案することにより余計な中間マージンが発生しないため
              余分なコストが発生しません。
            </p>
          </div>
        </div>
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント2" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント2" data-eio="l"></noscript>
          <div class="content__inner">
          <h4>共同で購入！</h4>
          <p>いえとち本舗では全国のフランチャイズ加盟店と建材を共同購入することで、流通コストを削減しています。</p>
          </div>
        </div>
        <div class="content uk-width-1-3@s">
          <img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント3" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" class=" lazyloaded"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/house-bg.svg" alt="低価格のポイント3" data-eio="l"></noscript>
          <div class="content__inner">
            <h4>規格の統一化</h4>
            <p>バランスの取れた住まいの規格設計を基に、高さや間取りの構造を統一。
              無駄な工程を排し規格化することで良い材料や設備を大量購入しコストダウンを実現。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->




<!-- ===============================================================================================
  voice
  ================================================================================================ -->
  <section class="voice section">
    <div class="voice__inner inner">
      <div class="voice__inner--title">
        <h2 class="about-ttl">お客様の声</h2>
      </div>
      <div class="voice__inner--content uk-grid">
        <div class="uk-width-1-2@s">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="お客様との打ち合わせ" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/voice.png" class="lazyload"><noscript><img src="<?php echo do_shortcode('[theme_url]'); ?>/images/voice.png" alt="お客様との打ち合わせ" data-eio="l"></noscript>
        </div>
        <div class="uk-width-1-2@s">
          <p>1番の決め手は地元密着で長く営業しているからです。
          このあたりに住んでいる人(埼玉県久喜市周辺)にも評判がよく、地元の会社なら建てた後のメンテナンスなどにも迅速に対応してくれるだろうと考えていました。<br>
          最初に「こんな外観と間取りで家を建てたい」と話したところ、すぐに「このくらいの建築費でできる」と回答してくれました。コストパフォーマンスが良く質も高いので、かなり早い段階で夫婦2人の意見が一致しました。また太陽光発電は勧められて採用しましたが、光熱費が思った以上の節約になっています。</p>
        </div>
      </div>
    </div>
  </section>

<!-- ===============================================================================================
EVENT
================================================================================================ -->
<?php
  $perPage = -1;
  $args = array(
    'posts_per_page' => $perPage,
    'post_type' => 'post',
    'category_name' => 'event',
    'post_status' => 'publish',
    'category__not_in' => array(get_category_by_slug('end')->term_id)
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : ?>
    <section class="event">
      <div class="inner event__inner">
        <div class="event__box">
          <div class="event__left">
            <h2 class="event__ttl  event__ttl-pc ttl ttl--right ">開催中の<br>イベント</h2><!-- /event__ttl -->
            <h2 class="event__ttl  event__ttl-sp ttl ttl--right ">開催中のイベント</h2><!-- /event__ttl -->
            <!-- ★pc 用ボタン表示 -->
            <a href="<?php echo do_shortcode('[home_url]'); ?>news" class="event__btn topLink show--pc">view more</a><!-- /event__btn -->
          </div><!-- /event__left -->
          <div class="event__right swiper eventSwiper">
            <ul class="event__list swiper-wrapper">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); 
              $eventPic = get_field('event-pic');
              $img_url1 = $eventPic;
              $comment = get_field('comment'); //コメント
              $schedule = get_field('schedule'); //日時
              $time = get_field('time'); //開催時間
              $address = get_field('address'); //住所
              $reserve = get_field('reserve'); //予約方法
              ?>
                <li class="event__item swiper-slide">
                  <a href="<?php echo esc_url(get_permalink()); ?>">
                    <div class="event__info">
                      <div class=""><img width="300" data-js-ofi src="<?php echo $eventPic; ?>" alt="<?php echo trimString(get_the_title(), 50);  ?>"></div><!-- /caseItem__img1 -->
                    </div><!-- /event__info -->
                    <div>
                      <h3 class="event__subTtl"><?php echo trimString(get_the_title(), 50); ?></h3><!-- /event__subTtl -->
                      <p class="event__schedule">日程:<?php echo $schedule ; ?></p>
                      <p class="event__comment"><?php echo $comment ; ?></p>
                    </div>
                  </a>
                </li><!-- /event__item -->
              <?php endwhile; ?>
            </ul><!-- /event__list -->
            <div class="swiper-pagination swiper-pagination-black"></div>
            <!-- ★sp 用ボタン表示 -->
            <a href="<?php echo esc_url(get_permalink()); ?>" class="event__btn topLink show--sp">view more</a><!-- /event__btn -->
          </div><!-- /event__right -->
        </div><!-- /event__box -->
      </div><!-- /inner event__inner -->
    </section><!-- /event -->
  <?php endif;
  wp_reset_postdata(); ?>

  <!-- ===============================================================================================
施工事例 swipper設定はfooter.phpに記載
================================================================================================ -->

<section class="tcase">
  <div class="tcase__inner">
    <?php
      $perPage = 10;
      $paged = get_query_var('paged');
      $args = array(
        'posts_per_page' => $perPage,
        'post_type' => 'case',
        'paged' => $paged,
        // 'orderby' => 'meta_value',
        'orderby' => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
        'meta_key' => 'case-isHot'//カスタムフィールドの値を基準に並べ替え
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) : 
    ?>
      
    <div class="swiper mySwiper">
      <!-- swipper設定 -->
      
      <!-- <div class=""> -->
        <ul class="swiper-wrapper">
          <?php while ($my_query->have_posts()) : $my_query->the_post();
          $name = get_the_title(); //名称
          $cat = get_field('case-cat')->name; //カテゴリ名称
          //画像
          $img_id1 = get_field('pic1');
          $img_url1 = wp_get_attachment_image_src($img_id1, 'large')[0];
          $industry = get_field('case-industry'); //業種
          $catch = get_field('case-catch');//きゃっち
          $hot = get_field('case-isHot'); //HOT
          ?>
            <li class="swiper-slide">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                <div class="caseList__img"><img width="300" data-js-ofi src="<?php echo $img_url1; ?>" alt="<?php echo $name ?>"></div>
                <!-- /caseList__img -->
                <div class="caseList__body">
                  <h3 class="caseList__subTtl">
                    <span class="_below"><?php echo $name ?></span><!-- /_below -->
                  </h3><!-- /caseList__subTtl -->
                  <p class="caseList__desc"><?php echo trimString($catch, 30); ?></p>
                  <!-- /caseList__desc -->
                </div><!-- /caseList__body -->
              </a>
            </li><!-- /caseList__item -->
            <?php endwhile; ?>
          </ul><!-- /caseList__list -->
          <div class="swiper-pagination swiper-pagination-black"></div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      <!-- </div> -->
    </div>
  </div>
</section>

<!-- ===============================================================================================
3points
================================================================================================ -->
<section class="points3 section">
  <div class=" inner">
    <div class="points3__title">
			<h2 class="about-ttl">いえとち本舗をもっと</br>知れる3つの強み・特徴</h2>
    </div>

    <div>
			<a href="<?php echo do_shortcode('[home_url]'); ?>about/low-price/">
				<img src=<?php echo do_shortcode('[theme_url]'); ?>/images/card-low-price.png" alt="低価格×高品質" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-low-price.png" class="lazyload">
				<noscript>
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-low-price.png" alt="低価格×高品質" data-eio="l">
				</noscript>
			</a>

			<a href="<?php echo do_shortcode('[home_url]'); ?>about/zeh/">
				<img src=<?php echo do_shortcode('[theme_url]'); ?>/images/card-zeh.png" alt="ZEH対応" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-zeh.png" class="lazyload">
				<noscript>
					<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-zeh.png" alt="ZEH対応" data-eio="l">
				</noscript>
			</a>
			
				
			<img src=<?php echo do_shortcode('[theme_url]'); ?>/images/card-effort.png" alt="お客様への取り組み" data-src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-effort.png" class="lazyload">
			<noscript>
				<img src="<?php echo do_shortcode('[theme_url]'); ?>/images/card-effort.png" alt="お客様への取り組み" data-eio="l">
			</noscript>
		</div>
  </div>
</section>


</div>

<?php get_footer(); ?>
