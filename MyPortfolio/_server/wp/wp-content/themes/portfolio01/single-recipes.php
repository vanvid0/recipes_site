<?php
global $template_url;
global $home_url;
?>
<?php get_header(); ?>

<main class="outer-block p_home">
  <div class="p_recipes-mv">
    <div class="p_recipes-mv__img">
      <img src="<?php echo $template_url; ?>/img/common/mv/menu.png" alt="mainvisual">
    </div>
    <div class="p_recipes-mv__ttl">
      <?php the_title(); ?>
    </div>
  </div>
  <div class="p_recipes-map">
    <a href="/" class="text">top</a>
    <div class="ico">
      <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z" fill="#562708" />
      </svg>

    </div>
    <a href="/recipes/" class="text">レシピ一覧</a>
    <div class="ico">
      <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z" fill="#562708" />
      </svg>

    </div>
    <a href="/recipes/detail/" class="text"><?php the_title(); ?></a>
  </div>

  <section class="p_recipes">
    <div class="inner-block">
      <div class="p_detail">
        <h2 class="p_detail__headline"><?php the_title(); ?></h2>
        <span class="c-label-m"><?php the_category(); ?></span>
      </div>
      <div class="p_recipes-menu sp">
        <span class="title">お酒の種類から探す</span>
        <select name="alcohol" id="alcohol">
          <option value="">ビールに合うレシピ</option>
          <option value="">ハイボールに合うレシピ</option>
          <option value="">ワインに合うレシピ</option>
        </select>
        <span class="title">料理の種類から探す</span>
        <select name="dish" id="dish">
          <option value="">簡単おつまみ</option>
          <option value="">主菜のおつまみ</option>
          <option value="">〆の逸品</option>
        </select>
      </div>
      <div class="p_recipes-grid1">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <div class="p_detail-grid2">
              <div class="p_detail-img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>
              </div>
              <div class="p_detail-ingredients">
                <span class="title">材料(2人前)</span>
                <table class="p_detail-ingredients__table">

                  <?php for ($i = 1; $i <= 10; $i++): // 最大10項目を想定 
                  ?>
                    <?php
                    $name = get_field("ingredient_{$i}_name");
                    $quantity = get_field("ingredient_{$i}_quantity");
                    if ($name && $quantity): ?>
                      <tr class="p_detail-ingredients__table__tr">
                        <th class="p_detail-ingredients__table__th"><?php echo esc_html($name); ?></th>
                        <td class="p_detail-ingredients__table__td"><?php echo esc_html($quantity); ?></td>
                      </tr>
                    <?php endif; ?>
                  <?php endfor; ?>
                </table>
              </div>
              <div class="p_detail-how">
                <span class="title">作り方</span>
                <ol class="p_detail-how__to">

                  <?php for ($i = 1; $i <= 10; $i++): // 最大10項目を想定 
                  ?>
                    <?php
                    $step = get_field("step_{$i}");
                    if ($step): ?>
                      <li class="p_detail-how__do text-r"><?php echo esc_html($step); ?></li>
                    <?php endif; ?>
                  <?php endfor; ?>
                </ol>

                <?php endwhile;        endif; ?>

              </div>
              <div class="p_detail-how__point">
                <span class="title">コツ・ポイント</span>
                <?php the_excerpt(); ?>
              </div>
            </div>

            <div class="c-recipes-cat">
              <span class="title">お酒の種類から探す</span>
              <a href="<?php echo $home_url; ?>/recipes-drink/beer/" class="text-b">ビールに合うレシピ</a>
              <a href="<?php echo $home_url; ?>/recipes-drink/highball/" class="text-b">ハイボールに合うレシピ</a>
              <a href="<?php echo $home_url; ?>/recipes-drink/wine/" class="text-b">ワインに合うレシピ</a>
              <span class="c-recipes-cat__b title">料理の種類から探す</span>
              <a href="<?php echo $home_url; ?>/recipes-cat/appetizer/" class="text-b">簡単おつまみ</a>
              <a href="<?php echo $home_url; ?>/recipes-cat/main/" class="text-b">主菜のおつまみ</a>
              <a href="<?php echo $home_url; ?>/recipes-cat/last/" class="text-b">〆の逸品</a>
            </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>