<?php /* Template Name: Page Accueil */ ?>

<?php get_header(); ?>

<!--Main Slider -->
<section class="main-slider main-slider-one main-slider-one--two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true}, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev"}, "autoplay": {"delay": 7000}}'>
        <div class="swiper-wrapper">
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/slider-1.jpg'; ?>');"></div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner text-center">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Lorem ipsum dolor amet</h2>
                                </div>
                                <div class="main-slider__button-box">
                                    <a href="#" class="thm-btn">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/slider-2.jpg'; ?>');"></div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner text-center">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Lorem ipsum dolor amet</h2>
                                </div>
                                <div class="main-slider__button-box">
                                    <a href="#" class="thm-btn">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url('<?= CULTIBATERRE_IMG_URL . 'backgrounds/slider-3.jpg'; ?>');"></div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner text-center">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Lorem ipsum dolor amet</h2>
                                </div>
                                <div class="main-slider__button-box">
                                    <a href="#" class="thm-btn">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>

        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <span class="icon-right-arrow-2"></span>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <span class="icon-right-arrow-2"></span>
            </div>
        </div>
    </div>
</section>

<!--About One -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <!--Start About One Left-->
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__left-img">
                        <div class="about-one__left-img-inner">
                            <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/500x600.png'; ?>" alt="A propos" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Left-->

            <!--Start About One Content-->
            <div class="col-xl-6">
                <div class="about-one__content">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="<?= CULTIBATERRE_FAVICON_URL; ?>" alt="Icon" />
                        </div>
                        <span class="sec-title__tagline">Introduction</span>
                        <h2 class="sec-title__title">Le Cultibaterre Bioéquitable !</h2>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi quidem minus sapiente tempora qui veritatis nulla impedit provident. Accusantium voluptates corporis architecto, hic nisi laborum ullam nostrum quo esse libero officia eos.</p>
                    <ul class="about-one__content-list">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum is not simply random text</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum is not simply random text</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum is not simply random text</p>
                            </div>
                        </li>
                    </ul>
                    <div class="about-three__content-box-btn">
                        <a href="about.html" class="thm-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
            <!--End About One Content-->
        </div>
    </div>
</section>

<!--Features One -->
<section class="features-two">
    <div class="container">
        <div class="row">
            <!--Start Single Features One-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="features-two__single">
                    <div class="features-two__single-top">
                        <div class="icon">
                            <span class="icon-information"></span>
                        </div>
                    </div>
                    <div class="features-two__single-title" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                        <h3><span class="odometer" data-count="4800">00</span></h3>
                        <p>Plants de coco sur le site</p>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->

            <!--Start Single Features One-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="features-two__single">
                    <div class="features-two__single-top">
                        <div class="icon">
                            <span class="icon-farmer"></span>
                        </div>
                    </div>
                    <div class="features-two__single-title" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                        <h3><span class="odometer" data-count="4000000">00</span></h3>
                        <p>De fruits récoltés en 2 ans</p>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->

            <!--Start Single Features One-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="features-two__single">
                    <div class="features-two__single-top">
                        <div class="icon">
                            <span class="icon-setting"></span>
                        </div>
                    </div>
                    <div class="features-two__single-title" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                        <h3><span class="odometer" data-count="312">00</span></h3>
                        <p>Familles impliquées</p>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->

            <!--Start Single Features One-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="features-two__single">
                    <div class="features-two__single-top">
                        <div class="icon">
                            <span class="icon-conveyor"></span>
                        </div>
                    </div>
                    <div class="features-two__single-title" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                        <h3><span class="odometer" data-count="3000">00</span></h3>
                        <p>m² de retenue d'eau</p>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
        </div>
    </div>
</section>

<!--Services One -->
<section class="services-one services-one--has-top-bg">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="<?= CULTIBATERRE_FAVICON_URL; ?>" alt="Icon" />
            </div>
            <span class="sec-title__tagline">Ce que nous faisons</span>
            <h2 class="sec-title__title">Nos Principaux Services</h2>
        </div>
        <div class="row">
            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        </div>
                        <div class="services-one__single-img-icon">
                            <span class="icon-agriculture"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="service-details.html">Produits biologiques</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="service-details.html" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        </div>
                        <div class="services-one__single-img-icon">
                            <span class="icon-harvest"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="service-details.html">Fruits frais</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="service-details.html" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        </div>
                        <div class="services-one__single-img-icon">
                            <span class="icon-growth"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="service-details.html">Petit élevage</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="service-details.html" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <div class="about-three__content-box-btn text-center">
                <a href="services.html" class="thm-btn">Tous les services</a>
            </div>
        </div>
        
    </div>
</section>

<!--Blog One -->
<section class="blog-one">
    <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="<?= CULTIBATERRE_FAVICON_URL ?>" alt="Favicon">
            </div>
            <span class="sec-title__tagline">Blog</span>
            <h2 class="sec-title__title">Articles à la une</h2>
        </div>
        <div class="row">
            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="single-post.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    </div>
                </div>
            </div>
            <!--End Single Blog One-->

            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="single-post.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    </div>
                </div>
            </div>
            <!--End Single Blog One-->

            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="<?= CULTIBATERRE_IMG_URL . 'backgrounds/900x600.png'; ?>" alt="900x600" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="single-post.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    </div>
                </div>
            </div>

            <div class="about-three__content-box-btn text-center">
                <a href="blog.html" class="thm-btn">Tous les articles</a>
            </div>
            <!--End Single Blog One-->
        </div>
    </div>
</section>

<?php get_footer(); ?>