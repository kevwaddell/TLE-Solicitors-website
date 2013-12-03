<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

	<?php include (STYLESHEETPATH . '/_/inc/company-page/vars.php'); ?> 
	
			<!-- FEATURED IMAGE START-->	
			<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
			<!-- FEATURED IMAGE END -->

			<!-- ARTICLE CONTENT START-->	
			<?php include (STYLESHEETPATH . '/_/inc/pages/page-article-content.php'); ?> 
			<!-- ARTICLE CONTENT END-->	
		
			<!-- SUB PAGE DETAILS -->	
			<?php include (STYLESHEETPATH . '/_/inc/company-page/company-tabs.php'); ?> 
			<!-- SUB PAGE DETAILS END -->
			
			<!-- CORPORATE SOCIAL PAGE -->	
			<?php include (STYLESHEETPATH . '/_/inc/company-page/social-response.php'); ?> 
			<!-- CORPORATE SOCIAL PAGE END -->
		
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<!-- TEAM SLIDER START -->
<?php if ($team_page) { ?>

<?php include (STYLESHEETPATH . '/_/inc/our-team/our-team-slider.php'); ?>

<?php } ?>
<!-- TEAM SLIDER END -->

<?php get_footer(); ?>
