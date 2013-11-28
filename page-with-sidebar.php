<?php 
/*
Template Name: Page with right hand sidebar
*/
 ?>

<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
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
		
			<?php if ( $children ): ?>	
			
			<!-- CHILD PAGES START-->	
			
			<?php include (STYLESHEETPATH . '/_/inc/pages/page-children.php'); ?> 
			
			<!-- CHILD PAGES END-->	
						
			<?php endif; ?>
	
		<?php endwhile; ?>
		
	<?php if ( !$children ): ?>
	
	<?php 
	$nextPage = next_page_not_post('%title', 'cousins');
	$prevPage = previous_page_not_post('%title', 'cousins');
	?>
	
	<div class="rule-sml"></div>
	
		<?php if ( !empty($nextPage) || !empty($prevPage) ): ?>
	
	<div class="pages-links hidden-xs">
		<div class="prev"><?php echo $prevPage; ?></div>
		<div class="next"><?php echo $nextPage; ?></div>
	</div>
	
		<?php endif; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>
	
	<?php endif; ?>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
