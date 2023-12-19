<?php /* Template Name: Page A Propos */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!--About Three Start-->
<section class="about-three">
    <div class="about-three__shape"></div><!-- /.about-three__shape -->
    <div class="container">
        <div class="row">
            <!--Start About Three Content Box-->
            <div class="col-xl-6 col-lg-7">
                <div class="about-three__content-box">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="<?= CULTIBATERRE_FAVICON_URL; ?>" alt="Icon">
                        </div>
                        <?php if (get_field('about_tag')) : ?>
                            <span class="sec-title__tagline"><?php the_field('about_tag'); ?></span>
                        <?php endif; ?>
                        <?php if (get_field('about_title')) : ?>
                            <h2 class="sec-title__title"><?php the_field('about_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="about-three__content-box-inner">
                        <?php the_field('about_description'); ?>
                    </div>
                    <?php if (get_field('about_link')) : ?>
                        <div class="about-three__content-box-btn">
                            <a href="<?= esc_url(get_field('about_link')['url']); ?>" class="thm-btn"><?= esc_html(get_field('about_link')['title']); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!--End About Three Content Box-->

            <!--Start About Three Img Box-->
            <?php if (get_field('about_image')) : ?>
                <div class="col-xl-6 col-lg-5">
                    <div class="about-three__img-box">
                        <div class="about-three__img-box-img">
                            <div class="about-three__img-box-img-inner">
                                <img src="<?= esc_url(get_field('about_image')['url']); ?>" alt="<?= esc_attr(get_field('about_image')['alt']); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--End About Three Img Box-->
        </div>
    </div>
</section>
<!--About Three End-->

<!--Video One Start-->
<section class="video-one video-one--two jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url('<?= get_field('video_background') ? esc_url(get_field('video_background')) : CULTIBATERRE_IMG_URL . 'backgrounds/1900x1200.png'; ?>');">
    <div class="video-one-border"></div>
    <div class="video-one-border video-one-border-two"></div>
    <div class="video-one-border video-one-border-three"></div>
    <div class="video-one-border video-one-border-four"></div>
    <div class="video-one-border video-one-border-five"></div>
    <div class="video-one-border video-one-border-six"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__wrpper">
                    <div class="video-one__left">
                        <?php if (get_field('video_title')) : ?>
                            <h2 class="video-one__title"><?php the_field('video_title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_field('video_link')) : ?>
                            <div class="video-one__btn">
                                <a href="<?= esc_url(get_field('video_link')['url']); ?>" class="thm-btn"><?= esc_html(get_field('video_link')['title']); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (get_field('video_youtube')) : ?>
                        <div class="video-one__right">
                            <?php if (get_field('video_youtube')['url']) : ?>
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup" title="Vidéo" href="<?= esc_url(get_field('video_youtube')['url']); ?>">
                                        <span class="icon-play-button-1"></span>
                                    </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('video_youtube')['title']) : ?>
                                <div class="title">
                                    <h2><?= esc_html(get_field('video_youtube')['title']); ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->

<!--Testimonials One Start-->
<?php if (have_rows('testimonials')) : ?>
    <section class="testimonials-one">
        <div class="container">
            <div class="row">
                <!--Start Testimonials One Left-->
                <div class="col-xl-4">
                    <div class="testimonials-one__left">
                        <div class="testimonials-one__left-bg"></div>
                        <div class="sec-title">
                            <div class="icon">
                                <img src="<?= CULTIBATERRE_FAVICON_URL; ?>" alt="Icon">
                            </div>
                            <?php if (get_field('testimonial_tag')) : ?>
                                <span class="sec-title__tagline">Témoignages</span>
                            <?php endif; ?>
                            <?php if (get_field('testimonial_title')) : ?>
                                <h2 class="sec-title__title">Les témoignanges de nos clients</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--End Testimonials One Left-->

                <!--Start Testimonials One Right-->
                <div class="col-xl-8">
                    <div class="testimonials-one__right">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme">
                                    <!--Start Single Testimonials One-->
                                    <?php while (have_rows('testimonials')) : the_row(); ?>
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text"><?php the_sub_field('testimonial'); ?></p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <?php if (get_sub_field('name')) : ?>
                                                    <div class="testimonials-one__single-client-info-title">
                                                        <h4><?php the_sub_field('name'); ?></h4>
                                                        <?php if (get_sub_field('function')) : ?>
                                                            <p><?php the_sub_field('function'); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <!--Start Single Testimonials One-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Testimonials One Right-->
            </div>
        </div>
    </section>
<?php endif; ?>
<!--Testimonials One End-->

<!--Company Logos One Start-->
<?php if (have_rows('partners')) : ?>
    <section class="company-logos-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": {"delay": 5000}, "breakpoints": {"0": {"spaceBetween": 20, "slidesPerView": 1}, "375": {"spaceBetween": 20, "slidesPerView": 1}, "575": {"spaceBetween": 20, "slidesPerView": 2}, "767": {"spaceBetween": 30, "slidesPerView": 3}, "991": {"spaceBetween": 40, "slidesPerView": 4}}}'>
                <div class="swiper-wrapper">
                    <?php while (have_rows('partners')) : the_row(); ?>
                        <div class="swiper-slide">
                            <a href="<?= esc_url(get_sub_field('link')); ?>">
                                <img src="<?= esc_url(get_sub_field('logo')['url']); ?>" alt="<?= esc_attr(get_sub_field('logo')['alt']); ?>">
                            </a>
                        </div><!-- /.swiper-slide -->
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--Company Logos One End-->

<?php get_footer(); ?>