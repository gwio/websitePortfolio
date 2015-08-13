(function($){
  $(function(){

    $('.button-collapse').sideNav();

    // Floating-Fixed table of contents
    if ($('nav').length) {
      $('.pin-wrapper').pushpin({ top: $('nav').height() });
    }

    else {
      $('.pin-wrapper').pushpin({ top: 0 });
    }


    var $container = $('#masonry-grid');

    $container.masonry({
      itemSelector: '.col',
      columnWidth: '.col'
    });

    $container.imagesLoaded().progress( function(){
      $container.masonry('layout');
    });


  }); // end of document ready
})(jQuery); // end of jQuery name space
