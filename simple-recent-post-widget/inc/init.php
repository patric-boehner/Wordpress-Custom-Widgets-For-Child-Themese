<?php
/**
 * Core Functionality Plugin
 *
 * @package    RecentPostWidget
 * @since      2.0.0
 * @copyright  Copyright (c) 2017, Patrick Boehner
 * @license    GPL-2.0+
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Setup
//**********************

// Dont Update Pugin Function
require_once( RECENT_POST_DIR . '/inc/functions/dont-update.php' );
