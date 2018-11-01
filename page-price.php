<?php get_header(); the_post(); ?>

<?php pageBanner($args);  ?> 


<div class="padding">
    <?php the_content(); ?>
</div>


  <section class="picture">
      <img src="<?php echo get_theme_file_uri('/img/finger.jpg') ?>;" alt="" class="picture__img">
      <div class="picture__text">
        <h2 class="h2 h2--light">Замовити фотосесію</h2>
        <div class="hr-xs"></div>
        <p class="price__text">+380 67-886-06-09</p>
        <p class="price__text">vlamelnik@gmail.com</p>
        <div class="hr-s"></div>
        <a href="review.html" class="button button--light">Відгуки</a>
      </div>
  </section>


<div class="hr-m"></div>
<section class="grid-simple">
    <div class="blurb">
         <div class="blurb__img">
            <svg class="icon icon--large">
                <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-clipboard" ?>"></use>
            </svg>
        </div>
        <h2 class="h2">Висока якість</h2>
        <p class="article__text">
            Уся фотосесія знімається на професійну техніку,
            з високою роздільною здатністю, що забезпечує максимальну деталізацію.
        </p>
    </div>
    <div class="blurb">
        <div class="blurb__img">
            <svg class="icon icon--large">
                <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-star-empty"?>"></use>
            </svg>
        </div>
        <h2 class="h2">
            Великий досвід
        </h2>
        <p class="article__text">
            Я займаюся фотографією понад 20 років і це основна сфера моєї діяльності. 
            Я докладаю багато зусиль, щоб розвиватися та робити фото якісними й цікавими. 
        </p>
    </div>
    <div class="blurb">
        <div class="blurb__img">
            <svg class="icon icon--large">
                <use xlink:href="<?php echo get_theme_file_uri('svg/sprite.svg')."#icon-stats-dots"?>"></use>
            </svg>
        </div>
        <h2 class="h2">Гнучкий підхід</h2>
        <p class="article__text">
            Кожна фотосесія відрізняється від інших, тому я завжди планую
            роботу на основі Ваших побажань.
        </p>
    </div>
</section>
<div class="hr-m"></div>

<?php  get_footer(); ?>