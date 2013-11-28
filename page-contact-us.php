<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-md-push-4 col-lg-push-3">
	
	<?php 
	$location = get_field('map_location');
	$map_marker = get_stylesheet_directory_uri()."/_/img/map-marker.png";
	//echo '<pre>';print_r($map_marker);echo '</pre>';
	?>	
	
	<?php if ($location) { ?>

	<?php include (STYLESHEETPATH . '/_/inc/contact-us/map.php'); ?>
	
	<?php } ?>
	
		<article class="page">
			
			<header class="page-header" style="margin-top: 20px;">
			<h1><span><?php the_title(); ?></span></h1>
			</header>
			
			<div class="intro center lrg">
			<?php the_content(); ?>
			</div>
			
		</article>
		
		<div id="contact-form">
			
		<?php gravity_form(2, true, true, false, null, true); ?>
			
		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-md-pull-8 col-lg-pull-9">
	
	<?php get_sidebar('contact-us'); ?>
			
	</div>

</div>

<?php endwhile; ?>

<?php endif; ?>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
