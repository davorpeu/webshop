<?php
function webshop_register_styles(){
    wp_enqueue_style('webshop', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'webshop_register_styles');
?>