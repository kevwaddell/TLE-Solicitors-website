<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
	
	<article>
		<header class="page-header">
		<h1><span>
		<?php //single_month_title(' '); 
			
			if ( is_day() ) :
			printf( __( 'Daily Archives: %s', 'tlwsolicitors' ), get_the_date() );
			elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tlwsolicitors' ) ) );
			elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s', 'tlwsolicitors' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tlwsolicitors' ) ) );
			else :
			_e( 'Archives' );
			endif;
		?>
		</span></h1>
		</header>
	</article>
	
	<div class="rule-sml mag-bottom-20"></div>
	
	<?php if ( have_posts() ): ?>	
	
	<section id="news-posts-list" class="post-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	<?php while ( have_posts() ) : the_post(); ?>	
	
	<?php include (STYLESHEETPATH . '/_/inc/posts/post-list-vars.php'); ?> 	
			
		<?php if ($feat_img_id) { ?>
	
		<?php include (STYLESHEETPATH . '/_/inc/posts/post-list-item-with-image.php'); ?> 
		
	<?php } else { ?>
	
		<?php include (STYLESHEETPATH . '/_/inc/posts/post-list-item.php'); ?> 
	
	<?php } ?>
			
	<?php endwhile; ?>
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	</section>
	
	<?php else: ?>
	
	<div class="well no-posts-message">
		<h2>Sorry</h2>
		<p>There are no posts in "<?php single_month_title(); ?>" at the moment.</p>
	</div>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar(); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
