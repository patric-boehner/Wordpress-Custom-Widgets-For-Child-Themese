<?php

/**
 * Recent post excerpt widget
 *
 * @package    SocialLinksWidget
 * @author     Patrick Boehner <patrick@patrickboehner.com>
 * @since      1.0.3
 * @copyright  Copyright (c) 2017, Patrick Boehner
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Widget
//**********************

class PB_Social_Widget extends WP_Widget {
	/**
	* Constructor
	* @return void
	**/
	function __construct() {
		  $widget_ops = array(
				'classname' => 'widget_social_links',
				'description' => 'A simpel set of social media links with icons'
			);
			  parent::__construct( 'social-widget', 'Social Media Links', $widget_ops );
		 }
	/**
	 * Social Options
	 *
	 */
	function social_options() {
		return array(
			'facebook'  => 'Facebook',
			'youtube'	=> 'Youtube',
			'vimeo'		=> 'Vimeo',
			'linkedin'  => 'LinkedIn',
			'instagram' => 'Instagram',
			'twitter'   => 'Twitter',
			'pinterest' => 'Pinterest',
			'yelp'      => 'Yelp',
		);
	}
	/**
	* Outputs the HTML for this widget.
	* Includes schema for soical media porfiles as outlined by google
	*
	* @param array  An array of standard parameters for widgets in this theme
	* @param array  An array of settings for this widget instance
	* @return void Echoes it's output
	**/
	function widget( $args, $instance ) {
		extract( $args, EXTR_SKIP );

		include( SOCIAL_LINKS_DIR . '/inc/widgets/views.php/html-public-social-links.php' );

	}
	/**
	* Deals with the settings when they are saved by the admin. Here is
	* where any validation should be dealt with.
	*
	* @param array  An array of new settings as submitted by the admin
	* @param array  An array of the previous settings
	* @return array The validated and (if necessary) amended settings
	**/
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );

		$socials = $this->social_options();
		foreach( $socials as $key => $label ) {
			$instance[$key] = esc_url( $new_instance[$key] );
		}
		return $instance;
	}
	/**
	* Displays the form for this widget on the Widgets page of the WP Admin area.
	*
	* @param array  An array of the current settings for this widget
	* @return void Echoes it's output
	**/
	function form( $instance ) {

		include( SOCIAL_LINKS_DIR . '/inc/widgets/views.php/html-admin-social-links.php' );

	}
}
//* Register the widget
add_action( 'widgets_init', 'pb_register_social_widget' );
function pb_register_social_widget() {

	register_widget('PB_Social_Widget');

}
