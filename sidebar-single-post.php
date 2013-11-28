<aside id="right-sidebar" class="sidebar">

	<?php 
	$topics_args = array(
	'type'                     => 'post',
	'taxonomy'                 => 'category'
	);  
	
	$topics = get_categories( $topics_args );
	//echo '<pre>';print_r($topics);echo '</pre>';
	$freephone_box_active = get_field('sb_freephone_active', 'option');
	 ?>
	 
	 <?php if ($freephone_box_active) { 
		 $freephone_box_title =  get_field('freephone_box_title', 'option');
		 $freephone_box_number = get_field('freephone_tel', 'option');
	 ?>
	 <div class="sidebar-freephone">
		<h3><?php echo $freephone_box_title; ?></h3>
		<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
	</div>
	 <?php } ?>
	 
	 <?php 
	$images = get_field("images");
	//echo '<pre>';print_r($images);echo '</pre>';
	if ($images) : ?>
	
		<?php foreach( $images as $img_item ): ?>
		
			<?php if ($img_item['acf_fc_layout'] == "gallery") : ?>
				 <div class="sidebar-block">
					 <h2>Gallery</h2>
					 <ul class="gallery-imgs">
			<?php 
			$gallery_imgs = $img_item['gl_imgs'];
			//echo '<pre>';print_r($gallery_imgs);echo '</pre>';
			?>
			
			<?php foreach( $gallery_imgs as $gallery_img ): 
			if ($gallery_img['alt']) {
			$alt = $gallery_img['alt'];
			}	
			?>
			<li>
				<a href="<?php echo $gallery_img['sizes']['medium']; ?>" rel="fancybox" class="zoomable">
					<img src="<?php echo $gallery_img['sizes']['gallery-thumb']; ?>" width="<?php echo $gallery_img['sizes']['gallery-thumb-width']; ?>" height="<?php echo $gallery_img['sizes']['gallery-thumb-height']; ?>"<?php echo ($alt) ? ' alt="'.$alt.'"': ''; ?>>
					<div class="zoom-icon"><span class="glyphicon glyphicon-zoom-in"></div>
				</a>
			</li>
			<?php endforeach; ?>
			
			</ul>
			<p class="zoom-btn-message"><span class="glyphicon glyphicon-zoom-in"></span> Click image to see enlarged.</p>
			</div>
			
			<?php endif;  ?>
		
		<?php endforeach; ?>
	
	<?php endif;  ?>
	 
	 <?php if ($topics) { ?>
	  <div class="sidebar-block hidden-xs hidden-sm">
	  <h2>Topics</h2>
	  <ul class="links">
			<?php foreach ($topics as $topic) { ?>
			<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			<?php } ?>
	 </ul>
	  </div>
	 <?php }  ?>

	<div class="hidden-xs hidden-sm">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?>
<?php endif; ?>
	</div>
	
</aside>