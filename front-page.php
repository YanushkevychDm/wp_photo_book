<?php get_header(); ?>

 <div  class="home-parallax"
      style=" background: linear-gradient(rgba(0, 0, 0, 0.8),  rgba(0, 0, 0, 0.8)), url(<?php echo get_theme_file_uri('/img/boat.jpg') ?>);
        min-height: 100vh;
        background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
        ">
</div> 

<?php  get_the_ID(); ?>
  <section class="two-columns bg-light-grey">
      <div class="hr-m"></div>
      <div class="two-columns__first two-columns__first--separate">
          <h2 class="h2 h2--dark">Про мене</h2>
          <div class="hr-s"></div>
          <p class="about-text">Дитячі та сімейні фотосесії, фотозйомка в студії та на природі, ранків і випускних, портрет і портфоліо, натюрморти - жанри фотографії, в яких я працюю.</p>
          <p class="about-text">Будучи професійним фотографом близько 15-ти років, я отримав величезний досвід контакту з людьми і вміння бачити красу в кожному. Красива фотосесія - це в першу чергу Ваш внутрішній світ, почуття і емоції, відобразити які можна, якщо процес фотозйомки проходить в приємній і розслабленій атмосфері.</p>
          <p class="about-text">В послуги фотографа входить ретуш та обробка фотографій на комп'ютері, друк фото та виготовлення фотокниг. На сторінці «Портфоліо» Ви знайдете портрети, приклади предметної фотозйомки, а в розділі «Блог» зможете прочитати корисні статті про підготовку та організацію фотосесії.</p>                
          



      </div>

      <div class="two-columns__second">
          <div class="round">
             
          <img class="round__img" 
                src="<?php echo get_the_post_thumbnail_url() ?>;" alt="avatar"
                style="object-fit: cover; object-position: 50% 0;">
          </div>
          
      </div>
      <div class="hr-m"></div>
  </section>

  <section class="four-columns">
      <div class="hr-m"></div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-boy-broad-smile"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="<?php echo site_url('/portfolio#child-photo'); ?>" class="button button--light">Дитячі фото</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-parents"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="<?php echo site_url('/portfolio#family-photo'); ?>" class="button button--light">Сімейні фото</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-apple-and-grapes-on-a-bowl"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="<?php echo site_url('/portfolio#still-photo'); ?>" class="button button--light">Натюрморт</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-photo-album"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="<?php echo site_url('/portfolio#book-photo'); ?>" class="button button--light">Фотокнига</a>
      </div>
      <div class="hr-m"></div>
      
  </section>

  <?php if(have_posts()) the_post();
        the_content();
        ?>
  <section class="carousel">
    <div class="hr-s"></div>
        <a href="portfolio.html" class="button button--bright-1 center">Переглянути більше</a>
    <div class="hr-s"></div>
  </section>

  <section class="two-columns">
      <div class="hr-m"></div>
      <h3 class="h3">Цікаві статті з мого блогу</h2>
      



      <div class="hr-s"></div>
      <div class="two-columns__first">
        <div class="two-rows">
            <?php
                $homepagePosts_1 = new WP_Query(array(
                    'posts_per_page' => 2,
                    'category_name' => 'Художній портрет'
                ));
                while($homepagePosts_1->have_posts()) {
                    $homepagePosts_1->the_post(); ?>
                    <div class="home-blog__wrap">
                        <img class="home-blog__img" 
                                src="<?php echo get_the_post_thumbnail_url() ?>;" 
                                alt="blog image">
                        <div class="home-blog__info">
                            <p>
                                <?php the_time('d.m.Y'); ?>, 
                                <?php echo get_the_category_list(', '); ?>
                            </p>
                            <p class="home-blog__title">
                                <?php the_title(); ?>
                            </p>
                            <section class="portfolio-experiment">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="text">Читати...</span>
                                    <span class="line -right"></span>
                                    <span class="line -top"></span>
                                    <span class="line -left"></span>
                                    <span class="line -bottom"></span>
                                </a>
                            </section>
                        </div>
                    </div> 
                    <div class="hr-s"></div>
                <?php }  wp_reset_postdata();
            ?>
          </div>
      </div>
      
      <div class="two-columns__second">
          <div class="two-rows">
          <?php
                $homepagePosts_2 = new WP_Query(array(
                    'posts_per_page' => 2,
                    'category_name' => 'Технологія'
                ));
                while($homepagePosts_2->have_posts()) {
                    $homepagePosts_2->the_post(); ?>
                    <div class="home-blog__wrap">
                        <img class="home-blog__img" 
                                src="<?php echo get_the_post_thumbnail_url() ?>;" 
                                alt="blog image">
                        <div class="home-blog__info">
                            <p>
                                <?php the_time('d.m.Y'); ?>, 
                                <?php echo get_the_category_list(', '); ?>
                            </p>
                            <p class="home-blog__title">
                                <?php the_title(); ?>
                            </p>
                            <section class="portfolio-experiment">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="text">Читати...</span>
                                    <span class="line -right"></span>
                                    <span class="line -top"></span>
                                    <span class="line -left"></span>
                                    <span class="line -bottom"></span>
                                </a>
                            </section>
                        </div>
                    </div> 
                    <div class="hr-s"></div>
                <?php } wp_reset_postdata();
            ?>           
          </div>
      </div>
      <div class="hr-s"></div>
      <a href="<?php echo site_url('/blog'); ?>" class="button button--bright-2 center">Більше цікавих історій</a>
      <div class="hr-s"></div>
  </section>

  <section class="picture">
      <img src="<?php echo get_theme_file_uri('/img/pen.jpg') ?>;" alt="" class="picture__img">
      <div class="picture__text">
          <h2 class="h2 h2--light">Цікавить ціна?</h2>
          <div class="hr-xs"></div>
          <p class="price__text">Вас зацікавили мої роботи і ви б хотіли дізнатися ціну, </p>
          <p class="price__text">передзвоніть мені або залишіть заявку.</p>
          <div class="hr-s"></div>
          <a href="<?php echo site_url('/price'); ?>" class="button button--light">Дізнатися ціну</a>
      </div>
  </section>

  <section class="two-columns">
      <div class="hr-m"></div>
      <div class="two-columns__first two-columns__first--separate">
          <h3 class="h3">Я у соціальних мережах</h4>
          <p class="facebook">Facebook</p>
          <p class="about-text">Підписуйтесь на мій профіль, щоб бачити найсвіжіші фото моєї творчості! </p>

          <a href="https://www.facebook.com/vlamelnik?hc_ref=ARTZyOXtilzgCTKLxFUHsO18spYlsviy0QcoMSgS3x8n0SDBDFg3F4Ftg7eAt6oQQiM&fref=nf&__xts__[0]=68.ARATWGLKrnMjQ9mXY4ZK-bs-JRJ5fyA5jenrRZ3rxXJQUSsKrIP_nEEWwL3VhTacBuOoxhYqABd1bmQmnXb0z5icWz4rx5HGKJMGlNIfrxOWY9QdhJ1qX185cC_SOCuL-Q5qsbCETnKITQP9d9o82NUfv2xtgHA2i-onzmZsxtzDpSosP9ir&__tn__=C-R">
              <svg class="icon icon--medium">
                  <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-facebook-square"?>"></use>
              </svg>
          </a>
          
      </div>
      <div class="two-columns__second">  
            <div class="image-grid">
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/1.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/2.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/3.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/4.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/5.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/6.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/1.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/2.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/3.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/4.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/5.jpg') ?>" alt=""></a>
                <a href="<?php echo site_url('/portfolio'); ?>"> <img src=" <?php echo get_theme_file_uri('/img/collage/6.jpg') ?>" alt=""></a>
            </div>
      </div>
      <div class="hr-m"></div>
  </section>
  <section class="two-columns bg-light-grey">
      <div class="hr-m"></div>
      <h3 class="h3">Вам цікаво?</h3>
      <div class="hr-s"></div>
      <div class="two-columns__first">
          <p class="about-text">Можна зазначити, що послуги фотографа - це грамотний і дуже розумний вибір для тих, хто піклується про свої спогади і хоче, щоб   вони залишилися найприємнішими. При цьому справедливо сказати про те, що фотограф - це фахівець особливого жанру. А саму зйомку можна назвати мистецтвом в мистецтві. Адже справжній професіонал своєї справи - це людина, яка здатна не тільки помічати красу, але ще і вчасно її фіксувати. 
          </p>
      </div>
      <div class="two-columns__second">
        <p class="about-text">Він вловлює такі моменти, на яких оточуючі просто не акцентують своєї уваги або зовсім їх не помічають. Саме тому професійну роботу видно відразу і ви зможете визначити її вже з першого кадру з альбому. До своєї роботи я завжди підходжу з особливою увагою і ретельністю. Тільки завдяки індивідуальному підходу до кожної зйомки і ретельному вивченню всіх деталей, фотографії виходять настільки яскравими і унікальними.
        </p>
      </div>
      <div class="hr-xs"></div>
      <h4 class="h4">З повагою, Володимир Мельник</h4>
      <h4 class="h4">Ваш фотограф</h4>

      <div class="hr-m"></div>
      
    
  </section>
            

<?php get_footer(); ?>