<?php
/**
 * Arquivo de funções do tema
 * @author Kelvin Santiago <kelvinsleonardo@gmail.com>
 */
/*register_nav_menu('menu-header', 'Menu do cabeçalho');*/


/**************************************
 *  MENUS
 **************************************/
// Register Custom Navigation Walker
// https://github.com/wp-bootstrap/wp-bootstrap-navwalker/tree/v4
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
register_nav_menus( array('menu-header' => __( 'Menu Cabeçalho', 'gotime-theme' ),) );


/**************************************
 *  SCRIPTS / CSS
 **************************************/
function theme_styles() {
    wp_enqueue_style( 'awesome-css', get_template_directory_uri().'/assets/css/font-awesome/font-awesome.min.css' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {
    wp_enqueue_script( 'tether-js', get_template_directory_uri().'/assets/js/tether.min.js', array('jquery'));
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'theme_js');

/**************************************
 *  REMOVE ADMIN BAR
 **************************************/
show_admin_bar(false);
