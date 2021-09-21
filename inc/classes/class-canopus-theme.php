<?php
/**
 * Bootstraps the Theme.
 *
 * @package Canopus
 */

namespace CANOPUS_THEME\Inc;

use CANOPUS_THEME\Inc\Traits\Singleton;

class CANOPUS_THEME {
	use Singleton;

	protected function __construct() {
		// load class.
		Assets::get_instance();
		Menus::get_instance();
		$this->set_hooks();

	}
	protected function set_hooks() {
		// actions and filters
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
	}
	public function setup_theme(){
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', [
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => [ 'site-title', 'site-description' ],
			'unlink-homepage-logo' => true,
		] );

		add_theme_support( 'custom-background', [ 
			'default-color' => '0000ff',
    		// 'default-image' => CANOPUS_DIR_URI . '/images/wapuu.jpg',
			'default-repeat' => 'no-repeat',
		 ] );
		 add_theme_support( 'post-thumbnails', );

		 add_theme_support( 'customize-selective-refresh-widgets' );

		 add_theme_support( 'automatic-feed-links' );
		 
		 add_theme_support( 'html5', [
			  'comment-list', 
			  'comment-form', 
			  'search-form', 
			  'gallery', 
			  'caption', 
			  'style', 
			  'script',
		  ] );
		  /**
		   * Core blocks include default structural styles. 
		   * These are loaded in both the editor and the front end by default. 
		   * An example of these styles is the CSS that powers the columns block. 
		   * Without these rules, the block would result in a broken layout containing no columns at all.
           *The block editor allows themes to opt-in to slightly more opinionated styles for the front end. 
		   *An example of these styles is the default color bar to the left of blockquotes. 
		   *If you’d like to use these opinionated styles in your theme, add theme support for wp-block-styles:
		   */
		  add_theme_support( 'wp-block-styles' );
		  /**
		   * 
		   * Some blocks such as the image block have the possibility to define a “wide” or “full” alignment by adding the corresponding classname to the block’s wrapper ( alignwide or alignfull ). 
		   * A theme can opt-in for this feature by calling:
		   */
		  add_theme_support( 'align-wide' );
		  //Content Width of and max width 
		  global $content_width;
		  if ( ! isset( $content_width ) ) {
			  $content_width = 1240;
		  }

	}
	
}