//ハンバーガーメニュー
(() => {
  const $doc = document;
  const $btn = $doc.getElementById('js-menu');
  const $menu = $doc.getElementsByClassName('c-header-menu')
  const $mask = $doc.getElementById('mask')
  //クリックされたらおこるイベント
  const handleClick = () => {


    //openクラスをつける
    if ($btn.classList.contains('open')) {
      $btn.classList.remove('open');
    } else {
      $btn.classList.add('open');
    }
    if ($menu.classList.contains('open')) {
      $menu.classList.remove('open');
    } else {
      $menu.classList.add('open');
    }
    if ($mask.classList.contains('open')) {
      $mask.classList.remove('open');
    } else {
      $mask.classList.add('open');
    }

  }
  
  $btn.addEventListener('click', handleClick);
  console.log($mask);
  //mask設定

})();
