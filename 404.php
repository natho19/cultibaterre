<?php get_header(); ?>

<?php get_template_part('parts/header', '404'); ?>

<!--Start Error Page One-->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__wrapper text-center">
                    <div class="error-page__big-title">
                        <h2>404</h2>
                    </div>
                    <div class="error-page__content">
                        <h2>Désolé, nous ne trouvons pas cette page !</h2>
                        <p>La page que vous recherchez a été déplacée, supprimée, renommée ou n'a jamais existé</p>
                    </div>
                    <div class="error-page__btn">
                        <a href="<?= esc_url(get_home_url()); ?>" class="thm-btn">Revenir à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Error Page One-->

<?php get_footer(); ?>