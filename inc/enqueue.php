<?php
function cultibaterre_load_scripts() {
    // CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], null, 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', [], null, 'all');

    // JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], null, true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-ajaxchimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-circle-progress', get_template_directory_uri() . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', ['jquery'], null, true); 
    wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/vendors/jquery-validate/jquery.validate.min.js', ['jquery'], null, true);
    wp_enqueue_script('nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.js', ['jquery'], null, true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.js', ['jquery'], null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.js', ['jquery'], null, true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.js', ['jquery'], null, true);
    wp_enqueue_script('wnumb', get_template_directory_uri() . '/assets/vendors/wnumb/wNumb.min.js', ['jquery'], null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', ['jquery'], null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', ['jquery'], null, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/vendors/countdown/countdown.min.js', ['jquery'], null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', ['jquery'], null, true);
    wp_enqueue_script('twenty-twenty', get_template_directory_uri() . '/assets/vendors/twentytwenty/twentytwenty.js', ['jquery'], null, true);
    wp_enqueue_script('twenty-twenty-event', get_template_directory_uri() . '/assets/vendors/twentytwenty/jquery.event.move.js', ['jquery'], null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/vendors/parallax/parallax.min.js', ['jquery'], null, true);
    wp_enqueue_script('tilt', get_template_directory_uri() . '/assets/vendors/tilt.js/tilt.jquery.js', ['jquery'], null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'cultibaterre_load_scripts');