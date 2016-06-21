<?php
add_filter('navsubmenu', __NAMESPACE__ .'\\get_navsubmenu');
function navsubmenu(){
	$section_id = empty( $post->ancestors ) ? $post->ID : end( $post->ancestors );
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ 'primary_navigation' ] ); // 'primary' is our nav menu's name
    $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'post_parent' => $section_id ) );
    if( !empty( $menu_items ) ) {
        echo '<ul class="section-submenu">';
        foreach( $menu_items as $menu_item ) {
            echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        echo '</ul>';
    }
}