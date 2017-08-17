<?php
/**
 * The theme functions file.
 *
 * The file that contains all functions for additional template features.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */

/* SECTION I: Calling theme stylesheets and scripts. */
function get_theme_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('masonry');
	wp_enqueue_style('masonry');
	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'get_theme_scripts');



/* SECTION II: Theme setup, implementing pre-requisites. */
function jack_setup() {

	/* II.a. Registering navigation menu locations. */
	register_nav_menus(array(
		'primary' => __( 'Primary Menu', 'cleantheme'),
		'footer' => __( 'Footer Menu', 'cleantheme'),
	));
	
	/* II.b. Adding image sizes. */
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_image_size('standard-blog-thumbnail', 200, 124, true);
	add_image_size('masonry-thumbnail', 245, 184, true);
	add_image_size('category-archive-thumbnail', 650, 140, true);
	
	/* II.c. Adding WP site title support. */
	add_theme_support( 'title-tag' );
	
}

add_action('after_setup_theme', 'jack_setup');