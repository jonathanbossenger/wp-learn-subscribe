<?php
/**
 * Plugin Name:     WP Learn Subscribe
 * Description:     Using a shortcode, render a subscribe area anywhere on your site
 * Version:         1.2.0
 * Text Domain:     wp-subscribe
 * License:         GPLv2 or later
 *
 * @package         WP_Learn_Subscribe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_shortcode( 'wp-subscribe', 'wpl_subscribe_shortcode' );
function wpl_subscribe_shortcode() {
	ob_start();
	?>
	<div class="wp-subscribe-subscribe">
		<h2>Subscribe!</h2>
		<p>Visit our <a href="/subscribe">subscribe page</a> and sign up to get notified</p>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
add_action( 'init', 'wpl_subscribe_block_init' );
function wpl_subscribe_block_init() {
	register_block_type( __DIR__ . '/build' );
}