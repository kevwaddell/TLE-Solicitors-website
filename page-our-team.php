<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
		
		<?php include (STYLESHEETPATH . '/_/inc/our-team/vars.php'); ?>
	
		<!-- FEATURED IMAGE START-->	
		<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
		<!-- FEATURED IMAGE END -->

		<!-- ARTICLE CONTENT START-->	
		<?php include (STYLESHEETPATH . '/_/inc/pages/page-article-content.php'); ?> 
		<!-- ARTICLE CONTENT END-->	
		
		<!-- OUR TEAM LIST MOBILE-->	
		<?php include (STYLESHEETPATH . '/_/inc/our-team/our-team-list.php'); ?> 
		<!-- OUR TEAM LIST MOBILE END-->	
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
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
