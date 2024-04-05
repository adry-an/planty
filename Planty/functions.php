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

add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && ($args->menu_id == 'ast-hf-menu-1' || $args->menu_id == 'ast-hf-mobile-menu')) {
        $items .= '<li class="menu-item"><a class="menu-link" href="https://localhost/planty/wp-admin/">Admin</a></li>';
    }
    return $items;
}
