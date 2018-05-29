<?php
function theme_setup() {
	// Support title tag
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_styles() {
	wp_enqueue_style( 'theme-common', 		get_template_directory_uri() . '/css/common.css' );
	wp_enqueue_style( 'theme-style', 			get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'theme-responsive', get_template_directory_uri() . '/css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
