        <?php global $cultibaterre_options; ?>

        <!--Cta One -->
        <?php if ($cultibaterre_options['call-to-action']) : ?>
            <section class="cta-one">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cta-one__wrapper">
                                <div class="cta-one__left">
                                    <div class="cta-one__left-icon">
                                        <span class="icon-farm"></span>
                                    </div>
                                    <div class="cta-one__left-title">
                                        <h2><?= $cultibaterre_options['call-to-action']; ?></h2>
                                    </div>
                                </div>
                                <div class="cta-one__right">
                                    <div class="cta-one__right-btn">
                                        <a href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="thm-btn">Nous contacter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        
        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-wrapper">
                                <div class="row">
                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-5 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="<?= esc_url(get_home_url()); ?>">
                                                    <img src="<?= $cultibaterre_options['logo-2']['url']; ?>" class="dark-logo" alt="Logo" />
                                                </a>
                                            </div>
                                            <?php if ($cultibaterre_options['description']) : ?>
                                                <p class="footer-widget__about-text"><?= $cultibaterre_options['description']; ?></p>
                                            <?php endif; ?>
                                            <div class="footer-widget__about-contact-box">
                                                <?php if ($cultibaterre_options['telephone']) : ?>
                                                    <p class="phone">
                                                        <a href="tel:<?= $cultibaterre_options['telephone']; ?>">
                                                            <i class="fas fa-phone-square-alt"></i> <?= $cultibaterre_options['telephone']; ?>
                                                        <a>
                                                    </p>
                                                <?php endif; ?>
                                                <?php if ($cultibaterre_options['email']) : ?>
                                                <p>
                                                    <a href="mailto:<?= $cultibaterre_options['email']; ?>">
                                                        <i class="fa fa-envelope"></i> <?= $cultibaterre_options['email']; ?>
                                                    </a>
                                                </p>
                                                <?php endif; ?>
                                                <?php if ($cultibaterre_options['address']) : ?>
                                                    <p class="text">
                                                        <i class="fas fa-map-marker-alt"></i> <?= $cultibaterre_options['address']; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    
                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <!-- Widget useful links -->
                                        <?php if (is_active_sidebar('footer-useful-links')) : ?>
                                            <?php dynamic_sidebar('footer-useful-links'); ?>
                                        <?php endif; ?>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__news">
                                            <h2 class="footer-widget__title">Réseaux sociaux</h2>
                                            <div class="footer-one__bottom-social-links">
                                                <ul>
                                                    <li><a href="<?= esc_url($cultibaterre_options['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="<?= esc_url($cultibaterre_options['facebook']); ?>"><i class="fab fa-facebook"></i></a></li>
                                                    <li><a href="<?= esc_url($cultibaterre_options['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="<?= esc_url($cultibaterre_options['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="<?= esc_url($cultibaterre_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text">
                                    <p>Copyright &copy; <?= date("Y"); ?> CultibaTerre par Code House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->

    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?= esc_url(get_home_url()); ?>" aria-label="logo image"><img src="<?= $cultibaterre_options['logo-2']['url']; ?>" alt="Logo" /></a>
            </div>
            <!-- /.logo-box -->

            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <?php if ($cultibaterre_options['email']) : ?>
                    <li>
                        <i class="icon-phone-call"></i>
                        <a href="tel:<?= $cultibaterre_options['telephone']; ?>"><?= $cultibaterre_options['telephone']; ?></a>
                    </li>
                <?php endif; ?>
                <?php if ($cultibaterre_options['telephone']) : ?>
                    <li>
                        <i class="icon-letter"></i>
                        <a href="mailto:<?= $cultibaterre_options['email']; ?>"><?= $cultibaterre_options['email']; ?></a>
                    </li>
                <?php endif; ?>
            </ul>
            <!-- /.mobile-nav__contact -->

            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="<?= esc_url($cultibaterre_options['twitter']); ?>" class="fab fa-twitter"></a>
                    <a href="<?= esc_url($cultibaterre_options['facebook']); ?>" class="fab fa-facebook-square"></a>
                    <a href="<?= esc_url($cultibaterre_options['linkedin']); ?>" class="fab fa-linkedin"></a>
                    <a href="<?= esc_url($cultibaterre_options['instagram']); ?>" class="fab fa-instagram"></a>
                    <a href="<?= esc_url($cultibaterre_options['youtube']); ?>" class="fab fa-youtube"></a>
                </div>
                <!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" action="<?= home_url(); ?>">
                <label for="search" class="sr-only">Rechercher...</label><!-- /.sr-only -->
                <input type="search" name="s" id="search" placeholder="Rechercher..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>

    <!-- JS files location -->
    <?php wp_footer(); ?>
</body>

</html>