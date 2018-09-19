<?php
/**
* @wordpress-plugin
* Plugin Name:Agreable Shortlist Media Family Plugin
* Plugin URI: http://github.com/shortlist-digital/agreable-shortlist-media-family-plugin
* Description: A plugin for people grid widget
* Version: 1.0.0
* Author: Shortlist Studio
* Author URI: http://shortlist.studio
* License: MIT
*/
defined( 'ABSPATH' ) or die( ':)' );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

require __DIR__ . '/app/CustomFields.php';