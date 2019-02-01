<?php echo $before_widget; ?>

<?php
  if( !empty( $instance['title'] ) ) {
    echo $before_title . esc_html( $instance['title'] ) . $after_title;
  } else {
    echo '<span class="screen-reader-text">' . $before_title . __( 'Social Media Links', 'core-functionality' ). $after_title . '</span>';
  }
?>

<div class="social-links" itemscope itemtype="http://schema.org/Organization">
  <link itemprop="url" href="<?php echo get_bloginfo( 'url' ); ?>">
  <ul class=social-links-list>

    <?php
      $socials = $this->social_options();

      foreach( $socials as $key => $label ) {

        if( !empty( $instance[$key] ) ) {

          // Inline SVG & Screen Reader Variables
          if ( !function_exists( 'pb_get_svg' ) ) {
            $social_icon = '';
            $screen_reader_text = $key;
          } else {
            $social_icon = pb_get_svg( array( 'icon' => $key, 'title' => '' ) );
            $screen_reader_text = '<span class="screen-reader-text">' . $key . ': Opens in new window' . '</span>';
          }
          ?>

          <li class="social-item">
            <a class="social-icon" href="<?php echo esc_url( $instance[$key] ); ?>" itemprop="sameAs" target="_blank" rel="noopener noreferrer"><?php echo $social_icon . $screen_reader_text ?></a>
          </li>

          <?php
        }

      }
    ?>

  </ul>
</div>

<?php echo $after_widget; ?>
