<?php echo $before_widget; ?>

  <?php if ( !empty( $instance['title'] ) ): ?>
    <?php echo $before_title . apply_filters( 'widget_title', $instance['title'] ) . $after_title; ?>
  <?php endif; ?>

  <?php
  // Post Query Args
  $post_args = array(
    'post_type'			=> 'post',
    'posts_per_page'	=> '1',
    'cat'	=> $instance['post_category'],
  );

  // Post Query
  $post_query = null;
  $post_query = new WP_Query( $post_args );
  if( $post_query->have_posts() ) {
    while ( $post_query->have_posts() ) :
      $post_query->the_post();

      $post_title = esc_html( get_the_title() );
      $post_link = esc_url( get_the_permalink() );
      $button_text = esc_html__( 'Continue Reading', 'core-functionality' );
      $screen_reader = '<span class="screen-reader-text">' . ': ' .$post_title. '</span>';
  ?>

      <article class="post recent-post" itemscope itemtype="https://schema.org/CreativeWork">
      <header class="entry-header"><h4 class="entry-title" itemprop="headline"><?php echo $post_title; ?></h4></header>
      <div class="entry-content" itemprop="text"><?php echo the_excerpt(); ?></div>
      <a class="button" href="<?php echo $post_link; ?>" itemprop="url"><?php echo $button_text . $screen_reader; ?></a>
      </article>

  <?php
  endwhile;
  wp_reset_postdata();

}
?>

<?php echo $after_widget; ?>
