<?php
/**
 * Plugin Name:       Gutenpride
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenpride
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
 
 add_action( 'wp_footer', 'footer_hook' );
 
 function footer_hook() {
 	echo '<div id="render_here">foo</div>';
 }
 
function enqueue_scripts() {
	wp_enqueue_script( 'test', plugin_dir_url( __FILE__ ) . '/build/index.js', array( 'wp-element' ), '0.1.0', true );
}
add_action( 'wp_enqueue_script', 'enqueue_scripts' );
