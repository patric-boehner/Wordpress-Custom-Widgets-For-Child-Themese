<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'core-functionality' ) ?></label>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'message' ); ?>"><?php esc_html_e( 'Message', 'core-functionality' ) ?>:</label>
  <textarea id="<?php echo $this->get_field_id( 'message' ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'message' ); ?>" rows="5" cols="25" style="resize:vertical"><?php echo esc_html( $instance['message'] ); ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'final-message' ); ?>"><?php esc_html_e( 'Final Message:', 'core-functionality' ) ?></label>
  <input type="text" id="<?php echo $this->get_field_id( 'final-message' ); ?>" name="<?php echo $this->get_field_name( 'final-message' ); ?>" value="<?php echo esc_html( $instance['final-message'] ); ?>" class="widefat" />
</p>
<div class="widget-sub-section image-control">
  <strong>
    <label><?php esc_html_e( 'Add An Image', 'core-functionality' ) ?>:</label>
  </strong>
  </br></br>
  <div class="image-preview wp-get-posts-image-preview">
    <img src="<?php echo wp_get_attachment_image_src( $instance['image_id'], 'medium' )[0]; ?>" width="100%" class="wp-get-posts-image" />
    <small></strong><?php esc_html_e( 'Image preview will not appear till you save.', 'core-functionality' ) ?></small>
  </div>
  </br>
  <button class="select-an-image button" type="button" name="Select an Image">
    <?php esc_html_e( 'Select an Image', 'core-functionality' ); ?>
  </button>
  <input id="<?php echo $this->get_field_id( 'image_id' ); ?>" class="wp-get-posts-imageID" name="<?php echo $this->get_field_name( 'image_id' ); ?>" type="hidden" value="<?php echo esc_attr( $instance['image_id'] ); ?>">
  <input id="<?php echo $this->get_field_id( 'image_src' ); ?>" class="wp-get-posts-image site-panels-image-fix" type="hidden" name="<?php echo $this->get_field_name( 'image_src' ); ?>" value="<?php echo esc_url( $instance['image_src'] ); ?>">
  <button class="clear-an-image button" type="button" name="Clear Image">
    <?php esc_html_e( 'Clear', 'core-functionality' ); ?>
  </button>
</div>
<p>
  <strong><?php esc_html_e( 'Note:', 'core-functionality' ) ?></strong>
  <small><?php esc_html_e( 'Choose one of the Call-To-Action options from below. Leave the other option empty.', 'core-functionality' ) ?></small>
</p>
<div class="widget-sub-section">
  <p class="widget-options-heading">
    <strong><label for="<?php echo $this->get_field_id( 'cta-selection' ); ?>"><?php esc_html_e( 'Button Call-To-Action:', 'core-functionality' ) ?></label></strong>
    <small><?php esc_html_e( 'Create a link to an internal or external source.', 'core-functionality' ) ?></small>
  </p>
  <div class="button-select">
    <p>
      <label for="<?php echo $this->get_field_id( 'button' ); ?>" class="label-left"><?php esc_html_e( 'Button Text:', 'core-functionality' ) ?></label>
      <input type="text" id="<?php echo $this->get_field_id( 'button' ); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" value="<?php echo esc_html( $instance['button'] ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>" class="label-left"><?php esc_html_e( 'Button Link:', 'core-functionality' ) ?></label>
      <input type="text" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo esc_url( $instance['link'] ); ?>"  />
    </p>
  </div>
</div>
<div class="widget-sub-section">
  <p class="widget-options-heading">
    <strong><label for="<?php echo $this->get_field_id( 'cta-selection' ); ?>"><?php esc_html_e( 'Form Call-To-Action:', 'core-functionality' ) ?></label></strong>
    <small><?php esc_html_e( 'For email signups, add the shortcode for the form provided by your form plugin.', 'core-functionality' ) ?></small>
  </p>
  <div class="form-select">
    <p>
      <label for="<?php echo $this->get_field_id( 'shortcode' ); ?>" class="label-left"><?php esc_html_e( 'Shortcode:', 'core-functionality' ) ?></label>
      <input type="text" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" value="<?php echo esc_textarea( $instance['shortcode'] ); ?>" />
    </p>
  </div>
</div>
<br>
