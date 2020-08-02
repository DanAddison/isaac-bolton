jQuery(function($) {
  ResponsiveMenu.init();
  //DropdownMenu.init();
  //ExpandableAccordion.init()

  $(window).resize(function() {

    // menu breakpoint
    if ($(window).width() > 999) {
      ResponsiveMenu.closeMenu();
      // DropdownMenu.closeSubMenus();
    }
  });

  // uncomment if using slick slider carousel on hero
  // $('.hero--slider').slick({
  // 	adaptiveHeight: false,
  // 	infinite: true,
  // 	autoplay: true,
  // 	autoplaySpeed: 2500,
  // 	slidesToShow: 1,
  // 	arrows: false,
  // 	lazyLoad: 'ondemand',
  // });
});
