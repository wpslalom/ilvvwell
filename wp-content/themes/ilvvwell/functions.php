<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ilvvwell
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'WP_ilvvwell_STARTER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wp_ilvvwell_starter_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 
		'button', 
		'quote', 
		'navigation', 
	];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "ilvvwell-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'wp_ilvvwell_starter_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wp_ilvvwell_starter_styles() {
	wp_enqueue_style(
		'ilvvwell-style',
		get_stylesheet_uri(),
		[],
		WP_ilvvwell_STARTER_VERSION
	);
	wp_enqueue_style(
		'ilvvwell-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		WP_ilvvwell_STARTER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'wp_ilvvwell_starter_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Endpoints.
require_once get_theme_file_path( 'inc/endpoints.php' );
