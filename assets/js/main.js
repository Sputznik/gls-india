jQuery(document).ready(function(){

  // GLS SOW HERO READ MORE OR LESS
  jQuery('.gls-hero .toggle-content').click(function(e) {
   e.preventDefault();
   jQuery('.gls-hero .hero-content > .section').slideToggle();
   if( jQuery(this).hasClass('btn-read-more') ){
     jQuery(this).text('Read Less').removeClass('btn-read-more').addClass('btn-read-less');
   }
   else{
     jQuery(this).text('Read More').removeClass('btn-read-less').addClass('btn-read-more');
   }
  });

  function glsStickyHeader(){

    if( jQuery(window).width() > 768 ) {

      jQuery('body').css('margin-top','93px');
    }
    else {
      jQuery('body').css('margin-top','70px');
    }

  }
  // EXECUTED ON PAGE LOAD
  glsStickyHeader();

});
