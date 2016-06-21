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

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;
});



// add_filter('sage/wrap_base', __NAMESPACE__ . '\\sage_wrap_events'); // Add our function to the sage/wrap_base filter

// function sage_wrap_events($templates) {
// 	print_r(get_post_meta());
// 	 array_unshift($templates, 'event-template.php'); // Shift the template to the front of the array
// 	return $templates; // Return our modified array with base-$cpt.php at the front of the queue
// }
