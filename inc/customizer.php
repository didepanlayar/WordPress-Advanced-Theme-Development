<?php

function wordev_customizer($wp_customize) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'         => 'Copyright Settings',
            'description'   => 'Copyright Settings'
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'                  => 'theme_mod',
            'default'               => 'Copyright &copy; - All Rights Reversed',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label'         => 'Copyright Information',
            'description'   => 'Please, type your copyright here.',
            'section'       => 'sec_copyright',
            'type'          => 'text'
        )
    );

    // 2 Hero Section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title'         => 'Hero Settings'
        )
    );

    // 2.1 Hero Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type'                  => 'theme_mod',
            'default'               => 'Please, add some title',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label'         => 'Hero Title',
            'description'   => 'Please, type your hero title here.',
            'section'       => 'sec_hero',
            'type'          => 'text'
        )
    );

    // 2.2 Hero Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type'                  => 'theme_mod',
            'default'               => 'Please, add some subtitle',
            'sanitize_callback'     => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label'         => 'Hero Subtitle',
            'description'   => 'Please, type your hero subtitle here.',
            'section'       => 'sec_hero',
            'type'          => 'textarea'
        )
    );

    // 2.3 Hero Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type'                  => 'theme_mod',
            'default'               => 'Learn More',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label'         => 'Hero Button Text',
            'description'   => 'Please, type your hero button text here.',
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
            'label'         => 'Hero Button Link',
            'description'   => 'Please, type your hero button link here.',
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
            'label'         => 'Hero Height',
            'description'   => 'Please, type your hero height here.',
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
            'label'     => 'Hero Image',
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        ))
    );
}

add_action('customize_register', 'wordev_customizer');