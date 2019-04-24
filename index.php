<?php
/*
Plugin Name: WP Terms Popup
Plugin URI: http://termsplugin.com
Description: Make your visitors agree to your terms and conditions before entering your website.
Version: 0.1.0
Author: Tentenbiz
Author URI: http://tentenbiz.com
*/

function terms_registerStyles () {   
   wp_register_style( 'popupstyle', plugins_url( 'wp-terms-popup/popup-style.css' ) );
   wp_enqueue_style( 'popupstyle' );
}
add_action( 'wp_enqueue_scripts', 'terms_registerStyles', 1 );


function terms_openPopup () {

//wp_get_current_user();

	if ((is_user_logged_in()) && (get_option('termsopt_adminenabled') <> 1)) {}
	else {
		include_once('terms-gateway.php');
	}

}
add_action('get_header', 'terms_openPopup');

require_once('terms-options.php');

?>