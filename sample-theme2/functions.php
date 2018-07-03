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
