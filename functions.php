<?php
/**
 * Theme Functions
 * @package Canpous
 */



if (! defined( 'CANOPUS_DIR_PATH' ) ) {
     define('CANOPUS_DIR_PATH', untrailingslashit(get_template_directory()));
 }
 if (! defined( 'CANOPUS_DIR_URI' ) ){
    define('CANOPUS_DIR_URI', untrailingslashit(get_template_directory_uri()));
 }
require_once CANOPUS_DIR_PATH . '/inc/helpers/autoloader.php';

\CANOPUS_THEME\Inc\CANOPUS_THEME::get_instance();


//MOVED INTO CLASS
// function Canopus_enqueue_scripts(){
//     //STYLES
//     wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), false, 'all');
//     wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.css', [], false, 'all');
//     // SCRIPTS
//     wp_enqueue_script('mainjs', get_template_directory_uri() . "/assets/main.js", [], filemtime( get_template_directory() . '/assets/main.js'), true);
//     wp_enqueue_script('bootstrap-js', get_template_directory_uri() . "/assets/src/library/js/bootstrap.min.js", ['jquery'], true, 'all');
// }

// add_action( 'wp_enqueue_scripts', 'Canopus_enqueue_scripts' );

// /Users/wddep-user/Local Sites/canopus/app/public/wp-content/themes/Canopus/assets/src/library/css