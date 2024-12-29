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
        <path d="M6.83256 5.21875L1.91215 0.321713C1.75462 0.1662 1.49988 0.1662 1.34235 0.321713L0.678697 0.976859C0.521163 1.13237 0.521163 1.38384 0.678697 1.53935L4.65055 5.5L0.678697 9.46067C0.521163 9.61615 0.521163 9.86759 0.678697 10.0232L1.34235 10.6783C1.49988 10.8338 1.75462 10.8338 1.91215 10.6783L6.83256 5.78124C6.99009 5.62573 6.99009 5.37426 6.83256 5.21875Z" fill="#562708" />
      </svg>

    </div>
    <a href="<?php echo $home_url; ?>/technique/" class="text">料理のコツ</a>
  </div>

  <section class="p_recipes">
    <div class="inner-block">

    <h2 class="p_home-recipes__with-b">
        <?php
        $term_object = get_queried_object(); 
        echo esc_html($term_object->name); 
        ?>
      </h2>
      <div class="p_tech-grid1">
     
      <?php
      $term_object = get_queried_object(); // 現在のタクソノミーオブジェクトを取得
      $term_slug = $term_object->slug; // スラッグを取得
      $args = array(
        'post_type' => 'technique', // カスタム投稿タイプ
        'posts_per_page' => -1, // 全件取得
        'tax_query' => array(
          array(
            'taxonomy' => 'technique-cat', // タクソノミー名
            'field' => 'slug', // スラッグで検索
            'terms' => $term_slug // 取得したスラッグを使用
          ),
        ),
      );
      $the_query = new WP_Query($args);
      ?>
        <div class="p_tech-grid1-item">
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="p_tech__content">

                  <?php
                  $taxonomy = 'technique-cat';
                  $terms = get_the_terms(get_the_ID(), $taxonomy);
                  if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                      echo '<span class="category-label tech-text ' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</span>';
                    }
                  } else {
                    echo '<span class="category-label default-label">カテゴリーなし</span>';
                  }
                  ?>

                  <p class="title"><?php the_title(); ?></p>
                </div>
              </a>
          <?php endwhile;
          endif; ?>

        </div>
        <div class="c-cap">
          <span class="hint">\ 美味しくなるヒント /</span>
          <span class="text-r">味見をしましょう。</span>
          <span class="text-r">火が通りにくい食材から。</span>
          <span class="text-r">心をこめて。</span>
          <div class="c-recipes-cat">
            <span class="c-recipes-cat__b title">カテゴリー</span>
            <a href="<?php echo $home_url; ?>/technique-cat/knife/" class="text-b">包丁の持ち方</a>
            <a href="<?php echo $home_url; ?>/technique-cat/pre/" class="text-b">下処理・下準備</a>
            <a href="<?php echo $home_url; ?>/technique-cat/peer/" class="text-b">皮活用</a>
          </div>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>