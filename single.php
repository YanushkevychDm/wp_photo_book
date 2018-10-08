<?php get_header(); 
  the_post();
  $theParent = wp_get_post_parent_id(get_the_ID());
?>

 <div class="blog-header"></div>

<article class="blog-post">
    <h1 class="h1"><?php the_title(); ?></h1>
    <div class="hr-s"></div>
    <div class="article__text">
      <?php the_content(); ?>
    </div>
    <div class="hr-s"></div>
    <a href="<?php echo site_url('/blog'); ?>" class="button button--bright-2">Інші статті</a>
</article>

<?php get_footer(); ?>
