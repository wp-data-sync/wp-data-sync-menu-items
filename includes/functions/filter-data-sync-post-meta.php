<?php
/**
 * Process Data Sync Post Meta
 *
 * Process the post meta to set menu item.
 *
 * @since   1.0.0
 *
 * @package WP_DataSync
 */

namespace WP_DataSync\Menu;

use WP_DataSync\App\DataSync;
use WP_DataSync\App\Log;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Action for post_meta for nav menus.
 *
 * @param int      $item_id
 * @param array    $post_meta
 * @param DataSync $data_sync
 *
 * @return array
 */

add_action( 'wp_data_sync_post_meta', function( $item_id, $post_meta, $data_sync ) {

	if ( 'nav_menu_item' === $data_sync->get_post_type() ) {

		switch ( $post_meta['_menu_item_type'] ) {

			case 'post_type' :
				$post      = get_page_by_title( $post_meta['_menu_item_object_data'], 'OBJECT', $post_meta['_menu_item_object'] );
				$object_id = $post->ID;
				break;

			case 'taxonomy' :
				$term      = array_pop( $post_meta['_menu_item_object_data'] );
				$object_id = $data_sync->set_term( $term, $post_meta['_menu_item_object'] );
				break;

			default :
				$object_id = '';

		}

		update_post_meta( $item_id, '_menu_item_object_id', $object_id );

		Log::write( 'sync-menu-item', $item_id, 'Current Item ID' );

		/**
		 * Set the menu item parents.
		 */

		if ( ! empty( $post_meta['_menu_item_menu_item_parent_data'] ) ) {

			$parent_data =  $post_meta['_menu_item_menu_item_parent_data'];

			$parent_data['primary_id'] = [
				'key'       => '_source_item_id',
				'value'     => $parent_data['source_item_id'],
				'search_in' => 'post_meta'
			];

			$_data_sync = DataSync::instance();
			$_data_sync->set_properties( $parent_data );
			$_data_sync->process();

			$parent_id = $_data_sync->get_post_id();

			update_post_meta( $item_id, '_menu_item_menu_item_parent', $parent_id );

			Log::write( 'sync-menu-item', $parent_id, 'Parent ID' );
			Log::write( 'sync-menu-item', $parent_data, 'Parent Data' );

		}

	}

}, 20, 3 );