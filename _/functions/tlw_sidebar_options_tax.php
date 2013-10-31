<?php 
add_action( 'init', 'register_taxonomy_tlw_sidebar_options_tax' );

function register_taxonomy_tlw_sidebar_options_tax() {

    $labels = array( 
        'name' => _x( 'Sidebar options', 'tlw_sidebar_options_tax' ),
        'singular_name' => _x( 'Sidebar option', 'tlw_sidebar_options_tax' ),
        'search_items' => _x( 'Search Sidebar options', 'tlw_sidebar_options_tax' ),
        'popular_items' => _x( 'Popular Sidebar options', 'tlw_sidebar_options_tax' ),
        'all_items' => _x( 'All Sidebar options', 'tlw_sidebar_options_tax' ),
        'parent_item' => _x( 'Parent Sidebar option', 'tlw_sidebar_options_tax' ),
        'parent_item_colon' => _x( 'Parent Sidebar option:', 'tlw_sidebar_options_tax' ),
        'edit_item' => _x( 'Edit Sidebar option', 'tlw_sidebar_options_tax' ),
        'update_item' => _x( 'Update Sidebar option', 'tlw_sidebar_options_tax' ),
        'add_new_item' => _x( 'Add New Sidebar option', 'tlw_sidebar_options_tax' ),
        'new_item_name' => _x( 'New Sidebar option', 'tlw_sidebar_options_tax' ),
        'separate_items_with_commas' => _x( 'Separate sidebar options with commas', 'tlw_sidebar_options_tax' ),
        'add_or_remove_items' => _x( 'Add or remove sidebar options', 'tlw_sidebar_options_tax' ),
        'choose_from_most_used' => _x( 'Choose from the most used sidebar options', 'tlw_sidebar_options_tax' ),
        'menu_name' => _x( 'Sidebar options', 'tlw_sidebar_options_tax' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => false,
        'query_var' => false,
        'capabilities' => array(
            'manage_terms' => 'manage_options',
            'edit_terms' => 'manage_options',
            'delete_terms' => 'manage_options',
            'assign_terms' => 'manage_categories'
        )
    );

    register_taxonomy( 'tlw_sidebar_options_tax', array('page'), $args );
}
 ?>