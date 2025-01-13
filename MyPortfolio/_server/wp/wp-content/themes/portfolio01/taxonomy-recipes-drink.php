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
      <?php
      $term_object = get_queried_object();
      echo esc_html($term_object->name);
      ?>
    </div>
  </div>
  <div class="p_recipes-map">
    <a href="<?php echo $home_url; ?>/" class="text">top</a>
    <div class="ico">
      <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z"
          fill="#562708" />
      </svg>

    </div>
    <a href="<?php echo $home_url; ?>/recipes/" class="text"> <?php
                                                              $term_object = get_queried_object();
                                                              echo esc_html($term_object->name);
                                                              ?></a>
  </div>

  <section class="p_recipes">
    <div class="inner-block">
      <h1 class="p_recipes__headline Kranky">Recipes</h1>
      <div class="p_recipes__rubi">レシピ</div>
      <h2 class="p_home-recipes__with-b">
        <?php
        $term_object = get_queried_object();
        echo esc_html($term_object->name);
        ?>
      </h2>
      <div class="p_recipes-menu sp">
      <form action="" name="form1">
          <span class="title">お酒の種類から探す</span>
          <select name="alcohol" id="alcohol">
            <option value="">選択してください</option>
            <option value="<?php echo $home_url ?>/recipes-drink/beer/">ビールに合うレシピ</option>
            <option value="<?php echo $home_url ?>/recipes-drink/highball/">ハイボールに合うレシピ</option>
            <option value="<?php echo $home_url ?>/recipes-drink/wine/">ワインに合うレシピ</option>
          </select>
          <span class="title">料理の種類から探す</span>
          <select name="dish" id="dish">
            <option value="">選択してください</option>
            <option value="<?php echo $home_url ?>/recipes-cat/appetizer/">簡単おつまみ</option>
            <option value="<?php echo $home_url ?>/recipes-cat/main/">主菜のおつまみ</option>
            <option value="<?php echo $home_url ?>/recipes-cat/last/">〆の逸品</option>
          </select>
        </form>
      </div>

      <?php
      $term_object = get_queried_object(); // 現在のタクソノミーオブジェクトを取得
      $term_slug = $term_object->slug; // スラッグを取得
      $args = array(
        'post_type' => 'recipes', // カスタム投稿タイプ
        'posts_per_page' => -1, // 全件取得
        'tax_query' => array(
          array(
            'taxonomy' => 'recipes-drink', // タクソノミー名
            'field' => 'slug', // スラッグで検索
            'terms' => $term_slug // 取得したスラッグを使用
          ),
        ),
      );
      $the_query = new WP_Query($args);
      ?>


      <div class="p_recipes-grid1">
        <ul class="p_recipes-grid2 pc">
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p_recipes-grid__item anm-up">
                <article class="p_home-recipes-card">
                  <a href="<?php the_permalink(); ?>" class="p_home-recipes-card__link">
                    <div class="p_home-recipes-card__img">
                      <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/ph.png')); ?>" alt="">
                      <?php endif; ?>
                      <?php
                      $taxonomy = 'recipes-cat';
                      $terms = get_the_terms(get_the_ID(), $taxonomy);

                      if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                          echo '<span class="recipes-category-label tech-text ' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</span>';
                        }
                      } else {
                        echo '<span class="recipes-category-label default-label">カテゴリーなし</span>';
                      }
                      ?>
                    </div>
                    <div class="p_home-recipes-card__info">
                      <h3 class="p_home-recipes-card__headline"><?php the_title(); ?></h3>
                      <p class="p_home-recipes-card__description">
                      <?php the_excerpt(); ?>
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
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </ul>
        <ul class="p_recipes-grid2 l-slider01-block__slider sp">
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p_recipes-grid__item anm-up">
                <article class="p_home-recipes-card">
                  <a href="<?php the_permalink(); ?>" class="p_home-recipes-card__link">
                    <div class="p_home-recipes-card__img">
                      <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php endif; ?>
                      <?php
                      $taxonomy = 'recipes-cat';
                      $terms = get_the_terms(get_the_ID(), $taxonomy);

                      if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                          echo '<span class="recipes-category-label tech-text ' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</span>';
                        }
                      } else {
                        echo '<span class="recipes-category-label default-label">カテゴリーなし</span>';
                      }
                      ?>
                    </div>
                    <div class="p_home-recipes-card__info">
                      <h3 class="p_home-recipes-card__headline"><?php the_title(); ?></h3>
                      <p class="p_home-recipes-card__description">
                        <?php the_excerpt(); ?>
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
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </ul>
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