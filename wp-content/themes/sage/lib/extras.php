<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */

function body_class($classes) {
	// Add page slug if it doesn't exist
	if (is_single() || is_page() && !is_front_page()) {
		if (!in_array(basename(get_permalink()), $classes)) {
			$classes[] = basename(get_permalink());
		}
	}

	// Add class if sidebar is active
	if (Setup\display_sidebar()) {
		$classes[] = 'sidebar-primary';
	}

	return $classes;
}
add_filter('body_class', __NAMESPACE__ .'\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
	return ' &hellip; <a href="'.get_permalink().'">'.__('Continued', 'sage').'</a>';
}
add_filter('excerpt_more', __NAMESPACE__ .'\\excerpt_more');

/**
* Returns all child nav_menu_items under a specific parent
*
* @param int the parent nav_menu_item ID
* @param array nav_menu_items
* @param bool gives all children or direct children only
* @return array returns filtered array of nav_menu_items
*/
function get_nav_menu_item_children( $parent_id, $nav_menu_items, $depth = true ) {
$nav_menu_item_list = array();
foreach ( (array) $nav_menu_items as $nav_menu_item ) {
if ( $nav_menu_item->menu_item_parent == $parent_id ) {
$nav_menu_item_list[] = $nav_menu_item;
if ( $depth ) {
if ( $children = get_nav_menu_item_children( $nav_menu_item->ID, $nav_menu_items ) )
$nav_menu_item_list = array_merge( $nav_menu_item_list, $children );
}
}
}
return $nav_menu_item_list;
}