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
	wp_enqueue_style( 'responsive-style',  get_template_directory_uri() . '/css/responsive.css', array(), true, 'screen and (max-width: 480px)' );

	wp_enqueue_script( 'theme-pagetop',  get_template_directory_uri(). '/js/pagetop.js', array( 'jquery' ));
	wp_enqueue_script( 'theme-slide',  get_template_directory_uri(). '/js/slide.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );




function theme_widgets_init() {
	register_sidebar(
		array(
			'name'        => 'サイドバー',
			'id'          => 'sidebar-1',
			'description' => '右のサイドバーに配置するウィジェットエリアですね。'
		)
	);
}
add_action( 'widgets_init', 'theme_widgets_init' );