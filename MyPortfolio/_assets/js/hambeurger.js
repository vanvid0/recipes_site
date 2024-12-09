// //ハンバーガーメニュー
// (() => {
//   const $doc = document;
//   const $btn = $doc.getElementById('js-menu');
//   const $menu = $doc.getElementsByClassName('c-header-menu')
//   const $mask = $doc.getElementById('mask')
//   //クリックされたらおこるイベント
//   const handleClick = () => {


//     //openクラスをつける
//     if ($btn.classList.contains('open')) {
//       $btn.classList.remove('open');
//     } else {
//       $btn.classList.add('open');
//     }
//     if ($menu.classList.contains('open')) {
//       $menu.classList.remove('open');
//     } else {
//       $menu.classList.add('open');
//     }
//     if ($mask.classList.contains('open')) {
//       $mask.classList.remove('open');
//     } else {
//       $mask.classList.add('open');
//     }

//   }
  
//   $btn.addEventListener('click', handleClick);
//   console.log($menu);
//   //mask設定

// })();
(() => {
  const $doc = document;
  const $btn = $doc.getElementById('js-menu');
  const $menu = $doc.querySelector('.c-header-menu'); // 最初の1つだけ取得
  const $back = $doc.querySelector('.c-header-flex'); // 最初の1つだけ取得
  
  const handleClick = () => {
    $btn.classList.toggle('open');
    $menu.classList.toggle('open');
    $back.classList.toggle('open');
    };

  $btn.addEventListener('click', handleClick);
 
})();