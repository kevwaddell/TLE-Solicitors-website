<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
		
		<?php 
		$page = get_page_by_title('Downloads');
		//echo '<pre>';print_r($page);echo '</pre>';
		$page_content_raw = $page->post_content;
		$page_content = apply_filters('the_content', $page_content_raw );
		
		$images = get_field("images", $page->ID);
		$content = get_field("content", $page->ID);
		global $is_iphone;
		?>	
		
		<!-- FEATURED IMAGE START-->	
		<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
		<!-- FEATURED IMAGE END -->
	
		<!-- CONTENT START-->	
		<?php include (STYLESHEETPATH . '/_/inc/downloads/downloads-archive-content.php'); ?> 
		<!-- CONTENT END -->
		
<?php include (STYLESHEETPATH . '/_/inc/downloads/downloads-archive-vars.php'); ?> 
		 
<?php if ( have_posts() ): ?>	
		 
		<section id="downloads-list">
		
			<div class="pagination">
				<?php wp_pagenavi(); ?>
			</div>
		 
		 <div class="row">
		 
		 <?php while ( have_posts() ) : the_post(); ?>	
		 
		 	<?php include (STYLESHEETPATH . '/_/inc/downloads/downloads-grid-item.php'); ?> 
		 	
		 	<?php endwhile; ?>
		 			 
		 </div>
		 
		 <div class="pagination">
			<?php wp_pagenavi(); ?>
		</div>
		
		</section>
		 
<?php else: ?>
		 
		<div class="well no-posts-message">
			<h2>Sorry</h2>
			<p>There are no <?php the_title(); ?> no at the moment.</p>
		</div>

<?php endif; ?>

		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
			<?php get_sidebar('pages'); ?>
		
		</div>
	
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
