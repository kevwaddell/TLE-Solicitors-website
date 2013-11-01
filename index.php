<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">
	
	<?php 
	$blog_page_ID = get_option('page_for_posts');
	$blog_page = get_page($blog_page_ID);
	//echo '<pre>';print_r($blog_page);echo '</pre>';
	$blog_page_content = $blog_page->post_content;
	$content = apply_filters('the_content', $blog_page_content );
	 ?>
	 
	 <article>
		<header class="page-header">
		<h1><?php echo $blog_page->post_title; ?></h1>
		<time datetime="<?php echo date('Y-m-d', time()); ?>"><?php echo date('l - jS F - Y', time()); ?></time>
		</header>
		
		<?php if ($content) { ?>
		<div class="page-intro">
			<?php echo $content; ?>
		</div>
		<?php } ?>
	</article>
	
	<div class="rule"></div>
	
	<?php if ( have_posts() ): ?>
	
	<section id="news-posts-list" class="post-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>

	
	<?php while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	$img_id = true;
	 ?>
	
	<?php if ($img_id) { ?>
	
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
		<p>There is <?php echo $blog_page->post_title; ?> no at the moment.</p>
	</div>
	<?php endif; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar(); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php include (STYLESHEETPATH . '/_/inc/global/social-panel.php'); ?> 

<?php get_footer(); ?>