<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
			<article class="page intro">
							
				<header class="page-header">
				<h1><?php the_title(); ?></h1>
				</header>
				
				<?php the_content(); ?>
				
				<div class="rule"></div>
				
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter Content') ) : ?>
	
				<?php endif; ?>
				
				<div class="rule"></div>
			
				<div class="sharing-links">
				<?php echo do_shortcode('[shareaholic app="share_buttons" id="410103"]'); ?>
				</div>
				
			</article>
	
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