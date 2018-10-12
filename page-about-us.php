<?php get_header(); the_post(); ?>

<?php pageBanner($args);  ?> 


<section class="two-columns bg-light-grey">
    <div class="hr-m"></div>
    <div class="two-columns__first two-columns__first--separate">
        <div class="round">
            <img class="round__img" 
                src="<?php echo get_the_post_thumbnail_url() ?>;" alt="avatar"
                style="object-fit: cover; object-position: 50% 0;">
            </div>
        </div>
    </div>
    <div class="two-columns__second">
        <h2 class="h2 h2--dark">Про мене</h2>
        <div class="hr-s"></div>
        <p class="about-text">ПРИВІТ ;) Мене звати Орест Паламар. Я живу у Львові й займаюсь весільною та сімейною фотографією. Працюю як в Україні, так і за її межами. Моя робота – зберегти у фотографіях найщасливіші миті Вашого життя і зробити це красиво! У кожній фотосесії маю ціль створити таку атмосферу, де Ви могли б розкритися, бути собою і отримати задоволення не лише від фотографій, а й від процесу зйомки! Навіть тоді, коли Ви не любите фотографуватися :)</p>
        <p class="about-text">Якщо Ви хочете отримати справжні щирі фото, які передадуть цінність Ваших почуттів будуть гріти душу спогадами навіть через багато років, то я переконаний, що вони є результатом вашої з фотографом спільної роботи. Отож, я завжди відкритий до спілкування, втілення ваших ідей та пропозицій.</p>
        <p class="about-text">Запрошую переглянути галерею і якщо вам подобається те, що ви бачите, - пишіть чи телефонуйте мені! Буду радий розповісти Вашу історію у фотографіях!</p>                
        <div class="hr-s"></div>
        <h3 class="h3">+38 (067) 886-06-09</h3>
        <h3 class="h3">vlamelnik@gmail.com</h3>
        <div class="hr-s"></div>
        <a class="center" href="https://www.facebook.com/vlamelnik?hc_ref=ARTZyOXtilzgCTKLxFUHsO18spYlsviy0QcoMSgS3x8n0SDBDFg3F4Ftg7eAt6oQQiM&fref=nf&__xts__[0]=68.ARATWGLKrnMjQ9mXY4ZK-bs-JRJ5fyA5jenrRZ3rxXJQUSsKrIP_nEEWwL3VhTacBuOoxhYqABd1bmQmnXb0z5icWz4rx5HGKJMGlNIfrxOWY9QdhJ1qX185cC_SOCuL-Q5qsbCETnKITQP9d9o82NUfv2xtgHA2i-onzmZsxtzDpSosP9ir&__tn__=C-R">
            <svg class="icon icon--medium">
                <use xlink:href="svg/sprite.svg#icon-facebook-square"></use>
            </svg>
        </a>
    </div>
  
    <div class="hr-m"></div>
                
</section>

<?php get_footer(); ?>