<?php

/**
 * Contat method widget
 *
 * @package    ContactMethodsWidget
 * @author     Patrick Boehner <patrick@patrickboehner.com>
 * @since      1.0.1
 * @copyright  Copyright (c) 2017, Patrick Boehner
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Widget
//**********************

class PB_Contacts_Widget extends WP_Widget {
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
			'title'          => 'Contact Title',
			'business_name'	 => '',
			'business_logo'	 => '',
			'phone_number'   => '+1(555) 555-5555',
			'email_address'  => 'info@exmaple.com',
			'street_address' => '467 Anderson Drive',
			'city_address'	 => 'Somewhere',
			'state_address'  => 'CA',
			'zip_address'    => '93272'
		);

		// Widget Slug
		$widget_slug = 'contacts-widget';
		// widget basics
		$widget_ops = array(
			'classname'   => $widget_slug,
			'description' => 'Display business contact information with appropriate schema.'
		);
		// widget controls
		$control_ops = array(
			'id_base' => $widget_slug,
			//'width'   => '400',
		);
		// load widget
		parent::__construct( $widget_slug, 'Business Information', $widget_ops, $control_ops );
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

		include( CONTACT_METHODS_DIR . '/inc/widgets/views/html-public-contact-methods.php' );

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
		$new_instance['title']			    = strip_tags( $new_instance['title'] );
		$new_instance['business_name']  = sanitize_text_field( $new_instance['business_name'] );
		$new_instance['business_logo']  = esc_url( $new_instance['business_logo'] );
		$new_instance['phone_number']   = esc_attr( $new_instance['phone_number'] );
		$new_instance['email_address']  = sanitize_email( $new_instance['email_address'] );
		$new_instance['street_address'] = sanitize_text_field( $new_instance['street_address'] );
		$new_instance['city_address']   = sanitize_text_field( $new_instance['city_address'] );
		$new_instance['state_address']  = sanitize_text_field( $new_instance['state_address'] );
		$new_instance['zip_address']    = esc_attr( intval( $new_instance['zip_address'] ) );

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

		include( CONTACT_METHODS_DIR . '/inc/widgets/views/html-admin-contact-methods.php' );

	}
}
add_action( 'widgets_init', create_function( '', "register_widget('PB_Contacts_Widget');" ) );
