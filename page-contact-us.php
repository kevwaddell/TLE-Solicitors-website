<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9 col-sm-push-4 col-md-push-4 col-lg-push-3">
	
	<?php 
	$children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'order'			=> 'ASC',
	'posts_per_page'	=> -1
	);
	$children = get_posts($children_args);
	
	
	$feat_img_id = true;
	?>	
			<article class="page intro">
				
				<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				</header>
				
				<?php the_content(); ?>
				
				<div id="contact-form">
				
				<?php gravity_form(2, true, true, false, null, true); ?>
				
				</div>
				
			</article>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3 col-sm-pull-8 col-md-pull-8 col-lg-pull-9">
		<aside class="sidebar">
		<?php $freephone_box_active = get_field('sb_freephone_active', 'option'); ?>
	 
		 <?php if ($freephone_box_active) { 
			 $freephone_box_title =  get_field('freephone_box_title', 'option');
			 $freephone_box_number = get_field('freephone_tel', 'option');
		 ?>
		 <div class="sidebar-freephone">
			<h3><?php echo $freephone_box_title; ?></h3>
			<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
		</div>
		 <?php } ?>
		 
		 <div class="sidebar-map">
		 <?php echo do_shortcode("[mapbox layers='kevwaddell.g6jnb7mp' api='' options='' lat='55.00900332166974' lon='-1.4895915985107422' z='11' width='262' height='262']"); ?>
		 </div>
			
			<?php if ( get_field("sidebar") ) : ?>
	
			<?php foreach( get_field("sidebar", $post->ID) as $sb_item ): ?>

				<?php if ($sb_item['acf_fc_layout'] == "sb_panel") : 	?>
				
				<div class="sidebar-block">
					<h2><?php echo $sb_item['panel_title']; ?></h2>
				
					<div class="block-content">
					<?php echo $sb_item['panel_content']; ?>
					</div>
					
				</div>
				
				<?php endif; ?>			
					
			<?php endforeach; ?>
			
			<?php endif; ?>	
						
		</aside>
		
	</div>

</div>

<?php endwhile; ?>

<?php endif; ?>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
