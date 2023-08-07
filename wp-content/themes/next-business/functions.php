<?php
/**
 * Next Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package next_business
 * @since 1.0
 */

if ( ! function_exists( 'next_business_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function next_business_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'woocommerce' );

	}

endif;

add_action( 'after_setup_theme', 'next_business_theme_support' );

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

if ( ! function_exists( 'next_business_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function next_business_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'next-business-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'next_business_styles' );

function next_business_block_editor_styles() {
	wp_enqueue_style( 'next-business-block-editor-style', get_theme_file_uri( '/css/block-editor.css' ), true, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'next_business_block_editor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// webfont Loader
require get_template_directory() . '/inc/wptt-webfont-loader.php';