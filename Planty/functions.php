<?php

define('CHILD_THEME_PLANTY_VERSION', '1.0.0');

function child_enqueue_styles()
{

    wp_enqueue_style('planty-theme-css', get_stylesheet_directory_uri() . '/css/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all');
    wp_enqueue_style('planty-header-footer-css', get_stylesheet_directory_uri() . '/css/header-footer.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all');
    wp_enqueue_style('planty-nous-rencontrer-css', get_stylesheet_directory_uri() . '/css/nous-rencontrer-page.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all');
    wp_enqueue_style('planty-commander-css', get_stylesheet_directory_uri() . '/css/commander-page.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
