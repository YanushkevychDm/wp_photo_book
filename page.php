<?php get_header();  ?>

<?php pageBanner($args);  ?> 
 
<?php 
    if(have_posts()) {
        the_post();
    }

    the_content();

?>


 <?php  get_footer(); ?>
