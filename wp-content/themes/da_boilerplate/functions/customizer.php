<?php
/**
 * da_boilerplate Theme Customizer
 *
 * @package da_boilerplate
 */
function da_boilerplate_customize_register( $wp_customize ) {

	// remove some default sections * note that you can't remove 'widgets' section this way
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );

}
add_action( 'customize_register', 'da_boilerplate_customize_register' );

