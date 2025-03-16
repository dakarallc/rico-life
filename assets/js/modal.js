document.addEventListener('DOMContentLoaded', function() {
  console.log('Modal script loaded');

  // モーダルの開閉処理
  function openModal(modalId) {
    console.log('Opening modal:', modalId);
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden';
    } else {
      console.warn('Modal not found:', modalId);
    }
  }

  function closeAllModals() {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
      modal.style.display = 'none';
    });
    document.body.style.overflow = '';
  }

  // ズームボタンのクリックイベント
  const zoomButtons = document.querySelectorAll('.zoom-button');
  console.log('Zoom buttons found:', zoomButtons.length);
  zoomButtons.forEach((button, index) => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      const modalId = `floorplanModal${index + 1}`;
      openModal(modalId);
    });
  });

  // 画像のクリックイベント
  const modalTriggers = document.querySelectorAll('.modal-trigger');
  modalTriggers.forEach((trigger, index) => {
    trigger.addEventListener('click', function() {
      const modalId = `floorplanModal${index + 1}`;
      openModal(modalId);
    });
  });

  // バツボタンのクリックイベント追加
  const closeButtons = document.querySelectorAll('.modal__close');
  closeButtons.forEach(button => {
    button.addEventListener('click', function() {
      closeAllModals();
    });
  });

  // モーダル外クリックで閉じる
  window.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal')) {
      closeAllModals();
    }
  });

  // ESCキーでモーダルを閉じる
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeAllModals();
    }
  });

  // 初期状態で全モーダルを非表示に
  closeAllModals();
});
