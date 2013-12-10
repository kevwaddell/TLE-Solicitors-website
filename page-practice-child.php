<?php 
/*
Template Name: Page Practice Child
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
	
	<?php 
	$children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'order'			=> 'ASC',
	'posts_per_page'	=> -1
	);
	$children = get_posts($children_args);
	
	
	$images = get_field("images");
	$content = get_field("content");
	
	$position = get_field('position');
	$email = get_field('email');
	?>	
	
			<!-- FEATURED IMAGE START-->	
			<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
			<!-- FEATURED IMAGE END -->
			
			
			<!-- ARTICLE CONTENT START-->	
			<?php include (STYLESHEETPATH . '/_/inc/pages/page-article-content.php'); ?> 
			<!-- ARTICLE CONTENT END-->	
			
		<?php endwhile; ?>
		
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php if ( $children ): ?>	
<!-- PRACTICES SLIDER START -->

<?php include (STYLESHEETPATH . '/_/inc/practice-areas/practice-areas-slider.php'); ?>

<!-- PRACTICES SLIDER END -->
<?php endif; ?>

<?php endif; ?>

<?php get_footer(); ?>
