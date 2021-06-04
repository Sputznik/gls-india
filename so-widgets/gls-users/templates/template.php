<!-- GLS USERS GRID -->
<div class="gls-users-grid">
  <?php
    foreach( $instance['gls_users'] as $item ): $image = wp_get_attachment_url( $item['user_image'] );
  ?>
    <div class="gls-user-card">
      <a data-target="#gls-user-modal" data-behaviour="gls-users">
        <div class="gls-user-body">
          <div class="user-thumbnail-bg" style="background-image: url( '<?php _e( $image );?> ');"></div>
          <div class="user-meta">
            <h5 class="name">
              <?php _e( $item['user_name'] );?>
            </h5>
          </div>
          <div class="bio" style="display:none;height:0;">
            <?php echo $item['user_bio'];?>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach;?>
</div>
