jQuery.fn.glsLogoSlider = function(){

	return this.each(function(){

		var $el = jQuery( this );

		$el.slick({
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			autoplay				: false,
			autoplaySpeed		: 1500,
			arrows					: true,
			dots						: true,
			pauseOnHover		: true,
			nextArrow     	: '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
			prevArrow     	: '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',
			responsive			: [
				{
					breakpoint: 1169,
					settings: { slidesToShow: 4 }
				},
				{
	        breakpoint: 769,
					settings: { slidesToShow: 3 }
      	},
				{
	        breakpoint: 520,
					settings: { slidesToShow: 1 }
      	}
			]
		});


		$el.addClass( 'loaded' );

	});

}

jQuery(document).ready(function(){

	jQuery('[data-behaviour~=gls-logos-slick]').glsLogoSlider();

});
