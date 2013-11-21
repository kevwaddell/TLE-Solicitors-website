<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article class="page">
			<header class="page-header">
			<h1><span><?php the_title(); ?></span></h1>
			</header>
			
			<div class="rule-sml mag-bottom-20"></div>
			
			<div class="intro center lrg">
			<?php the_content(); ?>
			</div>
			
			<div class="rule"></div>
			
		</article>
<?php endwhile; ?>
<?php endif; ?>


<?php include (STYLESHEETPATH . '/_/inc/site-map/vars.php'); ?> 

<section id="site-map-lists">

	<div class="row">
	
		<div class="col-sm-4 col-md-4">
				
		<h2><a href="<?php echo get_permalink($practices_page->ID); ?>"><?php echo $practices_page->post_title; ?></a></h2>
		
		<?php foreach ($practices as $practice) { ?>
		
		<?php 
		$practice_args = array(
		'post_type'		=> 'page',
		'orderby'		=> 'menu_order',
		'post_parent'	=> $practice->ID,
		'order'			=> 'ASC'
		);
		
		$practice_children = get_posts($practice_args);
		 ?>
		
			<div class="list-block">
				<h3><a href="<?php echo get_permalink($practice->ID); ?>"><?php echo $practice->post_title; ?></a></h3>
				
			<?php if ($practice_children) { ?>
				<ul>
				
				<?php foreach ($practice_children as $practice_child) { ?>
				<li><a href="<?php echo get_permalink($practice_child->ID); ?>"><?php echo $practice_child->post_title; ?></a></li>
				<?php } ?>
				
			<?php } ?>
			
				</ul>
			
			</div>
		
		<?php } ?>
						
		</div>
	
		<div class="col-sm-4 col-md-4">
		
		<h2><a href="<?php echo get_permalink($news_page_id); ?>"><?php echo $news_page->post_title; ?></a></h2>
		
		<?php if ($topics_nopractice) { ?>
			<div class="list-block">
				<ul>
				<?php if ($media_info_page) { ?>
		
					<li><a href="<?php echo get_permalink($media_info_page->ID); ?>"><?php echo $media_info_page->post_title; ?></a></li>
		
				<?php } ?>
			<?php foreach ($topics_nopractice as $topic) { ?>

					<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
				
			<?php } ?>
				</ul>
			</div>
				
		<?php } ?>

		
		<?php if ($topics) { ?>
						
		<h2><?php echo $news_page->post_title; ?>: Topics</h2>
		
				<div class="list-block">
				
					<ul>
						<?php foreach ($topics as $topic) { ?>
						<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
						<?php } ?>
					</ul>
					
				</div>
				
		<?php } ?>
		
		<h2><?php echo $news_page->post_title; ?>: Subjects</h2>
		
		<?php if ( function_exists('wp_tag_cloud') ) : ?>
			<div class="list-block">
				<?php wp_tag_cloud('smallest=14&largest=14&unit=px&format=list'); ?>
			</div>
		
		<?php endif; ?>
		
		</div>
		
		<div class="col-sm-4 col-md-4">
				
		<h2><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></h2>
		
		<?php if ($company_pages) { ?>
			<div class="list-block">

				<ul>
				
					<?php foreach ($company_pages as $company_page) { ?>
					<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
					<?php } ?>
				
				</ul>
				
			</div>
		<?php } ?>
					
		<h2>Rescources</h2>
		
		<?php if ($rescources_pages) { ?>
			<div class="list-block">

				<ul>
				
					<?php foreach ($rescources_pages as $rescources_page) { ?>
					<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
					<?php } ?>
				
				</ul>
				
			</div>
		<?php } ?>
		
		<h2>Legal</h2>
		
		<?php if ($legal_pages) { ?>
			<div class="list-block">

				<ul>
				
					<?php foreach ($legal_pages as $legal_page) { ?>
										 
					<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
					<?php } ?>
				
				</ul>
				
			</div>
		<?php } ?>
			
		</div>
	
	</div>

</section>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
