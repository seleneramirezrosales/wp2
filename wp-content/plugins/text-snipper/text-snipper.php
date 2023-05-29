<?php
/*
Plugin Name: Text Snipper
Plugin URI: http://jordanwebdev.com/text-snipper
Description: Multiline text truncation with ellipses.
Author: Jordan Carter
Author URI: http://jordanwebdev.com
Text Domain: text-snipper
Version: 1.0
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define('TSPATH',   plugin_dir_path(__FILE__));
define('TSURL',   plugin_dir_url(__FILE__));

require_once TSPATH . '/include/options.php';

add_action( 'admin_menu', 'jweb_text_snipper_add_options_page' );

function jweb_text_snipper_add_options_page() {
	add_options_page( __('Text Snipper Settings', 'text-snipper'), __('Text Snipper', 'text-snipper'), 'manage_options', 'text-snipper-settings', 'jweb_text_snipper_options_page' );
}

// Register the script
function jweb_text_snipper_register_script() {
    // Read in existing option value from database
    $opt_val = sanitize_html_class(get_option( 'jweb_text_snipper_class'));
    if ($opt_val) {
        wp_register_script( 'jweb_text_snipper', TSURL . '/js/text-snipper.js', array( 'jquery' ) );

        wp_localize_script( 'jweb_text_snipper', 'snipClass', $opt_val );

        wp_enqueue_script( 'jweb_text_snipper' );
    }
}
add_action( 'wp_enqueue_scripts', 'jweb_text_snipper_register_script' );
