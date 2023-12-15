<!--Page Header Start-->
<section class="page-header clearfix" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/1800x400.png'; ?>');">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="<?= get_home_url(); ?>">Accueil</a></li>
                <li><?= post_type_archive_title('', false); ?></li>
            </ul>
            <h2><?= post_type_archive_title('', false); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->