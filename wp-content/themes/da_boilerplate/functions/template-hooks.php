<?php
/**
 * Functions which enhance the theme by hooking into WordPress.
 * 
 * 1. Filter hooks
 * 2. Action hooks
 * 
 */

/**
* 1. FILTER HOOKS
*/

/**
 * Add custom classes to the array of <body> classes.
 */
function da_boilerplate_body_classes( $classes ) {
	// Adds a class of archive-view to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'archive-view';
	}
	
	// Add a class telling us if the sidebar is in use.
	// Adapt conditions to exclude certain pages (which do not include the sidebar template part) from getting unwanted sidebar css rules:
		if ( is_active_sidebar( 'sidebar-1' ) && ! is_page( ['home', 'contact'] ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}
	
	return $classes;
}
add_filter( 'body_class', 'da_boilerplate_body_classes' );


/**
 * Post preview functions
 */

// Change excerpt length
function wpdocs_custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// change automatic 'read more' link
function new_excerpt_more($more) {
	global $post;
	return '.. <a class="moretag" 
	href="'. get_permalink($post->ID) . '">Read more</a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');

//  add 'read more' link to excerpts added manually via the Excerpt metafield
 add_filter( 'wp_trim_excerpt', 'da_boilerplate_excerpt_metabox_more' );
function da_boilerplate_excerpt_metabox_more( $excerpt ) {
	$output = $excerpt;
	
	if ( has_excerpt() ) {
		$output = sprintf( '%1$s <a href="%2$s"> ...Read more</a>',
			$excerpt,
			get_permalink()
		);
	}
	
	return $output;
}


/**
* 2. ACTION HOOKS
*/
/**
 
* Removes categories / tags from default blog posts
*/
function da_boilerplate_unregister_taxonomies() {
	// unregister_taxonomy_for_object_type( 'category', 'post' );
	unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'da_boilerplate_unregister_taxonomies' );

/**
 * Add a group block to new pages.
 */
// function prepopulate_page_template() {
// 	$page_type_object = get_post_type_object( 'page' );
// 	$page_type_object->template = [
// 		[ 'core/group', [], [
// 			[ 'acf/hero-image' ],
//       [ 'core/heading' ]
// 		] ],
// 	];
// }
// add_action( 'init', 'prepopulate_page_template' );