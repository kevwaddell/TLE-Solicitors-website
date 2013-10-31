<?php 
global $post;

$panels_args = array(
	'sort_column' => 'menu_order',
	'include' => array(32, 34, 38, 36, 312),
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$panels = get_pages($panels_args);
	
$home_screen_seen = $_COOKIE["home_screen"];
$home_screen_class = "home-screen-enabled";

if ($home_screen_seen) {
$home_screen_class = "home-screen-disabled";
}


?>