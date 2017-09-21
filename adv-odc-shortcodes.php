<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// add the WP shortcode
add_shortcode( 'adv_odc_show', 'advODC_Show' );

function advODC_Show( $atts ) {
	echo '<div id="board"><section class="endcard"></section></div>';
}

?>
