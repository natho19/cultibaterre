<?php
// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Theme support
function cultibaterre_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cultibaterre_setup');

// Images location
define('CULTIBATERRE_IMG_URL', get_template_directory_uri() . '/assets/images/', false);
define('CULTIBATERRE_FAVICON_URL', get_template_directory_uri() . '/assets/images/resources/sec-title-icon1.png', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');