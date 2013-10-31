<?php 
global $post;


$related_page_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'order'			=> 'ASC'
);

if ($post->post_parent == "0") {
	
$related_page_args['post_parent'] = $post->ID;
	
} else {

$related_page_args['post_parent'] = $post->post_parent;	
$related_page_args['exclude'] = $post->ID;	

$parent = get_page($post->post_parent);
}

$related_pages = get_posts($related_page_args);

$practices_page = get_page_by_title('Practice');

$practices_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $practices_page->ID,
'order'			=> 'ASC'
);

$practices = get_posts($practices_args);

$newsletter_page = get_page_by_title('Newsletter');

?>

<aside id="right-sidebar" class="sidebar">

	<?php if (!is_page($newsletter_page->ID)) { ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter Sidebar') ) : ?>
	
	<?php endif; ?>
	<?php } ?>
		
	<?php if ($related_pages  && $parent->ID != $practices_page->ID) { ?>
		
	<div class="sidebar-block">
	
	<?php if ($parent) { ?>
		<h2 class="link"><a href="<?php echo get_permalink($parent->ID); ?>"><?php echo $parent->post_title; ?></a></h2>
	<?php } else { ?>
		<h2 class="link"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>
	<?php }  ?>

		<ul>
			<?php foreach ($related_pages as $page) { ?>
			<li><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if ($practices && $post->ID != $practices_page->ID) { ?>
		
	<div class="sidebar-block">
	
		<h2 class="link"><a href="<?php echo get_permalink($practices_page->ID); ?>"><?php echo $practices_page->post_title; ?></a></h2>

		<ul>
			<?php foreach ($practices as $practice) { ?>
			<li><a href="<?php echo get_permalink($practice->ID); ?>"><?php echo $practice->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Pages Sidebar') ) : ?>
	
	<?php endif; ?>
	
	<div class="sidebar-downloads">
		<a href="#"><img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/download-brochure-example.png" alt="Download Our Brochure: Clinical Negligence"></a>
	</div>
	
	<div class="sidebar-promotion">
		<a href="#"><img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/claims-calculator-promo.png" alt="Try Out Our Claims Calculator"></a>
	</div>
	
</aside>