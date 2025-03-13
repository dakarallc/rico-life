document.addEventListener('DOMContentLoaded', function() {
  const filterButtons = document.querySelectorAll('.planFilter__btn');
  const activeFilters = new Map(); // タクソノミーごとに選択された値を保持

  // URLパラメータから初期値を設定
  const urlParams = new URLSearchParams(window.location.search);
  urlParams.forEach((term, taxonomy) => {
    // 各タクソノミーの最後の値のみを使用（複数値の場合は最後の値を優先）
    activeFilters.set(taxonomy, term);
  });

  // 初期状態でアクティブなボタンを設定
  activeFilters.forEach((term, taxonomy) => {
    const button = document.querySelector(`.planFilter__btn[data-taxonomy="${taxonomy}"][data-term="${term}"]`);
    if (button) {
      button.classList.add('is-active');
    }
  });

  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      const taxonomy = this.dataset.taxonomy;
      const term = this.dataset.term;
      
      // 同じタクソノミー内の他のボタンの選択を解除
      document.querySelectorAll(`.planFilter__btn[data-taxonomy="${taxonomy}"]`).forEach(btn => {
        if (btn !== this) {
          btn.classList.remove('is-active');
        }
      });

      // ボタンのアクティブ状態を切り替え
      this.classList.toggle('is-active');
      
      if (this.classList.contains('is-active')) {
        // 選択された場合は値を設定
        activeFilters.set(taxonomy, term);
      } else {
        // 選択解除された場合は削除
        activeFilters.delete(taxonomy);
      }
      
      // URLパラメータを構築
      const params = new URLSearchParams();
      activeFilters.forEach((term, tax) => {
        params.append(tax, term);
      });
      
      // ページを更新
      window.location.href = `${window.location.pathname}?${params.toString()}`;
    });
  });
}); 
