<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	

	<?php 
	$post_date = get_the_date();
	$topics = get_the_category_list(', ');
	$subjects = get_the_tag_list('<strong>Subjects:</strong> ', ', ');
	
	//echo '<pre>';print_r($subjects);echo '</pre>';
	?>	
	
		<?php if ($feat_img_id) { ?>
			
		<figure>
			<div class="img">
				<?php holder( array( 'height' => '350', 'width' => '850', 'theme' => 'lite-gray' , 'text'=>'Featured image') ); ?>
				<div class="inner-shadow"></div>
			</div>
		</figure>

		<?php }  ?>
	
		<article class="post">
					
			<header class="page-header">
			<h1><?php the_title(); ?></h1>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><span class="glyphicon glyphicon-calendar"></span> <?php echo $post_date; ?> <?php the_time(); ?></time>
			</header>
			
			<?php the_content(); ?>
			
			<footer>
			
			<?php if ($topics) { ?>
			<p><strong>Topics:</strong> <?php echo $topics; ?></p>
			<?php }  ?>
			
			<?php if ($subjects) { ?>
			<p><?php echo $subjects; ?></p>
			<?php }  ?>

			<?php edit_post_link( 'Edit post', '<span class="edit-link btn btn-default">', '</span>' ); ?>	
			</footer>
			
			<div class="rule"></div>
			
			<div class="sharing-links">
				<?php echo do_shortcode('[shareaholic app="share_buttons" id="410103"]'); ?>
			</div>
			
		</article>
<?php endwhile; ?>

		<div class="post-links">
			<?php previous_post_link('%link', '%title', TRUE); ?>  
			<?php next_post_link('%link', '%title', TRUE); ?>  
		</div>
<?php endif; ?>

	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar(); ?>
		
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
