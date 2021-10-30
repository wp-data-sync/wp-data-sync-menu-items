<?php
/**
 * Filter Post Meta
 *
 * Filter the post meta to include menu item data.
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
 * Filter post_meta for custom nav menus.
 *
 * @param array       $post_meta
 * @param int         $item_id
 * @param ItemRequest $item_request
 *
 * @return array
 */

add_filter( 'wp_data_sync_item_request_post_meta', function( $post_meta, $item_id, $item_request ) {

	if ( 'nav_menu_item' === $item_request->get_post_type() ) {

		$object_id = (int) $post_meta['_menu_item_object_id'];

		switch ( $post_meta['_menu_item_type'] ) {

			case 'post_type' :
				$data = get_the_title( $object_id );
				$url  = get_the_permalink( $object_id );
				break;

			case 'taxonomy' :
				$data = $item_request->format_terms( [ $object_id ], $post_meta['_menu_item_object'] );
				$url  = get_term_link( $object_id, $post_meta['_menu_item_object'] );
				break;

			default :
				$data = [];
				$url  = $post_meta['_menu_item_url'];

		}

		$post_meta['_menu_item_object_id']   = '';
		$post_meta['_menu_item_object_data'] = $data;
		$post_meta['_menu_item_url']         = get_relative_url( $url );

		if ( ! empty( $post_meta['_menu_item_menu_item_parent'] ) ) {

			$parent_id = (int) $post_meta['_menu_item_menu_item_parent'];

			$post_meta['_menu_item_menu_item_parent_data'] = $item_request->get_item( $parent_id );

			$post_meta['_menu_item_menu_item_parent'] = '';

		}

	}

	return $post_meta;

}, 20, 3 );