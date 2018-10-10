<?php get_header(); the_post(); ?>
<div class="blog-header"></div>
 
 <section class="two-columns bg-light-grey">
            <div class="hr-m"></div>
            <div class="two-columns__first two-columns__first--separate">
                <div class="round">
                    <img class="round__img" 
                    src="<?php echo get_the_post_thumbnail_url() ?>;" alt="avatar"
                    style="object-fit: cover; object-position: 50% 0;">
                </div>
            </div>
            <div class="two-columns__second">
       
                  <?php the_content(); ?>
               
            </div>
         
            <div class="hr-m"></div>
                       
        </section>


 <?php  get_footer(); ?>
