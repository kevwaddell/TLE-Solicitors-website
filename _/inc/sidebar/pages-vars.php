<?php 
global $post;

if (is_post_type_archive('tlw_jobs_cpt')) {
$post = get_page_by_title('Careers');	
}

$related_page_args = array(
'post_type'			=> 'page',
'orderby'			=> 'menu_order',
'order'				=> 'ASC',
'posts_per_page'	=>	-1
);

if ($post->post_parent == "0") {
	
$related_page_args['post_parent'] = $post->ID;
	
} else {

$related_page_args['post_parent'] = $post->post_parent;	

$parent = get_page($post->post_parent);
}

$related_pages = get_posts($related_page_args);

$practices_page = get_page_by_title('Practice Areas');

$practices_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $practices_page->ID,
'order'			=> 'ASC',
'posts_per_page'	=>	-1
);

$practices = get_posts($practices_args);

$newsletter_page = get_page_by_title('Newsletter');

$downloads_page = get_page_by_title('Downloads');

$downloads_args = array(
'post_type'		=> 'tlw_downloads_cpt',
'orderby'		=> 'title',
'order'			=> 'ASC',
'posts_per_page'	=>	-1
);

$downloads = get_posts($downloads_args);

?>