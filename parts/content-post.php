<div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
    <div class="blog-one__single">
        <div class="blog-one__single-img">
            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'cultibaterre900x600') : CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>" />
            <div class="date-box">
                <span><?= get_the_date('d/m/Y'); ?></span>
            </div>
            <div class="overlay-icon">
                <a href="<?php the_permalink(); ?>"><span class="icon-plus"></span></a>
            </div>
        </div>
        <div class="blog-one__single-content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
    </div>
</div>