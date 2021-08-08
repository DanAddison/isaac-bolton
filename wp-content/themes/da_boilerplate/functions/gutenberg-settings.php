<?php

// Conditionally allow specific Gutenberg blocks by post type
function da_boilerplate_allowed_block_types( $allowed_blocks, $post ) {
	
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
        // 'core/table',
        // 'core/pullquote',
        // 'core/freeform', // classic editor block
        'core/verse', // <pre> tag: includes text align options, eg. for poetry or song lyrics
        // 'core/code', // <pre> tag: includes <code> element for specific styling eg. grey background colour
        // 'core/preformatted', // <pre> tag: similar to code block but with more styling options
        
        // layout
        'core/columns',
        'core/separator',
        // 'core/media-text',
        'core/group',
        // 'core/buttons',
        'core/spacer', // extended for responsiveness in my editor.js file
        // 'core/nextpage', // for adding page break (but doesn't produce pagination for me?)

        // widgets
        // 'core/shortcode',
        // 'core/search',
        'core/social-links',
        // 'core/latest-posts', // loads of options.. but probably never quite enough!

        // embeds
        // 'core-embed/twitter',
        // 'core-embed/instagram',
        'core-embed/youtube',
        'core-embed/vimeo',
        'core-embed/soundcloud',
        // 'core-embed/facebook',
        // 'core-embed/tiktok',
        // 'core-embed/meetup-com',

        // reusable
        'core/block',

        // third party
        // 'wpforms/form-selector',
        
        // add our own blocks
        'acf/accordion',
        'acf/project-list',
    );
}
add_filter( 'allowed_block_types', 'da_boilerplate_allowed_block_types', 10, 2 );

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
			'name'  => __( 'Light', 'da_boilerplate' ),
			'slug'  => 'light',
			'color'	=> '#F7F7F2',
		),
		array(
			'name'  => __( 'Dark', 'da_boilerplate' ),
			'slug'  => 'dark',
			'color'	=> '#222',
		),
		array(
			'name'  => __( 'Middle', 'da_boilerplate' ),
			'slug'  => 'middle',
			'color'	=> '#d0d0c9',
		),
		array(
			'name'  => __( 'Accent', 'da_boilerplate' ),
			'slug'  => 'accent',
			'color' => '#778472'
		),
	) );
}
add_action( 'after_setup_theme', 'da_boilerplate_custom_editor_colour_palette' );