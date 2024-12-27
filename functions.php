<?php

function followfreda_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'followfreda_theme_support');

function followfreda_menus()
{
    $locations = ['primary' => "Desktop Primary Left Sidebar", 'footer' => "Footer Menu Items"];

    register_nav_menus($locations);
}
add_action('init', 'followfreda_menus');


function followFreda_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('followfreda-style', get_template_directory_uri() . "/style.css", array('followfreda-bootstrap'), $version, 'all');
    wp_enqueue_style('followfreda-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", [], '5.3.3', 'all');

    wp_enqueue_style('followfreda-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", [], '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'followFreda_register_styles');



function followFreda_register_scripts()
{

    wp_enqueue_script('followfreda-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);

    wp_enqueue_script('followfreda-js', get_template_directory_uri() . "/assets/js/main.js", [], '1.0', true);


}

add_action('wp_enqueue_scripts', 'followFreda_register_scripts');


function followfreda_widget_areas()
{

    register_sidebar([
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'Sidebar Widget Area'
    ]);

    register_sidebar([
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'description' => 'Footer Widget Area'
    ]);
}

add_action('widgets_init', 'followfreda_widget_areas');