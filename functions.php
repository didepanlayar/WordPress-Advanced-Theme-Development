<?php

function get_enqueue() {
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), fileatime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'get_enqueue');

register_nav_menus(
    array(
        'wordev_main_menu'          => 'Main Menu',
        'wordev_footer_menu'        => 'Footer Menu'
    )
);