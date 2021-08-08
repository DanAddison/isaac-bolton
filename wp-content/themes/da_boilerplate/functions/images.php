<?php

// disable WP generated image sizes
function da_boilerplate_remove_default_images($sizes) {
	
	// unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']);    // disable 2x medium-large size
	unset($sizes['2048x2048']);    // disable 2x large size
	
	return $sizes;
	
}
add_action('intermediate_image_sizes_advanced', 'da_boilerplate_remove_default_images');

// NOTE**
// I have changed thumbnail size to 500px in settings
// I have used Imsanity to scale all uploaded images to maximum 800px height
// therefore no need for Fly Images



// Register custom image sizes with Fly
// if ( function_exists( 'fly_add_image_size' ) ) {
//     fly_add_image_size( 'square', 500, 500, true );
//     fly_add_image_size( 'project_slide', 2000, 1000, false );
// }  