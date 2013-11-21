<?php if ($images) : ?>
			
	<?php foreach( $images as $img_item ): ?>
	
		<?php if ($sb_item['acf_fc_layout'] == "featured_img") : ?>

<?php 
$feat_img_id = $img_item['ft_img'];
$feat_img_src = wp_get_attachment_image_src($feat_img_id,'featured-img-slim');
$feat_img_url = $feat_img_src[0];
$feat_img_w = $feat_img_src[1];
$feat_img_h = $feat_img_src[2];

$feat_img_caption = $img_item['ft_caption'];
?>
 
			<?php if ($feat_img_id) : ?>

<figure class="feat-img slim-img">
				
	<div class="img">
		<img src="<?php echo $feat_img_url; ?>" width="<?php echo $feat_img_w; ?>" height="<?php echo $feat_img_h; ?>">
	</div>
	
	<div class="corner-top"></div>
	<div class="corner-bottom"></div>

</figure>

			<?php if ($feat_img_caption) { ?>
<div class="caption"><?php echo $feat_img_caption; ?></div>
			<?php } ?>

			<?php endif;  ?>

		<?php endif;  ?>
				
	<?php endforeach; ?>
				
<?php endif;  ?>