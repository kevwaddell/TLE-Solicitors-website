<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	
	$team_page = get_page_by_title("Our Team");
	
	$children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'exclude'		=> $team_page->ID,
	'order'			=> 'ASC',
	'posts_per_page'	=> -1
	);
	$children = get_posts($children_args);
	
	$images = get_field("images");
	$content = get_field("content");
	?>	
	
			<!-- FEATURED IMAGE START-->	
			<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
			<!-- FEATURED IMAGE END -->

			<!-- ARTICLE CONTENT START-->	
			<?php include (STYLESHEETPATH . '/_/inc/pages/page-article-content.php'); ?> 
			<!-- ARTICLE CONTENT END-->	
		
			<?php if ( $children ): ?>
			
			<?php 
			$tab_counter = 0;
			$tab_panel_counter = 0; 
			?>	
			<div class="rule-sml"></div>
			
			<div id="page-children-btns" class="child-btns visible-xs">
			
				<?php foreach ( $children as $child ) : 
				//echo '<pre>';print_r($child);echo '</pre>'; 
				?>	
					<a href="<?php echo get_permalink($child->ID); ?>" class="btn btn-default btn-lg btn-block"><?php echo $child->post_title; ?></a>
				<?php endforeach; ?>
				
					<a href="<?php echo get_permalink($team_page->ID); ?>" class="btn btn-default btn-lg btn-block"><?php echo $team_page->post_title; ?></a>

			</div>
			
			<section id="page-children-tabs" class="pages-tabs hidden-xs">
			
				<ul class="nav nav-tabs" id="company-pages-tabs">
				<?php foreach ( $children as $child ) : 
				$tab_counter++;
				//echo '<pre>';print_r($tab_counter);echo '</pre>';
				?>	
				
					<li<?php echo ($tab_counter == 1) ? ' class="active"': ''; ?>>
						<a href="#panel-<?php echo $child->post_name; ?>" data-toggle="tab"><?php echo $child->post_title; ?></a>
					</li>
				
				<?php endforeach; ?>
				
				</ul>
			
				<div class="tab-content">
		
				<?php foreach ( $children as $post ) : 
				setup_postdata($post);
				$tab_panel_counter++;
				?>	
				
					<div id="panel-<?php echo $post->post_name; ?>" class="tab-pane <?php echo ($tab_panel_counter == 1) ? 'active fade in': 'fade'; ?>">
						
						<div class="txt-wrap">
							<?php the_content(); ?>
						</div>
						
					</div>
				
				<?php endforeach; ?>
				
				</div>
			
			<?php wp_reset_postdata();?>
						
			</section>
			
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<!-- TEAM SLIDER START -->
<?php if ($team_page) { ?>

<?php include (STYLESHEETPATH . '/_/inc/our-team/our-team-slider.php'); ?>

<?php } ?>
<!-- TEAM SLIDER END -->

<?php get_footer(); ?>
