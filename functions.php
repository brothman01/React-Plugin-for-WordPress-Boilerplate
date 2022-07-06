<?php
/**
 * Plugin Name:       React Plugin for WordPress Boilerplate
 * Description:       Just a simple boilerplate to develop a plugin for WordPress that uses react.  This is the minimum.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Ben Rothman
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       react-boilerplate
 *
 * @package           react-plugin-boilerplate
 */


 add_action( 'wp_footer', 'footer_hook' );
 
 function footer_hook() {
 	echo '<div id="render_here">foo</div>';
 }
 
function enqueue_script() {
	wp_enqueue_script( 'test', plugin_dir_url( __FILE__ ) . '/build/index.js', array( 'wp-element' ), '0.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_script' );
