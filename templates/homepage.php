<?php /* Template Name: Page Accueil */ ?>

<?php get_header(); ?>

<!--Main Slider -->
<?php if (have_rows('slides')) : ?>
    <section class="main-slider main-slider-one main-slider-one--two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true}, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev"}, "autoplay": {"delay": 7000}}'>
            <div class="swiper-wrapper">
                <!--Start Single Swiper Slide-->
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('<?= esc_url(get_sub_field('image')); ?>');"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner text-center">
                                        <?php if (get_sub_field('title')) : ?>
                                            <div class="main-slider__content">
                                                <h2 class="main-slider__title"><?php the_sub_field('title'); ?></h2>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('link')) : ?>
                                            <div class="main-slider__button-box">
                                                <a href="<?= esc_url(get_sub_field('link')['url']); ?>" class="thm-btn"><?= esc_html(get_sub_field('link')['title']); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!--End Single Swiper Slide-->
            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="icon-right-arrow-2"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="icon-right-arrow-2"></span>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!--About One -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <!--Start About One Left-->
            <?php if (get_field('intro_image')) : ?>
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__left-img">
                            <div class="about-one__left-img-inner">
                                <img src="<?= esc_url(get_field('intro_image')['url']); ?>" alt="<?= esc_attr(get_field('intro_image')['alt']); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--End About One Left-->

            <!--Start About One Content-->
            <div class="col-xl-6">
                <div class="about-one__content">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="<?= $cultibaterre_options['favicon-32']['url']; ?>" alt="Icon" />
                        </div>
                        <?php if (get_field('intro_tag')) : ?>
                            <span class="sec-title__tagline"><?php the_field('intro_tag'); ?></span>
                        <?php endif; ?>
                        <?php if (get_field('intro_title')) : ?>
                            <h2 class="sec-title__title"><?php the_field('intro_title'); ?></h2>
                        <?php endif; ?>
                    </div>

                    <?php the_field('intro_description'); ?>

                    <?php if (have_rows('intro_bullet_points')) : ?>
                        <ul class="about-one__content-list">
                            <?php while (have_rows('intro_bullet_points')) : the_row(); ?>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php the_sub_field('label'); ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if (get_field('intro_link')) : ?>
                        <div class="about-three__content-box-btn">
                            <a href="<?= esc_url(get_field('intro_link')['url']); ?>" class="thm-btn"><?= esc_html(get_field('intro_link')['title']); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!--End About One Content-->
        </div>
    </div>
</section>

<!--Features One -->
<?php if (have_rows('features')) : ?>
    <section class="features-two">
        <div class="container">
            <div class="row">
                <!--Start Single Features One-->
                <?php while (have_rows('features')) : the_row(); ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <?php if (get_sub_field('icon')) : ?>
                                <div class="features-two__single-top">
                                    <div class="icon">
                                        <span class="<?php the_sub_field('icon'); ?>"></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="features-two__single-title" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                                <?php if (get_sub_field('digit')) : ?>
                                    <h3><span class="odometer" data-count="<?php the_sub_field('digit'); ?>">00</span></h3>
                                <?php endif; ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <p><?php the_sub_field('description'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!--End Single Features One-->
            </div>
        </div>
    </section>
<?php endif; ?>

<!--Services One -->
<?php if (have_rows('services')) : ?>
    <section class="services-one services-one--has-top-bg">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="<?= $cultibaterre_options['favicon-32']['url']; ?>" alt="Icon" />
                </div>
                <?php if (get_field('services_tag')) : ?>
                    <span class="sec-title__tagline"><?php the_field('services_tag'); ?></span>
                <?php endif; ?>
                <?php if (get_field('services_title')) : ?>
                    <h2 class="sec-title__title"><?php the_field('services_title'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php while (have_rows('services')) : the_row(); ?>
                    <?php $post = get_sub_field('service'); if ($post) : ?>
                        <?php get_template_part('parts/content', 'service'); ?>
                    <?php endif; wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php if (get_field('services_link')) : ?>
                    <div class="about-three__content-box-btn text-center">
                        <a href="<?= esc_url(get_field('services_link')['url']); ?>" class="thm-btn"><?= esc_html(get_field('services_link')['title']); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!--Blog One -->
<?php if (have_rows('posts')) : ?>
    <section class="blog-one">
        <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="<?= CULTIBATERRE_FAVICON_URL ?>" alt="Favicon">
                </div>
                <?php if (get_field('posts_tag')) : ?>
                    <span class="sec-title__tagline"><?php the_field('posts_tag'); ?></span>
                <?php endif; ?>
                <?php if (get_field('posts_title')) : ?>
                    <h2 class="sec-title__title"><?php the_field('posts_title'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php while (have_rows('posts')) : the_row(); ?>
                    <?php $post = get_sub_field('post'); if ($post) : ?>
                        <?php get_template_part('parts/content', 'post'); ?>
                    <?php endif; wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php if (get_field('posts_link')) : ?>
                    <div class="about-three__content-box-btn text-center">
                        <a href="<?= esc_url(get_field('posts_link')['url']); ?>" class="thm-btn"><?= esc_html(get_field('posts_link')['title']); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>