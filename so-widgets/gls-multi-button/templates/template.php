<?php

  $is_active_modal = $instance['is_modal'];
  $widget_id = 'sow-gls-btn-'.glsUniqueID( $instance );

  $video_section = $instance['video_section'];
  $video_type = $video_section['video_type'];
  $target_url = $video_section['video_id'];

  if( $video_type == 'sp-wp-video' ){
    $target_url = $video_section['video_url'];
  }

  $anchor_data = 'data-behaviour="'.$video_type.'" data-video="'.$target_url.'"';
?>

<div class="gls-multi-wrapper" id="<?php _e( $widget_id );?>" >
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

<style media="screen">
  <?php _e( '#'.$widget_id );?>.gls-multi-wrapper .gls-multi-btn{
    color: <?php echo( $instance['btn_text_color'] ? $instance['btn_text_color'] : "#ffffff" );?>;
    background-color: <?php echo( $instance['btn_bg_color'] ? $instance['btn_bg_color'] : "#febd30" );?>;
  }

  @media (min-width: 769px){
    <?php _e( '#'.$widget_id );?>.gls-multi-wrapper .gls-multi-btn:hover {
      opacity: 0.9;
    }
  }

</style>
