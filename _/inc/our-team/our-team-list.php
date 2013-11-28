<?php 

if ($post->post_name == "our-team") {
$slug = $post->post_name;
$id = $post->ID;
} else {
$slug = $team_page->post_name;
$id = $team_page->ID;
}

$team_args = array(
'post_type'	=> 'page',
'posts_per_page'	=> -1,
'post_parent'	=> $id,
'orderby'	=> 'menu_order',
'order'	=> 'ASC'
);
$team = get_posts($team_args);
 ?>

<div class="rule-sml mag-bottom-20"></div>

<section id="<?php echo $slug; ?>-list-section" class="child-btns visible-xs visible-sm">
	
<?php if ($team_page) { ?>
<h2><?php echo $team_page->post_title; ?></h2>
<?php }  ?>

	<div class="row"><!-- START ROW -->
	
	<?php foreach ($team as $profile) { ?>
	
		<div class="col-xs-12 col-sm-6">
	    		
			<a href="<?php echo get_permalink($profile->ID); ?>" class="btn btn-default btn-lg btn-block"><?php echo $profile->post_title; ?></a>
			
		</div>
		
	<?php } ?>
		    
	</div><!-- END ROW -->

</section>
