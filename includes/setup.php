<?php
function ju_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('starter-content', [
        'widgets'                   =>  [
            'ju_sidebar'            =>  [
                'text_business_info', 'search', 'text_about'
            ]
        ],
        'attachment'                =>  [
            'image-about'           =>  [
                'post_title'        =>  __('About', 'text'),
                'file'              =>  'assets/images/about/1.jpg'
            ]
        ],
        'posts'                     =>  [
            'home'                  => array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'about'                 => array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'contact'               => array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'blog'                  => array(
                'thumbnail'         =>  '{{image-about}}'
            ),
            'homepage-section'      => array(
                'thumbnail'         =>  '{{image-about}}'
            ),
        ],
        'options'                   =>  [
            'show_on_front'         =>  'page',
            'page_on_front'         =>  '{{home}}',
            'page_for_posts'        =>  '{{blog}}'
        ],

        'theme_mods'                =>  [
            'ju_facebook_handle'    => 'test',
            'ju_twitter_handle'     => 'test',
            'ju_instagram_handle'   => 'test',
            'ju_email_handle'       => 'test',
            'ju_phone_handle'       => 'test',
            'ju_header_show_search' => 'yes',
            'ju_header_show_cart'   => 'yes',
        ],

        'nav_menus'                 => [
            'primary'               =>  array(
                'name'              =>  __('Primary Menu', 'test'),
                'items'             =>  array(
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact'
                ),
            ),

            'secondary'             =>  array(
                'name'              =>  __('Secondary Menu', 'test'),
                'items'             =>  array(
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact'
                ),
            ),

        ]
    ]);

    
    register_nav_menu('primary', __('Primary Menu', 'Test'));
    register_nav_menu('secondary', __('Secondary Menu', 'Test'));

    if (function_exists('quads_register_ad')) {
        quads_register_ad(array('location' => 'test_header', 'description' => 'Test Header Position'));
    }
}
