<?php

add_action('gform_field_value_area', 'update_area');

function update_area($value){
    global $post;
    
    if(empty($post)) {
        return $value;
     }
     
    return $post->post_title;
    
    return $value;
}

?>