jQuery.fn.gls_user_popup = function() {

	return this.each(function() {

		var $el           = jQuery(this),
        $image        = $el.find('.user-thumbnail-bg'),
				imageUrl			=	$image.attr('style'),
        name          = $el.find('.name').text(),
        bio           = $el.find('.bio').html(),
				modalType			=	$el.data('behaviour'),
				bg_color			= $el.find('.gls-user-body').css('background-color');

    // CREATES DYNAMIC USER MODAL
		$el.on( 'click', function() { $el.createModal(); });

    // GLS USER MODAL LAYOUT
    $el.createModal = function() {

      html = `
      <div class="modal fade ${modalType}-modal" id="gls-user-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <a id="close" data-toggle="modal" data-target="#gls-user-modal" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
            </div>
            <div class="modal-body">
              <div class="gls-user-body">
                <div class="user-thumbnail-bg" style="${imageUrl}background-color:${bg_color};"></div>
                <div class="user-meta">
                  <h5 class="name">${name}</h5>
                  <div class="separator"></div>
                  <div class="bio">${bio}</div>
                </div>
              </div>
            </div><!-- Modal Body -->
          </div><!-- Modal Content -->
        </div><!-- Modal Dialog -->
      </div>
      `;

      jQuery("body").append(html);
			jQuery('#gls-user-modal').modal('show');
    }

    // REMOVES MODAL FROM THE DOM
    jQuery(document).on('hidden.bs.modal', function () {
			jQuery('#gls-user-modal').remove();
      jQuery('.modal-backdrop.in').remove();
		});


	}); //End each()

};

jQuery(document).ready(function () {

	jQuery('div[data-behaviour~=gls-user-popup]').gls_user_popup();
	jQuery('div[data-behaviour~=gls-users]').gls_user_popup();

});
