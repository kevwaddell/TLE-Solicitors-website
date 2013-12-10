<?php 
$images = get_field("images");

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
