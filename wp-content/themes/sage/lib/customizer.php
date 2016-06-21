<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

function navsubmenu(){
	$section_id = empty( $post->ancestors ) ? $post->ID : end( $post->ancestors );
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ 'primary' ] ); // 'primary' is our nav menu's name
    $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'post_parent' => $section_id ) );
    if( !empty( $menu_items ) ) {
        echo '<ul class="section-submenu">';
        foreach( $menu_items as $menu_item ) {
            echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        echo '</ul>';
    }
}
add_filter('navsubmenu', __NAMESPACE__ .'\\navsubmenu');

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
