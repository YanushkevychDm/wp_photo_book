<?php get_header();  ?>

<?php pageBanner($args);  ?> 
 
<div class="hr-m"></div>
<div class="grid-simple">
 
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) {
            the_post(); ?>
            <div class="article">
                <h3 class="article__title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
              
                <div class="hr-xs"></div>
                <a href="<?php the_permalink(); ?>">
                    <img class="article__img" 
                    src="<?php echo get_the_post_thumbnail_url() ?>;" alt="">
                </a>
                <div class="article__meta"> 
                    <?php the_time('d.m.Y'); ?> 
                    <?php echo('| '); the_author_posts_link(); ?> 
                    <?php 
                      if(get_the_category_list()) {
                        echo('| '); echo get_the_category_list(', '); 
                      }
                    ?>
                </div>
                <div class="article__wrap">
                
                    
                    <section class="portfolio-experiment">
                        <a href="<?php the_permalink(); ?>">
                            <span class="text">Детальніше...</span>
                            <span class="line -right"></span>
                            <span class="line -top"></span>
                            <span class="line -left"></span>
                            <span class="line -bottom"></span>
                        </a>
                    </section>
                </div>

            </div>  

            
        <?php }
    ?>
    
  <?php else : ?>
		<h3 class="center">За Вашим запитом нічого не знайдено...</h3>
  <?php endif; ?>
</div> 

<div class="hr-s"></div>

<?php  get_footer(); ?>