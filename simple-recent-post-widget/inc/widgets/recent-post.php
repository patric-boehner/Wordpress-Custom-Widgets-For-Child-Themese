<?php

/**
 * Recent post excerpt widget
 *
 * @package    RecentPostWidget
 * @author     Patrick Boehner <patrick@patrickboehner.com>
 * @since      1.0.2
 * @copyright  Copyright (c) 2017, Patrick Boehner
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Widget
//**********************

class PB_Recent_Post_Widget extends WP_Widget {

	/**
	 * Holds widget settings defaults, populated in constructor.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $defaults;

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// widget defaults
		$this->defaults = array(
			'title'          => '',
			'post_category'  => '',
		);

		// Widget Slug
		$widget_slug = 'pb-recent-post-excerpt-widget';

		// widget basics
		$widget_ops = array(
			'classname'   => $widget_slug,
			'description' => esc_html__( 'Display the most recent post from a cateogry you select.', 'core-functionality' )
		);

		// widget controls
		$control_ops = array(
			'id_base' => $widget_slug,
			// 'width'   => '400',
		);

		// load widget
		parent::__construct( $widget_slug, 'Recent Post Excerpt', $widget_ops, $control_ops );

	}

	/**
	 * Outputs the HTML for this widget.
	 *
	 * @since 1.0.0
	 * @param array $args An array of standard parameters for widgets in this theme
	 * @param array $instance An array of settings for this widget instance
	 */
	function widget( $args, $instance ) {

		extract( $args );

		// Merge with defaults
		$instance = wp_parse_args( (array) $instance, $this->defaults );

		include( RECENT_POST_DIR . '/inc/widgets/views/html-public-recent-post.php' );

	}

	/**
	 * Deals with the settings when they are saved by the admin. Here is
	 * where any validation should be dealt with.
	 *
	 * @since 1.0.0
	 * @param array $new_instance An array of new settings as submitted by the admin
	 * @param array $old_instance An array of the previous settings
	 * @return array The validated and (if necessary) amended settings
	 */
	function update( $new_instance, $old_instance ) {

		$new_instance['title']          = strip_tags( $new_instance['title'] );
		$new_instance['post_category']  = esc_html( $new_instance['post_category'] );

		return $new_instance;
	}

	/**
	 * Displays the form for this widget on the Widgets page of the WP Admin area.
	 *
	 * @since 1.0.0
	 * @param array $instance An array of the current settings for this widget
	 */
	function form( $instance ) {

		// Merge with defaults
		$instance = wp_parse_args( (array) $instance, $this->defaults );

		include( RECENT_POST_DIR . '/inc/widgets/views/html-admin-recent-post.php' );

	}
}
add_action( 'widgets_init', create_function( '', "register_widget('PB_Recent_Post_Widget');" ) );
