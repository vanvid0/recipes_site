<?php
global $template_url;
global $home_url;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo $template_url; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $template_url; ?>/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kranky&family=Murecho:wght@100..900&display=swap"
    rel="stylesheet">

  <title>酒飲みのためのレシピサイト</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $template_url; ?>/css/style.css">
  <?php wp_head(); ?>
</head>


<body>

  <div id="wrapper">
<header>
  <div id="header" class="outer-block">

    <div class="c-header-menu">
      <span class="c-header-menu-recipes text-b">レシピを探す</span>
      <a href="<?php echo $home_url; ?>/recipes/" class="c-header-menu-recipes__all title">レシピ一覧</a>
      <div class="c-header-menu-recipes__cat">
        <a href="<?php echo $home_url; ?>/recipes/" class="text-b">お酒の種類から探す</a>
        <a href="<?php echo $home_url; ?>/recipes-drink/beer/" class="text-b">ビールに合うレシピ</a>
          <a href="<?php echo $home_url; ?>/recipes-drink/highball/" class="text-b">ハイボールに合うレシピ</a>
          <a href="<?php echo $home_url; ?>/recipes-drink/wine/" class="text-b">ワインに合うレシピ</a>
      </div>
      <div class="c-header-menu-recipes__cat">
        <a href="<?php echo $home_url; ?>/recipes/" class="text-b">料理の種類から探す</a>
        <a href="<?php echo $home_url; ?>/recipes-cat/appetizer/" class="text-b">簡単おつまみ</a>
          <a href="<?php echo $home_url; ?>/recipes-cat/main/" class="text-b">主菜のおつまみ</a>
          <a href="<?php echo $home_url; ?>/recipes-cat/last/" class="text-b">〆の逸品</a>
      </div>

      <div class="c-header-menu-tech">
        <span class=" text-b">料理のコツ</span>
        <a href="<?php echo $home_url; ?>/technique/" class="title">料理のコツ一覧</a>
        <a href="<?php echo $home_url; ?>/technique-cat/knife/" class="text-b">包丁の持ち方</a>
            <a href="<?php echo $home_url; ?>/technique-cat/pre/" class="text-b">下処理・下準備</a>
            <a href="<?php echo $home_url; ?>/technique-cat/peer/" class="text-b">皮活用</a>
      </div>
      <!-- <div class="c-header-health">
        <a href="<?php echo $home_url; ?>#">
          <div class="c-header-health__img">
            <img href="<?php echo $template_url; ?>/img/common/logo/health-logo.png" alt="">
          </div>
        </a>
      </div> -->
    </div>


    <div class="c-header-flex">
      <div class="c-header-logo">
        <a href="<?php echo $home_url; ?>/">
          <img src="<?php echo $template_url; ?>/img/common/logo/title-logo.png" alt="logo">
        </a>
      </div>
      <div class="c-hamburger sp" id="js-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>


      <div class="c-header-nav">
        <ul class="c-header-nav-list">
          <li>
            <a href="<?php echo $home_url; ?>/recipes/" class="c-header-nav-list__link">
              <div class="c-header-nav-list__item">
                <span class="text">
                  レシピを探す
                </span>
                <span class="ico c-header-ico">
                
                  <svg class="js-arrow" width="7" height="11" viewBox="0 0 7 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>

              </div>
            </a>
          </li>
          <li>
            <a href="<?php echo $home_url; ?>/technique/" class="c-header-nav-list__link">
              <div class="c-header-nav-list__item">
                <span class="text">
                  料理のコツ
                </span>
                <span class="ico">
                  <svg class="js-arrow" width="7" height="11" viewBox="0 0 7 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </a>
          </li>
          <!-- <li>
            <a href="<?php echo $home_url; ?>#" class="c-header-nav-list__link">
              <div class="c-header-nav-list__item">
                <span class="text">
                  休肝日を作ろう
                </span>
                <span class="ico">
                  <svg class="js-arrow" width="7" height="11" viewBox="0 0 7 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- /inner-block -->
  </div><!-- /header -->
</header>
<body>

  <div id="wrapper">