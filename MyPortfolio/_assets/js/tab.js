(() => {
  const $doc = document;
  const $tab = $doc.getElementById('js-tab');
  const $nav = $tab.querySelectorAll('[data-nav]');
  const $content = $tab.querySelectorAll('[data-content]');


  //初期化
  const init = () => {
    $content[0].style.display = 'block';
    $nav[0].classList.add('is-active')
  };
  init ();

  //クリックしたら起こるイベント
  const handleClick = (e) => {
    e.preventDefault(); //aタグのリンク要素を無効化

    //クリックされたnavとそのdataを取得
    const $this = e.target;
    const targetVal = $this.dataset.nav;

    //対象外のnav,contentを全てリセットする
    let index = 0;
    while (index < $nav.length) {
      $content[index].style.display ='none'
      $nav[index].classList.remove('is-active')
      index++;
    }

    //対象のコンテンツをアクティブ化する
    $tab.querySelectorAll('[data-content="' + targetVal + '"]')[0].style.display = 'block'
    $nav[targetVal].classList.add('is-active');
  }

  //全nav要素に対して関数を適応・発火
  let index = 0;
  while (index < $nav.length) {
    $nav[index].addEventListener('click', (e) => handleClick(e));
    index++;
  }


})();