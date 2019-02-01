<?php
/**
 * Core Functionality Plugin
 *
 * @package    CoreFunctionality
 * @since      2.0.0
 * @copyright  Copyright (c) 2016, Patrick Boehner
 * @license    GPL-2.0+
 */


//* Block Acess
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Setup
//**********************

// Dont Update Pugin Function
require_once( CTA_DIR . '/inc/functions/dont-update.php' );
require_once( CTA_DIR . '/inc/functions/admin-scripts.php' );
