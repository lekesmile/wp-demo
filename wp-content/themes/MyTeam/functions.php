<?php

/**
 * Register Custom Navigation Walker
 */

require_once('class-wp-bootstrap-navwalker.php');

function register_navwalker(){
register_nav_menus( array(
   'primary' => __( 'Primary Menu' ),
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Register style sheet.
 */
function getCssStyle() {
   wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), false, 'all');
   wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css', array(), false, 'all');

}

// Register style sheet.
add_action('wp_enqueue_scripts', 'getCssStyle');

/**
 * Register Jquery.
 */
function getJq(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', true);

}
// Register style sheet.
add_action('wp_enqueue_scripts', 'getJq');


/**
 * Register bootstrap css.
 */
function getJs(){
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', true);
}
// Register bootstrap.
add_action('wp_enqueue_scripts', 'getJs');


// Excerpt Length Control
function set_excerpt_length(){
   return 45;
 }
 
 add_filter('excerpt_length', 'set_excerpt_length');

 

?>