<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// we need newer and more libraries...
// wp_deregister_script( 'jquery' );
// wp_deregister_script( 'bootstrap' );
// wp_deregister_script( 'idle' );
// wp_deregister_script( 'waitforimages' );

wp_register_script( 'adv-odc-jquery', ADV_ODC_PLUGIN_JS_URL . 'lib/' . "jquery-2.1.1.min.js", false, '2.1.1' );
wp_register_script( 'adv-odc-waitforimages', ADV_ODC_PLUGIN_JS_URL . 'lib/' . 'jquery.waitforimages.min.js', array( 'adv-odc-jquery' ) );
wp_register_script( 'adv-odc-bootstrap', ADV_ODC_PLUGIN_JS_URL . 'lib/' . 'bootstrap.min.js', array( 'adv-odc-waitforimages' ), '3.3.6' );
wp_register_script( 'adv-odc-idle', ADV_ODC_PLUGIN_JS_URL . 'lib/' . 'idle.js', array( 'adv-odc-bootstrap' ) );

wp_register_script( 'adv-odc-lang-de-DE', ADV_ODC_PLUGIN_JS_URL . 'lang/de-DE/' . 'adv-odc-i18n.js', array( 'adv-odc-idle' ) );
wp_register_script( 'adv-odc-lang-en-US', ADV_ODC_PLUGIN_JS_URL . 'lang/en-US/' . 'adv-odc-i18n.js', array( 'adv-odc-lang-de-DE' ) );


wp_register_script( 'adv-odc-config', ADV_ODC_PLUGIN_JS_URL . 'adv-odc-config.js', array( 'adv-odc-lang-en-US' ), '1.0.0' );
wp_register_script( 'adv-odc-app', ADV_ODC_PLUGIN_JS_URL . 'adv-odc-app.js', array( 'adv-odc-config' ), '1.0.0' );

// ...and some styles
wp_register_style( 'adv-odc-app', ADV_ODC_PLUGIN_CSS_URL . 'adv-odc-app.css' );

function adv_odc_enqueue_scripts_and_styles() {
	if ( is_page( ADV_ODC_SLUG ) ) {
		wp_localize_script( 'adv-odc-app', 'advODCBaseUrl', array(
			'pluginurl' => ADV_ODC_PLUGIN_URL
		) );
		wp_enqueue_script( 'adv-odc-app' );
		wp_enqueue_style( 'adv-odc-app' );
	}
}

add_action( 'wp_enqueue_scripts', 'adv_odc_enqueue_scripts_and_styles' );
