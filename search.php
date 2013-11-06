<?php get_header(); ?>

<?php $search_query = get_search_query(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">
	 
	 <article>
		<header class="page-header">
		<h1><span>>Search Results</span></h1>
		<h2>You Searched for: "<?php echo $search_query; ?>"</h2>
		</header>
	</article>
	
	<div class="rule"></div>
	
	<?php if ( have_posts() ): ?>
	
	<section id="search-results-list" class="search-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>

	<?php while ( have_posts() ) : the_post(); ?>		
			<article class="post-list-item">
			
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt(); ?>
				
			</article>
	<?php endwhile; ?>
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	</section>
	
	<?php else: ?>
	<div class="well no-posts-message">
		<h2>Sorry</h2>
		<p>There is <?php echo $blog_page->post_title; ?> no at the moment.</p>
	</div>
	<?php endif; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
