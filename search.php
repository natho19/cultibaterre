<?php get_header(); ?>

<?php get_template_part('parts/header', 'search'); ?>

<!--Blog One Start-->
<section class="blog-one blog-one--news">
    <!-- <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div> -->
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="row">
                <!--Start Single Blog One-->
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('parts/content', 'post'); ?>
                <?php endwhile; ?>
                <!--End Single Blog One-->
            </div>
            <?php if (function_exists('cultibaterre_pagination')) : ?>
                <?php cultibaterre_pagination(); ?>
            <?php endif; ?>
        <?php else : ?>
            <?php get_template_part('parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<!--Blog One End-->

<?php get_footer(); ?>