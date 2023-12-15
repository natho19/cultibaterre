<div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
    <div class="services-one__single">
        <div class="services-one__single-img">
            <a href="<?php the_permalink(); ?>">
                <div class="services-one__single-img-inner">
                    <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'cultibaterre900x600') : CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>" />
                </div>
            </a>
        </div>
        <div class="services-one__single-content text-center">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more-btn">
                <span class="icon-right-arrow-2"></span>
            </a>
        </div>
    </div>
</div>