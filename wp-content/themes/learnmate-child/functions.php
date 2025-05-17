<?php
add_action('wp_enqueue_scripts', 'learnmate_child_enqueue_assets');

function learnmate_child_enqueue_assets() {
    // Enqueue parent and child styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), wp_get_theme()->get('Version'));

    // Enqueue dark mode JS
    wp_enqueue_script(
        'dark-mode-toggle',
        get_stylesheet_directory_uri() . '/js/dark-mode-toggle.js',
        array(),
        null,
        true
    );
}
