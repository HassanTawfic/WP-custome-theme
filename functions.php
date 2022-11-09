<?php

//to add style files
function customTheme_register_styles()
{
    wp_enqueue_style( "styles", get_stylesheet_uri(),false);
}

//to add script files
function customTheme_register_scripts()
{

    wp_enqueue_script( "scripts", get_template_directory_uri()."/assets/js/main.js",true);
}

//to add a dynamic title
function customTheme_support(){
    add_theme_support('title-tag');
}

//hooks for functions to load
add_action( 'after_setup_theme', 'customTheme_support');
add_action( 'wp_enqueue_scripts', 'customTheme_register_styles');
add_action( 'wp_enqueue_scripts', 'customTheme_register_scripts');
?>