<?php
global $template_url;
global $home_url;
?>
<?php get_header(); ?>

<main class="outer-block p_home">

<div class="p_home-mv">
  <div class="p_home-mv__img">
    <img src="https://dummyimage.com/2732x1211/000/fff" class="pc" alt="mainvisual">
    <img src="https://dummyimage.com/375x474/000/fff" class="sp" alt="mainvisual">
  </div>
  <div class="p_home-mv__blur"></div>
  <div class="p_home-mv__ttl">
    <img src="<?php echo $template_url; ?>/img/common/logo/main-logo.png" alt="">
  </div>
  <div class="p_home-mv__subttl ">
    <img src="<?php echo $template_url; ?>/img/common/logo/sub-logo.png" alt="">
  </div>
</div>
<div class="p_home-about">
  <span class="p_home-about__text">
    元料理人で酒飲みである私が、<br>
    IT業界へ転職すべく、<br class="sp">経験を活かして作ったサイトです。<br>
    酒飲みの皆様へ、<br class="sp">美味しいレシピを送ります。
  </span>
  <div class="p_home-about-img">
    <img src="<?php echo $template_url; ?>/img/common/illust/cheers.png" alt="cheers">
  </div>
</div>


<!-- レシピ一覧 -->

<section class="p_home-recipes">
  <div class="inner-block">
    <h1 class="p_home-recipes__headline Kranky">Recipes</h1>
    <div class="p_home-recipes__rubi">レシピ</div>
    <h2 class=" p_home-recipes__with-b">ビールに合うレシピ</h2>
    <ul class="p_home-recipes-grid pc">
      <li class="p_home-recipes-grid__item anm-up ">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe01.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe03.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <ul class="p_home-recipes-grid l-slider01-block__slider sp">
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe01.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe03.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <div class="p_home-recipes__button c-button-b"><a href="<?php echo $home_url; ?>/category/">View More</a><span class="ico">
        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
            fill="#fff" />
        </svg>
      </span>
    </div>



    <h2 class=" p_home-recipes__with-h">ハイボールに合うレシピ</h2>

    <ul class="p_home-recipes-grid pc">

      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe04.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe04.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <ul class="p_home-recipes-grid l-slider01-block__slider sp">

      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe04.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe01.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>

    <div class="p_home-recipes__button c-button-b"><a href="<?php echo $home_url; ?>/category/">View More</a><span class="ico">
        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
            fill="#fff" />
        </svg>
      </span>
    </div>

    <h2 class=" p_home-recipes__with-b">ワインに合うレシピ</h2>
    <ul class="p_home-recipes-grid pc">
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe01.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe03.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <ul class="p_home-recipes-grid l-slider01-block__slider sp">
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe01.png" alt="img" class="">
              <span class="p_home-recipes-card__label-a">簡単おつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe02.png" alt="img" class="">
              <span class="p_home-recipes-card__label-m">主菜のおつまみ</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="p_home-recipes-grid__item anm-up">
        <article class="p_home-recipes-card">
          <a href="<?php echo $home_url; ?>/recipes/detail/" class="p_home-recipes-card__link">
            <div class="p_home-recipes-card__img">
              <img src="<?php echo $template_url; ?>/img/common/photo/recipe03.png" alt="img" class="">
              <span class="p_home-recipes-card__label-l">〆の逸品</span>
            </div>
            <div class="p_home-recipes-card__info">
              <h3 class="p_home-recipes-card__headline">料理名テキストテキスト</h3>
              <p class="p_home-recipes-card__description">料理紹介テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="p_home-recipes-card__button c-button-s">レシピを見る
                <span class="ico">
                  <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
                      fill="#fff" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <div class="p_home-recipes__button c-button-b"><a href="<?php echo $home_url; ?>/category/">View More</a><span class="ico">
        <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
            fill="#fff" />
        </svg>
      </span>
    </div>
  </div>
</section>
<div class="p_home-recipes__button c-button-a"><a href="<?php echo $home_url; ?>/recipes/">全てのレシピを見る</a>
  <span class="ico">
    <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
        fill="#562708" />
    </svg>

  </span>
</div>



<!-- 料理のコツ -->

<section class="p_home-recipes">
  <div class="inner-block">
    <h1 class="p_home-tech__headline Kranky">Cooking Tips</h1>
    <div class="p_home-recipes__rubi">料理のコツ</div>
    <div class="p_home-tech">
      <span class="p_home-tips__text">
        料理をもっと楽しく、<br class="sp">美味しくするための<br>
        ヒントやテクニックをご紹介します。<br>
        初心者からプロまで、<br class="sp">だれでも役立つ情報が満載です。
      </span>
      <div class="p_home-tips-img">
        <img src="<?php echo $template_url; ?>/img/common/illust/vine.png" alt="cheers">
      </div>
      <div class="p_home-tab" id="js-tab">
        <div class="p_home-tab-nav">
          <a href="" class="p_home-tab-nav__item is_active" data-nav="0">包丁の持ち方</a>
          <a href="" class="p_home-tab-nav__item" data-nav="1">皮活用</a>
          <a href="" class="p_home-tab-nav__item" data-nav="2">下処理・下準備</a>
        </div>
        <div class="p_home-tab-contents">
          <div class="p_home-tab-contents__item" data-content="0">
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/knife.png" alt="label">

                </div>
                <p class="tite">硬いものを切るとき</p>
              </div>
            </a>
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/knife.png" alt="label">

                </div>
                <p class="tite">細かい作業をするとき</p>
              </div>
            </a>
          </div>
          <div class="p_home-tab-contents__item" data-content="1">
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/peel.png" alt="label">
                </div>
                <p class="tite">長いもの皮</p>
              </div>
            </a>
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/peel.png" alt="label">
                </div>
                <p class="tite">大根の皮</p>
              </div>
            </a>
          </div>
          <div class="p_home-tab-contents__item" data-content="2">
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/pre.png" alt="label">
                </div>
                <p class="tite">砂ぎもの下処理</p>
              </div>
            </a>
            <a href="<?php echo $home_url; ?>/technique/cat/detail/">
              <div class="p_home-tab-contents__content">
                <div class="label-cat">
                  <img src="<?php echo $template_url; ?>/img/common/icon/pre.png" alt="label">
                </div>
                <p class="tite">オニオンスライスの下処理</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="p_home-tech__button c-button-b"><a href="<?php echo $home_url; ?>/technique/">Viw More</a>
        <span class="ico">
          <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
              fill="#fff" />
          </svg>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- 休肝日 -->
<!-- <section class="p_home-health">
    <div class="p_home-health-img">
      <img src="<?php echo $template_url; ?>/img/common/illust/draftbeer.png" alt="cheers">
    </div>

    <h1 class="p_home-health__headline">休肝日を作ろう</h1>
    <div class="p_home-health__description">
      <span class="p_home-health__text">
        健康を維持するためには休肝日が重要です。<br>
        休肝日を設けることで肝臓を休ませ、<br class="sp">体全体の健康をサポートします。<br>
        どうしても飲みたくなってしまった方の<br class="sp">ために、<br class="pc">
        ちょっとしたサービスを<br class="sp">ご用意いたしました。
      </span>
    </div>
    <div class="p_home-health-banner">
      <a href="<?php echo $home_url; ?>#">
        <div class="p_home-health-banner__img">
          <img src="<?php echo $template_url; ?>/img/common/logo/health-logo.png" alt="">
        </div>
      </a>
    </div>
  </section> -->



</main>
<?php get_footer(); ?>