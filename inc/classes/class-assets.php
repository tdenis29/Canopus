<?php
/**
 * Enque Theme Assets
 * 
 * @package Canopus
 */

namespace CANOPUS_THEME\Inc;

use CANOPUS_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;
    
  
    protected function __construct() {
		// load class.
		$this->set_hooks();
	}

	protected function set_hooks() {
		// actions and filters
		add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
		add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
	}
	public function register_styles(){
		wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( CANOPUS_DIR_PATH. '/style.css'), false, 'all');
		wp_enqueue_style('bootstrap-css', CANOPUS_DIR_URI . '/assets/src/library/css/bootstrap.css', [], false, 'all');
	}
	public function register_scripts(){
		wp_enqueue_script('mainjs', CANOPUS_DIR_URI . "/assets/main.js", [], filemtime( CANOPUS_DIR_PATH . '/assets/main.js'), true);
    	wp_enqueue_script('bootstrap-js', CANOPUS_DIR_URI . "/assets/src/library/js/bootstrap.min.js", ['jquery'], true, 'all');
	}
}
