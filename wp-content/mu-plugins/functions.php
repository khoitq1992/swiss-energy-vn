<?php
// Add feature image for post.
add_theme_support( 'post-thumbnails' );

// Custom excerpt length
function custom_excerpt_length() {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Create custom menu
function custom_menu() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' )
		)
	);
}
add_action('after_setup_theme','custom_menu');