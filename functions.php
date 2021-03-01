<?php
// add_action('wp_head', function () {
//     die('hello there');
// }, 50);

function mytheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Menu header');
    register_nav_menu('footer', 'footer');
};

function register_assets()
{
    wp_register_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', ['style']);
    wp_register_style('style', get_stylesheet_uri());
    wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], null, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    // [] = no dependency, version false, in_footer = true
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);


    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('bootstrap-js');
}

function mytheme_title_separator()
{
    return '|';
}

function mytheme_document_title_part($title)
{
    unset($title['tag-title']);
    return $title;
}

add_action('after_setup_theme', 'mytheme_support');
add_action('wp_enqueue_scripts', 'register_assets');
add_filter('document_title_separator', 'mytheme_title_separator');
add_filter('document_title_parts', 'mytheme_document_title_part');
