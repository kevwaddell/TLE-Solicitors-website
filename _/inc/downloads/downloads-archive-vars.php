<?php 
$post_type = get_query_var( 'post_type' ); 
$posts_per_page = get_query_var('posts_per_page'); 
$paged = get_query_var( 'paged' ); 
$today_raw = time();
$today = date("Ymd", $today_raw);
//echo '<pre>';print_r($today);echo '</pre>';

$args = array(
	'post_type' => $post_type,
	'posts_per_page' => $posts_per_page,
	'paged' => $paged,
	'meta_key' => 'download_file',
	'orderby'	=> 'title',
	'order'	=> 'ASC'
);
//echo '<pre>';print_r($wp_query);echo '</pre>';
$wp_query = new WP_Query( $args );
?>