<?php

function ju_misc_customizer_section($wp_customize)
{
    $wp_customize->add_section('ju_misc_section', [
        'title'     =>  __('Test Misc Settings', 'test'),
        'priority'  =>  30,
        'panel'     =>  'Test'
    ]);

    $wp_customize->add_setting('ju_header_show_search', [
        'default'   =>  'yes',
        'transport' =>  'postMessage'
    ]);

    $wp_customize->add_setting('ju_header_show_cart', [
        'default'   =>  'yes',
        'transport' =>  'postMessage'
    ]);

    $wp_customize->add_setting('ju_footer_copyright_text', [
        'default'   =>  'Copyright &copy; 2021 All Right Reserved.'
    ]);

    $wp_customize->add_setting('ju_footer_tos_page', [
        'default'   =>  0
    ]);

    $wp_customize->add_setting('ju_footer_privacy_page', [
        'default'   =>  0
    ]);

    $wp_customize->add_setting('ju_read_more_color', [
        'default'   =>  '#1ABC9C'
    ]);

    $wp_customize->add_setting('ju_report_file', [
        'default'   =>  ''
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_header_show_search_input',
            array(
                'label'          => __('Show Search Button in Header', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_header_show_search',
                'type'           => 'checkbox',
                'choices'        => [
                    'yes'       =>  'Yes'
                ]
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_header_show_cart_input',
            array(
                'label'          => __('Show Cart Button in Header', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_header_show_cart',
                'type'           => 'checkbox',
                'choices'        => [
                    'yes'       =>  'Yes'
                ]
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_copyright_text_input',
            array(
                'label'          => __('Copyright text', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_footer_copyright_text',
                'type'           => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_tos_page_input',
            array(
                'label'          => __('Terms of Conditions Page', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_footer_tos_page',
                'type'           => 'dropdown-pages'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_privacy_page_input',
            array(
                'label'          => __('Privacy policy Page', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_footer_privacy_page',
                'type'           => 'dropdown-pages'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ju_read_more_color_input',
            array(
                'label'          => __('Read more link color', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_read_more_color',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'ju_report_file_input',
            array(
                'label'          => __('File Report', 'test'),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_report_file',
            )
        )
    );
}
