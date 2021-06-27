
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
} );