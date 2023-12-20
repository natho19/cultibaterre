<!--Page Header Start-->
<?php global $cultibaterre_options; ?>
<?php $terms = get_queried_object(); ?>
<section class="page-header clearfix" style="background-image: url('<?= $cultibaterre_options['banner']['url']; ?>');">
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