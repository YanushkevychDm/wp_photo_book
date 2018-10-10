<?php get_header(); ?>

<div  class="home-parallax"
      style=" background-image: url(<?php echo get_theme_file_uri('/img/home_parallax.jpg') ?>;)">
</div>
<?php  get_the_ID(); ?>
  <section class="two-columns bg-light-grey">
      <div class="hr-m"></div>
      <div class="two-columns__first two-columns__first--separate">
          <h2 class="h2 h2--dark">Про мене</h2>
          <div class="hr-s"></div>
          <p class="about-text">ПРИВІТ ;) Мене звати Орест Паламар. Я живу у Львові й займаюсь весільною та сімейною фотографією. Працюю як в Україні, так і за її межами. Моя робота – зберегти у фотографіях найщасливіші миті Вашого життя і зробити це красиво! У кожній фотосесії маю ціль створити таку атмосферу, де Ви могли б розкритися, бути собою і отримати задоволення не лише від фотографій, а й від процесу зйомки! Навіть тоді, коли Ви не любите фотографуватися :)</p>
          <p class="about-text">Якщо Ви хочете отримати справжні щирі фото, які передадуть цінність Ваших почуттів будуть гріти душу спогадами навіть через багато років, то я переконаний, що вони є результатом вашої з фотографом спільної роботи. Отож, я завжди відкритий до спілкування, втілення ваших ідей та пропозицій.</p>
          <p class="about-text">Запрошую переглянути галерею і якщо вам подобається те, що ви бачите, - пишіть чи телефонуйте мені! Буду радий розповісти Вашу історію у фотографіях!</p>                
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
          <a href="portfolio.html#child-photo" class="button button--light">Дитячі фото</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-parents"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="portfolio.html#family-photo" class="button button--light">Сімейні фото</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-apple-and-grapes-on-a-bowl"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="portfolio.html#still-photo" class="button button--light">Натюрморт</a>
      </div>
      <div class="four-columns-wrap">
          <svg class="icon icon--large">
              <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-photo-album"?>"></use>
          </svg>
          <div class="hr-xs"></div>
          <a href="portfolio.html#book-photo" class="button button--light">Фотокнига</a>
      </div>
      <div class="hr-m"></div>
      
  </section>
  <section class="carousel">

      <div class="carousel__container">
          <div class="rotator-wrap">
              <ul class="rotator">
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-1.jpg') ?>;"
                                alt="" />
                  </div></li>
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-2.jpg') ?>;"
                                alt="" />
                  </div></li>
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-3.jpg') ?>;"
                                alt="" />
                  </div></li>
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-1.jpg') ?>;"
                                alt="" />
                  </div></li>
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-2.jpg') ?>;"
                                alt="" />
                  </div></li>
                  <li><div><img class="rotator__img" 
                                src="<?php echo get_theme_file_uri('/img/carousel-3.jpg') ?>;"
                                alt="" />
                  </div></li>
    
              </ul>
          </div>
            </div>
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
                    'category_name' => 'Сім\'я'
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
                    'category_name' => 'Весілля'
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

  <section  class="price"
            style=" background-image: url(<?php echo get_theme_file_uri('/img/home-price.jpg') ?>;)">
      <div class="price__wrap">
          <h2 class="h2 h2--light">Цікавить ціна?</h2>
          <div class="hr-xs"></div>
          <p class="price__text">Вас зацікавили мої роботи і ви б хотіли дізнатися ціну, </p>
          <p class="price__text">передзвоніть мені або залишіть заявку.</p>
          <div class="hr-s"></div>
          <a href="price.html" class="button button--light">Дізнатися ціну</a>
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
          <div class="frame">
              <div class="frame__img frame__img-1"></div>
              <div class="frame__img frame__img-2"></div>
              <div class="frame__img frame__img-3"></div>
              <div class="frame__img frame__img-4"></div>
              <div class="frame__img frame__img-5"></div>
              <div class="frame__img frame__img-6"></div>
              <div class="frame__img frame__img-1"></div>
              <div class="frame__img frame__img-2"></div>
              <div class="frame__img frame__img-3"></div>
              <div class="frame__img frame__img-4"></div>
              <div class="frame__img frame__img-5"></div>
              <div class="frame__img frame__img-6"></div>
          </div>
      </div>
      <div class="hr-m"></div>
  </section>
  <section class="two-columns bg-light-grey">
      <div class="hr-m"></div>
      <h3 class="h3">Вам цікаво?</h3>
      <div class="hr-s"></div>
      <div class="two-columns__first">
          <p class="about-text">Чи задумувались ви, чому нам так подобається переглядати фотографії різних людей, а особливо наречених? Що так зачаровує у світлинах, на які хочеться дивитися ще раз і ще раз, і навпаки, чому інші ми оминаємо своєю увагою? Якою має бути і є весільна фотозйомка? Коли мова йде про професійну весільну фотозйомку, я як весільний фотограф бачу цінність у переданих емоціях і настрої які обовязково потрібно не пропустити та зберегти у важливих моментах цього дня. Саме люди на фотографії роблять її особливою.</p>
      </div>
      <div class="two-columns__second">
          <p class="about-text">Кохання, ніжність, радість, захоплення, подив – такі щирі почуття творять настрій кожного фото, а завданням весільного фотографа є зуміти зловити відповідний момент. І зовсім не обов’язково бути моделями для того, щоб фото вдалися – набагато краще залишатися собою, довіривши решту нюансів професійному фотографу. Мені важливо, щоб на кожній моїй світлині були ви справжні, тому переконаний, що ми з вами подружимося і разом зробимо вашу весільну фотозйомку незабутньою, а фото – цікавими та оригінальними…</p>
      </div>
      <div class="hr-xs"></div>
      <h4 class="h4">З повагою, Володимир Мельник</h4>
      <h4 class="h4">Ваш весільний фотограф</h4>

      <div class="hr-m"></div>
      
    
  </section>
            

<?php get_footer(); ?>
