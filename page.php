<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article class="page">
			<header class="page-header">
			<h1><?php the_title(); ?></h1>
			</header>
			
			<?php the_content(); ?>
			
		</article>
<?php endwhile; ?>
<?php endif; ?>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
