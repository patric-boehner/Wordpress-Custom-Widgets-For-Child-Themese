<?php echo $before_widget; ?>

<?php
$heading = esc_html( $instance['title'] );
$message = esc_html( $instance['message'] );
$final   = esc_html( $instance['final-message'] );
$image   = esc_attr( $instance['image_id'] );
?>

<div class="cta-offer-text">

<?php if ( !empty( $instance['title'] ) ): ?>
  <h3 class="cta-heading"><?php echo $heading; ?></h3>
<?php endif; ?>

<?php if ( !empty( $instance['message'] ) ): ?>
  <p class="cta-message"><?php echo $message; ?></p>
<?php endif; ?>

<?php if ( !empty( $instance['final-message'] ) ): ?>
  <p class="cta-description"><?php echo $final; ?></p>
<?php endif; ?>

</div>

<?php if ( !empty( $instance['image_id'] ) ): ?>
  <div class="cta-image">
    <?php echo wp_get_attachment_image( $image, 'medium' ); ?>
  </div>
<?php endif; ?>

<?php if ( !empty( $instance['shortcode'] ) || !empty( $instance['link'] ) ): ?>

  <?php
  $cta_button =  esc_html( $instance['button'] );
  $cta_link =  esc_url( $instance['link'] );
  $shortcode =  do_shortcode( $instance['shortcode'] );
  ?>

  <div class="cta-action">

    <?php if ( empty( $instance['shortcode'] ) && !empty( $instance['button'] ) && !empty( $instance['link'] ) ): ?>
      <a href="<?php echo $cta_link; ?>" target="_self" class="cta-button button"><?php echo $cta_button; ?></a>
    <?php endif; ?>

    <?php if ( !empty( $instance['shortcode'] ) ): ?>
      <div class="cta-shortcode"><?php echo $shortcode; ?></div>
    <?php endif; ?>

  </div>

<?php endif; ?>

<?php echo $after_widget; ?>
