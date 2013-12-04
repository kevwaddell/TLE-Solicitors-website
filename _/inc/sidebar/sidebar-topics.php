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