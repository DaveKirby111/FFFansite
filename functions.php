<?php 

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


function FF_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'FF_styles');

function register_menus() {
    register_nav_menus(

        array(
            'header-menu' => 'Header Nav',
            'side-menu' => 'Side Nav',
            'footer-menu' => 'Footer Nav'
        )

    );
}




?>