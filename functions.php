<?php

require get_template_directory() . '/inc/customizer.php';

function get_enqueue() {
    // Development
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), fileatime(get_template_directory() . '/style.css'), 'all');
    // Production
    // wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'get_enqueue');

function wordev_config() {

    $textdomain = 'wordev';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wordev_main_menu'          => esc_html__('Main Menu', 'wordev'),
            'wordev_footer_menu'        => esc_html__('Footer Menu', 'wordev')
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
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'wordev_config', 0);

function wordev_register_block_styles() {
    wp_register_style('wordev-block-style', get_template_directory_uri() . '/style-block.css');
    register_block_style(
        'core/quote',
        array(
            'name'          => 'red-quote',
            'label'         => 'Red Quote',
            'is_default'    => true,
            // 'inline_style'  => '.wp-block-quote.is-style-red-quote {border-left: 7px solid #FF0000; background: #F9F3F3; padding: 10px 20px}',
            'style_handle'  => 'wordev-block-style'
        )
    );
}
add_action('init', 'wordev_register_block_styles');

function wordev_sidebars() {
    register_sidebar(
        array(
            'id'                => 'sidebar-blog',
            'name'              => esc_html__('Blog Sidebar', 'wordev'),
            'description'       => esc_html__('This is the Blog Sidebar. You can add yout widgets here.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-1',
            'name'              => esc_html__('Service 1', 'wordev'),
            'description'       => esc_html__('First Service Area.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-2',
            'name'              => esc_html__('Service 2', 'wordev'),
            'description'       => esc_html__('Second Service Area.', 'wordev'),
            'before_widget'     => '<div class="widget-wrapper">',
            'after_widget'      => '</div>',
            'before_title'      => '<h4 class="widget-title">',
            'afetr_title'       => '</4>'
        )
    );
    register_sidebar(
        array(
            'id'                => 'services-3',
            'name'              => esc_html__('Service 3', 'wordev'),
            'description'       => esc_html__('Third Service Area.', 'wordev'),
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