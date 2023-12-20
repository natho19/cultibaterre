<?php /* Template Name: Page Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!--Start Contact Page-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact Page Left-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__left">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="<?= $cultibaterre_options['favicon-32']['url']; ?>" alt="Icon">
                        </div>
                        <?php if (get_field('contact_tag')) : ?>
                            <span class="sec-title__tagline"><?php the_field('contact_tag'); ?></span>
                        <?php endif; ?>
                        <?php if (get_field('contact_title')) : ?>
                            <h2 class="sec-title__title"><?php the_field('contact_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <?php the_field('contact_description'); ?>
                    <div class="contact-page__social-link">
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
            <!--End Contact Page Right-->

            <!--Start Contact Page Right-->
            <div class="col-xl-8 col-lg-8">
                <div class="contact-page__right">
                    <?= do_shortcode('[contact-form-7 id="8c945c6" title="Formulaire de contact"]') ?>
                </div>
            </div>
            <!--End Contact Page Right-->
        </div>
    </div>
</section>
<!--End Contact Page-->

<!--Start Contact Page Contact Info-->
<section class="contact-page__contact-info clearfix">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__contact-info-wrapper">
                    <div class="contact-page__contact-info-list">
                        <ul>
                            <?php if ($cultibaterre_options['address']) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <div class="title">
                                        <span>Adresse</span>
                                        <p><?= $cultibaterre_options['address']; ?></p>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if ($cultibaterre_options['address']) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email-1"></span>
                                    </div>
                                    <div class="title">
                                        <span>Email</span>
                                        <p><a href="mailto:<?= $cultibaterre_options['email']; ?>"><?= $cultibaterre_options['email']; ?></a></p>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if ($cultibaterre_options['telephone']) : ?>
                                <li>
                                    <div class="icon phone">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="title">
                                        <span>Téléphone</span>
                                        <p><a href="tel:<?= $cultibaterre_options['telephone']; ?>"><?= $cultibaterre_options['telephone']; ?></a></p>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Contact Info-->

<!--Contact Page Google Map Start-->
<?php $location = get_field('contact_location'); if ($location) : ?>
<section class="contact-page-google-map">
    <div class="contact-page-google-map__one" data-zoom="12">
        <div class="marker" data-lat="<?= esc_attr($location['lat']); ?>" data-lng="<?= esc_attr($location['lng']); ?>"></div>
    </div>
</section>
<?php endif; ?>
<!--Contact Page Google Map End-->

<?php get_footer(); ?>