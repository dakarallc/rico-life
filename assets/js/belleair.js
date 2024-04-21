jQuery(function () {
  //ドロワー内アコーディオン開閉
  jQuery(".js-qaQ").on("click", function () {
    jQuery(this).parent().find(".qaArea__a").slideToggle(250);

    $icon = jQuery(this).find(".qaArea__icon");

    if ($icon.hasClass("active")) {
      $icon.removeClass("active");
    } else {
      $icon.addClass("active");
    }
  });


  //ドロワー内アコーディオン開閉
  jQuery("#js-specBtn").on("click", function () {
    jQuery("._defaultHide").slideToggle(250);

    $icon = jQuery(this).find(".spec__icon");

    if ($icon.hasClass("active")) {
      $icon.removeClass("active");
      jQuery(".spec__txt").text("もっと見る");
    } else {
      $icon.addClass("active");
      jQuery(".spec__txt").text("閉じる");
    }
    return false;
  });
});

jQuery("#js-specBtn2").on("click", function () {
  jQuery("._defaultHide2").slideToggle(350);

  $icon = jQuery(this).find(".spec__icon");

  if ($icon.hasClass("active")) {
    $icon.removeClass("active");
    jQuery(".spec__txt2").text("もっと見る");
  } else {
    $icon.addClass("active");
    jQuery(".spec__txt2").text("閉じる");
  }
  return false;
});


(function (jQuery) {

  jQuery.fn.popup = function () {
    var winHeight = jQuery(window).height();
    var $target = this;
    if ($target[0]) {
      jQuery('.virus__item', $target).each(function (i) {
        if (jQuery(window).scrollTop() + winHeight - 50 > jQuery(this).offset().top) {
          jQuery(this).addClass('active');
        }
      });
    }
  }


  jQuery('.virus').each(function (e) {
    jQuery(this).popup();
  });
  jQuery(window).on("scroll", function () {
    jQuery('.virus').each(function (e) {
      jQuery(this).popup();
    });
  });
	

})(jQuery);


