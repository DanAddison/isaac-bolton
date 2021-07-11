<?php
	
// register Gutenberg block category

function da_boilerplate_block_categories( $categories, $post ) {

    $categories =  array_merge(
        array(
            array(
                'slug' => 'da_boilerplate-blocks',
                'title' => 'da_boilerplate Blocks',
								'icon'  => 'star-filled',
            ),
        ),
        $categories        
    );
    
   return $categories;
}
add_filter( 'block_categories', 'da_boilerplate_block_categories', 10, 2 );	
	
// register custom Gutenburg blocks
function da_boilerplate_register_blocks() {
	
	// check function exists
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

		// register blocks
		acf_register_block_type(array(
			'name'			  	  => 'accordion',
			'title'				    => __('Accordion'),
			'description'		  => __('A custom block for adding the Plan Your Visit info accordion.'),
			'render_callback'	=> 'da_boilerplate_acf_block_render_callback',
			'category'			  => 'da_boilerplate-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'accordion', 'plan' ),
			'supports'        => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'post-archive',
			'title'				    => __('Post Archive'),
			'description'		  => __('A custom block for displaying posts.'),
			'render_callback'	=> 'da_boilerplate_acf_block_render_callback',
			'category'			  => 'da_boilerplate-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'image', 'card', 'link' ),
			'supports'        => array( 'align' => false ),
		));

        acf_register_block_type(array(
			'name'			  	  => 'project-list',
			'title'				  => __('Project List'),
			'description'		  => __('A custom block for displaying a list of links to projects.'),
			'render_callback'	  => 'da_boilerplate_acf_block_render_callback',
			'category'			  => 'da_boilerplate-blocks',
			'mode'				  => 'edit',
			'icon'                => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'projects', 'list', 'links' ),
			'supports'            => array( 'align' => false ),
		));

        acf_register_block_type(array(
			'name'			  	  => 'project-slides',
			'title'				  => __('Project Slides'),
			'description'		  => __('A custom block for displaying a slider of images.'),
			'render_callback'	  => 'da_boilerplate_acf_block_render_callback',
			'category'			  => 'da_boilerplate-blocks',
			'mode'				  => 'edit',
			'icon'                => array( 'background' => '#e0edee', 'src' => 'images-alt2' ),
			'keywords'			  => array( 'project', 'images', 'slides' ),
			'supports'            => array( 'align' => false ),
		));
		
}
add_action('acf/init', 'da_boilerplate_register_blocks');


function da_boilerplate_acf_block_render_callback( $block ) {
	
	// convert name ("acf/form") into path friendly slug ("form")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "parts/blocks" folder
	if( file_exists(STYLESHEETPATH . "/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/blocks/block-{$slug}.php" );
	}
}