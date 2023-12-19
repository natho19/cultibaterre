<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= CULTIBATERRE_IMG_URL . 'favicons/apple-touch-icon.png'; ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= CULTIBATERRE_IMG_URL . 'favicons/favicon-32x32.png'; ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= CULTIBATERRE_IMG_URL . 'favicons/favicon-16x16.png'; ?>" />
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?= CULTIBATERRE_IMG_URL . 'logos/favicon-1.png'; ?>" alt="Preloader" />
    </div>

    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header main-header--one main-header--one--two clearfix">
            <div class="main-header--one__wrapper">
                <!-- Topbar -->
                <div class="main-header--one__top clearfix">
                    <div class="auto-container">
                        <div class="main-header--one__top-left">
                            <div class="text">
                                <p>Grossiste de produits agricoles</p>
                            </div>
                            <div class="social-link clearfix">
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-header--one__top-right clearfix">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:contact@cultibaterre.com">contact@cultibaterre.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-clock"></i></div>
                                    <div class="text">
                                        <p>Lun - Sam 24h/24, Dim - 06:00 à 13:00</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Nav -->
                <div class="main-header--one__bottom clearfix">
                    <div class="auto-container">
                        <div class="main-header--one__bottom-inner">
                            <div class="main-header--one__bottom-middel">
                                <div class="logo">
                                    <a href="http://localhost/cultibaterre/">
                                        <img src="<?= CULTIBATERRE_IMG_URL . 'logos/logo-1.png'; ?>" alt="Logo" class="light-logo" />
                                    </a>
                                </div>
                            </div>

                            <nav class="main-menu main-menu--1">
                                <div class="main-menu__inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <div class="stricky-one-logo">
                                        <div class="logo">
                                            <a href="http://localhost/cultibaterre/">
                                                <img src="<?= CULTIBATERRE_IMG_URL . 'logos/logo-1.png'; ?>" class="dark-logo" alt="Logo" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="main-header--one__bottom-left">
                                        <ul class="main-menu__list">
                                            <li><a href="http://localhost/cultibaterre/">Accueil</a></li>
                                            <li><a href="http://localhost/cultibaterre/a-propos/">A propos</a></li>
                                            <li><a href="http://localhost/cultibaterre/services">Services</a></li>
                                            <li><a href="http://localhost/cultibaterre/blog/">Blog</a></li>
                                            <li><a href="http://localhost/cultibaterre/contact/">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <div class="main-header--one__bottom-right clearfix">
                                <div class="search-cart">
                                    <a href="#" class="search search-toggler">
                                        <span class="icon-magnifying-glass"></span>
                                    </a>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="text">
                                        <p>Centre d'appel</p>
                                        <a href="tel:+22891422196">91 42 21 96</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Stricky Header -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>