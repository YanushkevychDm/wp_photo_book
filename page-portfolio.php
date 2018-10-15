<?php get_header();  ?>

<?php pageBanner($args);  ?> 

<section style=" background-image: url(<?php echo get_theme_file_uri('/img/sativa.png') ?>;);
                background-repeat:repeat;">
 
    <?php 
        if(have_posts()) {
            the_post();
        }
        the_content();
    ?>
</section>

<?php  get_footer(); ?>   