<?php
/**
 * Block styles.
 *
 * @package ilvvwell
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function wp_ilvvwell_starter_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/readmore',
		array(
			'name'  => 'ilvvwell-button',
			'label' => __( 'Button', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'ilvvwell-flat-button',
			'label' => __( 'Flat button', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'ilvvwell-navigation-button',
			'label' => __( 'Button style', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ilvvwell-list-underline',
			'label' => __( 'Underlined list items', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'ilvvwell-box-shadow',
			'label' => __( 'Box shadow', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'ilvvwell-box-shadow',
			'label' => __( 'Box shadow', 'ilvvwell' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'ilvvwell-box-shadow',
			'label' => __( 'Box shadow', 'ilvvwell' ),
		)
	);
}
add_action( 'init', 'wp_ilvvwell_starter_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function wp_ilvvwell_starter_unregister_block_style() {
	wp_enqueue_script(
		'ilvvwell-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		WP_ilvvwell_STARTER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wp_ilvvwell_starter_unregister_block_style' );
