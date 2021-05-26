jQuery(document).ready(function(){

  var glsHeaderHeight = jQuery('#gls-sticky-header-wrapper > .sticky-transparent-header').innerHeight();

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
    // gls-sticky-header-wrapper
    if( jQuery(window).scrollTop() > 0 ){

      jQuery('#gls-sticky-header-wrapper > .sticky-transparent-header').addClass('affix');

      if( jQuery(window).width() > 768 ) {

        jQuery('body').css('margin-top', glsHeaderHeight );
      }
      else {
        jQuery('body').css('margin-top', glsHeaderHeight );
      }
    }
    else {
      jQuery('#gls-sticky-header-wrapper > .sticky-transparent-header').removeClass('affix');
      jQuery('body').css('margin-top', '0px' );
    }

  }
  // EXECUTED ON PAGE LOAD
  jQuery(window).scroll(function() {
    glsStickyHeader();
  });

  // DROPDOWN MENU TOGGLER
  if( jQuery(window).width() <= 768 ) {
    jQuery( '.header5 .navbar-nav .dropdown > a' ).append( '<span class="menu-toggler"><i class="fa fa-angle-down"></i></span>' );

    jQuery('.header5 .navbar-nav .menu-toggler').on('click', function(e){
  		e.preventDefault();

      var $this = jQuery( this );

  		if($this.children().hasClass('fa-angle-down')){
  			$this.children().removeClass('fa-angle-down').addClass('fa-angle-up');
  		}
  		else{
  			$this.children().removeClass('fa-angle-up').addClass('fa-angle-down');
  		}

  		$this.parent().next().slideToggle( 'fast' );
    });
  }


});
