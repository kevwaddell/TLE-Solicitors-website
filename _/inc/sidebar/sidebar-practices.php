<?php if ($practices && $post->ID != $practices_page->ID) { ?>
		
<div class="sidebar-block hidden-xs hidden-sm">

	<h2 class="link"><a href="<?php echo get_permalink($practices_page->ID); ?>"><?php echo $practices_page->post_title; ?></a></h2>

	<ul class="links">
		<?php foreach ($practices as $practice) { ?>
		<li<?php echo ($practice->ID == $post->post_parent || $practice->ID == $post->ID)? ' class="current-parent"':''; ?>><a href="<?php echo get_permalink($practice->ID); ?>"><?php echo $practice->post_title; ?></a></li>
		<?php } ?>
	</ul>
</div>

<?php } ?>
