<?php

  $is_active_modal = $instance['is_modal'];

  $video_section = $instance['video_section'];
  $video_type = $video_section['video_type'];
  $target_url = $video_section['video_id'];

  if( $video_type == 'sp-wp-video' ){
    $target_url = $video_section['video_url'];
  }
  
  $anchor_data = 'data-behaviour="'.$video_type.'" data-video="'.$target_url.'"';

?>

<div class="gls-multi-wrapper">
  <?php if( ! $instance['is_modal'] ):?>
    <a href="<?php _e( sow_esc_url( $instance['link'] ) ); ?>" class="gls-multi-btn">
      <?php _e( $instance['btn_text'] );?>
    </a>
  <?php else:?>
    <div class="gls-multi-btn" <?php if( $is_active_modal ){ _e( $anchor_data ); }?> >
      <?php _e( $instance['btn_text'] );?>
    </div>
  <?php endif;?>
</div>
