<!-- SOCIAL MEDIA SECTION -->
	
<section id="social-media" class="wide-panel">

	<span class="icon"></span>
	
	<h2>Media Updates</h2>
	
	<!-- Container start -->
	<div class="container">
		
		<!-- Row start -->
		<div class="row">
			
			<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 social-icon">
				<a href="https://twitter.com/TLWSolicitors" target="_blank" title="View Twitter page"><img src="<?php echo get_stylesheet_directory_uri() ?>/_/img/twitter-icon-lg.png" alt="Twitter"></a>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-2 hidden-xs">
					<?php tlw_twitter_feed(); ?>
			</div>		
				
			<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 social-icon">
				<a href="#" title="View Facebook page"><img src="<?php echo get_stylesheet_directory_uri() ?>/_/img/facebook-icon-lg.png" alt="Facebook"></a>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-2 hidden-xs">
				
				<div class="feed-wrap">
					<ul>
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
						
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					</ul>	
				</div>
				
			</div>
			
			<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 social-icon">
				<a href="#" target="_blank" title="View LinkedIn page"><img src="<?php echo get_stylesheet_directory_uri() ?>/_/img/linkedin-icon-lg.png" alt="LinkedIn"></a>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-2 hidden-xs">
				<div class="feed-wrap">
					<ul>
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
						
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					</ul>	
				</div>
			</div>
			
			<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 social-icon">
				<a href="#" target="_blank" title="View Google+ page"><img src="<?php echo get_stylesheet_directory_uri() ?>/_/img/google-icon-lg.png" alt="Google+"></a>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-2 hidden-xs">
				<div class="feed-wrap">
					<ul>
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
						
						<li>
							<a href="">Vellupta eceperiori con prem. Hendigenis auda sa velessunt.</a>
							<small>19 September 2013</small>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>
		<!-- Row end -->
		
	</div>
	<!-- Container end -->
	
	<?php if (is_front_page()) { ?>
	
	<?php 
	global $post;
	$news_posts_args = array(
	'post_type' => 'post',
	'posts_per_page'	=> 5,
	);
	
	$news_posts = get_posts($news_posts_args);
	$news_posts_counter = 0;
	 ?>
	
	<div class="panel-rule"></div>
	
	<!-- Container start -->
	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-2 col-md-1 social-icon news-icon">
				<a href="#" title="View News and Media page"><img src="<?php echo get_stylesheet_directory_uri() ?>/_/img/news-icon-lg.png" alt="News and Media"></a>
			</div>
			
			<div class="col-sm-10 col-md-11">
				
				<div id="news-carousel" class="carousel slide">
					
					<div class="carousel-inner">
					
					<?php foreach ($news_posts as $post) : 
					setup_postdata($post);
					$news_posts_counter++;	
					$post_date = get_the_date('l, F jS, Y');	
					?>
					
					<div class="quote item <?php echo ($news_posts_counter == 1) ? " active":""; ?>">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<time><?php echo $post_date; ?></time>
					</div>
					
					<?php endforeach; 
					wp_reset_postdata();	
					?>

					</div>
				
				</div>

			</div>
			
		</div>
		
	</div>
	<!-- Container end -->
	
	<?php } ?>
	
</section>

<!-- SOCIAL MEDIA SECTION END-->