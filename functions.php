<?php 

function pageBanner($args) {

  if(!$args['title']) {
    $args['title'] = '';
  }

  if (!$args['photo']) {
    if (get_field('page_banner')) {
      $args['photo'] = get_field('page_banner')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/img/sunset.jpg');
    }
  }

  
  ?>
  <div class="banner">
    <div class="banner__bg"></div>
    <img class="banner__img" 
        src="<?php echo $args['photo']; ?>" alt="banner">
    <h1 class="h1 h1--light center banner__top"><?php echo $args['title'];?></h1>
</div>
<?php }




function photo_book_files() {
  wp_enqueue_script('main_script', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
  wp_enqueue_style('photo_book_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'photo_book_files');


function admin_features() {
  // Картинка к посту
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 2000, 300, true);

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

  register_sidebar(array(
    'name'          => 'Gallery',
    'id'            => 'gallery',
    'before_title'  => '<h4 class="h3 upper">',
    'after_title'   => '</h4>' 
  ));
}

add_action('widgets_init', 'init_widgets');




