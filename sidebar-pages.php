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

<aside id="right-sidebar" class="sidebar">

	<?php 
	$freephone_box_active = get_field('sb_freephone_active', 'option');
	 ?>
	 
	 <?php 
	 if ($freephone_box_active) { 
		 $freephone_box_title =  get_field('freephone_box_title', 'option');
		 $freephone_box_number = get_field('freephone_tel', 'option');
	 ?>
	 <div class="sidebar-freephone">
		<h3><?php echo $freephone_box_title; ?></h3>
		<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
	</div>
	 <?php } ?>
	
	<?php if (get_field("sidebar", $post->ID)) : 
		
		//echo '<pre>';print_r(get_field("sidebar", $post->ID));echo '</pre>';
	?>
	
	<?php foreach( get_field("sidebar", $post->ID) as $sb_item ): ?>
		
		<?php if ($sb_item['acf_fc_layout'] == "sb_contact_form") : 	?>
		
		<div class="sidebar-block hidden-xs hidden-sm">
			<h2><?php echo $sb_item['form_title']; ?></h2>
		
			<div class="block-content">
			<?php gravity_form($sb_item['form']->id, false, true, false, null, true); ?>
			</div>
			
		</div>
		
		<?php endif; ?>
		
		<?php if ($sb_item['acf_fc_layout'] == "sidebar_img") :
		$sb_img_id = $sb_item['sb_img'];
		$sb_img_src = wp_get_attachment_image_src($sb_img_id,'sidebar-img');
		$sb_img_url = $sb_img_src[0];
		 ?>
		
		<div class="sidebar-image hidden-xs hidden-sm">
			<img src="<?php echo $sb_img_url; ?>" alt="<?php echo $logo['sb_img_alt']; ?>">
		</div>
		
		<?php endif; ?>

		
		<?php if ($sb_item['acf_fc_layout'] == "sb_download") : 
		$download = $sb_item['dl_file'];
		$file = get_field('download_file', $download->ID);
		$sb_img = get_field('sidebar_img', $download->ID);
		//echo '<pre>';print_r($download->ID);echo '</pre>';	
		?>

		<div class="sidebar-downloads hidden-xs hidden-sm">
		<a href="<?php echo $file; ?>" title="download: <?php echo $download->post_title; ?>" target="_blank">
			<img src="<?php echo $sb_img['sizes']['sidebar-img']; ?>" alt="<?php echo $download->post_title; ?>" width="<?php echo $sb_img['sizes']['sidebar-img-widht']; ?>" height="<?php echo $sb_img['sizes']['sidebar-img-height']; ?>">
		</a>
		</div>	
		
		<?php endif; ?>
	
			
	<?php endforeach; ?>
	
	<?php endif; ?>	
	
	<?php if (!is_page($newsletter_page->ID)) { ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter Sidebar') ) : ?>
	
	<?php endif; ?>
	<?php } ?>
		
	<?php if ($related_pages  && $parent->ID != $practices_page->ID) { ?>
		
	<div class="sidebar-block hidden-xs hidden-sm">
	
	<?php if ($parent) { ?>
		<h2 class="link"><a href="<?php echo get_permalink($parent->ID); ?>"><?php echo $parent->post_title; ?></a></h2>
	<?php } else { ?>
		<h2 class="link"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>
	<?php }  ?>

		<ul class="links">
			<?php foreach ($related_pages as $page) { ?>
			<li<?php echo ($page->ID == $post->ID)? ' class="current-page"':''; ?>><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if ($downloads && is_single() && $post->post_type == "tlw_downloads_cpt") { ?>
		
	<div class="sidebar-block hidden-xs hidden-sm">
	
		<h2 class="link"><a href="<?php echo get_permalink($downloads_page->ID); ?>"><?php echo $downloads_page->post_title; ?></a></h2>

		<ul class="links">
			<?php foreach ($downloads as $download) { ?>
			<li<?php echo ($download->ID == $post->ID)? ' class="current-parent"':''; ?>><a href="<?php echo get_permalink($download->ID); ?>"><?php echo $download->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if ($practices && $post->ID != $practices_page->ID) { ?>
		
	<div class="sidebar-block hidden-xs hidden-sm">
	
		<h2 class="link"><a href="<?php echo get_permalink($practices_page->ID); ?>"><?php echo $practices_page->post_title; ?></a></h2>

		<ul class="links">
			<?php foreach ($practices as $practice) { ?>
			<li<?php echo ($practice->ID == $post->post_parent || $practice->ID == $post->ID)? ' class="current-parent"':''; ?>><a href="<?php echo get_permalink($practice->ID); ?>"><?php echo $practice->post_title; ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Pages Sidebar') ) : ?>
	
	<?php endif; ?>
	
</aside>