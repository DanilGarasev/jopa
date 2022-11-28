<?php get_header(); ?>
<main>
    <section class="intro" style="background: url('<?php echo  wp_get_attachment_image_url(carbon_get_theme_option('main_cover'), 'full') ?>') no-repeat;     background-size: cover;
    position: relative;">
        <div class="container">
            <div class="intro__content">
                <div class="intro__block">
                    <h1 class="intro__tittle">
                        <?php echo carbon_get_theme_option('intro_title') ?>
                    </h1>
                    <a href="#" class="btn">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="wrapper">
                <div class="block">
                    <div class="info__item">
                        <div class="info__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/call.svg" alt='изображение'>
                        </div>
                        <h4 class="info__tittle">ПОЗВОНИТЕ НАМ</h4>
                        <p class="info__text">Бесплатный звонок для вас</p>
                    </div>
                </div>
                <div class="block">
                    <div class="info__item">
                        <div class="info__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" alt='изображение'>
                        </div>
                        <h4 class="info__tittle">ПОЛУЧИТЕ СКИДКУ</h4>
                        <p class="info__text">Скидки в праздничные дни </p>
                    </div>
                </div>

                <div class="block">
                    <div class="info__item">
                        <div class="info__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/maps-and-flags.svg" alt='изображение'>
                        </div>
                        <h4 class="info__tittle">НАЙТИ НА КАРТЕ</h4>
                        <p class="info__text">Москва, Проспект Мира 132</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="section">
        <div class="container">
            <h2 class="block__tittle">НАШИ УСЛУГИ</h2>
            <a href="#" class="block__link">ПОСМОТРЕТЬ ВСЕ УСЛУГИ</a>
            <div class="wrapper">
                <div class="block">
                    <a href="#" class="services__item">
                        <div class="services__content" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_theme_option('service_first_image'), 'full') ?>);">
                            <div class="services__content-item">
                                <div class="services__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt='изображение'>
                                </div>
                                <p class="services__text"><?php echo carbon_get_theme_option('service_first_call') ?></p>
                            </div>
                        </div>
                        <h3 class="services__tittle"> <?php echo carbon_get_theme_option('service_first_title') ?></h3>
                    </a>
                </div>
                <div class="block">
                    <a href="#" class="services__item">
                        <div class="services__content" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_theme_option('service_second_image'), 'full') ?>);">
                            <div class="services__content-item">
                                <div class="services__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt='изображение'>
                                </div>
                                <p class="services__text"><?php echo carbon_get_theme_option('service_second_call') ?></p>
                            </div>
                        </div>
                        <h3 class="services__tittle"><?php echo carbon_get_theme_option('service_second_title') ?></h3>
                    </a>
                </div>
                <div class="block">
                    <a href="#" class="services__item">
                        <div class="services__content" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_theme_option('service_third_image'), 'full') ?>);">
                            <div class="services__content-item">
                                <div class="services__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt='изображение'>
                                </div>
                                <p class="services__text"><?php echo carbon_get_theme_option('service_third_call') ?></p>
                            </div>
                        </div>
                        <h3 class="services__tittle"><?php echo carbon_get_theme_option('service_third_title') ?></h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__block">
                    <h2 class="block__tittle text-white"><?php echo carbon_get_theme_option('about_title') ?></h2>
                    <p class="about__text">
                        <?php echo carbon_get_theme_option('about_text') ?></p>
                    <a href="#" class="about__link">ПОДРОБНЕЕ О НАС</a>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/img/fon.jpg" alt='изображение' class="about__img">
            </div>

        </div>

    </section>
    <section class="section thebest">
        <div class="container">
            <h2 class="thebest__tittle">HAVOK</h2>
            <h3 class="thebest__subtittle">ОДНИ ИЗ ЛУЧШИХ</h3>
            <div class="wrapper">
                <div class="block">
                    <div class="thebest__item">
                        <h4 class="info__tittle"><?php echo carbon_get_theme_option('advantage_firsttitle') ?></h4>
                        <p class="info__text"><?php echo carbon_get_theme_option('advantage_firsttext') ?></p>
                    </div>
                </div>
                <div class="block">
                    <div class="thebest__item">
                        <h4 class="info__tittle"><?php echo carbon_get_theme_option('advantage_secondtitle') ?></h4>
                        <p class="info__text"><?php echo carbon_get_theme_option('advantage_secondtext') ?></p>
                    </div>
                </div>
                <div class="block">
                    <div class="thebest__item">
                        <h4 class="info__tittle"><?php echo carbon_get_theme_option('advantage_thirdtitle') ?></h4>
                        <p class="info__text"><?php echo carbon_get_theme_option('advantage_thirdtext') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container">
            <h2 class="block__tittle text-white">СВЯЖИТЕСЬ С НАМИ </h2>
            <form class="contacts__form" action="">
                <div class="form__row">
                    <div class="form__group">
                        <input type="text" class="input" placeholder=" ">
                        <label for="" class="label">
                            Имя
                        </label>
                    </div>
                    <div class="form__group">
                        <input type="text" class="input" placeholder=" ">
                        <label for="" class="label">
                            Фамилия
                        </label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__group">
                        <input type="email" class="input" placeholder=" ">
                        <label for="" class="label">
                            Email
                        </label>
                    </div>
                    <div class="form__group">
                        <input type="tel" class="input" placeholder=" ">
                        <label for="" class="label">
                            Телефон
                        </label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__group">
                        <textarea class="textarea" placeholder=" " name=""></textarea>
                        <label for="" class="label">
                            Комментарий
                        </label>
                    </div>
                </div>
                <button class="btn text-upper" type="submit">Отправить</button>
            </form>
        </div>
    </section>
</main>

<?php get_footer() ?>