<?php
/**
 * Plugin Name: WP Data Sync - Menu Items
 * Plugin URI:  https://wpdatasync.com/products/
 * Description: Sync menu items form WordPress website to another WordPress website
 * Version:     1.0.0
 * Author:      WP Data Sync
 * Author URI:  https://wpdatasync.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-data-sync-menu-item
 *
 * Package:     WP_DataSync
*/

namespace WP_DataSync\Menu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'plugins_loaded', function() {

	foreach ( glob( plugin_dir_path( __FILE__ ) . 'includes/**/*.php' ) as $file ) {
		require_once $file;
	}

	add_action( 'init', function() {
		load_plugin_textdomain( 'wp-data-sync-menu-item', FALSE, basename( dirname( __FILE__ ) ) . '/languages' );
	} );

} );
