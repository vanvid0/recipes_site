<?php
$home_url = get_bloginfo('url');
$template_url = get_bloginfo('template_directory');





//ショートコード

//home_url
function home_urlFunc()
{
  return get_bloginfo('url');
}
add_shortcode('home_url', 'home_urlFunc');

//template_url
function template_urlFunc()
{
  return get_bloginfo('template_directory');
}
add_shortcode('template_url', 'template_urlFunc');

//サムネイル
add_theme_support('post-thumbnails');

// ショートコードの展開を有効化
function my_kses_allowed_html($tags, $context)
{
  if ($context == 'post') {
    $tags['use']['xlink:href'] = true;
  }
  return $tags;
}
add_filter('wp_kses_allowed_html', 'my_kses_allowed_html', 10, 2);


/*---------------------------------------------------------------*/
//ここからカスタマイズ
/*---------------------------------------------------------------*/
// カスタム投稿
add_action('init', 'custom_posttype');
function custom_posttype()
{
  register_post_type('recipes', array(
    'labels' => array(
      'name' => 'レシピ',
      'singular_name' => 'レシピ',
    ),
    'public' => true,
    'show_ui' => true,
    'rewrite' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
  ));
  register_taxonomy(
    'recipes-cat',
    'recipes',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'show_in_rest' => true,
      'public' => true
    ));
  register_taxonomy('recipes-tag','recipes', array(
    'hierarchical' => false,
    'label' => 'タグ',
    'show_ui' => true,
    'show_in_rest' => true,
    'public' => true
  ));

  register_post_type('technique', array(
    'labels' => array(
      'name' => '料理のコツ',
      'singular_name' => '料理のコツ',
    ),
    'public' => true,
    'show_ui' => true,
    'rewrite' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
  ));
  register_taxonomy(
    'technique-cat',
    'technique',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'show_in_rest' => true,
      'public' => true
    )
  );
  //  register_taxonomy('tax_tag',array('blog'), array(
  //    'hierarchical' => false,
  //    'label' => 'タグ',
  //    'show_ui' => true,
  //    'show_in_rest' => true,
  //    'public' => true
  //  ));
}
