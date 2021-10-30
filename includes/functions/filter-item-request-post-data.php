<?php
/**
 * Filter Post Data
 *
 * Filter the post data to include menu item data.
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
 * Filter post_data for custom nav menus.
 *
 * Include the object title in to posts data.
 *
 * @param array       $post_data
 * @param int         $item_id
 * @param ItemRequest $item_request
 *
 * @return array
 */

add_filter( 'wp_data_sync_item_request_post_data', function( $post_data, $item_id, $item_request ) {

	if ( 'nav_menu_item' === $item_request->get_post_type() ) {

		if ( ! empty( $post_data['post_title'] ) ) {
			return $post_data;
		}

		$object_id   = (int) get_post_meta( $item_id, '_menu_item_object_id', TRUE );
		$object_type = get_post_meta( $item_id, '_menu_item_type', TRUE );

		switch ( $object_type ) {

			case 'post_type' :
				$title = get_the_title( $object_id );
				break;

			case 'taxonomy' :
				$taxonomy = get_post_meta( $item_id, '_menu_item_object', TRUE );
				if ( $term = get_term_by( 'id', $object_id, $taxonomy ) ) {
					$title = $term->name;
				}
				break;

			default :
				$title = '';

		}

		$post_data['post_title'] = $title;

	}

	return $post_data;

}, 20, 3 );