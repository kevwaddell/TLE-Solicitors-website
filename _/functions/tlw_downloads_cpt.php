<?php 

add_action( 'init', 'register_cpt_tlw_downloads_cpt' );

function register_cpt_tlw_downloads_cpt() {

	$temp_directory = get_stylesheet_directory_uri();

    $labels = array( 
        'name' => _x( 'Downloads', 'tlw_downloads_cpt' ),
        'singular_name' => _x( 'Download', 'tlw_downloads_cpt' ),
        'add_new' => _x( 'Add New', 'tlw_downloads_cpt' ),
        'add_new_item' => _x( 'Add New Download', 'tlw_downloads_cpt' ),
        'edit_item' => _x( 'Edit Download', 'tlw_downloads_cpt' ),
        'new_item' => _x( 'New Download', 'tlw_downloads_cpt' ),
        'view_item' => _x( 'View Download', 'tlw_downloads_cpt' ),
        'search_items' => _x( 'Search Downloads', 'tlw_downloads_cpt' ),
        'not_found' => _x( 'No downloads found', 'tlw_downloads_cpt' ),
        'not_found_in_trash' => _x( 'No downloads found in Trash', 'tlw_downloads_cpt' ),
        'parent_item_colon' => _x( 'Parent Download:', 'tlw_downloads_cpt' ),
        'menu_name' => _x( 'Downloads', 'tlw_downloads_cpt' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'TLW Solicitors Downloads CPT.',
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => $temp_directory.'/_/img/downloads-icon-sml.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'downloads', 
            'with_front' => true,
            'feeds' => true,
            'pages' => true
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'tlw_downloads_cpt', $args );
}

?>