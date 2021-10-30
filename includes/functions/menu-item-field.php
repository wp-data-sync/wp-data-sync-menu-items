<?php
/**
 * Menu Item Field
 *
 * Add menu item field and save data for field.
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
 * Add menu item field.
 *
 * @param int $item_id
 */
add_action( 'wp_nav_menu_item_custom_fields', function( $item_id ) {

	if ( ! $source_item_id = get_post_meta( $item_id, '_source_item_id', TRUE ) ) {
		$source_item_id = $item_id;
	}

	printf( '<p>' );
	printf( 
		'<label for="source-item-id-%d">%s</label>',
		esc_attr( $item_id ), 
		esc_html( 'Source Item ID' ) 
	);
	printf(
		'<input type="number" name="source_item_id[%d]" id="source-item-id-%d" value="%d" class="widefat" />',
		esc_attr( $item_id ),
		esc_attr( $item_id ),
		esc_attr( $source_item_id )
	);
	printf( '</p>' );

}, 10 );

/**
 * Save menu item field value.
 *
 * @param int $menu_id
 * @param int $item_id
 */

add_action( 'wp_update_nav_menu_item', function( $menu_id, $item_id ) {
	
	if ( ! empty( $_POST['source_item_id'][ $item_id ]  ) ) {
		$source_item_id = intval( $_POST['source_item_id'][ $item_id ] );
	} else {
		$source_item_id = $item_id;
	}

	update_post_meta( $item_id, '_source_item_id', $source_item_id );
	
}, 10, 2 );