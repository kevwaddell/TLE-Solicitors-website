<div class="rule"></div>
			
<section id="page-children" class="pages-list">

<?php foreach ( $children as $post ) : 
setup_postdata($post);
$child_content = get_field("content");
$child_images = get_field("images");

//print_r($child_images);echo '</pre>';
?>	

	<article id="list-item-<?php echo $post->post_name; ?>" class="page-list-item">
	
	<?php 
	$parent = get_page($post->post_parent);
	 ?>
	
	
		<h2<?php echo ($parent) ? ' class="'. $parent->post_name .'"':''; ?>><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('before=View &after= page'); ?>"><span class="txt"><?php the_title(); ?></span> <span class="icon"></span></a></h2>
		
		
		<div class="row">
		
			<div class="col-sm-8 col-md-8 col-lg-8">
				<div class="txt-wrap">
					<div class="txt-cell">
					<?php if ($child_content) : ?>
					<?php foreach( $child_content as $content_item ): ?>
	
					<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
		
	
					<p><?php echo $content_item['intro_txt']; ?></p>
		
					<?php endif;  ?>
		
					<?php endforeach; ?>
					
					<?php else: ?>
					
					<?php the_excerpt(); ?>
					
					<?php endif; ?>
					</div>
				</div>
			</div>
			
			<figure class="img">
			
			<?php if ($child_images) : ?>
				<?php foreach( $child_images as $img_item ): ?>
	
				<?php if ($img_item ['acf_fc_layout'] == "featured_img") : ?>
				
				<?php 
				$feat_img_id = $img_item['ft_img'];
				$feat_img_src = wp_get_attachment_image_src($feat_img_id,'page-list-img');
				$feat_img_url = $feat_img_src[0];
				$feat_img_w = $feat_img_src[1];
				$feat_img_h = $feat_img_src[2];
				
				$feat_img_caption = $img_item['ft_caption'];
				?>
				<img src="<?php echo $feat_img_url; ?>" width="<?php echo $feat_img_w; ?>" height="<?php echo $feat_img_h; ?>">
				<?php endif;  ?>
	
				<?php endforeach; ?>
				
				<?php else: ?>
				
				<?php holder( array( 'height' => '200', 'width' => '300', 'theme' => 'lite-gray' , 'text'=>'Featured image') ); ?>
				
			<?php endif; ?>
			
			</figure>
		
		</div>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View More Details</a>
		
</article>

<?php endforeach; ?>

<?php wp_reset_postdata();?>
			
</section>
