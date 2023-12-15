<?php get_header(); ?>

<?php get_template_part('parts/archive', 'header'); ?>

<!--Services One Start-->
<section class="services-one">
    <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="row">
                <!--Start Single Services One-->
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('parts/content', 'service'); ?>
                <?php endwhile; ?>
                <!--End Single Services One-->
            </div>
            <?php if (function_exists('cultibaterre_pagination')) : ?>
                <?php cultibaterre_pagination(); ?>
            <?php endif; ?>
        <?php else : ?>
            <?php get_template_part('parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>