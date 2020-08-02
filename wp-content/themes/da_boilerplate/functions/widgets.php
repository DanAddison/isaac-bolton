<?php
/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function da_boilerplate_widgets_init() {
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Sidebar', 'da_boilerplate' ),
	// 	'id'            => 'sidebar-1',
	// 	'description'   => esc_html__( 'Add widgets here.', 'da_boilerplate' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 1', 'da_boilerplate' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer widgets here.', 'da_boilerplate' ),
		'before_widget' => '<section id="footer_area_1" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 2', 'da_boilerplate' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer widgets here.', 'da_boilerplate' ),
		'before_widget' => '<section id="footer_area_2" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 3', 'da_boilerplate' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer widgets here.', 'da_boilerplate' ),
		'before_widget' => '<section id="footer_area_3" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 4', 'da_boilerplate' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add footer widgets here.', 'da_boilerplate' ),
		'before_widget' => '<section id="footer_area_4" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
}

add_action( 'widgets_init', 'da_boilerplate_widgets_init' );

/**
 * Unregister some default widgets.
 */
function unregister_default_wp_widgets() { 
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Media_Audio');
	unregister_widget('WP_Widget_Media_Gallery');
	unregister_widget('WP_Widget_Media_Image');
	unregister_widget('WP_Widget_Media_Video');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	
	// unregister_widget('WP_Nav_Menu_Widget');
	// unregister_widget('WP_Widget_Text');
	// unregister_widget('WP_Widget_Search');
	// unregister_widget('WP_Widget_Custom_HTML');
}
add_action('widgets_init', 'unregister_default_wp_widgets' );
