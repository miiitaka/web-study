<?php
/**
 * テーマ機能追加
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  k.takami
 *
 */
function theme_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary2' => 'Primary Menu2'
		)
	);
}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * スタイルシートの追加
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  k.takami
 *
 */
function theme_style() {
	wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
	wp_enqueue_style( 'theme-style',  get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_style');

/**
 * ウィジェット設定
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  k.takami
 */
function theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'サイドバー',
			'id'            => 'sidebar-1',
			'description'   => '画面の右にあるサイドバー',
			'before_widget' => '<section id="%1%s" class="%2%s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'  => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'theme_widgets_init' );
