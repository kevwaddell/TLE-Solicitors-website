<?php 

add_action( 'init', 'register_cpt_tlw_jobs_cpt' );

function register_cpt_tlw_jobs_cpt() {

	$temp_directory = get_stylesheet_directory_uri();

    $labels = array( 
        'name' => _x( 'Careers', 'tlw_jobs_cpt' ),
        'singular_name' => _x( 'Position', 'tlw_jobs_cpt' ),
        'add_new' => _x( 'Add New', 'tlw_jobs_cpt' ),
        'add_new_item' => _x( 'Add New Position', 'tlw_jobs_cpt' ),
        'edit_item' => _x( 'Edit Position', 'tlw_jobs_cpt' ),
        'new_item' => _x( 'New Position', 'tlw_jobs_cpt' ),
        'view_item' => _x( 'View Position', 'tlw_jobs_cpt' ),
        'search_items' => _x( 'Search Careers', 'tlw_jobs_cpt' ),
        'not_found' => _x( 'No positions found', 'tlw_jobs_cpt' ),
        'not_found_in_trash' => _x( 'No positions found in Trash', 'tlw_jobs_cpt' ),
        'parent_item_colon' => _x( 'Parent Position:', 'tlw_jobs_cpt' ),
        'menu_name' => _x( 'Careers', 'tlw_jobs_cpt' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'TLW Solicitors Careers CPT.',
        'supports' => array( 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => $temp_directory.'/_/img/jobs-icon-sml.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'careers', 
            'with_front' => true,
            'feeds' => true,
            'pages' => true
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'tlw_jobs_cpt', $args );
    
    //remove_post_type_support('tlw_jobs_cpt', 'title');
    
    add_action( 'edit_form_after_title', 'myprefix_jobs_edit_form_after_title' );
	
	function myprefix_jobs_edit_form_after_title() {
		global $current_screen;
		global $post;
		
		//echo '<pre>';print_r($current_screen->id);echo '</pre>';
		
		if ($current_screen->id == 'tlw_jobs_cpt') {;
			
			if ($post->post_title && $post->post_title != "Auto Draft") {
			echo '<h2 style="background-color: #278ab7; color: white; padding-left: 10px; text-shadow: none;">Position: '.$post->post_title.'</h2>';
			} 
		
		}
		
	}
}

/* REMOVE MEDIA BUTTON */
function remove_media_controls() {
    
     global $post;
     
      if($post->post_type == 'tlw_jobs_cpt') {
        remove_action( 'media_buttons', 'media_buttons' );
     }
}
add_action('admin_head','remove_media_controls');

 ?>