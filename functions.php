<?php 

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

add_theme_support('custom-background');


function FF_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '2.4');
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


function story_post() {

    $args = array(

        'labels' => array(

            'name' => 'Story',
            'singular_name' => 'Story'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('story', $args);

}

add_action('init', 'story_post');

function FF7_char_post() {

    $args = array(

        'labels' => array(

            'name' => 'FF7 Characters',
            'singular_name' => 'FF7 character'

        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('FF7characters', $args);

}

add_action('init', 'FF7_char_post');

function FF8_char_post() {

    $args = array(

        'labels' => array(

            'name' => 'FF8 Characters',
            'singular_name' => 'FF8 character'
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('FF8characters', $args);

}

add_action('init', 'FF8_char_post');

function FF9_char_post() {

    $args = array(

        'labels' => array(

            'name' => 'FF9 Characters',
            'singular_name' => 'FF9 character'
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('FF9characters', $args);

}

add_action('init', 'FF9_char_post');

function FF13_char_post() {

    $args = array(

        'labels' => array(

            'name' => 'FF13 Characters',
            'singular_name' => 'FF13 character'
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('FF13characters', $args);

}

add_action('init', 'FF13_char_post');

function FF15_char_post() {

    $args = array(

        'labels' => array(

            'name' => 'FF15 Characters',
            'singular_name' => 'FF15 character'
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('FF15characters', $args);

}

add_action('init', 'FF15_char_post');



function gameplay_post() {

    $args = array(

        'labels' => array(

            'name' => 'Gameplay',
            'singular_name' => 'Gameplay'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('gamepley', $args);

}

add_action('init', 'gameplay_post');


?>