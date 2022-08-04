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

add_shortcode( 'wp-subscribe', 'wps_subscribe_shortcode' );
function wps_subscribe_shortcode() {
	ob_start();
	?>
	<div class="wp-subscribe-subscribe">
		<h2>Subscribe!</h2>
		<p>Visit our <a href="/subscribe">subscribe page</a> and sign up to get notified</p>
	</div>
	<?php
	return ob_get_clean();
}