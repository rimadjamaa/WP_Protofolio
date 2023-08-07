<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package next_business
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function next_business_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'next-business-padding-0',
				'label' => esc_html__( 'No Padding', 'next-business' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'next-business-post-author-card',
				'label' => esc_html__( 'Theme Style', 'next-business' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'next-business-button',
				'label'        => esc_html__( 'Plain', 'next-business' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'next-business-post-comments',
				'label'        => esc_html__( 'Theme Style', 'next-business' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'next-business-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'next-business' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'next-business-wp-table',
				'label'        => esc_html__( 'Theme Style', 'next-business' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'next-business-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'next-business' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'next-business-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'next-business' ),
			)
		);
	}
	add_action( 'init', 'next_business_register_block_styles' );
}
