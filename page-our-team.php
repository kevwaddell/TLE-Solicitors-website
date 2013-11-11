<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

	
	<?php 
	$people = array( 
		array('post_name' => 'peter-mckenna', 'post_title' => 'Peter McKenna'),  
		array('post_name' => 'john-burn', 'post_title' => 'John Burn') ,
		array('post_name' => 'sarah-spruce', 'post_title' => 'Sarah Spruce'),
		array('post_name' => 'lorraine whitney', 'post_title' => 'Lorraine Whitney'),
		array('post_name' => 'susan-wood', 'post_title' => 'Susan Wood'),
		array('post_name' => 'tony-wight', 'post_title' => 'Tony Wight'), 
		array('post_name' => 'claire-redhead', 'post_title' => 'Claire Redhead')
	);
	
	//echo '<pre>';print_r($people);echo '</pre>';
	
	$feat_img_id = true;
	?>	
			
			<?php if ($feat_img_id) { ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
				
			<?php }  ?>

			<article class="page<?php echo ( $children ) ? ' intro':''; ?>">
							
				<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				</header>
				
				<?php the_content(); ?>
				
			</article>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<!-- TEAM SLIDER START -->

<?php include (STYLESHEETPATH . '/_/inc/our-team/our-team-slider.php'); ?>

<!-- TEAM SLIDER END -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
