<?php
/**
 * Create CPT Menu
 *
 */
function diwalirestaurant_cpt_menu()
{

    $labels = array(
        'name' => _x('Menu', 'Post Type General Name', 'diwalirestaurant'),
        'singular_name' => _x('Menu', 'Post Type Singular Name', 'diwalirestaurant'),
        'menu_name' => __('Menu', 'diwalirestaurant'),
        'parent_item_colon' => __('Parent Menu', 'diwalirestaurant'),
        'all_items' => __('Menu', 'diwalirestaurant'),
        'view_item' => __('View Menu', 'diwalirestaurant'),
        'add_new_item' => __('Add New Menu Item', 'diwalirestaurant'),
        'add_new' => __('Add New', 'diwalirestaurant'),
        'edit_item' => __('Edit Menu', 'diwalirestaurant'),
        'update_item' => __('Update Menu', 'diwalirestaurant'),
        'search_items' => __('Search Menu', 'diwalirestaurant'),
        'not_found' => __('Not Found', 'diwalirestaurant'),
        'not_found_in_trash' => __('Not found in Trash', 'diwalirestaurant'),
    );

    $args = array(
        'label' => __('menu', 'diwalirestaurant'),
        'description' => __('Menu', 'diwalirestaurant'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-images-alt2',
    );

    register_post_type('menu', $args);

}

add_action('init', 'diwalirestaurant_cpt_menu');

// Menu Categories
function create_menu_category() {
    $labels = array(
        'name'              => _x( 'Menu Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Menu Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Menu Categories' ),
        'all_items'         => __( 'All Menu Categories' ),
        'parent_item'       => __( 'Parent Menu Category' ),
        'parent_item_colon' => __( 'Parent Menu Category:' ),
        'edit_item'         => __( 'Edit Menu Category' ),
        'update_item'       => __( 'Update Menu Category' ),
        'add_new_item'      => __( 'Add New Menu Category' ),
        'new_item_name'     => __( 'New Menu Category' ),
        'menu_name'         => __( 'Menu Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );
    register_taxonomy( 'menu_category', 'menu', $args );
}
add_action( 'init', 'create_menu_category', 0 );