 <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <!-- repost -->
    <meta property="og:title" content="Жилой комплекс 8-я Сосневская" />
    <meta property="og:description" content="Квартиры комфорт класса в центре города. Удобные планировки. Высокие потолки." />
    <meta property="og:image" content="https://example.com/image.jpg" />
    <meta property="og:url" content="https://example.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&family=Montserrat:wght@100..900&family=Playfair+Display:ital@1&display=swap"
        rel="stylesheet">
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">

    <?php 
    wp_head();
    ?>
</head>

<body>
    <div id="preloader" class="preloader">
        <div class="preloader-box">
            <div>L</div>
            <div>O</div>
            <div>A</div>
            <div>D</div>
            <div>I</div>
            <div>N</div>
            <div>G</div>
        </div>
    </div>
 <div class="content">
 <header class="header">
        <div class="hamburger"><span></span><span></span><span></span></div>
        <div class="header__logo"><?php the_custom_logo(); ?></div>
        <nav class="nav">
            <div class="menu">
                <div class="menu__close">&times;</div>
                <div class="menu__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_invert.png" alt="Логотип"></div>
                <ul>
                    <li class="menu__link"><a href="#advantages"><?php the_field('advantages_title', 2); ?></a></li>
                    <li class="menu__link"><a href="#infrastructure"><?php the_field('infrastructure_title', 2) ?></a></li>
                    <li class="menu__link"><a href="#select"><?php the_field('select_title', 2) ?></a></li>
                    <li class="menu__link"><a href="#mortgage"><?php the_field('mortgage_title', 2) ?></a></li>
                    <li class="menu__link"><a href="#contact"><?php the_field('contact_title', 2); ?></a></li>
                </ul>
                <div class="menu__phone">
                    <a href="tel:+74952554824">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon_social/phone.svg" alt="Позвонить">
                        <span class="phone"><?php the_field("phone", 2) ?></span>
                    </a>

                </div>
            </div>
        </nav>
        <div class="header__phone">
            <a href="tel:+74952554824">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon_social/phone.svg" alt="Позвонить">
                <span class="phone"><?php the_field("phone", 2) ?></span>
            </a>

        </div>
    </header>