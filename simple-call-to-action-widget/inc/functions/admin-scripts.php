<?php

/**
 * Load Admin Scripts
 *
 * https://pippinsplugins.com/loading-scripts-correctly-in-the-wordpress-admin/
 *
 * @package    CallToActionWidget
 * @author     Patrick Boehner <patrick@patrickboehner.com>
 * @since      1.0.2
 * @copyright  Copyright (c) 2016, Patrick Boehner
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


// Add Widget Scripts
add_action( 'admin_enqueue_scripts', 'cf_load_admin_widget_scripts' );
function cf_load_admin_widget_scripts( $hook ) {

  if ( $hook != 'widgets.php' ) {
    return;
  }

  wp_enqueue_script( 'add-image-script', plugins_url( 'assets/js/single-image-widget.js' , dirname(__FILE__) ) );

}
