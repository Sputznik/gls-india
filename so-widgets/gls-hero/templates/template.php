<!-- GLS HERO -->
<?php

  $animation_speed = !empty( $instance['animation_speed'] ) ? $instance['animation_speed'] : '2000';

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
    <!-- Carousel -->
    <div id="gls-bs-slider" class="carousel slide" data-ride="carousel" data-interval="<?php _e( $animation_speed );?>" data-pause="false">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $slide=0; foreach( $instance['image_slides'] as $item ):?>
          <?php $indicator=" "; if( $slide == 0 ){ $indicator= "active"; } ?>
          <li data-target="#gls-bs-slider" data-slide-to="<?php _e( $slide );?>" class="<?php _e( $indicator );?>"></li>
        <?php  $slide++; endforeach;?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <?php $i=0; foreach( $instance['image_slides'] as $item ):?>
        <?php
          $class=" ";if( $i == 0 ){ $class= "active"; }
          $image = wp_get_attachment_url( $item['image'] );
        ?>
        <div class="item <?php _e( $class );?>">
          <div class="item-body">
            <?php if( $image ):?>
             <img src="<?php _e( $image );?>" alt="carousel-image">
           <?php endif;?>
          </div>
        </div>
      <?php $i++; endforeach;?>
      </div> <!-- Wrapper ends.. -->
    </div> <!-- Carousel ends.. -->
  </div>
</div>
<!-- GLS HERO  ends -->
