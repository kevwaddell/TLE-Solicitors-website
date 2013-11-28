<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article class="page">
			<header class="page-header">
			<h1><span><?php the_title(); ?></span></h1>
			</header>
			
			<div class="rule-sml mag-bottom-20"></div>
			
			<div class="intro center lrg">
			<?php the_content(); ?>	
			</div>
			
			<div class="search-form-wrap">
			<?php get_search_form(); ?>
			</div>
			
			<div class="rule"></div>
			
		</article>
<?php endwhile; ?>
<?php endif; ?>


<?php include (STYLESHEETPATH . '/_/inc/site-map/vars.php'); ?> 

<section id="site-map-lists">

	<div class="row">
	
		<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-left-col.php'); ?> 
	
		<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-middle-col.php'); ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-right-col.php'); ?>
			
	</div>

</section>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
