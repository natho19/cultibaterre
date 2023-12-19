<!--Page Header Start-->
<section class="page-header clearfix" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/1800x400.png'; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <?php if (is_page()) : ?>
                <ul class="thm-breadcrumb">
                    <li><a href="<?= esc_url(get_home_url()); ?>">Accueil</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->