<?php

//add dynamic title tag
function sat_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sat_theme_support');

//add menu
function sat_menus()
{
    $locations = array(
        'primary' => "Header Menu",
        'footer' => 'Footer Menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'sat_menus');


//insert css style
function sat_theme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'sat-css',
        get_template_directory_uri() . "/style.css",
        array('sat-bootstrap'),
        $version,
        'all'
    );
    wp_enqueue_style('sat-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
}

add_action('wp_enqueue_scripts', 'sat_theme_register_styles');

//insert javascript
function sat_theme_register_scripts()
{
    wp_enqueue_script(
        'sat-bootstrap-js',
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        array(),
        '5.3.3',
        'all'
    );
    wp_enqueue_script(
        'sat-bootstrap-popper',
        "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js",
        array(),
        '2.11.8',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'sat_theme_register_scripts');


//customize wp-login page
//add link to logo
function wp_login_page_URL($url)
{
    $url = home_url('/');
    return $url;
}
add_filter('login_headerurl', 'wp_login_page_URL');

//change WP default logo to custom logo
function add_custom_login_page()
{
    echo
    '<style type="text/css"> 
    .login h1 a {
    background-image: url("http://localhost:8888/wp-content/uploads/2024/09/sat_logo.png");
    background-size: 84px;
    background-position: center top;
    background-repeat: no-repeat;
}
    body {
    background-color: #6610f2;
}
    </style>';
}
add_action('logo_head', 'add_custom_login_page');