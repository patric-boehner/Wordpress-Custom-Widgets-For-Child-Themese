<?php
/**
 * Plugin Name: Social Links Widget
 * Plugin URI: https://
 * Description: A simple widget to display social media links with icons. This will normaly be merged within a Core Functionality Plugin.
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
if ( !defined( 'SOCIAL_LINKS_DIR' ) ) {
	define( 'SOCIAL_LINKS_DIR', plugin_dir_path( __FILE__ ) );
}

// Plugin URL
if ( !defined( 'SOCIAL_LINKS_URL' ) ) {
	define( 'SOCIAL_LINKS_URL', plugin_dir_url( __FILE__ ) );
}

// Plugin Root File
if ( !defined( 'SOCIAL_LINKS_FILE' ) ) {
	define( 'SOCIAL_LINKS_FILE', __FILE__ );
}


//* Include Plugin Files
//**********************

// Init
require_once( SOCIAL_LINKS_DIR . '/inc/init.php' );

// Widgets
include_once( SOCIAL_LINKS_DIR . '/inc/widgets/social-links.php' );
