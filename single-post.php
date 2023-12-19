<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <!--Start News Details Laft-->
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <!--Start Single Blog One-->
                    <div class="blog-one__single">

                        <div class="blog-one__single-img">
                            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="<?= esc_attr(get_the_title()); ?>" />
                        </div>

                        <div class="blog-one__single-content blog-details">
                            <ul class="meta-info">
                                <li><a href="#"><i class="far fa-clock"></i> <?= get_the_date('d/m/Y'); ?></a></li>
                            </ul>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                </div>

                <!--Projects One -->
                <div class="other-posts">
                    <div class="sec-title text-center">
                        <div class="icon">
                            <img src="assets/images/resources/sec-title-icon1.png" alt="" />
                        </div>
                        <span class="sec-title__tagline">Autres Articles</span>
                        <h2 class="sec-title__title">Lire d'autres articles</h2>
                    </div>
                    <div class="row">
                        <!--Start Single Blog One-->
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="assets/images/backgrounds/900x600.png" alt="" />
                                    <div class="date-box">
                                        <span>30 July, 2021</span>
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="single-post.html"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
    
                                <div class="blog-one__single-content">
                                    <h2><a href="single-post.html">Why Eco and Walking or Agriculture for the Environment?</a></h2>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog One-->
    
                        <!--Start Single Blog One-->
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="assets/images/backgrounds/900x600.png" alt="" />
                                    <div class="date-box">
                                        <span>30 July, 2021</span>
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="single-post.html"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
    
                                <div class="blog-one__single-content">
                                    <h2><a href="single-post.html">Bring to the table win-win survival strategies to ensure</a></h2>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog One-->
                    </div>
                </div>
            </div>
            <!--End News Sidebar Laft-->

            <!--Start News Sidebar Sidebar-->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__latest-posts wow fadeInUp animated animated animated"
                        data-wow-delay="0.2s" data-wow-duration="1200m">
                        <div class="title">
                            <h2>Derniers articles</h2>
                        </div>
                        <ul class="sidebar__latest-posts-list">
                            <li class="sidebar__latest-posts-list-item">
                                <div class="img-box">
                                    <img src="assets/images/backgrounds/200x200.png" alt="" />
                                </div>
                                <div class="title">
                                    <h4><a href="#">Agriculture Miracle you Dont Know About</a></h4>
                                </div>
                            </li>

                            <li class="sidebar__latest-posts-list-item">
                                <div class="img-box">
                                    <img src="assets/images/backgrounds/200x200.png" alt="" />
                                </div>
                                <div class="title">
                                    <h4><a href="#">Agriculture Miracle you Dont Know About</a></h4>
                                </div>
                            </li>

                            <li class="sidebar__latest-posts-list-item">
                                <div class="img-box">
                                    <img src="assets/images/backgrounds/200x200.png" alt="" />
                                </div>
                                <div class="title">
                                    <h4><a href="#">Agriculture Miracle you Dont Know About</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End News Details Sidebar-->
        </div>
    </div>
</section>
<!--News Details End-->

<?php get_footer(); ?>