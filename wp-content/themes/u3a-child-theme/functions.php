<?php
// Enqueue parent and child theme styles
function u3a_enqueue_styles() {
    // Load parent style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load child style (after parent)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'u3a_enqueue_styles');

// Register navigation menus
function u3a_register_menus() {
    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'u3a-child-theme'),
        'footer-menu' => __('Footer Menu', 'u3a-child-theme'),
    ));
}
add_action('after_setup_theme', 'u3a_register_menus');

