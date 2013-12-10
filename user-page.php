<?php 
/*
Template Name: User page
*/
 ?>

<?php get_header('user'); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
	<div class="row">
	
		<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
		
		<?php the_content(); ?>
		
		</div>
		
	</div>
		
<?php endwhile; ?>
<?php endif; ?>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer('user'); ?>
