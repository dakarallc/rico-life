jQuery(function () {
	//wow宣言
	new WOW().init();

	jQuery("#js-toTop").click(function () {
		jQuery("body,html").animate(
			{
				scrollTop: 0
			},
			500
		);
		return false;
	});

	var fixedMenu = jQuery("#js-fixedMenu");
	jQuery(window).scroll(function () {
		//100pxスクロールしたら表示
		if (jQuery(this).scrollTop() > 100) {
			if (!fixedMenu.hasClass("is-show")) {
				fixedMenu.addClass("is-show");
			}
		} else {
			//100px以下の場合非表示
			if (fixedMenu.hasClass("is-show")) {
				fixedMenu.removeClass("is-show");
			}
		}

		if (jQuery(window).width() <= 600) {
			//Topへ戻るを、フッター手前で止める処理
			var scrollHeight = jQuery(document).height();
			var scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();
			var footerHeight = jQuery(".footer").innerHeight() + 40;
			if (scrollHeight - scrollPosition <= footerHeight) {
				fixedMenu.css({
					position: "relative"
				});
			} else {
				fixedMenu.css({
					position: "fixed"
				});
			}
		}
	});

	//SP表示でのヘッダーの切り替え処理（SPメニュー用）
	var $spHeaderLogo = jQuery(".header__logo");
	var $spLogoImg = $spHeaderLogo.find("img");
	var spOriginalSrc = $spLogoImg.attr("src");
	var spBlackLogoSrc = spOriginalSrc ? spOriginalSrc.replace("logo.svg", "logo-black.svg") : "";

	jQuery(".toggle__line").click(function () {
		if (jQuery("#js-spMenu").hasClass("is-open")) {
			// 開いている場合は閉じる
			jQuery("#js-spMenu").removeClass("is-open");
			jQuery("body").css("overflow", "");
			jQuery("#js-toggle").removeClass("active");
			jQuery(".toggle__line").removeClass("is-open");
			jQuery(".header").removeClass("menu-open");
			// ロゴを元に戻す（TOPページの場合のみ）
			if (jQuery(".header._top").length && jQuery(window).scrollTop() <= jQuery(".fv").outerHeight()) {
				$spLogoImg.attr("src", spOriginalSrc);
			}
		} else {
			// 閉じている場合は開く
			jQuery("#js-spMenu").addClass("is-open");
			jQuery("body").css("overflow", "hidden");
			jQuery("#js-toggle").addClass("active");
			jQuery(".toggle__line").addClass("is-open");
			jQuery(".header").addClass("menu-open");
			// ロゴを黒に変更
			$spLogoImg.attr("src", spBlackLogoSrc);
		}
	});

	// SPメニュー内のリンククリックで閉じる
	jQuery(".spMenu__list a, .spMenu__footerItem").click(function () {
		jQuery("#js-spMenu").removeClass("is-open");
		jQuery("body").css("overflow", "");
		jQuery("#js-toggle").removeClass("active");
		jQuery(".toggle__line").removeClass("is-open");
		jQuery(".header").removeClass("menu-open");
	});

	jQuery("#js-overlayer").click(function () {
		jQuery(this).fadeOut();
		jQuery("#js-spMenu").removeClass("is-open");
		jQuery("body").css("overflow", "");
		jQuery("#js-toggle").removeClass("active");
		jQuery(".toggle__line").removeClass("is-open");
		jQuery(".header").removeClass("menu-open");
	});

	// リサイズ時にメニューが開いていたら閉じる
	jQuery(window).on("resize", function () {
		if (jQuery("#js-spMenu").hasClass("is-open")) {
			jQuery("#js-spMenu").removeClass("is-open");
			jQuery("body").css("overflow", "");
			jQuery("#js-toggle").removeClass("active");
			jQuery(".toggle__line").removeClass("is-open");
			jQuery(".header").removeClass("menu-open");
		}
	});

	var pageTop = jQuery("#js-toTop2");
	jQuery(window).scroll(function () {
		//100pxスクロールしたら表示
		if (jQuery(this).scrollTop() > 100) {
			if (!pageTop.hasClass("_show")) {
				pageTop.addClass("_show");
			}
		} else {
			//100px以下の場合非表示
			if (pageTop.hasClass("_show")) {
				pageTop.removeClass("_show");
			}
		}
	});
	// pageTop.click(function () {
	//   jQuery("body,html").animate(
	//     {
	//       scrollTop: 0,
	//     },
	//     500
	//   );
	//   return false;
	// });

	//ページ内ジャンプ
	jQuery(".js-jump").click(function () {
		//href属性を取得(セクションのidと一致)
		let id = jQuery(this).attr("href");

		//該当idのセクションのスクロール位置を取得
		let position = jQuery(id).offset().top - jQuery(".header").height() + 50;

		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			500
		);
	});

	//ヘッダーの色変更処理（TOPページ：KV通過で白背景・黒アイコン）
	if (jQuery(".header._top").length) {
		var $header = jQuery(".header");
		var $kvSection = jQuery(".fv");
		var $headerLogo = jQuery(".header__logo");
		var $logoImg = $headerLogo.find("img");
		var originalSrc = $logoImg.attr("src");
		var blackLogoSrc = originalSrc.replace("logo.svg", "logo-black.svg");

		function updateHeaderStyle() {
			var kvHeight = $kvSection.length ? $kvSection.outerHeight() : 100;
			var scrollTop = jQuery(window).scrollTop();

			if (scrollTop > kvHeight) {
				// KV通過したら：背景白、アイコン黒
				$header.addClass("_black _whiteBg");
				$headerLogo.attr("data-logo", "black");
				$logoImg.attr("src", blackLogoSrc);
			} else {
				// KV上にいる時：背景なし、アイコン白
				$header.removeClass("_black _whiteBg");
				$headerLogo.attr("data-logo", "white");
				$logoImg.attr("src", originalSrc);
			}
		}

		jQuery(window).on("scroll", updateHeaderStyle);
		updateHeaderStyle(); // 初期状態も設定
	}

	//planTabsの切り替え処理
	jQuery(".planTabs__btn").on("click", function () {
		var tabTarget = jQuery(this).data("tab");
		var $parentTabs = jQuery(this).closest(".planTabs");

		// メインタブのアクティブ状態を切り替え
		$parentTabs.find(".planTabs__btn").removeClass("active");
		jQuery(this).addClass("active");

		// コンテンツの表示切り替え
		$parentTabs.find(".planTabs__content").removeClass("active");
		$parentTabs.find("#" + tabTarget).addClass("active");

		// サブタブの最初のボタンをアクティブにする
		$parentTabs.find("#" + tabTarget + " .planTabs__subBtn").removeClass("active");
		$parentTabs.find("#" + tabTarget + " .planTabs__subBtn:first").addClass("active");

		// サブコンテンツの最初の項目を表示する
		$parentTabs.find("#" + tabTarget + " .planTabs__subContent").removeClass("active");
		$parentTabs.find("#" + tabTarget + " .planTabs__subContent:first").addClass("active");
	});

	// サブタブの切り替え処理
	jQuery(".planTabs__subBtn").on("click", function () {
		var subTabTarget = jQuery(this).data("subtab");
		var $parentContent = jQuery(this).closest(".planTabs__content");

		// サブタブのアクティブ状態を切り替え
		$parentContent.find(".planTabs__subBtn").removeClass("active");
		jQuery(this).addClass("active");

		// サブコンテンツの表示切り替え
		$parentContent.find(".planTabs__subContent").removeClass("active");
		$parentContent.find("#" + subTabTarget).addClass("active");
	});

	//object-fit(IE対応)
	var $ofi = jQuery("[data-js-ofi]");
	if ($ofi.length) {
		objectFitImages($ofi.selector);
	}

	//水曜定休のため予約フォームの水曜日を選択不可にする関数
	jQuery(function ($) {
		$(".hasDatepicker").datepicker("option", "beforeShowDay", function (date) {
			var ret = [date.getDay() != 3];
			return ret;
		});
	});

	// Floating banner active state
	if (jQuery(".floating").length) {
		var currentPath = window.location.pathname;
		var $floatingItems = jQuery(".floating__item");

		// Remove active class from all items
		$floatingItems.removeClass("active");

		// Add active class based on current page
		if (currentPath.includes("/contact")) {
			$floatingItems.eq(2).addClass("active"); // 来場予約 (now index 2, was 3)
		}
		// else if (currentPath.includes('/request')) {
		//	$floatingItems.eq(2).addClass('active'); // 資料請求 - commented out
		// }
		// YouTube and Instagram are external links, so no active state needed
	}
});
