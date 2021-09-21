<?php
/**
 * Add Menus
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * 
 * In your theme’s functions.php, you need to register your menu(s). This sets the name that will appear at Appearance -> Menus.
 * First of all, you will use register_nav_menus() to register the menus
 * @package Canopus
 */

namespace CANOPUS_THEME\Inc;

use CANOPUS_THEME\Inc\Traits\Singleton;

class  Menus {
    use Singleton;
    
  
    protected function __construct() {
		// load class.
		$this->set_hooks();
	}

	protected function set_hooks() {
		// actions and filters
		add_action( 'init', [$this, 'register_my_menus'] );
	}
    public function register_my_menus(){
        register_nav_menus([
            'canopus-header-menu' => esc_html__('Header Menu', 'Canopus'),
            'canopus-footer-menu' => esc_html__('Footer Menu', 'Canopus'),
        ]);
    }
    public function get_menu_id( $location ){
        $locations = get_nav_menu_locations();
        $menu_id = $locations[$location];
        return ! empty( $menu_id ) ? $menu_id : '';
    }
    public function get_child_menu_items( $menu_array, $parent_id) {
        $child_menus = [];
        if (! empty( $menu_array) && is_array( $menu_array ) ) {
            foreach ($menu_array as $menu) {
                if (intval( $menu -> menu_item_parent ) === $parent_id) {
                   array_push($child_menus, $menu);
                }
            }
        }
        return $child_menus;
    }
}
