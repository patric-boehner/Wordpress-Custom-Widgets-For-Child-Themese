<?php
/**
 * Plugin Name: Recent Post Widget
 * Plugin URI: https://
 * Description: A simple widget to display the most recent post from a cateogry you select. This will normaly be merged within a Core Functionality Plugin.
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
if ( !defined( 'RECENT_POST_DIR' ) ) {
	define( 'RECENT_POST_DIR', plugin_dir_path( __FILE__ ) );
}

// Plugin URL
if ( !defined( 'RECENT_POST_URL' ) ) {
	define( 'RECENT_POST_URL', plugin_dir_url( __FILE__ ) );
}

// Plugin Root File
if ( !defined( 'RECENT_POST_FILE' ) ) {
	define( 'RECENT_POST_FILE', __FILE__ );
}


//* Include Plugin Files
//**********************

// Init
require_once( RECENT_POST_DIR . '/inc/init.php' );

// Widgets
include_once( RECENT_POST_DIR . '/inc/widgets/recent-post.php' );
