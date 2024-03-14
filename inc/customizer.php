<?php

function wordev_customizer($wp_customize) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'         => __('Copyright Settings', 'wordev'),
            'description'   => __('Copyright Settings', 'wordev')
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'                  => 'theme_mod',
            'default'               => __('Copyright &copy; - All Rights Reversed', 'wordev'),
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label'         => __('Copyright Information', 'wordev'),
            'description'   => __('Please, type your copyright here.', 'wordev'),
            'section'       => 'sec_copyright',
            'type'          => 'text'
        )
    );

    // 2 Hero Section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title'         => __('Hero Settings', 'wordev')
        )
    );

    // 2.1 Hero Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type'                  => 'theme_mod',
            'default'               => __('Please, add some title', 'wordev'),
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label'         => __('Hero Title', 'wordev'),
            'description'   => __('Please, type your hero title here.', 'wordev'),
            'section'       => 'sec_hero',
            'type'          => 'text'
        )
    );

    // 2.2 Hero Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type'                  => 'theme_mod',
            'default'               => __('Please, add some subtitle', 'wordev'),
            'sanitize_callback'     => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label'         => __('Hero Subtitle', 'wordev'),
            'description'   => __('Please, type your hero subtitle here.', 'wordev'),
            'section'       => 'sec_hero',
            'type'          => 'textarea'
        )
    );

    // 2.3 Hero Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type'                  => 'theme_mod',
            'default'               => __('Learn More', 'wordev'),
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label'         => __('Hero Button Text', 'wordev'),
            'description'   => __('Please, type your hero button text here.', 'wordev'),
            'section'       => 'sec_hero',
            'type'          => 'textarea'
        )
    );

    // 2.4 Hero Button Link
    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type'                  => 'theme_mod',
            'default'               => '#',
            'sanitize_callback'     => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label'         => __('Hero Button Link', 'wordev'),
            'description'   => __('Please, type your hero button link here.', 'wordev'),
            'section'       => 'sec_hero',
            'type'          => 'url'
        )
    );

    // 2.5 Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type'                  => 'theme_mod',
            'default'               => 800,
            'sanitize_callback'     => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label'         => __('Hero Height', 'wordev'),
            'description'   => __('Please, type your hero height here.', 'wordev'),
            'section'       => 'sec_hero',
            'type'          => 'number'
        )
    );

    // 2.6 Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type'                  => 'theme_mod',
            'sanitize_callback'     => 'absint'
        )
    );

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'set_hero_background',
        array(
            'label'     => __('Hero Image', 'wordev'),
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        ))
    );

    // 3 Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => __('News Settings', 'wordev')
        )
    );
    
    // 3.1 Posts Per Page
    $wp_customize->add_setting( 
        'set_per_page',
        array(
            'type'              => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( 
        'set_per_page', 
        array(
            'label'         => __('Number of Posts', 'wordev'),
            'description'   => __('Number of posts to be displayed.', 'wordev'),
            'section'       => 'sec_blog',
            'type'          => 'number'
        )
    );

    // 3.2 Post Categories to Include
    $wp_customize->add_setting( 
        'set_category_include', 
        array(
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control( 
        'set_category_include', 
        array(
            'label'         => __('Categories Included', 'wordev'),
            'description'   => __('Included category IDs, separated by commas.', 'wordev'),
            'section'       => 'sec_blog',
            'type'          => 'text'
        )
    );

    // 3.3 Post Categories to Exclude
    $wp_customize->add_setting( 
        'set_category_exclude', 
        array(
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control( 
        'set_category_exclude', 
        array(
            'label'         => __('Categories Excluded', 'wordev'),
            'description'   => __('Excluded category IDs, separated by commas.', 'wordev'),
            'section'       => 'sec_blog',
            'type'          => 'text'
        )
    );
}

add_action('customize_register', 'wordev_customizer');