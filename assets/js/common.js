jQuery(function () {

  //wow宣言
  new WOW().init();

  jQuery("#js-toTop").click(function () {
    jQuery("body,html").animate({
        scrollTop: 0,
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
          position: "relative",
        });
      } else {
        fixedMenu.css({
          position: "fixed",
        });
      }
    }

  });

  //SP表示でのヘッダーの切り替え処理
  jQuery("#js-toggle").click(function () {
    if (jQuery("#js-headerContents").hasClass("action")) {
      jQuery("#js-headerContents").removeClass("action");

    } else {
      jQuery("#js-headerContents").addClass("action");

    }
    jQuery("#js-overlayer").fadeToggle();
    jQuery("#js-toggle").toggleClass("active");
  });

  jQuery("#js-overlayer").click(function () {
    jQuery(this).fadeOut();
    if (jQuery("#js-headerContents").hasClass("action")) {
      jQuery("#js-headerContents").removeClass("action");
    }
    if (jQuery("#js-toggle").hasClass("active")) {
      jQuery("#js-toggle").removeClass("active");
    }
  });


  var mediaQuery = matchMedia("(max-width: 999px)");

  // ページが読み込まれた時に実行
  handle(mediaQuery);

  // ウィンドウサイズが変更時実行
  mediaQuery.addListener(handle);

  function handle(mq) {
    if (!mq.matches) {
      jQuery("#js-toggle").removeClass("active");
      jQuery("#js-overlayer").css("display", "none");
    } else {
      jQuery("#js-toggle").removeClass("active");
      if (jQuery("#js-headerContents").hasClass("action")) {
        jQuery("#js-headerContents").removeClass("action");
      }
    }
  }

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
        scrollTop: position,
      },
      500
    );
  });

  //object-fit(IE対応)
  var $ofi = jQuery("[data-js-ofi]");
  if ($ofi.length) {
    objectFitImages($ofi.selector);
  };

	//水曜定休のため予約フォームの水曜日を選択不可にする関数
	jQuery(function($){ 
		$(".hasDatepicker").datepicker("option","beforeShowDay",function(date){
			var ret = [(date.getDay() != 3)]; 
			return ret; 
		});
	});
});
