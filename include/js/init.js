(function($){
  $(function(){

    $('.button-collapse').sideNav();

    $(".dropdown-button").dropdown();

  

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
