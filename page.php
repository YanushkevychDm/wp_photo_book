<?php get_header();  ?>

<?php pageBanner($args);  ?> 

<div class="hr-m"></div>
<div class="two-columns">
    <h3 class="h3"><a href="<?php echo site_url('/portfolio'); ?>">Портфоліо</a> &rarr; <?php the_title(); ?> </h3>
</div>

<?php if(have_posts()) : ?>
    <?php    the_post(); ?>

    <?php the_content(); ?>
<?php else : ?>

		<h2 class="center">За Вашим запитом нічого не знайдено...</h2>

<?php endif; ?>


<div class="hr-m"></div>

<?php  get_footer(); ?>
