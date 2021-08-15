jQuery(function($) {
  ResponsiveMenu.init();
  //ExpandableAccordion.init()

  $(window).resize(function() {

    // menu breakpoint
    if ($(window).width() > 999) {
      ResponsiveMenu.closeMenu();
    }
  });

  // Slick
  $('.single-project__slides').slick({
        adaptiveHeight: true,
        infinite: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '20px',
        variableWidth: false,
        dots: true,
        arrows: false,
        lazyLoad: 'ondemand'
    });

});
