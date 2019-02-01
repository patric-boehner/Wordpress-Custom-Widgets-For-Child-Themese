<?php
/**
 * Plugin Name: Contact Method Widget
 * Plugin URI: https://
 * Description: A simple widget to display business contact method with schema. This will normaly be merged within a Core Functionality Plugin.
 * Version: 1.0.1
 * Author: Patrick Boehner
 * Author URI: http://www.patrickboehner.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This plugin is inspired and originaly cam from Bill Erickson's own example core plugin.
 * Original Project: https://github.com/billerickson/Core-Functionality
 *
 */

//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Setup
//**********************

// Plugin Path
if ( !defined( 'CONTACT_METHODS_DIR' ) ) {
	define( 'CONTACT_METHODS_DIR', plugin_dir_path( __FILE__ ) );
}

// Plugin URL
if ( !defined( 'CONTACT_METHODS_URL' ) ) {
	define( 'CONTACT_METHODS_URL', plugin_dir_url( __FILE__ ) );
}

// Plugin Root File
if ( !defined( 'CONTACT_METHODS_FILE' ) ) {
	define( 'CONTACT_METHODS_FILE', __FILE__ );
}


//* Include Plugin Files
//**********************

// Init
require_once( CONTACT_METHODS_DIR . '/inc/init.php' );

// Widgets
include_once( CONTACT_METHODS_DIR . '/inc/widgets/contact-methods.php' );
