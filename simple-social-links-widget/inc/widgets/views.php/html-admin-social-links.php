<?php
  $socials = $this->social_options();
  $defaults = array(
    'title' => '',
  );
?>

<?php
  foreach( $socials as $key => $label ) {
    $defaults[$key] = '';
  }

  $instance = wp_parse_args( (array) $instance, $defaults );
?>

<p>
  <label for="<?php echo $this->get_field_id( 'title' ) ?>"><?php esc_html_e( 'Title:', 'core-functionality' ) ?></label>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ) ?>" name="<?php echo $this->get_field_name( 'title' ) ?>" class="widefat" value="<?php echo esc_html( $instance['title'] ); ?>">
</p>

<?php
foreach ( $socials as $key => $label ) {
?>

<p>
  <label for="<?php echo $this->get_field_id( $key ) ?>"><?php echo $label ?> <?php esc_html_e( 'URL:', 'core-functionality' ) ?></label>
  <input type="url" id="<?php echo $this->get_field_id( $key ) ?>" name="<?php echo $this->get_field_name( $key ) ?>" class="widefat" value="<?php echo esc_url( $instance[$key] ); ?>">
</p>

<?php
}
?>
<br>
