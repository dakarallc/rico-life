  //scroll-hint宣言
  window.addEventListener('DOMContentLoaded', function () {
    new ScrollHint('.js-scrollable', {
      i18n: {
        scrollable: 'スクロールできます'
      }
    });
  });

  var Swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
