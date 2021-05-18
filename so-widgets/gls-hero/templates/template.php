<!-- GLS HERO -->
<?php
  $image_url = wp_get_attachment_url( $instance['image'] );
?>
<div class="gls-hero">
  <div class="hero-content">
    <?php _e( $instance['hero_content'] );?>
    <div class="section">
      <?php _e( $instance['hero_more_section'] ); ?>
    </div>
    <div class="hero-buttons">
      <a href="#" class="hero-btn toggle-content btn-read-more">Read More</a>
      <a href="<?php _e( $instance['btn_contact_url'] );?>" class="hero-btn btn-contact">Contact Us</a>
    </div>
  </div>
  <div class="hero-img">
    <?php if( !empty( $image_url ) ):?>
      <img src="<?php _e( $image_url );?>" alt="Hero Image" />
    <?php endif;?>
  </div>
</div>
<!-- GLS HERO  ends -->
