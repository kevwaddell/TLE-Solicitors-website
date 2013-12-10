<?php if ($related_pages && $parent->ID != $practices_page->ID && $post->ID != $practices_page->ID) { ?>
		
<div class="sidebar-block hidden-xs hidden-sm">

<?php if ($parent) { ?>
	<h2 class="link"><a href="<?php echo get_permalink($parent->ID); ?>"><?php echo $parent->post_title; ?></a></h2>
<?php } else { ?>
	<h2 class="link"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>
<?php }  ?>

	<ul class="links">
		<?php foreach ($related_pages as $page) { ?>
		<li<?php echo ($page->ID == $post->ID)? ' class="current-page"':''; ?>><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
		<?php } ?>
	</ul>
</div>
<?php } ?>
