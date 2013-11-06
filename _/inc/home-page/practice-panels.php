<section id="panels">
	
	<div class="container">
		<div class="row">
		
		<?php foreach ($panels as $post) : 
		setup_postdata($post);
		$postid = get_the_ID();
		
		$children_args = array(
			'orderby' => 'menu_order',
			'order'	=> 'ASC',
			'post_parent' => $postid,
			'post_type' => 'page',
			'post_status' => 'publish'
		);
		
		$children = get_children($children_args);
		?>
			<div id="<?php echo $post->post_name; ?>-panel" class="panel-outer">
				
				<div class="panel-wrap">
				
					<span id="<?php echo $post->post_name; ?>-icon" class="icon"></span>
					
					<a href="<?php the_permalink(); ?>" class="<?php echo $post->post_name; ?>-link parent-link" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					
					<button class="panel-list-btn btn btn-default btn-block list-closed">
						View Practice Areas 
						<span class="down"></span>
						<span class="up"></span>
					</button>
					
					<?php if ($children) { ?>
					<div class="panel-list-wrap list-closed">
						<ul>
							<?php foreach($children as $child): ?>
							
							<li><a href="<?php echo get_permalink($child->ID); ?>" title="<?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
							
							<?php endforeach;  ?>
						</ul>
					</div>
					<?php } ?>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="claim-btn btn btn-default btn-lg btn-block">Find out more <span></span></a>
					
				</div>
				
			</div>
		<?php 
		endforeach; 
		wp_reset_postdata(); 
		?>
		</div>
	</div>
	
	</section>
