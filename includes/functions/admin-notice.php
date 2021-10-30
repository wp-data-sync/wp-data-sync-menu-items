<?php
/**
 * Admin Notice
 *
 * Add an admin notice when the WP Data Sync plugin is not actove.
 *
 * @since   1.0.0
 *
 * @package WP_DataSync
 */

namespace WP_DataSync\Menu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin notice error message.
 */

function admin_notice__error() {

	$message = __( 'NOTICE: The WP Data Sync plugin is required to use WP Data Sync Menu Items', 'wp-data-sync-menu-item' );
	$url     = 'https://wordpress.org/plugins/wp-data-sync/';

	printf(
		'<div class="notice notice-error"><p>%s</p><p><a href="%s" target="_blank">%s</a></p></div>',
		esc_html( $message ),
		esc_url( $url ),
		esc_html( 'WP Data Sync Plugin' )
	);

}

if ( ! defined( 'WPDSYNC_VERSION' ) ) {
	add_action( 'admin_notices', 'WP_DataSync\Menu\admin_notice__error' );
}
