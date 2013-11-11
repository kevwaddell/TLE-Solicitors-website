<?php 
/*
Template Name: Page with right hand sidebar
*/
 ?>

<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

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
	
	$feat_img_id = get_field('featured_img');
	$position = get_field('position');
	$email = get_field('email');
	?>	
	
			<?php if ($images) : ?>
			
			<?php foreach( $images as $img_item ): ?>
			
				<?php if ($sb_item['acf_fc_layout'] == "featured_img") : ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
				
				<?php endif;  ?>
				
			<?php endforeach; ?>
				
			<?php endif;  ?>
			
			<article class="page">
				
				<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				
				<?php if ($position) { ?>
				<div class="head-tag"><?php echo $position; ?></div>
				<?php } ?>
				
				<?php if ($email) { ?>
				<div class="head-email">
				<span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php echo $email; ?>" title="Email: <?php echo $post->post_title; ?>"><?php echo $email; ?></a></div>
				<?php } ?>
				
				</header>
				
				<div class="rule mag-bottom-20"></div>
				
				<div class="intro">
				<?php the_excerpt(); ?>
				</div>
				
				<?php the_content(); ?>
				
				<?php if (!$children) { ?>
				
				<div class="rule"></div>
				
				<?php }  ?>
				
			</article>
		
			<?php if ( $children ): ?>	
			
			<?php include (STYLESHEETPATH . '/_/inc/pages/page-children.php'); ?> 
						
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>
	
	<?php endif; ?>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
