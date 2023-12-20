<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!--Start Services Details-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-xl-4 col-lg-4">
                <div class="services-details__sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="services-details__sidebar-single">
                        <div class="services-details__sidebar-single-contact-box text-center wow fadeInUp animated animated animated" data-wow-delay="0.3s" data-wow-duration="1200m">
                            <div class="icon">
                                <span class="icon-phone-call-2"></span>
                            </div>
                            <div class="title">
                                <h2>Coopérative de produits agricoles</h2>
                            </div>
                            <p class="phone"><a href="tel:123456789">666 888 0000</a></p>
                            <p>Contactez-nous à tout moment</p>
                        </div>
                    </div>
                    <!--End Services Details Sidebar Single-->

                    <!--Start Services Details Sidebar Single-->
                    <?php $document = get_field('document'); if ($document) : ?>
                        <div class="services-details__sidebar-single">
                            <div class="services-details__sidebar-single-btn text-center wow fadeInUp animated animated animated"
                                data-wow-delay="0.5s" data-wow-duration="1200m">
                                <a href="<?= esc_url($document['url']); ?>" class="thm-btn">
                                    <span class="fas fa-file-download"></span> 
                                    <span class="text-start"><?= esc_attr($document['title']); ?></span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--End Services Details Sidebar Single-->
                </div>
            </div>
            <!--End Services Details Sidebar-->

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <div class="services-details__content-img">
                        <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="<?php esc_attr(get_the_title()); ?>" />
                    </div>
                    <h2 class="services-details__content-title"><?php the_title(); ?></h2>
                    <?php $content = get_post()->post_content; if (!empty($content)) : ?>
                        <div class="services-details__content-description">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->

<?php get_footer(); ?>