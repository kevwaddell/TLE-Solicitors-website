<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

	<?php 
	$name = get_field('client_name');
	$location = get_field('location');
	
	?>	
	
		<?php if ($feat_img_id) { ?>
				
			<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
				
		<?php }  ?>

	
		<article class="post">
					
			<header class="page-header">
				<h1><span><?php echo $name; ?></span></h1>
				<div class="head-tag"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $location; ?></div>
			</header>
			
			<div class="rule mag-bottom-20"></div>
			
			<div class="testimonial">
				<?php the_content(); ?>
			</div>
			
			<footer>

			<?php edit_post_link( 'Edit post', '<span class="edit-link btn btn-default">', '</span>' ); ?>	
			</footer>
			
			<div class="rule"></div>
			
		</article>
<?php endwhile; ?>

		<div class="post-links">
			<?php previous_post_link('%link', '%title', TRUE); ?>  
			<?php next_post_link('%link', '%title', TRUE); ?>  
		</div>
<?php endif; ?>

	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
