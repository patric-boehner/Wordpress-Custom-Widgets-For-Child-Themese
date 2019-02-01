<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'core-functionality' ) ?></label>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_html( $instance['title'] ); ?>" class="widefat" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'post_category' ); ?>"><?php esc_html_e( 'Category to Display:', 'core-functionality' ) ?></label>
  <?php wp_dropdown_categories( array(
    'name'				=> $this->get_field_name( 'post_category', 'core-functionality' ),
    'show_option_all' => __( 'All Categories' ),
    'hide_empty'		=> 0,
    'hierarchical'		=> 0,
    'selected'			=> $instance['post_category'],
    'class'				=> 'widefat',
  ) ); ?>
</p>
<br>
