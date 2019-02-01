<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'core-functionality' ) ?></label>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'business_name' ); ?>"><?php esc_html_e( 'Buisness Name', 'core-functionality' ) ?>:</label>
  <input type="text" id="<?php echo $this->get_field_id( 'business_name' ); ?>" name="<?php echo $this->get_field_name( 'business_name' ); ?>" value="<?php esc_html_e( $instance['business_name'] ); ?>" class="widefat" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'business_logo' ); ?>"><?php esc_html_e( 'Logo', 'core-functionality' ) ?>:</label>
  <input type="url" id="<?php echo $this->get_field_id( 'business_logo' ); ?>" name="<?php echo $this->get_field_name( 'business_logo' ); ?>"  placeholder="<?php esc_html_e( 'https://', 'core-functionality' ); ?>" class="widefat" value="<?php echo esc_html( $instance['business_logo'] ); ?>" />
  <small><?php esc_html_e( 'Add a link to your buisnesss logo in svg or png format.', 'core-functionality' ) ?></small>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'phone_number' ); ?>"><?php esc_html_e( 'Phone', 'core-functionality' ) ?>:</label>
  <input type="tel" id="<?php echo $this->get_field_id( 'phone_number' ); ?>" name="<?php echo $this->get_field_name( 'phone_number' ); ?>" value="<?php echo esc_attr( $instance['phone_number'] ); ?>" placeholder="<?php esc_html_e( '+1(555) 555-5555', 'core-functionality' ) ?>" class="widefat" />
  <small><?php esc_html_e( 'Start the phone number with a country code.', 'core-functionality' ) ?></small>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'email_address' ); ?>"><?php esc_html_e( 'Email', 'core-functionality' ) ?>:</label>
  <input type="email" id="<?php echo $this->get_field_id( 'email_address' ); ?>" name="<?php echo $this->get_field_name( 'email_address' ); ?>" value="<?php echo sanitize_email( $instance['email_address'] ); ?>" placeholder="<?php esc_html_e( 'info@example.com', 'core-functionality' ) ?>" class="widefat" />
</p>
<p>
  <strong><?php esc_html_e( 'Note', 'core-functionality' ) ?>:</strong>
  <small><?php esc_html_e( 'A physical address that is not a P.O. Box is recommended for proper schema.', 'core-functionality' ) ?></small>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'street_address' ); ?>"><?php esc_html_e( 'Street Address', 'core-functionality' ) ?>:</label>
  <input type="text" id="<?php echo $this->get_field_id( 'street_address' ); ?>" name="<?php echo $this->get_field_name( 'street_address' ); ?>" class="widefat" value="<?php echo esc_html( $instance['street_address'] ); ?>">
</p>
<div class="widget-col first one-half">
  <p>
    <label for="<?php echo $this->get_field_id( 'city_address' ); ?>"><?php esc_html_e( 'City', 'core-functionality' ) ?>:</label>
    <input type="text" id="<?php echo $this->get_field_id( 'city_address' ); ?>" name="<?php echo $this->get_field_name( 'city_address' ); ?>" class="widefat" value="<?php echo esc_html( $instance['city_address'] ); ?>">
  </p>
</div>
<div class="widget-col one-half">
  <p>
    <label for="<?php echo $this->get_field_id( 'state_address' ); ?>"><?php esc_html_e( 'State', 'core-functionality' ) ?>:</label>
    <input type="text" id="<?php echo $this->get_field_id( 'state_address' ); ?>" name="<?php echo $this->get_field_name( 'state_address' ); ?>" class="widefat" value="<?php echo esc_html( $instance['state_address'] ); ?>">
  </p>
</div>
<div class="widget-col first one-half">
  <p>
    <label for="<?php echo $this->get_field_id( 'zip_address' ); ?>"><?php esc_html_e( 'Postal Code', 'core-functionality' ) ?>:</label>
    <input type="number" id="<?php echo $this->get_field_id( 'zip_address' ); ?>" name="<?php echo $this->get_field_name( 'zip_address' ); ?>" minlength="5" maxlength="6" class="widefat" value="<?php echo esc_html( $instance['zip_address'] ); ?>">
  </p>
</div>
<br class="end-of-form">
