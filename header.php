<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); echo " | "; bloginfo("description")  ?></title>
    <meta name="theme-color" content="#c9e0e04d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="./assets/styles/main.min.css">
    <?php
        wp_head();
    ?>
</head>

<body class="no-svg">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
                    <div class="header__contacts">
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/email.svg" alt="почта" class="header__contacts-logo">
                            <a href="<?php the_field('mail', 2) ?>" class="header__contacts-mail"><?php the_field('mail', 2) ?></a>
                        </div>
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
                            <div class="header__contacts-tel">
                                <a href="<?php the_field('first_number', 2) ?>"><?php the_field('first_number', 2) ?></a>
                                <a href="<?php the_field('second_number', 2) ?>"><?php the_field('second_number', 2) ?></a>
                            </div>
                        </div>
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="header__contacts-logo">
                            <?php the_field('your_address', 2); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <nav class="row" data-slide="1">
                <?php 
                    wp_nav_menu( array(
                    'menu'            => 'Main',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                                                        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                    'container'       => false,           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'menu_class'      => 'header__nav',          // (string) class самого меню (ul тега)
                    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                    'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                    'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                    ));
                ?>                
            </nav>
        </div>
        <div class="header__hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>