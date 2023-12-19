<!--Page Header Start-->
<?php $terms = get_queried_object(); ?>
<section class="page-header clearfix" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/1800x400.png'; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <h2><?php printf(esc_html__('Résultats pour : %s'), get_search_query()); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->