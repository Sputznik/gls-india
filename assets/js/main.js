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

});
