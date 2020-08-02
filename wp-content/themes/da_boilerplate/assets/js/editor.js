
wp.domReady( function() {

  // SPACER BLOCK STYLE OPTIONS

  // unregister default stuff:
    wp.blocks.unregisterBlockStyle( 'core/spacer', {
    	name: 'default',
    	label: 'Default',
    });

    // register new style options
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'manual-pixel-value',
      label: 'Manual (use pixel value)',
      isDefault: true,
    } );

    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-small',
      label: 'Responsive Small',
    } );
    
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-medium',
      label: 'Responsive Medium',
    } );
    
    wp.blocks.registerBlockStyle( 'core/spacer', {
      name: 'responsive-large',
      label: 'Responsive Large',
    } );


    // blacklist specific blocks on client side (better to do with PHP though you have to whitelist instead of blacklist)
    // wp.blocks.unregisterBlockType( 'core/audio' );
    // wp.blocks.unregisterBlockType( 'core/cover' );
    // wp.blocks.unregisterBlockType( 'core/video' );
    // wp.blocks.unregisterBlockType( 'core/freeform' );
    // wp.blocks.unregisterBlockType( 'core/nextpage' );
    // wp.blocks.unregisterBlockType( 'core/latest-posts' );
    // wp.blocks.unregisterBlockType( 'core/categories' );
    // wp.blocks.unregisterBlockType( 'core/calendar' );
} );