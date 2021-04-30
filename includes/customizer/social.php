<?php

function ju_social_customizer_section($wp_customize)
{
    $wp_customize->add_section('ju_social_section', [
        'title'     =>  __('Test Social Settings', 'test'),
        'priority'  =>  30,
        'panel'     =>  'Test'
    ]);

    $wp_customize->add_setting('ju_facebook_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting('ju_twitter_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting('ju_instagram_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting('ju_email_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting('ju_phone_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_facebook_input',
            array(
                'label'          => __('Facebook Handle', 'test'),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_handle',
                'type'           => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_twitter_input',
            array(
                'label'          => __('Twitter Handle', 'test'),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_twitter_handle',
                'type'           => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_instagram_input',
            array(
                'label'          => __('Instagram Handle', 'test'),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_instagram_handle',
                'type'           => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_email_input',
            array(
                'label'          => __('Email', 'test'),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_email_handle',
                'type'           => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_phone_input',
            array(
                'label'          => __('Phone No.', 'test'),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_phone_handle',
                'type'           => 'text'
            )
        )
    );
}
