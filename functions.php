<?php

function get_enqueue() {
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), fileatime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'get_enqueue');

function wordev_config() {
    register_nav_menus(
        array(
            'wordev_main_menu'          => 'Main Menu',
            'wordev_footer_menu'        => 'Footer Menu'
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'         => 200,
        'height'        => 110,
        'flex-width'    => true,
        'flex-height'   => true
    ));
}
add_action('after_setup_theme', 'wordev_config', 0);

function wordev_sidebars() {
    register_sidebar(
        array(
            'id'                => 'sidebar-blog',
            'name'              => 'Blog Sidebar',
            'description'       => 'This is the Blog Sidebar. You can add yout widgets here.',
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-1',
            'name'              => 'Service 1',
            'description'       => 'First Service Area.',
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-2',
            'name'              => 'Service 2',
            'description'       => 'Second Service Area.',
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-3',
            'name'              => 'Service 3',
            'description'       => 'Third Service Area.',
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
}
add_action('widgets_init', 'wordev_sidebars');