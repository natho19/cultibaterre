<?php
// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Theme support
function cultibaterre_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cultibaterre_setup');

// Image location
define('CULTIBATERRE_IMG_URL', get_template_directory_uri() . '/assets/images/', false);