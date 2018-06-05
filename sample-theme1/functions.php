<?php
function theme_setup() {
	// Support title tag
	add_theme_support( 'title-tag' );

	$args = array(
		'height'      => 0,
		'width'       => 0,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );

	$args = array(
		'default-image'          => '',
		'random-default'         => true,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => true,
		'flex-width'             => true,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'video'                  => true,
		'wp-head-callback'       => '__return_false',
		'admin-head-callback'    => '__return_false',
		'admin-preview-callback' => '__return_false',
	);
	add_theme_support( 'custom-header', $args );

	register_nav_menus( array(
		'primary' => 'Primary Menu'
	) );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_styles() {
	wp_enqueue_style( 'theme-common', 		get_template_directory_uri() . '/css/common.css' );
	wp_enqueue_style( 'theme-style', 			get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'theme-responsive', get_template_directory_uri() . '/css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
