<?php 

$topics_args = array(
	'orderby'            => 'meta_value',
	'hierarchical'       => 1,
	'title_li'           => "",
	'show_option_none'   => __('No Subjects'),
	'echo'               => 0,
	'taxonomy'           => 'category'
	);
	
$topics = wp_list_categories($topics_args);

if ($topics) { ?>

<div class="sidebar-block hidden-xs hidden-sm">
<h2>Topics</h2>
<ul class="links">
	<?php echo $topics; ?>
</ul>
</div>

<?php }  ?>