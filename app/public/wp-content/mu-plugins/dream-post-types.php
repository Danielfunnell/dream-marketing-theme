<?php 
function dream_post_types() {
    register_post_type('testimonial', array(
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'singular_name' => 'Testimonial'
        )
    ));
}

add_action('init', 'dream_post_types');
?>

