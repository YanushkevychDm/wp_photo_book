<?php 

function photo_book_files() {
  // wp_enqueue_script('main_script', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
  wp_enqueue_script('jQuery', get_theme_file_uri('/js/jQuery.min.js'), NULL, '1.0', true);
  wp_enqueue_script('btn_to_top', get_theme_file_uri('/js/buttonToTop.js'), NULL, microtime(), true);
  wp_enqueue_script('navigation', get_theme_file_uri('/js/navbar.js'), NULL, '1.0', true);
  wp_enqueue_style('photo_book_styles', get_stylesheet_uri(), NULL, microtime());
  
}

add_action('wp_enqueue_scripts', 'photo_book_files');


function admin_features() {
  // Картинка к посту
  add_theme_support('post-thumbnails');


  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'admin_features');





