<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 

	$children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'order'			=> 'ASC',
	'posts_per_page'	=> -1,
	);
	$children = get_posts($children_args);
	
	$feat_img_id = true;
	?>	
			<?php if ($feat_img_id) { ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
				
			<?php }  ?>
			
			<article class="page intro">
				
				<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				</header>
				
				<?php the_content(); ?>
			</article>
		
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
			
			?>	
			
			<article id="list-item-<?php echo $post->post_name; ?>" class="page-list-item">
							
				<h2 class="<?php echo $post->post_name; ?>"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('before=View &after= page'); ?>"><span class="txt"><?php the_title(); ?></span> <span class="icon"></span></a></h2>
				
				<div class="row">
				
					<div class="col-sm-8 col-md-8 col-lg-8">
						<div class="txt-wrap">
						<?php the_excerpt(); ?>
						</div>
					</div>
					
					<figure class="img"><?php holder( array( 'height' => '200', 'width' => '300', 'theme' => 'lite-gray' , 'text'=>'Featured image') ); ?></figure>
				
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
			
			<div class="rule"></div>
			
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
