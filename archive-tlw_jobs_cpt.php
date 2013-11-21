<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

	<div class="row">

		<div class="col-sm-8 col-md-8 col-lg-9">

<?php 
$page = get_page_by_title('Careers');
//echo '<pre>';print_r($page);echo '</pre>';
$page_content_raw = $page->post_content;
$page_content = apply_filters('the_content', $page_content_raw );

$images = get_field("images", $page->ID);
$content = get_field("content", $page->ID);
?>	

	<!-- FEATURED IMAGE START-->	
    <?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
    <!-- FEATURED IMAGE END -->
	
		<article class="page">
		
			<header class="page-header">
			<h1><span><?php echo $page->post_title; ?></span></h1>
			</header>
			
			<div class="rule mag-bottom-20"></div>
			
			<?php if ($content) : ?>

			<?php foreach( $content as $content_item ): ?>
	
			<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
		
			<div class="intro center lrg">
				<p><?php echo $content_item['intro_txt']; ?></p>
			</div>
		
			<?php endif;  ?>
		
			<?php endforeach; ?>
			
		<div class="rule-sml"></div>
		
		<?php endif; ?>
			
		<?php echo $page_content; ?>
		
		</article>

<div class="rule"></div>

<?php 
$post_type = get_query_var( 'post_type' ); 
$posts_per_page = get_query_var('posts_per_page'); 
$paged = get_query_var( 'paged' ); 
$today_raw = time();
$today = date("Ymd", $today_raw);
//echo '<pre>';print_r($today);echo '</pre>';

$args = array(
	'post_type' => $post_type,
	'posts_per_page' => $posts_per_page,
	'paged' => $paged,
	'meta_query' => array(
		array(
			'key' => 'end_date',
			'value' => $today,
			'compare' => '>',
			'type'	=> 'DATE'
		)

	)
);
//echo '<pre>';print_r($wp_query);echo '</pre>';
$wp_query = new WP_Query( $args );
 ?>

			<?php if ( have_posts() ): ?>	
			<section id="careers-posts-list" class="post-list">
				
				<div class="pagination">
					<?php wp_pagenavi(); ?>
				</div>
				
			<?php while ( have_posts() ) : the_post(); ?>	
			
				<?php include (STYLESHEETPATH . '/_/inc/careers/careers-list-item.php'); ?> 
				
			<?php endwhile; ?>
				
				<div class="pagination">
					<?php wp_pagenavi(); ?>
				</div>
				
			</section>

		<?php else: ?>
			<div class="well no-posts-message">
				<h2>Sorry</h2>
				<p>There are no positions open at the moment.</p>
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
