<?php 
//CHANGE POST ICONS
add_action( 'admin_head', 'change_cpt_icons');
        	
function change_cpt_icons() {
    global $post_type;
    $temp_directory = get_bloginfo('stylesheet_directory');
    
?>
<style>

<?php if ($post_type == 'tlw_testimonial_cpt') : ?>
#icon-edit { background: transparent url(<?php echo $temp_directory; ?>/_/img/feedback-icon.png) no-repeat center center; }		
<?php endif; ?>
	
</style>

<?php } ?>