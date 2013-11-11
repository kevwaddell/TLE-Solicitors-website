<div class="rule"></div>
			
<section id="page-children" class="pages-list">

<?php foreach ( $children as $post ) : 
setup_postdata($post);
?>	

	<article id="list-item-<?php echo $post->post_name; ?>" class="page-list-item">
	
	<?php 
	$parent = get_page($post->post_parent);
	 ?>
	
	
		<h2<?php echo ($parent) ? ' class="'. $parent->post_name .'"':''; ?>><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('before=View &after= page'); ?>"><span class="txt"><?php the_title(); ?></span> <span class="icon"></span></a></h2>
		
		
		<div class="row">
		
			<div class="col-sm-8 col-md-8 col-lg-8">
				<div class="txt-wrap">
				<?php the_excerpt(); ?>
				</div>
			</div>
			
			<figure class="img"><?php holder( array( 'height' => '200', 'width' => '300', 'theme' => 'lite-gray' , 'text'=>'Featured image') ); ?></figure>
		
		</div>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View More Details</a>
		
</article>

<?php endforeach; ?>

<?php wp_reset_postdata();?>
			
</section>

<div class="rule"></div>
