jQuery(function($) {
  ResponsiveMenu.init();
  //ExpandableAccordion.init()

  $(window).resize(function() {

    // menu breakpoint
    if ($(window).width() > 999) {
      ResponsiveMenu.closeMenu();
    }
  });

});
