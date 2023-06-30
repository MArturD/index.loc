<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/> -->
    <title>Index</title>

    <?php
    wp_head();
    ?>

</head>
<body>
<div class="backcolor_header">
    <header>
        <div class="wrap">
            <div class="header_wrap">

                <div class="logo">
                    <?php the_custom_logo($blog_id); ?>
                </div>


                <div class="menu-burger">
                    <div class="menu-burger-wrap ">
                        <div class="burger-fon">


                        <div class="burger-right">
                        <div class="burger-menu-flex">
                            <nav class="menu-burger-list">
                                <ul>
                                    <li><a href="#portfolio"><?php the_field('portfolio-text'); ?></a></li>
                                    <li><a href="#about"><?php the_field('about-text'); ?></a></li>
                                    <li><a href="#services"><?php the_field('services-text'); ?></a></li>
                                    <li><a href="#contacts"><?php the_field('contacts-text'); ?></a></li>
                                </ul>
                            </nav>
                            <div class="footer_social">
                                <p class="footer_number"><a
                                            href=”tel:<?php the_field('tel-link'); ?>”><?php the_field('tel-title'); ?></a>
                                </p>
                                <p class="footer_mail"><?php the_field('email-title'); ?></p>
                                <div class="social_cards">
                                    <div class="social_card"><a href="<?php the_field('tg-link'); ?>"><img
                                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg-icon.svg"></a>
                                    </div>
                                    <div class="social_card"><a href="<?php the_field('insta-link'); ?>"><img
                                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/insta-icon.svg"></a>
                                    </div>
                                    <div class="social_card"><a href="<?php the_field('email-link'); ?>"><img
                                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/email-icon.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>

                    <button class="burger-btn ">
                        <span></span>
                    </button>
                </div>

                <div class="right-side">
                    <nav>
                        <ul>
                            <li><a href="#portfolio"><?php the_field('portfolio-text'); ?></a></li>
                            <li><a href="#about"><?php the_field('about-text'); ?></a></li>
                            <li><a href="#services"><?php the_field('services-text'); ?></a></li>
                            <li><a href="#contacts"><?php the_field('contacts-text'); ?></a></li>
                        </ul>
                    </nav>

                    <div class="language">
                        <a class="language_button" lang="ru-RU" hreflang="ru-RU" href="http://index.loc/">RU</a>
                        <a class="language_button" lang="en-GB" hreflang="en-GB"
                           href="http://index.loc/en/home-english/">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </header>