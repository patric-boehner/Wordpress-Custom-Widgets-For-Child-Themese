<?php echo $before_widget; ?>

<?php if ( !empty( $instance['title'] ) ): ?>
  <?php echo $before_title . apply_filters( 'widget_title', $instance['title'] ) . $after_title; ?>
<?php endif; ?>

<?php
$phone = esc_attr( $instance['phone_number'] );
$name = esc_html( $instance['business_name'] );
$logo = esc_url( $instance['business_logo'] );
$email = sanitize_email( $instance['email_address'] );
$email = antispambot( $email );
$street = '<span class="address-line street" itemprop="streetAddress">' .esc_html( $instance['street_address'] ). '</span> ';
$city = '<span class="city" itemprop="addressLocality">' .esc_html( $instance['city_address'] ). '</span>, ';
$state = '<span class="state" itemprop="addressRegion">' .esc_html( $instance['state_address'] ). '</span> ';
$zip = '<span class="zip" itemprop="postalCode">' .esc_attr( $instance['zip_address'] ). '</span>';
?>

<?php if ( !function_exists( 'pb_get_svg' ) ): ?>
  <?php
  $phone_icon = '';
  $email_icon = '';
  $map_icon = '';
  ?>
<?php else: ?>
  <?php
  $phone_icon = pb_get_svg( array( 'icon' => 'phone', 'title' => '' ) );
  $email_icon = pb_get_svg( array( 'icon' => 'envelope', 'title' => '' ) );
  $map_icon = pb_get_svg( array( 'icon' => 'map-marker', 'title' => '' ) );
  ?>
<?php endif; ?>

<div class="address" itemscope itemtype="https://schema.org/Organization">

<?php if ( !empty( $instance['business_name'] ) ): ?>

  <p>
    <span class="buisness-name">
      <h4 itemprop="name"><?php echo $name; ?></h4>
    </span>
  </p>

<?php endif; ?>

<?php if ( !empty( $instance['business_logo'] ) ): ?>

  <?php if ( !empty( $name ) ): ?>
    <?php $$name = $name; ?>
<?php endif; ?>

  <p>
    <a href="<?php echo get_bloginfo( 'url' ); ?>" itemprop="url" class="buisness-logo">
      <img itmeprop="image" src="<?php echo $logo; ?>" alt="<?php echo $name . ' ' . esc_html( 'Logo', 'core-functionality' ); ?>">
    </a>
  </p>

<?php endif; ?>

<?php if ( !empty( $instance['phone_number'] ) ): ?>

  <?php
  $label = esc_html__( 'Phone:', 'core-functionality' );
  $aria = esc_html__( 'Call us at', 'core-functionality' );
  ?>

  <p>
    <span class="contact-label" ><b>
      <span class="icon-container"><?php echo $phone_icon; ?></span>
      <span class="phone-number" aria-label="<?php echo $aria; ?>"><?php echo $label; ?> </span>
    </b></span>
    <a class="contact-method" href="tel:<?php echo preg_replace('/\D+/', '', $phone) ?>">
      <span itemprop="telephone"><?php echo $phone; ?></span>
    </a>
  </p>

<?php endif; ?>

<?php if ( !empty( $instance['email_address'] ) ): ?>

  <?php
  $label = esc_html__( 'Email:', 'core-functionality' );
  $aria = esc_html__( 'Email us at', 'core-functionality' );
  ?>

  <p>
    <span class="contact-label" ><b>
      <span class="icon-container"><?php echo $email_icon; ?></span>
      <span class="email-address" aria-label="<?php echo $aria; ?>"><?php echo $label; ?> </span>
    </b></span>
      <a class="contact-method" href="mailto:<?php echo $email; ?>">
        <span itemprop="email"><?php echo $email; ?></span>
      </a>
    </p>

<?php endif; ?>

<?php if ( !empty( $instance['street_address'] ) || !empty( $instance['city_address'] ) ): ?>

  <?php
  $label = esc_html__( 'Address:', 'core-functionality' );
  $aria = esc_html__( 'Our address is', 'core-functionality' );
  ?>

  <p>
    <span class="contact-label" >
      <?php echo $map_icon; ?>
      <span id="postal-address" aria-label="<?php echo $aria; ?>">
        <b><?php echo $label; ?> </b>
      </span>
    </span>
    <span class="postal-address contact-method" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <?php echo $street; ?><span class="address-line"><?php echo $city . $state . $zip; ?></span>
    </span>
  </p>

<?php endif; ?>


</div>

<?php echo $after_widget; ?>
