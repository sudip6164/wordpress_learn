<?php

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    function load_css(){
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        /* Put this after bootstrap so main css is primary instead of bootstrap */
        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');
    }
    add_action('wp_enqueue_scripts', 'load_css');

    function load_js(){
        wp_enqueue_script('jquery');
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('bootstrap');
    }
    add_action('wp_enqueue_scripts', 'load_js');


    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
        )
    );

    add_image_size('blog-large', 800, 600, false);
    add_image_size('blog-small', 300, 200, true);