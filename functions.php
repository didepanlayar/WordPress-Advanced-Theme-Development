<?php

require get_template_directory() . '/inc/customizer.php';

function get_enqueue() {
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), fileatime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'get_enqueue');

function wordev_config() {

    $textdomain = 'wordev';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wordev_main_menu'          => __('Main Menu', 'wordev'),
            'wordev_footer_menu'        => __('Footer Menu', 'wordev')
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
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wordev_config', 0);

function wordev_sidebars() {
    register_sidebar(
        array(
            'id'                => 'sidebar-blog',
            'name'              => __('Blog Sidebar', 'wordev'),
            'description'       => __('This is the Blog Sidebar. You can add yout widgets here.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-1',
            'name'              => __('Service 1', 'wordev'),
            'description'       => __('First Service Area.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-2',
            'name'              => __('Service 2', 'wordev'),
            'description'       => __('Second Service Area.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-3',
            'name'              => __('Service 3', 'wordev'),
            'description'       => __('Third Service Area.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
}
add_action('widgets_init', 'wordev_sidebars');

if(! function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_action');
    }
}