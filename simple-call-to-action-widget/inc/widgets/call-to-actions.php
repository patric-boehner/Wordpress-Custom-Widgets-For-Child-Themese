<?php

/**
 * Recent post excerpt widget
 *
 * @package    CallToActionWidget
 * @author     Patrick Boehner <patrick@patrickboehner.com>
 * @since      1.0.2
 * @copyright  Copyright (c) 2016, Patrick Boehner
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Widget
//**********************

class PB_CTA_Widget extends WP_Widget {
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
			'title' 				=> 'Call-To-Action',
			'message' 			=> 'This is the featured message that would contain your call to action.',
			'final-message' => '',
			'image_id'			=> '',
			'image_src'			=> '',
			'button' 				=> 'Learn More',
			'link' 					=> 'https://example.com',
			'shortcode' 		=> '',
		);

		// Widget Slug
		$widget_slug = 'call-to-action-widget';
		// widget basics
		$widget_ops = array(
			'classname'   => $widget_slug,
			'description' => esc_html__( 'Display a call to action with support for a link or a form', 'core-functionality' ),
		);
		// widget controls
		$control_ops = array(
			'id_base' => $widget_slug,
			// 'width'   => '400'
		);
		// load widget
		parent::__construct( $widget_slug, 'Call-To-Action', $widget_ops, $control_ops );
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

		// Output public view
		include( CTA_DIR  . '/inc/widgets/views/html-public-call-to-actions.php' );

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
		$new_instance['title']		         	= strip_tags( sanitize_text_field( $new_instance['title'] ) );
		$new_instance['message']         		= sanitize_text_field( $new_instance['message'] );
		$new_instance['final-message'] 			= sanitize_text_field( $new_instance['final-message'] );
		$new_instance['image_id']						= esc_attr( $new_instance['image_id'] );
		$new_instance['image_src']					= esc_url( $new_instance['image_src'] );
		$new_instance['button']             = sanitize_text_field( $new_instance['button'] );
		$new_instance['link']               = esc_url( $new_instance['link'] );
		$new_instance['shortcode']          = stripslashes( wp_filter_post_kses( $new_instance['shortcode'] ) );
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

		// Output admin view
		include( CTA_DIR . '/inc/widgets/views/html-admin-call-to-actions.php' );

	}

}

add_action( 'widgets_init', function() { register_widget( 'PB_CTA_Widget' ); } );
