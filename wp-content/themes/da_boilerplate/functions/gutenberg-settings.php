<?php

// Conditionally allow specific Gutenberg blocks by post type
function da_boilerplate_allowed_block_types( $allowed_blocks, $post ) {

	// Return an array containing the allowed block types for 'post' post type
	if($post->post_type == 'post') {	
		return array(
		// common blocks
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/image',
		'core/gallery',
		'core/quote',
		'core/file',
		// 'core/cover',
		// 'core/audio',
		// 'core/video',
		
		// formatting
		'core/html', // eg. to embed iFrames
		'core/table',
		'core/pullquote',
		// 'core/freeform', // classic editor block
		'core/verse', // <pre> tag: includes text align options, eg. for poetry or song lyrics
		'core/code', // <pre> tag: includes <code> element for specific styling eg. grey background colour
		'core/preformatted', // <pre> tag: similar to code block but with more styling options
		
		// layout
		'core/columns',
		'core/separator',
		'core/media-text',
		'core/group',
		'core/buttons',
		'core/spacer', // extended for responsiveness in my editor.js file
		// 'core/nextpage', // for adding page break (but doesn't produce pagination for me?)

		// widgets
		'core/shortcode',
		'core/search',
		'core/social-links',
		// 'core/latest-posts', // loads of options.. but probably never quite enough!

		// embeds
		'core-embed/twitter',
		'core-embed/instagram',
		'core-embed/youtube',
		'core-embed/vimeo',
		'core-embed/soundcloud',
		'core-embed/facebook',
		'core-embed/tiktok',
		'core-embed/meetup-com',

		// reusable
		'core/block',

		// third party
		// 'wpforms/form-selector',
		
		// add our own blocks
		'acf/accordion',
		// 'acf/page-heading',
		'acf/hero-image',
		'acf/link-card',
		);
	}
	// Return an array containing the allowed block types for 'page' post type
	elseif($post->post_type == 'page') {
			return array(
				// common blocks
				'core/paragraph',
				'core/heading',
				'core/list',
				'core/image',
				'core/gallery',
				'core/quote',
				'core/file',
				// 'core/cover',
				// 'core/audio',
				// 'core/video',

				// reusable
				'core/block',

				// add our own blocks
				'acf/hero-image',
			);
	}
	// Allow defaults in all other post types
	else {
			return $allowed_block_types;
	}
}
// add_filter( 'allowed_block_types', 'da_boilerplate_allowed_block_types', 10, 2 );

/**
 * Add support for Block Styles.
 */
add_theme_support( 'wp-block-styles' );

/**
 * Add support for full and wide align images.
 */
add_theme_support( 'align-wide' );

/**
 * Add support for editor styles.
 */
add_theme_support( 'editor-styles' );

/**
 * Add support for responsive embedded content.
 */
add_theme_support( 'responsive-embeds' );

/**
 * Custom font sizing
 *
 */
function da_boilerplate_gutenberg_custom_font_sizes() {
	// -- Disable custom font sizes (where user could set any font size number)
	add_theme_support( 'disable-custom-font-sizes' );

	// -- Editor Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'small', 'da_boilerplate' ),
			'shortName' => __( 'S', 'da_boilerplate' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => __( 'regular', 'da_boilerplate' ),
			'shortName' => __( 'M', 'da_boilerplate' ),
			'size'      => 16,
			'slug'      => 'regular'
		),
		array(
			'name'      => __( 'large', 'da_boilerplate' ),
			'shortName' => __( 'L', 'da_boilerplate' ),
			'size'      => 20,
			'slug'      => 'large'
		),
	) );
}
add_action( 'after_setup_theme', 'da_boilerplate_gutenberg_custom_font_sizes' );

/**
 * Custom colour palette
 *
 */
function da_boilerplate_custom_editor_colour_palette() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'White', 'da_boilerplate' ),
			'slug'  => 'white',
			'color'	=> '#FFFFFF',
		),
		array(
			'name'  => __( 'Black', 'da_boilerplate' ),
			'slug'  => 'black',
			'color'	=> '#000000',
		),
		array(
			'name'  => __( 'Grey', 'da_boilerplate' ),
			'slug'  => 'grey',
			'color'	=> '#bdbdbd',
		),
		array(
			'name'  => __( 'Primary', 'da_boilerplate' ),
			'slug'  => 'primary',
			'color' => '#53c9c8'
		),
	) );
}
add_action( 'after_setup_theme', 'da_boilerplate_custom_editor_colour_palette' );