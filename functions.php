<?php 

if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_register_style( 'styles', get_stylesheet_uri() );;
			wp_register_script( 'tool-tip', get_stylesheet_directory_uri() . '/_/js/bootstrap-tooltip.js', array('jquery', 'jquery-ui-core', 'bootstrap-all-min'), '1.0.0', true );
			wp_register_script( 'jquery-cookie', get_stylesheet_directory_uri() . '/_/js/jquery.cookie.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'scroll-end', get_stylesheet_directory_uri() . '/_/js/scrollEnd.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'slim-scroll', get_stylesheet_directory_uri() . '/_/js/jquery.slimscroll.min.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions.js', array('jquery', 'jquery-ui-core', 'bootstrap-all-min', 'tool-tip', 'jquery-cookie', 'scroll-end', 'slim-scroll'), '1.0.1', true );
			wp_register_script( 'touch-punch', get_stylesheet_directory_uri() . '/_/js/jquery.ui.touch-punch.min.js', array('jquery-ui-core'), '1.0.0', true );
			//wp_register_script( 'img-fit', get_stylesheet_directory_uri() . '/_/js/jquery.imagefit.js', array('jquery'), '1.0.0', true );
			
			wp_enqueue_script('jquery-ui-accordion');
			wp_enqueue_style('styles');
			wp_enqueue_script('tool-tip');
			wp_enqueue_script('jquery-cookie');
			wp_enqueue_script('slim-scroll');
			wp_enqueue_script('functions');
			wp_enqueue_script('touch-punch');
			//wp_enqueue_script('img-fit');
		}
	}
	core_mods();
}

add_theme_support('html5', array('search-form'));


if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'side_menu' => 'Side Menu',
			  'quick_links_menu' => 'Footer Quick Links',
			  'social_links_menu' => 'Footer Social Links'
			)
		);
}

if ( function_exists( 'register_sidebar' ) ) {
	
	$pages_sb_args = array(
	'name'          => "Pages Sidebar",
	'id'            => "pages-sidebar",
	'description'   => 'Sidebar for pages',
	'class'         => 'right-sidebar',
	'before_widget' => '<div id="%1$s" class="sidebar-block widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	);
	
	$blog_sb_args = array(
	'name'          => "Blog Sidebar",
	'id'            => "blog-sidebar",
	'description'   => 'Sidebar for blog',
	'class'         => 'right-sidebar',
	'before_widget' => '<div id="%1$s" class="sidebar-block widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	);
	
	$newsletter_sb_args = array(
	'name'          => "Newsletter Sidebar",
	'id'            => "newsletter-sidebar",
	'description'   => 'Sidebar for Newsletter',
	'class'         => 'right-sidebar',
	'before_widget' => '<div id="%1$s" class="sidebar-block widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	);
	
	$newsletter_content_args = array(
	'name'          => "Newsletter Content",
	'id'            => "newsletter-content",
	'description'   => 'Newsletter widget for main content',
	'class'         => 'content-widget',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	);
	
	register_sidebar( $pages_sb_args );
	register_sidebar( $blog_sb_args );
	register_sidebar( $newsletter_sb_args );
	register_sidebar( $newsletter_content_args );
}

/* DE-REGISTER STYLES */
include (STYLESHEETPATH . '/_/functions/de-register-styles.php');

/* REGISTER CAREERS CPT */
include (STYLESHEETPATH . '/_/functions/tlw_carreers_cpt.php');

/* REGISTER DOWNLOADS CPT */
include (STYLESHEETPATH . '/_/functions/tlw_downloads_cpt.php');

/* REGISTER FEEDBACK CPT */
include (STYLESHEETPATH . '/_/functions/tlw_feedback_cpt.php');

/* REGISTER SIDEBAR OPTIONS TAX */
//include (STYLESHEETPATH . '/_/functions/tlw_sidebar_options_tax.php');

/* REMOVE META BOXES */
include (STYLESHEETPATH . '/_/functions/remove_meta_boxes.php');

/* AFC OPTIONS FUNCTIONS */
include (STYLESHEETPATH . '/_/functions/afc_options_functions.php');

/* TWITTER FEED */
include (STYLESHEETPATH . '/_/functions/twitter-feed.php');

/* FORM ACTIONS */
//include (STYLESHEETPATH . '/_/functions/form_functions.php');
include (STYLESHEETPATH . '/_/functions/gform_functions.php');

/* CHANGE CPT ICONS */
include (STYLESHEETPATH . '/_/functions/change-cpt-icons.php');

/* AFC SAVE FUNCTIONS */
include (STYLESHEETPATH . '/_/functions/afc_save_post.php');

holder_add_theme( 'wordpress', '333333', 'eeeeee' );
holder_add_theme( 'lite-gray', '888888', 'eeeeee' );
 ?>