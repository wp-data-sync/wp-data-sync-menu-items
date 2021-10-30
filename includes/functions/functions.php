<?php
/**
 * Functions
 *
 * Functions related to menu items.
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
 * Get relative URL.
 *
 * @param $url
 *
 * @return string|string[]
 */

function get_relative_url( $url ) {
	return str_replace( untrailingslashit( home_url() ), '', $url );
}