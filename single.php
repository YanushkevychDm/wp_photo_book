<?php get_header(); 
  the_post();
  $theParent = wp_get_post_parent_id(get_the_ID());
?>

 <div class="banner">
    <div class="banner__bg"></div>
    <img class="banner__img" 
        src="<?php echo get_theme_file_uri('/img/home_parallax.jpg') ?>" alt="gdrgdrg">
        
    <h1 class="h1 h1--light center banner__top"><?php echo $args['title'];?></h1>
</div>

<article class="blog-post">
    <h1 class="h1"><?php the_title(); ?></h1>
    <div class="hr-s"></div>
    <div class="article__text">
      <?php the_content(); ?>
    </div>
    <div class="hr-s"></div>
    <a href="<?php echo site_url('/blog'); ?>" class="button button--bright-2">Інші статті</a>
    <div class="hr-s"></div>
    <?php comments_template(); ?>
</article>

<?php get_footer(); ?>
