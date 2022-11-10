<?php

//to add style files
function customTheme_register_styles()
{
    wp_enqueue_style( "styles", get_stylesheet_uri(),false);
    wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css");
}

//to add script files
function customTheme_register_scripts()
{

    wp_enqueue_script( "scripts", get_template_directory_uri()."/assets/js/main.js",array(),true);
    wp_enqueue_script( 'bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", true);
}

//to add a dynamic title
function customTheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

//creating menus
function customTheme_menus(){

    register_nav_menus($locations= array(
        'Main menu' =>'Primary navigation menu',
        'Footer menu' => 'Footer navigation menu',
    ) );

}

//hooks for functions to load
add_action( 'init', 'customTheme_menus');
add_action( 'after_setup_theme', 'customTheme_support');
add_action( 'wp_enqueue_scripts', 'customTheme_register_styles');
add_action( 'wp_enqueue_scripts', 'customTheme_register_scripts');
?>