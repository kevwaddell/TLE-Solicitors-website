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
	//echo '<pre>';print_r($sb_item);echo '</pre>';
	$sb_img_object = $sb_item['sb_img'];
	//echo '<pre>';print_r($sb_img_object);echo '</pre>';
	$sb_img_url = $sb_img_object['sizes']['sidebar-img'];
	$sb_img_alt = $sb_img_object['title'];
	$sb_link_type = $sb_item['link_type'];
	 ?>
	 
	<?php if ($sb_link_type == "None") :?>
	
	<div class="sidebar-image hidden-xs hidden-sm">
		<img src="<?php echo $sb_img_url; ?>" alt="<?php echo $sb_img_alt; ?>">
	</div>
	
	<?php else: ?>
	
	<?php 
	if ($sb_link_type == "Internal") { 
	 $sb_img_link = $sb_item['int_url'];
	 } else { 
	 $sb_img_link = $sb_item['ext_url'];
	 } 
	?>
	
	<div class="sidebar-image hidden-xs hidden-sm">
		<a href="<?php echo $sb_img_link; ?>" title="<?php echo $sb_img_alt; ?>">
			<img src="<?php echo $sb_img_url; ?>" alt="<?php echo $sb_img_alt; ?>">
		</a>
	</div>
	
	<?php endif; ?>
	
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
