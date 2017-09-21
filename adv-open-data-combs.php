<?php
/*
Plugin Name: ADV-Open-Data-Combs
Plugin URI: https://github.com/advbus/adv-open-data-combs/
Description: ADV Open Data Combs
Version: 1.0.1
Author: Christian Buchhas
Author URI: https://www.wien.gv.at
Minimum WordPress Version Required: 3.8
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'ADV_ODC_PRIV_WP_CONTENT_URL', site_url() . '/wp-content' );
define( 'ADV_ODC_PRIV_WP_CONTENT_DIR', content_url() . 'wp-content' );
define( 'ADV_ODC_PRIV_WP_PLUGIN_URL', plugins_url() );
define( 'ADV_ODC_PRIV_WP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

define( 'ADV_ODC_PLUGIN_URL', ADV_ODC_PRIV_WP_PLUGIN_URL . '/adv-open-data-combs/' );
define( 'ADV_ODC_PLUGIN_JS_URL', ADV_ODC_PLUGIN_URL . 'js/' );
define( 'ADV_ODC_PLUGIN_CSS_URL', ADV_ODC_PLUGIN_URL . 'css/' );

if ( ! defined( 'ADV_ODC_SLUG' ) ) {
	define( 'ADV_ODC_SLUG', 'open-data-combs' );
}

global $wp_version;
if ( version_compare( $wp_version, "3.8", "<" ) ) {
	exit( '[ADV-OpenDataCombs-Plugin - ERROR]: At least WordPress version 3.8 is required for this plugin!' );
}

// include all codings
include_once( 'adv-odc-shortcodes.php' );
include_once( 'adv-odc-register-js-css.php' );

?>
