<?php global $cultibaterre_options; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <?php if ($cultibaterre_options['favicon-180']['url']) : ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?= esc_url($cultibaterre_options['favicon-180']['url']); ?>" />
    <?php endif; ?>
    <?php if ($cultibaterre_options['favicon-32']['url']) : ?>
        <link rel="icon" type="image/png" sizes="32x32" href="<?= esc_url($cultibaterre_options['favicon-32']['url']); ?>" />
    <?php endif; ?>
    <?php if ($cultibaterre_options['favicon-16']['url']) : ?>
        <link rel="icon" type="image/png" sizes="16x16" href="<?= esc_url($cultibaterre_options['favicon-16']['url']); ?>" />
    <?php endif; ?>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?= esc_url($cultibaterre_options['favicon-512']['url']); ?>" alt="Preloader" />
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
                                <p>Coopérative de produits agricoles</p>
                            </div>
                            <div class="social-link clearfix">
                                <ul>
                                    <li><a href="<?= esc_url($cultibaterre_options['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?= esc_url($cultibaterre_options['facebook']); ?>"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="<?= esc_url($cultibaterre_options['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?= esc_url($cultibaterre_options['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?= esc_url($cultibaterre_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-header--one__top-right clearfix">
                            <ul>
                                <?php if ($cultibaterre_options['email']) : ?>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:<?= $cultibaterre_options['email']; ?>"><?= $cultibaterre_options['email']; ?></a></p>
                                        </div>
                                    </li>
                                <?php endif; ?>
                                <?php if ($cultibaterre_options['hours']) : ?>
                                    <li>
                                        <div class="icon"><i class="fa fa-clock"></i></div>
                                        <div class="text">
                                            <p><?= $cultibaterre_options['hours']; ?></p>
                                        </div>
                                    </li>
                                <?php endif; ?>
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
                                    <a href="<?= esc_url(get_home_url()); ?>">
                                        <img src="<?= $cultibaterre_options['logo-1']['url']; ?>" alt="Logo" class="light-logo" />
                                    </a>
                                </div>
                            </div>

                            <nav class="main-menu main-menu--1">
                                <div class="main-menu__inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <div class="stricky-one-logo">
                                        <div class="logo">
                                            <a href="<?= esc_url(get_home_url()); ?>">
                                                <img src="<?= $cultibaterre_options['logo-1']['url']; ?>" class="dark-logo" alt="Logo" />
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
                                <?php if ($cultibaterre_options['telephone']) : ?>
                                    <div class="contact-box">
                                        <div class="icon">
                                            <span class="icon-phone-call-2"></span>
                                        </div>
                                        <div class="text">
                                            <p>Centre d'appel</p>
                                            <a href="tel:<?= $cultibaterre_options['telephone']; ?>"><?= $cultibaterre_options['telephone']; ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
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