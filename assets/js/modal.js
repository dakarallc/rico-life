document.addEventListener("DOMContentLoaded", function () {
	// モーダルの開閉処理
	function openModal(modalId) {
		const modal = document.getElementById(modalId);
		if (modal) {
			modal.style.display = "flex";
			document.body.style.overflow = "hidden";
		}
	}

	function closeAllModals() {
		const modals = document.querySelectorAll(".modal");
		modals.forEach(modal => {
			modal.style.display = "none";
		});
		document.body.style.overflow = "";
	}

	// ズームボタンのクリックイベント
	const zoomButtons = document.querySelectorAll(".zoom-button");
	zoomButtons.forEach((button, index) => {
		button.addEventListener("click", function (e) {
			e.preventDefault();
			e.stopPropagation();
			const modalId = `floorplanModal${index + 1}`;
			openModal(modalId);
		});
	});

	// 画像のクリックイベント
	const modalTriggers = document.querySelectorAll(".modal-trigger");
	modalTriggers.forEach((trigger, index) => {
		trigger.addEventListener("click", function (e) {
			e.stopPropagation();
			const modalId = `floorplanModal${index + 1}`;
			openModal(modalId);
		});
	});

	// バツボタンのクリックイベント追加
	const closeButtons = document.querySelectorAll(".modal__close");
	closeButtons.forEach(button => {
		button.addEventListener("click", function () {
			closeAllModals();
		});
	});

	// モーダル外クリックで閉じる
	window.addEventListener("click", function (e) {
		if (e.target.classList.contains("modal")) {
			closeAllModals();
		}
	});

	// ESCキーでモーダルを閉じる
	document.addEventListener("keydown", function (e) {
		if (e.key === "Escape") {
			closeAllModals();
		}
	});

	// 初期状態で全モーダルを非表示に
	closeAllModals();
});
