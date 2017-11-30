<?php
/**
 * MyTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage MyTheme
 * @since 1.0
 */

/**
 * MyTheme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mytheme_setup() {
	
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js');
	wp_enqueue_script( 'bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js');
}

function register_my_menu() {
  register_nav_menu('top','Top Menu');
}
add_action( 'init', 'register_my_menu' );

add_action( 'widgets_init', 'mytheme_widgets_init' );
function mytheme_widgets_init() {
    register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-1',
		'description' => 'Левый сайдбар темы. Главный.',
    ) );
}