<?php get_header(); ?>

<?php $search_query = get_search_query(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">
	 
	<article class="page">
		<header class="page-header">
		<h1><span>Search Results</span></h1>
		<h2 class="grey-txt">You Searched for: "<?php echo $search_query; ?>"</h2>
		</header>
		
		<div class="search-form-wrap">
		<?php get_search_form(); ?>
		</div>
	</article>
	
	<div class="rule"></div>
	
	<?php if ( have_posts() ): ?>
	
	<section id="search-results-list" class="search-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>

	<?php while ( have_posts() ) : the_post(); 
	$excerpt = strip_tags(get_the_excerpt());	
	$url = get_permalink();
	?>		
			<article class="search-list-item">
			
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<p><?php echo $excerpt;?></p>
				
				<a href="<?php the_permalink(); ?>" title="Vie Article"><?php echo $url;?></a>
				
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
	
</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
