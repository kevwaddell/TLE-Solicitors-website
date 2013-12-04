<?php 
$freephone_box_active = get_field('sb_freephone_active', 'option');
 ?>
 
 <?php 
 if ($freephone_box_active) { 
	 $freephone_box_title =  get_field('freephone_box_title', 'option');
	 $freephone_box_number = get_field('freephone_tel', 'option');
 ?>
 <div class="sidebar-freephone">
	<h3><?php echo $freephone_box_title; ?></h3>
	<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
</div>
<?php } ?>