<?php

function ju_widgets()
{
    register_sidebar([
        'name'          =>  __('Side bar', 'Test'),
        'id'            =>  'ju_sidebar',
        'desctiption'   =>  __('Sidebar for the theme Test', 'Test'),
        'before_widget' =>  '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);
}
