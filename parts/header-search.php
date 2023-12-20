<!--Page Header Start-->
<?php global $cultibaterre_options; ?>
<?php $terms = get_queried_object(); ?>
<section class="page-header clearfix" style="background-image: url('<?= $cultibaterre_options['banner']['url']; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <h2><?php printf(esc_html__('Résultats pour : %s'), get_search_query()); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->