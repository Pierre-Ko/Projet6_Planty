<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
function register_menu_for_child_theme() {
    register_nav_menu('header', 'Menu de l\'en-tête du thème enfant');
}
add_action('after_setup_theme', 'register_menu_for_child_theme');

function display_button_for_admin($items, $args) {
    if ($args->theme_location === 'primary') {
        if (current_user_can('administrator')) {
            $items .= '<a href="http://localhost/Projet6_Planty/Projet6_Planty/wp-admin/index.php" class="admin-button">Admin</a>';

        }
        return $items;
    }
    if ($args->theme_location==='footer_menu'){
        return $items;
    }

}
add_action('wp_nav_menu_items', 'display_button_for_admin', 10, 2);
?>