<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

?>

<!-- GLS LOGO SLIDER  -->
<div class="fullwidth">
	<div class="gls-logos-wrapper">
		<section data-behaviour="gls-logos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="gls-logo-slider">
			<?php foreach( $instance['slides'] as $slide ):?>
				<a href="<?php _e( $slide['redirect_url'] );?>" class="redirect-url" <?php if( $instance['new_window'] ){ echo 'target="_blank"'; }?> >
					<div class="slide">
						<img src="<?php _e( wp_get_attachment_url( $slide['image'] ) );?>" />
					</div>
				</a>
			<?php endforeach;?>
		</section>
	</div>
</div>
<!-- End -->
