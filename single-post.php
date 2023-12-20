<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <!--Start News Details Laft-->
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <!--Start Single Blog One-->
                    <div class="blog-one__single">

                        <div class="blog-one__single-img">
                            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>" />
                        </div>

                        <div class="blog-one__single-content blog-details">
                            <ul class="meta-info">
                                <li><a href="#"><i class="far fa-clock"></i> <?= get_the_date('d/m/Y'); ?></a></li>
                            </ul>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                </div>
            </div>
            <!--End News Sidebar Laft-->

            <!--Start News Sidebar Sidebar-->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="services-details__sidebar-single">
                        <div class="services-details__sidebar-single-contact-box text-center wow fadeInUp animated animated animated" data-wow-delay="0.3s" data-wow-duration="1200m">
                            <div class="icon mb-2">
                                <span class="icon-phone-call-2"></span>
                            </div>
                            <?php if ($cultibaterre_options['telephone']) : ?>
                                <p class="phone"><a href="tel:<?= $cultibaterre_options['telephone']; ?>"><?= $cultibaterre_options['telephone']; ?></a></p>
                            <?php endif; ?>
                            <?php if ($cultibaterre_options['description']) : ?>
                                <div class="title">
                                    <h2><?= $cultibaterre_options['description']; ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--End Services Details Sidebar Single-->
                </div>
            </div>
            <!--End News Details Sidebar-->
        </div>
    </div>
</section>
<!--News Details End-->

<?php get_footer(); ?>