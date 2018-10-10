<?php 

function photo_book_files() {
  // wp_enqueue_script('main_script', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
  wp_enqueue_script('jQuery', get_theme_file_uri('/js/jQuery.min.js'), NULL, '1.0', true);
  wp_enqueue_script('btn_to_top', get_theme_file_uri('/js/buttonToTop.js'), NULL, microtime(), true);
  wp_enqueue_script('navigation', get_theme_file_uri('/js/navbar.js'), NULL, '1.0', true);
  wp_enqueue_style('photo_book_styles', get_stylesheet_uri(), NULL, microtime());
  wp_enqueue_style('photo_book_styles_wp', get_stylesheet_uri('/wp_style.css'),  NULL, 1.0);
  
}

add_action('wp_enqueue_scripts', 'photo_book_files');


function admin_features() {
  // Картинка к посту
  add_theme_support('post-thumbnails');


  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'admin_features');

function init_widgets($id) {
  register_sidebar(array(
    'name'          => 'Footer',
    'id'            => 'footer',
    'before_widget' =>' <div class="category-list">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="h4 h4--light upper">',
    'after_title'   => '</h4>' 
  ));
}

add_action('widgets_init', 'init_widgets');



