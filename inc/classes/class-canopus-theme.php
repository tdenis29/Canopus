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
		$this->set_hooks();
	}

	protected function set_hooks() {
		// actions and filters
	}
}