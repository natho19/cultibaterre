<!--Page Header Start-->
<?php global $cultibaterre_options; ?>
<section class="page-header clearfix" style="background-image: url('<?= $cultibaterre_options['banner']['url']; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="<?= esc_url(get_home_url()); ?>">Accueil</a></li>
                <li><?= post_type_archive_title('', false); ?></li>
            </ul>
            <h2><?= post_type_archive_title('', false); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->