<?php 

$team_page = get_page_by_title("Our Team");
$social_respone_page = get_page_by_title("Corporate Social Responsibility");
$social_respone_page_content = get_field("content", $social_respone_page->ID);

$children_args = array(
'post_type'		=> 'page',
'post_parent'	=> $post->ID,
'orderby'		=> 'menu_order',
'exclude'		=> array($social_respone_page->ID,$team_page->ID),
'order'			=> 'ASC',
'posts_per_page'	=> -1
);
$children = get_posts($children_args);

$images = get_field("images");
$content = get_field("content");
	?>	