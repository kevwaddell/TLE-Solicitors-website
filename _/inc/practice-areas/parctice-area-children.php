<?php if ( $children ): ?>	
			
	<div class="rule"></div>
	
	<section id="<?php echo $post->post_name; ?>-page-children" class="pages-list">

	<?php foreach ( $children as $post ) : 
	setup_postdata($post);
	
	$grand_children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'order'			=> 'ASC',
	'posts_per_page'	=> -1
	);
	
	$grand_children = get_posts($grand_children_args);
	
	$child_content = get_field("content");
	$child_images = get_field("images");
	
	?>	
	
	<article id="list-item-<?php echo $post->post_name; ?>" class="page-list-item">
					
		<h2 class="<?php echo $post->post_name; ?>"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('before=View &after= page'); ?>"><span class="txt"><?php the_title(); ?></span> <span class="icon"></span></a></h2>
		
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
		
		<?php if ($grand_children) { ?>
		
		<button class="inactive-btn list-btn"><span class="glyphicon glyphicon-sort-by-attributes-alt"></span><span class="glyphicon glyphicon-remove"></span> View Practises</button>
		
			<ul class="closed">
				<?php foreach ($grand_children as $grand_child) { ?>
				<li><a href="<?php echo get_permalink($grand_child->ID); ?>"><?php echo $grand_child->post_title; ?></a></li>
				<?php } ?>	
			</ul>
		
		<?php } ?>
		
	</article>
	
	<?php endforeach; ?>
	
	<?php wp_reset_postdata();?>
	
	</section>
	
<?php endif; ?>
