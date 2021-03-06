<!-- USER POPUP -->
<div class="articles-users">
  <?php
    foreach( $instance['gls_users'] as $item ): $image = wp_get_attachment_url( $item['user_image'] );
  ?>
    <div class="gls-user-card">
      <div data-target="#gls-user-modal" data-behaviour="gls-user-popup">
        <div class="gls-user-body">
          <div class="user-meta">
            <h5 class="name">
              <?php _e( $item['user_name'] );?>
              <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </h5>
          </div>
          <div class="user-thumbnail-bg" style="background-image: url( '<?php _e( $image );?> ');"></div>
          <div class="bio" style="display:none;height:0;">
            <?php echo $item['user_bio'];?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</div>
