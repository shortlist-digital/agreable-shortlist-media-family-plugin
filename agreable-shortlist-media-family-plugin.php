<?php
/**
* @wordpress-plugin
* Plugin Name:Agreable Shortlist Media Family Plugin
* Plugin URI: http://github.com/shortlist-digital/agreable-shortlist-media-family-plugin
* Description: A plugin for custom widgets and fields that the Family site needs
* Version: 1.0.0
* Author: Shortlist Studio
* Author URI: http://shortlist.studio
* License: MIT
*/
defined( 'ABSPATH' ) or die( ':)' );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// add_action( 'plugins_loaded', function() {
	// (new ShortlistFamily\CustomFields\PeopleGrid)->register_fields();
	// $acf = new ShortlistFamily\CustomFields\PeopleGrid();
	// $acf->register_hooks();
	// $acf->register_fields();
// });
