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

add_action('init', 'register_menus');

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);

add_theme_support( 'custom-background', $defaults );


function story_post() {

    $args = array(

        'labels' => array(

            'name' => 'Story',
            'singular_name' => 'Story',

        ),

        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('story', $args);

}

add_action('init', 'story_post');

function character_post() {

    $args = array(

        'labels' => array(

            'name' => 'Characters',
            'singular_name' => 'Character',

        ),

        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('characters', $args);

}

add_action('init', 'character_post');

function gameplay_post() {

    $args = array(

        'labels' => array(

            'name' => 'Gameplay',
            'singular_name' => 'Gameplay',

        ),

        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('gamepley', $args);

}

add_action('init', 'gameplay_post');


?>