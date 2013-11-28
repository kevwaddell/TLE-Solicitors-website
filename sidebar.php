<aside id="right-sidebar" class="sidebar">

	<?php 
	$topics_args = array(
	'type'                     => 'post',
	'taxonomy'                 => 'category'
	);  
	
	$topics = get_categories( $topics_args );
	//echo '<pre>';print_r($topics);echo '</pre>';
	$freephone_box_active = get_field('sb_freephone_active', 'option');
	 ?>
	 
	 <?php if ($freephone_box_active) { 
		 $freephone_box_title =  get_field('freephone_box_title', 'option');
		 $freephone_box_number = get_field('freephone_tel', 'option');
	 ?>
	 <div class="sidebar-freephone">
		<h3><?php echo $freephone_box_title; ?></h3>
		<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
	</div>
	 <?php } ?>
	 
	 <?php if ($topics) { ?>
	  <div class="sidebar-block hidden-xs hidden-sm">
	  <h2>Topics</h2>
	  <ul class="links">
			<?php foreach ($topics as $topic) { ?>
			<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			<?php } ?>
	 </ul>
	  </div>
	 <?php }  ?>

	<div class="hidden-xs hidden-sm">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?>
<?php endif; ?>
	</div>
	
</aside>