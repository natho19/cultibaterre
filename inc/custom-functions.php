<?php
// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Theme support
function cultibaterre_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'cultibaterre_setup');

// Images location
define('CULTIBATERRE_IMG_URL', get_template_directory_uri() . '/assets/images/', false);
define('CULTIBATERRE_FAVICON_URL', get_template_directory_uri() . '/assets/images/resources/sec-title-icon1.png', false);

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Add custom image format 900x600
add_image_size('cultibaterre900x600', 900, 600, true);

// Excerpt length
function cultibaterre_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'cultibaterre_excerpt_length', 100);

// Replace excerpt ellipsis
function cultibaterre_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cultibaterre_excerpt_more');

// Filter search results for posts and services only
function cultibaterre_search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', ['post', 'service']);
	}
	return $query;
}
add_filter('pre_get_posts', 'cultibaterre_search_filter');