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

// Add menu zones
function cultibaterre_register_menus() {
	register_nav_menus([
		'main' => 'Menu principal',
		'useful-links' => 'Liens utiles'
	]);
}
add_action('init', 'cultibaterre_register_menus');

// Widget zone areas
function cultibaterre_register_sidebar() {
	// Footer widget zone
	register_sidebar([
		'id'            => 'footer-useful-links',
		'name'          => __('Liens utiles'),
		'description'   => __('Widget pour les liens utiles'),
		'before_widget' => '<div class="footer-widget__column footer-widget__explore">',
		'after_widget'  => '</div>',
        'before_title' => '<h2 class="footer-widget__title">',
		'after_title'  => '</h2>'
	]);
}
add_action('widgets_init', 'cultibaterre_register_sidebar');

// Add active class
function add_active_nav_class($classes, $item) {
	if (is_singular('service')) {
		$classes = str_replace('menu-item-170', 'menu-item-170 active', $classes);
	}
	if (is_singular('post')) {
		$classes = str_replace('menu-item-172', 'menu-item-172 active', $classes);
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_active_nav_class', 10, 2);

function cultibaterre_remove_post_type_support() {
	remove_post_type_support('page', 'editor');
	remove_post_type_support('page', 'thumbnail');
}
add_action('init', 'cultibaterre_remove_post_type_support', 10);