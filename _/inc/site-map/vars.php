<?php 

$practices_page = get_page_by_title('Practice Areas');

$practices_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $practices_page->ID,
'order'			=> 'ASC'
);

$practices = get_posts($practices_args);

//echo '<pre>';print_r($practices);echo '</pre>';

$company_page = get_page_by_title('Company Overview');

$company_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $company_page->ID,
'order'			=> 'ASC'
);

$company_pages = get_posts($company_args);

$rescources_args = array(
'post_type'		=> 'page',
'orderby'		=> 'title',
'include'		=> array(42, 44, 49, 259, 109, 413, 354),
'order'			=> 'ASC'
);

$rescources_pages = get_posts($rescources_args);

$legal_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'include'		=> array(53, 51, 55),
'order'			=> 'ASC'
);

$legal_pages = get_posts($legal_args);

$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);

$topics_nopractice_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'parent'		=> 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc',
	'exclude'		=> array(16, 17, 18, 33, 37)
); 
$topics_nopractice = get_categories($topics_nopractice_args);

$topics_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'parent'		=> 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc',
	'exclude'		=> array(1, 6, 5)
); 
$topics = get_categories($topics_args);

$media_info_page = get_page_by_title('Media information');

//echo '<pre>';print_r($topics);echo '</pre>';

 ?>