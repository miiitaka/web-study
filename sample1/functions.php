<?php
function theme_setup() {
	// title要素を管理画面から変更できるようにする
	add_theme_support( 'title-tag' );

	// 管理画面からロゴの登録ができるようにする
	add_theme_support( 'custom-logo' );

	// 管理画面からメニューを追加できるようにする
	register_nav_menus(
		array(
			'global' => 'Global Menu'
		)
	);
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts() {
	wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
	wp_enqueue_style( 'theme-style',  get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );