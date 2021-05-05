<?php
// Include main styles
add_action( 'wp_enqueue_scripts', 'essential_files' );
function essential_files() {
	wp_enqueue_style( 'main-styles', get_template_directory_uri()  . '/style.css' );
	wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js");
	wp_enqueue_script("main-function", get_template_directory_uri()  . '/scripts/main.js');
	wp_enqueue_script("product-function", get_template_directory_uri()  . '/scripts/product.js');
	wp_enqueue_script("search-filter-function", get_template_directory_uri()  . '/scripts/search-and-filter.js');
}