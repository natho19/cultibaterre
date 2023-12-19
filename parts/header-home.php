<!--Page Header Start-->
<?php $terms = get_queried_object(); ?>
<section class="page-header clearfix" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/1800x400.png'; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="<?= esc_url(get_home_url()); ?>">Accueil</a></li>
                <li><?= $terms->post_title; ?></li>
            </ul>
            <h2><?= $terms->post_title; ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->