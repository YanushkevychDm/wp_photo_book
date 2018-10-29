<?php get_header();  ?>

<?php pageBanner($args);  ?> 

<section >
 
    <?php 
        if(have_posts()) {
            the_post();
        }
        the_content();
    ?>
</section>

<?php  get_footer(); ?>   