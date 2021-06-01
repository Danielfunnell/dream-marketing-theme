<?php 

function dream_marketing_files() {
    wp_enqueue_script( 'font-awesome', "https://kit.fontawesome.com/71495a4f2a.js");
   // wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.js', 'jquery', 1, true);
   if( is_page( 10 ) ) {
        wp_enqueue_script('my-js', get_template_directory_uri() . '/src/js/slider.js', array('jquery'), '', true);
        wp_enqueue_script( 'custom-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );
    } 
    wp_enqueue_style( 'dream_marketing_main_styles', get_template_directory_uri() . './dist/css/app.css', '', 1, 'all');
    
}

add_action('wp_enqueue_scripts', 'dream_marketing_files');

add_theme_support('post-thumbnails');

?>