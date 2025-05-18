<?php
function u3a_enqueue_styles() {
    wp_enqueue_style(
        'u3a-parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'u3a-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('u3a-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'u3a_enqueue_styles');
