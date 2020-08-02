<?php
/**
 * da_boilerplate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package da_boilerplate
 */

if ( ! function_exists( 'da_boilerplate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function da_boilerplate_setup() {

		/*
		 * WooCommerce support
		 */
		// add_theme_support( 'woocommerce' );
		// add_theme_support( 'wc-product-gallery-zoom' );
		// add_theme_support( 'wc-product-gallery-lightbox' );
		// add_theme_support( 'wc-product-gallery-slider' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Register Menus.
		register_nav_menus( array(
			'main' => 'Main Menu',
			'secondary' => 'Secondary Menu',
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/**
		 * Declare support for selective refreshing of widgets.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 * Display it anywhere with: the_custom_logo()
		 */
		// add_theme_support( 'custom-logo', array(
		// 	'height'      => 250,
		// 	'width'       => 250,
		// 	'flex-width'  => false,
		// 	'flex-height' => false,
		// ) );
	}
endif;
add_action( 'after_setup_theme', 'da_boilerplate_setup' );


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
 *
 * 
 * Include whatever we need from functions directory below:
 * 
 * 
 */

/**
 * Utility functions
 */
require get_template_directory() . '/functions/utility-functions.php';

/**
 * Admin interface alterations eg. Add global settings options page, hide menu items conditionally
 */
require get_template_directory() . '/functions/admin-ui.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/functions/enqueue-assets.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/functions/template-hooks.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/template-tags.php';

/**
 * ACF functions.
 */
// require get_template_directory() . '/functions/acf.php';

/**
 * register CPTs
 */
require get_template_directory() . '/functions/cpt-project.php';

/**
 * Custom image functions eg. register sizes, add to GB block options
 */
require get_template_directory() . '/functions/images.php';

/**
 * Register widget areas, remove certain widgets
 */
require get_template_directory() . '/functions/widgets.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/functions/customizer.php';

/**
 * Gutenberg settings
 */
require get_template_directory() . '/functions/gutenberg-settings.php';

/**
 * Custom ACF Gutenberg blocks
 */
require get_template_directory() . '/functions/gutenberg-acf-blocks.php';

/**
 * extend SEO Framework plugin
 */
// require get_template_directory() . '/functions/seo-framework.php';

/**
 * Implement the Custom Header feature
 */
// require get_template_directory() . '/functions/custom-header.php';

