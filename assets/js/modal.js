document.addEventListener("DOMContentLoaded", function () {
	var modalSwipers = {};

	function openModal(planId, slideIndex) {
		var modal = document.getElementById("planModal" + planId);
		if (!modal) return;
		modal.style.display = "flex";
		document.body.style.overflow = "hidden";

		// モーダル内Swiperの初期化（初回のみ）
		var sliderEl = modal.querySelector(".js-modalSlider");
		if (sliderEl && !modalSwipers[planId]) {
			modalSwipers[planId] = new Swiper(sliderEl, {
				loop: false,
				pagination: {
					el: sliderEl.querySelector(".swiper-pagination"),
					clickable: true
				}
			});
		}
		// タップした階のスライドに移動
		if (modalSwipers[planId] && typeof slideIndex === "number") {
			modalSwipers[planId].slideTo(slideIndex, 0);
		}
	}

	function closeAllModals() {
		var modals = document.querySelectorAll(".planOfHouse-modal");
		modals.forEach(function (modal) {
			modal.style.display = "none";
		});
		document.body.style.overflow = "";
	}

	// 画像クリック・ズームボタンでモーダルを開く
	document.querySelectorAll(".selectPlan__card").forEach(function (card) {
		var planId = card.getAttribute("data-plan");

		card.querySelectorAll(".modal-trigger").forEach(function (trigger, index) {
			trigger.addEventListener("click", function (e) {
				e.stopPropagation();
				openModal(planId, index);
			});
		});

		card.querySelectorAll(".zoom-button").forEach(function (button) {
			button.addEventListener("click", function (e) {
				e.preventDefault();
				e.stopPropagation();
				// カード内スライダーの現在のスライドインデックスを取得
				var slider = card.querySelector(".js-planSlider");
				var slideIndex = 0;
				if (slider && slider.swiper) {
					slideIndex = slider.swiper.activeIndex;
				}
				openModal(planId, slideIndex);
			});
		});
	});

	// バツボタンで閉じる
	document.querySelectorAll(".planOfHouse-modal__close").forEach(function (button) {
		button.addEventListener("click", function () {
			closeAllModals();
		});
	});

	// モーダル外クリックで閉じる
	window.addEventListener("click", function (e) {
		if (e.target.classList.contains("planOfHouse-modal")) {
			closeAllModals();
		}
	});

	// ESCキーで閉じる
	document.addEventListener("keydown", function (e) {
		if (e.key === "Escape") {
			closeAllModals();
		}
	});

	// 初期状態で全モーダルを非表示
	closeAllModals();
});
