document.addEventListener('DOMContentLoaded', function() {
  console.log('Logo change script loaded');
  
  const headerLogo = document.querySelector('.header__logo');
  if (!headerLogo) {
    console.log('Header logo not found');
    return;
  }

  // トップページ以外では処理を行わない
  if (!document.querySelector('.header._top')) {
    console.log('Not on top page');
    return;
  }

  console.log('Initializing logo change');
  const logoImg = headerLogo.querySelector('img');
  const originalSrc = logoImg.src;
  const blackLogoSrc = originalSrc.replace('logo.svg', 'logo-black.svg');

  function updateLogo() {
    const kv = document.querySelector('.fv');
    if (!kv) return;

    const kvRect = kv.getBoundingClientRect();
    const logoRect = headerLogo.getBoundingClientRect();
    const logoBottom = logoRect.bottom;

    // KVの下端より下にロゴが来たら黒に変更
    if (logoBottom > kvRect.bottom) {
      if (headerLogo.dataset.logo !== 'black') {
        console.log('Changing to black logo');
        headerLogo.dataset.logo = 'black';
        logoImg.src = blackLogoSrc;
      }
    } else {
      if (headerLogo.dataset.logo !== 'white') {
        console.log('Changing to white logo');
        headerLogo.dataset.logo = 'white';
        logoImg.src = originalSrc;
      }
    }
  }

  window.addEventListener('scroll', updateLogo);
  updateLogo(); // Initial check
}); 
