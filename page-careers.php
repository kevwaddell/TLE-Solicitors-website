<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

	<div class="row">

		<div class="col-sm-8 col-md-8 col-lg-9">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article class="intro">
			<header class="page-header">
			<h1><span><?php the_title(); ?></span></h1>
			</header>
			
			<?php the_content(); ?>
		</article>
<?php endwhile; ?>

<div class="rule"></div>

<?php 
$careers = true;
 ?>

<?php if ($careers) { ?>

	<section id="careers-posts-list" class="post-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>

	<?php include (STYLESHEETPATH . '/_/inc/careers/careers-list-item.php'); ?> 
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	</section>

<?php } else { ?>
	
	<div class="well no-posts-message">
		<h2>Sorry</h2>
		<p>There are no positions open at the moment.</p>
	</div>
	
<?php } ?>

<?php endif; ?>

		</div>
		
		<div class="col-sm-4 col-md-4 col-lg-3">
	
			<?php get_sidebar('pages'); ?>
		
		</div>
	
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
