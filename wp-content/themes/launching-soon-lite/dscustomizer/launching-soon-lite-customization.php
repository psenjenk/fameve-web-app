<?php

function launching_soon_lite_customize_register($wp_customize) {
    
    // Register custom section types.
    $wp_customize->register_section_type( 'launching_soon_lite_Customize_Section_Pro' );

    // Register sections.
    $wp_customize->add_section( new launching_soon_lite_Customize_Section_Pro(
        $wp_customize,
        'theme_go_pro',
        array(
            'priority' => 1,
            'title'    => esc_html__( 'Launching Soon Pro', 'launching-soon-lite' ),
            'pro_text' => esc_html__( 'Upgrade To Pro', 'launching-soon-lite' ),
            'pro_url'  => 'https://www.featherthemes.com/themes/wordpress-theme-launching-soon/',
        )
    ) );

    $wp_customize->add_section('launching_soon_lite_header', array(
        'title'       => esc_html__(' Header Phone and email', 'launching-soon-lite'),
        'description' => '',
        'priority'    => 30,
    ));

    $wp_customize->add_section('launching_soon_lite_social', array(
        'title'       => esc_html__(' Social Link', 'launching-soon-lite'),
        'description' => '',
        'priority'    => 35,
    ));
    $wp_customize->add_section('launching_soon_lite_opening_date', array(
        'title'       => esc_html__('Opening Date', 'launching-soon-lite'),
        'description' => '',
        'priority'    => 35,
    ));
    
    

    $wp_customize->add_section('launching_soon_lite_footer', array(
        'title'       => esc_html__(' Footer', 'launching-soon-lite'),
        'description' => '',
        'priority'    => 37,
    ));


    //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_phone', array(
        'default'           => '',
        'sanitize_callback' => 'launching_soon_lite_sanitize_phone_number'
    ));

    $wp_customize->add_control('launching_soon_lite_phone', array(
        'label'   => esc_html__('Phone Number', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_header',
        'setting' => 'launching_soon_lite_phone',
        'type'    => 'text'
    ));

    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email'
    ));

    $wp_customize->add_control('launching_soon_lite_email', array(
        'label'   => esc_html__('Email', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_header',
        'setting' => 'launching_soon_lite_email',
        'type'    => 'email'
    ));

    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_fb', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('launching_soon_lite_fb', array(
        'label'   => esc_html__('Facebook', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_social',
        'setting' => 'launching_soon_lite_fb',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('launching_soon_lite_twitter', array(
        'label'   => esc_html__('Twitter', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_social',
        'setting' => 'launching_soon_lite_twitter',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('launching_soon_lite_youtube', array(
        'label'   => esc_html__('YouTube', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_social',
        'setting' => 'launching_soon_lite_youtube',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_in', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('launching_soon_lite_in', array(
        'label'   => esc_html__('Linkedin', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_social',
        'setting' => 'launching_soon_lite_in',
        'type'    => 'url'
    ));

    //  =============================
    //  = Text Input pininterest                =
    //  =============================
    $wp_customize->add_setting('launching_soon_lite_pin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('launching_soon_lite_pin', array(
        'label'   => esc_html__('Pinterest', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_social',
        'setting' => 'launching_soon_lite_pin',
        'type'    => 'url'
    ));
    
    
    //opening date start
     $wp_customize->add_control('launching_soon_lite_opening_date_show_hide', array(
        'type'    => 'checkbox',
        'section' => 'launching_soon_lite_opening_date', // Add a default or your own section
        'label'   => esc_html__('Clik to Hide this section', 'launching-soon-lite'),
    ));

    $wp_customize->add_setting('launching_soon_lite_opening_date_heading', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('launching_soon_lite_opening_date_heading', array(
        'label'   => esc_html__('Heading', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_opening_date',
        'setting' => 'launching_soon_lite_opening_date_heading',
        'type'    => 'text'
    ));

    $wp_customize->add_setting('launching_soon_lite_opening_date', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('launching_soon_lite_opening_date', array(
        'label'   => esc_html__('Opening Date', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_opening_date',
        'setting' => 'launching_soon_lite_opening_date',
        'type'    => 'text'
    ));

    $wp_customize->add_setting('launching_soon_lite_opening_month', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('launching_soon_lite_opening_month', array(
        'label'   => esc_html__('Opening Month ', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_opening_date',
        'setting' => 'launching_soon_lite_opening_month',
        'type'    => 'text'
    ));

    $wp_customize->add_setting('launching_soon_lite_opening_year', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('launching_soon_lite_opening_year', array(
        'label'   => esc_html__('Opening Year', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_opening_date',
        'setting' => 'launching_soon_lite_opening_year',
        'type'    => 'text'
    ));
    // opening date end

    

    //  =============================
    //  = Footer              =
    //  =============================
    // Footer design and developed
    $wp_customize->add_setting('launching_soon_lite_design', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control('launching_soon_lite_design', array(
        'label'   => esc_html__('Design and developed', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_footer',
        'setting' => 'launching_soon_lite_design',
        'type'    => 'textarea'
    ));
    // Footer copyright
    $wp_customize->add_setting('launching_soon_lite_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control('launching_soon_lite_copyright', array(
        'label'   => esc_html__('Copyright', 'launching-soon-lite'),
        'section' => 'launching_soon_lite_footer',
        'setting' => 'launching_soon_lite_copyright',
        'type'    => 'textarea'
    ));
}

add_action('customize_register', 'launching_soon_lite_customize_register');